<?php
/** convert BB shortcodes to HTML */
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
      '/\[greekCode\](.+?)\[\/greekCode\]/' => function ($match) {
        return new BS_Greek(null, egp_lexiconConvert('G', $match[1]));
      },
      '/\[hebrewCode\](.+?)\[\/hebrewCode\]/' => function ($match) {
        return new BS_Hebrew(null, egp_lexiconConvert('H', $match[1]));
      },

      // lexicon link
      '/\[strongs id="([^"]+)" \/\]/' => function ($match) {
        return new BS_Link([ 'to' => '/lexicons-word-study' ], $match[1]);
      },

      // custom tags
      '/\[sc\](.+?)\[\/sc\]/' => function ($match) {
        return new BS_SmallCaps(null, $match[1]);
      },
      '/\[verse\](.+?)\[\/verse\]/' => function ($match) {
        return new BS_Verse(null, $match[1]);
      },
    ],
    $text
  );
}

/** retrieve a document via ID */
function egp_documentViaCallback($documents, $callback) {
  $output = null;

  foreach ($documents as $document) {
    if ($callback($document)) {
      $output = $document;
      break;
    }
  }

  return $output;
}

/** retrieve a document via ID */
function egp_documentViaID($documents, $_id) {
  $output = null;

  foreach ($documents as $document) {
    if ($document->_id === $_id) {
      $output = $document;
      break;
    }
  }

  return $output;
}

/** retrieve all language objects */
function egp_languages($languageID = null) {
  static $languages;

  if (!$languages) {
    global $db;

    $sql =
      "SELECT Document" .
      "\nFROM Documents" .
      "\nWHERE Collection = 'lexicon-languages'" .
      "\nORDER BY Sequence";
    $languages = $db->rows($sql);

    $languages = array_map(
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
      $languages
    );
  }

  // specific language
  if ($languageID) {
    switch(substr(strtolower($languageID), 0, 1)) {
      case 'g':
        $languageID = 'greek';

        break;

      case 'h':
        $languageID = 'hebrew';

        break;
    }

    return egp_documentViaID($languages, $languageID);
  }
  // all languages
  else
    return $languages;
}

