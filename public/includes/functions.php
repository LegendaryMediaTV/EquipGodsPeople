<?php
function egp_bb($text) {
  return preg_replace_callback_array(
    [
      // HTML
      '/\[b\](.+?)\[\/b\]/' => function ($match) {
        return new BS_Bold(null, $match[1]);
      },
      '/\[i\](.+?)\[\/i\]/' => function ($match) {
        return new BS_Italics(null, $match[1]);
      },
      '/\[sub\](.+?)\[\/sub\]/' => function ($match) {
        return new BS_Subscript(null, $match[1]);
      },
      '/\[sup\](.+?)\[\/sup\]/' => function ($match) {
        return new BS_Superscript(null, $match[1]);
      },

      // Bible link
      '/\[bible to="([^"]+)" \/\]/' => function ($match) {
        return new BS_Link([ 'to' => '/bible-search' ], $match[1]);
      },

      // languages
      '/\[greek\](.+?)\[\/greek\]/' => function ($match) {
        return new BS_Greek(null, $match[1]);
      },
      '/\[hebrew\](.+?)\[\/hebrew\]/' => function ($match) {
        return new BS_Hebrew(null, $match[1]);
      },
    ],
    $text
  );
}

function egp_languages() {
  global $db;

  $sql =
    "SELECT Document" .
    "\nFROM Documents" .
    "\nWHERE Collection = 'lexicon-languages'" .
    "\nORDER BY Sequence";
  $rows = $db->rows($sql);

  $rows = array_map(
    function ($row) {
      global $db;

      $language = json_decode($row['Document']);

      $sql =
        "SELECT Document" .
        "\nFROM Documents" .
        "\nWHERE Collection = 'language-letters' AND _id LIKE '{$language->_id}-%'" .
        "\nORDER BY Sequence";
      $letters = $db->rows($sql);

      $language->letters = [];
      foreach ($letters as $letter)
        $language->letters[] = json_decode($letter['Document']);

      return $language;
    },
    $rows
  );

  return $rows;
}

// retrieve page metadata for the given URL
function page_metadata($url) {
  $output = false;

  // tokenize the URL
  $tokens =
    $url !== '/'
      ? explode('/', substr($url, 1, strlen($url) - 1))
      : [];
  $tokens = array_reverse($tokens);

  // loop through tokens, looking for a page
  foreach($tokens as $token) {
    if ($token) {
      $output = page_metadataViaToken($token);
      if ($output) break;
    }
  }

  // return resultant page, defaulting to the home page
  return $output ?: page_metadataViaToken('');
}

// retrieve page metadata for the given URL token
function page_metadataViaToken($token) {
  $output = false;

  switch ($token) {
    case '':
      $output = [ 'url' => '/', 'source' => '/index.php' ];

      break;

    case 'bible-reading-plans':
      $output = [
        '_id' => 'bible-reading-plans',
        'title' => 'Bible Reading Plans',
        'subtitle' => 'time-based plans for reading the Bible',
        'variant' => 'BibleReadingPlans',
        'url' => '/bible-reading-plans',
        'sequence' => 'Bible Reading Plans',
        'source' => '/bible-reading-plans/index.php',
      ];

      break;

    case 'classic-works':
      $output = [
        '_id' => 'classic-works',
        'title' => 'Classic Works',
        'subtitle' => 'books by various Christian authors',
        'variant' => 'ClassicWorks',
        'url' => '/classic-works',
        'sequence' => 'Classic Works',
        'source' => '/classic-works/index.php',
      ];

      break;

    case 'lexicons-word-study':
      $output = [
        '_id' => 'lexicons-word-study',
        'title' => 'Lexicons (Word Study)',
        'subtitle' => 'explore the original languages of the Bible',
        'variant' => 'WordStudy',
        'url' => '/lexicons-word-study',
        'sequence' => 'Lexicons Word Study',
        'source' => '/lexicons-word-study/index.php',
      ];

      break;

    default:
      global $db;

      $sql =
        "SELECT Collection, Document" .
        "\nFROM Documents" .
        "\nWHERE" .
        "\n  Collection IN('bible-books', 'bible-chapters', 'blog', 'language-letters', 'lexicon-entries', 'lexicon-languages', 'reading-plans')" .
        "\n  AND CASE Collection" .
        "\n  	 WHEN 'language-letters'" .
        "\n    THEN REPLACE(REPLACE(_id, 'greek-', 'alphabet-'), 'hebrew-', 'alphabet-')" .
        "\n  	 WHEN 'lexicon-languages'" .
        "\n    THEN CONCAT(CASE _id WHEN 'hebrew' THEN 'old-testament' ELSE 'new-testament' END, '-', _id)" .
        "\n    ELSE _id" .
        "\n  END = ?";
      $row = $db->row($sql, [ $token ]);

      // TODO: compute the metadata via collection, possibly retrieving more fields above
      // TODO: make template files for each collection
      if ($row) {
        // parse the JSON document
        $output = json_decode($row['Document'], true);

        switch ($row['Collection']) {
          case 'lexicon-languages':
            $output['testament'] = ($output['_id'] === 'hebrew' ? 'Old' : 'New') . ' Testament';
            $output['subtitle'] = 'explore the original languages of the ' . $output['testament'];
            $output['variant'] = 'WordStudy';
            $output['parent'] = 'Lexicons (Word Study)';
            $output['source'] = '/lexicons-word-study/language-template.php';

            break;

          case 'reading-plans':
            $output['subtitle'] = 'approximately ' . $output['minutes'] . ' minutes of reading per day';
            $output['variant'] = 'BibleReadingPlans';
            $output['parent'] = 'Bible Reading Plans';
            $output['source'] = '/bible-reading-plans/plan-template.php';

            break;

          default:
            die('Unsupported collection: ' . $row['Collection'] . ' for ' . $token);
        }
      }
  }

  return $output ? (object) $output : false;
}
