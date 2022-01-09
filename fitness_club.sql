-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 11:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_contact` varchar(10) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_picture` varchar(100) NOT NULL,
  `admin_cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_contact`, `admin_password`, `admin_picture`, `admin_cdate`) VALUES
(1, 'admin', 'kha@gmail.com', '123123123', 'admin', 'FB_IMG_1620214218021.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_validity` int(11) NOT NULL,
  `package_status` enum('1','0') NOT NULL DEFAULT '1',
  `package_cdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_price`, `package_validity`, `package_status`, `package_cdate`) VALUES
(1, 'new package', 550, 30, '0', ''),
(2, 'test package', 600, 90, '1', '13/08/20'),
(4, 'Goldan', 500, 30, '1', '08/25/2020'),
(5, 'Goldan', 500, 30, '1', '08/25/2020'),
(6, 'Nini', 700, 30, '0', '08/25/2020'),
(7, 'Silver', 500, 360, '1', '09/06/2020'),
(8, 'Yello Family', 9000, 90, '1', '09/06/2020'),
(9, 'my package', 1000, 90, '1', '01/06/2222'),
(13, 'pack cua tui', 100, 30, '1', '01/08/2222'),
(14, 'new package', 500, 90, '1', '01/08/2222'),
(15, 'new package', 500, 30, '1', '01/08/2222'),
(16, 'the pack5', 300, 60, '1', '01/09/2222');

-- --------------------------------------------------------

--
-- Table structure for table `timeslote`
--

CREATE TABLE `timeslote` (
  `timeslote_id` int(11) NOT NULL,
  `timeslote_time` varchar(11) NOT NULL,
  `timeslote_cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslote`
--

INSERT INTO `timeslote` (`timeslote_id`, `timeslote_time`, `timeslote_cdate`) VALUES
(8, '10am', '01/06/2022'),
(9, '13', '01/09/2022'),
(10, '17', '01/09/2022'),
(12, 'aa', '01/09/2022');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `trainer_fname` varchar(100) NOT NULL,
  `trainer_lname` varchar(100) NOT NULL,
  `trainer_email` varchar(100) NOT NULL,
  `trainer_contact` int(11) NOT NULL,
  `trainer_gender` varchar(100) NOT NULL,
  `trainer_timeslot` text NOT NULL,
  `trainer_address` varchar(100) NOT NULL,
  `trainer_cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_fname`, `trainer_lname`, `trainer_email`, `trainer_contact`, `trainer_gender`, `trainer_timeslot`, `trainer_address`, `trainer_cdate`) VALUES
(1, 'Ragju', 'Shyam', 'raghu@gmail.com', 2147483647, 'Female', '1', 'adsasd', '08/13/2020'),
(3, 'Balu', 'Nelwade', 'balu@gmail.com', 844848444, 'Female', '1', '', ''),
(4, 'Riya tess', 'Sharama', 'riya@mgail.com', 2147483647, 'Male', '8', '', '09/06/2020'),
(5, 'Rohit', 'Rawut', 'rohit@gamil.com', 2147483647, 'Male', '10', 'Nagpur', '09/06/2020'),
(6, 'john ', 'weed', 'john@gmail.com', 91239192, 'Male', '12', 'asdasdasdad', '01/06/2022'),
(10, 'kha', 'nguyen', 'kha@gmail.com', 9885353, 'Male', '10', 'quan 8, tp hcm', '01/09/2022'),
(11, 'Rio', 'Ferdinan', 'k@gmail.com.vn', 1231231231, 'Male', '9', '123123123', '01/09/2022'),
(12, 'chris', 'heria', 'chris@gmail.com', 1233411, 'Female', '9', 'us, california', '01/09/2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_contact` int(11) NOT NULL,
  `user_timeslote` int(11) NOT NULL,
  `user_trainer` int(11) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_status` enum('1','0') NOT NULL,
  `user_dob` varchar(100) NOT NULL,
  `user_joindate` varchar(200) NOT NULL,
  `user_cdate` varchar(100) NOT NULL,
  `user_package` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_gender`, `user_contact`, `user_timeslote`, `user_trainer`, `user_address`, `user_status`, `user_dob`, `user_joindate`, `user_cdate`, `user_package`) VALUES
(15, 'truong kkk', 'kha zzzz', 'khazz@gmail.com', 'Male', 123123, 8, 5, 'test 123', '1', '01/03/1999', '01/07/2022', '01/07/2022', 2),
(16, 'thanh  zzz', 'tungzzz', 'tung@gmail.com', 'Female', 1231212415, 8, 5, 'test 123zzz', '1', '09/04/2000', '01/07/2022', '01/07/2022', 5),
(17, 'thanh ', 'tung', 'tung@gmail.com', 'Male', 1231212415, 8, 6, 'test 123', '0', '09/04/2000', '01/07/2022', '01/07/2022', 2),
(18, 'thanh ', 'tung', 'tung@gmail.com', 'Male', 1231212415, 8, 6, 'test 123', '0', '09/04/2000', '01/07/2022', '01/07/2022', 2),
(19, 'yasuo', 'quan 8', 'ys@gmail.com', 'Male', 81237812, 8, 6, 'uk 11', '1', '12/12/1998', '01/08/2022', '01/08/2022', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `timeslote`
--
ALTER TABLE `timeslote`
  ADD PRIMARY KEY (`timeslote_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `timeslote`
--
ALTER TABLE `timeslote`
  MODIFY `timeslote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
