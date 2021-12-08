-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2021 at 12:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nejko`
--

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
CREATE TABLE IF NOT EXISTS `master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(244) NOT NULL,
  `ean` varchar(200) NOT NULL COMMENT 'INT to short',
  `gluten` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `raki` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `jajca` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `ribe` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `arasidi` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `zrna_soje` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `laktoza` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `orescki` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `listna_zelena` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `gorcicno_seme` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `sezamovo_seme` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `zveplo` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `volcji_bob` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `mehkuzci` int(3) NOT NULL COMMENT '1- yes, 0- no',
  `vegan` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `name`, `ean`, `gluten`, `raki`, `jajca`, `ribe`, `arasidi`, `zrna_soje`, `laktoza`, `orescki`, `listna_zelena`, `gorcicno_seme`, `sezamovo_seme`, `zveplo`, `volcji_bob`, `mehkuzci`, `vegan`, `comments`) VALUES
(1, 'Mleko alpske mlekarne 3.5', '978020137962', 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, ''),
(2, 'Cokolada Gorenjka 250g', '2112345678900', 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 'brez komentarja'),
(3, 'Smoki 50g', '8600939506912', 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 'Lahko vsebujejo sledove oresckov.'),
(4, 'Penne Rigate Mercator 500g', '3838900920008', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 'Sardine Podravka 115g', '3859888140004', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(6, 'Farma Hrvatic 6jajc', '3830013461058', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(7, 'Alpsko mleko 3.5 1l', '3838800040578', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(8, 'test vse', '000', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `datetime`) VALUES
(42, 'Mario', 'Savić', 'mario@gmail.com', '1245471381a5fa08b801f3683324cd9a62dddec1', '2021-08-25 12:36:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
