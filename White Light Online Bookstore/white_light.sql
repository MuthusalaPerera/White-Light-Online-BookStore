-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `white_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catergory` varchar(100) NOT NULL,
  `books` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `name`, `catergory`, `books`) VALUES
(1, 'Ranmal Samaranayake ', '5 to 12 years - children', '[\"Antiques & Categories\",\"Architecture Books\",\"Art Books\",\"Biographies\"]'),
(2, 'Ranmal Samaranayake ', '5 to 12 years - children', '[\"Antiques & Categories\",\"Architecture Books\",\"Art Books\",\"Biographies\"]'),
(3, 'Ranmal Samaranayake ', '5 to 12 years - children', '[\"Antiques & Categories\",\"Architecture Books\"]');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `rate` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `feedback`, `rate`) VALUES
(1, ' dsfgvsdfsd', 5),
(2, ' aedas', 5),
(3, ' hello', 5),
(4, ' hello ', 5),
(5, ' hgvfytftfghhujbg', 5),
(6, ' fgnfgjfjgf', 1),
(7, ' fdh', 4);

-- --------------------------------------------------------

--
-- Table structure for table `uni_students`
--

CREATE TABLE `uni_students` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `uni_name` varchar(255) NOT NULL,
  `uni_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_students`
--

INSERT INTO `uni_students` (`id`, `username`, `uni_name`, `uni_id`) VALUES
(1, 'IT20134426', '23423', '2342342');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(25) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `bod` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `country`, `gender`, `bod`, `username`, `password`) VALUES
(1, 'MWT', 'Lakshan', 'mwtlakshan@gmail.com', 'Bangladesh', 'male', '2020-10-01 00:00:00', 'codyseller', '123456'),
(2, 'MWT', 'Lakshan', 'mwtlakshan@gmail.com', 'Bangladesh', 'male', '2020-10-08 00:00:00', 'user', '123456'),
(3, 'MWT', 'Lakshan', 'mwtlakshan@gmail.com', 'Bangladesh', 'male', '2020-10-27 00:00:00', 'user1', '$2y$10$JlBRHD9VCsW9K9ILfR/OK.fy5Y7IP/HnC66b8LhV6HiEaC9ctm94K'),
(4, 'Dihan', 'Vinduja', 'userdssg1@gmail.com', 'Sri Lanka', 'male', '2020-10-30 00:00:00', 'user123', '$2y$10$9HUp.cLMVh5z.6o6yCnW1ObGcnFoq8HNCl.72B378Jo6AqKX/5D.K'),
(5, 'Dihan', 'Vinduja', 'userdssg1@gmail.com', 'Sri Lanka', 'male', '2020-10-29 00:00:00', 'user1234', '$2y$10$R5whe/5BoXW1UEg7sOiQVuNyxZ0.T0yOc4bH/RLQd4V9FRsMkowLC'),
(6, 'Dihan', 'Vinduja', 'userdssg1@gmail.com', 'Sri Lanka', 'male', '2020-10-30 00:00:00', '123edasdfa', '$2y$10$cAQUW0uxf8Any0PpEyi35O70LQ3vz571lcuOCM6vMJcVKz7osdxai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_students`
--
ALTER TABLE `uni_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uni_students`
--
ALTER TABLE `uni_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
