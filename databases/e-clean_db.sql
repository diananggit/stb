-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2020 at 10:03 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-clean_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_areas`
--

CREATE TABLE `dt_areas` (
  `AREA_ID` int(11) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `CREATED_BY` varchar(30) NOT NULL,
  `CREATED_DATE` datetime NOT NULL,
  `MODIFIED_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dt_areas`
--

INSERT INTO `dt_areas` (`AREA_ID`, `TYPE`, `NAME`, `CREATED_BY`, `CREATED_DATE`, `MODIFIED_DATE`) VALUES
(1, 'Building', 'Warehouse', 'heriipurnama', '2017-11-24 11:27:03', '2017-11-24 11:27:03'),
(2, 'Building', 'Packing', 'heriipurnama', '2017-11-24 11:27:03', '2017-11-24 11:27:03'),
(4, 'Bathroom', 'Packing', '125410101', '2020-01-24 15:05:03', '2020-01-24 15:05:03'),
(5, 'Bathroom', 'Cutting Moulding', '125410101', '2020-01-24 15:05:40', '2020-01-24 15:05:40'),
(6, 'Bathroom', 'Office LT 1', 'heriipurnama', '2020-01-24 15:23:17', '2020-01-24 15:23:17'),
(8, 'Building', 'Cutting Moulding', 'heriipurnama', '2020-01-24 15:30:07', '2020-01-24 15:30:07'),
(9, 'Building', 'Office LT 1', 'heriipurnama', '2020-01-24 15:30:38', '2020-01-24 15:30:38'),
(10, 'Building', 'Office LT 2', 'heriipurnama', '2020-01-24 15:30:48', '2020-01-24 15:30:48'),
(11, 'Building', 'Office LT 3', 'heriipurnama', '2020-01-24 15:30:59', '2020-01-24 15:30:59'),
(12, 'Building', 'Sewing LT 1', 'heriipurnama', '2020-01-24 15:31:08', '2020-01-24 15:31:08'),
(13, 'Building', 'Sewing LT 2', 'heriipurnama', '2020-01-24 15:31:17', '2020-01-24 15:31:17'),
(14, 'Building', 'Sewing LT 3', 'heriipurnama', '2020-01-24 15:31:26', '2020-01-24 15:31:26'),
(15, 'Building', 'Talapad', 'heriipurnama', '2020-01-24 15:31:53', '2020-01-24 15:31:53'),
(16, 'Bathroom', 'Office LT 2', 'heriipurnama', '2020-01-24 15:34:06', '2020-01-24 15:34:06'),
(17, 'Bathroom', 'Office LT 3', 'heriipurnama', '2020-01-24 15:34:18', '2020-01-24 15:34:18'),
(18, 'Bathroom', 'Sewing LT 1', 'heriipurnama', '2020-01-24 15:34:30', '2020-01-24 15:34:30'),
(19, 'Bathroom', 'Sewing LT 2', 'heriipurnama', '2020-01-24 15:34:42', '2020-01-24 15:34:42'),
(20, 'Bathroom', 'Sewing LT 3', 'heriipurnama', '2020-01-24 15:34:58', '2020-01-24 15:34:58'),
(21, 'Bathroom', 'Talapad', 'heriipurnama', '2020-01-24 15:35:08', '2020-01-24 15:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `dt_bathrooms`
--

CREATE TABLE `dt_bathrooms` (
  `BATHROOMS_ID` int(200) NOT NULL,
  `AREA_ID` int(30) NOT NULL,
  `TANGGAL` date NOT NULL,
  `TIME` time NOT NULL,
  `TOILET` varchar(20) NOT NULL,
  `SABUN` varchar(20) NOT NULL,
  `LANTAI` varchar(20) NOT NULL,
  `DINDING` varchar(20) NOT NULL,
  `AROMA` varchar(20) NOT NULL,
  `KAIN` varchar(20) NOT NULL,
  `PINTU` varchar(20) NOT NULL,
  `KRAN` varchar(20) NOT NULL,
  `TEMPAT_SAMPAH` varchar(20) NOT NULL,
  `CATATAN` varchar(200) NOT NULL,
  `CREATED_BY` varchar(30) NOT NULL,
  `CREATED_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dt_bathrooms`
--

INSERT INTO `dt_bathrooms` (`BATHROOMS_ID`, `AREA_ID`, `TANGGAL`, `TIME`, `TOILET`, `SABUN`, `LANTAI`, `DINDING`, `AROMA`, `KAIN`, `PINTU`, `KRAN`, `TEMPAT_SAMPAH`, `CATATAN`, `CREATED_BY`, `CREATED_DATE`) VALUES
(1, 5, '2020-01-27', '13:35:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'dwd12', 'junita', '2020-01-27 13:37:52'),
(2, 5, '2020-01-27', '13:37:00', 'Kotor', 'Bersih', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'sabun', 'junita', '2020-01-27 13:38:13'),
(3, 5, '2020-01-27', '15:13:00', 'Kotor', 'Kotor', 'Bersih', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'florr clan', 'junita', '2020-01-27 15:29:04'),
(4, 5, '2020-01-27', '15:29:00', 'Kotor', 'Kotor', 'Bersih', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'cuting clean', 'junita', '2020-01-27 15:30:15'),
(5, 18, '2020-01-27', '15:31:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'sewing lt 1 bau bgt', 'junita', '2020-01-27 15:31:45'),
(6, 5, '2020-01-01', '15:55:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'bath dirty', 'heriipurnama', '2020-01-27 16:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `dt_buildings`
--

CREATE TABLE `dt_buildings` (
  `BUILDINGS_ID` int(100) NOT NULL,
  `AREA_ID` int(30) NOT NULL,
  `TANGGAL` date NOT NULL,
  `TIME` time DEFAULT NULL,
  `LANTAI` varchar(20) NOT NULL,
  `SARANG_LABA_LABA` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `KACA` varchar(20) NOT NULL,
  `BESI_UWF` varchar(20) NOT NULL,
  `TEMPAT_SAMPAH` varchar(20) NOT NULL,
  `CATATAN` varchar(200) NOT NULL,
  `CREATED_BY` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CREATED_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dt_buildings`
