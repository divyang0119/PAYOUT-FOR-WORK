-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2025 at 05:54 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payoutforwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history`
--

DROP TABLE IF EXISTS `appointment_history`;
CREATE TABLE IF NOT EXISTS `appointment_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `worker_name` text NOT NULL,
  `profession` text NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `your_address` varchar(50) NOT NULL,
  `client_name` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `client_email` varchar(30) NOT NULL,
  `worker_email` varchar(30) NOT NULL,
  `appointment_accepted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`id`, `worker_name`, `profession`, `appointment_date`, `appointment_time`, `your_address`, `client_name`, `contact`, `client_email`, `worker_email`, `appointment_accepted`) VALUES
(6, 'Divyang Chaudhari', 'doctor', '2024-03-13', '12:00:00', '', '', '0', '', '', 0),
(7, 'Divyang Chaudhari', 'doctor', '2024-03-13', '07:49:00', 'Bavli faliyu,Karvali', 'Divyang Chaudhari', '2147483647', '', '', 0),
(17, 'Divyang Chaudhari', 'Developer', '2024-03-17', '10:14:00', 'Karvali', 'Divyang Chaudhari', '2147483647', '21bca11@vtcbb.edu.in', 'divyangchaudhari1303@gmail.com', 1),
(18, 'Kamlesh Kumawat', 'plumber', '2024-03-18', '08:03:00', 'SidhhiVinayak Residence', 'brijesh', '9624697379', '21bca69@vtcbb.edu.in', 'kumawatkamlesh603@gmail.com', 1),
(19, 'Divyang Chaudhari', 'Developer', '2024-03-18', '12:00:00', 'Bardoli', 'Brijesh Shah', '1234567891', 'shahbrijesh223@gmail.com', 'divyangchaudhari1303@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Divyang Chaudhari', 'divyangchaudhari1303@gmail.com', 'This is the best website that i ever visited '),
(6, 'Kaushik Khatwani', 'kaushik@gmail.com', 'This is worst webste'),
(5, 'Brijesh', 'brijeshshah@gmail.com', 'this is best website to find a worker '),
(7, 'Vishal Chaudhari', 'chaudharivishal2707@gmail.com', 'Your Website Experience is Good.'),
(8, 'Abhay Sharma', '21bca12@vtcbb.edu.in', 'This Is Worst Platform Ever.'),
(9, 'Brijesh Shah', 'shahbrijesh024@gmail.com', 'This Platform provides me skilled workers for my short term projects.');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

DROP TABLE IF EXISTS `join_us`;
CREATE TABLE IF NOT EXISTS `join_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `name`, `email`, `description`) VALUES
(1, 'Divyang', 'divyangchaudhari1303@gmail.com', 'I Want to Join as a Worker');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

DROP TABLE IF EXISTS `transaction_history`;
CREATE TABLE IF NOT EXISTS `transaction_history` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `transaction_type` text NOT NULL,
  `card_number` int NOT NULL,
  `expr_date` date NOT NULL,
  `cvv` int NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`transaction_id`, `transaction_type`, `card_number`, `expr_date`, `cvv`) VALUES
