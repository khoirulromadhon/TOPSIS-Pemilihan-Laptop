-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 05:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_laptop`
--

CREATE TABLE `data_laptop` (
  `id` int(4) NOT NULL,
  `brand` varchar(256) COLLATE utf8_bin NOT NULL,
  `produk` varchar(64) COLLATE utf8_bin NOT NULL,
  `inches` varchar(64) COLLATE utf8_bin NOT NULL,
  `cpu` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram` varchar(64) COLLATE utf8_bin NOT NULL,
  `memory` varchar(64) COLLATE utf8_bin NOT NULL,
  `harga` varchar(64) COLLATE utf8_bin NOT NULL,
  `inches_angka` varchar(4) COLLATE utf8_bin NOT NULL,
  `cpu_angka` varchar(4) COLLATE utf8_bin NOT NULL,
  `ram_angka` varchar(4) COLLATE utf8_bin NOT NULL,
  `memory_angka` varchar(4) COLLATE utf8_bin NOT NULL,
  `harga_angka` varchar(4) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_laptop`
--

INSERT INTO `data_laptop` (`id`, `brand`, `produk`, `inches`, `cpu`, `ram`, `memory`, `harga`, `inches_angka`, `cpu_angka`, `ram_angka`, `memory_angka`, `harga_angka`) VALUES
(1, 'Apple', 'MacBook Pro Ultrabook', '13.3', 'Intel Core i5 2.3GHz', '8GB DDR4', '512GB SSD', 'Rp. 14.000.000', '2', '4', '4', '4', '5'),
(2, 'Apple', 'MacBook Air Ultrabook', '13.3', 'Intel Core i3 2.3GHz', '8GB DDR4', '256GB SSD', 'Rp. 12.740.000', '2', '3', '4', '4', '5'),
(3, 'Hp', '250 G6 Notebook', '13.3', 'Intel Core i7 9200U 2.5GH', '16GB DDR4', '1TB HDD', 'Rp. 12.000.000', '2', '5', '5', '5', '5'),

(4, 'Hp', 'ProBook 470 Notebook', '15.6', 'Intel Core i5 11200U 2.5GH', '8GB DDR4', '256 SSD', 'Rp. 9.000.000', '4', '4', '4', '4', '4'),
(5, 'Asus', 'ZenBook UX430UN Ultrabook', '15.6', 'Intel Core i7 8200U 2.5GH', '16GB DDR4', '512GB SSD', 'Rp. 15.000.000', '4', '5', '5', '4', '5'),
(6, 'Asus', 'Rog Strix Gaming', '15.6', 'Intel Core i5 9200U 4.5GH', '8GB DDR4', '128GB SSD + 1TB HDD', 'Rp. 13.500.000', '5', '4', '4', '5', '5'),
(7, 'MSI', 'GS73VR 7RG Gaming', '17.6', 'Intel Core i5 1100U 4.5GH', '16GB DDR4', '512GB SSD', 'Rp. 14.900.000', '5', '4', '5', '4', '5'),
(8, 'MSI', '9SCSR Gaming', '15.6', 'Intel Core i7 9200U 2.5GH', '8GB DDR4', '512GB SSD', 'Rp. 13.300.000', '4', '5', '4', '4', '5'),
(9, 'Asus', 'Zephyrus Gaming', '15.6', 'Intel Core i7 9200U 2.5GH', '16GB DDR4', '512GB SSD', 'Rp. 16.300.000', '4', '5', '5', '4', '5'),
(10, 'Acer', 'Aspire E5-475 Notebook', '11.3', 'AMD A9', '8GB DDR4', '1TB HDD', 'Rp. 4.000.000', '1', '2', '4', '3', '1'),
(11, 'Acer', 'Aspire A515-51G-32MX Notebook', '15.6', 'Intel Core i3 7130U 2.7GHz', '8GB DDR4', '512 SSD + 1TB HDD', 'Rp. 9.000.000', '4', '3', '4', '5', '4'),
(12, 'Lenovo', 'IdeaPad 320-15IKB Notebook', '15.6', 'Intel Core i5 8130U 2.7GHz', '16GB DDR4', '512GB SSD', 'Rp. 7.000.000', '4', '4', '5', '4', '3'),
(13, 'Lenovo', 'IdeaPad Gaming 3i', '14.0', 'Intel Core i5 8130U 2.7GHz', '8GB DDR4', '128GB SSD + 1TB HDD', 'Rp. 14.300.000', '3', '4', '4', '5', '5'),
(14, 'Dell', 'Inspiron 3567', '14.0', 'AMD E-7 Series', '8GB DDR4', '256GB SSD + 500GB HDD', 'Rp. 7.500.000', '3', '1', '4', '5', '3'),
(15, 'Dell', 'Inspiron 5570', '15.6', 'Intel Core i3 11230U 2.7GHz', '8GB DDR4', '256GB SSD', 'Rp. 9.000.000', '4', '3', '4', '4', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_laptop`
--
ALTER TABLE `data_laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_laptop`
--
ALTER TABLE `data_laptop`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
