create database test;

use test;

CREATE TABLE `users` (
  `id` int(111) NOT NULL auto_increment,
  `ename` varchar(100) NOT NULL,
  `etopic` varchar(100) NOT NULL,
  `espeakers` varchar(500) NOT NULL,
  `vname` varchar(500) NOT NULL,
  `eorganizer` varchar(500) NOT NULL,
  `evolunteers` varchar(500) NOT NULL,
  `estartdateandtime` varchar(500) NOT NULL,
  `eenddateandtime` varchar(500) NOT NULL,
  `acount` varchar(500) NOT NULL,
  `rate` varchar(500) NOT NULL,
  `tgivername` varchar(500) NOT NULL,
  `testinomial` varchar(500) NOT NULL,
  `fileupload` LONGBLOB NOT NULL,
  PRIMARY KEY  (`id`)
);