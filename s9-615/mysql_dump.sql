-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 08:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `todos`
--
CREATE DATABASE IF NOT EXISTS `todos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `todos`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL COMMENT 'cheie primara',
  `username` varchar(255) NOT NULL COMMENT 'nume utilizator',
  `password` varchar(255) NOT NULL COMMENT 'parola HASH-uita!!!',
  `active` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'stare cont'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `active`) VALUES
(1, 'Test', '*AF31C6CBDECD88726D0A9B3798C71EF41F1624D5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'cheie primara', AUTO_INCREMENT=2;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
