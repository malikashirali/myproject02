-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 07:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `team_testimonial_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `page_id`, `team_testimonial_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`) VALUES
(1, 'Ashir', 'Ali', 'malikashirali25@gmail.com', 'Maths', 'Ahahahahhahahahahahahahahahahaha.'),
(2, 'Social Media', 'QA', 'socialmediatesting1122@gmail.com', 'Maths', ''),
(3, 'Karly', 'Hernandez', 'hezi@mailinator.com', 'Quasi ab proident m', 'Qui minim quia id ap');

-- --------------------------------------------------------

--
-- Table structure for table `home_cards`
--

CREATE TABLE `home_cards` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_cards`
--

INSERT INTO `home_cards` (`id`, `title`, `description`) VALUES
(1, 'Free Shipping', 'Quick sample text to create the card title and make up the body of the card\'s content.'),
(2, 'Season Sale 50% Off', 'Quick sample text to create the card title and make up the body of the card\'s content.'),
(3, 'Buy A gift Card', 'Quick sample text to create the card title and make up the body of the card\'s content.');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'home'),
(2, 'about');

-- --------------------------------------------------------

--
-- Table structure for table `pages_content`
--

CREATE TABLE `pages_content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` text NOT NULL,
  `pages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages_content`
--

INSERT INTO `pages_content` (`id`, `title`, `description`, `image`, `pages_id`) VALUES
(1, 'EFFECTIVE MEDICINE, NEW MEDICINE EVERYDAY', 'WELCOME TO PHARMA', 'imgs\\header.jpg', 1),
(2, 'ABOUT US', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati natus iure voluptatum eveniet harum recusandae ducimus saepe.', 'imgs\\header.jpg', 2),
(3, 'How We Started', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, de', '', 2),
(4, 'How We Started', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, de', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(31, 'Bioderma', '', 1300, 'imgs\\product_06.png'),
(32, 'Chancha Piedra', '', 21, 'imgs\\product_01.png'),
(33, 'Olive', '', 242, 'imgs\\product_01.png'),
(34, 'Flower', '', 2412, 'imgs\\product_02.png'),
(35, 'Tree', '', 24, 'imgs\\product_01.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `images`, `product_id`) VALUES
(1, 'images/asdad.jpg', 31),
(2, 'images/oliveimage', 33);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `team_testimonial`
--

CREATE TABLE `team_testimonial` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(75) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_testimonial`
--

INSERT INTO `team_testimonial` (`id`, `image`, `name`, `designation`, `description`) VALUES
(1, '', 'Ashir', 'Internee', 'Hello'),
(2, '', 'Inshal', 'Internee', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `roles_id`) VALUES
(1, 'ashir', '', 'ashir123', 1),
(2, 'uzair', 'uzair@example.com', 'uzair123', 2),
(3, 'ali', '', 'ali123', 2),
(21, 'qujiko', 'gegyxawizo@mailinator.net', 'Pa$$w0rd!', 2),
(22, 'kyporyxa', 'kubinaj@mailinator.net', 'Pa$$w0rd!', 2),
(23, 'hugykin', 'fukeveweg@mailinator.com', 'Pa$$w0rd!', 2),
(24, 'vitoh', 'xyrijije@mailinator.net', 'Pa$$w0rd!', 2),
(25, 'eeee', 'asdad@gmail.com', 'admin', 2),
(26, 'eeeeee', 'adad@gmail.com', 'admin', 2),
(27, 'xxx', 'xxx@gmail.com', 'admin', 2),
(28, 'asd', 'asd@gmail.com', 'asd', 2),
(29, 'adasdsadsa', 'asdadsa@gmail.com', 'admin', 2),
(30, 'admin', 'admin@gmail.com', 'admin', 2),
(31, 'qwe', 'qwe@gmail.com', '123', 2),
(32, 'ert', 'ert@gmasd.om', 'ert', 2),
(33, 'sdasdasd', 'asadasd@gmail.com', 'admin', 2),
(34, 'adadasdad2', '2@gmail.com', 'admin', 2),
(35, 'asdsadas', 'asdada@gmail.com', 'admin', 2),
(36, 'admin', 'adminasda@gai.com', 'admin', 2),
(37, 'this', 'this@gmail.com', '$2y$12$GdOf1umf', 2),
(38, 'newnew', 'newnew@gmail.com', '$2y$12$fot2XkPR', 2),
(39, 'nn', 'nn@gmail.com', '$2y$12$p0cJf8BgaF2rVieh1.oJQe5fwzIFntZo4n0yTMI94va81ja4kF2IO', 2),
(40, 'hhh', 'hhh@gmail.com', '$2y$12$FjBUefPkJuUnwsXVcca5w.NWqK3ztTlKaxcYRYl9FJRdZsyJ.fKh.', 2),
(41, 'aaaaa', 'aaaa@gmaasd.com', 'aaaa', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`page_id`),
  ADD KEY `t_id` (`team_testimonial_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_cards`
--
ALTER TABLE `home_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_content`
--
ALTER TABLE `pages_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`pages_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_ibfk_1` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_testimonial`
--
ALTER TABLE `team_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_id` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_cards`
--
ALTER TABLE `home_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages_content`
--
ALTER TABLE `pages_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_testimonial`
--
ALTER TABLE `team_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`),
  ADD CONSTRAINT `content_ibfk_2` FOREIGN KEY (`team_testimonial_id`) REFERENCES `team_testimonial` (`id`);

--
-- Constraints for table `pages_content`
--
ALTER TABLE `pages_content`
  ADD CONSTRAINT `pages_content_ibfk_1` FOREIGN KEY (`pages_id`) REFERENCES `pages` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
