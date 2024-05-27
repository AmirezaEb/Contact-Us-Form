-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 12:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroexpert`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--
-- Developed by Hero Expert 
-- Telegram channel: @HeroExpert_ir  
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `message` varchar(800) NOT NULL,
  `status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `status`, `date`) VALUES
(1, 'امیررضا ابراهیمی', '09358919279', 'aabrahimi1718@gmail.com', 'سلام ممنون از اینکه با دادن ستاره از ما حمایت کردید تا بتونیم قوی تر ادامه بدیم و هر روز قوی تر از دیروز پروژه هامون رو بروز کنیم...', 'unread', '2024-05-27 12:36:04'),
(2, 'ناشناس', NULL, 'Anonymous@gmail.com', 'سلام ممنون از اینکه با دادن ستاره از ما حمایت کردید تا بتونیم قوی تر ادامه بدیم و هر روز قوی تر از دیروز پروژه هامون رو بروز کنیم...', 'read', '2024-05-27 12:37:07'),
(3, 'کارشناس قهرمان', NULL, 'HeroExpert@info', 'سلام ممنون از اینکه با دادن ستاره از ما حمایت کردید تا بتونیم قوی تر ادامه بدیم و هر روز قوی تر از دیروز پروژه هامون رو بروز کنیم...', 'unread', '2024-05-27 12:37:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
