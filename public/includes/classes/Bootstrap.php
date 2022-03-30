<?php
////////////////////////////////////////////////////////////////////////////////
////////// HTML Core
////////////////////////////////////////////////////////////////////////////////

class BS_HTML {
  /**********************
   ***** Properties *****
   *********************/

  public $properties;
  public $children;

  /*************************
   ***** Magic Methods *****
   ************************/

  function __construct($properties = null, ...$children) {
    $this->properties = $properties ?: [];
    $this->children = $children;

    // ensure className property is an array
    if ($this->properties['className']) {
      if (!is_array($this->properties['className']))
        $this->properties['className'] = explode(' ', $this->properties['className']);
    } else $this->properties['className'] = [];

    // ensure style property is an array
    if ($this->properties['style']) {
      if (!is_array($this->properties['style']))
        $this->properties['style'] = explode(' ', $this->properties['style']);
    } else $this->properties['style'] = [];
  }

  function __toString() {
    return $this->render();
  }

  /*******************
   ***** Methods *****
   ******************/

  function renderAttributes() {
    $output = [];

    static $blankable = ['alt', 'value'];

    // couples
    if ($this->properties['disabled']) {
      if (($this->properties['tabIndex'] ?: '') === '')
        $this->properties['tabIndex'] = -1;
      if (($this->properties['ariaDisabled'] ?: '') === '')
        $this->properties['ariaDisabled'] = true;
    }
    if ($this->properties['bsDataTarget'] && !$this->properties['ariaControls'])
      $this->properties['ariaControls'] = $this->properties['bsDataTarget'];

    // attribute name replacements
    static $keySwap = [
      // add HTML attributes
      'className' => 'class',
      'direction' => 'dir',
      'tabIndex' => 'tabindex',

      // add ARIA attributes
      'ariaControls' => 'aria-controls',
      'ariaCurrent' => 'aria-current',
      'ariaDisabled' => 'aria-disabled',
      'ariaExpanded' => 'aria-expanded',
      'ariaHidden' => 'aria-hidden',
      'ariaLabel' => 'aria-label',
      'ariaLabelledBy' => 'aria-labelledby',
      'ariaRole' => 'role',

      // add Bootstrap data attributes
      'bsDataBackdrop' => 'data-bs-backdrop',
      'bsDataContent' => 'data-bs-content',
      'bsDataDismiss' => 'data-bs-dismiss',
      'bsDataHTML' => 'data-bs-html',
      'bsDataKeyboard' => 'data-bs-keyboard',
      'bsDataPlacement' => 'data-bs-placement',
      'bsDataTarget' => 'data-bs-target',
      'bsDataToggle' => 'data-bs-toggle',
      'bsDataTrigger' => 'data-bs-trigger',

      // add JavaScript event attributes
      'onClick' => 'onclick',
    ];

    foreach ($this->properties as $key => $value) {
      if ($keySwap[$key]) $key = $keySwap[$key];

      // TODO: title and bsDataContent BB code translation

      switch ($key) {
          // only true
        case 'aria-current':
        case 'aria-disabled':
        case 'data-bs-html':
          if ($value)
            $output[] = $key . '="true"';

          break;

        case 'aria-expanded':
        case 'aria-hidden':
        case 'data-bs-keyboard':
          if ($value === true || $value === false)
            $output[] = $key . '="' . ($value ? 'true' : 'false') . '"';

          break;

          // ID hashtag prefix
        case 'data-bs-target':
          $output[] = $key . '="' . (strpos($value, '#') !== 0 ? '#' : '') . $value . '"';

          break;

          // class names
        case 'class':
          if (count($value))
            $output[] = $key . '="' . implode(' ', $value) . '"';

          break;

          // ignore
        case 'style':
        case 'tag':
          break;

        default:
          // null out blank values that aren't expected to be blank sometimes
          if ($value === '' && !in_array($key, $blankable)) $value = null;

          if (!is_null($value)) {
            if ($value === true) $output[] = $key;
            elseif ($value !== false)
              $output[] = $key . '="' . htmlspecialchars($value) . '"';
          }

          break;
      }
    }

    sort($output);

    return count($output) ? ' ' . implode(' ', $output) : '';
  }

  function render() {
    static $selfClosing = ["br", "hr", "img", "link", "meta"];

    return
      '<' . ($this->properties['tag'] ?: 'div') . $this->renderAttributes() . '>' .
      (!in_array($this->properties['tag'], $selfClosing)
        ? implode('', $this->children) .
        '</' . ($this->properties['tag'] ?: 'div') . '>'
        : '');
  }
}

class BS_HTMLPage {
  /**********************
   ***** Properties *****
   *********************/

  public $metadata;
  public $body;

  /*************************
   ***** Magic Methods *****
   ************************/

  function __construct($metadata = null) {
    $this->metadata = $metadata;
    $this->body = '';
  }

  function __toString() {
    $output =
      '<!doctype html>' .
      '<html lang="en">' .
      $this->renderHead() .
      $this->renderBody() .
      '</html>';

    return $output;
  }

  /**************************
   ***** Render Methods *****
   *************************/

  function add($text) {
    $this->body .= $text;
  }

  function renderBody() {
    return
      '<body>' .
      new BS_Main(
        [
          'ariaLabelledBy' => 'HeroHeading',
          'className' => $this->metadata->admin ? 'pb-3 px-3' : null
        ],

        $this->renderHero(),
        $this->body,
      ) .
      $this->renderFooter() .
      $this->renderMenu() .
      $this->renderScripts() .
      '</body>';
  }

  function renderFooter() {
    $navItems = [
      ['url' => '/bible-search', 'title' => 'Bible Search'],
      ['url' => '/egp-blog', 'title' => 'EGP Blog'],
      ['url' => '/lexicons-word-study', 'title' => 'Lexicons (Word Study)'],
      ['url' => '/bible-reading-plans', 'title' => 'Bible Reading Plans'],
      ['url' => '/discipleship-tools', 'title' => 'Discipleship Tools'],
      ['url' => '/classic-works', 'title' => 'Classic Works'],
    ];

    $socialItems = [
      [
        'url' => 'https://instagram.com/equipgodspeople',
        'icon' => 'fa-brands fa-instagram',
        'title' => 'Instagram',
      ],
      [
        'url' => 'https://twitter.com/equipgodspeople',
        'icon' => 'fa-brands fa-twitter',
        'title' => 'Twitter',
      ],
      [
        'url' => 'https://www.facebook.com/EquipGodsPeople',
        'icon' => 'fa-brands fa-facebook-f',
        'title' => 'Facebook',
      ],
      [
        'url' => 'mailto:webmaster@equipgodspeople.com',
        'icon' => 'fa-solid fa-envelope',
        'title' => 'Email',
      ],
    ];

    return !$this->metadata->admin
      ? new BS_Footer(
        [
          'id' => 'Footer',
          'ariaLabel' => 'page footer',
          'className' => 'bg-secondary py-section'
        ],

        new BS_Container(
          null,
          new BS_Row(
            null,

            // terms of use
            new BS_Col(
              [
                'ariaLabelledBy' => 'FooterTermsOfUseHeading',
                'xs' => true,
                'md' => 12,
                'lg' => 4,
                'className' => 'py-4',
              ],

              new BS_Heading3(
                ['id' => 'FooterTermsOfUseHeading', 'className' => 'mb-3'],
                'Terms of Use'
              ),

              new BS_Paragraph(
                ['className' => 'text-light'],

                'You may freely reproduce articles from this site for church or small study group use. However, copies may ',
                new BS_Strong(null, 'not'),
                ' be sold, or included in any product for sale without written permission.'
              )
            ),

            // quick links
            new BS_Col(
              [
                'ariaLabelledBy' => 'FooterQuickLinksHeading',
                'md' => 6,
                'lg' => 4,
                'className' => 'py-4 border-lg-start border-white-50',
              ],


              new BS_Heading3(
                ['id' => 'FooterQuickLinksHeading', 'className' => 'mb-3'],
                'Quick Links'
              ),

              new BS_Nav([
                'vertical' => true,
                'className' => 'text-light',
                'items' => $navItems,
              ]),
            ),

            // latest blog entries
            new BS_Col(
              [
                'ariaLabelledBy' => 'FooterLatestBlogEntriesHeading',
                'md' => 6,
                'lg' => 4,
                'className' => 'py-4 border-md-start border-white-50',
              ],


              new BS_Heading3(
                ['id' => 'FooterLatestBlogEntriesHeading', 'className' => 'mb-3'],
                'Latest Blog Entries'
              ),

              new BS_BlogEntriesNav(['vertical' => true, 'className' => 'text-light']),
            ),
          )
        ),

        // social icons
        new BS_Division(
          [
            'id' => 'FooterSocialMedia',
            'ariaLabel' => 'social media links',
            'className' => 'pt-element',
          ],
          new BS_Nav(
            ['className' => 'justify-content-center'],
            ...array_map(
              function ($item) {
                return new BS_NavItem(
                  null,
                  new BS_NavLink(
                    [
                      'to' => $item['url'],
                      'className' => 'px-2',
                      //'newTab' => substr($item['url'], 0, 8) === 'https://',
                      'external' => false,
                    ],
                    new BS_Icon([
                      'name' => $item['icon'],
                      'alt' => $item['title'],
                      'className' => 'rounded-circle',
                    ])
                  )
                );
              },
              $socialItems
            )
          )
        ),

        // copyright
        new BS_Division(
          [
            'id' => 'FooterCopyright',
            'ariaLabel' => 'site copyright',
            'className' => 'text-center small pt-element',
          ],

          $GLOBALS['siteTitle'] . ' © 2003–' . (new DateTime())->format('Y') . '. All rights reserved.'
        )
      )
      : null;
  }

