-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 03:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profile` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `surname`, `gender`, `pnumber`, `email`, `username`, `password`, `profile`) VALUES
(1, 'Frimpong', 'Twum', 'Male', '0243997856', 'ftwum@gmail.com', 'castro', '848ffd503f98d2368d47abceb4821465', ''),
(2, 'hfjkcx', 'cxvnc', 'Male', '6457473873', 'hjxvbjhsmdxb', 'me', 'ab86a1e1ef70dff97959067b723c5c24', 'images/IMG-20160423-WA0000.jpg'),
(3, 'Gabby', 'Asante', 'Male', '5794965015', 'Gabbycando5000@Gmail.com', 'Gabby', 'a9f05641de6423d839c9f4a164fcce7d', 'images/IMG_2493.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Cid` int(200) NOT NULL,
  `Cuid` int(254) NOT NULL COMMENT 'this is a foreign key that references to the users table',
  `CDid` int(254) NOT NULL COMMENT 'this is a foreign key that references to the doctors table',
  `message` text NOT NULL,
  `sender` varchar(30) NOT NULL COMMENT 'When the value is 1 then it was sent by the doctor else it was sent by the patient'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Cid`, `Cuid`, `CDid`, `message`, `sender`) VALUES
(1, 12, 1, 'this is for testing, how are you feeling today, hope you are doing just fine.', ''),
(2, 13, 2, 'another form of testing', ''),
(3, 13, 2, 'this should work', '1'),
(4, 12, 3, 'this is finally working', '1'),
(5, 13, 4, 'how are you feeling', '1'),
(6, 13, 5, 'it\'s working', '1'),
(7, 12, 2, 'nlknlsk', '1'),
(8, 12, 2, 'nskjen', '1'),
(9, 12, 2, 'hi', '1'),
(10, 12, 2, 'how are you doing', '1'),
(11, 13, 2, 'Gabby and eben', '1');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease`) VALUES
(1, 'ebola'),
(2, 'cholera'),
(3, 'malaria'),
(4, 'tuberculosis'),
(5, 'diarrhea'),
(6, 'typhoid');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(3) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(70) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profile` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `f_name`, `surname`, `gender`, `email`, `username`, `password`, `profile`) VALUES
(1, 'Evans', 'Coffie', 'Male', 'evanscoffie@gmail.com', 'evans', '29549b8791c11d20e7687837a374df84', 'images/IMG-20160801-WA0060.jpg'),
(2, 'Charles', 'Opoku-Darko', 'Male', 'charlesopokudarko@gmail.com', 'charles', 'a5410ee37744c574ba5790034ea08f79', 'images/IMG-20160927-WA0050.jpg'),
(3, 'Gabriel', 'Asate', 'Male', 'Gabbycando5000@Gmail.com', 'GudDoc', '81dc9bdb52d04dc20036dbd8313ed055', 'images/IMG_2262.JPG'),
(4, 'Daniel', 'Azati', 'Male', 'Danny125@yahoo.com', 'Dan1', 'f811b096c76d82bed63ffcc60e52ced9', 'images/â€ª+233 27 544 7435â€¬ 20150519_133314.jpg'),
(5, 'man', 'Gabby', 'Male', 'Asanteg59@yahoo.com', 'ManGabby', '39c63ddb96a31b9610cd976b896ad4f0', 'images/IMG_2497.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `dsymptom`
--

CREATE TABLE `dsymptom` (
  `disease_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsymptom`
--

INSERT INTO `dsymptom` (`disease_id`, `symptom_id`, `description`) VALUES
(1, 1, NULL),
(1, 2, NULL),
(1, 3, NULL),
(1, 4, NULL),
(1, 5, NULL),
(1, 6, NULL),
(1, 7, NULL),
(1, 8, NULL),
(1, 9, NULL),
(1, 10, NULL),
(2, 1, NULL),
(2, 2, NULL),
(2, 3, NULL),
(2, 11, NULL),
(3, 12, NULL),
(3, 13, NULL),
(3, 14, NULL),
(3, 1, NULL),
(3, 2, NULL),
(3, 3, NULL),
(3, 15, NULL),
(4, 7, NULL),
(4, 16, NULL),
(4, 4, NULL),
(4, 9, NULL),
(4, 17, NULL),
(4, 18, NULL),
(4, 13, NULL),
(4, 19, NULL),
(5, 20, NULL),
(5, 21, NULL),
(5, 1, NULL),
(5, 2, NULL),
(5, 22, NULL),
(6, 23, NULL),
(6, 21, NULL),
(6, 14, NULL),
(6, 27, NULL),
(6, 18, NULL),
(6, 24, NULL),
(6, 25, NULL),
(6, 3, NULL),
(6, 26, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nurse_id` int(3) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pnumber` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profile` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `f_name`, `surname`, `gender`, `pnumber`, `email`, `paddress`, `username`, `password`, `profile`) VALUES
(1, 'Adwoa', 'Oppong', '', 0, 'adwoaoppong@gmail.com', '', 'adwoa', '646b612f83affdb5cd95fcb78980b151', ''),
(2, 'Bernard', 'Gyamfi', '', 0, 'bernardadugyamfi@gmail.com', '', 'bernard', '78d6810e1299959f3a8db157045aa926', ''),
(3, 'rex', 'asare', 'Male', 0, 'rex@gmail.com', '', 'rex', '6b4023d367b91c97f19597c4069337d3', 'images/IMG-20160926-WA0040.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptom_id` int(11) NOT NULL,
  `symptom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptom_id`, `symptom`) VALUES
