-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 08:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `address`, `feedback`) VALUES
(6, 'Priya devanand', 'priya31793@gmail.com', 'Lidcombe, New South Wales, Australia', 'Enquiry about fee structure'),
(7, 'Priya Naag', 'naag@gmail.com', 'Lidcombe, New South Wales, Australia', 'Service is not good '),
(9, 'Aswin ', 'aswin@gmail.com', 'Parramatta Road, Haberfield, New South Wales, Australia', 'Service is not good'),
(10, 'Naag Algates', 'naag@gmail.com', 'Strathfield, New South Wales, Australia', 'Is there any job vacancy in your Gym'),
(12, 'Pooja Ganesh', 'ganesha@gmail.com', 'Strathfield, New South Wales, Australia', 'Need more information about payment'),
(13, 'bnvnbvnn', 'vvn@gmail.com', 'Potts Point, New South Wales, Australia', 'cvc xvxcvxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
(14, 'vnbvnvnbvnbvnv', 'nvvnvvn@gmail.com', 'Flemington, Homebush West, New South Wales, Australia', 'hfvnvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv'),
(15, 'gncb bnc bc', 'gcvhv@gmail.com', 'Remise Havenstraat GVB, Havenstraat, Amsterdam, Netherlands', 'xcv cxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
