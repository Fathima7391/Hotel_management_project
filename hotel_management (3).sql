-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 03:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `enquiry` varchar(50) NOT NULL,
  `reply` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `phone`, `email`, `enquiry`, `reply`, `status`, `regdate`) VALUES
(0, 'ali', '8281942239', 'ali@gmail.com', 'hey', '', 0, '2022-02-25 13:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `event_enquries`
--

CREATE TABLE `event_enquries` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `event_type` varchar(20) NOT NULL,
  `c_in` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `c_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_enquries`
--

INSERT INTO `event_enquries` (`name`, `email`, `phone`, `event_type`, `c_in`, `c_out`) VALUES
('aa', 'za@gmail.com', 854212, 'terrace', '2022-02-10 13:56:14', '2022-02-25 19:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `reservations_enquries`
--

CREATE TABLE `reservations_enquries` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `id_proof` varchar(30) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `no_of_rooms` int(30) NOT NULL,
  `room_type_2` varchar(30) NOT NULL,
  `no_of_room_2` int(20) NOT NULL,
  `no_of_guests` int(20) NOT NULL,
  `check_in` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `check_out` date NOT NULL,
  `status` int(10) NOT NULL,
  `reg_date` date NOT NULL,
  `ac` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations_enquries`
--

INSERT INTO `reservations_enquries` (`id`, `fname`, `lname`, `email`, `mob`, `id_proof`, `room_type`, `no_of_rooms`, `room_type_2`, `no_of_room_2`, `no_of_guests`, `check_in`, `check_out`, `status`, `reg_date`, `ac`) VALUES
(1, 'ali', 'a', 'a@gmail.com', '52451156', 'adhar', 'cabana', 1, 'double', 1, 2, '2022-02-17 13:52:36', '2022-02-10', 0, '2022-02-10', 'ac');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_id` int(10) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_price` int(11) NOT NULL,
  `room_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `service_id` int(10) NOT NULL,
  `service_type` varchar(30) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations_enquries`
--
ALTER TABLE `reservations_enquries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
