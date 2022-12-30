-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 09:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pcategory` varchar(200) NOT NULL,
  `pprice` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `pdesc` text NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pcategory`, `pprice`, `qty`, `pdesc`, `pimage`) VALUES
(2, 'REGULAR FIT POLO WITH RAGLAN SLEEVES', 'Men', 150, 15, 'FIT: REGULAR\r\nTHE NAME SAYS IT ALL\r\nTHE RIGHT SIZE SLIGHTLY SNUGS THE BODY LEAVING ENOUGH ROOM FOR COMFORT IN THE SLEEVES AND WAIST. DOES NOT TAPER DOWN AND OFFERS A RELAXED SILHOUETTE FOR YOUR EVERYDAY LOOKS.\r\n\r\nCOMPOSITION & CARE:\r\n\r\n100% COTTON\r\nMACHINE WASH UP TO 30C/86F, GENTLE CYCLE\r\nDO NOT BLEACH\r\nIRON UP TO 110C/230F\r\nDO NOT IRON DIRECTLY ON PRINTS/EMBROIDERY/EMBELLISHMENTS\r\nDO NOT DRY CLEAN\r\nDO NOT TUMBLE DRY\r\n', 'F0301106618_2.webp'),
(3, 'REGULAR FIT HOODED SWEATSHIRT WITH KANGAROO POCKET', 'Men', 250, 25, 'FIT: REGULAR\r\nTHE NAME SAYS IT ALL\r\nTHE RIGHT SIZE SLIGHTLY SNUGS THE BODY LEAVING ENOUGH ROOM FOR COMFORT IN THE SLEEVES AND WAIST. DOES NOT TAPER DOWN AND OFFERS A RELAXED SILHOUETTE FOR YOUR EVERYDAY LOOKS.\r\n\r\nCOMPOSITION & CARE:\r\n\r\n60% COTTON, 40% POLYESTER\r\nMACHINE WASH UP TO 30C/86F, GENTLE CYCLE\r\nDO NOT BLEACH\r\nIRON UP TO 110C/230F\r\nDO NOT IRON DIRECTLY ON PRINTS/EMBROIDERY/EMBELLISHMENTS\r\nDO NOT DRY CLEAN\r\nDO NOT TUMBLE DRY', 'F0101107901_2_19e5e73c-42aa-4e69-b6e7-cf88071e0bac.webp'),
(4, 'REGULAR FIT GRAPHIC JOGGERS', 'Men', 500, 17, 'FIT: REGULAR\r\nTHE NAME SAYS IT ALL\r\nTHE RIGHT SIZE SLIGHTLY SNUGS THE BODY LEAVING ENOUGH ROOM FOR COMFORT IN THE SLEEVES AND WAIST. DOES NOT TAPER DOWN AND OFFERS A RELAXED SILHOUETTE FOR YOUR EVERYDAY LOOKS.\r\n\r\nCOMPOSITION & CARE:\r\n\r\n80% COTTON, 20% POLYESTER\r\nMACHINE WASH UP TO 30C/86F, GENTLE CYCLE\r\nDO NOT BLEACH\r\nIRON UP TO 110C/230F\r\nDO NOT IRON DIRECTLY ON PRINTS/EMBROIDERY/EMBELLISHMENTS\r\nDO NOT DRY CLEAN\r\nDO NOT TUMBLE DRY\r\n', 'F0110108915_lowers.webp'),
(5, 'TWO TONED COMBAT BOOTS', 'Men', 1500, 14, 'COMPOSITION & CARE:\r\n\r\nDO NOT WASH\r\nDO NOT BLEACH\r\nDO NOT DRY CLEAN\r\nDO NOT TUMBLE DRY\r\nDO NOT SUBMERGE IN WATER\r\n', 'shoes.webp'),
(6, 'RELAX FIT GIRL POWER BOMBER JACKET', 'Women', 500, 20, 'FIT: RELAX\r\n\r\nCOMPOSITION & CARE:\r\n\r\n100% POLYESTER\r\nMACHINE WASH UP TO 30C/86F, GENTLE CYCLE\r\nDO NOT BLEACH\r\nIRON UP TO 110C/230F\r\nDO NOT IRON DIRECTLY ON PRINTS/EMBROIDERY/EMBELLISHMENTS\r\nDO NOT DRY CLEAN\r\nDO NOT TUMBLE DRY', 'women.webp'),
(7, 'RELAXED FIT BROAD CHECKERED SHIRT', 'Women', 500, 25, 'FIT: RELAXED\r\nCOMFORT ALL THE WAY\r\nCOMFORTABLY LOOSE FIT WITH DROP SHOULDERS THAT DOES NOT HUG THE BODY. STANDS IN THE MIDDLE OF AN OVERSIZED AND REGULAR FIT, MAKING MOVEMENT EASY.\r\n\r\nCOMPOSITION & CARE:\r\n\r\n100% COTTON\r\nMACHINE WASH UP TO 30°C/86°F\r\nDO NOT BLEACH\r\nIRON UP TO 110°C/230°F\r\nDO NOT IRON DIRECTLY ON PRINTS/EMBROIDERY/EMBELLISHMENTS\r\nDO NOT DRY CLEAN\r\nDO NOT TUMBLE DRY', 'women2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `uaccount`
--

CREATE TABLE `uaccount` (
  `id` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uaccount`
--

INSERT INTO `uaccount` (`id`, `uname`, `email`, `password`, `role`) VALUES
(1, 'arshiqwaqar', 'arshiqwaqar@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE `uorder` (
  `orderid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `streetaddress` varchar(200) NOT NULL,
  `houseaddress` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `diffaddress` varchar(200) NOT NULL,
  `ordernotes` text NOT NULL,
  `pname` text NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `orderdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uorder`
--

INSERT INTO `uorder` (`orderid`, `cid`, `country`, `firstname`, `lastname`, `companyname`, `streetaddress`, `houseaddress`, `zipcode`, `uemail`, `phoneno`, `diffaddress`, `ordernotes`, `pname`, `qty`, `total`, `orderdate`) VALUES
(49, 1, 'None', 'arshiqwaqar', 'dasdsa', '', 'dassad', '', '', 'arshiqwaqar@gmail.com', 'dasdasd', '', '', 'REGULAR FIT GRAPHIC JOGGERS ', 3, 2150, '2022-12-27'),
(50, 1, 'None', 'arshiqwaqar', 'dasdsa', '', 'dassad', '', '', 'arshiqwaqar@gmail.com', 'dasdasd', '', '', 'REGULAR FIT HOODED SWEATSHIRT WITH KANGAROO POCKET ', 2, 2150, '2022-12-27'),
(51, 1, 'None', 'arshiqwaqar', 'dasdsa', '', 'dassad', '', '', 'arshiqwaqar@gmail.com', 'dasdasd', '', '', 'REGULAR FIT POLO WITH RAGLAN SLEEVES ', 1, 2150, '2022-12-27'),
(52, 1, 'bahrain', 'arshiqwaqar', 'waqar', '', 'R-3 saleem town ', '', '', 'arshiqwaqar@gmail.com', '0321456789', '', '', 'REGULAR FIT GRAPHIC JOGGERS ', 3, 2150, '2022-12-27'),
(53, 1, 'bahrain', 'arshiqwaqar', 'waqar', '', 'R-3 saleem town ', '', '', 'arshiqwaqar@gmail.com', '0321456789', '', '', 'REGULAR FIT HOODED SWEATSHIRT WITH KANGAROO POCKET ', 2, 2150, '2022-12-27'),
(54, 1, 'bahrain', 'arshiqwaqar', 'waqar', '', 'R-3 saleem town ', '', '', 'arshiqwaqar@gmail.com', '0321456789', '', '', 'REGULAR FIT POLO WITH RAGLAN SLEEVES ', 1, 2150, '2022-12-27'),
(55, 1, 'None', 'arshiq', 'waqar', '', 'R-3 saleem town ', '', '', 'arshiqwaqar@gmail.com', '03123456789', '', '', 'REGULAR FIT GRAPHIC JOGGERS ', 3, 2150, '2022-12-29'),
(56, 1, 'None', 'arshiq', 'waqar', '', 'R-3 saleem town ', '', '', 'arshiqwaqar@gmail.com', '03123456789', '', '', 'REGULAR FIT HOODED SWEATSHIRT WITH KANGAROO POCKET ', 2, 2150, '2022-12-29'),
(57, 1, 'None', 'arshiq', 'waqar', '', 'R-3 saleem town ', '', '', 'arshiqwaqar@gmail.com', '03123456789', '', '', 'REGULAR FIT POLO WITH RAGLAN SLEEVES ', 1, 2150, '2022-12-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uaccount`
--
ALTER TABLE `uaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uorder`
--
ALTER TABLE `uorder`
  ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uaccount`
--
ALTER TABLE `uaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uorder`
--
ALTER TABLE `uorder`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
