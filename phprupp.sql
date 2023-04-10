-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 08:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phprupp`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `customer_id`, `first_name`, `last_name`, `company`, `address`, `city`, `postcode`, `country_id`, `createdAt`, `updatedAt`) VALUES
(17, 5, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-12 07:52:00', '2023-02-12 07:52:00'),
(18, 6, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-12 07:52:48', '2023-02-12 07:52:48'),
(19, 7, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-12 08:03:03', '2023-02-12 08:03:03'),
(20, 8, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-12 08:04:40', '2023-02-12 08:04:40'),
(21, 9, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-12 09:15:39', '2023-02-12 09:15:39'),
(22, 10, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-12 14:57:32', '2023-02-12 14:57:32'),
(38, 4, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-19 15:19:03', '2023-02-19 15:19:03'),
(39, 4, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 14, '2023-02-19 15:19:03', '2023-02-19 15:19:03'),
(40, 4, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-02-19 15:19:03', '2023-02-19 15:19:03'),
(41, 13, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:46:56', '2023-03-01 09:46:56'),
(42, 14, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:47:38', '2023-03-01 09:47:38'),
(43, 15, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:48:17', '2023-03-01 09:48:17'),
(44, 16, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:48:49', '2023-03-01 09:48:49'),
(45, 17, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:51:17', '2023-03-01 09:51:17'),
(46, 18, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:53:57', '2023-03-01 09:53:57'),
(47, 19, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 09:58:03', '2023-03-01 09:58:03'),
(56, 28, '', '', '', '', '', '', 1, '2023-03-01 15:53:29', '2023-03-01 15:53:29'),
(57, 29, 'Keven', 'Tep', 'Ke', 'Phnom Penh', 'Phnom Penh', '11000', 36, '2023-03-01 16:00:39', '2023-03-01 16:00:39'),
(64, 36, 'Keven', 'Tep', '', 'Home 2B Street 907, Russey Keo, Russey Keo, Phnom Penh, Cambodia.', 'Phnom Penh', '12100', 36, '2023-03-06 08:01:55', '2023-03-06 08:01:55'),
(66, 39, 'Keven', 'Shop', 'RUPP', 'Phnom Penh', 'Phnom Penh', '11000', 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 41, 'Hello World 2', 'Hello World 2', 'Hello World 2', 'Hello World 2', 'Hello World 2', 'Hello Worl', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Category',
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `top` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `meta_title`, `image`, `parent_id`, `top`, `sort_order`, `status`, `createdAt`, `updatedAt`) VALUES
(8, 'Category 2', 'Category 1', 'Category 1', NULL, 2, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `postcode_required` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `postcode_required`, `status`, `sort_order`, `createdAt`, `updatedAt`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Albania', 'AL', 'ALB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Algeria', 'DZ', 'DZA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'American Samoa', 'AS', 'ASM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Andorra', 'AD', 'AND', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Angola', 'AO', 'AGO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Anguilla', 'AI', 'AIA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Antarctica', 'AQ', 'ATA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Argentina', 'AR', 'ARG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Armenia', 'AM', 'ARM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Aruba', 'AW', 'ABW', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Australia', 'AU', 'AUS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Austria', 'AT', 'AUT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Azerbaijan', 'AZ', 'AZE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bahamas', 'BS', 'BHS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Bahrain', 'BH', 'BHR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Bangladesh', 'BD', 'BGD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Barbados', 'BB', 'BRB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Belarus', 'BY', 'BLR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Belgium', 'BE', 'BEL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Belize', 'BZ', 'BLZ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Benin', 'BJ', 'BEN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Bermuda', 'BM', 'BMU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Bhutan', 'BT', 'BTN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Bolivia', 'BO', 'BOL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Botswana', 'BW', 'BWA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Bouvet Island', 'BV', 'BVT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Brazil', 'BR', 'BRA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Brunei Darussalam', 'BN', 'BRN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Bulgaria', 'BG', 'BGR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Burkina Faso', 'BF', 'BFA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Burundi', 'BI', 'BDI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Cambodia', 'KH', 'KHM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Cameroon', 'CM', 'CMR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Canada', 'CA', 'CAN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Cape Verde', 'CV', 'CPV', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Cayman Islands', 'KY', 'CYM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Central African Republic', 'CF', 'CAF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Chad', 'TD', 'TCD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Chile', 'CL', 'CHL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'China', 'CN', 'CHN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Christmas Island', 'CX', 'CXR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Colombia', 'CO', 'COL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Comoros', 'KM', 'COM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Congo', 'CG', 'COG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Cook Islands', 'CK', 'COK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Costa Rica', 'CR', 'CRI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Croatia', 'HR', 'HRV', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Cuba', 'CU', 'CUB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Cyprus', 'CY', 'CYP', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Czech Republic', 'CZ', 'CZE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Denmark', 'DK', 'DNK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Djibouti', 'DJ', 'DJI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Dominica', 'DM', 'DMA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Dominican Republic', 'DO', 'DOM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'East Timor', 'TL', 'TLS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Ecuador', 'EC', 'ECU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Egypt', 'EG', 'EGY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'El Salvador', 'SV', 'SLV', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Eritrea', 'ER', 'ERI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Estonia', 'EE', 'EST', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Ethiopia', 'ET', 'ETH', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Faroe Islands', 'FO', 'FRO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Fiji', 'FJ', 'FJI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Finland', 'FI', 'FIN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'France, Metropolitan', 'FR', 'FRA', 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'French Guiana', 'GF', 'GUF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'French Polynesia', 'PF', 'PYF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'French Southern Territories', 'TF', 'ATF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Gabon', 'GA', 'GAB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Gambia', 'GM', 'GMB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Georgia', 'GE', 'GEO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Germany', 'DE', 'DEU', 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Ghana', 'GH', 'GHA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Gibraltar', 'GI', 'GIB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Greece', 'GR', 'GRC', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Greenland', 'GL', 'GRL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Grenada', 'GD', 'GRD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Guadeloupe', 'GP', 'GLP', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Guam', 'GU', 'GUM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Guatemala', 'GT', 'GTM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Guinea', 'GN', 'GIN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Guinea-Bissau', 'GW', 'GNB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Guyana', 'GY', 'GUY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Haiti', 'HT', 'HTI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Heard and Mc Donald Islands', 'HM', 'HMD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Honduras', 'HN', 'HND', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Hong Kong', 'HK', 'HKG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Hungary', 'HU', 'HUN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Iceland', 'IS', 'ISL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'India', 'IN', 'IND', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Indonesia', 'ID', 'IDN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Iran (Islamic Republic of)', 'IR', 'IRN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Iraq', 'IQ', 'IRQ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Ireland', 'IE', 'IRL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Israel', 'IL', 'ISR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Italy', 'IT', 'ITA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Jamaica', 'JM', 'JAM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Japan', 'JP', 'JPN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Jordan', 'JO', 'JOR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Kazakhstan', 'KZ', 'KAZ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Kenya', 'KE', 'KEN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Kiribati', 'KI', 'KIR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'North Korea', 'KP', 'PRK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'South Korea', 'KR', 'KOR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Kuwait', 'KW', 'KWT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Kyrgyzstan', 'KG', 'KGZ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Latvia', 'LV', 'LVA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Lebanon', 'LB', 'LBN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Lesotho', 'LS', 'LSO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Liberia', 'LR', 'LBR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Liechtenstein', 'LI', 'LIE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Lithuania', 'LT', 'LTU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Luxembourg', 'LU', 'LUX', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Macau', 'MO', 'MAC', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'FYROM', 'MK', 'MKD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Madagascar', 'MG', 'MDG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Malawi', 'MW', 'MWI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Malaysia', 'MY', 'MYS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Maldives', 'MV', 'MDV', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Mali', 'ML', 'MLI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Malta', 'MT', 'MLT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Marshall Islands', 'MH', 'MHL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Martinique', 'MQ', 'MTQ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Mauritania', 'MR', 'MRT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Mauritius', 'MU', 'MUS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Mayotte', 'YT', 'MYT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Mexico', 'MX', 'MEX', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Micronesia, Federated States of', 'FM', 'FSM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Moldova, Republic of', 'MD', 'MDA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Monaco', 'MC', 'MCO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Mongolia', 'MN', 'MNG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Montserrat', 'MS', 'MSR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Morocco', 'MA', 'MAR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Mozambique', 'MZ', 'MOZ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Myanmar', 'MM', 'MMR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Namibia', 'NA', 'NAM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Nauru', 'NR', 'NRU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Nepal', 'NP', 'NPL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Netherlands', 'NL', 'NLD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Netherlands Antilles', 'AN', 'ANT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'New Caledonia', 'NC', 'NCL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'New Zealand', 'NZ', 'NZL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Nicaragua', 'NI', 'NIC', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Niger', 'NE', 'NER', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Nigeria', 'NG', 'NGA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Niue', 'NU', 'NIU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Norfolk Island', 'NF', 'NFK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Northern Mariana Islands', 'MP', 'MNP', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Norway', 'NO', 'NOR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Oman', 'OM', 'OMN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Pakistan', 'PK', 'PAK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Palau', 'PW', 'PLW', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Panama', 'PA', 'PAN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Papua New Guinea', 'PG', 'PNG', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Paraguay', 'PY', 'PRY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Peru', 'PE', 'PER', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Philippines', 'PH', 'PHL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Pitcairn', 'PN', 'PCN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Poland', 'PL', 'POL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Portugal', 'PT', 'PRT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Puerto Rico', 'PR', 'PRI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Qatar', 'QA', 'QAT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Reunion', 'RE', 'REU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Romania', 'RO', 'ROM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Russian Federation', 'RU', 'RUS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Rwanda', 'RW', 'RWA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Saint Kitts and Nevis', 'KN', 'KNA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Saint Lucia', 'LC', 'LCA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Samoa', 'WS', 'WSM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'San Marino', 'SM', 'SMR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Sao Tome and Principe', 'ST', 'STP', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'Saudi Arabia', 'SA', 'SAU', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Senegal', 'SN', 'SEN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Seychelles', 'SC', 'SYC', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Sierra Leone', 'SL', 'SLE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Singapore', 'SG', 'SGP', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Slovak Republic', 'SK', 'SVK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Slovenia', 'SI', 'SVN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Solomon Islands', 'SB', 'SLB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Somalia', 'SO', 'SOM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'South Africa', 'ZA', 'ZAF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Spain', 'ES', 'ESP', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'Sri Lanka', 'LK', 'LKA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'St. Helena', 'SH', 'SHN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'St. Pierre and Miquelon', 'PM', 'SPM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Sudan', 'SD', 'SDN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'Suriname', 'SR', 'SUR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Swaziland', 'SZ', 'SWZ', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Sweden', 'SE', 'SWE', 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Switzerland', 'CH', 'CHE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Syrian Arab Republic', 'SY', 'SYR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'Taiwan', 'TW', 'TWN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'Tajikistan', 'TJ', 'TJK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'Tanzania, United Republic of', 'TZ', 'TZA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'Thailand', 'TH', 'THA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'Togo', 'TG', 'TGO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'Tokelau', 'TK', 'TKL', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'Tonga', 'TO', 'TON', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'Trinidad and Tobago', 'TT', 'TTO', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'Tunisia', 'TN', 'TUN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'Turkey', 'TR', 'TUR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'Turkmenistan', 'TM', 'TKM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'Turks and Caicos Islands', 'TC', 'TCA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'Tuvalu', 'TV', 'TUV', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 'Uganda', 'UG', 'UGA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 'Ukraine', 'UA', 'UKR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 'United Arab Emirates', 'AE', 'ARE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 'United Kingdom', 'GB', 'GBR', 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 'United States', 'US', 'USA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'United States Minor Outlying Islands', 'UM', 'UMI', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'Uruguay', 'UY', 'URY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'Uzbekistan', 'UZ', 'UZB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'Vanuatu', 'VU', 'VUT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'Vatican City State (Holy See)', 'VA', 'VAT', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'Venezuela', 'VE', 'VEN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'Viet Nam', 'VN', 'VNM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'Virgin Islands (British)', 'VG', 'VGB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'Virgin Islands (U.S.)', 'VI', 'VIR', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 'Wallis and Futuna Islands', 'WF', 'WLF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 'Western Sahara', 'EH', 'ESH', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'Yemen', 'YE', 'YEM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 'Democratic Republic of Congo', 'CD', 'COD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 'Zambia', 'ZM', 'ZMB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 'Zimbabwe', 'ZW', 'ZWE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 'Montenegro', 'ME', 'MNE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 'Serbia', 'RS', 'SRB', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 'Aaland Islands', 'AX', 'ALA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 'Curacao', 'CW', 'CUW', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 'Palestinian Territory, Occupied', 'PS', 'PSE', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 'South Sudan', 'SS', 'SSD', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 'St. Barthelemy', 'BL', 'BLM', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 'St. Martin (French part)', 'MF', 'MAF', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 'Canary Islands', 'IC', 'ICA', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 'Ascension Island (British)', 'AC', 'ASC', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 'Kosovo, Republic of', 'XK', 'UNK', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 'Isle of Man', 'IM', 'IMN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 'Tristan da Cunha', 'TA', 'SHN', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 'Guernsey', 'GG', 'GGY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 'Jersey', 'JE', 'JEY', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(255) DEFAULT NULL,
  `symbol_right` varchar(255) DEFAULT NULL,
  `decimal_place` char(1) NOT NULL DEFAULT '2',
  `value_from_usd` double(15,8) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `name`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value_from_usd`, `status`, `sort_order`, `createdAt`, `updatedAt`) VALUES
