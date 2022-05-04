-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 12:03 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garudalinux`
--

-- --------------------------------------------------------

--
-- Table structure for table `tester_request`
--

CREATE TABLE IF NOT EXISTS `tester_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipe_installer` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pesan` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tester_request`
--

INSERT INTO `tester_request` (`id`, `username`, `email`, `tipe_installer`, `pesan`) VALUES
(1, 'Asep Bensin', 'kusumaputra060@gmail.com', 'Live', 'tolong saya mau ripiu'),
(5, 'Made Bemo', 'madebemo771@gmail.com', 'ISO', 'Full Installasi untuk kantor Gubernur'),
(6, 'Lika Kamandanu', 'Lika13@gmail.com', 'Live', 'Untuk Perusahaan startup Lika'),
(7, 'Wira Armando', 'wahyuwirya88@gmail.com', 'Live', 'PT armando bagian kasir'),
(8, 'Jika Wahyono', 'Wahyoyo68@gmail.com', 'Full', 'PT wahyoyo untuk 10 pc'),
(12, 'Wayan Kss', 'Karyosepuh69@gmail.com', 'Full', 'Untuk pembuatan karyo bedeg ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'alex munstar', 'kusumaputra060@gmail.c', '$1$eI..Pw0.$4akTakjmsIvpxD/QZJv9z.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
