-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2018 at 01:40 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guardian_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `portifolio`
--

CREATE TABLE `portifolio` (
  `portifolio_id` int(30) NOT NULL,
  `portifolio_name` varchar(230) NOT NULL,
  `portifolio_image` varchar(150) NOT NULL,
  `portifolio_description` text NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` enum('Fishery','Educ','philosp','market') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portifolio`
--

INSERT INTO `portifolio` (`portifolio_id`, `portifolio_name`, `portifolio_image`, `portifolio_description`, `date_joined`, `category`) VALUES
(1, 'Ugachick Aquafeed Market Survey in East Africa', 'img11.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Fishery'),
(2, 'Private Sector Foundation Uganda (PSFU)', 'img12.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Fishery'),
(3, 'Matching Grant Reg. No. MGF/FSH/CP4/0002', 'img13.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Fishery'),
(4, 'School-based Project aiming at Conserving Lake Victoria ', 'img12.jpg', 'School-based Project aiming at Conserving Lake Victoria through Performing Arts and Tree Planting Campaigns. Funded by World Bank through Lake Victoria Environmental Management Project (LVEMP II)', '2018-08-07 15:42:25', 'Educ'),
(5, 'bioremediation of the aquaculture effluents', 'img13.jpg', 'Use of constructed wetlands concept in bioremediation of the aquaculture effluents from Source of the Nile Fish Farm, Buikwe district ', '2018-08-07 15:42:25', 'Educ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`portifolio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `portifolio_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
