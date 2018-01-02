-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 12:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eedica`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `description` text,
  `comments` text,
  `comments_count` bigint(20) DEFAULT NULL,
  `videos_count` int(11) DEFAULT NULL,
  `lessons_count` int(11) DEFAULT NULL,
  `documents_count` int(11) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `course_image` varchar(191) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `published` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `course_type` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_09_095335_laratrust_setup_tables', 1),
(4, '2017_12_10_191629_create_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(2, 'read-users', 'Read Users', 'Read Users', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(3, 'update-users', 'Update Users', 'Update Users', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2017-12-21 21:05:28', '2017-12-21 21:05:28'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2017-12-21 21:05:28', '2017-12-21 21:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 7, 'App\\User'),
(10, 7, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2017-12-21 21:05:27', '2017-12-21 21:05:27'),
(2, 'administrator', 'Administrator', 'Administrator', '2017-12-21 21:05:29', '2017-12-21 21:05:29'),
(3, 'author', 'Author', 'Author', '2017-12-21 21:05:30', '2017-12-21 21:05:30'),
(4, 'teacher', 'Teacher', 'Teacher', '2017-12-21 21:05:31', '2017-12-21 21:05:31'),
(5, 'student', 'Student', 'Student', '2017-12-21 21:05:31', '2017-12-21 21:05:31'),
(6, 'supporter', 'Supporter', 'Supporter', '2017-12-21 21:05:32', '2017-12-21 21:05:32'),
(7, 'visitor', 'Visitor', 'Visitor', '2017-12-21 21:05:32', '2017-12-21 21:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(4, 4, 'App\\User'),
(5, 5, 'App\\User'),
(6, 6, 'App\\User'),
(7, 7, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', '$2y$10$apGocAOAtneLBH03nTGcHuegsFlxgvkzj9zu3t/XDdJRFxsWHgMFW', NULL, '2017-12-21 21:05:29', '2017-12-21 21:05:29'),
(2, 'Administrator', 'administrator@app.com', '$2y$10$OUhAdYKoKMyjbIrLI4NAfuC5GPJOLy6J0aTeRfqIyttViK.KJRmzG', NULL, '2017-12-21 21:05:30', '2017-12-21 21:05:30'),
(3, 'Author', 'author@app.com', '$2y$10$QNECrcBMej2kCf44gbokKOA5HpfMMb6QqJIoh1mmt4wvWZgTj958y', NULL, '2017-12-21 21:05:31', '2017-12-21 21:05:31'),
(4, 'Teacher', 'teacher@app.com', '$2y$10$FIbMUMXN8J19uOVOTIEzZ.U8bPX6DDHpYQps5c0HktSZfG3u4bC8u', NULL, '2017-12-21 21:05:31', '2017-12-21 21:05:31'),
(5, 'Student', 'student@app.com', '$2y$10$QjFDKkZlyjYD9.ee5wrkb.MiNzsbFBpjqGMo45Ht96SeQR/S2sF5a', NULL, '2017-12-21 21:05:31', '2017-12-21 21:05:31'),
(6, 'Supporter', 'supporter@app.com', '$2y$10$wYp6gACCnvbiJqXGrIm54OWaBLOi1vng5OOz1pSGm7nDRRt9UqgOK', NULL, '2017-12-21 21:05:32', '2017-12-21 21:05:32'),
(7, 'Visitor', 'visitor@app.com', '$2y$10$714/Qr.WikpEeUSiJhycweubygGhRHGNiJJlXB.qQZKovCwW1C7R.', NULL, '2017-12-21 21:05:32', '2017-12-21 21:05:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
