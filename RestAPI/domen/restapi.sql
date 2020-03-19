DROP TABLE IF EXISTS `restapi`;

CREATE TABLE `restapi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `count` int(11) unsigned NOT NULL DEFAULT '0',
  `price` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
LOCK TABLES `restapi` WRITE;

INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Маркеры офисные",5,13128);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Стол компьютерный",5,14939);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Бумага для принтера",6,16297);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Монитор 22",3,12569);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Дверь межкомнатная",6,1458);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Канцелярский набор",6,12589);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Светильник",3,14777);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Шкаф книжный",4,125);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Системный блок",4,7777);
INSERT INTO `restapi` (`name`, `count`, `price`) VALUES ("Стул офисный",6,4545);
UNLOCK TABLES;