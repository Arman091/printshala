-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 11:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` text NOT NULL DEFAULT '\'unknown\'',
  `last_name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `email` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `dob`, `gender`, `Telephone`, `email`) VALUES
('warner', 'david', '2023-06-04', 'male', '09090900', 'hjiu@hj.com'),
('jii', 'hii', '2023-06-11', 'male', '8976543', 'kil5@gh.com'),
('lo', 'lo', '2023-06-02', 'male', '98', 'like7@j.com'),
('peter', 'liuke', '2023-06-04', 'male', '90987', 'hikkr8@h.com'),
('luke', 'kile', '2023-06-03', 'male', '0909', 'jil7@hj.com'),
('virat', 'kohli', '2023-06-04', 'male', '9087654321', 'ytre4@gh.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
