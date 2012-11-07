CREATE TABLE IF NOT EXISTS `PREFIX_customer_credit` (
  `id_customer_credit` bigint(11) AUTO_INCREMENT NOT NULL,
  `id_customer` bigint(11) NULL,
  `id_order` bigint(11) NULL,
  `units` decimal(17,2) NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_customer_credit`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
