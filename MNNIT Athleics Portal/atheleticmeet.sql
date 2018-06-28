-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 06:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atheleticmeet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `contact`) VALUES
(1, 'Muskan', 'muskan@gmail.com', '123456789', '2147483647'),
(2, 'Akanksha', 'akankshagmail.com', 'abc@123', '2147483647'),
(3, 'Anisha Kumari', 'anisha@gmail.com', '24680', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `event_result`
--

CREATE TABLE `event_result` (
  `event_name` varchar(255) NOT NULL,
  `winner1_id_b` int(11) NOT NULL,
  `winner2_id_b` int(11) NOT NULL,
  `winner3_id_b` int(11) NOT NULL,
  `winner1_id_g` int(11) NOT NULL,
  `winner2_id_g` int(11) NOT NULL,
  `winner3_id_g` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_result`
--

INSERT INTO `event_result` (`event_name`, `winner1_id_b`, `winner2_id_b`, `winner3_id_b`, `winner1_id_g`, `winner2_id_g`, `winner3_id_g`) VALUES
('100m Race', 1, 2, 3, 4, 7, 12),
('200m Race', 0, 0, 0, 0, 0, 0),
('400m Race', 0, 0, 0, 0, 0, 0),
('800m Race', 0, 0, 0, 0, 0, 0),
('1500m Race', 0, 0, 0, 0, 0, 0),
('Discus Throw', 0, 0, 0, 0, 0, 0),
('Hammer Throw', 0, 0, 0, 0, 0, 0),
('Javelin Throw', 0, 0, 0, 0, 0, 0),
('Shot put Throw', 0, 0, 0, 0, 0, 0),
('High Jump', 0, 0, 0, 0, 0, 0),
('Long Jump', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`post_id`, `post_title`, `content`, `admin_email`, `admin_name`) VALUES
(30, 'Yoga Competition', 'Hello everyone...\r\nThis time we will have a yoga competition for both boys and girls separately.So be ready to be part of this event.', 'akankshagmail.com', 'Akanksha'),
(31, 'Annual athletic meet', 'Hey guys...\r\nAnnual athletic meet is from 4/Feb to 8/Feb.\r\nHoping for great participation.', 'akankshagmail.com', 'Akanksha'),
(32, 'Annual athletic meet', 'Be ready for a new informal event : three leg race', 'akankshagmail.com', 'Akanksha'),
(33, 'Prize distribution', 'Prize distribution will be done on Tuesday', 'akankshagmail.com', 'Akanksha'),
(34, 'schedule for 100 meter race', 'Tomarrow will be 100 meter race at time 10:30 am.', 'akankshagmail.com', 'Akanksha');

-- --------------------------------------------------------

--
-- Table structure for table `registered_participant`
--

CREATE TABLE `registered_participant` (
  `user_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_participant`
--

INSERT INTO `registered_participant` (`user_id`, `event_name`, `gender`) VALUES
(6, '200m Race', 'Female'),
(6, 'Hammer Throw', 'Female'),
(6, '800m Race', 'Female'),
(6, 'Discuss Throw', 'Female'),
(5, 'Javelin Throw', 'Female'),
(5, '800m Race', 'Female'),
(5, 'Shotput Throw', 'Female'),
(5, '100m Race', 'Female'),
(7, 'Discus Throw', 'Male'),
(7, 'Long Jump', 'Male'),
(7, '400m Race', 'Male'),
(7, 'Javelin Throw', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `reg_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `course` text NOT NULL,
  `branch` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_ip`, `name`, `reg_no`, `email`, `password`, `gender`, `institute`, `course`, `branch`, `contact`, `image`) VALUES
(5, '', 'Muskan Verma', 20158080, 'muskan1194330@gmail.com', '789456123', 'Female', 'MNNIT', 'B.Tech./B.E.', 'Information Technology', '8090269547', 'img1485596610139.jpg'),
(6, '', 'Anisha Kumari', 20158069, 'anisha@gmail.com', '123456789', 'Female', 'MNNIT', 'B.Tech./B.E.', 'Information Technology', '5648792', '12022605_1908873722745456_7557286548455064609_o (1).jpg'),
(7, '', 'ABC', 23654892, 'abc@example.com', '123456789', 'Male', 'XYZ', 'B.Tech./B.E.', 'Information Technology', '1234567890', '12017624_1908874539412041_6978824953917289648_o.jpg'),
(8, '', 'megha', 20154545, 'megha@gmail.com', '12345', 'Female', 'MNNIT', 'B.Tech./B.E.', 'Information Technology', '4569875236', '12000855_1908873039412191_1543661503296876298_o.jpg'),
(9, '', 'sam', 20159865, 'sam@gmail.com', '12345', 'Male', 'MNNIT', 'B.Tech./B.E.', 'Electrical Engineering', '9632154789', '11058199_1908863249413170_8103242652442200723_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `UNIQUE` (`admin_email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `registered_participant`
--
ALTER TABLE `registered_participant`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `registered_participant`
--
ALTER TABLE `registered_participant`
  ADD CONSTRAINT `registered_participant_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
