-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 06:25 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobapply`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE IF NOT EXISTS `tbl_apply` (
  `id` int(11) NOT NULL,
  `serial` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `moblie` varchar(14) NOT NULL,
  `email` varchar(120) NOT NULL,
  `national_id` varchar(120) NOT NULL,
  `edication` varchar(30) NOT NULL,
  `certificate` text NOT NULL,
  `experince` varchar(30) NOT NULL,
  `major_task` text NOT NULL,
  `account_billing` text NOT NULL,
  `caddress` varchar(100) NOT NULL,
  `cphone` int(11) NOT NULL,
  `cemail` varchar(120) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `responsibility` varchar(100) NOT NULL,
  `pcaddress` varchar(120) NOT NULL,
  `pcphone` int(11) NOT NULL,
  `pcemail` varchar(120) NOT NULL,
  `pjob_title` varchar(100) NOT NULL,
  `presponsibility` varchar(100) NOT NULL,
  `skill` text NOT NULL,
  `english` varchar(30) NOT NULL,
  `bangla` varchar(30) NOT NULL,
  `computer_skill` text NOT NULL,
  `re_name` varchar(100) NOT NULL,
  `re_organization` varchar(120) NOT NULL,
  `re_designation` varchar(120) NOT NULL,
  `re_mobile` int(11) NOT NULL,
  `re_email` varchar(120) NOT NULL,
  `re_names` varchar(100) NOT NULL,
  `re_organizations` varchar(120) NOT NULL,
  `re_designations` varchar(120) NOT NULL,
  `re_mobiles` int(11) NOT NULL,
  `re_emails` varchar(120) NOT NULL,
  `present_salary` varchar(100) NOT NULL,
  `expected_salary` varchar(100) NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `contact_address` text NOT NULL,
  `cv` text NOT NULL,
  `date` varchar(120) NOT NULL,
  `rand` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`id`, `serial`, `name`, `moblie`, `email`, `national_id`, `edication`, `certificate`, `experince`, `major_task`, `account_billing`, `caddress`, `cphone`, `cemail`, `job_title`, `responsibility`, `pcaddress`, `pcphone`, `pcemail`, `pjob_title`, `presponsibility`, `skill`, `english`, `bangla`, `computer_skill`, `re_name`, `re_organization`, `re_designation`, `re_mobile`, `re_email`, `re_names`, `re_organizations`, `re_designations`, `re_mobiles`, `re_emails`, `present_salary`, `expected_salary`, `joining_date`, `contact_address`, `cv`, `date`, `rand`) VALUES
(1, 170, 'Md.Shohag mia', '01852091544', 'shohag@gmail.com', '', 'HSC ', '20149.jpg', '3 Years', 'Book Keeping Yes. Bill Checking Yes. Vouchers Posting Yes. Processing of Bill Yes. Petty Cash Yes. Inventory Yes', ' Quick Book Expert. Quick Book Beginner. Quicken Expert', 'dd', 333333333, 'ssw@gmail.com', 'web', 'developer', 'eee', 4444444, 'dsfdfs@gmail.com', 'webs', 'developers', 'html, php css, java', '32', '23', 'MS Word Expert. PowerPoint Beginner. Photoshop Expert', 'Reference 1', 'Organization 1', 'Designation 1', 2147483647, 'aa@gmail.com', 'Reference 2', 'Organization 2', 'Designation 2', 2147483647, 'bb@gmail.com', '20000', '25555', '29-11-2017', 'Dhaka Khiklkheht 1201\r\nDhaka', '', '14-11-2017', '9092'),
(2, 1701, 'xcvxcv', '3333333333333', 'shxohag@gmail.com', '33333333333', 'BBA ', '29413.jpg', '5 Years', ' Prepare payment statement Yes. Book Keeping Yes. Bill Checking Yes. Vouchers Posting Yes. Processing of Bill Yes. Petty Cash Yes. Inventory Yes', ' Quick Book Beginner. Quicken Expert. Others Expert', 'dd eef', 2147483647, 'ssewwerw@gmail.com', 'wefddsf', 'developer', 'sdfcvsd', 433322, 'sewrewrwefdwfdsw@gmail.com', 'web', 'developerr', 'svsdfgvdfv', '34', '34', 'MS Word Expert', 'asD', 'Organization 1', 'Designation 1', 2147483647, 'aewewra@gmail.com', 'Reference 2', 'Organization 2', 'Designation 2', 2147483647, 'bewweb@gmail.com', '30000', '35555', '30-11-2017', 'v cxcv fxvc x ', '', '14-11-2017', '3539'),
(4, 1702, 'shohag', '3333333333333', 'jaka@gmail.com', '33333333333', 'B.Com ', '93248.jpg', '3 Years', ' Prepare payment statement Yes. Book Keeping Yes. Bill Checking Yes. Vouchers Posting Yes. Processing of Bill Yes. Petty Cash Yes. Inventory Yes', '', 'sadas', 2147483647, 'dgakjdfshuf@gmail.com', 'sdfsd', 'dsfds', '', 0, '', '', '', 'sadfsd', '33', '33', 'PowerPoint Expert', 'sdff', 'Organization 1', 'Designation 1', 2147483647, 'aa@gmail.com', '', '', '', 0, '', '33', '44', '28-02-2018', 'dd', '', '27-02-2018', '4336'),
(6, 1704, 'ss', '32434', 'shossshag@gmail.com', '202030040040404004', 'B.Com ', '43777.jpg', '3 Years', ' Prepare payment statement Yes. Book Keeping Yes. Bill Checking Yes. Vouchers Posting Yes. Processing of Bill Yes. Petty Cash Yes. Inventory Yes', '', 'sdfd', 423534, 'rtertgret@gmail.com', 'erfrd', 'sdfdf', '', 0, '', '', '', 'sdfzvf', '43', '43', 'PowerPoint Beginner', 'dsf', 'sdfdf', 'sdrfgsfd', 2147483647, 'aewewra@gmail.com', '', '', '', 0, '', '324234', '3243', '07-03-2018', 'sdfsd', '', '27-02-2018', '5797');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'shohag', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
