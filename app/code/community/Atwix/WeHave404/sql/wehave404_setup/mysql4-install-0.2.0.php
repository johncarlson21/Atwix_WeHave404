<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
CREATE TABLE IF NOT EXISTS at_404s (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `at_url` varchar(250) NOT NULL,
  `at_referrer` varchar(250) NOT NULL,
  `at_date` varchar(250) NOT NULL,
  `at_count` int(11) NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
SQLTEXT;

$installer->run($sql);

$installer->endSetup();
	 