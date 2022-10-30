-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2021 at 12:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelphplab`
--

-- --------------------------------------------------------

--
-- Table structure for table `billaddrtb`
--

DROP TABLE IF EXISTS `billaddrtb`;
CREATE TABLE IF NOT EXISTS `billaddrtb` (
  `billAddid` int(11) NOT NULL AUTO_INCREMENT,
  `billAddr` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(90) NOT NULL,
  `zipCode` varchar(90) NOT NULL,
  PRIMARY KEY (`billAddid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billaddrtb`
--

INSERT INTO `billaddrtb` (`billAddid`, `billAddr`, `city`, `state`, `zipCode`) VALUES
(1, '9 w Knollbrook Lane', 'Painted Post', 'NY', '14830'),
(2, '10 Upper College Drive', 'Corning', 'NY', '14830'),
(6, '10 Upper College Drive', 'Alfred', 'NY', '14802');

-- --------------------------------------------------------

--
-- Table structure for table `billinfo`
--

DROP TABLE IF EXISTS `billinfo`;
CREATE TABLE IF NOT EXISTS `billinfo` (
  `BILLID` int(11) NOT NULL AUTO_INCREMENT,
  `cardName` varchar(50) NOT NULL,
  `cardType` varchar(70) NOT NULL,
  `CardNum` varchar(80) NOT NULL,
  `expirationDate` varchar(40) NOT NULL,
  PRIMARY KEY (`BILLID`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billinfo`
--

