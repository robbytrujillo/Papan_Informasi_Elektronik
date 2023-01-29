-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2013 at 07:04 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `eboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL auto_increment,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `lama` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `lama`) VALUES
(2, 'Pengumuman !!', '<p>\r\nSegera Terbit Buku Web terapan terdahsyat!!<br />\r\nHanya di lokomedia\r\n</p>\r\n<p>\r\n<img src="http://localhost./bab_4/panel/tinymcpuk/fileku/Image/lokomedia.jpg" /></p>', 5000),
(3, 'Ayo Belanja Buku Berkualitas di Lokomedia', '<br />\r\n<img src="http://localhost./bab_4/panel/tinymcpuk/fileku/Image/tokoonline.jpg" alt=" " width="241" height="300" />\r\n', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `ticker`
--

CREATE TABLE `ticker` (
  `id` int(11) NOT NULL auto_increment,
  `isi` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ticker`
--

INSERT INTO `ticker` (`id`, `isi`) VALUES
(1, 'Dapatkan buku-buku berkualitas hanya di bukulokomedia.com'),
(2, 'Kunjungi http://pointforme.jambispirit.com, dapatkan pengalaman menarik tentang provinsi Jambi di sini!!');
