<?php
$languages = egp_languages();
$languageCount = count($languages);
for ($languageIndex = 0; $languageIndex < $languageCount; $languageIndex++) {
  if ($languages[$languageIndex]->_id === $metadata->language) break;
}
// page_crash($metadata);

// define basic summary
$summary = [];
$summary['Strong’s ID'] = $metadata->strongs->_id;
$summary[$languages[$languageIndex]->name . ' Word'] = $metadata->name;
$summary['Transliteration'] = $metadata->word;
$summary['Pronunciation'] = $metadata->pronunciation;
if ($metadata->partOfSpeech)
  $summary['Part of Speech'] = $metadata->partOfSpeech;
if ($metadata->etymology)
  $summary['Etymology'] = $metadata->etymology; // https://en.wikipedia.org/wiki/Etymology
if ($metadata->comparables)
  $summary['Comparables'] = $metadata->comparables;
if ($metadata->equivalents)
  $summary['Equivalents'] = $metadata->equivalents;
if ($metadata->occurrences)
  $summary['Usage Count'] = $metadata->occurrences;
if ($metadata->strongs) {
  $summary['Search'] =
    new BS_Link(
      [
        'to' =>
        '/bible-study-tools/bible-search?search='
          . strtoupper(substr($metadata->language, 0, 1))
          . substr($metadata->strongs->_id, 1)
          . '&range='
          . ($metadata->testament === 'Old Testament' ? 'old-testament' : 'new-testament')
      ],

      'Find “' . $metadata->word . '” in the Bible (' . $metadata->testament . ')'
    );
}

// retrieve lexicon definitions
$sql =
  "SELECT l.Document AS lexicon, d.Document AS definition" .
  "\nFROM Documents d" .
  "\nLEFT JOIN Documents l" .
  "\n  ON l.Collection = 'lexicons'" .
  "\n  AND l._id = LEFT(d._id, LOCATE('-', d._id) - 1)" .
  "\nWHERE" .
  "\n  d.Collection = 'lexicon-definitions'" .
  "\n  AND d.Document LIKE ?" .
  "\nORDER BY l.Sequence";
$rows = $db->rows($sql, ['%"entry":"' . $metadata->_id . '"%']);

// retrieve previous/next
if ($metadata->previous)
  $metadata->previous = $db->document('lexicon-entries', $metadata->previous);
if ($metadata->next)
  $metadata->next = $db->document('lexicon-entries', $metadata->next);

// sort inflections
if ($metadata->inflections) {
  uasort(
    $metadata->inflections,
    function ($a, $b) {
      return egp_inflectionName($a->flags) > egp_inflectionName($b->flags) ? 1 : -1;
    }
  );
  $metadata->inflections = array_values($metadata->inflections);
}

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_Nav([
    'tabs' => true,
    'items' => $languages,
    'activeItem' => $metadata->language,
    'className' => 'h4 mb-5',
  ]),

  new BS_DefinitionList(['items' => $summary, 'className' => 'mb-5']),

  implode('', array_map(
    function ($row) {
      $lexicon = json_decode($row['lexicon']);
      $definition = json_decode($row['definition']);

      return implode(
        '',
        [
          new BS_Heading2(null, $lexicon->title),

          new BS_Blockquote(null, new BS_Paragraph(null, $definition->definition)),

          $lexicon->copyright
            ? new BS_Paragraph(
              ['className' => 'small text-muted'],

              new BS_Italics(null, $lexicon->copyright)
            )
            : null,
        ]
      );
    },

    $rows
  )),

  $metadata->inflections
    ? new BS_SectionWithHeader(
      [
        'id' => 'inflections',
        'title' => 'Inflections',
        'subtitle' => 'a change in the form of a word to express a grammatical function or attribute',
      ],

      new BS_Row(
        null,

        ...array_map(
          function ($inflection) {
            return new BS_Col(
              ['md' => 4],

              new BS_Span(['className' => 'fs-4'], $inflection->name),
              ' – ',
              egp_inflectionName($inflection->flags),
            );
          },

          $metadata->inflections
        )
      ),

      new BS_Heading3(['className' => 'mt-5'], 'Inflection Legend'),

      new BS_Row(
        null,

        ...array_map(
          function ($inflectionType) {
            return new BS_Col(
              ['md' => 4],

              new BS_Heading4(
                ['className' => 'mt-2'],

                $inflectionType->title
              ),

              new BS_List([
                'items' => array_map(
                  function ($inflectionFlag) {
                    return $inflectionFlag->_id . ' – ' . $inflectionFlag->title;
                  },

                  $inflectionType->flags
                )
              ]),
            );
          },

          egp_inflectionTypes()
        )
      ),
    )
    : null,

  new BS_Pagination([
    'items' => $languages[$languageIndex]->letters,
    'className' => 'mt-element',
  ]),

  new BS_PreviousNext([
    'previous' => $metadata->previous ?: $languages[$languageIndex],
    'next' => $metadata->next ?: $languages[$languageIndex],
    'className' => 'mt-5'
  ]),
));

// $html->add(new BS_Preformatted([ 'item' => $metadata ]));
// $html->add(new BS_Preformatted([ 'item' => $languages[$languageIndex] ]));