  function renderHead() {
    $appColor = '#2c84bb';

    return
      '<head>' .

      '<title>' .
      egp_bb($this->metadata->title
        ? str_replace('–', '/', $this->metadata->title) .
        ($this->metadata->parent ? ' – ' . str_replace('–', '/', $this->metadata->parent) : '') .
        ' | ' .
        $GLOBALS['siteTitle']
        : $GLOBALS['siteTitle'], true) .
      '</title>' .

      '<meta charset="utf-8">' .
      '<meta name="viewport" content="width=device-width, initial-scale=1">' .
      '<meta name="description" content="' .
      egp_bb($this->metadata->description ?: $GLOBALS['siteDescription'], true) .
      '">' .
      '<meta name="apple-mobile-web-app-title" content="' . $GLOBALS['siteTitle'] . '">' .
      '<meta name="application-name" content="' . $GLOBALS['siteTitle'] . '">' .
      '<meta name="msapplication-TileColor" content="' . $appColor . '">' .
      '<meta name="theme-color" content="' . $appColor . '">' .
      '<meta name="robots" content="noindex,nofollow">' .

      // add Font Awesome icons: https://cdnjs.com/libraries/font-awesome
      '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />' .

      // add Google Fonts
      '<link href="https://fonts.googleapis.com" rel="preconnect">' .
      '<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>' .
      '<link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">' .
      '<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&display=swap" rel="stylesheet">' .
      '<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400&display=swap" rel="stylesheet">' .

      // add site CSS
      '<link href="/dist/main.css?v=2022-02-11" rel="stylesheet">' .

      // add PWA content
      '<link sizes="180x180" href="/apple-touch-icon.png" rel="apple-touch-icon">' .
      '<link sizes="32x32" href="/favicon-32x32.png" rel="icon">' .
      '<link sizes="16x16" href="/favicon-16x16.png" rel="icon">' .
      '<link href="/site.webmanifest" rel="manifest">' .
      '<link color="' . $appColor . '" href="/safari-pinned-tab.svg" rel="mask-icon">' .

      '</head>';
  }

  function renderHero() {
    return !$this->metadata->admin
      ? new BS_Header(
        ['id' => 'Hero', 'className' => $this->metadata->variant ?: "Home"],
        new BS_Division(
          ['id' => 'HeroContent'],
          new BS_Heading1(
            ['id' => 'HeroHeading'],

            new BS_Span(
              ['className' => 'h1 animate__animated animate__fadeInLeft', 'id' => 'HeroTitle'],
              $this->metadata->title ?: $GLOBALS['siteTitle']
            ),

            new BS_Span(
              ['className' => 'animate__animated animate__fadeInRight', 'id' => 'HeroSubtitle'],
              $this->metadata->subtitle ?: $GLOBALS['siteSubtitle']
            )
          )
        )
      )
      : new BS_Heading1(['id' => 'HeroHeading'], $this->metadata->title);
  }

  function renderMenu() {
    $areas = [
      ['_id' => 'all', 'title' => 'All'],
      ['_id' => 'bible', 'title' => 'Bible'],
      ['_id' => 'blog', 'title' => 'EGP Blog'],
      ['_id' => 'classics', 'title' => 'Classic Works'],
      ['_id' => 'lexicons', 'title' => 'All Lexicons'],
      ['_id' => 'hebrew', 'title' => 'Hebrew Lexicons'],
      ['_id' => 'greek', 'title' => 'Greek Lexicons'],
    ];

    $navItems = [
      ['title' => 'Home', 'url' => '/'],
      ['title' => 'Bible Search', 'url' => '/bible-search'],
      ['title' => 'EGP Blog', 'url' => '/egp-blog'],
      [
        '_id' => 'lexicons-word-study',
        'title' => 'Lexicons (Word Study)',
        'url' => '/lexicons-word-study',
        'children' => [
          [
            'title' => 'Old Testament Hebrew',
            'url' => '/lexicons-word-study/old-testament-hebrew',
          ],
          [
            'title' => 'New Testament Greek',
            'url' => '/lexicons-word-study/new-testament-greek',
          ],
        ],
      ],
      ['title' => 'Bible Reading Plans', 'url' => '/bible-reading-plans'],
      ['title' => 'Discipleship Tools', 'url' => '/discipleship-tools'],
      [
        '_id' => 'classic-works',
        'title' => 'Classic Works',
        'url' => '/classic-works',
        'children' => [
          [
            'title' => 'Pamphili Eusebius – Ecclesiastical History',
            'url' => '/classic-works/pamphili-eusebius-ecclesiastical-history',
          ],
        ],
      ],
    ];

    return !$this->metadata->admin
      ? new BS_Button(
        [
          'id' => 'SiteMenuButton',
          'tabIndex' => 1,
          'className' => 'rounded-circle',
          'bsDataToggle' => 'offcanvas',
          'bsDataTarget' => 'SiteMenu',
        ],
        new BS_Icon(['name' => 'fa-solid fa-bars', 'alt' => 'menu'])
      ) .

      new BS_Division(
        [
          'id' => 'SiteMenu',
          'tabIndex' => -1,
          'ariaLabelledBy' => 'SiteMenuHeading',
          'className' => 'offcanvas offcanvas-end',
        ],

        new BS_Division(
          ['className' => 'offcanvas-header bg-primary'],

          new BS_Form(
            ['url' => '/search', 'role' => 'search'],
            new BS_Division(
              ['className' => 'input-group'],

              new BS_Select(
                ['name' => 'area', 'className' => 'input-group-text'],

                ...array_map(
                  function ($area) {
                    return new BS_SelectOption(['value' => $area['_id']], $area['title']);
                  },
                  $areas
                )
              ),

              new BS_Textbox([
                "name" => 'search',
                "placeholder" => 'search',
                "ariaLabel" => 'search',
                "type" => 'search',
              ]),

              new BS_Button(
                ['type' => 'submit', 'variant' => 'secondary'],
                new BS_Icon(['name' => 'fa-solid fa-magnifying-glass', 'alt' => 'search'])
              )
            )
          ),

          new BS_Button(
            [
              'bsDataDismiss' => 'offcanvas',
              'ariaLabel' => 'close menu',
              'variant' => 'link',
              'className' => 'p-0',
            ],
            new BS_Icon(['name' => 'fa-solid fa-xmark', 'alt' => 'close'])
          ),
        ),

        new BS_NavHTML(
          ['className' => 'offcanvas-body bg-secondary'],
          new BS_Nav(
            ['vertical' => true],
            ...array_map(
              function ($navItem) {
                return
                  new BS_NavItem(
                    ['className' => 'd-flex'],

                    new BS_NavLink(
                      ['to' => $navItem['url'], 'className' => 'px-1 py-3 flex-grow-1'],
                      $navItem['title']
                    ),

                    $navItem['children']
                      ? new BS_Button(
                        [
                          'bsDataToggle' => 'collapse',
                          'bsDataTarget' => 'SiteMenu-' . $navItem['_id'],
                          'ariaExpanded' => false,
                          'variant' => 'link',
                          'className' => 'SiteSubmenuToggle align-self-stretch px-2 rounded-0',
                        ],
                        new BS_Icon(['name' => 'fa-solid fa-angle-down', 'alt' => 'collapsed'])
                      )
                      : null
                  ) .

                  ($navItem['children']
                    ? new BS_Collapse(
                      ['id' => 'SiteMenu-' . $navItem['_id']],
                      new BS_Nav(['vertical' => true, 'items' => $navItem['children']])
                    )
                    : null);
              },
              $navItems
            )
          )
        ),
      )
      : null;
  }

