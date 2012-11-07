DROP TABLE IF EXISTS `PREFIX_mostviewed`;
CREATE TABLE IF NOT EXISTS `PREFIX_mostviewed` (
  `id_product` int(10) NOT NULL ,
  `view_count` int(10) default '0',  
  PRIMARY KEY  (`id_product`)
) ENGINE=MyISAM;
