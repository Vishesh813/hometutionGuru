-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 02:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memberinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `subject` text NOT NULL,
  `ExperienceLocality` text NOT NULL,
  `reference` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `number`, `subject`, `ExperienceLocality`, `reference`) VALUES
(4, 'vis', 'vhokjhbj@kjlh', 2147483647, 'jhkhkjgkj', 'bnm m', 'iuhgfg'),
(5, '', '', 0, '', '', ''),
(6, '', '', 0, '', '', ''),
(7, '', '', 0, '', '', ''),
(8, '', '', 0, '', '', ''),
(9, 'rajat ', 'rakatuoiipiofss@gmail.com', 2147483647, '', '', ''),
(10, 'rajat ', 'rakatuoiipiofss@gmail.com', 2147483647, '', 'ytytytyt', 'ghgghgh'),
(11, 'sunny', 'dgfgfgh@gmail.com', 2147483647, 'hero', 'jjhjhj', 'fghgh');

-- --------------------------------------------------------

--
-- Table structure for table `workshopinvoice`
--

CREATE TABLE `workshopinvoice` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshopinvoice`
--

INSERT INTO `workshopinvoice` (`id`, `name`, `email`, `City`, `Qualification`, `number`, `payment`) VALUES
(91, '0', 'vishesh.tiwari3433@gamil.com', 'kanpur', '12', 2147483647, '2345000'),
(92, '0', 'vis@gmail.com', 'mumbai', 'intermediate', 909, '1000/-'),
(93, '0', '', '', '', 0, ''),
(94, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(95, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(96, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(97, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(98, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(99, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(100, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(101, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(102, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(103, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(104, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(105, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(106, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(107, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(108, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(109, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(110, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(111, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(112, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(113, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(114, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(115, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(116, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(117, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(118, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(119, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-'),
(120, 'RAJAT ', 'vishesh1.tiwari3433@gamil.com', 'mirjapur', 'high school', 94809849, '50/-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshopinvoice`
--
ALTER TABLE `workshopinvoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `workshopinvoice`
--
ALTER TABLE `workshopinvoice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
