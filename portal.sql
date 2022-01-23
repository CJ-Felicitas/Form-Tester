-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 03:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `student_id` int(4) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_year` int(1) DEFAULT NULL,
  `student_campus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`student_id`, `student_name`, `student_year`, `student_campus`) VALUES
(1, 'Cedrick James Felicitas', 2, 'Obrero'),
(2, 'Kiara Ysabelle Hagunob', 2, 'Obrero'),
(3, 'Mark Jerome Pondol', 2, 'Obrero'),
(4, 'Dorothy Saliot', 2, 'Tagum'),
(5, 'Sontiaga', 2, 'UM'),
(6, 'Rudy Arcilla', 3, 'UM Matina'),
(7, 'Marvin Lagmay', 4, 'Obrero'),
(8, 'Nancy Mozo', 4, 'Obrero'),
(9, 'Jamal Rogers', 4, 'Obrero');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `student_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
