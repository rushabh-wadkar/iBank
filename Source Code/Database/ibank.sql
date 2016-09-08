-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2015 at 08:45 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ibank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `acc_no` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `balance` float NOT NULL,
  `doj` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`acc_no`, `first_name`, `last_name`, `email_id`, `password`, `mobile_no`, `balance`, `doj`) VALUES
(1000, 'Rushabh', 'Wadkar', 'rushabh6792@gmail.com', '9174e8961e5e69e81c9fd9dbd44b0e5b', '9004196353', 1291, '2015-10-07 09:47:22'),
(1001, 'Neha', 'Sinha', 'sinha.neha698@gmail.com', 'a1011606567662c67a0f05a063c42fdf', '8983229019', 99010, '2015-10-07 09:50:40'),
(1002, 'Kunal', 'Shinde', 'kunalshinde82@gmail.com', '8dcb8e69220cca36b86ebf3bda286488', '9820676830', 400, '2015-10-07 10:15:20'),
(1003, 'Swapnil', 'Velunde', 'swaputd@gmail.com', 'ea499afdeef66ded657c70864f0c7b95', '8888926695', 1000, '2015-10-07 10:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_transfer`
--

CREATE TABLE IF NOT EXISTS `transaction_transfer` (
  `acc_no` int(10) NOT NULL,
  `tid` text NOT NULL,
  `dot` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_transfer`
--

INSERT INTO `transaction_transfer` (`acc_no`, `tid`, `dot`) VALUES
(1001, 'Transfered Rs.10 into Account Number - 1000. Transaction ID - 2517034fec72d93306a3fe6d1fa9da5d', '2015-10-07 09:51:42'),
(1000, 'Transfered Rs.10 from Account Number - 1001. Transaction ID - 2517034fec72d93306a3fe6d1fa9da5d', '2015-10-07 09:51:42'),
(1002, 'Transfered Rs.500 into Account Number - 1000. Transaction ID - 57e350899827cbff4b1c27518f903801', '2015-10-07 10:16:05'),
(1000, 'Transfered Rs.500 from Account Number - 1002. Transaction ID - 57e350899827cbff4b1c27518f903801', '2015-10-07 10:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_withdraw`
--

CREATE TABLE IF NOT EXISTS `transaction_withdraw` (
  `acc_no` int(10) NOT NULL,
  `wid` text NOT NULL,
  `dow` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_withdraw`
--

INSERT INTO `transaction_withdraw` (`acc_no`, `wid`, `dow`) VALUES
(1000, 'Withdrawed Rs.10. Transaction ID - 6af7490057aa15940d7f039b2dc96881', '2015-10-07 10:13:45'),
(1002, 'Withdrawed Rs.100. Transaction ID - 502ffd0ac74147ee4bf3fe3a08c112f6', '2015-10-07 10:20:22'),
(1000, 'Withdrawed Rs.10. Transaction ID - 7fc62791bb410971e3df445b5b060619', '2015-10-21 23:25:52'),
(1000, 'Withdrawed Rs.10. Transaction ID - 3759323bde8667aeaec9117b7c2511a6', '2015-10-21 23:25:58'),
(1000, 'Withdrawed Rs.70. Transaction ID - 2c08907e3e8d47f59bb4b39a30afab2b', '2015-10-21 23:26:05'),
(1000, 'Withdrawed Rs.70. Transaction ID - 311e289ed68ac6b185f1f637923487c5', '2015-10-21 23:26:08'),
(1000, 'Withdrawed Rs.49. Transaction ID - faa35c16f9049c4f8b45d525a08bdbba', '2015-10-21 23:26:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`acc_no`), ADD UNIQUE KEY `email_id` (`email_id`), ADD UNIQUE KEY `email_id_2` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `acc_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1004;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
