-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 05:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moshi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE IF NOT EXISTS `adverts` (
`id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `product_name`, `category`, `quantity`, `name`, `product_price`, `phone`, `descriptions`, `user_id`) VALUES
(1, 'kiatu', 'Clothes', '7', 'Asics_wrestling_shoes.jpg', '89000', '0685402435', 'KIATU KIZURI SANA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_adverts`
--

CREATE TABLE IF NOT EXISTS `job_adverts` (
`job_id` int(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `details` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`news_id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass_again` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `pass`, `pass_again`) VALUES
(1, 'hemedishafii91@hotmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
`profile_id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `region` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`profile_id`, `fname`, `lname`, `date`, `region`, `phone`, `gender`, `name`, `user_id`) VALUES
(1, 'hemedi', 'shafii', '2018-10-05', 'Tanzania', '0685402435', 'Male', 'profile_img/', 0),
(2, 'hemedi', 'shafii', '2018-10-20', 'Tanzania', '+255719089009', 'Male', 'profile_img/', 8),
(3, 'jumbe', 'joshua', '2018-10-20', 'Tanzania', '+255719089009', 'Male', 'profile_img/', 1),
(4, 'jongolala', 'kipengo', '2018-10-27', 'dodoma', '07177777777', 'female', 'profile_img/', 2),
(5, 'hemedi', 'shafii', '2018-10-13', 'Tanzania', '', 'Male', '240_F_181471904_sFL8SCIsSqAFx1MeLEK9zaJrOV94qB3Z.jpg', 2),
(6, 'Sayun', 'joshua', '2018-10-13', 'Tanzania', '0719089009', 'female', 'MY.jpg', 9),
(7, 'Mrisho', 'waziri', '2018-10-15', 'Arusha', '0743019665', 'Male', 'linked.jpg', 0),
(8, 'Mrisho', 'waziri', '2018-10-15', 'Arusha', '0743019665', 'Male', 'linked.jpg', 0),
(9, 'Mrisho', 'waziri', '2018-10-15', 'Arusha', '0743019665', 'Male', 'linked.jpg', 0),
(10, 'isha', 'waziri', '2018-10-15', 'Arusha', '0743019665', 'female', '24993063_1740926116216658_1287550684_o.jpg', 0),
(11, 'isha', 'waziri', '2018-10-15', 'Arusha', '0743019665', 'female', '24993063_1740926116216658_1287550684_o.jpg', 0),
(12, 'dude', 'Ally', '2018-10-15', 'Arusha', '0743019665', 'Male', '02578f211a7b057.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_adverts`
--
ALTER TABLE `job_adverts`
 ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
 ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `job_adverts`
--
ALTER TABLE `job_adverts`
MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
MODIFY `profile_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
