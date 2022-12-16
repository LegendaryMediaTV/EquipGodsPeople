<?php

/** search an array using a callback function, returning first index or null */
function array_search_callback($array, $callback) {
  foreach ($array as $key => $value) {
    if (call_user_func($callback, $value) === true)
      return $key;
  }

  return null;
}

/** convert BB shortcodes to HTML */
function egp_bb($input, $text = false) {
  return preg_replace_callback_array(
    [
      // HTML
      '/\[b\](.+?)\[\/b\]/' => function ($match) use ($text) {
        return $text ? ('**' . $match[1] . '**') : new BS_Bold(null, $match[1]);
      },
      '/\[em\](.+?)\[\/em\]/' => function ($match) use ($text) {
        return $text ? ('*' . $match[1] . '*') : new BS_Emphasis(null, $match[1]);
      },
      '/\[i\](.+?)\[\/i\]/' => function ($match) use ($text) {
        return $text ? ('*' . $match[1] . '*') : new BS_Italics(null, $match[1]);
      },
      '/\[strong\](.+?)\[\/strong\]/' => function ($match) use ($text) {
        return $text ? ('**' . $match[1] . '**') : new BS_Strong(null, $match[1]);
      },
      '/\[sub\](.+?)\[\/sub\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_Subscript(null, $match[1]);
      },
      '/\[sup\](.+?)\[\/sup\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_Superscript(null, $match[1]);
      },

      // new line
      '/\n/' => function () use ($text) {
        return $text ? "\n" : new BS_Break();
      },

      // Bible link
      '/\[bible to="([^"]+)" \/\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_BibleLink(['to' => $match[1]]);
      },
      '/\[bible to="([^"]+)"\]([^[]+)\[\/bible\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_BibleLink(['to' => $match[1]], $match[2]);
      },

      // languages
      '/\[greek\](.+?)\[\/greek\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_Greek(null, $match[1]);
      },
      '/\[hebrew\](.+?)\[\/hebrew\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_Hebrew(null, $match[1]);
      },
      '/\[greekCode\](.+?)\[\/greekCode\]/' => function ($match) use ($text) {
        $output = egp_lexiconConvert('G', $match[1]);
        return $text ? $output : new BS_Greek(null, $output);
      },
      '/\[hebrewCode\](.+?)\[\/hebrewCode\]/' => function ($match) use ($text) {
        $output = egp_lexiconConvert('H', $match[1]);
        return $text ? $output : new BS_Hebrew(null, $output);
      },
      '/\[greekPronounce\](.+?)\[\/greekPronounce\]/' => function ($match) use ($text) {
        $output = egp_greekPronounce($match[1]);
        return $text ? $output : new BS_Italics(null, $output);
      },

      // lexicon link
      '/\[strongs id="([^"]+)"( tvm="([^"]+)"( tvm2="([^"]+)")?)? \/\]/' => function ($match) use ($text) {
        return $text
          ? strtoupper($match[1])
          : new BS_LexiconLink(['to' => $match[1], 'tvm' => $match[3], 'tvm2' => $match[5]]);
      },

      // custom tags
      '/\[sc\](.+?)\[\/sc\]/' => function ($match) use ($text) {
        return $text ? strtoupper($match[1]) : new BS_SmallCaps(null, $match[1]);
      },
      '/\[verse\](.+?)\[\/verse\]/' => function ($match) use ($text) {
        return $text ? $match[1] : new BS_Verse(null, $match[1]);
      },
    ],
    $input
  );
}

/** look up a Bible book */
function egp_bibleBook($query) {
  $books = egp_bibleBooks('|' . $query . '|');

  return count($books) ? $books[0] : false;
}

/** retrieve all Bible books */
function egp_bibleBooks($query = false) {
  global $db;

  return $db->documents('bible-books', $query);
}

/** look up a Bible chapter */
function egp_bibleChapter($query) {
  // chapter coordinates
  if (preg_match('/^[0-9]{6}$/', $query)) {
    global $db;

    // build the SQL query
    $sql =
      "SELECT *" .
      "\nFROM Documents" .
      "\nWHERE Collection = 'bible-chapters'" .
      "\nAND Sequence = ?" .
      "\nLIMIT 1";

    // query the database
    $row = $db->row($sql, [$query]);

    // record found, return the parsed document
    if ($row) return json_decode($row['Document']);
    // record not found
    else return null;
    // 
  } else {
    $chapters = egp_bibleChapters('|' . $query . '|');

    return count($chapters) ? $chapters[0] : false;
  }
}

/** retrieve all Bible chapters */
function egp_bibleChapters($query = false) {
  global $db;

  return $db->documents('bible-chapters', $query);
}

/** parse the requested Bible passage into chapter, selected verses, and title */
function egp_biblePassage($query) {
  if ($query) {
    // split coordinates/passage into chapter and verses
    if (preg_match('/^[0-9]{6}[0-9]{3}?$/', $query)) {
      $passageChapter = substr($query, 0, 6);
      $passageVerses = substr($query, 6, 3);
    } else
      [$passageChapter, $passageVerses] = explode(':', $query, 2);

    // look up as Bible chapter
    $chapter = egp_bibleChapter($passageChapter);

    // chapter found, continue parsing
    if ($chapter) {
      $verses = [];

      // no verses selected, use all of them for the chapter
      if (!$passageVerses) {
        for ($verseIndex = 1; $verseIndex <= $chapter->verseCount; $verseIndex++)
          array_push($verses, $verseIndex);
      }
      // verses selected, parse the request
      else {
        $verseChunks = explode(',', $passageVerses);
        foreach ($verseChunks as $verseChunk) {
          // parse verse range
          [$verseMin, $verseMax] = mb_split('[—–-]', mb_ereg_replace('[^0-9—–-]', '', $verseChunk));

          // cast/constrain verse range
          if ($verseMin) $verseMin = intval($verseMin);
          else $verseMin = 1;
          if (!$verseMax) $verseMax = $verseMin;
          else $verseMax = intval($verseMax);
          if ($verseMax > $chapter->verseCount)
            $verseMax = $chapter->verseCount;

          // add verses to the range
          for ($verseIndex = $verseMin; $verseIndex <= $verseMax; $verseIndex++)
            array_push($verses, $verseIndex);
        }
      }

      // force unique verse numbers and sort
      $verses = array_unique($verses, SORT_NUMERIC);
      sort($verses);
      $verseCount = count($verses);

      // create a preferred title
      $title = $chapter->title;
      if ($verseCount !== $chapter->verseCount) {
        for ($verseIndex = 0; $verseIndex < $verseCount; $verseIndex++) {
          // is the first verse overall or is the first verse in a set
          if (
            !$verseIndex ||
            $verses[$verseIndex - 1] !== $verses[$verseIndex] - 1
          )
            $title .= (!$verseIndex ? ":" : ", ") . $verses[$verseIndex];
          // is the last verse overall or is the last verse in a set
          else if (
            $verseIndex === $verseCount - 1 ||
            $verses[$verseIndex + 1] !== $verses[$verseIndex] + 1
          )
            $title .= "–" . $verses[$verseIndex];
        }
      }

      // return results
      return (object) [
        'title' => $title,
        'chapter' => $chapter,
        'verses' => $verses
      ];
    }

    // look up as Bible book
    $book = egp_bibleBook($query);
    if ($book) {
      return (object) [
        'book' => $book,
        'title' => $book->title,
        'url' => $book->url,
      ];
    }

    // look up as Bible testament
    $testament = egp_bibleTestament($query);
    if ($testament) {
      return (object) [
        'testament' => $testament,
        'title' => $testament->title,
        'url' => '/bible-study-tools/parallel-bible/' . $testament->_id,
      ];
    }

    // look up as Bible range
    $range = egp_bibleRange($query);
    if ($range) {
      return (object) [
        'range' => $range,
        'title' => $range->title,
        'url' => '/bible-study-tools/parallel-bible/' . $range->_id,
      ];
    }
  }

  return false;
}

/** look up a Bible range */
function egp_bibleRange($query) {
  $ranges = egp_bibleRanges('|' . $query . '|');

  return count($ranges) ? $ranges[0] : false;
}

/** retrieve all Bible ranges */
function egp_bibleRanges($query = false) {
  global $db;

  return $db->documents('bible-ranges', $query);
}

/** look up a Bible testament */
function egp_bibleTestament($query) {
  $testaments = egp_bibleTestaments('|' . $query . '|');

  return count($testaments) ? $testaments[0] : false;
}

/** retrieve all Bible testaments */
function egp_bibleTestaments($query = false) {
  global $db;

  return $db->documents('bible-testaments', $query);
}

// retrieve Bible scriptures for each selected version
function egp_bibleVerses($chapter, $selectedVersions) {
  global $db;

  // retrieve versions
  $bibleVersions = egp_bibleVersions();

  // retrieve scripture for versions
  $versions = [];
  foreach ($selectedVersions as $selectedVersion) {
    // look up Bible version
    $bibleVersionIndex = array_search($selectedVersion, array_column($bibleVersions, '_id'));

    // Bible version found, continue retrieving scripture
    if ($bibleVersionIndex !== false) {
      $bibleVersion = $bibleVersions[$bibleVersionIndex];

      // retrieve scriptures
      $sql =
        "SELECT *" .
        "\nFROM Documents" .
        "\nWHERE" .
        "\n  Collection = 'bible-verses'" .
        "\n  AND _id LIKE '"  . $bibleVersion->_id . "-" . $chapter->sequence . "%'" .
        "\nORDER BY Sequence";
      $rows = $db->noSQL($sql);
      $rowCount = count($rows);

      // add scriptures
      $bibleVersion->verses = [];
      for ($rowIndex = 0; $rowIndex < $rowCount; $rowIndex++)
        array_push($bibleVersion->verses, $rows[$rowIndex]);

      // add version/scriptures to versions
      unset($bibleVersion->goodies);
      array_push($versions, $bibleVersion);
    }
  }

  return $versions;
}

/** retrieve a specific Bible version */
function egp_bibleVersion($_id) {
  if ($_id && gettype($_id) !== 'string')
    return $_id;
  else {
    global $db;

    return $db->document('bible-versions', $_id ?: 'asv');
  }
}

/** retrieve all Bible versions */
function egp_bibleVersions() {
  static $output;

  // retain version information between executions
  if (!$output) {
    global $db;

    $output = $db->documents('bible-versions');
  }

  return $output;
}

