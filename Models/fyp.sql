-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 10:59 PM
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
  `catID` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `postcode` int(255) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopt_form`
--

INSERT INTO `adopt_form` (`id`, `username`, `email`, `catID`, `address`, `phonenumber`, `postcode`, `status`) VALUES
(104, 'test', 'test@gmail.com', 25, 'danga bay, country garden', 123456789, 82300, 'rejected'),
(105, 'Khalid', 'khaledahmed512@gmail.com', 3, 'danga bay, country garden', 125785489, 320165, 'approved'),
(106, 'Khalid', 'khaledahmed512@gmail.com', 8, 'danga bay, country garden', 125785489, 82300, 'approved'),
(107, 'Khalid', 'test@gmail.com', 99, 'danga bay, country garden', 123456789, 123456, 'rejected');

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
  `image` varchar(55) NOT NULL,
  `username` int(100) NOT NULL,
  `vaccinated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_id`, `name`, `gender`, `breed`, `age`, `image`, `username`, `vaccinated`) VALUES
(2, 3, 'Bella', 'Male', 'Persian', 2, 'cat1.jpg', 0, 'Yes'),
(5, 3, 'Sam', 'Female', 'Persian', 7, 'cat3.jpg', 0, 'Yes'),
(8, 8, 'Jazzi', 'Female', 'Persian', 8, 'cat-7.jpeg', 0, 'Yes'),
(11, 55, 'Melo', 'Male', 'Oriental', 9, 'cat1.jpg', 0, 'Yes'),
(12, 99, 'Sinjab', 'Male', 'Oriental', 8, 'cat-11.jpeg', 0, 'Yes'),
(15, 89, 'Haya', 'Female', 'Oriental', 5, 'cat-5.jpeg', 0, 'Yes'),
(17, 24, 'Lella', 'Female', 'Persian', 5, 'cat-8.jpeg', 0, 'Yes');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