(1, 'US Dollar', 'USD', '$', '', '2', 1.00000000, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Riel', 'R', '៛', '', '2', 4000.00000000, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL DEFAULT 1,
  `store_id` int(11) NOT NULL DEFAULT 1,
  `language_id` int(11) NOT NULL DEFAULT 1,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '12345',
  `cart` varchar(255) DEFAULT NULL,
  `wishlist` varchar(255) DEFAULT NULL,
  `newsletter` int(1) NOT NULL DEFAULT 1,
  `address_id` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_group_id`, `store_id`, `language_id`, `first_name`, `last_name`, `email`, `telephone`, `image`, `password`, `salt`, `cart`, `wishlist`, `newsletter`, `address_id`, `ip`, `status`, `createdAt`, `updatedAt`) VALUES
(4, 1, 1, 1, 'Kevena', 'Tep', 'youvannethzzz@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$QXP/Vz/sZI5hGqBoZVbFPuILtU4KDNODi0/fNR5xI6pPqufZCgWcW', '$2b$10$QXP', NULL, NULL, 1, 0, '::1', 1, '2023-02-10 17:36:20', '2023-02-19 15:19:03'),
(5, 1, 1, 1, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$LdOkA1gbV8CC.T1VzEnPoeZ7A8PD3cfRn6HP4HTDR16fgfqlj0Hr6', '$2b$10$LdO', NULL, NULL, 0, 0, '::1', 1, '2023-02-12 07:52:00', '2023-02-12 07:52:00'),
(6, 1, 1, 1, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$6onRx3inYxjOCR6F9Aq2cuvGhkFByRKL.OtQ9/lU8qcIc29rAfpqq', '$2b$10$6on', NULL, NULL, 0, 0, '::1', 1, '2023-02-12 07:52:48', '2023-02-12 07:52:48'),
(7, 1, 1, 1, 'Keven', 'Tep', 'teapkevin12@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$HS.M/P4rkZO2lO1pl5uMFu3B87VdOmnwgPHO33BPWH30DNRaKmsLG', '$2b$10$HS.', NULL, NULL, 0, 0, '::1', 1, '2023-02-12 08:03:03', '2023-02-12 08:03:03'),
(8, 1, 1, 1, 'Keven', 'Tep', 'teapkevin1234@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$mhZZ8VZP2MNmZ5QmlMkqWeDgDcWtWYaDWxgei9YlWnSxMZYGnSpoa', '$2b$10$mhZ', NULL, NULL, 0, 0, '::1', 1, '2023-02-12 08:04:40', '2023-02-12 08:04:40'),
(9, 1, 1, 1, 'Keven', 'Tep', 'teapkevin12345@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$Ql3lzLK/RaVzWnMzap/xiO9tflmESz7grTKIGI9kmlKdE27EPCJV6', '$2b$10$Ql3', NULL, NULL, 0, 0, '::1', 1, '2023-02-12 09:15:38', '2023-02-12 09:15:38'),
(10, 1, 1, 1, 'Keven', 'Tep', 'teapkevin212345@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$BOyAGQw38YvIzRjoZ37B1OcOb4/K3kxde6ae0xMR/EqVYanr3c69q', '$2b$10$BOy', NULL, NULL, 0, 0, '::1', 1, '2023-02-12 14:57:32', '2023-02-12 14:57:32'),
(11, 1, 1, 1, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$BCKm.11OhEZ.cPXsSKxgzOAlNZxwfVWFMes2Z0WdPN/hPa6JGxl8u', '$2b$10$BCK', NULL, NULL, 1, 0, '::1', 1, '2023-02-24 08:48:34', '2023-02-24 08:48:34'),
(12, 1, 1, 1, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$hFapwTPg6mWZzjdJ4DLbpenaJoA/H6qv7Qp2OJ2M8UnxNNKrHq.YO', '$2b$10$hFa', NULL, NULL, 1, 0, '::1', 1, '2023-02-25 16:51:14', '2023-02-25 16:51:14'),
(13, 1, 1, 1, 'Keven', 'Tep', 'teapkevin123421@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$sIr8XVAm3nPbIZ/bjotF7utRZH0E7M3dqj.ZW6QMqWWR5YFgw.yNG', '$2b$10$sIr', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 09:46:56', '2023-03-01 09:46:56'),
(14, 1, 1, 1, 'Keven', 'Tep', 'teap2121kevin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$LRKnBY2ZN.WOGSexEOLs4ORJB0GM38ijTwPi4Nh8eYFhkWAZkqrtu', '$2b$10$LRK', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 09:47:38', '2023-03-01 09:47:38'),
(15, 1, 1, 1, 'Keven', 'Tep', 'teapkevin2121@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$muIy3B5CzXZXH7DyastR2O3ZBYB0nN0kdiSHG7UWUPlyESowgTkMS', '$2b$10$muI', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 09:48:17', '2023-03-01 09:48:17'),
(16, 1, 1, 1, 'Keven', 'Tep', 'teapkevi2121n@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$3.SW2VH3YVYpJnt5K8vRV.m8b/udSo/U9Ogst8Hy8p1Flk5uo2XxK', '$2b$10$3.S', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 09:48:49', '2023-03-01 09:48:49'),
(17, 1, 1, 1, 'Keven', 'Tep', 'teapk2121evin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$AFZwxaHk4WOUfb4PMLYCPeXlsyPFIrlV/Mql0PdH3YpYley9Z9AxW', '$2b$10$AFZ', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 09:51:17', '2023-03-01 09:51:17'),
(18, 1, 1, 1, 'Keven', 'Tep', 'teapkevin234567@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$qYmz17X.qStjntA8L93vr.M88WsZxb.bBeEqIlXzAsLaKI9f934KK', '$2b$10$qYm', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 09:53:57', '2023-03-01 09:53:57'),
(19, 1, 1, 1, 'Keven', 'Tep', 'teapkevin12345322@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$/O66amsbKF5T9qhCWzxc.OvgR30lJLai8FZJFkY/ECBFwZ/3wgBe.', '$2b$10$/O6', NULL, NULL, 0, 0, '::1', 0, '2023-03-01 09:58:03', '2023-03-01 09:58:03'),
(28, 1, 1, 1, '', '', 'keven.ztohha@gmail.com', '', '6433b64cb14601.86504300.png', '$2b$10$I0Ht4EqsLnDoNI28ekaG3ees/ajp25jjyCdB5YgxH0repwGUwmnHy', '$2b$10$I0H', NULL, NULL, 1, 0, '::1', 0, '2023-03-01 15:53:29', '2023-03-01 15:53:29'),
(29, 1, 1, 1, 'Keven', 'Tep', 'teapkevin1hh2345@gmail.com', '1234567', '6433b64cb14601.86504300.png', '$2b$10$H55nmsKvIPXxAsqbKFrkk.B2v5o.dZz2Qh7QZHKvq3pzcJpcKxZhi', '$2b$10$H55', NULL, NULL, 0, 0, '::1', 0, '2023-03-01 16:00:39', '2023-03-01 16:00:39'),
(36, 1, 1, 1, 'Keven', 'Tep', 'keven.ztoa@gmail.com', '012330245', '6433caa3f16593.27556270.png', '$2b$10$ldyyXvR0dzPlMAFAnpSXRO9rOVB4ezNt3uOnnGGV81akUCEIUCeV2', '$2b$10$ldy', NULL, NULL, 0, 0, '::1', 1, '2023-03-06 08:01:55', '2023-03-06 08:02:28'),
(37, 1, 1, 1, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', '6433b5240284f0.53412478.png', 'eb5dd40442080f431ca90221a08a6ffa4b8f60b6', '81451', NULL, NULL, 1, 0, '::1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 1, 1, 1, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', '6433b6257dea44.59136414.png', 'd8154449f9e858f9068e36bd73cfdc478f67c0c9', '52693', NULL, NULL, 1, 0, '::1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 1, 1, 1, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', '6433b64cb14601.86504300.png', '4c667fb970cd1cb81ed1464ece6dc787aba458c5', '61753', NULL, NULL, 1, 0, '::1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 1, 1, 1, 'Hello World 232', 'Hello World 2', 'Hello World 2', 'Hello World 2', '6433caa3f16593.27556270.png', 'a1353384477757c72050c6d25640c204d0c09ce9', '17927', NULL, NULL, 1, 0, '::1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `customer_group_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_group`
--

INSERT INTO `customer_group` (`customer_group_id`, `name`, `description`, `sort_order`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Default', 'Default', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_item`
--

CREATE TABLE `dashboard_item` (
  `dashboard_item_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `href` varchar(255) NOT NULL DEFAULT '#',
  `icon` varchar(255) NOT NULL DEFAULT 'fas fa-pen',
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard_item`
--

INSERT INTO `dashboard_item` (`dashboard_item_id`, `name`, `href`, `icon`, `sort_order`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Dashboard', '/admin/dashboard', 'bi bi-bar-chart-fill', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Category', '/admin/category', 'bi bi-box-fill', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Products', '/admin/product', 'bi bi-tags-fill', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Orders', '/admin/order', 'bi bi-credit-card-2-back', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Customers', '/admin/customer', 'bi bi-person-circle', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Users', '/admin/user', 'bi bi-person-fill-check', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'User Roles', '/admin/userrole', 'fas fa-crown', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Slideshow', '/admin/slideshow', 'bi bi-person-fill-check', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Newsletter', '/admin/newsletter', 'bi bi-person-fill-check', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Information', '/admin/information', 'bi bi-person-fill-check', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Settings', '/admin/setting', 'bi bi-person-fill-check', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `information_id` int(11) NOT NULL,
  `bottom` int(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`information_id`, `bottom`, `sort_order`, `status`, `createdAt`, `updatedAt`) VALUES
(4, 1, 1, 1, '2023-03-04 10:17:55', '2023-03-05 03:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `information_description`
--

CREATE TABLE `information_description` (
  `information_description_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `information_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information_description`
--

INSERT INTO `information_description` (`information_description_id`, `language_id`, `name`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `createdAt`, `updatedAt`, `information_id`) VALUES
(7, 1, 'About', '&lt;p&gt;&lt;img src=\"data:image/png;base64,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\"&gt;&lt;/p&gt;', 'About 2', 'About', 'About', '2023-03-04 10:17:55', '2023-03-05 03:40:54', 4),
(8, 2, 'About', '&lt;p&gt;About&lt;/p&gt;', 'About', 'About', 'About', '2023-03-04 10:17:55', '2023-03-04 10:17:55', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'N/A',
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `name`, `image`, `sort_order`, `createdAt`, `updatedAt`) VALUES
(1, 'HTC', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Palm', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Apple', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sony', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Canon', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL DEFAULT 0,
  `invoice_prefix` varchar(30) NOT NULL DEFAULT 'INV-2023-00',
  `store_id` int(11) NOT NULL DEFAULT 1,
  `store_name` varchar(100) NOT NULL DEFAULT 'RUPP Project',
  `customer_id` int(11) DEFAULT 0,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `company` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `order_status_id` int(11) NOT NULL DEFAULT 1,
  `tracking` varchar(255) NOT NULL DEFAULT '',
  `language_id` int(11) NOT NULL DEFAULT 1,
  `currency_id` int(11) NOT NULL DEFAULT 1,
  `ip` varchar(100) NOT NULL,
  `payslip` varchar(300) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `invoice_no`, `invoice_prefix`, `store_id`, `store_name`, `customer_id`, `first_name`, `last_name`, `email`, `telephone`, `company`, `address`, `city`, `country`, `country_id`, `payment_id`, `shipping_id`, `total`, `order_status_id`, `tracking`, `language_id`, `currency_id`, `ip`, `payslip`, `createdAt`, `updatedAt`) VALUES
(4, 0, 'INV-2023-2-11-', 1, 'RUPP Project', 5, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '2700.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:13:46', '2023-02-18 08:22:29'),
(11, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:19:34', '2023-02-10 17:19:34'),
(12, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:22:47', '2023-02-10 17:22:47'),
(13, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:25:16', '2023-02-10 17:25:16'),
(14, 0, 'INV-2023-2-11-Hello', 1, 'RUPP Project', NULL, 'Hello', 'Hello', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:28:05', '2023-02-10 17:28:05'),
(15, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:32:13', '2023-02-10 17:32:13'),
(16, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:32:56', '2023-02-10 17:32:56'),
(17, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:33:27', '2023-02-10 17:33:27'),
(18, 0, 'INV-2023-2-11-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 1, 1, '1500.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:34:28', '2023-02-18 00:01:01'),
(19, 0, 'INV-2023-2-11-Keven', 1, 'RUPP Project', 4, 'Keven', 'Tep', 'teapkevin123@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '2400.0000', 1, '', 1, 1, '::1', '', '2023-02-10 17:36:20', '2023-02-18 00:01:19'),
(20, 0, 'INV-2023-2-15-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-15 14:54:37', '2023-02-15 14:54:37'),
(21, 0, 'INV-2023-2-15-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-15 14:55:51', '2023-02-15 14:55:51'),
(22, 0, 'INV-2023-2-15-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin212345@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-15 15:03:39', '2023-02-15 15:03:39'),
(23, 0, 'INV-2023-2-18-Keven', 1, 'RUPP Project', 4, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '2700.0000', 1, '', 1, 1, '::1', '', '2023-02-17 23:56:52', '2023-02-17 23:56:52'),
(24, 0, 'INV-2023-2-18-KK', 1, 'RUPP Project', 7, 'KK', 'KK', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '2700.0000', 1, '', 1, 1, '::1', '', '2023-02-17 23:58:18', '2023-02-17 23:58:18'),
(25, 0, 'INV-2023-2-18-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-18 00:03:16', '2023-02-18 00:03:16'),
(26, 0, 'INV-2023-2-18-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-18 00:11:58', '2023-02-18 00:11:58'),
(27, 0, 'INV-2023-2-24-Keven', 1, 'RUPP Project', 11, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-24 08:48:34', '2023-02-24 08:48:34'),
(28, 0, 'INV-2023-2-24-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '012330245', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-24 08:50:22', '2023-02-24 08:50:22'),
(29, 0, 'INV-2023-2-24-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 3, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-24 09:28:06', '2023-02-24 09:28:06'),
(30, 0, 'INV-2023-2-25-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 3, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 05:09:10', '2023-02-25 05:09:10'),
(31, 0, 'INV-2023-2-25-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 3, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 05:10:20', '2023-02-25 05:10:20'),
(32, 0, 'INV-2023-2-25-', 1, 'RUPP Project', NULL, '', '', 'teapkevin@gmail.com', '', '', '', '', 'Afghanistan', 1, 3, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 05:12:41', '2023-02-25 05:12:41'),
(33, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 06:15:01', '2023-02-25 06:15:01'),
(34, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:14:03', '2023-02-25 09:14:03'),
(35, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:15:26', '2023-02-25 09:15:26'),
(36, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:16:35', '2023-02-25 09:16:35'),
(37, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:17:04', '2023-02-25 09:17:04'),
(38, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:17:30', '2023-02-25 09:17:30'),
(39, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:18:53', '2023-02-25 09:18:53'),
(40, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 09:19:59', '2023-02-25 09:19:59'),
(41, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:04:25', '2023-02-25 16:04:25'),
(42, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:04:57', '2023-02-25 16:04:57'),
(43, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:06:15', '2023-02-25 16:06:15'),
(44, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:07:02', '2023-02-25 16:07:02'),
(45, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:07:39', '2023-02-25 16:07:39'),
(46, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Shop', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:11:25', '2023-02-25 16:11:25'),
(47, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:12:27', '2023-02-25 16:12:27'),
(48, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:14:38', '2023-02-25 16:14:38'),
(49, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:16:10', '2023-02-25 16:16:10'),
(50, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:17:11', '2023-02-25 16:17:11'),
(51, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:24:41', '2023-02-25 16:24:41'),
(52, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:34:19', '2023-02-25 16:34:19'),
(53, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 3, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:37:08', '2023-02-25 16:37:08'),
(54, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', 12, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:51:14', '2023-02-25 16:51:14'),
(55, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '0.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:52:01', '2023-02-25 16:52:01'),
(56, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:52:42', '2023-02-25 16:52:42'),
(57, 0, 'INV-2023-2-25-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 16:54:39', '2023-02-25 16:54:39'),
(58, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:02:37', '2023-02-25 17:02:37'),
(59, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:04:49', '2023-02-25 17:04:49'),
(60, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:06:04', '2023-02-25 17:06:04'),
(61, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:06:56', '2023-02-25 17:06:56'),
(62, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:10:04', '2023-02-25 17:10:04'),
(63, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:11:11', '2023-02-25 17:11:11'),
(64, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:12:01', '2023-02-25 17:12:01'),
(65, 0, 'INV-2023-2-26-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '660.0000', 1, '', 1, 1, '::1', '', '2023-02-25 17:16:43', '2023-02-25 17:16:43'),
(66, 0, 'INV-2023-2-27-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 3, 1, '360.0000', 1, '', 1, 1, '::1', '', '2023-02-27 09:14:45', '2023-02-27 09:14:45'),
(67, 0, 'INV-2023-2-27-Keven', 1, 'RUPP Project', NULL, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 3, 1, '300.0000', 1, '', 1, 1, '::1', '', '2023-02-27 09:18:23', '2023-02-27 09:18:23'),
(68, 0, 'INV-2023-00', 1, 'RUPP Project', 4, 'Keven', 'Tep', 'teapkevin@gmail.com', '1234567', 'Ke', 'Phnom Penh', 'Phnom Penh', 'Array', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 0, 'INV-2023-00', 1, 'RUPP Project', 4, 'Keven 2', 'Tep', 'keventep94@gmail.com', '1234567', 'Hello World', 'Phnom Penh', 'Phnom Penh', 'Cambodia', 36, 1, 1, '300.0000', 1, '', 1, 1, '::1', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `tax` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_product_id`, `order_id`, `product_id`, `name`, `model`, `quantity`, `price`, `total`, `tax`, `createdAt`, `updatedAt`) VALUES
(4, 13, 6, '', 'Product', 2, '250.0000', '600.0000', '50.0000', '2023-02-10 17:25:16', '2023-02-10 17:25:16'),
(5, 14, 6, '', 'Product', 2, '250.0000', '600.0000', '50.0000', '2023-02-10 17:28:05', '2023-02-10 17:28:05'),
(6, 15, 6, '', 'Product', 2, '250.0000', '600.0000', '50.0000', '2023-02-10 17:32:13', '2023-02-10 17:32:13'),
(7, 16, 6, '', 'Product', 2, '250.0000', '600.0000', '50.0000', '2023-02-10 17:32:56', '2023-02-10 17:32:56'),
(8, 17, 6, '', 'Product', 2, '250.0000', '600.0000', '50.0000', '2023-02-10 17:33:27', '2023-02-10 17:33:27'),
(11, 20, 6, '', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-15 14:54:37', '2023-02-15 14:54:37'),
(12, 21, 6, '', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-15 14:55:51', '2023-02-15 14:55:51'),
(13, 22, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-15 15:03:39', '2023-02-15 15:03:39'),
(15, 23, 6, 'Product', 'Product', 9, '250.0000', '2700.0000', '50.0000', '2023-02-17 23:56:52', '2023-02-17 23:56:52'),
(16, 24, 6, 'Product', 'Product', 9, '250.0000', '2700.0000', '50.0000', '2023-02-17 23:58:18', '2023-02-17 23:58:18'),
(17, 18, 6, '', 'Product', 5, '250.0000', '1500.0000', '50.0000', '2023-02-18 00:01:01', '2023-02-18 00:01:01'),
(18, 19, 6, '', 'Product', 8, '250.0000', '2400.0000', '50.0000', '2023-02-18 00:01:19', '2023-02-18 00:01:19'),
(19, 25, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-18 00:03:16', '2023-02-18 00:03:16'),
(20, 26, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-18 00:11:58', '2023-02-18 00:11:58'),
(21, 4, 6, 'Product', 'Product', 9, '250.0000', '2700.0000', '50.0000', '2023-02-18 08:22:29', '2023-02-18 08:22:29'),
(22, 27, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-24 08:48:34', '2023-02-24 08:48:34'),
(23, 28, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-24 08:50:22', '2023-02-24 08:50:22'),
(24, 29, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-24 09:28:06', '2023-02-24 09:28:06'),
(25, 30, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 05:09:10', '2023-02-25 05:09:10'),
(26, 31, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 05:10:20', '2023-02-25 05:10:20'),
(27, 32, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 05:12:41', '2023-02-25 05:12:41'),
(28, 33, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 06:15:02', '2023-02-25 06:15:02'),
(29, 34, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:14:03', '2023-02-25 09:14:03'),
(30, 35, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:15:26', '2023-02-25 09:15:26'),
(31, 36, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:16:35', '2023-02-25 09:16:35'),
(32, 37, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:17:04', '2023-02-25 09:17:04'),
(33, 38, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:17:30', '2023-02-25 09:17:30'),
(34, 39, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:18:53', '2023-02-25 09:18:53'),
(35, 40, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 09:19:59', '2023-02-25 09:19:59'),
(36, 41, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:04:25', '2023-02-25 16:04:25'),
(37, 42, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:04:57', '2023-02-25 16:04:57'),
(38, 43, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:06:15', '2023-02-25 16:06:15'),
(39, 44, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:07:02', '2023-02-25 16:07:02'),
(40, 45, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:07:39', '2023-02-25 16:07:39'),
(41, 46, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:11:25', '2023-02-25 16:11:25'),
(42, 47, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:12:27', '2023-02-25 16:12:27'),
(43, 48, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:14:38', '2023-02-25 16:14:38'),
(44, 49, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:16:10', '2023-02-25 16:16:10'),
(45, 50, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:17:11', '2023-02-25 16:17:11'),
(46, 51, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:24:41', '2023-02-25 16:24:41'),
(47, 52, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:34:19', '2023-02-25 16:34:19'),
(48, 53, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:37:08', '2023-02-25 16:37:08'),
(49, 54, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:51:14', '2023-02-25 16:51:14'),
(50, 56, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:52:42', '2023-02-25 16:52:42'),
(51, 57, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 16:54:39', '2023-02-25 16:54:39'),
(52, 57, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 16:54:39', '2023-02-25 16:54:39'),
(53, 58, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:02:37', '2023-02-25 17:02:37'),
(54, 58, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:02:37', '2023-02-25 17:02:37'),
(55, 59, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:04:49', '2023-02-25 17:04:49'),
(56, 59, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:04:49', '2023-02-25 17:04:49'),
(57, 60, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:06:04', '2023-02-25 17:06:04'),
(58, 60, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:06:04', '2023-02-25 17:06:04'),
(59, 61, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:06:56', '2023-02-25 17:06:56'),
(60, 61, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:06:56', '2023-02-25 17:06:56'),
(61, 62, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:10:04', '2023-02-25 17:10:04'),
(62, 62, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:10:04', '2023-02-25 17:10:04'),
(63, 63, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:11:11', '2023-02-25 17:11:11'),
(64, 63, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:11:11', '2023-02-25 17:11:11'),
(65, 64, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:12:01', '2023-02-25 17:12:01'),
(66, 64, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:12:01', '2023-02-25 17:12:01'),
(67, 65, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-25 17:16:43', '2023-02-25 17:16:43'),
(68, 65, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-25 17:16:43', '2023-02-25 17:16:43'),
(69, 66, 6, 'Product 1', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '2023-02-27 09:14:45', '2023-02-27 09:14:45'),
(70, 67, 6, 'Product', 'Product', 1, '250.0000', '300.0000', '50.0000', '2023-02-27 09:18:23', '2023-02-27 09:18:23'),
(71, 68, 6, 'Hello World', 'Product 1', 1, '300.0000', '360.0000', '60.0000', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 69, 6, 'Hello World', 'Product 1', 2, '300.0000', '720.0000', '60.0000', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `name`, `status`, `sort_order`, `createdAt`, `updatedAt`) VALUES
(1, 'Processing', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Shipped', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Cancelled', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Complete', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Denied', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Failed', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Refunded', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Pending', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Processed', 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Expired', 1, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `email` varchar(96) NOT NULL,
  `otp_code` varchar(10) NOT NULL,
  `expire` timestamp NOT NULL DEFAULT (current_timestamp() + interval 5 minute),
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otp_id`, `user_id`, `email`, `otp_code`, `expire`, `createdAt`, `updatedAt`) VALUES
(1, 17, 'teapk2121evin@gmail.com', '1621.78537', '2023-03-03 01:51:17', '2023-03-01 09:51:17', '2023-03-01 09:51:17'),
(9, 28, 'keven.ztohha@gmail.com', '3439', '2023-03-03 03:53:29', '2023-03-01 15:53:32', '2023-03-01 15:53:32'),
(10, 29, 'teapkevin1hh2345@gmail.com', '5137', '2023-02-28 22:00:39', '2023-03-01 16:00:42', '2023-03-01 16:00:42'),
(12, 31, 'keven@gmail.com', '2921', '2023-03-04 01:40:42', '2023-03-02 04:51:45', '2023-03-02 04:51:45'),
(17, 36, 'keven.ztoa@gmail.com', '2833', '2023-03-06 08:06:55', '2023-03-06 08:02:01', '2023-03-06 08:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `code`, `name`, `description`, `status`, `sort_order`, `createdAt`, `updatedAt`) VALUES
(1, 'BT', 'Bank Transfer', 'This is for Bank Transfer through ABA Bank', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'COD', 'Cash on Delivery', 'This is for Cash on Delivery Method', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'PP', 'Paypal ', 'This is for PayPal Method', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `model` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `stock_status_id` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT 1,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `tax_class_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `subtract` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `viewed` int(10) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `meta_title`, `model`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `price`, `tax_class_id`, `category_id`, `subtract`, `sort_order`, `status`, `viewed`, `createdAt`, `updatedAt`) VALUES
(6, 'Hello World', 'Hello', 'hello', 'Product 1', 20, 1, '6422e5825ec2c5.45678136.png', 2, '300.0000', 1, 8, 1, 4, 1, 0, '2023-02-17 23:27:31', '2023-02-17 23:27:31'),
(7, 'Product 1', 'Product 1', 'Product 1', 'Product 1', 20, 1, '6422df632eaf31.87651838.jpg', 1, '200.0000', 1, 8, 1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Product 3', 'Product 2', 'Product 2', 'Product 2', 200, 1, NULL, 1, '100.0000', 1, 8, 1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Product 3', 'Product 3', 'Product 3', 'Product 3', 200, 1, NULL, 1, '100.0000', 1, 8, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_to_category`
--

CREATE TABLE `product_to_category` (
  `product_to_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_to_category`
--

INSERT INTO `product_to_category` (`product_to_category_id`, `product_id`, `category_id`, `createdAt`, `updatedAt`) VALUES
(7, 5, 2, '2023-01-26 10:04:39', '2023-01-26 10:04:39'),
(8, 5, 1, '2023-01-26 10:04:39', '2023-01-26 10:04:39'),
(9, 6, 2, '2023-02-17 23:27:31', '2023-02-17 23:27:31'),
(10, 6, 1, '2023-02-17 23:27:31', '2023-02-17 23:27:31'),
(12, 4, 1, '2023-03-07 02:47:39', '2023-03-07 02:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `is_customer` tinyint(1) NOT NULL DEFAULT 1,
  `token` varchar(255) NOT NULL,
  `expire` timestamp NOT NULL DEFAULT (current_timestamp() + interval 2 hour),
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `email`, `data`, `is_customer`, `token`, `expire`, `createdAt`, `updatedAt`) VALUES
(132, 'keven.ztoa@gmail.com', '{\"language\":\"en\",\"currency\":\"USD\",\"customer_id\":36}', 1, '4eaaa97c0a9dc26ae5457b8593d42517', '2023-03-07 08:02:28', '2023-03-06 08:02:28', '2023-03-06 08:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `store_name` varchar(100) NOT NULL DEFAULT 'RUPP Project',
  `store_owner` varchar(100) NOT NULL DEFAULT 'RUPP Project',
  `store_address` varchar(255) NOT NULL DEFAULT 'RUPP Project',
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order_status_id` int(11) NOT NULL DEFAULT 1,
  `store_logo` varchar(255) DEFAULT NULL,
  `store_icon` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `meta_title`, `meta_description`, `meta_keyword`, `store_name`, `store_owner`, `store_address`, `email`, `telephone`, `fax`, `image`, `order_status_id`, `store_logo`, `store_icon`, `createdAt`, `updatedAt`) VALUES
(1, 'Hello World', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.', 'Hello', 'Hello', 'Hello', 'Phnom Penh, Cambodia', 'teapkevin@gmail.com', '+012-34-56-78', '+012-34-56-78', '1678092007210.png', 1, '1678090719602.png', '1678090719607.png', '2023-03-06 11:02:38', '2023-03-07 02:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipping_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipping_id`, `code`, `name`, `description`, `status`, `sort_order`, `createdAt`, `updatedAt`) VALUES
(1, 'Free', 'Free Shipping ', 'This is Free Shipping', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Flat', 'Flat Shipping', 'Flat Shipping Cost is 10$', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `slideshow_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 1,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(6) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`slideshow_id`, `language_id`, `title`, `description`, `link`, `image`, `sort_order`, `status`, `createdAt`, `updatedAt`) VALUES
(4, 1, 'Slideshow2', 'Slideshow2', '#', '', 1, 1, '2023-02-12 10:39:45', '2023-02-17 23:23:54'),
(5, 1, 'Slideshow4', 'Slideshow3', '#', '', 2, 1, '2023-02-12 10:39:45', '2023-02-17 23:24:04'),
(6, 1, 'Slideshow 4', 'Slideshow 3', '#', '642404ab21b9b5.92975912.png', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'Slideshow 3', 'Slideshow 3', 'Slideshow 3', '64240524485b59.02076349.png', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'Hello', 'Hello', '#', '642405140c5eb6.92754723.png', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_status`
--

CREATE TABLE `stock_status` (
  `stock_status_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'N/A',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_status`
--

INSERT INTO `stock_status` (`stock_status_id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'In Stock', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Pre-Order', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Out of Stock', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2-3 Days', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'N/A', '2023-01-25 06:54:55', '2023-01-25 06:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `tax_class`
--

CREATE TABLE `tax_class` (
  `tax_class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'N/A',
  `description` varchar(255) NOT NULL DEFAULT '',
  `rate` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `type` char(1) NOT NULL DEFAULT 'P',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_class`
--

INSERT INTO `tax_class` (`tax_class_id`, `name`, `description`, `rate`, `type`, `createdAt`, `updatedAt`) VALUES
(1, 'Tax with 20%', 'Tax with 20%', '20.0000', 'P', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Tax with 20$', 'Tax with 20$', '20.0000', 'F', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'N/A', '', '0.0000', 'P', '2023-01-25 06:54:55', '2023-01-25 06:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT '',
  `ip` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_role_id`, `username`, `password`, `salt`, `first_name`, `last_name`, `email`, `image`, `code`, `ip`, `status`, `createdAt`, `updatedAt`) VALUES
(2, 1, 'Keven Tep', '$2b$10$MqMGGWp/uHOKLXGuQNT0jusACz3R.9ORbHsSmhQQSreTaA8sKYKQq', '$2b$10$MqMGGWp/uHOKLXGuQNT0ju', 'Keven', 'Tep', 'teapkevin@gmail.com', '1675354345336.png', '', '::1', 1, '2023-01-31 08:29:12', '2023-02-02 16:12:25'),
(3, 3, 'Keven Tep', '$2b$10$o6jEHameZtjvNJte.LYQgO1Y103UrCC7k4mQekIj41p.d2MlZF1Sy', '$2b$10$o6jEHameZtjvNJte.LYQgO', 'Keven', 'Tep', 'youvannethzzz@gmail.com', '1677752214238.png', '', '::1', 1, '2023-03-02 10:16:54', '2023-03-02 10:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_role_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `permission` text NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_role_id`, `name`, `permission`, `sort_order`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Administrator', '[1,2,3,4,5,6,7,8,9,10,11]', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Demonstration', '[1,2]', 2, 1, '2023-03-02 10:16:22', '2023-03-02 10:16:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_group_id` (`customer_group_id`);

--
-- Indexes for table `customer_group`
--
ALTER TABLE `customer_group`
  ADD PRIMARY KEY (`customer_group_id`);

--
-- Indexes for table `dashboard_item`
--
ALTER TABLE `dashboard_item`
  ADD PRIMARY KEY (`dashboard_item_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `information_description`
--
ALTER TABLE `information_description`
  ADD PRIMARY KEY (`information_description_id`),
  ADD KEY `information_id` (`information_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `order_status_id` (`order_status_id`),
  ADD KEY `currency_id` (`currency_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `stock_status_id` (`stock_status_id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`),
  ADD KEY `tax_class_id` (`tax_class_id`);

--
-- Indexes for table `product_to_category`
--
ALTER TABLE `product_to_category`
  ADD PRIMARY KEY (`product_to_category_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`),
  ADD KEY `order_status_id` (`order_status_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indexes for table `stock_status`
--
ALTER TABLE `stock_status`
  ADD PRIMARY KEY (`stock_status_id`);

--
-- Indexes for table `tax_class`
--
ALTER TABLE `tax_class`
  ADD PRIMARY KEY (`tax_class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `customer_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dashboard_item`
--
ALTER TABLE `dashboard_item`
  MODIFY `dashboard_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `information_description`
--
ALTER TABLE `information_description`
  MODIFY `information_description_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_to_category`
--
ALTER TABLE `product_to_category`
  MODIFY `product_to_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `slideshow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stock_status`
--
ALTER TABLE `stock_status`
  MODIFY `stock_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tax_class`
--
ALTER TABLE `tax_class`
  MODIFY `tax_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_group` (`customer_group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `information_description`
--
ALTER TABLE `information_description`
  ADD CONSTRAINT `information_description_ibfk_1` FOREIGN KEY (`information_id`) REFERENCES `information` (`information_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`shipping_id`) REFERENCES `shipment` (`shipping_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`order_status_id`) REFERENCES `order_status` (`order_status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_6` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`stock_status_id`) REFERENCES `stock_status` (`stock_status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_class` (`tax_class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `setting_ibfk_1` FOREIGN KEY (`order_status_id`) REFERENCES `order_status` (`order_status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`user_role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
