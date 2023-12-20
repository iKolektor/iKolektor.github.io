-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 08:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikolek_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `driver_fname` varchar(100) NOT NULL,
  `driver_lname` varchar(100) NOT NULL,
  `driver_coninfo` varchar(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `driver_truck` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `driver_fname`, `driver_lname`, `driver_coninfo`, `username`, `password`, `driver_truck`) VALUES
(1, 'Pangetan', 'AMPARO', '09272047655', 'Daniel', '5f4dcc3b5aa765d61d8327deb882cf99', 'GT-38'),
(2, 'Louela', 'Bondad', '09090909070', 'Louela', '829f1e7eceb78dd76d5ec63e25bec016', 'GT-48'),
(3, 'Lovely', 'Bondad', '09237286444', 'Lovely', '829f1e7eceb78dd76d5ec63e25bec016', 'GT-47'),
(4, 'Uging', 'pangit', '09090990908', 'Uging', '5f4dcc3b5aa765d61d8327deb882cf99', 'GT-45'),
(5, 'Dennis', 'Owen', '09232323743', 'Dennis', '5f4dcc3b5aa765d61d8327deb882cf99', 'GT-42'),
(6, 'Pedilinda', 'Bondad', '09234234238', 'Pedilinda', '5f4dcc3b5aa765d61d8327deb882cf99', 'GT-36'),
(7, 'ANGELICA', 'AMPARO', '09272023232', 'pachuchay', '5f4dcc3b5aa765d61d8327deb882cf99', 'GT-37');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`) VALUES
(718, 'administer', '00000000');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(100) NOT NULL,
  `ann_entry` text NOT NULL,
  `announcement_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `ann_entry`, `announcement_date`) VALUES
(1, 'Sana gumana', '2023-07-23 10:53:38'),
(2, 'Gumana na kaya', '2023-07-23 13:43:05'),
(3, 'Ano kaya', '2023-07-23 13:45:20'),
(4, 'Abay gumana ka', '2023-07-23 18:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `truck_id` int(11) NOT NULL,
  `truck_name` varchar(100) NOT NULL,
  `day_of_the_week` varchar(100) NOT NULL,
  `route` varchar(200) NOT NULL,
  `route_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trucks`
--

INSERT INTO `trucks` (`truck_id`, `truck_name`, `day_of_the_week`, `route`, `route_link`) VALUES
(1, 'GT-37', 'FRIDAY', 'Maryhill College, M.L. Tagarao to DLL, West 1, Calmar (Lipote, Mayon, Iriga, Bulusan, 5C) St. Tomas Vill., Metropolis', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(2, 'GT-37', 'SUNDAY', 'Old Cityhall to Metro Gaisano, Market Ave., Brgy.1, Don Victor Vill, Hermana Fausta Subd.', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(3, 'GT-41', 'MONDAY', 'Quezon Ave., Enriquez St., Granja St., Allarey St., Bonifacio St., Public Market, Market Ave., St. Anne Hospital, Marketview (Mangga St., Lansones St., Calumpit St.) Cotta (Prks. Pagkakaisa, Bagong Ma', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(4, 'GT-41', 'TUESDAY', 'Quezon Ave., Enriquez St., Granja St., Allarey St., Bonifacio St., Public Market, Market Ave., St. Anne Hospital, Sentro Pastoral, Inmaculada Concepcion Subd., Lourdes Subd.,', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(5, 'GT-41', 'WEDNESDAY', 'Quezon Ave., Enriquez St., Granja St., Allarey St., Bonifacio St., Public Market, Market Ave., St. Anne Hospital, Alpsville Subd., Cotta (Prks. Pagkakaisa, Bagong Masagana, Bagong Sinag, San Fernando ', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(6, 'GT-41', 'THURSDAY', 'Quezon Ave., Enriquez St., Granja St., Allarey St., Bonifacio St., Public Market, Market Ave., St. Anne Hospital, Sentro Pastoral, Inmaculada Concepcion Subd., Lourdes Subd.,', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(7, 'GT-41', 'FRIDAY', 'Quezon Ave., Enriquez St., Granja St., Allarey St., Bonifacio St., Public Market, Market Ave., St. Anne Hospital, Marketview (Mangga St., Lansones St., Calumpit St.) Cotta (Prks. Pagkakaisa, Bagong Ma', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O'),
(8, 'GT-41', 'SUNDAY', 'Bonifacio St., Public Market, Market Ave., Gulang-Gulang Hi-way', 'https://www.openstreetmap.org/#map=16/13.9263/121.6127&layers=O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`,`password`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`truck_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `truck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
