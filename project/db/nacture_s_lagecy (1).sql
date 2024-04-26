-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2023 at 08:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nacture's_lagecy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `adminId` int(5) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(50) NOT NULL,
  `adminemail` text NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  `adminContect` varchar(25) NOT NULL,
  PRIMARY KEY (`adminId`),
  UNIQUE KEY `adminContect` (`adminContect`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `adminName`, `adminemail`, `adminPassword`, `adminContect`) VALUES
(1, 'Jainam Saraiya', 'jainambharvad9@gmail.com', '12345', '9998173929'),
(2, 'Meet Malvaniya', 'malvaniyameet@gmail.com', '12345', '7878012124'),
(3, 'Meet Patel ', 'patelmeet@gmail.com', '12345', '9723487688');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `bookingId` int(5) NOT NULL AUTO_INCREMENT,
  `bookingDate` date NOT NULL,
  `checkinDate` date NOT NULL,
  `checkoutDate` date NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `userId` int(5) NOT NULL,
  `safId` int(5) NOT NULL,
  PRIMARY KEY (`bookingId`),
  UNIQUE KEY `mobNumber` (`mobileNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingId`, `bookingDate`, `checkinDate`, `checkoutDate`, `mobileNumber`, `userId`, `safId`) VALUES
(1, '2023-09-21', '2023-09-15', '2023-09-20', '1234567890', 2, 2),
(2, '2023-09-15', '2023-09-14', '2023-09-21', '97832 75632', 2, 2),
(3, '2023-09-06', '2023-09-13', '2023-09-15', '3454376543', 2, 2),
(4, '2023-09-14', '2023-09-18', '2023-09-20', '9876723498', 1, 5),
(5, '2023-09-11', '2023-09-20', '2023-09-22', '8732445656', 2, 11),
(6, '2023-09-05', '2023-09-07', '2023-09-13', '9998173929', 2, 5),
(7, '1970-01-01', '1970-01-01', '1970-01-01', '', 2, 5),
(8, '2023-09-06', '2023-09-06', '2023-09-23', '8756345645', 3, 2),
(9, '2023-09-14', '2023-09-22', '2023-09-28', '9783275632', 3, 3),
(10, '2023-08-29', '2023-08-30', '2023-09-01', '8543476545', 1, 2),
(11, '2023-09-19', '2023-09-13', '2023-09-30', '982347645', 3, 1),
(12, '2023-09-21', '2023-09-14', '2023-09-21', '9075645378', 3, 1),
(13, '2023-09-20', '2023-09-21', '2023-09-22', '9785639632', 3, 1),
(14, '2023-09-07', '2023-09-14', '2023-09-15', '6745345234', 1, 1),
(15, '2023-09-13', '2023-09-21', '2023-09-22', '8945093652', 2, 1),
(16, '2023-09-28', '2023-09-22', '2023-09-29', '9998562929', 3, 2),
(17, '2023-09-28', '2023-09-22', '2023-09-29', '9998562939', 3, 2),
(18, '2023-09-13', '2023-09-21', '2023-09-22', '9256034545', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `catId` int(5) NOT NULL AUTO_INCREMENT,
  `catName` varchar(50) NOT NULL,
  `catImg` mediumtext NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`catId`, `catName`, `catImg`) VALUES