(1, 'creditCard', 0, '0000-00-00', 0),
(2, 'creditCard', 0, '0000-00-00', 0),
(3, 'debitCard', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`userid`, `username`, `email`, `password`) VALUES
(1, 'Divyang Chaudhari', 'divyangchaudhari1303@gmail.com', '12345678'),
(2, 'brijesh', '21bca69@vtcbb.edu.in', '123456'),
(3, 'Kaushik', '21bca27@vtcbb.edu.in', '987654321'),
(4, 'Utsav', '21bca08@vtcbb.edu.in', 'robot123'),
(5, 'Vivek', 'vivek@gmail.com', 'vivek@123'),
(7, 'Chandresh Patel', '21bca49@vtcbb.edu.in', '123456'),
(9, 'Chandadtre Yash', '21bca54@vtcbb.edu.in', '12365'),
(11, 'Vikram Chaudhari', 'vikramchaudhari8055@gmail.com', '8055'),
(16, 'Vishal Chaudhari', 'chaudharivishal2707@gmail.com', 'Vishal@2002'),
(17, 'Kaushik Khatwani', 'khatwanikaushik111@gmail.com', 'Kaushik@0704'),
(18, 'Soni Utsav', 'r4101211@gmail.com', 'Robot@123'),
(19, 'Brijesh Shah', 'shahbrijesh223@gmail.com', '12345'),
(24, 'BRIJESH SHAH', 'shahbrijesh223@gmail.com', '123456'),
(25, 'DK', 'divyangchaudhari1904@gmail.com', '1234567'),
(26, 'Brijesh ', 'shahbrijesh224@gmail.com', '12345678'),
(27, 'Brijesh Shah', 'shahbrijesh024@gmail.com', '11111111'),
(28, '123divyang', 'divayngchaudhari012345@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `worker_profiles`
--

DROP TABLE IF EXISTS `worker_profiles`;
CREATE TABLE IF NOT EXISTS `worker_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_picture` varchar(10000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `country` text NOT NULL,
  `zipcode` int NOT NULL,
  `profession` text NOT NULL,
  `experience` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_profiles`
--

INSERT INTO `worker_profiles` (`id`, `profile_picture`, `email`, `fname`, `lname`, `contact`, `gender`, `address`, `city`, `country`, `zipcode`, `profession`, `experience`) VALUES
(14, 'Ajay.jpg', '21bca59@vtcbb.edu.in', 'Ajay', 'Kumawat', '8799372603', 'Male', '18,M.N Park-3 Shastri Road, Bardoli', 'Surat', 'India', 394601, 'constructionWorker', '3-5 years'),
(15, 'ashish.jpg', 'ashishjangir394@gmail.com', 'Ashish', 'Jangir', '89550 52501', 'Male', 'Surat', 'Surat', 'India', 394601, 'Engineer', '1-3 years'),
(16, 'Chandatre_Yash.jpg', 'yc456987o@gmail.com', 'Yash', 'Chandadtre', '82004 24331', 'Male', 'Songadh', 'Vyara', 'India', 394670, 'Engineer', '1-3 years'),
(17, 'Chandresh.jpg', 'pateldev698@gmail.com', 'Chandresh', 'Patel', '99248 22951', 'Male', 'Bardoli', 'Surat', 'India', 394601, 'physical_therapist', '1-3 years'),
(19, 'Kaushik.jpg', 'khatwanikaushik111@gmail.com', 'Kaushik ', 'Khatwani', '95589 78010', 'Male', 'Gopal Nagar', 'Mandvi', 'India', 394160, 'teacher', '3-5 years'),
(21, 'drijesh.jpg', 'chaudharidrijesh6019@gmail.com', 'Drijesh', 'Chaudhari', '92651 01397', 'Male', 'Ganesh Nagar Scoetiy', 'Mandvi', 'India', 394160, 'electrician', 'Less than '),
(22, 'Harshil.jpg', 'chaudharidrijesh6019@gmail.com', 'Harshil', 'Gamit', '96629 47169', 'Male', 'Vankal', 'Zankhvav', 'India', 394601, 'plumber', 'Less than '),
(26, 'Ronak.jpg', 'rchaudharironak@gmail.com', 'Ronak', 'Chaudhari', '93133 46406', 'Male', 'Ghantoli', 'Mandvi', 'India', 394601, 'mechanic', '3-5 years'),
(27, 'Parth.jpg', 'parthchaudhary0120@gmail.com', 'Parth', 'Chaudhari', '97273 30982', 'Male', 'Umarkhadi', 'Mandvi', 'India', 394601, 'electrician', 'Less than '),
(30, 'sujal.jpg', 'akkusujal@gmail.com', 'Sujal', 'Chaudhari', '81402 03305', 'Male', 'Bedkuva', 'Madhi', 'India', 394160, 'welder', 'Less than '),
(31, 'Utsav.jpg', 'r4101211@gmail.com', 'Utsav', 'Soni', '99746 76035', 'Male', 'Adajan', 'Surat', 'India', 394601, 'Developer', '1-3 years'),
(32, 'Vicky.jpg', 'chaudharivikram8055@gmail.com', 'Vikram', 'Chaudhari', '87805 91404', 'Male', 'Karvali', 'Mandvi', 'India', 394601, 'Engineer', '3-5 years'),
(33, 'Yash.jpg', 'mahajanyash1804@gmail.com', 'Yash', 'Mahajan', '76228 24573', 'Male', 'Vyara', 'Vyara', 'India', 394601, 'mechanic', '3-5 years'),
(38, 'parthpatel.jpg', 'parth12@yahoo.com', 'Parth', 'Patel', '9887123497', 'Male', 'Kadodara, Surat, Gujarat', 'Kadodara', 'India', 394819, 'welder', '1-3 years'),
(39, 'brijesh.jpg', 'shahbrijesh223@gmail.com', 'Briejsh', 'Shah', '96246 97379', 'Male', 'Bardoli', 'Bardoli', 'India', 394601, 'interior_designer', '3-5 years'),
(41, 'kamlesh.jpg', 'kumawatkamlesh603@gmail.com', 'Kamlesh', 'Kumawat', ' 93281 77079', 'Male', 'Kathodra,Surat', 'Surat', 'India', 394601, 'plumber', '3-5 years'),
(42, 'Screenshot 2024-04-05 211317.jpg', 'Anerigamit25@gmail.com', 'Aneri', 'Gamit', '9316759160', 'Female', 'Mandvi', 'Surat', 'India', 974163, 'doctor', '3-5 years'),
(45, 'div2.jpg', 'divyangchaudhari0119@gmail.com', 'Dev', 'Patel', '9879546210', 'Male', 'Ganesh Nagar,Mandvi', 'Mandvi', 'India', 394160, 'Developer', '1-3 years'),
(46, 'sunitakohli.jpg', 'sunitakohli31@gmail.com', 'Sunita', 'Kohli', '911140323240', 'Female', ' F-213/D, 1st Floor, Old M.B. Road, Lado Sarai ', 'New Delhi', 'India', 110030, 'interior_designer', '1-3 years'),
(47, 'indian-interior-designers-2020.jpg', 'info@rajivsaini.com', 'Rajiv', 'Saini', '02226451489', 'Male', 'er Mansion, 9, off, Turner Rd, Tata Blocks, Bandra', 'Mumbai', 'India', 400050, 'interior_designer', '1-3 years'),
(48, 'Ambrish Arora.jpg', 'business@studiolotus.in', 'Ambrish', 'Arora', '1140570808', 'Male', 'F 301 First Floor Chaudhari Prem Singh House, Lado', 'New Delhi', 'India', 110030, 'Developer', '3-5 years'),
(49, 'Lipika Sud.jpg', 'lipika@lipika.com', 'Lipika', 'Sud', '01141811491', 'Female', 'Lower Ground, C9, Greater Kailash-1, M Block, Grea', 'New Delhi', 'India', 110017, 'teacher', '3-5 years'),
(50, 'Ajay Shah.jpg', 'info@asdswow.com', 'Ajay', 'Shah', '9321212487', 'Male', '1st Floor, Regal Cinema Building, 41F, Northern Si', 'Mumbai', 'India', 400001, 'doctor', '3-5 years'),
(51, 'Anjum Jung.jpg', 'morph@prestigeconstructions.com', 'Anjum ', 'Jung', '08025001100', 'Female', 'Malik’s Embassy, No.9, 4th Floor, Union Street, Sh', 'Bengaluru', 'India', 560001, 'doctor', '1-3 years'),
(52, 'Shabnam Gupta.jpg', 'info@peacocklife.com', 'Shabnam ', 'Gupta', '2226511474', 'Female', '190, Turner Road, Gurunanak Marg, Bandra (W)', 'Mumbai ', 'India', 400050, 'physical_therapist', '1-3 years'),
(53, 'denise-at-the-dalles.jpg', 'sdafsa@asdsf', 'adsfsdaf', 'asdfasd', '123432', 'Female', 'qfsaf', 'asdfasd', 'India', 1343244, 'doctor', 'Less than '),
(54, 'Divyang.jpg', 'divyangchaudhari1303@gmail.com', 'Divyang', 'Chaudhari', '9726501866', 'Male', 'Karvali', 'Mandvi', 'India', 394163, 'Developer', '3-5 years');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
