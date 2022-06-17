-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 01:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hp`
--

CREATE TABLE `data_laptop` (
  `id` int(4) NOT NULL,
  `brand` varchar(256) COLLATE utf8_bin NOT NULL,
  `produk` varchar(64) COLLATE utf8_bin NOT NULL,
  `inches` varchar(64) COLLATE utf8_bin NOT NULL,
  `screenResolution` varchar(64) COLLATE utf8_bin NOT NULL,
  `cpu` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram` varchar(64) COLLATE utf8_bin NOT NULL,
  `memory` varchar(64) COLLATE utf8_bin NOT NULL,
  `gpu` varchar(64) COLLATE utf8_bin NOT NULL,
  `os` varchar(64) COLLATE utf8_bin NOT NULL,
  `harga` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_hp`
--

INSERT INTO `data_laptop` (`id`, `brand`, `produk`, `inches`, `screenResolution`, `cpu`, `ram`,`memory`, `gpu`, `os`, `harga`) VALUES

(1, 'Apple', 'MacBook Pro Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 2.3GHz', '8', '512GB SSD', 'Intel Iris Plus Graphics 640', 'macOS', 'Rp. 14.000.000'),
(2, 'Apple', 'MacBook Air Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i3 2.3GHz', '8', '256GB SSD', 'Intel Iris Plus Graphics 640', 'macOS', 'Rp. 12.740.000'),
(3, 'Hp', '250 G6 Notebook', '13.3', '15.6 Full HD 1920x1080', 'Intel Core i7 9200U 2.5GH', '16', '1TB HDD', 'Intel HD Graphics 620', 'Windows 10', 'Rp. 12.000.000'),
(4, 'Hp', 'ProBook 470 Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 11200U 2.5GH', '8', '256 SSD', 'Nvidia GeForce 930MX', 'Windows 10', 'Rp. 9.000.000'),
(5, 'Asus', 'ZenBook UX430UN Ultrabook', '15.6', '4K 3840x2160', 'Intel Core i7 8200U 2.5GH', '16', '512GB SSD', 'Nvidia GeForce GTX 1600Ti', 'Windows 11', 'Rp. 15.000.000'),
(6, 'Asus', 'Rog Strix Gaming', '15.6', 'Full HD 1920x1080', 'Intel Core i5 9200U 4.5GH', '8', '128GB SSD + 1TB HDD', 'Nvidia GeForce GTX 1650', 'Windows 10', 'Rp. 13.500.000'),
(7, 'MSI', 'GS73VR 7RG Gaming', '15.6', 'Full HD 1920x1080', 'Intel Core i5 1100U 4.5GH', '16', '512GB SSD', 'Nvidia GeForce RTX2060Ti', 'Windows 10', 'Rp. 14.900.000'),
(8, 'MSI', '9SCSR Gaming', '15.6', 'Full HD 1920x1080', 'Intel Core i7 9200U 2.5GH', '8', '512GB SSD', 'Nvidia GTX 1650Ti Max Q', 'Windows 10', 'Rp. 13.300.000'),
(9, 'Asus', 'Zephyrus Gaming', '15.6', '4K 3840x2160', 'Intel Core i7 9200U 2.5GH', '16', '512GB SSD', 'Nvidia GTX RTX2060Ti ', 'Windows 10', 'Rp. 16.300.000'),
(10, 'Acer', 'Aspire E5-475 Notebook', '14.0', 'Full HD 1920x1080', 'Intel Core i3 7130U 2.7GHz', '8', '1TB HDD', 'Nvidia 930MX', 'Windows 11', 'Rp. 4.000.000'),
(11, 'Acer', 'Aspire A515-51G-32MX Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 7130U 2.7GHz', '8', '512 SSD + 1TB HDD', 'Nvidia MX930', 'Windows 10', 'Rp. 9.000.000'),
(12, 'Lenovo', 'IdeaPad 320-15IKB Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 8130U 2.7GHz', '16', '512GB SSD', 'Intel Iris Plus Graphics 640', 'Windows 11', 'Rp. 7.000.000'),
(13, 'Lenovo', 'IdeaPad Gaming 3i', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8130U 2.7GHz', '8', '128GB SSD + 1TB HDD', 'Nvidia GeForce RTX2060Ti', 'Windows 11', 'Rp. 14.300.000'),
(14, 'Dell', 'Inspiron 3567', '14.0', '4K 3840x2160', 'Intel Core i5 8130U 2.7GHz', '8', '256GB SSD + 500GB HDD', 'Intel Iris Plus Graphics 640', 'Windows 10', 'Rp. 10.500.000'),
(15, 'Dell', 'Inspiron 5570', '15.6', 'Full HD 1920x1080', 'Intel Core i3 11230U 2.7GHz', '8', '256GB SSD', 'Intel Iris Plus Graphics 640', 'Windows 11', 'Rp. 9.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hp`
--
ALTER TABLE `data_laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hp`
--
ALTER TABLE `data_laptop`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
