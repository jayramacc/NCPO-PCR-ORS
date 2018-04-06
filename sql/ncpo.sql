-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 07:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` enum('male','female') DEFAULT 'male',
  `nickname` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `civil_status` enum('single','married','widowed') DEFAULT 'single',
  `complete_address` varchar(255) NOT NULL,
  `provincial_address` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `educational_attainment` enum('none','pre-elementary','elementary graduate','pre-highschool','highschool graduate','pre-college','no degree','associate degree','bachelors degree','masters degree','professional degree','professional degree','doctorate') DEFAULT 'none',
  `occuputation` varchar(255) NOT NULL,
  `complexion` enum('fair','light','dark') DEFAULT 'fair',
  `height` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `hair_color` enum('black','bald','brown','blonde','blue','browze','dark brown','green','gray','red','white') DEFAULT 'black',
  `eye_color` enum('black','brown','blue','gray','green') DEFAULT 'black',
  `body_size` enum('XXL','XL','XS','L','M','S') DEFAULT 'M',
  `distinguishing_marks` varchar(255) NOT NULL,
  `community_years` int(255) NOT NULL,
  `cellphone_no` varchar(255) NOT NULL,
  `tel_no` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `spouse_birth_place` varchar(255) NOT NULL,
  `cedula_date_issued` date NOT NULL,
  `cedula_no` varchar(255) NOT NULL,
  `purpose` enum('adoption requirement','airport requirement','apprenticeship requirement','armed forces of the philippines requirement','bank requirement','blaster requirement','bjmp requirement','burial requirement','business requirement','change of birthdate','change of gender from male to female','citom requirement','change of middle name','change of gender from female to male','change of name','civil service commission requirement','dmdp requirement','doh requirement','drivers license requirement','dswd requirement','employee abroad requirement','fiancee visa requirement','firearm license requirement','franchise requirement','globe requirement','gsis requirement','hospital requirement','jpic housing requirement','immigrant visa requirement','license to operate security agency requirement','license to deal firearms and community requirements','license to own and possess firearm requirement','license to purchase explosives requirements','loan requirement','local civil registrar requirement','local employment requirement','ltfrb uber requirement','lto deputation requirement','missionary requirement','mason requirement','ltrb grabcar requirement','m.lhuiller requirement','naturalization requirement','none-immigrant visa','on the job training','pag-ibig requirement','partnership visa','passport requirement','pdea requirement','permanent residency visa requirement','philhealth requirement','philippine military academy requirement','philippine retirement authory requirement','pldt requirement','pnp requirement','pnpa requirement','philippine statistics authority requirement','postal id requirement','prc requirement','prc requirement','probation requirement','r2 requirement','rcbc requirement','school requirement','seamans visa','security guard license requirement','social security system requirement','seamans book requirement','pantawid pamilyang pilipino program requirement','permit to carry firearms outside residense','student visa requirement','tesda requirement','tourist visa requirement','tour visa requirement','tour guide license requirement','working abroad requirement','working visa requirement','western union requirement','all other purpose not here mentioned') DEFAULT 'all other purpose not here mentioned',
  `private_key` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `activated` enum('true','false') DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `lname`, `fname`, `mname`, `suffix`, `gender`, `nickname`, `bdate`, `age`, `birth_place`, `civil_status`, `complete_address`, `provincial_address`, `religion`, `educational_attainment`, `occuputation`, `complexion`, `height`, `weight`, `hair_color`, `eye_color`, `body_size`, `distinguishing_marks`, `community_years`, `cellphone_no`, `tel_no`, `email_address`, `spouse_name`, `father_name`, `mother_name`, `spouse_birth_place`, `cedula_date_issued`, `cedula_no`, `purpose`, `private_key`, `photo`, `activated`) VALUES
(1, 'HHG', 'RQR', 'QEQEQ', 'ddadad', 'female', 'RR', '2018-04-26', 11, 'RRAWRA', 'married', '1212', 'AWRR', 'RARAR', 'elementary graduate', '121', 'light', 212121, 1212, 'green', 'brown', 'XL', '1212', 121, '1212121', ' 12121212', '2121@gmail.com', 'GDGSG', 'fawfaf', 'awfafafa', 'AFDADADAD', '2018-04-30', 'aafaf', 'airport requirement', 'jay', 'kim', 'false'),
(4, 'HHG', 'RQR', 'QEQEQ', 'ddadad', 'female', 'RR', '2018-04-26', 11, 'RRAWRA', 'married', '1212', 'AWRR', 'RARAR', 'elementary graduate', '121', '', 212121, 1212, 'green', 'brown', 'XL', '1212', 122, '1212121', ' 12121212', 'kijjfj@gmail.com', 'GDGSG', 'fawfaf', 'awfafafa', 'AFDADADAD', '2018-04-30', 'gffg', 'airport requirement', 'hg', 'kim', 'false'),
(12, 'Miranda', 'Edward', 'asd asdas', 'asdasdasdas', 'male', 'Ed', '2018-04-06', 15, 'dasdasdasdasdasda', 'single', 'asdasdasdas', 'asdasd', 'sdasdasd', 'associate degree', 'dasdada', 'fair', 124124, 1241, 'black', 'black', 'XXL', 'asdasdasd', 1212, '12412asda', '125', 'luisedward.miranda@gmail.com', 'asdasdasd', 'dasdasd', 'asdasdasd', 'sadasdas', '2018-04-24', 'asdasdasd', 'bjmp requirement', '5ffdcdda7dfc18af17ea4e18c9906c83', '1522962304Penguins.jpg', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `private_key` varchar(255) NOT NULL,
  `type` enum('apply','renew','verify') NOT NULL DEFAULT 'apply',
  `status` enum('seen','not_seen') DEFAULT 'not_seen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `private_key`, `type`, `status`) VALUES
(7, '5ffdcdda7dfc18af17ea4e18c9906c83', 'apply', 'not_seen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD UNIQUE KEY `private_key` (`private_key`),
  ADD UNIQUE KEY `cedula_no` (`cedula_no`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `private_key` (`private_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`private_key`) REFERENCES `applicants` (`private_key`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
