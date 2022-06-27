-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 04:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt_form`
--

CREATE TABLE `adopt_form` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `catID` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `postcode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopt_form`
--

INSERT INTO `adopt_form` (`id`, `username`, `email`, `catID`, `address`, `phonenumber`, `postcode`) VALUES
(4, 'khaled', 'khaledahmed512@gmail.com', '1', 'Danga Bay, Country Garden, Bay Larul.', 515056, 80200),
(7, 'sam', 'sam@gmail.com', '2', 'danga bay, country garden', 12132548, 80200),
(16, 'hagid', 'hagid@gmail.com', '2', 'Danga Bay, Country Garden, Bay Larul.', 12365478, 80200),
(17, 'omar', 'omar@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(18, 'khaled', 'khaledahmed512@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(19, 'test5', 'test@gmail.com', '33', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 8),
(20, 'test2', 'test2@gmail.com', '25', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(21, 'test55', 'test55@gmail.com', '25', 'Danga Bay, Country Garden, Bay Larul.', 1, 80200),
(22, 'test', 'test3@gmail.com', '25', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(23, 'khaled', 'khaledahmed512@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(24, 'testtest', 'test123@gmail.com', '0', 'danga bay, country garden', 12687646, 36548),
(25, 'etasgvs', 'redZHBEDHB@gmail.com', '0', 'nedhnedrz', 0, 0),
(26, 'nizar', 'nizar@gmail.com', '0', 'Skudai, Tmn u, 82300', 113687168, 82300),
(27, 'nizar', 'nizar@gmail.com', '0', 'Skudai, Tmn u, 82300', 113687168, 82300),
(28, 'hagid', 'hagid@gmail.com', '0', 'tmn u ', 468416034, 41681),
(29, 'jalal', 'jalal@gmail.com', '0', 'Tmn U', 12365489, 25022),
(30, 'test20', 'test20@gmail.com', '0', 'danga bay', 125785489, 320165),
(31, 'test20', 'test20@gmail.com', '0', 'danga bay', 125785489, 320165),
(32, 'test20', 'test20@gmail.com', '0', 'danga bay', 125785489, 320165),
(33, 'test20', 'test20@gmail.com', '0', 'danga bay', 125785489, 320165),
(34, 'test101', 'test101@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 49864684, 22364),
(35, 'test', 'test500@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 13284754, 89654),
(36, 'test', 'test500@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 13284754, 89654),
(37, 'test', 'test500@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 13284754, 89654),
(38, 'test', 'test500@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 13284754, 89654),
(39, 'admin', 'test1@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(40, 'jalaltest', 'jalaltest@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 205684984, 24663),
(41, 'jalaltest', 'jalaltest@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 205684984, 24663),
(42, 'admin', 'test1@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 22364),
(43, 'test20', 'test20@gmail.com', '0', 'danga bay', 125785489, 25022),
(44, 'test20', 'test20@gmail.com', '0', 'danga bay', 125785489, 25022),
(45, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(46, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(47, 'admin', 'khaledahmed512@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 22364),
(48, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(49, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(50, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(51, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 36548),
(52, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 41681),
(53, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 41681),
(54, 'example', 'examole@gmail.com', '0', '025', 2147483647, 25360),
(55, 'example', 'examole@gmail.com', '0', '025', 2147483647, 25360),
(56, 'example1', 'example1@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 46846684, 53414),
(57, 'example', 'example@gmail.com', '0', 'example', 4684644, 53115),
(58, 'askhaled', 'khaledahmed512@gmail.com', '122', 'Tmn U', 4684644, 41681),
(59, 'askhaled', 'khaledahmed512@gmail.com', '122', 'Tmn U', 4684644, 41681),
(60, 'askhaled', 'khaledahmed512@gmail.com', '122', 'Tmn U', 4684644, 41681),
(61, 'askhaled', 'khaledahmed512@gmail.com', '122', 'danga bay', 125785489, 320165),
(62, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(63, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(64, 'example', 'example1@gmail.com', '0', 'example', 12365478, 20800),
(65, 'admin', 'khaledahmed512@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(66, 'asdasd', 'sdfsdf@gmail.com', '0', 'sdfsdf', 0, 0),
(67, 'asdasd', 'sdfsdf@gmail.com', '0', 'sdfsdf', 0, 0),
(68, 'askhaled', 'khaledahmed512@gmail.com', '0', 'adssad', 0, 0),
(69, 'askhaled', 'khaledahmed512@gmail.com', '0', 'adssad', 0, 0),
(70, 'askhaled', 'khaledahmed512@gmail.com', '0', 'adssad', 0, 0),
(71, 'askhaled', 'khaledahmed512@gmail.com', '0', 'adssad', 0, 0),
(72, 'askhaled', 'khaledahmed512@gmail.com', '3', 'adssad', 0, 0),
(73, 'askhaled', 'khaledahmed512@gmail.com', '3', 'adssad', 0, 0),
(74, 'askhaled', 'khaledahmed512@gmail.com', '0', 'danga bay', 125785489, 320165),
(75, 'askhaled', 'khaledahmed512@gmail.com', '25', 'danga bay', 125785489, 320165),
(76, 'khalid', 'khaledahmed512@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 89654),
(77, 'khalid', 'khaledahmed512@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 89654),
(78, 'admin', 'test1@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 25360),
(79, 'admin', 'test1@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 25360),
(80, 'admin', 'admin2@gmail.com', '25', 'Danga Bay, Country Garden, Bay Larul.', 515056, 24663),
(81, 'example', 'examole@gmail.com', '25', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 5313),
(82, 'example', 'examole@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 22364),
(83, 'example', 'examole@gmail.com', '0', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 22364),
(84, 'example', 'examole@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(85, 'example', 'examole@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(86, 'askhaled', 'khaledahmed512@gmail.com', '88', 'danga bay', 125785489, 82300),
(87, 'askhaled', 'khaledahmed512@gmail.com', '88', 'danga bay', 125785489, 82300),
(88, 'example', 'examole@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(89, 'example', 'examole@gmail.com', '3', 'Danga Bay, Country Garden, Bay Larul.', 123456789, 80200),
(90, 'askhaled', 'khaledahmed512@gmail.com', '88', 'danga bay', 125785489, 82300),
(91, 'example', 'example1@gmail.com', '3', 'example', 123456789, 80200),
(92, 'example', 'examole@gmail.com', '3', 'example', 123456789, 80200);

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_id`, `name`, `gender`, `breed`, `age`, `image`) VALUES
(2, 3, 'Bella', 'Male', 'Persian', 2, 'cat1.jpg'),
(3, 25, 'test', 'Male', 'Persian', 3, 'cat-3.jpeg'),
(5, 3, 'sam', 'Female', 'Persian', 7, 'cat3.jpg'),
(8, 8, 'soso', 'female', 'Persian', 8, 'cat-7.jpeg'),
(10, 88, 'lula', 'Female', 'fluffy', 9, 'cat-5.jpeg'),
(11, 55, 'nono', 'male', 'fluffy', 9, 'cat1.jpg'),
(12, 99, 'sinjab', 'male', 'fluffy', 8, 'cat-11.jpeg'),
(13, 122, 'test5', 'male', 'test', 9, 'cat-10.jpeg'),
(14, 55, 'Ota', 'Female', 'Persian', 8, 'cat-9.jpeg'),
(15, 89, 'Haya', 'Female', 'Oriental', 5, 'cat-5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (  
  `perm_id` int(11) NOT NULL,
  `perm_mod` varchar(5) NOT NULL,
  `perm_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`perm_id`, `perm_mod`, `perm_desc`) VALUES
(1, 'USR', 'Access users'),
(2, 'USR', 'Create new users'),
(3, 'USR', 'Update users'),
(4, 'USR', 'Delete users'),
(5, 'CAT', 'Access Cats'),
(6, 'CAT', 'Create new cats'),
(7, 'CAT', 'Update cats'),
(8, 'CAT', 'Delete cats');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Client'),
(3, 'Service Provider');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` int(11) NOT NULL,
  `perm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `perm_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(3, 5),
(3, 6),
(3, 7),
(3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 1),
(3, 'serviceprovider', 'serviceprovider@gmail.com', '123456', 3),
(4, 'Khalid', 'khaledahmed512@gmail.com', '123456', 2),
(6, 'test', 'test@gmail.com', '123456', 2),
(9, 'admin2', 'admin2@gmail.com', '123456', 1),
(10, 'admin3', 'admin3@gmail.com', '123456', 1),
(11, 'omar', 'omar@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt_form`
--
ALTER TABLE `adopt_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`),
  ADD KEY `perm_mod` (`perm_mod`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`perm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt_form`
--
ALTER TABLE `adopt_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