// encode/decode language code and unicode
// TODO: update to utilize the new database
function egp_lexiconConvert($languageID, $input, $encode = null) {
	global $db;

	static $allPronunciations, $allAlphabets, $allModifiers, $allPunctuation;

	// set static variables
	if (!$allPronunciations) {
		/*************************
		***** Pronunciations *****
		*************************/

		$sql =
			"SELECT *" .
			"\nFROM equipgod_wordpress.EGP_LexiconPronunciationsView" .
			"\nORDER BY LanguageID, PronunciationTypeID, LetterCode;"
		;
		$rows = $db->rows($sql);
		$rowCount = count($rows);

		// convert rows into an array
		$allPronunciations = array();
		for ($rowIndex = 0; $rowIndex < $rowCount; $rowIndex++) {
			// create an array for the language
			if (!isset($allPronunciations[$rows[$rowIndex]['LanguageID']]))
				$allPronunciations[$rows[$rowIndex]['LanguageID']] = array();

			// add the pronunciation to the corresponding language
			$allPronunciations[$rows[$rowIndex]['LanguageID']][$rows[$rowIndex]['LetterCode']] = $rows[$rowIndex];
		}

		//echo core_dump($allPronunciations, 'Pronunciations');


		/********************
		***** Alphabets *****
		********************/

		// create an alphabets array
		$allAlphabets = array('G' => array(), 'H' => array());

		// get Greek alphabet from the database
		$sql =
      "SELECT GreekID," .
      "\nLowerCode, LowerLetter," .
      "\nLowerPsiliCode, LowerPsili, LowerDasiaCode, LowerDasia, LowerOxiaCode, LowerOxia, LowerVariaCode, LowerVaria, LowerPerispomeniCode, LowerPerispomeni, LowerDialytikaCode, LowerDialytika, LowerYpogegrammeniCode, LowerYpogegrammeni, LowerVrachyCode, LowerVrachy, LowerMacronCode, LowerMacron," .
      "\nLowerPsiliOxiaCode, LowerPsiliOxia, LowerPsiliVariaCode, LowerPsiliVaria, LowerPsiliPerispomeniCode, LowerPsiliPerispomeni, LowerPsiliYpogegrammeniCode, LowerPsiliYpogegrammeni," .
      "\nLowerDasiaOxiaCode, LowerDasiaOxia, LowerDasiaVariaCode, LowerDasiaVaria, LowerDasiaPerispomeniCode, LowerDasiaPerispomeni, LowerDasiaYpogegrammeniCode, LowerDasiaYpogegrammeni," .
      "\nLowerDialytikaOxiaCode, LowerDialytikaOxia, LowerDialytikaVariaCode, LowerDialytikaVaria, LowerDialytikaPerispomeniCode, LowerDialytikaPerispomeni," .
      "\nLowerYpogegrammeniOxiaCode, LowerYpogegrammeniOxia, LowerYpogegrammeniVariaCode, LowerYpogegrammeniVaria, LowerYpogegrammeniPerispomeniCode, LowerYpogegrammeniPerispomeni," .
      "\nLowerPsiliYpogegrammeniOxiaCode, LowerPsiliYpogegrammeniOxia, LowerPsiliYpogegrammeniVariaCode, LowerPsiliYpogegrammeniVaria, LowerPsiliYpogegrammeniPerispomeniCode, LowerPsiliYpogegrammeniPerispomeni," .
      "\nLowerDasiaYpogegrammeniOxiaCode, LowerDasiaYpogegrammeniOxia, LowerDasiaYpogegrammeniVariaCode, LowerDasiaYpogegrammeniVaria, LowerDasiaYpogegrammeniPerispomeniCode, LowerDasiaYpogegrammeniPerispomeni," .
      "\nUpperCode, UpperLetter," .
      "\nUpperPsiliCode, UpperPsili, UpperDasiaCode, UpperDasia, UpperOxiaCode, UpperOxia, UpperVariaCode, UpperVaria, UpperDialytikaCode, UpperDialytika, UpperProsgegrammeniCode, UpperProsgegrammeni, UpperVrachyCode, UpperVrachy, UpperMacronCode, UpperMacron," .
      "\nUpperPsiliOxiaCode, UpperPsiliOxia, UpperPsiliVariaCode, UpperPsiliVaria, UpperPsiliPerispomeniCode, UpperPsiliPerispomeni, UpperPsiliProsgegrammeniCode, UpperPsiliProsgegrammeni, UpperDasiaOxiaCode, UpperDasiaOxia, UpperDasiaVariaCode, UpperDasiaVaria, UpperDasiaPerispomeniCode, UpperDasiaPerispomeni," .
      "\nUpperDasiaProsgegrammeniCode, UpperDasiaProsgegrammeni, UpperPsiliProsgegrammeniOxiaCode, UpperPsiliProsgegrammeniOxia, UpperPsiliProsgegrammeniVariaCode, UpperPsiliProsgegrammeniVaria, UpperPsiliProsgegrammeniPerispomeniCode, UpperPsiliProsgegrammeniPerispomeni," .
      "\nUpperDasiaProsgegrammeniOxiaCode, UpperDasiaProsgegrammeniOxia, UpperDasiaProsgegrammeniVariaCode, UpperDasiaProsgegrammeniVaria, UpperDasiaProsgegrammeniPerispomeniCode, UpperDasiaProsgegrammeniPerispomeni" .
      "\nFROM equipgod_wordpress.EGP_LexiconGreekAlphabet" .
      "\nORDER BY GreekID;";
		$rows = $db->rows($sql);
		$rowCount = count($rows);

		// add Greek to alphabet array
		for ($rowID = 0; $rowID < $rowCount; $rowID++)
			$allAlphabets['G'][$rows[$rowID]['LowerCode']] = $rows[$rowID];

		// get Hebrew alphabet from the database
		$sql =
      "SELECT HebrewID, LetterCode, Letter" .
      "\nFROM equipgod_wordpress.EGP_LexiconHebrewAlphabet" .
      "\nORDER BY HebrewID;";
		$rows = $db->rows($sql);
		$rowCount = count($rows);

		// add Hebrew to alphabet array
		for ($rowID = 0; $rowID < $rowCount; $rowID++)
			$allAlphabets['H'][$rows[$rowID]['LetterCode']] = $rows[$rowID];

		//echo core_dump($allAlphabets, 'Alphabets');


		/********************
		***** Modifiers *****
		********************/

		// get modifiers from the database
		$sql =
      "SELECT *" .
      "\nFROM equipgod_wordpress.EGP_LexiconPronunciations" .
      "\nWHERE PronunciationTypeID = ?" .
      "\nORDER BY LanguageID, LetterCode;";
		$rows = $db->rows($sql, 'MOD');
		$rowCount = count($rows);

		// create a modifiers array
		$allModifiers = array();
		for ($rowID = 0; $rowID < $rowCount; $rowID++) {
			// create an array for the language
			if (!isset($allModifiers[$rows[$rowID]['LanguageID']]))
				$allModifiers[$rows[$rowID]['LanguageID']] = array();

			// add the modifier to the corresponding language
			$allModifiers[$rows[$rowID]['LanguageID']][$rows[$rowID]['LetterCode']] = $rows[$rowID];
		}

		//echo core_dump($allModifiers, 'Modifiers');


		/**********************
		***** Punctuation *****
		**********************/

		// get punctuation from the database
		$sql =
      "SELECT LanguageID, Code, Unicode" .
      "\nFROM equipgod_wordpress.EGP_LexiconPunctuation" .
      "\nORDER BY LanguageID, Code;";
		$rows = $db->rows($sql);
		$rowCount = count($rows);

		// create a punctuation array
		$allPunctuation = array();
		for ($rowID = 0; $rowID < $rowCount; $rowID++) {
			// create an array for the language
			if (!isset($allPunctuation[$rows[$rowID]['LanguageID']]))
				$allPunctuation[$rows[$rowID]['LanguageID']] = array('Code' => array(), 'Unicode' => array());

			// add the punctuation to the corresponding language
			$allPunctuation[$rows[$rowID]['LanguageID']]['Code'][] = $rows[$rowID]['Code'] !== '' ? $rows[$rowID]['Code'] : ' ';
			$allPunctuation[$rows[$rowID]['LanguageID']]['Unicode'][] = $rows[$rowID]['Unicode'] !== '' ? $rows[$rowID]['Unicode'] : ' ';
		}

		//echo core_dump($allPunctuation, 'Punctuation');
	}

  // normalize language ID
  $languageID = strtoupper(substr($languageID, 0, 1));

	// default encoding to true
	if (is_null($encode))
		$encode = true;


	/**********************************
	***** egp_getLexiconTextSplit *****
	**********************************/

	// split input into characters
	// initialize variables
	$characters = array();
	$modifiers = array();
	$decode = false;

	// support changes to Greek modifiers
	if ($languageID === 'G')
		$input = str_replace(array('\'', '='), array('’', '^'), $input);
	// elseif ($languageID === 'H' && $encode)
	// 	$input = strrev($input);

	// process input, character by character
	$charCount = mb_strlen($input, 'UTF-8');
	for ($charID = 0; $charID < $charCount; $charID++) {
		// get the current character
		$current = mb_substr($input, $charID, 1, 'UTF-8');
		//egp_p($charID . ' — ' . $current);

		// is a modifier, add it to the list
		if (isset($allModifiers[$languageID][$current]) !== false)
			$modifiers[] = $current;
		else {
			// determine type of character
			$punctuationID = array_search($current, $allPunctuation[$languageID]['Code']);
			if ($punctuationID === false)
				$punctuationID = array_search($current, $allPunctuation[$languageID]['Unicode']);
			if (isset($allAlphabets[$languageID][$languageID === 'G' ? strtolower($current) : $current]))
				$alphabetID = $languageID === 'G' ? strtolower($current) : $current;
			else
				$alphabetID = false;

			// is punctuation
			if ($punctuationID !== false && !$decode) {
        // add stray modifiers
        $characters[] =
          array(
            'Character' => implode('', $modifiers),
            'Type' => 'other'
          );

        // add punctuation
        $characters[] = array('Character' => $current, 'Type' => 'punctuation', 'ID' => $punctuationID);
      }
			// letter of the alphabet
			elseif ($alphabetID !== false && !$decode) {
				// determine alphabet key to use
				$key = $languageID === 'G' ? strtolower($current) : $current;

				// determine column name to pull
				if ($languageID === 'G') {
					$column = ctype_lower($current) ? 'Lower' : 'Upper';
					if ($modifiers) {
						if (in_array('+', $modifiers))
							$column .= 'Dialytika';
						if (in_array(')', $modifiers))
							$column .= 'Psili';
						if (in_array('(', $modifiers))
							$column .= 'Dasia';
						if (in_array('|', $modifiers))
							$column .= ctype_lower($current) ? 'Ypogegrammeni' : 'Prosgegrammeni';
						if (in_array('-', $modifiers))
							$column .= 'Vrachy';
						if (in_array('_', $modifiers))
							$column .= 'Macron';
						if (in_array('\\', $modifiers))
							$column .= 'Varia';
						if (in_array('/', $modifiers))
							$column .= 'Oxia';
						if (in_array('=', $modifiers))
							$column .= 'Perispomeni';
						if (in_array('^', $modifiers))
							$column .= 'Perispomeni';
					}
					else
						$column .= 'Letter';

				}
				else
					$column = 'Letter';

				// validate determined column
				if (!isset($allAlphabets[$languageID][$key][$column]))
					$column = '«invalid alphabet column “' . $column . '” for ' . implode('', $modifiers) . $current . '»';

				$characters[] = array('Character' => $current, 'Type' => 'alphabet', 'ID' => $alphabetID, 'Modifiers' => $modifiers, 'Column' => $column);
			}
			else {
				$type = null;
				$key = null;
				$column = null;

				// check for encoded alphabet
				foreach ($allAlphabets[$languageID] as $alphabetID => $alphabetRow) {
					foreach ($alphabetRow as $alphabetColumn => $value) {
						if (
							preg_match('/^(Lower|Upper)/', $alphabetColumn)
							&& !preg_match('/Code$/', $alphabetColumn)
							&& $current === $value
						) {
							$type = 'alphabet';
							$key = $alphabetID;
							$column = $alphabetColumn;
							break;
						}
					}

					if ($type)
						break;
				}

				// is encoded alphabet
				if ($type === 'alphabet') {
					$decode = true;

					$row = array();

					if ($languageID === 'G' && substr($column, 0, 1) === 'U')
						$row['Character'] = strtoupper($key);
					else
						$row['Character'] = $key;

					$row['Type'] = $type;
					$row['ID'] = $key;

					$row['Modifiers'] = array();
					if (strpos($column, 'Dialytika') !== false)
						$row['Modifiers'][] = '+';
					if (strpos($column, 'Psili') !== false)
						$row['Modifiers'][] = ')';
					if (strpos($column, 'Dasia') !== false)
						$row['Modifiers'][] = '(';
					if (strpos($column, 'Ypogegrammeni') !== false || strpos($column, 'Prosgegrammeni') !== false)
						$row['Modifiers'][] = '|';
					if (strpos($column, 'Vrachy') !== false)
						$row['Modifiers'][] = '-';
					if (strpos($column, 'Macron') !== false)
						$row['Modifiers'][] = '_';
					if (strpos($column, 'Varia') !== false)
						$row['Modifiers'][] = '\\';
					if (strpos($column, 'Oxia') !== false)
						$row['Modifiers'][] = '/';
					if (strpos($column, 'Perispomeni') !== false)
						$row['Modifiers'][] = '^';

					$row['Column'] = str_replace('Letter', '', $column) . 'Code';

					$characters[] = $row;
				}
				else {
					$punctuationID = array_search($current, $allPunctuation[$languageID]['Unicode']);

					// is encoded punctuation
					if ($decode && $punctuationID !== false) {
						$characters[] =
							array(
								'Character' => $allPunctuation[$languageID]['Code'][$punctuationID],
								'Type' => 'punctuation',
								'ID' => $punctuationID
							);
					}
					// not sure, leave it alone
					else {
            // add stray modifiers
            $characters[] =
              array(
                'Character' => implode('', $modifiers),
                'Type' => 'other'
              );

            // add other character
            $characters[] =
							array(
								'Character' => $current,
								'Type' => 'other'
							);
					}
				}
			}

			// clear modifiers for the next letter
			$modifiers = array();
		}
	}
	$charCount = count($characters);
	//echo core_dump($characters, 'Characters');

	// process character-by-character
	$output = '';
	for ($charID = 0; $charID < $charCount; $charID++) {
		if ($characters[$charID]['Character'] === '[') {
			// peek at the next 10 characters for a close bracket
			$closePos = false;
			for ($peekID = 1; $peekID < 10 && $charID + $peekID < $charCount; $peekID++) {
				if ($characters[$charID + $peekID]['Character'] === ']') {
					$closePos = $peekID;
					break;
				}
			}

			// if there was a close bracket, get a snip
			if ($closePos !== false) {
				$snip = '';
				for ($peekID = 0; $peekID <= $closePos; $peekID++) {
					if (is_array($characters[$charID + $peekID]['Modifiers']))
						$snip .= implode('', $characters[$charID + $peekID]['Modifiers']);
					$snip .= $characters[$charID + $peekID]['Character'];
				}

				$output .= $snip;
				$charID += $closePos;

				continue;
			}
		}

		// character type determines how to encode/decode
		switch ($characters[$charID]['Type']) {
			case 'alphabet':
				if ($encode)
					$output .= $allAlphabets[$languageID][$characters[$charID]['ID']][$characters[$charID]['Column']];
				else
					$output .= implode('', $characters[$charID]['Modifiers']) . $characters[$charID]['Character'];

				break;
			case 'punctuation':
				if ($encode)
					$output .= $allPunctuation[$languageID]['Unicode'][$characters[$charID]['ID']];
				else
					$output .= $characters[$charID]['Character'];

				break;
			default:
				$output .= $characters[$charID]['Character'];
		}
	}

	return $output;
}

/** retrieve page metadata for the given URL */
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

/** retrieve page metadata for the given URL token */
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
