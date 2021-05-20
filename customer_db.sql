-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 12:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_db`
--

CREATE TABLE `customer_db` (
  `S.no` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `Balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_db`
--

INSERT INTO `customer_db` (`S.no`, `Name`, `email_id`, `Balance`) VALUES
(1, 'Joel', 'joel@email.com', 10000),
(2, 'James', 'james@email.com', 50000),
(3, 'Jager', 'jager@email.com', 24000),
(4, 'Bondu', 'bondu@email.com', 40000),
(5, 'Harsha', 'harsha@email.com', 60000),
(6, 'Nagraj', 'nagraj@email.com', 100000),
(7, 'Danish', 'danish@email.com', 56000),
(8, 'Zofia', 'zofia@email.com', 35000),
(9, 'Kamlesh', 'kamlesh@email.com', 85000),
(10, 'Pinto', 'pinto@email.com', 45000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
