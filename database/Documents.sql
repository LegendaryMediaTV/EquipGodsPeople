CREATE TABLE `Documents` (
  `Collection` varchar(50) NOT NULL COMMENT 'collection name',
  `_id` varchar(100) NOT NULL COMMENT 'document ID',
  `Sequence` varchar(100) DEFAULT NULL COMMENT 'sequential order',
  `Document` mediumtext NOT NULL COMMENT 'JSON document',
  `Searchable` mediumtext COMMENT 'searchable text'
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci
COMMENT='NoSQL-like documents (JSON)';

ALTER TABLE `Documents`
ADD PRIMARY KEY (`Collection`,`_id`);

ALTER TABLE `Documents`
ADD FULLTEXT KEY `FT_Documents_Searchable` (`Searchable`);
