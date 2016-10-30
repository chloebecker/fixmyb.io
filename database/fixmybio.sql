-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 11:32 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixmybio`
--

-- --------------------------------------------------------

--
-- Table structure for table `bios`
--

CREATE TABLE `bios` (
  `id` int(11) NOT NULL,
  `the_bios` text NOT NULL,
  `social_media` varchar(4) NOT NULL,
  `rating_key` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings_stars`
--

CREATE TABLE `ratings_stars` (
  `review` text NOT NULL,
  `rating_key` varchar(10) NOT NULL,
  `stars` tinyint(4) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first` varchar(128) NOT NULL,
  `last` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `rater_rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `uid`, `pwd`, `rater_rating`) VALUES
(1, 'Adrian', 'Leonard', 'adrian', '$2y$10$Mj8ICekv3G07ONLmOpan5e15r1872w6s6Fz1TzV.GOMBgznhI0Rfe', 0),
(2, 'Test', 'Test', 'testing', '$2y$10$tJWOZIzow4I8rQfzwuVye.d.7AiYV1p1gXNd8LVBsb8b8Uqf8.4a6', 0),
(3, 'testtt', 'testtt', 'hello', '$2y$10$6pgpREYEdXjhJuMCNjSB9.8vo8CulIDqBOcnYMuIfvuX7jo39Zhga', 0),
(4, 'testingItAll', 'TestingItMore', 'lol', '$2y$10$hNVFNoA.v2XbDXSlwSZn9.VVM32X6tRM0X6RHABOMXd.obMpP4KNe', 0),
(5, 'lkj', 'lkj', 'ttt', '$2y$10$WyCaAn0hRdZUlaAR0FiECeZqT2Kuq1SRJpVim3y0VKuKZ5OQHMNaW', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bios`
--
ALTER TABLE `bios`
  ADD PRIMARY KEY (`id`,`rating_key`),
  ADD KEY `rating_constraint` (`rating_key`);

--
-- Indexes for table `ratings_stars`
--
ALTER TABLE `ratings_stars`
  ADD PRIMARY KEY (`rating_key`,`id`),
  ADD KEY `id_constraint_user` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bios`
--
ALTER TABLE `bios`
  ADD CONSTRAINT `rating_constraint` FOREIGN KEY (`rating_key`) REFERENCES `ratings_stars` (`rating_key`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings_stars`
--
ALTER TABLE `ratings_stars`
  ADD CONSTRAINT `id_constraint` FOREIGN KEY (`id`) REFERENCES `bios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_constraint_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