/** set/get selected versions */
function egp_bibleVersionsSelected($objects = false) {
  // retrieve available versions and convert to an array of IDs
  static $availableIDs, $availableVersions;
  if (!$availableIDs) {
    $availableIDs = [];
    $availableVersions = egp_bibleVersions();
    foreach ($availableVersions as $version) {
      if ($version->public && !($version->goodies && !$_SESSION['goodies']))
        $availableIDs[] = $version->_id;
    }
  }

  $output = [];

  // pull the current selection
  if ($_POST['versions'])
    $versions = $_POST['versions'];
  elseif ($_SESSION['versions'])
    $versions = $_SESSION['versions'];
  else
    $versions = [];

  // validate the current selection
  foreach ($versions as $version) {
    if ($version && array_search($version, $availableIDs) !== false)
      $output[] = $version;
  }

  // ensure there is a version selection
  if (!count($output))
    $output = $_SESSION['goodies'] ? ['nasb', 'kjvs', 'nlt'] : ['asv', 'kjvs', 'ylt'];

  // update the session variable
  $_SESSION['versions'] = $output;

  // use objects instead of IDs when requested
  if ($objects) {
    $output = array_map(
      function ($versionID) use ($availableVersions) {
        $index = array_search_callback(
          $availableVersions,
          function ($version) use ($versionID) {
            return $version->_id === $versionID;
          }
        );

        return $availableVersions[$index];
      },
      $output
    );
  }

  return $output;
}

/** retrieve a document via a callback function */
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

/** convert Greek code to a pronunciation */
function egp_greekPronounce($code) {
  static $greek = array();

  // cache various things that affect pronunciation
  if (!$greek) {
    $greek['consonants'] = array('b' => 'b', 'g' => 'g', 'd' => 'd', 'z' => 'dz', 'y' => 'th', 'k' => 'k', 'l' => 'l', 'm' => 'm', 'n' => 'n', 'x' => 'ks', 'p' => 'p', 'r' => 'r', 's' => 's', 'v' => 's', 't' => 't', 'f' => 'f', 'c' => 'kh', 'q' => 'ps');
    $greek['vowels'] = array('a' => 'ah', 'e' => 'eh', 'h' => 'ay', 'i' => 'ee', 'o' => 'aw', 'u' => 'oo', 'w' => 'oh');
    $greek['hard'] = array('a' => 'hah', 'e' => 'heh', 'h' => 'hay', 'i' => 'hee', 'o' => 'hah', 'r' => 'rh', 'u' => 'hoo', 'w' => 'hoh');
    $greek['diphthongs'] = array('ai' => 'ai', 'ei' => 'ay', 'oi' => 'oy', 'ui' => 'wee', 'au' => 'ow', 'ou' => 'oo', 'eu' => 'yoo', 'hu' => 'yoo');
    $greek['clusters'] = array('bd', 'bl', 'br', 'gl', 'gn', 'gr', 'dr', 'yl', 'yn', 'yr', 'kl', 'kn', 'kr', 'kt', 'mn', 'pl', 'pn', 'pr', 'pt', 'sb', 'sy', 'sk', 'skl', 'sm', 'sp', 'spl', 'st', 'str', 'sf', 'sfr', 'sc', 'tr', 'fy', 'fl', 'fr', 'cy', 'cl', 'cr');
    $greek['nasals'] = array('gg', 'gk', 'gc', 'gx');
    $greek['availableModifiers'] = array('+', ')', '(', '-', '_', '\\', '/', '=', '|');
    $greek['punctuation'] = array(',', '.', ':', ';', '?', '\'', ' ');
  }

  // un-escape brackets
  $word = str_replace(array('&#091;', '&#093;'), array('[', ']'), $code);

  // process input
  $text = '';
  if ($word != '') { // has given a word
    // split into individual letters with modifiers
    $length = strlen($word = strtolower($word));
    $letters = array();
    $modifiers = array();
    for ($j = 0; $j < $length; $j++) {
      if (in_array($word[$j], $greek['availableModifiers']))
        $modifiers[] = $word[$j];
      else {
        $letters[] = array('letter' => $word[$j], 'modifiers' => $modifiers);
        $modifiers = array();
      }
    }

    // join chunks (diphthongs and consonant clusters
    $length = count($letters);
    $chunks = array();
    $modifiers = array();
    for ($j = 0; $j < $length; $j++) {
      if (in_array($letters[$j]['letter'] . $letters[$j + 1]['letter'] . $letters[$j + 2]['letter'], $greek['clusters'])) { // current letter and next two make consonant cluster
        $chunks[] = array('letters' => $letters[$j]['letter'] . $letters[$j + 1]['letter'] . $letters[$j + 2]['letter'], 'modifiers' => array_merge($letters[$j]['modifiers'], $letters[$j + 1]['modifiers'], $letters[$j + 2]['modifiers']));
        $j += 2;
      } elseif (in_array($letters[$j]['letter'] . $letters[$j + 1]['letter'], $greek['clusters'])) { // current letter and next make consonant cluster
        $chunks[] = array('letters' => $letters[$j]['letter'] . $letters[$j + 1]['letter'], 'modifiers' => array_merge($letters[$j]['modifiers'], $letters[$j + 1]['modifiers']));
        $j++;
      } elseif (isset($greek['diphthongs'][$letters[$j]['letter'] . $letters[$j + 1]['letter']]) && !in_array('+', $letters[$j + 1]['modifiers'])) { // current letter and next make diphthong and there’s no diaeresis/dialytika over the second vowel
        $chunks[] = array('letters' => $letters[$j]['letter'] . $letters[$j + 1]['letter'], 'modifiers' => array_merge($letters[$j]['modifiers'], $letters[$j + 1]['modifiers']));
        $j++;
      } else
        $chunks[] = array('letters' => $letters[$j]['letter'], 'modifiers' => $letters[$j]['modifiers']);
    }
    $chunkCount = count($chunks);

    $vowel = false;
    $accented = false;
    for ($j = 0; $j < $chunkCount; $j++) {
      if (
        in_array($chunks[$j]['letters'], $greek['punctuation'])
        || ($vowel // only one vowel/diphthong
          && !(!(preg_match('/[aehiouw]/', $chunks[$j]['letters'])) // current letter is a consonant/cluster
            && ($j == $chunkCount - 1 // last letter(s) is consonant/cluster
              || ( // split multiple consonants (first to previous syllable, rest to next syllable)
                !(preg_match('/[aehiouw]/', $chunks[$j + 1]['letters'])) // next letter is a consonant
                && (preg_match('/[aehiouw]/', $chunks[$j - 1]['letters'])) // previous letter is a vowel
              )
            )
          )
        )
      ) {
        if ($accented) $text .= '’'; // indicate emphasis

        if (in_array($chunks[$j]['letters'], $greek['punctuation'])) // is punctuation
          $text .= $chunks[$j]['letters']; // add punctuation
        else
          $text .= '-'; // add syllable marker

        $vowel = false; // reset syllable vowel indicator
        $accented = false; // reset accented indicator
      }

      // determine accent for current syllable
      if (in_array('\\', $chunks[$j]['modifiers']) || in_array('/', $chunks[$j]['modifiers']) || in_array('=', $chunks[$j]['modifiers']))
        $accented = true;

      // determine if current syllable has a vowel
      if (preg_match('/[aehiouw]/', $chunks[$j]['letters']))
        $vowel = true;

      if (isset($greek['diphthongs'][$chunks[$j]['letters']])) // is a diphthong (hard or soft)
        $text .= (in_array('(', $chunks[$j]['modifiers']) ? 'h' : '') . $greek['diphthongs'][$chunks[$j]['letters']];
      elseif (isset($greek['vowels'][$chunks[$j]['letters']])) // is a single vowel (hard or soft)
      {
        if (in_array('(', $chunks[$j]['modifiers']))
          $text .= $greek['hard'][$chunks[$j]['letters']];
        elseif ($chunks[$j]['letters'] == 'i' && (substr($chunks[$j - 1]['letters'], -1) == 's' || substr($chunks[$j - 1]['letters'], -1) == 'i')) // I is preceded by an S, use short sound
          $text .= 'ih';
        else
          $text .= $greek['vowels'][$chunks[$j]['letters']];
      } else { // is a consonant/cluster
        $chunkLength = strlen($chunks[$j]['letters']);
        for ($k = 0; $k < $chunkLength; $k++) {
          if ($k == 0 && $chunks[$j]['letters'][$k] == 'r' && in_array('(', $chunks[$j]['modifiers'])) // begins with R
            $text .= $greek['hard'][$chunks[$j]['letters'][$k]];
          elseif ($k == 0 && $chunks[$j]['letters'][$k] == 'z' && (!$j || in_array($chunks[$j - 1]['letters'], $greek['punctuation']))) // begins with Z
            $text .= 'z';
          else {
            if ($k == $chunkLength - 1 && $j < $chunkCount - 1 && in_array($chunks[$j]['letters'][$k] . substr($chunks[$j + 1]['letters'], 0, 1), $greek['nasals']))  // ends with a gamma nasal
              $text .= 'n';
            $text .= $greek['consonants'][$chunks[$j]['letters'][$k]];
          }
        }
      }
    }

    if ($accented) $text .= '’';
  }

  return $text;
}

/** determine the inflection name using the given flags */
function egp_inflectionName($flags) {
  $output = [];

  // retrieve inflection types
  $inflectionTypes = egp_inflectionTypes();

  foreach ($inflectionTypes as $inflectionType) {
    foreach ($inflectionType->flags as $inflectionFlag) {
      if (in_array($inflectionFlag->_id, $flags))
        $output[] = $inflectionFlag->_id;
    }
  }

  return implode('', $output);
}

