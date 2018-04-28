-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2018 at 02:01 AM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhtv`
--

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `film_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`film_id`, `user_id`, `rate`) VALUES
(3, 84, 5),
(5, 39, 7),
(7, 24, 3),
(7, 93, 5),
(8, 39, 4),
(8, 40, 5),
(8, 47, 5),
(11, 27, 7),
(11, 82, 6),
(12, 9, 5),
(12, 10, 8),
(12, 50, 9),
(12, 71, 10),
(14, 56, 9),
(15, 11, 8),
(18, 4, 6),
(18, 65, 9),
(19, 66, 3),
(25, 4, 8),
(29, 7, 9),
(30, 32, 7),
(31, 12, 5),
(33, 20, 8),
(34, 80, 7),
(35, 32, 5),
(36, 7, 10),
(37, 38, 9),
(37, 81, 4),
(39, 61, 3),
(40, 85, 5),
(42, 27, 10),
(44, 38, 8),
(45, 23, 4),
(46, 80, 9),
(51, 23, 5),
(53, 18, 3),
(53, 42, 3),
(54, 10, 3),
(55, 99, 8),
(57, 68, 9),
(59, 34, 8),
(63, 19, 5),
(69, 96, 5),
(71, 7, 7),
(75, 48, 4),
(78, 39, 9),
(78, 82, 4),
(79, 31, 10),
(80, 64, 4),
(81, 46, 9),
(82, 81, 10),
(84, 19, 5),
(84, 90, 5),
(85, 1, 4),
(88, 73, 7),
(89, 19, 10),
(89, 91, 6),
(90, 5, 3),
(90, 6, 3),
(90, 76, 3),
(93, 3, 8),
(95, 69, 5),
(101, 45, 7),
(102, 62, 10),
(102, 86, 8),
(102, 87, 8),
(103, 50, 4),
(103, 84, 9),
(107, 55, 10),
(109, 41, 4),
(110, 95, 6),
(113, 18, 7),
(114, 53, 10),
(119, 38, 7),
(121, 13, 3),
(124, 82, 3),
(126, 69, 3),
(128, 10, 8),
(130, 92, 10),
(133, 72, 4),
(136, 5, 6),
(138, 7, 5),
(140, 79, 3),
(141, 23, 9),
(142, 85, 7),
(143, 76, 7),
(145, 11, 5),
(145, 80, 3),
(147, 56, 10),
(150, 7, 3),
(151, 70, 10),
(155, 97, 3),
(157, 3, 8),
(157, 44, 6),
(158, 11, 6),
(162, 80, 5),
(164, 27, 5),
(165, 36, 8),
(166, 60, 9),
(167, 94, 9),
(168, 52, 3),
(168, 74, 6),
(171, 61, 10),
(171, 82, 4),
(176, 73, 10),
(179, 91, 5),
(180, 20, 7),
(180, 45, 8),
(184, 20, 7),
(195, 23, 9),
(195, 61, 9),
(196, 82, 8),
(200, 16, 6),
(200, 98, 8),
(201, 42, 4),
(201, 57, 10),
(201, 90, 6),
(202, 32, 3),
(202, 71, 7),
(203, 83, 5),
(207, 74, 9),
(208, 8, 3),
(208, 65, 6),
(208, 75, 4),
(210, 37, 4),
(214, 22, 9),
(216, 88, 4),
(217, 34, 3),
(219, 30, 8),
(220, 78, 6),
(221, 50, 9),
(222, 32, 7),
(223, 27, 4),
(225, 82, 8),
(230, 77, 9),
(231, 19, 10),
(235, 20, 8),
(236, 12, 10),
(237, 6, 9),
(239, 81, 9),
(241, 57, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`film_id`,`user_id`),
  ADD KEY `rates_user_id_foreign` (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `rates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
