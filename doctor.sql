-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 07:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digidoctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `text`) VALUES
(4, 'frontEnd/images/dddd.jpg', 'this site introduce more services for our customer we hope to like you thank you for visitin us');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`) VALUES
(6, 'mohamed ahmed', 'frontEnd/images/team2.jpg'),
(7, 'mohamed salim', 'frontEnd/images/team2.jpg'),
(8, 'mahmoud elsayed', 'frontEnd/images/1.jpg'),
(9, 'mahmoud mhamed', 'frontEnd/images/team1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `emai` varchar(255) DEFAULT NULL,
  `title` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `image`, `emai`, `title`) VALUES
(2, 'mahmoud', 'frontEnd/images/team2.jpg', 'engmahmoudelsayed2019@gmail.com', 'mahmoud elsayed mohamed minit salamant'),
(3, 'mohamed', 'frontEnd/images/team2.jpg', 'mahmoud@gmail.com', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `message` text,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `message`, `email`) VALUES
(1, 'Just Send Us Mail With your need and we will call you fastest as we can', 'martisan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `digicore`
--

CREATE TABLE `digicore` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `digicore`
--

INSERT INTO `digicore` (`id`, `image`, `title`, `description`) VALUES
(1, 'frontEnd/images/Innovation .png', 'core1', 'this service for all our customer we hope to like you'),
(3, 'frontEnd/images/Commitment .png', 'web', 'this service for all our customer we hope to like you'),
(4, 'frontEnd/images/Results .png', 'web', 'this service for all our customer we hope to like you'),
(5, 'frontEnd/images/Innovation .png', 'web', 'this service for all our customer we hope to like you');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `importantclient`
--

CREATE TABLE `importantclient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `importantclient`
--

