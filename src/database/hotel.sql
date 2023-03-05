-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 03:42 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mahabub Alahi', 'mahabubalahi9531@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `person` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `roomtype`, `price`, `person`, `img`) VALUES
(4, 'Dhaka', 'luxious', 3000, 'One-person room', 'suite final.jpeg'),
(8, 'Dhaka', 'luxious', 1500, 'One-person room', 'standard room.jpg'),
(9, 'Dhaka', 'Medium', 1000, 'One-person room', 'delux room.jpg'),
(10, 'Dhaka', 'Medium', 1000, 'One-person room', 'suite final.jpeg'),
(11, 'Chicago', 'Normal', 350, 'Two-person room', 'standard room.jpg'),
(12, 'New-York', 'luxious', 3000, 'One-person room', 'ali-inay-0h9LsnY13Hs-unsplash.jpg'),
(13, 'New-York', 'Medium', 1500, 'One-person room', 'jilbert-ebrahimi-kj4fRRj5Tqc-unsplash.jpg'),
(14, 'Mumbai', 'luxious', 3000, 'One-person room', 'khadeeja-yasser-dz9lOU2hdJY-unsplash.jpg'),
(15, 'Mumbai', 'Medium', 1500, 'One-person room', 'khadeeja-yasser-msFZE7d9KB4-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mahabub Alahi', 'abc@gmail.com', '1234'),
(2, 'Mah', 'mahabubalahi9531@gmail.com', ''),
(3, 'dfs', 'mahabubalahi1234@gmail.com', ''),
(4, 'dfs', 'mahabubalahi9531@gmail.com', ''),
(5, 'Priyo', 'lisatito123@yahoo.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
