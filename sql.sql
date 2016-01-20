-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 19 jan 2016 om 13:41
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `hann_reservation`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `han_reservations`
--

CREATE TABLE IF NOT EXISTS `han_reservations` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_phone` varchar(10) NOT NULL,
  `res_date` varchar(10) NOT NULL,
  `res_time` varchar(5) NOT NULL,
  `res_persons` int(12) NOT NULL,
  `res_children` int(11) NOT NULL,
  `res_status` int(1) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Gegevens worden geëxporteerd voor tabel `han_reservations`
--

INSERT INTO `han_reservations` (`res_id`, `res_name`, `res_email`, `res_phone`, `res_date`, `res_time`, `res_persons`, `res_children`, `res_status`) VALUES
(1, 'Damaris Roth', 'damaris@roth.nl', '0681155697', '2016-05-26', '18:30', 6, 0, 1),
(2, 'Ninah Bax', 'ninah@bax', '0612369874', '2016-08-24', '17:30', 2, 0, 0),
(142, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-16', '12:00', 3, 0, 1),
(143, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-16', '11:00', 1, 0, 0),
(144, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-23', '12:30', 1, 0, 0),
(158, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-30', '18:00', 1, 0, 2),
(159, 'Wesley', 'wesley@live.nl', '012346789', '2016-03-26', '12:00', 8, 3, 2),
(160, '84694', 'uiuig@iouipohyj.ml', '1654g88gy8', '2016-01-23', '17:00', 1, 0, 0),
(161, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-23', '12:00', 4, 0, 1),
(162, 'Lisan', 'lisan_floor@hotmail.com', '012345678', '2016-04-30', '13:30', 1, 0, 1),
(163, 'Wesley', 'wesley_metl@live.nl', '012369874', '2016-04-09', '12:30', 1, 0, 1),
(164, 'Dimmy', 'dimwes@hotmail.com', '0681155581', '2016-01-16', '13:30', 1, 0, 1),
(166, 'Karin Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-23', '12:00', 1, 0, 1),
(167, 'Dimmy', '0904540@hr.nl', '0162466290', '2016-01-30', '11:00', 4, 2, 0),
(168, 'Maurice', 'dimwes@casema.nl', '123654789', '2016-01-30', '15:30', 2, 0, 0),
(169, 'Bowie', 'dimwes@hotmail.com', '0681155581', '2016-02-13', '13:30', 1, 0, 2),
(170, 'Pann', 'dimwes@hotmail.com', '0681155581', '2016-02-13', '11:00', 1, 0, 2),
(171, 'Pann', 'dimwes@hotmail.com', '0681155581', '2016-02-13', '11:00', 1, 0, 0),
(172, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-04-09', '11:00', 1, 0, 2),
(173, 'Dimmy', 'dimwes@hotmail.com', '0681155581', '2016-02-20', '11:30', 2, 0, 2),
(174, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-02-20', '11:00', 1, 0, 2),
(175, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-02-20', '11:00', 1, 0, 2),
(176, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-02-06', '11:30', 2, 0, 2),
(177, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-02-06', '12:30', 3, 1, 2),
(178, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-02-06', '11:00', 1, 0, 1),
(179, 'Dimmy Marcelissen', 'dimwes@hotmail.com', '0681155581', '2016-01-30', '13:30', 2, 0, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `han_users`
--

CREATE TABLE IF NOT EXISTS `han_users` (
  `use_id` int(11) NOT NULL AUTO_INCREMENT,
  `use_username` varchar(20) NOT NULL,
  `use_password` mediumtext NOT NULL,
  PRIMARY KEY (`use_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `han_users`
--

INSERT INTO `han_users` (`use_id`, `use_username`, `use_password`) VALUES
(2, 'Dimmy', 'test1234'),
(3, 'trudy', 'hannebroeck12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
