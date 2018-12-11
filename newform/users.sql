-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `Lastname` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `Lastname`, `email`, `confirmpassword`, `phonenumber`, `gender`, `country`, `created_at`, `password_user`) VALUES
(1, '', 'Olamide', 'Oladeji', '', 0, '08102560623', 'female', '0000-00-00', ''),
(2, '', 'Ifedayo', 'kehinde', '', 0, '07035364584', 'female', '0000-00-00', ''),
(3, '', 'Taiwo', 'ladipo', '', 0, '08034567898', 'female', '0000-00-00', ''),
(4, 'Olamide', 'Oladeji', 'olamidewunmi10@gmail.com', 'mypasswordola10@', 2147483647, 'female', 'Eythopia', '2018-12-11', ''),
(5, 'Ifedayo', 'kehinde', 'kehide.ifedayo@live.com', 'kennylife', 2147483647, 'female', 'Georgia', '2018-12-11', ''),
(6, 'Taiwo', 'ladipo', 'taiwo.ladipo@cottacrush.com', 'mymentoer', 2147483647, 'female', 'Canada', '2018-12-11', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