--

INSERT INTO `dt_buildings` (`BUILDINGS_ID`, `AREA_ID`, `TANGGAL`, `TIME`, `LANTAI`, `SARANG_LABA_LABA`, `KACA`, `BESI_UWF`, `TEMPAT_SAMPAH`, `CATATAN`, `CREATED_BY`, `CREATED_DATE`) VALUES
(1, 8, '2020-01-27', '11:20:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'cek insert', 'heriipurnama', '2020-01-27 11:21:04'),
(2, 8, '2020-01-27', NULL, 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'heripurnama', NULL),
(3, 8, '2020-01-27', '11:20:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Koto12', 'heriipurnama', '2020-01-27 10:26:04'),
(4, 8, '2020-01-27', '11:20:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Koto12', 'heriipurnama', '2020-01-27 10:26:04'),
(5, 8, '2020-01-27', '12:09:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'cek datas cek datascek datascek datascek datascek datascek datascek datascek datascek datascek datas', 'junita', '2020-01-27 12:49:43'),
(6, 9, '2020-01-27', '12:09:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'cek datas', 'junita', '2020-01-27 12:49:43'),
(7, 8, '2020-01-27', '12:09:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'cek datas 12', 'junita', '2020-01-27 12:50:19'),
(8, 8, '2020-01-27', '12:50:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', '1313131', 'junita', '2020-01-27 12:50:37'),
(9, 8, '2020-01-27', '12:50:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'ok e cek', 'junita', '2020-01-27 12:52:28'),
(10, 8, '2020-01-27', '14:25:00', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Kotor', 'clea not trash', 'junita', '2020-01-27 14:26:07'),
(11, 11, '2020-01-27', '15:50:00', 'Bersih', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'time kotor sewing lt 3', 'junita', '2020-01-27 15:50:31'),
(12, 8, '2020-01-01', '15:50:00', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'times', 'junita', '2020-01-27 15:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `g_groups`
--

CREATE TABLE `g_groups` (
  `GROUP_ID` int(20) NOT NULL,
  `GROUP_NAME` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `g_groups`
--

INSERT INTO `g_groups` (`GROUP_ID`, `GROUP_NAME`, `DESCRIPTION`) VALUES
(0, 'Super Admin', 'can CREATED, READ, UPDATE, DELETE User '),
(1, 'Operator', 'can CREATED, READ, UPDATE, DELETE content menu');

-- --------------------------------------------------------

--
-- Table structure for table `g_menus`
--

CREATE TABLE `g_menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `parent_menu` int(11) DEFAULT NULL,
  `menu_type` varchar(10) NOT NULL,
  `url` varchar(500) DEFAULT NULL,
  `cms_id` int(11) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `ordering` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_menus`
--

INSERT INTO `g_menus` (`id`, `menu_name`, `parent_menu`, `menu_type`, `url`, `cms_id`, `icon`, `ordering`, `created_date`, `created_by`) VALUES
(5, 'Kebersihan Bangunan', NULL, 'url', '', 0, 'icon-book-open', 3, '2017-11-24 11:27:03', 1),
(6, 'Publikasi', NULL, 'url', '', NULL, 'icon-book-open', 4, '2017-11-24 11:27:39', 1),
(8, 'Menu', NULL, 'cms', '', 1, '', 5, '2017-12-28 11:40:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `g_users`
--

CREATE TABLE `g_users` (
  `U_ID` int(11) NOT NULL,
  `GROUP_ID` int(20) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `CREATED_BY` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CREATED_DATE` datetime NOT NULL,
  `MODIFIED_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_users`
--

INSERT INTO `g_users` (`U_ID`, `GROUP_ID`, `USERNAME`, `PASSWORD`, `CREATED_BY`, `CREATED_DATE`, `MODIFIED_DATE`) VALUES
(1, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'heriipurnama', '2017-08-10 00:00:00', '2017-08-10 00:00:00'),
(21, 0, '125410101', '0610a910e9cd7ec9f78b7e3f4d959e6f', 'admin', '2020-01-24 08:46:18', '2020-01-24 08:46:18'),
(23, 1, 'junita', '0610a910e9cd7ec9f78b7e3f4d959e6f', '125410101', '2020-01-24 09:20:45', '2020-01-24 09:20:45'),
(24, 0, 'heriipurnama', '0610a910e9cd7ec9f78b7e3f4d959e6f', '125410101', '2020-01-24 15:16:59', '2020-01-24 15:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_areas`
--
ALTER TABLE `dt_areas`
  ADD PRIMARY KEY (`AREA_ID`);

--
-- Indexes for table `dt_bathrooms`
--
ALTER TABLE `dt_bathrooms`
  ADD PRIMARY KEY (`BATHROOMS_ID`);

--
-- Indexes for table `dt_buildings`
--
ALTER TABLE `dt_buildings`
  ADD PRIMARY KEY (`BUILDINGS_ID`);

--
-- Indexes for table `g_groups`
--
ALTER TABLE `g_groups`
  ADD PRIMARY KEY (`GROUP_ID`);

--
-- Indexes for table `g_menus`
--
ALTER TABLE `g_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `g_users`
--
ALTER TABLE `g_users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_areas`
--
ALTER TABLE `dt_areas`
  MODIFY `AREA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dt_bathrooms`
--
ALTER TABLE `dt_bathrooms`
  MODIFY `BATHROOMS_ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dt_buildings`
--
ALTER TABLE `dt_buildings`
  MODIFY `BUILDINGS_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `g_groups`
--
ALTER TABLE `g_groups`
  MODIFY `GROUP_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `g_menus`
--
ALTER TABLE `g_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `g_users`
--
ALTER TABLE `g_users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `g_menus`
--
ALTER TABLE `g_menus`
  ADD CONSTRAINT `g_menus_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `g_users` (`U_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

