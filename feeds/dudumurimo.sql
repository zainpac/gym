-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 08:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dudumurimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `export`
--

CREATE TABLE `export` (
  `exp_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `exp_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `export`
--

INSERT INTO `export` (`exp_id`, `food_id`, `exp_date`, `quantity`) VALUES
(1, 6, '2022-06-07 22:00:00', '55'),
(2, 2, '2022-06-07 22:00:00', '45'),
(3, 8, '2022-06-15 22:00:00', '22'),
(4, 8, '2022-06-01 22:00:00', '15'),
(5, 8, '2022-06-07 22:00:00', '15'),
(6, 8, '2022-06-01 22:00:00', '10'),
(7, 15, '2022-05-31 22:00:00', '15'),
(8, 16, '0000-00-00 00:00:00', '2022-06-07 22:2'),
(9, 17, '0000-00-00 00:00:00', '2022-06-13 06:1'),
(10, 17, '2022-06-13 04:12:06', ''),
(11, 4, '2022-06-13 04:12:48', '45'),
(12, 4, '2022-06-13 04:13:09', '455'),
(13, 5, '2022-06-13 04:15:50', '45');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `foodname` varchar(20) DEFAULT NULL,
  `owner` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `foodname`, `owner`) VALUES
(1, 'mango', ''),
(2, 'mango', 'mabyigi'),
(4, 'mango', 'mabyigi'),
(5, '555', 'mmm'),
(6, 'inyama', 'regis'),
(7, 'raice', 'diane ogg'),
(8, 'raice', 'mabyigi'),
(9, 'shhss', 'jjs'),
(10, 'shhss', 'jjs'),
(11, 'mango', 'diane'),
(12, 'mango', 'mabyigi'),
(13, 'mango', 'gvikvb'),
(14, 'mango', 'diane'),
(15, 'beans', 'jjs'),
(16, 'carrot', 'new'),
(17, 'patato', 'rubingo');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `imp_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `imp_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`imp_id`, `food_id`, `imp_date`, `quantity`) VALUES
(1, 2, '2022-06-21 22:00:00', '45'),
(2, 2, '2022-06-23 22:00:00', '55'),
(3, 2, '2022-06-23 22:00:00', '55'),
(4, 6, '2022-06-07 22:00:00', '45'),
(5, 8, '2022-06-06 22:00:00', '45'),
(6, 8, '2021-08-03 22:00:00', '22'),
(7, 2, '0000-00-00 00:00:00', '45'),
(8, 2, '0000-00-00 00:00:00', '45'),
(9, 6, '2022-06-13 22:00:00', '55'),
(10, 7, '2022-06-08 22:00:00', '45'),
(11, 1, '2022-05-31 22:00:00', '45'),
(12, 15, '2022-06-14 22:00:00', '45'),
(13, 16, '2022-06-01 22:00:00', '55'),
(14, 10, '0000-00-00 00:00:00', '2022-06-07 22:26:03'),
(15, 10, '2022-06-07 20:28:33', '45'),
(16, 17, '2022-06-13 04:09:46', '55'),
(17, 17, '2022-06-13 04:09:56', '55'),
(18, 4, '2022-06-13 04:12:39', '455'),
(19, 5, '2022-06-13 04:15:11', '45'),
(20, 5, '2022-06-13 04:15:36', '45'),
(21, 5, '2022-06-13 04:15:36', '45');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `m_id` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`m_id`, `uname`, `password`) VALUES
(1, 'ange', '1234'),
(3, 'ange', '123'),
(4, 'user1', 'd41d8cd9'),
(5, 'user1', 'd41d8cd9'),
(6, 'user', 'dbaa837d'),
(7, 'diane', 'ishimweo'),
(8, 'ange', '1234'),
(9, 'diane', 'ange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `export`
--
ALTER TABLE `export`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`imp_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `export`
--
ALTER TABLE `export`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `imp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `export`
--
ALTER TABLE `export`
  ADD CONSTRAINT `export_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