  function renderScripts() {
    return
      // add Bootstrap 5 JS: https://getbootstrap.com/docs/5.1/getting-started/introduction/
      '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>' .

      // add Axios and React
      ($this->metadata->react
        ?
        // add Axios JS: https://cdnjs.com/libraries/axios
        '<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>' .

        // add React 17 JS: https://reactjs.org/docs/add-react-to-a-website.html
        '<script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>' .
        '<script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>' .

        // add React Beautiful DnD: https://github.com/atlassian/react-beautiful-dnd/blob/master/docs/about/installation.md
        '<script src="https://unpkg.com/react-beautiful-dnd@13.1.0/dist/react-beautiful-dnd.min.js"></script>'

        : '') .

      // add site script
      ($this->metadata->admin
        ? '<script src="/dist/admin-main.js" type="module"></script>'
        : '<script src="/dist/main.js?v=2022-01-15" type="module"></script>');
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// HTML Elements
////////////////////////////////////////////////////////////////////////////////

class BS_Abbreviation extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'abbr';

    $popover = $this->properties['popover'];
    unset($this->properties['popover']);

    if ($popover) {
      $this->children = [
        new BS_Link(
          [
            'popover' => [
              'title' => $popover['title'],
              'content' => $popover['content']
            ]
          ],
          ...$this->children
        )
      ];
    }

    return parent::render();
  }
}

class BS_Article extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'article';
    return parent::render();
  }
}

class BS_Aside extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'aside';
    return parent::render();
  }
}

class BS_Bold extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'b';
    return parent::render();
  }
}

class BS_Break extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'br';
    return parent::render();
  }
}

class BS_ButtonHTML extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'button';
    if (!$this->properties['type']) $this->properties['type'] = 'button';
    return parent::render();
  }
}

class BS_Citation extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'cite';
    return parent::render();
  }
}

class BS_Division extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'div';
    return parent::render();
  }
}

class BS_Emphasis extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'em';
    return parent::render();
  }
}

class BS_Footer extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'footer';
    return parent::render();
  }
}

class BS_Header extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'header';
    return parent::render();
  }
}

class BS_Heading1 extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'h1';
    return parent::render();
  }
}

class BS_Heading2 extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'h2';
    return parent::render();
  }
}

class BS_Heading3 extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'h3';
    return parent::render();
  }
}

class BS_Heading4 extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'h4';
    return parent::render();
  }
}

class BS_Heading5 extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'h5';
    return parent::render();
  }
}

class BS_Heading6 extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'h6';
    return parent::render();
  }
}

class BS_Icon extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'i';

    $alt = $this->properties['alt'];
    unset($this->properties['alt']);
    $name = $this->properties['name'];
    unset($this->properties['name']);
    $variant = $this->properties['variant'];
    unset($this->properties['variant']);

    // add FontAwesome/Bootstrap classes
    $this->properties['className'][] = $name;
    if ($variant) $this->properties['className'][] = 'text-' . $variant;

    // ensure alternative text is set
    if (is_null($this->properties['ariaLabel'])) {
      if (!is_null($alt)) {
        if ($alt) $this->properties['ariaLabel'] = $alt;
      } else {
        $this->properties['ariaLabel'] =
          str_replace(
            '-',
            ' ',
            preg_replace(
              '/-fill$/',
              '',
              preg_replace(
                '/^[a-z-]+ [a-z]{2}-/',
                '',
                str_replace('-alt', '', $name)
              )
            )
          );
      }
    }

    return parent::render();
  }
}

class BS_IFrame extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'iframe';

    if ($this->properties['url']) $this->properties['src'] = $this->properties['url'];
    unset($this->properties['url']);

    return parent::render();
  }
}

class BS_Image extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'img';

    if ($this->properties['url']) $this->properties['src'] = $this->properties['url'];
    unset($this->properties['url']);
    if (!$this->properties['alt']) $this->properties['alt'] = '';

    $fluid = $this->properties['fluid'];
    unset($this->properties['fluid']);
    $thumbnail = $this->properties['thumbnail'];
    unset($this->properties['thumbnail']);

    // add Bootstrap classes
    if ($fluid) $this->properties['className'][] = 'img-fluid';
    if ($thumbnail) $this->properties['className'][] = 'img-thumbnail';

    return parent::render();
  }
}

class BS_Italics extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'i';
    return parent::render();
  }
}

class BS_Line extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'hr';
    return parent::render();
  }
}

class BS_Link extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'a';

    if ($this->properties['to']) $this->properties['href'] = $this->properties['to'];
    unset($this->properties['to']);

    $external = $this->properties['external'];
    unset($this->properties['external']);
    $newTab = $this->properties['newTab'];
    unset($this->properties['newTab']);
    $popover = $this->properties['popover'];
    unset($this->properties['popover']);
    $variant = $this->properties['variant'];
    unset($this->properties['variant']);

    // popover toggler
    if ($popover) {
      $this->properties['ariaRole'] = "button";
      $this->properties['bsDataToggle'] = "popover";
      $this->properties['bsDataTrigger'] = "focus";
      $this->properties['bsDataPlacement'] = "bottom";
      $this->properties['bsDataHTML'] = true;
      $this->properties['title'] = egp_bb($popover['title']);
      $this->properties['bsDataContent'] = egp_bb($popover['content']);
      if (!$this->properties['href'] && !$variant) $variant = 'muted';
    }
    // standard link
    else
      $external = preg_match('/^https?:/i', $this->properties['href']) && $external !== false;

    // add link attributes
    if ($this->properties['href']) {
      if ($newTab) {
        $this->properties['target'] = '_blank';
        $this->properties['rel'] = 'noopener';
      }
    }
    // add ARIA attributes to non-links
    else {
      if (is_null($this->properties['ariaRole'])) $this->properties['ariaRole'] = 'button';
      if (is_null($this->properties['tabIndex'])) $this->properties['tabIndex'] = 0;
    }

    // add external icon child
    if ($external) {
      $this->children[] = new BS_Icon([
        'name' => 'fa-solid fa-up-right-from-square',
        'alt' => 'external link',
        'variant' => 'muted',
        'className' => 'small ps-1 align-text-top',
      ]);
    }

    // add Bootstrap classes
    if ($this->properties['disabled'])
      $this->properties['className'][] = 'disabled';
    if ($this->properties['bsDataToggle'] === 'popover')
      $this->properties['className'][] = 'cursor-help';
    if ($variant)
      $this->properties['className'][] = 'link-' . $variant;


    return parent::render();
  }
}

class BS_List extends BS_HTML {
  function render() {
    $items = $this->properties['items'];
    unset($this->properties['items']);
    $ordered = $this->properties['ordered'];
    unset($this->properties['ordered']);

    // determine the HTML tag
    if (!$this->properties['tag']) $this->properties['tag'] = $ordered ? 'ol' : 'ul';

    // convert items property to list item children
    if (is_array($items)) {
      foreach ($items as $item)
        $this->children[] = new BS_ListItem(null, $item);
    }

    return parent::render();
  }
}

class BS_ListItem extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'li';
    return parent::render();
  }
}

class BS_Main extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'main';
    return parent::render();
  }
}

class BS_NavHTML extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'nav';
    return parent::render();
  }
}

class BS_Paragraph extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'p';
    return parent::render();
  }
}

class BS_Preformatted extends BS_HTML {
  function render() {
    static $exported = ['array', 'object', 'resource'];

    if (!$this->properties['tag']) $this->properties['tag'] = 'pre';

    $item = $this->properties['item'];
    unset($this->properties['item']);
    $title = $this->properties['title'];
    unset($this->properties['title']);

    // convert title/item property to children
    if (isset($item)) {
      if ($title) $this->children[] = $title . ': ';
      $this->children[] =
        in_array(gettype($item), $exported)
        ? var_export($item, true)
        : $item;
    }

    return parent::render();
  }
}

class BS_Section extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'section';
    return parent::render();
  }
}

class BS_Small extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'small';
    return parent::render();
  }
}

class BS_Span extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'span';
    return parent::render();
  }
}

class BS_Strong extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'strong';
    return parent::render();
  }
}

class BS_Subscript extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'sub';
    return parent::render();
  }
}

class BS_Superscript extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'sup';
    return parent::render();
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Layout
////////////////////////////////////////////////////////////////////////////////

