-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 05:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `status`, `number`) VALUES
(1, 'ยังไม่เริ่มดำเนินการ', 1),
(2, 'กำลังดำเนินการ', 1),
(5, 'ล่าช้า', 1),
(6, 'เสร็จแล้ว', 2);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `image`, `text`, `heading`, `time`) VALUES
(1, 'Bunsiri', '1.jpg ', 'ดูโครงการก่อสร้าง', '', '0000-00-00 00:00:00'),
(2, 'บุราศิริ', 'bura1.png', 'กำลังก่อสร้าง', 'ระยะที่ 1', '2017-12-04 04:19:00'),
(3, 'บุราศิริ', '3.jpg', '555555555555555555555555555555555555555555555555555', 'ระยะที่ 2 วางโครงสร้าง', '0000-00-00 00:00:00'),
(4, 'บุราศิริ', '3.jpg', '555555555555555555555555555555555555555555555555555', 'ระยะที่ 3 วางโครงสร้าง', '0000-00-00 00:00:00'),
(14, 'บุราศิริ', '5.jpg', 'เกี่ยวกับการวางโครงสร้างว่าแบบนี้จะทำอย่างไร ทำให้สามารถทำงานให้ไปต่อได้', 'ระยะที่ 5 การวางโครงสร้างการคืน', '0000-00-00 00:00:00'),
(15, 'บุราศิริ', '8.jpg', 'ไม่ใช่มะเร็งนะ', 'ระยะสุดท้าย', '0000-00-00 00:00:00'),
(16, 'บ้านใหม่', 'test.jpg', 'อู๊ดๆ', 'ขอลองหน่อยนะพี่', '0000-00-00 00:00:00'),
(17, 'Nirvana - พระราม 2', '1.jpg', 'ติดต่อมาวางโครงสร้างงาน ', 'ประเมินโครงสร้าง', '0000-00-00 00:00:00'),
(18, 'Nirvana - พระราม 2', '2.jpg', 'นำเหล็กมาวางโครงสร้างเพื่อก่อสร้างอาคารแบบประตู', 'วางโครงสร้างเหล็ก', '0000-00-00 00:00:00'),
(19, 'aaaa', '99.jpg', '6u6utuyuy', 'ehrthdfh', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `idcus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `progress` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `namecus` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `timestart` date NOT NULL,
  `timestop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `idcus`, `name`, `tel`, `email`, `status`, `progress`, `desc`, `namecus`, `address`, `timestart`, `timestop`) VALUES
(1, 'bobby', 'บุราศิริ', '024526941', 'ggg@mail.com', 'เสร็จแล้ว', 100, 'โครงการเกี่ยวกับการสร้างบ้าน และออกแบบโครงสร้าง', 'ธนพล ทองอาสน์', 'เจริญนคร 30/2 แขวงลางลภูล่าง เขตคลองสาน กรุงเทพ 10600', '2018-01-09', '2018-05-23'),
(2, 'gggg', 'บ้านใหม่(บางรัก)', '0845321675', 'ZUUU@mail.com', 'ล่าช้า', 20, 'โครงการสร้างบ้านใหม่', 'นันทการ เอี่ยมสุข', '124/5 ซอย เจริญกรุง 28 ถ.เจริญกรุง แขวงบางรัก เขตบางรัก กรุงเทพ 10524', '2018-01-01', '2018-01-23'),
(3, 'save', 'Nirvana - พระราม 2', '0853666808', 'savesave24641@hotmail.com', 'กำลังดำเนินการ', 25, 'โครงการทำเกี่ยวกับทางเข้าของโครงการหมู่บ้าน', 'เซฟ ฐนัน', '1/1282 ซ.10/1 ม.14 ต.บางวัว อ.บางปะกง จ.ฉะเชิงเทรา 24130 ', '2018-01-18', '2018-03-22'),
(4, '98701', 'แสนสิริ กับ โครงการ คณาสิริ', '029999999', 'YUTZZ@mail.com', 'เสร็จแล้ว', 100, 'โครงการของแสนสิริ', 'รัชดาพร กิ่งมณี', 'สวรรค์', '2018-02-22', '2018-07-25'),
(5, 'gkkg', 'aaaa', '2132157151', 'rrr@gmail.com', 'ยังไม่เริ่มดำเนินการ', 0, '', 'hhh', 'ppppp', '2018-01-11', '2018-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pjname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `namecus` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `status`, `pjname`, `address`, `namecus`) VALUES
(2, 'admin', '0860588959z', 'admin', '', '', ''),
(5, 'save', '0853666808', 'user', 'Nirvana - พระราม 2', '', ''),
(7, 'bobby', '123456', 'user', 'บุราศิริ', '', ''),
(8, 'gggg', '1234', 'user', 'บ้านใหม่(บางรัก)', '', ''),
(11, '98701', '029999999', 'user', 'แสนสิริ กับ โครงการ คณาสิริ', 'สวรรค์', 'รัชดาพร กิ่งมณี'),
(12, 'gkkg', '2132157151', 'user', 'aaaa', 'ppppp', 'hhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
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
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
