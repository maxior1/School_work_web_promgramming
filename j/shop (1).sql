-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 10:40 AM
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
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_usr` varchar(100) NOT NULL,
  `a_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_usr`, `a_pwd`) VALUES
(1, 'Reaksa Yi', 'maxio', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(7) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Lamborghini'),
(2, 'Ferrari'),
(3, 'Porsche'),
(4, 'Bugatti'),
(10, 'Toyota'),
(21, 'Honda'),
(24, 'Porsche HTR50 gold2'),
(26, 'BYD'),
(31, 'Tesla');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_stock` int(7) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_stock`, `p_ext`, `c_id`) VALUES
(1, 'Gold Blacker Rush ', 'In the spirit of the first Aventador—with its rear longitudinal engine position and extensive use of carbon fiber—the Ultimae shows off a look featuring pure and essential lines.\r\nThe livery, developed specifically by Lamborghini Centro Stile, celebrates the peak of Aventador production with a harmonious balance of shapes, accentuated by a use of light and shade between the black and painted parts.', 1350000, 8, 'jpg', 1),
(3, 'Ferrari Red Miyara FR', 'The 296 GTB, an evolution of Ferrari’s mid-rear-engined two-seater sports berlinetta concept, represents a revolution for the Maranello-based company as it introduces the new 120° V6 engine coupled with a plug-in (PHEV) electric motor capable of delivering up to 830 cv. The car thus defines the idea of driving fun to provide pure excitement not only when pursuing maximum performance but also during everyday driving.', 657000, 10, 'jpg', 2),
(4, 'Ferrari Yellow Genica FP', 'The values of fuel consumptions and CO2 emissions shown were determined according to the European Regulation (EC) 715/2007 in the version applicable at the time of type approval.', 650000, 5, 'jpg', 2),
(5, 'Porsche Silver Masttar ', 'A razor-sharp track tool. A highly agile mid-engine concept with 4.0-liter displacement and a six-cylinder naturally aspirated engine. Six individual throttle valves for a direct response. A high-revving concept that easily scratches the 9,000 mark. An output of 493 hp. Rational, not always.', 780000, 9, 'jpg', 3),
(6, 'Porsche Red Blaster ', 'Visible engine technology: the airbox has been moved to the interior and features a newly developed air filter for a throaty interior sound and optimum air flow.', 890000, 6, 'jpg', 3),
(7, 'Bugatti Blue Rusterio', 'Crafted around a formidable engine. Paired with a daring, ultra-lightweight design. This limited-edition powerhouse embraced rigorous testing and anticipation. From virtual simulations to lapping real racetracks to delivering motorsport levels of performance for all enthusiasts.', 655000, 8, 'jpg', 4),
(8, 'Bugatti Blacker Empize', 'W16 POWER UNLEASHED W16 underwent race track optimization, modifying turbochargers and lubrication systems to withstand elevated temperatures and forces.', 650000, 5, 'jpg', 4),
(11, 'Honda Festi23', '', 1400000, 5, 'jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
