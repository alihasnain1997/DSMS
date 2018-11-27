-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 05:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_detail` varchar(500) NOT NULL,
  `p_image` text NOT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `createdon` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_price`, `p_detail`, `p_image`, `createdby`, `createdon`) VALUES
(57, 'Ali', 90, 'jhgfd', '../img/DBImg1532499192.png', NULL, '2018-07-26 15:37:43'),
(58, 'new2', 100, 'new prosuca', '../img/DBImg1532538657.png', NULL, '2018-07-26 15:37:43'),
(59, 'prosucts', 45000, 'jgjf', '../img/DBImg1532538679.png', NULL, '2018-07-26 15:37:43'),
(60, 'ehyw', 6655, 'asdfghj', '../img/DBImg1532538700.png', NULL, '2018-07-26 15:37:43'),
(61, 'sdfghj', 789, 'qasxcwdcv', '../img/DBImg1532538716.png', NULL, '2018-07-26 15:37:43'),
(62, 'poiuygf', 951, 'lkjhgfxiuyt', '../img/DBImg1532538729.png', NULL, '2018-07-26 15:37:43'),
(63, 'uhgfcx', 74158, 'oiuhgfdxcvbnk', '../img/DBImg1532538745.png', NULL, '2018-07-26 15:37:43'),
(64, 'dfgh', 74, 'uygfcd', '../img/DBImg1532543983.png', NULL, '2018-07-26 15:37:43'),
(65, 'oijuhg', 952, 'kjhgfdxcvbn', '../img/DBImg1532544013.png', NULL, '2018-07-26 15:37:43'),
(66, 'sdfghn', 652, 'dcgfhjj', '../img/DBImg1532544026.png', NULL, '2018-07-26 15:37:43'),
(67, 'weerdtfgh', 96512, 'xcvbjn', '../img/DBImg1532544038.png', NULL, '2018-07-26 15:37:43'),
(68, 'srdfvgbhn', 89645132, 'sdfgvbhn', '../img/DBImg1532544052.png', NULL, '2018-07-26 15:37:43'),
(69, 'edtfyghbnj', 87946512, 'dfcgvbhn', '../img/DBImg1532544065.png', NULL, '2018-07-26 15:37:43'),
(70, 'esdfyghnj', 4123546, 'zsdxfcjgvbnkj', '../img/DBImg1532544079.png', NULL, '2018-07-26 15:37:43'),
(71, 'sredfyghj', 87645213, 'trdfgkhgydfkjk', '../img/DBImg1532544091.png', NULL, '2018-07-26 15:37:43'),
(72, 'recgvbhn', 55985, 'jhdgfghjkh', '../img/DBImg1532544110.png', NULL, '2018-07-26 15:37:43'),
(73, 'xdcfgvbh', 254851, 'fghbjnhjgf', '../img/DBImg1532544129.png', NULL, '2018-07-26 15:37:43'),
(74, 'gffhghj', 541, 'hfdjhg', '../img/DBImg1532544138.png', NULL, '2018-07-26 15:37:43'),
(75, 'gfxgcvhbjn', 5454, 'jfghfhbkj', '../img/DBImg1532544148.png', NULL, '2018-07-26 15:37:43'),
(76, 'dxdfcgvhjbkn', 652356899, 'fghjlk;liuy', '../img/DBImg1532544165.png', NULL, '2018-07-26 15:37:43'),
(77, 'dxcgvhjbn', 5412548, 'fgjhbjnkml,', '../img/DBImg1532544177.png', NULL, '2018-07-26 15:37:43'),
(78, 'dfghjkj', 512548754, 'ghvhkjgfgvhbjk', '../img/DBImg1532544189.png', NULL, '2018-07-26 15:37:43'),
(79, 'yes ', 45, 'kjh', '../img/DBImg1532589052.png', NULL, '2018-07-26 15:37:43'),
(80, 'src', 89, 'jhvc', '../img/DBImg1532619073.png', 'azamm', '2018-07-26 15:37:43'),
(81, 'EAD_S18_A9_BCSF15M017', 5678, 'lkjhgf', '../img/DBImg1532619518.png', 'azamm', '2018-07-26 15:38:38'),
(82, 'EAD_S18_A9_BCSF15M017', 5678, 'lkjhgf', '../img/DBImg1532619518.png', 'azamm', '2018-07-26 15:38:38'),
(83, 'sp_more_bcsf15m017', 23456, 'sdfghj', '../img/DBImg1532619606.png', 'azamm', '2018-07-26 15:40:06'),
(84, 'bcsf15m017', 45, '23456', '../img/DBImg1533180472.png', 'Admin', '2018-08-02 03:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(1, 'Admin', '1234', 'Admin'),
(3, 'azam', '98765', 'Manager'),
(12, 'azamm', '12345', 'Manager'),
(13, '', '', ''),
(14, 'User', 'name', 'Manager'),
(15, 'csf15m017', '123', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