INSERT INTO `importantclient` (`id`, `name`, `image`) VALUES
(6, 'eee', 'frontEnd/images/ffff.jpg'),
(7, 'mahmoud', 'frontEnd/images/kkk.jpg'),
(8, 'mahmoud', 'frontEnd/images/dddd.jpg'),
(9, 'mahmoud elsayed', 'frontEnd/images/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `insights`
--

CREATE TABLE `insights` (
  `id` int(11) NOT NULL,
  `number_of_services` int(11) DEFAULT NULL,
  `number_of_clients` int(11) DEFAULT NULL,
  `number_of_city` int(11) DEFAULT NULL,
  `start_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `body` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `body`, `image`) VALUES
(1, 'you are welcome in our website hhhh jjjjj dddddddd fffffff gggggg rrrrr tttttt yyyyyy rrrrrrrr eee', 'frontEnd/images/Layer 14.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `information`, `image`, `status`) VALUES
(6, 'social media', 'this post for me to make comment to this website this website introduce more information and services for our customer', 'frontEnd/images/blog-test.jpg', 1),
(7, 'web development', 'this post for me to make comment to this website this website introduce more information and services', 'frontEnd/images/blog-test.jpg', 1),
(8, 'web design', 'this post for me to make comment to this website this website introduce more information', 'frontEnd/images/blog-test.jpg', 1),
(9, 'engineering', 'this post for me to make comment to this website this website introduce more information', 'frontEnd/images/blog-test.jpg', 1),
(10, 'computer scince', 'this post for me to make comment to this website this website introduce more information', 'frontEnd/images/blog-test.jpg', 0),
(11, 'ffffff', 'fffffffff', 'frontEnd/images/blog-test.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `text` text,
  `image` varchar(255) DEFAULT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `price`) VALUES
(6, 'web develeopment', 'this service for all our customer we hope to like you', 'frontEnd/images/Layer 25.png', 10),
(8, 'web photoshop', 'this service for all our customer we hope to like you', 'frontEnd/images/Layer 26.png', 20),
(9, 'web design', 'this service for all our customer we hope to like you', 'frontEnd/images/Layer 26.png', 91);

-- --------------------------------------------------------

--
-- Table structure for table `services_card`
--

CREATE TABLE `services_card` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `subtittle` varchar(255) DEFAULT NULL,
  `ctabutton` varchar(255) DEFAULT NULL,
  `buttonlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `tittle`, `subtittle`, `ctabutton`, `buttonlink`) VALUES
(1, 'frontEnd/images/gggg.jpg', 'project slider', 'slider', 'CTA', 'sssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instgram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `twitter`, `instgram`, `whatsapp`, `linkedin`) VALUES
(1, 'mmmmmmmmmmmmmm', 'mmmmmmmmmmmmm', 'ffffffffffffffffffffffff', '01002558788', 'ffffffffffffffffffffff'),
(5, 'mahmoud@yahoo', 'vvvvvvvvv', 'vvvvvv', '01008730287', 'vvvvvvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instgram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `image`, `description`, `facebook`, `instgram`, `twitter`, `linkedin`, `whatsapp`) VALUES
(6, 'mahmoud elsayed', 'frontEnd/images/team2.jpg', 'web developer laravel', 'https://www.facebook.com/?stype=lo&jlou=Afdsj4O19ZNU-FZihnIJ0XUyypaDmDgdVhbC4K8VVsmCQqlhSwxDpqvNihn8eAn5MSdXsWqiTFQ986FE9RSyDjy5dEzWbn70vaR7-WjrVNtVMg&smuh=6222&lh=Ac_PZQz3MqVOzOwa', 'https://www.instagram.com/accounts/login/', 'https://twitttter.herokuapp.com/', 'https://www.linkedin.com/uas/login', 'https://web.whatsapp.com/'),
(7, 'ahmed mohamed', 'frontEnd/images/1.jpg', 'web designer', 'https://www.facebook.com/?stype=lo&jlou=Afdsj4O19ZNU-FZihnIJ0XUyypaDmDgdVhbC4K8VVsmCQqlhSwxDpqvNihn8eAn5MSdXsWqiTFQ986FE9RSyDjy5dEzWbn70vaR7-WjrVNtVMg&smuh=6222&lh=Ac_PZQz3MqVOzOwa', 'https://www.instagram.com/accounts/login/', 'https://twitttter.herokuapp.com/', 'https://www.linkedin.com/uas/login', 'https://web.whatsapp.com/'),
(8, 'mohamed ahmed', 'frontEnd/images/team1.jpg', 'phptoshop', 'https://www.facebook.com/?stype=lo&jlou=Afdsj4O19ZNU-FZihnIJ0XUyypaDmDgdVhbC4K8VVsmCQqlhSwxDpqvNihn8eAn5MSdXsWqiTFQ986FE9RSyDjy5dEzWbn70vaR7-WjrVNtVMg&smuh=6222&lh=Ac_PZQz3MqVOzOwa', 'https://www.instagram.com/accounts/login/', 'https://twitttter.herokuapp.com/', 'https://www.linkedin.com/uas/login', 'https://web.whatsapp.com/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(2, 'mahmoud elsayed', 'mahmoud@gmail.com', '123456', 'frontEnd/images/dddd.jpg'),
(3, 'ahmed elsayed', 'digidoctor@gmail.com', 'digidoctor', 'frontEnd/images/team2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `text` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `text`, `image`) VALUES
(2, 'kkkkkkkkkkkkkkkkkk ddddd ddddd dddd dddddd dddd ddddd dddd dddd', 'frontEnd/images/Layer 14.png');

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` int(11) NOT NULL,
  `text` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `text`, `image`) VALUES
(1, 'ffffffffffffffff', 'frontEnd/images/gggg.jpg'),
(2, 'hhhhhhhhhhh', 'frontEnd/images/dddd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `information` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `information`, `image`) VALUES
(3, 'work1', 'fdffffffffffffffffffffffff', 'frontEnd/images/Layer 8.jpg'),
(4, 'work2', 'eeeeeeeeeeeeeeee', 'frontEnd/images/Layer 7.jpg'),
(5, 'work3', 'eeeeeeeeeeeeeeeeeee', 'frontEnd/images/foot.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digicore`
--
ALTER TABLE `digicore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importantclient`
--
ALTER TABLE `importantclient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insights`
--
ALTER TABLE `insights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_card`
--
ALTER TABLE `services_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `digicore`
--
ALTER TABLE `digicore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `importantclient`
--
ALTER TABLE `importantclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services_card`
--
ALTER TABLE `services_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `services_card`
--
ALTER TABLE `services_card`
  ADD CONSTRAINT `services_card_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