(1, 'nausea'),
(2, 'vomiting'),
(3, 'diarrhea'),
(4, 'chest-pain'),
(5, 'raised-rash'),
(6, 'red-eyes'),
(7, 'coughing'),
(8, 'stomach-pain'),
(9, 'weight-loss'),
(10, 'bleeding'),
(11, 'dehydration'),
(12, 'high-fever'),
(13, 'sweating'),
(14, 'headache'),
(15, 'anaemia'),
(16, 'coughing-blood'),
(17, 'fatigue'),
(18, 'fever'),
(19, 'chills'),
(20, 'abdominal-cramp'),
(21, 'abdominal-pains'),
(22, 'watery-faeces'),
(23, 'poor-appetite'),
(24, 'lethargy'),
(25, 'constipation'),
(26, 'intestinal-bleeding'),
(27, 'general-pains');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `reference` varchar(10) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `other` varchar(30) DEFAULT NULL,
  `year` varchar(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pnumber` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `reference`, `Fname`, `surname`, `other`, `year`, `gender`, `pnumber`, `email`, `paddress`, `profile`) VALUES
(12, 'Esi', '36dbc2a12d8162070240f8d586b6726d', '2345345', 'Esi', 'Agartha', 'stubborn', '200', 'Female', '020134567', 'AgarthaEsi@gmail.com', 'P.O.Box kn 1132', 'images/â€ª+233 27 544 7435â€¬ 20150519_133314.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `Vid` int(100) NOT NULL,
  `body_temp` varchar(8) NOT NULL,
  `pulse_rate` varchar(8) NOT NULL,
  `respiration_rate` varchar(8) NOT NULL,
  `systolic` varchar(8) NOT NULL,
  `diastolic` varchar(8) NOT NULL,
  `datee` datetime NOT NULL,
  `Uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`Vid`, `body_temp`, `pulse_rate`, `respiration_rate`, `systolic`, `diastolic`, `datee`, `Uid`) VALUES
(1, '54', '23', '32', '23', '32', '2017-04-23 04:23:00', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Cid`),
  ADD KEY `Cuid` (`Cuid`),
  ADD KEY `CDid` (`CDid`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptom_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD PRIMARY KEY (`Vid`),
  ADD KEY `vitalsindex` (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Cid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `Vid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `vitals`
--
ALTER TABLE `vitals`
  ADD CONSTRAINT `vitals_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
