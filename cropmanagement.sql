-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 07:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cropmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(26) NOT NULL,
  `admin_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'jabir', 'jab02', 'xxjab77'),
(2, 'mansur', 'sur991', 'uWu8'),
(3, 'zaman', 'zamank6', 'levelz'),
(4, 'jahanara', 'jahanara333', 'fffjahanara'),
(5, 'kuber', 'richDollar1', 'heavyfit22'),
(6, 'asma', 'lol888', 'goTeam34'),
(7, 'ohab', 'ohab', 'ohab');

-- --------------------------------------------------------

--
-- Table structure for table `cropbed`
--

CREATE TABLE `cropbed` (
  `cb_id` int(11) NOT NULL,
  `bed_no` int(11) NOT NULL,
  `crop_name` varchar(56) NOT NULL,
  `ph_level` decimal(2,1) NOT NULL,
  `n_level` mediumint(9) NOT NULL,
  `p_level` mediumint(9) NOT NULL,
  `k_level` mediumint(9) NOT NULL,
  `cb_temp` smallint(6) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cropbed`
--

INSERT INTO `cropbed` (`cb_id`, `bed_no`, `crop_name`, `ph_level`, `n_level`, `p_level`, `k_level`, `cb_temp`, `t_id`) VALUES
(1, 1, 'tomato', '6.6', 0, 0, 0, 20, 1),
(2, 2, 'vegitables', '7.5', 0, 0, 0, 20, 1),
(3, 3, 'corriender', '7.2', 0, 0, 0, 20, 1),
(4, 4, 'cabbage', '5.6', 0, 0, 0, 20, 2),
(5, 5, 'potato', '7.6', 0, 0, 0, 20, 2),
(6, 6, 'cabbage', '7.1', 0, 0, 0, 20, 2),
(11, 7, 'culliflower', '0.0', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_username` varchar(30) NOT NULL,
  `emp_password` varchar(30) NOT NULL,
  `emp_address` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_username`, `emp_password`, `emp_address`, `phone`) VALUES
(1, 'rejoan', 'rejj', 'rejj', 'Building A 111', '1313112'),
(2, 'kuash', 'kuash', 'kuash', 'Building A 112', '88110'),
(3, 'ohab', 'ohab', 'ohb', 'Building A 113', '77788'),
(4, 'bristi', 'bristi', 'brrr', '87 B Building D', '22222'),
(5, 'tanzila', 'tan', 'cos', 'east north block b ', '112'),
(6, 'mirza', 'mir', 'zaaza', 'hiashi, nippon building', '33331'),
(7, 'rozina', 'roz', 'ina', 'dhaka /  b ', '323232'),
(8, 'zahid', 'zahid', 'zahid', 'NULL', '344556'),
(9, 'uttam', 'uttam', 'uttam', 'golya', '888022'),
(10, 'joe biden', 'joe', 'jbiden', 'usa BPOA', '1221345'),
(11, 'gary', 'hopegary', 'garygary', 'garyhouse, dhaka', '111114'),
(12, 'spongebob', 'spongebob', 'squarepants', 'undersea,krabby', '333333'),
(13, 'naruto', 'naru', 'ramen', 'konohagakure', '888888'),
(14, 'goku', 'goku', 'perv', 'kamehameha', '456775'),
(15, 'embargo', 'lol', 'lol', 'bolck C ', '178909'),
(16, 'abdus salam', 'salam', 'salam', '789/A east west NS', '009000876'),
(17, 'Zannatul Ferdous', 'znf', 'znf', 'dfffffff', '019991111'),
(18, 'Jeff bezos', 'divorcey', 'jeff', 'usa', '911');

-- --------------------------------------------------------

--
-- Table structure for table `greenhouse`
--

CREATE TABLE `greenhouse` (
  `gh_no` int(11) NOT NULL,
  `gh_name` varchar(50) NOT NULL,
  `cb_count` int(11) NOT NULL,
  `fan_status` tinyint(1) NOT NULL,
  `light_status` tinyint(1) NOT NULL,
  `water_pump` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `greenhouse`
--

INSERT INTO `greenhouse` (`gh_no`, `gh_name`, `cb_count`, `fan_status`, `light_status`, `water_pump`) VALUES
(1, 'westbanglow', 24, 1, 1, 0),
(2, 'gbbanglow', 18, 1, 1, 0),
(3, 'arifghouse', 20, 1, 1, 1),
(4, 'ohabGhouse', 17, 0, 0, 0),
(6, 'Savar green house', 0, 0, 0, 0),
(7, 'dacca green house', 26, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timedate`
--

CREATE TABLE `timedate` (
  `t_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `t_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timedate`
--

INSERT INTO `timedate` (`t_id`, `t_date`, `t_time`) VALUES
(1, '2022-01-01', '10:50:00'),
(2, '2022-01-02', '07:10:00'),
(3, '2022-01-15', '17:15:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cropbed`
--
ALTER TABLE `cropbed`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `greenhouse`
--
ALTER TABLE `greenhouse`
  ADD PRIMARY KEY (`gh_no`);

--
-- Indexes for table `timedate`
--
ALTER TABLE `timedate`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cropbed`
--
ALTER TABLE `cropbed`
  MODIFY `cb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `greenhouse`
--
ALTER TABLE `greenhouse`
  MODIFY `gh_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
