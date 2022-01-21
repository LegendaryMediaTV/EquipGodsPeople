CREATE TABLE `Pages` (
  `_id` varchar(100) NOT NULL COMMENT 'page slug',
  `Title` varchar(100) NOT NULL COMMENT 'page title',
  `Sequence` varchar(100) NOT NULL COMMENT 'sequential order',
  `ParentID` varchar(100) DEFAULT NULL COMMENT 'parent page slug',
  `URL` varchar(250) NOT NULL COMMENT 'URL path for the page',
  `Metadata` mediumtext NOT NULL COMMENT 'page metadata',
  `Source` varchar(250) NOT NULL COMMENT 'page source code',
  `Searchable` mediumtext COMMENT 'searchable text'
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci
COMMENT='page metadata, source code, etc.';

ALTER TABLE `Pages`
ADD PRIMARY KEY (`_id`);

ALTER TABLE `Pages`
ADD FULLTEXT KEY `FT_Pages_Searchable` (`Searchable`);

/* title: 60–70 */
/* description: 150–160 */