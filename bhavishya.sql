-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 07:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhavishya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `staffname` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `experience` int(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `staffname`, `Subject`, `experience`, `Description`, `Photo`) VALUES
(49, 'ssssss', 'ssasas', 66, 'aasdaxzxczxczx', 'about-slide-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `SSC` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Admission` varchar(255) NOT NULL,
  `mpc` varchar(255) NOT NULL,
  `Bipc` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `surname`, `SSC`, `date`, `adhar`, `gender`, `Admission`, `mpc`, `Bipc`, `city`, `state`, `zipcode`, `mobile`, `father`, `mother`, `occupation`, `address`) VALUES
(1, 'K. Mythili Sri', 'Sri', '2147483647', '0', '2147483647', '1', '1', '1', '1', 'Vijayawada', 'Andhra Pradesh', '520015', '2147483647', 'murthy', 'lakshmi', 'XASZdx', ' asdsad'),
(2, 'K. Mythili Sri', 'Sri', '2147483647', '0', '4745645', 'Male', 'Resedential', 'IIT/AC', '2', 'Vijayawada', 'Andhra Pradesh', '520015', '2147483647', 'adsasd', 'asdasd', 'sdfdsf', 'sadasdsadsa'),
(3, 'sxdfdfsdsf', 'Sri', '678768', '0', '85675675678456456', 'Male', 'Days', 'JEE Mains Non A/C', 'NEET A/C', 'Vijayawada', 'Andhra Pradesh', '520015', '8125370426', 'murthy', 'asdasd', 'sdfdsf', 'fghfghfgh'),
(13, 'sai', 'pandiripalli', '12335', '04-29-2017', '856756756785678', 'Male', 'Resedential', 'IIT/AC', 'AIIMS/AC', 'Vijayawada', 'Andhra Pradesh', '521108', '8125370426', 'murthy', 'lakshmi', 'sdfdsf', 'asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `CampusName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `CampusName`, `Address`, `Email`, `MobileNumber`) VALUES
(2, 'Girls Campus', 'Anjanadri Bhavan, Beside Sri Sakthi Pelli Pandiri Vedika Line, Kolla Farm Road,Prasadam Padu,\r\nVijayawada', 'Ganipisetti.Che@Gmail.Com', '+91 95819 44007'),
(4, 'dfgdf', 'D.no. 43-13!-8, singhnagar, vijayawada', 'cvbgfsdasdasdsa', 'D.no. 43-13!-8, singhnagar, vijayawada'),
(12, 'sfasf', 'sdfasfaffb s s', 'dsgaga@gma.', 'sdgadg'),
(13, 'sdgadsg', 'dsgadg', 'adsgadg', 'dgsagasdg'),
(17, 'sda', 'dsfgadg', 'gdag', 'gdsagadg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `Image`) VALUES
(1, '491537.jpg'),
(2, '662905.jpg'),
(3, '673758.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'sqube', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `File` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `File`, `Description`) VALUES
(4, '1.jpg', '12345zxczx'),
(8, 'hotel management system project report.DOC', ''),
(9, 'hotel management system project report.DOC', ''),
(10, 'hotel management system project report.DOC', ''),
(11, 'Digital Marketing.docx', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, 'Digital Marketing.docx', ''),
(18, '', ''),
(19, 'Copy of EMPLOYEE  DAILY  STATUS new.xlsx', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `date`, `adhar`) VALUES
(1, '10-10-10', 'Doe'),
(2, 'Sdate', ''),
(3, '03/22/2017', '4745645');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
