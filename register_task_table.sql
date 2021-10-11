-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2021 at 07:31 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.3.25-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purva_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_task_table`
--

CREATE TABLE `register_task_table` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_task_table`
--

INSERT INTO `register_task_table` (`id`, `fullname`, `email`, `password`, `contact`) VALUES
(1, 'purva bhawsarji', 'purva@ignisitsolutions.com', 'e824772bbdda3f02a30d17840359c865', 9856740000),
(2, 'payal bhawsar', 'payal@gmail.com', '64d8a47c30f84958c2cc2181e9382f35', 9786546696),
(3, 'anil nagar', 'an@gmail.com', '71b9b5bc1094ee6eaeae8253e787d654', 1234567855),
(4, 'ankit nagar', 'an@gmail.com', '91d20b1aed25eb72d2152f4348a430e4', 1234567867),
(5, 'ashu', 'a@gmail.com', '89cd279e1dbab7a8518361804a388062', 8976467777);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_task_table`
--
ALTER TABLE `register_task_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_task_table`
--
ALTER TABLE `register_task_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