(1, 'Jeep safari', '3.jpg'),
(2, 'Elephant safari', '26.jpg'),
(3, 'Camel safari', '3.jpg'),
(4, 'Horse safari', '4.jpg'),
(13, 'bhavesh', '1.png'),
(5, 'Walk safari', '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `faqId` int(5) NOT NULL AUTO_INCREMENT,
  `faqQuestions` mediumtext NOT NULL,
  `faqAns` mediumtext NOT NULL,
  `faqNote` mediumtext NOT NULL,
  PRIMARY KEY (`faqId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqId`, `faqQuestions`, `faqAns`, `faqNote`) VALUES
(1, 'What are the visiting hours of the national park?', 'The park is open from 09.00 AM - 08.00 PM Tue - Sun.', 'Visiting hours vary by season. Generally, the park is open from 9:00 AM to 8:00 PM during the summer months and 9:00 AM to 8:00 PM in the winter. Please check the contact us for specific hours on your planned visit.'),
(2, 'Are there any admission fees to enter the national park?', 'Yes, there is an admission fee for adults and children aged 16 and older.', 'Children under 16 can enter for free. The fees help support the maintenance and conservation of the park.'),
(3, 'Can I bring my pets into the park?', 'Pets are not allowed within the park boundaries to protect wildlife and their habitats. ', ' There are designated areas for pet owners to walk their dogs outside the park.'),
(4, 'Are there camping facilities within the national park?', 'Yes, there are camping grounds available.', 'Reservations are recommended, especially during peak seasons. Check our website for camping fees and availability.'),
(5, 'What wildlife can I expect to see in the national park?', 'You may encounter a variety of wildlife, including deer, squirrels, birds, and possibly bears. ', 'Remember to observe them from a safe distance and not feed them.'),
(6, 'Are there hiking trails suitable for beginners?', 'Yes, there are beginner-friendly trails with varying levels of difficulty. ', 'Trail maps and information can be obtained at the visitor center.');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `yId` int(5) NOT NULL AUTO_INCREMENT,
  `yname` varchar(15) NOT NULL,
  `yemail` text NOT NULL,
  `ysubject` text NOT NULL,
  `ymessage` varchar(500) NOT NULL,
  PRIMARY KEY (`yId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`yId`, `yname`, `yemail`, `ysubject`, `ymessage`) VALUES
(1, 'jainam', 'abc1@gmail.com', 'No ', 'ABC'),
(2, 'yash ', 'yash12@gamil.com', 'No Sub', 'ABC'),
(3, 'jainambharvad', 'abc1@gmail.com', 'No ', 'abc'),
(4, 'yash ', 'abc1@gmail.com', 'No Sub', '6tgbn');

-- --------------------------------------------------------

--
-- Table structure for table `gallers`
--

DROP TABLE IF EXISTS `gallers`;
CREATE TABLE IF NOT EXISTS `gallers` (
  `galId` int(5) NOT NULL AUTO_INCREMENT,
  `safId` int(5) NOT NULL,
  `galURl` mediumtext NOT NULL,
  `gelTitle` varchar(50) NOT NULL,
  PRIMARY KEY (`galId`,`safId`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallers`
--

INSERT INTO `gallers` (`galId`, `safId`, `galURl`, `gelTitle`) VALUES
(1, 1, '27.jpg', 'Moring Jeep Safari'),
(2, 5, '44.jpg', 'Jeep Afternoon Safari'),
(3, 12, '45.jpg', 'Elephant Afternoon Safari '),
(4, 9, '46.jpg', 'Elephant Morning Safari'),
(5, 14, '47.jpg', 'Horse Morning Safari'),
(6, 15, '48.jpg', 'Horse Evening Safari'),
(7, 16, '41.jpg', 'Camel Morning Safari'),
(8, 17, '43.jpg', 'Camel Afternoon Safari'),
(9, 18, '49.jpg', 'Walking In Morning Safari'),
(10, 20, '50.jpg', 'Walking In Evening Safari'),
(11, 2, '53.jpg', '	Moring Jeep Safari'),
(12, 10, '54.jpg', 'Elephant Morning Safari'),
(13, 3, '52.jpg', 'After Sunrise Jeep Safari'),
(14, 11, '57.jpg', 'Elephant After Sunrise Safari'),
(15, 13, '59.jpeg', 'Elephant Evening Safari'),
(16, 4, '60.jpg', 'Jeep Safari Will Starts On After Lunch'),
(17, 6, '61.jpg', 'Jeep Safari Will Starts On Afternoon'),
(18, 7, '62.jpeg', 'Jeep Safari Will Starts On Evening '),
(19, 8, '63.jpg', 'Jeep Safari Will Starts On Evening'),
(20, 19, '49.jpg', 'Wakling Safari Will Starts On Evening'),
(21, 11, '45.jpg', 'Elephant After Sunrise Safari'),
(23, 7, '60.jpg', 'Jeep Safari in Evening'),
(24, 2, '11.jpg', 'Jeep Safari In Morning'),
(25, 3, '28.jpg', 'Jeep Safari Will Starts On After Sunrise'),
(26, 4, '49.jpg', 'Jeep Safari Will Starts On Before Lunch'),
(27, 5, '42.jpg', 'Jeep Safari Will Starts On Afternoon'),
(28, 6, '53.jpg', 'Jeep Safari Will Starts On Afternoon'),
(29, 8, '52.jpg', 'Jeep Safari Will Starts On Evening'),
(30, 9, '57.jpg', 'Elephant Safari Will Starts On Morning '),
(31, 10, '46.jpg', 'Elephant Morning Safari'),
(32, 11, '45.jpg', 'Elephant Safari Will Starts On After Sunrise'),
(33, 1, '52.jpg', 'Jeep Safari Will Starts On Morning '),
(34, 1, '49.jpg', 'Jeep Safari Will Starts On Morning ');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `reviewID` int(5) NOT NULL AUTO_INCREMENT,
  `reviewComment` mediumtext NOT NULL,
  `reviewStar` varchar(50) NOT NULL,
  `userId` int(5) NOT NULL,
  `safId` int(5) NOT NULL,
  PRIMARY KEY (`reviewID`,`userId`,`safId`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewID`, `reviewComment`, `reviewStar`, `userId`, `safId`) VALUES
(1, 'That was amazing national part. \r\nI feel happiness.', '5', 6, 2),
(2, 'I like this national park I\'m so happy because I\'m visit this national park. ', '5', 5, 3),
(3, 'mind blowing this national park.', '4', 4, 1),
(4, 'Awesome This National Park ', '4', 3, 5),
(5, 'Gujarat Gir is the best national park.', '5', 2, 4),
(11, 'this is super ', '5', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `safaris`
--

DROP TABLE IF EXISTS `safaris`;
CREATE TABLE IF NOT EXISTS `safaris` (
  `safId` int(5) NOT NULL AUTO_INCREMENT,
  `safName` varchar(50) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `safDay` text NOT NULL,
  `safPrice` text NOT NULL,
  `safTime` time NOT NULL,
  `catId` int(5) NOT NULL,
  `catImg` mediumtext NOT NULL,
  PRIMARY KEY (`safId`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safaris`
--

INSERT INTO `safaris` (`safId`, `safName`, `mobileNumber`, `safDay`, `safPrice`, `safTime`, `catId`, `catImg`) VALUES
(1, 'Jeep Morning 1 ', '98245 25835', 'T-W-S-S', '2500', '06:00:00', 1, '19.jpg'),
(2, 'Jeep Morning 2', '97832 75632', 'T-W-T-F-S-S', '2500', '08:00:00', 1, '19.jpg'),
(3, 'Jeep After Sunrise', '97832 75632', 'T-W-T-F-S-S', '2500', '08:15:00', 1, '16.jpg'),
(4, 'Jeep Before Lunch ', '92245 25665', 'T-W-T-F-S-S', '2500', '11:00:00', 1, '16.jpg'),
(5, 'Jeep Afternoon 1', '95778 37545', 'T-W-T-F-S-S', '2500', '16:00:00', 1, '19.jpg'),
(6, 'Jeep Afternoon 2', '99798 45698', 'T-W-T-F-S-S', '2500', '16:15:00', 1, '27.jpg'),
(7, 'Jeep Evening 1', '95744 25835', 'T-W-T-F-S-S', '2500', '18:00:00', 1, 'forrest-cavale.jpg'),
(8, 'Jeep Evening 2', '99799 75840', 'T-W-T-F-S-S', '2500', '18:15:00', 1, 'forrest-cavale.jpg'),
(9, 'Elephant Morning 1', '92650 78778', 'T-S-S', '1800', '07:00:00', 1, '38.jpg'),
(10, 'Elephant Morning 2', '98798 25845', 'T-S-S', '1800', '09:00:00', 2, '38.jpg'),
(11, 'Elephant after Sunrise', '95845 75650', 'T-S-S', '1800', '09:30:00', 2, '3.jpg'),
(12, 'Elephant Afternoon', '92645 25845', 'T-S-S', '1800', '15:00:00', 2, '3.jpg'),
(13, 'Elephant Evening ', '99799 20563', 'W-T-F-S-S', '1800', '18:00:00', 2, '37.jpg'),
(14, 'Horse Morning', '94675 45846', 'T-T-S-S', '1200', '07:00:00', 4, '39.jpg'),
(15, 'Horse Evening', '99798 56345', 'T-F-S-S', '1200', '18:00:00', 4, '40.jpg'),
(16, 'Camel Morning ', '98765 45679', 'F-S-S', '1650', '08:00:00', 3, '43.jpg'),
(17, 'Camel Afternoon ', '99345 67109', 'T-S', '1650', '16:00:00', 3, '41.jpg'),
(18, 'Walking Morning', '92450 78610', 'T-W-T-F-S-S', '999', '06:00:00', 1, 'A_safaria-package.png'),
(19, 'Walking after Sunrise', '95676 23456', 'T-W-T-F-S-S', '999', '09:00:00', 5, '27.jpg'),
(20, 'Walking Evening ', '96650 45830', 'T-W-T-F-S-S', '999', '18:00:00', 5, '32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(5) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `userBtd` date NOT NULL,
  `userGen` varchar(50) NOT NULL DEFAULT '',
  `userPassword` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `mobileNumber` varchar(25) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userBtd`, `userGen`, `userPassword`, `userEmail`, `mobileNumber`, `userAddress`) VALUES
(1, 'Nandan dhangi', '2003-08-19', 'Male', '123456', 'nandan@gmail.com', '9510442401', 'wadhawad khandipod'),
(2, 'kavan vadech', '2004-09-11', 'Male', '123456', 'kavand@gmail.com', '9824921402', 'suredranagar dal mil road'),
(3, 'Salim Modan', '2004-02-04', 'Male', '123456', 'salimm@gmail.com', '95104554806', 'sureadranagar dal mil road'),
(4, 'Nitin Prajapati', '2003-12-02', 'Male', '123456', 'nitinp@gmail.com', '8401375853', 'limdi botad road'),
(5, 'Kartik Dabhi', '2004-07-16', 'Male', '123456', 'kartikd@gmail.com', '7777965986', 'limdi ahemdabad road'),
(6, 'Bhavesh Vaghele', '2003-03-15', 'Male', '123456', 'bhaveshv@gmail.com', '9624358370', 'G I D C Surendranagar'),
(7, 'Jay Ghatliya', '2003-08-22', 'Male', '123456', 'jayg@gmail.com', '9512301222', 'ratanpar main road'),
(8, 'Jaydeep Poojara', '2004-08-13', 'Male', '123456', 'jaydeepp@gmail.com', '7984285965', 'ratanpar main bajar '),
(9, 'Yash Chauhan ', '2003-08-22', 'Male', '123456', 'yashc@gmail.com', '8156060143', 'limdi main bajar '),
(10, 'Nikul ', '2003-05-23', 'Male', '123456', 'nikul@gmail.com', '8153882575', 'limdi green chock road'),
(13, 'milan patadiya', '2002-06-20', 'Male', '123456', 'milan12@gmail.com', '7839087345', 'abc'),
(14, 'Dhariya Parmar Dispak', '2003-11-12', 'Male', '123456', 'dhariyaparmardispak9@gmail.com', '9856423986', 'Dhangdhara Near By Gurukul Road'),
(15, 'Saraiya Mitesh', '2001-02-12', 'Male', '123456', 'mitesh123@gmail.com', '7046412750', '80 Feer Road'),
(16, 'Yash Thakar', '2003-11-25', 'Male', '123456', 'yashthaker000@gmail.com', '9510434122', 'Wadhwan Surendranagar'),
(17, 'viral sir', '2002-09-23', 'Male', '123456', 'md@gmail.com', '9090675433', 'underground');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `vidID` int(5) NOT NULL AUTO_INCREMENT,
  `safId` int(5) NOT NULL,
  `vidURl` text NOT NULL,
  `vidTitle` text NOT NULL,
  PRIMARY KEY (`vidID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vidID`, `safId`, `vidURl`, `vidTitle`) VALUES
(1, 1, 'https://www.youtube.com/embed/eKE_4glyw_s?si=YrgiNKu1FZEbDVb5', 'Full Jeep Safari Explore'),
(3, 16, 'https://www.youtube.com/embed/VTnhIwRNO_s?si=yK-S4gxhmK1sZ3al', 'Full Elephant Safari Explore'),
(4, 14, 'https://www.youtube.com/embed/VTnhIwRNO_s?si=yK-S4gxhmK1sZ3al', 'Full Horse Safari Explore'),
(5, 17, 'https://www.youtube.com/embed/0x7Tn2r-hAQ?si=u8uzgiRnMQkAidh6', 'Full Camel Safari Explore'),
(6, 15, 'https://www.youtube.com/embed/wlhKDmDvHcc?si=a6MRlCe_bIoMl_M7', 'Full Horse Safari Explore'),
(12, 7, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Jeep Safari Explore'),
(13, 8, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Jeep Safari Explore'),
(14, 9, 'https://www.youtube.com/embed/wlhKDmDvHcc?si=a6MRlCe_bIoMl_M7', 'Full Elephant Safari Explore'),
(15, 10, 'https://www.youtube.com/embed/wlhKDmDvHcc?si=a6MRlCe_bIoMl_M7', 'Full Elephant Safari Explore'),
(11, 6, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Jeep Safari Explore'),
(9, 4, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Jeep Safari Explore'),
(10, 5, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Jeep Safari Explore'),
(7, 17, 'https://www.youtube.com/embed/eKE_4glyw_s?si=YrgiNKu1FZEbDVb5', 'Full Camel Safari Explore'),
(8, 3, 'https://www.youtube.com/embed/VTnhIwRNO_s?si=yK-S4gxhmK1sZ3al', 'Full Jeep Safari Explore'),
(16, 11, 'https://www.youtube.com/embed/wlhKDmDvHcc?si=a6MRlCe_bIoMl_M7', 'Full Elephant Safari Explore'),
(18, 18, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Walking Safari Explore'),
(19, 19, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Walking Safari Explore'),
(20, 20, 'https://www.youtube.com/embed/XVt80UarRmY?si=QJyG1UQaF7Q9C442', 'Full Walking Safari Explore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
