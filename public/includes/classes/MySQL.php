<?php
// MySQL class (based on MySQL Improved)
class lmtv_MySQL extends mysqli {
  // https://www.php.net/manual/en/class.mysqli.php


  /*********************
  ***** Properties *****
  *********************/

  public $server;
  public $database;
  public $username;


  /************************
  ***** Magic Methods *****
  ************************/

  // constructor
  function __construct($server, $username, $password, $database, $fatal = true) {
    @parent::__construct($server, $username, $password, $database);

    if (!$this->connect_errno) {
      $this->server = $server;
      $this->database = $database;
      $this->username = $username;
    }
    else
      $this->errors('Database connection failed', null, $fatal);
  }

  // destructor
  function __destruct() {
    parent::close();
  }


  /******************
  ***** Methods *****
  ******************/

  // combine parameters into query, preventing SQL injection
  public function combineParameters($query, $parameters) {
    // convert parameters to an array
    if (!is_null($parameters)) {
      if (!is_array($parameters))
        $parameters = [$parameters];

      $parameterCount = count($parameters);
    }
    else $parameterCount = 0;

    // combine parameters
    $sql = str_replace('?', '``PARAMETER``', $query);
    for ($parameterIndex = 0; $parameterIndex < $parameterCount; $parameterIndex++) {
      if (is_null($parameters[$parameterIndex]))
        $replace = 'NULL';
      elseif ($value == 'NOW()')
        $replace = $parameters[$parameterIndex];
      else
        $replace = '\'' . $this->real_escape_string($parameters[$parameterIndex]) . '\'';

      $sql = preg_replace('#``PARAMETER``#', str_replace('\\', '\\\\', $replace), $sql, 1);
    }

    //echo new bs_pre($query);
    //echo core_dump($parameters, 'Parameters');
    //echo new bs_pre($sql);

    return $sql;
  }

  // convert key/value pair to SQL parts and parameters
  protected function keyValue($data, &$parts, &$parameters, $insert = false) {
    // prepare data
    foreach($data as $key => $value) {
      // column
      if (!$insert)
        $part = '`' . $key . '` = ';
      else
        $part = '';

      // field
      $part .= '?';
      $parameters[] = $value;

      $parts[] = $part;
    }
  }

  // show latest errors
  public function errors($title, $query, $parameters) {
    $output = [];

    $output['error'] = $title ? $title : 'MySQL errors';
    if ($query) {
      $output['query'] = $query;

      if ($parameters)
        $output['parameters'] = $parameters;
    }

    // convert errors to an array
    if ($this->connect_errno) {
      $output['errors'] = [[
        'errno' => $this->connect_errno,
        'error' => $this->connect_error,
      ]];
    }
    else {
      $errors = $this->error_list;
      if ($errors)
        $output['errors'] = $errors;
    }

    // send error response
    header('Content-Type: application/json');
    header('HTTP/1.0 500 Internal Server Error');
    die(json_encode($output));
  }

  // retrieve single row from resultset as an associative array
  public function row($query, $parameters = null)
  { return $this->rows($query, $parameters, 1); }

  // retrieve resultset as an array of associative arrays
  public function rows($query, $parameters = null, $limit = null) {
    // is connected
    if (!$this->connect_errno) {
      $output = [];

      // combine query and parameters to create final SQL statement
      $sql = $this->combineParameters($query, $parameters);
      //echo new bs_pre($sql);

      // query succeeded, convert resultset to an array of associative arrays
      if ($this->real_query($sql) !== false) {
        $fetched = 0;

        $result = $this->use_result();

        // fetch rows from the database
        while (
          (is_null($limit) || $fetched++ < $limit)  // hasn't fetched more than the specified limit, if any
          && ($row = $result->fetch_assoc())  // fetch row from the database
        ) {
          // convert timestamps to DateTime()
          foreach ($row as $key => $value) {
            if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}( [0-9]{2}:[0-9]{2}:[0-9]{2})?$/', $value))
              $row[$key] = new DateTime($value);
          }

          $output[] = $row;
        }

        // close statement
        $result->close();

        // single row request shouldn't be nested array
        if ($limit == 1)
          $output = $output[0];
      }
      // query failed
      else
        $this->errors('Database query error', $query, $parameters);
    }
    // isn't connected
    else
      $output = false;

    return $output;
  }

  // execute SQL query, returning result object or success boolean
  public function execute($query, $parameters = []) {
    // combine query and parameters to create final SQL statement
    $sql = $this->combineParameters($query, $parameters);
    //echo core_dump($sql, 'SQL Execute Query');

    // push changes back to the database
    $output = $this->query($sql);

    // query failed
    if ($output === false)
      $this->errors('Database query failed', $query, $parameters);

    return $output;
  }

  // insert record, returning AUTO_INCREMENT ID or success boolean
  public function insert($table, $data) {
    // split out column names
    $columnData = [];
    $parameters = [];
    $this->keyValue($data, $columnData, $parameters, true);

    // build query
    $query =
      'INSERT INTO `' . $table . '`' . PHP_EOL
      . '(`' . implode('`, `', array_keys($data)) . '`)' . PHP_EOL
      . 'VALUES (' . PHP_EOL
      . implode(',' . PHP_EOL, $columnData) . PHP_EOL
      . ');'
    ;
    //echo core_dump($query, 'SQL insert query');

    // execute query
    $output = $this->execute($query, $parameters);

    // get AUTO_INCREMENT ID, if one exists
    if ($output !== false) {
      if($this->insert_id)
        $output = $this->insert_id;
    }

    return $output;
  }

  // update record(s), returning affected rows or success boolean
  public function update($table, $data, $filter) {
    // prepare data
    $columnData = [];
    $filterData = [];
    $parameters = [];

    // build query
    $this->keyValue($data, $columnData, $parameters);
    $query =
      'UPDATE `' . $table . '`' . PHP_EOL
      . 'SET' . PHP_EOL
      . implode(',' . PHP_EOL, $columnData)
    ;
    if ($filter) {
      if (is_array($filter)) {
        $this->keyValue($filter, $filterData, $parameters);
        $query .=
          PHP_EOL . 'WHERE' . PHP_EOL
          . implode(PHP_EOL . 'AND ', $filterData)
        ;
      }
      else
        $query .= PHP_EOL . $filter;
    }
    $query .= ';';
    //echo core_dump($query, 'SQL update query');

    // execute query
    $output = $this->execute($query, $parameters);

    // get number of rows updated
    if ($output !== false)
      $output = $this->affected_rows;

    return $output;
  }

  // delete record(s), returning affected rows or success boolean
  public function delete($table, $filter) {
    $filterData = [];
    $parameters = [];

    // build query
    $query = 'DELETE FROM `' . $table . '`';
    if ($filter) {
      if (is_array($filter)) {
        $this->keyValue($filter, $filterData, $parameters);
        $query .=
          PHP_EOL . 'WHERE' . PHP_EOL
          . implode(PHP_EOL . 'AND ', $filterData)
        ;
      }
      else
        $query .= PHP_EOL . $filter;
    }
    $query .= ';';

    // execute query
    $output = $this->execute($query, $parameters);

    // get number of rows updated
    if ($output !== false)
      $output = $this->affected_rows;

    return $output;
  }
}
