-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 11:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uzduotis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `number` varchar(20) NOT NULL,
  `year_made` date NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `number`, `year_made`, `model`) VALUES
(1, '1', '1992-01-02', 'audi'),
(2, '2', '1993-02-03', 'bmw'),
(3, '3', '1994-04-05', 'opel'),
(4, '4', '1995-05-06', 'kia');

-- --------------------------------------------------------

--
-- Table structure for table `car_management`
--

CREATE TABLE `car_management` (
  `id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `segments_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_management`
--

INSERT INTO `car_management` (`id`, `cars_id`, `segments_id`, `user_id`, `date_from`, `date_to`) VALUES
(1, 1, 1, 1, '2000-01-02', '2010-01-02'),
(2, 2, 2, 2, '2001-02-03', '2011-02-03'),
(3, 3, 3, 3, '2002-03-04', '2012-03-04'),
(4, 4, 4, 4, '2003-04-05', '2013-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `car_status`
--

CREATE TABLE `car_status` (
  `id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_status`
--

INSERT INTO `car_status` (`id`, `cars_id`, `status_id`, `date_from`, `date_to`) VALUES
(1, 1, 1, '2000-01-02', '2010-01-02'),
(2, 2, 2, '2001-02-03', '2011-02-03'),
(3, 3, 3, '2002-03-04', '2012-03-04'),
(4, 4, 4, '2003-04-05', '2013-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `segments`
--

CREATE TABLE `segments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `segments`
--

INSERT INTO `segments` (`id`, `name`) VALUES
(1, 'Vilnius'),
(2, 'Kaunas'),
(3, 'Klaipeda'),
(4, 'Siauliai');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `parent_id`) VALUES
(1, 'Nedauzta', 1),
(2, 'Nedauzta', 2),
(3, 'Dauzta', 3),
(4, 'Dauzta', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `segment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `segment`) VALUES
(1, 'Andrius', 1),
(2, 'Tomas', 2),
(3, 'Sandra', 3),
(4, 'Monika', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_management`
--
ALTER TABLE `car_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_status`
--
ALTER TABLE `car_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `segments`
--
ALTER TABLE `segments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_management`
--
ALTER TABLE `car_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_status`
--
ALTER TABLE `car_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `segments`
--
ALTER TABLE `segments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
