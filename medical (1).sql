-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 06:51 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

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
(2, 'hfjkcx', 'cxvnc', 'Male', '6457473873', 'hjxvbjhsmdxb', 'me', 'ab86a1e1ef70dff97959067b723c5c24', 'images/IMG-20160423-WA0000.jpg');

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
(2, 'Charles', 'Opoku-Darko', 'Male', 'charlesopokudarko@gmail.com', 'charles', 'a5410ee37744c574ba5790034ea08f79', 'images/IMG-20160927-WA0050.jpg');

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
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profile` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `f_name`, `surname`, `gender`, `email`, `username`, `password`, `profile`) VALUES
(1, 'Adwoa', 'Oppong', '', 'adwoaoppong@gmail.com', 'adwoa', '646b612f83affdb5cd95fcb78980b151', ''),
(2, 'Bernard', 'Gyamfi', '', 'bernardadugyamfi@gmail.com', 'bernard', '78d6810e1299959f3a8db157045aa926', ''),
(3, 'rex', 'asare', 'Male', 'rex@gmail.com', 'rex', '6b4023d367b91c97f19597c4069337d3', 'images/IMG-20160926-WA0040.jpg'),
(4, 'Gracious', 'Oppong-Poku', 'Male', 'gracious@gmail.com', 'gracious', '4129cf424906365ed115c6f3875fa43b', 'images/IMG-20160801-WA0041.jpg');

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
  `surname` varchar(30) NOT NULL,
  `other` varchar(30) NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `password`, `reference`, `surname`, `other`, `year`, `gender`, `pnumber`, `email`, `paddress`, `profile`) VALUES
(1, 'kasante.cos', '9e925e9341b490bfd3b4c4ca3b0c1ef2', '20247182', 'Asante', 'Kwame', '4', 'male', '0243997856', 'kwameasante@gmail.com', 'p.o.box 1012 kumasi', ''),
(2, 'kpoku.cos', '61348d9e207fdbaab54b90333b4c2edb', '71425368', 'kofi', 'poku', '400', 'M', '02419866', 'kofipoku@gmai.com', 'p.o. box s.e 1012 suame', ''),
(3, 'amanu.cos', 'e292b1d68c8b480c49074ff1b6e266b8', '20347658', 'ama', 'manu', '100', 'F', '1234567890', 'amamanu@gmail.com', 'p.o. box 10 knust', ''),
(4, 'ffrimpong', '83e4a96aed96436c621b9809e258b309', '12345678', 'frimpong', 'fish', '400', 'M', '0265517050', 'fish@gmai.com', 'p.o. box 100 knust', ''),
(5, 'codarko.cos', 'a5410ee37744c574ba5790034ea08f79', '13677461', 'opoku-darko', 'charles', '400', 'M', '0501367746', 'charlesopokudarko@gmail.com', 'p.o. box 234 tech', ''),
(6, 'jkknj', '051a9911de7b5bbc610b76f4eda834a0', 'j', 'khrkf', 'jnjn,m', 'j', 'F', 'kkl', 'jknj', 'k', ''),
(7, 'kmanu.cos', '61348d9e207fdbaab54b90333b4c2edb', '56824117', 'kofi', 'manu', '300', 'M', '0241658932', 'emai|@email.com', 'p.o.box 1012 adum', 'images/IMG-20170204-WA0014.jpg'),
(8, 'claud.cos', '81eaa8c3e06ae27f7dddc9c03f4d4675', '56783456', 'claudia', 'agyeiwaa', '400', 'F', '0501367752', 'claud@gmail.com', 'p.o. box 4040', 'images/IMG-20170205-WA0001.jpg'),
(9, 'safia.cos', '84979f2b6806c6e26643928d3196c811', '20347698', 'sylvia', 'afia', '200', 'F', '0209017642', 'sylvia@email.com', 'p.o box 110 tech', 'images/IMG-20170204-WA0014.jpg'),
(10, 'eboakye.cos', '00a809937eddc44521da9521269e75c6', '45', 'boakye', 'emma', '100', 'M', '1234567890', 'emma@email.com', 'p.o box 456 ahinsan', 'images/IMG-20160423-WA0000.jpg'),
(11, 'bgyamfi', '78d6810e1299959f3a8db157045aa926', '20', 'adu - gyamfi', 'bernard', '400', 'M', '0501377123', 'b@email.com', 'p.o box 1057 knust', 'images/IMG_20150905_123528.jpg'),
(12, 'jon', '9e925e9341b490bfd3b4c4ca3b0c1ef2', '29', 'jon', 'mensah', '100', 'M', '1234567890', 'jon@email.com', 'p.o.box 234 tech', 'images/IMG_20150409_171955.jpg'),
(13, 'rasare', '6b4023d367b91c97f19597c4069337d3', '4556756767', 'asare', 'rex', '566', 'M', '545', 'hdnjjkdsjk', 'hjhbjhb', 'images/IMG_20150409_172330.jpg'),
(14, 'evans', '29549b8791c11d20e7687837a374df84', '20000000', 'coffie', 'evans', '400', 'M', '050123569', 'coffie@email.com', 'p.o.box 45 kpon', 'images/IMG_20151028_095441.jpg'),
(15, 'hoya', '52a0623f6b9ad595edb0760abc6f770f', '7878887', 'hoya', 'hoya', '300', 'M', '55', 'hoya@email.com', 'kdkfkl', 'images/IMG_20150409_172043.jpg'),
(16, 'mike', '18126e7bd3f84b3f3e4df094def5b7de', '678', 'mike', 'me', '400', 'M', '85', 'mike@email.com', 'pmfmfk,', 'images/IMG_20151004_183145.jpg'),
(17, 'gabi', 'a0d499c751053663c611a32779a57104', '55656', 'gabi', 'gabi', '522', 'M', '5545', 'gabi@email.com', 'hjjh', 'images/IMG_20150322_052821.jpg'),
(18, 'him', '664d242a7528bf4230386c9ac1a437f8', '1234512345', 'hgjfkhgb', 'fdngkjfd', '400', 'M', '344567788990', 'dfghjkl', 'fnkm,', 'images/IMG-20160801-WA0027 - Copy.jpg'),
(19, 'ddsmnx,mz', '5d41402abc4b2a76b9719d911017c592', '456789099', 'usjmelw', 'dsfhniuejkhz', '560', 'M', 'dsjhxznckjsd', 'dsjxzhcnkudsj', 'kjsdhxnukjcs', 'images/IMG-20160801-WA0027.jpg'),
(20, 'eva', '14bd76e02198410c078ab65227ea0794', '50135007', 'Mensah', 'Eva', '400', 'F', '050135007', 'evamensah@gmail.com', 'P.O. Box 3456 KNUST', 'images/IMG-20160801-WA0034.jpg'),
(21, 'gabi1', '2671e29a0d429c577bcf8a05a9e10328', '11111111', 'gabi5', 'gabi', '400', 'M', '5678', 'gabi@email.com', 'p.o.box 654', 'images/IMG-20160801-WA0034.jpg'),
(22, 'claud', '81eaa8c3e06ae27f7dddc9c03f4d4675', '66666666', 'Claudia', 'Anna', '400', 'Female', '0271326789', 'claud@gmail.com', 'P.O. Box S.E 2020', 'images/IMG-20160424-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `id` int(11) NOT NULL,
  `body_temp` varchar(8) NOT NULL,
  `pulse_rate` varchar(8) NOT NULL,
  `respiration_rate` varchar(8) NOT NULL,
  `systolic` varchar(8) NOT NULL,
  `diastolic` varchar(8) NOT NULL,
  `username` varchar(25) NOT NULL,
  `datee` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`id`, `body_temp`, `pulse_rate`, `respiration_rate`, `systolic`, `diastolic`, `username`, `datee`) VALUES
(9, '36.5C', '60b/m', '70b/m', '140mmHg', '90mmHg', 'evans', '0000-00-00 00:00:00'),
(10, '36.5C', '60b/m', '70b/m', '140mmHg', '90mmHg', 'evans', '0000-00-00 00:00:00'),
(18, '34', '56', '78', '87', '40', 'gabi', '0000-00-00 00:00:00'),
(19, '67', '67', '67', '67', '67', 'evans', '0000-00-00 00:00:00'),
(20, '56', '56', '56', '56', '56', 'rasare', '0000-00-00 00:00:00'),
(21, '56', '56', '56', '56', '56', 'rasare', '0000-00-00 00:00:00'),
(22, '56', '56', '56', '56', '56', 'rasare', '0000-00-00 00:00:00'),
(23, '78', '67', '48', '110', '67', 'evans', '0000-00-00 00:00:00'),
(24, '67', '67', '89', '90', '67', 'rasare', '0000-00-00 00:00:00'),
(25, '11', '11', '11', '11', '11', 'evans', '0000-00-00 00:00:00'),
(26, '10', '10', '10', '10', '10', 'evans', '0000-00-00 00:00:00'),
(27, '10', '10', '10', '10', '10', 'evans', '2017-04-02 00:00:00'),
(28, '10', '10', '10', '10', '10', 'evans', '2017-04-02 00:00:00'),
(29, '1', '1', '1', '1', '1', 'eva', '2017-04-02 00:00:00'),
(30, '2', '2', '2', '2', '2', 'jon', '2017-04-02 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