class BS_Col extends BS_Division {
  function render() {
    $xs = $this->properties['xs'];
    unset($this->properties['xs']);
    $sm = $this->properties['sm'];
    unset($this->properties['sm']);
    $md = $this->properties['md'];
    unset($this->properties['md']);
    $lg = $this->properties['lg'];
    unset($this->properties['lg']);
    $xl = $this->properties['xl'];
    unset($this->properties['xl']);
    $xxl = $this->properties['xxl'];
    unset($this->properties['xxl']);

    if (!$xs && !$sm && !$md && !$lg && !$xl && !$xxl)
      $this->properties['className'][] = 'col';
    else {
      if ($xs)
        $this->properties['className'][] = 'col' . ($xs !== true ? '-' . $xs : '');
      if ($sm)
        $this->properties['className'][] = 'col-sm' . ($sm !== true ? '-' . $sm : '');
      if ($md)
        $this->properties['className'][] = 'col-md' . ($md !== true ? '-' . $md : '');
      if ($lg)
        $this->properties['className'][] = 'col-lg' . ($lg !== true ? '-' . $lg : '');
      if ($xl)
        $this->properties['className'][] = 'col-xl' . ($xl !== true ? '-' . $xl : '');
      if ($xxl)
        $this->properties['className'][] = 'col-xxl' . ($xxl !== true ? '-' . $xxl : '');
    }

    return parent::render();
  }
}

class BS_Container extends BS_Section {
  function render() {
    $fluid = $this->properties['fluid'];
    unset($this->properties['fluid']);

    $this->properties['className'][] =
      'container' .
      ($fluid !== false
        ? '-' . ($fluid === true ? 'fluid' : ($fluid ?: 'lg'))
        : '');

    return parent::render();
  }
}

class BS_Row extends BS_Division {
  function render() {
    $this->properties['className'][] = 'row';
    return parent::render();
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Content
////////////////////////////////////////////////////////////////////////////////

class BS_Blockquote extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'blockquote';

    $this->properties['className'][] = 'blockquote';

    return parent::render();
  }
}

class BS_BlockquoteFooter extends BS_Footer {
  function render() {
    $this->properties['className'][] = 'blockquote-footer';

    return parent::render();
  }
}

class BS_DefinitionList extends BS_Row {
  function render() {
    $items = $this->properties['items'];
    unset($this->properties['items']);

    if (!$this->properties['tag']) $this->properties['tag'] = 'dl';

    // convert items property to list item children
    if (is_array($items)) {
      foreach ($items as $itemID => $item) {
        $this->children[] = new BS_DefinitionListTerm(null, $itemID . ':');
        $this->children[] = new BS_DefinitionListData(null, $item);
      }
    }

    return parent::render();
  }
}

class BS_DefinitionListData extends BS_Col {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'dd';

    // add Bootstrap classes
    $this->properties['sm'] = 8;
    $this->properties['md'] = 9;
    $this->properties['lg'] = 10;

    return parent::render();
  }
}

class BS_DefinitionListTerm extends BS_Col {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'dt';

    // add Bootstrap classes
    $this->properties['sm'] = 4;
    $this->properties['md'] = 3;
    $this->properties['lg'] = 2;

    return parent::render();
  }
}

class BS_Display1 extends BS_Heading1 {
  function render() {
    $this->properties['className'][] = 'display-1';
    return parent::render();
  }
}

class BS_Display2 extends BS_Heading2 {
  function render() {
    $this->properties['className'][] = 'display-2';
    return parent::render();
  }
}

class BS_Display3 extends BS_Heading3 {
  function render() {
    $this->properties['className'][] = 'display-3';
    return parent::render();
  }
}

class BS_Display4 extends BS_Heading4 {
  function render() {
    $this->properties['className'][] = 'display-4';
    return parent::render();
  }
}

class BS_Display5 extends BS_Heading5 {
  function render() {
    $this->properties['className'][] = 'display-5';
    return parent::render();
  }
}

class BS_Display6 extends BS_Heading6 {
  function render() {
    $this->properties['className'][] = 'display-6';
    return parent::render();
  }
}

class BS_Lead extends BS_Paragraph {
  function render() {
    $this->properties['className'][] = 'lead';
    return parent::render();
  }
}

class BS_VisuallyHidden extends BS_Span {
  function render() {
    $this->properties['className'][] = 'visually-hidden';
    return parent::render();
  }
}

////////////////////////////////////////////////////////////////////////////////
/////////// Forms
////////////////////////////////////////////////////////////////////////////////

class BS_Form extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'form';

    if ($this->properties['url']) $this->properties['action'] = $this->properties['url'];
    unset($this->properties['url']);
    if (!$this->properties['method']) $this->properties['method'] = 'post';

    return parent::render();
  }
}

// TODO: FormFIeld
// TODO: Label

class BS_Select extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'select';

    $options = $this->properties['options'];
    unset($this->properties['options']);
    $selected = $this->properties['selected'];
    unset($this->properties['selected']);

    // add Bootstrap classes
    $this->properties['className'][] = 'form-select';

    // convert options property to children
    if ($options) {
      foreach ($options as $option) {
        // ensure the option is an object
        if (is_array($option))
          $option = (object) $option;

        $this->children[] = new BS_SelectOption([
          'item' => $option,
          'selected' => $selected === (gettype($option) === 'object' ? $option->_id : $option)
        ]);
      }
    }

    return parent::render();
  }
}

class BS_SelectOption extends BS_HTML {
  function render() {
    if (!$this->properties['tag']) $this->properties['tag'] = 'option';

    $item = $this->properties['item'];
    unset($this->properties['item']);

    // convert item property to children
    if ($item) {
      // convert arrays to objects
      if (is_array($item))
        $item = (object) $item;

      if (gettype($item) === 'object') {
        $this->properties['value'] = $item->_id ?: '';
        $this->children[] = $item->title ?: $item->name ?: $item->_id;
      } else {
        $this->properties['value'] = $item;
        $this->children[] = $item;
      }
    }

    return parent::render();
  }
}

class BS_Textbox extends BS_HTML {
  function render() {
    $lines = $this->properties['lines'];
    unset($this->properties['lines']);

    // determine the HTML tag
    if (!$this->properties['tag']) $this->properties['tag'] = $lines > 1 ? 'textarea' : 'input';

    // add textarea attributes
    if ($lines > 1) {
      $this->properties['rows'] = $lines;
      $this->children[] = $this->properties['value'];
      unset($this->properties['value']);
    }

    // add Bootstrap classes
    $this->properties['className'][] = 'form-control';

    return parent::render();
  }
}


////////////////////////////////////////////////////////////////////////////////
////////// Components
////////////////////////////////////////////////////////////////////////////////

class BS_Alert extends BS_Division {
  function render() {
    $variant = $this->properties['variant'];
    unset($this->properties['variant']);
    $title = $this->properties['title'];
    unset($this->properties['title']);

    $this->properties['className'][] = 'alert';
    $this->properties['className'][] = 'alert-' . ($variant ?: 'info');
    $this->properties['ariaRole'] = 'alert';

    if ($title)
      array_unshift($this->children, new BS_AlertHeading(null, $title));

    return parent::render();
  }
}

class BS_AlertHeading extends BS_Division {
  function render() {
    $this->properties['className'][] = 'alert-heading';
    $this->properties['className'][] = 'h3';

    return parent::render();
  }
}

class BS_AlertLink extends BS_Link {
  function render() {
    $this->properties['className'][] = 'alert-link';
    return parent::render();
  }
}

class BS_Button extends BS_ButtonHTML {
  function render() {
    $outline = $this->properties['outline'];
    unset($this->properties['outline']);
    $popover = $this->properties['popover'];
    unset($this->properties['popover']);
    $variant = $this->properties['variant'];
    unset($this->properties['variant']);
    $size = $this->properties['size'];
    unset($this->properties['size']);

    // popover toggler
    if ($popover) {
      $this->properties['bsDataToggle'] = 'popover';
      $this->properties['bsDataTrigger'] = 'focus';
      $this->properties['bsDataPlacement'] = 'bottom';
      $this->properties['bsDataHTML'] = true;
      $this->properties['title'] = $this->properties['popover']['title'];
      $this->properties['bsDataContent'] = $this->properties['popover']['content'];
      if (!$variant) {
        $variant = 'link';
        $this->properties['className'][] = 'link-muted';
      }
      $this->properties['className'][] = 'cursor-help';
    }

    // add Bootstrap classes
    $this->properties['className'][] = 'btn';
    $this->properties['className'][] =
      'btn-' .
      ($outline ? 'outline-' : '') .
      ($variant ?: 'primary');
    if ($size) $this->properties['className'][] = 'btn-' . $size;

    return parent::render();
  }
}

class BS_Collapse extends BS_Division {
  function render() {
    $this->properties['className'][] = 'collapse';
    return parent::render();
  }
}

