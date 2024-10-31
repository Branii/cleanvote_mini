-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 09:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleanvotemini`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `email`, `password`, `date_created`) VALUES
(1, 'admin@cleanvote.gh', '$2y$10$VWQas36SeaweR551nW2kROu.dlmkqDGidj0eIkPgBVLkI6VbaH7SS', '2024-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` varchar(225) DEFAULT NULL,
  `candidate_gender` varchar(10) DEFAULT NULL,
  `candidate_mobile` varchar(20) DEFAULT NULL,
  `candidate_image` varchar(225) DEFAULT NULL,
  `candidate_code` varchar(11) DEFAULT NULL,
  `candidate_link` varchar(225) DEFAULT NULL,
  `candidate_vote_count` int(11) DEFAULT 0,
  `candidate_amount_recieved` int(11) DEFAULT NULL,
  `datecreated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_name`, `candidate_gender`, `candidate_mobile`, `candidate_image`, `candidate_code`, `candidate_link`, `candidate_vote_count`, `candidate_amount_recieved`, `datecreated`) VALUES
(1, 'Example Artist 1', 'Male', '0553912349', 'img.jpg', '001', 'some link', 165, 165, '2024-10-24'),
(2, 'Example Artist 2', 'Male', '0553912349', 'img.jpg', '002', 'some link', 100, 100, '2024-10-24'),
(3, 'Example Artist 3', 'Male', '0553912349', 'img.jpg', '003', 'some link', 101, 101, '2024-10-24'),
(4, 'Example Artist 4', 'Male', '0553912349', 'img.jpg', '004', 'some link', 10, 10, '2024-10-24'),
(5, 'Example Artist 5', 'Male', '0553912349', 'img.jpg', '005', 'some link', 10, 10, '2024-10-24'),
(6, 'Example Artist 6', 'Male', '0553912349', 'img.jpg', '006', 'some link', 50, 50, '2024-10-24'),
(7, 'Example Artist 7', 'Male', '0553912349', 'img.jpg', '007', 'some link', 53, 53, '2024-10-24'),
(8, 'Example Artist 8', 'Male', '0553912349', 'img.jpg', '008', 'some link', 150, 150, '2024-10-24'),
(9, 'Example Artist 9', 'Male', '0553912349', 'img.jpg', '009', 'some link', 150, 150, '2024-10-24'),
(11, 'Emmanuel Kusi', 'Male', '0553912349', 'user-1.jpg', '5118', 'https://host/domain/code/5118', 0, 0, '2024-10-29'),
(12, 'Ama Ghanaba', 'Female', '0553912349', 'user-10.jpg', '5111', 'https://host/domain/code/5111', 0, 0, '2024-10-29'),
(13, 'Lucia Marys', 'Female', '0553912349', 'user-2.jpg', '1111', 'https://host/domain/code/1111', 0, 0, '2024-10-29'),
(14, 'Lucia Marysp', 'Female', '0553912349', 'user-2.jpg', '0011', 'https://host/domain/code/1111', 0, 0, '2024-10-29'),
(15, 'Sardick Mershack', 'Male', '0553812469', 'user-6.jpg', '7994', 'https://host/domain/code/7994', 0, 0, '2024-10-29'),
(16, 'Hajara Mumuni', 'Male', '0553812489', 'user-7.jpg', '1846', 'https://host/domain/code/1846', 0, 0, '2024-10-29'),
(17, 'Samuel Adjiaioo', 'Male', '0553812489', 'user-8.jpg', '9913', 'https://host/domain/code/9913', 0, 0, '2024-10-29'),
(18, 'Fee Byowe Svilver', 'Male', '5454353445', 'user-3.jpg', '4547', 'https://host/domain/code/4547', 0, 0, '2024-10-29'),
(20, 'Prof Promise', 'Male', '4135454', 'user-10.jpg', '2266', 'https://host/domain/code/2266', 0, 0, '2024-10-31'),
(21, 'David Osabutey Sarah', 'Female', '4135454', 'user-10.jpg', '7847', 'https://host/domain/code/7847', 0, 0, '2024-10-31'),
(22, 'Karismatic Vour', 'Female', '543543543', 'user-5.jpg', '5646', 'https://host/domain/code/5646', 0, 0, '2024-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentid` int(11) NOT NULL,
  `candidate_id` varchar(11) DEFAULT NULL,
  `candidate_name` varchar(225) DEFAULT NULL,
  `amount_paid` varchar(11) DEFAULT NULL,
  `payment_reference` varchar(100) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `date_created` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentid`, `candidate_id`, `candidate_name`, `amount_paid`, `payment_reference`, `payment_status`, `date_created`) VALUES
(15, '1', 'Example Artist 1', '100', '6719c68565197', 'Paid', '2024-10-24'),
(16, '5', 'Example Artist 5', '100', '6719c7659da83', 'Paid', '2024-10-24'),
(17, '4', 'Example Artist 4', '1500', '6719c99e27493', 'Paid', '2024-10-24'),
(18, '4', 'Example Artist 4', '1', '6719d736619a6', 'Pending', '2024-10-24'),
(19, '4', 'Example Artist 4', '1', '6719d73f7745a', 'Pending', '2024-10-24'),
(20, '4', 'Example Artist 4', '1', '6719d76aa625b', 'Pending', '2024-10-24'),
(21, '4', 'Example Artist 4', '1', '6719d76ed30cd', 'Pending', '2024-10-24'),
(22, '4', 'Example Artist 4', '1', '6719d7858a729', 'Pending', '2024-10-24'),
(23, '4', 'Example Artist 4', '100', '6719d85bdd44d', 'Paid', '2024-10-24'),
(24, '9', 'Example Artist 9', '1', '6719d998b1dcf', 'Pending', '2024-10-24'),
(25, '9', 'Example Artist 9', '150', '6719d9ced29f6', 'Pending', '2024-10-24'),
(26, '9', 'Example Artist 9', '1', '6719d9dcd067f', 'Pending', '2024-10-24'),
(27, '9', 'Example Artist 9', '150', '6719d9ef08e87', 'Paid', '2024-10-24'),
(28, '3', 'Example Artist 3', '150', '6719dafe73737', 'Pending', '2024-10-24'),
(29, '8', 'Example Artist 8', '20', '6719db5932257', 'Paid', '2024-10-24'),
(30, '2', 'Example Artist 2', '150', '6719ddec369b2', 'Paid', '2024-10-24'),
(31, '1', 'Example Artist 1', '150', '6719e14a48b8b', 'Paid', '2024-10-24'),
(32, '1', 'Example Artist 1', '1500', '6719e18c1c636', 'Paid', '2024-10-24'),
(33, '2', 'Example Artist 2', '10000', '6719e1d688a8d', 'Paid', '2024-10-24'),
(34, '3', 'Example Artist 3', '100', '6719e236eca9b', 'Paid', '2024-10-24'),
(35, '5', 'Example Artist 5', '1000', '6719e30fbe4a4', 'Paid', '2024-10-24'),
(36, '8', 'Example Artist 8', '15000000000', '6719e3d5ab7e2', 'Pending', '2024-10-24'),
(37, '8', 'Example Artist 8', '15000000000', '6719e3dd92595', 'Pending', '2024-10-24'),
(38, '8', 'Example Artist 8', '1500000', '6719e3e985742', 'Paid', '2024-10-24'),
(39, '4', 'Example Artist 4', '10', '6719e5aa6b6d1', 'Paid', '2024-10-24'),
(40, '9', 'Example Artist 9', '150', '6719e64f295f9', 'Paid', '2024-10-24'),
(41, '6', 'Example Artist 6', '50', '6719e68ce1a2d', 'Paid', '2024-10-24'),
(42, '7', 'Example Artist 7', '1', '6719e6b722ad7', 'Paid', '2024-10-24'),
(43, '7', 'Example Artist 7', '2', '6719e75f5f0ad', 'Pending', '2024-10-24'),
(44, '7', 'Example Artist 7', '1', '6719e777b3c2a', 'Paid', '2024-10-24'),
(45, '3', 'Example Artist 3', '0', '6719e80ec5e6a', 'Pending', '2024-10-24'),
(46, '3', 'Example Artist 3', '0', '6719e815e3632', 'Pending', '2024-10-24'),
(47, '3', 'Example Artist 3', '0', '6719e81b54f25', 'Pending', '2024-10-24'),
(48, '3', 'Example Artist 3', '1', '6719e81fc92cf', 'Paid', '2024-10-24'),
(49, '7', 'Example Artist 7', '1', '6719ee2ab568f', 'Pending', '2024-10-24'),
(50, '7', 'Example Artist 7', '150', '671abd44bf0a7', 'Pending', '2024-10-24'),
(51, '7', 'Example Artist 7', '100', '671ac36c19851', 'Pending', '2024-10-25'),
(52, '7', 'Example Artist 7', '150', '671ac41d865d7', 'Pending', '2024-10-25'),
(53, '7', 'Example Artist 7', '1', '671ac834b9a86', 'Paid', '2024-10-25'),
(54, '7', 'Example Artist 7', '', '671aca7633854', 'Pending', '2024-10-25'),
(55, '7', 'Example Artist 7', '', '671aca7746f75', 'Pending', '2024-10-25'),
(56, '7', 'Example Artist 7', '', '671aca77d57a4', 'Pending', '2024-10-25'),
(57, '7', 'Example Artist 7', '', '671aca785287c', 'Pending', '2024-10-25'),
(58, '7', 'Example Artist 7', '', '671aca796dd19', 'Pending', '2024-10-25'),
(59, '7', 'Example Artist 7', '', '671aca799aae6', 'Pending', '2024-10-25'),
(60, '7', 'Example Artist 7', '', '671aca79c9b41', 'Pending', '2024-10-25'),
(61, '7', 'Example Artist 7', '', '671aca7a00789', 'Pending', '2024-10-25'),
(62, '7', 'Example Artist 7', '', '671aca7a297a0', 'Pending', '2024-10-25'),
(63, '7', 'Example Artist 7', '', '671aca7a50864', 'Pending', '2024-10-25'),
(64, '7', 'Example Artist 7', '', '671aca7a779cc', 'Pending', '2024-10-25'),
(65, '7', 'Example Artist 7', '', '671aca7aa477a', 'Pending', '2024-10-25'),
(66, '7', 'Example Artist 7', '', '671aca7acf96d', 'Pending', '2024-10-25'),
(67, '7', 'Example Artist 7', '', '671aca7b0c281', 'Pending', '2024-10-25'),
(68, '7', 'Example Artist 7', '', '671aca7b69d2d', 'Pending', '2024-10-25'),
(69, '7', 'Example Artist 7', '', '671aca7bcda55', 'Pending', '2024-10-25'),
(70, '7', 'Example Artist 7', '', '671aca7c08329', 'Pending', '2024-10-25'),
(71, '7', 'Example Artist 7', '', '671aca7c2d648', 'Pending', '2024-10-25'),
(72, '7', 'Example Artist 7', '', '671aca7c5657c', 'Pending', '2024-10-25'),
(73, '7', 'Example Artist 7', '', '671aca7c83483', 'Pending', '2024-10-25'),
(74, '7', 'Example Artist 7', '50', '671ad0bad0eeb', 'Paid', '2024-10-25'),
(75, '7', 'Example Artist 7', '1', '671fe48333777', 'Pending', '2024-10-28'),
(76, '7', 'Example Artist 7', '1', '672002939ea1e', 'Pending', '2024-10-28'),
(77, '7', 'Example Artist 7', '1', '6720029565c7d', 'Pending', '2024-10-28'),
(78, '7', 'Example Artist 7', '1', '672002962011e', 'Pending', '2024-10-28'),
(79, '7', 'Example Artist 7', '1', '67200296def8a', 'Pending', '2024-10-28'),
(80, '7', 'Example Artist 7', '1', '672002a05ca27', 'Pending', '2024-10-28'),
(81, '1', 'Example Artist 1', '150', '6722e5569056a', 'Pending', '2024-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
