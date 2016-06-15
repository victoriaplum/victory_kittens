-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2016 at 04:24 am
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `victory_kittens`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `delivery_date`, `status`, `customer_id`) VALUES
(1, '2016-01-12', '2016-01-16', 'On the way', 1),
(2, '2016-02-12', '2016-02-15', 'Pending', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_pet`
--

CREATE TABLE IF NOT EXISTS `order_pet` (
`id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `order_pet`
--

INSERT INTO `order_pet` (`id`, `order_id`, `product_id`) VALUES
(16, 1, 13),
(17, 1, 14),
(18, 2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `breed` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `description`, `price`, `breed`, `gender`, `age`, `photo`, `type_id`) VALUES
(13, 'Bruno', 'I''m a cheeky dog who''s keen to push the boundaries where I can. ', 100, 'Heeler Mix', 'Female', '6 months', 'bruno.jpg', 6),
(14, 'Harry', 'Big handsome, independent boy, he loves attention.', 100, 'DSH', 'Male', '2 months', 'harry.jpg', 5),
(15, 'Matilda', 'I am smoochy and friendly and I love to be patted.', 200, 'DSH', 'Female', '6 months', 'matilda.jpg', 5),
(16, 'Bambi', 'I am looking for a home with a confident leader.', 200, 'Staffy Mix', 'Female', '6 months', 'bambi.jpg', 6),
(17, 'Piper', 'A sweet and gentle soul. I would love to your family. ', 0, 'DSH', 'F', '1 year', 'piper.jpg', 5),
(18, 'Greta', 'I am a timid girl with a beautiful coat. Funny and cheeky caring cat. ', 0, 'DMH', 'F', '2 years', 'greta.jpg', 5),
(19, 'Jonty', 'Dont be fooled by my size, Im going to be a big boy. ', 0, 'Labrador', 'M', '6 months', 'jonty.jpg', 6),
(20, 'Hoover', 'Are you looking for a cute bundle of fun? Then I am the pup for you! ', 0, 'Labrador', 'M', '3 months', 'hoover.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
`id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `type_description` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type_name`, `type_description`) VALUES
(5, 'Kitten', 'Here are the cute kittens'),
(6, 'Puppy', 'Here are the cute puppies');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `address`, `telephone`, `email`, `admin`) VALUES
(1, 'mary.smith', '1', 'Mary', 'Smith', '234 Great South Road', '123454544', 'mary.smith@gmail.com', 'no'),
(2, 'peter.pan', '1', 'Peter', 'Pan', '12 Neveland', '3433323', 'peter.pan@gmail.com', 'no'),
(3, 'john.willis', '1', 'John', 'Willis', '543 Queen Street', '4439483', 'john.willis@gmail.com', 'no'),
(4, 'oscar.dillingworth', '1', 'Oscar', 'Dillingworth', '563 Epsom', '58483904', 'ocsar.dillingworth@gmail.com', 'no'),
(5, 'charles.jones', '1', 'Charles', 'Jones', '45 Northcote', '434566534', 'charles.jones@gmail.com', 'no'),
(6, 'mario.sutherland', '1', 'Mario', 'Sutherland', '143 Hart Street', '454454334', 'mario.sutherland@gmail.com', 'no'),
(7, 'admin', 'admin', 'admin', 'admin', 'admin', '', '', 'yes'),
(8, 'bianca.iscool', '12345', 'Bianca', 'Iscool', '123 Faraway lane', '1234567', 'bianca@bianca.com', 'no'),
(9, 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'no'),
(10, 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'no'),
(11, 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'no'),
(12, 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'Hi', 'no'),
(13, '', '12345', 'bla', 'bla', '', '1234', 'bla@bla.com', ''),
(14, '', '12345', 'bla', 'bla', '', '1234', 'bla@bla.com', ''),
(15, 'qwr', '12345', 'bla', 'bla', '', '1234', 'bla@bla.com', ''),
(16, '', '', '', '', '', '', '', 'no'),
(17, 'vic', 'vic', 'victoria', 'dillon', '123 hello abve', '123', 'victoria@victoria.com', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_pet`
--
ALTER TABLE `order_pet`
 ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`,`product_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
 ADD PRIMARY KEY (`id`), ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_pet`
--
ALTER TABLE `order_pet`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_pet`
--
ALTER TABLE `order_pet`
ADD CONSTRAINT `order_pet_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
ADD CONSTRAINT `order_pet_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `pets` (`id`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
