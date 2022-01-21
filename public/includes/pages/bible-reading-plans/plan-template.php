<?php
$html->add(new BS_Banner(
  null,

  $metadata->description
    ?: 'This is a time-based Bible reading plan, displaying the passages to read for the day. ' .
      'It should take approximately ' .
      $metadata->minutes .
      ' minutes to read the passages aloud at an average reading speed across ' .
      $metadata->days .
      ' days.'
));

// non-annual plans are just a list
if ($metadata->days != 365) {
  $planDetails = new BS_List(
    [
      'items' => array_map(
        function ($detail) {
          return new BS_Span(
            null,
            is_array($detail) ? implode('; ', $detail) : $detail
          );
        },
        $metadata->details
      ),
      'ordered' => true,
      'className' => 'BibleReadingPlanList pb-5',
    ]
  );
}
// annual plans are lists by month
else {
  // split the plan details into months
  $planDetails = $metadata->details;
  $months = [];
  $months['January'] = array_splice($planDetails, 0, 31);
  $months['February'] = array_splice($planDetails, 0, 28);
  $months['March'] = array_splice($planDetails, 0, 31);
  $months['April'] = array_splice($planDetails, 0, 30);
  $months['May'] = array_splice($planDetails, 0, 31);
  $months['June'] = array_splice($planDetails, 0, 30);
  $months['July'] = array_splice($planDetails, 0, 31);
  $months['August'] = array_splice($planDetails, 0, 31);
  $months['September'] = array_splice($planDetails, 0, 30);
  $months['October'] = array_splice($planDetails, 0, 31);
  $months['November'] = array_splice($planDetails, 0, 30);
  $months['December'] = array_splice($planDetails, 0, 31);

  $planDetails = new BS_Row(
    null,
    ...array_map(
      function ($month) {
        global $metadata, $months;

        return new BS_Col(
          [
            'md' => $metadata->_id === 'whole-bible-chronologically-in-a-year' ? null : 6,
            'lg' => $metadata->_id === 'whole-bible-chronologically-in-a-year' ? 6 : null,
            'xl' => $metadata->_id === 'whole-bible-chronologically-in-a-year' ? null : 4,
            'className' => 'border-lg-top border-5 border-light py-5',
          ],

          new BS_Heading2([ 'className' => 'h3' ], $month),

          new BS_List(
            [
              'items' => array_map(
                function ($detail) {
                  return new BS_Span(
                    null,
                    is_array($detail) ? implode('; ', $detail) : $detail
                  );
                },
                $months[$month]
              ),
              'ordered' => true,
              'className' => 'BibleReadingPlanMonth',
            ]
          ),
        );
      },
      array_keys($months)
    )
  );
}

$html->add(new BS_Container(
  [ 'className' => 'py-section' ],

  $planDetails,

  new BS_PreviousNext([
    'previous' => [ 'url' => '/bible-reading-plans', 'title' => 'Time-Based Bible Reading Plans' ]
  ]),
));
