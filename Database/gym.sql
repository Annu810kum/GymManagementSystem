-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 07:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Change the date formats here for consistency

-- Database: `gym`

-- Table structure for table `billing`
CREATE TABLE `billing` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` DATE NOT NULL,
  `amount` varchar(20) NOT NULL,
  `mid` int(10) NOT NULL,
  `rid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `billing`
INSERT INTO `billing` (`id`, `name`, `date`, `amount`, `mid`, `rid`) VALUES
('1', 'Annu Kumari', '2022-06-12', '5000', 0, 0),
('1', 'Raju Kumar', '2022-06-12', '5000', 0, 0),
('2', 'Ali', '2022-06-12', '45000', 0, 0);

-- Table structure for table `coach`
CREATE TABLE `coach` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` DATE NOT NULL,
  `experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `coach`
INSERT INTO `coach` (`id`, `name`, `date`, `experience`) VALUES
('1', 'John', '2002-06-12', '2');

-- Table structure for table `member`
CREATE TABLE `member` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` DATE NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `coach` varchar(20) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `member`
INSERT INTO `member` (`id`, `name`, `date`, `dob`, `phone`, `coach`, `cid`) VALUES
('1', 'Taayyab', '2012-08-06', '1998-07-21', '03422506772', 'john', 0);

-- Table structure for table `receptionist`
CREATE TABLE `receptionist` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` DATE NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `receptionist`
INSERT INTO `receptionist` (`id`, `name`, `date`, `address`, `phone`) VALUES
('1', 'Srasvati', '2002-06-12', 'sadasdsadasdasdasdas', 'sada');

COMMIT;
