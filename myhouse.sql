-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 07:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_code`
--

CREATE TABLE `password_code` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_code`
--

INSERT INTO `password_code` (`id`, `user_id`, `email`, `code`, `created_at`, `updated_at`) VALUES
(1, 26, 'dev.arthurmedellin@gmail.com', 7665, '2022-09-07 05:36:54', '2022-09-08 13:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `proj_area` varchar(255) NOT NULL,
  `proj_type` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `proj_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `proj_name`, `proj_area`, `proj_type`, `status`, `proj_description`, `created_at`, `updated_at`) VALUES
(1, 'test1', '80', 2, 'inactive', '12312312', '2022-09-08 07:53:36', '2022-09-08 15:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Single-story Simple Style', '1 Bedroom 1 Bathroom 1 Story', '2022-09-09 18:39:07', '2022-09-09 20:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email_status` enum('verified','not_verified') NOT NULL DEFAULT 'not_verified',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `contact`, `fname`, `lname`, `role`, `email_status`, `status`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(26, 'dev.arthurmedellin@gmail.com', '$2y$10$HXXwDKWNRCKVv5HDwOgu4Oa54gy.mbkwJ/DHr7yN/8zn7buHEHfSK', '(+63) 1231-2312-31', 'Arthur', 'Medellin II', 0, 'verified', 'active', '2022-09-07 15:25:05', '2022-09-03 19:12:30', '2022-09-07 15:25:05'),
(27, 'alberto.bugnot02@gmail.com', '$2y$10$peJPKwj2NT5DoACIRqSgc.6Oz5pj09a8Vg.Jky8SR1wn/CWmtHVp6', NULL, NULL, NULL, 0, 'verified', 'active', '2022-09-06 15:44:04', '2022-09-06 05:00:12', '2022-09-06 15:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `verify_code`
--

CREATE TABLE `verify_code` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify_code`
--

INSERT INTO `verify_code` (`id`, `user_id`, `email`, `code`, `created_at`, `updated_at`) VALUES
(12, 26, 'erickahpnrado08@gmail.com', 6747, '2022-09-03 19:12:30', '2022-09-04 03:44:24'),
(13, 27, 'alberto.bugnot02@gmail.com', 4128, '2022-09-06 05:00:12', '2022-09-06 13:00:12'),
(14, 26, 'dev.arthurmedellin@gmail.com', 2839, '2022-09-07 05:35:20', '2022-09-07 13:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_code`
--
ALTER TABLE `password_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proj_type` (`proj_type`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_code`
--
ALTER TABLE `verify_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_code`
--
ALTER TABLE `password_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `verify_code`
--
ALTER TABLE `verify_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `project_type` FOREIGN KEY (`proj_type`) REFERENCES `project_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
