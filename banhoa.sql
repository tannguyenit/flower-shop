-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 11:03 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoa`
--

CREATE TABLE `hoa` (
  `id_hoa` int(11) NOT NULL,
  `Tenhoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Giaban` int(10) NOT NULL,
  `Hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_theloai` int(11) NOT NULL,
  `id_nhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa`
--

INSERT INTO `hoa` (`id_hoa`, `Tenhoa`, `Giaban`, `Hinhanh`, `Mota`, `id_theloai`, `id_nhom`) VALUES
(1, 'hoa lan', 15000, '42_1450799290.jpg', 'tuyá»‡t Ä‘áº¹p', 1, 2),
(3, 'Hoa nhiá»‡t huyáº¿t', 14000, '2950_nhiet-huyet-2_jpg_1450854870.png', 'ai biáº¿t', 1, 1),
(4, 'hoa huá»‡', 15000, '24_1450799172.jpg', 'Ä‘áº¹p', 2, 3),
(5, 'hoa huá»‡', 15000, '24_1450799172.jpg', 'Ä‘áº¹p', 2, 3),
(6, 'hoa huá»‡', 15000, '24_1450799172.jpg', 'Ä‘áº¹p', 2, 3),
(7, 'hoa huá»‡', 15000, '24_1450799172.jpg', 'Ä‘áº¹p', 2, 3),
(8, 'hoa huá»‡', 15000, '24_1450799172.jpg', 'Ä‘áº¹p', 2, 3),
(9, 'Hoa Tháº¯m', 0, '2224242000151111145003_1487854518.png', '', 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `Hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Sodienthoai` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Gmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `Hoten`, `Sodienthoai`, `Gmail`, `Noidung`) VALUES
(1, 'kjd', '54', '54fve', 'ád'),
(2, '{hoten}', '153', 'l;sfk', 'slaks\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Tendangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Tendangnhap`, `Matkhau`, `Fullname`, `Gmail`) VALUES
(1, 'admin', '12345', 'admin', 'vanquyen.dt13ctt02@gmail.com'),
(2, 'admin1', '123qweasd', 'quyen', 'qÆ°ertfhgjm');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE `nhom` (
  `id_nhom` int(11) NOT NULL,
  `Tennhom` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`id_nhom`, `Tennhom`) VALUES
(1, 'MÃ€U Äá»Ž'),
(2, 'MÃ€U VÃ€NG'),
(3, 'MÃ€U TÃM'),
(4, 'MÃ€U Há»’NG'),
(5, 'MÃ€U CAM'),
(6, 'MÃ€U TRáº®NG'),
(7, 'MÃ€U Káº¾T Há»¢P');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id_theloai` int(11) NOT NULL,
  `Tentheloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `Tentheloai`) VALUES
(1, 'HOA TÃŒNH YÃŠU'),
(2, 'HOA SINH NHáº¬T'),
(5, 'HOA Táº¶NG Máº¸'),
(6, 'HOA CHÃšC Má»ªNG'),
(7, 'HOA CHIA BUá»’N'),
(8, 'HOA CÆ¯á»šI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoa`
--
ALTER TABLE `hoa`
  ADD PRIMARY KEY (`id_hoa`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`id_nhom`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_theloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoa`
--
ALTER TABLE `hoa`
  MODIFY `id_hoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nhom`
--
ALTER TABLE `nhom`
  MODIFY `id_nhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_theloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
