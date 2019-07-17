-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 07:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

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
(3, 'Karly', 'Hernandez', 'hezi@mailinator.com', 'Quasi ab proident m', 'Qui minim quia id ap'),
(4, 'Ezekiel', 'Evans', 'lumo@mailinator.com', 'Molestiae voluptas s', 'Tenetur possimus an'),
(5, 'Ina', 'Brewer', 'dihe@mailinator.net', 'Quia eum vitae assum', 'Cum tempore culpa '),
(6, '343423', '3242342', '', '', ''),
(7, '3453453453', '', '', '', ''),
(8, '343242', 'dfada', '', '', ''),
(9, 'Social Media', 'QA', 'malikashirali25@gmail.com', 'asd', 'asd'),
(11, '', '', '', '', ''),
(12, '343434', 'wefasds', 'sdafadsfsadf@gmail.com', 'sdfsdafadf', 'dsafasdfdsaf'),
(13, '3234234', 'sffsdsf', 'edfasefd@gmail.com', 'afasfsd', 'asdfadsf'),
(14, 'Dalton', 'Witt', 'fixeral@mailinator.com', 'Neque ullam occaecat', 'Sit molestiae aliqui'),
(15, 'Larissa', 'Stewart', 'nurykiwy@mailinator.net', 'Sed irure nulla temp', 'Est voluptas est bla'),
(16, 'Larissa', 'Stewart', 'nurykiwy@mailinator.net', 'Sed irure nulla temp', 'Est voluptas est bla'),
(17, 'xCXC', 'xcXCX', 'cc.intern07@gmail.com', 'xcXC', 'xCXc'),
(18, 'Chastity', 'Preston', 'kapohaz@mailinator.net', 'Veniam qui voluptas', 'Totam aliquip magni '),
(19, '34343', 'Barnes', 'lytiz@mailinator.com', 'Enim quis ducimus s', 'Fugiat et dolorum la'),
(20, '4354353', 'Ferguson', 'qyxedo@mailinator.com', 'Tempora corporis cup', 'Ut quos excepteur eo'),
(21, '3343', 'Pickett', 'bisow@mailinator.com', 'Eaque et provident ', 'In vitae deleniti co'),
(22, '3343', 'Pickett', 'bisow@mailinator.com', 'Eaque et provident ', 'In vitae deleniti co'),
(23, 'Cameran', 'Macias', 'nicyha@mailinator.net', 'Qui sint sit reprehe', 'Consectetur cupidata'),
(24, '123123', 'Macias', 'nicyha@mailinator.net', 'Qui sint sit reprehe', 'Consectetur cupidata'),
(25, '123123', 'Myers', 'suhurix@mailinator.net', 'Rem proident soluta', 'Quas error quas qui '),
(26, '3234234', 'Benjamin', 'bojuxeqawi@mailinator.com', 'Ut et est ut nostru', 'Minus quos ea quibus'),
(27, 'Reed', 'Mendoza', 'rycebus@mailinator.net', 'Vel ut sunt officia ', 'Itaque iure pariatur'),
(28, 'Evangeline', 'Trevino', 'weka@mailinator.com', 'Aute sed magnam itaq', 'Animi aspernatur no'),
(29, 'Althea', 'Gaines', 'sohytohuju@mailinator.com', 'Magna laboriosam ne', 'Ad laboris illum re'),
(30, '24234234', 'Reese', 'qyvodutox@mailinator.net', 'Culpa eos sit repreh', 'Eum nihil id qui co'),
(31, 'Libby', 'Molina', 'hyted@mailinator.com', 'Provident corporis ', 'Dolores quis ex pari'),
(32, 'Lucas', 'Soto', 'podofopabe@mailinator.com', 'Adipisci voluptas co', 'Repellendus Commodi'),
(33, 'Amena', 'Jacobs', 'taboceb@mailinator.net', 'Ex recusandae Neque', 'Inventore est labore'),
(34, 'Serena', 'Davis', 'tohe@mailinator.net', 'Consequuntur omnis v', 'Culpa quod elit pos'),
(35, 'Alfonso', 'Vincent', 'hixix@mailinator.net', 'Ex rerum incidunt a', 'Adipisicing tempora '),
(36, '', '', '', '', ''),
(37, 'Tanek', 'Mullins', 'qybapy@mailinator.net', 'Voluptatem In nihil', 'In soluta cupiditate'),
(38, 'Laith', 'Cleveland', 'bakiwum@mailinator.net', 'Nostrum quia rerum e', 'Animi vero in paria'),
(39, 'Henry', 'Figueroa', 'kygizyzaja@mailinator.net', 'Repellendus Eos ex', 'Omnis labore aut Nam'),
(40, 'Neville', 'Rojas', 'qoxumyfih@mailinator.com', 'Sit deserunt exercit', 'Officiis impedit qu'),
(41, 'Rhea', 'Fry', 'sihe@mailinator.com', 'Et quo vitae perfere', 'Eum omnis cillum vol'),
(42, '2332432', 'dfgdg', 'gdfgfdg@example.com', 'fdgfdgfd', 'fdsfsdfdsf'),
(43, '343434', 'Mcpherson', 'telyq@mailinator.net', 'Tenetur qui eos magn', 'Hic cum maxime eveni'),
(44, '123123', 'Davis', 'nulypasetu@mailinator.com', 'In labore ea non in ', 'Sed fugit repudiand'),
(45, '123123', 'Brady', 'sowow@mailinator.net', 'Et repellendus Et d', 'Sed exercitation mol'),
(46, '12312312', 'Duke', 'fehojykidu@mailinator.com', 'Est perferendis qui', 'Exercitation reprehe'),
(47, 'Brynn', 'Bondasdas', 'noxem@mailinator.net', 'Doloribus voluptate ', 'Aut excepturi tempor');

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
(30, 'Bioderma', '', 14343434, 'imgs\\product_05.png'),
(31, 'Bioderma', '', 1333, 'imgs\\product_06.png'),
(32, 'Chancha Piedra', '', 21, 'imgs\\product_01.png'),
(33, 'Olive', '', 242, 'imgs\\product_01.png'),
(34, 'Flower', '', 2412, 'imgs\\product_02.png'),
(35, 'Tree', '', 2455, 'imgs\\product_01.png'),
(37, 'Derma', '', 111, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'ashir', 'malikashirali25@gmail.com', 'ashir123', 1),
(25, '12344', '12344@gmail.com', '1234', 2),
(28, 'kymir', 'widun@mailinator.net', 'Pa$$w0rd!', 2),
(32, 'ali', 'ali@gmail.com', '123', 2),
(33, '123', '123@gmail.com', '123', 2),
(34, 'zyfaxedyra', 'mixamivesi@mailinator.net', '11', 2),
(35, 'jojoryped', 'wipasedigi@mailinator.net', '22', 2),
(36, 'gyfanag', 'tiwigyv@mailinator.com', '33', 2),
(37, 'cypyqyhy', 'rikowobak@mailinator.net', '55', 2),
(38, 'myjoka', 'syku@mailinator.com', '66', 2),
(39, 'xadijapen', 'hyziruw@mailinator.net', 'Pa$$w0rd!', 2),
(40, 'pijidic', 'qitadidim@mailinator.net', 'Pa$$w0rd!', 2),
(41, 'biqujebapi', 'fywakucibo@mailinator.com', '$2y$12$KlhYsCOU', 2),
(42, 'fihifoda', 'hyqiq@mailinator.com', '$2y$12$3dkutsws', 2),
(43, 'fowysy', 'gadimec@mailinator.com', '$2y$12$WyD5NpMF', 2),
(44, 'ali', 'ali24@gmail.com', '$2y$12$pXDpS3F9', 2),
(45, 'nycumogoru', '11@gmail.com', '$2y$12$ES/Q3hAP', 2),
(46, 'soharyli', '12@gmail.com', '$2y$12$UmR/qs58', 2),
(47, 'wuzup', 'dala@mailinator.com', '$2y$12$hc4yQyrc', 2),
(48, 'canelova', 'kozucuhow@mailinator.com', '$2y$12$77MXoSWqrAp6I4EgKcs/OecIi6SMkDnve2.c/12sODh3l5Qx4WgGG', 2),
(49, 'hatadahum', 'email@email.com', '$2y$12$sn82ZeQekmsuel7iuhRUX.ls5dgfShavDif5ULw0jyMNUM/KRZxS6', 2),
(50, 'sirilenole', '111@mailinator.net', '$2y$12$HDw9YbJR80d7sJpejGYqmexdS4klMqyXNX1NiiERZDBYmwjBWUCc2', 2),
(51, 'al', 'al@gmail.com', '$2y$12$1SYeU5GPJt9PCh0tR2ctW.v8CG4aqKS98ff09rufRplY2ZA4oXfIS', 2),
(52, 'admin', 'malikashirali25@gmail.com', '$2y$12$vPt8Dq//gM23nuBHnDXhduT7MRW1GCuKPvktaExbiPMO27/t/mj.S', 2),
(53, 'ali22', 'ali@gmail.com', '$2y$12$WBZAHDHFp/Rtm18gF/eFF.5PUe94MSJyKC.BHlEMv4u6rDGbfMM3W', 2),
(56, 'bitipa', 'sutyjabun@mailinator.net', '', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
