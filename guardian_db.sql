-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2018 at 09:00 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `portifolio_name` varchar(30) NOT NULL,
  `portifolio_image` varchar(150) NOT NULL,
  `portifolio_description` text NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` enum('Fishery','Educ','philosp','market') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portifolio`
--

INSERT INTO `portifolio` (`portifolio_id`, `portifolio_name`, `portifolio_image`, `portifolio_description`, `date_joined`, `category`) VALUES
(1, 'fish-go', 'img11.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Fishery'),
(2, 'meat-go', 'img12.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Fishery'),
(3, 'tuna', 'img13.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Fishery'),
(4, 'heder twi', 'img12.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Educ'),
(5, 'heswdwerr ', 'img13.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Educ'),
(6, 'header two', 'img13.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'Educ'),
(7, 'movies', 'img11.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'philosp'),
(8, 'huni', 'img12.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'philosp'),
(9, 'biutv', 'img13.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'philosp'),
(10, 'making it', 'img13.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'market'),
(11, 'market search', 'img11.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'market'),
(12, 'marketo', 'img11.jpg', 'fish is good. Have it make it very nice and enjoy with onions, blue water and oil.', '2018-08-07 15:42:25', 'market');

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
