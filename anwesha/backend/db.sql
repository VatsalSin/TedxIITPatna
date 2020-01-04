-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2019 at 10:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `anwesha2k20`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `anweshaid` varchar(7) NOT NULL,
  `names` varchar(109) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount_paid` float NOT NULL DEFAULT '0',
  `gender` varchar(1) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `checkin_checkout` LONGTEXT DEFAULT NULL,
  `no_of_days` int(11) NOT NULL,
  `day1` tinyint(1) NOT NULL DEFAULT '0',
  `day2` tinyint(1) NOT NULL DEFAULT '0',
  `day3` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `permit` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '21b8acfc474802e2e0bd25a85f5e924e',
  `access_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `permit`, `email`, `first_name`, `second_name`, `position`, `phone`, `password`, `access_token`) VALUES
(5, 4, 'event@atm1504.in', 'Amartya', 'Mondal', 'Event Organisers', '8967570983', '21b8acfc474802e2e0bd25a85f5e924e', 'bf4059d977e15f7628d7dbb106944ec1'),
(6, 5, 'hospi@atm1504.in', 'Hospitality', 'Committee', 'Organisers', '1234567890', '21b8acfc474802e2e0bd25a85f5e924e', 'bf4059d977e15f7628d7dbb106944ec1'),
(1, 0, 'me@atm1504.in', 'Atreyee', 'Mukherjee', 'Super Admin', '8967570983', '21b8acfc474802e2e0bd25a85f5e924e', 'bf4059d977e15f7628d7dbb106944ec1'),
(4, 3, 'mpr@atm1504.in', 'MPR', 'People', 'MPR', '8967570983', '21b8acfc474802e2e0bd25a85f5e924e', 'bf4059d977e15f7628d7dbb106944ec1'),
(3, 2, 'reg@atm1504.in', 'Amartya', 'Mondal', 'Registration Coordinator', '8967570983', '21b8acfc474802e2e0bd25a85f5e924e', 'bf4059d977e15f7628d7dbb106944ec1'),
(2, 1, 'reg_sub_cord@atm1504.in', 'Amartya', 'Mondal', 'Registration-Sub Coordinator', '8967570983', '21b8acfc474802e2e0bd25a85f5e924e', 'bf4059d977e15f7628d7dbb106944ec1');

-- --------------------------------------------------------

--
-- Table structure for table `ca_users`
--

CREATE TABLE `ca_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `validation_code` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `phone` varchar(15) NOT NULL,
  `college` varchar(100) NOT NULL,
  `anweshaid` varchar(7) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(1) NOT NULL,
  `score` bigint(20) NOT NULL DEFAULT '0',
  `candidates` LONGTEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ca_users`
--

INSERT INTO `ca_users` (`id`, `email`, `first_name`, `last_name`, `validation_code`, `active`, `phone`, `college`, `anweshaid`, `qrcode`, `date`, `gender`, `score`, `candidates`) VALUES
(5, 'dscappsocietyiitp@gmail.com', 'Amartya', 'Mondal', '0', 1, '8967570983', 'IIT Patna', 'ANW2002', 'https://anwesha.info/backend/user/assets/qrcodes/ANW2002.png', '2019-11-05 22:12:36', 'm', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `ev_id` varchar(7) NOT NULL,
  `ev_category` varchar(252) NOT NULL,
  `ev_name` varchar(255) NOT NULL,
  `ev_description` text NOT NULL,
  `ev_organiser` varchar(255) NOT NULL,
  `ev_club` varchar(252) NOT NULL,
  `ev_org_phone` varchar(100) NOT NULL,
  `ev_poster_url` varchar(255) NOT NULL,
  `ev_rule_book_url` varchar(255) NOT NULL,
  `ev_date` varchar(50) NOT NULL,
  `ev_start_time` varchar(100) NOT NULL,
  `ev_end_time` varchar(100) NOT NULL,
  `ev_registrations` LONGTEXT DEFAULT NULL,
  `ev_participations` LONGTEXT DEFAULT NULL,
  `ev_amount` float NOT NULL DEFAULT '0',
  `ev_prize` varchar(100) DEFAULT NULL,
  `ev_venue` varchar(252) DEFAULT NULL,
  `map_url` varchar(255) DEFAULT NULL,
  `is_team_event` tinyint(1) NOT NULL DEFAULT '0',
  `team_members` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `validation_code` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `registration_desk` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(15) NOT NULL,
  `college` varchar(255) NOT NULL,
  `anweshaid` varchar(7) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL DEFAULT 'admin',
  `ca_referral` varchar(8) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `events_registered` LONGTEXT DEFAULT NULL,
  `events_participated` LONGTEXT DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `registration_charge` float NOT NULL DEFAULT '0',
  `tshirt_charge` float NOT NULL DEFAULT '0',
  `events_charge` float NOT NULL DEFAULT '0',
  `accommodation_charge` float NOT NULL DEFAULT '0',
  `total_charge` float NOT NULL DEFAULT '0',
  `amount_paid` float NOT NULL DEFAULT '0',
  `checkin_checkout` LONGTEXT DEFAULT NULL,
  `iit_patna` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `validation_code`, `active`, `registration_desk`, `phone`, `college`, `anweshaid`, `qrcode`, `added_by`, `ca_referral`, `date`, `events_registered`, `events_participated`, `gender`, `access_token`, `registration_charge`, `tshirt_charge`, `events_charge`, `accommodation_charge`, `total_charge`, `amount_paid`, `checkin_checkout`, `iit_patna`) VALUES
(156, 'Amartya', 'Mondal', 'hayyoulistentome@gmail.com', 'fc1d758f115a09819cf2da05ca0d1ffc', '1d4e032b1e0419631e967e0567a6e380', 0, 0, '8967570983', 'IIT Patna', 'ANW2000', 'https://anwesha.info/backend/user/assets/qrcodes/ANW2000.png', 'admin', 'ANW1504', '2019-11-05 22:07:24', NULL, NULL, 'm', NULL, 0, 0, 0, 0, 0, 0, NULL, 0),
(157, 'Amartya', 'Mondal', 'hayyoulistentome1@gmail.com', 'fc1d758f115a09819cf2da05ca0d1ffc', '408b1f3b27879d36d9ffec5440fdc4cf', 0, 0, '8967570983', 'IIT Patna', 'ANW2001', 'https://anwesha.info/backend/user/assets/qrcodes/ANW2001.png', 'admin', 'ANW1504', '2019-11-05 22:08:29', NULL, NULL, 'm', NULL, 0, 0, 0, 0, 0, 0, NULL, 0),
(158, 'Amartya', 'Mondal', 'dscappsocietyiitp@gmail.com', 'fc1d758f115a09819cf2da05ca0d1ffc', '0', 1, 0, '8967570983', 'IIT Patna', 'ANW2002', 'https://anwesha.info/backend/user/assets/qrcodes/ANW2002.png', 'admin', NULL, '2019-11-05 22:12:36', NULL, NULL, 'm', NULL, 0, 0, 0, 0, 0, 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `celestaid` (`anweshaid`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`,`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ca_users`
--
ALTER TABLE `ca_users`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `celestaid` (`anweshaid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ev_id` (`ev_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`,`email`),
  ADD UNIQUE KEY `celestaid` (`anweshaid`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ca_users`
--
ALTER TABLE `ca_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
