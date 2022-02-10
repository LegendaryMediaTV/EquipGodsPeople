<?php
$html->add(new BS_Banner(
  null,

  'This section provides various time-based plans for reading the Bible, displaying the daily passages.' .
  ' These plans are based on the time it would take to read the passages aloud at an average reading speed.'
));

$sql =
  "SELECT Document" .
  "\nFROM Documents" .
  "\nWHERE Collection = 'reading-plans'" .
  "\nORDER BY Sequence";
$rows = $db->rows($sql);

$html->add(new BS_Container(
  [ 'className' => 'py-section' ],

  new BS_Row(
    null,
    ...array_map(
      function ($readingPlan) {
        $readingPlan = json_decode($readingPlan['Document']);

        return new BS_Col(
          [ 'lg' => 6, 'className' => 'border-lg-top border-5 border-light py-5' ],

          new BS_Heading2([ 'className' => 'h3' ], htmlspecialchars($readingPlan->title)),

          new BS_Paragraph(
            [ 'className' => 'text-muted' ],
            new BS_Italics(
              null,
              'approximately ' . $readingPlan->minutes . ' minutes of reading per day'
            )
          ),
          
          new BS_Link(
            [ 'to' => $readingPlan->url, 'className' => 'small' ],

            'VIEW READING PLAN',
            
            new BS_Icon([ 'name' => 'fa-solid fa-caret-right', 'alt' => '' ]),
          ),
        );
      },
      $rows
    )
  )
));
