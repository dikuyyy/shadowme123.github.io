-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 05:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciriminat`
--

CREATE TABLE `ciriminat` (
  `id_ciri` varchar(11) NOT NULL,
  `ciri_minat` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ciriminat`
--

INSERT INTO `ciriminat` (`id_ciri`, `ciri_minat`, `created_at`, `updated_at`) VALUES
('C001', 'Lebih suka mengembangkan suatu aplikasi', NULL, NULL),
('C002', 'Lebih suka menguji suatu teori', NULL, NULL),
('C003', 'lebih menyukai pendidikan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dataminat`
--

CREATE TABLE `dataminat` (
  `id_minat` varchar(11) NOT NULL,
  `nama_minat` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataminat`
--

INSERT INTO `dataminat` (`id_minat`, `nama_minat`, `created_at`, `updated_at`) VALUES
('A001', 'Penelitian Murni', NULL, NULL),
('A002', 'Penelitian Pendidikan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `id_minat` varchar(11) NOT NULL,
  `id_ciri` varchar(11) NOT NULL,
  `MB` int(11) NOT NULL,
  `MD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `id_minat`, `id_ciri`, `MB`, `MD`) VALUES
(1, 'A001', 'C001', 8, 2),
(2, 'A002', 'C002', 7, 2),
(3, 'A002', 'C003', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciriminat`
--
ALTER TABLE `ciriminat`
  ADD PRIMARY KEY (`id_ciri`);

--
-- Indexes for table `dataminat`
--
ALTER TABLE `dataminat`
  ADD PRIMARY KEY (`id_minat`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_minat` (`id_minat`,`id_ciri`),
  ADD KEY `id_ciri` (`id_ciri`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`id_minat`) REFERENCES `dataminat` (`id_minat`),
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`id_ciri`) REFERENCES `ciriminat` (`id_ciri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
