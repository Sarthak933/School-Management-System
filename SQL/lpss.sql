-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 01:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpss`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `message`) VALUES
(1, 'There Will Be holiday Tomorrow due to the death of mr.  Atal Bihari Vajpayi'),
(2, 'There Will Be holiday Tomorrow '),
(4, 'There Will Be holiday Tomorrow '),
(6, 'There Will Be holiday Tomorrow due to the death of mr.  Atal Bihari Vajpayi'),
(7, 'There Will Be holiday Tomorrow '),
(8, 'there is no holiday tomorrow'),
(9, 'for class 12th there would be holiday tommorow'),
(10, 'There Will Be holiday Tomorrow '),
(11, 'there is no holiday tomorrow'),
(12, 'There Will Be holiday Tomorrow '),
(13, 'There Will Be holiday Tomorrow due to the death of mr.  Atal Bihari Vajpayi'),
(14, 'There Will Be holiday Tomorrow due to the death of mr.  Atal Bihari Vajpayi'),
(15, 'there is no holiday tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'hello', '2019-01-01 00:00:00', '2019-01-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `mname` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `class` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fname`, `mname`, `phone`, `dob`, `address`, `class`, `gender`) VALUES
(1, 'Mudit Giria', 'MR. Prakash Kumar Giria', 'MRS. Anita Devi Giria', '7023417685', '2001-09-24', 'I-32 Hathinada Kankroli', '12', 'Male'),
(2, 'Gourav Paliwal', 'Mr. Jagdish Ji Paliwal', 'MRS. Daya devi paliwal', '7891939009', '2001-02-15', 'Dhoinda', '12', 'Male'),
(3, 'Devang Mishra', 'Vinod Kumar Mishra', 'Rajni Devi Mishra', '9079878493', '2001-08-27', 'behind showroom glamour', '12', 'Male'),
(4, 'Devendra Singh Chundawat', 'Mr. Bhagwat Singh Chundawat', 'Mrs. Meera devi Chundawat', '9462354959', '2001-01-21', 'JK circle', '12', 'Male'),
(5, 'Jatin Singh Chouhan', 'Mr. Puran Singh Chouhan', 'Mrs. Mitu Chouhan', '7425882959', '2001-05-12', 'Th.kalakhedi', '12', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `doa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `dob`, `doa`) VALUES
(1, 'Mr. Sanjay Avisheka ', 'Principle', '1967-04-17', '2015-04-06'),
(2, 'Mr. dinesh kumar pandey', 'PGT(Hindi)', '1968-01-21', '1997-08-13'),
(3, 'Mr.C.S sharma', 'PGT(Physics)', '1982-01-30', '2013-11-06'),
(4, 'MRS. Pooja Charan', 'PGT(English)', '1979-02-07', '2017-06-19'),
(5, 'Mr.Ajit Singh Rathore', 'PGT(Physical Edu.)', '1973-05-04', '2017-03-10'),
(6, 'MR. Shiv Singh Sisodia', 'TGT(Computer Science)', '1982-07-05', '2012-07-09'),
(7, 'Dr. Praveen Kumar Choubisa', 'PGT(Economics)', '1973-10-24', '2014-07-09'),
(8, 'Mr. Bhuvnesh Sharma', 'PGT(Commerce)', '1974-01-10', '2014-08-02'),
(9, 'Dr. Pankaj Dave', 'PGT(Business Studies) ', '1978-07-12', '2017-06-19'),
(10, 'Mr. Mitesh Joshi', 'TGT(Science)', '1983-11-18', '2013-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'mudit', 'giria', 'giriamudit84@gmail.com', 'mudit', '$2y$10$RRNUdlRwJDqBqoee0bCZM.VeYj7IIcijP3xYB.2hoFPgxn3EI7fVC'),
(8, 'common', 'common', 'common@gmail.com', 'admin', '$2y$10$OlVnZgMP7cDvytahMz90VOEQKI07PIL9Yj5389dR/RSz/wp.RpQ/S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
