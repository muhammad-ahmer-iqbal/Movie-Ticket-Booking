-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` char(20) NOT NULL,
  `admin_password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
('admin_ahmer', 'ahmer123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` char(20) NOT NULL,
  `booking_userName` char(100) NOT NULL,
  `booking_movieInSlotId` int(100) NOT NULL,
  `booking_className` int(100) NOT NULL,
  `booking_seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(100) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `class_price` decimal(60,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `contact_email` varchar(20) NOT NULL,
  `contact_message` varchar(500) NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(100) NOT NULL,
  `hall_availableSeats` varchar(100) NOT NULL,
  `hall_theaterName` int(100) NOT NULL,
  `hall_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `hall_availableSeats`, `hall_theaterName`, `hall_no`) VALUES
(3, '15', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(100) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_genre` int(100) NOT NULL,
  `movie_country` int(100) NOT NULL,
  `movie_language` int(100) NOT NULL,
  `movie_writer` varchar(100) NOT NULL,
  `movie_director` varchar(100) NOT NULL,
  `movie_description` varchar(200) NOT NULL,
  `movie_trailer` varchar(100) NOT NULL,
  `movie_releaseDate` date NOT NULL,
  `movie_theaterName` int(100) NOT NULL,
  `movie_poster` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_inslot`
--

CREATE TABLE `movie_inslot` (
  `m_inslot_id` int(100) NOT NULL,
  `m_inslot_day` varchar(100) NOT NULL,
  `m_inslot_slotId` int(100) NOT NULL,
  `m_inslot_movieName` int(100) NOT NULL,
  `m_inslot_hallNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(100) NOT NULL,
  `rating_movieName` int(100) NOT NULL,
  `rating_userName` char(100) NOT NULL,
  `rating_stars` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(100) NOT NULL,
  `review_message` varchar(500) NOT NULL,
  `review_dateTime` datetime(6) NOT NULL,
  `review_movieName` int(100) NOT NULL,
  `review_userName` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slot_id` int(100) NOT NULL,
  `slot_timings` varchar(20) NOT NULL,
  `slot_shift` char(100) NOT NULL,
  `slot_theaterName` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `theater_id` int(20) NOT NULL,
  `theater_name` varchar(100) NOT NULL,
  `theater_place` char(100) NOT NULL,
  `theater_owner` varchar(100) NOT NULL,
  `theater_contactNo` char(11) NOT NULL,
  `theater_email` char(50) NOT NULL,
  `theater_address` char(100) NOT NULL,
  `theater_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`theater_id`, `theater_name`, `theater_place`, `theater_owner`, `theater_contactNo`, `theater_email`, `theater_address`, `theater_image`) VALUES
(1, 'Neuple', 'Johar', 'Ahmer Iqbal', '03353979427', 'ahmeriqbal17@gmail.com', 'ahmeriqbal17@gmail.com', 'forms/uploads/'),
(4, 'Neuplex', 'Johar', 'Ahmer', '03353979427', 'ahmeriqbal17@gmail.com', 'abc road karachi', 'forms/uploads/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg'),
(5, 'Neuplex', 'Gulshan', 'Ahmer Iqbal', '03353979427', 'ahmeriqbal17@gmail.com', 'ahmeriqbal17@gmail.com', 'uploads/'),
(6, 'Abc', 'def', 'ghi', '0333333333', 'ahmeriqbal1@yahoo.com', 'abcded road karachi', 'uploads/'),
(7, 'Attrium', 'Sadar', 'Boss', '0333333333', 'ahmeriqbal1@yahoo.com', 'abcded road karachi', 'uploads/france-in-pictures-beautiful-places-to-photograph-eiffel-tower - Copy.jpg'),
(8, 'Neuplex', 'Johar', 'Ahmer Iqbal', '03353979427', 'ahmeriqbal17@gmail.com', 'ahmeriqbal17@gmail.com', 'uploads/'),
(9, 'Neuplex', 'Sadar', 'Ahmer', '0333333333', 'ahmeriqbal1@yahoo.com', 'ahmeriqbal1@yahoo.com', 'uploads/00000.jpg'),
(10, 'Attrium', 'Sadar', 'Ahmer Iqbal', '0333333333', 'ahmeriqbal1@yahoo.com', 'ahmeriqbal1@yahoo.com', 'uploads/Teri Zindagi Mein Pyar Hai - Badhaai Ho Badhaai _ KK _ Anil Kapoor, Shilpa Shett1632727162.mp4'),
(11, 'Attrium', 'Gulshan', 'Ahmer Iqbal', '0333333333', 'ahmeriqbal1@yahoo.com', 'abcded road karachi', 'uploads/00000 - Copy.jpg'),
(12, 'Attrium', 'Gulshan', 'Boss', '0333333333', 'ahmeriqbal1@yahoo.com', 'abcded road karachi', 'uploads/00000 - Copy - Copy.jpg'),
(13, 'Abc', 'Gulshan', 'Boss', '0333333333', 'ahmeriqbal1@yahoo.com', 'abcded road karachi', 'uploads/00000 - Copy - Copy - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(20) NOT NULL,
  `user_name` char(100) NOT NULL,
  `user_password` char(100) NOT NULL,
  `user_contactNo` char(11) DEFAULT NULL,
  `user_age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_contactNo`, `user_age`) VALUES
('ahmer123', 'Ahmer iqbal', 'ahmer123', '0333333333', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_class_name` (`booking_className`),
  ADD KEY `booking_movie_inslot_id` (`booking_movieInSlotId`),
  ADD KEY `booking_user_name` (`booking_userName`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`),
  ADD KEY `hall_theater_name` (`hall_theaterName`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_theatername` (`movie_theaterName`),
  ADD KEY `movie_country` (`movie_country`),
  ADD KEY `movie_genre` (`movie_genre`),
  ADD KEY `movie_language` (`movie_language`);

--
-- Indexes for table `movie_inslot`
--
ALTER TABLE `movie_inslot`
  ADD PRIMARY KEY (`m_inslot_id`),
  ADD KEY `m_inslot_hall_no` (`m_inslot_hallNo`),
  ADD KEY `m_inslot_movie_name` (`m_inslot_movieName`),
  ADD KEY `m_inslot_slot_id` (`m_inslot_slotId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `rating_user_name` (`rating_userName`),
  ADD KEY `rating_movie_name` (`rating_movieName`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `review_movie_name` (`review_movieName`),
  ADD KEY `review_user_name` (`review_userName`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slot_id`),
  ADD KEY `slot_theatername` (`slot_theaterName`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`theater_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `theater_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`booking_className`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`booking_movieInSlotId`) REFERENCES `movie_inslot` (`m_inslot_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`booking_userName`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `hall_ibfk_1` FOREIGN KEY (`hall_theaterName`) REFERENCES `theater` (`theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`movie_country`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`movie_genre`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_3` FOREIGN KEY (`movie_language`) REFERENCES `language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_4` FOREIGN KEY (`movie_theaterName`) REFERENCES `theater` (`theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_inslot`
--
ALTER TABLE `movie_inslot`
  ADD CONSTRAINT `movie_inslot_ibfk_1` FOREIGN KEY (`m_inslot_hallNo`) REFERENCES `hall` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_inslot_ibfk_2` FOREIGN KEY (`m_inslot_movieName`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_inslot_ibfk_3` FOREIGN KEY (`m_inslot_slotId`) REFERENCES `slot` (`slot_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`rating_userName`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`rating_movieName`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`review_movieName`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`review_userName`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_1` FOREIGN KEY (`slot_theaterName`) REFERENCES `theater` (`theater_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
