-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2019 at 07:45 AM
-- Server version: 5.7.16
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bojxona`
--

-- --------------------------------------------------------

--
-- Table structure for table `dalolatnoma`
--

CREATE TABLE `dalolatnoma` (
  `id` int(11) NOT NULL,
  `familiya` varchar(255) NOT NULL,
  `ism` varchar(255) NOT NULL,
  `sharif` varchar(255) NOT NULL,
  `qaysi_tartib` varchar(255) NOT NULL,
  `doimiy_yashash_joyi` varchar(255) NOT NULL,
  `fuqoroligi` varchar(255) NOT NULL,
  `qayerdan` varchar(255) NOT NULL,
  `qayerga` varchar(255) NOT NULL,
  `passport_seriya` varchar(255) NOT NULL,
  `passport_raqam` varchar(255) NOT NULL,
  `safardan_maqsad` varchar(255) NOT NULL,
  `yuk` int(11) NOT NULL,
  `ortiqcha_yuk` int(11) DEFAULT NULL,
  `valyuta1` varchar(255) DEFAULT NULL,
  `valyuta2` varchar(255) DEFAULT NULL,
  `valyuta3` varchar(255) DEFAULT NULL,
  `valyuta_qiymati1` double DEFAULT NULL,
  `valyuta_qiymati2` double DEFAULT NULL,
  `valyuta_qiymati3` double DEFAULT NULL,
  `qimmatbaxo_metal1` varchar(255) DEFAULT NULL,
  `qimmatbaxi_metal2` varchar(255) DEFAULT NULL,
  `qimmatbaxo_metal_qiymati1` double DEFAULT NULL,
  `qimmatbaxo_metal_qiymati2` double DEFAULT NULL,
  `qurol` tinyint(1) NOT NULL,
  `giyohvand` tinyint(1) NOT NULL,
  `osimlik` tinyint(1) NOT NULL,
  `radio` tinyint(1) NOT NULL,
  `antika` tinyint(1) NOT NULL,
  `transport` tinyint(1) NOT NULL,
  `bosma` tinyint(1) NOT NULL,
  `soliq` tinyint(1) NOT NULL,
  `vaqtincha` tinyint(1) NOT NULL,
  `nomi1` varchar(255) DEFAULT NULL,
  `nomi2` varchar(255) DEFAULT NULL,
  `nomi3` varchar(255) DEFAULT NULL,
  `nomi4` varchar(255) DEFAULT NULL,
  `nomi5` varchar(255) DEFAULT NULL,
  `narxi1` double DEFAULT NULL,
  `narxi2` double DEFAULT NULL,
  `narxi3` double DEFAULT NULL,
  `narxi4` double DEFAULT NULL,
  `narxi5` double DEFAULT NULL,
  `summa` double DEFAULT NULL,
  `vaqt` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dalolatnoma`
--

INSERT INTO `dalolatnoma` (`id`, `familiya`, `ism`, `sharif`, `qaysi_tartib`, `doimiy_yashash_joyi`, `fuqoroligi`, `qayerdan`, `qayerga`, `passport_seriya`, `passport_raqam`, `safardan_maqsad`, `yuk`, `ortiqcha_yuk`, `valyuta1`, `valyuta2`, `valyuta3`, `valyuta_qiymati1`, `valyuta_qiymati2`, `valyuta_qiymati3`, `qimmatbaxo_metal1`, `qimmatbaxi_metal2`, `qimmatbaxo_metal_qiymati1`, `qimmatbaxo_metal_qiymati2`, `qurol`, `giyohvand`, `osimlik`, `radio`, `antika`, `transport`, `bosma`, `soliq`, `vaqtincha`, `nomi1`, `nomi2`, `nomi3`, `nomi4`, `nomi5`, `narxi1`, `narxi2`, `narxi3`, `narxi4`, `narxi5`, `summa`, `vaqt`, `status`) VALUES
(1, 'Masharipov', 'Furqat', 'Baxodir o\'gli', 'Kirish', 'O\'zbekiston', 'O\'zbekiston', 'O\'zbekiston', 'Russiya federatsiyasiga', 'AA', '2362161', 'O\'qish', 15, 0, '', '', '', NULL, NULL, NULL, '', '', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-19 18:54:27', 'Ruxsat berilgan'),
(2, 'Atamurotov', 'Umrbek', 'Jumanazar o\'gli', 'Chiqish', 'Uzbekistan', 'Uzbekistan', 'O\'zbekiston', 'Turkiya', 'AA', '3216541', 'Ish', 15, NULL, 'dollar', '', '', 12000, NULL, NULL, 'Oltin', '', 1200, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 'PIstalet', '', '', '', '', 120, NULL, NULL, NULL, NULL, 120, '2019-06-19 20:17:04', 'Ruxsat berilmagan'),
(3, 'q', 'q', 'q', 'Kirish', 'q', 'q', 'q', 'q', 'q', 'q', 'Qarindoshlarni ziyorat qilish', 1, NULL, 'q', 'q', 'q', NULL, NULL, NULL, 'q', 'q', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'q', 'q', 'q', 'q', 'q', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-20 07:31:01', 'Ariza jo\'natilgan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `authKey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fio`, `username`, `password`, `image`, `authKey`) VALUES
(1, 'admin', 'admin', '$2y$13$h0aAyuWlFjQPiAQg3FECLOrXBaxix/7Bt8yz/0VKk0Bei5fPf4I4y', 'avatar.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dalolatnoma`
--
ALTER TABLE `dalolatnoma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dalolatnoma`
--
ALTER TABLE `dalolatnoma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
