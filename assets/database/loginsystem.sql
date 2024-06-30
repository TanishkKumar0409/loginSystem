-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2024 at 03:35 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_and_signup`
--

DROP TABLE IF EXISTS `login_and_signup`;
CREATE TABLE IF NOT EXISTS `login_and_signup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` bigint NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_and_signup`
--

INSERT INTO `login_and_signup` (`id`, `name`, `phone`, `email`, `address`, `password`, `created_at`) VALUES
(4, 'ria', 147852369, 'ria@gmail.com', 'mussori', 'e40f01afbb1b9ae3dd6747ced5bca532', '2024-06-29 21:16:06'),
(5, 'ankit', 7078877740, 'ankit@gmail.com', 'pathri bagh', '914add4394f92e48decbcea4caa89368', '2024-06-29 21:17:40'),
(6, 'Tanishk Kumar', 9557623131, 'tanishkk60@gmail.com', '198 Seemadwar', 'c1bb43207e84f23a64dc40d944f19799', '2024-06-29 21:20:50'),
(7, 'akshay', 7351523421, 'akshay@gmail.com', 'seemadwar', '35fb53081f0bc2fe32f3b825d4c02983', '2024-06-29 21:27:15'),
(8, 'shubham', 789456123, 'shubham@gmail.com', 'brahampuri', '9fab6755cd2e8817d3e73b0978ca54a6', '2024-06-29 21:31:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
