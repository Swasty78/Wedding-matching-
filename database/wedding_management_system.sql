-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 02:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_log`
--

CREATE TABLE `cust_log` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_log`
--

INSERT INTO `cust_log` (`c_id`, `c_name`, `c_pass`) VALUES
(1, 'mayesha_rahman', '1234'),
(2, 'mash', '222'),
(4, 'mizan', '3456'),
(5, 'Arnab', '8989'),
(8, 'Munia', '9797');

-- --------------------------------------------------------

--
-- Table structure for table `invoice1`
--

CREATE TABLE `invoice1` (
  `c_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice1`
--

INSERT INTO `invoice1` (`c_id`, `p_id`, `date`) VALUES
(2, 1, '2021-01-08'),
(2, 5, '2021-01-28'),
(2, 6, '2021-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `invoice2`
--

CREATE TABLE `invoice2` (
  `c_id` int(50) NOT NULL,
  `pln_id` int(50) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice2`
--

INSERT INTO `invoice2` (`c_id`, `pln_id`, `v_name`, `date`) VALUES
(4, 3, 'Radisson Blue', '2021-02-14'),
(8, 3, 'Radisson Blue', '2021-03-18'),
(2, 3, 'Chadni Convention Center', '2021-02-14'),
(2, 6, 'Le meridien', '2021-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` int(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_details` varchar(500) NOT NULL,
  `p_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `p_name`, `p_details`, `p_price`) VALUES
(1, 'Gold', 'Planner,Venue,Photograpger,Food', 200000),
(2, 'Silver', 'Planner,Venue,Food', 150000),
(3, 'Platinum', 'Planner,Venue,Food,Photographer,Service', 230000),
(4, 'Simple', 'Venue.Food', 100000),
(5, 'unique', 'Planner,Venue,Food,Photographer,show', 300000),
(6, 'normal', 'Planner,Food', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE `planner` (
  `pln_id` int(50) NOT NULL,
  `pln_name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `pln_payment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`pln_id`, `pln_name`, `phone`, `pln_payment`) VALUES
(1, 'Jinia', 1726478, 5000),
(2, 'Ifty', 1583254, 3000),
(3, 'Zidan', 82643682, 4000),
(4, 'Akash', 3456789, 2000),
(5, 'prome', 178543, 7000),
(6, 'Alif', 567934, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `passcode` varchar(30) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `passcode`, `title`) VALUES
(1, 'user', '123', 'admin'),
(2, 'mayesha', '8080', 'admin'),
(3, 'Labib', '7676', 'Admin'),
(4, 'Dristy', '9797', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `v_name` varchar(100) NOT NULL,
  `v_address` varchar(100) NOT NULL,
  `v_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`v_name`, `v_address`, `v_price`) VALUES
('Chadni Convention Center', 'Puran Dhaka', 50000),
('Golf Garden', 'Dhaka Cantonment', 40000),
('Le Meridien', 'Nikunja-2, Khilkhet', 75000),
('Pan Pacific', 'Sonargaon', 70000),
('PSC Conevention Center', 'Mirpur', 25000),
('Radisson Blue', 'BAF Airport Road', 50000),
('Sena Malancho', 'Cantonment', 80000),
('Senakunjo', 'Cantonment', 60000),
('The Westin', 'Ghulshan', 50000),
('White Hall', 'Banani', 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_log`
--
ALTER TABLE `cust_log`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `invoice1`
--
ALTER TABLE `invoice1`
  ADD KEY `c_id` (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `invoice2`
--
ALTER TABLE `invoice2`
  ADD KEY `c_id` (`c_id`),
  ADD KEY `pln_id` (`pln_id`),
  ADD KEY `v_name` (`v_name`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `planner`
--
ALTER TABLE `planner`
  ADD PRIMARY KEY (`pln_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`v_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice1`
--
ALTER TABLE `invoice1`
  ADD CONSTRAINT `invoice1_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `cust_log` (`c_id`),
  ADD CONSTRAINT `invoice1_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`);

--
-- Constraints for table `invoice2`
--
ALTER TABLE `invoice2`
  ADD CONSTRAINT `invoice2_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `cust_log` (`c_id`),
  ADD CONSTRAINT `invoice2_ibfk_2` FOREIGN KEY (`pln_id`) REFERENCES `planner` (`pln_id`),
  ADD CONSTRAINT `invoice2_ibfk_3` FOREIGN KEY (`v_name`) REFERENCES `venue` (`v_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