class BS_ListGroup extends BS_Division {
  function render() {
    $items = $this->properties['items'];
    unset($this->properties['items']);
    $title = $this->properties['title'];
    unset($this->properties['title']);
    $size = $this->properties['size'];
    unset($this->properties['size']);

    // convert items property to list item children
    if (is_array($items)) {
      foreach ($items as $item) {
        $item = json_decode(json_encode($item));

        $this->children[] = new BS_ListGroupItem([
          'to' => $item->url,
          'title' => $item->title,
          'subtitle' => $item->subtitle,
          'item' => $item->item,
        ]);
      }
    }

    // prepend the title element to the children
    if ($title) {
      $titleClassName = 'list-group-item bg-secondary mb-0';

      array_unshift(
        $this->children,

        $size === 'lg'
          ? new BS_Heading2(['className' => $titleClassName], $title)
          : new BS_Heading3(['className' => $titleClassName], $title)
      );
    }

    // add Bootstrap classes
    $this->properties['className'][] = 'list-group';
    if ($size) $this->properties['className'][] = 'list-group-' . $size;

    return parent::render();
  }
}

class BS_ListGroupItem extends BS_Link {
  function render() {
    // $item = $this->properties['item'];
    // unset($this->properties['item']);
    $subtitle = $this->properties['subtitle'];
    unset($this->properties['subtitle']);
    $title = $this->properties['title'];
    unset($this->properties['title']);

    // use title/subitle as children
    if ($title) {
      $this->children[] = $title;
      if ($subtitle) {
        $this->children[] = new BS_Division(
          ['className' => 'fst-italic small text-muted'],
          $subtitle
        );
      }
    }

    // add Bootstrap classes
    $this->properties['className'][] = 'list-group-item';
    $this->properties['className'][] = 'list-group-item-action';
    if ($this->properties['disabled'])
      $this->properties['className'][] = 'disabled';

    return parent::render();
  }
}

// TODO: Modal

class BS_Nav extends BS_List {
  function render() {
    $activeItem = $this->properties['activeItem'];
    unset($this->properties['activeItem']);
    $items = $this->properties['items'];
    unset($this->properties['items']);
    $justify = $this->properties['justify'];
    unset($this->properties['justify']);
    $next = $this->properties['next'];
    unset($this->properties['next']);
    $previous = $this->properties['previous'];
    unset($this->properties['previous']);
    $tabs = $this->properties['tabs'];
    unset($this->properties['tabs']);
    $vertical = $this->properties['vertical'];
    unset($this->properties['vertical']);

    // convert items property to nav item children
    if (is_array($items)) {
      foreach ($items as $item) {
        // ensure the item is an object
        if (gettype($item) !== 'object')
          $item = json_decode(json_encode($item));

        $this->children[] = new BS_NavItem(
          null,
          new BS_NavLink(
            [
              'to' => $item->url,
              'active' =>
              !is_null($activeItem) &&
                strval($item->_id) === strval($activeItem)
            ],
            $item->title
          )
        );
      }
    }

    // add previous link
    if ($previous) {
      if (gettype($previous) !== 'object')
        $previous = json_decode(json_encode($previous));

      array_unshift($this->children, new BS_NavItem(
        null,
        new BS_NavLink(
          ['to' => $previous->url],

          new BS_Icon(['name' => 'fa-solid fa-angle-left', 'alt' => 'previous', 'className' => 'pe-2']),

          $previous->title,
        )
      ));
    }

    // add next link
    if ($next) {
      if (gettype($next) !== 'object')
        $next = json_decode(json_encode($next));

      $this->children[] = new BS_NavItem(
        null,
        new BS_NavLink(
          ['to' => $next->url],

          $next->title,


          new BS_Icon(['name' => 'fa-solid fa-angle-right', 'alt' => 'next', 'className' => 'ps-2']),
        )
      );
    }

    // add Bootstrap classes
    $this->properties['className'][] = 'nav';
    if ($tabs) $this->properties['className'][] = 'nav-tabs';
    elseif ($vertical) {
      $this->properties['className'][] = 'flex-column';
      if ($vertical !== true)
        $this->properties['className'][] = 'flex-' . $vertical . '-row';
    }
    if ($justify) {
      $this->properties['className'][] =
        'justify-content-' .
        ($justify === true ? 'between' : $justify);
    }

    return parent::render();
  }
}

class BS_NavItem extends BS_ListItem {
  function render() {
    $this->properties['className'][] = 'nav-item';
    return parent::render();
  }
}

class BS_NavLink extends BS_Link {
  function render() {
    $active = $this->properties['active'];
    unset($this->properties['active']);

    $this->properties['className'][] = 'nav-link';

    if ($active) $this->properties['className'][] = 'active';

    return parent::render();
  }
}

class BS_Pagination extends BS_List {
  function render() {
    $activeItem = $this->properties['activeItem'];
    unset($this->properties['activeItem']);
    $items = $this->properties['items'];
    unset($this->properties['items']);
    $next = $this->properties['next'];
    unset($this->properties['next']);
    $previous = $this->properties['previous'];
    unset($this->properties['previous']);
    $size = $this->properties['size'];
    unset($this->properties['size']);
    $wrapperClassName = $this->properties['wrapperClassName'];
    unset($this->properties['wrapperClassName']);

    // convert link property to nav item children
    if (is_array($items)) {
      foreach ($items as $item) {
        // ensure the item is an object
        $item = json_decode(json_encode($item));

        $this->children[] =
          new BS_PaginationItem(
            [
              'active' =>
              !is_null($activeItem) &&
                (string) $item->_id === (string) $activeItem
            ],

            new BS_PaginationLink(
              ['to' => $item->url],

              $item->title
            )
          );
      }
    }

    // add previous button
    if ($previous) {
      // ensure the previous item is an object
      $previous = json_decode(json_encode($previous));

      array_unshift(
        $this->children,

        new BS_PaginationItem(
          null,

          new BS_PaginationLink(
            ['to' => $previous->url],

            new BS_Icon([
              'name' => 'fa-solid fa-angle-left',
              'alt' => 'previous',
              'className' => 'pe-2'
            ]),

            $previous->title
          )
        )
      );
    }

    // add next button
    if ($next) {
      // ensure the next item is an object
      $next = json_decode(json_encode($next));

      $this->children[] =
        new BS_PaginationItem(
          null,

          new BS_PaginationLink(
            ['to' => $next->url],

            $next->title,

            new BS_Icon([
              'name' => 'fa-solid fa-angle-right',
              'alt' => 'next',
              'className' => 'ps-2'
            ])
          )
        );
    }

    // add Bootstrap classes
    $this->properties['className'][] = 'pagination';
    if ($size)
      $this->properties['className'][] = 'pagination-' . $size;

    return (string) new BS_NavHTML(['className' => $wrapperClassName], parent::render());
  }
}

class BS_PaginationItem extends BS_ListItem {
  function render() {
    $active = $this->properties['active'];
    unset($this->properties['active']);

    $this->properties['className'][] = 'page-item';

    if ($active) {
      $this->properties['className'][] = 'active';
      $this->properties['ariaCurrent'] = 'page';
    }
    if ($this->properties['disabled'])
      $this->properties['className'][] = 'disabled';

    return parent::render();
  }
}

class BS_PaginationLink extends BS_Link {
  function render() {
    $this->properties['className'][] = 'page-link';

    return parent::render();
  }
}

// TODO: Spinner

////////////////////////////////////////////////////////////////////////////////
////////// Custom Bootstrap Components
////////////////////////////////////////////////////////////////////////////////

class BS_Banner extends BS_Container {
  function render() {
    $this->properties['fluid'] = true;
    $this->properties['className'][] = 'Banner';

    $this->children = [
      new BS_Row(
        ['className' => 'justify-content-center'],
        new BS_Col(
          ['xs' => 11, 'lg' => 8, 'xl' => 6],
          new BS_Paragraph(
            null,
            ...$this->children
          )
        )
      )
    ];

    return parent::render();
  }
}

// TODO: Breakpoints

class BS_Embed extends BS_Division {
  function render() {
    $title = $this->properties['title'];
    unset($this->properties['title']);
    $vimeo = $this->properties['vimeo'];
    unset($this->properties['vimeo']);
    $url = $this->properties['url'];
    unset($this->properties['url']);
    $youtube = $this->properties['youtube'];
    unset($this->properties['youtube']);

    // video
    if ($vimeo || $youtube) {
      $url = $vimeo
        ? 'https://player.vimeo.com/video/' . $vimeo
        : 'https://www.youtube.com/embed/' . $youtube . '?rel=0';

      if (!$title)
        $title = ($vimeo ? 'Vimeo' : 'YouTube') . ' video';
    }

    // add iFrame child
    $this->children[] = new BS_IFrame([
      'url' => $url,
      'title' => $title,
      'allowFullScreen' => true
    ]);

    // add Bootstrap classes
    $this->properties['className'][] = 'ratio';
    $this->properties['className'][] = 'ratio-16x9';

    return parent::render();
  }
}

