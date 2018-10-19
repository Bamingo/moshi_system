-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 02:23 PM
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
  `descriptions` varchar(255) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `product_name`, `category`, `quantity`, `name`, `product_price`, `descriptions`, `user_id`) VALUES
(4, 'nguo', 'Clothes', '123', '1.jpg', '78888977777890000', 'nguokk', 2),
(5, 'gari', 'Clothes', '112', 'new-2018-honda-accord_sedan-touringcvt-8454-16983411-1-640.jpg', '130000', 'Gari inauzwa', 2),
(6, 'sofa', 'Farnitures', '2', '240_F_181471904_sFL8SCIsSqAFx1MeLEK9zaJrOV94qB3Z.jpg', '1344999', 'yffk', 2),
(7, 'hu yi7uu', 'Clothes', '67', 'Capture2.PNG', '88990', 'jnhhlo', 1),
(8, 'koti', 'Clothes', '7', 'DP2.jpg', '88990', 'tzcc', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `author`, `name`, `descriptions`, `user_id`) VALUES
(1, 'h', 'h', 'profile_img/', '', 2),
(2, 'hjjj', 'hhjjj', 'news_img/', '', 2),
(3, 'Community Development Officer', 'hhhhh', 'news_img/', '!,blkn', 2),
(4, 'MWIZI AKAMATWA', 'Kuku', 'login.JPG', '!JJFJF', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass_again` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `pass`, `pass_again`) VALUES
(1, 'hemedishafii91@hotmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(2, 'hemedishafii91@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(3, 'hemedishaffi19@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(4, 'hemedishafi@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(5, 'hemedishafii@hotmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(6, 'hemedishafii11@hotmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'jongo@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(9, 'sayuni@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(10, 'ishaomary@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(11, 'ally@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(12, 'ishawaziri@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(13, 'mrisho@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(14, 'isha@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(15, 'or@yahoo.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710'),
(16, 'hemedi@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

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
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
MODIFY `profile_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