INSERT INTO `billinfo` (`BILLID`, `cardName`, `cardType`, `CardNum`, `expirationDate`) VALUES
(1, 'Joyce Chen', 'Debit Card', '', '11/24'),
(55, 'Hong Liu', 'Credit Card', '8547564736452431', '11/25'),
(56, 'Visa', 'Visa Card', '1232131', '10/21'),
(57, 'Joyce Chen', 'Debit Card', '7584456374652431', '11/26'),
(58, 'Jimmy Neutron', 'Visa Card', '837434253423421', '12/24'),
(59, 'Joyce Chen', 'Debit Card', '2873456734654532', '12/24'),
(60, 'Joyce Chen', 'Credit Card', '4586976845762475', '11/24'),
(61, 'Joyce Chen', 'Debit Card', '4586976845762475', '11/25'),
(62, 'Joyce Chen', 'Credit Card', '4586976845762475', '11/24'),
(63, 'Evan Enke', 'Debit Card', '48575674654325342', '11/24'),
(64, 'Evan Enke', 'Credit Card', '1345645376548769', '11/24'),
(65, 'Evan Enke', 'Credit Card', '1345645376548769', '11/24'),
(66, 'Evan Enke', 'Credit Card', '1345645376548769', '11/24'),
(67, 'Joyce Chen', 'Visa Card', '12345678', '11/25'),
(68, 'Hong Liu', 'Credit Card', '384720394720', '11/24'),
(69, 'Hong Liu', 'Credit Card', '384720394720', '11/24'),
(70, 'Hong Liu', 'Credit Card', '384720394720', '11/24'),
(71, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(72, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(73, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(74, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(75, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(76, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(77, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(78, 'Hong Liu', 'Debit Card', '3982934820394', '11/24'),
(79, 'Hong Liu', 'Credit Card', '8789768657588', '12/124'),
(80, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(81, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(82, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(83, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(84, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(85, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(86, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(87, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(88, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(89, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(90, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(91, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(92, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(93, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(94, 'Hong Liu', 'Credit Card', '8789768657588', '12/24'),
(95, 'Hong Liu', 'Visa Card', '87987968764657654', '11/24');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

DROP TABLE IF EXISTS `reserve`;
CREATE TABLE IF NOT EXISTS `reserve` (
  `HotelD` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date NOT NULL,
  `Enddate` date NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Hotel` varchar(50) NOT NULL,
  `RoomCost` varchar(100) NOT NULL,
  `GuestNum` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ConfirmEmail` varchar(100) NOT NULL,
  `PhoneNum` varchar(40) NOT NULL,
  PRIMARY KEY (`HotelD`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`HotelD`, `startDate`, `Enddate`, `Location`, `Hotel`, `RoomCost`, `GuestNum`, `FirstName`, `LastName`, `Email`, `ConfirmEmail`, `PhoneNum`) VALUES
(97, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(96, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(95, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(94, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(93, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(92, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(91, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(90, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(89, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(88, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(87, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(86, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(85, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(84, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(83, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(82, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(81, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(80, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(79, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(78, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(77, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(76, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(75, '2021-10-05', '2021-10-10', 'Montpelier, VT', 'Hyatt', '120', '5', 'Hong', 'Liu', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(74, '2021-10-19', '2021-10-26', 'Manhanttan, NY', 'Hyatt', '120', '4', 'Jacqueline', 'Chen', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(73, '2021-10-19', '2021-10-26', 'Manhanttan, NY', 'Hyatt', '120', '4', 'Jacqueline', 'Chen', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(72, '2021-10-19', '2021-10-26', 'Manhanttan, NY', 'Hyatt', '120', '4', 'Jacqueline', 'Chen', 'nwokecm@alfredstate.edu', 'nwokecm@alfredstate.edu', '6074389426'),
(71, '2021-10-19', '2021-10-29', 'Manhanttan, NY', 'Best Western', '120', '1', 'Heather', 'Novotny', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '16077343929'),
(70, '2021-10-26', '2021-10-27', 'Manhanttan, NY', 'Best Western', '120', '4', 'Evan', 'Enke', 'Chenj1@qq.com', 'Chenj1@qq.com', '6072356453'),
(69, '2021-10-26', '2021-10-27', 'Manhanttan, NY', 'Best Western', '120', '4', 'Evan', 'Enke', 'Chenj1@qq.com', 'Chenj1@qq.com', '6072356453'),
(68, '2021-10-20', '2021-10-20', 'Los Angeles, CA', 'Hyatt', '120', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(67, '2021-10-19', '2021-10-25', 'Montpelier, VT', 'Hampton Inn', '140', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(66, '2021-10-19', '2021-10-25', 'Montpelier, VT', 'Hampton Inn', '140', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(65, '2021-10-20', '2021-11-03', 'Los Angeles, CA', 'Best Western', '120', '5', 'Smashing', 'Magazine', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6077343929'),
(64, '2021-10-21', '2021-10-28', 'Montpelier, VT', 'Hyatt', '120', '5', 'Heather', 'Novotny', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6077343929'),
(63, '2021-10-21', '2021-10-27', 'Los Angeles, CA', 'Hyatt', '120', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(62, '2021-10-21', '2021-10-27', 'Los Angeles, CA', 'Hyatt', '120', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(58, '2021-10-15', '2021-10-28', 'ssssss', 'Econo Louge', '160', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(59, '2021-10-15', '2021-10-28', 'ssssss', 'Econo Louge', '160', '5', 'Kenneth', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6073685399'),
(60, '2021-10-21', '2021-10-28', 'Alfred, NY', 'Econo Louge', '140', '2', 'Smashing', 'Magazine', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6077343929'),
(61, '2021-10-14', '2021-10-22', 'Montpelier, VT', 'Econo Louge', '140', '5', 'Joyce', 'Chen', 'Chenj1@alfredstate.edu', 'Chenj1@alfredstate.edu', '6074289426'),
(98, '2021-10-12', '2021-10-21', 'Montpelier, VT', 'Hyatt', '120', '4', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426'),
(99, '2021-11-16', '2021-11-30', 'Montpelier, VT', 'Hilton Garden', '140', '3', 'Hong', 'Liu', 'swat6@alfred.edu', 'swat6@alfred.edu', '6074389426');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `CommentsID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(60) NOT NULL,
  `Hotel` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Comments` varchar(70) NOT NULL,
  PRIMARY KEY (`CommentsID`)
) ENGINE=MyISAM AUTO_INCREMENT=422 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`CommentsID`, `userName`, `Hotel`, `Location`, `Comments`) VALUES
(363, 'joyce66123', 'Econo Louge', 'Seattle, NY', 'Awsome food'),
(362, 'asda', 'Econo Louge', 'Miami, FL', 'I love the environment'),
(359, 'Coco', 'Hyatt', 'Los Angeles, CA', 'I love the design of the room'),
(340, 'kwd', 'Holiday Inn', 'Scranton, PA', 'The swimming pool is really good to use'),
(339, 'james223', 'Hyatt', 'Manhanttan, NY', 'Cool room'),
(395, 'qw', 'Hytta Hotel', 'Miami, FL', 'I love the pool'),
(421, 'asda', 'Hytta', 'Miami, FL', 'I love the bed');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `signupID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(60) NOT NULL,
  `psw` varchar(60) NOT NULL,
  `ConfirmPSW` varchar(60) NOT NULL,
  `Email` varchar(70) NOT NULL,
  PRIMARY KEY (`signupID`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signupID`, `userName`, `psw`, `ConfirmPSW`, `Email`) VALUES
(6, 'joyce66123', 'JO2', 'JO2', 'Joyce0423026308@gmail.com'),
(104, '237QDU', 'JO', 'JO', 'NAMI@GMAIL.COM'),
(103, 'Coco', 'nim', 'nim', 'Chenj1@alfredstate.edu'),
(102, 'MIMI', 'COCO', 'COCO', 'COCO@GMAIL.COM'),
(101, 'mimi', 'ya', 'ya', 'ca@gmail.com'),
(100, 'COCO', 'YO', 'YO', 'Chenj1@gmail.com'),
(99, 'jcc', 'yo', 'yo', 'chen44@gmail.com'),
(98, 'joyce66123', 'JA', 'JA', 'chenj!@qq.com'),
(97, 'joyce66123', 'JO', 'JO', 'chenj!@qq.com'),
(96, 'joyce66123', 'jo', 'jo', 'chenj!@qq.com'),
(95, 'bob', 'JO', 'JO', 'Chenj1@gmail.com'),
(94, 'bob', 'jo', 'jo', 'chenj!@qq.com'),
(93, 'bob', 'bob', 'bob', 'bob@isp.com'),
(89, 'joyce66123', 'jo', 'jo', 'Joyce0423026308@gmail.com'),
(92, 'qw', 'JA', 'JA', 'chss@qq.com'),
(91, 'joyceccfw2', 'JO2', 'JO2', 'swat6@alfred.edu'),
(90, 'joyce66123', 'mimi', 'mimi', 'Chenj1@alfredstate.edu'),
(85, 'joyce66123', 'ja', 'ja', 'Joyce0423026308@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