class BS_PreviousNext extends BS_Nav {
  function render() {
    // add Bootstrap classes
    $this->properties['className'][] = 'border';
    $this->properties['className'][] = 'border-2';
    $this->properties['className'][] = 'border-muted';
    $this->properties['className'][] = 'rounded';
    $this->properties['className'][] = 'bg-light';

    // set Nav attributes
    $this->properties['vertical'] = 'md';
    $this->properties['justify'] =
      $this->properties['next'] && !$this->properties['previous']
      ? 'end'
      : true;

    return parent::render();
  }
}

class BS_SectionHeader extends BS_Header {
  function render() {
    $label = $this->properties['label'];
    unset($this->properties['label']);
    $first = $this->properties['first'];
    unset($this->properties['first']);
    $subtitle = $this->properties['subtitle'];
    unset($this->properties['subtitle']);
    $title = $this->properties['title'];
    unset($this->properties['title']);
    $titleID = $this->properties['titleID'];
    unset($this->properties['titleID']);
    $variant = $this->properties['variant'];
    unset($this->properties['variant']);

    // add ARIA attributes
    $this->properties['ariaLabel'] = $label ?: 'section title';

    // add custom classes
    $this->properties['className'][] = 'SectionHeader';
    if ($variant) {
      $this->properties['className'][] = 'bg-' . $variant;
      $this->properties['className'][] = 'py-4';
      $this->properties['className'][] = $first ? 'mb-element' : 'my-element';
    }

    // add title
    $this->children[] = new BS_Heading2(
      $titleID ? ['id' => $titleID] : null,
      $title
    );

    // add line
    $this->children[] = new BS_Line(
      ['className' => 'bg-primary pb-1 position-relative start-50 translate-middle']
    );

    // add subtitle
    if ($subtitle)
      $this->children[] = new BS_Lead(null, $subtitle);

    return parent::render();
  }
}

class BS_SectionWithHeader extends BS_Header {
  function render() {
    $first = $this->properties['first'];
    unset($this->properties['first']);
    $id = $this->properties['id'];
    unset($this->properties['id']);
    $subtitle = $this->properties['subtitle'];
    unset($this->properties['subtitle']);
    $title = $this->properties['title'];
    unset($this->properties['title']);
    $titleID = $this->properties['titleID'];
    unset($this->properties['titleID']);

    // create a title ID if it has a section ID
    if (!$titleID && $id) $titleID = $id . '-SectionHeader';

    // add ARIA attributes
    if ($titleID) $this->properties['ariaLabelledBy'] = $titleID;

    // add the section header to the top
    array_unshift(
      $this->children,
      new BS_SectionHeader([
        'id' => $id,
        'title' => $title,
        'subtitle' => $subtitle,
        'titleID' => $titleID,
        'variant' => 'light',
        'first' => $first,
      ])
    );

    return parent::render();
  }
}

class BS_SmallCaps extends BS_Span {
  function render() {
    $this->properties['className'][] = 'text-smallcaps';
    return parent::render();
  }
}

