-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2020 at 10:35 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `time` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `info` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `services` mediumtext NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `fname`, `lname`, `email`, `phone`, `date`, `time`, `info`, `address`, `services`, `customer_id`) VALUES
(407, 'TEST', 'Admin', 'admin@admin.com', '123-123-1234', '2020-04-30', '10:54PM', 'I HAVE&nbsp;', '101 Vera King Farris Dr, Galloway, NJ 08205', '                        <h5>Carpet Cleaning:</h5>                        <p id=\"rm\">Room: 1</p>                        <p id=\"ba\"></p>                        <p id=\"et\"></p>                        <p id=\"st\"></p>                        <h5>Upholstery Cleaning: </h5>                        <p id=\"so\"></p>                        <p id=\"se\"></p>                        <p id=\"ch\"></p>                        <p id=\"ot\"></p>                        <p id=\"dr\"></p>                        <h5>Tile &amp; Grout Cleaning: </h5>                        <p id=\"tr\"></p>                        <p id=\"tb\"></p>                        <p id=\"te\"></p>                        <p id=\"ts\"></p>                        <br>                        <h2>Estimated Total:                            <label>$ </label>                            <label id=\"total\">15</label>                        </h2>                    <br><br> Payment Option: cash', 17);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` tinyint(1) UNSIGNED DEFAULT '0',
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `username`, `email`, `date`, `password`, `user_level`, `verified`, `token`) VALUES
(17, NULL, NULL, 'admin', 'admin@admin.com', NULL, '$2y$10$um3mIQZY4MEnRbtNmfp3qekaQrEPlD3fLqX94un6s2h5Et9nemQeq', 1, 1, 'f4a42c7d53821753d38dccf9edc2f6dd47741987b6523195a98836dca51b44478a626269a20703c69b4f78e60d00fca25f15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `Schedule_FK` FOREIGN KEY (`customer_id`) REFERENCES `signup` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
