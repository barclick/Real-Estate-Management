-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 05:44 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `C_ID` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `C_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`C_ID`, `Name`, `Message`, `C_Date`) VALUES
(5, 'yir', 'Can we talk about business', '2017-05-28'),
(6, 'y', 'Lets talk about business', '2017-06-02'),
(8, 'hagos', 'You need administrator to start business', '2017-06-08'),
(26, 'y', 'what type of business', '2018-05-16'),
(27, 'yir', 'do you wan to invest in Gift real estate', '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `UserName` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `PhoneNumber` varchar(25) NOT NULL,
  `CustomerType` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `ConfirmPassword` varchar(25) NOT NULL,
  `Profile_Picture` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`UserName`, `FirstName`, `LastName`, `Gender`, `Address`, `City`, `PhoneNumber`, `CustomerType`, `Email`, `Password`, `ConfirmPassword`, `Profile_Picture`) VALUES
('yir', 'Yirga', 'Hagos', 'Male', 'Adi-Shu', 'Mekelle', '0932044988', 'Buyer', 'yirga@gmail.com', 'whatwhat', 'whatwhat', 'yir'),
('y', 'Yirga', 'Hagos', 'Male', 'dlfkj', 'dfkjsdf', '0932044988', 'Buyer', 'dkf@glkj.com', 'whatwhat', 'whatwhat', 'y.jpg'),
('hagos', 'Hagos', 'GebreMedihn', 'Male', 'Humera', 'Baeker', '0932044988', 'Admin', 'hagos@gmail.com', 'Hagosat', 'Hagosat', 'hagos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FD_ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `PhoneNumber` int(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `F_Date` timestamp(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `NewsId` int(11) NOT NULL,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Gift Real Estate Developed a new Web app', '2017-05-10'),
(4, 'Investoar XXX Wants to Invest in Figt Real Estate', '2017-05-26'),
(5, 'To day is 10th Year Anniversary of Gift Real Estate', '2017-05-19'),
(6, 'Gift Real Estate CEO Said a new era of technology help people make their daily life easier', '2017-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `RE_ID` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `RE_Name` varchar(30) NOT NULL,
  `P_TaxNO` varchar(30) NOT NULL,
  `Property_for` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Price` int(20) NOT NULL,
  `Bedroom` int(10) NOT NULL,
  `Bathroom` int(10) NOT NULL,
  `Longitude` float NOT NULL,
  `Lat` float NOT NULL,
  `Facility` varchar(50) NOT NULL,
  `YearBuilt` year(4) NOT NULL,
  `Totalarea` int(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `3D_View` varchar(50) NOT NULL,
  `PostDate` date NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Reason` varchar(300) DEFAULT NULL,
  `Acc_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`RE_ID`, `UserName`, `RE_Name`, `P_TaxNO`, `Property_for`, `Category`, `Country`, `State`, `Price`, `Bedroom`, `Bathroom`, `Longitude`, `Lat`, `Facility`, `YearBuilt`, `Totalarea`, `image`, `3D_View`, `PostDate`, `Status`, `Reason`, `Acc_Date`) VALUES
(11, 'yir', 'Gift Real Estate 3', '3434', 'Sell', 'Villa', 'Ethiopia', 'Tigray', 120000, 1, 1, 39.4696, 13.4966, 'Parking,Garage,Internet,Water', 1983, 3944, 'yirCapture.jpg', 'yir2.mp4', '2018-05-16', 'Accepted', NULL, '2018-05-16'),
(15, 'yir', 'Gift Real Estate', '676', 'Sell', 'Villa', 'Ethiopia', 'Tigray', 39483, 1, 1, 39.4743, 13.4933, 'Water', 2017, 3944, 'yirdownload.jpg', 'yirhouse.mp4', '2018-05-16', 'Rejected', 'does not make sense', NULL),
(16, 'yir', 'Gift Real Estate', '9343', 'Sell', 'Villa', 'Ethiopia', 'Tigray', 15000, 1, 1, 39.4713, 13.4964, 'Parking,Kitchen,Water', 1989, 345, 'yirbr5.jpg', 'yir3D Interior.mp4', '2018-05-16', 'Accepted', NULL, '2018-05-16'),
(17, 'yir', 'Gift Real Estate Axum', '8902', 'Sell', 'Villa', 'Ethiopia', 'Tigray', 12000, 1, 1, 39.4711, 13.4961, 'Parking', 1983, 2342, 'yirimages.jpg', 'yir2 BHK Apartments Walkthrough.mp4', '2018-05-16', 'Accepted', NULL, '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `request_to_buy`
--

CREATE TABLE `request_to_buy` (
  `Name_of_Buyer` varchar(30) NOT NULL,
  `Phone_Number` int(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `RE_ID` int(11) NOT NULL,
  `Request_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_to_buy`
--

INSERT INTO `request_to_buy` (`Name_of_Buyer`, `Phone_Number`, `Email`, `Message`, `UserName`, `RE_ID`, `Request_Date`) VALUES
('y', 932044988, 'y@gmail.com', 'I want to buy', 'y', 11, '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `Req_ID` int(11) NOT NULL,
  `RE_Category` varchar(10) NOT NULL,
  `RealEstate_for` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Max_Price` int(11) NOT NULL,
  `Min_Price` int(11) NOT NULL,
  `Bedrooms` int(11) NOT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Facility` varchar(30) DEFAULT NULL,
  `Message` varchar(100) NOT NULL,
  `Requirement_Date` date NOT NULL,
  `UserName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirement_response`
--

CREATE TABLE `requirement_response` (
  `RR_ID` int(20) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `Req_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sell_response`
--

CREATE TABLE `sell_response` (
  `SR_ID` int(10) NOT NULL,
  `RE_ID` int(11) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `UserName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_house`
--

CREATE TABLE `transfer_house` (
  `ToUser` varchar(30) DEFAULT NULL,
  `FromUser` varchar(30) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `UserType` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `UserType`) VALUES
('yir', 'whatwhat', 'Seller'),
('y', 'whatwhat', 'Buyer'),
('hagos', 'Hagosat', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_bank`
--

CREATE TABLE `virtual_bank` (
  `UserName` varchar(25) NOT NULL,
  `amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `virtual_bank`
--

INSERT INTO `virtual_bank` (`UserName`, `amount`) VALUES
('y', 100000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FD_ID`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`RE_ID`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `request_to_buy`
--
ALTER TABLE `request_to_buy`
  ADD KEY `RE_ID` (`RE_ID`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`Req_ID`);

--
-- Indexes for table `requirement_response`
--
ALTER TABLE `requirement_response`
  ADD PRIMARY KEY (`RR_ID`);

--
-- Indexes for table `sell_response`
--
ALTER TABLE `sell_response`
  ADD PRIMARY KEY (`SR_ID`),
  ADD KEY `RE_ID` (`RE_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `virtual_bank`
--
ALTER TABLE `virtual_bank`
  ADD KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `C_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FD_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `NewsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `RE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `Req_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requirement_response`
--
ALTER TABLE `requirement_response`
  MODIFY `RR_ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sell_response`
--
ALTER TABLE `sell_response`
  MODIFY `SR_ID` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
