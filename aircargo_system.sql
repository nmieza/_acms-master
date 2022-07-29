-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2022 at 06:16 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aircargo_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'KLIA', 'klia123@gmail.com', '529ecd49b8cab20cdcd7cbd74e0c5246');

-- --------------------------------------------------------

--
-- Table structure for table `airport_list`
--

CREATE TABLE `airport_list` (
  `id` int(11) NOT NULL,
  `ap_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ap_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ap_postalcode` int(11) NOT NULL,
  `ap_country` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ap_contact` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport_list`
--

INSERT INTO `airport_list` (`id`, `ap_name`, `ap_address`, `ap_postalcode`, `ap_country`, `ap_contact`) VALUES
(2, 'Lapangan Terbang Antarabangsa Kuala Lumpur', 'Sepang', 64000, 'Malaysia', '0356775888');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` varchar(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `scontact` varchar(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `raddress` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rcontact` varchar(11) NOT NULL,
  `status` int(2) NOT NULL COMMENT '1 = pending,\r\n2 = Accepted,\r\n3 = In Transit,\r\n4 = Out for Delivery,\r\n5 = Delivered',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `sname`, `saddress`, `semail`, `scontact`, `rname`, `raddress`, `remail`, `rcontact`, `status`, `date_created`) VALUES
('RS234567890', 'Muhammad Nor irfan', 'No.2 Jalan bintang 12, Taman bintang 84150 Muar Johor', 'nmieza@gmail.com', '0172837645', 'Nur hamizah', 'No 10 parit 16 Sungai panjang', 'mieza11@gmail.com', '0182899935', 4, '2022-07-10 18:13:15'),
('RS234567892', 'Siti Suraya binti Suraji', '35, Jalan AU 1a/3f, Taman Keramat Permai, 54200 Keramat, Wilayah Persekutuan Kuala Lumpur', 'stsrya@gmail.com', '0192893784', 'Farah Nabilah binti Aizuddin', '765 Jalan Kota Kenari 4/5. Kota Kenari 09000. Kulim Kedah ', 'Frhnab@gmail.com', '0182939573', 3, '2022-07-11 11:16:27'),
('RS234567893', 'Ahmad Razak binti Sulaiman', 'No.15, Jalan 38/27B, Taman Desa Setapak 53300 KL ', 'ARazak43@gmail.com', '0182738947', 'Jong Loke Tan', '325 East 38th Street, New York, NY, 10016, USA', 'JLTan76@gmail.com', '01290724531', 3, '2022-07-11 11:19:39'),
('RS234567895', 'Sharifah amira binti syed zakaria', 'No.19, Jalan 38/27B, Taman Desa Setapak 53300 KL ', 'shazwa@gmail.com', '0192769237', 'Alexander33@gmail.com', '325 East 38th Street, New York, NY, 10016, USA', 'Alexander33@gmail.com', '02124567890', 2, '2022-07-27 16:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'nurhamizah', 'missmieyza17@gmail.com', '2cb7341a9890b01817416bcfed864ca1'),
(10, 'admin', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500'),
(11, 'warehouse', 'warehouse@gmail.com', '372d30dd2849813ef674855253900679');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