/** retrieve all inflection types */
function egp_inflectionTypes() {
  static $types;

  if (!$types) {
    $types = [
      (object)[
        '_id' => 'type',
        'title' => 'Type',
        'flags' => [
          (object)['_id' => 'Adj', 'title' => 'Adjective'],
          (object)['_id' => 'Adv', 'title' => 'Adverb'],
          // (object)[ '_id' => 'Art', 'title' => 'Definite Article' ],
          (object)['_id' => 'Conj', 'title' => 'Conjunction'],
          // (object)[ '_id' => 'Interj', 'title' => 'Interjection' ],
          (object)['_id' => 'Noun', 'title' => 'Noun'],
          (object)['_id' => 'Ptc', 'title' => 'Participle'],
          (object)['_id' => 'Prep', 'title' => 'Preposition'],
          (object)['_id' => 'Pron', 'title' => 'Pronoun'],
          (object)['_id' => 'Vb', 'title' => 'Verb'],
          (object)['_id' => 'Vbl', 'title' => 'Verbal'],
        ],
      ],
      (object)[
        '_id' => 'subtype',
        'title' => 'Sub-Type',
        'flags' => [
          (object)['_id' => 'Pers', 'title' => 'Personal'],
          (object)['_id' => 'Dem', 'title' => 'Demonstrative'],
          (object)['_id' => 'Rel', 'title' => 'Relative'],
          (object)['_id' => 'Correl', 'title' => 'Correlative'],
          (object)['_id' => 'Indef', 'title' => 'Indefinite'],
          (object)['_id' => 'Interrog', 'title' => 'Interrogative'],
          (object)['_id' => 'Refl', 'title' => 'Reflexive'],
          (object)['_id' => 'Recip', 'title' => 'Reciprocal'],
        ],
      ],
      (object)[
        '_id' => 'tense',
        'title' => 'Tense',
        'flags' => [
          (object)['_id' => 'Pres', 'title' => 'Present'],
          (object)['_id' => 'Impf', 'title' => 'Imperfect'],
          (object)['_id' => 'Fut', 'title' => 'Future'],
          (object)['_id' => 'Aor', 'title' => 'Aorist'],
          (object)['_id' => 'Perf', 'title' => 'Perfect'],
          (object)['_id' => 'Plup', 'title' => 'Pluperfect'],
          (object)['_id' => 'Futpf', 'title' => 'Future Perfect'],
        ],
      ],
      (object)[
        '_id' => 'voice',
        'title' => 'Voice',
        'flags' => [
          (object)['_id' => 'Act', 'title' => 'Active'],
          (object)['_id' => 'Middle', 'title' => 'Middle'],
          (object)['_id' => 'Pass', 'title' => 'Passive'],
          (object)['_id' => 'Depon', 'title' => 'Deponent'],
        ],
      ],
      (object)[
        '_id' => 'mood',
        'title' => 'Mood',
        'flags' => [
          (object)['_id' => 'Indic', 'title' => 'Indicative'],
          (object)['_id' => 'Subjunc', 'title' => 'Subjunctive'],
          (object)['_id' => 'Opt', 'title' => 'Optative'],
          (object)['_id' => 'Impv', 'title' => 'Imperative'],
        ],
      ],
      (object)[
        '_id' => 'person',
        'title' => 'Person',
        'flags' => [
          (object)['_id' => '1', 'title' => '1st Person'],
          (object)['_id' => '2', 'title' => '2nd Person'],
          (object)['_id' => '3', 'title' => '3rd Person'],
        ],
      ],
      (object)[
        '_id' => 'case',
        'title' => 'Case',
        'flags' => [
          (object)['_id' => 'Nom', 'title' => 'Nominative'],
          (object)['_id' => 'Acc', 'title' => 'Accusative'],
          (object)['_id' => 'Gen', 'title' => 'Genitive'],
          (object)['_id' => 'Dat', 'title' => 'Dative'],
          (object)['_id' => 'Voc', 'title' => 'Vocative'],
        ],
      ],
      (object)[
        '_id' => 'number',
        'title' => 'Number',
        'flags' => [
          (object)['_id' => 'Sg', 'title' => 'Singular'],
          // (object)[ '_id' => 'Dl', 'title' => 'Dual' ],
          (object)['_id' => 'Pl', 'title' => 'Plural'],
        ],
      ],
      (object)[
        '_id' => 'gender',
        'title' => 'Gender',
        'flags' => [
          (object)['_id' => 'Masc', 'title' => 'Masculine'],
          (object)['_id' => 'Fem', 'title' => 'Feminine'],
          (object)['_id' => 'Neut', 'title' => 'Neuter'],
        ],
      ],
    ];
  }

  return $types;
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
    switch (substr(strtolower($languageID), 0, 1)) {
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

/** encode/decode language code and unicode */
// TODO: update to utilize the new database
function egp_lexiconConvert($languageID, $input, $encode = null) {
  global $db;

  static $allPronunciations, $allAlphabets, $allModifiers, $allPunctuation;

  // set static variables
  if (!$allPronunciations) {
    /**************************
     ***** Pronunciations *****
     *************************/

    $sql =
      "SELECT *" .
      "\nFROM equipgod_wordpress.EGP_LexiconPronunciationsView" .
      "\nORDER BY LanguageID, PronunciationTypeID, LetterCode;";
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


    /*********************
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


    /*********************
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


    /***********************
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


  /***********************************
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
          } else
            $column .= 'Letter';
        } else
          $column = 'Letter';

        // validate determined column
        if (!isset($allAlphabets[$languageID][$key][$column]))
          $column = '«invalid alphabet column “' . $column . '” for ' . implode('', $modifiers) . $current . '»';

        $characters[] = array('Character' => $current, 'Type' => 'alphabet', 'ID' => $alphabetID, 'Modifiers' => $modifiers, 'Column' => $column);
      } else {
        $type = '';
        $key = '';
        $column = '';

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
        } else {
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

/** retrieve a lexicon entry */
function egp_lexiconEntry($query) {
  static $entries;

  // get all lexicon entries
  if (!$entries) {
    global $db;

    $results = $db->documents('lexicon-entries');
    foreach ($results as $result)
      $entries[$result->_id] = $result;
    $results = null;
  }

  // lower-case the query
  $query = mb_strtolower($query);

  if (preg_match('/^(strongs-)?[gh][0-9]{1,4}$/', $query)) {
    // prefix query as needed
    if (mb_substr($query, 0, 1) !== 's')
      $query = 'strongs-' . $query;

    // remove leading zeroes
    $query = preg_replace('/^(strongs-[g-h])0+/', '$1', $query);

    // query the database
    return $entries[$query];
  }

  return false;
}

/** Eusebius’s Ecclesiastical History books and chapters */
function egp_tocEcclesiasticalHistory() {
  return json_decode(json_encode([
    [
      '_id' => 'book-01',
      'title' => 'The Person and Work of Christ',
      'subtitle' => 'Book I',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-01-the-person-and-work-of-christ',
      'chapters' => [
        [
          'title' => 'The Plan of the Work',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' =>
          'Summary View of the Pre-Existence and Divinity of Our Saviour and Lord Jesus Christ',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' =>
          'The Name Jesus and Also the Name Christ Were Known from the Beginning, and Were Honored by the Inspired Prophets',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' =>
          'The Religion Proclaimed by Him to All Nations Was Neither New nor Strange',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'The Time of His Appearance Among Men',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' =>
          'About the Time of Christ, in Accordance with Prophecy, the Rulers Who Had Governed the Jewish Nation in Regular Succession from the Days of Antiquity Came to an End, and Herod, the First Foreigner, Became King',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' =>
          'The Alleged Discrepancy in the Gospels in Regard to the Genealogy of Christ',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' =>
          'The Cruelty of Herod Toward the Infants, and the Manner of His Death',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'The Times of Pilate',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'The High Priests of the Jews Under Whom Christ Taught',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'Testimonies in Regard to John the Baptist and Christ',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Disciples of Our Saviour',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'Narrative Concerning the Prince of the Edessences',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
      ],
    ],
    [
      '_id' => 'book-02',
      'title' => 'The Apostles',
      'subtitle' => 'Book II',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-02-the-apostles',
      'chapters' => [
        [
          'title' => 'Introduction',
          '_id' => 'introduction',
        ],
        [
          'title' =>
          'The Course Pursued by the Apostles After the Ascension of Christ',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' =>
          'How Tiberius Was Affected When Informed by Pilate Concerning Christ',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' =>
          'The Doctrine of Christ Soon Spread Throughout All the World',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' =>
          'After the Death of Tiberius, Caius Appointed Agrippa King of the Jews, Having Punished Herod with Perpetual Exile',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'Philo’s Embassy to Caius in Behalf of the Jews',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' =>
          'The Misfortunes Which Overwhelmed the Jews After Their Presumption Against Christ',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'Pilate’s Suicide',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'The Famine Which Took Place in the Reign of Claudius',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'The Martyrdom of James the Apostle',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' =>
          'Agrippa, Who Was Also Called Herod, Having Persecuted the Apostles, Immediately Experienced the Divine Vengeance',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'The Impostor Theudas and His Followers',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'Helen, the Queen of the Osrhœnians',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'Simon Magus',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'The Preaching of the Apostle Peter in Rome',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'The Gospel According to Mark',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' =>
          'Mark First Proclaimed Christianity to the Inhabitants of Egypt',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'Philo’s Account of the Ascetics of Egypt',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'The Works of Philo That Have Came Down to Us',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' =>
          'The Calamity Which Befell the Jews in Jerusalem on the Day of the Passover',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' =>
          'The Events Which Took Place in Jerusalem During the Reign of Nero',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' =>
          'The Egyptian, Who Is Mentioned Also in the Acts of the Apostles',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' =>
          'Paul Having Been Sent Bound from Judea to Rome, Made His Defense, and Was Acquitted of Every Charge',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' =>
          'The Martyrdom of James, Who Was Called the Brother of the Lord',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' =>
          'Annianus the First Bishop of the Church of Alexandria After Mark',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' =>
          'The Persecution Under Nero in Which Paul and Peter Were Honored at Rome with Martyrdom in Behalf of Religion',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' =>
          'The Jews, Afflicted with Innumerable Evils, Commenced the Last War Against the Romans',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
      ],
    ],
    [
      '_id' => 'book-03',
      'title' => 'Missions and Persecutions',
      'subtitle' => 'Book III',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-03-missions-and-persecutions',
      'chapters' => [
        [
          'title' =>
          'The Parts of the World in Which the Apostles Preached Christ',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The First Ruler of the Church of Rome',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'The Epistles of the Apostles',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'The First Successors of the Apostles',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'The Last Siege of the Jews After Christ',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'The Famine Which Oppressed Them',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'The Predictions of Christ',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'The Signs Which Preceded the War',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'Josephus and the Works Which He Has Left',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'The Manner in Which Josephus Mentions the Divine Books',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'Symeon Rules the Church of Jerusalem After James',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'Vespasian Commands the Descendants of David to Be Sought',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'Anencletus, the Second Bishop of Rome',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'Abilius, the Second Bishop of Alexandria',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'Clement, the Third Bishop of Rome',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' => 'The Epistle of Clement',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'The Persecution Under Domitian',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'The Apostle John and the Apocalypse',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' => 'Domitian Commands the Descendants of David to Be Slain',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' => 'The Relatives of Our Saviour',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' => 'Cerdon Becomes the Third Ruler of the Church of Alexandria',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' => 'Ignatius, the Second Bishop of Antioch',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' => 'Narrative Concerning John the Apostle',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' => 'The Order of the Gospels',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' =>
          'The Divine Scriptures That Are Accepted and Those That Are Not',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' => 'Menander the Sorcerer',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
        [
          'title' => 'The Heresy of the Ebionites',
          'subtitle' => 'Chapter XXVII',
          '_id' => 'chapter-27',
        ],
        [
          'title' => 'Cerinthus the Heresiarch',
          'subtitle' => 'Chapter XXVIII',
          '_id' => 'chapter-28',
        ],
        [
          'title' => 'Nicolaus and the Sect Named After Him',
          'subtitle' => 'Chapter XXIX',
          '_id' => 'chapter-29',
        ],
        [
          'title' => 'The Apostles That Were Married',
          'subtitle' => 'Chapter XXX',
          '_id' => 'chapter-30',
        ],
        [
          'title' => 'The Death of John and Philip',
          'subtitle' => 'Chapter XXXI',
          '_id' => 'chapter-31',
        ],
        [
          'title' => 'Symeon, Bishop of Jerusalem, Suffers Martyrdom',
          'subtitle' => 'Chapter XXXII',
          '_id' => 'chapter-32',
        ],
        [
          'title' => 'Trajan Forbids the Christians to Be Sought After',
          'subtitle' => 'Chapter XXXIII',
          '_id' => 'chapter-33',
        ],
        [
          'title' => 'Evarestus, the Fourth Bishop of the Church of Rome',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-34',
        ],
        [
          'title' => 'Justus, the Third Bishop of Jerusalem',
          'subtitle' => 'Chapter XXXV',
          '_id' => 'chapter-35',
        ],
        [
          'title' => 'Ignatius and His Epistles',
          'subtitle' => 'Chapter XXXVI',
          '_id' => 'chapter-36',
        ],
        [
          'title' => 'The Evangelists That Were Still Eminent at That Time',
          'subtitle' => 'Chapter XXXVII',
          '_id' => 'chapter-37',
        ],
        [
          'title' =>
          'The Epistle of Clement and the Writings Falsely Ascribed to Him',
          'subtitle' => 'Chapter XXXVIII',
          '_id' => 'chapter-38',
        ],
        [
          'title' => 'The Writings of Papias',
          'subtitle' => 'Chapter XXXIX',
          '_id' => 'chapter-39',
        ],
      ],
    ],
    [
      '_id' => 'book-04',
      'title' => 'Bishops, Writings, and Martyrdoms',
      'subtitle' => 'Book IV',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-04-bishops-writings-and-martyrdoms',
      'chapters' => [
        [
          'title' =>
          'The Bishops of Rome and of Alexandria During the Reign of Trajan',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The Calamities of the Jews During Trajan’s Reign',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' =>
          'The Apologists That Wrote in Defense of the Faith During the Reign of Adrian',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' =>
          'The Bishops of Rome and of Alexandria Under the Same Emperor',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' =>
          'The Bishops of Jerusalem from the Age of Our Saviour to the Period Under Consideration',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'The Last Siege of the Jews Under Adrian',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' =>
          'The Persons That Became at That Time Leaders of Knowledge Falsely So-Called',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'Ecclesiastical Writers',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' =>
          'The Epistle of Adrian, Decreeing That We Should Not Be Punished Without a Trial',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' =>
          'The Bishops of Rome and of Alexandria During the Reign of Antoninus',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'The Heresiarchs of That Age',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Apology of Justin, Addressed to Antoninus',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' =>
          'The Epistle of Antoninus to the Common Assembly of Asia in Regard to Our Doctrine',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' =>
          'The Circumstances Related of Polycarp, a Friend of the Apostles',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' =>
          'Under Verus, Polycarp with Others Suffered Martyrdom at Smyrna',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' =>
          'Justin the Philosopher Preaches the Word of Christ in Rome and Suffers Martyrdom',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'The Martyrs Whom Justin Mentions in His Own Work',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'The Works of Justin Which Have Come Down to Us',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' =>
          'The Rulers of the Churches of Rome and Alexandria During the Reign of Verus',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' => 'The Rulers of the Church of Antioch',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' => 'The Ecclesiastical Writers That Flourished in Those Days',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' => 'Hegesippus and the Events Which He Mentions',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' =>
          'Dionysius, Bishop of Corinth, and the Epistles Which He Wrote',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' => 'Theophilus Bishop of Antioch',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' => 'Philip and Modestus',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' => 'Melito and the Circumstances Which He Records',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
        [
          'title' => 'Apolinarius, Bishop of the Church of Hierapolis',
          'subtitle' => 'Chapter XXVII',
          '_id' => 'chapter-27',
        ],
        [
          'title' => 'Musanus and His Writings',
          'subtitle' => 'Chapter XXVIII',
          '_id' => 'chapter-28',
        ],
        [
          'title' => 'The Heresy of Tatian',
          'subtitle' => 'Chapter XXIX',
          '_id' => 'chapter-29',
        ],
        [
          'title' => 'Bardesanes the Syrian and His Extant Works',
          'subtitle' => 'Chapter XXX',
          '_id' => 'chapter-30',
        ],
      ],
    ],
    [
      '_id' => 'book-05',
      'title' => 'Western Heroes, Eastern Heretics',
      'subtitle' => 'Book V',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-05-western-heroes-eastern-heretics',
      'chapters' => [
        [
          'title' => 'Introduction',
          '_id' => 'introduction',
        ],
        [
          'title' =>
          'The Number of Those Who Fought for Religion in Gaul Under Verus and the Nature of Their Conflicts',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' =>
          'The Martyrs, Beloved of God, Kindly Ministered Unto Those Who Fell in the Persecution',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' =>
          'The Vision Which Appeared in a Dream to the Witness Attalus',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'Irenæus Commended by the Witnesses in a Letter',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' =>
          'God Sent Rain from Heaven for Marcus Aurelius Cæsar in Answer to the Prayers of Our People',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'Catalogue of the Bishops of Rome',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' =>
          'Even Down to Those Times Miracles Were Performed by the Faithful',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' =>
          'The Statements of Irenæus in Regard to the Divine Scriptures',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'The Bishops Under Commodus',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'Pantænus the Philosopher',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'Clement of Alexandria',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Bishops in Jerusalem',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'Rhodo and His Account of the Dissension of Marcion',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'The False Prophets of the Phrygians',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'The Schism of Blastus at Rome',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' =>
          'The Circumstances Related of Montanus and His False Prophets',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'Miltiades and His Works',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' =>
          'The Manner in Which Apollonius Refuted the Phrygians, and the Persons Whom He Mentions',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' => 'Serapion on the Heresy of the Phrygians',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' => 'The Writings of Irenæus Against the Schismatics at Rome',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' => 'How Apollonius Suffered Martyrdom at Rome',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' => 'The Bishops That Were Well Known at This Time',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' => 'The Question Then Agitated Concerning the Passover',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' => 'The Disagreement in Asia',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' => 'How All Came to an Agreement Respecting the Passover',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' => 'The Elegant Works of Irenæus Which Have Come Down to Us',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
        [
          'title' => 'The Works of Others That Flourished at That Time',
          'subtitle' => 'Chapter XXVII',
          '_id' => 'chapter-27',
        ],
        [
          'title' =>
          'Those Who First Advanced the Heresy of Artemon; Their Manner of Life, and How They Dared to Corrupt the Sacred Scriptures',
          'subtitle' => 'Chapter XXVIII',
          '_id' => 'chapter-28',
        ],
      ],
    ],
    [
      '_id' => 'book-06',
      'title' => 'Origen and Atrocities at Alexandria',
      'subtitle' => 'Book VI',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-06-origen-and-atrocities-at-alexandria',
      'chapters' => [
        [
          'title' => 'The Persecution Under Severus',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The Training of Origen from Childhood',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' =>
          'While Still Very Young, He Taught Diligently the Word of Christ',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'The Pupils of Origen That Became Martyrs',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'Potamiæna',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'Clement of Alexandria',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'The Writer, Judas',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'Origen’s Daring Deed',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'The Miracles of Narcissus',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'The Bishops of Jerusalem',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'Alexander',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'Serapion and His Extant Works',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'The Writings of Clement',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'The Scriptures Mentioned by Him',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'Heraclas',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' => 'Origen’s Earnest Study of the Divine Scriptures',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'The Translator Symmachus',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'Ambrose',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' => 'Circumstances Related of Origen',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' => 'The Extant Works of the Writers of That Age',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' => 'The Bishops That Were Well Known at That Time',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' => 'The Works of Hippolytus Which Have Reached Us',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' => 'Origen’s Zeal and His Elevation to the Presbyterate',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' => 'The Commentaries Which He Prepared at Alexandria',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' => 'His Review of the Canonical Scriptures',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' => 'Heraclas Becomes Bishop of Alexandria',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
        [
          'title' => 'How the Bishops Regarded Origen',
          'subtitle' => 'Chapter XXVII',
          '_id' => 'chapter-27',
        ],
        [
          'title' => 'The Persecution Under Maximinus',
          'subtitle' => 'Chapter XXVIII',
          '_id' => 'chapter-28',
        ],
        [
          'title' =>
          'Fabianus, Who Was Wonderfully Designated Bishop of Rome by God',
          'subtitle' => 'Chapter XXIX',
          '_id' => 'chapter-29',
        ],
        [
          'title' => 'The Pupils of Origen',
          'subtitle' => 'Chapter XXX',
          '_id' => 'chapter-30',
        ],
        [
          'title' => 'Africanus',
          'subtitle' => 'Chapter XXXI',
          '_id' => 'chapter-31',
        ],
        [
          'title' =>
          'The Commentaries Which Origen Composed in Cæsarea in Palestine',
          'subtitle' => 'Chapter XXXII',
          '_id' => 'chapter-32',
        ],
        [
          'title' => 'The Error of Beryllus',
          'subtitle' => 'Chapter XXXIII',
          '_id' => 'chapter-33',
        ],
        [
          'title' => 'Philip Cæsar',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-34',
        ],
        [
          'title' => 'Dionysius Succeeds Heraclas in the Episcopate',
          'subtitle' => 'Chapter XXXV',
          '_id' => 'chapter-35',
        ],
        [
          'title' => 'Other Works of Origen',
          'subtitle' => 'Chapter XXXVI',
          '_id' => 'chapter-36',
        ],
        [
          'title' => 'The Dissension of the Arabians',
          'subtitle' => 'Chapter XXXVII',
          '_id' => 'chapter-37',
        ],
        [
          'title' => 'The Heresy of the Elkesites',
          'subtitle' => 'Chapter XXXVIII',
          '_id' => 'chapter-38',
        ],
        [
          'title' => 'The Persecution Under Decius, and the Sufferings of Origen',
          'subtitle' => 'Chapter XXXIX',
          '_id' => 'chapter-39',
        ],
        [
          'title' => 'The Events Which Happened to Dionysius',
          'subtitle' => 'Chapter XL',
          '_id' => 'chapter-40',
        ],
        [
          'title' => 'The Martyrs in Alexandria',
          'subtitle' => 'Chapter XLI',
          '_id' => 'chapter-41',
        ],
        [
          'title' => 'Others of Whom Dionysius Gives an Account',
          'subtitle' => 'Chapter XLII',
          '_id' => 'chapter-42',
        ],
        [
          'title' => 'Novatus, His Manner of Life and His Heresy',
          'subtitle' => 'Chapter XLIII',
          '_id' => 'chapter-43',
        ],
        [
          'title' => 'Dionysius’ Account of Serapion',
          'subtitle' => 'Chapter XLIV',
          '_id' => 'chapter-44',
        ],
        [
          'title' => 'An Epistle of Dionysius to Novatus',
          'subtitle' => 'Chapter XLV',
          '_id' => 'chapter-45',
        ],
        [
          'title' => 'Other Epistles of Dionysius',
          'subtitle' => 'Chapter XLVI',
          '_id' => 'chapter-46',
        ],
      ],
    ],
    [
      '_id' => 'book-07',
      'title' => 'Dionysius and Dissent',
      'subtitle' => 'Book VII',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-07-dionysius-and-dissent',
      'chapters' => [
        [
          'title' => 'Introduction',
          '_id' => 'introduction',
        ],
        [
          'title' => 'The Wickedness of Decius and Gallus',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The Bishops of Rome in Those Times',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' =>
          'Cyprian, and the Bishops with Him, First Taught That It Was Necessary to Purify by Baptism Those Converted from Heresy',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'The Epistles Which Dionysius Wrote on This Subject',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'The Peace Following the Persecution',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'The Heresy of Sabellius',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' =>
          'The Abominable Error of the Heretics; the Divine Vision of Dianysius; and the Ecclesiastical Canon Which He Received',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'The Heterodoxy of Novatus',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'The Ungodly Baptism of the Heretics',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'Valerian and the Persecution Under Him',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' =>
          'The Events Which Happened at This Time to Dionysius and Those in Egypt',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Martyrs in Cæsarea in Palestine',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'The Peace Under Gallienus',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'The Bishops That Flourished at That Time',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'The Martyrdom of Marinus at Cæsarea',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' => 'Story in Regard to Astyrius',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'The Signs at Paneas of the Great Might of Our Saviour',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'The Statue Which the Woman with an Issue of Blood Erected',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' => 'The Episcopal Chair of James',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' =>
          'The Festal Epistles of Dionysius, in Which He Also Gives a Paschal Canon',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' => 'The Occurrences at Alexandria',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' => 'The Pestilence Which Came Upon Them',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' => 'The Reign of Gallienus',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' => 'Nepos and His Schism',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' => 'The Apocalypse of John',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' => 'The Epistles of Dionysius',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
        [
          'title' =>
          'Paul of Samosata, and the Heresy Introduced by Hint at Antioch',
          'subtitle' => 'Chapter XXVII',
          '_id' => 'chapter-27',
        ],
        [
          'title' => 'The Illustrious Bishops of That Time',
          'subtitle' => 'Chapter XXVIII',
          '_id' => 'chapter-28',
        ],
        [
          'title' =>
          'Paul, Having Been Refuted by Malchion, a Presbyter from the Sophists, Was Excommunicated',
          'subtitle' => 'Chapter XXIX',
          '_id' => 'chapter-29',
        ],
        [
          'title' => 'The Epistle of the Bishops Against Paul',
          'subtitle' => 'Chapter XXX',
          '_id' => 'chapter-30',
        ],
        [
          'title' =>
          'The Perversive Heresy of the Manicheans Which Began at This Time',
          'subtitle' => 'Chapter XXXI',
          '_id' => 'chapter-31',
        ],
        [
          'title' =>
          'The Distinguished Ecclesiastics of Our Day, and Which of Them Survived Until the Destruction of the Churches',
          'subtitle' => 'Chapter XXXII',
          '_id' => 'chapter-32',
        ],
      ],
    ],
    [
      '_id' => 'book-08',
      'title' => 'The Great Persecution',
      'subtitle' => 'Book VIII',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-08-the-great-persecution',
      'chapters' => [
        [
          'title' => 'Introduction',
          '_id' => 'introduction',
        ],
        [
          'title' => 'The Events Which Preceded the Persecution in Our Times',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The Destruction of the Churches',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'The Nature of the Conflicts Endured in the Persecution',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' =>
          'The Famous Martyrs of God, Who Filled Every Place with Their Memory and Won Various Crowns in Behalf of Religion',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'Those in Nicomedia',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'Those in the Palace',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'The Egyptians in Phœnicia',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'These in Egypt',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'Those in Thebais',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' =>
          'The Writings of Phileas the Martyr Describing the Occurrences at Alexandria',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'Those in Phrygia',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' =>
          'Many Others, Both Men and Women, Who Suffered in Various Ways',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' =>
          'The Bishops of the Church That Evinced by Their Blood the Genuineness of the Religion Which They Preached',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'The Character of the Enemies of Religion',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'The Events Which Happened to the Heathen',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' => 'The Change of Affairs for the Better',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'The Revocation of the Rulers',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'That Which Follows Is Found in Some Copies in the Eighth Book',
          'subtitle' => 'Addendum',
          '_id' => 'addendum',
        ],
      ],
    ],
    [
      '_id' => 'book-08-appendix',
      'title' => 'The Martyrs of Palestine',
      'subtitle' => 'Book VIII (Appendix)',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-08-appendix-the-martyrs-of-palestine',
      'chapters' => [
        [
          'title' => 'Introduction',
          '_id' => 'introduction',
        ],
        [
          'title' => 'The First of the Martyrs of Palestine',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'What Occurred to Romanus',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'The Persecution Against Us Increased Greatly',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'Maximinus Cæsar Vigorously Armed Himself for Persecution',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'Martyrdom of Ulpianus and Ædesius',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'Martyrdom of Agapius',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'More Martyrdoms in Cæsarea',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'Firmilianus Tortured Confessors and Sent Them to Mines',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'Persecution Was Again Aroused Against the Christians',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'More Condemned to Flames or Beheaded',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'The Great and Celebrated Spectacle of Pamphilus',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Other Events Which Occurred in the Meantime',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'Thirty-Nine Beheaded in One Day',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
      ],
    ],
    [
      '_id' => 'book-09',
      'title' => 'The Great Deliverance',
      'subtitle' => 'Book IX',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-09-the-great-deliverance',
      'chapters' => [
        [
          'title' => 'The Pretended Relaxation',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The Subsequent Reverse',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'The Newly Erected Statue at Antioch',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'The Memorials Against Us',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'The Forged Acts',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'Those Who Suffered Martyrdom at This Time',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'The Decree Against Us Which Was Engraved on Pillars',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' =>
          'The Misfortunes Which Happened in Connection With These Things, in Famine, Pestilence, and War',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'The Victory of the God-Beloved Emperors',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' =>
          'The Overthrow of the Tyrants and the Words, Which They Uttered Before Their Death',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'The Final Destruction of the Enemies of Religion',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
      ],
    ],
    [
      '_id' => 'book-10',
      'title' => 'Constantine and Peace',
      'subtitle' => 'Book X',
      'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history/book-10-constantine-and-peace',
      'chapters' => [
        [
          'title' => 'The Peace Granted Us by God',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'The Restoration of the Churches',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'The Dedications in Every Place',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'Panegyric on the Splendor of Affairs',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'Copies of Imperial Laws',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' =>
          'Copy of an Imperial Epistle in Which Money Is Granted to the Churches',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'The Exemption of the Clergy',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'The Subsequent Wickedness of Licinius, and His Death',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' =>
          'The Victory of Constantine, and the Blessings Which Under Him Accrued to the Subjects of the Roman Empire',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
      ],
    ],
  ]));
}

/** Kempis’s Imitation of Christ books and chapters */
function egp_tocImitationOfChrist() {
  return json_decode(json_encode([
    [
      '_id' => 'book-1',
      'title' => 'Thoughts Helpful in the Life of the Soul',
      'subtitle' => 'Book I',
      'url' => '/classic-works/thomas-kempis-imitation-of-christ/book-1-thoughts-helpful-in-the-life-of-the-soul',
      'chapters' => [
        [
          'title' => 'Imitating Christ and Despising All Vanities on Earth',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01'
        ],
        [
          'title' => 'Having a Humble Opinion of Self',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02'
        ],
        [
          'title' => 'The Doctrine of Truth',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03'
        ],
        [
          'title' => 'Prudence in Action',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04'
        ],
        [
          'title' => 'Reading the Holy Scripture',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05'
        ],
        [
          'title' => 'Unbridled Affections',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06'
        ],
        [
          'title' => 'Avoiding False Hope and Pride',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07'
        ],
        [
          'title' => 'Shunning Over-Familiarity',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08'
        ],
        [
          'title' => 'Obedience and Subjection',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09'
        ],
        [
          'title' => 'Avoiding Idle Talk',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10'
        ],
        [
          'title' => 'Acquiring Peace and Zeal for Perfection',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11'
        ],
        [
          'title' => 'The Value of Adversity',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12'
        ],
        [
          'title' => 'Resisting Temptation',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13'
        ],
        [
          'title' => 'Avoiding Rash Judgment',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14'
        ],
        [
          'title' => 'Works Done in Charity',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15'
        ],
        [
          'title' => 'Bearing with the Faults of Others',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16'
        ],
        [
          'title' => 'Monastic Life',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17'
        ],
        [
          'title' => 'The Example Set Us by the Holy Fathers',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18'
        ],
        [
          'title' => 'The Practices of a Good Religious',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19'
        ],
        [
          'title' => 'The Love of Solitude and Silence',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20'
        ],
        [
          'title' => 'Sorrow of Heart',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21'
        ],
        [
          'title' => 'Thoughts on the Misery of Man',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22'
        ],
        [
          'title' => 'Thoughts on Death',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23'
        ],
        [
          'title' => 'Judgment and the Punishment of Sin',
          'subtitle' => 'Chapter XXIV',
          '_id' => 'chapter-24'
        ],
        [
          'title' => 'Zeal in Amending Our Lives',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25'
        ],
      ],
    ],
    [
      '_id' => 'book-2',
      'title' => 'The Interior Life',
      'subtitle' => 'Book II',
      'url' => '/classic-works/thomas-kempis-imitation-of-christ/book-2-the-interior-life',
      'chapters' => [
        [
          'title' => 'Meditation',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'Humility',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'Goodness and Peace in Man',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'Purity of Mind and Unity of Purpose',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'Ourselves',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'The Joy of a Good Conscience',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'Loving Jesus Above All Things',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'The Intimate Friendship of Jesus',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'Wanting No Share in Comfort',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'Appreciating God’s Grace',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'Few Love the Cross of Jesus',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Royal Road of the Holy Cross',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
      ],
    ],
    [
      '_id' => 'book-3',
      'title' => 'Internal Consolation',
      'subtitle' => 'Book III',
      'url' => '/classic-works/thomas-kempis-imitation-of-christ/book-3-internal-consolation',
      'chapters' => [
        [
          'title' => 'The Inward Conversation of Christ with the Faithful Soul',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'Truth Speaks Inwardly without the Sound of Words',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'Listen Humbly to the Words of God; Many Do Not Heed Them',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'We Must Walk Before God in Humility and Truth',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'The Wonderful Effect of Divine Love',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'The Proving of a True Lover',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'Grace Must Be Hidden Under the Mantle of Humility',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'Self-Abasement in the Sight of God',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'All Things Should Be Referred to God as Their Last End',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'To Despise the World and Serve God Is Sweet',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'The Longings of Our Hearts Must Be Examined and Moderated',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'Acquiring Patience in the Fight Against Concupiscence',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'The Obedience of One Humbly Subject to the Example of Jesus Christ',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'Consider the Hidden Judgments of God Lest You Become Proud of Your Own Good Deeds',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'How One Should Feel and Speak on Every Desirable Thing',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' => 'True Comfort Is to Be Sought in God Alone',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'All Our Care Is to Be Placed in God',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'Temporal Sufferings Should Be Borne Patiently, After the Example of Christ',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
        [
          'title' => 'True Patience in Suffering',
          'subtitle' => 'Chapter XIX',
          '_id' => 'chapter-19',
        ],
        [
          'title' => 'Confessing Our Weakness in the Miseries of Life',
          'subtitle' => 'Chapter XX',
          '_id' => 'chapter-20',
        ],
        [
          'title' => 'Above All Goods and All Gifts We Must Rest in God',
          'subtitle' => 'Chapter XXI',
          '_id' => 'chapter-21',
        ],
        [
          'title' => 'Remember the Innumerable Gifts of God',
          'subtitle' => 'Chapter XXII',
          '_id' => 'chapter-22',
        ],
        [
          'title' => 'Four Things Which Bring Great Peace',
          'subtitle' => 'Chapter XXIII',
          '_id' => 'chapter-23',
        ],
        [
          'title' => 'Avoiding Curious Inquiry About the Lives of Others',
          'subtitle' => 'Chapter XXIV',
          '_id' => 'chapter-24',
        ],
        [
          'title' => 'The Basis of Firm Peace of Heart and True Progress',
          'subtitle' => 'Chapter XXV',
          '_id' => 'chapter-25',
        ],
        [
          'title' => 'The Excellence of a Free Mind, Gained Through Prayer Rather Than by Study',
          'subtitle' => 'Chapter XXVI',
          '_id' => 'chapter-26',
        ],
        [
          'title' => 'Self-Love Is the Greatest Hindrance to the Highest Good',
          'subtitle' => 'Chapter XXVII',
          '_id' => 'chapter-27',
        ],
        [
          'title' => 'Strength Against Slander',
          'subtitle' => 'Chapter XXVIII',
          '_id' => 'chapter-28',
        ],
        [
          'title' => 'How We Must Call Upon and Bless the Lord When Trouble Presses',
          'subtitle' => 'Chapter XXIX',
          '_id' => 'chapter-29',
        ],
        [
          'title' => 'The Quest of Divine Help and Confidence in Regaining Grace',
          'subtitle' => 'Chapter XXX',
          '_id' => 'chapter-30',
        ],
        [
          'title' => 'To Find the Creator, Forsake All Creatures',
          'subtitle' => 'Chapter XXXI',
          '_id' => 'chapter-31',
        ],
        [
          'title' => 'Self-Denial and the Renunciation of Evil Appetites',
          'subtitle' => 'Chapter XXXII',
          '_id' => 'chapter-32',
        ],
        [
          'title' => 'Restlessness of Soul-Directing Our Final Intention Toward God',
          'subtitle' => 'Chapter XXXIII',
          '_id' => 'chapter-33',
        ],
        [
          'title' => 'God Is Sweet Above All Things and in All Things to Those Who Love Him',
          'subtitle' => 'Chapter XXXIV',
          '_id' => 'chapter-34',
        ],
        [
          'title' => 'There Is No Security from Temptation in This Life',
          'subtitle' => 'Chapter XXXV',
          '_id' => 'chapter-35',
        ],
        [
          'title' => 'The Vain Judgments of Men',
          'subtitle' => 'Chapter XXXVI',
          '_id' => 'chapter-36',
        ],
        [
          'title' => 'Pure and Entire Resignation of Self to Obtain Freedom of Heart',
          'subtitle' => 'Chapter XXXVII',
          '_id' => 'chapter-37',
        ],
        [
          'title' => 'The Right Ordering of External Affairs; Recourse to God in Dangers',
          'subtitle' => 'Chapter XXXVIII',
          '_id' => 'chapter-38',
        ],
        [
          'title' => 'A Man Should Not Be Unduly Solicitous About His Affairs',
          'subtitle' => 'Chapter XXXIX',
          '_id' => 'chapter-39',
        ],
        [
          'title' => 'Man Has No Good in Himself and Can Glory in Nothing',
          'subtitle' => 'Chapter XL',
          '_id' => 'chapter-40',
        ],
        [
          'title' => 'Contempt for All Earthly Honor',
          'subtitle' => 'Chapter XLI',
          '_id' => 'chapter-41',
        ],
        [
          'title' => 'Peace Is Not to Be Placed in Men',
          'subtitle' => 'Chapter XLII',
          '_id' => 'chapter-42',
        ],
        [
          'title' => 'Beware Vain and Worldly Knowledge',
          'subtitle' => 'Chapter XLIII',
          '_id' => 'chapter-43',
        ],
        [
          'title' => 'Do Not Be Concerned About Outward Things',
          'subtitle' => 'Chapter XLIV',
          '_id' => 'chapter-44',
        ],
        [
          'title' => 'All Men Are Not to Be Believed, for It Is Easy to Err in Speech',
          'subtitle' => 'Chapter XLV',
          '_id' => 'chapter-45',
        ],
        [
          'title' => 'Trust in God Against Slander',
          'subtitle' => 'Chapter XLVI',
          '_id' => 'chapter-46',
        ],
        [
          'title' => 'Every Trial Must Be Borne for the Sake of Eternal Life',
          'subtitle' => 'Chapter XLVII',
          '_id' => 'chapter-47',
        ],
        [
          'title' => 'The Day of Eternity and the Distresses of This Life',
          'subtitle' => 'Chapter XLVIII',
          '_id' => 'chapter-48',
        ],
        [
          'title' => 'The Desire of Eternal Life; the Great Rewards Promised to Those Who Struggle',
          'subtitle' => 'Chapter XLIX',
          '_id' => 'chapter-49',
        ],
        [
          'title' => 'How a Desolate Person Ought to Commit Himself into the Hands of God',
          'subtitle' => 'Chapter L',
          '_id' => 'chapter-50',
        ],
        [
          'title' => 'When We Cannot Attain to the Highest, We Must Practice the Humble Works',
          'subtitle' => 'Chapter LI',
          '_id' => 'chapter-51',
        ],
        [
          'title' => 'A Man Ought Not to Consider Himself Worthy of Consolation, but Rather Deserving of Chastisement',
          'subtitle' => 'Chapter LII',
          '_id' => 'chapter-52',
        ],
        [
          'title' => 'God’s Grace Is Not Given to the Earthly Minded',
          'subtitle' => 'Chapter LIII',
          '_id' => 'chapter-53',
        ],
        [
          'title' => 'The Different Motions of Nature and Grace',
          'subtitle' => 'Chapter LIV',
          '_id' => 'chapter-54',
        ],
        [
          'title' => 'The Corruption of Nature and the Efficacy of Divine Grace',
          'subtitle' => 'Chapter LV',
          '_id' => 'chapter-55',
        ],
        [
          'title' => 'We Ought to Deny Ourselves and Imitate Christ Through Bearing the Cross',
          'subtitle' => 'Chapter LVI',
          '_id' => 'chapter-56',
        ],
        [
          'title' => 'A Man Should Not Be Too Downcast When He Falls into Defects',
          'subtitle' => 'Chapter LVII',
          '_id' => 'chapter-57',
        ],
        [
          'title' => 'High Matters and the Hidden Judgments of God Are Not to Be Scrutinized',
          'subtitle' => 'Chapter LVIII',
          '_id' => 'chapter-58',
        ],
        [
          'title' => 'All Hope and Trust Are to Be Fixed in God Alone',
          'subtitle' => 'Chapter LIX',
          '_id' => 'chapter-59',
        ],
      ],
    ],
    [
      '_id' => 'book-4',
      'title' => 'An Invitation to Holy Communion',
      'subtitle' => 'Book IV',
      'url' => '/classic-works/thomas-kempis-imitation-of-christ/book-4-an-invitation-to-holy-communion',
      'chapters' => [
        [
          'title' => 'Introduction',
          '_id' => 'introduction',
        ],
        [
          'title' => 'The Great Reverence with Which We Should Receive Christ',
          'subtitle' => 'Chapter I',
          '_id' => 'chapter-01',
        ],
        [
          'title' => 'God’s Great Goodness and Love Is Shown to Man in This Sacrament',
          'subtitle' => 'Chapter II',
          '_id' => 'chapter-02',
        ],
        [
          'title' => 'It Is Profitable to Receive Communion Often',
          'subtitle' => 'Chapter III',
          '_id' => 'chapter-03',
        ],
        [
          'title' => 'Many Blessings Are Given Those Who Receive Communion Worthily',
          'subtitle' => 'Chapter IV',
          '_id' => 'chapter-04',
        ],
        [
          'title' => 'The Dignity of the Sacrament and of the Priesthood',
          'subtitle' => 'Chapter V',
          '_id' => 'chapter-05',
        ],
        [
          'title' => 'An Inquiry on the Proper Thing to Do Before Communion',
          'subtitle' => 'Chapter VI',
          '_id' => 'chapter-06',
        ],
        [
          'title' => 'The Examination of Conscience and the Resolution to Amend',
          'subtitle' => 'Chapter VII',
          '_id' => 'chapter-07',
        ],
        [
          'title' => 'The Offering of Christ on the Cross; Our Offering',
          'subtitle' => 'Chapter VIII',
          '_id' => 'chapter-08',
        ],
        [
          'title' => 'We Should Offer Ourselves and All That We Have to God, Praying for All',
          'subtitle' => 'Chapter IX',
          '_id' => 'chapter-09',
        ],
        [
          'title' => 'Do Not Lightly Forego Holy Communion',
          'subtitle' => 'Chapter X',
          '_id' => 'chapter-10',
        ],
        [
          'title' => 'The Body of Christ and Sacred Scripture Are Most Necessary to a Faithful Soul',
          'subtitle' => 'Chapter XI',
          '_id' => 'chapter-11',
        ],
        [
          'title' => 'The Communicant Should Prepare Himself for Christ with Great Care',
          'subtitle' => 'Chapter XII',
          '_id' => 'chapter-12',
        ],
        [
          'title' => 'With All Her Heart the Devout Soul Should Desire Union with Christ in the Sacrament',
          'subtitle' => 'Chapter XIII',
          '_id' => 'chapter-13',
        ],
        [
          'title' => 'The Ardent Longing of Devout Men for the Body of Christ',
          'subtitle' => 'Chapter XIV',
          '_id' => 'chapter-14',
        ],
        [
          'title' => 'The Grace of Devotion Is Acquired Through Humility and Self-Denial',
          'subtitle' => 'Chapter XV',
          '_id' => 'chapter-15',
        ],
        [
          'title' => 'We Should Show Our Needs to Christ and Ask His Grace',
          'subtitle' => 'Chapter XVI',
          '_id' => 'chapter-16',
        ],
        [
          'title' => 'The Burning Love and Strong Desire to Receive Christ',
          'subtitle' => 'Chapter XVII',
          '_id' => 'chapter-17',
        ],
        [
          'title' => 'Man Should Not Scrutinize This Sacrament in Curiosity, but Humbly Imitate Christ and Submit Reason to Holy Faith',
          'subtitle' => 'Chapter XVIII',
          '_id' => 'chapter-18',
        ],
      ],
    ],
  ]));
}

/** Tozer’s Pursuit of God chapters */
function egp_tocPursuitOfGod() {
  return json_decode(json_encode([
    [
      '_id' => 'chapter-01',
      'title' => 'Following Hard After God',
      'subtitle' => 'Chapter I',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-01-following-hard-after-god',
    ],
    [
      '_id' => 'chapter-02',
      'title' => 'The Blessedness of Possessing Nothing',
      'subtitle' => 'Chapter II',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-02-the-blessedness-of-possessing-nothing',
    ],
    [
      '_id' => 'chapter-03',
      'title' => 'Removing the Veil',
      'subtitle' => 'Chapter III',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-03-removing-the-veil',
    ],
    [
      '_id' => 'chapter-04',
      'title' => 'Apprehending God',
      'subtitle' => 'Chapter IV',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-04-apprehending-god',
    ],
    [
      '_id' => 'chapter-05',
      'title' => 'The Universal Presence',
      'subtitle' => 'Chapter V',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-05-the-universal-presence',
    ],
    [
      '_id' => 'chapter-06',
      'title' => 'The Speaking Voice',
      'subtitle' => 'Chapter VI',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-06-the-speaking-voice',
    ],
    [
      '_id' => 'chapter-07',
      'title' => 'The Gaze of the Soul',
      'subtitle' => 'Chapter VII',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-07-the-gaze-of-the-soul',
    ],
    [
      '_id' => 'chapter-08',
      'title' => 'Restoring the Creator–Creature Relation',
      'subtitle' => 'Chapter VIII',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-08-restoring-the-creator-creature-relation',
    ],
    [
      '_id' => 'chapter-09',
      'title' => 'Meekness and Rest',
      'subtitle' => 'Chapter IX',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-09-meekness-and-rest',
    ],
    [
      '_id' => 'chapter-10',
      'title' => 'The Sacrament of Living',
      'subtitle' => 'Chapter X',
      'url' => '/classic-works/aw-tozer-pursuit-of-god/chapter-10-the-sacrament-of-living',
    ],
  ]));
}

/** crash the page rendering and display the given item */
function page_crash($item) {
  die(new BS_Preformatted(['item' => $item]));
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
  foreach ($tokens as $token) {
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
      $output = (object) ['url' => '/', 'source' => '/index.php'];

      break;

    case 'aw-tozer-pursuit-of-god':
      $output = (object) [
        '_id' => $token,
        'title' => 'Tozer – The Pursuit of God',
        'subtitle' => 'by A.W. Tozer',
        'parent' => 'Classic Works',
        'variant' => 'ClassicWorks',
        'url' => '/classic-works/' . $token,
        'sequence' => 'Tozer Pursuit of God',
        'source' => '/classic-works/' . $token . '/index.php',
      ];

      break;

    case 'bible-reading-plans':
      $output = (object) [
        '_id' => $token,
        'title' => 'Bible Reading Plans',
        'subtitle' => 'time-based plans for reading the Bible',
        'variant' => 'BibleReadingPlans',
        'url' => '/' . $token,
        'sequence' => 'Bible Reading Plans',
        'source' => '/' . $token . '/index.php',
      ];

      break;

    case 'bible-concordance':
      $output = (object) [
        '_id' => $token,
        'title' => 'Bible Concordance',
        'subtitle' => 'strict keyword search of the Bible',
        'variant' => 'BibleStudyTools',
        'url' => '/bible-study-tools/' . $token,
        'sequence' => 'Bible Concordance',
        'source' => '/' . $token . '.php',
      ];

      break;

    case 'bible-search':
      $output = (object) [
        '_id' => $token,
        'title' => 'Bible Search',
        'subtitle' => 'search and compare multiple versions of the Bible',
        'variant' => 'BibleStudyTools',
        'url' => '/bible-study-tools/' . $token,
        'sequence' => 'Bible Search',
        'source' => '/' . $token . '.php',
      ];

      break;

    case 'bible-study-tools':
      $output = (object) [
        '_id' => $token,
        'title' => 'Bible Study Tools',
        'subtitle' => 'get more out of your Bible',
        'variant' => 'BibleStudyTools',
        'url' => '/' . $token,
        'sequence' => 'Bible Study Tools',
        'source' => '/' . $token . '.php',
      ];

      break;

    case 'book-01-the-person-and-work-of-christ':
    case 'book-02-the-apostles':
    case 'book-03-missions-and-persecutions':
    case 'book-04-bishops-writings-and-martyrdoms':
    case 'book-05-western-heroes-eastern-heretics':
    case 'book-06-origen-and-atrocities-at-alexandria':
    case 'book-07-dionysius-and-dissent':
    case 'book-08-the-great-persecution':
    case 'book-08-appendix-the-martyrs-of-palestine':
    case 'book-09-the-great-deliverance':
    case 'book-10-constantine-and-peace':
      // get the table of contents
      $toc = egp_tocEcclesiasticalHistory();

      // find the specific book
      $rowIndex = array_search_callback(
        $toc,
        function ($book) use ($token) {
          return
            substr($book->_id, 0, 7) === substr($token, 0, 7)
            && strpos($token, '-appendix') === strpos($book->_id, '-appendix');
        }
      );

      // establish the parent URL
      $parentURL = '/classic-works/pamphili-eusebius-ecclesiastical-history';

      $output = (object) [
        '_id' => $token,
        'title' => $toc[$rowIndex]->title,
        'subtitle' => new BS_Link(['to' => $parentURL], '“Ecclesiastical History”') . ' – ' . $toc[$rowIndex]->subtitle,
        'parent' => 'Eusebius – Ecclesiastical History',
        'parentURL' => $parentURL,
        'variant' => 'ClassicWorks',
        'url' => $toc[$rowIndex]->url,
        'sequence' => $toc[$rowIndex]->_id,
        'source' => $parentURL . '/' . $toc[$rowIndex]->_id . '.php',
        'book' => $toc[$rowIndex],
        'previous' => $toc[$rowIndex - 1]
          ? ['url' => $toc[$rowIndex - 1]->url, 'title' => $toc[$rowIndex - 1]->subtitle . ' – ' . $toc[$rowIndex - 1]->title]
          : ['url' => $parentURL, 'title' => 'Table of Contents'],
        'next' => $toc[$rowIndex + 1]
          ? ['url' => $toc[$rowIndex + 1]->url, 'title' => $toc[$rowIndex + 1]->subtitle . ' – ' . $toc[$rowIndex + 1]->title]
          : ['url' => '/classic-works', 'title' => 'Classic Works'],
      ];

      break;

    case 'book-1-thoughts-helpful-in-the-life-of-the-soul':
    case 'book-2-the-interior-life':
    case 'book-3-internal-consolation':
    case 'book-4-an-invitation-to-holy-communion':
      // get the table of contents
      $toc = egp_tocImitationOfChrist();

      // find the specific book
      $rowIndex = array_search_callback(
        $toc,
        function ($book) use ($token) {
          return $book->_id === substr($token, 0, 6);
        }
      );

      // establish the parent URL
      $parentURL = '/classic-works/thomas-kempis-imitation-of-christ';

      $output = (object) [
        '_id' => $token,
        'title' => $toc[$rowIndex]->title,
        'subtitle' => new BS_Link(['to' => $parentURL], '“The Imitation of Christ”') . ' – ' . $toc[$rowIndex]->subtitle,
        'parent' => 'Kempis – The Imitation of Christ',
        'parentURL' => $parentURL,
        'variant' => 'ClassicWorks',
        'url' => $toc[$rowIndex]->url,
        'sequence' => $toc[$rowIndex]->_id,
        'source' => $parentURL . '/' . $toc[$rowIndex]->_id . '.php',
        'book' => $toc[$rowIndex],
        'previous' => $toc[$rowIndex - 1]
          ? ['url' => $toc[$rowIndex - 1]->url, 'title' => $toc[$rowIndex - 1]->subtitle . ' – ' . $toc[$rowIndex - 1]->title]
          : ['url' => $parentURL, 'title' => 'Table of Contents'],
        'next' => $toc[$rowIndex + 1]
          ? ['url' => $toc[$rowIndex + 1]->url, 'title' => $toc[$rowIndex + 1]->subtitle . ' – ' . $toc[$rowIndex + 1]->title]
          : ['url' => '/classic-works', 'title' => 'Classic Works'],
      ];

      break;

    case 'chapter-01-following-hard-after-god':
    case 'chapter-02-the-blessedness-of-possessing-nothing':
    case 'chapter-03-removing-the-veil':
    case 'chapter-04-apprehending-god':
    case 'chapter-05-the-universal-presence':
    case 'chapter-06-the-speaking-voice':
    case 'chapter-07-the-gaze-of-the-soul':
    case 'chapter-08-restoring-the-creator-creature-relation':
    case 'chapter-09-meekness-and-rest':
    case 'chapter-10-the-sacrament-of-living':
      // get the table of contents
      $toc = egp_tocPursuitOfGod();

      // find the specific chapter
      $rowIndex = array_search_callback(
        $toc,
        function ($chapter) use ($token) {
          return $chapter->_id === substr($token, 0, 10);
        }
      );

      // establish the parent URL
      $parentURL = '/classic-works/aw-tozer-pursuit-of-god';

      $output = (object) [
        '_id' => $token,
        'title' => $toc[$rowIndex]->title,
        'subtitle' => new BS_Link(['to' => $parentURL], '“The Pursuit of God”') . ' – ' . $toc[$rowIndex]->subtitle,
        'parent' => 'A.W. Tozer – The Pursuit of God',
        'parentURL' => $parentURL,
        'variant' => 'ClassicWorks',
        'url' => $toc[$rowIndex]->url,
        'sequence' => $toc[$rowIndex]->_id,
        'source' => $parentURL . '/' . $toc[$rowIndex]->_id . '.php',
        'book' => $toc[$rowIndex],
        'previous' => $toc[$rowIndex - 1]
          ? ['url' => $toc[$rowIndex - 1]->url, 'title' => $toc[$rowIndex - 1]->subtitle . ' – ' . $toc[$rowIndex - 1]->title]
          : ['url' => $parentURL, 'title' => 'Table of Contents'],
        'next' => $toc[$rowIndex + 1]
          ? ['url' => $toc[$rowIndex + 1]->url, 'title' => $toc[$rowIndex + 1]->subtitle . ' – ' . $toc[$rowIndex + 1]->title]
          : ['url' => '/classic-works', 'title' => 'Classic Works'],
      ];

      break;

    case 'classic-works':
      $output = (object) [
        '_id' => $token,
        'title' => 'Classic Works',
        'subtitle' => 'books by various Christian authors',
        'variant' => 'ClassicWorks',
        'url' => '/' . $token,
        'sequence' => 'Classic Works',
        'source' => '/' . $token . '/index.php',
      ];

      break;

    case 'discipleship-tools':
      $output = (object) [
        '_id' => $token,
        'title' => 'Discipleship Tools',
        'subtitle' => 'building a foundation for your walk with God',
        'variant' => 'DiscipleshipTools',
        'url' => '/' . $token,
        'sequence' => 'Discipleship Tools',
        'source' => '/' . $token . '/index.php',
      ];

      break;

    case 'egp-blog':
      $output = (object) [
        '_id' => $token,
        'title' => 'EGP Blog',
        'subtitle' => 'Christian quotes, mini-articles, music, and more',
        'variant' => 'EGPBlog',
        'url' => '/' . $token,
        'sequence' => 'EGP Blog',
        'source' => '/' . $token . '/index.php',
      ];

      break;

    case 'greek-alphabet':
      $output = (object) [
        '_id' => $token,
        'title' => 'Greek Alphabet',
        'subtitle' => 'learn New Testament Koine Greek',
        'variant' => 'WordStudy',
        'url' => '/teach-yourself-greek/' . $token,
        'sequence' => 'Greek Alphabet',
        'source' => '/teach-yourself-greek/' . $token . '.php',
        'previous' => ['url' => '/teach-yourself-greek', 'title' => 'Teach Yourself Greek – Table of Contents'],
        'next' => ['url' => '/teach-yourself-greek/pronunciation-and-punctuation', 'title' => 'Pronunciation and Punctuation'],
      ];

      break;

    case 'lexicons-word-study':
      $output = (object) [
        '_id' => $token,
        'title' => 'Lexicons (Word Study)',
        'subtitle' => 'explore the original languages of the Bible',
        'variant' => 'WordStudy',
        'url' => '/' . $token,
        'sequence' => 'Lexicons Word Study',
        'source' => '/' . $token . '/index.php',
      ];

      break;

    case 'pamphili-eusebius-ecclesiastical-history':
      $output = (object) [
        '_id' => $token,
        'title' => 'Eusebius – Ecclesiastical History',
        'subtitle' => 'a.k.a., “Church History” by Pamphili Eusebius',
        'parent' => 'Classic Works',
        'variant' => 'ClassicWorks',
        'url' => '/classic-works/' . $token,
        'sequence' => 'Eusebius Ecclesiastical History',
        'source' => '/classic-works/' . $token . '/index.php',
      ];

      break;

    case 'parallel-bible':
      $output = (object) [
        '_id' => $token,
        'title' => 'Parallel Bible',
        'subtitle' => 'read and compare multiple versions of the Bible',
        'variant' => 'BibleStudyTools',
        'url' => '/bible-study-tools/' . $token,
        'sequence' => 'Parallel Bible',
        'source' => '/' . $token . '/index.php',
      ];

      break;

    case 'pronunciation-and-punctuation':
      $output = (object) [
        '_id' => $token,
        'title' => 'Pronunciation and Punctuation',
        'subtitle' => 'learn New Testament Koine Greek',
        'variant' => 'WordStudy',
        'url' => '/teach-yourself-greek/' . $token,
        'sequence' => 'Pronunciation and Punctuation',
        'source' => '/teach-yourself-greek/' . $token . '.php',
        'previous' => ['url' => '/teach-yourself-greek/greek-alphabet', 'title' => 'Greek Alphabet'],
        'next' => ['url' => '/teach-yourself-greek', 'title' => 'Teach Yourself Greek – Table of Contents'],
      ];

      break;

    case 'teach-yourself-greek':
      $output = (object) [
        '_id' => $token,
        'title' => 'Teach Yourself Greek',
        'subtitle' => 'learn New Testament Koine Greek',
        'variant' => 'WordStudy',
        'url' => '/' . $token,
        'sequence' => 'Teach Yourself Greek',
        'source' => '/' . $token . '/index.php',
        'next' => ['url' => '/' . $token . '/greek-alphabet', 'title' => 'Greek Alphabet'],
      ];

      break;

    case 'thomas-kempis-imitation-of-christ':
      $output = (object) [
        '_id' => $token,
        'title' => 'Kempis – The Imitation of Christ',
        'subtitle' => 'by Thomas à Kempis',
        'parent' => 'Classic Works',
        'variant' => 'ClassicWorks',
        'url' => '/classic-works/' . $token,
        'sequence' => 'Kempis Imitation of Christ',
        'source' => '/classic-works/' . $token . '/index.php',
      ];

      break;

    default:
      global $db;

      $sql =
        "SELECT Collection, Document" .
        "\nFROM Documents" .
        "\nWHERE" .
        "\n  Collection IN('bible-books', 'bible-chapters', 'bible-ranges', 'blog', 'language-letters', 'lexicon-entries', 'lexicon-languages', 'reading-plans')" .
        "\n  AND CASE Collection" .
        "\n  	 WHEN 'language-letters'" .
        "\n    THEN REPLACE(REPLACE(_id, 'greek-', 'alphabet-'), 'hebrew-', 'alphabet-')" .
        "\n  	 WHEN 'lexicon-languages'" .
        "\n    THEN CONCAT(CASE _id WHEN 'hebrew' THEN 'old-testament' ELSE 'new-testament' END, '-', _id)" .
        "\n    ELSE _id" .
        "\n  END = ?";
      $row = $db->row($sql, [$token]);

      if ($row) {
        // parse the JSON document
        $output = json_decode($row['Document']);

        switch ($row['Collection']) {
          case 'bible-books':
            $output->variant = 'BibleStudyTools';
            $output->parent = 'Parallel Bible';
            $output->parentURL = '/bible-study-tools/parallel-bible';
            $output->subtitle = 'read and compare multiple versions of the Bible';
            $output->source = '/parallel-bible/book-' . $output->sequence . '.php';

            break;

          case 'bible-chapters':
            $output->variant = 'BibleStudyTools';
            $output->parent = 'Parallel Bible';
            $output->parentURL = '/bible-study-tools/parallel-bible';
            $output->subtitle = 'read and compare multiple versions of the Bible';
            $output->source = '/parallel-bible/bible-chapter-template.php';

            break;

          case 'bible-ranges':
            if (!$output->parent) return false;

            $output->variant = 'BibleStudyTools';
            $output->parent = 'Parallel Bible';
            $output->parentURL = '/bible-study-tools/parallel-bible';
            $output->url = $output->parentURL . '/' . $output->_id;
            $output->subtitle = 'read and compare multiple versions of the Bible';
            $output->source = '/parallel-bible/range-' . $output->_id . '.php';

            break;

          case 'blog':
            $output->variant = 'EGPBlog';
            $output->parent = 'EGP Blog';
            $output->parentURL = '/egp-blog';
            $output->subtitle =
              new BS_Link(['to' => $output->parentURL], 'EGP Blog') .
              ' post from ' .
              date('F j, Y', strtotime($output->published));
            $output->source = $output->parentURL . '/' . $token . '.php';

            break;

          case 'language-letters':
            $output->title =
              $output->language === 'hebrew'
              ? str_replace(']/[', ']&lrm;/&lrm;[', $output->title)
              : $output->title;
            $output->testament = ($output->language === 'hebrew' ? 'Old' : 'New') . ' Testament';
            $output->subtitle = $output->parent . ' words that start with ' . $output->name;
            $output->variant = 'WordStudy';
            $output->parent = $output->testament . ' ' . ucfirst($output->language);
            $output->source = '/lexicons-word-study/alphabet-template.php';

            break;

          case 'lexicon-entries':
            $output->title =
              $output->language === 'hebrew'
              ? str_replace(']/[', ']&lrm;/&lrm;[', $output->title)
              : $output->title;
            $output->testament = ($output->language === 'hebrew' ? 'Old' : 'New') . ' Testament';
            $output->subtitle = $output->shortDefinition;
            $output->variant = 'WordStudy';
            $output->parent = 'Lexicons (Word Study)';
            $output->source = '/lexicons-word-study/entry-template.php';

            break;

          case 'lexicon-languages':
            $output->testament = ($output->_id === 'hebrew' ? 'Old' : 'New') . ' Testament';
            $output->subtitle = 'explore the original languages of the ' . $output->testament;
            $output->variant = 'WordStudy';
            $output->parent = 'Lexicons (Word Study)';
            $output->source = '/lexicons-word-study/language-template.php';

            break;

          case 'reading-plans':
            $output->subtitle = 'approximately ' . $output->minutes . ' minutes of reading per day';
            $output->variant = 'BibleReadingPlans';
            $output->parent = 'Bible Reading Plans';
            $output->source = '/bible-reading-plans/plan-template.php';

            break;

          default:
            die(implode('', [
              new BS_Paragraph(null, 'Unsupported collection: ' . $row['Collection'] . ' for “' . $token . '”'),
              new BS_Preformatted(['item' => $output]),
            ]));
        }
      }
  }

  return $output ? $output : false;
}
