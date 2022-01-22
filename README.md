# Equip God’s People

Equip God’s People web app built on Node/PHP

## Backlog

### Pre-launch

- migrate Node admin content:
  - test Reading Plan updates (including JSON encoding)
  - add lexicon-entry API endpoint
  - migrate lexiconConvert() from Node
  - add lexiconConvert API endpoint
  - compare non-updates before upserting (including JSON encoding)
- finish migrating Node front-end content:
  - finish migrating bb()
  - finish migrating Bootstrap components
  - finish Lexicon Language template
  - Lexicon Letters
  - Lexicon Entries
  - Bible Search
  - EGP Blog
  - EGP Blog entries
  - Discipleship Tools
  - Eusebius TOC
  - Eusebius Book 1

**Revisit old backlog:**

- search engine:
  - when building cache, it should update the Searchable field for lexicon entries, definitions
  - when building pages, it should upsert page metadata rows (title, description, excerpt, etc.) with searchable combining those and any dependencies
- fix back-end Bootstrap rendering so that multi-layer nesting works and have LexiconEntryPage use the Inflections component
- add BB code for Bible links:
  - use it on the Reading Plan descriptions
  - change invalid [verse] tags to use [BibleLink] instead:
    - http://localhost:8000/lexicons-word-study/new-testament-greek/strongs-g10/
    - http://localhost:8000/lexicons-word-study/new-testament-greek/strongs-g11/
- Bible Search:
  - GRKS, GRKT, KJVS doesn't parse correctly due to TVM/TVM2
  - GRKT doesn't show translinear definitions
  - GRKS/T don't support Greek color coding system
  - create pages for each chapter, making React pull in the URL for the passage lookup
  - create book introduction pages
  - changing the search criteria should change the URL accordingly (but probably not actually redirect to that URL)
  - update Bible Link component to point to the right path
  - make the UI able to add/replace/remove versions (React via CDN), updating the search bar and activating popovers accordingly
  - enable React/Axios for all pages and make Bible Link show the first selected version
  - when searches don't match a passage, then it should do a scripture search
- finish importing EGP Blog
- finish importing Classic Works
- finish importing content from the live site
- search engine:
  - make each version/page/etc have Searchable and Search Result fields that is updated when the build is executed
  - make the search API query the Searchable fields and return the area, Search Result, relevancy
  - Axios query to PHP API, where either PHP provides desired HTML or it shares JSON and uses React to build the search results
- revisit Discipleship Tools content
- create a custom 404 page for automatically routing to the best destination
- scan the old site to make a distinct list of links for comparison to the new site, adding removed/renamed to the 404 router
- Bible Passage should show ellipsis between skipped verses (see if the title has a comma, then look for missing verse numbers)

### Wishlist

- make the front-end have a legend for inflection components
- Bible text editor (select a version and chapter, each potential verse has a textbox and footnotes multi-line textbox)
- make Lexicon admin use the API to encode Name for the main entry
- see if lexicon entry info can be pooled rather than making duplicated requests (can cause browser delays/crashes)
- add bb/bbText support to React:
  - finish migrating BiblePassage to Bootstrap
  - make the back-end BiblePassage component use the Bootstrap component once the passage/scripture is obtained
  - lexiconConvert() is required for [greekCode] and [hebrewCode]
  - see if bb/bbText can be removed from functions.js, once they are fully in Bootstrap.js
- session keep-alive calls:
  - grab session info on load from `GET /me` and set a "last refreshed" timestamp
  - check every 15 seconds for that timestamp, sending a new API call every 15 minutes to `POST /me` with current info
  - the endpoint should create a new session with the sent info if one doesn't exist, otherwise it returns the latest info
  - the page stores the latest info and updates the timestamp, but doesn't update the UI
- EGP Admin:
  - Bible: testaments, ranges, books, chapters, versions, verses
  - Blog
  - Languages: languages, letters
  - Lexicons: lexicons, entries, definitions
- add images with watermarks for all blog entries
- extract TVM info from the old Online Bible app and storing it in the language, having the number, code, components, and component definitions
- version-specific icons for toggling Strong's, translinear definitions, etc.
- version reorder drag-and-drop
- Hebrew letter pronunciations: https://en.wikipedia.org/wiki/Hebrew_alphabet
- session-based font scaling
- add a version switcher to Bible Passage via gear with popover (show all public versions and the selected version if it is private)
- lexicon word entries for non-Strong's Numbers
- check for and fix "hanging" quotation marks in Bible Passage
- Greek/Hebrew text: https://www.ccel.org/study

## URL rewrites

### Apache .htaccess

```
<IfModule mod_rewrite.c>
	RewriteEngine On

  # ensure HTTPS
	RewriteCond %{SERVER_PORT} 80
	RewriteCond %{REQUEST_URI} !^/\.well-known/acme-challenge/[0-9a-zA-Z_-]+$
	RewriteCond %{REQUEST_URI} !^/\.well-known/cpanel-dcv/[0-9a-zA-Z_-]+$
	RewriteCond %{REQUEST_URI} !^/\.well-known/pki-validation/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
	RewriteRule ^(.*)$ https://zenith.equipgodspeople.com/$1 [R=301,L]

  # redirect 404s to index
	RewriteBase /
	RewriteRule ^index\.php$ - [L]
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule . /index.php [L]
</IfModule>
```

### IIS URL Rewrite

- Folder: `/`
- Requested URL: `Matches the Pattern`
- Using: `Regular Expressions`
- Pattern: `^(.*)$`
- Conditions – Logical grouping: `Match All`
  1. Conditional input: `{REQUEST_FILENAME}`; Check if input string: `Is Not a File`
  2. Conditional input: `{REQUEST_FILENAME}`; Check if input string: `Is Not a Directory`
- Action type: `Rewrite`
- Rewrite URL: `index.php`
- Append query string: `checked`
- Stop processing of subsequent rules: `checked`

## Greek resources

### Lessons

- Koine Greek Wikibook: https://en.m.wikibooks.org/wiki/Koine_Greek
- Ancient Greek for Everyone: https://ancientgreek.pressbooks.com/front-matter/introduction/

### Grammar

- Ancient Greek Grammar Tables: https://en.m.wiktionary.org/wiki/Appendix:Ancient_Greek_grammar_tables
- English Verb Conjugation: https://conjugator.reverso.net/conjugation-english.html
- NAS Exhaustive Concordance: https://biblehub.com/greek/

### Text

- Greek New Testament Online: https://gntreader.com/?b=1JO&c=1&v=1
- Greek New Testament Audio Bible: https://archive.org/details/AudiogreeknewtestamentOfWescott.hort.readByMarilynPhemister/
- Septuagint: https://www.septuagint.bible/

## Major version history

1. ASP
2. PHP
3. PHP (red cross)
4. WordPress
5. Wordpress (SiteOrigin)
6. ASP.NET (unreleased)
7. Bootstrap4 PHP (Zenith 1.0, released to dev)
8. Bootstrap4 CMS (Zenith 2.0, released to dev)
9. Gatsby4/Bootstrap5 (unreleased)
10. Node/PHP/Bootstrap5/React (Zenith 3.0, released to dev)
11. PHP/Bootstrap5 (Zenith 4.0)
