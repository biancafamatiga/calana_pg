-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 07:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calana_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `calana_users`
--

CREATE TABLE `calana_users` (
  `id` int(15) NOT NULL,
  `player_id` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calana_users`
--

INSERT INTO `calana_users` (`id`, `player_id`, `email`, `password`) VALUES
(16, '1111-1111-1111', 'bfmtg313@gmail.com', 'slay'),
(17, '1234-1234-1234', 'lisa@gmail.com', '1020'),
(18, '0000-0000-0000', 'slayerage@gmail.com', 'qqqq'),
(19, '2222-2222-2222', 'ysabelfam@gmail.com', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(15) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`) VALUES
(1, '1x Incubator Limited', 150),
(2, '1x Super Incubator', 200),
(3, '1x Premium Battle Pass', 100),
(4, '3x Premium Battle Pass', 250),
(5, '1x Remote Raid Pass', 195),
(6, '3x Remote Raid Pass', 525),
(7, '1x Rocket Radar', 200),
(8, '1x Poffin', 100),
(9, '20x Poke Ball', 100),
(10, '100x Poke Ball', 460),
(11, '200x Poke Ball', 800),
(12, '1x Incense', 40),
(13, '8x Incense', 250),
(14, '1x Star Piece', 100),
(15, '8x Star Piece', 640),
(16, '10x Max Potion', 200),
(17, '6x Max Revive', 180),
(18, '1x Lucky Egg', 80),
(19, '8x Lucky Egg', 500),
(20, '1x Glacial Lure Module', 180),
(21, '1x Mossy Lure Module', 180),
(22, '1x Magnetic Lure Module', 180),
(23, '1x Rainy Lure Module', 180),
(24, '1x Lure Module', 180),
(25, '8x Lure Module', 680),
(26, 'Bag Upgrade', 200),
(27, 'Pokemon Storage Upgrade', 200),
(28, 'Postcard Pages', 100),
(29, '10x Togedemaru Sticker', 35),
(30, '10x Wartortle Sticker', 35),
(31, '10x Axew Sticker', 35),
(32, '10x Butterfree Sticker', 35),
(33, '10x Pikachu Sticker', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calana_users`
--
ALTER TABLE `calana_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calana_users`
--
ALTER TABLE `calana_users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
