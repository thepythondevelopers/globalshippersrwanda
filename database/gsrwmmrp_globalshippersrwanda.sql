-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2024 at 02:00 AM
-- Server version: 10.6.18-MariaDB-cll-lve-log
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsrwmmrp_globalshippersrwanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_address`
--

CREATE TABLE `admin_address` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `landmark` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_address`
--

INSERT INTO `admin_address` (`id`, `fname`, `lname`, `phone`, `address`, `landmark`, `state`, `city`, `country`, `zipcode`, `created_date`, `updated_date`, `status`) VALUES
(1, 'Global Shippers', 'Rwanda', '+919554000808', '66 /16, Hoolaganj  USR1790 The Mall Road', 'Near Police Station', 'Uttar Pradesh', 'Kanpur', 'india', 208001, '2024-06-26 05:37:30', '2024-06-26 09:37:30', '0'),
(2, 'Global Shippers ', 'Rwanda', '+14809440767', '4283 Express Lane', 'suite 9135529', 'Florida', 'Sarasota', 'USA', 34249, '2024-06-18 09:32:22', '2024-06-18 13:32:22', '0'),
(3, 'Global Shippers', 'Rwanda', '+86 18124516942', 'Dezhong Technology Park, No. 45 Qilinlin', 'Building 2, 1st Floor, Ms. Zou ID:136954', 'Guangdong', 'Dongguan', 'CHINA', 523000, '2024-06-26 06:31:34', '2024-06-26 10:31:34', '0'),
(4, 'vorwärts', '2me', '+49 6994323160', 'Global Shippers Rwanda, Schwedter Allee ', 'vorwärts2me 488649', 'Brandenburg', 'Schwedt', 'GERMANY', 16303, '2024-06-26 06:21:11', '2024-06-26 10:21:11', '0'),
(5, 'Global Shippers', 'Rwanda', '+81 0452259061', '1-15-11, NAKAKU, SHINYAMASHITA', 'BS2F - K263245', 'KANAGAWA', 'YOKOHAMA', 'JAPAN', 2310801, '2024-06-26 06:04:50', '2024-06-26 10:04:50', '0'),
(6, 'Global Shippers', 'Rwanda', '+905526150060', 'No: 00327379 Emin Sokak', 'Serifali Mah, 51/11', 'Ümraniye', 'Istanbul', 'TURKEY', 34775, '2024-06-18 09:50:58', '2024-06-18 13:50:58', '0'),
(7, 'Global Shippers', 'Rwanda', '+250 784651740', 'KN 72 ST, Makuza Peace plaza', 'Eden tower, 2nd floor', 'Kigali', 'Kigali City', 'RWANDA', 250, '2024-06-26 05:48:34', '2024-06-26 09:48:34', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin_consolidate_shipment`
--

CREATE TABLE `admin_consolidate_shipment` (
  `id` int(11) NOT NULL,
  `item_type` int(50) NOT NULL,
  `package_size` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `tracking_id` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_consolidate_shipment`
--

INSERT INTO `admin_consolidate_shipment` (`id`, `item_type`, `package_size`, `item_name`, `tracking_id`, `weight`, `quantity`, `price`, `total_price`, `date_created`, `date_updated`) VALUES
(1, 2, '7x7x7', 'test', '755755', '10', '10', '100', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, '5x5x5', '', '5552221', '10', '', '150', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, '5x5x5', 'Crockery', '44454445', '5', '15', '250', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, '20x20x20', '', '1480281246', '5', '', '22', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, '50x22x33', 'laptop', '1970808711', '8.9', '4', '500', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, '25x26x26', 'keyboard', '12228947755', '0.5', '10', '44', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 0, '21x33x54', '', '1111', '3.99', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 0, '10x10x10', '', '1122', '9', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 0, '20x30x30', '', '2222', '5.5', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, '2x2x2', 'testing', '11221122', '12', '15', '150', '1500', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 0, '10x10x11', '', '8888', '30', '2', '20', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 0, '5x9x9', '', '9999', '11', '5', '10', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 0, '10x10x11', '', '276193361401', '4 ', '4 ', '22 ', '40 ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 9, '10x10x10', '', '0987654321', '13', '', '300', '300', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 0, '5x5x5', '', '3665522290', '4 ', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'xx', 'book', '12', '1', '1', '100', '100', '2024-08-05 10:48:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assisted_shopnship_item_details`
--

CREATE TABLE `assisted_shopnship_item_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `product_type` varchar(40) NOT NULL,
  `order_sub_type` varchar(40) NOT NULL,
  `courier_type` varchar(40) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `store` varchar(100) NOT NULL,
  `color` varchar(40) NOT NULL,
  `size` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `total_amount` varchar(40) NOT NULL,
  `single_item_amount` varchar(40) NOT NULL,
  `grand_total` varchar(40) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `assisted_id` varchar(40) NOT NULL,
  `assisted_country_id` varchar(40) NOT NULL,
  `address_id` varchar(40) NOT NULL,
  `tracking_number` varchar(40) NOT NULL,
  `item_received` enum('0','1') NOT NULL,
  `order_status` enum('1','2','3','4') NOT NULL,
  `is_paid` enum('1','2','3') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `assisted_shopnship_item_details`
--

INSERT INTO `assisted_shopnship_item_details` (`id`, `user_id`, `product_type`, `order_sub_type`, `courier_type`, `product_name`, `store`, `color`, `size`, `quantity`, `total_amount`, `single_item_amount`, `grand_total`, `remark`, `order_id`, `assisted_id`, `assisted_country_id`, `address_id`, `tracking_number`, `item_received`, `order_status`, `is_paid`, `is_deleted`, `created_date`, `updated_date`) VALUES
(1, '30', '5', 'Commercial', '1', 'FANS', '', '', '', '4', '240', '', '240', 'TESTING THE MESSAGE', '987654321', '9950063', '4', '21', '', '0', '1', '1', '0', '2024-06-10 07:43:04', '2024-06-10 07:43:04'),
(2, '30', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/', 'Red', 'Xl', '1', '100', '', '100', '', '1234', '9279422', '1', '19', '', '0', '1', '1', '0', '2024-06-22 10:27:18', '0000-00-00 00:00:00'),
(3, '30', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/', 'Red', 'Xl', '1', '100', '', '100', '', '1234', '518502', '1', '19', '', '0', '1', '1', '0', '2024-06-22 10:27:39', '0000-00-00 00:00:00'),
(4, '30', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', 'remark', '1234', '8352560', '1', '19', '', '0', '1', '1', '0', '2024-06-22 10:29:40', '0000-00-00 00:00:00'),
(5, '30', '1', 'Sample', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '123456', '8428849', '1', '19', '', '0', '1', '1', '0', '2024-06-22 10:38:26', '0000-00-00 00:00:00'),
(6, '30', '1', 'Personal', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '1234', '8996124', '1', '19', '', '0', '1', '1', '0', '2024-06-22 10:42:42', '0000-00-00 00:00:00'),
(7, '30', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '1234567', '6089637', '1', '19', '', '0', '4', '1', '0', '2024-06-29 13:09:02', '2024-06-29 13:09:02'),
(8, '30', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '1234567', '4758935', '1', '19', '', '0', '4', '1', '0', '2024-06-29 06:16:32', '2024-06-29 06:16:32'),
(9, '56', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '123456', '7463174', '3', '32', '', '0', '1', '1', '0', '2024-06-22 11:31:46', '0000-00-00 00:00:00'),
(10, '56', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '123456', '5320045', '1', '32', '', '0', '1', '1', '0', '2024-06-22 11:45:24', '0000-00-00 00:00:00'),
(11, '56', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '1234', '2821609', '1', '32', '', '0', '1', '1', '0', '2024-06-22 11:51:18', '0000-00-00 00:00:00'),
(12, '56', '1', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '100', '', '100', '', '1234', '4699794', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:29:37', '0000-00-00 00:00:00'),
(13, '56', '1', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '100', '', '100', '', '1234', '6696686', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:30:06', '0000-00-00 00:00:00'),
(14, '56', '1', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '100', '', '100', '', '1234', '732463', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:30:45', '0000-00-00 00:00:00'),
(15, '56', '2', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '110', '', '110', '', '123456', '592548', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:44:34', '0000-00-00 00:00:00'),
(16, '56', '2', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '110', '', '110', '', '123456', '6587152', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:46:16', '0000-00-00 00:00:00'),
(17, '56', '2', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '110', '', '110', '', '123456', '6383575', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:46:45', '0000-00-00 00:00:00'),
(18, '56', '2', 'Gift', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '110', '', '110', '', '123456', '9607488', '1', '32', '', '0', '1', '1', '0', '2024-06-22 12:47:17', '0000-00-00 00:00:00'),
(19, '1', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '123456', '959208', '3', '33', '', '0', '1', '1', '0', '2024-06-23 05:13:07', '0000-00-00 00:00:00'),
(20, '1', '2', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '110', '', '110', '', '123456', '9014912', '1', '11', '', '0', '1', '1', '0', '2024-06-23 13:40:59', '0000-00-00 00:00:00'),
(21, '1', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '100', '', '100', '', '1234', '1356835', '1', '11', '', '0', '1', '1', '0', '2024-06-23 14:00:00', '0000-00-00 00:00:00'),
(22, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '1234', '8983098', '3', '34', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(23, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '100', '', '100', '', '123456', '6155742', '1', '34', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(24, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '1100', '1100', '1100', '', '1234', '3792893', '1', '35', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(25, '67', '1', 'Commercial', '1', 'Series Book Comics', 'Amazon India', 'red', '8x8x8', '2', '24', '', '24', 'Tesing the email functionality', '12221', '2312870', '2', '36', '', '0', '1', '1', '0', '2024-06-24 09:00:58', '0000-00-00 00:00:00'),
(26, '229', '1', 'Gift', '2', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', 'Xl', '1', '1100', '', '1100', '', '123456', '8325546', '3', '38', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(27, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '1100', '', '1100', '', '1234', '8270837', '1', '34', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(28, '229', '1', 'Commercial', '2', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '1100', '', '1100', '', '1234', '6145705', '1', '38', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(29, '66', '2', 'Commercial', '1', 'testing', 'Store name', 'red', '23432', '12', '1476', '', '1476', 'testing', 'testing', '9763826', '3', '39', '', '0', '1', '1', '0', '2024-06-24 10:51:03', '0000-00-00 00:00:00'),
(30, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '1100', '', '1100', '', '1234', '8610239', '1', '34', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(31, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '1000', '', '1000', '', '123456', '709538', '1', '34', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(32, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '1000', '', '1000', '', '123456', '890665', '1', '34', '', '0', '4', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(33, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '1100', '', '1100', '', '123456', '8363297', '1', '38', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(34, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '', '1', '50', '', '150', '', '123456', '5932329', '1', '34', '', '0', '1', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(35, '229', '16', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', '', '', '1', '100', '', '150', '', '1234', '5932329', '1', '34', '', '0', '4', '1', '0', '2024-08-05 08:13:38', '2024-08-05 08:13:38'),
(41, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', '', '', '2', '40', '20', '40', 'Good ', '', '4531286', '1', '44', '', '0', '1', '1', '0', '2024-07-09 06:26:31', '2024-07-09 06:26:31'),
(37, '150', '1', 'Commercial', '1', 'MACBOOK ', 'AMAZON.COM', '23', '23', '2', '2000', '', '2000', 'MACBOOK ', '', '1648737', '1', '43', '', '0', '1', '1', '0', '2024-06-30 12:21:56', '0000-00-00 00:00:00'),
(38, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', '', '0', '2', '20', '', '20', '', '', '4229207', '3', '34', '', '0', '1', '1', '0', '2024-08-05 08:01:05', '2024-08-05 08:01:05'),
(39, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', '', '', '1', '10', '10', '10', '', '', '4547182', '3', '44', '', '0', '4', '1', '0', '2024-07-08 10:49:59', '2024-07-08 10:49:59'),
(40, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '1', '1', '10', '10', '10', '', '', '2618917', '1', '44', '', '0', '4', '1', '0', '2024-07-13 04:54:37', '2024-07-13 04:54:37'),
(42, '9', '9', 'Personal', '2', 'car Fog Light', 'https://www.alibaba.com/product-detail/car-Fog-Light-driving-lamp-kit_1600254513468.html', 'Black', 'L', '12', '420', '35', '459', 'Buy it today please', '', '8223771', '2', '14', '', '0', '1', '1', '0', '2024-07-15 13:01:26', '0000-00-00 00:00:00'),
(43, '9', '16', 'Personal', '2', 'LED DRL For Suzuki', 'https://www.alibaba.com/product-detail/LED-DRL-For-Suzuki-S-Presso_1600903485673.html?spm=a2700.deta', 'White', 'XL', '1', '39', '39', '459', 'Buy it today please', '', '8223771', '2', '14', '', '0', '1', '1', '0', '2024-07-15 13:01:26', '0000-00-00 00:00:00'),
(44, '229', '3', 'Commercial', '1', 'test', 'test', 'red', '150', '2', '240', '120', '240', '', '', '6212567', '4', '44', '', '0', '1', '1', '0', '2024-07-23 10:56:09', '0000-00-00 00:00:00'),
(45, '229', '1', 'Commercial', '1', 'book', 'url', 'Red', '2', '1', '50', '50', '50', '', '', '1237957', '1', '44', '', '0', '4', '1', '0', '2024-07-24 06:23:59', '2024-07-24 06:23:59'),
(46, '300', '5', 'Personal', '2', 'Silicone Earphone Cases For Airpods 2 Ge', 'https://www.aliexpress.com/item/1005005395955840.html?spm=a2g0o.home.pcJustForYou.25.650c76dbjfPV4i&', 'white, black, pink, ', 'Size: 56*47*24mm thickness 1.5mm', '10', '12.9', '1.29', '12.9', 'I want 3 black earphones, 4 Black earphones and 3 Pink earphones', '', '4213210', '2', '45', '', '0', '2', '1', '0', '2024-07-25 06:26:20', '2024-07-25 06:26:20'),
(47, '229', '1', 'Commercial', '1', 'book', 'https://globalshippersrwanda.com/assisted-create-order', 'Red', '2', '2', '100', '50', '100', '', '', '5330750', '3', '48', '', '0', '1', '1', '0', '2024-08-05 07:51:04', '2024-08-05 07:51:04'),
(48, '229', '1', 'Commercial', '1', 'xyz', 'https://globalshippersrwanda.com/assisted-create-order', '', 'Xl', '2', '40', '20', '40', '', '', '2101992', '3', '44', '', '0', '1', '1', '0', '2024-08-05 11:37:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assisted_user_address`
--

CREATE TABLE `assisted_user_address` (
  `address_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `street_address` varchar(40) NOT NULL,
  `gate_code` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `pin_code` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_homepage`
--

CREATE TABLE `cms_homepage` (
  `id` int(11) NOT NULL,
  `sec1_slidertitle1` varchar(100) NOT NULL,
  `sec1_slidertitle2` varchar(100) NOT NULL,
  `sec1_sliderimage1` varchar(100) NOT NULL,
  `sec1_sliderimage2` varchar(100) NOT NULL,
  `sec1_slidersubtitle1` varchar(100) NOT NULL,
  `sec1_slidersubtitle2` varchar(100) NOT NULL,
  `sec1_sliderdescrip1` varchar(100) NOT NULL,
  `sec1_sliderdescrip2` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_login`
--

CREATE TABLE `facebook_login` (
  `user_id` int(11) NOT NULL,
  `login_oauth_uid` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `modified` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec1`
--

CREATE TABLE `gsr_aboutus_sec1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `imgpath` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec1`
--

INSERT INTO `gsr_aboutus_sec1` (`id`, `title`, `description`, `imgpath`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'Enjoy Hassel FREE shopping with Global Shippers Rwanda', 'Global Shippers Rwanda takes pride in being the most trusted company among global consumers looking for a simple and efficient way to shop online globally and get their products delivered to their home countries.', 'public/uploads/172402560060247', '2024-08-19 11:00:36', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec2`
--

CREATE TABLE `gsr_aboutus_sec2` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `heading` longtext NOT NULL,
  `points` longtext NOT NULL,
  `imgpath` longtext NOT NULL,
  `isdelete` enum('0','1') NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec2`
--

INSERT INTO `gsr_aboutus_sec2` (`id`, `title`, `description`, `heading`, `points`, `imgpath`, `isdelete`, `createddate`, `updateddate`) VALUES
(1, 'Our Services', 'Global Shippers Rwanda partners with global online and offline retailers, guiding consumers through the shopping journey. ', 'Tax-Free Shopping', '<h3>&nbsp;</h3>\r\n\r\n<h3>Warehouse &amp; Storage</h3>\r\n\r\n<p>When your order is delivered to your local address in the USA, China, India, Turkey, Japan, Germany, and Rwanda, we pick it up and store it in our warehouse.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Consolidation &amp; Shipping</h3>\r\n\r\n<p>We consolidate multiple products in a single package to save money and also ship it through DHL or FedEx to your home country.</p>\r\n', 'public/uploads/172238400067839', '0', '2024-07-31 14:41:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec3`
--

CREATE TABLE `gsr_aboutus_sec3` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec3`
--

INSERT INTO `gsr_aboutus_sec3` (`id`, `title`, `description`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'Why Choose Us As Your Shopping Partner?', 'Get ready for the next shopping season and save more with Global Shippers Rwanda’s endless benefits:', '2024-06-16 07:52:10', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec4`
--

CREATE TABLE `gsr_aboutus_sec4` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `imgpath` longtext NOT NULL,
  `updateddate` datetime NOT NULL,
  `createddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec4`
--

INSERT INTO `gsr_aboutus_sec4` (`id`, `title`, `description`, `imgpath`, `updateddate`, `createddate`, `isdelete`) VALUES
(1, 'Personalized care', 'Get a personalized shopping experience with Global Shippers Rwanda as you get a local address in selected countries and receive the order in your home country.', 'public/uploads/shopnship.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(2, 'Tax-free shopping', 'Save up to 80% on shopping with our sales tax-free shopping facility for global consumers. Shop from anywhere in the world and don’t worry about taxes.', 'public/uploads/nous.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(3, 'International shipping', 'Want to buy something that’s exclusively available in another country? Place your order and we’ll deliver it to your home address faster than anyone else.', 'public/uploads/discounted.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(4, 'Consolidation', 'Order multiple products and get them shipped in a single package to save time and money with our package consolidation services.', 'public/uploads/superior.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(5, 'Hassle-free storage', 'As your trusted shopping partner, we also offer the option to store packages at our warehouse for a limited time.', 'public/uploads/reduce.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(6, 'Shop from top brands', 'Place your order from the top global brands Amazon, Walmart, Gap, John Lewis, Boots, ASOS, and more online with delivery to your doorstep.', 'public/uploads/reduce.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(7, 'Shop exclusive products', 'Don’t keep telling your friends to buy something for you in their country. Simply get online and shop globally without worrying about taxes or delivery issues.', 'public/uploads/personal.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0'),
(8, 'Secure packing', 'Every package that we receive is hand-picked and packaged by our team of highly skilled professionals to ensure the safety of your products during the shipment.', 'public/uploads/enable.svg', '0000-00-00 00:00:00', '2024-06-16 08:11:50', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec5`
--

CREATE TABLE `gsr_aboutus_sec5` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `imgpath` longtext NOT NULL,
  `points` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec5`
--

INSERT INTO `gsr_aboutus_sec5` (`id`, `title`, `description`, `imgpath`, `points`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'Cost-effective shipping options', 'Global Shippers Rwanda partners with global online and offline retailers, guiding consumers through the shopping journey. ', 'public/uploads/172238400068191', '<p>&nbsp;</p>\r\n\r\n<h3>Our Commitment</h3>\r\n\r\n<p>Global Shippers Rwanda is committed to serving global consumers with the best shopping experience without the hassle and shopping sales tax involved.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Our Mission</h3>\r\n\r\n<p>Global Shippers Rwanda is on a mission to help enhance the overall shopping experience and drive retailer performance. For years, we&rsquo;ve been empowering international shoppers worldwide with sales tax-free shopping experience.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Our Vision</h3>\r\n\r\n<p>To be the best name among the top-rated global shopping and shipping partners for service, innovation, and technology leadership. Our team is committed to helping global shippers with an online shopping experience that&rsquo;s unlike others.</p>\r\n', '2024-07-31 14:40:32', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec6`
--

CREATE TABLE `gsr_aboutus_sec6` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `imgpath` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec6`
--

INSERT INTO `gsr_aboutus_sec6` (`id`, `title`, `description`, `imgpath`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'Warehouse & Storage', 'When your order is delivered to your local address in the USA, China, India, Turkey, Japan, Germany, and Rwanda, we pick it up and store it in our warehouse.', 'public/uploads/1718496000698', '2024-06-16 10:06:11', '0000-00-00 00:00:00', '0'),
(2, 'Consolidation & Shipping', 'We consolidate multiple products in a single package to save money and also ship it through DHL or FedEx to your home country.', 'public/uploads/171849600058447', '2024-06-16 10:06:11', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_aboutus_sec7`
--

CREATE TABLE `gsr_aboutus_sec7` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `imgpath` longtext NOT NULL,
  `updateddate` datetime NOT NULL,
  `createddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_aboutus_sec7`
--

INSERT INTO `gsr_aboutus_sec7` (`id`, `title`, `description`, `imgpath`, `updateddate`, `createddate`, `isdelete`) VALUES
(1, 'Our Commitment', 'Global Shippers Rwanda is committed to serving global consumers with the best shopping experience without the hassle and shopping sales tax involved.', 'public/uploads/171849600012014', '0000-00-00 00:00:00', '2024-06-16 10:12:37', '0'),
(2, 'Our Mission', 'Global Shippers Rwanda is on a mission to help enhance the overall shopping experience and drive retailer performance. For years, we’ve been empowering international shoppers worldwide with sales tax-free shopping experience.', 'public/uploads/171849600058178', '0000-00-00 00:00:00', '2024-06-16 10:12:37', '0'),
(3, 'Our Vision', 'To be the best name among the top-rated global shopping and shipping partners for service, innovation, and technology leadership. Our team is committed to helping global shippers with an online shopping experience that’s unlike others.', 'public/uploads/17184960008762', '0000-00-00 00:00:00', '2024-06-16 10:12:37', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_admin_login`
--

CREATE TABLE `gsr_admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `loginemail` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `reset_pass` varchar(40) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_admin_login`
--

INSERT INTO `gsr_admin_login` (`id`, `email`, `loginemail`, `phone`, `password`, `reset_pass`, `status`, `created_date`) VALUES
(1, 'globalshippersrwanda@gmail.com', 'globalshippersrwanda@gmail.com', '1234567890', 'Admin123@', '9d06892d5167b26cd4a6cdff7d427822', '0', '2024-07-16 07:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_admin_payment`
--

CREATE TABLE `gsr_admin_payment` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `invoiceamt` varchar(40) NOT NULL,
  `paymentmethod` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `status` enum('1','2','3') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_admin_payment`
--

INSERT INTO `gsr_admin_payment` (`id`, `payment_id`, `order_id`, `invoiceamt`, `paymentmethod`, `type`, `status`, `is_deleted`, `date_created`, `update_date`) VALUES
(7, '122413', '073f60e059e3b79a3025c6179b6487ac', '', '', 'shopnship', '1', '0', '2023-12-19 01:23:06', '2023-12-19 01:23:06'),
(15, '45678900233', '1', '', '', 'international', '2', '0', '2023-12-22 00:38:25', '0000-00-00 00:00:00'),
(6, '123asdd', '1966f8ea45cfdd6568c5d3d2d5375927', '', '', 'assisted', '1', '0', '2023-12-19 01:23:06', '2023-12-19 01:23:06'),
(8, '123454443333122', '45c48cce2e2d7fbdea1afc51c7c6ad26', '', '', 'assisted', '1', '0', '2023-12-19 01:30:46', '0000-00-00 00:00:00'),
(9, '123454443333122', '1e1b794c5a127a1f6665a2b501172cc0', '', '', 'shopnship', '2', '0', '2023-12-19 23:00:23', '0000-00-00 00:00:00'),
(10, '123454443333122', '827d5ccdb866d3f1ebfc74f9efdc1b32', '', '', 'shopnship', '1', '0', '2023-12-20 05:24:36', '0000-00-00 00:00:00'),
(12, '123', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '', '', 'assisted', '1', '0', '2023-12-20 08:14:08', '2023-12-20 08:14:08'),
(16, '123454443333122', 'cfcd208495d565ef66e7dff9f98764da', '', '', 'assisted', '1', '0', '2023-12-25 03:23:50', '0000-00-00 00:00:00'),
(17, '123454443333122', '1a890e9884a44765c942150092a51c6a', '', '', 'shopnship', '2', '0', '2023-12-26 02:03:43', '0000-00-00 00:00:00'),
(18, '123454443333122', '83183123', '', '', 'international', '2', '0', '2023-12-27 02:21:44', '0000-00-00 00:00:00'),
(19, '123454443333122', '853130', '', '', 'assisted', '2', '0', '2024-01-04 01:51:13', '2024-01-04 01:51:13'),
(40, '123454443333122', '9916860', '', '', 'assisted', '1', '0', '2024-01-11 00:43:20', '0000-00-00 00:00:00'),
(21, '3csg1kdoQajlaJyfYY', '973764', '131231232', '', 'shopnship', '2', '0', '2024-03-12 06:17:47', '2024-03-12 06:17:47'),
(34, '123454443333122', '577476', '', '', 'shopnship', '1', '0', '2024-01-09 01:09:37', '0000-00-00 00:00:00'),
(24, '123454443333122', '8566066', '', '', 'assisted', '1', '0', '2024-01-08 03:14:19', '0000-00-00 00:00:00'),
(25, '45678900233', '8566066', '', '', 'assisted', '1', '0', '2024-01-08 03:14:37', '0000-00-00 00:00:00'),
(27, '123454443333122', '619366', '1500020', '', 'shopnship', '1', '0', '2024-03-12 09:03:47', '2024-03-12 09:03:47'),
(28, '123454443333122', '9101889', '', '', 'assisted', '1', '0', '2024-01-08 05:22:18', '0000-00-00 00:00:00'),
(29, '123454443333122', '894075', '', '', 'shopnship', '1', '0', '2024-01-08 05:26:09', '0000-00-00 00:00:00'),
(30, '123454443333122', '2760850', '', '', 'assisted', '1', '0', '2024-01-08 05:29:03', '0000-00-00 00:00:00'),
(38, '12345444333', '1668327', '32131212312212123', '', 'assisted', '1', '0', '2024-03-12 09:30:07', '2024-03-12 09:30:07'),
(41, '', '642012', '', '', 'shopnship', '1', '0', '2024-02-21 10:20:00', '0000-00-00 00:00:00'),
(45, 'testing url', '411721', '12200', '', 'shopnship', '2', '0', '2024-02-26 10:37:35', '0000-00-00 00:00:00'),
(44, 'testing the url', '673105', '34000', '', 'shopnship', '2', '0', '2024-02-21 11:34:03', '2024-02-21 11:34:03'),
(46, 'adasd', '4629730', '', '', 'assisted', '3', '0', '2024-03-12 08:53:07', '0000-00-00 00:00:00'),
(47, '131321566', '1668327', '321216465', '', 'assisted', '2', '0', '2024-03-12 09:01:37', '0000-00-00 00:00:00'),
(48, '131', '63500', '1221', '', 'shopnship', '2', '0', '2024-03-12 09:14:16', '0000-00-00 00:00:00'),
(49, '412313', '973764', '23434343', '', 'shopnship', '2', '0', '2024-03-12 09:32:08', '0000-00-00 00:00:00'),
(50, '12312', '375668', '1200001', '', 'shopnship', '1', '0', '2024-03-15 12:19:11', '2024-03-15 12:19:11'),
(51, '123123', '3333742', '12321123', '', 'assisted', '2', '0', '2024-03-21 10:54:25', '0000-00-00 00:00:00'),
(52, '312312', '3333742', '11232', '', 'assisted', '2', '0', '2024-03-21 10:54:37', '0000-00-00 00:00:00'),
(61, 'testdata', '973764', '25000', '', 'shopnship', '2', '0', '2024-03-29 10:15:50', '0000-00-00 00:00:00'),
(58, '22223', '32378481', '222223', '', 'international', '2', '0', '2024-03-21 16:32:39', '2024-03-21 16:32:39'),
(60, '12321', '32378481', '123222', '', 'international', '2', '0', '2024-03-22 04:50:48', '2024-03-22 04:50:48'),
(62, 'https://buy.stripe.com/3csg1kdoQajlaJyfY', '381746', '2311', '', 'shopnship', '1', '0', '2024-06-28 07:11:24', '2024-06-28 11:11:24'),
(63, '12321', '256007', '312', '', 'consolidation', '2', '0', '2024-05-29 09:21:02', '0000-00-00 00:00:00'),
(64, 'https://buy.stripe.com/3csg1kdoQajlaJyfY', '364568', '23', '', 'consolidation', '1', '0', '2024-06-26 11:53:18', '0000-00-00 00:00:00'),
(66, '123456', '256007', '100', '', 'consolidation', '2', '0', '2024-06-27 12:37:30', '0000-00-00 00:00:00'),
(67, '111111', '256007', '111', '', 'consolidation', '2', '0', '2024-06-27 12:43:41', '0000-00-00 00:00:00'),
(68, '123', '256007', '123', '', 'consolidation', '2', '0', '2024-06-27 12:45:08', '0000-00-00 00:00:00'),
(69, '444', '256007', '10', '', 'consolidation', '3', '0', '2024-06-27 12:50:43', '0000-00-00 00:00:00'),
(70, '666', '256007', '90', '', 'consolidation', '1', '0', '2024-06-27 12:55:04', '0000-00-00 00:00:00'),
(71, '666', '256007', '90', '', 'consolidation', '1', '0', '2024-06-27 12:56:03', '0000-00-00 00:00:00'),
(73, '123456', '69566460', '123996755665777887', '', 'international', '1', '0', '2024-06-28 02:06:03', '2024-06-28 06:06:03'),
(119, '23', '15087651', '100', '', 'international', '2', '0', '2024-06-30 00:15:32', '2024-06-30 04:15:32'),
(115, 'PY-ASNS-001', '4758935', '15000', '', 'assisted', '2', '0', '2024-06-29 16:53:14', '0000-00-00 00:00:00'),
(104, '452174521 - BFM - UP', '4758935', '850021', '', 'assisted', '2', '0', '2024-06-29 05:22:29', '2024-06-29 09:22:29'),
(126, '23112', '5932329', '100', '', 'assisted', '2', '0', '2024-06-30 12:13:26', '0000-00-00 00:00:00'),
(114, 'PY-001012', '267869', '12500', '', 'consolidation', '2', '0', '2024-06-29 16:49:35', '0000-00-00 00:00:00'),
(103, '485210', '210012', '1250012', '', 'consolidation', '2', '0', '2024-06-29 05:21:29', '2024-06-29 09:21:29'),
(99, '23112', '8028532', '230', '', 'international', '1', '0', '2024-06-28 14:07:28', '0000-00-00 00:00:00'),
(116, 'PY-001-PS', '25028010', '122000', '', 'international', '3', '0', '2024-06-29 17:00:20', '0000-00-00 00:00:00'),
(125, '1234', '342128', '90', '', 'consolidation', '2', '0', '2024-06-30 12:07:57', '0000-00-00 00:00:00'),
(86, '231120000', '69566460', '2300000000', '', 'international', '1', '0', '2024-06-29 09:49:48', '2024-06-29 13:49:48'),
(87, 'tst123', '3792893', '100', '', 'assisted', '1', '0', '2024-06-28 03:50:41', '2024-06-28 07:50:41'),
(98, '23112123', '8028532', '100', '', 'international', '2', '0', '2024-06-28 10:05:42', '2024-06-28 14:05:42'),
(91, '23112', '865826', '100', '', 'consolidation', '1', '0', '2024-06-28 08:58:41', '0000-00-00 00:00:00'),
(92, '23112', '865826', '100', '', 'consolidation', '1', '0', '2024-06-28 09:04:04', '0000-00-00 00:00:00'),
(105, 'QWESA - PS - UP 1', '25028010', '1522021', '', 'international', '2', '0', '2024-06-29 06:15:04', '2024-06-29 10:15:04'),
(101, 'tst123', '415004', '100', '', 'consolidation', '2', '0', '2024-06-29 04:33:56', '0000-00-00 00:00:00'),
(110, '1200000', '488337', '1', '', 'consolidation', '1', '0', '2024-06-29 09:11:32', '2024-06-29 13:11:32'),
(118, '23112', '426198', '100', '', 'consolidation', '1', '0', '2024-06-30 03:51:40', '0000-00-00 00:00:00'),
(120, '100', '15087651', '30', '', 'international', '2', '0', '2024-06-30 04:26:43', '0000-00-00 00:00:00'),
(121, '23', '8363297', '100', '', 'assisted', '2', '0', '2024-06-30 00:33:27', '2024-06-30 04:33:27'),
(124, '1111', '342128', '100', '', 'consolidation', '2', '0', '2024-06-30 05:26:50', '0000-00-00 00:00:00'),
(127, '23112', '15721974', '230', '', 'international', '2', '0', '2024-06-30 12:15:29', '0000-00-00 00:00:00'),
(128, 'PY-00251', '997268', '20552', '', 'consolidation', '2', '0', '2024-06-30 13:44:01', '0000-00-00 00:00:00'),
(129, 'tst123', '18863085', '230', '', 'international', '1', '0', '2024-07-03 11:59:55', '0000-00-00 00:00:00'),
(130, 'tst123', '18863085', '230', '', 'international', '1', '0', '2024-07-03 12:01:49', '0000-00-00 00:00:00'),
(131, 'tst123', '18863085', '230', '', 'international', '1', '0', '2024-07-03 12:03:05', '0000-00-00 00:00:00'),
(132, '455', '238091', '101', '', 'consolidation', '1', '0', '2024-07-08 10:42:31', '2024-07-08 14:42:31'),
(133, '120', '4547182', '100', '', 'assisted', '1', '0', '2024-07-08 10:50:49', '2024-07-08 14:50:49'),
(135, '23112', '263827', '109', '', 'consolidation', '1', '0', '2024-07-09 02:38:47', '2024-07-09 06:38:47'),
(136, '23112', '2618917', '100', '', 'assisted', '2', '0', '2024-07-09 06:47:04', '0000-00-00 00:00:00'),
(137, '5', '2618917', '100', '', 'assisted', '2', '0', '2024-07-09 03:09:01', '2024-07-09 07:09:01'),
(138, '23112', '706368', '100', '', 'consolidation', '1', '0', '2024-07-09 07:02:51', '0000-00-00 00:00:00'),
(139, '2', '25647898', '230', '', 'international', '2', '0', '2024-07-09 03:13:37', '2024-07-09 07:13:37'),
(141, 'EVMZQ64A37M6FC7N', '776616', '0.1', '', 'consolidation', '1', '0', '2024-07-15 11:10:25', '0000-00-00 00:00:00'),
(142, '3csg1kdoQajlaJyfYY', '243698', '23', '', 'consolidation', '2', '0', '2024-07-15 08:54:19', '2024-07-15 12:54:19'),
(143, '23112', '6089637', '60', '', 'assisted', '1', '0', '2024-07-22 06:36:42', '0000-00-00 00:00:00'),
(158, 'invoice/p/#INV2-NJK5-G8XR-PUXK-JRD5', '531579', '21.3', '2', 'consolidation', '1', '0', '2024-07-25 07:13:02', '2024-07-25 11:13:02'),
(145, '1', '230697', '100', '', 'consolidation', '1', '0', '2024-07-22 06:58:48', '0000-00-00 00:00:00'),
(146, '23112', '230697', '100', '', 'consolidation', '2', '0', '2024-07-22 07:13:34', '0000-00-00 00:00:00'),
(148, '23112', '230697', '100', '1', 'consolidation', '2', '0', '2024-07-22 07:17:45', '0000-00-00 00:00:00'),
(149, '23112', '230697', '100', '2', 'consolidation', '1', '0', '2024-07-22 07:18:24', '0000-00-00 00:00:00'),
(150, '23112', '2618917', '100', '1', 'assisted', '2', '0', '2024-07-22 07:25:25', '0000-00-00 00:00:00'),
(151, '2', '2618917', '1', '2', 'assisted', '3', '0', '2024-07-22 07:25:49', '0000-00-00 00:00:00'),
(154, '23112', '24201068', '120', '1', 'international', '2', '0', '2024-07-22 07:29:24', '0000-00-00 00:00:00'),
(155, '23112', '24201068', '120', '2', 'international', '1', '0', '2024-07-22 07:29:37', '0000-00-00 00:00:00'),
(156, '23112', '1237957', '100', '1', 'assisted', '1', '0', '2024-07-24 10:22:58', '0000-00-00 00:00:00'),
(157, '23112', '1237957', '100', '2', 'assisted', '2', '0', '2024-07-24 10:23:49', '0000-00-00 00:00:00'),
(159, 'invoice/p/#INV2-NJK5-G8XR-PUXK-JRD5', '4213210', '21.3', '2', 'assisted', '1', '0', '2024-07-25 11:16:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_admin_users`
--

CREATE TABLE `gsr_admin_users` (
  `admin_users_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `mail_address` varchar(80) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `is_delete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_admin_users`
--

INSERT INTO `gsr_admin_users` (`admin_users_id`, `fname`, `lname`, `email`, `password`, `phone`, `mail_address`, `status`, `created_date`, `update_date`, `is_delete`) VALUES
(1, 'Anish', 'Yadav', 'anishiert@gmail.com', '87654321', '9876543210', '', '1', '2024-06-23 02:11:54', '2024-06-23 06:11:54', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_blogsection`
--

CREATE TABLE `gsr_blogsection` (
  `blogid` int(11) NOT NULL,
  `bannerImgpath` text NOT NULL,
  `titlethumbnail` text NOT NULL,
  `descriptionthumbnail` text NOT NULL,
  `descriptiondata` longtext NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `dateupdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gsr_blog_section1`
--

CREATE TABLE `gsr_blog_section1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_blog_section1`
--

INSERT INTO `gsr_blog_section1` (`id`, `title`, `createddate`, `updateddate`, `status`) VALUES
(1, 'How to Shop U.S. Prime Day Deals Internationally', '2024-06-16 06:57:49', '2024-06-29 16:42:21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_blog_section2`
--

CREATE TABLE `gsr_blog_section2` (
  `id` int(11) NOT NULL,
  `imgpath` longtext NOT NULL,
  `title` longtext NOT NULL,
  `comments` longtext NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_blog_section2`
--

INSERT INTO `gsr_blog_section2` (`id`, `imgpath`, `title`, `comments`, `description`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'public/uploads/171866880074773.jpg', 'Best Designer Outlet Stores for Online Shopping', 'Good', 'Want to shop fashion on a budget and own those designer pieces without paying the price of a runway price tag? Outlet stores to the rescue! The rise of online designer outlets has made the dream of convenient shopping a reality.', '2024-06-18 11:03:03', '0000-00-00 00:00:00', '0'),
(2, 'public/uploads/171866880028832.jpg', 'From the US to Your Doorstep: Celebrate Father\'s Day with Globalshipperswanda', 'Good', 'It is a great feeling to make someone happy and with Father’s Day approaching fast, you must be wondering how to make the dad in your life feel extra special. There is nothing quite like seeing the delight and joy on their faces when you surprise them on a day that is specifically dedicated to them.', '2024-06-18 11:03:03', '0000-00-00 00:00:00', '0'),
(3, 'public/uploads/1718668800365.jpg', 'Top 10 Eid al-Adha Gift Ideas from US Retailers', 'Good', 'Eid al-Adha, the Festival of Sacrifice, is a joyous occasion for Muslims worldwide. It is a time for friends and families to come together, celebrate their faith, and share gratitude. It is also a time of thoughtful gift-giving to share joy and strengthen family bonds and community.', '2024-06-18 11:03:03', '0000-00-00 00:00:00', '0'),
(4, 'public/uploads/17186688003597.jpg', 'Best Father’s Day Gifts for International Shoppers', 'Good', 'Father’s Day is just around the corner and this means you have very limited time to come up with the perfect gift idea. However, finding the ideal present can be a challenge, particularly if you cannot find it in your home country.', '2024-06-18 11:03:03', '0000-00-00 00:00:00', '0'),
(5, 'public/uploads/17186688008556.jpg', 'Shop the New iPad Pro from Apple US and Ship Globally with Globalshipperswand', 'Good', 'This stunningly thin and light device features the world\'s most advanced display and the incredibly powerful M4 chip, making it a dream machine for creatives, professionals, and anyone looking for superior tablet performance.', '2024-06-18 11:03:03', '0000-00-00 00:00:00', '0'),
(6, 'public/uploads/171866880025097.jpg', 'A Complete Comparative Guide: Amazon vs eBay', 'Good', 'When it comes to online shopping, the space is mostly dominated by Amazon and eBay. Both platforms are shopping powerhouses- giants in their own right that have revolutionized the way we purchase goods.', '2024-06-18 11:03:03', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_chatbot`
--

CREATE TABLE `gsr_chatbot` (
  `id` int(11) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `from_id` varchar(40) NOT NULL,
  `to_id` varchar(40) NOT NULL,
  `send_by_admin` enum('0','1') NOT NULL,
  `message_type` varchar(40) NOT NULL,
  `shipment_type` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL,
  `msg_image` varchar(80) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_chatbot`
--

INSERT INTO `gsr_chatbot` (`id`, `order_id`, `from_id`, `to_id`, `send_by_admin`, `message_type`, `shipment_type`, `message`, `msg_image`, `created_date`, `update_date`, `status`) VALUES
(1, '256007', '1', '1', '0', 'adminupdate', '1', 'hey', '', '2024-06-19 07:49:39', '0000-00-00 00:00:00', '0'),
(2, '954605', '3', '1', '0', 'All', '1', 'Hey', '', '2024-06-21 06:50:24', '0000-00-00 00:00:00', '0'),
(3, '1648737', '150', '1', '0', 'MACBOOK ', '2', 'HOW TO I HAVE TO PAY ', '', '2024-06-30 14:22:35', '0000-00-00 00:00:00', '0'),
(4, '1648737', '1', '150', '1', 'MACBOOK ', '2', 'We will share the payment link hhh', '', '2024-06-30 11:19:46', '0000-00-00 00:00:00', '0'),
(5, '776616', '3', '1', '0', 'testing', '1', 'hey', '', '2024-06-30 20:24:45', '0000-00-00 00:00:00', '0'),
(6, '426198', '65', '1', '0', '', '1', '', '', '2024-07-01 20:23:52', '0000-00-00 00:00:00', '0'),
(7, '531579', '3', '1', '0', 'cccc', '1', 'Hey ', '', '2024-07-09 11:24:15', '0000-00-00 00:00:00', '0'),
(8, '55443020', '3', '1', '0', 'eeee', '3', 'hey', '', '2024-07-11 14:58:41', '0000-00-00 00:00:00', '0'),
(9, '381746', '3', '1', '0', '3rd test', '1', 'hey', '', '2024-07-15 13:56:54', '0000-00-00 00:00:00', '0'),
(10, '381746', '3', '1', '0', '3rd test', '1', '', '', '2024-07-15 14:00:12', '0000-00-00 00:00:00', '0'),
(11, '25647898', '1', '229', '1', 'book', '3', 'hey', '', '2024-07-24 15:50:18', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_cms_aboutus`
--

CREATE TABLE `gsr_cms_aboutus` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gsr_cms_blog`
--

CREATE TABLE `gsr_cms_blog` (
  `id` int(11) NOT NULL,
  `imgpath` longtext NOT NULL,
  `heading` longtext NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_cms_blog`
--

INSERT INTO `gsr_cms_blog` (`id`, `imgpath`, `heading`, `title`, `description`, `date_created`, `date_modified`, `status`) VALUES
(1, 'public/uploads/171944640041420.png', 'heading', 'title', '<p>description</p>\r\n', '2024-06-27 05:48:01', '2024-06-27 08:09:52', '1'),
(2, 'public/uploads/17194464006712.png', 'Best Designer Outlet Stores for Online Shopping', 'Want to shop fashion on a budget and own those designer pieces without paying the price of a runway price tag? Outlet stores to the rescue! The rise of online designer outlets has made the dream of convenient shopping a reality.', '<p>Want to shop fashion on a budget and own those designer pieces without paying the price of a runway price tag? Outlet stores to the rescue! The rise of online designer outlets has made the dream of convenient shopping a reality.</p>\r\n', '2024-06-27 08:15:34', '2024-06-27 08:59:38', '0'),
(3, 'public/uploads/171944640049308.png', 'How to Shop U.S. Prime Day Deals Internationally', 'Amazon recently announced the return of its Prime Day sale this summer. The retail giant\'s mega sale extravaganza offers a myriad of amazing deals and discounts across a vast array of products. This exclusive sale, a privilege reserved for Prime members only, is a yearly affair on the shopping calendar which is eagerly awaited by bargain hunters worldwide.', '<p>Amazon recently announced the return of its Prime Day sale this summer. The retail giant&rsquo;s mega sale extravaganza offers a myriad of amazing deals and discounts across a vast array of products. This exclusive sale, a privilege reserved for Prime members only, is a yearly affair on the shopping calendar which is eagerly awaited by bargain hunters worldwide. Many of us patiently wait all year for this opportunity to grab mind-blowing deals on thousands of products across virtually every category on the Amazon website.</p>\r\n', '2024-06-27 08:52:13', '0000-00-00 00:00:00', '0'),
(4, 'public/uploads/171961920055150.png', 'How to Shop U.S. Prime Day Deals Internationally', 'How to Shop U.S. Prime Day Deals Internationally', '<p>Amazon recently announced the return of its Prime Day sale this summer. The retail giant&rsquo;s mega sale extravaganza offers a myriad of amazing deals and discounts across a vast array of products. This exclusive sale, a privilege reserved for Prime members only, is a yearly affair on the shopping calendar which is eagerly awaited by bargain hunters worldwide. Many of us patiently wait all year for this opportunity to grab mind-blowing deals on thousands of products across virtually every category on the Amazon website.</p>\r\n\r\n<p>This guide caters to you, the international shopper, to tactfully navigate Prime Day and ship your purchases directly to your doorstep with the help of Stackry&rsquo;s global shipping solutions. Whether this is your first Prime Day, or you&rsquo;ve shipped items from the USA tons of times, Stackry has you covered: It&rsquo;s never been easier to shop and ship from the USA!</p>\r\n\r\n<p>So without further ado, let&rsquo;s dive in and discover the secrets to successful shopping on Prime Day from anywhere in the world! But first, let&rsquo;s learn a little about what Prime Day is and how it works.</p>\r\n\r\n<h2>What is Amazon Prime Day and Why Should You Care?</h2>\r\n\r\n<p>Prime Day, usually held in July, has become a major shopping event that bargain hunters worldwide eagerly look forward to. This year it will be held from July 16th till 17th and while other shopping holidays such as Cyber Monday or Black Friday only last a day, Prime Day goes on for up to 48 hours!</p>\r\n\r\n<p>Prime Day is available in some countries outside the U.S., but not all. However, even if Prime Day is available in your country, the selection of deals may be limited compared to what is available in the U.S.</p>\r\n\r\n<p>During this exhilarating 48-hour window, Prime members are privy to unbelievable discounts on an overwhelming array of products. Everything from top-tier electronics and designer fashion to brand-name homeware and luxurious beauty essentials goes on sale- with some deals reaching lows like never before.</p>\r\n\r\n<p>If you are not a member, do not let the Prime membership requirement deter you! Amazon generously offers a free 30-day trial, so you can experience the benefits firsthand, especially during Prime Day. Prime members enjoy early access to deals, giving you a head start before the rush begins. Lightning Deals, limited-time offers, and free shipping are just a few more reasons to make the most of your Prime membership during this exclusive event.</p>\r\n\r\n<h2>Become a Stackry User and Enter the World of U.S. Shopping</h2>\r\n\r\n<p>Dreaming of Prime Day deals but worried your desired items are U.S. locked and will not ship internationally? Fear not, global shoppers! This is where&nbsp;<a href=\"https://www.stackry.com/en\">Stackry</a>&nbsp;comes in as your Prime Day international shipper.</p>\r\n\r\n<p>Stackry offers worldwide shipping in more than 200 countries and has been providing reliable package forwarding services to more than 100,000 satisfied international shoppers. Sign up for Stackry and get a free U.S. shipping address, enabling you to grab those amazing deals on Amazon U.S. and other U.S. retailers. So, before you dive headfirst into Prime Day&rsquo;s offerings, sign up for a free Stackry account. This provides you with a tax-free U.S. address which will open a world of U.S. online shopping possibilities. Simply use this address at checkout shopping on Amazon or any other U.S. retailer. Your purchases will be shipped securely to Stackry&rsquo;s warehouse, where you can enjoy several advantages.</p>\r\n\r\n<h2>Master the Art of the Prime Day Deal Hunt- Pro Tips for International Shoppers</h2>\r\n\r\n<ul>\r\n	<li><strong>Early bird gets the worm</strong>&ndash; To make the most of Amazon Prime Day 2024, it&rsquo;s essential to plan ahead. Start by creating a wish list of your most desired items. Keep an eye out for early deals and discounts that may be available prior to the main event. Stackry allows you to store your items at our secure operations center FREE for up to 45 days, giving you the flexibility to wait for the best deals and maximize your savings.</li>\r\n	<li><strong>Strike while the iron&rsquo;s hot</strong>&ndash; Keep an eye out for these limited-time offers that disappear quickly (often within an hour) but offer the highest discounts. These are perfect for grabbing those high-demand items at rock-bottom prices, but be prepared to act fast!</li>\r\n	<li><strong>Today&rsquo;s deals for your daily dose of savings</strong>&ndash; Amazon&rsquo;s dedicated&nbsp;<a href=\"https://amzn.to/3KXf91V\" rel=\"nofollow\">Today&rsquo;s Deals section&nbsp;</a>on their website curates daily offers you can explore to discover amazing deals. Check back frequently throughout Prime Day to see what exciting new deals have been featured.</li>\r\n	<li><strong>Do not forget promo codes and coupons</strong>&ndash; Scour the internet for additional promo codes and coupons that can be stacked with Prime Day discounts for even greater savings.</li>\r\n	<li><strong>Download the Amazon app for on-the-go deal hunting</strong>&ndash; Download the Amazon app on your phone or tablet for ultimate convenience. This allows you to browse deals, add items to your cart, and checkout conveniently from the palm of your hand.</li>\r\n</ul>\r\n\r\n<h2>Consolidate and Reduce Shipping Costs- Stackry Makes it Easy</h2>\r\n\r\n<p>Make the most out of your Amazon Prime Day 2024 haul by utilizing&nbsp;<a href=\"https://www.stackry.com/en/blog/exploring-the-benefits-of-consolidated-shipments?_gl=1*517bsr*_up*MQ..*_ga*MTk0NjA4ODUyMy4xNzE3OTUyMDA2*_ga_4YX5JVVT9T*MTcxNzk1MjAwNi4xLjEuMTcxNzk1NzY0MC4wLjAuMA..\">Stackry&rsquo;s consolidation services</a>. With Stackry, you can combine multiple packages into one shipment, saving on international shipping costs. This means you can take advantage of all the amazing deals without worrying about excessive shipping fees. Stackry&rsquo;s efficient and reliable consolidation services ensure that your purchases are delivered safely and promptly. This also results in substantial savings, especially when dealing with multiple lightweight items.</p>\r\n\r\n<h2>Prime Day Done Right- A Recap for International Shoppers</h2>\r\n\r\n<p>When you combine the convenience of a free Stackry account, some smart pre-Prime Day planning, and savvy deal-hunting techniques, you can transform yourself into an international Prime Day expert.&nbsp; Remember, Stackry is here to simplify the process and facilitate you every step of the way with its secure free storage, international shipping expertise, and consolidation services to ensure your Prime Day purchases arrive safely and affordably at your doorstep.</p>\r\n\r\n<p>While Prime Day offers a limited window of opportunity, Stackry enables you to shop U.S. retailers year-round.&nbsp;<a href=\"https://www.stackry.com/en/register\">Sign up</a>&nbsp;with Stackry today and use your Stackry address to access the world of U.S. online shopping and enjoy the benefits of Stackry&rsquo;s international shipping services whenever you find a deal you just cannot resist.</p>\r\n', '2024-06-29 16:43:33', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_cms_contactus`
--

CREATE TABLE `gsr_cms_contactus` (
  `id` int(11) NOT NULL,
  `heading` longtext NOT NULL,
  `text` varchar(40) NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_cms_contactus`
--

INSERT INTO `gsr_cms_contactus` (`id`, `heading`, `text`, `createddate`, `updateddate`, `status`) VALUES
(1, 'Contact Us', 'Feel free to contact us', '2024-07-29 10:17:50', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_cms_restrictions`
--

CREATE TABLE `gsr_cms_restrictions` (
  `id` int(11) NOT NULL,
  `section1_title` varchar(100) NOT NULL,
  `section1_detail` varchar(100) NOT NULL,
  `section1_image_path` longtext NOT NULL,
  `section2_js_data` longtext NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gsr_cms_shipping_cal`
--

CREATE TABLE `gsr_cms_shipping_cal` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_cms_shipping_cal`
--

INSERT INTO `gsr_cms_shipping_cal` (`id`, `description`, `createddate`, `updateddate`, `status`) VALUES
(1, '<h3>Estimate Your Shipping Rates</h3>\r\n\r\n<p>Save with 10% off your first shipment and 9% off your first 50kg shipment.</p>\r\n\r\n<p>Get Your warehouse address in 7 countries.</p>\r\n\r\n<p>Shop at any online store and get items in one package.</p>\r\n\r\n<p>Experience ultra-fast shipping to your doorstep.</p>\r\n\r\n<p>GSR works with major international shipping carriers including DHL, Fedex.</p>\r\n\r\n<p>Enter your package dimensions and weight for estimated shipping cost and carrier availability in your country.</p>\r\n\r\n<p>Experience stress-free international shopping and Shipping with us.</p>\r\n', '2024-07-29 11:02:11', '2024-07-29 06:45:53', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_consolidation_sec1`
--

CREATE TABLE `gsr_consolidation_sec1` (
  `id` int(11) NOT NULL,
  `imgpath` longtext NOT NULL,
  `description` longtext NOT NULL,
  `title` longtext NOT NULL,
  `updateddate` datetime NOT NULL,
  `createddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_consolidation_sec1`
--

INSERT INTO `gsr_consolidation_sec1` (`id`, `imgpath`, `description`, `title`, `updateddate`, `createddate`, `isdelete`) VALUES
(1, 'public/uploads/171875520088485.', 'Save more on your shipping cost with our package consolidation services, where we will combine multiple products in one package to deliver through a single shipment, thus resulting in a streamlined process and affordable solution. Package tracking is also very easy when you choose to consolidate multiple products in one package.', 'Package Consolidation Services', '0000-00-00 00:00:00', '2024-06-19 09:57:11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_consolidation_sec2`
--

CREATE TABLE `gsr_consolidation_sec2` (
  `id` int(11) NOT NULL,
  `imgpath` longtext NOT NULL,
  `description` longtext NOT NULL,
  `title` longtext NOT NULL,
  `updateddate` datetime NOT NULL,
  `createddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_consolidation_sec2`
--

INSERT INTO `gsr_consolidation_sec2` (`id`, `imgpath`, `description`, `title`, `updateddate`, `createddate`, `isdelete`) VALUES
(1, 'public/uploads/172238400027436.png', 'Shop from different brands and get all the products consolidated in a single package to save more on your international shipping with our partners like DHL and FedEx. Our consolidation services can help save up to 85% lower international shipping rates.', 'Lower Shipping Rates', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(2, 'public/uploads/172238400016497.png', 'Don’t want to take the hassle of keeping multiple apps or tabs open on your mobile just to keep track of your orders? Make it easier with package consolidation services. Your package will have a single AWB number, thus making tracking smooth like a breeze.', 'Hassle-Free Tracking', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(3, 'public/uploads/172238400022319.png', 'Why wait for weeks for your international shipment delivered to your place when you can get it faster with a single step; Consolidation? Simply get your products consolidated in a single package to get faster approvals from customs and save time on the overall shipping.', 'Fast Delivery', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_consolidation_sec3`
--

CREATE TABLE `gsr_consolidation_sec3` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_consolidation_sec3`
--

INSERT INTO `gsr_consolidation_sec3` (`id`, `title`, `description`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'FAQ About Our Consolidation Services', 'Can’t find what you’re looking for? Visit our Help Center.', '2024-06-15 10:54:54', '2024-06-19 10:06:45', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_consolidation_sec4`
--

CREATE TABLE `gsr_consolidation_sec4` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_consolidation_sec4`
--

INSERT INTO `gsr_consolidation_sec4` (`id`, `question`, `answer`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'What is order consolidation?', 'Order consolidation is a way to save on international shipping costs and time. The service involves including different products in a single box for shipment. For example, if you have ordered something from Amazon and a few products from Walmart, you don’t have to relieve them in their original packing as this will increase your customs duty. We will create a single packing for different products and then ship to your international address.\r\nConsolidation helps reduce shopping costs along with minimizing package waste.\r\n', '2024-06-15 10:58:20', '0000-00-00 00:00:00', '0'),
(2, 'Are there additional charges applicable for package consolidation?', 'No, Global Shippers Rwanda aims to make online shopping affordable so we do not add additional charges for our consolidation services. You can inform our team about your requirements so that we can ensure the consolidation of your products before shipping them to your home country.', '2024-06-15 10:58:20', '0000-00-00 00:00:00', '0'),
(3, 'Is it true that consolidation can save money on shipping costs?', 'Yes, in fact consolidating multiple products in a single package can help save a big chunk of your international shipping costs, which can be anywhere around 80% of it. So, it’s a good choice to consolidate your products before it is delivered to your home country. Make sure to inform us in advance to avoid any hassle later.', '2024-06-15 10:58:20', '0000-00-00 00:00:00', '0'),
(4, 'How does package consolidation work?', 'Buying products online from different platforms and receiving them in another country can be a costly decision as there are various types of taxes and customs fees involved. Global Shippers Rwanda can help combine your purchases into a single package, thus helping save a lot of your hard-earned money on international shipping. The process is very easy:\r\n•	Create an account with Global Shippers Rwanda\r\n•	Get your local address in the USA, China, India, Turkey, Japan, Germany, or Rwanda.\r\n•	The products are received at our warehouse.\r\n•	Our team will consolidate all the items in a single shipment.\r\n•	You receive the order in a single package.\r\n', '2024-06-15 10:58:20', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_contact`
--

CREATE TABLE `gsr_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_contact`
--

INSERT INTO `gsr_contact` (`id`, `name`, `email`, `phone`, `message`, `created_date`, `status`) VALUES
(1, 'anisha', 'anisha@gmail.com', '1234567890', 'hello', '2023-12-06 09:13:09', '0'),
(2, 'shopnship', 'wideshop1@gmail.com', '1234567890', 'hi', '2023-12-06 09:15:20', '0'),
(3, 'anisha', 'anisha@gmail.com', '1234567890', 'hello', '2023-12-07 05:17:08', '0'),
(4, 'users', 'anisha@gmail.com', '1234567800', 'testing', '2023-12-07 05:21:37', '0'),
(5, 'anisha', 'anisha@gmail.com', '1234567890', 'test', '2023-12-07 05:37:33', '0'),
(6, 'shopnship', 'wideshop1@gmail.com', '1200991234', 'test', '2023-12-07 05:41:29', '0'),
(7, 'shopnship', 'wideshop1@gmail.com', '1200991234', 'test', '2023-12-07 05:42:51', '0'),
(8, 'shopnship', 'wideshop1@gmail.com', '1200991234', 'test', '2023-12-07 05:45:33', '0'),
(9, 'anisha', 'anisha@gmail.com', '1234567890', 'shopnship', '2023-12-07 05:55:59', '0'),
(10, 'anisha', 'anisha@gmail.com', '1234567890', 'shopnship', '2023-12-07 05:56:24', '0'),
(11, 'Anisha Yadav', 'ani@gmail.com', '1234567890', 'mail testing', '2023-12-07 06:18:05', '0'),
(12, 'abcc', 'anisha1@gmail.com', '1234567890', 'testing', '2023-12-07 06:23:47', '0'),
(13, 'whitesoft', 'anisha1@gmail.com', '1234567890', 'testing', '2023-12-07 06:25:21', '0'),
(14, 'Umraw', 'anisha1@gmail.com', '1234567890', 'test', '2023-12-07 06:29:03', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_faq_sec1`
--

CREATE TABLE `gsr_faq_sec1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `details` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_faq_sec1`
--

INSERT INTO `gsr_faq_sec1` (`id`, `title`, `details`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'FAQs', 'We have most of the answers. If not, please contact us.', '2024-06-19 08:23:22', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_faq_sec2`
--

CREATE TABLE `gsr_faq_sec2` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_faq_sec2`
--

INSERT INTO `gsr_faq_sec2` (`id`, `question`, `answer`, `createddate`, `updateddate`, `isdelete`) VALUES
(8, 'hi', 'hello', '2024-07-30 08:55:58', '0000-00-00 00:00:00', '1'),
(9, 'title2', 'answer', '2024-07-30 08:57:04', '0000-00-00 00:00:00', '1'),
(2, 'Do foreigners pay sales tax for online purchases in the USA.', 'If you are buying anything from out of the USA, then you have to pay sales taxes, which can be very high for foreign nationals. However, Global Shippers Rwanda can save the sales taxes as you will have a Delaware address based in the USA. Once the product is delivered to your USA address, we will pick it up and then ship it to your home country, thus saving you from the sales taxes involved.', '2024-06-19 08:37:50', '2024-07-30 08:46:36', '0'),
(3, 'Am I eligible for Tax-Free shopping?', 'Everyone, regardless of age or nationality, can now purchase their desired products without paying taxes that are applicable in various countries. With Global Shippers Rwanda, you will have a local address in the countries like USA, China, India, Turkey, Japan, Germany, Rwanda and then we will ship your product to your home country, which means you don’t have to pay any taxes, only additional shipping costs, which can be also reduced by consolidating multiple products in one package.', '2024-06-15 07:50:22', '0000-00-00 00:00:00', '0'),
(4, 'Can I shop tax-free in any country and receive order in my home country?', 'When you are not a resident of countries like USA, China, Germany, etc. and buying from another country, then you have to pay several taxes in order to receive the product delivered to your home country. However, we can help you shop without worrying about the taxes involved. Simply search for the product of your choice, place an order and we will handle the shipping part for you. We will provide you with a tax-free address in selected country, which means there are no taxes involved.', '2024-06-15 07:50:22', '0000-00-00 00:00:00', '0'),
(5, 'I am living in Australia and want to buy from Amazon.in. Is it possible?', 'Global Shippers Rwanda ensures that you can shop from top brands like Amazon, Walmart, Gap, John Lewis, Boots, and ASOS from anywhere in the world. You will have a local in countries like USA, China, India, Turkey, Japan, Germany, Rwanda so you can shop from platforms that sell in these countries, which means there will be no additional tax applicable. So, yes you can buy from Amazon.in and get it delivered to your address in Australia without any additional tax.', '2024-06-15 07:50:22', '0000-00-00 00:00:00', '0'),
(6, 'I want to buy multiple items in the USA. So can I consolidate them into one package?', 'Yes, there is an option to consolidate multiple products in one package. Apart from ensuring the safety of your goods, it also helps in saving your hard-earned money on shipping as the shipping cost will be reduced. It is also a secure way to receive products as there are fewer chances of damage to your products.', '2024-06-15 07:50:22', '0000-00-00 00:00:00', '0'),
(7, 'How can I track my shipment?', 'When your order is received at your local address in the USA, we will pick it up and then ship it through your selected shipping provider such as DHL and FedEx. Once the order is shipped to your home country, we will notify you about the shipping along with all the details so that you can easily track it online using the AWB number. At Global Shippers Rwanda, we keep things hassle-free and transparent so you know everything about the latest updates related to your product and its shipping details.', '2024-06-15 07:50:22', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_google_login`
--

CREATE TABLE `gsr_google_login` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(60) NOT NULL,
  `login_oauth_uid` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gsr_helpcentre_categories`
--

CREATE TABLE `gsr_helpcentre_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_status` enum('0','1') NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_helpcentre_categories`
--

INSERT INTO `gsr_helpcentre_categories` (`cat_id`, `cat_name`, `cat_status`, `date_created`, `date_modified`) VALUES
(1, 'Getting Started', '1', '2024-06-26 07:19:09', '0000-00-00 00:00:00'),
(2, 'Package Receiving & Storage', '1', '2024-06-26 07:30:10', '0000-00-00 00:00:00'),
(3, 'Services (Personal Shopper, Consolidation, Packing Preferences)', '1', '2024-06-26 07:32:36', '0000-00-00 00:00:00'),
(5, 'Customs & Duties', '1', '2024-06-26 07:55:35', '0000-00-00 00:00:00'),
(6, 'Shipping, Tracking & Returns', '1', '2024-06-26 17:04:56', '0000-00-00 00:00:00'),
(7, 'testing', '1', '2024-06-27 06:54:19', '0000-00-00 00:00:00'),
(8, 'Shipping, Tracking & Returns 1', '1', '2024-06-29 16:37:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_helpcentre_qna`
--

CREATE TABLE `gsr_helpcentre_qna` (
  `qna_id` int(11) NOT NULL,
  `cat_id` varchar(60) NOT NULL,
  `cat_question` longtext NOT NULL,
  `cat_answer` longtext NOT NULL,
  `qna_cat_status` enum('0','1') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_helpcentre_qna`
--

INSERT INTO `gsr_helpcentre_qna` (`qna_id`, `cat_id`, `cat_question`, `cat_answer`, `qna_cat_status`, `date_created`, `date_modified`) VALUES
(11, '3', 'testing question', '<p>testing Answer</p>\r\n', '1', '2024-06-27 06:48:25', '0000-00-00 00:00:00'),
(12, '3', 'Do I have to pay to sign up?', '<p>testing</p>\r\n', '1', '2024-06-27 06:54:28', '2024-06-27 06:59:33'),
(13, '5', 'Which currency should I use?', '<p><em>Whether it&#39;s the merchandise value entered by our operations or the declaration of goods value for customs purposes, everything is done in USD.</em></p>\r\n\r\n<p>Hence, when you are declaring the value of your items or making any transactions with us, you should use USD. This standardization simplifies our processes and helps ensure consistency in all transactions.</p>\r\n\r\n<blockquote>\r\n<p>Please note that if your bank account is in a different currency, your bank may apply a foreign transaction fee or a currency conversion fee. It&#39;s best to check with your bank to understand any charges you might incur when making payments in USD.</p>\r\n</blockquote>\r\n', '0', '2024-06-29 16:38:54', '0000-00-00 00:00:00'),
(3, '3                               ', 'When do I need to use Personal Shopper service?', '<p>There are several reasons why you might want to use a Personal Shopper service.</p>\r\n\r\n<p><em>Firstly</em>, you may not feel comfortable entering your credit card details on multiple websites just for a one-time purchase.</p>\r\n', '0', '2024-06-26 08:47:28', '2024-06-27 06:29:18'),
(4, '5', 'testing category 5', '<p>tetst</p>\r\n', '1', '2024-06-26 09:46:41', '0000-00-00 00:00:00'),
(5, 'Package Receiving & Storage', 'testing category 5122', '<p>tetst12122</p>\r\n', '1', '2024-06-26 09:46:59', '2024-06-27 06:51:12'),
(6, '5', 'Will GSR open my package?', 'Will Forwardme open my package?', '1', '0000-00-00 00:00:00', '2024-06-26 15:24:38'),
(7, '3', 'When do I need to use Personal Shopper service?', 'When do I need to use Personal Shopper service?', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '5', 'What is customs duties & taxes?', 'What is customs duties & taxes?', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '2', 'Will GSR open my package?', '<p>Indeed, we do. At Forwardme, we&#39;re driven by a commitment to ensure the integrity and authenticity of your purchases, thus necessitating inspection upon arrival at our facilities.</p>\r\n\r\n<p>Our adept team meticulously examines each package for potential damage incurred during transit, and verifies its eligibility for export from the United States.</p>\r\n\r\n<h3><em><strong>This procedure safeguards your interests and assures the quality and safety of your items.</strong></em></h3>\r\n\r\n<p>In instances where the seller includes an invoice in your delivery box, we carry out a thorough item-to-invoice match. This ensures that you receive precisely what you ordered.</p>\r\n\r\n<p><em>If the invoice reflects the amount paid, we take an additional step to record this information for your convenience and financial transparency.</em></p>\r\n\r\n<p>Under circumstances where an item arrives outside of the manufacturer&#39;s original packaging or from an unrecognized vendor, we perform an in-depth inspection. This involves opening the packing to verify that the correct goods are enclosed and are sanctioned for export from the United States.</p>\r\n\r\n<p>This vigilant approach empowers Forwardme to deter fraud, while simultaneously saving you shipping expenses.</p>\r\n', '0', '2024-06-26 15:20:51', '0000-00-00 00:00:00'),
(10, '1', 'Do I have to pay to sign up?', '<p>At GSR, signing up is quick, easy, and completely free for life! You can create your account and start using your GSR address when checking out at any US brand&#39;s online store. The best part?</p>\r\n\r\n<h3>You don&#39;t need to be a US resident or have a US credit card.</h3>\r\n\r\n<p>No matter where you are located in the world, you can take advantage of your own GSR addresses provided by GSR. This addresses allows you to shop at any time from US retailers and have your purchases forwarded to your location.</p>\r\n\r\n<p>We offer different&nbsp;<a href=\"https://www.forwardme.com/pricing\" rel=\"noopener\" target=\"_blank\">membership options</a>&nbsp;to cater to your specific needs. Choose from our&nbsp;<strong>Free Account</strong>,&nbsp;<strong>Premium Membership</strong>, or&nbsp;<strong>VIP Membership</strong>&nbsp;based on the level of benefits and features you desire.</p>\r\n\r\n<h3><strong>Ready to get started?&nbsp;</strong></h3>\r\n\r\n<p><a href=\"https://www.forwardme.com/pricing\" rel=\"noopener\" target=\"_blank\">Click here to apply for membership</a>&nbsp;and gain immediate access to your&nbsp;<em>tax-free US address</em>. Enjoy the convenience and ease of US shopping with GSR.</p>\r\n', '0', '2024-06-26 17:03:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_help_centre_sec1`
--

CREATE TABLE `gsr_help_centre_sec1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_help_centre_sec1`
--

INSERT INTO `gsr_help_centre_sec1` (`id`, `title`, `createddate`, `updateddate`, `status`) VALUES
(1, 'Welcome to the Globalshipperswanda help centre.', '2024-06-15 13:03:52', '2024-06-19 09:14:19', '0'),
(2, 'Welcome to the Globalshipperswanda help centre.', '2024-06-26 07:48:00', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_help_centre_sec2`
--

CREATE TABLE `gsr_help_centre_sec2` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `ques1` longtext NOT NULL,
  `ques2` longtext NOT NULL,
  `ques3` longtext NOT NULL,
  `ques4` longtext NOT NULL,
  `ques5` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_help_centre_sec2`
--

INSERT INTO `gsr_help_centre_sec2` (`id`, `title`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'Getting Started', 'Do I have to pay to sign up?', 'Creating an account', 'What U.S. address will be provided?', 'How do I use my Globalshipperswanda address on a retailer...', 'What happens if the retail doesn\'t ship to Forw...', '2024-06-18 08:24:24', '0000-00-00 00:00:00', '0'),
(3, 'Package Receiving & Storage', 'Will Globalshipperswanda open my package?', 'What is dimensional (DIM) weight?', 'How long does the package processing take?', 'Will you notify me after my package arrives to ...', 'What happens if I forgot my suite number when o...', '2024-06-18 08:28:21', '0000-00-00 00:00:00', '0'),
(2, 'Services (Personal Shopper, Consolidation, Packing Preferences)', 'When do I need to use Personal Shopper service?', 'How does the consolidation process work?', 'What is Personal Shopper?', 'Can I request repacking?', 'What happens if one of the item in my order is ...', '2024-06-18 08:24:24', '0000-00-00 00:00:00', '0'),
(4, 'Customs & Duties', 'What is customs duties & taxes?', 'How to complete the customs declaration form?', 'Does my shipment incur duties and/or taxes?', 'What is an EEI form and do I need one?', 'Which currency should I use?', '2024-06-18 08:28:21', '0000-00-00 00:00:00', '0'),
(5, 'Shipping, Tracking & Returns', 'How is the shipping rate calculated?', 'How do I return item/s back to the store?', 'Why has my tracking not yet been updated?', 'Can I use my own shipping label or a personal s...', 'Can I return items from Mercari, eBay etc?', '2024-06-18 08:28:21', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_homepage_cms`
--

CREATE TABLE `gsr_homepage_cms` (
  `id` int(11) NOT NULL,
  `sec1_sliderImage1` varchar(100) NOT NULL,
  `sec1_sliderImage2` varchar(100) NOT NULL,
  `sec1_sliderImage3` varchar(100) NOT NULL,
  `sec1_title1` varchar(100) NOT NULL,
  `sec1_title2` varchar(100) NOT NULL,
  `sec1_title3` varchar(100) NOT NULL,
  `sec1_main1` varchar(100) NOT NULL,
  `sec1_main2` varchar(100) NOT NULL,
  `sec1_main3` varchar(100) NOT NULL,
  `sec1_endtitle1` longtext NOT NULL,
  `sec1_endtitle2` longtext NOT NULL,
  `sec1_endtitle3` longtext NOT NULL,
  `sec2_title` varchar(100) NOT NULL,
  `sec2_main` varchar(100) NOT NULL,
  `sec2_desc` longtext NOT NULL,
  `sec2_bannerImage` mediumtext NOT NULL,
  `aboutuspoints` mediumtext NOT NULL,
  `sec2_modalvideo` mediumtext NOT NULL,
  `sec2_heading1` mediumtext NOT NULL,
  `sec2_heading2` mediumtext NOT NULL,
  `sec2_heading3` mediumtext NOT NULL,
  `sec2_heading4` mediumtext NOT NULL,
  `sec2_heading5` mediumtext NOT NULL,
  `sec3_title` mediumtext NOT NULL,
  `sec3_main` mediumtext NOT NULL,
  `sec3_step1title` mediumtext NOT NULL,
  `sec3_step1icon` mediumint(9) NOT NULL,
  `sec3_step1desc` mediumtext NOT NULL,
  `sec3_step2title` mediumtext NOT NULL,
  `sec3_step2icon` mediumtext NOT NULL,
  `sec3_step2desc` mediumtext NOT NULL,
  `sec3_step3title` mediumtext NOT NULL,
  `sec3_step3icon` mediumtext NOT NULL,
  `sec3_step3desc` mediumtext NOT NULL,
  `sec3_step4title` mediumtext NOT NULL,
  `sec3_step4icon` mediumtext NOT NULL,
  `sec3_step4desc` mediumtext NOT NULL,
  `sec4_title` mediumtext NOT NULL,
  `sec4_main` mediumtext NOT NULL,
  `sec4_part1Img1` mediumtext NOT NULL,
  `sec4_part1title1` mediumtext NOT NULL,
  `sec4_part1description` mediumtext NOT NULL,
  `sec4_part1points` mediumtext NOT NULL,
  `sec4_part2title` mediumtext NOT NULL,
  `sec4_part2Img` mediumtext NOT NULL,
  `sec4_part2description` mediumtext NOT NULL,
  `sec4_part2points` mediumtext NOT NULL,
  `sec4_part3title` mediumtext NOT NULL,
  `sec4_part3Img` mediumtext NOT NULL,
  `sec4_part3description` mediumtext NOT NULL,
  `sec4_part3points` mediumtext NOT NULL,
  `sec5_title` mediumtext NOT NULL,
  `sec5_modal_main` mediumtext NOT NULL,
  `sec5_desc` mediumtext NOT NULL,
  `sec5_slider_Image2` varchar(100) NOT NULL,
  `sec5_slider_Image3` varchar(100) NOT NULL,
  `sec5_slider_Image4` varchar(100) NOT NULL,
  `sec5_slider_Image5` varchar(100) NOT NULL,
  `sec5_slider_Image6` varchar(100) NOT NULL,
  `sec5_slider_Image7` varchar(100) NOT NULL,
  `sec5_slider_Image8` varchar(100) NOT NULL,
  `sec5_slider_Image1` varchar(100) NOT NULL,
  `sec5_domain1` mediumtext NOT NULL,
  `sec5_domain2` mediumtext NOT NULL,
  `sec5_domain3` mediumtext NOT NULL,
  `sec5_domain4` mediumtext NOT NULL,
  `sec5_domain5` mediumtext NOT NULL,
  `sec5_domain6` mediumtext NOT NULL,
  `sec5_domain7` mediumtext NOT NULL,
  `sec5_domain8` mediumtext NOT NULL,
  `sec5_text1` mediumtext NOT NULL,
  `sec5_text2` mediumtext NOT NULL,
  `sec5_text3` mediumtext NOT NULL,
  `sec5_text4` mediumtext NOT NULL,
  `sec5_text5` mediumtext NOT NULL,
  `sec5_text6` mediumtext NOT NULL,
  `sec5_text7` mediumtext NOT NULL,
  `sec5_text8` mediumtext NOT NULL,
  `sec5_modal_text1` mediumtext NOT NULL,
  `sec5_modal_text2` mediumtext NOT NULL,
  `sec5_modal_text3` mediumtext NOT NULL,
  `sec5_modal_text4` mediumtext NOT NULL,
  `sec5_modal_text5` mediumtext NOT NULL,
  `sec5_modal_text6` mediumtext NOT NULL,
  `sec5_modal_text7` mediumtext NOT NULL,
  `sec5_modal_text8` mediumtext NOT NULL,
  `sec5_modal_heading1` mediumtext NOT NULL,
  `sec5_modal_heading2` mediumtext NOT NULL,
  `sec5_modal_heading3` mediumtext NOT NULL,
  `sec5_modal_heading4` mediumtext NOT NULL,
  `sec5_modal_heading5` mediumtext NOT NULL,
  `sec5_modal_heading6` mediumtext NOT NULL,
  `sec5_modal_heading7` mediumtext NOT NULL,
  `sec5_modal_heading8` mediumtext NOT NULL,
  `sec5_modal_img1` mediumtext NOT NULL,
  `sec5_modal_img2` mediumtext NOT NULL,
  `sec5_modal_img3` mediumtext NOT NULL,
  `sec5_modal_img4` mediumtext NOT NULL,
  `sec5_modal_img5` mediumtext NOT NULL,
  `sec5_modal_img6` mediumtext NOT NULL,
  `sec5_modal_img7` mediumtext NOT NULL,
  `sec5_modal_img8` mediumtext NOT NULL,
  `sec6_title` mediumtext NOT NULL,
  `sec6_desc` mediumtext NOT NULL,
  `sec6_review1` mediumtext NOT NULL,
  `sec6_review2` mediumtext NOT NULL,
  `sec6_review3` mediumtext NOT NULL,
  `sec7_title` mediumtext NOT NULL,
  `sec7_main` mediumtext NOT NULL,
  `sec7_jsondata` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_homepage_cms`
--

INSERT INTO `gsr_homepage_cms` (`id`, `sec1_sliderImage1`, `sec1_sliderImage2`, `sec1_sliderImage3`, `sec1_title1`, `sec1_title2`, `sec1_title3`, `sec1_main1`, `sec1_main2`, `sec1_main3`, `sec1_endtitle1`, `sec1_endtitle2`, `sec1_endtitle3`, `sec2_title`, `sec2_main`, `sec2_desc`, `sec2_bannerImage`, `aboutuspoints`, `sec2_modalvideo`, `sec2_heading1`, `sec2_heading2`, `sec2_heading3`, `sec2_heading4`, `sec2_heading5`, `sec3_title`, `sec3_main`, `sec3_step1title`, `sec3_step1icon`, `sec3_step1desc`, `sec3_step2title`, `sec3_step2icon`, `sec3_step2desc`, `sec3_step3title`, `sec3_step3icon`, `sec3_step3desc`, `sec3_step4title`, `sec3_step4icon`, `sec3_step4desc`, `sec4_title`, `sec4_main`, `sec4_part1Img1`, `sec4_part1title1`, `sec4_part1description`, `sec4_part1points`, `sec4_part2title`, `sec4_part2Img`, `sec4_part2description`, `sec4_part2points`, `sec4_part3title`, `sec4_part3Img`, `sec4_part3description`, `sec4_part3points`, `sec5_title`, `sec5_modal_main`, `sec5_desc`, `sec5_slider_Image2`, `sec5_slider_Image3`, `sec5_slider_Image4`, `sec5_slider_Image5`, `sec5_slider_Image6`, `sec5_slider_Image7`, `sec5_slider_Image8`, `sec5_slider_Image1`, `sec5_domain1`, `sec5_domain2`, `sec5_domain3`, `sec5_domain4`, `sec5_domain5`, `sec5_domain6`, `sec5_domain7`, `sec5_domain8`, `sec5_text1`, `sec5_text2`, `sec5_text3`, `sec5_text4`, `sec5_text5`, `sec5_text6`, `sec5_text7`, `sec5_text8`, `sec5_modal_text1`, `sec5_modal_text2`, `sec5_modal_text3`, `sec5_modal_text4`, `sec5_modal_text5`, `sec5_modal_text6`, `sec5_modal_text7`, `sec5_modal_text8`, `sec5_modal_heading1`, `sec5_modal_heading2`, `sec5_modal_heading3`, `sec5_modal_heading4`, `sec5_modal_heading5`, `sec5_modal_heading6`, `sec5_modal_heading7`, `sec5_modal_heading8`, `sec5_modal_img1`, `sec5_modal_img2`, `sec5_modal_img3`, `sec5_modal_img4`, `sec5_modal_img5`, `sec5_modal_img6`, `sec5_modal_img7`, `sec5_modal_img8`, `sec6_title`, `sec6_desc`, `sec6_review1`, `sec6_review2`, `sec6_review3`, `sec7_title`, `sec7_main`, `sec7_jsondata`) VALUES
(1, 'public/uploads/172255680055869', 'public/uploads/172255680044080', 'public/uploads/172255680025596', 'WELCOME TO GLOBAL SHIPPERS RWANDA', 'SHIPMENT MAKES IT EASY!', 'STREAMLINE SHOPPING EXPERIENCE', 'Navigate The World Of Shipping With Ease', 'Ship Internationally, brands you Love!', 'Experience Enhanced Shipping Savings', 'Optimize your international shipping experience with our package shipping process at significant costs', 'It is the fastest, easiest, and most affordable way to ship internationally. ', 'Receive a single package containing all your purchases, shipped to you as swiftly and efficiently as possible', 'ABOUT US', 'Welcome to Global Shippers Rwanda', ' Global Shippers Rwanda is your trusted partner to shop from the top brands in different countries like the USA, China, India, Turkey, Japan, Germany, and Rwanda and save on tax. As the top shipping company, we provide your personal address so that you can shop tax-free from your trusted online brands like Amazon, Walmart, Gap, John Lewis, Boots, ASOS, and other platforms and get your shipment delivered to your global address.', 'public/uploads/172255680053149', '<ul>\r\n	<li>\r\n	<h5>Get your local address</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Visit your trusted online shopping portal</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Add products to the cart</h5>\r\n	</li>\r\n</ul>\r\n', 'https://youtu.be/9xwazD5SyVg', 'Free US and UK shipping addresses', 'Low shipping rates with TruePrice™ upfront pricing', 'Save up to 80% with package bundling', 'Shop US sales tax-free', '6 million members served worldwide', 'HOW IT\'S WORKS', 'Breakdown the Shipping Process', 'Sign up for FREE', 0, 'Start by contacting us for a personalized quote based on your shipping needs and delivery requirements.', 'Ship to GSR', 'fas fa-truck fa-4x text-primary', ' Once you\'ve received your quote and decided to move forward, we\'ll assist you in booking your shipment.', 'Manage Packages', 'fas fa-box-open fa-4x text-primary', 'This involves providing necessary details such as pickup/delivery locations, cargo dimensions.', 'Ship Home!', 'fas fa-laptop-house fa-4x text-primary', 'your shipment will be delivered to its destination according to the agreed-upon schedule.', 'WHY CHOOSE US', 'Reliability and Trustworthiness in Delivering Shipments', 'public/uploads/172255680077902', 'Expertise matters in international shipping, GSR’s got it!', 'In-depth knowledge allows you to navigate complex logistics challenges and provide tailored solutions to your customers.', '<ul>\r\n	<li>\r\n	<h5>Low Carrier Rates</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Secure Packing</h5>\r\n	</li>\r\n	<li>\r\n	<h5>24/7 Customer Support</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Hassle-free Shop &amp; Ship</h5>\r\n	</li>\r\n</ul>\r\n', 'Access U.S. retailers from anywhere in the world', 'public/uploads/172255680050068', 'Reassure customers that they can trust Global Shippers Rwanda to deliver on its promises and prioritize their needs above all.', '<ul>\r\n	<li>\r\n	<h5>No Sales Tax</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Real-time order tracking</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Multi-carrier options</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Shopping assistance</h5>\r\n	</li>\r\n</ul>\r\n', 'The package forwarder who gets the job done right', 'public/uploads/172255680077562', 'Our commitment to innovation translates into tangible benefits for your customers, such as faster delivery times or reduced costs.', '<ul>\r\n	<li>\r\n	<h5>Manage your packages</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Save money by consolidating items</h5>\r\n	</li>\r\n	<li>\r\n	<h5>Pay for the shipping fees online</h5>\r\n	</li>\r\n</ul>\r\n', 'TRENDING NOW', 'Browse Deals', 'Positive experiences speak for themselves', 'public/uploads/172255680020027', 'public/uploads/172255680012099', 'public/uploads/172255680062109', 'public/uploads/172255680059427', 'public/uploads/172255680049520', 'public/uploads/172255680054168', 'public/uploads/172255680056397', 'public/uploads/172255680012998', 'amazon.com', 'alibaba.com', 'walmart.com', 'ebay.com', 'apple.com', 'etsy.com', 'target.com', 'bestbuy.com', 'Browse Deals', 'Browse Deals', 'Browse Deals', 'Browse Deals', 'Browse Deals', 'Browse Deals', 'Browse Deals', 'Browse Deals', 'The everything store! Amazon boasts the widest selection of products imaginable, from household essentials to electronics, clothing, and even groceries. Their one-stop-shop convenience and Prime membership benefits (including fast shipping and streaming services) make them a popular choice.', 'Calling all business buyers! Alibaba is a global marketplace specializing in wholesale goods and connecting businesses with manufacturers. With their vast network of suppliers, you can source products in bulk at competitive prices.', 'Known for their everyday low prices, Walmart offers a wide range of products for your daily needs. From groceries and home goods to electronics and apparel, they\'re a budget-friendly option for almost everything on your shopping list.', 'Calling all treasure hunters! eBay is a massive online auction and marketplace where you can find a unique mix of new and used items. Score one-of-a-kind finds, vintage collectibles, or grab great deals on electronics and more.', 'For the tech-savvy shopper, Apple offers a premium selection of their own design and innovation. Their user-friendly online store lets you browse the latest iPhones, iPads, Macs, and Apple accessories, with seamless integration for existing Apple users.', 'The land of handmade crafts! Etsy is a global online marketplace overflowing with unique, handmade, and vintage goods. Support small businesses and artisans while finding one-of-a-kind treasures for your home, wardrobe, or gift-giving needs.', 'Style on a budget! Target offers a trendy mix of clothing, home goods, and everyday essentials, all with their signature bullseye style. They frequently run sales and promotions, making it a great place to find fashionable items at affordable prices.', 'The electronics haven! Best Buy is your go-to for anything tech-related, from TVs, laptops, and gaming consoles to appliances and smart home devices. Their knowledgeable staff (both online and in-store) can help you find the perfect tech for your needs.', 'Amazon', 'Alibaba', 'Walmart', 'eBay', 'Apple', 'Etsy', 'Target', 'BestBuy', 'public/uploads/172255680040959', 'public/uploads/172255680098610', 'public/uploads/172255680058193', 'public/uploads/172255680094221', 'public/uploads/172255680082029', 'public/uploads/172255680095789', 'public/uploads/172255680025444', 'public/uploads/172255680085816', 'TESTIMONIAL', 'What Our Clients Say!', 'I order Wacom Tablet with them, They buy, ship, and deliver it  from Amazon on time.They handle  custom and taxing which another heavy lifting on your behalf.Strongly recommended  if you  looking for high quality products  from USA market.  ', '  This is a highly recommended service provider. They have very good and professional customer support. I got my package delivered to my address in just 12 days in perfect condition. I would surely order more through Global Shippers Rwanda. ', '   Excellent customer service. All my orders arrived on time and in good condition. And the quick updates on whatsApp is prompt. Thank you Global Shippers Rwanda. Looking forward to more orders... ', 'WHY CHOOSE US', 'Shop any U.S. retailer', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hi', '', '', '', 'hi', '', '', '', 'hello', '', '', '', '', '', '', '', '', '', '', '', 'amazon', 'apple', 'bestbuy', 'estay', 'target', 'ebay', 'alibaba', 'hi', 'this', 'is', 'test', 'data', 'for', 'cms', 'img', 'img', '', '', '', '', '', '', '', '', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'img', 'image', 'message', 'msg', 'msg', 'reviews ', 'remember ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_howitworks_sec1`
--

CREATE TABLE `gsr_howitworks_sec1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `details` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_howitworks_sec1`
--

INSERT INTO `gsr_howitworks_sec1` (`id`, `title`, `details`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'How Tax-Free Shopping Works.', 'Get your order delivered to your home country without paying sales taxes in just 3 easy steps', '2024-06-15 07:05:43', '2024-06-19 08:54:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_howitworks_sec2`
--

CREATE TABLE `gsr_howitworks_sec2` (
  `id` int(11) NOT NULL,
  `imgpath` longtext NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `updateddate` datetime NOT NULL,
  `createddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_howitworks_sec2`
--

INSERT INTO `gsr_howitworks_sec2` (`id`, `imgpath`, `title`, `description`, `updateddate`, `createddate`, `isdelete`) VALUES
(1, 'public/uploads/172281600095199', 'Sign Up & Get Your Address', 'It begins with creating a free account with Global Shippers Rwanda. Once you have completed all the formalities with the required details, you get your address in selected countries like the USA, China, India, Turkey, Japan, Germany, and Rwanda to start shopping without paying taxes.', '0000-00-00 00:00:00', '2024-08-05 11:03:44', '0'),
(2, 'public/uploads/172281600071739', 'Shop & Delivery to Local Address', 'Explore a wide range of products available with the top online platforms like Amazon, Walmart, Gap, John Lewis, Boots, and ASOS to place your order. Once the product is received at our warehouse, we’ll notify you about the latest update.', '0000-00-00 00:00:00', '2024-08-05 11:04:06', '0'),
(3, 'public/uploads/172281600025395', 'Pick Your Shipping Partner', 'When we have your package at the warehouse, you can choose from different shipping service providers like DHL and FedEx to receive your order in your home country. You can consolidate multiple items to save on shipping costs.', '0000-00-00 00:00:00', '2024-08-05 11:04:21', '0'),
(12, 'public/uploads/172229760020856', 'hi', 'hello', '0000-00-00 00:00:00', '2024-07-30 08:01:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_plan`
--

CREATE TABLE `gsr_plan` (
  `plan_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `stripePlanId` varchar(40) NOT NULL,
  `plan_name` varchar(40) NOT NULL,
  `display_amount` float NOT NULL,
  `plan_amount` float NOT NULL,
  `currency` varchar(40) NOT NULL,
  `interval` enum('1','2') NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_plan`
--

INSERT INTO `gsr_plan` (`plan_id`, `user_id`, `stripePlanId`, `plan_name`, `display_amount`, `plan_amount`, `currency`, `interval`, `create_date`, `update_date`, `status`) VALUES
(1, '1', 'plan_PJrOs0mWdILNxH', 'Premium', 7.5, 750, 'usd', '1', '2024-01-05 09:15:11', '2024-01-05 09:15:11', '1'),
(2, '1', 'plan_PJsFdD5b9NXgXm', 'Premium', 9.5, 950, 'usd', '2', '2024-01-05 09:44:04', '2024-01-05 09:44:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_privacy`
--

CREATE TABLE `gsr_privacy` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `is_delete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_privacy`
--

INSERT INTO `gsr_privacy` (`id`, `description`, `createddate`, `updateddate`, `is_delete`) VALUES
(1, '<h1>Privacy Policy</h1>\r\n\r\n<p>Effective date: 06/09/2022</p>\r\n\r\n<p>This Privacy Policy includes important information about your personal data, and we encourage you to read it carefully.</p>\r\n\r\n<p>This document can be printed for reference by using the print command in the settings of any browser.</p>\r\n\r\n<p>Address: KN 72 St, Kigali, Rwanda</p>\r\n\r\n<p>Contact: globalshippersrwanda@gmail.com</p>\r\n\r\n<h2><strong>Who we are</strong></h2>\r\n\r\n<p>globalshipperswanda, (&quot;globalshipperswanda&quot;), provides logistics and assisted purchasing services to its customers, enabling international delivery of purchased products. globalshipperswanda services include product purchase, logistics, insurance, storage, re-packaging, package forwarding, freight, customs, tax, and Advisory Services, including market and use analysis, industry information, and promotional recommendations.</p>\r\n\r\n<p>globalshipperswanda provides domestic delivery, insurance, storage, repackaging, and international delivery of goods purchased. Delivery of products may be to our customer or to the person provided by our customer as the ship-to party. globalshipperswanda confirms that products can be shipped and also confirms that a &#39;ship-to&#39; party is not restricted from shipping by U.S. regulatory authorities.</p>\r\n\r\n<p>globalshipperswanda facilitates customs and tax associated with international delivery. An additional service offered is the &quot;personal shopper&quot; program, where globalshipperswanda facilitates the actual purchase of a product that the end-user client is unable to purchase directly from the retailer. Data is collected directly from the customer via www.globalshipperswanda.com</p>\r\n\r\n<p>globalshipperswanda maintains corporate offices and warehouses in the United States. globalshipperswanda utilizes third-party processors to provide services, including logistics, payments, insurance, and communication. Local regulations for customs and taxes require the sharing of personal data with regulatory authorities.</p>\r\n\r\n<h2><strong>Types of Data collected</strong></h2>\r\n\r\n<p>Among the types of Personal Data that this website collects, by itself or through third parties, there are tracker; usage data; payment info; first name; last name; email address; phone number; billing address; scroll-to-page interactions; clicks; country; custom events.</p>\r\n\r\n<p>Complete details on each type of Personal Data collected are provided in the dedicated sections of this privacy policy or by specific explanation texts displayed prior to the Data collection.</p>\r\n\r\n<p>Personal Data may be freely provided by the User, or, in case of Usage Data, collected automatically when using this website. Unless specified otherwise, all Data requested by this website is mandatory and failure to provide this Data may make it impossible for this Website to provide its services. In cases where this website specifically states that some Data is not mandatory, Users are free not to communicate this Data without consequences to the availability or the functioning of the Service.</p>\r\n\r\n<p>Users who are uncertain about which Personal Data is mandatory are welcome to contact globalshipperswanda. Any use of Cookies &ndash; or of other tracking tools &ndash; by this Website or by the globalshipperswanda of third-party services used by this Website serves the purpose of providing the Service required by the user, in addition to any other purposes described in the present document and in the Cookie Policy, if available.</p>\r\n\r\n<p>Users are responsible for any third-party Personal Data obtained, published, or shared through this website and confirm that they have the third party&#39;s consent to provide the data to globalshipperswanda.</p>\r\n\r\n<h2><strong>Mode and place of processing the Data</strong></h2>\r\n\r\n<p><strong>Methods of processing</strong></p>\r\n\r\n<p>The globalshipperswanda takes appropriate security measures to prevent unauthorized access, disclosure, modification, or unauthorized destruction of the Data.</p>\r\n\r\n<p>The Data processing is carried out using computers and/or IT enabled tools, following organizational procedures and modes strictly related to the purposes indicated. In addition to the globalshipperswanda, in some cases, the Data may be accessible to certain types of persons in charge, involved with the operation of this Website (administration, sales, marketing, legal, system administration) or external parties (such as third-party technical service providers, mail carriers, hosting providers, IT companies, communications agencies) appointed, if necessary, as Data Processors by the globalshipperswanda. The updated list of these parties may be requested from the globalshipperswanda at any time.</p>\r\n\r\n<p><strong>Legal basis of processing</strong></p>\r\n\r\n<p>The globalshipperswanda may process Personal Data relating to Users if one of the following applies:</p>\r\n\r\n<ul>\r\n	<li>Users have given their consent for one or more specific purposes. Note: Under some legislations the globalshipperswanda may be allowed to process Personal Data until the User objects to such processing (&ldquo;opt-out&rdquo;), without having to rely on consent or any other of the following legal bases. This, however, does not apply, whenever the processing of Personal Data is subject to European data protection law;</li>\r\n	<li>provision of Data is necessary for the performance of an agreement with the User and/or for any pre-contractual obligations thereof;</li>\r\n	<li>processing is necessary for compliance with a legal obligation to which the globalshipperswanda is subject;</li>\r\n	<li>processing is related to a task that is carried out in the public interest or in the exercise of official authority vested in the globalshipperswanda;</li>\r\n	<li>processing is necessary for the purposes of the legitimate interests pursued by the globalshipperswanda or by a third party.</li>\r\n</ul>\r\n\r\n<p>In any case, the globalshipperswanda will gladly help to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Data is a statutory or contractual requirement, or a requirement necessary to enter into a contract.</p>\r\n\r\n<p><strong>Place</strong></p>\r\n\r\n<p>The Data is processed at the globalshipperswanda&#39;s operating offices and in any other places where the parties involved in the processing are located.</p>\r\n\r\n<p>Depending on the User&#39;s location, data transfers may involve transferring the User&#39;s Data to a country other than their own. To find out more about the place of processing of such transferred Data, Users can check the section containing details about the processing of Personal Data.</p>\r\n\r\n<p>Users are also entitled to learn about the legal basis of Data transfers to a country outside the European Union or to any international organization governed by public international law or set up by two or more countries, such as the UN, and about the security measures taken by the globalshipperswanda to safeguard their Data.</p>\r\n\r\n<p>If any such transfer takes place, Users can find out more by checking the relevant sections of this document or inquire with the globalshipperswanda using the information provided in the contact section.</p>\r\n\r\n<p><strong>Retention time</strong></p>\r\n\r\n<p>Personal Data shall be processed and stored for as long as required by the purpose they have been collected for.</p>\r\n\r\n<p>Therefore:</p>\r\n\r\n<ul>\r\n	<li>Personal Data collected for purposes related to the performance of a contract between the globalshipperswanda and the User shall be retained until such contract has been fully performed.</li>\r\n	<li>Personal Data collected for the purposes of the globalshipperswanda&rsquo;s legitimate interests shall be retained as long as needed to fulfill such purposes. Users may find specific information regarding the legitimate interests pursued by the globalshipperswanda within the relevant sections of this document or by contacting the globalshipperswanda.</li>\r\n</ul>\r\n\r\n<p>The globalshipperswanda may be allowed to retain Personal Data for a longer period whenever the User has given consent to such processing, as long as such consent is not withdrawn. Furthermore, the globalshipperswanda may be obliged to retain Personal Data for a longer period whenever required to do so for the performance of a legal obligation or upon order of an authority.</p>\r\n\r\n<p>Once the retention period expires, Personal Data shall be deleted. Therefore, the right of access, the right to erasure, the right to rectification and the right to data portability cannot be enforced after expiration of the retention period.</p>\r\n\r\n<h2><strong>The purposes of processing</strong></h2>\r\n\r\n<p>The Data concerning the User is collected to allow the globalshipperswanda to provide its Service, comply with its legal obligations, respond to enforcement requests, protect its rights and interests (or those of its Users or third parties), detect any malicious or fraudulent activity, as well as the following: Analytics, Tag Management, Infrastructure monitoring, Handling payments and Heat mapping and session recording.</p>\r\n\r\n<p>For specific information about the Personal Data used for each purpose, the User may refer to the section &ldquo;Detailed information on the processing of Personal Data&rdquo;.</p>\r\n\r\n<h2><strong>Detailed information on the processing of Personal Data</strong></h2>\r\n\r\n<p>Personal Data is collected for the following purposes and using the following services:</p>\r\n\r\n<h2><strong>The rights of Users</strong></h2>\r\n\r\n<p>Users may exercise certain rights regarding their Data processed by the globalshipperswanda.</p>\r\n\r\n<p>In particular, Users have the right to do the following:</p>\r\n\r\n<ul>\r\n	<li><strong>Withdraw their consent at any time.</strong>&nbsp;Users have the right to withdraw consent where they have previously given their consent to the processing of their Personal Data.</li>\r\n	<li><strong>Object to processing of their Data.</strong>&nbsp;Users have the right to object to the processing of their Data if the processing is carried out on a legal basis other than consent. Further details are provided in the dedicated section below.</li>\r\n	<li><strong>Access their Data.</strong>&nbsp;Users have the right to learn if Data is being processed by the globalshipperswanda, obtain disclosure regarding certain aspects of the processing and obtain a copy of the Data undergoing processing.</li>\r\n	<li><strong>Verify and seek rectification.</strong>&nbsp;Users have the right to verify the accuracy of their Data and ask for it to be updated or corrected.</li>\r\n	<li><strong>Restrict the processing of their Data.</strong>&nbsp;Users have the right, under certain circumstances, to restrict the processing of their Data. In this case, the globalshipperswanda will not process their Data for any purpose other than storing it.</li>\r\n	<li><strong>Have their Personal Data deleted or otherwise removed.</strong>&nbsp;Users have the right, under certain circumstances, to obtain the erasure of their Data from the globalshipperswanda.</li>\r\n	<li><strong>Receive their Data and have it transferred to another controller.</strong>&nbsp;Users have the right to receive their Data in a structured, commonly used and machine readable format and, if technically feasible, to have it transmitted to another controller without any hindrance. This provision is applicable provided that the Data is processed by automated means and that the processing is based on the User&#39;s consent, on a contract which the User is part of or on pre-contractual obligations thereof.</li>\r\n	<li><strong>Lodge a complaint.</strong>&nbsp;Users have the right to bring a claim before their competent data protection authority.</li>\r\n</ul>\r\n\r\n<p><strong>Details about the right to object to processing</strong></p>\r\n\r\n<p>Where Personal Data is processed for a public interest, in the exercise of an official authority vested in the globalshipperswanda or for the purposes of the legitimate interests pursued by the globalshipperswanda, Users may object to such processing by providing a ground related to their particular situation to justify the objection.</p>\r\n\r\n<p>Users must know that, however, should their Personal Data be processed for direct marketing purposes, they can object to that processing at any time without providing any justification. To learn, whether the globalshipperswanda is processing Personal Data for direct marketing purposes, Users may refer to the relevant sections of this document.</p>\r\n\r\n<p><strong>How to exercise these rights</strong></p>\r\n\r\n<p>Any requests to exercise User rights can be directed to the globalshipperswanda through the contact details provided in this document. These requests can be exercised free of charge and will be addressed by the globalshipperswanda as early as possible and always within one month.</p>\r\n\r\n<h2><strong>Additional information about Data collection and processing</strong></h2>\r\n\r\n<p><strong>Legal action</strong></p>\r\n\r\n<p>The User&#39;s Personal Data may be used for legal purposes by the globalshipperswanda in Court or in the stages leading to possible legal action arising from improper use of this Website or the related Services.</p>\r\n\r\n<p>The User declares to be aware that the globalshipperswanda may be required to reveal personal data upon request of public authorities.</p>\r\n\r\n<p><strong>Additional information about User&#39;s Personal Data</strong></p>\r\n\r\n<p>In addition to the information contained in this privacy policy, this Website may provide the User with additional and contextual information concerning particular Services or the collection and processing of Personal Data upon request.</p>\r\n\r\n<p><strong>System logs and maintenance</strong></p>\r\n\r\n<p>For operation and maintenance purposes, this Website and any third-party services may collect files that record interaction with this Website (System logs) use other Personal Data (such as the IP Address) for this purpose.</p>\r\n\r\n<p><strong>Information not contained in this policy</strong></p>\r\n\r\n<p>More details concerning the collection or processing of Personal Data may be requested from the globalshipperswanda at any time. Please see the contact information at the beginning of this document.</p>\r\n\r\n<p><strong>How &ldquo;Do Not Track&rdquo; requests are handled</strong></p>\r\n\r\n<p>This Website does not support &ldquo;Do Not Track&rdquo; requests.</p>\r\n\r\n<p>To determine whether any of the third-party services it uses honor the &ldquo;Do Not Track&rdquo; requests, please read their privacy policies.</p>\r\n\r\n<p><strong>Changes to this privacy policy</strong></p>\r\n\r\n<p>The globalshipperswanda reserves the right to make changes to this privacy policy at any time by notifying its Users on this page and possibly within this Website and/or - as far as technically and legally feasible - sending a notice to Users via any contact information available to the globalshipperswanda. It is strongly recommended to check this page often, referring to the date of the last modification listed at the bottom.</p>\r\n\r\n<p>Should the changes affect processing activities performed on the basis of the User&rsquo;s consent, the globalshipperswanda shall collect new consent from the User, where required.</p>\r\n', '2024-07-23 08:16:44', '2024-07-23 08:16:44', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_restrictions_section1`
--

CREATE TABLE `gsr_restrictions_section1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `details` longtext NOT NULL,
  `banner` longtext NOT NULL,
  `isdeleted` enum('0','1') NOT NULL,
  `isupdated` enum('0','1') NOT NULL,
  `createddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updateddate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_restrictions_section1`
--

INSERT INTO `gsr_restrictions_section1` (`id`, `title`, `details`, `banner`, `isdeleted`, `isupdated`, `createddate`, `updateddate`) VALUES
(1, 'Prohibited and limited items', 'Review restricted items before ordering from the U.S.', 'public/uploads/171849600049802.jpg', '0', '0', '2024-06-16 12:46:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_restrictions_section2`
--

CREATE TABLE `gsr_restrictions_section2` (
  `id` int(11) NOT NULL,
  `imgpath` longtext NOT NULL,
  `sec2_title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `points` longtext NOT NULL,
  `createddate` longtext NOT NULL,
  `updateddate` longtext NOT NULL,
  `isdelete` enum('0','1') NOT NULL,
  `isupdate` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_restrictions_section2`
--

INSERT INTO `gsr_restrictions_section2` (`id`, `imgpath`, `sec2_title`, `description`, `points`, `createddate`, `updateddate`, `isdelete`, `isupdate`) VALUES
(8, 'https://globalshippersrwanda.com/assets/imgs/eccn.svg	', 'ECCN Regulated', 'Items requiring an ECCN (Export Control Classification Number) Items requiring an export license from the Department of Commerce, and dual-use items found on the Commerce Control List (CCL) often relating to navigation and avionics, computer parts, telecommunication devices, etc.', 'Large microprocessors, Aircraft parts ,Aerospace parts ,Antennas', '2024-06-18 05:05:09', '', '0', '0'),
(2, 'https://globalshippersrwanda.com/assets/imgs/Aerosols.svg', 'Aerosols', 'Must be shipped via DHL or UPS. Limit is 500 mL per bottle, and max weight per package of 30 kg. Area restrictions may apply. The Dangerous Goods Fee is $95.', 'Hair Spray,Shaving Cream,Deodorant,', '2024-06-16 13:11:38', '', '0', '0'),
(3, 'https://globalshippersrwanda.com/assets/imgs/political.svg	', 'Political', 'Printed, audio, or visual material relating to the government or the public affairs of a country.', 'Books\r\nPamphlets\r\nAudio recordings\r\nVideo recordings', '2024-06-16 13:11:38', '', '0', '0'),
(4, 'https://globalshippersrwanda.com/assets/imgs/jewelry.svg	', 'Jewelry', 'Personal ornaments, such as necklaces, rings, or bracelets, that are typically made from or contain jewels and precious metal', '', '2024-06-16 13:11:38', '', '0', '0'),
(5, 'https://globalshippersrwanda.com/assets/imgs/agriculture.svg	', 'Agriculture', 'Items grown on farms or in gardens or items used when cultivating soil; planting; raising, and harvesting plants, crops, fruits and vegetables.', 'Soil\r\nGrain\r\nFeed\r\nMowers\r\nTractors', '2024-06-16 13:11:38', '', '0', '0'),
(6, 'https://globalshippersrwanda.com/assets/imgs/ebikes.svg	', 'Electric Bikes over 100Wh', 'A personal transporter, electric scooter, or battery-powered bicycle composed of two wheels held in a frame, one behind the other, is powered by a lithium battery.', 'Electric bikes\r\nE-Scooters', '2024-06-16 13:11:38', '', '0', '0'),
(7, 'https://globalshippersrwanda.com/assets/imgs/ivory.svg', 'Ivory', 'A hard, creamy-white substance composing the main part of the tusks of an elephant, walrus, or narwhal, often (especially formerly) used to make ornaments and other articles. Tusk, Horns or Teeth from Elephants, Hippopotamus, Sperm Whales, Killer Whales, Narwhals, Wart Hog, and Elk', 'Statues\r\nBoxes\r\nRaw ivory', '2024-06-16 13:11:38', '', '0', '0'),
(9, 'https://globalshippersrwanda.com/assets/imgs/shipping.svg	', 'Shipping Pornography', 'Printed or visual material containing the explicit description or display of sexual organs or activity', 'Books,  Magazines, Videos,Pictures', '2024-06-18 05:05:09', '', '0', '0'),
(10, 'https://globalshippersrwanda.com/assets/imgs/alcohol.svg	', 'Alcohol', 'Alcohol, beer and wine is prohibited to ship on all carriers', 'Alcohol beverages', '2024-06-18 05:05:09', '', '0', '0'),
(11, 'https://globalshippersrwanda.com/assets/imgs/engines.svg	', 'Engines', 'Internal combustion engines, gas powered engines, like the kind used in a motor vehicle or other machine.', 'Internal combustion engine', '2024-06-18 05:05:09', '', '0', '0'),
(12, 'https://globalshippersrwanda.com/assets/imgs/leadacid.svg	', 'Lead Acid Batteries', 'Batteries that utilize lead and acid cores, such as car batteries.', 'Spillable - Auto Batteries', '2024-06-18 05:05:09', '', '0', '0'),
(13, 'https://globalshippersrwanda.com/assets/imgs/drugs.svg	', 'Prescription Drugs', 'A pharmaceutical drug that legally requires a medical prescription from a doctor to be dispensed', 'Prescription drugs  Viagra Steroids', '2024-06-18 05:14:52', '', '0', '0'),
(14, 'https://globalshippersrwanda.com/assets/imgs/animal.svg	', 'Animals', 'Animals or parts of animals', 'Live animals,Dead animals,Animal parts ,Animal tissue,Animal furs,Animal skin,Live fish,Fungi', '2024-06-18 05:14:52', '', '0', '0'),
(15, 'https://globalshippersrwanda.com/assets/imgs/explosives.svg	', 'Explosives', 'Items susceptible to explosion or combustion', 'Class 1 dangerous goods,\r\nFlares,Gun powder,\r\nMatches Fireworks ,\r\nFlashbangs,Smoke grenades,\r\nAmmunition/cartridges,Detonators,\r\nFuses,Primers,Air bag inflators', '2024-06-18 05:14:52', '', '0', '0'),
(16, 'https://globalshippersrwanda.com/assets/imgs/liquids.svg	', 'Liquids', 'A substance having a consistency like that of water or oil.', 'All liquids', '2024-06-18 05:14:52', '', '0', '0'),
(17, 'https://globalshippersrwanda.com/assets/imgs/pressurized.svg	', 'Pressurized Canisters', 'Products packaged in containers using pressurized gas. Refer to the Material Safety Data Sheet from the manufacturer to determine if the product can indeed be shipped.', 'Fire extinguishers,Compressed gas,Gas cartridges,Helium,Propane,Car shock absorbers', '2024-06-18 05:14:52', '', '0', '0'),
(18, 'https://globalshippersrwanda.com/assets/imgs/art.svg	', 'Art and Antiquities', 'Works of art, collectible objects, antiques of high value or considerable age.', 'Artwork, Collectibles, etc... ,Figurines,Paintings or Sculptures\r\nMemorabilia', '2024-06-18 05:14:52', '', '0', '0'),
(19, 'https://globalshippersrwanda.com/assets/imgs/lithium.svg	', 'Lithium Batteries (Packed)', 'Lithium Ion, Lithium Polymer and Lithium Metal batteries', 'Lithium batteries packed with equipment (such as power tools)\r\nBatteries contained inside a device (such as laptops or cell phones)', '2024-06-18 05:14:52', '', '0', '0'),
(20, 'https://globalshippersrwanda.com/assets/imgs/radioactive.svg	', 'Radioactive Material', 'Items emitting or relating to the emission of ionizing radiation or particles Items will be marked with a radioactive placard.', 'Radioactive material,Medical isotopes,Density gauges', '2024-06-18 05:14:52', '', '0', '0'),
(21, 'https://globalshippersrwanda.com/assets/imgs/bio.svg	', 'Biohazards', 'Biological substances that may contain contagions or other hazardous substances.', 'Bodily fluids\r\nCell cultures\r\nLab reagents,Medical specimens,Tissue samples,Tear gas,Human remains', '2024-06-18 05:14:52', '', '0', '0'),
(22, 'https://globalshippersrwanda.com/assets/imgs/fertilizers.svg	', 'Fertilizers and Pesticides', 'Chemical or organic products designed for use as fertilizer or pesticides Refer to the Material Safety Data Sheet from the manufacturer to determine if the product can indeed be shipped.', 'Fertilizers,Fungicides,\r\nHerbicides,Insecticide,\r\nRodenticides,Sodium Nitrates,\r\nAmmonium Sulphate,\r\nOrganic nitrogenous fertilizers', '2024-06-18 05:28:37', '', '0', '0'),
(23, 'https://globalshippersrwanda.com/assets/imgs/loose.svg	', 'Loose Lithium Batteries', 'Lithium ion, lithium polymer, lithium metal batteries and lithium power banks not installed in devices are prohibited to ship', 'Lithium batteries not packed with equipment,Lithium power banks,Loose or spare lithium batteries,Lithium coin cell batteries,Battery packs', '2024-06-18 05:28:37', '', '0', '0'),
(24, 'https://globalshippersrwanda.com/assets/imgs/soil.svg	', 'Soil', 'Soil or soil enhancing products.', 'Dirt,Mud,Peat,Sand,Clay', '2024-06-18 05:28:37', '', '0', '0'),
(25, 'https://globalshippersrwanda.com/assets/imgs/cbd.svg	', 'Cannabidiol ( CBD )', 'Cannabidiol, CBD oil, CBD capsules and other CBD products. A derivative product of the marijuana plant (Cannabis sativa L). Whether or not containing THC.', 'CBD Oil', '2024-06-18 05:28:37', '', '0', '0'),
(26, 'https://globalshippersrwanda.com/assets/imgs/flamm.svg	', 'Flammable Cosmetics', 'Cosmetics, hair products, toiletries, and beauty supplies such as makeup and face cream.', 'Flammable Hair Spray,Flammable Shaving Cream,Flammable Deodorant,Hand Sanitizer', '2024-06-18 05:28:37', '', '0', '0'),
(27, 'https://globalshippersrwanda.com/assets/imgs/loosep.svg	', 'Loose Precious Stones', 'Loose polished or unpolished minerals or stones of high value. Usually used in jewelry or ornaments.', 'Loose diamonds,Loose gems,Loose rubys,Loose sapphires,Loose emeralds', '2024-06-18 05:28:37', '', '0', '0'),
(28, 'https://globalshippersrwanda.com/assets/imgs/stamp.svg	', 'Stamps', 'US Postage Stamps. For collectible stamps please see Art and Antiques.', 'Uncancelled/unused US postage stamps', '2024-06-18 05:28:37', '', '0', '0'),
(29, 'https://globalshippersrwanda.com/assets/imgs/cell.svg	', 'Cell Phone', 'Mobile phones , smartphones, portable telephone that use wireless cellular technology to send and receive phone signals and other data.', 'Cell Phone\r\nMust be packed in special packaging such as a rigid container.', '2024-06-18 05:28:37', '', '0', '0'),
(30, 'https://globalshippersrwanda.com/assets/imgs/firearms.svg	', 'Firearms', 'Items related to guns or other devices designed to inflict damage by launching one or more projectiles at a high speed', 'Air guns,Ammunition,Gunpowder,Paintball guns and balls,Magazines,Scopes/sights,Stun guns,Tasers,Gun parts,Replica firearms,Firearm related products,Gunsmithing equipment,Reloading devices,Imitation firearms', '2024-06-18 05:28:37', '', '0', '0'),
(31, 'https://globalshippersrwanda.com/assets/imgs/means.svg	', 'Means of Payment', 'Items used as currency or for payment', 'Currency Coins,Stamps,Gold bullion,Money instruments,Cash,Credit cards,Gambling devices,Lottery tickets,Blank checks,Tokens,Bonds,Gift cards', '2024-06-18 05:28:37', '', '0', '0'),
(32, 'https://globalshippersrwanda.com/assets/imgs/tactical.svg	', 'Tactical Equipment', 'Military or Law Enforcement equipment and weaponry.', 'Body armor,Gas masks,Hand cuffs,Lock pickers,Night vision / Infrared goggles,Rifle scopes,Military and law enforcement items,Thermal imaging,Any item regulated by CBP, ITAR, or the US Departments of Commerce, State or Treasury,Kevlar', '2024-06-18 05:28:37', '', '0', '0'),
(33, 'https://globalshippersrwanda.com/assets/imgs/chemical.svg	', 'Chemicals', 'Raw chemicals but also some adhesives, pastes, sealants, cosmetics like peroxide, precursors for chemical weapons, etc... Refer to the Material Safety Data Sheet from the manufacturer to determine if the product can ship.', 'Dry ice,Adhesives,Sealants Precursors to chemical weapons,Peroxide,Crazy glue adhesive,Disinfectants', '2024-06-18 05:28:37', '', '0', '0'),
(34, 'https://globalshippersrwanda.com/assets/imgs/flammable.svg	', 'Flammable/Combustible', 'Items are capable of being easily ignited and of burning quickly. Refer to the Material Safety Data Sheet(MSDS) from the manufacturer to determine if the product is indeed flammable or combustible.', 'Fuel,Matches,Lighters,Cellulose nitrate film Resins', '2024-06-18 05:48:01', '', '0', '0'),
(35, 'https://globalshippersrwanda.com/assets/imgs/medical.svg	', 'Medical Devices', 'Items used for aiding in the diagnosis, monitoring, or treatment of medical conditions. Medical/Dental equipment and supplies', 'Prescription devices,Dental equipment,Veterinary equipment', '2024-06-18 05:48:01', '', '0', '0'),
(36, 'https://globalshippersrwanda.com/assets/imgs/tacticalk.svg	', 'Tactical Knives', 'Knives that are intended for use as weapons', 'Butterfly knives,Switchblades,Concealable blades,Daggers,Push knives,Ballistic knives,Bayonets,Stabbing weapons,Bayo knife', '2024-06-18 05:48:01', '', '0', '0'),
(37, 'https://globalshippersrwanda.com/assets/imgs/cor.svg	', 'Corrosive', 'Acids or bases that can react and cause the corroding or eating away of a substance. Refer to the Material Safety Data Sheet from the manufacturer to determine if the product is corrosive or not.', 'Hydrochloric Acid,Sulfuric Acid,Lye,Some cleaners,Cosmetic derma-peel,Battery fluid,Dyes,Iodine', '2024-06-18 05:48:01', '', '0', '0'),
(38, 'https://globalshippersrwanda.com/assets/imgs/gambling.svg	', 'Gambling', 'Devices used in gambling or game of chance activities', 'Gambling devices,Poker chips,Slot machines,Roulette wheels,Tokens', '2024-06-18 05:48:01', '', '0', '0'),
(39, 'https://globalshippersrwanda.com/assets/imgs/perfume.svg	', 'Perfume - Cologne', 'Perfumes, colognes, and fragrant or aromatic liquids are typically made from essential oils or extracts of flowers and spices and used to impart a pleasant smell.', 'Perfume/Cologne,Body spray,Essential oils\r\nLimit is 500 mL per bottle, and max weight per package of 30 kg. The Dangerous Goods Fee is $95', '2024-06-18 05:48:01', '', '0', '0'),
(40, 'https://globalshippersrwanda.com/assets/imgs/tob.svg	', 'Tobacco and Nicotine Products', 'Any product prepared from the leaves of the tobacco plant by curing them Nicotine in any form', 'Tobacco Nicotine products,Cigars and cigarettes,Chewing tobacco,Tobacco wrapping papers,Nicotine patches,Liquid nicotine', '2024-06-18 05:48:01', '', '0', '0'),
(41, 'https://globalshippersrwanda.com/assets/imgs/count.svg	', 'Counterfeit', 'Items not produced by the original manufacturer in violation of copyright and trademark laws', 'Knock-offs Pirated Goods, Imitation products', '2024-06-18 05:48:01', '', '0', '0'),
(42, 'https://globalshippersrwanda.com/assets/imgs/haz.svg	', 'Hazardous Material & Dangerous Goods', 'Any item or agent (biological, chemical, radiological, and/or physical), which has the potential to cause harm to humans, animals, or the environment. Any item classed as Dangerous Goods. Refer to the Material Safety Data Sheet from the manufacturer to determine if the product can indeed ship.', 'Fire Extinguishers Antifreeze Chemical Strippers,Chlorine Bleach,Drain Cleaners Anything regulated by DOT as hazardous Fertilizer', '2024-06-18 05:48:01', '', '0', '0'),
(43, 'https://globalshippersrwanda.com/assets/imgs/peri.svg	', 'Perishable Food', 'Food and foodstuffs with a limited shelf life or requiring refrigeration/freezing to avoid spoilage.', 'Fruits,Vegetables,Meat,Sausage,Caviar', '2024-06-18 05:48:01', '', '0', '0'),
(44, 'https://globalshippersrwanda.com/assets/imgs/auto.svg	', 'Auto Parts', 'Used, aftermarket, or second-hand item that is a component of an automobile or motorcycle.', 'License plates', '2024-06-18 05:48:01', '', '0', '0'),
(45, 'https://globalshippersrwanda.com/assets/imgs/drugcont.svg	', 'Drug Contraband', 'Drug-related items are restricted or banned by US law.', 'Narcotics,Illegal drugs,Drug paraphernalia,\r\nDrug devices,CBD Marijuana', '2024-06-18 05:48:01', '', '0', '0'),
(46, 'https://globalshippersrwanda.com/assets/imgs/plants.svg	', 'Plants', 'A young tree, vine, shrub, or herb planted or suitable for planting. Dead or Dried Plants', 'Flowers,Seeds,Soil,Roots,Grass,Hay,Logs,Pine cones,Fungus,Raw wood/lumber', '2024-06-18 05:48:01', '', '0', '0'),
(47, 'https://globalshippersrwanda.com/assets/imgs/weapons.svg	', 'Weapons', 'A weapon, arm, or amament is any device used with intent to inflict damage or harm to living creatures, structures, or systems.', 'Crossbows,Clubs / Billy Clubs,Pepper Spray,Firearms and Firearm Parts,Knives and stabbing weapons,Tasers', '2024-06-18 05:48:01', '', '0', '0'),
(48, 'https://globalshippersrwanda.com/assets/imgs/ejuice.svg	', 'E-Juice', 'Drug-related items restricted or banned by US law', 'E-Liquid\r\nE-Juice', '2024-06-18 05:48:01', '', '0', '0'),
(49, 'https://globalshippersrwanda.com/assets/imgs/hover.svg	', 'Hoverboards', 'A self-balancing scooter (also self-balancing board) is a self-balancing personal transporter consisting of two motorized wheels connected to a pair of articulated pads on which the rider places their feet.', 'Hoverboards', '2024-06-18 05:48:01', '', '1', '0'),
(50, 'https://globalshippersrwanda.com/assets/imgs/poison.svg	', 'Poison', 'A substance that is capable of causing the illness or death of a living organism when introduced or absorbed.', 'Class 6.1 and 6.2 items\r\nNicotine\r\nRat poison\r\nToxic materials', '2024-06-18 05:48:01', '', '0', '0'),
(51, 'https://globalshippersrwanda.com/assets/imgs/Aerosols.svg	', 'Drone', 'All drones, and drone parts.', 'Drones\r\nDrone parts.', '2024-06-18 05:48:01', '', '1', '0'),
(52, 'public/uploads/172229760080270', 'Human Remains', 'Bodies and / or ashes', 'Ashes', '2024-06-18 05:48:01', '2024-07-30 11:35:38', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_shipment`
--

CREATE TABLE `gsr_shipment` (
  `id` int(11) NOT NULL,
  `shipping_carrier` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `tracking_number` varchar(40) NOT NULL,
  `tracking_url` varchar(80) NOT NULL,
  `shipping` varchar(40) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_shipment`
--

INSERT INTO `gsr_shipment` (`id`, `shipping_carrier`, `order_id`, `tracking_number`, `tracking_url`, `shipping`, `is_deleted`, `date_created`, `update_date`) VALUES
(44, '123', '488337', '123', 'url', 'consolidation', '0', '2024-06-29 08:55:26', '2024-06-29 12:55:26'),
(43, 'FEDEX', '4758935', '45200', 'http://fast.fedex.com', 'assisted', '0', '2024-06-29 08:00:40', '2024-06-29 12:00:40'),
(2, 'DHL', '381746', '1556166356', 'https://mydhl.express.dhl/rw/en/tracking.html#/results?id=1556166356', 'Consolidation', '0', '2024-06-28 05:13:37', '2024-06-28 09:13:37'),
(52, '123', '709538', '1235556', 'url', 'assisted', '0', '2024-07-01 14:15:10', '0000-00-00 00:00:00'),
(36, 'GoCart', '25028010', '8852150-GC', 'https://gocart.in', 'international', '0', '2024-06-29 07:19:27', '0000-00-00 00:00:00'),
(29, 'Fedex', '290579', '98754210', 'https://www.fedex.com/testing-url', 'consolidation', '0', '2024-06-28 11:20:51', '0000-00-00 00:00:00'),
(47, 'FEDEX-ASNS', '4758935', '4500152', 'https://globalshippersrwanda.com/', 'assisted', '0', '2024-06-29 16:56:14', '0000-00-00 00:00:00'),
(46, 'FEDEX', '267869', 'FEDEX-US-00891', 'https://www.gofedex.com/', 'consolidation', '0', '2024-06-29 16:48:06', '0000-00-00 00:00:00'),
(12, 'carreir123', '69566460', '123778', 'url', 'international', '0', '2024-06-27 23:58:07', '2024-06-28 03:58:07'),
(14, '123', '69566460', '123778', 'url', 'international', '0', '2024-06-29 10:07:13', '2024-06-29 14:07:13'),
(15, 'DHL', '381746', '1556166356', 'https://mydhl.express.dhl/rw/en/tracking.html#/results?id=1556166356', 'consolidation', '0', '2024-06-28 05:13:37', '2024-06-28 09:13:37'),
(51, '123', '210012', '1235556', '100', 'consolidation', '0', '2024-07-01 14:01:15', '0000-00-00 00:00:00'),
(45, 'shipping', '69566460', '1234567890', 'url', 'international', '0', '2024-06-29 14:23:51', '0000-00-00 00:00:00'),
(17, '1231234', '878732', '12322', 'url2', 'consolidation', '0', '2024-06-28 00:20:55', '2024-06-28 04:20:55'),
(32, '123', '8028532', '1235556', 'ut', 'international', '0', '2024-06-28 14:07:17', '0000-00-00 00:00:00'),
(21, 'carreir123', '8363297', '1234', 'url', 'assisted', '0', '2024-06-29 09:32:59', '2024-06-29 13:32:59'),
(22, '123', '3792893', '1235556', 'url', 'assisted', '0', '2024-06-28 07:47:35', '0000-00-00 00:00:00'),
(42, 'FEDEX', '4758935', '45200', 'http://fast.fedex.com', 'assisted', '0', '2024-06-29 08:00:40', '2024-06-29 12:00:40'),
(30, '123123', '8028532', '123', 'https://globalshippersrwanda.com/Admin/international-edit-shipment/8028532', 'international', '0', '2024-06-28 10:06:31', '2024-06-28 14:06:31'),
(27, '123', '8363297', '1235556', 'url', 'assisted', '0', '2024-06-28 08:04:15', '0000-00-00 00:00:00'),
(31, '123', '890665', '1235556', 'url', 'assisted', '0', '2024-06-28 13:16:52', '0000-00-00 00:00:00'),
(39, 'IN-FEDEX', '25028010', '458214521', 'https://globalshippersrwanda.com/international', 'international', '0', '2024-06-29 08:32:51', '0000-00-00 00:00:00'),
(41, 'FEDEX', '4758935', '45200', 'http://fast.fedex.com', 'assisted', '0', '2024-06-29 08:00:40', '2024-06-29 12:00:40'),
(40, '123', '415004', '1235556', 'url', 'consolidation', '0', '2024-06-29 10:30:47', '0000-00-00 00:00:00'),
(48, 'FEDEX-0012', '25028010', '1245210320', 'http://shipment.data.com', 'international', '0', '2024-06-29 17:01:15', '0000-00-00 00:00:00'),
(49, '123', '342128', '1235556', 'url', 'consolidation', '0', '2024-06-30 04:56:04', '0000-00-00 00:00:00'),
(50, 'FedEx ', '5932329', '12345', 'url', 'assisted', '0', '2024-06-30 12:54:24', '0000-00-00 00:00:00'),
(53, 'FedEx ', '18863085', '1235556', 'url', 'international', '0', '2024-07-03 07:58:45', '2024-07-03 11:58:44'),
(56, 'FedEx ', '37926068', '111', 'url', 'international', '0', '2024-07-06 12:34:47', '0000-00-00 00:00:00'),
(55, 'DHL ', '18863085', '333', 'ulr', 'international', '0', '2024-07-03 07:41:04', '2024-07-03 11:41:04'),
(57, 'FedEx ', '238091', '100', 'url', 'consolidation', '0', '2024-07-08 10:42:17', '2024-07-08 14:42:17'),
(58, 'FedEx ', '4547182', '100', 'url', 'assisted', '0', '2024-07-08 10:51:21', '2024-07-08 14:51:21'),
(59, 'FedEx ', '24201068', '110', 'url3', 'international', '0', '2024-07-09 00:56:18', '2024-07-09 04:56:16'),
(60, 'FedEx ', '263827', '100', 'url', 'consolidation', '0', '2024-07-09 02:38:37', '2024-07-09 06:38:37'),
(62, '900', '2618917', '1235556', 'url', 'assisted', '0', '2024-07-09 03:08:34', '2024-07-09 07:08:34'),
(63, 'FedEx ', '25647898', '110', 'url', 'international', '0', '2024-07-09 03:13:46', '2024-07-09 07:13:46'),
(65, 'DHL', '243698', '7460084914', 'https://mydhl.express.dhl/rw/en/tracking.html#/results?id=7460084914', 'consolidation', '0', '2024-07-15 12:37:39', '0000-00-00 00:00:00'),
(66, '123', '6089637', '1235556', 'url', 'assisted', '0', '2024-07-22 06:36:20', '0000-00-00 00:00:00'),
(67, '123', '1237957', '1235556', 'url', 'assisted', '0', '2024-07-24 10:22:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_shipment_countries`
--

CREATE TABLE `gsr_shipment_countries` (
  `sc_id` int(11) NOT NULL,
  `sc_country_name` varchar(40) NOT NULL,
  `sc_is_active` enum('0','1') NOT NULL,
  `sc_currency_code` varchar(40) NOT NULL,
  `sc_currency_sign` varchar(40) NOT NULL,
  `sc_date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `sc_date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_shipment_countries`
--

INSERT INTO `gsr_shipment_countries` (`sc_id`, `sc_country_name`, `sc_is_active`, `sc_currency_code`, `sc_currency_sign`, `sc_date_created`, `sc_date_updated`) VALUES
(1, 'USA', '1', 'USD', '$', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'INDIA', '1', 'INR', '?', '2024-04-02 12:21:08', '2024-04-02 12:21:08'),
(3, 'CHINA', '1', 'YEN', 'YEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'GERMANY', '1', 'EURO', 'EURO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'JAPAN', '1', 'YEN', 'YEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'TURKEY', '1', 'TURKEY', 'TURKEY', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_shipment_rates`
--

CREATE TABLE `gsr_shipment_rates` (
  `sp_id` int(11) NOT NULL,
  `sp_from_country_id` int(40) NOT NULL,
  `sp_weight` int(40) NOT NULL,
  `sp_dhl_price` int(40) NOT NULL,
  `sp_fedex_price` int(40) NOT NULL,
  `sp_shipment_price` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1->without unit price 2-> with unit price',
  `sp_unit_price` int(40) NOT NULL,
  `sp_start_weight` int(40) NOT NULL,
  `sp_end_weight` int(40) NOT NULL,
  `sp_is_active` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0->not active 1->active',
  `sp_date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `sp_date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_shipment_rates`
--

INSERT INTO `gsr_shipment_rates` (`sp_id`, `sp_from_country_id`, `sp_weight`, `sp_dhl_price`, `sp_fedex_price`, `sp_shipment_price`, `sp_unit_price`, `sp_start_weight`, `sp_end_weight`, `sp_is_active`, `sp_date_created`, `sp_date_updated`) VALUES
(1, 1, 1, 67, 74, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, 89, 96, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 3, 98, 106, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 4, 118, 126, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 5, 143, 150, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 6, 168, 174, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 7, 190, 198, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 8, 201, 209, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 9, 223, 232, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 10, 254, 262, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 1, 69, 52, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 2, 82, 65, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 3, 98, 79, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 4, 123, 98, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 5, 147, 113, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 6, 169, 90, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, 7, 191, 105, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, 8, 213, 120, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 2, 9, 234, 135, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 2, 10, 256, 150, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 3, 1, 57, 42, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 3, 2, 70, 54, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 3, 3, 88, 68, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 3, 4, 110, 82, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 3, 5, 133, 98, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 3, 6, 153, 123, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 7, 172, 138, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 3, 8, 192, 169, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 3, 9, 212, 186, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 4, 1, 89, 72, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, 2, 115, 92, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, 3, 139, 110, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 4, 173, 136, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 4, 5, 203, 157, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 4, 6, 220, 172, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 4, 7, 237, 184, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 4, 8, 255, 198, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 4, 9, 272, 210, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 4, 10, 290, 223, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 4, 11, 301, 231, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 4, 12, 290, 290, '1', 0, 0, 0, '1', '2024-07-23 11:02:59', '2024-07-23 11:02:59'),
(42, 4, 13, 322, 247, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 4, 14, 332, 256, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 4, 15, 344, 264, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 4, 16, 355, 272, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 4, 17, 367, 279, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 4, 18, 376, 288, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 5, 1, 58, 47, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 5, 2, 64, 69, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 5, 3, 130, 90, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 5, 4, 134, 120, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 5, 5, 135, 144, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 5, 6, 200, 184, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 5, 7, 267, 194, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 5, 8, 275, 204, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 5, 9, 297, 212, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 5, 10, 317, 279, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 6, 1, 60, 72, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 6, 2, 64, 83, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 6, 3, 123, 124, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 6, 4, 158, 137, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 6, 5, 195, 143, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 6, 6, 215, 150, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 6, 7, 238, 161, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 6, 8, 262, 171, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 6, 9, 287, 182, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 6, 10, 310, 194, '1', 0, 0, 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 1, 11, 24, 24, '2', 1, 11, 27, '1', '2024-08-05 12:26:58', '2024-08-05 12:26:58'),
(69, 1, 28, 22, 21, '2', 1, 28, 100, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 2, 11, 23, 15, '2', 1, 11, 100, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 3, 10, 21, 15, '2', 1, 10, 20, '1', '2024-04-05 10:04:08', '2024-04-05 10:04:08'),
(72, 3, 21, 20, 15, '2', 1, 21, 44, '1', '2024-04-05 10:04:04', '2024-04-05 10:04:04'),
(73, 3, 45, 19, 14, '2', 1, 45, 100, '1', '2024-04-05 10:03:58', '2024-04-05 10:03:58'),
(74, 4, 19, 20, 27, '2', 1, 19, 30, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 4, 31, 17, 35, '2', 1, 31, 100, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 5, 11, 30, 28, '2', 1, 11, 15, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 5, 16, 27, 23, '2', 1, 16, 20, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 5, 21, 23, 22, '2', 1, 21, 35, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 5, 36, 21, 20, '2', 1, 36, 100, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 6, 11, 23, 22, '2', 1, 11, 16, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 6, 17, 20, 24, '2', 1, 17, 30, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 6, 31, 25, 28, '2', 1, 31, 100, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_shipping_cal_sec2`
--

CREATE TABLE `gsr_shipping_cal_sec2` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_shipping_cal_sec2`
--

INSERT INTO `gsr_shipping_cal_sec2` (`id`, `title`, `description`, `createddate`, `updateddate`, `isdelete`) VALUES
(0, 'Shipping calculator part', 'Save with 10% off your first shipment and 9% off your first 50kg shipment Get Your warehouse address in 7 countries. Shop at any online store and get items in one package. Experience ultra-fast shipping to your doorstep. GSR works with major international shipping carriers including DHL, Fedex. Enter your package dimensions and weight for estimated shipping cost and carrier availability in your country Experience stress-free international shopping and Shipping with us', '2024-06-15 06:23:35', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_shipping_cal_section1`
--

CREATE TABLE `gsr_shipping_cal_section1` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `details` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `isdelete` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_shipping_cal_section1`
--

INSERT INTO `gsr_shipping_cal_section1` (`id`, `title`, `details`, `createddate`, `updateddate`, `isdelete`) VALUES
(1, 'SHIP WITH US', 'GSR Shipping Rates', '2024-06-15 06:17:55', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_terms`
--

CREATE TABLE `gsr_terms` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gsr_terms`
--

INSERT INTO `gsr_terms` (`id`, `description`, `createddate`, `updateddate`, `status`) VALUES
(1, '<h1><strong>Terms and Conditions</strong></h1>\r\n\r\n<p>These Terms govern</p>\r\n\r\n<ul>\r\n	<li>the use of this Website, and,</li>\r\n	<li>any other related Agreement or legal relationship with the globalshipperswanda in a legally binding way. Capitalized words are defined in the relevant dedicated section of this document.</li>\r\n</ul>\r\n\r\n<p>The User must read this document carefully.</p>\r\n\r\n<p>This Website is provided by:</p>\r\n\r\n<p>KN 72 St, Kigali, Rwanda Contact: globalshippersrwanda@gmail.com</p>\r\n\r\n<h2><strong>Information about this Website</strong></h2>\r\n\r\n<p>globalshipperswanda offers package and mail forwarding services along with package consolidation services from the U.S. to other countries throughout the world. When you sign up for an account you will receive a U.S. address and suite number where you can receive your packages. When globalshipperswanda receives a package addressed to you, we will notify you and post the package on your globalshipperswanda Account landing page. After you&#39;ve utilized the services available with your new account, completed the customs forms and selected your shipping, we will send the package on to your address in your home country in accordance with your instructions. globalshipperswanda offers three different types of accounts: A Free Account, Premium, and VIP membership with options for an annual fee or month-to-month invoicing. With a Free Account, your shipment will be sent to you in the same package that we receive. With a Premium, and VIP memberships, we can, upon your request, consolidate multiple packages into a new box, saving you substantially on your international shipping costs.</p>\r\n\r\n<h2><strong>What the User should know at a glance</strong></h2>\r\n\r\n<ul>\r\n	<li>Please note that some provisions in these Terms may only apply to certain categories of Users. In particular, certain provisions may only apply to Consumers or to those Users that do not qualify as Consumers. Such limitations are always explicitly mentioned within each affected clause. In the absence of any such mention, clauses apply to all Users.</li>\r\n	<li>The right of withdrawal only applies to European Consumers. The right of withdrawal, also commonly called the right of cancellation in the UK, is consistently referred to as &ldquo;the right of withdrawal&rdquo; within this document.</li>\r\n	<li><strong>Usage of this Website and the Service is age restricted</strong>: to access and use this Website and its Service the User must be an adult under applicable law.</li>\r\n</ul>\r\n\r\n<h2><strong>TERMS OF USE</strong></h2>\r\n\r\n<p>Unless otherwise specified, the terms of use detailed in this section apply generally when using this Website.</p>\r\n\r\n<p>Single or additional conditions of use or access may apply in specific scenarios and in such cases are additionally indicated within this document.</p>\r\n\r\n<p>By using this Website, Users confirm to meet the following requirements:</p>\r\n\r\n<ul>\r\n	<li>There are no restrictions for Users in terms of being Consumers or Business Users;</li>\r\n	<li>Users must be recognized as adult by applicable law;</li>\r\n	<li>Users aren&rsquo;t located in a country that is subject to a U.S. Government embargo, or that has been designated by the U.S. Government as a &ldquo;terrorist-supporting&rdquo; country;</li>\r\n	<li>Users aren&rsquo;t listed on any U.S. Government list of prohibited or restricted parties;</li>\r\n</ul>\r\n\r\n<h2><strong>Account registration</strong></h2>\r\n\r\n<p>To use the Service Users must register or create a User account, providing all required data or information in a complete and truthful manner.Failure to do so will cause unavailability of the Service.</p>\r\n\r\n<p>Users are responsible for keeping their login credentials confidential and safe. For this reason, Users are also required to choose passwords that meet the highest standards of strength permitted by this Website.</p>\r\n\r\n<p>By registering, Users agree to be fully responsible for all activities that occur under their username and password. Users are required to immediately and unambiguously inform the globalshipperswanda via the contact details indicated in this document, if they think their personal information, including but not limited to User accounts, access credentials or personal data, have been violated, unduly disclosed or stolen.</p>\r\n\r\n<h4><strong>Account termination</strong></h4>\r\n\r\n<p>Users can terminate their account and stop using the Service at any time by doing the following:</p>\r\n\r\n<ul>\r\n	<li>By directly contacting the globalshipperswanda at the contact details provided in this document.</li>\r\n</ul>\r\n\r\n<h4><strong>Account Verification</strong></h4>\r\n\r\n<p>After registering an account with globalshipperswanda, you may be asked to submit various forms of identification, as set forth on your globalshipperswanda account settings page. These forms of identification may include a driver&#39;s license, passport, utility bills and a US Postal Service Form 1583.</p>\r\n\r\n<h4><strong>Security Hold</strong></h4>\r\n\r\n<p>Occasionally discrepancies or other problems with an account status or payments arise that cause us to put a security hold on the account. While on security hold, you may still incur expenses on the account, including but not limited to, applicable membership fees, package processing fees and shipping expenses. We will keep you informed of the status of the security hold and let you know how you can help us resolve any holds associated to your account.</p>\r\n\r\n<h4><strong>Dormant Accounts</strong></h4>\r\n\r\n<p>Accounts with inactivity of greater than 2 years will be deemed dormant or abandoned. Account balances for dormant or abandoned accounts will be forfeited and your account closed. You may have your account balance refunded at any time prior to 2 years of inactivity.</p>\r\n\r\n<h2><strong>Content on this Website</strong></h2>\r\n\r\n<p>Unless where otherwise specified or clearly recognizable, all content available on this Website is owned or provided by the globalshipperswanda or its licensors.</p>\r\n\r\n<p>The globalshipperswanda undertakes its utmost effort to ensure that the content provided on this Website infringes no applicable legal provisions or third-party rights. However, it may not always be possible to achieve such a result.</p>\r\n\r\n<p>In such cases, without prejudice to any legal prerogatives of Users to enforce their rights, Users are kindly asked to preferably report related complaints using the contact details provided in this document.</p>\r\n\r\n<h2><strong>Access to external resources</strong></h2>\r\n\r\n<p>Through this Website Users may have access to external resources provided by third parties. Users acknowledge and accept that the globalshipperswanda has no control over such resources and is therefore not responsible for their content and availability.</p>\r\n\r\n<p>Conditions applicable to any resources provided by third parties, including those applicable to any possible grant of rights in content, result from each such third parties&rsquo; terms and conditions or, in the absence of those, applicable statutory law.</p>\r\n\r\n<h2><strong>Acceptable use</strong></h2>\r\n\r\n<p>This Website and the Service may only be used within the scope of what they are provided for, under these Terms and applicable law.</p>\r\n\r\n<p>Users are solely responsible for making sure that their use of this Website and/or the Service violates no applicable law, regulations or third-party rights.</p>\r\n\r\n<p>Therefore, the globalshipperswanda reserves the right to take any appropriate measure to protect its legitimate interests including by denying Users access to this Website or the Service, terminating contracts, reporting any misconduct performed through this Website or the Service to the competent authorities &ndash; such as judicial or administrative authorities - whenever Users engage or are suspected to engage in any of the following activities:</p>\r\n\r\n<ul>\r\n	<li>violate laws, regulations and/or these Terms;</li>\r\n	<li>infringe any third-party rights;</li>\r\n	<li>considerably impair the globalshipperswanda&rsquo;s legitimate interests;</li>\r\n	<li>offend the globalshipperswanda or any third party.</li>\r\n</ul>\r\n\r\n<h2><strong>TERMS AND CONDITIONS OF SALE</strong></h2>\r\n\r\n<h2>Paid Products</h2>\r\n\r\n<p>Some of the Products provided on this Website, as part of the Service, are provided on the basis of payment.</p>\r\n\r\n<p>The fees, duration and conditions applicable to the purchase of such Products are described below and in the dedicated sections of this Website.</p>\r\n\r\n<h2><strong>Product description</strong></h2>\r\n\r\n<p>Prices, descriptions or availability of Products are outlined in the respective sections of this Website and are subject to change without notice.</p>\r\n\r\n<p>While Products on this Website are presented with the greatest accuracy technically possible, representation on this Website through any means (including, as the case may be, graphic material, images, colors, sounds) is for reference only and implies no warranty as to the characteristics of the purchased Product.</p>\r\n\r\n<p>The characteristics of the chosen Product will be outlined during the purchasing process.</p>\r\n\r\n<h2><strong>Purchasing process</strong></h2>\r\n\r\n<p>Any steps taken from choosing a Product to order submission form part of the purchasing process. The purchasing process includes these steps:</p>\r\n\r\n<ul>\r\n	<li>By clicking on the checkout button, Users open the Stripe checkout section, wherein they will have to specify their contact details and a payment method of their choice.</li>\r\n	<li>After providing all the required information, Users must carefully review the order and, subsequently, confirm and submit it by using the relevant button or mechanism on this Website, hereby accepting these Terms and committing to pay the agreed-upon price.</li>\r\n</ul>\r\n\r\n<h2><strong>Order submission</strong></h2>\r\n\r\n<p>When the User submits an order, the following applies:</p>\r\n\r\n<ul>\r\n	<li>The submission of an order determines contract conclusion and therefore creates for the User the obligation to pay the price, taxes and possible further fees and expenses, as specified on the order page.</li>\r\n	<li>In case the purchased Product requires active input from the User, such as the provision of personal information or data, specifications or special wishes, the order submission creates an obligation for the User to cooperate accordingly.</li>\r\n	<li>Upon submission of the order, Users will receive a receipt confirming that the order has been received.</li>\r\n</ul>\r\n\r\n<p>All notifications related to the described purchasing process shall be sent to the email address provided by the User for such purposes.</p>\r\n\r\n<h2><strong>Prices</strong></h2>\r\n\r\n<p>Users are informed during the purchasing process and before order submission, about any fees, taxes and costs (including, if any, delivery costs) that they will be charged.</p>\r\n\r\n<p>Prices on this Website are displayed:</p>\r\n\r\n<ul>\r\n	<li>either exclusive or inclusive of any applicable fees, taxes and costs, depending on the section the User is browsing.</li>\r\n</ul>\r\n\r\n<h2><strong>Methods of payment</strong></h2>\r\n\r\n<p>Information related to accepted payment methods are made available during the purchasing process.</p>\r\n\r\n<p>Some payment methods may only be available subject to additional conditions or fees. In such cases related information can be found in the dedicated section of this Website.</p>\r\n\r\n<p>All payments are independently processed through third-party services. Therefore, this Website does not collect any payment information &ndash; such as credit card details &ndash; but only receives a notification once the payment has been successfully completed.</p>\r\n\r\n<p>If a payment through the available methods fails or is refused by the payment service provider, the globalshipperswanda shall be under no obligation to fulfill the purchase order. Any possible costs or fees resulting from the failed or refused payment shall be borne by the User.</p>\r\n\r\n<h2><strong>Refunds</strong></h2>\r\n\r\n<p>Payments for Premium, and VIP membership fees are not refundable. Payment for deposit or postage not applied to a mailout request is refundable. We charge a $5 administrative fee per each individual payment/order refunded plus the cost of the refund (for example bank fee for wire transfer). globalshipperswanda will charge a fee for every charge-back/payment reversal on customer account. Chargeback/reversal fee for PayPal payments is $20 and chargeback/reversal fee on credit card payments is $35.</p>\r\n\r\n<p>globalshipperswanda also charges 4.3% of the refund amount in addition to the administrative fee on all refunds.</p>\r\n\r\n<h2><strong>Addresses</strong></h2>\r\n\r\n<p>Each package sent to globalshipperswanda must be addressed correctly. Your correct name and globalshipperswanda mailbox/suite number must be written on each package. If a package arrives with an incorrect or incomplete address (for example missing mailbox number or an unknown or misspelled name), globalshipperswanda will try to determine whom it belongs to.</p>\r\n\r\n<p>If globalshipperswanda is able to determine the owner of the package, it will be entered in to the correct mailbox and we will charge an $5 address correction fee. If the owner cannot be determined and a claim with tracking information is not provided within 30 days of the package&#39;s arrival, the package will be disposed of at the sole discretion of globalshipperswanda.</p>\r\n\r\n<h2><strong>Storage</strong></h2>\r\n\r\n<p>Free accounts receive 15 days of free storage. Premium Memberships receive 45, VIP Memberships receive 120 days of free storage depending on their membership level. If a package needs to be stored longer than the allotted time, you may purchase up to 28 extra days of storage. If you do not purchase the extra days when your package storage time expires, the package will be consider abandoned and will be disposed immediately.</p>\r\n\r\n<p>If a package is consolidated/combined with another package(s), the storage time limit will be based on the date of the first/oldest package arrival. Adding a package to a consolidated/combined package will not reset the storage time.</p>\r\n\r\n<h2><strong>Abandoned Packages</strong></h2>\r\n\r\n<p>If we receive a package but do not receive the required fees and documents from you within 30 days, we will deem the package to be abandoned. globalshipperswanda will dispose of abandoned packages.</p>\r\n\r\n<h2><strong>Oversized Packages</strong></h2>\r\n\r\n<p>Oversized packages are any package over the size or weight limits set forth in the globalshipperswanda calculator and the specified carrier. Oversized packages are required to be divided, reduced, disposed of or returned to the sender if such packages are beyond the limits of the globalshipperswanda calculator and the specified carrier.</p>\r\n\r\n<h2><strong>Photographs of Packages</strong></h2>\r\n\r\n<p>Upon your request, globalshipperswanda will open and photograph the contents of a package, allowing you to confirm the merchandise is correct and in good condition before requesting mailout.</p>\r\n\r\n<h2><strong>Consolidation</strong></h2>\r\n\r\n<p>globalshipperswanda is not responsible for items missing from a consolidated package without proof that the missing item was received by us. Accordingly, we strongly urge you to submit a special request for globalshipperswanda to check and photograph the contents of each package upon arrival and again during consolidation to allow you to confirm that all expected items are accounted for. All photo requests need to be requested prior to consolidation.</p>\r\n\r\n<p>Consolidation of packages will not reset the storage time. Storage will be based on the first/oldest package to arrive at globalshipperswanda in the consolidation.</p>\r\n\r\n<p>Unless you request otherwise, we will remove all catalogs during consolidation. Catalogs add to shipping costs, and most customers want them removed.</p>\r\n\r\n<h2><strong>Unclaimed Packages</strong></h2>\r\n\r\n<p>Carriers may choose to dispose of a package;</p>\r\n\r\n<ul>\r\n	<li>in the event they are unable to contact you via text or email after multiple unsuccessful delivery attempts</li>\r\n	<li>you are unwilling to pay all required fees, duties, and taxes</li>\r\n</ul>\r\n\r\n<p>To ensure the carrier is able to contact you for delivery, please ensure your email and cellphone number are up-to-date in your globalshipperswanda&#39;s account.</p>\r\n\r\n<h2><strong>Package Refusal/Return to Sender</strong></h2>\r\n\r\n<p>Packages may be subject to return for various reasons, including at the request of the recipient, by action of the destination country&#39;s customs authorities, or due to return to the globalshipperswanda warehouse subsequent to receipt by the courier company. In any instance of package return, globalshipperswanda reserves the right to reflect and charge any fees or charges imposed upon globalshipperswanda by the courier company as a result of the return process. Some of the package return reasons;</p>\r\n\r\n<ul>\r\n	<li>Package content is considered&nbsp;<a href=\"https://globalshippersrwanda.com/restrictions\">Prohibited / Restricted</a>&nbsp;items in that country.</li>\r\n	<li>The recipient cannot be reached by email or phone by the selected courier</li>\r\n	<li>Refusal of shipped goods to enter the country at the destination country due to local customs regulations</li>\r\n	<li>Failure to pay customs fees by the buyer</li>\r\n	<li>Requested information on the package content hasn&#39;t been provided to customs.</li>\r\n</ul>\r\n\r\n<h2><strong>Fraud Prevention</strong></h2>\r\n\r\n<p>globalshipperswanda is continually working to prevent any type of fraudulent activity. We leverage third party tools to prevent payment fraud, various industry standards to protect your account information and may, at any time, update our methods and tools. We also require that all items you send to our facilities have been purchased by you and paid for in full. If we are notified that fraudulent activity has been detected in any fashion, we reserve the right to refuse shipment until such time the seller has verified the transaction or as we otherwise determine in our sole discretion.</p>\r\n\r\n<p>Please send any suspected fraud inquiries to support@globalshipperswanda.com withAttn: Fraud Alert in the subject line</p>\r\n\r\n<h2><strong>USA Export Regulations</strong></h2>\r\n\r\n<p>globalshipperswanda Customers must export products from the United States in accordance with all applicable United States export control laws and regulations including regulations administered by the U.S. Department of Commerce, U.S. Department of State, and the U.S. Department of Treasury, U.S. Customs and Border Patrol, and Department of Homeland Security. As a customer of globalshipperswanda you agree not to export, re-export, or transship these commodities to any country that the United States has imposed an embargo or trade sanction upon, including but not limited to Cuba, Iran, Iraq, North Korea, Somalia, Syria, Ukraine and Sudan or any destination for which United States requires an export license without first obtaining such license(s). Diversion of these commodities contrary to the United States law is prohibited. Any and all export license requirements are the sole responsibility of the individual and/or entity in contractual agreement with globalshipperswanda.</p>\r\n\r\n<p>globalshipperswanda does not ship weapons (including items that assist in the functionality or manufacturing of firearms/ammunition or replicas of such items) or narcotics or other prohibited items. In addition, certain items may require special permissions or documentation or may be prohibited by your destination address or country. It is your responsibility to know these restrictions. In an effort to uphold our customs compliance standards, globalshipperswanda&#39;s prohibited and restricted items list may be more expansive than individual country or carrier laws.</p>\r\n\r\n<p>You can find a listing of the prohibited items at&nbsp;<strong><a href=\"https://www.globalshipperswanda.com/faq\" rel=\"noreferrer\" target=\"_blank\">FAQ</a></strong>, or&nbsp;<strong><a href=\"https://www.globalshipperswanda.com/restrictions\" rel=\"noreferrer\" target=\"_blank\">Prohibited Items of international shipping</a></strong>. globalshipperswanda cooperates with law enforcement agencies to ensure that prohibited items are not shipped via globalshipperswanda. This includes the routine inspection by law enforcement agencies of globalshipperswanda&#39;s facilities and its Customers&#39; packages. By entering into this agreement you accept and agree to routine inspections of your packages by law enforcement agencies.</p>\r\n\r\n<p>If your package is found to contain prohibited items, you agree that the contents of your package may be seized and confiscated by law enforcement or globalshipperswanda. If prohibited items are found in your packages as determined by law enforcement or globalshipperswanda, your account will be placed on hold, and any additional packages within your suite may also be inspected and confiscated</p>\r\n\r\n<h2><strong>Authorization for future PayPal payment</strong></h2>\r\n\r\n<p>If Users authorize the PayPal feature which allows future purchases, this Website will store an identification code linked to the Users&rsquo; PayPal account. This will authorize this Website to automatically process payments for future purchases or recurring installments of past purchases.</p>\r\n\r\n<p>This authorization can be revoked at any time, either by contacting the globalshipperswanda or by changing the user settings offered by PayPal.</p>\r\n\r\n<h2><strong>Retention of usage rights</strong></h2>\r\n\r\n<p>Users do not acquire any rights to use the purchased Product until the total purchase price is received by the globalshipperswanda.</p>\r\n\r\n<h2><strong>Delivery</strong></h2>\r\n\r\n<h4>Performance of services</h4>\r\n\r\n<p>The purchased service shall be performed or made available within the timeframe specified on this Website or as communicated before the order submission.</p>\r\n\r\n<h4>PO Box deliveries</h4>\r\n\r\n<p>For PO Box shipments, including those with insurance coverage, please be aware that we are unable to process claims for any issues that may arise during delivery. It&#39;s important to note that courier companies may decline to deliver to PO Boxes and may not provide complete delivery services. In such instances, globalshipperswanda bears no responsibility and disclaims all liability for PO Box shipments.</p>\r\n\r\n<h4>Domestic Shipments</h4>\r\n\r\n<p>In accordance with applicable regulations and statutes governing shipments within the United States, we hereby notify our valued customers of a revision to our shipping policy. globalshipperswanda will abstain from executing domestic shipments, focusing solely on international shipping services.</p>\r\n\r\n<p>This adjustment arises from legal requirements within the United States jurisdiction, mandating our exclusive adherence to international shipping operations. Consequently, all services rendered by globalshipperswanda will be confined to facilitating international deliveries exclusively.</p>\r\n\r\n<h2><strong>User rights</strong></h2>\r\n\r\n<h2>Right of withdrawal</h2>\r\n\r\n<p>Unless exceptions apply, the User may be eligible to withdraw from the contract within the period specified below (generally 14 days), for any reason and without justification. Users can learn more about the withdrawal conditions within this section.</p>\r\n\r\n<h4><strong>Who the right of withdrawal applies to</strong></h4>\r\n\r\n<p>Unless any applicable exception is mentioned below, Users who are European Consumers are granted a statutory cancellation right under EU rules, to withdraw from contracts entered into online (distance contracts) within the specified period applicable to their case, for any reason and without justification.</p>\r\n\r\n<p>Users that do not fit this qualification, cannot benefit from the rights described in this section.</p>\r\n\r\n<h2><strong>Liability and indemnification</strong></h2>\r\n\r\n<h2>Import and Export Documentation</h2>\r\n\r\n<p>The customer is responsible for determining and following the regulations for their shipments, including all customs requirements of the destination country.</p>\r\n\r\n<p>globalshipperswanda does not guarantee delivery of packages that do not comply with U.S. export regulations or the import regulations of the country to which they are sent.</p>\r\n\r\n<p>You are responsible for the accuracy of all customs declarations and documentation and for all customs duties in the destination country. Any such duties or charges are in addition to the fees earned by globalshipperswanda for its package/mail forwarding service.</p>\r\n\r\n<p>You acknowledge that you have a duty to and are solely liable for providing all information required by the laws of the country that is the final destination of your package and the laws and regulations of the United States, including without limitation, information required by 15 CFR Sec. 30 and that you are responsible for maintaining all records as required under any applicable customs or other government agency laws.</p>\r\n\r\n<p>globalshipperswanda assumes no responsibility to act as a record-keeper or record-keeping agent for you or the US Principle Party in Interest (USPPI). You are responsible to supply to globalshipperswanda all information regarding the USPPI, including its name and employer identification number (EIN), and the ECCN, Schedule B classification and all other information required under a routed export transaction as described in Title 15, Code of Federal Regulations, Part 30, the Foreign Trade Statistics Regulations (FTSR).</p>\r\n\r\n<h2><strong>Shipping</strong></h2>\r\n\r\n<p>globalshipperswanda ships only by the shipping methods offered in the shipping calculator shown on globalshipperswanda.com. globalshipperswanda is not responsible for the actual shipping service that is chosen by you. All terms and conditions of the selected shipping service (USPS, DHL, FedEx, Aramex, UPS etc.) apply to you. You are responsible for assuring that the shipping of your package is not restricted by its contents, size or volume.</p>\r\n\r\n<p>globalshipperswanda does not accept prepaid labels for shipping, with the exception of returns to the original shipper or merchant.</p>\r\n\r\n<p>globalshipperswanda does not ship packages to other package forwarders.</p>\r\n\r\n<p>You authorize globalshipperswanda to open packages if there is a suspicion about content of the package (illegal goods) or any practical reason.</p>\r\n\r\n<p>Any problems associated with a received package must be reported within 10 days of delivery.</p>\r\n\r\n<h2><strong>Other Rules</strong></h2>\r\n\r\n<p>You agree to comply with all laws and regulations applicable to your access and use of globalshipperswanda.com. You may not harvest personal data (including email addresses) from globalshipperswanda.com, and specifically you may not use email addresses displayed on our sites to ask users to join or contribute to your services. We have the right to investigate and prosecute violations of any of the above to the fullest extent of the law. We may involve and cooperate with law enforcement authorities in prosecuting users who violate the terms of this Agreement.</p>\r\n\r\n<p>You acknowledge that globalshipperswanda has no obligation to monitor your access to or use of globalshipperswanda.com, but has the right to do so for the purpose of operating globalshipperswanda.com, to ensure your compliance with this Agreement, or to comply with applicable law or the order or requirement of a court, administrative agency or other governmental body. Unless we explicitly agree otherwise in writing, you may not use any automated means (such as scripts) to access globalshipperswanda.com or collect information from it.</p>\r\n\r\n<h2><strong>Problems with Delivery to the globalshipperswanda Facility</strong></h2>\r\n\r\n<p>You are responsible for confirming that the package that the contents of the package that arrived in our warehouse is what you ordered from the merchant. globalshipperswanda provides photos of outside of each incoming package so you can ascertain if the correct package is received and whether or not the address and tracking number are accurate.</p>\r\n\r\n<p>globalshipperswanda will close accounts of customers who fill out customs forms and ask us to mail out packages that were checked into their suite in error and belong to a different customer. In the event of a shipping error, you agree to immediately notify globalshipperswanda so that the error can be corrected.</p>\r\n\r\n<h2><strong>Shipping Insurance</strong></h2>\r\n\r\n<p>globalshipperswanda shipping insurance does not include:</p>\r\n\r\n<ol>\r\n	<li>Coins, bullion, loose diamonds or stones, jewelry, rock slabs, stocks, bonds, currency, deeds, evidence of debt, travelers checks, money orders, gift certificates, calling cards, lottery tickets, event tickets, or any other negotiable documents.</li>\r\n	<li>Loss from delay, deterioration, spoilage or contamination of perishable merchandise except when resulting from fire.</li>\r\n	<li>Merchandise shipped on consignment, memorandum or approval unless shipped in fulfillment of an order or request.</li>\r\n	<li>Loss, damage, or non-arrival of any package or its contents which (a) is addressed, wrapped, or packed insufficiently, incorrectly, or contrary to carrier&#39;s packaging requirements; or (b) bears a descriptive label or packaging which tends to describe nature of contents EXCEPT if shipped via Parcel Post and required by Postal Laws and Regulations.</li>\r\n	<li>Damage which is deemed exceedingly minor, frequently occurring, or caused by the nature of the product itself regardless of careful handling.</li>\r\n	<li>Cosmetic damages limited to the packaging where the intended good is not damaged.</li>\r\n	<li>Any package where the damage is deemed preventable had the shipment included the appropriate use of packing materials such as, but not limited to, packaging tape, bubble wrap, packing peanuts, crumpled paper, styrofoam, or mail rollers.</li>\r\n	<li>Any package containing personal goods, gifts, samples, or promotional items shipped on behalf of the insured or insured&#39;s employees.</li>\r\n	<li>Any package shipped to (a) a prohibited country or any location that would be in violation of any U.S. economic or trade sanctions, including, without limitation, Office of Foreign Assets Control (OFAC) Restricted Countries (with such information available here) or (b) any country or any location that would be in violation of applicable U.S. and/or carrier shipping restrictions related to COVID-19 or other disease-related outbreak, as may be updated from time to time. Information can be found&nbsp;<strong><a href=\"https://globalshippersrwanda.com/terms#\" target=\"_blank\">here</a></strong>.</li>\r\n	<li>Against loss or damage arising out of dishonesty on the part of the insured or insured&#39;s employees.</li>\r\n	<li>Against loss or damage caused by or resulting from: (a) hostile or warlike action in time of peace or war, including action in hindering, combating or defending against an actual, impending or expected attack, (1) by any government or sovereign poser (de jure facto), or by any authority maintaining or using military, naval or air forces; or (2) by military, naval or air forces; (3) by an agent of any such government power, authority or forces (b) any weapon of war employing atomic fission or radioactive force whether in time of peace or war; (c) insurrection, rebellion, revolution, civil war, usurped power, or action taken by governmental authority in hindering, combating or defending against such an occurrence, seizure, or destruction under quarantine or Customs regulations, confiscation by order of any government or public authority or risks of contraband or illegal transportation of trade.</li>\r\n	<li>Against loss or damage caused by nuclear reaction/radiation or radioactive contamination, all whether controlled or uncontrolled, and whether such loss be direct or indirect, proximate or remote, or be in whole or in part caused by, contributed to, or aggravated by the peril(s) insured against in this Policy; however, direct loss by &quot;fire&quot; resulting from nuclear reaction/radiation or radioactive contamination is insured against by this Policy.</li>\r\n	<li>Against loss or damage caused by Customs seizure, inspection, handling, or destruction.</li>\r\n	<li>Any package containing goods prohibited or restricted from entering the intended country of delivery.</li>\r\n	<li>Surcharges, including but not limited to: shipping costs, tariffs, seller fees, and processing fees.</li>\r\n</ol>\r\n\r\n<h2><strong>Missing and Lost Packages</strong></h2>\r\n\r\n<p>In the case of a lost or damaged package please access your account to file a claim. False claims will be charged minimum $5 plus globalshipperswanda&#39;s investigation expenses. All claims for lost or damaged packages must be reported to globalshipperswanda within 10 days otherwise they will be automatically denied. Packages are insured by combination of carrier shipping insurance and globalshipperswanda&#39;s private insurance.</p>\r\n\r\n<p>Claims regarding loss where the carrier&#39;s tracking records have the shipment marked as delivered will not be honored, unless documentation from the carrier is provided, which acknowledges a mistake in the tracking information, or if adequate proof is provided to support theft or mishandling.</p>\r\n\r\n<p>Claims regarding loss or damage where the shipment is signed for will not be honored, unless adequate proof is provided to support theft or mishandling.</p>\r\n\r\n<p>For claims regarding damage, globalshipperswanda may request for the item to be examined and a repair quote to be issued and submitted to globalshipperswanda for review. If the repair service is able to restore the item to its intended condition, globalshipperswanda may choose to settle the claim for the value of the repair, rather than the full value of the item.</p>\r\n\r\n<p>For claims regarding theft, stolen property or misdelivery, globalshipperswanda requires (a) signature-required delivery for those shipments valued at five hundred dollars ($500) or greater and (b) valid tangible documentation and/or evidence for any claims exceeding five hundred dollars ($500). Such valid documentation and/or evidence may include, without limitation: (i) written acknowledgement of such theft, stolen property or misdelivery from the respective carrier; (ii) video footage, (iii) police report and/or (iv) other documentation and evidence. globalshipperswanda will not accept any claims for theft, stolen property or misdelivery where there is a valid signature from customer, or a customer representative, acknowledging receipt of a shipment.</p>\r\n\r\n<p>A maximum of 3 claims per 24 month period are allowed. Insurance is not available for Airmail Economy. Insurance for packages lost in the warehouse or lost during shipping will be valued based on the completed customs declaration. You may be asked to submit additional information detailing item contents and/or value of the merchandise during the claims process.</p>\r\n\r\n<h2><strong>Delays</strong></h2>\r\n\r\n<p>Sometimes globalshipperswanda needs more time to locate your package in our warehouse. globalshipperswanda cannot offer any additional compensation for the delay in locating and process of your package. . If we send a package to an address not listed on your account, we will do everything we can to get the package to the correct address. We will cover the cost of shipping and handling, but we will not compensate for delays or inconvenience. If we cannot get package to the correct person we will compensate for the content, our fees and postage.</p>\r\n\r\n<h2><strong>Australian Users</strong></h2>\r\n\r\n<h4>Limitation of liability</h4>\r\n\r\n<p>Nothing in these Terms excludes, restricts or modifies any guarantee, condition, warranty, right or remedy which the User may have under the Competition and Consumer Act 2010 (Cth) or any similar State and Territory legislation and which cannot be excluded, restricted or modified (non-excludable right). To the fullest extent permitted by law, our liability to the User, including liability for a breach of a non-excludable right and liability which is not otherwise excluded under these Terms of Use, is limited, at the globalshipperswanda&rsquo;s sole discretion, to the re-performance of the services or the payment of the cost of having the services supplied again.</p>\r\n\r\n<h2><strong>Personal Shopper</strong></h2>\r\n\r\n<p>globalshipperswanda can assist you to purchase products in the US. However, we are not responsible for quality of the goods, warranties, delivery issues, back up orders, etc. globalshipperswanda is not responsible if the purchase cannot be made for any reason. For more information on Personal Shopper process please see this link:&nbsp;<strong><a href=\"https://www.globalshipperswanda.com/personal-shopper\" rel=\"noreferrer\" target=\"_blank\">https://www.globalshipperswanda.com/personal-shopper</a></strong></p>\r\n\r\n<h2><strong>Personal Shopper Fees</strong></h2>\r\n\r\n<ul>\r\n	<li>Personal Shopper Fee: $8.5 per 10 items</li>\r\n	<li>Processing fee: 7% of total order</li>\r\n	<li>globalshipperswanda Commission: 4% of total order</li>\r\n</ul>\r\n\r\n<h3><strong>Returning Items Purchased via Personal Shopper</strong></h3>\r\n\r\n<p>Items purchased via the globalshipperswanda Personal Shopper service can be returned upon member request; however, during the return process, the following considerations must be kept in mind:</p>\r\n\r\n<ul>\r\n	<li><em><strong>eBay and Mercari Exclusions</strong></em>: Platforms like eBay and Mercari operate differently than traditional sellers. They serve primarily as hosts to a myriad of independent merchants. As such, items acquired from these platforms using globalshipperswanda&#39;s Personal Shopper service are exempt from our usual return process, as these platforms do not accommodate returns for purchases made in this way.</li>\r\n	<li><em><strong>Handmade Items Caution</strong></em>: If purchasing from platforms that specialize in handmade items, please be informed that your ability to return might be restricted. It&#39;s vital to review the platform&#39;s return policy before finalizing such purchases.</li>\r\n	<li><em><strong>Recommendation</strong></em>: We encourage members to always familiarize themselves with the return policies of the platform from which they are purchasing. This proactive approach can help prevent potential misunderstandings and inconveniences.</li>\r\n</ul>\r\n\r\n<h2><strong>Common provisions</strong></h2>\r\n\r\n<h2>No Waiver</h2>\r\n\r\n<p>The globalshipperswanda&rsquo;s failure to assert any right or provision under these Terms shall not constitute a waiver of any such right or provision. No waiver shall be considered a further or continuing waiver of such term or any other term.</p>\r\n\r\n<h3><strong>Service interruption</strong></h3>\r\n\r\n<p>To ensure the best possible service level, the globalshipperswanda reserves the right to interrupt the Service for maintenance, system updates or any other changes, informing the Users appropriately.</p>\r\n\r\n<p>Within the limits of law, the globalshipperswanda may also decide to suspend or terminate the Service altogether. If the Service is terminated, the globalshipperswanda will cooperate with Users to enable them to withdraw Personal Data or information in accordance with applicable law.</p>\r\n\r\n<p>Additionally, the Service might not be available due to reasons outside the globalshipperswanda&rsquo;s reasonable control, such as &ldquo;force majeure&rdquo; (eg. labor actions, infrastructural breakdowns or blackouts etc).</p>\r\n\r\n<h3><strong>Service reselling</strong></h3>\r\n\r\n<p>Users may not reproduce, duplicate, copy, sell, resell or exploit any portion of this Website and of its Service without the globalshipperswanda&rsquo;s express prior written permission, granted either directly or through a legitimate reselling programme.</p>\r\n\r\n<h3><strong>Privacy policy</strong></h3>\r\n\r\n<p>To learn more about the use of their Personal Data, Users may refer to the privacy policy of this Website.</p>\r\n\r\n<h3><strong>Intellectual property rights</strong></h3>\r\n\r\n<p>Without prejudice to any more specific provision of these Terms, any intellectual property rights, such as copyrights, trademark rights, patent rights and design rights related to this Website are the exclusive property of the globalshipperswanda or its licensors and are subject to the protection granted by applicable laws or international treaties relating to intellectual property.</p>\r\n\r\n<p>All trademarks &mdash; nominal or figurative &mdash; and all other marks, trade names, service marks, word marks, illustrations, images, or logos appearing in connection with this Website are, and remain, the exclusive property of the globalshipperswanda or its licensors and are subject to the protection granted by applicable laws or international treaties related to intellectual property.</p>\r\n\r\n<h3><strong>Changes to these Terms</strong></h3>\r\n\r\n<p>The globalshipperswanda reserves the right to amend or otherwise modify these Terms at any time. In such cases, the globalshipperswanda will appropriately inform the User of these changes.</p>\r\n\r\n<p>Such changes will only affect the relationship with the User for the future.</p>\r\n\r\n<p>The continued use of the Service will signify the User&rsquo;s acceptance of the revised Terms. If Users do not wish to be bound by the changes, they must stop using the Service. Failure to accept the revised Terms, may entitle either party to terminate the Agreement.</p>\r\n\r\n<p>The applicable previous version will govern the relationship prior to the User&#39;s acceptance. The User can obtain any previous version from the globalshipperswanda.</p>\r\n\r\n<p>If required by applicable law, the globalshipperswanda will specify the date by which the modified Terms will enter into force.</p>\r\n\r\n<h3><strong>Assignment of contract</strong></h3>\r\n\r\n<p>The globalshipperswanda reserves the right to transfer, assign, dispose of by novation, or subcontract any or all rights or obligations under these Terms, taking the User&rsquo;s legitimate interests into account. Provisions regarding changes of these Terms will apply accordingly.</p>\r\n\r\n<p>Users may not assign or transfer their rights or obligations under these Terms in any way, without the written permission of the globalshipperswanda.</p>\r\n\r\n<h3><strong>Contacts</strong></h3>\r\n\r\n<p>All communications relating to the use of this Website must be sent using the contact information stated in this document.</p>\r\n\r\n<h3><strong>Severability</strong></h3>\r\n\r\n<p>Should any provision of these Terms be deemed or become invalid or unenforceable under applicable law, the invalidity or unenforceability of such provision shall not affect the validity of the remaining provisions, which shall remain in full force and effect.</p>\r\n\r\n<h4><strong>US Users</strong></h4>\r\n\r\n<p>Any such invalid or unenforceable provision will be interpreted, construed and reformed to the extent reasonably required to render it valid, enforceable and consistent with its original intent. These Terms constitute the entire Agreement between Users and the globalshipperswanda with respect to the subject matter hereof, and supersede all other communications, including but not limited to all prior agreements, between the parties with respect to such subject matter. These Terms will be enforced to the fullest extent permitted by law.</p>\r\n\r\n<h4><strong>EU Users</strong></h4>\r\n\r\n<p>Should any provision of these Terms be or be deemed void, invalid or unenforceable, the parties shall do their best to find, in an amicable way, an agreement on valid and enforceable provisions thereby substituting the void, invalid or unenforceable parts.</p>\r\n\r\n<p>In case of failure to do so, the void, invalid or unenforceable provisions shall be replaced by the applicable statutory provisions, if so permitted or stated under the applicable law.</p>\r\n\r\n<p>Without prejudice to the above, the nullity, invalidity or the impossibility to enforce a particular provision of these Terms shall not nullify the entire Agreement, unless the severed provisions are essential to the Agreement, or of such importance that the parties would not have entered into the contract if they had known that the provision would not be valid, or in cases where the remaining provisions would translate into an unacceptable hardship on any of the parties.</p>\r\n\r\n<h3><strong>Governing law</strong></h3>\r\n\r\n<p>These Terms are governed by the law of the place where the globalshipperswanda is based, as disclosed in the relevant section of this document, without regard to conflict of laws principles.</p>\r\n\r\n<h4><strong>Exception for European Consumers</strong></h4>\r\n\r\n<p>However, regardless of the above, if the User qualifies as a European Consumer and has their habitual residence in a country where the law provides for a higher consumer protection standard, such higher standards shall prevail.</p>\r\n\r\n<h3><strong>Venue of jurisdiction</strong></h3>\r\n\r\n<p>The exclusive competence to decide on any controversy resulting from or connected to these Terms lies with the courts of the place where the globalshipperswanda is based, as displayed in the relevant section of this document.</p>\r\n\r\n<h4><strong>Exception for European Consumers</strong></h4>\r\n\r\n<p>The above does not apply to any Users that qualify as European Consumers, nor to Consumers based in Switzerland, Norway or Iceland.</p>\r\n\r\n<h2><strong>Dispute resolution</strong></h2>\r\n\r\n<h3>Amicable dispute resolution</h3>\r\n\r\n<p>Users may bring any disputes to the globalshipperswanda who will try to resolve them amicably.</p>\r\n\r\n<p>While Users&#39; right to take legal action shall always remain unaffected, in the event of any controversy regarding the use of this Website or the Service, Users are kindly asked to contact the globalshipperswanda at the contact details provided in this document.</p>\r\n\r\n<p>The User may submit the complaint including a brief description and if applicable, the details of the related order, purchase, or account, to the globalshipperswanda&rsquo;s email address specified in this document.</p>\r\n\r\n<p>The globalshipperswanda will process the complaint without undue delay and within 21 days of receiving it.</p>\r\n\r\n<h3><strong>Online dispute resolution for Consumers</strong></h3>\r\n\r\n<p>The European Commission has established an online platform for alternative dispute resolutions that facilitates an out-of-court method for solving any dispute related to and stemming from online sale and service contracts.</p>\r\n\r\n<p>As a result, any European Consumer can use such platform for resolving any dispute stemming from contracts which have been entered into online. The platform is available at the following link.</p>\r\n', '2024-07-23 12:55:22', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gsr_user_card_details`
--

CREATE TABLE `gsr_user_card_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `holder_name` varchar(40) NOT NULL,
  `card_number` varchar(40) NOT NULL,
  `cvc_number` varchar(30) NOT NULL,
  `cardexpire_month` varchar(10) NOT NULL,
  `cardexpire_year` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `is_card_delete` enum('0','1') NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gsr_user_payment_details`
--

CREATE TABLE `gsr_user_payment_details` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(40) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `paid_amount` decimal(10,0) NOT NULL,
  `paid_amount_currency` varchar(30) NOT NULL,
  `card_id` varchar(40) NOT NULL,
  `purchase_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `payment_status` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `international_destination_address`
--

CREATE TABLE `international_destination_address` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `international_id` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mobile_number` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `street_address` varchar(40) NOT NULL,
  `pin_code` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `is_deleted` enum('1','0') NOT NULL,
  `destination_address_id` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `international_destination_address`
--

INSERT INTO `international_destination_address` (`id`, `user_id`, `order_id`, `international_id`, `fname`, `lname`, `mobile_number`, `country`, `state`, `city`, `street_address`, `pin_code`, `created_date`, `updated_date`, `is_deleted`, `destination_address_id`) VALUES
(1, '1', '1', '37926068', 'FNAME DESTI', 'LNAME DESTI', '8960790891', 'Portugal', 'DESTI STATE', 'DESTI CITY', 'STREET ADD DESTI', '226012', '2024-06-07 20:23:08', '0000-00-00 00:00:00', '0', '1'),
(2, '30', '2', '25028010', 'Anisha', 'Yadav', '8115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-06-22 10:59:49', '0000-00-00 00:00:00', '0', '1'),
(3, '56', '3', '74134279', 'Anisha', 'Yadav', '08115520625', 'Russian Federation', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-06-22 12:11:40', '0000-00-00 00:00:00', '0', '1'),
(4, '56', '4', '49373069', 'Anisha', 'Yadav', '08115520625', 'Russian Federation', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-06-22 12:13:38', '0000-00-00 00:00:00', '0', '1'),
(5, '56', '5', '64155090', 'Anisha', 'Yadav', '08115520625', 'Russian Federation', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-06-22 12:16:22', '0000-00-00 00:00:00', '0', '1'),
(6, '1', '6', '8459387', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-06-23 14:09:32', '0000-00-00 00:00:00', '0', '1'),
(7, '229', '7', '94454845', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:09:38', '2024-08-05 08:09:38', '0', '1'),
(8, '229', '8', '15087651', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(9, '229', '9', '93141458', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(10, '67', '10', '73040802', 'Testing', 'lastname', '1312321321', 'Poland', 'Uttar Pradesh', 'City', '276/5', '226012', '2024-06-24 09:20:30', '0000-00-00 00:00:00', '0', '1'),
(11, '229', '11', '74503139', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(12, '229', '12', '62442379', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:07:57', '2024-08-05 08:07:57', '0', '1'),
(13, '229', '13', '77920424', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(14, '66', '14', '59084399', 'Prakhar', 'Pandey', '8960790891', 'Rwanda', 'state', 'city', 'street address ', '226012', '2024-06-24 10:53:19', '0000-00-00 00:00:00', '0', '1'),
(15, '229', '15', '82361465', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(16, '229', '16', '43120907', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(17, '229', '17', '79889355', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(18, '229', '18', '8028532', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(19, '229', '19', '69566460', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(20, '229', '20', '58781728', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(21, '229', '21', '18863085', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:12:34', '2024-08-05 08:12:34', '0', '1'),
(22, '229', '22', '15721974', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 08:05:40', '2024-08-05 08:05:40', '0', '1'),
(23, '3', '23', '55443020', 'eeeee', 'eeeee', '222222', 'Rwanda', 'eeeee', 'eeeee', 'eeeee', 'eeeeee', '2024-07-01 14:07:13', '0000-00-00 00:00:00', '0', '1'),
(24, '229', '24', '24201068', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-07-09 04:53:10', '0000-00-00 00:00:00', '0', '1'),
(25, '229', '25', '25647898', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-07-09 07:11:06', '0000-00-00 00:00:00', '0', '1'),
(26, '9', '26', '73677653', 'Abijuru', 'Fabrice', '0784651740', 'Rwanda', 'City of Kigali', 'Kigali', 'KN 57 St', '250', '2024-07-15 13:26:39', '0000-00-00 00:00:00', '0', '1'),
(27, '229', '27', '13740735', 'test', 'test', '898978956454', 'Rwanda', 'state', 'city', 'street', '226012', '2024-07-23 10:58:29', '0000-00-00 00:00:00', '0', '1'),
(28, '229', '28', '25570693', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-07-23 11:42:46', '0000-00-00 00:00:00', '0', '1'),
(29, '229', '29', '66521130', 'Anisha', 'Yadav', '08115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-07-23 11:45:01', '0000-00-00 00:00:00', '0', '1'),
(30, '229', '30', '61646038', 'Anisha', 'Yadav', '8115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 07:53:28', '2024-08-05 07:53:28', '0', '1'),
(31, '229', '31', '22550189', 'Anisha', 'Yadav', '8115520625', 'Rwanda', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinp', '221718', '2024-08-05 11:39:21', '0000-00-00 00:00:00', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `international_details_package_information`
--

CREATE TABLE `international_details_package_information` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `international_id` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `no_of_box` varchar(40) NOT NULL,
  `weight_box` varchar(40) NOT NULL,
  `height` varchar(40) NOT NULL,
  `width` varchar(40) NOT NULL,
  `depth` varchar(40) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `product_type` varchar(40) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `total_amount` varchar(40) NOT NULL,
  `invoice_amount` varchar(40) NOT NULL,
  `order_status` enum('1','2','3','4') NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `date_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `international_details_package_information`
--

INSERT INTO `international_details_package_information` (`id`, `user_id`, `international_id`, `order_id`, `no_of_box`, `weight_box`, `height`, `width`, `depth`, `remark`, `product_type`, `product_name`, `quantity`, `total_amount`, `invoice_amount`, `order_status`, `date_created`, `date_update`, `is_deleted`) VALUES
(1, '1', '37926068', '1', '2', '1', '2', '2', '2', '', '5', 'FANS', '3', '150', '240', '4', '2024-06-10 07:49:43', '2024-06-10 07:49:43', '0'),
(2, '30', '25028010', '2', '1', '0.5', '1', '1', '1', '', '1', 'book', '1', '100', '100', '4', '2024-06-29 06:16:43', '2024-06-29 06:16:43', '0'),
(3, '56', '74134279', '3', '1', '1', '1', '1', '1', '', '1', 'book', '1', '100', '100', '1', '2024-06-22 12:11:40', '0000-00-00 00:00:00', '0'),
(4, '56', '49373069', '4', '1', '1', '1', '1', '1', '', '1', 'book', '1', '100', '100', '1', '2024-06-22 12:13:38', '0000-00-00 00:00:00', '0'),
(5, '56', '64155090', '5', '1', '1', '1', '1', '1', '', '1', 'book', '1', '100', '100', '1', '2024-06-22 12:16:22', '0000-00-00 00:00:00', '0'),
(6, '1', '8459387', '6', '1', '1', '1', '1', '1', '', '1', 'book', '1', '100', '100', '1', '2024-06-23 14:09:32', '0000-00-00 00:00:00', '0'),
(7, '229', '94454845', '7', '1', '1', '1.5', '1.5', '1.5', '', '1', 'book', '1', '100', '100', '1', '2024-08-05 08:10:03', '2024-08-05 08:10:03', '0'),
(8, '229', '15087651', '8', '1', '1', '1.5', '1.5', '1.5', '', '1', 'book', '1', '100', '100', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(9, '229', '93141458', '9', '1', '1', '1.5', '1.5', '1.5', '', '1', 'book', '1', '100', '100', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(10, '67', '73040802', '10', '5', '2', '2', '2', '2', '', '1', 'Series Book Comics', '3', '150', '450', '1', '2024-06-24 09:20:30', '0000-00-00 00:00:00', '0'),
(11, '229', '74503139', '11', '1', '1', '1', '1', '1', '', '2', 'book', '1', '1', '1', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(12, '229', '62442379', '12', '1', '1', '1', '1', '1', '', '1', 'book', '1', '1', '1', '1', '2024-08-05 08:07:39', '2024-08-05 08:07:39', '0'),
(13, '229', '77920424', '13', '1', '1', '1', '1', '1', '', '2', 'book', '1', '1900', '1900', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(14, '66', '59084399', '14', '2', '121', '2', '2', '2', '', '1', 'testing', '12', '120', '1440', '1', '2024-06-24 10:53:19', '0000-00-00 00:00:00', '0'),
(15, '229', '82361465', '15', '1', '1', '1.5', '1.5', '1.5', '', '6', 'book', '1', '100', '100', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(16, '229', '43120907', '16', '1', '1', '1.5', '1.5', '1.5', '', '7', 'book', '1', '1', '1', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(17, '229', '79889355', '17', '1', '1', '1', '1', '1', '', '2', 'book', '1', '100', '100', '4', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(18, '229', '8028532', '18', '1', '1', '1', '1.5', '1', '', '1', 'book', '1', '100', '100', '4', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(19, '229', '69566460', '19', '1', '1', '1.5', '1.5', '1.5', '', '1', 'book', '1', '100', '100', '4', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(20, '229', '58781728', '20', '1', '0.5', '1', '1', '1', '', '7', 'book', '1', '100', '100', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(21, '229', '18863085', '21', '1', '1', '1', '1', '1', '', '7', 'book', '1', '100', '100', '1', '2024-08-05 08:12:02', '2024-08-05 08:12:02', '0'),
(22, '229', '15721974', '22', '1', '1', '1', '1', '1', '', '1', 'book', '1', '100', '100', '2', '2024-08-05 08:05:12', '2024-08-05 08:05:12', '0'),
(23, '3', '55443020', '23', '2', '0.5', '1', '1', '1', '', '4', 'eeee', '1', '123', '123', '2', '2024-07-01 11:42:03', '2024-07-01 11:42:03', '0'),
(24, '229', '24201068', '24', '1', '0.5', '1.5', '1.5', '1', '', '1', 'book', '1', '1', '1', '4', '2024-07-13 04:56:47', '2024-07-13 04:56:47', '0'),
(25, '229', '25647898', '25', '1', '1', '1', '1', '1', 'Good ', '1', 'book', '1', '1', '1', '4', '2024-07-09 06:38:18', '2024-07-09 06:38:18', '0'),
(26, '9', '73677653', '26', '3', '100', '158', '142', '99', 'please fullfill the order as soon as possible', '2', 'macbooks', '10', '700', '8400', '1', '2024-07-15 13:26:39', '0000-00-00 00:00:00', '0'),
(27, '9', '73677653', '26', '3', '100', '158', '142', '99', 'please fullfill the order as soon as possible', '4', 'Books', '14', '100', '8400', '1', '2024-07-15 13:26:39', '0000-00-00 00:00:00', '0'),
(28, '229', '13740735', '27', '2', '2.5', '12', '12', '12', 'test', '4', 'test', '12', '120', '1440', '1', '2024-07-23 10:58:29', '0000-00-00 00:00:00', '0'),
(29, '229', '25570693', '28', '1', '0.5', '1.5', '1.5', '1.5', '', '8', 'book', '1', '111', '111', '2', '2024-07-23 07:43:07', '2024-07-23 07:43:07', '0'),
(30, '229', '66521130', '29', '1', '0.5', '1', '1', '1', '', '5', 'xyz', '1', '100', '100', '2', '2024-07-23 07:45:21', '2024-07-23 07:45:21', '0'),
(31, '229', '61646038', '30', '1', '1', '1.5', '1.5', '1.5', '', '6', 'xyz', '2', '100', '200', '1', '2024-08-05 07:53:24', '2024-08-05 07:53:24', '0'),
(32, '229', '22550189', '31', '1', '0.5', '1.5', '1.5', '1.5', '', '2', 'xyz', '2', '100', '200', '1', '2024-08-05 11:39:21', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `international_indian_pickup_address`
--

CREATE TABLE `international_indian_pickup_address` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `international_id` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `street_address` varchar(80) NOT NULL,
  `pin_code` varchar(40) NOT NULL,
  `mobile_number` varchar(40) NOT NULL,
  `image_path1` varchar(40) NOT NULL,
  `image_path2` varchar(40) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `international_indian_pickup_address`
--

INSERT INTO `international_indian_pickup_address` (`id`, `user_id`, `order_id`, `international_id`, `fname`, `lname`, `email`, `country`, `state`, `city`, `street_address`, `pin_code`, `mobile_number`, `image_path1`, `image_path2`, `created_date`, `updated_date`) VALUES
(1, '1', '1', '37926068', 'Fname Pickup', 'Lname Pickup', 'developerprakharpandey@gmail.com', '1', 'State', 'City', 'Street Address 1', '226012', '8960790891', 'public/uploads/171771840029771.webp', 'public/uploads/171771840079536.png', '2024-06-07 20:23:08', '0000-00-00 00:00:00'),
(2, '30', '2', '25028010', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '8115520625', 'public/uploads/171901440084895.png', 'public/uploads/171901440015263.png', '2024-06-22 10:59:49', '0000-00-00 00:00:00'),
(3, '56', '3', '74134279', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171901440099135.png', 'public/uploads/171901440081871.png', '2024-06-22 12:11:40', '0000-00-00 00:00:00'),
(4, '56', '4', '49373069', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171901440025405.png', 'public/uploads/171901440096985.png', '2024-06-22 12:13:38', '0000-00-00 00:00:00'),
(5, '56', '5', '64155090', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171901440030294.png', 'public/uploads/1719014400806.png', '2024-06-22 12:16:22', '0000-00-00 00:00:00'),
(6, '1', '6', '8459387', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/1719100800912.png', 'public/uploads/171910080046037.png', '2024-06-23 14:09:32', '0000-00-00 00:00:00'),
(7, '229', '7', '94454845', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720069238.png', 'public/uploads/171918720016372.png', '2024-08-05 08:10:21', '2024-08-05 08:10:21'),
(8, '225', '8', '15087651', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720055493.png', 'public/uploads/17191872007809.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(9, '225', '9', '93141458', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720034640.png', 'public/uploads/17191872009305.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(10, '67', '10', '73040802', 'Anisha', 'Yadav', 'anisha@yahoo.com', '1', 'Uttar Pradesh', 'New York', '276/5', '226012', '8960790891', 'public/uploads/171918720056880.png', 'public/uploads/171918720038663.png', '2024-06-24 09:20:30', '0000-00-00 00:00:00'),
(11, '225', '11', '74503139', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720037075.png', 'public/uploads/171918720088585.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(12, '229', '12', '62442379', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720078516.png', 'public/uploads/171918720053520.png', '2024-08-05 08:07:24', '2024-08-05 08:07:24'),
(13, '225', '13', '77920424', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720012414.png', 'public/uploads/171918720080520.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(14, '66', '14', '59084399', 'Prakhar', 'Pandey', 'test@gmail.com', '1', 'state', 'city', 'address 1 ', '223201', '89854652321', 'public/uploads/171918720063920.png', 'public/uploads/17191872005101.png', '2024-06-24 10:53:19', '0000-00-00 00:00:00'),
(15, '225', '15', '82361465', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720052560.png', 'public/uploads/171918720020349.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(16, '225', '16', '43120907', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720079023.png', 'public/uploads/171918720041136.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(17, '225', '17', '79889355', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720088725.png', 'public/uploads/171918720031463.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(18, '225', '18', '8028532', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720055496.png', 'public/uploads/171918720093340.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(19, '225', '19', '69566460', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/171918720075884.png', 'public/uploads/171918720095324.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(20, '225', '20', '58781728', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '000000', '08115520625', 'public/uploads/171970560025848.png', 'public/uploads/171970560039334.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(21, '225', '21', '18863085', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '000000', '08115520625', 'public/uploads/171970560087517.png', 'public/uploads/171970560022662.png', '2024-08-05 08:11:14', '2024-08-05 08:11:14'),
(22, '229', '22', '15721974', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '000000', '08115520625', 'public/uploads/171970560076320.png', 'public/uploads/17197056004478.png', '2024-08-05 08:04:42', '2024-08-05 08:04:42'),
(23, '3', '23', '55443020', 'eeeee', 'eeeee', 'hissonfabu@gmail.com', '1', '', 'eeee', 'eeee', 'eeeee', '', 'public/uploads/171979200097871.jpeg', 'public/uploads/171979200097824.png', '2024-07-01 14:07:13', '0000-00-00 00:00:00'),
(24, '229', '24', '24201068', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '8115520625', 'public/uploads/172048320017085.jpg', 'public/uploads/172048320044171.png', '2024-07-09 04:53:10', '0000-00-00 00:00:00'),
(25, '229', '25', '25647898', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/172048320010623.jpg', 'public/uploads/172048320092071.jpg', '2024-07-09 07:11:06', '0000-00-00 00:00:00'),
(26, '9', '26', '73677653', 'Eguriro', 'Devices LTD', 'hissonfabu@gmail.com', '1', 'Florida', 'Sarasota', '4283 Express Lane', '34238', '9415386941 ', 'public/uploads/172100160029118.pdf', 'public/uploads/17210016003186.jpeg', '2024-07-15 13:26:39', '0000-00-00 00:00:00'),
(27, '229', '27', '13740735', 'test', 'test', 'test@gmail.com', '1', 'state', 'city', 'address', '226012', '5894965656', 'public/uploads/172169280051006.jpg', 'public/uploads/172169280017378.jpg', '2024-07-23 10:58:29', '0000-00-00 00:00:00'),
(28, '229', '28', '25570693', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/172169280017045.png', 'public/uploads/172169280042155.png', '2024-07-23 11:42:46', '0000-00-00 00:00:00'),
(29, '229', '29', '66521130', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '08115520625', 'public/uploads/172169280011562.png', 'public/uploads/17216928005786.png', '2024-07-23 11:45:01', '0000-00-00 00:00:00'),
(30, '229', '30', '61646038', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '8115520625', 'public/uploads/172272960089951.png', 'public/uploads/172272960036020.jpg', '2024-08-05 07:53:19', '2024-08-05 07:53:19'),
(31, '229', '31', '22550189', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '3', 'Uttar Pradesh', 'Ballia', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '221718', '8115520625', 'public/uploads/172281600057823.png', 'public/uploads/172281600098983.jpg', '2024-08-05 11:39:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `international_order_details`
--

CREATE TABLE `international_order_details` (
  `order_id` int(11) NOT NULL,
  `international_id` varchar(40) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `order_type` varchar(40) NOT NULL,
  `courier_type` varchar(40) NOT NULL,
  `client_order_id` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `mobile_number` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tracking_number` varchar(40) NOT NULL,
  `order_status` enum('1','2','3') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `international_order_details`
--

INSERT INTO `international_order_details` (`order_id`, `international_id`, `user_id`, `order_type`, `courier_type`, `client_order_id`, `fname`, `lname`, `mobile_number`, `email`, `tracking_number`, `order_status`, `is_deleted`, `created_date`, `update_date`) VALUES
(1, '37926068', '1', 'Commercial', '1', '7894562130', 'Prakhar', 'Pandey', '8960790891', 'info@pamsar.com', '', '1', '0', '2024-06-07 20:23:08', '0000-00-00 00:00:00'),
(2, '25028010', '30', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '8115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-22 10:59:49', '0000-00-00 00:00:00'),
(3, '74134279', '56', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-22 12:11:40', '0000-00-00 00:00:00'),
(4, '49373069', '56', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-22 12:13:38', '0000-00-00 00:00:00'),
(5, '64155090', '56', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-22 12:16:22', '0000-00-00 00:00:00'),
(6, '8459387', '1', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-23 14:09:32', '0000-00-00 00:00:00'),
(7, '94454845', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 06:18:49', '0000-00-00 00:00:00'),
(8, '15087651', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 06:23:33', '0000-00-00 00:00:00'),
(9, '93141458', '65', 'Commercial', '2', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 07:46:52', '0000-00-00 00:00:00'),
(10, '73040802', '67', 'Gift', '1', '134234', 'Prakhar', 'Pandey', '8960790891', 'developerprakharpandey@gmail.com', '', '1', '0', '2024-06-24 09:20:30', '0000-00-00 00:00:00'),
(11, '74503139', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 09:24:05', '0000-00-00 00:00:00'),
(12, '62442379', '65', 'Commercial', '2', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 10:10:43', '0000-00-00 00:00:00'),
(13, '77920424', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 10:24:55', '0000-00-00 00:00:00'),
(14, '59084399', '66', 'Commercial', '1', '154023', 'testing', 'testing', '1452015', 'developerprakharpandey@gmail.com', '', '1', '0', '2024-06-24 10:53:19', '0000-00-00 00:00:00'),
(15, '82361465', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 11:19:01', '0000-00-00 00:00:00'),
(16, '43120907', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 11:40:16', '0000-00-00 00:00:00'),
(17, '79889355', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 11:44:52', '0000-00-00 00:00:00'),
(18, '8028532', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 11:49:47', '0000-00-00 00:00:00'),
(19, '69566460', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-24 12:30:43', '0000-00-00 00:00:00'),
(20, '58781728', '65', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-30 05:00:04', '0000-00-00 00:00:00'),
(21, '18863085', '65', 'Commercial', '2', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-06-30 10:59:59', '0000-00-00 00:00:00'),
(22, '15721974', '229', 'Commercial', '1', '33333', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-08-05 08:02:23', '2024-08-05 08:02:23'),
(23, '55443020', '3', 'Gift', '2', '44444', 'eeeee', 'eeeee', 'eeeee', 'hissonfabu@gmail.com', '', '1', '0', '2024-07-01 14:07:13', '0000-00-00 00:00:00'),
(24, '24201068', '229', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-07-09 04:53:10', '0000-00-00 00:00:00'),
(25, '25647898', '229', 'Commercial', '1', '33333', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-07-09 07:11:06', '0000-00-00 00:00:00'),
(26, '73677653', '9', 'Gift', '2', '14-10680-885876', 'Abijuru', 'Fabrice', '0784651740', 'wideshop1@gmail.com', '', '1', '0', '2024-07-15 13:26:39', '0000-00-00 00:00:00'),
(27, '13740735', '229', 'Personal', '2', '12315646', 'tets', 'tests', '8798798465462', 'tseten@gmail.com', '', '1', '0', '2024-07-23 10:58:29', '0000-00-00 00:00:00'),
(28, '25570693', '229', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-07-23 11:42:46', '0000-00-00 00:00:00'),
(29, '66521130', '229', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-07-23 11:45:01', '0000-00-00 00:00:00'),
(30, '61646038', '229', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '08115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-08-05 07:53:56', '2024-08-05 07:53:56'),
(31, '22550189', '229', 'Commercial', '1', '1234', 'Anisha', 'Yadav', '8115520625', 'anishaiert1996@gmail.com', '', '1', '0', '2024-08-05 11:39:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `content` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `order_type` enum('1','2','3','4') NOT NULL,
  `notification_type` enum('0','1') NOT NULL,
  `is_read` enum('0','1') NOT NULL,
  `is_delete` enum('0','1') NOT NULL,
  `created_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `content`, `order_id`, `order_type`, `notification_type`, `is_read`, `is_delete`, `created_time`, `updated_time`) VALUES
(1, '229', ' Created new order', '637075', '1', '0', '1', '0', '2024-07-23 07:34:15', '2024-07-23 07:34:15'),
(2, '229', '3', '637075', '1', '1', '1', '0', '2024-07-23 07:35:24', '2024-07-23 07:35:24'),
(3, '229', ' Created new order', '264549', '1', '0', '1', '0', '2024-07-23 07:36:36', '2024-07-23 07:36:36'),
(4, '229', '3', '264549', '1', '1', '1', '0', '2024-07-23 07:38:02', '2024-07-23 07:38:02'),
(5, '229', ' Created new order', '853661', '1', '0', '1', '0', '2024-07-23 07:38:56', '2024-07-23 07:38:56'),
(6, '229', '3', '853661', '1', '1', '1', '0', '2024-07-23 07:55:55', '2024-07-23 07:55:55'),
(7, '229', ' Created new order', '1237957', '2', '0', '1', '0', '2024-07-23 07:41:10', '2024-07-23 07:41:10'),
(8, '229', '2', '1237957', '2', '1', '1', '0', '2024-07-24 06:21:24', '2024-07-24 06:21:24'),
(9, '229', ' Created new order', '25570693', '3', '0', '1', '0', '2024-07-23 07:43:02', '2024-07-23 07:43:02'),
(10, '229', '2', '25570693', '3', '1', '1', '0', '2024-07-23 07:44:00', '2024-07-23 07:44:00'),
(11, '229', ' Created new order', '66521130', '3', '0', '1', '0', '2024-07-23 07:45:13', '2024-07-23 07:45:13'),
(12, '229', '2', '66521130', '3', '1', '1', '0', '2024-07-23 07:55:49', '2024-07-23 07:55:49'),
(13, '229', '4', '1237957', '2', '1', '0', '0', '2024-07-24 10:23:59', '0000-00-00 00:00:00'),
(14, '300', ' Created new order', '4213210', '2', '0', '1', '0', '2024-07-24 16:36:23', '2024-07-24 16:36:23'),
(15, '300', '2', '4213210', '2', '1', '1', '0', '2024-07-28 03:15:30', '2024-07-28 03:15:30'),
(16, '3', '2', '531579', '1', '1', '1', '0', '2024-07-25 10:59:00', '2024-07-25 10:59:00'),
(17, '29', ' Created new order', '373822', '1', '0', '1', '0', '2024-07-31 04:07:40', '2024-07-31 04:07:40'),
(18, '314', ' Created new order', '711741', '1', '0', '1', '0', '2024-08-05 02:02:06', '2024-08-05 02:02:06'),
(19, '314', ' Created new order', '5330750', '2', '0', '1', '0', '2024-08-05 04:39:00', '2024-08-05 04:39:00'),
(20, '314', ' Created new order', '61646038', '3', '0', '1', '0', '2024-08-04 06:32:31', '2024-08-04 06:32:31'),
(21, '229', ' Created new order', '542910', '1', '0', '1', '0', '2024-08-05 08:07:40', '2024-08-05 08:07:40'),
(22, '229', ' Created new order', '2101992', '2', '0', '1', '0', '2024-08-05 08:07:49', '2024-08-05 08:07:49'),
(23, '229', ' Created new order', '22550189', '3', '0', '1', '0', '2024-08-05 07:45:21', '2024-08-05 07:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_images`
--

CREATE TABLE `order_images` (
  `id` int(11) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `shipment_type` enum('1','2','3') NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_images`
--

INSERT INTO `order_images` (`id`, `order_id`, `image`, `shipment_type`, `created_date`, `update_date`, `is_deleted`) VALUES
(1, '4531286', 'public/uploads/17216064001865.jpg', '2', '2024-07-22 09:48:48', '0000-00-00 00:00:00', '0'),
(2, '4531286', 'public/uploads/172160640040098.jpg', '2', '2024-07-22 09:48:48', '0000-00-00 00:00:00', '0'),
(3, '4531286', 'public/uploads/172160640088502.jpg', '2', '2024-07-22 09:48:48', '0000-00-00 00:00:00', '0'),
(4, '263827', 'public/uploads/172160640064278.jpg', '1', '2024-07-22 10:32:19', '0000-00-00 00:00:00', '0'),
(5, '263827', 'public/uploads/172160640061529.jpg', '1', '2024-07-22 10:32:19', '0000-00-00 00:00:00', '0'),
(6, '263827', 'public/uploads/172160640026208.jpg', '1', '2024-07-22 10:32:19', '0000-00-00 00:00:00', '0'),
(7, '1237957', 'public/uploads/172177920095173.jpg', '2', '2024-07-24 10:22:09', '0000-00-00 00:00:00', '0'),
(8, '1237957', 'public/uploads/172177920081197.jpg', '2', '2024-07-24 10:22:09', '0000-00-00 00:00:00', '0'),
(9, '1237957', 'public/uploads/172177920051479.jpg', '2', '2024-07-24 10:22:09', '0000-00-00 00:00:00', '0'),
(10, '531579', 'public/uploads/172186560035870.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(11, '531579', 'public/uploads/172186560098932.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(12, '531579', 'public/uploads/172186560090889.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(13, '531579', 'public/uploads/172186560063429.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(14, '531579', 'public/uploads/1721865600246.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(15, '531579', 'public/uploads/172186560032263.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(16, '531579', 'public/uploads/172186560027966.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(17, '531579', 'public/uploads/172186560019174.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(18, '531579', 'public/uploads/172186560067240.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(19, '531579', 'public/uploads/172186560081334.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(20, '531579', 'public/uploads/172186560024515.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0'),
(21, '531579', 'public/uploads/17218656009911.png', '1', '2024-07-25 14:51:07', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `email`, `phone`, `address`, `date`) VALUES
(1, '1', 'anisha1234@gmail.com', '0987654321', 'ballia', '2023-12-23 03:19:14'),
(2, '1', 'anisha1234@gmail.com', '0987654321', 'ballia', '2023-12-23 03:19:14'),
(3, '1', 'anisha1234@gmail.com', '0987654321', 'ballia', '2023-12-23 03:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `shopnship_item_details`
--

CREATE TABLE `shopnship_item_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `product_type` varchar(40) NOT NULL,
  `courier_type` varchar(40) NOT NULL,
  `order_sub_type` varchar(40) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `store` varchar(40) NOT NULL,
  `color` varchar(40) NOT NULL,
  `size` varchar(40) NOT NULL,
  `item_price` varchar(40) NOT NULL,
  `total_amount` varchar(40) NOT NULL,
  `grand_total` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `shopnship_id` varchar(40) NOT NULL,
  `from_country_id` varchar(40) NOT NULL,
  `address_id` varchar(40) NOT NULL,
  `order_status` enum('1','2','3','4') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shopnship_item_details`
--

INSERT INTO `shopnship_item_details` (`id`, `user_id`, `product_type`, `courier_type`, `order_sub_type`, `product_name`, `store`, `color`, `size`, `item_price`, `total_amount`, `grand_total`, `quantity`, `remark`, `order_id`, `shopnship_id`, `from_country_id`, `address_id`, `order_status`, `is_deleted`, `created_date`, `updated_date`) VALUES
(1, '30', '9', 'Normal', 'Commercial', 'Jeans', 'Amazon Online Store1', 'red', 'M', '', '1200', '1200', '10', '', '1312', '290579', '2', '25', '1', '0', '2024-06-07 19:31:56', '2024-06-07 15:31:56'),
(2, '30', '9', 'Normal', 'Personal', 'tests', '12321', 'red', 'size', '', '1615113', '1615113', '123', '', '331312', '981559', '2', '25', '1', '0', '2024-05-23 13:52:49', '0000-00-00 00:00:00'),
(3, '30', '9', 'Normal', 'Personal', 'tstst', '24', 'red', 'size', '', '0', '1615113', '1', '', '1212312', '981559', '2', '25', '1', '0', '2024-05-23 13:52:49', '0000-00-00 00:00:00'),
(4, '30', '9', 'Premium', 'Gift', 'testing', 'package size', 'color', 'size', '', '1000', '2000', '10', '', '223424', '277637', '3', '21', '4', '0', '2024-05-27 10:53:10', '2024-05-27 06:53:10'),
(5, '30', '9', 'Premium', 'Gift', 'testingjs', 'packagejs', 'red', 'size', '', '1000', '2000', '10', '', 'trackingjs', '277637', '3', '21', '4', '0', '2024-05-27 10:53:18', '2024-05-27 06:53:18'),
(6, '30', '9', 'Normal', 'Sample', 'test', '1413', 'red', 'size', '', '10000', '11476', '100', '', '123131', '890246', '3', '21', '1', '0', '2024-05-23 14:21:11', '0000-00-00 00:00:00'),
(7, '30', '2', 'Normal', 'Sample', 'TEST', '123', 'red', 'size', '', '1476', '11476', '12', '', '2234241', '890246', '3', '21', '1', '0', '2024-05-27 08:12:32', '2024-05-27 04:12:32'),
(8, '30', '9', 'Premium', 'Gift', 'test2', '12', 'red', '12', '', '132', '14664', '12', '', '112', '772996', '3', '25', '1', '0', '2024-05-23 14:33:56', '0000-00-00 00:00:00'),
(9, '30', '9', 'Premium', 'Gift', 'tests112', '123', 'red', '112', '', '14532', '14664', '12', '', '122312', '772996', '3', '25', '1', '0', '2024-05-23 14:33:56', '0000-00-00 00:00:00'),
(10, '1', '9', 'Normal', 'Commercial', 'fab test', '3x4x5', 'red', '5', '', '40', '40', '1', '', '12345678', '66574', '1', '11', '1', '0', '2024-05-23 14:43:38', '0000-00-00 00:00:00'),
(11, '1', '8', 'Premium', 'Commercial', 'candle', '10x10x10', 'red', '3.5', '', '19', '19', '1', '', '887933338', '461651', '3', '27', '1', '0', '2024-05-23 15:59:53', '0000-00-00 00:00:00'),
(12, '1', '2', 'Premium', 'Gift', 'adminupdate', '123', 'red', '10', '', '100', '100', '10', '', '2321', '256007', '2', '27', '4', '0', '2024-06-27 14:08:08', '2024-06-27 10:08:08'),
(13, '30', '2', 'Premium', 'Gift', 'test', '7x7x7', 'red', '45', '', '1681', '7831', '41', '', '78945', '342086', '2', '25', '1', '0', '2024-05-26 19:49:52', '0000-00-00 00:00:00'),
(14, '30', '1', 'Premium', 'Gift', 'test', '5x5x5', 'red', '51', '', '6150', '7831', '41', '', '98987', '342086', '2', '25', '1', '0', '2024-05-26 19:49:52', '0000-00-00 00:00:00'),
(15, '3', '5', 'Premium', 'Gift', 'cat', '2x4x3', 'red', '1', '', '42', '42', '2', '', '273611119061', '817888', '1', '26', '1', '0', '2024-05-26 23:03:43', '0000-00-00 00:00:00'),
(16, '30', '1', 'Normal', 'Commercial', 'item_type', 'store', 'red', '11', '', '11200', '11200', '112', '', '755755', '878732', '3', '19', '1', '0', '2024-05-27 10:16:20', '2024-05-27 06:16:20'),
(17, '30', '5', 'Normal', 'Commercial', 'bulbs', '4x4x4', 'red', '10', '12', '1440', '1440', '12', '', '121212', '695497', '2', '19', '2', '0', '2024-06-07 15:35:39', '2024-06-07 11:35:39'),
(18, '30', '1', 'Normal', 'Commercial', 'gamer', '3x3x3', 'red', '5', '100', '1000', '1000', '10', '', '5552221', '695497', '2', '19', '4', '0', '2024-06-07 15:35:08', '2024-06-07 11:35:08'),
(19, '30', '1', 'Normal', 'Commercial', 'book', '2x2x2', 'red', '2', '200', '2400', '11100', '12', '', '2225225', '30820', '2', '21', '1', '0', '2024-05-27 18:15:26', '0000-00-00 00:00:00'),
(20, '30', '2', 'Normal', 'Commercial', 'cereals', '3x3x3', 'red', '3', '300', '3900', '11100', '13', '', '33353335', '30820', '2', '21', '1', '0', '2024-05-27 18:15:26', '0000-00-00 00:00:00'),
(21, '30', '3', 'Normal', 'Commercial', 'cosmetics', '4x4x4', 'red', '4', '400', '4800', '11100', '12', '', '44454445', '30820', '2', '21', '1', '0', '2024-05-27 18:15:26', '0000-00-00 00:00:00'),
(22, '3', '1', 'Normal', 'Sample', 'bible', '10x12x19', 'red', '4', '30', '30', '930', '1', 'combine the packages into one', '1480281246', '35334', '2', '28', '1', '0', '2024-05-28 12:24:21', '0000-00-00 00:00:00'),
(23, '3', '5', 'Normal', 'Sample', 'ASUS', '30x44x55', 'red', '7', '450', '900', '930', '2', 'combine the packages into one', '1970808711', '35334', '2', '29', '1', '0', '2024-05-28 12:24:21', '0000-00-00 00:00:00'),
(24, '3', '1', 'Normal', 'Sample', 'bible', '10x12x19', 'red', '4', '30', '30', '930', '1', 'combine the packages into one', '1480281246', '865826', '2', '30', '1', '0', '2024-05-28 12:24:22', '0000-00-00 00:00:00'),
(25, '3', '5', 'Normal', 'Sample', 'ASUS', '30x44x55', 'red', '7', '450', '900', '930', '2', 'combine the packages into one', '1970808711', '865826', '2', '31', '1', '0', '2024-05-28 12:24:22', '0000-00-00 00:00:00'),
(26, '3', '3', 'Premium', 'Commercial', 'cccc', '3x4x5', 'red', '3', '5', '30', '30', '6', '', '12228947755', '719485', '2', '30', '1', '0', '2024-05-28 12:26:07', '0000-00-00 00:00:00'),
(27, '3', '4', 'Premium', 'Personal', 'aaaa', '5x5x5', 'red', '8', '10', '10', '74', '1', '', '1122', '954605', '6', '26', '1', '0', '2024-05-28 12:50:00', '0000-00-00 00:00:00'),
(28, '3', '5', 'Premium', 'Personal', 'Dinne', '4x4x4', 'red', '7', '20', '20', '74', '1', '', '1111', '954605', '6', '26', '1', '0', '2024-05-28 12:50:00', '0000-00-00 00:00:00'),
(29, '3', '6', 'Premium', 'Personal', 'bread', '3x3x3', 'red', '3.5', '22', '44', '74', '2', '', '2222', '954605', '6', '26', '1', '0', '2024-05-28 12:50:00', '0000-00-00 00:00:00'),
(30, '3', '1', 'Normal', 'Commercial', 'mybooks', '2x2x2', 'red', '2', '325.2', '6829.2', '6829.2', '21', '', '11221122', '776616', '2', '28', '4', '0', '2024-06-27 14:30:18', '2024-06-27 10:30:18'),
(31, '3', '9', 'Premium', 'Personal', '2nd test', '59x49x49', 'red', '33', '30', '90', '110', '3', '', '9999', '381746', '3', '28', '2', '0', '2024-05-28 19:58:10', '2024-05-28 15:58:10'),
(32, '3', '4', 'Premium', 'Personal', '3rd test', '37x38x48', 'red', '28', '20', '20', '110', '1', '', '8888', '381746', '3', '28', '2', '0', '2024-05-28 19:58:10', '2024-05-28 15:58:10'),
(33, '3', '4', 'Premium', 'Gift', 'test', '4x4x4', 'red', '1', '30.9', '61.8', '61.8', '2', '', '8765', '496377', '5', '29', '4', '0', '2024-06-07 15:25:04', '2024-06-07 11:25:04'),
(34, '3', '3', 'Premium', 'Gift', 'eee', '3x4x2', 'red', '1', '20.9', '20.9', '82.69999999999999', '1', '', '3333', '496377', '5', '29', '4', '0', '2024-05-29 11:03:29', '2024-05-29 07:03:29'),
(35, '9', '9', 'Normal', 'Personal', 'Tablets and candles', '12x13x15', 'red', '12', '290', '290', '880', '1', '', '0987654321', '243698', '4', '17', '4', '0', '2024-07-15 12:50:48', '2024-07-15 08:50:48'),
(36, '9', '5', 'Normal', 'Personal', 'iPhone ', '12x6x7', 'red', '1', '590', '590', '880', '1', '', '3665522290', '243698', '4', '17', '4', '0', '2024-07-15 12:50:48', '2024-07-15 08:50:48'),
(37, '30', '1', 'Normal', 'Commercial', 'books ', 'xl', 'red', '1', '10', '10', '10', '1', '', '123456', '997268', '2', '19', '1', '0', '2024-06-22 14:11:11', '0000-00-00 00:00:00'),
(38, '30', '2', 'Normal', 'Sample', 'xyz', 'xx', 'red', '1', '100', '100', '100', '1', 'remark', '123456', '1989', '2', '19', '1', '0', '2024-06-22 14:15:16', '0000-00-00 00:00:00'),
(39, '30', '1', 'Normal', 'Commercial', 'books ', 'xx', 'red', '1', '50', '50', '50', '1', '', '123456', '320810', '1', '19', '1', '0', '2024-06-22 14:23:56', '0000-00-00 00:00:00'),
(40, '30', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '110', '110', '110', '1', '', '123456', '267869', '1', '19', '4', '0', '2024-06-29 17:03:44', '2024-06-29 13:03:44'),
(41, '56', '1', 'Normal', 'Commercial', 'book', 'Amazon ', 'red', '1', '10', '10', '10', '1', '', '123456', '86495', '1', '32', '1', '0', '2024-06-22 15:59:41', '0000-00-00 00:00:00'),
(42, '56', '1', 'Normal', 'Commercial', 'book', 'Amazon ', 'red', '1', '10', '10', '10', '1', '', '123456', '447281', '1', '32', '1', '0', '2024-06-22 16:00:48', '0000-00-00 00:00:00'),
(43, '30', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '10', '10', '10', '1', '', '123456', '210012', '1', '19', '4', '0', '2024-06-29 10:16:07', '2024-06-29 06:16:07'),
(44, '1', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '10', '20', '20', '2', '', '123456', '718066', '1', '11', '1', '0', '2024-06-23 18:07:04', '0000-00-00 00:00:00'),
(45, '229', '1', 'Normal', 'Commercial', 'Anisha Yadav', 'xl', 'red', '1', '1100', '1100', '1100', '1', '', '123456', '419715', '2', '35', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(46, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '10', '10', '10', '1', '', '123456', '308357', '1', '34', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(47, '67', '1', 'Normal', 'Commercial', 'Notbook Series', '2x2x2', 'red', '10', '250', '500', '500', '2', 'Testing the email functionality', '1452142', '562226', '2', '36', '1', '0', '2024-06-24 12:45:58', '0000-00-00 00:00:00'),
(48, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', 'Xl', '10', '10', '10', '1', '', '123456', '223340', '2', '37', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(49, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '10', '10', '10', '1', '', '123456', '320449', '1', '34', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(50, '229', '1', 'Normal', 'Gift', 'book', 'xl', 'red', '1', '10', '10', '10', '1', '', '123456', '760268', '1', '34', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(51, '66', '1', 'Premium', 'Gift', 'Testbook', '8x8x8', 'red', '2', '1250', '2500', '2500', '2', '', '1458752', '87446', '2', '39', '4', '0', '2024-06-28 14:01:16', '2024-06-28 10:01:16'),
(52, '66', '4', 'Normal', 'Commercial', 'test', '7x7x7', 'red', '3', '1212', '1212', '1212', '1', '', '131312', '628308', '2', '39', '1', '0', '2024-06-24 14:49:29', '0000-00-00 00:00:00'),
(53, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '110', '110', '110', '1', '', '123456', '426198', '1', '34', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(54, '229', '1', 'Normal', 'Commercial', 'book', 'Amazon ', 'red', '1', '10', '10', '10', '1', '', '123456', '666272', '1', '34', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(55, '229', '1', 'Normal', 'Commercial', 'book', 'Amazon ', 'red', '1', '1000', '1000', '1000', '1', '', '123456', '415004', '1', '34', '1', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(56, '229', '2', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '1000', '1000', '1010', '1', '', '123456', '342128', '1', '38', '2', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(57, '229', '1', 'Normal', 'Commercial', 'books ', 'xx', 'red', '1', '10', '10', '1010', '1', '', '123456', '342128', '1', '38', '4', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(58, '229', '1', 'Normal', 'Commercial', 'book', 'Amazon ', 'red', '1', '110', '1100', '1100', '10', '', '123456', '488337', '1', '38', '4', '0', '2024-08-05 12:14:45', '2024-08-05 08:14:45'),
(59, '70', '5', 'Premium', 'Personal', 'phone', '40x30x40', 'red', '1', '500', '500', '800', '1', 'Combine the packages into one package', '276193361401', '364568', '3', '40', '2', '0', '2024-06-26 12:53:10', '2024-06-26 08:53:10'),
(60, '70', '9', 'Premium', 'Personal', 'package', '34x4x55', 'red', '5', '150', '300', '800', '2', 'Combine the packages into one package', '376153341201', '364568', '3', '41', '2', '0', '2024-06-26 12:53:10', '2024-06-26 08:53:10'),
(61, '150', '5', 'Normal', 'Personal', 'AMERA', '45', 'red', '5', '1000', '1000', '1000', '1', '', '34', '682426', '1', '42', '1', '0', '2024-06-30 16:02:43', '0000-00-00 00:00:00'),
(62, '229', '1', 'Normal', 'Commercial', 'Books ', 'xl', 'red', '`', '10', '10', '10', '1', '', '1234', '238091', '2', '44', '4', '0', '2024-07-08 14:42:03', '2024-07-08 10:42:03'),
(63, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '10', '10', '10', '1', '', '1234', '706368', '1', '44', '1', '0', '2024-07-09 10:30:11', '0000-00-00 00:00:00'),
(64, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '80', '80', '80', '1', '', '1234', '263827', '1', '44', '4', '0', '2024-07-09 06:36:27', '2024-07-09 02:36:27'),
(65, '3', '5', 'Premium', 'Commercial', 'cccc', '1x1x1', 'red', '11', '100', '200', '665', '2', 'Please ship them in one package', '10293', '531579', '5', '31', '2', '0', '2024-07-14 10:42:50', '2024-07-14 06:42:50'),
(66, '3', '7', 'Premium', 'Commercial', 'ddfsss', '2x1x2', 'red', '13', '49', '245', '665', '5', 'Please ship them in one package', '563729', '531579', '5', '31', '2', '0', '2024-07-14 10:42:50', '2024-07-14 06:42:50'),
(67, '3', '4', 'Premium', 'Commercial', 'eeress', '1x2x4', 'red', '1', '22', '220', '665', '10', 'Please ship them in one package', '26495', '531579', '5', '31', '2', '0', '2024-07-14 10:42:50', '2024-07-14 06:42:50'),
(68, '229', '4', 'Normal', 'Commercial', 'abc', 'x', 'red', '1', '1000', '1000', '1000', '1', '', '122', '230697', '2', '44', '3', '0', '2024-07-13 08:43:14', '2024-07-13 04:43:14'),
(69, '229', '2', 'Normal', 'Gift', 'test', '2x2x2', 'red', '12', '1520', '18240', '18240', '12', '', '123221', '675671', '3', '44', '1', '0', '2024-07-23 14:52:07', '0000-00-00 00:00:00'),
(70, '229', '1', 'Normal', 'Commercial', 'book', '5x5x5', 'red', '12', '1250', '26250', '26250', '21', '', '123121361', '836001', '3', '44', '1', '0', '2024-07-23 14:53:30', '0000-00-00 00:00:00'),
(71, '229', '1', 'Normal', 'Commercial', 'book', '5x5x5', 'red', '12', '1250', '26250', '26250', '21', '', '123121361', '45389', '3', '44', '1', '0', '2024-07-23 14:54:58', '0000-00-00 00:00:00'),
(72, '229', '1', 'Normal', 'Commercial', 'book', '5x5x5', 'red', '12', '1250', '26250', '26250', '21', '', '123121361', '718305', '3', '44', '1', '0', '2024-07-23 14:55:22', '0000-00-00 00:00:00'),
(73, '229', '1', 'Normal', 'Commercial', 'xyz', '2x', 'red', '1', '10', '10', '10', '1', '', '1234', '637075', '1', '44', '3', '0', '2024-07-23 11:34:25', '2024-07-23 07:34:25'),
(74, '229', '2', 'Normal', 'Commercial', 'xyzzz', 'zz', 'red', '2', '20', '20', '20', '1', '', '1234', '264549', '1', '44', '3', '0', '2024-07-23 11:36:44', '2024-07-23 07:36:44'),
(75, '229', '5', 'Normal', 'Commercial', 'xya', 'x', 'red', '1', '10', '10', '10', '1', '', '1234', '853661', '1', '44', '3', '0', '2024-07-23 11:39:06', '2024-07-23 07:39:06'),
(76, '29', '1', 'Normal', 'Commercial', 'webflow', 'xx', 'red', '2', '500', '500', '500', '1', 'Nice', '123', '373822', '2', '46', '1', '0', '2024-07-29 16:31:13', '0000-00-00 00:00:00'),
(77, '229', '1', 'Normal', 'Commercial', 'book', 'xl', 'red', '1', '10', '10', '10', '1', '', '1234', '711741', '2', '47', '1', '0', '2024-08-05 11:52:38', '2024-08-05 07:52:38'),
(78, '229', '1', 'Normal', 'Commercial', 'book', 'xx', 'red', '1', '10', '10', '10', '1', '', '1234', '542910', '1', '44', '1', '0', '2024-08-05 15:35:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_type`
--

CREATE TABLE `tbl_item_type` (
  `item_type_id` int(11) NOT NULL,
  `item_type_name` varchar(40) NOT NULL,
  `item_type_value` int(40) NOT NULL,
  `item_type_status` int(20) NOT NULL,
  `it_date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_item_type`
--

INSERT INTO `tbl_item_type` (`item_type_id`, `item_type_name`, `item_type_value`, `item_type_status`, `it_date_created`) VALUES
(1, 'Books', 1, 1, '2023-11-21 01:52:58'),
(2, 'Cereals', 2, 1, '0000-00-00 00:00:00'),
(3, 'Cosmetics', 3, 1, '0000-00-00 00:00:00'),
(4, 'Crockery', 4, 1, '0000-00-00 00:00:00'),
(5, 'Electronics', 5, 1, '0000-00-00 00:00:00'),
(6, 'Food items', 6, 1, '0000-00-00 00:00:00'),
(7, 'Handicraft', 7, 1, '0000-00-00 00:00:00'),
(8, 'Home Decor', 8, 1, '0000-00-00 00:00:00'),
(9, 'Others', 9, 1, '2024-05-23 02:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `login_oauth_uid` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verification_key` varchar(50) NOT NULL,
  `is_email_verified` enum('0','1') NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(80) NOT NULL,
  `picture` varchar(80) NOT NULL,
  `address_line` varchar(30) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `reset_pass` varchar(90) NOT NULL,
  `stripecustomerID` varchar(30) NOT NULL,
  `current_active_plan` varchar(30) NOT NULL,
  `is_plan_active` enum('0','1') NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login_oauth_uid`, `fname`, `lname`, `email`, `verification_key`, `is_email_verified`, `phone`, `password`, `image`, `picture`, `address_line`, `landmark`, `zipcode`, `state`, `city`, `reset_pass`, `stripecustomerID`, `current_active_plan`, `is_plan_active`, `created_date`, `update_date`, `status`) VALUES
(1, '', 'Anisha', 'Yadav', 'anisha12@gmail.com', '15310680e2a17a57128b328fa02bbbe8', '1', '7890123456', '33333333', 'public/uploads/170330760089956.png', '', 'belthara', 'belthara', '221719', 'Varanashi', 'Varanashi', 'ce2287379f6130ee1f4eb27ef89d3985', 'cus_PJsFtTQvN4IK6q', '1', '1', '2024-06-24 02:51:55', '2024-06-24 02:51:55', '1'),
(2, '', 'Anish', 'Yadav', 'anishay@gmail.com', '4e601395c020ef997510c6a8d99e3094', '1', '8912763450', 'Anisha123', 'public/uploads/170322120095495.jpeg', '', 'belthara', 'belthara', '221718', 'Ballia', '', '', 'cus_PK5EFYZZc4If1Z', '1', '1', '2024-01-06 00:17:19', '2024-01-06 00:17:19', '1'),
(3, '', 'ABIJURU', 'FABRICE', 'abijuru2003@gmail.com', '7b7f0b715059c8247d6e7f0d933f6119', '1', '0790007008', 'tmnt1234', 'public/uploads/images.png', '', 'kn 72 st', 'Makuza peace plaza', '00000', 'Kigali city', '', '', '', '', '0', '2024-05-18 15:46:51', '2024-05-18 15:46:51', '1'),
(4, '', 'testing', 'testing', 'testing@gmail.com', '3804367f6885e3d570a12dfae23fe63f', '1', '9876543210', 'testing123', 'public/uploads/images.png', '', '', '', '', '', '', '', 'cus_PK6sy8ScvwJCW3', '1', '1', '2024-01-06 01:06:25', '2024-01-06 01:06:25', '1'),
(5, '', 'test', 'test', 'testing@yopmail.com', '463c69bc43b3bceee5dd6933af132041', '1', '23233323', 'testing@yopmail.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-05-14 10:40:41', '2024-05-14 10:40:41', '1'),
(6, '', 'ani', 'yadav', 'ani@gmail.com', '677f3525023c563c875065bf94e20f6b', '1', '1289674534', '12345678', 'public/uploads/170322120028662.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-22 09:09:06', '2023-12-22 09:09:06', '1'),
(7, '', 'Nisha', 'Yadav', 'nisha@gmail.com', '66fc9465b7d80dd21c88083c831b7cfd', '1', '8978123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', 'cus_PK6Qqpkd7BdN0r', '1', '1', '2024-01-06 00:17:57', '2024-01-06 00:17:57', '1'),
(8, '', 'testing', 'QA', 'testingqa@yopmail.com', '527cfeb4595bc60ac0826602adc1908a', '1', '8989898989', 'testingqa@yopmail.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-25 00:31:55', '2023-12-25 00:31:55', '1'),
(9, '', 'Abijuru', 'Fabrice', 'wideshop1@gmail.com', '19c96b70a747a3b3ba050d449bf1d7b9', '1', '0784651740', 'tmnt12345', 'public/uploads/images.png', '', 'KN 48 St', 'Makuza Plaza', '00000', 'Kigali', '', '95c340f4023a23cd1f1b5c452be5209f', '', '', '0', '2024-08-13 04:24:32', '2024-08-13 04:24:32', '1'),
(10, '', 'test', 'test', 'testtest@gmail.com', '12a97f2ffea36066b91b91b4afadeda4', '1', '5671236789', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', 'cus_PJu5UIpGTlTnzd', '1', '1', '2024-01-06 00:17:19', '2024-01-06 00:17:19', '1'),
(11, '', 'Praveen', 'kumar', 'praveen@mailinator.com', '75ca71c82f392e02c308a261def78da0', '1', '234324423', 'testing@123', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:14:20', '2023-12-21 08:14:20', '1'),
(12, '', 'testing', 'QA', 'testing1@mailinator.com', '0720f6726a165f86ab83b69ff4c73c41', '1', '8966666666', '8966666666', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:14:14', '2023-12-21 08:14:14', '1'),
(13, '', 'nisha', 'yadav', 'nisha123@gmail.com', 'b7a91d44ed80d5c2c340620536e247bb', '1', '2345167890', '1234567890', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:14:09', '2023-12-21 08:14:09', '1'),
(14, '', 'testing', 'testing1', 'test@hello.com', '1cf026c2e1008ee9685d402c831009ba', '1', '12121212', '12121212', 'public/uploads/17029620007896.', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:14:03', '2023-12-21 08:14:03', '1'),
(15, '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '0', '2024-01-04 23:59:01', '2024-01-04 23:59:01', '0'),
(16, '', 'testing', 'hello', 'testing123@mailinator.com', '5942dd38247aa5d5440e7cfdf90ca634', '1', '1212121212', '1212121212', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:13:51', '2023-12-21 08:13:51', '1'),
(17, '', 'anisha ', 'yadav', 'anisha12345@gmail.com', '768b3bb25bb18f7b22fc2e649d714933', '1', '6754312389', '123456789', 'public/uploads/images.png', '', '', '', '', '', '', '7c8a0df0550acadb0d4614358222a6', '', '', '0', '2023-12-21 08:13:45', '2023-12-21 08:13:45', '1'),
(18, '', 'Vidhyanshi', 'Yadav', 'anisha234@gmail.com', '', '1', '1234567890', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-04 09:02:04', '2024-01-04 09:02:04', '1'),
(19, '', 'Vidhyanshi', 'Yadav', 'anisha234@gmail.com', '', '1', '1234567890', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:13:34', '2023-12-21 08:13:34', '1'),
(20, '', 'Vidhyanshisssss', 'Yadavhvvhg', 'vidh123@gmail.com', '', '1', '9876543210', '1234567890', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-21 08:14:29', '2023-12-21 08:14:29', '0'),
(21, '', 'hello', 'world', 'helloworld231222@gmail.com', '9495ed992cbf6556a9f3c6c021f50d88', '1', '44343242', 'helloworld231222@gmail.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2023-12-25 05:43:03', '0000-00-00 00:00:00', '0'),
(22, '', 'anisha', 'yadav', 'anishayada098@gmail.com', '8017621f24c8a94a2e37abaa61428565', '1', '9087121221', '12345678', 'public/uploads/170348040053192.jpeg', '', '', '', '', '', '', '', '', '', '0', '2024-01-04 01:19:24', '2024-01-04 01:19:24', '1'),
(23, '', 'hello', 'anisha', 'helloanisha@gmail.com', 'ced2a88522c680349ca83896504b8592', '1', '1222333344', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-04 01:19:13', '2024-01-04 01:19:13', '1'),
(24, '', 'anisha', 'heelo', 'anishahe123@gmail.com', '5f751840263e08b24aa8d1ce239887ee', '1', '2222111113', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-04 01:19:34', '2024-01-04 01:19:34', '0'),
(25, '', 'anish', 'hello', 'anishello123@gmail.com', '5b3718d3d9aa58a5a06591ae6ef00e8d', '1', '1122233444', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-04 01:14:13', '2024-01-04 01:14:13', '1'),
(26, '', 'test', 'testing', 'testing89@gmail.com', '10f7d394c23ff7c0633d291a557efb8a', '1', '7778885645', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-10 01:02:10', '0000-00-00 00:00:00', '1'),
(27, '', 'anisha', 'testing', 'test12345@gmamil.com', 'bef67211ce75052d42190f227500792e', '1', '1234567662', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-10 01:49:12', '0000-00-00 00:00:00', '1'),
(28, '', 'Anisha', 'testing', 'anisha345@gmail.com', '4f9777c0969c949f6eb0e620ea4c0ea2', '1', '6754321980', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-01-10 01:05:25', '0000-00-00 00:00:00', '1'),
(29, '', 'anisha', 'yadav', 'anishaiert1996@gmail.com', 'b7063f50908b6d37b7179ae4dd9e6c83', '1', '8115520625', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '4e4e3f87b7bbf6e028e5ac93a8fd45ba', '', '', '0', '2024-08-12 05:56:57', '2024-08-12 05:56:57', '1'),
(30, '', 'testingdata', 'data', 'testdata@mailinator.com', '3290d6ff24f9476a56849cb9aaf5bad7', '1', '8966007982', 'testdata@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-02-20 04:18:27', '0000-00-00 00:00:00', '1'),
(31, '', 'Enri', 'Enri', 'hwdpcppqmc.q@rightbliss.beauty', '4a920e744cd2386faefd9bb274249e89', '1', '067-904-25-87', 'fjsVbJLU2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-01 01:24:38', '0000-00-00 00:00:00', '1'),
(32, '', 'Jacque', 'Jacque', 'hwpdbqwdbh.q@rightbliss.beauty', '1836d819d8fee5b79463d092733ee5cb', '1', '971-297-35-00', 'dRnJB5RE2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-02 08:01:55', '0000-00-00 00:00:00', '1'),
(33, '', 'Wavelyn', 'Wavelyn', 'hmjqtbmpjw.q@rightbliss.beauty', '76c104941b54c2ff1f61a27b168fe010', '1', '445-290-17-68', 'aKr2jJ5O9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-03 14:39:48', '0000-00-00 00:00:00', '1'),
(34, '', 'Khrystin', 'Khrystin', 'hmhwhjjmcd.q@rightbliss.beauty', 'd1f175eb3518a91497b4a8ec1296b16b', '1', '770-544-37-72', 'v1Zbsh8K3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-05 02:47:21', '0000-00-00 00:00:00', '1'),
(35, '', 'Alessand', 'Alessand', 'hmbbjdhhhj.q@rightbliss.beauty', '5ce589cde359046b7b294fb7a207093e', '1', '918-786-79-35', 'vRAApAdS5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-06 12:15:07', '0000-00-00 00:00:00', '1'),
(36, '', 'Heman', 'Heman', 'hmwqwwtdpc.q@rightbliss.beauty', '3b173c42d2e23255f95ed97ea4754f68', '1', '752-312-11-81', 'IW4ksRkC5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-07 21:27:31', '0000-00-00 00:00:00', '1'),
(37, '', 'Finna', 'Finna', 'tjjwphdpth.q@rightbliss.beauty', '5beca4b4972171e74c4334006d995b96', '1', '003-154-34-45', 'sW7HwFBT3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-09 05:08:23', '0000-00-00 00:00:00', '1'),
(38, '', 'Rajab', 'Rajab', 'tjtbbcbmww.q@rightbliss.beauty', '6348d9b83181b73f785c1768f820dd9c', '1', '051-960-01-31', 'K8MuWCqK3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-10 12:49:34', '0000-00-00 00:00:00', '1'),
(39, '', 'Kathlee', 'Kathlee', 'tjchdjphdd.q@rightbliss.beauty', '0eca8a1d377fd5209f128465ab4f42b0', '1', '580-177-17-80', 'jYSFoPSO7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-11 21:09:37', '0000-00-00 00:00:00', '1'),
(40, '', 'Martice', 'Martice', 'tjwmhdwbjj.q@rightbliss.beauty', '8714a5a9ae04c29e94706990cf710d5a', '1', '972-509-83-51', 'DLpvJOyM7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-13 07:10:19', '0000-00-00 00:00:00', '1'),
(41, '', 'Derward', 'Derward', 'tqqcjwmpbc.q@rightbliss.beauty', '47c2da74268a84b3fc681a06eadf68ca', '1', '331-643-15-29', 'FXzJSqjJ3#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-14 20:14:18', '0000-00-00 00:00:00', '1'),
(42, '', 'Laurabell', 'Laurabell', 'tqdhmtqjqh.q@rightbliss.beauty', '3cf94240279c91cf0c8db312dc562321', '1', '181-544-86-34', 'dLsDMU6L2!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-16 12:32:25', '0000-00-00 00:00:00', '1'),
(43, '', 'Floriane', 'Floriane', 'tqcmpphhcw.h@rightbliss.beauty', 'c1b4f348a921a4d8febd3c75343f25b7', '1', '180-103-79-65', 'PFI841CP1#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-18 06:12:09', '0000-00-00 00:00:00', '1'),
(44, '', 'Hailie', 'Hailie', 'tqmccqtbhd.h@silesia.life', 'b838d2776c2e26e914192216eacb1d54', '1', '640-993-53-76', 'VbiqT4NI7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-20 01:33:01', '0000-00-00 00:00:00', '1'),
(45, '', 'Alon', 'Alon', 'thhtdbdpwj.h@silesia.life', '67f50a52c73525e19d0adf34788a41f4', '1', '109-519-95-88', 'vyupPpNL1#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 06:54:00', '0000-00-00 00:00:00', '1'),
(46, '', 'Anisha', 'Anisha', 'Anishatest@gmail.com', 'e80258a541f9809dc61294736f1bb15f', '1', '7890654321', 'Anisha123@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 10:23:04', '0000-00-00 00:00:00', '1'),
(47, '', 'Ani', 'yadav', 'anitest@gmail.com', '0e11cafac110daa6e6db19803bbf977d', '1', '1290231234', 'Anisha123@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 10:26:48', '0000-00-00 00:00:00', '1'),
(48, '', 'test', 'test', 'testani@gmail.com', '5415f89d30e4c503e4ae9c7d423c7881', '1', '5234123456', '123456789', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 10:41:38', '0000-00-00 00:00:00', '1'),
(49, '', 'tets', 'test', 'testa90@gmail.com', 'd42b644a5e6f0fafae8892ff7bbebe91', '1', '2312234567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 10:44:53', '0000-00-00 00:00:00', '1'),
(50, '', 'anitest', 'testani', 'anitest123345@gmail.com', 'c3b8ecead9b66ccbc3e5faf46b2de21d', '1', '6789012345', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 10:50:39', '0000-00-00 00:00:00', '1'),
(51, '', 'testtest', 'testtest', 'testaa1234@gmail.com', '0444db01736742588d4f0a843b050d6e', '1', '1212343456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', 'db514108559792a08469a49dcf93f4', '', '', '0', '2024-06-21 09:18:03', '2024-06-21 09:18:03', '1'),
(52, '', 'aaa', 'ay', 'ay34@gmail.com', 'dfc3a600728ac302bd3f1a7b4eeca551', '1', '9812321223', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 11:03:19', '0000-00-00 00:00:00', '1'),
(53, '', 'tt', 'tt', 'tt121@gmail.com', '50c331390a4d411d19bfa00fd53ea772', '1', '1212343434', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 11:06:05', '0000-00-00 00:00:00', '1'),
(54, '', 'Anisha', 'Yadav', 'anishayadav12@gmail.com', '237176f1be97290f9a383485a3d8d236', '1', '1290121234', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 11:08:43', '0000-00-00 00:00:00', '1'),
(55, '', 'Anisha', 'Yadav', 'ani234y@gmail.com', '2c046c6c8e1462cd2c315cb20be739fe', '1', '9012219011', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-21 11:12:26', '0000-00-00 00:00:00', '1'),
(56, '', 'Anisha', 'Yadav', 'a123456@gmail.com', '74694d1dfd4833d3075aa873ac3da06f', '1', '7665432123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-22 11:04:23', '0000-00-00 00:00:00', '1'),
(57, '', 'Glorianne', 'Glorianne', 'thbjhmcjtc.h@silesia.life', '4b7ce4133b5d30ba40cdb9d6a229c64b', '1', '917-513-21-09', 'qdUwyH4W3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-22 11:16:42', '0000-00-00 00:00:00', '1'),
(58, '', 'Anisha', 'Yadav', 'anish123456@gmail.com', '71a74d8a81429582095ac24196a491f3', '1', '7876543218', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-23 10:28:24', '0000-00-00 00:00:00', '1'),
(59, '', 'Anisha', 'Yadav', 'ani12345678@gmail.com', 'f8702bc71f1b600b825a47ecfcdd7032', '1', '12876543212', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-23 10:39:35', '0000-00-00 00:00:00', '1'),
(60, '', 'Anisha', 'Yadav', 'a123423@gmail.com', '02d99717ca65fc37bac320cd68be0e13', '1', '12134543211', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-23 12:08:11', '0000-00-00 00:00:00', '1'),
(61, '', 'Anisha', 'Yadav', 'ay123123@gmail.com', '59718da100fdd72def48ae8fd1c61e82', '1', '2121456789', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-23 12:46:45', '0000-00-00 00:00:00', '1'),
(62, '', 'Anisha', 'Yadav', 'anishay1212@gmail.com', '1dd270d7be51cae3027f2d53aacf85e1', '1', '1212876543', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-23 12:51:58', '0000-00-00 00:00:00', '1'),
(63, '', 'Ishimwe', 'Bertin', 'blandellasports@gmail.com', '6744e2c7139a3e8d28aae0911e29acdd', '1', '0783073916', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '0661695057ce3faadc0fffd3b048f3b7', '', '', '0', '2024-06-23 11:03:17', '2024-06-23 11:03:17', '1'),
(64, '', 'Reyelle', 'Reyelle', 'thppqtphmh.h@silesia.life', '9ddc11af114fd250bd3546ea7f7aa323', '1', '813-543-55-02', 'l6eYbeIJ9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-23 15:52:46', '0000-00-00 00:00:00', '1'),
(66, '', 'Prakhar', 'Pandey', 'developerprakharpandey@gmail.com', '3989c7f1d32840ceb0e4ddedb2d3f7b1', '1', '89607990891', 'qwerty@123', 'public/uploads/images.png', '', '', '', '', '', '', '5ba5c21dca7a633db40b4bdd579dd26b', '', '', '0', '2024-06-24 05:58:44', '2024-06-24 05:58:44', '1'),
(229, '', 'anisha', 'yadav', 'anishaiert@mailinator.com', '0a26e56a4f6c03f3a974d0e451f6abd4', '1', '1232122342', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '256b55aad2bb352326dbcec037d6d483', '', '', '0', '2024-08-14 08:06:27', '2024-08-14 08:06:27', '1'),
(67, '', 'Prakhar', 'Pandey', 'qualifiedwebdevelopers@gmail.com', 'eb10b230dad915ec2631444eabc028b6', '1', '8960790891', 'qwerty@123', 'public/uploads/images.png', '', '', '', '', '', '', 'd605a6ee2e8df495b70388a6a6efdda4', '', '', '0', '2024-06-24 04:03:05', '2024-06-24 04:03:05', '1'),
(68, '', 'Anisha', 'Yadav', 'anishay897@gmail.com', '38d498b7cb8d196bd0244658b7efe4a7', '1', '9012343212', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-24 12:47:50', '0000-00-00 00:00:00', '1'),
(69, '', 'Anisha', 'Yadav', 'yadavanisha250@gmail.com', '9cf3bc229e82e97cba9d10f97df086cf', '1', '232312345', '87654321', 'public/uploads/images.png', '', '', '', '', '', '', '715e8cbf5e380c74533fbb61da80b43e', '', '', '0', '2024-08-14 08:10:01', '2024-08-14 08:10:01', '1'),
(70, '', 'Ishimwe', 'Bertin', 'hissonfabu@gmail.com', 'fbdf84c8a319973a5a6c0123fc6eb84e', '1', '0739011597', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 11:08:57', '0000-00-00 00:00:00', '1'),
(71, '', 'Delmer', 'Delmer', 'tttjwqmwjd.h@silesia.life', '1a650cae63a77ad819b8cae5bbf9cfb3', '1', '056-527-68-27', 'quzbdBkJ4!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 18:18:50', '0000-00-00 00:00:00', '1'),
(72, '', 'Izaiha', 'Izaiha', 'admin@servpro11488.com', '0124e50483a71193c55450f5912e3b00', '1', '221-705-65-69', 'z5qdzIeW5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 18:20:05', '0000-00-00 00:00:00', '1'),
(73, '', 'Amelyah', 'Amelyah', 'nida@alliance-usa.com', 'a8c85a397f0ec03aa42698692599a015', '1', '542-052-04-00', 'z5IXaWdY5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 19:05:36', '0000-00-00 00:00:00', '1'),
(74, '', 'Jaidence', 'Jaidence', '325autobuyer@gmail.com', '95efc85b24ba14b7d1d74b176fc3ae8a', '1', '505-013-24-88', 'wHFzRbVY3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 20:36:14', '0000-00-00 00:00:00', '1'),
(75, '', 'Anye', 'Anye', 'sdasc86@gmail.com', 'c45563ed5cd2a077541a94b45dee97ab', '1', '814-228-38-23', 'wimnuaJU5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 21:09:27', '0000-00-00 00:00:00', '1'),
(76, '', 'Oakland', 'Oakland', 'bobmiles0916@gmail.com', '14ae1604ec79c150309c347d7a18fe21', '1', '250-764-96-03', '39oE4vyS9#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 21:44:53', '0000-00-00 00:00:00', '1'),
(77, '', 'Constancy', 'Constancy', 'steve@woodlandweldandfab.com', '92c07b1d0cb24402aced763129d3fbcd', '1', '668-027-27-99', 'aXjqZLCU5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 22:14:15', '0000-00-00 00:00:00', '1'),
(78, '', 'Chane', 'Chane', 'nancydrummond88@gmail.com', 'b76a45ab9400b9e00ebbdc7d9987aa9b', '1', '302-549-87-54', 'x2zbH7JI7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 23:14:59', '0000-00-00 00:00:00', '1'),
(79, '', 'Choua', 'Choua', 'robin@bogatylawoffice.com', 'bdfeb53295315d4104dea3263cc8a381', '1', '208-418-60-02', 'p5CcjOuV9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-26 23:42:54', '0000-00-00 00:00:00', '1'),
(80, '', 'Abdallakh', 'Abdallakh', 'john@dealerbids.io', 'e06925e76f45d9ba327f418aa756d4a0', '1', '922-024-33-89', 'FDkL3szI2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 00:12:11', '0000-00-00 00:00:00', '1'),
(81, '', 'Savier', 'Savier', 'klkaczmar@yahoo.com', 'b11c9d824e11dc51475727b975bb900f', '1', '600-765-52-83', 'vke7cPqA5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 00:49:32', '0000-00-00 00:00:00', '1'),
(82, '', 'Arneisha', 'Arneisha', 'allproserv@rcn.com', '9f5889863623f90eddacf8ea8a0f5d45', '1', '172-004-61-83', 'YVNJnhoI5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 01:28:38', '0000-00-00 00:00:00', '1'),
(83, '', 'Alen', 'Alen', 'spinth@aol.com', '8738d2cfd95f4b22737de94e593ea1e2', '1', '456-615-14-41', 'uNnCv8zH3#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 02:08:26', '0000-00-00 00:00:00', '1'),
(84, '', 'Deven', 'Deven', 'traceyp@aquapool.com', '240eb43ed27893760fa25760b6d2262f', '1', '059-784-04-16', '5aEzfcCR7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 02:55:01', '0000-00-00 00:00:00', '1'),
(85, '', 'Rotonia', 'Rotonia', 'cswanson@monroeplan.com', 'e443c28f1fe4fe28960f12ca88337937', '1', '940-417-41-12', '8a5zijRU2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 03:42:12', '0000-00-00 00:00:00', '1'),
(86, '', 'Aliyna', 'Aliyna', 'primepressapparel@gmail.com', '185afb20c46dcb60d59bb5781199b57a', '1', '276-053-93-22', 'syra6txF9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 04:33:58', '0000-00-00 00:00:00', '1'),
(87, '', 'Daphnee', 'Daphnee', 'jcornblatt@thepediatriccenter.org', '00227bb056ca2761ae7d2cebf5b2a0a8', '1', '864-284-87-09', 'jwXk6jeH6@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 05:14:55', '0000-00-00 00:00:00', '1'),
(88, '', 'Carranza', 'Carranza', 'newmodernsign@yahoo.com', 'a9f0484cdf492a6c052f6484a147d6b6', '1', '576-592-52-91', 'SzIjW3NJ4#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 05:50:24', '0000-00-00 00:00:00', '1'),
(89, '', 'Kirstan', 'Kirstan', 'sstoltz@treadcorp.com', 'c87c7837d37edd12ad7dc1e3d431134e', '1', '253-051-93-98', 'wEmx8CxI7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 06:25:05', '0000-00-00 00:00:00', '1'),
(90, '', 'Yelena', 'Yelena', 'u.schmidt@germanynet.de', '3a52b2d0308383e9001717e32bb1a788', '1', '748-920-94-41', 'iHQcsL5X5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 09:07:44', '0000-00-00 00:00:00', '1'),
(91, '', 'Rashanna', 'Rashanna', 'albavaldez-95@hotmail.com', '6fc1a86c53bb941ff91e5b5daa110f69', '1', '019-313-54-37', 'JoosMQNY5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 15:48:09', '0000-00-00 00:00:00', '1'),
(92, '', 'Eulah', 'Eulah', 'thorleyorchard@gmail.com', 'e937e8a40bb8713d42f77c64dc73380f', '1', '016-927-16-57', '3jTnmDLR2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 16:58:39', '0000-00-00 00:00:00', '1'),
(93, '', 'Zhanea', 'Zhanea', 'zane@hs-motorsports.com', '2c90971b863c59624066801a5be0c3a7', '1', '619-279-08-74', 'MSXR7L2N5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 17:56:12', '0000-00-00 00:00:00', '1'),
(94, '', 'Tayron', 'Tayron', 'kellydevine777@gmail.com', '1008873ee1cfb650adb2b7b6dc86ebe6', '1', '680-450-84-18', 'RK1nU2TE3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 18:41:51', '0000-00-00 00:00:00', '1'),
(95, '', 'Ayoki', 'Ayoki', 'rmalc1w@gmail.com', 'a2195b4b24d6319d32261de11a3f69fe', '1', '153-798-39-00', 'bycWrC7T3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 18:41:53', '0000-00-00 00:00:00', '1'),
(96, '', 'Elgene', 'Elgene', 'rpatel7200@gmail.com', 'd81bcdd471ca073cdce055155a0a2d67', '1', '165-470-59-05', 'tWQkdprO3#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 19:20:38', '0000-00-00 00:00:00', '1'),
(97, '', 'Ynes', 'Ynes', 'karlnvt@yahoo.com', 'c20b1d29d40d494515e3c8ede9f0ed87', '1', '226-082-67-48', 'KDe3D3BP7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 19:56:03', '0000-00-00 00:00:00', '1'),
(98, '', 'Tessalynn', 'Tessalynn', 'hello@digthischick.net', '22e1aa645973ce4eb58f233c18dd19c7', '1', '367-238-28-04', 'DPBy4znJ6!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 20:30:55', '0000-00-00 00:00:00', '1'),
(99, '', 'Jakiria', 'Jakiria', 'jwlester17@yahoo.com', '31659f3eff076861e6e71cbab094af7b', '1', '845-901-29-32', 'JncwN9eH2#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 20:30:58', '0000-00-00 00:00:00', '1'),
(100, '', 'Pella', 'Pella', 'ctreppa@cityofwarren.org', '5f648be612c04db06bb25d491c540b1a', '1', '100-536-69-37', 'MLizcPAX4#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 21:02:35', '0000-00-00 00:00:00', '1'),
(101, '', 'Shonett', 'Shonett', 'ebroemel@sbcglobal.net', '706916379582b548464025ffd22b0c45', '1', '048-808-74-10', 'kqlMhEQP3#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 21:02:38', '0000-00-00 00:00:00', '1'),
(102, '', 'Zanyia', 'Zanyia', 'carlo.canasa@noaa.gov', 'ffacce61df4eb763a77f6105add5954f', '1', '903-216-56-72', 'ZB4yEEsQ7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 21:30:21', '0000-00-00 00:00:00', '1'),
(103, '', 'Taaliba', 'Taaliba', 'prosperstrucking@gmail.com', '0111a20bb2898475d8a4b57bfbe40f26', '1', '902-062-43-52', 'lpPK2dII6#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 21:51:15', '0000-00-00 00:00:00', '1'),
(104, '', 'Ulys', 'Ulys', 'john.hawkins@echawkinsltd.com', 'c260632daba8188002de8d47747be1e6', '1', '275-278-58-80', 'uvkloWfA1#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 22:10:43', '0000-00-00 00:00:00', '1'),
(105, '', 'Daelynn', 'Daelynn', 'cruiz.sanramon@gmail.com', 'd8aa8e04169bdb7be4811e809039976d', '1', '633-462-67-52', 'meJjJrUY8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 22:33:48', '0000-00-00 00:00:00', '1'),
(106, '', 'Anterion', 'Anterion', 'randy@hixsonbrothers.com', '37f0cc145bbd80661150b5f69cdf63ac', '1', '273-186-56-39', '6BeKP4uY9#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 22:50:40', '0000-00-00 00:00:00', '1'),
(107, '', 'Mijoy', 'Mijoy', 'gtrue@thechipdoctor.com', 'd85730caa16c926baeb9a712b5fb3a5d', '1', '207-947-12-95', 'lfCXicuR6!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 23:07:09', '0000-00-00 00:00:00', '1'),
(108, '', 'Angele', 'Angele', 'louise.stiffler@alkarsteel.com', '3cafe483ae7b4f8e0b055bbed3d0b030', '1', '931-552-71-61', 'BwDA2EKM9#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 23:23:59', '0000-00-00 00:00:00', '1'),
(109, '', 'Elbern', 'Elbern', 'bernd.curran@gmail.com', 'e2464a04974b68703bacda910ed0fe26', '1', '625-602-84-87', 'QkNdzB5K3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 23:44:49', '0000-00-00 00:00:00', '1'),
(110, '', 'Masaharu', 'Masaharu', 'tboggess@nbwellness.com', '741fddbc214795a7b9f2515720960d25', '1', '888-940-15-37', '3z5PLd5D6#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-27 23:57:01', '0000-00-00 00:00:00', '1'),
(111, '', 'Temi', 'Temi', 'sgeisner@alwi.com', 'bf68c68208585dfb60b294d7b84f4148', '1', '319-771-90-71', 'j2sbUJnM2#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 00:30:59', '0000-00-00 00:00:00', '1'),
(112, '', 'Sigmunt', 'Sigmunt', 'chip@calvaryhartford.com', '23c1696ea40b95b38a6e6b05ddb9898e', '1', '070-214-56-27', '1A8vXThW8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 00:48:08', '0000-00-00 00:00:00', '1'),
(113, '', 'Javez', 'Javez', 'chase@chasecommunications.net', '8accc370454d62cbb16242b856daf707', '1', '287-468-60-59', 'OmOqjAiB2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 01:03:06', '0000-00-00 00:00:00', '1'),
(114, '', 'Silviya', 'Silviya', 'angies@awlights.com', 'f6a3edbe55ebb116d29824895de472fa', '1', '939-522-70-15', 'hQjuzHQR8!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 01:23:31', '0000-00-00 00:00:00', '1'),
(115, '', 'Brittni', 'Brittni', 'pam@digitalnow.net', 'e8e5873471b7557cabf29e03b7c6cb88', '1', '815-299-03-68', 'LlFrKq1W1!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 01:39:28', '0000-00-00 00:00:00', '1'),
(116, '', 'Xavy', 'Xavy', 'brankley02@gmail.com', 'a85d3f953654335b026a3c19c300548c', '1', '082-140-91-90', '8QPUjN3C2#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 01:56:07', '0000-00-00 00:00:00', '1'),
(117, '', 'Garlyn', 'Garlyn', 'calen@clarksvillecabinetry.com', '88e64d46c47515344c71a27418bfc54c', '1', '135-360-49-34', 'mXZ7yASW9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 02:12:57', '0000-00-00 00:00:00', '1'),
(118, '', 'Keemo', 'Keemo', 'gatewoodandassoc@msn.com', 'e2fe809215c1acd39c14e1d2c7271edd', '1', '753-361-16-44', 'Hcd1tYCA7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 02:34:38', '0000-00-00 00:00:00', '1'),
(119, '', 'Desera', 'Desera', 'thomas.broderick@andersen.com', 'd7d4c78f3952b22fb3e055a98cf4208d', '1', '182-830-34-89', '2SssukjA7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 02:51:22', '0000-00-00 00:00:00', '1'),
(120, '', 'Deondrick', 'Deondrick', 'jimv@mandrelectronics.com', 'eadd502603895ff06cadb9e206dab74a', '1', '920-911-58-39', 'mo6YuCBL6@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 03:05:24', '0000-00-00 00:00:00', '1'),
(121, '', 'Cylinda', 'Cylinda', 'pdodge@nhacolumbia.com', '36fa968d9941d8d7543cf7349533c05b', '1', '467-642-04-86', 'xJa7CbAS3!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 03:23:42', '0000-00-00 00:00:00', '1'),
(122, '', 'Nysha', 'Nysha', 'lindseytl@gmail.com', '49182c59e3ffd10e445ba9efaecc0a98', '1', '160-271-14-52', 'O1VWIjkP3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 03:42:42', '0000-00-00 00:00:00', '1'),
(123, '', 'Harshil', 'Harshil', 'eric@atlantakravmaga.com', 'bec8e7b17a4de466de50f356cf418aa0', '1', '490-888-14-57', 'AAM8pDjK4@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 04:00:11', '0000-00-00 00:00:00', '1'),
(124, '', 'Elijhah', 'Elijhah', 'ifraser@olympus.net', '5d065dace68ceb99a14085d7c1b2eafe', '1', '290-475-88-39', 'rIZuHTmC9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 04:40:55', '0000-00-00 00:00:00', '1'),
(125, '', 'Athira', 'Athira', 'waltslittlehelper@yahoo.com', 'cd7890bc487553c26d7f5ef35cc9cacc', '1', '046-628-47-94', '4xjfuQjN7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 05:20:56', '0000-00-00 00:00:00', '1'),
(126, '', 'Lizzette', 'Lizzette', 'novaflys2@gmail.com', '5fe06c405261962d63ad053f6111d47f', '1', '545-180-62-47', 'OnJrQxUO9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 05:42:00', '0000-00-00 00:00:00', '1'),
(127, '', 'Fraces', 'Fraces', 'barbara.krick@spencergifts.com', 'ecaf33af1f89354d1c5637578832c832', '1', '260-285-24-43', 'c7vJHEcA7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 06:02:31', '0000-00-00 00:00:00', '1'),
(128, '', 'Hazlyn', 'Hazlyn', 'barbara@marcontimber.com', '5e77848c997d4714cb57b0d604711434', '1', '758-324-15-05', 'LUoLj2AI5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 07:47:53', '0000-00-00 00:00:00', '1'),
(129, '', 'Sakita', 'Sakita', 'ctpalmer@rfmsinc.com', 'e1aef6414374c0c41cf20a81c03d5f85', '1', '195-683-24-47', 'H358KSWX2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 09:06:34', '0000-00-00 00:00:00', '1'),
(130, '', 'Lamiracle', 'Lamiracle', 'jgarland@feazelelectric.com', '9a36b2b2eff2d4b77d952b5d0d7fb976', '1', '860-892-75-33', 'ykUDMo2J2#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 10:01:01', '0000-00-00 00:00:00', '1'),
(131, '', 'Gather', 'Gather', 'andrew@havranlaw.com', 'b3f3b525b050485744fbc531861e8cdf', '1', '429-228-17-26', 'yPX3HVmA6@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 13:47:39', '0000-00-00 00:00:00', '1'),
(132, '', 'Luvada', 'Luvada', 'rmbsinc@att.net', '4544d49e92230fdc26eaf68f4ea2f50d', '1', '101-050-55-79', 'i6njq5TR1@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 14:47:38', '0000-00-00 00:00:00', '1'),
(133, '', 'Leelu', 'Leelu', 'gileshealey@hotmail.com', '298964ac03bf1996cfee2dc31d7f78ed', '1', '986-041-11-40', 'lj1wROVY2#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 15:42:43', '0000-00-00 00:00:00', '1'),
(134, '', 'Maurilio', 'Maurilio', 'susaneisner2.0@gmail.com', 'de9daf4e941ef64c4563e90cd54a334c', '1', '817-157-36-49', 'Jyvk8LlY9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 17:50:02', '0000-00-00 00:00:00', '1'),
(135, '', 'Gans', 'Gans', 'e.iglesias@linqservices.com', '6249a974cc149a84dd4feed52d2f3c59', '1', '349-838-31-12', 'b5BLdNWJ4@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 19:33:57', '0000-00-00 00:00:00', '1'),
(136, '', 'Arolyn', 'Arolyn', 'tom@ballardexpl.com', '24e307b9d03c092485d3939f7834757c', '1', '340-042-04-51', 'zEJjEVyV8!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 22:09:16', '0000-00-00 00:00:00', '1'),
(137, '', 'Mahala', 'Mahala', 'danaendirocco@yahoo.com', '31a9ba98d6039b30a4c9b75a3eb7631f', '1', '687-937-16-70', 'PjJlTVbA5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-28 22:48:28', '0000-00-00 00:00:00', '1'),
(138, '', 'Edriel', 'Edriel', 'tjweisenburger@gmail.com', '57318c4ed365efe58efafbf4d96cdc0d', '1', '037-865-02-10', 'kH4hq8JS7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 01:13:31', '0000-00-00 00:00:00', '1'),
(139, '', 'Sianah', 'Sianah', 'barbara32@comcast.net', '9a7949fc2d733163c5e107fc6731379d', '1', '523-502-68-55', 'PUINE1FW6!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 01:49:37', '0000-00-00 00:00:00', '1'),
(140, '', 'Yulitzy', 'Yulitzy', 'ttbpccqjcj.h@silesia.life', 'c277f271109395d5fe5ab30d08521022', '1', '266-185-10-71', '9To79zdA5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 02:25:51', '0000-00-00 00:00:00', '1'),
(141, '', 'Marnisha', 'Marnisha', 'spexecutiveassistant@gmail.com', 'aefb8333587f0ee898106bd50166936d', '1', '692-139-30-03', 'WpVDHxQU3#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 03:03:27', '0000-00-00 00:00:00', '1'),
(142, '', 'Xiadani', 'Xiadani', 'rlamb@gsfb.net', 'b3f89cb7d0402f92c54716aacb4f44a5', '1', '692-811-77-97', '59QyLYsL6#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 03:03:44', '0000-00-00 00:00:00', '1'),
(143, '', 'Shannae', 'Shannae', 'kmcnamee@carpenterfoundation.us', 'c5ce72a24ee665d30242c30749c35f07', '1', '272-389-76-79', 'ih1ML94S5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 03:41:44', '0000-00-00 00:00:00', '1'),
(144, '', 'Johneisha', 'Johneisha', 'ron@smartproductshots.com', 'c7a7d78067b550da32df9ab8ea809cdb', '1', '739-742-74-52', '8z7KED1C8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 04:20:33', '0000-00-00 00:00:00', '1'),
(145, '', 'Revmira', 'Revmira', 'klamb1956@gmail.com', 'ebb31242c49542325534009f2e6b8f24', '1', '516-114-31-12', 'l77Z8NiC4@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 07:47:24', '0000-00-00 00:00:00', '1'),
(146, '', 'Adella', 'Adella', 'vera.horlacher@sunrise.ch', '74ecdc452e39872aba3f6aca934fb9b9', '1', '112-748-87-64', 'nf7A3JCJ3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 11:38:10', '0000-00-00 00:00:00', '1'),
(147, '', 'Mikyle', 'Mikyle', 'dina@eliteofficeservicesllc.com', 'b23c25ed75a6b545ecd0c389738a6ebe', '1', '025-279-99-98', 'CeeXfkwU7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-29 22:05:48', '0000-00-00 00:00:00', '1'),
(148, '', 'Renell', 'Renell', 'donpfs@iw.net', '492a3ac74f9b716eaa3c4d7fe911230a', '1', '158-396-03-65', 'V5mMOwyN7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 00:02:34', '0000-00-00 00:00:00', '1'),
(149, '', 'Magomedshapi', 'Magomedshapi', 'nsdecas@comcast.net', '68c10a525ea39fd1222f8a2fd36e65cc', '1', '670-754-60-52', 'eJuFtDlH2#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 10:58:30', '0000-00-00 00:00:00', '1'),
(150, '', 'tuyizere', 'ELYSE', 'TUYELYS2@GMAIL.COM', '3b5a7f10e651738b4b745d03f41477d0', '1', '0789349944', 'elyCAD2020', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 11:58:09', '0000-00-00 00:00:00', '1'),
(151, '', 'Alderic', 'Alderic', 'abed22292@gmail.com', '836598e28718f2ddf33c12f59d425d60', '1', '816-159-58-68', 'DXKKO1AQ2!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 13:06:48', '0000-00-00 00:00:00', '1'),
(152, '', 'Sulin', 'Sulin', 'genheimerg@gmail.com', 'c288bb937fcb7f6e515d13f119c47dc0', '1', '753-702-76-35', 'eti4O7tA5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 14:28:22', '0000-00-00 00:00:00', '1'),
(153, '', 'Mckae', 'Mckae', 'irwin.richman@gmail.com', '1b41010404d9e84418cb001c61bcdbd1', '1', '161-760-07-47', 'oKOjYNRE4!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 15:41:04', '0000-00-00 00:00:00', '1'),
(154, '', 'Luceli', 'Luceli', 'debra.dieckert@gmail.com', '486b44ece2681daf2bed421212f474c9', '1', '508-578-08-54', '2beVJinQ8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 14:39:55', '2024-06-30 14:39:55', '0'),
(155, '', 'Thorwald', 'Thorwald', 'sharon.hoffman1@icloud.com', 'd5d0cb3a34347a945d81a9e84c421213', '1', '678-417-16-16', 'TIh2EbPF6@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 18:40:12', '0000-00-00 00:00:00', '1'),
(156, '', 'Emelio', 'Emelio', 'kmgr67@sbcglobal.net', 'f8ac0a5da59b7e837dde6ec8907c097f', '1', '879-300-03-04', '8jopu4BC2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 20:18:23', '0000-00-00 00:00:00', '1'),
(157, '', 'Wilnette', 'Wilnette', 'fjbussey.fb@gmail.com', 'edb8a11622d862705668b8493148b460', '1', '061-465-07-88', 'JHqJ7RiF8#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 20:18:25', '0000-00-00 00:00:00', '1'),
(158, '', 'Riann', 'Riann', 'ttwdbjhtqc.q@silesia.life', '07677b4a6856497228ea820d6664c384', '1', '939-260-33-68', 'yfwPpNFU5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 21:04:29', '0000-00-00 00:00:00', '1'),
(159, '', 'Josetta', 'Josetta', 'damber_poudyel@yahoo.com', 'e71676efaf7f9d48bf99fd5bbe1f95e1', '1', '145-708-79-41', 'FD5ujXHQ8!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 21:40:28', '0000-00-00 00:00:00', '1'),
(160, '', 'Mynard', 'Mynard', 'elainesokol@comcast.net', 'be715df56140f570cff0e95b34411936', '1', '031-753-30-77', 'xJ7MUlOW9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-06-30 23:00:44', '0000-00-00 00:00:00', '1'),
(161, '', 'Travarius', 'Travarius', 'chrislee67@gmail.com', '59b1ae3e9d08486efdcc2ba617180304', '1', '131-555-92-37', 'haEIL4eJ1#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 00:00:58', '0000-00-00 00:00:00', '1'),
(162, '', 'Jami', 'Jami', 'dj88noel@sbcglobal.net', '77f0f2268c4213bcc7219708664355b7', '1', '594-042-05-92', '9j8WRpbE3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 01:08:48', '0000-00-00 00:00:00', '1'),
(163, '', 'Tajveer', 'Tajveer', 'krobinson5120@gmail.com', '4abcb923af0ef53c3e3fc4b4e36a09b5', '1', '323-837-13-01', 'JBxxApyJ4#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 02:35:06', '0000-00-00 00:00:00', '1'),
(164, '', 'Enorah', 'Enorah', 'dalola1930@gmail.com', 'dfc7b0b71d2d35e091a5615bc90039e3', '1', '338-109-57-78', 'FIsJLSlJ4@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 07:21:41', '0000-00-00 00:00:00', '1'),
(165, '', 'Mayely', 'Mayely', 'jeankie_ordenis@yahoo.com', '656ec2e0ce4e27b5455c7d1ef53bf986', '1', '577-674-35-34', 'Mq1TlKIQ7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 14:14:09', '0000-00-00 00:00:00', '1'),
(166, '', 'Jailei', 'Jailei', 'eddie-etsey@hawkeyesports.com', '0d8013e41b247f00ba5fb245aa8a7b25', '1', '604-575-16-15', 'rNTiyknO1!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 16:27:26', '0000-00-00 00:00:00', '1'),
(167, '', 'Sandralee', 'Sandralee', 'jaugustine914@gmail.com', 'c7afb63612855b5cdb020a2c43fe880c', '1', '221-968-21-49', 'TOr8CmUE7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 18:04:06', '0000-00-00 00:00:00', '1'),
(168, '', 'Karem', 'Karem', 'joshmeakin94@gmail.com', '914ec43a77c30a8ca94b8c8b0cc18e31', '1', '993-300-19-93', 'MupUqVkA7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 19:23:59', '0000-00-00 00:00:00', '1'),
(169, '', 'Dantley', 'Dantley', 'kdavis@realfloors.com', 'e7560bb4b8e63c94f7075041910b849b', '1', '213-567-04-27', 'irADMUZQ1!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 20:25:49', '0000-00-00 00:00:00', '1'),
(170, '', 'Tanza', 'Tanza', 'christaxeras@gmail.com', 'd8b3e8813406c586ce801edac60c2999', '1', '380-093-38-95', 'kfXPFojL8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 21:15:48', '0000-00-00 00:00:00', '1'),
(171, '', 'Jilissa', 'Jilissa', 'jtaft8@aol.com', 'a4b38f5ebff003d7b655f6bb79a6b40c', '1', '921-219-09-50', 'qM6by64W7#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 21:56:08', '0000-00-00 00:00:00', '1'),
(172, '', 'Demico', 'Demico', 'myoung627@comcast.net', '987980ae941ed00eb8fff716d24db1b2', '1', '282-828-85-87', 'zW7NvvbW7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 22:30:26', '0000-00-00 00:00:00', '1'),
(173, '', 'Lonita', 'Lonita', 'omiszamora5@gmail.com', '319c8b55dc207d99062b387f4cdfb948', '1', '120-433-10-12', 'bsciuXXR5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-01 23:52:10', '0000-00-00 00:00:00', '1'),
(174, '', 'Rutila', 'Rutila', 'sales@miamiarms.com', '24178568895cae66d8d86f894fdf963a', '1', '158-955-27-64', 'SwTluUME8#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 00:20:22', '0000-00-00 00:00:00', '1'),
(175, '', 'Karimen', 'Karimen', 'b-johnson1@hotmail.com', '3ddb1b6ae89f71cc2c5eba688fcc8aa2', '1', '019-932-75-86', 'BqBROLqJ5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 02:02:28', '0000-00-00 00:00:00', '1'),
(176, '', 'Tolonda', 'Tolonda', 'edmoisant6@gmail.com', '3b0869c8667d5741766441207e4de6a1', '1', '953-175-08-12', '3AjbmXPE7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 02:02:29', '0000-00-00 00:00:00', '1'),
(177, '', 'Traelyn', 'Traelyn', 'rlmobile08@gmail.com', 'b8a2bc56fa9c6b63b818a6900bffde22', '1', '000-706-47-94', 'jprULSFP3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 02:46:10', '0000-00-00 00:00:00', '1'),
(178, '', 'Carmelia', 'Carmelia', 'danielle@northern-landscape.com', '13df09ffb6f7663c6c526792b09c4f72', '1', '213-556-95-45', 'h4anHJoW8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 03:28:04', '0000-00-00 00:00:00', '1'),
(179, '', 'Demarquise', 'Demarquise', 'norma@mans-co.com', '1c1aa52784aa319e9174732f9cbc1d23', '1', '141-980-21-77', 'boZpbBcW4#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 06:00:43', '0000-00-00 00:00:00', '1'),
(180, '', 'Niki', 'Niki', 'bridget@thelongevityclub.com', '3da8ae1fc3e537815d3a42346a0ef1e4', '1', '781-547-32-56', 'tC3LsIEA8#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 07:20:49', '0000-00-00 00:00:00', '1'),
(181, '', 'Bryanne', 'Bryanne', 'agoetz11@yahoo.com', 'edafb10279a52bb0b3930a312933bfc6', '1', '068-813-70-81', '28xukyjO5#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 13:50:38', '0000-00-00 00:00:00', '1'),
(182, '', 'Kiyonna', 'Kiyonna', 'superaggregates@gmail.com', '57241e986e7e0ba0bb13e4eef79d8d37', '1', '120-081-33-91', 'jkesTdBC9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 15:44:01', '0000-00-00 00:00:00', '1'),
(183, '', 'Tamer', 'Tamer', 'j3cub.scott@gmail.com', '0d94c36464f923382616a8def2cf36ae', '1', '819-848-36-17', 'a9r3fS2F1#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 16:49:35', '0000-00-00 00:00:00', '1'),
(184, '', 'Eyep', 'Eyep', 'tdqqtdtbph.q@silesia.life', 'b7f2ffd0a2e1a80c2e7fde35c17d5aab', '1', '678-493-27-58', 'yWW6tloL4!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 17:45:58', '0000-00-00 00:00:00', '1'),
(185, '', 'Aretzy', 'Aretzy', 'jameskuiper@msn.com', '2aa7dd3104540f986212425f0d8f186b', '1', '815-735-13-49', '3ZpisVwL2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 18:29:18', '0000-00-00 00:00:00', '1'),
(186, '', 'Electa', 'Electa', 'strieu42@gmail.com', '2aeab68fe54c19825e916e6b2f5d26e1', '1', '115-669-79-80', 'ea6znQOT6@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 20:04:42', '0000-00-00 00:00:00', '1'),
(187, '', 'Jaleeza', 'Jaleeza', 'adamakes@gmail.com', 'baa4f53401da407eb89ed607364f7616', '1', '965-089-02-32', 'JXUXZ9jD7@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 20:55:54', '0000-00-00 00:00:00', '1'),
(188, '', 'Cateleya', 'Cateleya', 'cnflorio@gmail.com', '22b8d1d24e854bccb5bf6836862c6a26', '1', '642-727-00-85', 'rAxCJp8M6#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 22:23:16', '0000-00-00 00:00:00', '1'),
(189, '', 'Nashon', 'Nashon', 'elcaminoauto@sbcglobal.net', 'b6f6af46cf0de3745580ecf01e301fc9', '1', '044-424-28-63', 'E1VM9wcF1@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-02 23:00:47', '0000-00-00 00:00:00', '1'),
(190, '', 'Bairon', 'Bairon', 'vanessa@centralcitytowing.com', '1d147ef9466e520ed6cc3d01efb8bdc4', '1', '141-227-84-97', 'UEsjwvRU3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 00:08:55', '0000-00-00 00:00:00', '1'),
(191, '', 'Yankee', 'Yankee', 'mike.mcgill@beamsuntory.com', '21e4ccac349aa447e04afdde7fa13d03', '1', '822-760-26-92', 'WwawknCY7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 01:19:31', '0000-00-00 00:00:00', '1'),
(192, '', 'Tazlyn', 'Tazlyn', 'skagit1a@gmail.com', 'c05b162ca293e5274e77f024563ec8f9', '1', '190-223-63-25', 'z29tXaJV8#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 01:54:00', '0000-00-00 00:00:00', '1'),
(193, '', 'Kilik', 'Kilik', 'intensefreightinc@gmail.com', 'f5ff59bfc1ad5984226e07a54f36fb54', '1', '208-457-77-68', 'M9jum14O9#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 02:31:39', '0000-00-00 00:00:00', '1'),
(194, '', 'Quinshawn', 'Quinshawn', 'billinob83@aol.com', 'e9de2ac6fb38f2b14f8890cb1fcd17ba', '1', '665-860-94-11', 'AvLowqWJ9@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 04:06:57', '0000-00-00 00:00:00', '1'),
(195, '', 'Tylesha', 'Tylesha', 'addicted2tax@yahoo.com', '93991bbb74541f5ad20d2de7445392ef', '1', '173-438-50-45', 'wvlUc6JV5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 05:10:02', '0000-00-00 00:00:00', '1'),
(196, '', 'Esmeraldo', 'Esmeraldo', 'mnagy@redcatpc.com', 'a49c0bf1a3d338ada3cafe3c801ca2a4', '1', '901-500-80-67', 'wXolJXJQ8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 06:17:08', '0000-00-00 00:00:00', '1'),
(197, '', 'Wilva', 'Wilva', 'dru@rockult.com', '81da9816411348530db0f91d29936ec2', '1', '144-291-94-89', 'p7EBbAhI2!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 15:39:34', '0000-00-00 00:00:00', '1'),
(198, '', 'Shaqwana', 'Shaqwana', 'maryann.wiest@erm.com', 'a0b3a66e068ea7bb51757fd829ccc5ae', '1', '895-154-83-12', 'ZHpmTpHR4!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 16:33:47', '0000-00-00 00:00:00', '1'),
(199, '', 'Makenly', 'Makenly', 'ryancohen9@gmail.com', '0db92133aca3764d2c0bce3c79ab54e5', '1', '969-677-66-84', 'CMMjjMtJ9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 17:27:50', '0000-00-00 00:00:00', '1');
INSERT INTO `users` (`id`, `login_oauth_uid`, `fname`, `lname`, `email`, `verification_key`, `is_email_verified`, `phone`, `password`, `image`, `picture`, `address_line`, `landmark`, `zipcode`, `state`, `city`, `reset_pass`, `stripecustomerID`, `current_active_plan`, `is_plan_active`, `created_date`, `update_date`, `status`) VALUES
(200, '', 'Mylaya', 'Mylaya', 'steve@clearwatersd.com', '5f400125581cedd42b9df432503499bc', '1', '171-975-18-07', 'uhwjBNEU6#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 19:11:18', '0000-00-00 00:00:00', '1'),
(201, '', 'Sheelagh', 'Sheelagh', 'tony.m.evans@gmail.com', '13891b0f4a38a89522c8d9558264fee2', '1', '914-202-93-15', 'mTyIw8nQ3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 19:56:40', '0000-00-00 00:00:00', '1'),
(202, '', 'Duey', 'Duey', 'jcrossland@matrixoil.com', '111dd60a7f17b89933294afd944e047c', '1', '353-345-90-28', 'FIpyiCiC5!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 21:38:58', '0000-00-00 00:00:00', '1'),
(203, '', 'Kymbree', 'Kymbree', 'christina@cherryroofingandsiding.com', 'd13516639f8a888809c6fe9956d4b510', '1', '115-468-99-60', 'Ovrafj5B8@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 23:12:56', '0000-00-00 00:00:00', '1'),
(204, '', 'Lucila', 'Lucila', 'zurich@bdo.ch', 'e0fb51a8658bf247f92b28bc1817b97d', '1', '218-694-17-62', 'RiQ9qhnJ7!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 23:52:05', '0000-00-00 00:00:00', '1'),
(205, '', 'Lorra', 'Lorra', 'danglada@elqindustries.com', '5697fcd4756b69cf54fa97cb743ea889', '1', '044-181-90-07', 'qAQfZjWU3@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-03 23:52:07', '0000-00-00 00:00:00', '1'),
(206, '', 'Lealan', 'Lealan', 'escobe2@verizon.net', '11cbe31254aaf57ed93de70d7a0ed9f2', '1', '996-062-61-48', 'z2WyDPUI9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-04 02:41:10', '0000-00-00 00:00:00', '1'),
(207, '', 'Laquietta', 'Laquietta', 'stolwin@aishdetroit.com', '7a56671c25f7cac7c24f9c647cb3dc71', '1', '345-960-80-33', '8qJMSEiW2!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-04 09:44:36', '0000-00-00 00:00:00', '1'),
(208, '', 'Demyiah', 'Demyiah', 'kaiser-wilhelmshaven@web.de', '57f8ef759b5f388dd17918bedcac70cd', '1', '971-619-49-87', 'DsMyhTzN9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-04 12:50:50', '0000-00-00 00:00:00', '1'),
(209, '', 'Loucka', 'Loucka', 'tdtwqwdwhw.q@silesia.life', 'b3e36383141fa7eed5843700b64fc71c', '1', '329-639-30-60', 'r2Wa7lDT5@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-04 18:28:30', '0000-00-00 00:00:00', '1'),
(210, '', 'Edmona', 'Edmona', 'rmalchoff@refractorymaintanance.com', 'fe646c60ff22c49ff8c69a1c552e5178', '1', '193-405-27-67', 'jQrBeD6D2@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-04 19:00:48', '0000-00-00 00:00:00', '1'),
(211, '', 'Medea', 'Medea', 'mijojab@gmail.com', '0ab66fe33b6bfef0fbf832b1b5904ec9', '1', '745-289-15-88', 'dxzjUT1S9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 00:21:36', '0000-00-00 00:00:00', '1'),
(212, '', 'Chave', 'Chave', 'torsten.konik@gmail.com', '3385f12088e9fcffb85de6dcb63819e0', '1', '040-637-78-39', 'RDvhHKYD8!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 11:07:54', '0000-00-00 00:00:00', '1'),
(213, '', 'Kenyetta', 'Kenyetta', 'monique_leger@rogers.com', '5206c66ae1ad1d698fd0161be42bac7f', '1', '625-192-03-27', 'XUTyPO9J2!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 16:40:32', '0000-00-00 00:00:00', '1'),
(214, '', 'Riyaq', 'Riyaq', 'silvereunny@gmail.com', '21a092320536d8be36d089bb172fe78c', '1', '222-351-03-06', 'jE1FSRUW3#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 19:41:44', '0000-00-00 00:00:00', '1'),
(215, '', 'Harutun', 'Harutun', 'francoise.lambertin@hotmail.com', '227167c363481cea18e5ea1f773cc896', '1', '240-864-43-69', 'h34o1LDV9!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 21:28:36', '0000-00-00 00:00:00', '1'),
(216, '', 'Safuan', 'Safuan', 'ewalby@eatoncounty.org', '6a94467ad17972d005281380b51623aa', '1', '696-779-39-71', 'QYNzoCeU4@', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 22:52:03', '0000-00-00 00:00:00', '1'),
(217, '', 'Anakin', 'Anakin', 'johnnykdadx4@yahoo.com', 'a2e3a761db3c8f9e13d824373556a7c5', '1', '215-800-23-89', '2zxRrisJ8#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-05 23:36:35', '0000-00-00 00:00:00', '1'),
(218, '', 'Zeidy', 'Zeidy', 'jadageorge95@gmail.com', '61e8b02fad37c4d8bb12b2e24ce5a6d1', '1', '312-427-76-20', 'uMXMNS7E9#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-06 00:23:35', '0000-00-00 00:00:00', '1'),
(219, '', 'Arcie', 'Arcie', 'daishix24@gmail.com', '432c6b79aa0d94eb17522033424ed9e9', '1', '421-105-31-71', 'yda6NkqS6#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-06 01:23:52', '0000-00-00 00:00:00', '1'),
(220, '', 'Tankia', 'Tankia', 'shaugen@kingsriverwater.org', 'd4a2f599f38e0479f9c6d3e96bcf8763', '1', '981-357-15-86', 'BChrxFCE8#', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-06 02:50:46', '0000-00-00 00:00:00', '1'),
(221, '', 'Simbo', 'Simbo', 'sbattaglia@clevelandinnovation.com', '146dd82e394f6ed1a95be7e7da03d472', '1', '930-460-85-51', 'KKJwnHoC4!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-06 04:56:10', '0000-00-00 00:00:00', '1'),
(222, '', 'anisha', 'mailinator', 'anishamailinator@gmail.com', '8c040a807d832e36c92e0b7435857078', '1', '1213421567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-06 09:57:53', '0000-00-00 00:00:00', '1'),
(223, '', 'Love', 'Faith', 'productexperiencer@gmail.com', '15f62939d7076e21e62737293213c36f', '1', '0739011588', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-07 11:24:11', '0000-00-00 00:00:00', '1'),
(224, '', 'Anisha', 'Yadav', 'test45@mailinator.com', 'b7d12957a33c7c36d90e69afac610ed3', '1', '1234234123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 04:38:59', '0000-00-00 00:00:00', '1'),
(225, '', 'Anisha', 'Yadav', 'anitest@mailinator.com', 'bb29511e1fb76f9ab7b2f292c0fa843e', '1', '9012898998', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 05:01:36', '0000-00-00 00:00:00', '1'),
(226, '', 'Anisha', 'Yadav', 'anisha@mailinator.com', '1f1695bdb23b39f91424250a7e7d1f00', '1', '7878122212', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 05:08:34', '0000-00-00 00:00:00', '1'),
(227, '', 'test', 'test', 'testtest@mailinator.com', 'b4e7248414c676f4dff511ecc9ea2935', '1', '7856122112', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 05:20:09', '0000-00-00 00:00:00', '1'),
(228, '', 'test', 'last', 'testlast@mailinator.com', 'ee4be594d8bd9ecc22f48e7ace4c22a2', '1', '1212348967', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 05:39:07', '0000-00-00 00:00:00', '1'),
(230, '', 'test', 'test', 'anishatest@mailainter.com', '5efcace5084e1e1736f06859bd10e818', '1', '7812354433', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 05:55:27', '0000-00-00 00:00:00', '1'),
(231, '', 'test', 'test', 'datatest@mailinator.com', 'def7de3c8402f8c1ac336ddf8c8f53bd', '1', '1212903490', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 05:57:18', '0000-00-00 00:00:00', '1'),
(232, '', 'Anisha', 'Yadav', 'test1data@mailnator.com', '6c584728c3d47c93bf7e4dc34137c55e', '1', '1230932123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 06:01:57', '0000-00-00 00:00:00', '1'),
(233, '', 'anisha', 'yadav', 'test@mailinator.com', '7bf84256de52e8c08d9cab71c912035b', '1', '7812221121', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 07:30:50', '0000-00-00 00:00:00', '1'),
(234, '', 'test', 'test', 'test1233@mailinator.com', 'c7a8085c3ecebcaa60e6542f3a2def7a', '1', '4534123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 07:47:39', '0000-00-00 00:00:00', '1'),
(235, '', 'test', 'last', 'testlast12@gmail.com', '4506e1c62f2671aef3c97d818c1c96a6', '1', '1212671221', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 08:23:18', '0000-00-00 00:00:00', '1'),
(236, '', 'Anisha', 'Yadav', 'testanisha@mailinator.com', '5935c81acdb0dba56fac3f464d556228', '1', '9012565222', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 08:26:28', '0000-00-00 00:00:00', '1'),
(237, '', 'test', 'test', 'test30@mailinator.com', 'f603c6da9feff9a19023fbb8fb639d50', '1', '1211999990', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 09:24:42', '0000-00-00 00:00:00', '1'),
(238, '', 'test', 'test', 'test09@mailinator.com', 'e6b1ff175c9679988f113d04918a0187', '1', '7812902222', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 09:53:03', '0000-00-00 00:00:00', '1'),
(239, '', 'test', 'test', 'test08@mailinator.com', 'd24c6ab985a232dc225f50d52a4de36c', '1', '342111222', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:02:12', '0000-00-00 00:00:00', '1'),
(240, '', 'test', 'Yadav', 'test67@mailinator.com', '892afa05a2cbc21eadf75d2c60485509', '1', '8967898978', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:03:56', '0000-00-00 00:00:00', '1'),
(241, '', 'test', 'test', 'test6@mailinator.com', '175d40fddcdaf85bfd5d255f3e8ef0eb', '1', '1289012343', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:10:51', '0000-00-00 00:00:00', '1'),
(242, '', 'test', 'test', 'test2@mailinator.com', '69158dd95eaa6be98dbe698429062503', '1', '1222112123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:20:26', '0000-00-00 00:00:00', '1'),
(243, '', 'Anisha', 'Yadav', 'test010@mailinator.com', 'c619cd63124003c69c616b3b6ae7a97b', '1', '1209909909', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:44:17', '0000-00-00 00:00:00', '1'),
(244, '', 'Anisha', 'Yadav', 'test011@mailinator.com', '4b2cbc0dac7e39d0a375690e3e5239ef', '1', '1222222222', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:49:36', '0000-00-00 00:00:00', '1'),
(245, '', 'Anisha', 'Yadav', 'test80@gmail.com', '64b980a81cc9b614edaa469f5d583533', '1', '1891111111', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:56:37', '0000-00-00 00:00:00', '1'),
(246, '', 'test', 'test', 'anisha8@mailinator.com', 'f69115526e52252e701d76aa4527bebb', '1', '9011123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 10:58:23', '0000-00-00 00:00:00', '1'),
(247, '', 'Anisha', 'Yadav', 'anish3@mailinator.com', '724930b3476044fad3b59f3595e1615e', '1', '2111234567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:00:11', '0000-00-00 00:00:00', '1'),
(248, '', 'Anisha', 'Yadav', 'yadav@mailinator.com', '1e33571542d3844c7f35460503802e5e', '1', '1211900123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:02:45', '0000-00-00 00:00:00', '1'),
(249, '', 'Anisha', 'Yadav', 'yadav2@mailinator.com', '4845cac46239d376e7ee094f3b19dd33', '1', '9012234567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:05:31', '0000-00-00 00:00:00', '1'),
(250, '', 'Anisha', 'Yadav', 'yadav3@mailinator.com', '3adeb382f0eb01314b93673766b11880', '1', '1234778909', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:07:17', '0000-00-00 00:00:00', '1'),
(251, '', 'Anisha', 'Yadav', 'ani5@mailinator.com', 'bc2577ae7c5c1b9504495bae9adbd5f8', '1', '1222128908', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:09:42', '0000-00-00 00:00:00', '1'),
(252, '', 'Anisha', 'Yadav', 'yadav90@mailinator.com', 'ce77e2a4baa5dc26064210498a097924', '1', '1222222111', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:19:37', '0000-00-00 00:00:00', '1'),
(253, '', 'Anisha', 'Yadav', 'a@mailinator.com', 'f91dec0f004d75275116911de99239f2', '1', '1256344567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:22:03', '0000-00-00 00:00:00', '1'),
(254, '', 'Anisha', 'Yadav', 'anisha7@gmail.com', 'a7dd8e16dc03690da356f2ae80474433', '1', '1212122212', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:24:25', '0000-00-00 00:00:00', '1'),
(255, '', 'Anisha', 'Yadav', 'yadav6@mailinator.com', '3dd749320a865fdcf55d119b78668b31', '1', '5634123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:28:22', '0000-00-00 00:00:00', '1'),
(256, '', 'Anisha', 'Yadav', 'yadav97@mailinator.com', '5a2bd0e75942b88d1f74671df7e2d4b4', '1', '1211901122', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:36:05', '0000-00-00 00:00:00', '1'),
(257, '', 'Anisha', 'Yadav', 'anisha3@mailinator.com', 'c912a803e61e632b1ff9920ba217f292', '1', '5612123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 11:41:42', '0000-00-00 00:00:00', '1'),
(258, '', 'Anisha', 'Yadav', 'anis@mailinator.com', '750e5277ae0d510a9948c8b22af98a38', '1', '666666666', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:35:25', '0000-00-00 00:00:00', '1'),
(259, '', 'Anisha', 'Yadav', 'ani@mailinator.com', '5357ddab472b93c99159ef979635d7a4', '1', '2112345678', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:38:33', '0000-00-00 00:00:00', '1'),
(260, '', 'Anisha', 'Yadav', 'atest@mailinator.com', '80ef07b5801b6195a33152a37023c675', '1', '1222267897', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:41:50', '0000-00-00 00:00:00', '1'),
(261, '', 'testing', 'data', 'mytestdata@mailinator.com', '2743b27ee21b230575d185681707d831', '1', '8960708891', 'mytestdata@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:41:52', '0000-00-00 00:00:00', '1'),
(262, '', 'Anisha', 'Yadav', 'anis123@mailinator.com', '31f37c6e3405ce83d34ee634022b3eda', '1', '1211123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:45:33', '0000-00-00 00:00:00', '1'),
(263, '', 'Anisha', 'Yadav', 'anish45@mailinator.com', '5f0486f4e371c51ef8b6745a5d0239d8', '1', '3332345678', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:53:08', '0000-00-00 00:00:00', '1'),
(264, '', 'Anisha', 'Yadav', 'anish456@mailitnator.com', '948ea5373a5ff008b12ee7027e04c6a9', '1', '4548967543', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:54:45', '0000-00-00 00:00:00', '1'),
(265, '', 'Anisha', 'Yadav', 'anish23@mailinator.com', '254443ffbaf852331cc21098a0127bba', '1', '2222467890', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 13:56:19', '0000-00-00 00:00:00', '1'),
(266, '', 'data', 'test', 'mydatatest@mailinator.com', '2d8ce07a8d6184ad56d24c6a9d691f34', '1', '896079091', 'mydatatest@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 14:00:56', '0000-00-00 00:00:00', '1'),
(267, '', 'testdata', 'test', 'testdatatest21@mailinator.com', '1ae614ac71db2e682e95029b2b900374', '1', '8907998211', 'testdatatest21@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 14:02:07', '0000-00-00 00:00:00', '1'),
(268, '', 'tests', 'testes', 'teststesta@mailinator.com', 'be98bd62e9a46ca47f4ac4c7ea50cceb', '1', '87898465651231', 'teststesta@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 14:08:49', '0000-00-00 00:00:00', '1'),
(269, '', 'testhello', 'test', 'hellotestdata@mailinator.com', '9d6812d0eecb61b4eb8f47b84a1f5b11', '1', '8960490982165', 'hellotestdata@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-08 14:13:07', '0000-00-00 00:00:00', '1'),
(270, '', 'Anisha', 'Yadav', 'test89@mailinator.com', '081e12ae49f140fd2f73af592ab9ce05', '1', '9112345678', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 05:24:22', '0000-00-00 00:00:00', '1'),
(271, '', 'test', 'test', 'testt8@mailinator.com', '79e2b0f23ce63d06b2a7c9e694a27d2d', '1', '8912122345', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 05:58:08', '0000-00-00 00:00:00', '1'),
(272, '', 'test', 'test', 'test46@mailinator.com', 'd9a4ca1678d9973021cc964ec49a2565', '1', '9012212345', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 06:01:31', '0000-00-00 00:00:00', '1'),
(273, '', 'tets', 'test', 'test3@mailinator.com', 'c32ed503988256c3e52db759b1a07f7f', '1', '1222345678', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 06:03:32', '0000-00-00 00:00:00', '1'),
(274, '', 'Anisha', 'Yadav', 'test5@mailinator.com', '303decc98b7eaf6c5f3d91075e96b24b', '1', '7812345678', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 06:05:01', '0000-00-00 00:00:00', '1'),
(275, '', 'Anisha', 'Yadav', 'test10@mailinator.com', '93bd172999d04631cbf7d8ab0af7af01', '1', '12212226789', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 06:06:56', '0000-00-00 00:00:00', '1'),
(276, '', 'Anisha', 'Yadav', 'test56@mailinator.com', '0ca0251e768772fac5655bcf592f603c', '1', '9012122567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-09 06:20:02', '0000-00-00 00:00:00', '1'),
(277, '', 'Iradukunda', 'Eric', 'zanazoseleocadie@gmail.com', 'b5f5241c8441ae1ebc52ac142f7ba7b7', '1', '0739059711', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-15 21:52:49', '0000-00-00 00:00:00', '1'),
(278, '', 'Immaculee', 'Sister', 'immaculee012@gmail.com', '7fba07a152906e9b5c768021b546facd', '1', '0739059712', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-15 22:01:07', '0000-00-00 00:00:00', '1'),
(279, '', 'Manishimwe', 'Berenard', 'manishimweberenard@gmail.com', '118baf6b0cf38984a2608043096ec4bf', '1', '798751685', '12003kivu..', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-19 07:00:42', '0000-00-00 00:00:00', '1'),
(280, '', 'test', 'test', 'test122@mailinator.com', '66d21a215a49f11e213b20d3af00c00a', '1', '1222222110', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 10:34:08', '0000-00-00 00:00:00', '1'),
(281, '', 'a', 'y', 'ay45@mailinator.com', '6053a469a675808874b87c502e1cda2f', '1', '6645454545', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:00:36', '2024-07-22 07:00:36', '1'),
(282, '', 'testdata', 'testdata', 'testdata23@mailinator.com', '156f949c1dc2b6feae428e442a1e9b76', '0', '4545454545', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 11:01:48', '0000-00-00 00:00:00', '1'),
(283, '', 'Anisha', 'Yadav', 'test891@mailinator.com', 'a47c7b85b913e71555a02a4d3bea0780', '0', '1212114567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 11:30:22', '0000-00-00 00:00:00', '1'),
(284, '', 'Anisha', 'Yadav', 't54@mailinator.com', 'dafced02b0aef735d891b0a7e04f39b6', '1', '1212907656', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:35:59', '2024-07-22 07:35:59', '1'),
(285, '', 'Anisha', 'Yadav', 'test21@mailinator.com', '2f80a73ae285f480c80d7b37a7a88384', '1', '1222129022', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:37:09', '2024-07-22 07:37:09', '1'),
(286, '', 'Anisha', 'Yadav', 't34@mailinator.com', 'c6933ac438dfea726b6766d54cff5998', '0', '0921212121', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 11:39:45', '0000-00-00 00:00:00', '1'),
(287, '', 'Anisha', 'Yadav', 't43@mailinator.com', '00bd6c85b1da6c1c5124a14e6f00cade', '1', '12345907654', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:42:34', '2024-07-22 07:42:34', '1'),
(288, '', 'Anisha', 'Yadav', 'ttt@mailinator.com', 'd0e060bcfb805f54a00a2bef3ffb975d', '1', '1234312345', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:51:11', '2024-07-22 07:51:11', '1'),
(289, '', 'Anisha', 'Yadav', 'tttt@mailinator.com', 'f8e4da11f557d6caf05fb4477bcdbe78', '1', '1222111123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:53:41', '2024-07-22 07:53:41', '1'),
(290, '', 'Anisha', 'Yadav', 'ttttt@mailinator.com', 'd1a270c6ecd0bbcbb053eb2813ff65fd', '1', '891212122', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:56:46', '2024-07-22 07:56:46', '1'),
(291, '', 'Anisha', 'Yadav', 'tt128@mailinator.com', '4446af15b22ed631a6ab5541a5798509', '1', '2332356789', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 07:58:47', '2024-07-22 07:58:47', '1'),
(292, '', 'Anisha', 'Yadav', 'ttr@mailinator.com', 'd5ef33dea4bda7be398de0e0549a1fe0', '1', '1234123456', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 08:00:43', '2024-07-22 08:00:43', '1'),
(293, '', 'Anisha', 'Yadav', 'tm@mailinator.com', 'fa860ff8adc71bcdd74bf83bef717b88', '1', '1234567123', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 08:03:42', '2024-07-22 08:03:42', '1'),
(294, '', 'tset', 'etst', 'gsrwanda@mailinator.com', '1fdb61449f61b1546b4b5dd6b3f39f58', '1', '12323312', 'gsrwanda@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 08:08:43', '2024-07-22 08:08:43', '1'),
(295, '', 'Anisha', 'Yadav', 'aaaaaa@mailinator.com', '57bb998c7c3cae06efa5e2a41463ca41', '1', '1232323232', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 08:07:58', '2024-07-22 08:07:58', '1'),
(296, '', 'Anisha', 'Yadav', 'gsr@mailinator.com', '8515d2e349f9fa6b71e677e7a28ec198', '1', '1222212121', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 08:12:46', '2024-07-22 08:12:46', '1'),
(297, '', 'global', 'global', 'global2@mailinator.com', 'ab516443c4cf71af68872766419a0f6c', '0', '8986542132', 'global2@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 12:18:08', '0000-00-00 00:00:00', '1'),
(298, '', 'test', 'test', 'gsrwanda2@mailinator.com', '66d22d4c92c9b4833f0ad74e07ee308c', '1', '896565655', 'gsrwanda2@mailinator.com', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-22 08:34:44', '2024-07-22 08:34:44', '1'),
(299, '', 'Anisha', 'Yadav', 'anishaiert@mailinator.com', '010d25104e4db60037e1584e676e026f', '1', '9012312323', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-24 06:16:21', '2024-07-24 06:16:21', '1'),
(300, '', 'Jean', 'Mba', 'jeanbookingaquila@gmail.com', '5393dfaea19504dbd32e8d54b79532ad', '1', '0781212012', 'SHOsho\"1986', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-24 11:31:15', '2024-07-24 11:31:15', '1'),
(301, '', 'Agasaro', 'Amelia', 'kkalimbaj@gmail.com', '39c111d5b9acab11058b9b90934c2eae', '1', '0782391413', 'umuliza1', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-26 07:32:41', '2024-07-26 07:32:41', '1'),
(302, '', 'Kida', 'Great', 'abijuru2022@gmail.com', '745ce1acc38692f7253e69348ca99816', '1', '0739012598', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-07-26 06:03:59', '2024-07-26 06:03:59', '1'),
(303, '', 'Ednas', 'HABIYAMBERE', 'eddy02436@gmail.com', 'a82e08d0d215735c5bae4f90081606dd', '0', '0791209679', 'Habiyambere1!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 01:06:27', '0000-00-00 00:00:00', '1'),
(304, '', 'Bim', 'Mokonzi', 'swaib0011@gmail.com', '6e47b1bb46c2f7a9d412bc6ef4dd12ca', '0', '243998868706', '998868Mokonzi', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 08:49:04', '0000-00-00 00:00:00', '1'),
(305, '', 'Karemera', 'Jc', 'kareclaude19@gmail.com', 'a7465eb65b38c6e009c9474fca7ad928', '0', '0788960860', 'kare@0505@kare', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 08:52:19', '0000-00-00 00:00:00', '1'),
(306, '', 'Louis', 'NGABONZIMA', 'louisgrigno@gmail.com', '88d83b8f04c3fd0c10a3486924438cb6', '0', '0782347211', 'globalshippers@2024', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 09:00:25', '0000-00-00 00:00:00', '1'),
(307, '', 'Latim', 'Wathum', 'lawrencenyekolatim@gmail.com', 'f8b29e0701866adfc2bfadcad7985379', '0', '+250782654284', 'latimwathum99', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 09:02:56', '0000-00-00 00:00:00', '1'),
(308, '', 'Jonathan', 'Mwizerwa', 'mwizerwajonathan12@gmail.com', 'b8ee4f5da99b5bd417b16dc0ebaadc6b', '0', '0788903692', 'gr13gr13', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 09:49:14', '0000-00-00 00:00:00', '1'),
(309, '', 'Faustin', 'Nteziryayo', 'chozenblood250@gmail.com', 'd17d96f0e5bac012da1ec17c61bf4990', '0', '0733333759', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 10:44:23', '0000-00-00 00:00:00', '1'),
(310, '', 'Vincent', 'Muhire', 'muhivin@gmail.com', '6870e94c2bc5f0dabae7f6402645eb2d', '0', '0787468520', 'Muhivin@2024', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 15:28:23', '0000-00-00 00:00:00', '1'),
(311, '', 'Benjamin', 'Shema', 'benjaminshema@gmail.com', 'a879c29af061ef5bc4b5a7281c2d1057', '0', '+250722336478', 'Kigali@shema1', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-01 22:37:59', '0000-00-00 00:00:00', '1'),
(312, '', 'Keeon', 'Pullen', 'keeonspullen@gmail.com', 'a45b3de0d2dfa549e5024bdc37ce3a4d', '0', '+14802271547', 'Pimpin4!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-02 02:57:23', '0000-00-00 00:00:00', '1'),
(0, '101277943677464972957', 'anisha', 'yadav', 'anishaiert@gmail.com', '', '0', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocLxpn5m6-DNcCBbFDc-orCXFsTa0zCE0XXsD-Ba', 'https://lh3.googleusercontent.com/a/ACg8ocLxpn5m6-DNcCBbFDc-orCXFsTa0zCE0XXsD-Ba', '', '', '', '', '', 'ea7713a7f0fb2e6ba4c0de9369e085fa', '', '', '0', '2024-08-23 04:15:51', '2024-08-23 04:15:51', '1'),
(331, '', 'Anisha', 'Yadav', 'anisha00@mailinator.com', 'afd9ec82b3aa31103b09c0172c670cf9', '0', '9091234567', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '3e356cf4e82d7c7ab9d0010b0aafa95a', '', '', '0', '2024-08-12 05:57:57', '2024-08-12 05:57:57', '1'),
(332, '', 'Wani', 'Tumalo', 'mssnoel28@gmail.com', '134de48c099286fe9cc2d16cc19aa031', '0', '0794769045', 'Ilovemyself1.', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-12 21:27:12', '0000-00-00 00:00:00', '1'),
(317, '102254075796160488281', 'Abijuru', 'Fabrice', 'hissonfabu@gmail.com', '', '0', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocLXMi1u6vMsWsl-x-Q895DOAOBoU9otne2K-T1h', '', '', '', '', '', '', '', '', '', '0', '2024-08-04 10:17:43', '0000-00-00 00:00:00', '1'),
(318, '103748482723042743347', 'abijuru', 'fabrice', 'abijuru2003@gmail.com', '', '0', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocJ18U-v7f9i-7zBqpy1fLgD4YVx1FDz4rZHN4Gt', '', '', '', '', '', '', '', '', '', '0', '2024-08-05 06:58:31', '2024-08-05 10:58:31', '1'),
(335, '', 'Anisha', 'Yadav', 'anisha09@mailinator.com', '517ad891507b51ba240ce5ade6370da9', '0', '5634212345', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-14 11:59:31', '0000-00-00 00:00:00', '1'),
(334, '', 'GATETE', 'Pacifique', 'paccyaklam5@gmail.com', 'e6665fd5000bd23153602e8297367144', '0', '0780782777', 'Easylife123!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-14 11:40:49', '0000-00-00 00:00:00', '1'),
(328, '101277943677464972957', 'anisha', 'yadav', 'anishaiert@gmail.com', '', '0', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocLxpn5m6-DNcCBbFDc-orCXFsTa0zCE0XXsD-Ba', '', '', '', '', '', '', 'ea7713a7f0fb2e6ba4c0de9369e085fa', '', '', '0', '2024-08-23 04:15:51', '2024-08-23 04:15:51', '1'),
(329, '', 'Marion', 'Zandler', 'marionzandler@yahoo.com', 'b5a7c35677c48434b57606e848539bf2', '0', '0185852855', 'Chase1234567890!', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-09 05:05:01', '0000-00-00 00:00:00', '1'),
(330, '', 'ISHIMWE', 'Bertin', 'abijuru2021@gmail.com', '33c29aeeeff1b21f8b2ed9459d5ca213', '0', '0784651740', 'tmnt1234', 'public/uploads/images.png', '', 'KN 57 St', 'Makuza Plaza', '250', 'Kigali', '', '', '', '', '0', '2024-08-09 01:37:32', '2024-08-09 01:37:32', '1'),
(333, '', 'Uwera', 'Cadeau', 'uweracadeau1@gmail.com', '9feddc735042096142040d8dbbd4c5a1', '0', '0737012697', 'tmnt1234', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-13 09:02:07', '0000-00-00 00:00:00', '1'),
(325, '110361566838186971584', 'Anisha', 'Yadav', 'anishaiert1996@gmail.com', '', '0', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocKMuwi8mzrGGcP0I9-4dvb7TWADWVFgk0Sxh5wo', 'https://lh3.googleusercontent.com/a/ACg8ocKMuwi8mzrGGcP0I9-4dvb7TWADWVFgk0Sxh5wo', '', '', '', '', '', '4e4e3f87b7bbf6e028e5ac93a8fd45ba', '', '', '0', '2024-08-12 05:56:57', '2024-08-12 05:56:57', '1'),
(336, '', 'Anisha', 'Yadav', 'yadavanisha450@gmail.com', '89c63dee7adf3cf464232db040c8e6ac', '0', '7864512345', '12345678', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-14 12:11:26', '0000-00-00 00:00:00', '1'),
(337, '', 'SIMPUNGA', 'Pheneas', 'simpunga93@gmail.com', '279f8d4ecfd13897efa78eb4d0407bd2', '0', '0783331345', 'Rwanda@123', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-14 23:01:25', '0000-00-00 00:00:00', '1'),
(338, '', 'Olivia', 'Asiimwe', 'oasiimwe27@gmail.com', 'c6639dfc9073d8835622e644587cdcae', '0', '0787300221', 'shithappens', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-21 12:02:13', '0000-00-00 00:00:00', '1'),
(339, '', 'KAYITESI', 'YVONNE', 'KKSHOPLTD@GMAIL.COM', 'c9b26cd9bb31f1cafa7fcb1ca8628a57', '0', '+250 788 410 895', 'Andric222@2008', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-23 17:36:28', '0000-00-00 00:00:00', '1'),
(340, '', 'Dushimirimana', 'Jerome', 'ushime79@yahoo.fr', '5021863e048c4173125e3b4e8f6a13a8', '0', '+250788694169', 'Deekeza1', 'public/uploads/images.png', '', '', '', '', '', '', '', '', '', '0', '2024-08-25 06:51:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `address_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `gate_code` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `pin_code` int(6) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`address_id`, `user_id`, `fname`, `lname`, `phone_number`, `street_address`, `gate_code`, `city`, `state`, `country`, `pin_code`, `created_date`, `updated_date`, `is_deleted`) VALUES
(8, '6', 'Anish', 'Yadav', '', 'ballia', '1234', 'Ballia', 'UP', 'Barbados', 221718, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(7, '6', 'Vidhyanshi', 'Yadav', '1234567890', 'ballia', '1234', 'Ballia', 'UP', 'Bangladesh', 221718, '2023-12-19 05:52:50', '0000-00-00 00:00:00', '0'),
(4, '1', 'Vidhyanshi', 'Yadav', '1234567890', 'ballia', '1234', 'Ballia', 'UP', 'Bahrain', 221718, '2023-12-18 23:48:24', '2023-12-18 23:48:24', '1'),
(5, '11', 'Anisha ', 'Yadav', '234242432', 'street address', 'apt', 'city', 'state', 'Afghanistan', 10001, '2023-12-15 07:20:40', '0000-00-00 00:00:00', '0'),
(6, '1', 'Anish', 'Yadav', '', 'ballia', '1234', 'Ballia', 'UP', 'Belarus', 221718, '2023-12-20 07:46:01', '2023-12-20 07:46:01', '1'),
(9, '2', 'ani', 'singh', '1234567890', 'ballia', '1234', 'Ballia', 'UP', 'Bangladesh', 221711, '2023-12-19 09:58:54', '0000-00-00 00:00:00', '0'),
(10, '1', 'test', 'test', '', 'testing', '12345', 'Ballia', 'UP', 'Belarus', 221718, '2023-12-20 07:46:04', '2023-12-20 07:46:04', '1'),
(11, '1', 'Vidhyanshi', 'singh', '1234567890', 'testing', 'testing', 'Ballia', 'UP', 'Barbados', 221718, '2023-12-19 22:25:54', '0000-00-00 00:00:00', '0'),
(12, '1', 'Vidhyanshi', 'singh', '1234567890', 'testing', 'testing', 'Ballia', 'UP', 'Barbados', 221718, '2023-12-20 07:45:57', '2023-12-20 07:45:57', '1'),
(13, '1', 'Vidhyanshi', 'Yadav', '', 'ballia', '1234', 'Ballia', 'UP', 'Barbados', 222222, '2023-12-20 07:45:16', '2023-12-20 07:45:16', '1'),
(14, '9', 'Abijuru', 'Fabrice', '0784651740', 'KN 57 St', 'Makuza Plaza building, 2nd floor', 'Kigali', 'City of Kigali', 'Burundi', 250, '2023-12-22 05:53:32', '0000-00-00 00:00:00', '0'),
(15, '1', 'Vidhyanshi', 'Yadav', '1234567890', 'ballia', '1234', 'Ballia', 'Varanashi', 'Bangladesh', 221711, '2023-12-26 23:46:09', '0000-00-00 00:00:00', '0'),
(16, '2', 'Vidhyanshi', 'testing', '1234567890', 'ballia', '1234', 'Ballia', 'UP', 'Romania', 221718, '2024-01-10 07:28:54', '0000-00-00 00:00:00', '0'),
(17, '9', 'Abijuru', 'Fabrice', '', 'KN 57 St', 'Makuza Plaza building, 2nd floor', 'Kigali', 'City of Kigali', 'Rwanda', 250, '2024-07-18 05:24:10', '2024-07-18 05:24:10', '1'),
(18, '29', 'anisha', 'yadav', '8115520625', 'belthra', '', 'ballia', 'up', 'Qatar', 221718, '2024-02-03 00:34:08', '0000-00-00 00:00:00', '0'),
(19, '30', 'address', 'india', '89607979891', 'testing street address', 'apartment', 'city1', 'state1', 'Afghanistan', 2212311, '2024-04-16 13:04:17', '2024-04-16 13:04:17', '0'),
(20, '30', 'testing', 'testing', '', 'street address', 'testing apartment', 'city', 'state', 'Rwanda', 226012, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(21, '30', 'testing', 'testing', '', 'street address', 'testing apartment', 'city', 'state', 'Rwanda', 226012, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(22, '30', '', '', '', '', '', '', '', 'Rwanda', 0, '2024-03-23 04:00:37', '0000-00-00 00:00:00', '0'),
(23, '30', '', '', '', '', '', '', '', 'Rwanda', 0, '2024-03-28 09:34:44', '0000-00-00 00:00:00', '0'),
(24, '30', '', '', '', '', '', '', '', 'Afghanistan', 11111, '2024-04-16 13:04:26', '2024-04-16 13:04:26', '0'),
(25, '30', 'rewr', 'wereww', '12312321321', 'rrerer', 'wrwer', 'test', 'testessrsers', 'Rwanda', 23121, '2024-04-15 14:32:29', '0000-00-00 00:00:00', '0'),
(26, '3', 'Abijuru ', 'Fabrice', '784651740 ', 'Kn 72 st', 'Makuza', 'Kigali', 'Kigali city', 'Burundi', 250, '2024-07-01 09:56:15', '2024-07-01 09:56:15', '1'),
(27, '1', 'ABIJURU ', 'FABRICE ', '790007008', 'Kn 72 st', 'Makuza Building', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-05-23 11:59:53', '0000-00-00 00:00:00', '0'),
(28, '3', 'Abijuru', 'Fabrice', '784651740', 'Kn 72 st ', 'Makuza Peace Plaza', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-07-01 09:56:22', '2024-07-01 09:56:22', '1'),
(29, '3', 'Abijuru', 'Fabrice', '784651740', 'Kn 72 st ', 'Makuza Peace Plaza', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-07-01 09:56:24', '2024-07-01 09:56:24', '1'),
(30, '3', 'Abijuru', 'Fabrice', '784651740', 'Kn 72 st ', 'Makuza Peace Plaza', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-07-01 09:56:27', '2024-07-01 09:56:27', '1'),
(31, '3', 'Abijuru', 'Fabrice', '784651740', 'Kn 72 st ', 'Makuza Peace Plaza', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-05-28 08:24:22', '0000-00-00 00:00:00', '0'),
(32, '56', 'Anisha', 'Yadav', '', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'Rwanda', 221718, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(33, '1', 'Anisha', 'Yadav', '', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'Rwanda', 221718, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(34, '65', 'Anisha', 'Yadav', '', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'Rwanda', 221718, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(35, '65', 'Anisha', 'Yadav', '08115520625', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'Rwanda', 221718, '2024-06-24 06:25:09', '0000-00-00 00:00:00', '0'),
(36, '67', 'Prakhar', 'Pandey', '8960790891', '276/5 ', 'Sector J Rail Nagar ', 'Lucknow', 'UP', 'Hong Kong', 26012, '2024-06-24 08:45:58', '0000-00-00 00:00:00', '0'),
(37, '65', 'Anisha', 'Yadav', '08115520625', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'India', 221718, '2024-06-24 09:20:44', '0000-00-00 00:00:00', '0'),
(38, '65', 'Anisha', 'Yadav', '', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'Rwanda', 221718, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(39, '66', 'Testing', 'Testing', '1231312', 'street address', 'suite', 'city', 'state', 'Rwanda', 226012, '2024-06-24 10:48:47', '0000-00-00 00:00:00', '0'),
(40, '70', 'Ishimwe', 'Bertin', '739011597', 'kn 72 st', 'Makuza Plaza', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-06-26 11:14:38', '0000-00-00 00:00:00', '0'),
(41, '70', 'Ishimwe', 'Bertin', '739011597', 'kn 72 st', 'Makuza Plaza', 'Kigali city', 'Kigali', 'Rwanda', 250, '2024-06-26 11:14:38', '0000-00-00 00:00:00', '0'),
(42, '150', 'tuyizere', 'ELYSE', '0781816180', 'kn 87 st', '', 'kigali', 'kigali', 'Rwanda', 250, '2024-06-30 08:30:21', '2024-06-30 08:30:21', '1'),
(43, '150', 'tuyizere', 'ELYSE', '', 'KN 87 ST ', '', 'KIGALI', 'FL', 'Rwanda', 250, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(44, '229', 'Anisha', 'Yadav', '8115520625', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'India', 221718, '2024-07-08 14:38:50', '0000-00-00 00:00:00', '0'),
(45, '300', '', '', '', '', '', '', '', 'Rwanda', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(46, '29', 'Anisha', 'Yadav', '8115520625', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'India', 221718, '2024-07-29 12:31:13', '0000-00-00 00:00:00', '0'),
(47, '314', 'Anisha', 'Yadav', '8115520625', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'India', 221718, '2024-08-04 04:01:58', '0000-00-00 00:00:00', '0'),
(48, '314', 'Anisha', 'Yadav', '', 'Vill Shahpur Afga Post Telma Jamaluddinpur Ballia', '', 'Ballia', 'Uttar Pradesh', 'Rwanda', 221718, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_address`
--
ALTER TABLE `admin_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_consolidate_shipment`
--
ALTER TABLE `admin_consolidate_shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assisted_shopnship_item_details`
--
ALTER TABLE `assisted_shopnship_item_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assisted_user_address`
--
ALTER TABLE `assisted_user_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cms_homepage`
--
ALTER TABLE `cms_homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_login`
--
ALTER TABLE `facebook_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `gsr_aboutus_sec1`
--
ALTER TABLE `gsr_aboutus_sec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_aboutus_sec2`
--
ALTER TABLE `gsr_aboutus_sec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_aboutus_sec3`
--
ALTER TABLE `gsr_aboutus_sec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_aboutus_sec4`
--
ALTER TABLE `gsr_aboutus_sec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_aboutus_sec5`
--
ALTER TABLE `gsr_aboutus_sec5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_aboutus_sec6`
--
ALTER TABLE `gsr_aboutus_sec6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_aboutus_sec7`
--
ALTER TABLE `gsr_aboutus_sec7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_admin_login`
--
ALTER TABLE `gsr_admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_admin_payment`
--
ALTER TABLE `gsr_admin_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_admin_users`
--
ALTER TABLE `gsr_admin_users`
  ADD PRIMARY KEY (`admin_users_id`);

--
-- Indexes for table `gsr_blogsection`
--
ALTER TABLE `gsr_blogsection`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `gsr_blog_section1`
--
ALTER TABLE `gsr_blog_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_blog_section2`
--
ALTER TABLE `gsr_blog_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_chatbot`
--
ALTER TABLE `gsr_chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_cms_blog`
--
ALTER TABLE `gsr_cms_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_cms_contactus`
--
ALTER TABLE `gsr_cms_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_cms_restrictions`
--
ALTER TABLE `gsr_cms_restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_cms_shipping_cal`
--
ALTER TABLE `gsr_cms_shipping_cal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_consolidation_sec1`
--
ALTER TABLE `gsr_consolidation_sec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_consolidation_sec2`
--
ALTER TABLE `gsr_consolidation_sec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_consolidation_sec3`
--
ALTER TABLE `gsr_consolidation_sec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_consolidation_sec4`
--
ALTER TABLE `gsr_consolidation_sec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_contact`
--
ALTER TABLE `gsr_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_faq_sec1`
--
ALTER TABLE `gsr_faq_sec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_faq_sec2`
--
ALTER TABLE `gsr_faq_sec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_helpcentre_categories`
--
ALTER TABLE `gsr_helpcentre_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `gsr_helpcentre_qna`
--
ALTER TABLE `gsr_helpcentre_qna`
  ADD PRIMARY KEY (`qna_id`);

--
-- Indexes for table `gsr_help_centre_sec1`
--
ALTER TABLE `gsr_help_centre_sec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_help_centre_sec2`
--
ALTER TABLE `gsr_help_centre_sec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_homepage_cms`
--
ALTER TABLE `gsr_homepage_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_howitworks_sec1`
--
ALTER TABLE `gsr_howitworks_sec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_howitworks_sec2`
--
ALTER TABLE `gsr_howitworks_sec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_plan`
--
ALTER TABLE `gsr_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `gsr_privacy`
--
ALTER TABLE `gsr_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_restrictions_section1`
--
ALTER TABLE `gsr_restrictions_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_restrictions_section2`
--
ALTER TABLE `gsr_restrictions_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_shipment`
--
ALTER TABLE `gsr_shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_shipment_countries`
--
ALTER TABLE `gsr_shipment_countries`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `gsr_shipment_rates`
--
ALTER TABLE `gsr_shipment_rates`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `gsr_shipping_cal_section1`
--
ALTER TABLE `gsr_shipping_cal_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_terms`
--
ALTER TABLE `gsr_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_user_card_details`
--
ALTER TABLE `gsr_user_card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsr_user_payment_details`
--
ALTER TABLE `gsr_user_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_destination_address`
--
ALTER TABLE `international_destination_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_details_package_information`
--
ALTER TABLE `international_details_package_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_indian_pickup_address`
--
ALTER TABLE `international_indian_pickup_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_order_details`
--
ALTER TABLE `international_order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_images`
--
ALTER TABLE `order_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopnship_item_details`
--
ALTER TABLE `shopnship_item_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_type`
--
ALTER TABLE `tbl_item_type`
  ADD PRIMARY KEY (`item_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_address`
--
ALTER TABLE `admin_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_consolidate_shipment`
--
ALTER TABLE `admin_consolidate_shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `assisted_shopnship_item_details`
--
ALTER TABLE `assisted_shopnship_item_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `assisted_user_address`
--
ALTER TABLE `assisted_user_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_homepage`
--
ALTER TABLE `cms_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facebook_login`
--
ALTER TABLE `facebook_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec1`
--
ALTER TABLE `gsr_aboutus_sec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec2`
--
ALTER TABLE `gsr_aboutus_sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec3`
--
ALTER TABLE `gsr_aboutus_sec3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec4`
--
ALTER TABLE `gsr_aboutus_sec4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec5`
--
ALTER TABLE `gsr_aboutus_sec5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec6`
--
ALTER TABLE `gsr_aboutus_sec6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gsr_aboutus_sec7`
--
ALTER TABLE `gsr_aboutus_sec7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gsr_admin_login`
--
ALTER TABLE `gsr_admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_admin_payment`
--
ALTER TABLE `gsr_admin_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `gsr_admin_users`
--
ALTER TABLE `gsr_admin_users`
  MODIFY `admin_users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_blogsection`
--
ALTER TABLE `gsr_blogsection`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gsr_blog_section1`
--
ALTER TABLE `gsr_blog_section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_blog_section2`
--
ALTER TABLE `gsr_blog_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gsr_chatbot`
--
ALTER TABLE `gsr_chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gsr_cms_blog`
--
ALTER TABLE `gsr_cms_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gsr_cms_contactus`
--
ALTER TABLE `gsr_cms_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_cms_restrictions`
--
ALTER TABLE `gsr_cms_restrictions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gsr_cms_shipping_cal`
--
ALTER TABLE `gsr_cms_shipping_cal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_consolidation_sec1`
--
ALTER TABLE `gsr_consolidation_sec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_consolidation_sec2`
--
ALTER TABLE `gsr_consolidation_sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gsr_consolidation_sec3`
--
ALTER TABLE `gsr_consolidation_sec3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_consolidation_sec4`
--
ALTER TABLE `gsr_consolidation_sec4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gsr_contact`
--
ALTER TABLE `gsr_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gsr_faq_sec1`
--
ALTER TABLE `gsr_faq_sec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_faq_sec2`
--
ALTER TABLE `gsr_faq_sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gsr_helpcentre_categories`
--
ALTER TABLE `gsr_helpcentre_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gsr_helpcentre_qna`
--
ALTER TABLE `gsr_helpcentre_qna`
  MODIFY `qna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gsr_help_centre_sec1`
--
ALTER TABLE `gsr_help_centre_sec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gsr_help_centre_sec2`
--
ALTER TABLE `gsr_help_centre_sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gsr_homepage_cms`
--
ALTER TABLE `gsr_homepage_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gsr_howitworks_sec1`
--
ALTER TABLE `gsr_howitworks_sec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_howitworks_sec2`
--
ALTER TABLE `gsr_howitworks_sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gsr_plan`
--
ALTER TABLE `gsr_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gsr_privacy`
--
ALTER TABLE `gsr_privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_restrictions_section1`
--
ALTER TABLE `gsr_restrictions_section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_restrictions_section2`
--
ALTER TABLE `gsr_restrictions_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `gsr_shipment`
--
ALTER TABLE `gsr_shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `gsr_shipment_countries`
--
ALTER TABLE `gsr_shipment_countries`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gsr_shipment_rates`
--
ALTER TABLE `gsr_shipment_rates`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `gsr_shipping_cal_section1`
--
ALTER TABLE `gsr_shipping_cal_section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_terms`
--
ALTER TABLE `gsr_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsr_user_card_details`
--
ALTER TABLE `gsr_user_card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gsr_user_payment_details`
--
ALTER TABLE `gsr_user_payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `international_destination_address`
--
ALTER TABLE `international_destination_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `international_details_package_information`
--
ALTER TABLE `international_details_package_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `international_indian_pickup_address`
--
ALTER TABLE `international_indian_pickup_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `international_order_details`
--
ALTER TABLE `international_order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_images`
--
ALTER TABLE `order_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopnship_item_details`
--
ALTER TABLE `shopnship_item_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_item_type`
--
ALTER TABLE `tbl_item_type`
  MODIFY `item_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
