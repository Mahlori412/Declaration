-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 03:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `declaration`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` int(11) NOT NULL,
  `serial_num` varchar(255) NOT NULL,
  `item_nam` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stud_num` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `serial_num`, `item_nam`, `description`, `stud_num`, `lost`, `date`) VALUES
(44, 'MHVCG215154khhb', 'Laptop', 'Black HP 1 TB Hard drive ', 215734838, 0, '2020-04-22 14:42:32.365544'),
(45, 'HGD5465CDHVjj', 'Computer', 'Black Acer 1 TB Hard drive', 215734838, 0, '2020-04-21 22:28:44.655480'),
(47, 'QWERTY12345', 'Laptop', 'Soshanguve ', 215734838, 1, '2020-04-22 14:45:55.371145'),
(48, 'HGCFHGJYUIHIUH', 'Laptop', 'JHBUHJBKBJ', 215734838, 0, '2020-04-22 16:57:17.982911'),
(49, 'JHKVHJHV123', 'Laptop', 'Black 1 TB 4 GB ram', 215734831, 0, '2020-04-23 10:30:00.526098'),
(51, 'KJGJFJG2454', 'Computer', 'gvjnghvjhv', 215734831, 0, '2020-04-23 10:33:56.019221');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `stud_num` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `serial_num` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `stud_num`, `message`, `serial_num`, `date`, `status`) VALUES
(3, 215734838, 'Some one was tring to declare someone else item or lost item', 'MHVCG215154khhb', '2020-04-22 19:16:36', 1),
(5, 215734838, 'was trying to declare someone else items or lost item', 'HGD5465CDHVjj', '2020-04-22 20:32:33', 1),
(6, 215734831, 'was trying to declare someone else items or lost item', 'JHKVHJHV123', '2020-04-23 10:33:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reset_p`
--

CREATE TABLE `reset_p` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `stud_num` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `uPass` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`stud_num`, `fullname`, `email`, `phone`, `campus`, `uPass`, `usertype`, `vkey`, `verified`, `date`) VALUES
(123456789, 'Thandi Nkosi Admin', 'admin@gmail.com', '0762153658', 'Soshanguve South Campus', 'e33b0f3cba2c4c8ddbb00bd0f650cae6', 'admin', '', 1, '2020-04-20 19:46:22.700696'),
(215734831, 'Remember Shongwe', 'mfanakazane65@gmail.com', '0711969659', 'eMalahleni Campus', 'e33b0f3cba2c4c8ddbb00bd0f650cae6', 'user', 'c3fee72c980140b5c5f1ca7dc1ead136', 1, '2020-04-23 10:28:14.131960'),
(215734838, 'Remember Shongwe', 'mfanakazane65@gmail.com', '0711969659', 'Soshanguve South Campus', 'e33b0f3cba2c4c8ddbb00bd0f650cae6', 'user', 'bb6d3848116b87d3e19188b8d1f17412', 1, '2020-04-21 22:25:46.191099');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`,`serial_num`),
  ADD KEY `stud_num` (`stud_num`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_p`
--
ALTER TABLE `reset_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`stud_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reset_p`
--
ALTER TABLE `reset_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`stud_num`) REFERENCES `users` (`stud_num`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
