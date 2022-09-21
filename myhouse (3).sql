-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 05:33 PM
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
-- Table structure for table `cabinet_materials`
--

CREATE TABLE `cabinet_materials` (
  `id` int(11) NOT NULL,
  `marine_plywood` int(11) NOT NULL,
  `kd_twelve` int(11) NOT NULL,
  `fishing_nail_two` int(11) NOT NULL,
  `fishing_nail_one` int(11) NOT NULL,
  `cm_handle` int(11) NOT NULL,
  `cm_concealed_hinges` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ceiling_materials`
--

CREATE TABLE `ceiling_materials` (
  `id` int(11) NOT NULL,
  `smart_board` int(11) NOT NULL,
  `metal_furring` int(11) NOT NULL,
  `blind_rivets` int(11) NOT NULL,
  `dorner` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `door_jamb_materials`
--

CREATE TABLE `door_jamb_materials` (
  `id` int(11) NOT NULL,
  `dj_one_hundred` int(11) NOT NULL,
  `dj_eighty` int(11) NOT NULL,
  `sliding_dj_eighty` int(11) NOT NULL,
  `los_pin_hinges` int(11) NOT NULL,
  `door_nob` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `electrical_materials`
--

CREATE TABLE `electrical_materials` (
  `id` int(11) NOT NULL,
  `panel_board` int(11) NOT NULL,
  `c_breaker_sixty` int(11) NOT NULL,
  `c_breaker_thirty` int(11) NOT NULL,
  `c_breaker_twenty` int(11) NOT NULL,
  `thwn_twelve` int(11) NOT NULL,
  `thwn_fourteen` int(11) NOT NULL,
  `thwn_teen` int(11) NOT NULL,
  `puc_pipe` int(11) NOT NULL,
  `ceiling_socket` int(11) NOT NULL,
  `pin_lights` int(11) NOT NULL,
  `single_switch` int(11) NOT NULL,
  `three_gauge_switch` int(11) NOT NULL,
  `two_gauge_switch` int(11) NOT NULL,
  `c_outlet` int(11) NOT NULL,
  `ac_outlet` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `floor_tiles_materials`
--

CREATE TABLE `floor_tiles_materials` (
  `id` int(11) NOT NULL,
  `granite_tile` int(11) NOT NULL,
  `bath_room_floor` int(11) NOT NULL,
  `bath_room_wall` int(11) NOT NULL,
  `water_closet` int(11) NOT NULL,
  `bath_tub` int(11) NOT NULL,
  `labatory` int(11) NOT NULL,
  `kitchen_sink` int(11) NOT NULL,
  `grout` int(11) NOT NULL,
  `adhesiv_cement` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 3, '<h1 style=\"text-align: center; \"><b>MATERIALS</b></h1><h2 style=\"text-align: left;\">Structural Materials \"Beam &amp; Columns\"</h2><table class=\"table table-bordered\"><tbody><tr><td>G.I Wire # 16</td><td style=\"text-align: center;\">1 Roll</td></tr><tr><td><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">12mm Deform Bar</span><br></td><td style=\"text-align: center;\"><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">120 pcs</span><br></td></tr><tr><td><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">10mm Deform Bar</span><br></td><td style=\"text-align: center;\"><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">80 pcs</span><br></td></tr><tr><td><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">9mm Deform Bar</span><br></td><td style=\"text-align: center;\"><span style=\"font-size:12.0pt;line-height:115%;\nfont-family:&quot;Arial&quot;,sans-serif;mso-ascii-theme-font:minor-bidi;mso-fareast-font-family:\n&quot;Malgun Gothic&quot;;mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-bidi;\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:\nKO;mso-bidi-language:AR-SA\">70 pcs</span><br></td></tr></tbody></table><p><br></p>', '2022-09-21 06:23:10', '2022-09-21 14:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `painting_materials`
--

CREATE TABLE `painting_materials` (
  `id` int(11) NOT NULL,
  `skim_coat` int(11) NOT NULL,
  `flat_latex` int(11) NOT NULL,
  `gloss_latex` int(11) NOT NULL,
  `flat_wall_enamel` int(11) NOT NULL,
  `pm_qde` int(11) NOT NULL,
  `sanding_paper_one` int(11) NOT NULL,
  `paint_thinner` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `plumbing_materials`
--

CREATE TABLE `plumbing_materials` (
  `id` int(11) NOT NULL,
  `ppr_pipe` int(11) NOT NULL,
  `ppr_elbow_with_thread` int(11) NOT NULL,
  `ppr_elbow` int(11) NOT NULL,
  `ppr_tee` int(11) NOT NULL,
  `teflon_tape` int(11) NOT NULL,
  `angel_bulb` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plumbing_sewer_materials`
--

CREATE TABLE `plumbing_sewer_materials` (
  `id` int(11) NOT NULL,
  `psl_pipe_four` int(11) NOT NULL,
  `psl_pipe_three` int(11) NOT NULL,
  `psl_pipe_two` int(11) NOT NULL,
  `psl_pipe_wye_four` int(11) NOT NULL,
  `psl_ptarp_two` int(11) NOT NULL,
  `psl_clean_out_four` int(11) NOT NULL,
  `psl_elbow_three` int(11) NOT NULL,
  `psl_elbow_two` int(11) NOT NULL,
  `solvent_cement` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `story` int(11) NOT NULL,
  `proj_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `proj_name`, `proj_area`, `proj_type`, `proj_slug`, `proj_est_price`, `status`, `bed_room`, `bath_room`, `story`, `proj_description`, `created_at`, `updated_at`) VALUES
(3, 'Single story Simple Style', '50', 1, 'single-story-simple-style', '800,000', 'inactive', 1, 1, 1, 'A floor plan is a drawing or a visual representation of a home’s interior from above. It shows the placement of walls and includes key elements of the house like doors, windows, stairs, and furniture. It also communicates the room names and sizes, as well as the dimensions between walls.\nNote - Total Square Footage typically only includes conditioned space and does not include garages, porches, bonus rooms, or decks\n', '2022-09-19 07:25:53', '2022-09-19 15:25:53'),
(4, 'Single-story Simple Style2', '50', 1, 'single-story-simple-style2', '800,000', 'inactive', 1, 2, 1, 'asdasd', '2022-09-21 07:10:40', '2022-09-21 15:10:40'),
(5, 'Single-story Simple Style3', '50', 1, 'single-story-simple-style3', '800,000', 'inactive', 2, 2, 2, 'asdas222', '2022-09-21 07:11:05', '2022-09-21 15:11:05'),
(6, 'Two-storey Simple Style', '50', 2, 'two-storey-simple-style', '800,000', 'inactive', 2, 2, 2, 'asdas222', '2022-09-21 07:11:19', '2022-09-21 15:11:19'),
(7, 'Two-storey Simple Style2', '50', 2, 'two-storey-simple-style2', '800,000', 'inactive', 3, 3, 2, 'asdas222', '2022-09-21 07:11:36', '2022-09-21 15:11:36'),
(8, 'Two-storey Simple Style3', '50', 2, 'two-storey-simple-style3', '800,000', 'inactive', 5, 4, 2, 'asdas222', '2022-09-21 07:11:50', '2022-09-21 15:11:50');

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
(12, 3, '/uploads/images/_1663769281.jpg', '2022-09-21 06:08:01', '2022-09-21 14:08:01'),
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
-- Table structure for table `slab_frame_board_materials`
--

CREATE TABLE `slab_frame_board_materials` (
  `id` int(11) NOT NULL,
  `coco_lumber_three` int(11) NOT NULL,
  `coco_lumber_two` int(11) NOT NULL,
  `cwn_four` int(11) NOT NULL,
  `cwn_three` int(11) NOT NULL,
  `cwn_two` int(11) NOT NULL,
  `penolic_board` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sliding_window_materials`
--

CREATE TABLE `sliding_window_materials` (
  `id` int(11) NOT NULL,
  `sixty_one_twenty` int(11) NOT NULL,
  `one_twenty_one_twenty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `structural_materials`
--

CREATE TABLE `structural_materials` (
  `id` int(11) NOT NULL,
  `gi_wire` int(11) DEFAULT NULL,
  `sixteen_deform_bar` int(11) DEFAULT NULL,
  `twelve_deform_bar` int(11) DEFAULT NULL,
  `ten_deform_bar` int(11) DEFAULT NULL,
  `nine_deform_bar` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trust_roof_materials`
--

CREATE TABLE `trust_roof_materials` (
  `id` int(11) NOT NULL,
  `tubular_two_by_four` int(11) DEFAULT NULL,
  `tubular_two_by_two` int(11) DEFAULT NULL,
  `purlins_two_by_six` int(11) DEFAULT NULL,
  `expoxy_primer` int(11) DEFAULT NULL,
  `nihon_rod_special` int(11) NOT NULL,
  `rib_type_four_by_eight` int(11) NOT NULL,
  `gutter` int(11) NOT NULL,
  `flashing_gutter` int(11) NOT NULL,
  `txt_screw` int(11) NOT NULL,
  `cylinder_silicon_sealant` int(11) NOT NULL,
  `blind_rivets` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `walling_materials`
--

CREATE TABLE `walling_materials` (
  `id` int(11) NOT NULL,
  `concrete_hallow_blocks` int(11) DEFAULT NULL,
  `cement` int(11) DEFAULT NULL,
  `s_one_sand` int(11) DEFAULT NULL,
  `gravel_three_four` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet_materials`
--
ALTER TABLE `cabinet_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceiling_materials`
--
ALTER TABLE `ceiling_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `door_jamb_materials`
--
ALTER TABLE `door_jamb_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_materials`
--
ALTER TABLE `electrical_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_tiles_materials`
--
ALTER TABLE `floor_tiles_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `painting_materials`
--
ALTER TABLE `painting_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_code`
--
ALTER TABLE `password_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumbing_materials`
--
ALTER TABLE `plumbing_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plumbing_sewer_materials`
--
ALTER TABLE `plumbing_sewer_materials`
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
-- Indexes for table `slab_frame_board_materials`
--
ALTER TABLE `slab_frame_board_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliding_window_materials`
--
ALTER TABLE `sliding_window_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structural_materials`
--
ALTER TABLE `structural_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trust_roof_materials`
--
ALTER TABLE `trust_roof_materials`
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
-- Indexes for table `walling_materials`
--
ALTER TABLE `walling_materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabinet_materials`
--
ALTER TABLE `cabinet_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ceiling_materials`
--
ALTER TABLE `ceiling_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `door_jamb_materials`
--
ALTER TABLE `door_jamb_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electrical_materials`
--
ALTER TABLE `electrical_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floor_tiles_materials`
--
ALTER TABLE `floor_tiles_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `painting_materials`
--
ALTER TABLE `painting_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_code`
--
ALTER TABLE `password_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plumbing_materials`
--
ALTER TABLE `plumbing_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plumbing_sewer_materials`
--
ALTER TABLE `plumbing_sewer_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `slab_frame_board_materials`
--
ALTER TABLE `slab_frame_board_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliding_window_materials`
--
ALTER TABLE `sliding_window_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `structural_materials`
--
ALTER TABLE `structural_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trust_roof_materials`
--
ALTER TABLE `trust_roof_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `verify_code`
--
ALTER TABLE `verify_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `walling_materials`
--
ALTER TABLE `walling_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
