<?php
$languages = egp_languages();
$languageCount = count($languages);
for ($languageIndex = 0; $languageIndex < $languageCount; $languageIndex++) {
  if ($languages[$languageIndex]->_id === $metadata->language) break;
}

// define the separator for final forms
$finalSeparator =
  $languages[$languageIndex]->_id === 'hebrew'
  ? ' &lrm;/&lrm; '
  : ' / ';

// define basic summary
$summary = [];
$summary[$languages[$languageIndex]->name . ' Name'] = $metadata->spelling;
$summary['English Name'] = $metadata->name;
if ($metadata->pronunciation)
  $summary['Pronunciation'] = $metadata->pronunciation;
if ($metadata->upperLetter) {
  $summary['Upper-case Letter'] = $metadata->upperLetter;
  $summary['Lower-case Letter'] = $metadata->letter;
} else
  $summary['Letter'] = $metadata->letter;
$summary['Speech Sound'] =
  $metadata->vowel
  ? 'vowel' . (isset($metadata->longVowel) ? $metadata->longVowel ? ' (long)' : ' (short)' : '')
  : 'consonant';
$summary['Numerical Value'] = $metadata->value;

// add final forms to the summary
if ($metadata->final) {
  $summary[$languages[$languageIndex]->name . ' Name'] .=
    $finalSeparator .
    $metadata->final['spelling'] .
    ' °';
  $summary['English Name'] .=
    $finalSeparator .
    $metadata->final['name'] .
    ' °';
  if ($metadata->final['pronunciation']) {
    $summary['Pronunciation'] .=
      $finalSeparator .
      $metadata->final['pronunciation'] .
      ' °';
  }
  $summary[$metadata->upperLetter ? 'Lower-case Letter' : 'Letter'] .=
    $finalSeparator .
    $metadata->final['letter'] .
    ' °';
  $summary['Numerical Value'] .=
    $finalSeparator .
    $metadata->final['value'] .
    ' °';
}

$html->add(new BS_Container(
  ['className' => 'py-section'],

  new BS_Nav([
    'tabs' => true,
    'items' => $languages,
    'activeItem' => $metadata->language,
    'className' => 'h4 mb-5',
  ]),

  new BS_DefinitionList(['items' => $summary]),

  $metadata->final
    ? new BS_Paragraph(
      ['className' => 'text-muted small'],

      '° this value is associated with the ',
      new BS_Link(['to' => 'https://en.wikipedia.org/wiki/Final_form'], 'final form'),
      ' of the letter, which is when it is the last letter of the word'
    )
    : null,

  new BS_LexiconEntrySelector([
    'language' => $languages[$languageIndex],
    'letter' => $metadata,
    'className' => 'mt-5'
  ]),

  new BS_Pagination([
    'items' => $languages[$languageIndex]->letters,
    'className' => 'mt-5',
  ]),
));

// $html->add(new BS_Preformatted([ 'item' => $metadata ]));
// $html->add(new BS_Preformatted([ 'item' => $languages[$languageIndex] ]));
