-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 04:59 AM
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
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `materials_desc` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `proj_id`, `materials_desc`, `created_at`, `updated_at`) VALUES
(3, 3, '<h1 style=\"text-align: center; \"><b>MATERIALS</b></h1><h2 style=\"text-align: left;\">Structural Materials \"Beam &amp; Columns\"</h2><table class=\"table table-bordered\"><tbody><tr><td>G.I Wire # 16</td><td style=\"text-align: center;\">1 Roll</td></tr><tr><td><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">12mm Deform Bar</span><br></td><td style=\"text-align: center;\"><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">120 pcs</span><br></td></tr><tr><td><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">10mm Deform Bar</span><br></td><td style=\"text-align: center;\"><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">80 pcs</span><br></td></tr><tr><td><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">9mm Deform Bar</span><br></td><td style=\"text-align: center;\"><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">70 pcs</span><br></td></tr></tbody></table><p><br></p>', '2022-09-21 06:23:10', '2022-10-03 15:06:10');

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
(1, 26, 'dev.arthurmedellin@gmail.com', 7079, '2022-09-25 00:48:15', '2022-09-25 08:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `proj_area` varchar(255) NOT NULL,
  `proj_type` int(11) NOT NULL,
  `proj_slug` varchar(255) NOT NULL,
  `proj_est_price` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `bed_room` int(11) NOT NULL,
  `bath_room` int(11) NOT NULL,
  `stories` int(11) NOT NULL,
  `proj_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `proj_name`, `proj_area`, `proj_type`, `proj_slug`, `proj_est_price`, `status`, `bed_room`, `bath_room`, `stories`, `proj_description`, `created_at`, `updated_at`) VALUES
(3, 'Single story Simple Style', '50', 1, 'single-story-simple-style', '800000', 'active', 7, 1, 1, 'Claritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasdClaritas est etiam processus dynamicus, qui sequitur mutationem asdasdasdasd', '2022-09-19 07:25:53', '2022-10-03 15:02:16'),
(4, 'Single-story Simple Style2', '50', 1, 'single-story-simple-style2', '700000', 'active', 1, 2, 1, 'Claritas est etiam processus dynamicus, qui sequitur mutationem', '2022-09-21 07:10:40', '2022-09-21 15:10:40'),
(5, 'Single-story Simple Style3', '50', 1, 'single-story-simple-style3', '800000', 'active', 2, 2, 2, 'Claritas est etiam processus dynamicus, qui sequitur mutationem', '2022-09-21 07:11:05', '2022-09-21 15:11:05'),
(6, 'Two-storey Simple Style', '50', 2, 'two-storey-simple-style', '800000', 'active', 2, 2, 2, 'Claritas est etiam processus dynamicus, qui sequitur mutationem', '2022-09-21 07:11:19', '2022-09-21 15:11:19'),
(7, 'Two-storey Simple Style2', '50', 2, 'two-storey-simple-style2', '800000', 'active', 3, 3, 2, 'Claritas est etiam processus dynamicus, qui sequitur mutationem', '2022-09-21 07:11:36', '2022-09-21 15:11:36'),
(8, 'Two-storey Simple Style3', '50', 2, 'two-storey-simple-style3', '910000', 'active', 5, 4, 2, 'Claritas est etiam processus dynamicus, qui sequitur mutationem', '2022-09-21 07:11:50', '2022-09-21 15:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `sm_id` int(11) NOT NULL,
  `wm_id` int(11) NOT NULL,
  `trm_id` int(11) NOT NULL,
  `sfb_id` int(11) NOT NULL,
  `em_id` int(11) NOT NULL,
  `cm_id` int(11) NOT NULL,
  `pm_id` int(11) NOT NULL,
  `ftm_id` int(11) NOT NULL,
  `djm_id` int(11) NOT NULL,
  `swm_id` int(11) NOT NULL,
  `psl_id` int(11) NOT NULL,
  `cab_id` int(11) NOT NULL,
  `pam_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `proj_id`, `image_path`, `created_at`, `updated_at`) VALUES
(12, 3, '/uploads/images/_1664809063.png', '2022-09-21 06:08:01', '2022-10-03 14:57:44'),
(13, 3, '/uploads/images/_1663771212.jpg', '2022-09-21 06:40:12', '2022-09-21 14:40:12'),
(14, 3, '/uploads/images/_1663771213.png', '2022-09-21 06:40:13', '2022-09-21 14:40:13');

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
(26, 'dev.arthurmedellin@gmail.com', '$2y$10$ctYFoSMSDCEWCgXBNCt.uedorOulCo55WacsmEY85Zh3q0OnZV09m', '(+63) 1231-2312-31', 'Arthur', 'Medellin II', 1, 'verified', 'active', '2022-10-07 18:27:24', '2022-09-03 19:12:30', '2022-10-07 18:27:24'),
(27, 'alberto.bugnot02@gmail.com', '$2y$10$ctYFoSMSDCEWCgXBNCt.uedorOulCo55WacsmEY85Zh3q0OnZV09m', NULL, NULL, NULL, 0, 'verified', 'active', '2022-10-07 17:58:29', '2022-09-06 05:00:12', '2022-09-06 15:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`id`, `proj_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 26, '2022-09-28 17:18:00', '2022-09-29 01:18:00'),
(2, 5, 26, '2022-09-28 18:13:19', '2022-09-29 02:13:19'),
(3, 6, 26, '2022-10-05 08:39:06', '2022-10-05 16:39:06'),
(4, 4, 26, '2022-10-05 08:39:06', '2022-10-05 16:40:33');

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
(3, 26, 'dev.arthurmedellin@gmail.com', 3599, '2022-10-03 07:35:36', '2022-10-03 15:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
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
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_code`
--
ALTER TABLE `password_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verify_code`
--
ALTER TABLE `verify_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
