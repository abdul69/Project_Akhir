-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2015 pada 08.25
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chatnchat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`id` int(23) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `chat` text,
  `chatTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `username`, `chat`, `chatTime`) VALUES
(61, 'abdoel', 'hgdhgdfjhf', '2015-05-18 09:41:37'),
(60, 'abdoel', 'adgasd', '2015-05-18 09:40:53'),
(59, 'abdoel', 'gdjhdjhfjh', '2015-05-18 09:40:35'),
(58, 'abdoel', 'iutu', '2015-05-18 09:26:18'),
(55, 'adul', 'ghg', '2015-05-18 09:14:08'),
(56, 'admin', 'ssss', '2015-05-18 09:14:36'),
(57, 'abdoel', 'hdhgd', '2015-05-18 09:21:07'),
(47, 'adul', 'HOHOHO :)', '2015-05-18 09:05:02'),
(48, 'adul', ':D', '2015-05-18 09:05:39'),
(49, 'adul', 'HGJHK', '2015-05-18 09:05:58'),
(50, 'adul', 'sghsdfghs', '2015-05-18 09:12:58'),
(51, 'adul', 'dfhdhdfhs', '2015-05-18 09:13:04'),
(52, 'adul', 'eva cantik :)', '2015-05-18 09:13:28'),
(53, 'adul', 'aaaaaa', '2015-05-18 09:14:03'),
(54, 'adul', '', '2015-05-18 09:14:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `loginDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `loginDate`) VALUES
('adul', 'masterx384@gmail.com', '2015-05-18 09:25:50'),
('abdoel', 'abdoelbasier69@gmail.com', '2015-05-18 09:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