class BS_Verse extends BS_Superscript {
  function render() {
    $this->properties['className'][] = 'text-muted';

    // wrap in brackets
    array_unshift($this->children, '[');
    $this->children[] = ']';

    return parent::render();
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Custom Components
////////////////////////////////////////////////////////////////////////////////

class BS_BibleChapterPagination extends BS_Pagination {
  function render() {
    $book = $this->properties['book'];
    unset($this->properties['book']);
    $chapter = $this->properties['chapter'];
    unset($this->properties['chapter']);

    // create baseline chapter URL
    $chapterID = preg_replace('/[0-9]+$/', '', $chapter->_id);
    $chapterURL = preg_replace('/[0-9]+$/', '', $chapter->url);

    $this->properties['items'] = [];

    // add book intro page
    $this->properties['items'][] = (object) [
      '_id' => $book->_id,
      'url' => $book->url,
      'title' => 'Intro',
    ];

    // add chapter pages
    for ($chapterIndex = 1; $chapterIndex <= $book->chapterCount; $chapterIndex++) {
      $this->properties['items'][] = (object) [
        '_id' => $chapterID . $chapterIndex,
        'url' => $chapterURL . $chapterIndex,
        'title' => $chapterIndex,
      ];
    }

    return parent::render();
  }
}

class BS_BibleLink extends BS_Link {
  function render() {
    $passage = $this->properties['passage'];
    unset($this->properties['passage']);
    $popover = $this->properties['popover'];
    unset($this->properties['popover']);
    $to = $this->properties['to'];
    unset($this->properties['to']);
    $version = $this->properties['version'];
    unset($this->properties['version']);

    // parse the requested Bible passage into a passage object
    if (!$passage && $to) $passage = egp_biblePassage($to);

    // no passage provided, use a default link
    if (!$passage) {
      $this->properties['to'] = '/bible-search';

      if (!count($this->children))
        $this->children[] = 'Bible Search';
    } else {
      // customize the link and add default child
      $this->properties['to'] = $passage->url ?: $passage->chapter->url ?: '/bible-search';
      if (!count($this->children))
        $this->children[] = $passage->title;

      // add popover information if it isn't disabled and it has a chapter with a verse colon
      if ($popover !== false && $passage->chapter && mb_strpos($passage->title, ':') !== false) {
        // retrieve all selected versions
        $selectedVersions = egp_bibleVersionsSelected();

        // retrieve the provided/selected Bible version
        $version = egp_bibleVersion($version ?: $selectedVersions[0]);

        $this->properties['popover'] = [
          'title' => $passage->title . ' (' . $version->abbreviation . ')',
          'content' => implode('', [
            new BS_BiblePassage([
              'passage' => $passage,
              'version' => $version,
              'variant' => 'popover'
            ]),

            new BS_Paragraph(
              ['className' => 'mt-2 mb-0'],
              new BS_Link(['to' => $passage->chapter->url], 'view the full chapter')
            ),
          ]),
        ];
      }
    }

    return parent::render();
  }
}

class BS_BiblePassage extends BS_HTML {
  function render() {
    $passage = $this->properties['passage'];
    unset($this->properties['passage']);
    $variant = $this->properties['variant'];
    unset($this->properties['variant']);
    $version = $this->properties['version'];
    unset($this->properties['version']);
    $verses = $this->properties['verses'];
    unset($this->properties['verses']);

    // parse the requested Bible passage into a passage object
    if (gettype($passage) === 'string')
      $passage = egp_biblePassage($passage);

    // don't render the component for invalid passages
    if (!$passage) {
      $output = new BS_Alert(
        ['title' => 'Invalid Bible Passage', 'variant' => 'danger'],
        $passage ?: 'none provided'
      );
    } else {
      // retrieve the Bible version and verses
      if (!$verses) {
        $version = egp_bibleVerses($passage->chapter, egp_bibleVersion($version));
        $version = $version[0];
      }

      // grab verses for the Bible passage/version combo
      if (!$verses) {
        $verses = array_values(array_filter(
          $version->verses,
          function ($verse) use ($passage) {
            return
              substr($verse->sequence, 0, 6) === $passage->chapter->sequence &&
              array_search($verse->number, $passage->verses) !== false;
          }
        ));
      }
      // page_crash([ 'passage' => $passage, 'version' => $version, 'verses' => $verses ]);

      switch ($variant) {
        case 'paragraph':
          $output = new BS_Paragraph(
            null,

            new BS_BibleLink(
              ['passage' => $passage, 'popover' => false],
              $passage->title
            ),

            ' (' .
              ($version->title
                ? new BS_Abbreviation(
                  ['popover' => ['title' => $version->title, 'content' => $version->copyright]],
                  $version->abbreviation
                )
                : $version->abbreviation) .
              ') ',

            mb_substr($verses[0]->text, 0, 1) !== '“' ? '“' : null,
            implode(' ', array_map(
              function ($verse) use ($passage) {
                return $this->embedFootnotes($passage->chapter->title, $verse, true);
              },
              $verses
            )),
            mb_substr(
              $verses[count($verses) - 1]->text,
              mb_strlen($verses[count($verses) - 1]->text) - 1,
              1
            ) !== '”'
              ? '”'
              : null
          );

          break;

        case 'popover':
          $output = $this->passageFormatted((object) [
            'passage' => $passage,
            'version' => $version,
            'verses' => $verses,
            'popovers' => false,
          ]);

          break;

        case 'scripture':
          $output = implode(
            '',

            [
              new BS_Heading2(null, $version->title),

              new BS_Heading3(
                null,

                $passage->chapter->title,
                ' (',
                $version->abbreviation,
                ')',
              ),

              $this->passageFormatted((object) [
                'passage' => $passage,
                'version' => $version,
                'verses' => $verses,
                'breaks' => true,
              ])
            ]
          );

          break;

        default:
          $output = new BS_Blockquote(
            $this->properties,

            new BS_Heading3(
              null,

              new BS_BibleLink(
                ['passage' => $passage, 'popover' => false],
                $passage->title
              ),

              ' (' .
                ($version->title
                  ? new BS_Abbreviation(
                    ['popover' => ['title' => $version->title, 'content' => $version->copyright]],
                    $version->abbreviation
                  )
                  : $version->abbreviation) .
                ')',
            ),

            $this->passageFormatted((object) [
              'passage' => $passage,
              'version' => $version,
              'verses' => $verses,
              'copyright' => false,
            ])
          );

          break;
      }
    }

    return (string) $output;
  }

  function embedFootnotes($chapterTitle, $verse, $asPopover = null) {
    $marker = '°';
    $entity = '&deg;';

    $text = str_replace($marker, $entity, $verse->text);

    if (is_array($verse->footnotes)) {
      $footnoteCount = count($verse->footnotes);

      for ($footNoteIndex = 0; $footNoteIndex < $footnoteCount; $footNoteIndex++) {
        $pos = mb_strpos($text, $entity);

        if ($pos !== false) {
          $text =
            mb_substr($text, 0, $pos) .
            new BS_Link(
              [
                'title' => $asPopover
                  ? null
                  : egp_bb($verse->footnotes[$footNoteIndex], true),
                'popover' => $asPopover
                  ? [
                    'title' =>
                    'Footnote for ' .
                      $chapterTitle .
                      ':' .
                      $verse->number .
                      ($footNoteIndex > 1 ? chr($footNoteIndex + 97) : ''),
                    'content' => $verse->footnotes[$footNoteIndex],
                  ]
                  : null,
                'className' => 'footnote-marker',
              ],
              $marker
            ) .
            mb_substr($text, $pos + mb_strlen($entity));
        }
      }
    }

    return str_replace($entity, $marker, $text);
  }

  function passageFormatted($properties) {
    // extract verses with text
    $verses = array_values(array_filter(
      $properties->verses,
      function ($verse) {
        return !!$verse->text;
      }
    ));
    $verseCount = count($verses);

    // compile footnotes
    $footnotes = [];
    for ($verseIndex = 0; $verseIndex < $verseCount; $verseIndex++) {
      if ($verses[$verseIndex]->footnotes) {
        $footnoteCount = count($verses[$verseIndex]->footnotes);
        for ($footNoteIndex = 0; $footNoteIndex < $footnoteCount; $footNoteIndex++) {
          $footnotes[] = implode(
            ' ',

            [
              new BS_Bold(
                null,

                $properties->passage->chapter->title,
                ':',
                $verses[$verseIndex]->number,
                $footnoteCount > 1
                  ? chr($footNoteIndex + 97)
                  : null,
              ),

              $verses[$verseIndex]->footnotes[$footNoteIndex],
            ]
          );
        }
      }
    }
    $footnoteCount = count($footnotes);

    return implode(
      '',

      [
        $verseCount
          ? new BS_Paragraph(
            null,

            $verseCount === 1
              ? $this->embedFootnotes(
                $properties->passage->chapter->title,
                $verses[0],
                $properties->popovers !== false
              )
              : implode(
                $properties->breaks ? new BS_Break() : ' ',

                array_map(
                  function ($verse) use ($properties) {
                    return implode(
                      ' ',

                      [
                        new BS_Verse(null, $verse->number),
                        $this->embedFootnotes(
                          $properties->passage->chapter->title,
                          $verse,
                          $properties->popovers !== false
                        )
                      ]
                    );
                  },

                  $verses
                )
              )
          )
          : null,

        $footnoteCount
          ? new BS_Paragraph(
            ['className' => 'text-muted small'],
            implode(new BS_Break(), $footnotes)
          )
          : null,

        $properties->copyright !== false && $properties->version->copyright
          ? new BS_Paragraph(
            ['className' => 'text-muted small'],
            $properties->version->copyright
          )
          : null,
      ]
    );
  }
}

class BS_BiblePreviousNext extends BS_PreviousNext {
  function render() {
    $books = $this->properties['books'];
    unset($this->properties['books']);
    $_id = $this->properties['_id'];
    unset($this->properties['_id']);

    $bookCount = count($books);

    $ranges = egp_bibleRanges();
    $rangeCount = count($ranges);
    // page_crash($ranges);

    $itemIDs = [];
    $itemTitles = [];

    // build out order
    for ($rangeIndex = 0; $rangeIndex < $rangeCount; $rangeIndex++) {
      if ($ranges[$rangeIndex]->parent) {
        $itemIDs[] = $ranges[$rangeIndex]->_id;
        $itemTitles[] = $ranges[$rangeIndex]->title;

        for ($bookIndex = 0; $bookIndex < $bookCount; $bookIndex++) {
          if (in_array($books[$bookIndex]->_id, $ranges[$rangeIndex]->books)) {
            $itemIDs[] = $books[$bookIndex]->_id;
            $itemTitles[] = $books[$bookIndex]->title;

            for ($chapterIndex = 0; $chapterIndex < $books[$bookIndex]->chapterCount; $chapterIndex++) {
              $itemIDs[] = $books[$bookIndex]->chapters[$chapterIndex];
              $itemTitles[] = str_replace('Psalms', 'Psalm', $books[$bookIndex]->title) . ' ' . ($chapterIndex + 1);
            }
          }
        }
      }
    }
    $itemCount = count($itemIDs);

    // determine which item is selected
    if ($_id)
      $selectedIndex = array_search($_id, $itemIDs);
    else
      $selectedIndex = -1;

    // previous
    if ($selectedIndex >= 1) {
      $this->properties['previous'] = (object) [
        'url' => '/bible-search/' . $itemIDs[$selectedIndex - 1],
        'title' => $itemTitles[$selectedIndex - 1],
      ];
    } else {
      $this->properties['previous'] = (object) [
        'url' => '/bible-search',
        'title' => 'Bible Search',
      ];
    }

    // next
    if ($selectedIndex < $itemCount - 1) {
      $this->properties['next'] = (object) [
        'url' => '/bible-search/' . $itemIDs[$selectedIndex + 1],
        'title' => $itemTitles[$selectedIndex + 1],
      ];
    }

    return parent::render();
  }
}

class BS_BibleSearchForm extends BS_Form {
  function render() {
    $search = $this->properties['search'];
    unset($this->properties['search']);
    $versions = $this->properties['versions'];
    unset($this->properties['versions']);

    // set properties
    $this->properties['url'] = '/bible-search';
    $this->properties['className'][] = 'row gx-1 mb-5';

    // convert versions to dropdown options
    $versionOptions = [];
    foreach ($versions as $version) {
      // only use public versions that aren't for goodies or goodies are enabled
      if ($version->public && !($version->goodies && !$_SESSION['goodies']))
        $versionOptions[] = (object)['_id' => $version->_id, 'title' => $version->title];
    }

    // retrieve selected Bible versions
    $selected = egp_bibleVersionsSelected();
    $selectedCount = count($selected);
    // page_crash($selected);

    // form column comfiguration
    $formCol = ['xs' => 12, 'md' => 6, 'lg' => 4, 'xl' => 3, 'xxl' => 2, 'className' => 'mb-1'];

    // add search textbox
    $this->children[] = new BS_Col(
      $formCol,
      new BS_Textbox([
        'name' => 'search',
        'type' => 'search',
        'value' => $search ?: $_POST['search'],
        'placeholder' => 'Bible passage or text'
      ])
    );

    // add versions
    $this->children[] = implode('', array_map(
      function ($slot) use ($versionOptions, $selected, $selectedCount, $formCol) {
        return new BS_Col(
          $formCol,
          new BS_Select([
            'name' => 'versions[]',
            'options' => array_merge([(object)['_id' => '', 'title' => 'slot ' . $slot]], $versionOptions),
            'selected' => $slot <= $selectedCount ? $selected[$slot - 1] : ''
          ])
        );
      },

      range(1, 7)
    ));

    // add submit button
    $this->children[] = new BS_Col(
      $formCol,
      new BS_Button(['type' => 'submit', 'className' => 'w-100'], 'Search')
    );

    return parent::render();
  }
}

// TODO: BibleSearchForm
// TODO: BibleSearchScriptures

class BS_BlogEntries extends BS_Row {
  function render() {
    $limit = $this->properties['limit'];
    unset($this->properties['limit']);

    // build the database query
    $sql =
      "SELECT Document" .
      "\nFROM Documents" .
      "\nWHERE Collection = 'blog'" .
      "\nORDER BY Sequence DESC";
    if ($limit)
      $sql .= "\nLIMIT " . $limit;
    // $this->children[] = new BS_Preformatted([ 'item' => $sql ]);

    // query the database
    $rows = $GLOBALS['db']->rows($sql);

    // convert to grid columns
    foreach ($rows as $row) {
      $row = json_decode($row['Document']);

      $this->children[] = new BS_Col(
        [
          'tag' => 'article',
          'ariaLabelledBy' => 'BlogEntry-' . $row->_id,
          'md' => 6,
          'lg' => 4,
          'className' => 'mb-3'
        ],

        $row->image ? new BS_Link(
          ['to' => $row->url],
          new BS_Image([
            'url' => $row->image,
            'alt' => htmlspecialchars($row->imageAlt),
            'className' => "rounded w-100"
          ])
        ) : null,

        new BS_Heading3(
          ['id' => 'BlogEntry-' . $row->_id, 'className' => 'mt-3'],
          new BS_Link(['to' => $row->url], htmlspecialchars($row->title))
        ),

        new BS_Paragraph(null, htmlspecialchars($row->excerpt)),

        new BS_Link(
          ['to' => $row->url],
          new BS_Small(
            null,

            'READ MORE',

            new BS_Icon(['name' => 'fa-solid fa-caret-right', 'alt' => ''])
          )
        ),

        // new BS_Preformatted([ 'item' => $row ])
      );
    }

    return parent::render();
  }
}

class BS_BlogEntriesNav extends BS_Nav {
  function render() {
    // Bootstrap properties
    $this->properties['vertical'] = true;
    $this->properties['className'][] = 'text-light';

    // build the database query
    $sql =
      "SELECT Document" .
      "\nFROM Documents" .
      "\nWHERE Collection = 'blog'" .
      "\nORDER BY Sequence DESC" .
      "\nLIMIT 6";
    // $this->children[] = new BS_Preformatted([ 'item' => $sql ]);

    // query the database
    $rows = $GLOBALS['db']->rows($sql);

    // convert to items
    $this->properties['items'] = [];
    foreach ($rows as $row) {
      $row = json_decode($row['Document']);
      $this->properties['items'][] = [
        'url' => $row->url,
        'title' => htmlspecialchars($row->title)
      ];
    }

    return parent::render();
  }
}

class BS_Greek extends BS_Span {
  function render() {
    $this->properties['className'][] = 'greek';
    return parent::render();
  }
}

class BS_Hebrew extends BS_Span {
  function render() {
    $this->properties['className'][] = 'hebrew';
    $this->properties['direction'] = 'rtl'; // letters go from right to left
    return parent::render();
  }
}

// TODO: Inflection

class BS_LexiconEntrySelector extends BS_ListGroup {
  function render() {
    global $db;

    $language = $this->properties['language'];
    unset($this->properties['language']);
    $letter = $this->properties['letter'];
    unset($this->properties['letter']);
    // $query = $this->properties['query'];
    // unset($this->properties['query']);
    $top = $this->properties['top'];
    unset($this->properties['top']);

    $this->properties['title'] = $language->title . ' Words';

    // filter for top occurrences
    if ($top) {
      $this->properties['title'] = 'Top ' . $top . ' ' . $this->properties['title'];

      $sql =
        "SELECT Document" .
        "\nFROM Documents" .
        "\nWHERE" .
        "\n  Collection = 'lexicon-entries'" .
        "\n  AND Document LIKE '%\"language\":\"" . $language->_id . "\"%'" .
        "\nORDER BY" .
        "\n  CASE" .
        "\n    WHEN LOCATE('\"occurrences\":', Document) <> 0" .
        "\n    THEN CAST(SUBSTRING(" .
        "\n      Document," .
        "\n      LOCATE('\"occurrences\":', Document) + 14," .
        "\n      LOCATE(',', Document, LOCATE('\"occurrences\":', Document)) - LOCATE('\"occurrences\":', Document) - 14" .
        "\n    ) AS UNSIGNED)" .
        "\n    ELSE 0" .
        "\n  END DESC," .
        "\n  Sequence" .
        "\nLIMIT " . $top;
      $items = $db->rows($sql);
    }
    // filter by letter
    else if ($letter) {
      $this->properties['title'] =
        $language->title .
        ' words that start with ' .
        ucfirst($letter->name) .
        ' (' .
        ($letter->upperLetter ? $letter->upperLetter . '/' : '') .
        $letter->letter .
        ')';

      $sql =
        "SELECT Document" .
        "\nFROM Documents" .
        "\nWHERE" .
        "\n  Collection = 'lexicon-entries'" .
        "\n  AND Document LIKE '%\"language\":\"" . $language->_id . "\"%'" .
        "\n  AND Document LIKE '%\"letterCode\":\"" . $letter->code . "\"%'" .
        "\nORDER BY sequence";
      $items = $db->rows($sql);
    } else $items = [];

    // convert document to ListGroup item
    $this->properties['items'] = array_map(
      function ($item) {
        $item = json_decode($item['Document']);

        return [
          '_id' => $item->_id,
          'title' => $item->title,
          'subtitle' =>
          $item->shortDefinition
            ? $item->shortDefinition . ($item->occurrences
              ? ' [' . $item->occurrences . ' occurrence' . ($item->occurrences !== 1 ? 's' : '') . ']'
              : ''
            ) : null,
          'url' => $item->url,
        ];
      },

      $items
    );

    return count($items) ? parent::render() : '';
  }
}

class BS_LexiconLink extends BS_Link {
  function render() {
    global $db;

    $to = $this->properties['to'];
    unset($this->properties['to']);

    if (!$to) {
      $this->properties['to'] = '/lexicons-word-study';

      if (!count($this->children))
        $this->children[] = 'Lexicons (Word Study)';
    } else {
      $entry = egp_lexiconEntry($to);

      // don't render the component for invalid passages
      if (!$entry) {
        return (string) new BS_Alert(
          ['title' => 'Missing Lexicon Entry', 'variant' => 'danger'],
          $to
        );
      }

      // set the URL
      $this->properties['to'] = $entry->url;

      // add popover information
      $this->properties['popover'] = [
        'title' => $entry->title,
        'content' => implode('', [
          new BS_Paragraph(
            null,

            new BS_Bold(null, 'Strong’s ID:'),
            ' ',
            $entry->strongs->_id,
            new BS_Break(),

            new BS_Bold(null, 'Word:'),
            ' ',
            $entry->name,
            new BS_Break(),

            new BS_Bold(null, 'Transliteration:'),
            ' ',
            $entry->word,
            new BS_Break(),

            new BS_Bold(null, 'Pronunciation:'),
            ' ',
            $entry->pronunciation,

            $entry->partOfSpeech
              ? implode('', [
                new BS_Break(),
                new BS_Bold(null, 'Part of Speech:'),
                ' ',
                $entry->partOfSpeech,
              ])
              : null,

            $entry->occurrences
              ? implode('', [
                new BS_Break(),
                new BS_Bold(null, 'Occurrences:'),
                ' ',
                $entry->occurrences,
              ])
              : null,

            $entry->shortDefinition
              ? new BS_Paragraph(null, egp_bb($entry->shortDefinition, true))
              : null,
          ),

          new BS_Paragraph(
            ['className' => 'mt-2 mb-0'],
            new BS_Link(['to' => $entry->url], 'view the full lexicon entry')
          ),
        ]),
      ];

      // add default child
      if (!count($this->children))
        $this->children[] = $entry->strongs->_id;
    }

    return parent::render();
  }
}

class BS_LexiconLetterSelector extends BS_ListGroup {
  function render() {
    $language = $this->properties['language'];
    unset($this->properties['language']);
    $languageLink = $this->properties['languageLink'];
    unset($this->properties['languageLink']);

    // set the title
    $this->properties['title'] = $language->title . ' Letters';

    // get items for the language list
    $this->properties['items'] = json_decode(json_encode($language->letters), true);

    // add the main language link
    if ($languageLink !== false) {
      array_unshift(
        $this->properties['items'],
        [
          'url' => $language->url,
          'title' => 'search all ' . $language->title . ' words and definitions',
        ]
      );
    }

    return parent::render();
  }
}
