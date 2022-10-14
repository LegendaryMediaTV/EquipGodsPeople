<?php
$html->add(new BS_Banner(
  null,
  'Welcome to EGP! Here, you’ll find online Bibles, study resources, and a Christian blog. Search, read, and',
  'compare multiple versions of the Bible. Find EGP Blog Christian quotes, mini-articles, music, and more!'
));

// features
$html->add(new BS_Container(
  ['fluid' => true, 'id' => 'Features', 'ariaLabel' => 'features'],
  new BS_Row(
    null,
    ...array_map(
      function ($feature) {
        return new BS_Col(
          ['lg' => 6, 'xl' => 4, 'id' => $feature['_id'], 'className' => 'Feature'],
          new BS_Link(
            ['to' => $feature['url']],

            new BS_Heading2(['className' => 'h2'], $feature["title"]),

            new BS_Paragraph(
              ['className' => 'text-light text-decoration-none'],
              $feature["subtitle"]
            )
          )
        );
      },
      [
        [
          '_id' => 'FeatureBibleStudyTools',
          'title' => 'Bible Study Tools',
          'subtitle' => 'search, read, and compare multiple versions of the Bible',
          'url' => '/bible-study-tools',
        ],
        [
          '_id' => 'FeatureWordStudy',
          'title' => 'Lexicons (Word Study)',
          'subtitle' => 'explore the original languages of the Bible',
          'url' => '/lexicons-word-study',
        ],
        [
          '_id' => 'FeatureEGPBlog',
          'title' => 'EGP Blog',
          'subtitle' => 'Christian quotes, mini-articles, music, and more',
          'url' => '/egp-blog',
        ],
        [
          '_id' => 'FeatureBibleReadingPlans',
          'title' => 'Bible Reading Plans',
          'subtitle' => 'time-based plans for reading the Bible',
          'url' => '/bible-reading-plans',
        ],
        [
          '_id' => 'FeatureDiscipleshipTools',
          'title' => 'Discipleship Tools',
          'subtitle' => 'building a foundation for your walk with God',
          'url' => '/discipleship-tools',
        ],
        [
          '_id' => 'FeatureClassicWorks',
          'title' => 'Classic Works',
          'subtitle' => 'books by various Christian authors',
          'url' => '/classic-works',
        ],
      ]
    )
  )
));

// latest blog entries
$html->add(new BS_Container(
  [
    'id' => 'LatestBlogEntries',
    'ariaLabelledBy' => 'LatestBlogEntriesHeading',
    'fluid' => true,
    'className' => 'py-section',
  ],
  new BS_Row(
    ['className' => 'justify-content-center'],
    new BS_Col(
      ['xs' => 12, 'xl' => 10],

      new BS_SectionHeader([
        'title' => 'Latest Blog Entries',
        'titleID' => 'LatestBlogEntriesHeading',
        'subtitle' => 'Christian quotes, mini-articles, music, and more',
      ]),

      new BS_BlogEntries(['limit' => 12])
    )
  )
));
