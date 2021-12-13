-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodemcu_rfid_iot_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_the_iot_projects`
--

CREATE TABLE `table_the_iot_projects` (
  `hospitals_name` varchar(100) NOT NULL,
  `dea` varchar(100) NOT NULL,
  `doctors_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `existing_medical_condition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_the_iot_projects`
--

INSERT INTO `table_the_iot_projects` (`hospitals_name`,`dea`, `doctors_name`,`date`, `id`, `name`,`gender`,  `age`,`prescription`,`existing_medical_condition`) VALUES
('SAMC', '39EAB06D', 'Kang Mo yeon', '180856','180856', 'Carlos','Male','21','PRC','None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_the_iot_projects`
--
ALTER TABLE `table_the_iot_projects`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
