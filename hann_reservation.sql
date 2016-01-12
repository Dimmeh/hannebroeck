-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `han_reservations`;
CREATE TABLE `han_reservations` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_phone` varchar(10) NOT NULL,
  `res_date` varchar(10) NOT NULL,
  `res_time` varchar(5) NOT NULL,
  `res_persons` int(12) NOT NULL,
  `res_children` int(11) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `han_reservations` (`res_id`, `res_name`, `res_email`, `res_phone`, `res_date`, `res_time`, `res_persons`, `res_children`) VALUES
(1,	'Damaris Roth',	'damaris@roth.nl',	'0681155697',	'26-05-16',	'18:30',	6,	0),
(2,	'Ninah Bax',	'ninah@bax',	'0612369874',	'24-08-16',	'17:30',	2,	0),
(142,	'Dimmy Marcelissen',	'dimwes@hotmail.com',	'0681155581',	'16/01/2016',	'12:00',	3,	0),
(143,	'Dimmy Marcelissen',	'dimwes@hotmail.com',	'0681155581',	'16/01/2016',	'11:00',	1,	0),
(144,	'Dimmy Marcelissen',	'dimwes@hotmail.com',	'0681155581',	'23/01/2016',	'12:30',	1,	0),
(158,	'Dimmy Marcelissen',	'dimwes@hotmail.com',	'0681155581',	'30/01/2016',	'18:00',	1,	0),
(159,	'Wesley',	'wesley@live.nl',	'012346789',	'26/03/2016',	'12:00',	8,	3),
(160,	'84694',	'uiuig@iouipohyj.ml',	'1654g88gy8',	'23/01/2016',	'17:00',	1,	0),
(161,	'Dimmy Marcelissen',	'dimwes@hotmail.com',	'0681155581',	'23/01/2016',	'12:00',	1,	0),
(162,	'Lisan',	'lisan_floor@hotmail.com',	'012345678',	'30/04/2016',	'13:30',	1,	0),
(163,	'Wesley',	'wesley_metl@live.nl',	'012369874',	'09/04/2016',	'12:30',	1,	0),
(164,	'Dimmy',	'dimwes@hotmail.com',	'0681155581',	'16/01/2016',	'13:30',	1,	0),
(166,	'Karin Marcelissen',	'dimwes@hotmail.com',	'0681155581',	'23/01/2016',	'12:00',	1,	0);

DROP TABLE IF EXISTS `han_users`;
CREATE TABLE `han_users` (
  `use_id` int(11) NOT NULL AUTO_INCREMENT,
  `use_username` varchar(20) NOT NULL,
  `use_password` varchar(20) NOT NULL,
  PRIMARY KEY (`use_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `han_users` (`use_id`, `use_username`, `use_password`) VALUES
(2,	'Dimmy',	'test1234');

-- 2016-01-11 12:38:05