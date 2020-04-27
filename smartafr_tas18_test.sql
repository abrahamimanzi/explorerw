-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2018 at 09:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartafr_tas18_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommadation`
--

CREATE TABLE `accommadation` (
  `ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `code` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `rooms` varchar(100) NOT NULL,
  `adults` varchar(100) NOT NULL,
  `children` varchar(100) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL,
  `promocode` varchar(30) NOT NULL,
  `additional_info` text NOT NULL,
  `form` varchar(30) NOT NULL,
  `added_date` varchar(50) NOT NULL,
  `payment_state` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accommadation`
--

INSERT INTO `accommadation` (`ID`, `title`, `firstname`, `lastname`, `othername`, `code`, `email`, `hotel`, `rooms`, `adults`, `children`, `checkin`, `checkout`, `promocode`, `additional_info`, `form`, `added_date`, `payment_state`, `state`) VALUES
(1, '', 'Abraham', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Hon.', 'Sddsds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Hon.', 'Sddsds', 'Dsdsds', 'Jjkjk', 'TAS-GOL-34243243', 'abraham.ahoshakiye3@gmail.com', 'legacy', '2', '', '', '04/03/2033', '04/03/2033', 'TAS2017', 'dbhdsjaf', 'API', '13-03-2017', '', ''),
(4, 'Mr.', 'Abraham', 'Imanzi', '', 'TAS-GOL-34243243', 'abrahamahoshakiye@gmail.com', 'legacy', '2', '[\"1\",\"0\"]', '[\"0\",\"1\"]', '08/05/2017', '13/05/2017', 'TAS2017', 'hsahsbd sdahjdsbf dsfbdfs dsfd dsfadfs dsfddfs dsddf', 'API', '13-03-2017', '', ''),
(5, 'Dr.', 'Abraham', 'Imanzi', '', 'TAS-GOL-0000043', 'abrahamahoshakiye@gmail.com', 'ubumwe', '2', '[\"1\",\"0\"]', '[\"0\",\"1\"]', '30/04/2053', '23/04/2032', 'TAS2017', 'b dsads dsa dabds ffdsan  dsam dsfsad dfsaf dfsa fdsabdsf df dfsd dfsaffdsa dsaf dfsa fdsadfs das dsa', 'API', '13-03-2017', '', ''),
(6, 'Mr.', 'Abraham', 'Imanzi', '', 'TAS-SIL-000034', 'abraham@cube.rw', 'hilltop', '1', '[\"0\"]', '[\"1\"]', '24/03/2042', '04/03/2053', '', 'kjhqrwjbgrw ewqrhjveqwv erwqew', 'API', '18-03-2017', '', ''),
(7, 'Mr.', 'Abraham', 'Imanzi', '', 'TAS-GOL-000555', 'abraham@cube.rw', 'galaxy', '1', '[\"1\"]', '[\"0\"]', '21/12/2013', '12/12/2031', 'TAS2017', 'hjdsbjhsdav dsajhvasdsdf dsahvds', 'API', '18-03-2017', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `app_apps`
--

CREATE TABLE `app_apps` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `added_date` varchar(40) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_apps`
--

INSERT INTO `app_apps` (`ID`, `name`, `description`, `added_date`, `state`) VALUES
(1, 'Events-App', 'Our multi-platform system', '1462275783', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `app_company`
--

CREATE TABLE `app_company` (
  `ID` int(11) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `motto` varchar(500) NOT NULL,
  `logo` longtext NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `country_ID` int(11) NOT NULL,
  `details` text NOT NULL,
  `address` int(11) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_company`
--

INSERT INTO `app_company` (`ID`, `user_ID`, `company`, `motto`, `logo`, `email`, `telephone`, `country_ID`, `details`, `address`, `created_date`) VALUES
(1, 5, 'Cube Communications Ltd', 'Create-Commit-Connect', '', 'admin@cube.crw', '0787283185', 255, 'We are a integrated strategies agency', 0, '1462275783'),
(6, 24, 'Smart Africa Ltd', 'The Future Delivered Today', '', 'pm.serge@gmail.com', '0787283185', 141, '', 0, '1474462895'),
(7, 57, 'Test', '', '', 'abrahamahoshakiye1@gmail.com', '', 0, '', 0, '1501527705');

-- --------------------------------------------------------

--
-- Table structure for table `app_company_apps`
--

CREATE TABLE `app_company_apps` (
  `ID` bigint(20) NOT NULL,
  `company_ID` bigint(20) NOT NULL,
  `app_ID` int(11) NOT NULL,
  `added_date` varchar(400) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_company_apps`
--

INSERT INTO `app_company_apps` (`ID`, `company_ID`, `app_ID`, `added_date`, `state`) VALUES
(1, 6, 1, '1462275783', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `ID` bigint(20) NOT NULL,
  `company_ID` bigint(20) NOT NULL,
  `admin_ID` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `salt` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `country_ID` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `last_access` varchar(20) NOT NULL,
  `last_login` varchar(20) NOT NULL,
  `account_session` int(1) NOT NULL DEFAULT '0',
  `profile` varchar(222) NOT NULL,
  `temp` bigint(20) NOT NULL,
  `groups` varchar(25) NOT NULL,
  `date_insert` varchar(45) NOT NULL,
  `recovery_string` text NOT NULL,
  `default_password` varchar(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`ID`, `company_ID`, `admin_ID`, `username`, `firstname`, `lastname`, `password`, `salt`, `email`, `phone`, `country_ID`, `gender`, `last_access`, `last_login`, `account_session`, `profile`, `temp`, `groups`, `date_insert`, `recovery_string`, `default_password`, `state`) VALUES
(24, 6, 0, 'general', 'Abraham', 'IMANZI', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'admin@gmail.com', '0787283185', 171, '', '1520089067', '', 0, '', 0, 'Admin', '1474462895', 'A6BE94456648251D85AA1D6513BE6EB5B4D4A8FAD82AF847E498CC40F40FC1C5', '', 'Activated'),
(52, 6, 51, 'icestone', 'Ice Stone', 'Admin', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'rg@gmail.com', '0787283185', 0, '', '1490548196', '', 0, '', 0, 'RG-Admin', '13-11-2016 16:20:34', '', '', 'Activated'),
(51, 6, 24, 'smartafrica', 'John', 'Admin', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'ah.braham@yahoo.fr', '0787283185', 0, '', '1493041224', '', 0, '', 0, 'Smartafrica-Admin', '13-11-2016 13:25:02', '', '', 'Activated'),
(54, 6, 24, 'rg', 'Rg', 'Super Admin', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'abrahamahoshakiye01@gmail.com', '0783026112', 0, '', '1493022753', '', 0, '', 0, 'RG-SUPER-Admin', '22-01-2017 23:56:30', 'B0B5603F58AA86BD7B2D7A60BEF845956642FAD9BA93AE79F8CEA0EE208FFDE8', '', 'Activated'),
(55, 6, 54, 'end', 'Cube', 'User', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'abraham@cube.rw', '+250783026112', 0, '', '1504767361', '', 0, '', 0, 'Cube-Admin', '29-03-2017 12:06:53', '', '', 'Activated'),
(56, 6, 54, 'sessions', 'Sessions', 'Admin', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'sessions@cube.rw', '+250783026112', 0, '', '1492007077', '', 0, '', 0, 'Sessions-Admin', '31-03-2017 07:12:29', '', '', 'Blocked'),
(57, 7, 0, 'test', 'Test', 'Test', '9e3a9d9929580c59e4c84bd1d8c190f8f4cc08870fecc35801cdabb2fc872954', 'ÞÞãoNòäý]Ù´¼±[Ìíhv[¤\0\\¼ÞÒÛˆ(yÔY', 'abrahamahoshakiye1@gmail.com', '', 0, '', '', '', 0, '', 0, '', '1501527705', '', '', 'Activated'),
(58, 6, 24, 'test1', 'Test', 'Test', 'fee3cf3f943abb4e473fc4b104c9afd54effc770eadadb06cc95d64b1c685ae3', 'aß•`(7à·49ÌÝÐ\'v•ŽÖýßšŠ§`âÙòƒâŠY', 'abrahamahoshakiye@gmail.com', '0784273311', 0, '', '', '', 0, '', 0, 'RG-SUPER-Admin', '13-03-2018 11:08:36', '', '', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `app_user_session`
--

CREATE TABLE `app_user_session` (
  `ID` int(11) NOT NULL,
  `user_ID` double NOT NULL,
  `hash` varchar(550) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `app_user_token`
--

CREATE TABLE `app_user_token` (
  `ID` int(11) NOT NULL,
  `user_ID` double NOT NULL,
  `hash` varchar(550) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_user_token`
--

INSERT INTO `app_user_token` (`ID`, `user_ID`, `hash`) VALUES
(1, 24, '6eef2d0bac4ee2ee22cebe42efc5a37fa1f1a20cde5dd9b81fe1c2a8d9bf17fc'),
(2, 51, '2bc48ce425f69c1c27ad762074a6fd91a600a848d95724e4c3a4a317b46632f1'),
(3, 54, '5851f8a75b73e6bb3b283e765ae8d68837aa45e7b6b9858415ace0e503b84db9'),
(4, 52, '0ca4f2ab74607fa2caed422137b23d6b1f0678a461098e05fa4747e646afdab2'),
(5, 55, '0c6cd4ef0bfa6781776b3d441feb7abbd3b373c74fa0a2dca1e4a9033e2e3faa'),
(6, 56, '582c00214c7f6da92076e0b7ead4565ffa7c4703efee216435f972dfc7012e53'),
(7, 57, 'a433a0375e880f85798e5f79224b28f70e127a1664673ae0e2d8e8c6abe79d45');

-- --------------------------------------------------------

--
-- Table structure for table `cust_login`
--

CREATE TABLE `cust_login` (
  `ID` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `salt` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `last_access` varchar(20) NOT NULL,
  `last_login` varchar(20) NOT NULL,
  `account_session` int(1) NOT NULL DEFAULT '0',
  `profile` varchar(222) NOT NULL,
  `temp` bigint(20) NOT NULL,
  `groups` varchar(25) NOT NULL,
  `created_date` varchar(30) NOT NULL,
  `default_password` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cust_login`
--

INSERT INTO `cust_login` (`ID`, `username`, `password`, `salt`, `email`, `fullname`, `gender`, `last_access`, `last_login`, `account_session`, `profile`, `temp`, `groups`, `created_date`, `default_password`) VALUES
(1, 'pm.serge@gmail.com', 'afa2d124d75612f83135b61d695b839b819bac0b74e324bd7f5f663e2ba198f8', '123', 'pm.serge@gmail.com', 'Web Admin', 'M', '1457293385', '1459238911', 0, 'user_data/profile/resized_29127.jpg', 0, 'Admin', '1444828200', '567627');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` bigint(20) NOT NULL,
  `company_ID` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `added_date` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `company_ID`, `name`, `description`, `added_date`, `state`, `token`) VALUES
(5, 6, 'Transform Africa Summit 2018', 'The information above gives you a quick glance a key statistics. However, for more\n\ninformation, one can export data and run charts as and when required.', '1474642348', '', 'de220168957bd2ccff08f88e9939b95f');

-- --------------------------------------------------------

--
-- Table structure for table `events_corporate`
--

CREATE TABLE `events_corporate` (
  `ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_category` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gold` varchar(20) NOT NULL,
  `platinum` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `added_temp` varchar(50) NOT NULL,
  `form` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_corporate`
--

INSERT INTO `events_corporate` (`ID`, `title`, `firstname`, `lastname`, `email`, `telephone`, `company_name`, `company_category`, `jobtitle`, `country`, `gold`, `platinum`, `status`, `added_date`, `added_temp`, `form`) VALUES
(1, 'Dr.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Hehe', '', 'Chairman / Executive Chairman', 'Rwanda', '', '', '', '27-02-2018', '', 'API'),
(2, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 754 785 467', 'Test', 'Non-Governmental Organization', 'Chairman / Executive Chairman', 'Angola', '7', '6', '', '27-02-2018', '', 'API'),
(3, 'H.e.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Hehe', 'Academia', 'Associate Director', 'Albania', '10', '5', '', '27-02-2018', '', 'API'),
(4, 'Prof.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Test', 'Civil Society', 'Chairman / Executive Chairman', 'American Samoa', '5', '5', '', '27-02-2018', '', 'API'),
(5, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Hehe', 'Civil Society', 'Board Chairman', 'Afghanistan', '5', '5', '', '27-02-2018', '', 'API'),
(6, 'Ms.', 'Test', 'Test', 'valentine@cube.rw', '+250787396547', 'Test', 'International Organization', 'Chairman / Executive Chairman', 'Algeria', '8', 'select', '', '27-02-2018', '', 'API'),
(7, 'H.e.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 784 978 743', 'Hehe', 'Academia', 'Board Chairman', 'American Samoa', '6', '5', '', '01-03-2018', '', 'API'),
(8, 'Hon.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 743 764 376', 'Hehe', 'Academia', 'Associate Director', 'American Samoa', '5', '5', '', '01-03-2018', '', 'API'),
(9, 'Prof.', 'Test', 'Test', 'abraham@cube.rw', '+93 43 534 6534', 'Test', 'Test', 'Test', 'Austria', '6', '5', '', '26-03-2018', '1522047324', 'API');

-- --------------------------------------------------------

--
-- Table structure for table `events_member`
--

CREATE TABLE `events_member` (
  `ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_category` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gold` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `added_temp` varchar(50) NOT NULL,
  `form` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_member`
--

INSERT INTO `events_member` (`ID`, `title`, `firstname`, `lastname`, `email`, `telephone`, `company_name`, `company_category`, `jobtitle`, `country`, `gold`, `type`, `status`, `added_date`, `added_temp`, `form`) VALUES
(1, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 743 764 376', 'Hehe', 'Non-Governmental Organization', 'Business Analyst', 'Argentina', '', 'Smart Africa Members', '', '27-02-2018', '', 'API'),
(2, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 789 878 678', 'Hehe', 'Academia', 'Chairman / Executive Chairman', 'Anguilla', '', 'Government', '', '27-02-2018', '', 'API'),
(3, 'Prof.', 'Test', 'Tset', 'abraham01@cube.rw', '+250 743 764 376', 'Keke', 'International Organization', 'Chief Executive Officer (CEO)', 'American Samoa', '', 'Government', '', '27-02-2018', '', 'API'),
(4, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Test', 'International Organization', 'Chairman / Executive Chairman', 'Albania', '', 'Smart Africa Members', '', '27-02-2018', '', 'API'),
(5, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 743 764 376', 'Hehe', 'Civil Society', 'Business Analyst', 'Aruba', '', 'Smart Africa Members', '', '27-02-2018', '', 'API'),
(6, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 743 764 376', 'Hehe', 'International Organization', 'Chief Financial Officer (CFO)', 'Algeria', '', 'Smart Africa Members', '', '27-02-2018', '', 'API'),
(7, 'Hon.', 'Test', 'Test', 'abraham@cube.rw', '+250 784 978 743', 'Hehe', 'Academia', 'Associate Director', 'Rwanda', '', 'Smart Africa Members', '', '28-02-2018', '', 'API'),
(8, 'Prof.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 784 978 743', 'Hehe', 'Academia', 'Board Chairman', 'Albania', '', 'Smart Africa Members', '', '01-03-2018', '', 'API'),
(9, 'Hon.', 'Test', 'Test', 'abraham@cube.rw', '+250 784 978 743', 'Hehe', 'Academia', 'Associate Director', 'Albania', '', 'Smart Africa Members', '', '01-03-2018', '', 'API'),
(10, 'H.e.', 'Abraham', 'Imanzi', 'abraham@cube.rw', '+250 743 764 376', 'Rwanda', 'Non-Profit Organization', 'Board Chairman', 'Rwanda', '', 'Smart Africa Members', '', '01-03-2018', '', 'API'),
(11, 'Prof.', 'Test', 'Test', 'abraham@cube.rw', '+250 743 764 376', 'Test', 'International Organization', 'Chief Executive Officer (CEO)', 'Albania', '', 'Government', '', '01-03-2018', '', 'API'),
(12, 'Hon.', 'Test', 'Test', 'abraham@cube.rw', '+250 784 978 743', 'Hehe', 'Academia', 'Associate Director', 'Albania', '', 'Smart Africa Members', '', '01-03-2018', '', 'API'),
(13, 'Dr.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 784 978 743', 'Hehe', 'International Organization', 'Chairman / Executive Chairman', 'Albania', '', 'Government', '', '01-03-2018', '', 'API'),
(14, 'H.e.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 743 764 376', 'Hehe', 'Civil Society', 'Board Chairman', 'Albania', '', 'Government', '', '01-03-2018', '', 'API');

-- --------------------------------------------------------

--
-- Table structure for table `events_participant`
--

CREATE TABLE `events_participant` (
  `ID` bigint(20) NOT NULL,
  `code` varchar(30) NOT NULL,
  `company_ID` bigint(20) NOT NULL,
  `event_ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfbirth` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `telephone_office` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_industry` varchar(150) NOT NULL,
  `company_category` varchar(200) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `company_country` varchar(100) NOT NULL,
  `company_city` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `residence_country` varchar(100) NOT NULL,
  `residence_city` varchar(100) NOT NULL,
  `citizenship_country` varchar(100) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `document_number` varchar(100) NOT NULL,
  `media_card` varchar(50) NOT NULL,
  `media_card_expiry` varchar(20) NOT NULL,
  `media_card_authority` varchar(200) NOT NULL,
  `media_equipment` text NOT NULL,
  `exhibition_type` varchar(200) NOT NULL,
  `exhibition_row_number` varchar(200) NOT NULL,
  `exhibition_booth_number` varchar(200) NOT NULL,
  `exhibition_booth_name` varchar(200) NOT NULL,
  `path` varchar(300) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `special_request` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `pass_type` varchar(50) NOT NULL,
  `package_type` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `card_issue` varchar(255) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `payment_rn` varchar(50) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `payment_state` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `receipt_string` text NOT NULL,
  `receipt_number` varchar(100) NOT NULL,
  `transaction_number` varchar(100) NOT NULL,
  `added_date` varchar(50) NOT NULL,
  `added_date_to` varchar(50) NOT NULL,
  `added_temp` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `token` text NOT NULL,
  `form` varchar(30) NOT NULL,
  `host_ID` varchar(200) NOT NULL,
  `host_account_ID` bigint(20) NOT NULL,
  `invite_ID` bigint(20) NOT NULL,
  `registration_type` varchar(100) NOT NULL DEFAULT 'Single',
  `group_size` varchar(100) NOT NULL DEFAULT '1',
  `gala_dinner` varchar(30) NOT NULL,
  `board_meeting` varchar(30) NOT NULL,
  `smart_women` varchar(30) NOT NULL,
  `mayors_lunch` varchar(30) NOT NULL,
  `ceo_lunch` varchar(30) NOT NULL,
  `golf` varchar(50) NOT NULL,
  `clubname` varchar(100) NOT NULL,
  `club_country` varchar(50) NOT NULL,
  `handicap` varchar(50) NOT NULL,
  `teeoftime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_participant`
--

INSERT INTO `events_participant` (`ID`, `code`, `company_ID`, `event_ID`, `user_ID`, `title`, `firstname`, `lastname`, `othername`, `gender`, `dateOfbirth`, `email`, `telephone`, `telephone_office`, `company_name`, `company_industry`, `company_category`, `company_address`, `company_country`, `company_city`, `jobtitle`, `website`, `residence_country`, `residence_city`, `citizenship_country`, `document_type`, `document_number`, `media_card`, `media_card_expiry`, `media_card_authority`, `media_equipment`, `exhibition_type`, `exhibition_row_number`, `exhibition_booth_number`, `exhibition_booth_name`, `path`, `photo`, `special_request`, `category`, `pass_type`, `package_type`, `payment_method`, `card_issue`, `card_number`, `unit_price`, `amount`, `discount`, `currency`, `payment_rn`, `payment_date`, `payment_state`, `status`, `receipt_string`, `receipt_number`, `transaction_number`, `added_date`, `added_date_to`, `added_temp`, `updated_date`, `state`, `token`, `form`, `host_ID`, `host_account_ID`, `invite_ID`, `registration_type`, `group_size`, `gala_dinner`, `board_meeting`, `smart_women`, `mayors_lunch`, `ceo_lunch`, `golf`, `clubname`, `club_country`, `handicap`, `teeoftime`) VALUES
(1, 'TAS-SIL-000001', 6, 5, 0, 'Mr.', 'Serge', 'Karim', '', 'Male', '', 'pm.serge@gmail.com', '+250 728 347 982', '', 'Karibu Kwetu Ltd', 'Attorneys and law', 'International Organization', 'Cube Communications Ltd', 'Rwanda', 'Kigali', 'Chief Information Officer (CIO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', 'A729218793182u098', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Bank-Transfer', 'VC', '', 125000, '112500', 10, 'RWF', 'GRP-000001', '1484244377', 'Confirmed', 'Transaction Successful', 'ReceiptNo: 701306200357 | TransactionNo: 1100000071 | Acquirer Response Code: 00 | Bank Authorization ID: 200357 | Batch Number: 20170113 | Card Type: MC | Amount: 747500 | Message: Approved', '701306200357', '1100000071', '12-01-2017', '12-01-2017', '1484231865', '', 'Pending', 'f83ab153a8a61296defa79a8dedc7267', 'API', 'GRP-000001', 1, 2, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(2, 'TAS-PLA-000002', 6, 5, 0, 'Mr.', 'Ahishakiye', 'Abraham', '', 'Male', '', 'sergemul1@gmail.com', '+250 787 238 479', '', 'Karibu Kwetu Ltd', 'Energy and Natural Resources and Environment', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief of Staff', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '874987398479', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', 'VC', '', 635000, '635000', 0, 'RWF', 'GRP-000001', '1484244377', 'Confirmed', 'Transaction Successful', 'ReceiptNo: 701306200357 | TransactionNo: 1100000071 | Acquirer Response Code: 00 | Bank Authorization ID: 200357 | Batch Number: 20170113 | Card Type: MC | Amount: 747500 | Message: Approved', '701306200357', '1100000071', '12-01-2017', '12-01-2017', '1484238595', '', 'Pending', '8a27dd2f2ec2a4a9c43085f71d5c8dea', 'API', 'GRP-000001', 1, 5, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(3, 'TAS-SIL-000003', 6, 5, 0, 'Dr.', 'Hali', 'Lain', '', 'Male', '', 'sergeweb2@gmail.com', '+250 783 745 289', '', 'Cube Communications Ltd', 'Agricultural Services &amp; Products', 'Non-Governmental Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34798237894', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', '', 150, '135', 10, 'USD', 'GRP-000001', '1484245992', 'Confirmed', 'Transaction Successful', 'ReceiptNo: 701306200359 | TransactionNo: 1100000072 | Acquirer Response Code: 00 | Bank Authorization ID: 200359 | Batch Number: 20170113 | Card Type: MC | Amount: 135 | Message: Approved', '701306200359', '1100000072', '12-01-2017', '12-01-2017', '1484245915', '', 'Pending', 'cf783944ebf4e40c7840ff87fa2954e4', 'API', 'GRP-000001', 1, 4, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(4, 'TAS-SIL-000004', 6, 5, 0, 'Mr.', 'Serge', 'Kama', '', 'Female', '', 'mulwahali@gmail.com', '+250 873 847 298', '', 'Karibu Kwetu Ltd', 'Attorneys and law', 'International Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', 'q93890q8e09qw', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000004', '1484253948', 'Confirmed', 'Transaction Successful', 'ReceiptNo: 701308200361 | TransactionNo: 1100000073 | Acquirer Response Code: 00 | Bank Authorization ID: 200361 | Batch Number: 20170113 | Card Type: MC | Amount: 125000 | Message: Approved', '701308200361', '1100000073', '12-01-2017', '12-01-2017', '1484253934', '', 'Pending', '9586e53e8893a15979046a4426fcf827', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(8, 'TAS-FTG-000008', 6, 5, 24, '', 'Kamoga', 'Kamoga', 'Kamoga', 'Male', '', 'kadibra3@gmail.com', '+250 783 026 112', '', 'hehe', '', '', '', 'Rwanda', '', '', 'hehe.rw', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '98323292329', '', '', '', '', '', '', '', '', '', '', '', 'Face-the-Gorillas-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '17-01-2017', '17-01-2017', '1484657259', '1521014533', 'Pending', '7e4d8b65f4c5ca27dd4fb712b87c2eef', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(9, 'TAS-SIL-000009', 6, 5, 24, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham1@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube communications ltd', 'ICT', 'Private/Corporation', 'Gasabo', 'Rwanda', 'Kigali', 'Coordinator', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '43554564', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000009', '1484724472', 'Confirmed', 'Transaction Successful', 'ReceiptNo: 701819200593 | TransactionNo: 1100000075 | Acquirer Response Code: 00 | Bank Authorization ID: 200593 | Batch Number: 20170118 | Card Type: MC | Amount: 125000 | Message: Approved', '701819200593', '1100000075', '18-01-2017', '18-01-2017', '1484723750', '1484726040', 'Confirmed', 'cb8b1f530dfbffa29d096a5202d412f9', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(10, 'TAS-FTG-000010', 6, 5, 0, '', 'Bonke', 'Man', 'Kamoga', 'Male', '', 'bonke@cube.rw', '+250 724 456 366', '', 'Info cinema', '', '', '', 'Rwanda', '', '', 'cinema.rw', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '435436536345', '', '', '', '', '', '', '', '', '', '', '', 'Face-the-Gorillas-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '25-01-2017', '25-01-2017', '1485336961', '', 'Pending', 'e673254fe6567d3d365faf8fdc361ec6', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(11, 'TAS-GOL-000011', 6, 5, 0, 'Mrs.', 'An', 'Ak', '', 'Female', '', 'ah.braham@yahoo.fr', '+250 788 888 888', '+250 788 888 888', 'none', 'Energy and Natural Resources and Environment', 'Private/Corporation', 'Kibagabaga', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Albania', 'Albania', 'Rwanda', 'Passport', '32984329', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 0, '350', 0, '', 'TAS-GOL-000011', '', 'Pending', '', '', '', '', '07-02-2017', '07-02-2017', '1486448161', '', 'Pending', '3732151357cf38a4134a986f5834f455', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(12, 'TAS-GOL-000012', 6, 5, 0, 'Mr.', 'Abraham', 'Ahishakiye', '', 'Male', '', 'abraham01@cube.rw', '+250 783 343 255', '+250 784 454 434', 'Cube', 'Defence and security', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Investment Officer	', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '23234245245', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 0, '290000', 0, '', 'TAS-GOL-000012', '', 'Refunded', '', '', '', '', '17-02-2017', '17-02-2017', '1487312364', '', 'Pending', 'b637209944e0fd623a7466c38e6f99a1', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(13, 'TAS-SIL-000013', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham02@cube.rw', '+1 783-023-2415', '+1 783-032-432', 'Cube', 'Attorneys and law', 'Non-Governmental Organization', 'Kimihurura', 'United States', 'New york', 'Chief Financial Officer (CFO)', '', 'United States', 'New york', 'United States', 'Passport', '23949384383478', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '150', 0, '', 'TAS-SIL-000013', '', 'Pending', '', '', '', '', '17-02-2017', '17-02-2017', '1487323378', '', 'Pending', '7ecce618606463caf35c38aa5e57ca32', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(14, 'TAS-TEC-000014', 6, 5, 0, 'Mr.', 'Abraham', 'Ahishakiye', '', 'Male', '', 'abraham03@cube.rw', '+256 43 8957837', '+256 493 284289', 'Cube', 'Attorneys and law', 'Non-Profit Organization', 'Kimihurura', 'Uganda', 'kampala', 'Chief Financial Officer (CFO)', '', 'Uganda', 'Kigali', 'Uganda', 'Passport', '438287434', '', '', '', '', '', '', '', '', '', '', '', 'Production-Technician', 'Production Technician', '', 'Debit/Credit Card', '', '', 0, '750', 0, '', 'TAS-TEC-000014', '', 'Free', '', '', '', '', '17-02-2017', '17-02-2017', '1487336329', '', 'Pending', 'ef5e6f4e34d8303b7e026ff608e039e5', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(15, 'TAS-PLA-000015', 6, 5, 0, 'Mr.', 'Abraham', 'Ahishakiye', '', 'Male', '', 'abraham04@cube.rw', '+250 783 023 245', '+250 783 324 323', 'Cube', 'Entertainment Industry', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Engineer', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4324532525', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 0, '635000', 0, '', 'TAS-PLA-000015', '', 'Confirmed', '', '', '', '', '18-02-2017', '18-02-2017', '1487412067', '', 'Pending', '81f8bd2446d7ef677f37b4fd25046d39', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(16, 'TAS-SIL-000016', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham05@cube.rw', '+250 783 747 834', '+250 784 378 378', 'cube', 'Mining', 'Non-Governmental Organization', 'Ngarama', 'Rwanda', 'Kigali', 'Technical Manager', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '378428', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '125000', 0, '', 'TAS-SIL-000016', '1487578295', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487575709', '', 'Pending', 'd8bef9cdcc571fa945b3ea8c6105e1e6', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(17, 'TAS-PLA-000017', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham06@cube.rw', '+250 783 223 232', '+250 783 293 289', 'cube', 'ICT', 'Private/Corporation', 'Ngarama', 'Rwanda', 'Kigali', 'Sales Executive', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '32443243432', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 635000, '635000', 0, '', 'TAS-PLA-000017', '1487580042', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487579982', '', 'Pending', 'c4276d8b42e60c43afd5efc977b63a16', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(18, 'TAS-PLA-000018', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham07@cube.rw', '+250 780 392 390', '+250 783 843 943', 'cube', 'Clergy &amp; Religious Organizations', 'Non-Profit Organization', 'Ngarama', 'Rwanda', 'Kigali', 'Web Developer', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '48978437843', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 635000, '635000', 0, '', 'TAS-PLA-000018', '1487580871', 'Refunded', '', '', '', '', '20-02-2017', '20-02-2017', '1487580837', '', 'Pending', 'fe5b80e8f0fcf46fde27ccc0e7c506ea', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(19, 'TAS-SIL-000019', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham08@cube.rw', '+250 783 289 328', '+250 789 832 932', 'cube', 'Advertising/Public Relations', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '849834839', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, '', 'TAS-SIL-000019', '1487581574', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487581534', '', 'Pending', '587a3eaffc52f236909fecda80b0f478', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(20, 'TAS-GOL-000020', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham09@cube.rw', '+250 789 883 293', '+250 782 983 289', 'cube', 'ICT', 'International Organization', 'Kigali', 'Rwanda', 'Kigali', 'Deputy Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3732236878', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, '', 'TAS-GOL-000020', '1487583398', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487583231', '', 'Pending', '583d85ced67307098e49ca58c07df126', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(21, 'TAS-GOL-000021', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham10@cube.rw', '+250 786 546 757', '+250 785 646 454', 'cube', 'ICT', 'Non-Governmental Organization', 'Kigali', 'Rwanda', 'Kigali', 'Team Leader', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '54365464567', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-GOL-000021', '1487584221', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487584111', '', 'Pending', 'c9a34c2e8e3c7ec352661b512b7ee36f', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(22, 'TAS-GOL-000022', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham11@cube.rw', '+250 784 392 309', '+250 784 329 324', 'cube', 'ICT', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'ICT Advisor', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '37322368784', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-GOL-000022', '1487594967', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487594910', '', 'Pending', '6ea65587aeb0e0b840861d2a63268ed1', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(23, 'TAS-SIL-000023', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham12@cube.rw', '+250 723 438 989', '+250 733 902 390', 'cube', 'ICT', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Co-Founder', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '432838743932', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000023', '1487595953', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487595916', '', 'Pending', '2afaeab4a7b669d7977696316183cd34', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(24, 'TAS-SIL-000024', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham13@cube.rw', '+256 484 573854', '+256 39 3344334', 'cube', 'Logistics and Transportation', 'Private/Corporation', 'Kampala', 'Uganda', 'Kampala', 'Coordinator', '', 'Uganda', 'kampala', 'Uganda', 'Passport', '7832832823', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 150, '150', 0, 'USD', 'TAS-SIL-000024', '1487596923', 'Confirmed', '', '', '', '', '20-02-2017', '20-02-2017', '1487596879', '', 'Pending', 'be815e67a4ac1ce2bc2a3db6b735c535', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(25, 'TAS-PLA-000025', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham14@cube.rw', '+256 754 834578', '+256 743 739839', 'cube', 'Mining', 'Non-Governmental Organization', 'Kampala', 'Uganda', 'Kampala', 'Creative Director', '', 'Uganda', 'kampala', 'Uganda', 'Passport', '32435454452', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 750, '750', 0, 'USD', 'TAS-PLA-000025', '1487662164', 'Confirmed', '', '', '', '', '21-02-2017', '21-02-2017', '1487654913', '', 'Pending', '8cecfd5f4a804053bed753bc097dca83', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(26, 'TAS-CTR-000026', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham15@cube.rw', '+250 783 293 929', '+250 783 292 390', 'cube', 'Manufacturing', 'Civil Society', 'Kigali', 'Rwanda', 'Kigali', 'Deputy CEO', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '324325252542', '', '', '', '', '', '', '', '', '', '', '', 'Catering', 'Catering', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-CTR-000026', '1487672501', 'Confirmed', '', '', '', '', '21-02-2017', '21-02-2017', '1487672458', '', 'Pending', '99b6e8a52926600bce6dd90e02f1d785', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(27, 'TAS-MED-000027', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham16@cube.rw', '+250 782 317 832', '+250 787 328 783', 'cube', 'Media', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Commissioner', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3435365436', '', '', '', '', '', '', '', '', '', '', '', 'Medical', 'Medical', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-MED-000027', '1487672990', 'Confirmed', '', '', '', '', '21-02-2017', '21-02-2017', '1487672949', '', 'Pending', '96d31f766e23833c57703a5f7c9239ff', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(28, 'TAS-GOL-000028', 6, 5, 0, 'Prof.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham17@cube.rw', '+250 785 534 554', '+250 787 655 545', 'cube', 'Agricultural Services &amp; Products', 'Non-Governmental Organization', 'Kigali', 'Rwanda', 'Kigali', 'Commissioner', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '45365436645', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-GOL-000028', '1487673896', 'Confirmed', '', '', '', '', '21-02-2017', '21-02-2017', '1487673861', '', 'Pending', '71c910b6577d12934f2f7a10afb0d3a4', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(29, 'TAS-PLA-000029', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham18@cube.rw', '+250 783 289 432', '+250 734 984 329', 'cube', 'Attorneys and law', 'International Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '734247843784', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 635000, '635000', 0, 'RWF', 'TAS-PLA-000029', '1487674466', 'Confirmed', '', '', '705222230254', '6', '21-02-2017', '21-02-2017', '1487674429', '', 'Pending', 'd38fe66d4bc73682033c90d9f358e05a', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(30, 'TAS-SIL-000030', 6, 5, 0, 'Dr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham19@cube.rw', '+250 783 293 423', '+250 783 437 842', 'cube', 'Defence and security', 'Non-Profit Organization', 'Ngarama', 'Rwanda', 'Kigali', 'Engineer', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '836272432456348', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000030', '1487766366', 'Confirmed', '', '', '705400230308', '10', '22-02-2017', '22-02-2017', '1487751564', '', 'Pending', 'b58ae86ac15990707f15f445384c4670', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(31, 'TAS-SIL-000031', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham20@cube.rw', '+250 789 348 938', '+250 783 278 326', 'cube', 'Hospitality and Tourism', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief Operating Officer (COO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32432525254234', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000031', '1487774858', 'Confirmed', '', '', '705402230320', '18', '22-02-2017', '22-02-2017', '1487770599', '', 'Pending', 'ee5585305314e549951978d798f74c77', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(32, 'TAS-SIL-000032', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham21@cube.rw', '+250 787 677 656', '+250 784 434 254', 'cube', 'Infrastructure', 'International Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief of Staff', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '325435435443', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000032', '1487775258', 'Confirmed', '', '', '705402230321', '19', '22-02-2017', '22-02-2017', '1487775216', '', 'Pending', '04d012b82c9e9b11d569ad1182ed02d6', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(33, 'TAS-GOL-000033', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham22@cube.rw', '+250 783 923 983', '+250 783 432 784', 'cube', 'Financial and Commercial Services', 'International Organization', 'Kigali', 'Rwanda', 'Kigali', 'Commissioner', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3277483278', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-GOL-000033', '1487843425', 'Confirmed', '', '', '705421230344', '20', '23-02-2017', '23-02-2017', '1487843119', '', 'Pending', 'c870951adaf05a2144caaf3d1c5abcf6', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(34, 'TAS-SIL-000034', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham23@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube', 'Advertising/Public Relations', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '211324343432', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000034', '1488034370', 'Cancelled', '', '', '', '0', '25-02-2017', '25-02-2017', '1488033319', '', 'Pending', 'a03fc8f03268a5bd35c5d8f38647fcda', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(35, 'TAS-ASC-000035', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham24@cube.rw', '+250 783 298 238', '+250 782 398 239', 'cube', 'Mining', 'Civil Society', 'Kigali', 'Rwanda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '32326767324', '', '', '', '', '', '', '', '', '', '', '', 'Armed-Security', 'Armed Security', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-ASC-000035', '1488181240', 'Confirmed', '', '', '705819230434', '26', '27-02-2017', '27-02-2017', '1488179167', '', 'Pending', '22c95ea90633943b27e3347ab3f760fb', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(36, 'TAS-GOL-000036', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham25@cube.rw', '+250 783 487 348', '+250 798 328 237', 'cube', 'Clothing and Textiles', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief Investment Officer	', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '324325252542343', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-GOL-000036', '', 'Pending', '', '', '', '', '27-02-2017', '27-02-2017', '1488179601', '', 'Pending', 'd22171c44371851e0cd87f9b087c709f', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(37, 'TAS-PTL-000037', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham26@cube.rw', '+250 784 374 387', '+250 783 893 289', 'cube', 'ICT', 'Non-Governmental Organization', 'Kigali', 'Rwanda', 'Kigali', 'Coordinator', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '5465764', '', '', '', '', '', '', '', '', '', '', '', 'Protocol', 'Protocol', '', 'Bank-Transfer', '', '', 0, '290000', 0, '', 'TAS-PTL-000037', '', 'Pending', '', '', '', '', '27-02-2017', '27-02-2017', '1488181618', '', 'Pending', '9ff5ca0ad4b0e9fd5cff98cc0af31dee', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(38, 'TAS--000038', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham27@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube', 'Attorneys and law', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief of Staff', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '1234567890', '', '', '', '', '', '', '', '', '', '', '', 'Gold-discounted', 'Gold', '', 'Bank-Transfer', '', '', 0, '203000', 30, '', 'TAS--000038', '1488274159', 'Cancelled', '', '', '', '', '28-02-2017', '28-02-2017', '1488273103', '', 'Pending', 'fa40a908e383262512fd71764c62ba44', 'API', 'GRP-000008', 8, 23, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(39, 'TAS-GOD-000039', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham28@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube', 'Clothing and Textiles', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Investment Officer	', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '84748784278', '', '', '', '', '', '', '', '', '', '', '', 'Gold-discounted', 'Gold', '', 'Debit/Credit Card', '', '', 0, '203000', 30, '', 'TAS-GOD-000039', '1488433330', 'Cancelled', '', '', '', '', '28-02-2017', '28-02-2017', '1488274263', '', 'Pending', '1e21adeeeee4d561cc23a1e22d7feb53', 'API', 'GRP-000008', 8, 24, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(40, 'TAS-SIL-000040', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham29@cube.rw', '+250 783 227 823', '+250 783 982 398', 'Cube', 'Healthcare services', 'Private/Corporation', 'Kigali', 'Rwanda', 'Kigali', 'Consultant / Freelancer', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3764324732', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '0', 0, 'RWF', 'TAS-SIL-000040', '1488434065', 'Cancelled', '', '', '', '0', '02-03-2017', '02-03-2017', '1488433487', '', 'Pending', '795b07c8d710214ab47d07b0420a4cde', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(41, 'TAS-SIL-000041', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham30@cube.rw', '+250 788 656 546', '+250 785 676 757', 'Cube', 'Non-profits, Foundations &amp; Philanthropists', 'Non-Profit Organization', 'Kigali', 'Rwanda', 'Kigali', 'Commissioner', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '3453465465', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000041', '1488436928', 'Confirmed', '', '', '706118240299', '29', '02-03-2017', '02-03-2017', '1488434331', '', 'Pending', '05dc0bcc291eea06f7f6f172a0e7f501', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(42, 'TAS-GOL-000042', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham31@cube.rw', '+250 783 893 248', '+250 784 948 934', 'cube', 'Manufacturing', 'Private/Corporation', 'Kigali', 'Rwanda', 'Kigali', 'Creative Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '74382748432', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 290000, '290000', 0, 'RWF', 'TAS-GOL-000042', '', 'Pending', '', '', '', '', '02-03-2017', '02-03-2017', '1488437558', '', 'Pending', 'd9ddb1de44a5d1f3c196e84a9c6ad8c7', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(43, 'TAS-SIL-000043', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham33@cube.rw', '+250 784 934 389', '+250 798 439 439', 'Cube', 'Hospitality and Tourism', 'Private/Corporation', 'Kigali', 'Rwanda', 'Kigali', 'Chief Marketing Officer (CMO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '237637243674376', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000043', '', 'Pending', '', '', '', '', '02-03-2017', '02-03-2017', '1488438588', '', 'Pending', '173826aafe9e955526b0fc50debef9cd', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(44, 'TAS-SIL-000044', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham34@cube.rw', '+250 783 784 328', '+250 783 983 829', 'Cube', 'Logistics and Transportation', 'Private/Corporation', 'Kigali', 'Rwanda', 'Kigali', 'Commissioner', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '3243254542542', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000044', '', 'Pending', '', '', '', '', '02-03-2017', '02-03-2017', '1488439473', '', 'Pending', 'a732f43d2504e9c4995bcea1d731d12e', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(45, 'TAS-SEC-000045', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham35@cube.rw', '+250 786 545 645', '+250 787 657 657', 'Cube', 'Infrastructure', 'Regional Organization', 'Kigali', 'Rwanda', 'Kigali', 'Co-Founder', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3243252525423435', '', '', '', '', '', '', '', '', '', '', '', 'Security', 'Security', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SEC-000045', '1489407948', 'Free', '', '', '', '', '02-03-2017', '02-03-2017', '1488439806', '', 'Pending', '86f3e15649cbc2a011d008c548f96589', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(46, 'TAS--000046', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham36@cube.rw', '+250 765 757 577', '+250 786 575 775', 'Cube', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Investment Officer	', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34354534553', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '125000', 0, '', 'TAS--000046', '', 'Pending', '', '', '', '', '02-03-2017', '02-03-2017', '1488445868', '', 'Pending', '89099581fc07c56042a17003c72f0681', 'API', 'GRP-000009', 9, 53, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(47, 'TAS-GOL-000047', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham37@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '883456789043', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 0, '290000', 0, '', 'TAS-GOL-000047', '', 'Pending', '', '', '', '', '02-03-2017', '02-03-2017', '1488453899', '', 'Pending', 'e1aee084f49135e14433737d85dba60b', 'API', 'GRP-000009', 9, 55, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(48, 'TAS-GSILD-000048', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham38@cube.rw', '+250 788 329 832', '+250 787 328 732', 'Cube', 'ICT', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Engineer', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '23243435445', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Discounted', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '62500', 50, 'RWF', 'TAS-GSILD-000048', '', 'Pending', '', '', '', '', '02-03-2017', '02-03-2017', '1488454379', '', 'Pending', '94a6bd1ca4c253ae3388fdc951a2bc27', 'API', 'GRP-000009', 9, 62, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(49, 'TAS-FTG-000049', 6, 5, 0, '', 'Ewwwrwre', 'Ewwewe', 'Kamoga', 'Female', '', 'eewew@cube.rw', '+250 724 456 366', '', 'Info cinema', '', '', '', '', '', '', '', 'Afghanistan', 'Kigali', 'Afghanistan', 'Passport', '2323232', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '02-03-2017', '02-03-2017', '1488463116', '', 'Pending', 'ebac7a031819bf789d351c4b64e65140', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(50, 'TAS-MSGSC-000050', 6, 5, 0, '', 'Abraham', 'Imanzi', 'Kamoga', 'Female', '12/03/1997', 'abraham39@cube.rw', '+250 724 456 366', '', 'Info cinema', '', '', '', '', '', '', '', 'Rwanda', 'Kigali', 'Rwanda', 'No ID Card', 'No ID Card', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '02-03-2017', '02-03-2017', '1488464828', '', 'Pending', '3c377b03dbe1be17d704670a5d4467d2', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(51, 'TAS-PLA-000051', 6, 5, 54, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham40@cube.rw', '+250 748 374 784', '+250 787 783 832', 'Cube', 'Financial and Commercial Services', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Operating Officer (COO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '883456789044', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 0, '635000', 0, '', 'TAS-PLA-000051', '', 'Pending', '', '', '', '', '03-03-2017', '03-03-2017', '1488520925', '1491786489', 'Confirmed', '60ff723123f7a00f60af8000b83d8be9', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(52, 'TAS-MSGSC-000052', 6, 5, 0, '', 'Abraham', 'Imanzi', 'Aaron', 'Female', '12/04/1985', 'abraham41@cube.rw', '+0725549893', '', 'Solution', '', '', '', '', '', '', '', 'Afghanistan', 'Afrghan', 'Afghanistan', 'ID card', '234342432', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '03-03-2017', '03-03-2017', '1488526325', '', 'Pending', '96ae07777804b711f82464563fdd6fab', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(53, 'TAS-MSGSC-000053', 6, 5, 0, '', 'Abraham', 'Imanzi', 'Aaron', 'Female', '13/09/1956', 'abraham42@cube.rw', '+0725549893', '', 'Solution test', '', '', '', '', '', '', '', 'Afghanistan', 'Afrghan', 'Afghanistan', 'Passport', '43344545', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '03-03-2017', '03-03-2017', '1488528592', '', 'Pending', 'b695799683cfcd32db9b87bc2fb0f1ca', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(54, 'TAS-FTG-000054', 6, 5, 0, '', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham43@cube.rw', '+250 783 289 298', '', 'Cube', '', '', '', 'Rwanda', '', '', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '43422244554', '', '', '', '', '', '', '', '', '', '', '', 'Face-the-Gorillas-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '03-03-2017', '03-03-2017', '1488530822', '', 'Pending', '0c77ed970c3949beaadcad3a8be5ed24', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(55, 'TAS-FTG-000055', 6, 5, 0, '', 'Abraham', 'Imanzi', 'Kamoga', 'Male', '', 'abraham44@cube.rw', '+250 724 456 366', '', 'Info cinema', '', '', '', 'Rwanda', '', '', 'cinema.rw', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '232323232', '', '', '', '', '', '', '', '', '', '', '', 'Face-the-Gorillas-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '12-03-2017', '12-03-2017', '1489282017', '', 'Pending', 'f738e1be3041eb3b9d1f80cbfc986031', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(56, 'TAS-SIL-000056', 6, 5, 0, 'Mr.', 'Abraham', 'Ahishakiye', '', 'Male', '', 'abraham45@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube', 'Clergy &amp; Religious Organizations', 'Non-Governmental Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'ICT Advisor', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32214432343432', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000056', '1492425744', 'Cancelled', '', '', '', '', '14-03-2017', '14-03-2017', '1489481102', '', 'Pending', '831d0c31689f85398170b80ef3783e76', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(57, 'TAS-SIL-000057', 6, 5, 54, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham46@cube.rw', '+250 783 026 112', '+250 789 293 893', 'Cube', 'ICT', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Software Developer', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '21332133241243', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000057', '1489647808', 'Confirmed', '', '', '707519515382', '1100000041', '16-03-2017', '16-03-2017', '1489647683', '1491786639', 'Denied', 'da34a53a86b0ebd85ec5ed4f12e0298b', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(58, 'TAS-VIS-000058', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham47@cube.rw', '+250 789 323 032', '+250 783 278 372', 'Cube', 'ICT', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'ICT Technician', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '432432342', '', '', '', '', '', '', '', '', '', '', '', 'Exhibition-Visitor', 'Visitor', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '17-03-2017', '17-03-2017', '1489749024', '', 'Pending', 'ba8740e14d25f083d959c038d7f1fdf7', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(59, 'TAS-CON-000059', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham48@cube.rw', '+250 789 737 366', '+250 783 263 276', 'Cube', 'ICT', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'ICT Advisor', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34367346', '', '', '', '', '', '', '', '', '', '', '', 'Contractor', 'Contractor', '', '', '', '', 0, '', 0, '', 'TAS-CON-000059', '', 'Free', '', '', '', '', '17-03-2017', '17-03-2017', '1489749358', '', 'Pending', '60d9da93d2e168bd0fd71027465de834', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(60, 'TAS-VIS-000060', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham49@cube.rw', '+250 783 237 873', '+250 786 255 235', 'Cube', 'ICT', 'Non-Profit Organization', 'Kimihura', 'Rwanda', 'Kigali', 'ICT Officer', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '632634664367', '', '', '', '', '', '', '', '', '', '', '', 'Exhibition-Visitor', 'Visitor', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '17-03-2017', '17-03-2017', '1489758727', '', 'Pending', '04c1ce477bca1277d63eb3c722ccafee', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(61, 'TAS-GOL-000061', 6, 5, 0, '', 'Abraham', 'Imanzi', 'Aaron', 'Male', '', 'abraham50@cube.rw', '+250 789 483 597', '', 'Solution test two', '', '', '', 'Rwanda', '', '', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4354365445354', '', '', '', '', '', '', '', '', '', '', '', 'Face-the-Gorillas-Gold-Discounted', 'Gold', '', '', '', '', 0, '', 0, '', 'TAS-GOL-000061', '', 'Free', '', '', '', '', '17-03-2017', '17-03-2017', '1489760294', '', 'Pending', 'f6f0a029984223110d2863fa536f7572', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(63, 'TAS-MSGSC-000063', 6, 5, 0, '', 'Abraham', 'Imanzi', '', 'Female', '12/12/2017', 'abraham51@cube.rw', '+250 789 483 593', '', 'Solution test two', '', '', '', '', '', '', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '2322323223', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '17-03-2017', '17-03-2017', '1489781706', '', 'Pending', '0037a5f6e33236bd41a16631bda4559d', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(64, 'TAS-SIL-000064', 6, 5, 54, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham01@cube.rw', '+250 783 277 832', '+250 732 723 676', 'Cube', 'ICT', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'ICT Technician', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '63163164141367', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '125000', 0, '', 'TAS-SIL-000064', '', 'Confirmed', '', '', '', '', '18-03-2017', '18-03-2017', '1489854496', '1490081306', 'Confirmed', '2d2853e1e721ecc247c553293098d5cb', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(65, 'TAS-GOL-000065', 6, 5, 54, 'Dr.', 'Kamoga', 'Kamoga', '', 'Male', '', 'kadibra2@gmail.com', '+250 783 828 923', '+250 783 834 784', 'Cube', 'ICT', 'Private/Corporation', 'Kimihura', 'Rwanda', 'Kigali', 'Innovator', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '23773887431', '', '', '', '', '', '', '', '', '', '', '', 'Panelist-Gold-Complimentary', 'Gold', '', 'Bank-Transfer', '', '', 0, '125000', 0, '', 'TAS-GOL-000065', '', 'Confirmed', '', '', '', '', '21-03-2017', '21-03-2017', '1490082127', '1490435020', 'Confirmed', 'ebf94da1aed0d0c1114a1a8d5c375719', 'API', '', 0, 0, 'Single', '1', 'Confirm', '', '', '', '', '', '', '', '', ''),
(66, 'TAS-VIS-000066', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham01@cube.rw', '+250 788 932 893', '+250 788 932 893', 'Cube', 'Advertising/Public Relations', 'Non-Governmental Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Student', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4536546545', '', '', '', '', '', '', '', '', '', '', '', 'Exhibition-Visitor', 'Visitor', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '27-03-2017', '27-03-2017', '1490600950', '', 'Pending', 'e74c9070f532f2358daaaa50c6bdbb1f', 'API', '', 0, 0, 'Single', '1', 'Confirm', '', '', '', '', '', '', '', '', ''),
(67, 'TAS-MSGSC-000067', 6, 5, 0, '', 'Test', 'Record', '', 'Female', '21/02/2032', 'abraham01@cube.rw', '+250 789 433 434', '', 'Solution test two', '', '', '', '', '', '', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '435454654654646', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '27-03-2017', '27-03-2017', '1490614380', '', 'Pending', '95ea51f385a82f4abd29664b2f8a183e', 'API', '', 0, 0, 'Single', '1', '', 'Confirm', '', '', '', '', '', '', '', ''),
(68, 'TAS-SPE-000068', 6, 5, 0, 'H.e.', 'Test', 'Speaker', '', 'Female', '', 'speaker@cube.rw', '+250 788 327 823', '+250 732 872 382', 'Rwanda', 'Hospitality and Tourism', 'Private/Corporation', 'Cyangugu', 'Rwanda', 'Kigali', 'Chief Marketing Officer (CMO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '234243423232', '', '', '', '', '', '', '', '', 'data_user/docs/TAS-SPE-000068.', '', 'hjdshjd fdshjfdshj dfsjfdshfds dfshjfd fsdjhhff fdsjhdfh dfsjhfd fdsjhf', 'Speaker-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-03-2017', '29-03-2017', '1490770814', '', 'Pending', '8c6ca4dca1e9f9d5468e63925619dba5', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(69, 'TAS-MDA-000069', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham01@cube.rw', '+250 783 026 112', '+250 783 026 112', 'Cube', 'ICT', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Information Officer (CIO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3243543545', '', '', '', '', '', '', '', '', '', '', '', 'Media', 'Media', '', 'Debit/Credit Card', '', '', 0, '290000', 0, '', 'TAS-MDA-000069', '', 'Free', '', '', '', '', '04-04-2017', '04-04-2017', '1491288488', '', 'Pending', '88ac6026f1dda1fe39262cef342ef6ef', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(70, 'TAS-GSILC-000070', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham01@cube.rw', '+250 783 012 178', '', 'test', 'Advertising/Public Relations', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '23424324123120', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '08-04-2017', '08-04-2017', '1491676564', '', 'Pending', '3eaaa4fdf20dd3ac3c8ce6d5661f0ce9', 'API', '', 0, 78, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(71, 'TAS--000071', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham02@cube.rw', '+250 789 328 289', '+250 738 272 384', 'Cube', 'Attorneys and law', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3223232', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', 'Complimentary', '', '', 0, '125000', 0, '', 'TAS--000071', '', 'Free', '', '', '', '', '09-04-2017', '09-04-2017', '1491748011', '', 'Pending', '7651ee62b2cc3bc68eba8a782ccfeb2b', 'API', '', 0, 79, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(72, 'TAS-GSILC-000072', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham02@cube.rw', '+250 789 437 842', '+250 789 489 438', 'Cube', 'Attorneys and law', 'Non-Governmental Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '21132143431', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', 'Complimentary', '', '', 0, '125000', 0, '', 'TAS-GSILC-000072', '', 'Free', '', '', '', '', '09-04-2017', '09-04-2017', '1491752765', '', 'Pending', 'cd271fa208b2f59a191d21b87863e27e', 'API', '', 0, 79, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(73, 'TAS-GSILC-000073', 6, 5, 0, 'Dr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham03@cube.rw', '+250 783 277 843', '+250 783 872 347', 'Cube', 'Energy and Natural Resources and Environment', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Technology Officer', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '324342342', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', '', '', '', 0, '125000', 0, '', 'TAS-GSILC-000073', '', 'Free', '', '', '', '', '10-04-2017', '10-04-2017', '1491775831', '', 'Pending', '7cc6972a3d23a63272d9355d0c4b4f15', 'API', '', 0, 78, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(74, 'TAS-MSGSC-000074', 6, 5, 0, '', 'Abraham', 'Imanzi', '', 'Female', '12/11/2033', 'abraham01@cube.rw', '+250 789 433 435', '', 'Solution test two', '', '', '', '', '', '', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '4563656453', '', '', '', '', '', '', '', '', '', '', '', 'Ms-geek-Applicant', 'No pass', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '10-04-2017', '10-04-2017', '1491818025', '', 'Pending', 'c129a6cad3212cfa1b1e03ae949fbef4', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(75, 'TAS-SIL-000075', 6, 5, 0, 'Dr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham01@cube.rw', '+250 783 026 112', '+250 788 217 276', 'Cube', 'Agricultural Services &amp; Products', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Marketing Officer (CMO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '22425235454532', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '170000', 0, '', 'TAS-SIL-000075', '', 'Pending', '', '', '', '', '11-04-2017', '11-04-2017', '1491933328', '', 'Pending', '1822faaa97136ede06154d53d1319b4d', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(76, 'TAS-SIL-000076', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '', 'abraham01@cube.rw', '+250 783 278 783', '+250 784 334 343', 'test', 'Agricultural Services &amp; Products', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '23435255', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 125000, '125000', 0, 'RWF', 'TAS-SIL-000076', '1492515085', 'Cancelled', '', '', '710822525898', '1100000040', '18-04-2017', '18-04-2017', '1492514601', '', 'Pending', '0bc3ecb73ba334702c05107b873d3b80', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(77, 'TAS-LIA-000077', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Male', '', 'abraham09@cube.rw', '+250 783 984 389', '+250 783 289 832', 'test', 'Clergy &amp; Religious Organizations', 'Non-Governmental Organization', 'Kimihura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '5432325325', '', '', '', '', '', '', '', '', '', '', '', 'Delegate-Liaison', 'Delegate Liaison', '', 'Debit/Credit Card', '', '', 0, '125000', 0, '', 'TAS-LIA-000077', '', 'Free', '', '', '', '', '18-04-2017', '18-04-2017', '1492515000', '', 'Pending', 'b47edafcb398a9a0d4290c6e5851b73e', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `events_participant` (`ID`, `code`, `company_ID`, `event_ID`, `user_ID`, `title`, `firstname`, `lastname`, `othername`, `gender`, `dateOfbirth`, `email`, `telephone`, `telephone_office`, `company_name`, `company_industry`, `company_category`, `company_address`, `company_country`, `company_city`, `jobtitle`, `website`, `residence_country`, `residence_city`, `citizenship_country`, `document_type`, `document_number`, `media_card`, `media_card_expiry`, `media_card_authority`, `media_equipment`, `exhibition_type`, `exhibition_row_number`, `exhibition_booth_number`, `exhibition_booth_name`, `path`, `photo`, `special_request`, `category`, `pass_type`, `package_type`, `payment_method`, `card_issue`, `card_number`, `unit_price`, `amount`, `discount`, `currency`, `payment_rn`, `payment_date`, `payment_state`, `status`, `receipt_string`, `receipt_number`, `transaction_number`, `added_date`, `added_date_to`, `added_temp`, `updated_date`, `state`, `token`, `form`, `host_ID`, `host_account_ID`, `invite_ID`, `registration_type`, `group_size`, `gala_dinner`, `board_meeting`, `smart_women`, `mayors_lunch`, `ceo_lunch`, `golf`, `clubname`, `club_country`, `handicap`, `teeoftime`) VALUES
(78, 'TAS-GPLAD-000078', 6, 5, 0, 'Mr.', 'Kamoga1', 'Test', '', 'Male', '', 'abraham01@cube.rw', '+250 743 278 342', '+250 783 298 324', 'test', 'Clergy &amp; Religious Organizations', 'Non-Governmental Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Marketing Officer (CMO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '324141313', '', '', '', '', '', '', '', '', '', '', '', 'Group-Platinum-Discounted', 'Platinum', '', 'Group owner', '', '', 635000, '381000', 40, 'RWF', 'TAS-GPLAD-000078', '', 'Pending', '', '', '', '', '19-04-2017', '19-04-2017', '1492594886', '', 'Pending', 'a992be0e0d8e29751f17494f1a502fa4', 'API', 'GRP-000019', 19, 84, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(79, 'TAS-ESILD-000079', 6, 5, 0, 'Mr.', 'Kamoga2', 'Test', '', 'Male', '', 'abraham19@cube.rw', '+250 788 932 838', '+250 738 473 883', 'test', 'Agricultural Services &amp; Products', 'test', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34525343', '', '', '', '', '', '', '', '', '', '', '', 'Exhibitor-Silver-Discounted', 'Exhibitor-Silver-Discounted', '', 'Bank-Transfer', '', '', 125000, '125000', 0, 'RWF', 'TAS-ESILD-000079', '1492676235', 'Cancelled', '', '', '', '', '19-04-2017', '19-04-2017', '1492604881', '', 'Pending', 'bc211a79122946d070ffd15036f5f2af', 'API', 'GRP-000019', 19, 83, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(80, 'TAS-ESILD-000080', 6, 5, 0, 'Mr.', 'Kamoga2', 'Test', '', 'Male', '', 'abraham019@cube.rw', '+250 787 327 632', '+250 787 731 836', 'test', 'Attorneys and law', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Information Officer (CIO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '324142341321', '', '', '', '', '', '', '', '', '', '', '', 'Exhibitor-Silver-Discounted', 'Silver', '', 'Group owner', '', '', 0, '87500', 30, '', 'TAS-ESILD-000080', '', 'Pending', '', '', '', '', '19-04-2017', '19-04-2017', '1492610521', '', 'Pending', 'e9aee3979507155802979a04463fe66d', 'API', 'GRP-000019', 19, 83, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(81, 'TAS-GSILC-000081', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '', 'abraham019@cube.rw', '+250 773 827 238', '+250 732 862 367', 'test', 'Attorneys and law', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '435534525425', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', '', '', '', 0, '125000', 0, '', 'TAS-GSILC-000081', '', 'Free', '', '', '', '', '19-04-2017', '19-04-2017', '1492611025', '', 'Pending', 'af3b9b3f29e9a7ada704f62a38d3cbb3', 'API', 'GRP-0000190', 19, 78, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(82, 'TAS-GOV-000082', 6, 5, 54, 'Amb.', 'Kamoga5', 'Test5', '', 'Male', '', 'abraham01@cube.rw', '+250 788 989 324', '+250 738 724 737', 'test', 'Infrastructure', 'Public Administration', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairperson', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '234234325432', '', '', '', '', '', '', '', '', '', '', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Confirmed', '', '', '', '', '20-04-2017', '20-04-2017', '1492676235', '1493042214', 'Pending', '38bb063460edf0d62bf9d17a8bc15923', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(83, 'TAS-NOC-000083', 6, 5, 0, 'Mr.', 'Kamoga3', 'Test', '', 'Male', '', 'abraham01@cube.rw', '+250 787 378 927', '+250 783 728 782', 'test', 'ICT', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Investment Officer	', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '23423424235', '', '', '', '', '', '', '', '', '', '', '', 'NOC', 'NOC', '', '', '', '', 0, '125000', 0, '', 'TAS-NOC-000083', '', 'Free', '', '', '', '', '21-04-2017', '21-04-2017', '1492759293', '', 'Pending', '66a34dea55efa8371f7d1f33f14efb6f', 'API', 'GRP-000019', 19, 79, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(84, 'TAS-PLA-000084', 6, 5, 0, 'Mr.', 'Kamoga5', 'Test', '', 'Male', '', 'abraham54@cube.rw', '+250 778 917 721', '+250 782 781 728', 'test', 'Energy and Natural Resources and Environment', 'Non-Governmental Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '42342352', '', '', '', '', '', '', '', '', '', '', '', 'Group-Platinum-Complimentary', 'Platinum', '', '', '', '', 0, '290000', 0, '', 'TAS-PLA-000084', '', 'Free', '', '', '', '', '21-04-2017', '21-04-2017', '1492761540', '', 'Pending', '6753b7c621099dc077a013422f9f4dda', 'API', 'GRP-000019', 19, 86, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(85, 'TAS-SIL-000085', 6, 5, 54, 'Mr.', 'Kamogat', 'Test', '', 'Male', '', 'abraham01@cube.rw', '+250 783 343 425', '+250 787 432 857', 'Test', 'ICT', 'Private/Corporation', '150 Rue Paul-Laframboise', 'Canada', 'Gatineau', 'Team Leader', '', 'Canada', 'Gatineau', 'Rwanda', 'ID card', '4554356564', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 150, '150', 0, 'USD', 'TAS-SIL-000085', '1495542290', 'Cancelled', '', '', '', '', '25-04-2017', '25-04-2017', '1493106275', '1493891767', 'Denied', '2f542e31d1dd5ad72a5ca38ff8e37e09', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(86, 'TAS-GOV-000086', 6, 5, 0, 'Hon.', 'Stella', 'Mugabo', 'Ford', 'Female', '', 'sfmugabo@gov.rw', '+250 788 304 906', '', 'MINICAAF ', 'Public Service', 'Public Administration', 'Office of the Prime Minister, Kimihurura', 'Rwanda', 'Kigali', 'Minister', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '1196270002384179', '', '', '', '', '', '', '', '', '', '', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '07-05-2017', '07-05-2017', '1494148384', '', 'Pending', 'a664e7852be4727c870ed039e4b2bc0c', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(87, 'TAS-GOV-000087', 6, 5, 0, 'Amb.', 'Test', 'Test', '', 'Female', '', 'test@test.com', '+93 43 343 4343', '+93 43 343 3434', 'Government', 'Transportation.', 'Public Administration', 'Kimihurura', 'Rwanda', 'Kigali', 'Cabinet Secretary', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '323223211443', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS-GOV-000087.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '19-05-2017', '19-05-2017', '1495192354', '', 'Pending', '841e4617b8cef01415993f0f7afd419c', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(88, 'TAS-GOV-000088', 6, 5, 0, 'Amb.', 'Test', 'Test5', '', 'Male', '', 'text1@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'Government', 'Transportation.', 'Parastatal', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairperson', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4223322323', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS-GOV-000088.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '20-05-2017', '20-05-2017', '1495231410', '', 'Pending', '5ddc61fba0b32df706521e5075907623', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(89, 'TAS-GOV-000089', 6, 5, 0, 'Amb.', 'Test', 'Test5', '', 'Male', '', 'text2@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'Government', 'Transportation.', 'Parastatal', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairperson', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '42233223232', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS-GOV-000089.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '20-05-2017', '20-05-2017', '1495231807', '', 'Pending', '6385b8b944d9bc7e569ee02592a6a379', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(90, 'TAS-GOV-000090', 6, 5, 0, 'Prof.', 'Bonke', 'Test5', '', 'Male', '', 'b@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'Government', 'Infrastructure', 'Parastatal', 'Kimihurura', 'Albania', 'Kigali', 'Cabinet Secretary', '', 'Afghanistan', 'New york', 'Albania', 'Passport', '5345463664576', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS-GOV-000090.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '20-05-2017', '20-05-2017', '1495271810', '', 'Pending', 'b79d6a7da81fbb2ed3c928a971a96864', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(91, 'TAS-GOV-000091', 6, 5, 0, 'Amb.', 'Test', 'Test', '', 'Male', '', 'c@gmail.com', '+93 73 845 6776', '+93 54 654 6547', 'eeee', 'Energy &amp; Water Or Sanitation', 'Public Administration', 'ewwewew', 'Algeria', 'ewew', 'Chairperson', '', 'American Samoa', 'wew', 'Algeria', 'ID card', 'ewwewew', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS-GOV-000091.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '20-05-2017', '20-05-2017', '1495272056', '', 'Pending', '4e75195af4bfa0ed33ceb956422f64fc', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(92, 'TAS--000092', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '', 'texte2@gmail.com', '+250 788 309 928', '+250 788 309 928', 'Cube', 'Agricultural Services &amp; Products', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '432532', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS--000092.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '22-05-2017', '22-05-2017', '1495406281', '', 'Pending', '3fea84a50b89cc2ee2f3dce269bbd774', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(93, 'TAS--000093', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '', 'test9@gmail.com', '+250 788 309 928', '+250 783 026 112', 'Government', 'Agricultural Services &amp; Products', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '123456789044', '', '', '', '', '', '', '', '', '', 'data_user/participants/TAS--000093.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '22-05-2017', '22-05-2017', '1495459108', '', 'Pending', '0776de66f6ca3ad976529228f5b80f01', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(94, 'TAS-MDA-000094', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '', 'media@gmail.com', '+1 264-378-4378', '+1 264-476-3437', 'Government', '', 'Freelancer', 'Kigali', 'Albania', 'Gatineau', 'Photographer', '', 'Albania', 'Albania', 'Albania', 'Passport', '345436534556', '', '12/02/2017', 'RAC', 'fjsdk fdsnjdfs dfn dsk kds jds djjfs', '', '', '', '', '', '', 'shaJHB sAHJjdb dsjdsb djs', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '22-05-2017', '22-05-2017', '1495460716', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(95, 'YCA-MDA-000095', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '', 'text20@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'none', '', 'Freelancer', 'Kimihurura', 'Rwanda', 'Kigali', 'Reporter', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '123456789043', '', '12/12/2011', 'RAC', 'camera', '', '', '', '', '', '', '', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '23-05-2017', '23-05-2017', '1495532540', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(96, 'YCA-MDA-000096', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '', 'texteta@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'none', '', 'Private', 'Kimihurura', 'Rwanda', 'Kigali', 'Reporter', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '123456789073778', '323322', '12/12/2012', 'RAC', 'Camera', '', '', '', '', '', '', '', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '23-05-2017', '23-05-2017', '1495532940', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(97, 'YCA-DEL-000097', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '12/12/2032', 'test29@gmail.com', '+250 788 309 928', '+250 783 026 112', 'none', 'Academics/ Education', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '546546', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA--000097.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '23-05-2017', '23-05-2017', '1495533649', '', 'Pending', '4ce618d81c7e628c6bbe8c9356fe6e27', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(98, 'YCA-DEL-000098', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '12/03/2034', 'test40@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'Goverment', 'Clothing and Textiles', 'Non-Governmental Organization', 'Kigali', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4343434321221', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000098.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '23-05-2017', '23-05-2017', '1495542290', '', 'Pending', 'b1957b29254391f2d984069dbd044926', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(99, 'YCA-DEL-000099', 6, 5, 0, 'Ms.', 'Doris', 'Test', '', 'Female', '21/04/2099', 'doriskaremera@gmail.com', '+250 782 205 668', '', 'TUBE', 'Advertising/Public Relations', 'comms', 'I am here', 'Rwanda', 'Kigali', 'Innovation Manager', '', 'Albania', 'Kigali', 'Rwanda', 'ID card', '112099434234', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000099.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '24-05-2017', '24-05-2017', '1495630177', '', 'Pending', 'f2c3f00c3b47e69cb83922f50753cb89', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(100, 'YCA-GOV-000100', 6, 5, 0, 'Hon.', 'Abraham', 'Imanzi', '', 'Male', '12/12/2014', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', 'ICT', 'Parastatal', 'Kimihurura', 'Rwanda', 'Kigali', 'Ambassador', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '32211', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-GOV-000100.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '24-05-2017', '24-05-2017', '1495631600', '', 'Pending', '86feaf766381a78fab4966f396162283', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(101, 'YCA-MDA-000101', 6, 5, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'Male', '23/02/2032', 'abraham01@cube.rw', '+250 845 435 443', '+93 43 343 3434', 'Cube', '', 'Bloggers', 'Kimihurura', 'Rwanda', 'Kigali', 'Reporter', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '433232', '4333232', '12/11/2033', 'RAC', 'ewweww', '', '', '', '', '', 'data_user/participants/YCA-MDA-000101.jpg', 'eqewe', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '24-05-2017', '24-05-2017', '1495633165', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(102, 'YCA-GOV-000102', 6, 5, 0, 'Amb.', 'Abraham', 'Imanzi', '', 'Male', '31/12/2013', 'abraham01@cube.rw', '+250 789 382 923', '+250 732 783 278', 'Cube', 'Infrastructure', 'Parastatal', 'Kimihurura', 'Rwanda', 'Kigali', 'Minister', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3432322332', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-GOV-000102.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '24-05-2017', '24-05-2017', '1495633483', '', 'Pending', '3edc817e30098a38212ce905c7307768', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(103, 'YCA-DEL-000103', 6, 5, 0, 'Amb.', 'Abraham', 'Imanzi', '', 'Male', '05/04/2034', 'abraham01@cube.rw', '+250 787 865 675', '+250 744 655 646', 'Cube', 'Agricultural Services &amp; Products', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '43543535', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000103.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '24-05-2017', '24-05-2017', '1495633790', '', 'Pending', '5553be34927edf70fd57a5b1341b07fc', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(104, 'YCA-GOV-000104', 6, 5, 0, 'Mr.', 'Abraham', 'Abraham', '', 'Female', '21/03/2013', 'abraham01@cube.rw', '+250 783 932 839', '', 'C', 'ICT', 'Parastatal', 'Ki', 'Rwanda', 'Ki', 'Cabinet Secretary', '', 'Rwanda', 'Ki', 'Rwanda', 'Passport', '3443443', '', '', '', '', '', '', '', '', '', '', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '25-05-2017', '25-05-2017', '1495707754', '', 'Pending', '6b96b97d47572400c11255e1ed0e779f', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(105, 'YCA-DEL-000105', 6, 5, 0, 'Mr.', 'Abraham', 'Abraham', '', 'Male', '21/02/2012', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', 'Advertising/Public Relations', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Associate Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '3432532554', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000105.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '25-05-2017', '25-05-2017', '1495711365', '', 'Pending', 'f9f0c5c75b70bfdc0b37148cf9aaf28b', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(106, 'YCA-GOV-000106', 6, 5, 0, 'Amb.', 'Abraham', 'Abraham', '', 'Female', '31/03/2031', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', 'Infrastructure', 'Parastatal', 'Kimihurura', 'Rwanda', 'Kigali', 'Cabinet Secretary', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '323242433223', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-GOV-000106.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '25-05-2017', '25-05-2017', '1495713070', '', 'Pending', '1ec1b9ffee182ef576b9b1598b1357b8', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(107, 'YCA-MDA-000107', 6, 5, 0, 'Prof.', 'Abraham', 'Abraham', '', 'Male', '12/02/2012', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', '', 'Freelancer', 'Kimihurura', 'Rwanda', 'Kigali', 'Reporter', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '32425464565', '546564', '21/02/2012', 'RAC', 'camera', '', '', '', '', '', 'data_user/participants/YCA-MDA-000107.jpg', 'Session', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '25-05-2017', '25-05-2017', '1495713371', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(108, 'YCA-DEL-000108', 6, 5, 0, 'Mr.', 'Abraham', 'Abraham', 'Sasa', 'Male', '12/12/2013', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', 'Agricultural Services &amp; Products', 'Academia', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', 'ewr54354234', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000108.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '27-05-2017', '27-05-2017', '1495905633', '', 'Pending', '1855e51a3349ec69010898c63e492863', 'API', '', 0, 95, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(109, 'YCA-DEL-000109', 6, 5, 0, 'Ms.', 'Dory', 'Test', '', 'Female', '21/04/2087', 'doris01@cube.rw', '+250 782 205 668', '', 'TUBE', 'Advertising/Public Relations', 'Private/Corporation', 'Kimihurura', 'Brazil', 'Sao Paolo', 'Coordinator', '', 'Uganda', 'Kampala', 'Uganda', 'Passport', 'UG1233456774', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000109.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496045926', '', 'Pending', '255e761b2e8cabc139ea496229efaad8', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(110, 'YCA-GOV-000110', 6, 5, 0, 'Mrs.', 'Dorito', 'Govt', '', 'Female', '26/01/2079', 'doris01@cube.rw', '+256 44 2354522', '', 'Cube', 'Infrastructure', 'Statutory Authority', 'Kimihurura', 'Portugal', 'lisbon', 'Cabinet Secretary', '', 'Portugal', 'lisbon', 'Rwanda', 'ID card', '1198680198277094', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-GOV-000110.jpg', '', 'Government', 'Government', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496046341', '', 'Pending', '3e1dc155b26dcc36fc827aba248f9f1f', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(111, 'YCA-MDA-000111', 6, 5, 0, 'Mr.', 'Media', 'Test', '', 'Male', '26/01/1987', 'doris01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'MEDIA TEST', '', 'Bloggers', 'Kimihurura', 'Rwanda', 'KIVU', 'Writer/Editor', '', 'Rwanda', 'Kivu', 'Rwanda', 'Passport', 'pc202024', '1231212123', '21/04/2018', 'MHC', 'RECORDER', '', '', '', '', '', 'data_user/participants/YCA-MDA-000111.jpg', 'CAMERA ', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496046575', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(112, 'YCA-DEL-000112', 6, 5, 0, 'Hon.', 'Abraham', 'Test5', '', 'Male', '12/03/2032', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', 'Agricultural Services &amp; Products', 'Academia', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '123456789043dd', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496049313', '', 'Pending', 'bdaf6dc41707ccec1c19f5dc831d432d', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(113, 'YCA-MDA-000113', 6, 5, 0, 'Mr.', 'Kamoga5', 'Test5', '', 'Male', '21/03/2042', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', '', 'Bloggers', 'Kimihurura', 'Afghanistan', 'Gatineau', 'Media Manager', '', 'Afghanistan', 'Albania', 'Afghanistan', 'Passport', '456546fd777', '65464', '05/06/2044', 'sajb554', 'camera', '', '', '', '', '', '', 'ewjgre ejhre', 'Media', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496050738', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(114, 'YCA-DEL-000114', 6, 5, 0, 'Ms.', 'Doris', 'Karemera', '', 'Female', '21/04/1998', 'doris01@cube.rw', '+93 43 343 4343', '', 'Cube', 'Academics/ Education', 'Academia', 'Kimihurura', 'Botswana', 'gabarone', 'Principal', '', 'Cuba', 'havanna', 'Rwanda', 'ID card', '999009999999900', '', '', '', '', '', '', '', '', '', 'data_user/participants/YCA-DEL-000114.jpg', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496065145', '', 'Pending', 'e59cdf4cf65231be4dbb97b616a750ad', 'API', '', 0, 97, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(115, 'YCA-DEL-000115', 6, 5, 0, 'Ms.', 'Doris', 'Karemera', '', 'Female', '21/03/2033', 'doris@cube.rw', '+93 43 343 4343', '', 'Cube', 'Clothing and Textiles', 'Private/Corporation', 'Kimihurura', 'Albania', 'alba', 'Co-Founder', '', 'Albania', 'Albania', 'Andorra', 'Passport', '12323232323123213123', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496068409', '', 'Pending', '04b67460c0db66e6f0a9d0caba1a8241', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(116, 'YCA-DEL-000116', 6, 5, 0, 'H.e.', 'Abraham', 'Abraham', '', 'Male', '31/12/2012', 'abraham01@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Cube', 'Advertising/Public Relations', 'Academia', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34325543ds3', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '29-05-2017', '29-05-2017', '1496081899', '', 'Pending', '04e534ee1263b8482bb85d1f077f5cb8', 'API', '', 0, 98, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(117, 'YCA-DEL-000117', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Female', '04/03/2042', 'abraham01@cube.rw', '+93 54 782 4583', '', 'bhjhsdf', 'Advertising/Public Relations', 'Civil Society', 'erwewrewt', 'South Sudan', 'Juba', 'Associate Director', '', 'South Sudan', 'juba', 'South Sudan', 'Passport', '5436543231', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegateinvitee', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '01-06-2017', '01-06-2017', '1496343232', '', 'Pending', '75517301d827e9747cd9fe90b0a4b955', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(118, 'YCA-DEL-000118', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Female', '04/03/2042', 'abraham01@cube.rw', '+93 54 782 4583', '', 'bhjhsdf', 'Advertising/Public Relations', 'Civil Society', 'erwewrewt', 'South Sudan', 'Juba', 'Associate Director', '', 'South Sudan', 'juba', 'South Sudan', 'Passport', '54365432311', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegateinvitee', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '01-06-2017', '01-06-2017', '1496343412', '', 'Pending', 'c4c37542791d1686d4b8bff248a30b24', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(119, 'YCA-DEL-000119', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Female', '04/03/2042', 'abraham01@cube.rw', '+93 54 782 4583', '', 'bhjhsdf', 'Advertising/Public Relations', 'Civil Society', 'erwewrewt', 'South Sudan', 'Juba', 'Associate Director', '', 'South Sudan', 'juba', 'South Sudan', 'Passport', '543654323112', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegateinvitee', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '01-06-2017', '01-06-2017', '1496343552', '', 'Pending', 'b485910741853a010ad95c245b666883', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(120, 'YCA-GOV-000120', 6, 5, 0, 'Amb.', 'Test', 'Test', '', 'Male', '31/12/2014', 'abraham01@cube.rw', '+93 34 675 6747', '', 'ccc', 'Transportation.', 'Regulatory Agency', 'srewrewr', 'Afghanistan', 'dfdsf', 'Associate Director', '', 'Afghanistan', 'dfdsf', 'Afghanistan', 'Passport', '454343vds', '', '', '', '', '', '', '', '', '', '', '', 'Government', 'Governmentinvitee', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '01-06-2017', '01-06-2017', '1496344208', '', 'Pending', '0b487be314d29879d9443c552b2dbcf5', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(121, 'YCA-DEL-000121', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Male', '13/02/2032', 'abraham01@cube.rw', '+93 21 488 9328', '+93 23 421 4214', 'test', 'Agricultural Services &amp; Products', 'Non-Profit Organization', 'sadasd', 'Rwanda', 'kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', 'w12223', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '06-06-2017', '06-06-2017', '1496751436', '', 'Pending', '0801f90b8831a4a6e5dacf539c873ee5', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(122, 'YCA-DEL-000122', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '21/03/2012', 'abraham01@cube.rw', '+93 34 255 4235', '+93 43 225 2352', 'uehiwhue', 'Agricultural Services &amp; Products', 'Academia', 'Kimihura', 'Rwanda', 'kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32123134f', '', '', '', '', '', '', '', '', '', '', '', 'Delegate', 'COMS', '', '', '', '', 0, '', 0, '', 'YCA-DEL-000122', '', 'Pending', '', '', '', '', '06-06-2017', '06-06-2017', '1496753696', '', 'Pending', 'bd96be05fbc74375296d14f9b1fe9df7', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(123, 'YCA-DEL-000123', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '21/03/2012', 'abraham01@cube.rw', '+93 34 255 4235', '+93 43 225 2352', 'uehiwhue', 'Agricultural Services &amp; Products', 'Academia', 'Kimihura', 'Rwanda', 'kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32123134fr', '', '', '', '', '', '', '', '', '', '', '', 'Delegateinvitee', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '06-06-2017', '06-06-2017', '1496762557', '', 'Pending', 'e877b648a47e82dbc0057fb45bf91551', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(124, 'YCA-DEL-000124', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '21/03/2012', 'abraham01@cube.rw', '+93 34 255 4235', '+93 43 225 2352', 'uehiwhue', 'Agricultural Services &amp; Products', 'Academia', 'Kimihura', 'Rwanda', 'kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32123134fr3', '', '', '', '', '', '', '', '', '', '', '', 'Delegateinvitee', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Confirmed', '', '', '', '', '06-06-2017', '06-06-2017', '1496762738', '', 'Pending', '7b2dc14940d274733a4fe7c167414d65', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(125, 'YCA-GOV-000125', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '12/12/2012', 'abraham01@cube.rw', '+93 32 673 2723', '+93 36 732 8238', 'Test', 'ICT', 'Public Administration', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '34324532q', '', '', '', '', '', '', '', '', '', '', '', 'Government', 'Governmentinvitee', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '07-06-2017', '07-06-2017', '1496822022', '', 'Pending', 'f51b00273a0a613610a37c20da0e0971', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(126, 'YCA-GOV-000126', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '12/12/2012', 'abraham01@cube.rw', '+93 32 673 2723', '+93 36 732 8238', 'Test', 'ICT', 'Public Administration', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '34324532qe', '', '', '', '', '', '', '', '', '', '', '', 'Delegate invited', 'Delegate-Liaison', '', '', '', '', 0, '', 0, '', 'YCA-GOV-000126', '', 'Confirmed', '', '', '', '', '07-06-2017', '07-06-2017', '1496822743', '', 'Pending', 'c174042cee3c2d1df23633da4ef075cf', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(127, 'YCA-REQ-000127', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Female', '12/12/2013', 'abraham01@cube.rw', '+93 23 989 2428', '+93 23 283 2982', 'test', 'Energy &amp; Water Or Sanitation', 'Public Administration', 'Kimihura', 'Rwanda', 'Kigali', 'Chairman', '', 'Rwanda', 'kigali', 'Rwanda', 'Passport', '2344324d', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Delegate', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000127', '1496824358', 'Cancelled', '', '', '', '', '07-06-2017', '07-06-2017', '1496824358', '', 'Pending', 'db9b8c5483020aac8fdccd9368426dc3', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(128, 'YCA-REQ-000128', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Female', '12/12/2013', 'abraham01@cube.rw', '+93 23 989 2428', '+93 23 283 2982', 'test', 'Energy &amp; Water Or Sanitation', 'Public Administration', 'Kimihura', 'Rwanda', 'Kigali', 'Chairman', '', 'Rwanda', 'kigali', 'Rwanda', 'Passport', '2344324de', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Delegate', '', '', 'VC', 'xxxxxxxxxxxx8769', 0, '0', 0, 'RWF', 'YCA-REQ-000128', '1519277322', 'Confirmed', '', '', '805316157011', '32', '07-06-2017', '07-06-2017', '1496824572', '', 'Pending', '2d7288c93dc886ef5b6f5115d546fe00', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(129, 'YCA-REQ-000129', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Female', '12/12/2014', 'abraham01@cube.rw', '+93 23 423 4432', '+93 43 234 3254', 'test', 'Transportation.', 'Regulatory Agency', 'kimihurura', 'Rwanda', 'Kigali', 'Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34535435s', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Moderator', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000129', '', 'Pending', '', '', '', '', '07-06-2017', '07-06-2017', '1496831699', '', 'Pending', 'c8521f7d06bef1b2f32d9e195fa28ec5', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(130, 'YCA-REQ-000130', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Female', '12/12/2014', 'abraham01@cube.rw', '+93 23 423 4432', '+93 43 234 3254', 'test', 'Transportation.', 'Regulatory Agency', 'kimihurura', 'Rwanda', 'Kigali', 'Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34535435sd', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Contractor', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000130', '', 'Pending', '', '', '', '', '07-06-2017', '07-06-2017', '1496831837', '', 'Pending', '2808694541fe7c6502f2e01e9a7156d9', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(131, 'YCA-REQ-000131', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Female', '12/12/2014', 'abraham01@cube.rw', '+93 23 423 4432', '+93 43 234 3254', 'test', 'Transportation.', 'Regulatory Agency', 'kimihurura', 'Rwanda', 'Kigali', 'Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34535435sd1', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Production-Technician', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000131', '', 'Pending', '', '', '', '', '07-06-2017', '07-06-2017', '1496832035', '', 'Pending', 'bdd9a7f585580ceebdf5c4abfccb953c', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(132, 'YCA-REQ-000132', 6, 5, 0, 'Mrs.', 'Test', 'Test', '', 'Female', '12/03/2031', 'abraham01@cube.rw', '+93 53 264 3247', '+93 23 565 3246', 'Test', 'Academics/ Education', 'Civil Society', 'Test', 'Rwanda', 'kigali', 'Associate Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '3245543u', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Protocol', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000132', '', 'Pending', '', '', '', '', '07-06-2017', '07-06-2017', '1496832729', '', 'Pending', 'b233fe9845877805c3f6de87e3e3df1c', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(133, 'YCA-REQ-000133', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '12/11/2031', 'abraham01@cube.rw', '+93 23 474 3874', '+93 37 678 4326', 'Test', '', 'Bloggers', 'test', 'Rwanda', 'Kigali', 'Reporter', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '42342f43', 'Test', '12/03/2032', 'Test', 'Test', '', '', '', '', '', '', 'test', 'Media request', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Pending', '', '', '', '', '07-06-2017', '07-06-2017', '1496837925', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(134, 'YCA-REQ-000134', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Male', '11/02/2013', 'abraham01@cube.rw', '+93 35 278 4327', '+93 37 247 8423', 'Test', 'Agricultural Services &amp; Products', 'Civil Society', 'Test', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', 'Kigali', '', '', '', '', '', '', '', '', '', '', '', 'Delegate request', 'Delegate-Liaison', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000134', '', 'Confirmed', '', '', '', '', '07-06-2017', '07-06-2017', '1496838388', '', 'Pending', 'ce6f3a76e33bbcebf68d98e09c8c8656', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(135, 'YCA-REQ-000135', 6, 5, 24, 'Ms.', 'Test', 'Test', '', 'Male', '12/11/2021', 'abraham01@cube.rw', '+93 48 532 8773', '+93 34 873 4843', 'Test', 'ICT', 'Public Administration', 'Test', 'Rwanda', 'Kigali', 'Cabinet Secretary', '', 'Rwanda', 'kigali', 'Rwanda', 'ID card', '546564543id', '', '', '', '', '', '', '', '', '', '', '', 'Government request', 'VVIP', '', '', '', '', 0, '', 0, '', 'YCA-REQ-000135', '', 'Confirmed', '', '', '', '', '07-06-2017', '07-06-2017', '1496838604', '1497965007', 'Confirmed', '0f14236490ab651f6c6cdbf26f8212ff', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(136, 'YCA-GOV-000136', 6, 5, 0, 'Ms.', 'Test', 'Test', '', 'Female', '12/12/2043', 'abraham01@cube.rw', '+93 43 285 7348', '+93 34 726 7342', 'test', 'Transportation.', 'Statutory Authority', 'Test', 'Rwanda', 'kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '4365463512ja', '', '', '', '', '', '', '', '', '', '', '', 'Government invited', 'VIP', '', '', '', '', 0, '', 0, '', 'YCA-GOV-000136', '', 'Confirmed', '', '', '', '', '07-06-2017', '07-06-2017', '1496838762', '', 'Pending', '7748bb5af9126ab077c144677066970c', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1850, 'YCA-DEL-000137', 6, 5, 24, 'Ms.', 'Test', 'Test', '', 'Female', '21/03/2013', 'abraham01@cube.rw', '+93 45 346 5365', '+93 34 535 4356', 'Test', 'Academics/ Education', 'Academia', 'Test', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '213131od12', '', '', '', '', '', '', '', '', '', '', '', 'Delegate invited', 'VIP', '', '', '', '', 0, '', 0, '', 'YCA-DEL-000137', '', 'Confirmed', '', '', '', '', '07-06-2017', '07-06-2017', '1496839197', '1497887395', 'Denied', '17d622cc4c77f84bba3037d3b9c72e81', 'API', '1', 1, 1, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1851, 'TAS-SIL-001851', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Male', '12/12/2012', 'abraham01@cube.rw', '+93 43 534 6534', '', 'Cube', 'ICT', 'Private/Corporation', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Operating Officer (COO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '343454546464', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', '', 213500, '213500', 0, 'RWF', 'TAS-SIL-001851', '1518163305', 'Confirmed', '', '', '804020401301', '1100000044', '09-02-2018', '09-02-2018', '1518163002', '', 'Pending', 'b9723d2ef48f7afbf59ea95a67aa7a7e', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1852, 'TAS-SIL-001852', 6, 5, 0, 'Dr.', 'Abraham', 'Imanzi', '', 'Male', '21/02/2012', 'abraham01@cube.rw', '+250 789 982 398', '', 'Cube', 'Clergy &amp; Religious Organizations', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4344554545', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', 'xxxxxxxxxxxx8769', 213500, '213500', 0, 'RWF', 'TAS-SIL-001852', '1518355908', 'Confirmed', '', '', '804301401747', '1100000047', '11-02-2018', '11-02-2018', '1518349387', '', 'Pending', '217b4e65cdd1ce49cce8aff8c90b1ef2', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1853, 'TAS-SIL-001853', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '12/02/2012', 'abraham01@cube.rw', '+250 784 978 743', '', 'Hehe', 'Agricultural Services &amp; Products', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', 'ewrew32232', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', 'xxxxxxxxxxxx8769', 213500, '213500', 0, 'RWF', 'TAS-SIL-001853', '1519275510', 'Confirmed', '', '', '805316157011', '32', '22-02-2018', '22-02-2018', '1519275401', '', 'Pending', '62a5df8bae65e67dc00b2bece0474fa7', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1854, 'TAS-SIL-001854', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Male', '04/05/2034', 'abraham01@cube.rw', '+250 754 785 467', '', 'Keke', 'Agricultural Services &amp; Products', 'Non-Governmental Organization', 'Kimironko', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '544fdr434', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '213500', 0, '', 'TAS-SIL-001854', '', 'Pending', '', '', '', '', '22-02-2018', '22-02-2018', '1519277659', '', 'Pending', 'b87b21a87cc04659c98156247c1047a3', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1855, 'TAS-SIL-001855', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '04/03/2034', 'abraham02@cube.rw', '+250 743 764 376', '', 'Test', 'Clergy &amp; Religious Organizations', 'Non-Profit Organization', 'Hehe', 'Rwanda', 'Kigali', 'Chief Investment Officer	', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '3543sd434', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '213500', 0, '', 'TAS-SIL-001855', '', 'Pending', '', '', '', '', '22-02-2018', '22-02-2018', '1519278592', '', 'Pending', '310a65109edbc053df310fe7c16ed933', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1856, 'TAS-SIL-001856', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Male', '21/03/2031', 'abraham01@cube.rw', '+250 776 765 464', '', 'Kagarama', 'Agricultural Services &amp; Products', 'International Organization', 'Kagarama', 'Rwanda', 'Kigali', 'Chief Information Officer (CIO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '4355fgfdt5', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Bank-Transfer', '', '', 0, '213500', 0, '', 'TAS-SIL-001856', '', 'Pending', '', '', '', '', '22-02-2018', '22-02-2018', '1519280107', '', 'Pending', '42ca0dac417f2a2266670d8b2e590360', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1857, 'TAS-SIL-001857', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Male', '31/03/2032', 'abraham01@cube.rw', '+250 757 567 567', '', 'Kuk', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kimironko', 'Rwanda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '54fgfd545', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', 'xxxxxxxxxxxx8769', 213500, '213500', 0, 'RWF', 'TAS-SIL-001857', '1519287288', 'Confirmed', '', '', '805320157158', '34', '22-02-2018', '22-02-2018', '1519280560', '', 'Pending', '5df60ff1791eeb2dd4922e397df1cb64', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1858, 'TAS-GOL-001858', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '23/03/2032', 'abraham01@cube.rw', '+250 785 454 54', '', 'Gigi', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kimihurura', 'Rwanda', 'kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'KIGALI', 'Rwanda', 'Passport', '768776DFFER', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', 'VC', 'xxxxxxxxxxxx8769', 384300, '384300', 0, 'RWF', 'TAS-GOL-001858', '1519286435', 'Confirmed', '', '', '805320157134', '33', '22-02-2018', '22-02-2018', '1519282813', '', 'Pending', 'f925f78276653f244502141dd2de67c2', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'Yes', 'rugwiro', 'Rwanda', '5', '6:24'),
(1859, 'TAS-PLA-001859', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Female', '04/02/2035', 'abraham01@cube.rw', '+250 856 865 775', '', 'Hehe', 'Clothing and Textiles', 'Academia', 'Kicukiro', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '43345df3', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Bank-Transfer', '', '', 0, '683200', 0, '', 'TAS-PLA-001859', '', 'Pending', '', '', '', '', '22-02-2018', '22-02-2018', '1519283211', '', 'Pending', 'd72670ff1deea27c85555ff05c4a0235', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'Yes', 'Test club', 'Rwanda', '4', '7:24'),
(1860, 'TAS-REQ-001860', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '21/11/2033', 'abraham01@cube.rw', '+250 787 876 76', '', 'igihe', '', 'Bloggers', 'Town', 'Rwanda', 'Kigali', 'Reporter', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '5435ertre45', '34ds43', '12/12/2013', 'rca', 'rewtrtwb trterwb fgrer', '', '', '', '', '', '', 'rtrewt egurewjh erwhjgre rewh', 'Media request', 'Media', '', '', '', '', 0, '', 0, '', '', '', 'Pending', '', '', '', '', '22-02-2018', '22-02-2018', '1519305741', '', 'Pending', '', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1861, 'TAS-VIS-001861', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Female', '', 'abraham01@cube.rw', '+250 788 732 787', '', 'Hehe', 'Agricultural Services &amp; Products', 'International Organization', 'Kacyiru', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', 'ewr6762hgdgy', '', '', '', '', '', '', '', '', '', '', '', 'Exhibition-Visitor', 'Visitor', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '22-02-2018', '22-02-2018', '1519307821', '', 'Pending', '4cc0caca3f05d664b482d64fe956fd8b', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1862, 'TAS-ISIL-001862', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '21/02/2012', 'abraham01@cube.rw', '+256 747 487837', '', 'Katanga', 'Defence and security', 'Civil Society', 'Kampala', 'Uganda', 'Kampala', 'Chairman / Executive Chairman', '', 'Uganda', 'Kampala', 'Uganda', 'Passport', '3424342gf', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver-Discounted', 'Silver', '', 'Debit/Credit Card', '', '', 0, '175', 30, '', 'TAS-ISIL-001862', '1523882204', 'Cancelled', '', '', '', '', '23-02-2018', '23-02-2018', '1519390527', '', 'Pending', 'b78bdad87ac239163dfd63d53bd40da5', 'API', 'GRP-000023', 23, 99, 'Single', '1', '', '', '', '', '', 'Yes', 'Kkk', 'Uganda', '1', '6:12'),
(1863, 'TAS-IGOL-001863', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Female', '31/03/2032', 'abraham01@cube.rw', '+256 786 645654', '', 'hehe', 'Advertising/Public Relations', 'International Organization', 'Kimihurura', 'Rwanda', 'kigali', 'Board Chairman', '', 'Uganda', 'kigali', 'Uganda', 'Passport', 'rerer433', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold-Complimentary', 'Individual-Gold-Complimentary', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '23-02-2018', '23-02-2018', '1519393716', '', 'Pending', 'c83597ce3f892c203886231aca04e233', 'API', 'GRP-000023', 23, 102, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1864, 'TAS-GSILC-001864', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '12/02/2012', 'abraham01@cube.rw', '+213 756 56 57 65', '', 'Hehe', 'Agricultural Services &amp; Products', 'Civil Society', 'Kimihurura', 'Algeria', 'Algeria', 'Business Analyst', '', 'Algeria', 'Algeria', 'Algeria', 'Passport', '323322dr3322', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', '', '', '', 0, '250', 0, '', 'TAS-GSILC-001864', '', 'Free', '', '', '', '', '24-02-2018', '24-02-2018', '1519476342', '', 'Pending', 'ecb938c62ee7db6ed0cd770c272bf900', 'API', 'GRP-000024', 24, 115, 'Single', '1', '', '', '', '', '', 'No', 'tesr', 'Algeria', '6', '7:00'),
(1865, 'TAS-GPLAD-001865', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Male', '12/02/2012', 'abraham01@cube.rw', '+256 778 756765', '', 'Test', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kampala', 'Uganda', 'Kigali', 'Chief Financial Officer (CFO)', '', 'Uganda', 'Kampala', 'Uganda', 'Passport', 'dfd43434ug', '', '', '', '', '', '', '', '', '', '', '', 'Group-Platinum-Discounted', 'Platinum', '', 'Group owner', '', '', 0, '720', 10, '', 'TAS-GPLAD-001865', '', 'Pending', '', '', '', '', '24-02-2018', '24-02-2018', '1519476938', '', 'Pending', 'df63534d7881c04c03aafc5ca7073d26', 'API', 'GRP-000024', 24, 114, 'Single', '1', '', '', '', '', '', 'Yes', 'Test club', 'Uganda', '3', '6:48'),
(1866, 'TAS-SIL-001866', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '31/03/2032', 'abraham02@cube.rw', '+256 32 4324324', '', 'Test', 'Clergy &amp; Religious Organizations', 'Civil Society', 'Kampala', 'Uganda', 'Kampala', 'Business Analyst', '', 'Uganda', 'Kampala', 'Uganda', 'Passport', '567ugh66', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Bank-Transfer', '', '', 0, '250', 0, '', 'TAS-SIL-001866', '', 'Pending', '', '', '', '', '24-02-2018', '24-02-2018', '1519477895', '', 'Pending', 'fba40c288900d492a38900fd7f640f07', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `events_participant` (`ID`, `code`, `company_ID`, `event_ID`, `user_ID`, `title`, `firstname`, `lastname`, `othername`, `gender`, `dateOfbirth`, `email`, `telephone`, `telephone_office`, `company_name`, `company_industry`, `company_category`, `company_address`, `company_country`, `company_city`, `jobtitle`, `website`, `residence_country`, `residence_city`, `citizenship_country`, `document_type`, `document_number`, `media_card`, `media_card_expiry`, `media_card_authority`, `media_equipment`, `exhibition_type`, `exhibition_row_number`, `exhibition_booth_number`, `exhibition_booth_name`, `path`, `photo`, `special_request`, `category`, `pass_type`, `package_type`, `payment_method`, `card_issue`, `card_number`, `unit_price`, `amount`, `discount`, `currency`, `payment_rn`, `payment_date`, `payment_state`, `status`, `receipt_string`, `receipt_number`, `transaction_number`, `added_date`, `added_date_to`, `added_temp`, `updated_date`, `state`, `token`, `form`, `host_ID`, `host_account_ID`, `invite_ID`, `registration_type`, `group_size`, `gala_dinner`, `board_meeting`, `smart_women`, `mayors_lunch`, `ceo_lunch`, `golf`, `clubname`, `club_country`, `handicap`, `teeoftime`) VALUES
(1867, 'TAS-SIL-001867', 6, 5, 54, 'Hon.', 'Test', 'Test', '', 'Male', '12/02/2011', 'abraham01@cube.rw', '+673 455 4545', '', 'Hehe', 'Agricultural Services &amp; Products', 'International Organization', 'Brunei', 'Brunei', 'Brunei', 'Chairman / Executive Chairman', '', 'Brunei', 'Brunei', 'Brunei', 'Passport', 'Brunei1223233', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', 'VC', 'xxxxxxxxxxxx8769', 250, '250', 0, 'USD', 'TAS-SIL-001867', '1519478627', 'Confirmed', '', '', '805601431204', '1100000053', '24-02-2018', '24-02-2018', '1519478417', '1519480289', 'Confirmed', '82da9174a397c0e7850357cfc38c39ba', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1868, 'TAS-SIL-001868', 6, 5, 0, 'Ms.', 'Test', 'Test', 'Test', 'Female', '14/07/1980', 'valentine@cube.rw', '+93 78 724 5456', '+93 78 683 6573', 'Test', 'test', 'Test', 'TEST', 'Afghanistan', 'TEST', 'test', '', 'Afghanistan', 'TEST', 'Sao Tome and Principe', 'Passport', 'TEST', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Bank-Transfer', '', '', 0, '250', 0, '', 'TAS-SIL-001868', '', 'Pending', '', '', '', '', '27-02-2018', '27-02-2018', '1519727547', '', 'Pending', '9f54e8ea5030f4d83e12b55232bfc916', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1869, 'TAS-GOL-001869', 6, 5, 0, 'Ms.', 'Test', 'Test', 'Test', 'Female', 'dd/mm/yyyy', 'valentine.nashipae@gmail.com', '+978305951', '+93 78 742 010', 'Test', 'Energy and Natural Resources and Environment', 'Test', 'Test', 'American Samoa', 'Test', 'Associate Director', '', 'Afghanistan', 'TEST', 'Afghanistan', 'Passport', 'a12355', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Bank-Transfer', '', '', 0, '450', 0, '', 'TAS-GOL-001869', '', 'Pending', '', '', '', '', '27-02-2018', '27-02-2018', '1519728396', '', 'Pending', 'bcd806ab6f8d5f0dcd443241656338cc', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'Yes', 'Kigali Golf club ', 'Albania', '17', '7:12'),
(1870, 'TAS-SAGSC-001870', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '23/03/2032', 'abraham01@cube.rw', '+254 43 3534535', '', 'Cube', 'Academics/ Education', 'Civil Society', 'Gisozi', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Kenya', 'Nairobi', 'Kenya', 'Passport', '322s334', '', '', '', '', '', '', '', '', '', '', '', 'Smart-Africa-Member-Silver-Complimentary', 'Smart-Africa-Member-Silver-Complimentary', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '05-03-2018', '05-03-2018', '1520272536', '', 'Pending', 'bd45d7a17dbfcc9bd81b3e9246b45a5c', 'API', '', 0, 117, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1871, 'TAS-EXH-001871', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Male', '12/02/2012', 'abraham01@cube.rw', '+250 783 023 455', '', 'Test', 'Attorneys and law', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32342432er', '', '', '', '', '', '', '', '', '', '', '', 'Exhibition-Visitor', 'Exhibition-Visitor', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '06-03-2018', '06-03-2018', '1520352020', '', 'Pending', '3008d5b8603ad4fcad3d80e88f856d21', 'API', 'GRP-000025', 25, 121, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1872, 'TAS-ISILC-001872', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '23/02/2032', 'abraham01@cube.rw', '+93 43 534 6534', '', 'Test', 'Advertising/Public Relations', 'Civil Society', 'Gasabo', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '232332lt23', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver-Complimentary', 'Individual-Silver-Complimentary', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '07-03-2018', '07-03-2018', '1520412361', '', 'Pending', 'a1874b3fada7a39301f3ae3987092ab0', 'API', '', 0, 120, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1873, 'TAS-SIL-001873', 6, 5, 0, 'H.e.', 'Abraham', 'Imanzi', '', 'Male', '12/02/2012', 'abraham01@cube.rw', '+250 788 888 888', '', 'Test', 'Agricultural Services &amp; Products', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Associate Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '233rt34', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Bank-Transfer', '', '', 0, '218750', 0, '', 'TAS-SIL-001873', '', 'Pending', '', '', '', '', '07-03-2018', '07-03-2018', '1520412891', '', 'Pending', 'de3df3b8f8c15a01bf026be5ee320885', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1874, 'TAS-ISIL-001874', 6, 5, 24, 'Hon.', 'Test', 'Test', '', 'Male', '12/12/2011', 'abraham01@cube.rw', '+254 778 7398329', '', 'Test', 'Agricultural Services &amp; Products', 'Civil Society', 'Gisozi', 'Kenya', 'Nairobi', 'Board Chairman', '', 'Kenya', 'Nairobi', 'Kenya', 'Passport', 'ke2323k332', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver-Discounted', 'Silver', '', 'Debit/Credit Card', '', '', 0, '225', 10, '', 'TAS-ISIL-001874', '', 'Pending', '', '', '', '', '07-03-2018', '07-03-2018', '1520425686', '1520843271', 'Pending', 'f5852e80da4f4c2542ef3feafe4c6bd9', 'API', 'GRP-000025', 25, 125, 'Single', '1', '', '', '', '', '', 'Yes', 'Test', 'Albania', '4', '6:24'),
(1875, 'TAS-GOL-001875', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Male', '01/02/1983', 'abraham01@cube.rw', '+250 789 893 283', '', 'Test', 'ICT', 'Non-Governmental Organization', 'Test', 'Rwanda', 'Kigali', 'Chief of Staff', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', 'test123te43', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Debit/Credit Card', '', '', 393750, '393750', 0, 'RWF', 'TAS-GOL-001875', '', 'Pending', '', '', '', '', '10-03-2018', '10-03-2018', '1520676009', '', 'Pending', '06024b699974b190188ad3a049018645', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1876, 'TAS-PLA-001876', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Male', '12/03/1978', 'abraham01@cube.rw', '+250 788 839 483', '', 'Test', 'Attorneys and law', 'International Organization', 'Test', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', 'e43443e332', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 0, '831250', 0, '', 'TAS-PLA-001876', '', 'Pending', '', '', '', '', '10-03-2018', '10-03-2018', '1520677216', '', 'Pending', '670c762e0756ff16a96fbe38dcf6b0fc', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'No', 'Test', 'Rwanda', '4', '6:12'),
(1877, 'TAS-GSILD-001877', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Female', '02/03/1998', 'abraham01@cube.rw', '+250 783 000 000', '', 'Test', 'Advertising/Public Relations', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32323r3', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Discounted', 'Silver', '', 'Group owner', '', '', 0, '196875', 10, '', 'TAS-GSILD-001877', '', 'Pending', '', '', '', '', '16-03-2018', '16-03-2018', '1521195046', '', 'Pending', '31bf13580a57b2daddb6fd4cdeb30bb1', 'API', 'GRP-000025', 25, 134, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1878, 'TAS-SIL-001878', 6, 5, 0, 'H.e.', 'Test', 'Test', 'Stream', 'Female', '12/12/2012', 'abraham01@cube.rw', '+250 789 839 839', '', 'Hehe', 'Agricultural Services &amp; Products', 'Civil Society', 'Kacyiru', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Albania', 'Kampala', 'Rwanda', 'ID card', 'rw3433432', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '250', 0, '', 'TAS-SIL-001878', '', 'Pending', '', '', '', '', '17-03-2018', '17-03-2018', '1521302741', '', 'Pending', '0045ac9bc4efd4222769d8a3a59efc03', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1879, 'TAS-SIL-001879', 6, 5, 0, 'H.e.', 'Test', 'Test', 'Stream', 'Female', '12/12/2012', 'abraham01@cube.rw', '+250 789 839 839', '', 'Hehe', 'Agricultural Services &amp; Products', 'Civil Society', 'Kacyiru', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Albania', 'Kampala', 'Rwanda', 'ID card', 'rw34334ec', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '250', 0, '', 'TAS-SIL-001879', '', 'Pending', '', '', '', '', '17-03-2018', '17-03-2018', '1521303175', '', 'Pending', 'ba91fac1b8db7cca490352100526dd42', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1880, 'TAS-SIL-001880', 6, 5, 0, 'H.e.', 'Test', 'Test', 'Stream', 'Female', '12/12/2012', 'abraham01@cube.rw', '+250 789 839 839', '', 'Hehe', 'Agricultural Services &amp; Products', 'Civil Society', 'Kacyiru', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Albania', 'Kampala', 'Rwanda', 'ID card', 'rw34334ec66', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '250', 0, '', 'TAS-SIL-001880', '', 'Pending', '', '', '', '', '17-03-2018', '17-03-2018', '1521303239', '', 'Pending', 'd558e327ca868c283a975af2461994ec', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1881, 'TAS-SIL-001881', 6, 5, 0, 'H.e.', 'Test', 'Test', 'Stream', 'Female', '12/12/2012', 'abraham01@cube.rw', '+250 789 839 839', '', 'Hehe', 'Agricultural Services &amp; Products', 'Civil Society', 'Kacyiru', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Albania', 'Kampala', 'Rwanda', 'ID card', 'rw2323e43', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '250', 0, '', 'TAS-SIL-001881', '', 'Pending', '', '', '', '', '17-03-2018', '17-03-2018', '1521303305', '', 'Pending', 'fab5eb9e3fe8dfad3c70505be7ccd4d7', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1882, 'TAS-SIL-001882', 6, 5, 24, 'H.e.', 'Test', 'Test', 'Stream', 'Female', '12/12/2012', 'abraham01@cube.rw', '+250 789 839 839', '', 'Hehe', 'Agricultural Services &amp; Products', 'Civil Society', 'Kacyiru', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Albania', 'Kampala', 'Rwanda', 'ID card', 'rw23209', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Bank-Transfer', '', '', 0, '250', 0, '', 'TAS-SIL-001882', '', 'Pending', '', '', '', '', '17-03-2018', '17-03-2018', '1521303603', '1522244882', 'Confirmed', 'e5ac1c42876c8e732c93cf9480e05769', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1883, 'TAS-VIS-001883', 6, 5, 24, 'Mr.', 'Test', 'Test', '', 'Female', '23/02/2013', 'abraham1@cube.rw', '+250 783 434 343', '', 'Hehe', 'Advertising/Public Relations', 'Academia', 'Kimihurura', 'Rwanda', 'Kigali', 'Associate Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '4343df454fd', '', '', '', '', '', '', '', '', '', '', '', 'Exhibition-Visitor', 'Visitor', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '17-03-2018', '17-03-2018', '1521311138', '1523343480', 'Confirmed', 'a9015cec1d02e6efe14cb8a4ae1aa0ca', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1884, 'TAS-GSILC-001884', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '12/12/2012', 'abraham1@cube.rw', '+250 993 289 328', '', 'Test', 'Advertising/Public Relations', 'Academia', 'Test', 'Rwanda', 'Kigali', 'Business Analyst', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '322sd2332', '', '', '', '', '', '', '', '', '', '', '', 'Group-Silver-Complimentary', 'Silver', '', '', '', '', 0, '218750', 0, '', 'TAS-GSILC-001884', '', 'Free', '', '', '', '', '16-04-2018', '16-04-2018', '1523878043', '', 'Pending', '5c7eb317e788340ce73e6dc0835d11d5', 'API', 'GRP-000025', 25, 137, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1885, 'TAS--001885', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Female', '12/02/2012', 'abraham1@cube.rw', '+250 787 878 787', '', 'Test', 'Agricultural Services &amp; Products', 'Civil Society', 'test', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '323ww2121', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum-Complimentary', 'Platinum', '', '', '', '', 0, '831250', 0, '', 'TAS--001885', '', 'Free', '', '', '', '', '16-04-2018', '16-04-2018', '1523879571', '', 'Pending', '6c01b62d0c8c3037bcf66b075f0890e5', 'API', 'GRP-000025', 25, 130, 'Single', '1', '', '', '', '', '', 'Yes', 'test', 'Rwanda', '1', '6:12'),
(1886, 'TAS-IPLAC-001886', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Female', '23/02/2032', 'abraham01@cube.rw', '+250 784 389 998', '', 'Test', 'Advertising/Public Relations', 'Non-Governmental Organization', 'Test', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '232we3232', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum-Complimentary', 'Platinum', '', '', '', '', 0, '831250', 0, '', 'TAS-IPLAC-001886', '', 'Free', '', '', '', '', '16-04-2018', '16-04-2018', '1523881267', '', 'Pending', 'ca44fdb6540985ef6ad7c769ed94070e', 'API', 'GRP-000025', 25, 281, 'Single', '1', '', '', '', '', '', 'Yes', 'test', 'Rwanda', '4', '6:00'),
(1887, 'TAS--001887', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Female', '23/12/2012', 'abraham01@cube.rw', '+250 787 989 834', '', 'Test', 'Advertising/Public Relations', 'Non-Governmental Organization', 'Test', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', 'ewew3442', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold-Complimentary', 'Gold', '', '', '', '', 0, '236250', 0, '', 'TAS--001887', '', 'Free', '', '', '', '', '16-04-2018', '16-04-2018', '1523882204', '', 'Pending', '378ec4d8abaa65fd1da7e1f88537a4c8', 'API', 'GRP-000025', 25, 129, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1888, 'TAS-SPSC-001888', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Female', '23/02/2032', 'abraham01@cube.rw', '+250 778 898 989', '', 'Test', 'Advertising/Public Relations', 'International Organization', 'Test', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '323232re32', '', '', '', '', '', '', '', '', '', '', '', 'Sponsor-Silver-Complimentary', 'Silver', '', '', '', '', 0, '218750', 0, '', 'TAS-SPSC-001888', '', 'Free', '', '', '', '', '16-04-2018', '16-04-2018', '1523884380', '', 'Pending', '9bddcc07f931efe014679d5b7d0d04c8', 'API', 'GRP-000025', 25, 146, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1889, 'TAS-SPPC-001889', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Female', '23/02/2012', 'abraham1@cube.rw', '+250 787 827 832', '', 'Test', 'Advertising/Public Relations', 'Academia', 'Test', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '2332w2121', '', '', '', '', '', '', '', '', '', '', '', 'Sponsor-Platinum-Complimentary', 'Sponsor-Platinum-Complimentary', '', '', '', '', 0, '', 0, '', '', '', 'Free', '', '', '', '', '16-04-2018', '16-04-2018', '1523887212', '', 'Pending', 'af6c1406644334ca0e1170295cce3acb', 'API', 'GRP-000025', 25, 148, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1890, 'TAS-BSC-001890', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '12/03/2000', 'abraham1@cube.rw', '+250 788 439 438', '', 'Test', 'Agricultural Services &amp; Products', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Information Officer (CIO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '434343d434', '', '', '', '', '', '', '', '', '', '', '', 'Bbcom-silver-complimentary', 'Silver', '', '', '', '', 0, '218750', 0, '', 'TAS-BSC-001890', '', 'Free', '', '', '', '', '17-04-2018', '17-04-2018', '1523964923', '', 'Pending', '9a77fe955f70d8bd7bcb2112a862fda7', 'API', 'GRP-000025', 25, 418, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1891, 'TAS-BGC-001891', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '12/02/2012', 'abraham@cube.rw', '+250 788 989 898', '', 'Test', 'Clergy &amp; Religious Organizations', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '5454e54', '', '', '', '', '', '', '', '', '', '', '', 'Bbcom-gold-complimentary', 'Gold', '', '', '', '', 0, '236250', 0, '', 'TAS-BGC-001891', '', 'Free', '', '', '', '', '17-04-2018', '17-04-2018', '1523975521', '', 'Pending', '892f065d57b4622b0fe5716bb1ac3a69', 'API', 'GRP-000025', 25, 420, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1892, 'TAS-REQ-001892', 6, 5, 0, 'H.e.', 'Test', 'Test', '', 'Male', '12/04/1989', 'abraham@cube.rw', '+250 787 787 878', '', 'Test', 'ICT', 'Public Administration', 'Kimihurura', 'Rwanda', 'Kigali', 'Cabinet Secretary', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '323220i32e', '', '', '', '', '', '', '', '', '', '', '', 'Government request', 'Delegate', '', '', '', '', 0, '', 0, '', '', '', 'Pending', '', '', '', '', '23-04-2018', '23-04-2018', '1524475724', '', 'Pending', 'fa179f39260b63a17647510788173303', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1893, 'TAS-IPLAC-001893', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Male', '12/03/2044', 'abraham@cube.rw', '+250 778 656 565', '', 'Test', 'Advertising/Public Relations', 'Academia', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32342432e332', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum-Complimentary', 'Platinum', '', '', '', '', 0, '831250', 0, '', 'TAS-IPLAC-001893', '', 'Pending', '', '', '', '', '24-04-2018', '24-04-2018', '1524585022', '', 'Pending', '864f3d7afca176be8df1063184b52435', 'API', '', 0, 425, 'Single', '1', '', '', '', '', '', 'Yes', 'Test', 'Rwanda', '0', '6:12'),
(1894, 'TAS-PLA-001894', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Male', '21/12/2012', 'abraham@cube.rw', '+250 784 893 894', '', 'Test', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '32342432y55', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Bank-Transfer', '', '', 0, '831250', 0, '', 'TAS-PLA-001894', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524650383', '', 'Pending', '630a924f5d1439a635a3a16f2ed4b02b', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'No', 'Test', 'Rwanda', '4', '6:12'),
(1895, 'TAS-PLA-001895', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Male', '04/03/2034', 'abraham@cube.rw', '+250 777 676 766', '', 'Test', 'Clergy &amp; Religious Organizations', 'Non-Governmental Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Executive Officer (CEO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '435453244e22', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Bank-Transfer', '', '', 0, '831250', 0, '', 'TAS-PLA-001895', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524651948', '', 'Pending', '45a3ee8374a2b7e2acb7b876fe9c98e0', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'Yes', 'Test', 'Rwanda', '3', '6:36'),
(1896, 'TAS-PLA-001896', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '31/12/2012', 'abraham@cube.rw', '+250 756 656 565', '', 'Test', 'Clergy &amp; Religious Organizations', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chief Information Officer (CIO)', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '34346rre4334', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Bank-Transfer', '', '', 0, '831250', 0, '', 'TAS-PLA-001896', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524652083', '', 'Pending', '6768fef1c415b497e599ccd55970dda6', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'Yes', 'Test', 'American Samoa', '2', '6:00'),
(1897, 'TAS-PLA-001897', 6, 5, 0, 'Hon.', 'Test', 'Test', '', 'Female', '23/02/1992', 'abraham@cube.rw', '+250 747 974 394', '', 'Test', 'Agricultural Services &amp; Products', 'Non-Profit Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Chairman / Executive Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '4343r3423', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Bank-Transfer', '', '', 0, '831250', 0, '', 'TAS-PLA-001897', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524652849', '', 'Pending', '56abcde72705d79c7b60609194c8d3a3', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'No', 'Test', 'Rwanda', '8', '6:24'),
(1898, 'TAS-PLA-001898', 6, 5, 0, 'Prof.', 'Test', 'Test', '', 'Male', '23/12/2012', 'abraham@cube.rw', '+250 787 878 778', '', 'Test', 'Advertising/Public Relations', 'Civil Society', 'Kimihurura', 'Rwanda', 'Kigali', 'Board Chairman', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', '435453244rr4', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Debit/Credit Card', '', '', 831250, '831250', 0, 'RWF', 'TAS-PLA-001898', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524653310', '', 'Pending', 'ff42cd75d08172188534e94d9dcae03e', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'Yes', 'Test', 'Rwanda', '1', '6:24'),
(1899, 'TAS-SIL-001899', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '23/02/2012', 'abraham@cube.rw', '+250 783 728 738', '', 'Test', 'Advertising/Public Relations', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Associate Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '32323f323232', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Silver', 'Silver', '', 'Debit/Credit Card', '', '', 0, '218750', 0, '', 'TAS-SIL-001899', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524654012', '', 'Pending', 'd09b82e6fb4e5083c700af7a89bbfbc1', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1900, 'TAS-GOL-001900', 6, 5, 0, 'Mr.', 'Test', 'Test', '', 'Male', '12/02/2012', 'abraham@cube.rw', '+250 787 878 787', '', 'Test', 'Advertising/Public Relations', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Associate Director', '', 'Rwanda', 'Kigali', 'Rwanda', 'ID card', 'ew434343', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Gold', 'Gold', '', 'Bank-Transfer', '', '', 0, '236250', 0, '', 'TAS-GOL-001900', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524659935', '', 'Pending', 'c2e209eabe992ed27a10f8f33740df56', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', '', '', '', '', ''),
(1901, 'TAS-PLA-001901', 6, 5, 0, 'Dr.', 'Test', 'Test', '', 'Male', '12/02/2012', 'abraham@cube.rw', '+250 789 898 808', '', 'Test', 'Academics/ Education', 'International Organization', 'Kimihurura', 'Rwanda', 'Kigali', 'Innovation Manager', '', 'Rwanda', 'Kigali', 'Rwanda', 'Passport', '32342432t44', '', '', '', '', '', '', '', '', '', '', '', 'Individual-Platinum', 'Platinum', '', 'Bank-Transfer', '', '', 0, '831250', 0, '', 'TAS-PLA-001901', '', 'Pending', '', '', '', '', '25-04-2018', '25-04-2018', '1524662374', '', 'Pending', 'be7a5129ca2c7c640654047105da8f6c', 'API', '', 0, 0, 'Single', '1', '', '', '', '', '', 'No', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events_participant_category`
--

CREATE TABLE `events_participant_category` (
  `ID` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `url` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `interface` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_participant_category`
--

INSERT INTO `events_participant_category` (`ID`, `name`, `prefix`, `url`, `type`, `state`, `interface`) VALUES
(1, 'Exhibition-Visitor', 'EXH', 'exhibitor', '', '', 'individual'),
(2, 'Individual-Silver', 'SIL', 'silver', 'paid', '', 'individual'),
(3, 'Individual-Gold', 'GOL', 'gold', 'paid', '', 'individual'),
(4, 'Individual-Platinum', 'PLA', 'platinum', 'paid', '', 'individual'),
(5, 'Individual-Silver-Discounted', 'ISIL', 'indsildisc', 'discount', '', 'individual'),
(6, 'Individual-Gold-Discounted', 'IGOL', 'indgoldisc', 'discount', '', 'individual'),
(7, 'Individual-Platinum-Discounted', 'IPLA', 'indpladisc', 'discount', '', 'individual'),
(8, 'Individual-Silver-Complimentary', 'ISILC', 'indsilcomp', '', '', 'individual'),
(9, 'Individual-Gold-Complimentary', 'IGOL', 'indgoldcomp', '', '', 'individual'),
(10, 'Individual-Platinum-Complimentary', 'IPLAC', 'indplacomp', '', '', 'individual'),
(11, 'Group-Silver', 'GSIL', 'groupsilver', 'paid', '', 'group'),
(12, 'Group-Gold', 'GGOLD', 'groupgold', 'paid', '', 'group'),
(13, 'Group-Platinum', 'GPLA', 'groupplatinum', 'paid', '', 'group'),
(14, 'Group-Silver-Discounted', 'GSILD', 'groupsildisc', 'discount', '', 'group'),
(15, 'Group-Gold-Discounted', 'GGOLD', 'groupgolddisc', 'discount', '', 'group'),
(16, 'Group-Platinum-Discounted', 'GPLAD', 'grouppladisc', 'discount', '', 'group'),
(17, 'Group-Silver-Complimentary', 'GSILC', 'groupsilcomp', '', '', 'group'),
(18, 'Group-Gold-Complimentary', 'GGOLC', 'groupgoldcomp', '', '', 'group'),
(19, 'Group-Platinum-Complimentary', 'GPLAC', 'groupplacomp', '', '', 'group'),
(20, 'Sponsor-Silver', 'SSIL', 'sponsorsilver', 'paid', '', 'group'),
(21, 'Sponsor-Gold', 'SGOL', 'sponsorgold', 'paid', '', 'group'),
(22, 'Sponsor-Platinum', 'SPLA', 'sponsorplatinum', 'paid', '', 'group'),
(23, 'Sponsor-Silver-Discounted', 'SSILD', 'sponsorsildisc', 'discount', '', 'group'),
(24, 'Sponsor-Gold-Discounted', 'SGOLD', 'sponsorgoldisc', 'discount', '', 'group'),
(25, 'Sponsor-Platinum-Discounted', 'SPLAD', 'sponsorpladisc', 'discount', '', 'group'),
(26, 'Sponsor-Silver-Complimentary', 'SPSC', 'sponsorsilcomp', '', '', 'group'),
(27, 'Sponsor-Gold-Complimentary', 'SPGC', 'sponsorgoldcomp', '', '', 'group'),
(28, 'Sponsor-Platinum-Complimentary', 'SPPC', 'sponsorplacomp', '', '', 'group'),
(29, 'Exhibitor-Silver', 'ESIL', 'exhibitorsilver', 'paid', '', 'group'),
(30, 'Exhibitor-Gold', 'EGOL', 'exhibitorgold', 'paid', '', 'group'),
(31, 'Exhibitor-Platinum', 'EPLA', 'exhibitorplatinum', 'paid', '', 'group'),
(32, 'Exhibitor-Silver-Discounted', 'ESILD', 'exhibitorsildisc', 'discount', '', 'group'),
(33, 'Exhibitor-Gold-Discounted', 'EGOLD', 'exhibitorgoldisc', 'discount', '', 'group'),
(34, 'Exhibitor-Platinum-Discounted', 'EPLAD', 'exhibitorpladisc', 'discount', '', 'group'),
(35, 'Exhibitor-Silver-Complimentary', 'ESILC', 'exhibitorsilcomp', '', '', 'group'),
(36, 'Exhibitor-Gold-Complimentary', 'EGOLC', 'exhibitorgoldcomp', '', '', 'group'),
(37, 'Exhibitor-Platinum-Complimentary', 'EPLAC', 'exhibitorplacomp', '', '', 'group'),
(38, 'Government-Silver', 'GOSIL', 'governmentsilver', 'paid', '', 'group'),
(39, 'Government-Gold', 'GOGOL', 'governmentgold', 'paid', '', 'group'),
(40, 'Government-Platinum', 'GOPLA', 'governmentplatinum', 'paid', '', 'group'),
(41, 'Government-Silver-Discounted', 'GOSIL', 'governmentsildisc', 'discount', '', 'group'),
(42, 'Government-Gold-Discounted', 'GOGOL', 'governmentgoldisc', 'discount', '', 'group'),
(43, 'Government-Platinum-Discounted', 'GOPLA', 'governmentpladisc', 'discount', '', 'group'),
(44, 'Government-Silver-Complimentary', 'GSC', 'govsilcomp', '', '', 'group'),
(45, 'Government-Gold-Complimentary', 'GGC', 'govgoldcomp', '', '', 'group'),
(46, 'Government-Platinum-Complimentary', 'GPC', 'govplacomp', '', '', 'group'),
(47, 'Smart-Africa-Member-Silver', 'SASIL', 'samsilver', 'paid', '', 'group'),
(48, 'Smart-Africa-Member-Gold', 'SAGOL', 'samgold', 'paid', '', 'group'),
(49, 'Smart-Africa-Member-Platinum', 'SAPLA', 'samplatinum', 'paid', '', 'group'),
(50, 'Smart-Africa-Member-Silver-Discounted', 'SAMSD', 'samsildisc', 'discount', '', 'group'),
(51, 'Smart-Africa-Member-Gold-Discounted', 'SAMGD', 'samgoldisc', 'discount', '', 'group'),
(52, 'Smart-Africa-Member-Platinum-Discounted', 'SAMPD', 'sampladisc', 'discount', '', 'group'),
(53, 'Smart-Africa-Member-Silver-Complimentary', 'SAGSC', 'samsilcomp', '', '', 'group'),
(54, 'Smart-Africa-Member-Gold-Complimentary', 'SAGGC', 'samgoldcomp', '', '', 'group'),
(55, 'Smart-Africa-Member-Platinum-Complimentary', 'SAGPC', 'samplacomp', '', '', 'group'),
(56, 'Diplomatic-Mission-Silver', 'DMSIL', 'diplomaticsilver', 'paid', '', 'group'),
(57, 'Diplomatic-Mission-Gold', 'DMGOL', 'diplomaticgold', 'paid', '', 'group'),
(58, 'Diplomatic-Mission-Platinum', 'DMPLA', 'diplomaticplatinum', 'paid', '', 'group'),
(59, 'Diplomatic-Mission-Silver-Discounted', 'DMMSD', 'diplomaticsildisc', 'discount', '', 'group'),
(60, 'Diplomatic-Mission-Gold-Discounted', 'DMMGD', 'diplomaticgoldisc', 'discount', '', 'group'),
(61, 'Diplomatic-Mission-Platinum-Discounted', 'DMMPD', 'diplomaticpladisc', 'discount', '', 'group'),
(62, 'Diplomatic-Mission-Silver-Complimentary', 'DMSIL', 'diplomaticsilcomp', '', '', 'individual'),
(63, 'Diplomatic-Mission-Gold-Complimentary', 'DMGOL', 'diplomaticgoldcomp', '', '', 'individual'),
(64, 'Diplomatic-Mission-Platinum-Complimentary', 'DMPLA', 'diplomaticplacomp', '', '', 'individual'),
(65, 'Private-Sector-Federation-Silver', 'PSFSI', 'psfsilver', 'paid', '', 'group'),
(66, 'Private-Sector-Federation-Gold', 'PSFGO', 'psfgold', 'paid', '', 'group'),
(67, 'Private-Sector-Federation-Platinum', 'PSFPL', 'psfplatinum', 'paid', '', 'group'),
(68, 'Private-Sector-Federation-Silver-Discounted', 'PSFMS', 'psfsildisc', 'discount', '', 'group'),
(69, 'Private-Sector-Federation-Gold-Discounted', 'PSFMG', 'psfgoldisc', 'discount', '', 'group'),
(70, 'Private-Sector-Federation-Platinum-Discounted', 'PSFMP', 'psfpladisc', 'discount', '', 'group'),
(71, 'Private-Sector-Federation-Silver-Complimentary', 'PSFSC', 'psfsilcomp', '', '', 'individual'),
(72, 'Private-Sector-Federation-Gold-Complimentary', 'PSFGC', 'psfgolcomp', '', '', 'individual'),
(73, 'Private-Sector-Federation-Platinum-Complimentary', 'PSFPC', 'psfplacomp', '', '', 'individual'),
(74, 'Development-Partners-Silver', 'DPSIL', 'dpsilver', 'paid', '', 'group'),
(75, 'Development-Partners-Gold', 'DPGOL', 'dpgold', 'paid', '', 'group'),
(76, 'Development-Partners-Platinum', 'DPPLA', 'dpplatinum', 'paid', '', 'group'),
(77, 'Development-Partners-Silver-Discounted', 'DPMSD', 'dpsildisc', 'discount', '', 'group'),
(78, 'Development-Partners-Gold-Discounted', 'DPMGD', 'dpgoldisc', 'discount', '', 'group'),
(79, 'Development-Partners-Platinum-Discounted', 'DPMPD', 'dppladisc', 'discount', '', 'group'),
(80, 'Development-Partners-Silver-Complimentary', 'DPSC', 'devpartsilcomp', '', '', 'individual'),
(81, 'Development-Partners-Gold-Complimentary', 'DPGC', 'devpartgolcomp', '', '', 'individual'),
(82, 'Development-Partners-Platinum-Complimentary', 'DPPC', 'devpartplacomp', '', '', 'individual'),
(83, 'Moderator-Silver', 'MSIL', 'moderatorsilver', 'paid', '', 'group'),
(84, 'Moderator-Gold', 'MGOL', 'moderatorgold', 'paid', '', 'group'),
(85, 'Moderator-Platinum', 'MPLA', 'moderatorplatinum', 'paid', '', 'group'),
(86, 'Moderator-Silver-Discounted', 'MMSD', 'moderatorsildisc', 'discount', '', 'group'),
(87, 'Moderator-Gold-Discounted', 'MMGD', 'moderatorgoldisc', 'discount', '', 'group'),
(88, 'Moderator-Platinum-Discounted', 'MMPD', 'moderatorpladisc', 'discount', '', 'group'),
(89, 'Moderator-Silver-Complimentary', 'MSILC', 'moderatorsilcomp', '', '', 'individual'),
(90, 'Moderator-Gold-Complimentary', 'MGOLC', 'moderatorgoldcomp', '', '', 'individual'),
(91, 'Moderator-Platinum-Complimentary', 'MPLAC', 'moderatorplatinumcomp', '', '', 'individual'),
(92, 'Panelist-Silver', 'PSIL', 'panelistsilver', 'paid', '', 'group'),
(93, 'Panelist-Gold', 'PGOL', 'panelistgold', 'paid', '', 'group'),
(94, 'Panelist-Platinum', 'PPLA', 'panelistplatinum', 'paid', '', 'group'),
(95, 'Panelist-Silver-Discounted', 'PSD', 'panelistsildisc', 'discount', '', 'group'),
(96, 'Panelist-Gold-Discounted', 'PGD', 'panelistgoldisc', 'discount', '', 'group'),
(97, 'Panelist-Platinum-Discounted', 'PPD', 'panelistpladisc', 'discount', '', 'group'),
(98, 'Panelist-Silver-Complimentary', 'PSILC', 'panelistsilvercomp', '', '', 'individual'),
(99, 'Panelist-Gold-Complimentary', 'PGOLC', 'panelistgolcomp', '', '', 'individual'),
(100, 'Panelist-Platinum-Complimentary', 'PPLAC', 'panelistplacomp', '', '', 'individual'),
(101, 'Speaker-Silver', 'SPSIL', 'speakersilver', 'paid', '', 'group'),
(102, 'Speaker-Gold', 'SPGOL', 'speakergold', 'paid', '', 'group'),
(103, 'Speaker-Platinum', 'SPPLA', 'speakerplatinum', 'paid', '', 'group'),
(104, 'Speaker-Silver-Discounted', 'SPSD', 'speakersildisc', 'discount', '', 'group'),
(105, 'Speaker-Gold-Discounted', 'SPGD', 'speakergoldisc', 'discount', '', 'group'),
(106, 'Speaker-Platinum-Discounted', 'SPPD', 'speakerpladisc', 'discount', '', 'group'),
(107, 'Speaker-Silver-Complimentary', 'SSILC', 'speakersilvercomp', '', '', 'individual'),
(108, 'Speaker-Gold-Complimentary', 'SGOLC', 'speakergoldcomp', '', '', 'individual'),
(109, 'Speaker-Platinum-Complimentary', 'SPLAC', 'speakerplacomp', '', '', 'individual'),
(110, 'Face-the-Gorillas-Silver', 'FTGSI', 'ftgsilver', 'paid', '', 'group'),
(111, 'Face-the-Gorillas-Gold', 'FTGGO', 'ftggold', 'paid', '', 'group'),
(112, 'Face-the-Gorillas-Platinum', 'FTGPL', 'ftgplatinum', 'paid', '', 'group'),
(113, 'Face-the-Gorillas-Silver-Discounted', 'FTGSD', 'ftgsildisc', 'discount', '', 'group'),
(114, 'Face-the-Gorillas-Gold-Discounted', 'FTGGD', 'ftggoldisc', 'discount', '', 'group'),
(115, 'Face-the-Gorillas-Platinum-Discounted', 'FTGPD', 'ftgpladisc', 'discount', '', 'group'),
(116, 'Face-the-Gorillas-Silver-Complimentary', 'FTGSC', 'ftgsilcomp', '', '', 'group'),
(117, 'Face-the-Gorillas-Gold-Complimentary', 'FTGGC', 'ftggoldcomp', '', '', 'group'),
(118, 'Face-the-Gorillas-Platinum-Complimentary', 'FTGPC', 'ftgplacomp', '', '', 'group'),
(119, 'Ms-Geek-Silver', 'MSGSI', 'msgeeksilver', 'paid', '', 'group'),
(120, 'Ms-Geek-Gold', 'MSGGO', 'msgeekgold', 'paid', '', 'group'),
(121, 'Ms-Geek-Platinum', 'MSGPL', 'msgeekplatinum', 'paid', '', 'group'),
(122, 'Ms-Geek-Silver-Discounted', 'MSSD', 'msgeeksildisc', 'discount', '', 'group'),
(123, 'Ms-Geek-Gold-Discounted', 'MSGD', 'msgeekgoldisc', 'discount', '', 'group'),
(124, 'Ms-Geek-Platinum-Discounted', 'MSPD', 'msgeekpladisc', 'discount', '', 'group'),
(125, 'Ms-Geek-Silver-Complimentary', 'MSGSC', 'msgeeksilcomp', '', '', 'group'),
(126, 'Ms-Geek-Gold-Complimentary', 'MSGGC', 'msgeekgoldcomp', '', '', 'group'),
(127, 'Ms-Geek-Platinum-Complimentary', 'MSGPC', 'msgeekplacomp', '', '', 'group'),
(128, 'Smart-Africa-Organiser', 'SMAO', 'smartafrica', '', '', 'group'),
(129, 'Media', 'MDA', 'media', '', '', 'group'),
(130, 'NOC', 'NOC', 'noc', '', '', 'group'),
(131, 'Event-Management', 'EVM', 'eventmanagement', '', '', 'group'),
(132, 'Production-Technician', 'TEC', 'tech', '', '', 'group'),
(133, 'Delegate-Liaison', 'LIA', 'liaison', '', '', 'group'),
(134, 'Armed-Security', 'ASC', 'asec', '', '', 'group'),
(135, 'Security', 'SEC', 'sec', '', '', 'group'),
(136, 'Usher', 'USH', 'usher', '', '', 'group'),
(137, 'Clinician', 'CLI', 'clinician', '', '', 'group'),
(138, 'Catering', 'CTR', 'catering', '', '', 'group'),
(139, 'Contractor', 'CON', 'contractor', '', '', 'group'),
(140, 'Organiser', 'ORG', 'organiser', '', '', 'group'),
(141, 'Protocal', 'PTL', 'protocal', '', '', 'group'),
(142, 'Medical', 'MED', 'medical', '', '', 'group'),
(143, 'Face-the-Gorillas-Applicant', 'FTG', 'ftg', '', '', 'individual'),
(144, 'Ms-geek-Applicant', 'MSG', 'msgeek', '', '', 'individual'),
(145, 'Speaker-Applicant', 'SPE', 'speaker', '', '', 'individual'),
(146, 'Entertainers', 'ENT', 'entertainers', '', '', 'group'),
(147, 'Bbcom-silver-complimentary', 'BSC', 'bbcomsilvercomplimentary', '', '', ''),
(148, 'Bbcom-gold-complimentary', 'BGC', 'bbcomgoldcomplimentary', '', '', ''),
(149, 'Bbcom-platinum-complimentary', 'BPC', 'bbcomplatinumcomplimentary', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events_participant_item`
--

CREATE TABLE `events_participant_item` (
  `ID` bigint(20) NOT NULL,
  `participant_ID` bigint(20) NOT NULL,
  `host_ID` varchar(100) NOT NULL,
  `payment_rn` varchar(200) NOT NULL,
  `command` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `order_info` varchar(500) NOT NULL,
  `comment` text NOT NULL,
  `receipt_number` varchar(300) NOT NULL,
  `transaction_number` varchar(200) NOT NULL,
  `receipt_string` text NOT NULL,
  `card_issue` varchar(255) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `payment_state` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_participant_item`
--

INSERT INTO `events_participant_item` (`ID`, `participant_ID`, `host_ID`, `payment_rn`, `command`, `amount`, `discount`, `currency`, `order_info`, `comment`, `receipt_number`, `transaction_number`, `receipt_string`, `card_issue`, `card_number`, `payment_date`, `payment_state`, `type`, `token`) VALUES
(1, 0, 'GRP-000001', 'GRP-000001', 'pay', '747500', '', 'RWF', 'Group-Pay', '', '701306200357', '1100000071', 'ReceiptNo: 701306200357 | TransactionNo: 1100000071 | Acquirer Response Code: 00 | Bank Authorization ID: 200357 | Batch Number: 20170113 | Card Type: MC | Amount: 747500 | Message: Approved', 'VC', '', '1484244377', 'Confirmed', 'Group', '236b8d15ff2f47f9a785f3ac5494f265'),
(2, 0, 'GRP-000001', 'GRP-000001-1', 'pay', '135', '', 'USD', 'Group-Pay', '', '701306200359', '1100000072', 'ReceiptNo: 701306200359 | TransactionNo: 1100000072 | Acquirer Response Code: 00 | Bank Authorization ID: 200359 | Batch Number: 20170113 | Card Type: MC | Amount: 135 | Message: Approved', 'VC', '', '1484245992', 'Confirmed', 'Group', '87aac766063c504ba23d34a1123f1ebb'),
(3, 0, 'TAS-SIL-000004', 'TAS-SIL-000004', 'pay', '125000', '', 'RWF', 'Silver-Silver', '', '701308200361', '1100000073', 'ReceiptNo: 701308200361 | TransactionNo: 1100000073 | Acquirer Response Code: 00 | Bank Authorization ID: 200361 | Batch Number: 20170113 | Card Type: MC | Amount: 125000 | Message: Approved', '', '', '1484253948', 'Confirmed', '64f9e221a21f5e1d87d7f62914f5458e', ''),
(4, 0, 'TAS-SIL-000009', 'TAS-SIL-000009', 'pay', '125000', '', 'RWF', 'Silver-Silver', '', '701819200593', '1100000075', 'ReceiptNo: 701819200593 | TransactionNo: 1100000075 | Acquirer Response Code: 00 | Bank Authorization ID: 200593 | Batch Number: 20170118 | Card Type: MC | Amount: 125000 | Message: Approved', '', '', '1484724472', 'Confirmed', 'Single', 'd99ddaba4c42174979c8cb771a20d2d2'),
(5, 0, 'TAS-GOL-000021', 'TAS-GOL-000021', '', '', '', '', '', '', '', '', '', '', '', '1487584221', 'Confirmed', 'Single', '5ddc20c1340f51cbcd3f4da8490dd4a5'),
(6, 0, 'TAS-GOL-000022', 'TAS-GOL-000022', '', '', '', '', '', '', '', '', '', '', '', '1487594967', 'Confirmed', 'Single', '7e73aff7b21c3e9375caaaa2ae0799df'),
(7, 0, 'TAS-SIL-000023', 'TAS-SIL-000023', '', '', '', '', '', '', '', '', '', '', '', '1487595953', 'Confirmed', 'Single', '410283673bf31964e4ff4f918e74128e'),
(8, 0, 'TAS-SIL-000024', 'TAS-SIL-000024', '', '', '', '', '', '', '', '', '', '', '', '1487596923', 'Confirmed', 'Single', '68adffd6fcc9bffe750a5bdd476de1b0'),
(9, 0, 'TAS-PLA-000025', 'TAS-PLA-000025', '', '', '', '', '', '', '', '', '', '', '', '1487662164', 'Confirmed', 'Single', '632bf8df9bb4974b0ddf70b453f3f317'),
(10, 0, 'TAS-SIL-000026', 'TAS-SIL-000026', '', '', '', '', '', '', '', '', '', '', '', '1487672501', 'Confirmed', 'Single', 'd2281cfbd582199a3ad94fab01d1182a'),
(11, 0, 'TAS-PLA-000029', 'TAS-PLA-000029', 'pay', '635000', '', '', '', '', '705222230254', '6', '', '', '', '1487674466', 'Confirmed', 'Single', '6163030a540df0dd519f1b4a88410c6a'),
(12, 0, 'TAS-SIL-000030', 'TAS-SIL-000030', 'pay', '125000', '', 'RWF', '', '', '705400230308', '10', '', '', '', '1487766366', 'Confirmed', 'Single', '086509ae6962e7c8d5672022f1a02dd8'),
(13, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1487770620', 'Cancelled', 'Single', '5a23ab91ea56d7ebef8a3d8fb2346aa8'),
(14, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '705401230315', '17', '', '', '', '1487770703', 'Cancelled', 'Single', 'a2fd7d5b36fda4fad13f12346e5e4f13'),
(15, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '705401230315', '17', '', '', '', '1487771214', 'Cancelled', 'Single', '3789eeccce362171836b18cbe17b9e5e'),
(16, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '705402230320', '18', '', '', '', '1487774858', 'Approved', 'Single', '51d395f62cd55a4de59ec1b55495a903'),
(17, 0, 'TAS-SIL-000032', 'TAS-SIL-000032', 'pay', '125000', '', 'RWF', '', '', '705402230321', '19', '', '', '', '1487775258', 'Approved', 'Single', '2d0a2da4aec39faef5e2f4204a8dde98'),
(18, 0, 'TAS-GOL-000033', 'TAS-GOL-000033', 'pay', '290000', '', 'RWF', '', '', '705421230344', '20', '', '', '', '1487843425', 'Approved', 'Single', 'a819ea6d1fede3b917ac2c36b2e2e167'),
(19, 0, 'TAS-SIL-000034', 'TAS-SIL-000034', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1488034370', 'Cancelled', 'Single', '8f294653307a816f764296788f44f896'),
(20, 0, 'TAS-GOL-000035', 'TAS-GOL-000035', 'pay', '290000', '', 'RWF', '', '', '705819230434', '26', '', 'VC', '', '1488181240', 'Approved', 'Single', '311ba211444a2608a53e771889a925a1'),
(21, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273104', 'Cancelled', 'Single', '05f0604d5c1a37c445edcdf93f23ee3e'),
(22, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273118', 'Cancelled', 'Single', '2f828d6bb2f12e18a399fc015a469ac3'),
(23, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273131', 'Cancelled', 'Single', '2e17b0980d0a92e9095a229def66e216'),
(24, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273133', 'Cancelled', 'Single', 'd54f72fe090eb1a86adbfe928748fe77'),
(25, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273147', 'Cancelled', 'Single', '21851471cebbe9ed8fca5c182e626d46'),
(26, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273148', 'Cancelled', 'Single', '98b880c4d16aae3cec58804c408bf6fb'),
(27, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273398', 'Cancelled', 'Single', 'b320589a90230a4b22ab88023e570f24'),
(28, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273999', 'Cancelled', 'Single', '158ff74905b10f9c9bf207ae4aa251c3'),
(29, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488274159', 'Cancelled', 'Single', 'e83eec98d87eb758513d155f62caa6d8'),
(30, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274263', 'Cancelled', 'Single', '3bedf6d860a4c1c7759e78f5a0a3bcfa'),
(31, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274572', 'Cancelled', 'Single', 'fea9a983053cb12f7a54eb977e6ebf85'),
(32, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274796', 'Cancelled', 'Single', 'c0dfa70b343901651f9ce1499c943bff'),
(33, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274822', 'Cancelled', 'Single', 'ccbbdaef4dc2375843af504036bb3e26'),
(34, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488433330', 'Cancelled', 'Single', 'f3b50b22a105b3d6b7293f3b466284f6'),
(35, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488433500', 'Cancelled', 'Single', 'afc4df8f5392c1ce5c0fbfc1558ee3d9'),
(36, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488433546', 'Cancelled', 'Single', 'b7f8c563ee067c716d7d9893a0cfe09f'),
(37, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488433856', 'Cancelled', 'Single', 'd5d04b3ae2ec3f1540dabea1d220144e'),
(38, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434065', 'Cancelled', 'Single', 'cccb76f225824f5545defba347bfbdfb'),
(39, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434351', 'Cancelled', 'Single', 'fe29c7dc6283be25010382338e8d3462'),
(40, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434523', 'Cancelled', 'Single', 'af67165e516b48ee3ef63703a9f7134a'),
(41, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434610', 'Cancelled', 'Single', 'de2b7506e194cc2e4f63fa36885a08d3'),
(42, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434619', 'Cancelled', 'Single', '599e8606b676ccec9382889a645acf7f'),
(43, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434622', 'Cancelled', 'Single', 'cec3f9d5019f33c74ebf5ad55616261e'),
(44, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434623', 'Cancelled', 'Single', '89a40ca8213553657f243e8c7c7333c0'),
(45, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434624', 'Cancelled', 'Single', '37e9e0c04a19755260c7fae4f82f42b2'),
(46, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434912', 'Cancelled', 'Single', '9a90b28c6e014bffd23c2941d5cb6699'),
(47, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '125000', '', 'RWF', '', '', '706118240299', '29', '', 'VC', '', '1488436928', 'Approved', 'Single', 'a0e4225788e9ddd31f680836490e12e4'),
(48, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1488440138', 'Cancelled', 'Single', 'f92dc55120a338875786decafbe2ecb1'),
(49, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1488440174', 'Cancelled', 'Single', 'bd384443f47ff3c1efdfba648d54b4e0'),
(50, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488463116', 'Cancelled', 'Single', '7cfc976019d11f2f7f8a490b9e1c4163'),
(51, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488464828', 'Cancelled', 'Single', '85882a4df09a765b7dba6df1074d588d'),
(52, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488526325', 'Cancelled', 'Single', '1ee351ab42d5f32e564469d39157fa58'),
(53, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488528592', 'Cancelled', 'Single', '0fc0e68fd72e2892df1522ead20a0394'),
(54, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488530868', 'Cancelled', 'Single', '92aee7e454a10ebf0f83c7f4fb29df7b'),
(55, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1489389999', 'Cancelled', 'Single', 'b452c2b55809adac429b9221d6782379'),
(56, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1489407948', 'Cancelled', 'Single', '95c081a32ef4262d8881be916df7160e'),
(57, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1489481138', 'Cancelled', 'Single', 'a6cd7f917ab1c103b173eaca2b813acb'),
(58, 0, 'TAS-SIL-000057', 'TAS-SIL-000057', 'pay', '125000', '', 'RWF', '', '', '707519515382', '1100000041', '', 'VC', '', '1489647808', 'Approved', 'Single', '932e649863b95b8c80e6b361c217495e'),
(59, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1489749024', 'Cancelled', 'Single', 'a93aad92b48ce5acff804cc172220632'),
(60, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1489749358', 'Cancelled', 'Single', '3f309782a6786c75901c84a8d8f7af94'),
(61, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1490770814', 'Cancelled', 'Single', 'c33112d33b80e86b6cfdac5be0a960fa'),
(62, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491676564', 'Cancelled', 'Single', 'fd7faded8b066f718e091a582de23e4b'),
(63, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491744819', 'Cancelled', 'Single', '123c6b6eb949e7499e5f890e8a55cf44'),
(64, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491745011', 'Cancelled', 'Single', 'b222275fc288d874eea18bc4516f261f'),
(65, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491745087', 'Cancelled', 'Single', '6209591a6fdc6a327760413f417d3661'),
(66, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491748011', 'Cancelled', 'Single', 'd3b7d96fa7425015d91c8f3b24c93ad5'),
(67, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491752766', 'Cancelled', 'Single', '363fac04e3313dfeb8765193815a1892'),
(68, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491757075', 'Cancelled', 'Single', 'e1952f3bcf03b2dd874ebf8a39198f77'),
(69, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491775831', 'Cancelled', 'Single', 'e9b37c1374212790e79ab3fdef72c444'),
(70, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1492425744', 'Cancelled', 'Single', '5b75e6c2af7fe3ca01cf2e2d7e9b4f89'),
(71, 0, 'TAS-SIL-000076', 'TAS-SIL-000076', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1492514621', 'Cancelled', 'Single', '9c74bcfa8e1e6b2410b743c73bde8de6'),
(72, 0, 'TAS-SIL-000076', 'TAS-SIL-000076', 'pay', '125000', '', 'RWF', '', '', '710822525895', '1100000039', '', '', '', '1492514793', 'Cancelled', 'Single', 'e5381d475405ffe5d11dca268684fb8c'),
(73, 0, 'TAS-SIL-000076', 'TAS-SIL-000076', 'pay', '125000', '', 'RWF', '', '', '710822525898', '1100000040', '', '', '', '1492515085', 'Cancelled', 'Single', '065636f66232c61e8fbf396040e2828c'),
(74, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492605307', 'Cancelled', 'Single', '70b61d226e834839ce3039460394587c'),
(75, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492611025', 'Cancelled', 'Single', 'b04bde2922799372bc4a87cb0f5df042'),
(76, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492612367', 'Cancelled', 'Single', '60f0d5ae75dc330d9c159334c5c9afd8'),
(77, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492612378', 'Cancelled', 'Single', '9bff4d96d59268f853b2f05abd5eaad2'),
(78, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492612382', 'Cancelled', 'Single', '1ec103deac8ca32019deecfe875cc140'),
(79, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', 'pay', '125000', '', 'RWF', '', '', '710822525898', '1100000040', '', '', '', '1492625534', 'Cancelled', 'Single', '57ebe133ec016a4a0f70a949ab84577c'),
(80, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625534', 'Cancelled', 'Single', '57ebe133ec016a4a0f70a949ab84577c'),
(81, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625537', 'Cancelled', 'Single', '8f8a7bb047dcd20d1451e2913c6fac89'),
(82, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625548', 'Cancelled', 'Single', '2c06f23ef969742426da90fade779fe7'),
(83, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625550', 'Cancelled', 'Single', 'b9b80f707f526c22c3cdd77a15aee55e'),
(84, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492669163', 'Cancelled', 'Single', '5b4e421a2c7f1ff36ca996e390881ee3'),
(85, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492676235', 'Cancelled', 'Single', 'ba7bd962ec6e61192bc4c19fbd71d930'),
(86, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1493897559', 'Cancelled', 'Single', 'd434b6e58d4b0b540585ab877dfd4492'),
(87, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495406281', 'Cancelled', 'Single', 'facc392c6a35f8127baba3b45d25fd18'),
(88, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495459108', 'Cancelled', 'Single', 'aba505c3fcc381d8e2204b71f88107fc'),
(89, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533649', 'Cancelled', 'Single', 'd4531620095010efdbe9e3200b707233'),
(90, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533701', 'Cancelled', 'Single', '4019ad361ae325fd60d675f7bfcf54e2'),
(91, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533788', 'Cancelled', 'Single', '9e4f37665978c782bd0694461f60ff1f'),
(92, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533793', 'Cancelled', 'Single', '8225829c66b3676fc56ec7d43d89b09b'),
(93, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533833', 'Cancelled', 'Single', '3beaeca76d032302c61cfb28a9b37000'),
(94, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495539057', 'Cancelled', 'Single', '6b0a7e7d2c641cc7b31f80509e933de1'),
(95, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495539423', 'Cancelled', 'Single', 'b6bffdadbf3522c8f34ff489aa51ffa0'),
(96, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495539425', 'Cancelled', 'Single', '4d4c7dcb79e5e3d59f80c462ca57a16d'),
(97, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495542290', 'Cancelled', 'Single', '05143f2bb4e5a54135eff6cb9655da06'),
(98, 0, 'YCA-REQ-000127', 'YCA-REQ-000127', '', '', '', '', '', '', '', '', '', '', '', '1496824358', 'Cancelled', 'Single', 'e55a013f20d2f5fe6d7317b898cb8259'),
(99, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1496824572', 'Cancelled', 'Single', 'd81109b4787ad472fb550ae99ec7fadb'),
(100, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1496831699', 'Cancelled', 'Single', '2029e6537bf4d10ac998579e5f3da45d'),
(101, 0, 'TAS-SIL-001851', 'TAS-SIL-001851', 'pay', '213500', '', 'RWF', '', '', '804020401301', '1100000044', '', 'VC', '', '1518163305', 'Approved', 'Single', 'ad35edfb0d6c52c92bb7be4bccfc33a8'),
(102, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335148', 'Cancelled', 'Single', '5eb6ff6d7df6718fa8f5de6a9891e003'),
(103, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335208', 'Cancelled', 'Single', 'f277a31ea29fac57feaef5b24805bd3b'),
(104, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335406', 'Cancelled', 'Single', '38ccca4581147da4bb772e9fe32bd5d7'),
(105, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335489', 'Cancelled', 'Single', 'ba5c33c8fc31ebea7bc31cbceaa33ae1'),
(106, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518341875', 'Cancelled', 'Single', 'c78bad7437d04a7f70637cca0a74e360'),
(107, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518341936', 'Cancelled', 'Single', 'b1b55cbb9dc5bf75be5439aa2b21add5'),
(108, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518342012', 'Cancelled', 'Single', '26c1ae1570ec275162fc3a35da38fc5c'),
(109, 0, 'TAS-SIL-001852', 'TAS-SIL-001852', 'pay', '213500', '', 'RWF', '', '', '804301401747', '1100000047', '', 'VC', 'xxxxxxxxxxxx8769', '1518355908', 'Approved', 'Single', 'af9991c0cff7af972a76361f4b209cc1'),
(110, 0, 'TAS-SIL-001853', 'TAS-SIL-001853', 'pay', '213500', '', 'RWF', '', '', '805316157011', '32', '', 'VC', 'xxxxxxxxxxxx8769', '1519275510', 'Approved', 'Single', 'b12589d2aa7f680c1afbb16180af6833'),
(111, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', 'pay', '213500', '', 'RWF', '', '', '805316157011', '32', '', 'VC', 'xxxxxxxxxxxx8769', '1519277322', 'Approved', 'Single', 'cb5d634619c752fcd6a57e2d0695a39a'),
(112, 0, 'TAS-GOL-001858', 'TAS-GOL-001858', 'pay', '384300', '', 'RWF', '', '', '805320157134', '33', '', 'VC', 'xxxxxxxxxxxx8769', '1519286435', 'Approved', 'Single', '81478508120945848c7abd1abbf158f6'),
(113, 0, 'TAS-SIL-001857', 'TAS-SIL-001857', 'pay', '213500', '', 'RWF', '', '', '805320157158', '34', '', 'VC', 'xxxxxxxxxxxx8769', '1519287288', 'Approved', 'Single', 'fbb72cbf74cc7f22966f3f2b66921c18'),
(114, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1519393447', 'Cancelled', 'Single', 'df5d8477be229c619f3c21f8fcd0d626'),
(115, 0, 'TAS-SIL-001867', 'TAS-SIL-001867', 'pay', '25000', '', 'USD', '', '', '805601431204', '1100000053', '', 'VC', 'xxxxxxxxxxxx8769', '1519478627', 'Approved', 'Single', '22a54cc43db25875b3022d0cf7c423be'),
(116, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1520272536', 'Cancelled', 'Single', 'ea6fb724b93a73e3c7bd41ee3f1d5c0f'),
(117, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1520273176', 'Cancelled', 'Single', '780c54ba52a15ff97eb4b171c98702bb'),
(118, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1520352020', 'Cancelled', 'Single', 'a0dfededd25f802c86c8d58e548b0700'),
(119, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1520352221', 'Cancelled', 'Single', '612138205ae86ea45b5e28d9452d6479'),
(120, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1523879571', 'Cancelled', 'Single', 'ebe6475fef9145bdcf6df29a8b7b8fbc'),
(121, 0, 'TAS-ISIL-001862', 'TAS-ISIL-001862', '', '', '', '', '', '', '', '', '', '', '', '1523882204', 'Cancelled', 'Single', '4e3654ccc394449a1689f5ebfab909dd');

-- --------------------------------------------------------

--
-- Table structure for table `events_request_invitation`
--

CREATE TABLE `events_request_invitation` (
  `ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_category` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gold` varchar(20) NOT NULL,
  `platinum` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `added_date` varchar(100) NOT NULL,
  `added_temp` varchar(50) NOT NULL,
  `form` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_request_invitation`
--

INSERT INTO `events_request_invitation` (`ID`, `title`, `firstname`, `lastname`, `email`, `telephone`, `company_name`, `company_category`, `jobtitle`, `country`, `gold`, `platinum`, `status`, `added_date`, `added_temp`, `form`) VALUES
(1, 'Dr.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Hehe', '', 'Chairman / Executive Chairman', 'Rwanda', '', '', '', '27-02-2018', '', 'API'),
(2, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 754 785 467', 'Test', 'Non-Governmental Organization', 'Chairman / Executive Chairman', 'Angola', '7', '6', '', '27-02-2018', '', 'API'),
(3, 'H.e.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Hehe', 'Academia', 'Associate Director', 'Albania', '10', '5', '', '27-02-2018', '', 'API'),
(4, 'Prof.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Test', 'Civil Society', 'Chairman / Executive Chairman', 'American Samoa', '5', '5', '', '27-02-2018', '', 'API'),
(5, 'Hon.', 'Test', 'Test', 'abraham01@cube.rw', '+250 784 978 743', 'Hehe', 'Civil Society', 'Board Chairman', 'Afghanistan', '5', '5', '', '27-02-2018', '', 'API'),
(6, 'Ms.', 'Test', 'Test', 'valentine@cube.rw', '+250787396547', 'Test', 'International Organization', 'Chairman / Executive Chairman', 'Algeria', '8', 'select', '', '27-02-2018', '', 'API'),
(7, 'H.e.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 784 978 743', 'Hehe', 'Academia', 'Board Chairman', 'American Samoa', '6', '5', '', '01-03-2018', '', 'API'),
(8, 'Hon.', 'Test', 'Test', 'abrahamahoshakiye@gmail.com', '+250 743 764 376', 'Hehe', 'Academia', 'Associate Director', 'American Samoa', '5', '5', '', '01-03-2018', '', 'API'),
(9, 'Prof.', 'Test', 'Test', 'abraham@cube.rw', '+93 43 534 6534', 'Test', 'Test', 'Test', 'Austria', '6', '5', '', '26-03-2018', '1522047324', 'API'),
(10, 'Dr.', 'Test', 'Test', 'abraham@cube.rw', '+250788983293', 'Test', 'Non-Profit Organization', 'Board Chairman', 'Rwanda', '', '', '', '18-04-2018', '1524043254', 'API');

-- --------------------------------------------------------

--
-- Table structure for table `facegorilla_form`
--

CREATE TABLE `facegorilla_form` (
  `ID` bigint(20) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_regname` varchar(100) NOT NULL,
  `company_number` varchar(50) NOT NULL,
  `legal_structure` varchar(500) NOT NULL,
  `website` varchar(100) NOT NULL,
  `date_founded` varchar(50) NOT NULL,
  `employee_number` varchar(10) NOT NULL,
  `org_stage` varchar(500) NOT NULL,
  `funding_state` varchar(500) NOT NULL,
  `investname` varchar(500) NOT NULL,
  `investlocation` varchar(600) NOT NULL,
  `business_model` varchar(600) NOT NULL,
  `business_impact` varchar(600) NOT NULL,
  `business_sectors` varchar(600) NOT NULL,
  `business_tweet` varchar(600) NOT NULL,
  `business_products` varchar(600) NOT NULL,
  `target_markets` varchar(600) NOT NULL,
  `business_client` varchar(600) NOT NULL,
  `business_textmodel` varchar(600) NOT NULL,
  `market_opps` varchar(600) NOT NULL,
  `business_advantange` varchar(600) NOT NULL,
  `business_strategy` varchar(600) NOT NULL,
  `previous_award` varchar(600) NOT NULL,
  `previous_incubator` varchar(600) NOT NULL,
  `request_availability` varchar(600) NOT NULL,
  `team_experience` varchar(600) NOT NULL,
  `other_business` varchar(600) NOT NULL,
  `other_investamount` varchar(600) NOT NULL,
  `advisor_experience` varchar(600) NOT NULL,
  `business_currenttax` varchar(600) NOT NULL,
  `revenue_build` varchar(600) NOT NULL,
  `business_breakeven` varchar(600) NOT NULL,
  `business_valuation` varchar(600) NOT NULL,
  `valuation_method` varchar(500) NOT NULL,
  `current_netburn` varchar(200) NOT NULL,
  `previous_netburn` varchar(300) NOT NULL,
  `capital_require` varchar(600) NOT NULL,
  `external_investment` varchar(20) NOT NULL,
  `existing_investors` varchar(300) NOT NULL,
  `existing_strategy` varchar(300) NOT NULL,
  `tas_referrence` varchar(300) NOT NULL,
  `added_temp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facegorilla_form`
--

INSERT INTO `facegorilla_form` (`ID`, `company_name`, `company_regname`, `company_number`, `legal_structure`, `website`, `date_founded`, `employee_number`, `org_stage`, `funding_state`, `investname`, `investlocation`, `business_model`, `business_impact`, `business_sectors`, `business_tweet`, `business_products`, `target_markets`, `business_client`, `business_textmodel`, `market_opps`, `business_advantange`, `business_strategy`, `previous_award`, `previous_incubator`, `request_availability`, `team_experience`, `other_business`, `other_investamount`, `advisor_experience`, `business_currenttax`, `revenue_build`, `business_breakeven`, `business_valuation`, `valuation_method`, `current_netburn`, `previous_netburn`, `capital_require`, `external_investment`, `existing_investors`, `existing_strategy`, `tas_referrence`, `added_temp`) VALUES
(8, '', 'hehe', '2321213', 'Company Limited by Shares', '', '2005', '10', 'Prototype/demo or pilot in development', '$25,000 -$50,000', 'hehe', 'kigali', '[\"Busines to Business\",\"Busines to Client\",\"Busines to Government\",\"Other\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '[\"Online\",\"Product\",\"Service\",\"Clean tech\",\"Technology\",\"Other\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '[\"Angola\",\"Chad\",\"Kenya\",\"Rwanda\",\"Tanzania\",\"Uganda\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '[\"Up to date financial information\",\"Up to date investor presentation\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'sodales cursus. Cras volutpat vel augue vel dignissim.', '2334', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Yes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '$300-$400', 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '2309', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', '1484657259'),
(10, '', 'info', '4533456', 'Company Limited by Guarantee&lt;/option&gt;\r\n                                            ', '', '2009', '4', 'Ready for launch (pre-revenue)', '$25,000 -$50,000', 'info cinema', 'kigali', '[\"Busines to Business\",\"Busines to Client\",\"Busines to Government\",\"Other\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '[\"Online\",\"Product\",\"Service\",\"Technology\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '[\"Angola\",\"Kenya\",\"Mali\",\"South Sudan\",\"Tanzania\",\"Uganda\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '[\"Up to date financial information\",\"A working financial model\",\"Up to date investor presentation\",\"A detailed business plan\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'sodales cursus. Cras volutpat vel augue vel dignissim.', '23545', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '$300-$400', 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '23094', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', '1485336961'),
(49, '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '[\"Water Management\",\"Energy\",\"Transport\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', '1488463116'),
(50, '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '[\"Water Management\",\"Transport\",\"Sustainable Environments\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', '1488464828'),
(52, '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Public Safety\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga', '1488526325'),
(53, '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Sustainable Environments\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga', '1488528592'),
(54, '', 'Cube', '4354355', 'Company Limited by Shares', '', '2016', '1', 'Prototype/demo or pilot in development', '$25,000 -$50,000', '', '', '', 'hdashj dshjad sadhu huss hjsda ', '[\"Online\",\"Financial\"]', 'uiuweqn midas dsghgds asdghgsda', 'weigh ewqgwhqe ewqgh wee', '[\"Angola\",\"Guinea\",\"Rwanda\"]', '', '', '', '', '', '', '', '[\"A working financial model\"]', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '1488530822'),
(55, '', 'info', '4533456', 'Company Limited by Shares', '', '2009', '4', 'Prototype/demo or pilot in development', 'Less than $ 25,000', 'info cinema', 'kigali', '[\"Busines to Client\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', '[\"Online\",\"Service\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '[\"Angola\",\"Continental\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '[\"Up to date financial information\",\"Up to date investor presentation\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'sodales cursus. Cras volutpat vel augue vel dignissim.', '23545', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'No', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '$100-$200', 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis ante. Maecenas vulputate massa est, a ultrices felis facilisis a. Nunc sit amet iaculis augue. Proin elementum sodales cursus.', '23094', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada euismod odio, eget suscipit est. Suspendisse luctus augue at leo congue, ac tincidunt ex dapibus. Duis consequat ac ligula id scelerisque. Phasellus vulputate tortor eget lacinia tempus. Duis sed congue risus, ac mollis a', '1489282017'),
(61, '', 'hweheq', '1232323', 'Company Limited by Shares', '', '2015', '4', 'Working prototype/demo available/pilot complete', '$50,000-$100,000', 'sauusasda dsa ddads', 'dsahjsda dsa d s', '[\"Busines to Business\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Online\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Kenya\",\"Rwanda\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'webbsahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsa', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '[\"A working financial model\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'weewbewq ewq ewqgh ew re', '3233232', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'Yes', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '$100-$200', 'ahsag sdagh dsa', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'dhsabdsa dsagvdsa ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga', '1489760294'),
(63, '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Housing\",\"Public Safety\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga', '1489781706'),
(67, '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Water Management\",\"Housing\",\"Public Safety\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga', '1490614380'),
(74, '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '[\"Transport\"]', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga gas g sag ag agha ag ag as ga gehang  ', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg d', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sahja dash dsa dash dosa sea sdajbsda dab dsahjbdsa sea dsahbasd sdah dsahjjh dsah sdaghdsh sadghgdhdahas sdahhjdsa dsahghds dshgds sdagh sadghdsah dsaghsad asdghsadghsd asdghdag dghdaghd hgdahdsahg dsaghhgadshgasd sdgahashg saghgsahgdsa aghga dagdh dgha dga dag &eacute;gaya ans asg &auml;gs ag saga', '1491818025');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `citizenship_country` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `group_size` varchar(100) NOT NULL,
  `group_pass` text NOT NULL,
  `pass_type` varchar(50) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `payment_state` varchar(100) NOT NULL,
  `payment_rn` varchar(50) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `receipt_number` varchar(100) NOT NULL,
  `card_issue` varchar(255) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `transaction_number` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `token` text NOT NULL,
  `form` varchar(30) NOT NULL,
  `added_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`ID`, `title`, `firstname`, `lastname`, `telephone`, `email`, `gender`, `company_name`, `website`, `citizenship_country`, `jobtitle`, `group_size`, `group_pass`, `pass_type`, `payment_method`, `unit_price`, `discount`, `amount`, `currency`, `payment_state`, `payment_rn`, `payment_date`, `receipt_number`, `card_issue`, `card_number`, `transaction_number`, `state`, `token`, `form`, `added_date`) VALUES
(1, 'Hon.', 'Abraham', 'Imanzi', '+250785782810', 'abraham1@cube.rw', 'Male', 'Cube Rwanda', 'cube.rw', 'Rwanda', 'Associate Director', '20', '[\"Silver\"]', 'groupsilver', 'Debit/Credit Card', 0, 0, '1366400', 'RWF', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(2, 'Mr.', 'Abraham', 'Imanzi', '+250785782810', 'abraham1@cube.rw', 'Male', 'Cube Rwanda', 'cube.rw', 'Rwanda', 'Board Chairman', '20', '[\"Silver\",\"Gold \",\"Platinum\"]', '', 'Debit/Credit Card', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(3, 'Hon.', 'Abraham', 'Imanzi', '+250 787 473 873', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Rwanda', 'ICT Technician', '3', '[\"Silver\",\"Gold \",\"Platinum\"]', 'groupsilver', 'Bank-Transfer', 0, 0, '1366400', 'RWF', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(4, 'Hon.', 'Abraham', 'Imanzi', '+250 787 473 873', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Rwanda', 'ICT Technician', '3', '[\"Silver\",\"Gold \",\"Platinum\"]', '', 'Bank-Transfer', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(5, 'Hon.', 'Abraham', 'Imanzi', '+250 787 473 873', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Rwanda', 'ICT Technician', '3', '[\"Silver\",\"Gold \",\"Platinum\"]', '', 'Bank-Transfer', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(6, 'Hon.', 'Abraham', 'Imanzi', '+250 787 473 873', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Rwanda', 'ICT Technician', '2', '[\"Silver\",\"Gold \",\"Platinum\"]', '', 'Bank-Transfer', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(7, 'Hon.', 'Abraham', 'Imanzi', '+250 787 473 873', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Rwanda', 'ICT Technician', '2', '[\"Silver\",\"Gold \",\"Platinum\"]', '', 'Bank-Transfer', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-04-2017'),
(8, 'Mr.', 'Test', 'Test', '+93 43 534 6534', 'abrahamahoshakiye1@gmail.com', 'Male', 'Cube', '', 'Rwanda', 'Chief Information Officer (CIO)', '10', '[\"Silver\"]', '', 'Debit/Credit Card', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-02-2018'),
(9, 'Hon.', 'Test', 'Test', '+250 783 026 112', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Rwanda', 'Public Relations Manager', '5', '[\"Platinum\"]', '', 'Debit/Credit Card', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 'API', '10-02-2018'),
(10, 'Dr.', 'Test', 'Test', '+250 789 239 092', 'abraham1@cube.rw', 'Female', 'Cube', '', 'Rwanda', 'Deputy CEO', '9', '[\"Silver\"]', 'Groupsilver', 'Bank-Transfer', 0, 0, '1600', '', '', '', '', '', '', '', '', '', '8c71c4f9ccb30b520630f1f5a4a0e440', 'API', '11-02-2018'),
(11, 'Dr.', 'Test', 'Imanzi', '+250 778 787 878', 'abraham1@cube.rw', 'Male', 'Cube', 'abraham.rw', 'Rwanda', 'Founder', '6', '[\"Silver\"]', 'Groupsilver', 'Bank-Transfer', 0, 0, '1600', '', 'Pending', '', '', '', '', '', '', '', '3f3b08c6e744631c26daebe5289590f1', 'API', '11-02-2018'),
(12, 'Dr.', 'Test', 'Imanzi', '+250 778 787 878', 'abraham1@cube.rw', 'Male', 'Cube', 'abraham.rw', 'Rwanda', 'Founder', '2', '[\"Silver\"]', 'Groupsilver', 'Debit/Credit Card', 1366400, 0, '1366400', 'RWF', 'Pending', '', '', '', '', '', '', '', 'ddf20bd9ce5c8cb2ef4224bea65a9609', 'API', '11-02-2018'),
(13, 'Dr.', 'Abraham', 'Imanzi', '+7 979 000-89-08', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Russian Federation', 'Associate Director', '7', '[\"Gold \"]', 'Groupgold', 'Debit/Credit Card', 3200, 0, '3200', 'USD', 'Confirmed', '13', '1518356245', '804301401748', 'VC', 'xxxxxxxxxxxx8769', '1100000048', '', '8c44f74a4a5fa1acf82f7b0980f44811', 'API', '11-02-2018'),
(14, 'Dr.', 'Abraham', 'Imanzi', '+7 979 000-89-08', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Russian Federation', 'Associate Director', '2', '[\"Gold \"]', 'Groupgold', 'Debit/Credit Card', 3200, 0, '3200', 'USD', 'Confirmed', '14', '1518357156', '804301401750', 'VC', 'xxxxxxxxxxxx8769', '1100000049', '', 'cd389e257684bee6c41de7c237704912', 'API', '11-02-2018'),
(15, 'Dr.', 'Abraham', 'Imanzi', '+7 979 000-89-08', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Russian Federation', 'Associate Director', '8', '[\"Gold \"]', 'Groupgold', 'Debit/Credit Card', 3200, 0, '3200', 'USD', 'Confirmed', '15', '1518357524', '804301401751', 'VC', 'xxxxxxxxxxxx8769', '1100000050', '', '7b6563b29952ca52240d4c080d3e1e2c', 'API', '11-02-2018'),
(16, 'Dr.', 'Abraham', 'Imanzi', '+7 979 000-89-08', 'abraham1@cube.rw', 'Male', 'Cube', '', 'Russian Federation', 'Associate Director', '2', '[\"Gold \"]', 'Groupgold', 'Debit/Credit Card', 3200, 0, '3200', 'USD', 'Confirmed', '16', '1518359837', '804302401756', 'VC', 'xxxxxxxxxxxx8769', '1100000051', '', '5c30c86f99845f5aa09b4baf17309416', 'API', '11-02-2018'),
(17, 'Dr.', 'Abraham', 'Imanzi', '+7 979 000-89-08', 'abraham01@cube.rw', 'Male', 'Cube', '', 'Russian Federation', 'Associate Director', '2', '[\"Gold \"]', 'Groupgold', 'Debit/Credit Card', 3200, 0, '3200', 'USD', 'Confirmed', '17', '1518360355', '804302401757', 'VC', 'xxxxxxxxxxxx8769', '1100000052', '', '17cc8daec31bd50a711eeda4c3c98798', 'API', '11-02-2018');

-- --------------------------------------------------------

--
-- Table structure for table `groups_item`
--

CREATE TABLE `groups_item` (
  `ID` bigint(20) NOT NULL,
  `group_ID` bigint(20) NOT NULL,
  `host_ID` varchar(100) NOT NULL,
  `payment_rn` varchar(200) NOT NULL,
  `command` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `order_info` varchar(500) NOT NULL,
  `comment` text NOT NULL,
  `receipt_number` varchar(300) NOT NULL,
  `transaction_number` varchar(200) NOT NULL,
  `receipt_string` text NOT NULL,
  `card_issue` varchar(255) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `payment_state` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups_item`
--

INSERT INTO `groups_item` (`ID`, `group_ID`, `host_ID`, `payment_rn`, `command`, `amount`, `discount`, `currency`, `order_info`, `comment`, `receipt_number`, `transaction_number`, `receipt_string`, `card_issue`, `card_number`, `payment_date`, `payment_state`, `type`, `token`) VALUES
(1, 0, 'GRP-000001', 'GRP-000001', 'pay', '747500', '', 'RWF', 'Group-Pay', '', '701306200357', '1100000071', 'ReceiptNo: 701306200357 | TransactionNo: 1100000071 | Acquirer Response Code: 00 | Bank Authorization ID: 200357 | Batch Number: 20170113 | Card Type: MC | Amount: 747500 | Message: Approved', '', '', '1484244377', 'Confirmed', 'Group', '236b8d15ff2f47f9a785f3ac5494f265'),
(2, 0, 'GRP-000001', 'GRP-000001-1', 'pay', '135', '', 'USD', 'Group-Pay', '', '701306200359', '1100000072', 'ReceiptNo: 701306200359 | TransactionNo: 1100000072 | Acquirer Response Code: 00 | Bank Authorization ID: 200359 | Batch Number: 20170113 | Card Type: MC | Amount: 135 | Message: Approved', '', '', '1484245992', 'Confirmed', 'Group', '87aac766063c504ba23d34a1123f1ebb'),
(3, 0, 'TAS-SIL-000004', 'TAS-SIL-000004', 'pay', '125000', '', 'RWF', 'Silver-Silver', '', '701308200361', '1100000073', 'ReceiptNo: 701308200361 | TransactionNo: 1100000073 | Acquirer Response Code: 00 | Bank Authorization ID: 200361 | Batch Number: 20170113 | Card Type: MC | Amount: 125000 | Message: Approved', '', '', '1484253948', 'Confirmed', '64f9e221a21f5e1d87d7f62914f5458e', ''),
(4, 0, 'TAS-SIL-000009', 'TAS-SIL-000009', 'pay', '125000', '', 'RWF', 'Silver-Silver', '', '701819200593', '1100000075', 'ReceiptNo: 701819200593 | TransactionNo: 1100000075 | Acquirer Response Code: 00 | Bank Authorization ID: 200593 | Batch Number: 20170118 | Card Type: MC | Amount: 125000 | Message: Approved', '', '', '1484724472', 'Confirmed', 'Single', 'd99ddaba4c42174979c8cb771a20d2d2'),
(5, 0, 'TAS-GOL-000021', 'TAS-GOL-000021', '', '', '', '', '', '', '', '', '', '', '', '1487584221', 'Confirmed', 'Single', '5ddc20c1340f51cbcd3f4da8490dd4a5'),
(6, 0, 'TAS-GOL-000022', 'TAS-GOL-000022', '', '', '', '', '', '', '', '', '', '', '', '1487594967', 'Confirmed', 'Single', '7e73aff7b21c3e9375caaaa2ae0799df'),
(7, 0, 'TAS-SIL-000023', 'TAS-SIL-000023', '', '', '', '', '', '', '', '', '', '', '', '1487595953', 'Confirmed', 'Single', '410283673bf31964e4ff4f918e74128e'),
(8, 0, 'TAS-SIL-000024', 'TAS-SIL-000024', '', '', '', '', '', '', '', '', '', '', '', '1487596923', 'Confirmed', 'Single', '68adffd6fcc9bffe750a5bdd476de1b0'),
(9, 0, 'TAS-PLA-000025', 'TAS-PLA-000025', '', '', '', '', '', '', '', '', '', '', '', '1487662164', 'Confirmed', 'Single', '632bf8df9bb4974b0ddf70b453f3f317'),
(10, 0, 'TAS-SIL-000026', 'TAS-SIL-000026', '', '', '', '', '', '', '', '', '', '', '', '1487672501', 'Confirmed', 'Single', 'd2281cfbd582199a3ad94fab01d1182a'),
(11, 0, 'TAS-PLA-000029', 'TAS-PLA-000029', 'pay', '635000', '', '', '', '', '705222230254', '6', '', '', '', '1487674466', 'Confirmed', 'Single', '6163030a540df0dd519f1b4a88410c6a'),
(12, 0, 'TAS-SIL-000030', 'TAS-SIL-000030', 'pay', '125000', '', 'RWF', '', '', '705400230308', '10', '', '', '', '1487766366', 'Confirmed', 'Single', '086509ae6962e7c8d5672022f1a02dd8'),
(13, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1487770620', 'Cancelled', 'Single', '5a23ab91ea56d7ebef8a3d8fb2346aa8'),
(14, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '705401230315', '17', '', '', '', '1487770703', 'Cancelled', 'Single', 'a2fd7d5b36fda4fad13f12346e5e4f13'),
(15, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '705401230315', '17', '', '', '', '1487771214', 'Cancelled', 'Single', '3789eeccce362171836b18cbe17b9e5e'),
(16, 0, 'TAS-SIL-000031', 'TAS-SIL-000031', 'pay', '125000', '', 'RWF', '', '', '705402230320', '18', '', '', '', '1487774858', 'Approved', 'Single', '51d395f62cd55a4de59ec1b55495a903'),
(17, 0, 'TAS-SIL-000032', 'TAS-SIL-000032', 'pay', '125000', '', 'RWF', '', '', '705402230321', '19', '', '', '', '1487775258', 'Approved', 'Single', '2d0a2da4aec39faef5e2f4204a8dde98'),
(18, 0, 'TAS-GOL-000033', 'TAS-GOL-000033', 'pay', '290000', '', 'RWF', '', '', '705421230344', '20', '', '', '', '1487843425', 'Approved', 'Single', 'a819ea6d1fede3b917ac2c36b2e2e167'),
(19, 0, 'TAS-SIL-000034', 'TAS-SIL-000034', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1488034370', 'Cancelled', 'Single', '8f294653307a816f764296788f44f896'),
(20, 0, 'TAS-GOL-000035', 'TAS-GOL-000035', 'pay', '290000', '', 'RWF', '', '', '705819230434', '26', '', 'VC', '', '1488181240', 'Approved', 'Single', '311ba211444a2608a53e771889a925a1'),
(21, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273104', 'Cancelled', 'Single', '05f0604d5c1a37c445edcdf93f23ee3e'),
(22, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273118', 'Cancelled', 'Single', '2f828d6bb2f12e18a399fc015a469ac3'),
(23, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273131', 'Cancelled', 'Single', '2e17b0980d0a92e9095a229def66e216'),
(24, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273133', 'Cancelled', 'Single', 'd54f72fe090eb1a86adbfe928748fe77'),
(25, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273147', 'Cancelled', 'Single', '21851471cebbe9ed8fca5c182e626d46'),
(26, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273148', 'Cancelled', 'Single', '98b880c4d16aae3cec58804c408bf6fb'),
(27, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273398', 'Cancelled', 'Single', 'b320589a90230a4b22ab88023e570f24'),
(28, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488273999', 'Cancelled', 'Single', '158ff74905b10f9c9bf207ae4aa251c3'),
(29, 0, 'TAS--000038', 'TAS--000038', '', '', '', '', '', '', '', '', '', '', '', '1488274159', 'Cancelled', 'Single', 'e83eec98d87eb758513d155f62caa6d8'),
(30, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274263', 'Cancelled', 'Single', '3bedf6d860a4c1c7759e78f5a0a3bcfa'),
(31, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274572', 'Cancelled', 'Single', 'fea9a983053cb12f7a54eb977e6ebf85'),
(32, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274796', 'Cancelled', 'Single', 'c0dfa70b343901651f9ce1499c943bff'),
(33, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488274822', 'Cancelled', 'Single', 'ccbbdaef4dc2375843af504036bb3e26'),
(34, 0, 'TAS-GOD-000039', 'TAS-GOD-000039', '', '', '', '', '', '', '', '', '', '', '', '1488433330', 'Cancelled', 'Single', 'f3b50b22a105b3d6b7293f3b466284f6'),
(35, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488433500', 'Cancelled', 'Single', 'afc4df8f5392c1ce5c0fbfc1558ee3d9'),
(36, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488433546', 'Cancelled', 'Single', 'b7f8c563ee067c716d7d9893a0cfe09f'),
(37, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488433856', 'Cancelled', 'Single', 'd5d04b3ae2ec3f1540dabea1d220144e'),
(38, 0, 'TAS-SIL-000040', 'TAS-SIL-000040', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434065', 'Cancelled', 'Single', 'cccb76f225824f5545defba347bfbdfb'),
(39, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434351', 'Cancelled', 'Single', 'fe29c7dc6283be25010382338e8d3462'),
(40, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434523', 'Cancelled', 'Single', 'af67165e516b48ee3ef63703a9f7134a'),
(41, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434610', 'Cancelled', 'Single', 'de2b7506e194cc2e4f63fa36885a08d3'),
(42, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434619', 'Cancelled', 'Single', '599e8606b676ccec9382889a645acf7f'),
(43, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434622', 'Cancelled', 'Single', 'cec3f9d5019f33c74ebf5ad55616261e'),
(44, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434623', 'Cancelled', 'Single', '89a40ca8213553657f243e8c7c7333c0'),
(45, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', '', '', '', '', '', '', '', '', '', '', '', '1488434624', 'Cancelled', 'Single', '37e9e0c04a19755260c7fae4f82f42b2'),
(46, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '0', '', '', '', '', '', '0', '', '', '', '1488434912', 'Cancelled', 'Single', '9a90b28c6e014bffd23c2941d5cb6699'),
(47, 0, 'TAS-SIL-000041', 'TAS-SIL-000041', 'pay', '125000', '', 'RWF', '', '', '706118240299', '29', '', 'VC', '', '1488436928', 'Approved', 'Single', 'a0e4225788e9ddd31f680836490e12e4'),
(48, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1488440138', 'Cancelled', 'Single', 'f92dc55120a338875786decafbe2ecb1'),
(49, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1488440174', 'Cancelled', 'Single', 'bd384443f47ff3c1efdfba648d54b4e0'),
(50, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488463116', 'Cancelled', 'Single', '7cfc976019d11f2f7f8a490b9e1c4163'),
(51, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488464828', 'Cancelled', 'Single', '85882a4df09a765b7dba6df1074d588d'),
(52, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488526325', 'Cancelled', 'Single', '1ee351ab42d5f32e564469d39157fa58'),
(53, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488528592', 'Cancelled', 'Single', '0fc0e68fd72e2892df1522ead20a0394'),
(54, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1488530868', 'Cancelled', 'Single', '92aee7e454a10ebf0f83c7f4fb29df7b'),
(55, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1489389999', 'Cancelled', 'Single', 'b452c2b55809adac429b9221d6782379'),
(56, 0, 'TAS-SIL-000045', 'TAS-SIL-000045', '', '', '', '', '', '', '', '', '', '', '', '1489407948', 'Cancelled', 'Single', '95c081a32ef4262d8881be916df7160e'),
(57, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1489481138', 'Cancelled', 'Single', 'a6cd7f917ab1c103b173eaca2b813acb'),
(58, 0, 'TAS-SIL-000057', 'TAS-SIL-000057', 'pay', '125000', '', 'RWF', '', '', '707519515382', '1100000041', '', 'VC', '', '1489647808', 'Approved', 'Single', '932e649863b95b8c80e6b361c217495e'),
(59, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1489749024', 'Cancelled', 'Single', 'a93aad92b48ce5acff804cc172220632'),
(60, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1489749358', 'Cancelled', 'Single', '3f309782a6786c75901c84a8d8f7af94'),
(61, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1490770814', 'Cancelled', 'Single', 'c33112d33b80e86b6cfdac5be0a960fa'),
(62, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491676564', 'Cancelled', 'Single', 'fd7faded8b066f718e091a582de23e4b'),
(63, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491744819', 'Cancelled', 'Single', '123c6b6eb949e7499e5f890e8a55cf44'),
(64, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491745011', 'Cancelled', 'Single', 'b222275fc288d874eea18bc4516f261f'),
(65, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491745087', 'Cancelled', 'Single', '6209591a6fdc6a327760413f417d3661'),
(66, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491748011', 'Cancelled', 'Single', 'd3b7d96fa7425015d91c8f3b24c93ad5'),
(67, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491752766', 'Cancelled', 'Single', '363fac04e3313dfeb8765193815a1892'),
(68, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491757075', 'Cancelled', 'Single', 'e1952f3bcf03b2dd874ebf8a39198f77'),
(69, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1491775831', 'Cancelled', 'Single', 'e9b37c1374212790e79ab3fdef72c444'),
(70, 0, 'TAS-SIL-000056', 'TAS-SIL-000056', '', '', '', '', '', '', '', '', '', '', '', '1492425744', 'Cancelled', 'Single', '5b75e6c2af7fe3ca01cf2e2d7e9b4f89'),
(71, 0, 'TAS-SIL-000076', 'TAS-SIL-000076', 'pay', '125000', '', 'RWF', '', '', '', '0', '', '', '', '1492514621', 'Cancelled', 'Single', '9c74bcfa8e1e6b2410b743c73bde8de6'),
(72, 0, 'TAS-SIL-000076', 'TAS-SIL-000076', 'pay', '125000', '', 'RWF', '', '', '710822525895', '1100000039', '', '', '', '1492514793', 'Cancelled', 'Single', 'e5381d475405ffe5d11dca268684fb8c'),
(73, 0, 'TAS-SIL-000076', 'TAS-SIL-000076', 'pay', '125000', '', 'RWF', '', '', '710822525898', '1100000040', '', '', '', '1492515085', 'Cancelled', 'Single', '065636f66232c61e8fbf396040e2828c'),
(74, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492605307', 'Cancelled', 'Single', '70b61d226e834839ce3039460394587c'),
(75, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492611025', 'Cancelled', 'Single', 'b04bde2922799372bc4a87cb0f5df042'),
(76, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492612367', 'Cancelled', 'Single', '60f0d5ae75dc330d9c159334c5c9afd8'),
(77, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492612378', 'Cancelled', 'Single', '9bff4d96d59268f853b2f05abd5eaad2'),
(78, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492612382', 'Cancelled', 'Single', '1ec103deac8ca32019deecfe875cc140'),
(79, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', 'pay', '125000', '', 'RWF', '', '', '710822525898', '1100000040', '', '', '', '1492625534', 'Cancelled', 'Single', '57ebe133ec016a4a0f70a949ab84577c'),
(80, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625534', 'Cancelled', 'Single', '57ebe133ec016a4a0f70a949ab84577c'),
(81, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625537', 'Cancelled', 'Single', '8f8a7bb047dcd20d1451e2913c6fac89'),
(82, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625548', 'Cancelled', 'Single', '2c06f23ef969742426da90fade779fe7'),
(83, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492625550', 'Cancelled', 'Single', 'b9b80f707f526c22c3cdd77a15aee55e'),
(84, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492669163', 'Cancelled', 'Single', '5b4e421a2c7f1ff36ca996e390881ee3'),
(85, 0, 'TAS-ESILD-000079', 'TAS-ESILD-000079', '', '', '', '', '', '', '', '', '', '', '', '1492676235', 'Cancelled', 'Single', 'ba7bd962ec6e61192bc4c19fbd71d930'),
(86, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1493897559', 'Cancelled', 'Single', 'd434b6e58d4b0b540585ab877dfd4492'),
(87, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495406281', 'Cancelled', 'Single', 'facc392c6a35f8127baba3b45d25fd18'),
(88, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495459108', 'Cancelled', 'Single', 'aba505c3fcc381d8e2204b71f88107fc'),
(89, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533649', 'Cancelled', 'Single', 'd4531620095010efdbe9e3200b707233'),
(90, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533701', 'Cancelled', 'Single', '4019ad361ae325fd60d675f7bfcf54e2'),
(91, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533788', 'Cancelled', 'Single', '9e4f37665978c782bd0694461f60ff1f'),
(92, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533793', 'Cancelled', 'Single', '8225829c66b3676fc56ec7d43d89b09b'),
(93, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495533833', 'Cancelled', 'Single', '3beaeca76d032302c61cfb28a9b37000'),
(94, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495539057', 'Cancelled', 'Single', '6b0a7e7d2c641cc7b31f80509e933de1'),
(95, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495539423', 'Cancelled', 'Single', 'b6bffdadbf3522c8f34ff489aa51ffa0'),
(96, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495539425', 'Cancelled', 'Single', '4d4c7dcb79e5e3d59f80c462ca57a16d'),
(97, 0, 'TAS-SIL-000085', 'TAS-SIL-000085', '', '', '', '', '', '', '', '', '', '', '', '1495542290', 'Cancelled', 'Single', '05143f2bb4e5a54135eff6cb9655da06'),
(98, 0, 'YCA-REQ-000127', 'YCA-REQ-000127', '', '', '', '', '', '', '', '', '', '', '', '1496824358', 'Cancelled', 'Single', 'e55a013f20d2f5fe6d7317b898cb8259'),
(99, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1496824572', 'Cancelled', 'Single', 'd81109b4787ad472fb550ae99ec7fadb'),
(100, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1496831699', 'Cancelled', 'Single', '2029e6537bf4d10ac998579e5f3da45d'),
(101, 0, 'TAS-SIL-001851', 'TAS-SIL-001851', 'pay', '213500', '', 'RWF', '', '', '804020401301', '1100000044', '', 'VC', '', '1518163305', 'Approved', 'Single', 'ad35edfb0d6c52c92bb7be4bccfc33a8'),
(102, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335148', 'Cancelled', 'Single', '5eb6ff6d7df6718fa8f5de6a9891e003'),
(103, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335208', 'Cancelled', 'Single', 'f277a31ea29fac57feaef5b24805bd3b'),
(104, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335406', 'Cancelled', 'Single', '38ccca4581147da4bb772e9fe32bd5d7'),
(105, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518335489', 'Cancelled', 'Single', 'ba5c33c8fc31ebea7bc31cbceaa33ae1'),
(106, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518341875', 'Cancelled', 'Single', 'c78bad7437d04a7f70637cca0a74e360'),
(107, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518341936', 'Cancelled', 'Single', 'b1b55cbb9dc5bf75be5439aa2b21add5'),
(108, 0, 'YCA-REQ-000128', 'YCA-REQ-000128', '', '', '', '', '', '', '', '', '', '', '', '1518342012', 'Cancelled', 'Single', '26c1ae1570ec275162fc3a35da38fc5c'),
(109, 0, '15', '15', 'pay', '320000', '', 'USD', '', '', '804301401751', '1100000050', '', 'VC', 'xxxxxxxxxxxx8769', '1518357524', 'Approved', 'Single', '91b18ea9d82bb65e8a35776b7c212b8b'),
(110, 0, '16', '16', 'pay', '320000', '', 'USD', '', '', '804302401756', '1100000051', '', 'VC', 'xxxxxxxxxxxx8769', '1518359837', 'Approved', 'Single', '09450e0e12f1e833bcec43856506da82'),
(111, 0, '17', '17', 'pay', '320000', '', 'USD', '', '', '804302401757', '1100000052', '', 'VC', 'xxxxxxxxxxxx8769', '1518360355', 'Approved', 'Single', '052b1a64d6d4821c202bb4d4f01fa936');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `ID` bigint(20) NOT NULL,
  `code` varchar(30) NOT NULL,
  `company_ID` bigint(20) NOT NULL,
  `event_ID` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `telephone_office` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  `info` varchar(600) NOT NULL,
  `added_date` varchar(50) NOT NULL,
  `added_temp` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`ID`, `code`, `company_ID`, `event_ID`, `user_ID`, `title`, `firstname`, `lastname`, `othername`, `email`, `telephone`, `telephone_office`, `action`, `info`, `added_date`, `added_temp`, `updated_date`, `state`) VALUES
(1, '', 0, 0, 0, 'Hon.', 'Weerw', 'Rwewe', '', 'tezt@cube.rw', '+93 54 335 3366', '+93 63 565 4653', 'Lost', 'Bla bla bla', '08-05-2017', '1494280313', '', 'Pending'),
(2, '', 0, 0, 0, 'Hon.', 'Weerw', 'Rwewe', '', 'tezt@cube.rw', '+93 54 335 3366', '+93 63 565 4653', 'Lost', 'Bla bla bla bla bla', '08-05-2017', '1494280471', '', 'Pending'),
(3, '', 0, 0, 0, 'Hon.', 'Jsbhjda', 'Bjdjd', '', 'txa@cube.rw', '+1 264-900-9090', '+93 33 830 3803', 'Get', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494855059', '', 'Pending'),
(4, '', 0, 0, 0, 'Mr.', 'Abraham', 'Imanzi', '', 'tye@cube.rw', '+250 737 827 832', '+250 783 472 332', 'Attending', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494855384', '', 'Pending'),
(5, '', 0, 0, 0, 'Mr.', 'Abraham', 'Man', '', 'txa@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Sponsoring', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494856358', '', 'Pending'),
(6, '', 0, 0, 0, 'Mr.', 'Abraham', 'Man', '', 'txa@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Sponsoring', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494858906', '', 'Pending'),
(7, '', 0, 0, 0, 'Hon.', 'Abraham', 'Man', 'Sasa', 'txa@gmail.com', '+93 43 343 4343', '+93 43 343 3434', 'Sponsoring', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494859034', '', 'Pending'),
(8, '', 0, 0, 0, 'Mr.', 'Abraham', 'Man', '', 'info@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Exhbitions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494866332', '', 'Pending'),
(9, '', 0, 0, 0, 'Prof.', 'Abraham', 'Man', 'Sasa', 'info@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Sponsoring', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494867843', '', 'Pending'),
(10, '', 0, 0, 0, 'Amb.', 'Abraham', 'Man', 'Sasa', 'info@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Attending', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494868628', '', 'Pending'),
(11, '', 0, 0, 0, 'Mr.', 'Abraham', 'Man', '', 'info2@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Exhbitions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494868683', '', 'Pending'),
(12, '', 0, 0, 0, 'Hon.', 'Abraham', 'Man', 'Sasa', 'info2@cube.rw', '+93 43 343 4343', '+93 43 343 3434', 'Sponsoring', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius porttitor mi, eget porta est ultrices et. Nam posuere, nisl in tincidunt placerat, quam sapien fermentum mi, eget condimentum leo libero nec orci. Aenean quis erat at ante commodo rutrum id non nunc. Aliquam commodo, libero et lacinia tristique, orci velit ullamcorper diam', '15-05-2017', '1494868817', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pageview`
--

CREATE TABLE `pageview` (
  `ID` int(11) NOT NULL,
  `page_ID` double NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `type` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `views` int(11) NOT NULL,
  `day_name` varchar(10) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `hour` varchar(2) NOT NULL,
  `minute` varchar(2) NOT NULL,
  `second` varchar(2) NOT NULL,
  `created_date` varchar(30) NOT NULL,
  `device` varchar(50) NOT NULL,
  `device_details` varchar(1000) NOT NULL,
  `user_IP` varchar(30) NOT NULL,
  `user_country_code` varchar(10) NOT NULL,
  `user_country` varchar(200) NOT NULL,
  `user_city` varchar(200) NOT NULL,
  `user_latitude` varchar(100) NOT NULL,
  `user_longitude` varchar(100) NOT NULL,
  `grabbed_info` text NOT NULL,
  `state` varchar(50) NOT NULL DEFAULT 'Activated'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pageview`
--

INSERT INTO `pageview` (`ID`, `page_ID`, `user_ID`, `type`, `email`, `views`, `day_name`, `day`, `month`, `year`, `hour`, `minute`, `second`, `created_date`, `device`, `device_details`, `user_IP`, `user_country_code`, `user_country`, `user_city`, `user_latitude`, `user_longitude`, `grabbed_info`, `state`) VALUES
(1, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Friday', 30, 12, 2016, '12', '50', '40', '1483091440', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(2, 5, 24, 'TAS-SIL-000001', 'pm.serge@gmail.com', 0, 'Friday', 30, 12, 2016, '17', '01', '17', '1483106477', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(3, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Friday', 30, 12, 2016, '18', '34', '25', '1483112065', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(4, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Tuesday', 3, 1, 2017, '09', '35', '29', '1483425329', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(5, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Tuesday', 3, 1, 2017, '12', '52', '07', '1483437127', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(6, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Tuesday', 3, 1, 2017, '15', '12', '37', '1483445557', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(7, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Friday', 6, 1, 2017, '18', '01', '56', '1483714916', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/603.1.16 (KHTML, like Gecko) Version/10.1 Safari/603.1.16', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(8, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Monday', 9, 1, 2017, '11', '31', '56', '1483950716', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(9, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Thursday', 12, 1, 2017, '15', '11', '02', '1484223062', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(10, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Thursday', 12, 1, 2017, '16', '27', '52', '1484227672', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(11, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Thursday', 12, 1, 2017, '22', '22', '54', '1484248974', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(12, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Saturday', 14, 1, 2017, '12', '23', '13', '1484385793', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(13, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Wednesday', 18, 1, 2017, '10', '53', '49', '1484726029', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(14, 5, 24, 'TAS-SIL-000009', 'pm.serge@gmail.com', 0, 'Wednesday', 18, 1, 2017, '10', '54', '00', '1484726040', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(15, 3, 24, 'Logout', 'pm.serge@gmail.com', 0, 'Wednesday', 18, 1, 2017, '11', '46', '44', '1484729204', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(16, 1, 0, 'Login', '', 0, 'Friday', 20, 1, 2017, '08', '09', '15', '1484888955', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'rg@smartafrica.org', 'Activated'),
(17, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Saturday', 21, 1, 2017, '17', '02', '02', '1485007322', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(18, 3, 51, 'Logout', 'sergeweb2@gmail.com', 0, 'Sunday', 22, 1, 2017, '22', '35', '27', '1485113727', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(19, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Sunday', 22, 1, 2017, '22', '35', '46', '1485113746', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(20, 3, 24, 'Logout', 'pm.serge@gmail.com', 0, 'Sunday', 22, 1, 2017, '22', '41', '52', '1485114112', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(21, 1, 0, 'Login', '', 0, 'Sunday', 22, 1, 2017, '22', '42', '09', '1485114129', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'pm.serge@gmail.com', 'Activated'),
(22, 2, 24, 'Logged In', 'pm.serge@gmail.com', 0, 'Sunday', 22, 1, 2017, '22', '42', '24', '1485114144', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: pm.serge@gmail.com', 'Activated'),
(23, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 23, 1, 2017, '00', '00', '42', '1485118842', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(24, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 23, 1, 2017, '07', '52', '40', '1485147160', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', '', 'Activated'),
(25, 2, 52, 'Logged In', 'sergemul1@gmail.com', 0, 'Monday', 23, 1, 2017, '07', '54', '42', '1485147282', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'Username: sergemul1@gmail.com', 'Activated'),
(26, 1, 0, 'Login', '', 0, 'Tuesday', 24, 1, 2017, '10', '05', '35', '1485241535', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(27, 1, 0, 'Login', '', 0, 'Tuesday', 24, 1, 2017, '10', '05', '56', '1485241556', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(28, 1, 0, 'Login', '', 0, 'Tuesday', 24, 1, 2017, '10', '06', '39', '1485241599', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'sergemul1@gmail.com', 'Activated'),
(29, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 24, 1, 2017, '10', '07', '48', '1485241668', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(30, 1, 0, 'Login', '', 0, 'Tuesday', 24, 1, 2017, '15', '22', '18', '1485260538', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'abraham@cube.rw', 'Activated'),
(31, 1, 0, 'Login', '', 0, 'Wednesday', 25, 1, 2017, '10', '00', '31', '1485327631', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(32, 1, 0, 'Login', '', 0, 'Wednesday', 25, 1, 2017, '10', '00', '44', '1485327644', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(33, 1, 0, 'Login', '', 0, 'Wednesday', 25, 1, 2017, '10', '00', '54', '1485327654', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(34, 1, 0, 'Login', '', 0, 'Wednesday', 25, 1, 2017, '10', '01', '10', '1485327670', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(35, 1, 0, 'Login', '', 0, 'Wednesday', 25, 1, 2017, '10', '01', '52', '1485327712', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'sergeweb2@gmail.com', 'Activated'),
(36, 1, 0, 'Login', '', 0, 'Wednesday', 25, 1, 2017, '10', '02', '35', '1485327755', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'pm.serge@gmail.com', 'Activated'),
(37, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 25, 1, 2017, '10', '03', '33', '1485327813', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(38, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 25, 1, 2017, '10', '04', '22', '1485327862', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(39, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Wednesday', 25, 1, 2017, '10', '05', '22', '1485327922', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(40, 5, 54, 'TAS-FTG-000008', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 25, 1, 2017, '15', '57', '08', '1485349028', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(41, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Thursday', 2, 2, 2017, '10', '18', '04', '1486019884', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(42, 1, 0, 'Login', '', 0, 'Tuesday', 21, 2, 2017, '13', '56', '19', '1487674579', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', '', '', '', '', '', 'icestone', 'Activated'),
(43, 2, 51, 'Logged In', 'smartafrica', 0, 'Tuesday', 21, 2, 2017, '13', '56', '51', '1487674611', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', '', '', '', '', '', 'Username: smartafrica', 'Activated'),
(44, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Monday', 27, 2, 2017, '11', '00', '31', '1488182431', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(45, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Tuesday', 7, 3, 2017, '11', '11', '38', '1488874298', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(46, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Wednesday', 8, 3, 2017, '09', '33', '52', '1488954832', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(47, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Monday', 13, 3, 2017, '11', '14', '04', '1489392844', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(48, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Friday', 17, 3, 2017, '12', '30', '38', '1489743038', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(49, 1, 0, 'Login', '', 0, 'Friday', 17, 3, 2017, '17', '52', '03', '1489762323', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'ah.braham@yahoo.fr', 'Activated'),
(50, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 17, 3, 2017, '17', '52', '44', '1489762364', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(51, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 17, 3, 2017, '17', '53', '04', '1489762384', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(52, 2, 51, 'Logged In', 'sergeweb2@gmail.com', 0, 'Friday', 17, 3, 2017, '17', '53', '16', '1489762396', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: sergeweb2@gmail.com', 'Activated'),
(53, 1, 0, 'Login', '', 0, 'Tuesday', 21, 3, 2017, '10', '24', '49', '1490081089', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'abraham@cube.rw', 'Activated'),
(54, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Tuesday', 21, 3, 2017, '10', '25', '38', '1490081138', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(55, 5, 51, 'TAS-SIL-000064', 'ah.braham@yahoo.fr', 0, 'Tuesday', 21, 3, 2017, '10', '26', '05', '1490081165', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(56, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Tuesday', 21, 3, 2017, '10', '27', '41', '1490081261', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(57, 1, 0, 'Login', '', 0, 'Tuesday', 21, 3, 2017, '10', '28', '09', '1490081289', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'abrahamahoshakiye@gmail.com', 'Activated'),
(58, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 21, 3, 2017, '10', '28', '20', '1490081300', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(59, 5, 54, 'TAS-SIL-000064', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 21, 3, 2017, '10', '28', '26', '1490081306', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(60, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 21, 3, 2017, '10', '28', '40', '1490081320', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(61, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Tuesday', 21, 3, 2017, '10', '51', '59', '1490082719', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(62, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Tuesday', 21, 3, 2017, '10', '52', '08', '1490082728', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(63, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Tuesday', 21, 3, 2017, '10', '52', '52', '1490082772', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(64, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 21, 3, 2017, '10', '53', '38', '1490082818', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(65, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 21, 3, 2017, '10', '53', '48', '1490082828', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(66, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 24, 3, 2017, '17', '09', '14', '1490364554', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(67, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Friday', 24, 3, 2017, '17', '09', '27', '1490364567', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(68, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Friday', 24, 3, 2017, '19', '42', '11', '1490373731', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(69, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 24, 3, 2017, '19', '42', '24', '1490373744', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(70, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 24, 3, 2017, '19', '42', '31', '1490373751', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(71, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 24, 3, 2017, '19', '42', '39', '1490373759', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(72, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '07', '50', '16', '1490417416', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(73, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '08', '29', '49', '1490419789', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(74, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '12', '35', '11', '1490434511', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(75, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '12', '35', '18', '1490434518', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(76, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '12', '42', '46', '1490434966', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(77, 5, 54, 'TAS-SIL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '12', '43', '40', '1490435020', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(78, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 25, 3, 2017, '14', '37', '41', '1490441861', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(79, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Saturday', 25, 3, 2017, '14', '38', '18', '1490441898', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(80, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Saturday', 25, 3, 2017, '18', '52', '44', '1490457164', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(81, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '12', '08', '19', '1490519299', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: ', 'Activated'),
(82, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '12', '09', '48', '1490519388', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: ', 'Activated'),
(83, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '12', '24', '38', '1490520278', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Platinum', 'Activated'),
(84, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '14', '14', '04', '1490526844', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Gold', 'Activated'),
(85, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '14', '16', '39', '1490526999', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Silver', 'Activated'),
(86, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '14', '17', '09', '1490527029', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Gold', 'Activated'),
(87, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '14', '57', '22', '1490529442', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Silver', 'Activated'),
(88, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '15', '02', '44', '1490529764', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Silver', 'Activated'),
(89, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '15', '04', '01', '1490529841', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Platinum', 'Activated'),
(90, 5, 51, 'TAS-PLA-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '15', '08', '59', '1490530139', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Silver', 'Activated'),
(91, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '17', '57', '28', '1490540248', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Gold', 'Activated'),
(92, 5, 51, 'TAS-SIL-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '19', '36', '39', '1490546199', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Silver', 'Activated'),
(93, 5, 51, 'TAS-PLA-000065', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '19', '43', '56', '1490546636', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Platinum', 'Activated'),
(94, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '20', '04', '16', '1490547856', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(95, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Sunday', 26, 3, 2017, '20', '04', '29', '1490547869', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(96, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Sunday', 26, 3, 2017, '20', '07', '59', '1490548079', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(97, 1, 0, 'Login', '', 0, 'Sunday', 26, 3, 2017, '20', '08', '14', '1490548094', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'rg@gmail.com', 'Activated'),
(98, 1, 0, 'Login', '', 0, 'Sunday', 26, 3, 2017, '20', '08', '27', '1490548107', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'rg@gmail.com', 'Activated'),
(99, 2, 52, 'Logged In', 'rg@gmail.com', 0, 'Sunday', 26, 3, 2017, '20', '09', '21', '1490548161', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: rg@gmail.com', 'Activated'),
(100, 3, 52, 'Logout', 'rg@gmail.com', 0, 'Sunday', 26, 3, 2017, '20', '09', '56', '1490548196', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(101, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Sunday', 26, 3, 2017, '20', '10', '07', '1490548207', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(102, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Monday', 27, 3, 2017, '09', '11', '26', '1490595086', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(103, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 27, 3, 2017, '09', '12', '03', '1490595123', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(104, 5, 54, 'TAS-GOL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 27, 3, 2017, '09', '13', '22', '1490595202', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Panelist-Gold-Complimentary', 'Activated'),
(105, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 27, 3, 2017, '10', '16', '08', '1490598968', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(106, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Monday', 27, 3, 2017, '10', '16', '31', '1490598991', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(107, 5, 51, 'TAS-GOL-000061', 'ah.braham@yahoo.fr', 0, 'Monday', 27, 3, 2017, '10', '27', '34', '1490599654', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Face-the-Gorillas-Gold-Discounted', 'Activated'),
(108, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '09', '24', '45', '1490682285', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(109, 5, 51, 'TAS-MSGSC-000067', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '14', '20', '35', '1490700035', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: ', 'Activated'),
(110, 5, 51, 'TAS-MSGSC-000067', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '14', '31', '09', '1490700669', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Invite in session', 'Activated'),
(111, 5, 51, 'TAS-MSGSC-000067', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '15', '56', '31', '1490705791', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Invite in session', 'Activated'),
(112, 5, 51, 'TAS-MSGSC-000067', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '16', '26', '50', '1490707610', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Invite in session', 'Activated'),
(113, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '18', '24', '07', '1490714647', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(114, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '18', '24', '46', '1490714686', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(115, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '18', '25', '01', '1490714701', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(116, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Tuesday', 28, 3, 2017, '18', '25', '44', '1490714744', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(117, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Wednesday', 29, 3, 2017, '11', '02', '59', '1490774579', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(118, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 29, 3, 2017, '11', '03', '13', '1490774593', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(119, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 29, 3, 2017, '12', '11', '42', '1490778702', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(120, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Wednesday', 29, 3, 2017, '12', '12', '04', '1490778724', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(121, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Wednesday', 29, 3, 2017, '16', '02', '52', '1490792572', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(122, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Wednesday', 29, 3, 2017, '16', '19', '13', '1490793553', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(123, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Wednesday', 29, 3, 2017, '16', '19', '34', '1490793574', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(124, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Wednesday', 29, 3, 2017, '17', '08', '55', '1490796535', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(125, 1, 0, 'Login', '', 0, 'Wednesday', 29, 3, 2017, '17', '09', '18', '1490796558', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'ah.braham@cube.rw', 'Activated'),
(126, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Wednesday', 29, 3, 2017, '17', '10', '17', '1490796617', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(127, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Thursday', 30, 3, 2017, '09', '32', '40', '1490855560', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(128, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 30, 3, 2017, '09', '34', '13', '1490855653', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(129, 5, 54, 'TAS-GOL-000065', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 30, 3, 2017, '10', '17', '39', '1490858259', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Invite in session', 'Activated'),
(130, 5, 54, 'TAS-VIS-000066', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 30, 3, 2017, '10', '17', '52', '1490858272', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Invite in session', 'Activated'),
(131, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 30, 3, 2017, '17', '16', '19', '1490883379', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(132, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 30, 3, 2017, '17', '17', '35', '1490883455', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(133, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 31, 3, 2017, '05', '40', '40', '1490928040', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(134, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Friday', 31, 3, 2017, '05', '41', '14', '1490928074', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(135, 5, 51, 'TAS-PLA-000018', 'ah.braham@yahoo.fr', 0, 'Friday', 31, 3, 2017, '05', '47', '06', '1490928426', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Refund', 'Activated'),
(136, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Friday', 31, 3, 2017, '07', '06', '18', '1490933178', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(137, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 31, 3, 2017, '07', '07', '24', '1490933244', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(138, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 31, 3, 2017, '07', '22', '42', '1490934162', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(139, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Friday', 31, 3, 2017, '07', '22', '53', '1490934173', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(140, 3, 56, 'Logout', 'sessions@cube.rw', 0, 'Friday', 31, 3, 2017, '08', '02', '33', '1490936553', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(141, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 31, 3, 2017, '08', '03', '14', '1490936594', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(142, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 5, 4, 2017, '20', '58', '01', '1491415081', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(143, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 6, 4, 2017, '00', '39', '42', '1491428382', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(144, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Thursday', 6, 4, 2017, '00', '41', '08', '1491428468', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(145, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Thursday', 6, 4, 2017, '00', '45', '41', '1491428741', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(146, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Thursday', 6, 4, 2017, '00', '46', '12', '1491428772', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(147, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Thursday', 6, 4, 2017, '00', '46', '20', '1491428780', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(148, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 6, 4, 2017, '00', '48', '28', '1491428908', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(149, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 6, 4, 2017, '00', '49', '03', '1491428943', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(150, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Thursday', 6, 4, 2017, '00', '49', '21', '1491428961', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(151, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Thursday', 6, 4, 2017, '00', '57', '59', '1491429479', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(152, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Thursday', 6, 4, 2017, '00', '58', '29', '1491429509', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(153, 3, 56, 'Logout', 'sessions@cube.rw', 0, 'Thursday', 6, 4, 2017, '01', '27', '43', '1491431263', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(154, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 6, 4, 2017, '01', '28', '05', '1491431285', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(155, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 6, 4, 2017, '03', '24', '39', '1491438279', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(156, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Thursday', 6, 4, 2017, '03', '26', '49', '1491438409', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(157, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Thursday', 6, 4, 2017, '05', '07', '03', '1491444423', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(158, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 6, 4, 2017, '05', '07', '34', '1491444454', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(159, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '13', '16', '03', '1491646563', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(160, 5, 51, 'TAS-PLA-000015', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '25', '11', '1491650711', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(161, 5, 51, 'TAS-GOL-000012', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '28', '47', '1491650927', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Refund', 'Activated'),
(162, 5, 51, 'TAS-SIL-000019', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '33', '51', '1491651231', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Refund', 'Activated'),
(163, 5, 51, 'TAS-SIL-000019', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '34', '13', '1491651253', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(164, 5, 51, 'TAS-SIL-000019', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '52', '26', '1491652346', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Refund', 'Activated'),
(165, 5, 51, 'TAS-SIL-000019', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '52', '53', '1491652373', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated');
INSERT INTO `pageview` (`ID`, `page_ID`, `user_ID`, `type`, `email`, `views`, `day_name`, `day`, `month`, `year`, `hour`, `minute`, `second`, `created_date`, `device`, `device_details`, `user_IP`, `user_country_code`, `user_country`, `user_city`, `user_latitude`, `user_longitude`, `grabbed_info`, `state`) VALUES
(166, 5, 51, 'TAS-SIL-000019', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '54', '01', '1491652441', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Refund', 'Activated'),
(167, 5, 51, 'TAS-SIL-000019', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '14', '55', '56', '1491652556', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(168, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '15', '10', '55', '1491653455', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(169, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 8, 4, 2017, '15', '11', '48', '1491653508', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(170, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 8, 4, 2017, '17', '28', '54', '1491661734', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(171, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 8, 4, 2017, '18', '00', '51', '1491663651', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(172, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 8, 4, 2017, '19', '35', '26', '1491669326', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(173, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Saturday', 8, 4, 2017, '19', '38', '26', '1491669506', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(174, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Sunday', 9, 4, 2017, '20', '08', '09', '1491757689', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(175, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Sunday', 9, 4, 2017, '20', '08', '46', '1491757726', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(176, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Sunday', 9, 4, 2017, '23', '46', '10', '1491770770', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(177, 3, 56, 'Logout', 'sessions@cube.rw', 0, 'Sunday', 9, 4, 2017, '23', '46', '44', '1491770804', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0', '', '', '', '', '', '', '', 'Activated'),
(178, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Sunday', 9, 4, 2017, '23', '49', '09', '1491770949', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(179, 3, 56, 'Logout', 'sessions@cube.rw', 0, 'Sunday', 9, 4, 2017, '23', '52', '00', '1491771120', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0', '', '', '', '', '', '', '', 'Activated'),
(180, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Sunday', 9, 4, 2017, '23', '52', '13', '1491771133', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(181, 3, 56, 'Logout', 'sessions@cube.rw', 0, 'Sunday', 9, 4, 2017, '23', '52', '25', '1491771145', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0', '', '', '', '', '', '', '', 'Activated'),
(182, 1, 0, 'Login', '', 0, 'Monday', 10, 4, 2017, '01', '12', '54', '1491775974', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'abrahahamahoshakiye@gmail.com', 'Activated'),
(183, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 10, 4, 2017, '01', '13', '32', '1491776012', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(184, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 10, 4, 2017, '01', '24', '49', '1491776689', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(185, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '01', '25', '32', '1491776732', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(186, 5, 51, 'TAS-GOL-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '01', '26', '22', '1491776782', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Gold-Complimentary', 'Activated'),
(187, 5, 51, 'TAS-GOL-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '12', '27', '1491783147', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Gold-Complimentary', 'Activated'),
(188, 5, 51, 'TAS-GOL-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '12', '53', '1491783173', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Gold', 'Activated'),
(189, 5, 51, 'TAS-GOL-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '17', '41', '1491783461', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Gold', 'Activated'),
(190, 5, 51, 'TAS-GOL-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '17', '54', '1491783474', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(191, 5, 51, 'TAS-PLA-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '18', '14', '1491783494', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Platinum', 'Activated'),
(192, 5, 51, 'TAS-PLA-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '26', '49', '1491784009', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Refund', 'Activated'),
(193, 5, 51, 'TAS-PLA-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '27', '11', '1491784031', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Media', 'Activated'),
(194, 5, 51, 'TAS-PLA-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '03', '40', '41', '1491784841', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Media', 'Activated'),
(195, 5, 51, 'TAS-MDA-000069', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '04', '01', '16', '1491786076', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Media', 'Activated'),
(196, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Monday', 10, 4, 2017, '04', '07', '20', '1491786440', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(197, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 10, 4, 2017, '04', '07', '49', '1491786469', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(198, 5, 54, 'TAS-PLA-000051', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 10, 4, 2017, '04', '08', '09', '1491786489', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(199, 5, 54, 'TAS-SIL-000057', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 10, 4, 2017, '04', '10', '39', '1491786639', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(200, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 10, 4, 2017, '19', '45', '29', '1491842729', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(201, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Monday', 10, 4, 2017, '19', '45', '40', '1491842740', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(202, 3, 56, 'Logout', 'sessions@cube.rw', 0, 'Wednesday', 12, 4, 2017, '17', '24', '37', '1492007077', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(203, 1, 0, 'Login', '', 0, 'Wednesday', 12, 4, 2017, '17', '24', '49', '1492007089', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'abrahamahoshakiye@gmail.com', 'Activated'),
(204, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 12, 4, 2017, '17', '25', '01', '1492007101', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(205, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 15, 4, 2017, '16', '11', '23', '1492261883', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(206, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 15, 4, 2017, '16', '12', '07', '1492261927', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(207, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 18, 4, 2017, '11', '21', '32', '1492503692', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(208, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 20, 4, 2017, '15', '34', '54', '1492691694', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(209, 1, 0, 'Login', '', 0, 'Friday', 21, 4, 2017, '10', '51', '39', '1492761099', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'abrahamahishakiye@gmail.com', 'Activated'),
(210, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Friday', 21, 4, 2017, '10', '52', '11', '1492761131', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(211, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '09', '55', '51', '1493016951', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(212, 5, 51, 'TAS-GOV-000082', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '10', '10', '31', '1493017831', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(213, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '10', '12', '55', '1493017975', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(214, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '10', '13', '25', '1493018005', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(215, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '11', '30', '18', '1493022618', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(216, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '11', '30', '34', '1493022634', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(217, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '11', '30', '38', '1493022638', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(218, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '11', '30', '42', '1493022642', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(219, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '11', '31', '31', '1493022691', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(220, 3, 54, 'Logout', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '11', '32', '33', '1493022753', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(221, 2, 51, 'Logged In', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '12', '19', '58', '1493025598', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: ah.braham@yahoo.fr', 'Activated'),
(222, 5, 51, 'TAS-PLA-000084', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '12', '20', '36', '1493025636', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Group-Platinum-Complimentary', 'Activated'),
(223, 5, 51, 'TAS-GOV-000082', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '16', '24', '50', '1493040290', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(224, 5, 51, 'TAS-GOV-000082', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '16', '26', '45', '1493040405', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(225, 3, 51, 'Logout', 'ah.braham@yahoo.fr', 0, 'Monday', 24, 4, 2017, '16', '40', '24', '1493041224', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(226, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '16', '56', '38', '1493042198', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(227, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '16', '56', '47', '1493042207', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(228, 5, 54, 'TAS-GOV-000082', 'abrahamahoshakiye@gmail.com', 0, 'Monday', 24, 4, 2017, '16', '56', '54', '1493042214', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(229, 1, 0, 'Login', '', 0, 'Saturday', 29, 4, 2017, '14', '05', '35', '1493463935', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', 'pm.serge@gmail.com', 'Activated'),
(230, 5, 54, 'TAS-NOC-000083', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '08', '26', '48', '1493706408', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: NOC', 'Activated'),
(231, 5, 54, 'TAS-LIA-000077', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '10', '43', '35', '1493714615', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate-Liaison', 'Activated'),
(232, 5, 54, 'TAS-ASC-000035', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '10', '52', '49', '1493715169', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Armed-Security', 'Activated'),
(233, 5, 54, 'TAS-SEC-000045', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '11', '01', '50', '1493715710', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Security', 'Activated'),
(234, 5, 54, 'TAS-PTL-000037', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '11', '11', '59', '1493716319', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Protocal', 'Activated'),
(235, 5, 54, 'TAS-MED-000027', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '11', '16', '45', '1493716605', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Medical', 'Activated'),
(236, 5, 54, 'TAS-CTR-000026', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '11', '23', '16', '1493716996', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Catering', 'Activated'),
(237, 5, 54, 'TAS-TEC-000014', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '11', '28', '51', '1493717331', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Production-Technician', 'Activated'),
(238, 5, 54, 'TAS-CON-000059', 'abrahamahoshakiye@gmail.com', 0, 'Tuesday', 2, 5, 2017, '11', '33', '38', '1493717618', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Contractor', 'Activated'),
(239, 5, 54, 'TAS-SIL-000085', 'abrahamahoshakiye@gmail.com', 0, 'Wednesday', 3, 5, 2017, '18', '20', '48', '1493828448', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Individual-Silver', 'Activated'),
(240, 5, 54, 'TAS-SIL-000085', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 4, 5, 2017, '11', '37', '07', '1493890627', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(241, 5, 54, 'TAS-SIL-000085', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 4, 5, 2017, '11', '53', '56', '1493891636', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(242, 5, 54, 'TAS-SIL-000085', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 4, 5, 2017, '11', '56', '07', '1493891767', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(243, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Friday', 19, 5, 2017, '10', '25', '57', '1495182357', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(244, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Friday', 19, 5, 2017, '12', '07', '00', '1495188420', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(245, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Friday', 19, 5, 2017, '13', '13', '12', '1495192392', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(246, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Saturday', 20, 5, 2017, '13', '49', '36', '1495280976', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(247, 1, 0, 'Login', '', 0, 'Saturday', 20, 5, 2017, '13', '51', '05', '1495281065', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(248, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Saturday', 20, 5, 2017, '13', '51', '47', '1495281107', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(249, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Tuesday', 6, 6, 2017, '10', '41', '56', '1496738516', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(250, 5, 24, 'YCA-GOV-000136', 'admin@gmail.com', 0, 'Thursday', 8, 6, 2017, '17', '25', '16', '1496935516', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Government invited', 'Activated'),
(251, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '09', '50', '20', '1497253820', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(252, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '10', '23', '38', '1497255818', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(253, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '10', '48', '29', '1497257309', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(254, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '10', '57', '11', '1497257831', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(255, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '02', '09', '1497258129', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(256, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '08', '08', '1497258488', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(257, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '09', '56', '1497258596', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(258, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '11', '02', '1497258662', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(259, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '11', '19', '1497258679', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(260, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '14', '53', '1497258893', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(261, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '17', '17', '1497259037', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(262, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '35', '41', '1497260141', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(263, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '39', '14', '1497260354', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(264, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '42', '09', '1497260529', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(265, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '52', '36', '1497261156', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(266, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '11', '56', '01', '1497261361', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(267, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '00', '12', '1497279612', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(268, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '02', '41', '1497279761', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(269, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '05', '09', '1497279909', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(270, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '07', '04', '1497280024', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(271, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '08', '09', '1497280089', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(272, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '10', '09', '1497280209', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(273, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '12', '28', '1497280348', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(274, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '18', '10', '1497280690', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(275, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '19', '27', '1497280767', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(276, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '17', '48', '22', '1497282502', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(277, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '23', '09', '1497284589', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(278, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '26', '41', '1497284801', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(279, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '27', '51', '1497284871', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(280, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '32', '02', '1497285122', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(281, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '32', '47', '1497285167', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(282, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '33', '33', '1497285213', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(283, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '36', '52', '1497285412', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(284, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '40', '24', '1497285624', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(285, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 12, 6, 2017, '18', '41', '11', '1497285671', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(286, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Tuesday', 13, 6, 2017, '19', '07', '43', '1497373663', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(287, 5, 24, 'YCA-REQ-000132', 'admin@gmail.com', 0, 'Wednesday', 14, 6, 2017, '11', '41', '40', '1497433300', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate request', 'Activated'),
(288, 5, 24, 'YCA-REQ-000131', 'admin@gmail.com', 0, 'Wednesday', 14, 6, 2017, '11', '50', '08', '1497433808', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate request', 'Activated'),
(289, 5, 24, 'YCA-REQ-000130', 'admin@gmail.com', 0, 'Wednesday', 14, 6, 2017, '11', '51', '44', '1497433904', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate request', 'Activated'),
(290, 5, 24, 'YCA-REQ-000129', 'admin@gmail.com', 0, 'Wednesday', 14, 6, 2017, '11', '53', '50', '1497434030', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate request', 'Activated'),
(291, 5, 24, 'YCA-DEL-000122', 'admin@gmail.com', 0, 'Wednesday', 14, 6, 2017, '11', '54', '57', '1497434097', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate', 'Activated'),
(292, 5, 24, 'YCA-REQ-000135', 'admin@gmail.com', 0, 'Thursday', 15, 6, 2017, '10', '25', '25', '1497515125', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Government request', 'Activated'),
(293, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 19, 6, 2017, '14', '04', '46', '1497873886', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(294, 5, 24, 'YCA-DEL-000137', 'admin@gmail.com', 0, 'Monday', 19, 6, 2017, '17', '49', '55', '1497887395', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(295, 3, 24, 'Logout', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '09', '46', '22', '1497944782', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', '', 'Activated'),
(296, 1, 0, 'Login', '', 0, 'Tuesday', 20, 6, 2017, '09', '50', '58', '1497945058', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(297, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '09', '51', '26', '1497945086', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(298, 5, 24, 'YCA-REQ-000134', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '10', '31', '52', '1497947512', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(299, 5, 24, 'YCA-REQ-000134', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '10', '36', '36', '1497947796', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(300, 5, 24, 'YCA-REQ-000134', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '10', '37', '18', '1497947838', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(301, 5, 24, 'YCA-REQ-000135', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '15', '23', '27', '1497965007', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(302, 5, 24, 'YCA-REQ-000135', 'admin@gmail.com', 0, 'Tuesday', 20, 6, 2017, '15', '27', '04', '1497965224', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(303, 5, 24, 'YCA-REQ-000134', 'admin@gmail.com', 0, 'Wednesday', 21, 6, 2017, '11', '08', '26', '1498036106', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate request', 'Activated'),
(304, 5, 24, 'YCA-GOV-000126', 'admin@gmail.com', 0, 'Wednesday', 21, 6, 2017, '11', '09', '03', '1498036143', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: ', 'Activated'),
(305, 5, 24, 'YCA-GOV-000126', 'admin@gmail.com', 0, 'Wednesday', 21, 6, 2017, '11', '09', '30', '1498036170', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Delegate invited', 'Activated'),
(306, 5, 24, 'TAS-PTL-000037', 'admin@gmail.com', 0, 'Wednesday', 21, 6, 2017, '11', '37', '03', '1498037823', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Protocal', 'Activated'),
(307, 5, 24, 'TAS-PTL-000037', 'admin@gmail.com', 0, 'Wednesday', 21, 6, 2017, '11', '37', '38', '1498037858', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Protocal', 'Activated'),
(308, 5, 24, 'TAS-PTL-000037', 'admin@gmail.com', 0, 'Wednesday', 21, 6, 2017, '11', '38', '49', '1498037929', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Registration-State: Protocol', 'Activated'),
(309, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Thursday', 6, 7, 2017, '08', '34', '35', '1499322875', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(310, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Friday', 7, 7, 2017, '08', '25', '39', '1499408739', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(311, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Wednesday', 12, 7, 2017, '07', '33', '28', '1499837608', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(312, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Wednesday', 12, 7, 2017, '07', '33', '51', '1499837631', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(313, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Monday', 31, 7, 2017, '16', '55', '03', '1501512903', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(314, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Monday', 31, 7, 2017, '16', '57', '36', '1501513056', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(315, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Monday', 31, 7, 2017, '19', '16', '32', '1501521392', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(316, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Monday', 31, 7, 2017, '19', '16', '52', '1501521412', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(317, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 31, 7, 2017, '19', '17', '02', '1501521422', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(318, 3, 24, 'Logout', 'admin@gmail.com', 0, 'Monday', 31, 7, 2017, '19', '25', '56', '1501521956', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(319, 2, 57, 'Logged In', 'test', 0, 'Monday', 31, 7, 2017, '21', '01', '45', '1501527705', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36', '', '', '', '', '', '', 'Username: test', 'Activated'),
(320, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Thursday', 7, 9, 2017, '08', '55', '32', '1504767332', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:52.0) Gecko/20100101 Firefox/52.0', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(321, 3, 55, 'Logout', 'abraham@cube.rw', 0, 'Thursday', 7, 9, 2017, '08', '56', '01', '1504767361', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:52.0) Gecko/20100101 Firefox/52.0', '', '', '', '', '', '', '', 'Activated'),
(322, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Thursday', 7, 9, 2017, '08', '56', '20', '1504767380', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:52.0) Gecko/20100101 Firefox/52.0', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(323, 3, 24, 'Logout', 'admin@gmail.com', 0, 'Thursday', 7, 9, 2017, '09', '25', '08', '1504769108', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:52.0) Gecko/20100101 Firefox/52.0', '', '', '', '', '', '', '', 'Activated'),
(324, 1, 0, 'Login', '', 0, 'Wednesday', 4, 10, 2017, '07', '06', '38', '1507093598', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(325, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Wednesday', 4, 10, 2017, '07', '09', '01', '1507093741', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(326, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Thursday', 5, 10, 2017, '06', '58', '04', '1507179484', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(327, 3, 24, 'Logout', 'admin@gmail.com', 0, 'Friday', 6, 10, 2017, '10', '41', '17', '1507279277', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '', '', '', '', '', '', '', 'Activated');
INSERT INTO `pageview` (`ID`, `page_ID`, `user_ID`, `type`, `email`, `views`, `day_name`, `day`, `month`, `year`, `hour`, `minute`, `second`, `created_date`, `device`, `device_details`, `user_IP`, `user_country_code`, `user_country`, `user_city`, `user_latitude`, `user_longitude`, `grabbed_info`, `state`) VALUES
(328, 1, 0, 'Login', '', 0, 'Tuesday', 6, 2, 2018, '16', '11', '25', '1517926285', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', '', '', '', '', '', '', 'abraham@cube.rw', 'Activated'),
(329, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Tuesday', 6, 2, 2018, '16', '11', '44', '1517926304', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(330, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Friday', 23, 2, 2018, '07', '09', '38', '1519362578', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(331, 1, 0, 'Login', '', 0, 'Saturday', 24, 2, 2018, '13', '28', '43', '1519471723', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'abrahamahoshakiye@gmail.com', 'Activated'),
(332, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '13', '29', '13', '1519471753', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(333, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '39', '25', '1519479565', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(334, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '41', '10', '1519479670', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(335, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '41', '13', '1519479673', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(336, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '45', '08', '1519479908', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(337, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '45', '13', '1519479913', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(338, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '46', '15', '1519479975', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(339, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '46', '19', '1519479979', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(340, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '51', '10', '1519480270', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(341, 5, 54, 'TAS-SIL-001867', 'abrahamahoshakiye@gmail.com', 0, 'Saturday', 24, 2, 2018, '15', '51', '29', '1519480289', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(342, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '38', '10', '1519911490', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(343, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '38', '52', '1519911532', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(344, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '39', '13', '1519911553', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(345, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '40', '10', '1519911610', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(346, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '41', '08', '1519911668', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(347, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '41', '22', '1519911682', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'abrahamahoshakiye@gmail.com', 'Activated'),
(348, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '42', '00', '1519911720', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(349, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '42', '30', '1519911750', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'abrahamahoshakiye@gmail.com', 'Activated'),
(350, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '43', '36', '1519911816', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'abrahamahoshakiye@gmail.com', 'Activated'),
(351, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '44', '16', '1519911856', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(352, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '44', '43', '1519911883', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(353, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '45', '26', '1519911926', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'abraham@cube.rw', 'Activated'),
(354, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '46', '24', '1519911984', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'abraham@cube.rw', 'Activated'),
(355, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '47', '02', '1519912022', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(356, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Thursday', 1, 3, 2018, '15', '47', '56', '1519912076', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:58.0) Gecko/20100101 Firefox/58.0', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(357, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '50', '25', '1519912225', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(358, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '50', '37', '1519912237', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(359, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '50', '54', '1519912254', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(360, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '52', '58', '1519912378', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(361, 1, 0, 'Login', '', 0, 'Thursday', 1, 3, 2018, '15', '53', '15', '1519912395', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'abraham@cube.rw', 'Activated'),
(362, 2, 54, 'Logged In', 'abrahamahoshakiye@gmail.com', 0, 'Thursday', 1, 3, 2018, '15', '55', '50', '1519912550', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: abrahamahoshakiye@gmail.com', 'Activated'),
(363, 2, 56, 'Logged In', 'sessions@cube.rw', 0, 'Thursday', 1, 3, 2018, '15', '56', '46', '1519912606', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: sessions@cube.rw', 'Activated'),
(364, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Saturday', 3, 3, 2018, '16', '55', '25', '1520088925', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(365, 3, 24, 'Logout', 'admin@gmail.com', 0, 'Saturday', 3, 3, 2018, '16', '57', '47', '1520089067', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', '', 'Activated'),
(366, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Saturday', 3, 3, 2018, '17', '24', '44', '1520090684', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(367, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 5, 3, 2018, '16', '07', '16', '1520258836', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(368, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 5, 3, 2018, '16', '08', '28', '1520258908', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(369, 2, 55, 'Logged In', 'abraham@cube.rw', 0, 'Monday', 5, 3, 2018, '16', '10', '10', '1520259010', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: abraham@cube.rw', 'Activated'),
(370, 1, 0, 'Login', '', 0, 'Monday', 5, 3, 2018, '16', '10', '31', '1520259031', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'abraham@kadibra.com', 'Activated'),
(371, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 5, 3, 2018, '16', '18', '17', '1520259497', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(372, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Tuesday', 6, 3, 2018, '08', '39', '40', '1520318380', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(373, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '11', '23', '05', '1520500985', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(374, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '11', '24', '43', '1520501083', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(375, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '11', '24', '47', '1520501087', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(376, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '11', '29', '53', '1520501393', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(377, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '11', '30', '26', '1520501426', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(378, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '13', '20', '02', '1520508002', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(379, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '13', '21', '59', '1520508119', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(380, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '14', '30', '50', '1520512250', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(381, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '14', '30', '57', '1520512257', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(382, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '14', '31', '54', '1520512314', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(383, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '14', '31', '58', '1520512318', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(384, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '03', '04', '1520514184', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(385, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '04', '10', '1520514250', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(386, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '06', '49', '1520514409', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(387, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '06', '52', '1520514412', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Confirm', 'Activated'),
(388, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '19', '38', '1520515178', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(389, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '30', '18', '1520515818', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(390, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '31', '26', '1520515886', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(391, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '33', '09', '1520515989', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(392, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '51', '02', '1520517062', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(393, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '51', '05', '1520517065', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(394, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '55', '02', '1520517302', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(395, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Thursday', 8, 3, 2018, '15', '55', '07', '1520517307', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(396, 1, 0, 'Login', '', 0, 'Monday', 12, 3, 2018, '10', '27', '22', '1520843242', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'admin@gmail.com', 'Activated'),
(397, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 12, 3, 2018, '10', '27', '38', '1520843258', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(398, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Monday', 12, 3, 2018, '10', '27', '51', '1520843271', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(399, 5, 24, 'TAS-ISIL-001874', 'admin@gmail.com', 0, 'Monday', 12, 3, 2018, '10', '28', '41', '1520843321', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Payment State: Pending', 'Activated'),
(400, 5, 24, 'TAS-FTG-000008', 'admin@gmail.com', 0, 'Wednesday', 14, 3, 2018, '10', '02', '13', '1521014533', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Pending', 'Activated'),
(401, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Tuesday', 27, 3, 2018, '13', '02', '07', '1522148527', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(402, 5, 24, 'TAS-VIS-001883', 'admin@gmail.com', 0, 'Wednesday', 28, 3, 2018, '15', '41', '51', '1522244511', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(403, 5, 24, 'TAS-SIL-001882', 'admin@gmail.com', 0, 'Wednesday', 28, 3, 2018, '15', '48', '02', '1522244882', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(404, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Friday', 6, 4, 2018, '11', '34', '51', '1523007291', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(405, 5, 24, 'TAS-VIS-001883', 'admin@gmail.com', 0, 'Tuesday', 10, 4, 2018, '08', '57', '53', '1523343473', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Deny', 'Activated'),
(406, 5, 24, 'TAS-VIS-001883', 'admin@gmail.com', 0, 'Tuesday', 10, 4, 2018, '08', '58', '00', '1523343480', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Registration-State: Confirm', 'Activated'),
(407, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 16, 4, 2018, '12', '21', '05', '1523874065', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(408, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Monday', 23, 4, 2018, '11', '36', '32', '1524476192', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/602.4.8 (KHTML, like Gecko) Version/10.0.3 Safari/602.4.8', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated'),
(409, 2, 24, 'Logged In', 'admin@gmail.com', 0, 'Tuesday', 24, 4, 2018, '13', '22', '28', '1524568948', 'Computer', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', '', '', '', '', '', 'Username: admin@gmail.com', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` bigint(20) NOT NULL,
  `company_ID` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `added_date` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `company_ID`, `name`, `description`, `added_date`, `state`, `token`) VALUES
(5, 6, 'Transform Africa Summit 2017', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1474642348', '', 'de220168957bd2ccff08f88e9939b95f');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `ID` bigint(20) NOT NULL,
  `group_ID` varchar(200) NOT NULL,
  `registration_ID` varchar(100) NOT NULL,
  `admin_ID` bigint(20) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'Single',
  `username` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `salt` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `country_ID` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `last_access` varchar(20) NOT NULL,
  `last_login` varchar(20) NOT NULL,
  `account_session` int(1) NOT NULL DEFAULT '0',
  `photo` varchar(222) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `added_temp` bigint(20) NOT NULL,
  `added_date` varchar(45) NOT NULL,
  `recovery_string` text NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`ID`, `group_ID`, `registration_ID`, `admin_ID`, `type`, `username`, `firstname`, `lastname`, `password`, `salt`, `email`, `phone`, `country_ID`, `gender`, `last_access`, `last_login`, `account_session`, `photo`, `company_name`, `company_address`, `added_temp`, `added_date`, `recovery_string`, `state`) VALUES
(1, 'GRP-000001', '', 24, 'Group', 'serge', 'Serge', 'Karim', 'cc632e9967b82ec0d59d1ad7091321f97b0be87392cb80f3684c15992ced45ad', 'çÃí¥ÔBŠC–|´\0ís@Ñ]ªÚj,ý“\\±ñÄ', 'pm.serge@gmail.com', '', 0, '', '1484723390', '', 0, '', 'Cube Communications Ltd', '', 11, '11-01-2017 11:40:56', '', 'Activated'),
(3, 'GRP-000003', '', 24, 'Group', 'oye', 'Oye', 'Congo', 'f2d89412c9b56edf8c4ce6600bede9e390699aee61ec269fc3d2f3d8e3daa82f', 'ÎKRh/¾eìµK’`Ž\0œáZí“Á0ƒÝ]ÚXƒN', 'oyecongo@gmail.gmail.com', '', 0, '', '', '', 0, '', 'Congooye Ltd', '', 1484240669, '12-01-2017 20:04:29', '', 'Activated'),
(5, 'GRP-000005', '', 24, 'Group', 'sergip', 'Sergip', 'Gi', 'f9b3c0265cc40cd67e5153d96535da655745b3fc30baf3201eb83f84177d8c50', '£šd¸¶›’\\Á»à3bN$ÁN0¶P‘¾àø«\r-Š', 'sergemul1@gmail.com', '', 0, '', '', '', 0, '', 'Cube Communications Ltd', '', 1484241056, '12-01-2017 20:10:56', '', 'Activated'),
(6, 'GRP-000006', '', 24, 'Group', 'abraham', 'Abraham', 'Ahoshakiye', 'ed24e3269dd5f90281cbae02b943dd73fe09c3653c9b81f1038f6e94d840bb9a', '`|]“Ô×‰åç)ã0×ÙÝèbôÍ× BæŸÞB£šÄ&', 'ambrahamahoshakiye@gmail.com', '', 0, '', '', '', 0, '', 'Cube Intel Ltd', '', 1484392720, '14-01-2017 14:18:40', '', 'Activated'),
(7, 'GRP-000007', 'TAS-SIL-000009', 0, 'Group', 'abraham1', 'Abraham', 'Imanzi', '9e05b60fcaacfd3f9f09b9779938d7c54b3fcb73b90fd29d7b70694bab7c5053', '5æAC$2¿Š}’¤<7[H-½Í®9ñ^ˆîã_é¿', 'abraham01@cube.rw', '+250 783 026 112', 0, '', '', '', 0, '', '', '', 1484726040, '18-01-2017 10:54:00', '', 'Activated'),
(8, 'GRP-000008', '', 51, 'Group', 'kamoga', 'Kamoga', 'Kamoga', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'saleh@cube.rw', '', 0, '', '', '', 0, '', 'cube', '', 1488185700, '27-02-2017 11:55:00', '', 'Activated'),
(9, 'GRP-000009', '', 51, 'Group', 'abraham2', 'Abraham', 'Imanzi', '28bfcd67e52d5a8ec43d5cce8d0c41475956584b2f4def00ced7afc2b9b718b5', 'ÔÔœøvúP–ûºòe;NÞØ9èÞYuè\Z9)TYØê˜', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'Cube Communications Ltd', '', 1488445211, '02-03-2017 12:00:11', '', 'Activated'),
(10, 'GRP-000010', '', 51, 'Group', 'abraham3', 'Abraham', 'Imanzi', 'aeb64777d2cff3452971b4a3f553d61e3601e58412bc35aa134e96b94b1bb591', 'Ýûdè…$·4¡,¤Ñz£\n»nç¶-Áå%ÃAê', 'abraham02@cube.rw', '', 0, '', '', '', 0, '', 'Cube Communications Ltd', '', 1488793165, '06-03-2017 12:39:25', '', 'Activated'),
(11, 'GRP-000011', '', 51, 'Group', 'abraham4', 'Abraham', 'Imanzi', '022d619e561bec8f162d79e702013c0be070637814a6ea002204b4f4615683f3', '¨–…xšGéÖßêw¨ÄÕ¾I‹N²¹–FŠu÷í{', 'abraham03@cube.rw', '', 0, '', '', '', 0, '', 'Cube', '', 1489743148, '17-03-2017 12:32:28', '', 'Activated'),
(12, 'GRP-000012', '', 51, 'Group', 'abraham5', 'Abraham', 'Imanzi', '8d77f3b60a049dfc090061c4680a882df6835786c356619fe9811c921e579efd', '\Z¼ï¥÷;W<Dá¨ø9ô1yåu²øáì5ÏÀw˜š®', 'abrahamahoshakiye01@gmail.com', '', 0, '', '1489745759', '', 0, '', 'Cube', '', 1489743690, '17-03-2017 12:41:30', '', 'Activated'),
(13, 'GRP-000013', '', 51, 'Group', 'valentine', 'Valentine', 'Nashipae', '476b383cf062a0369104b51f8ab856f9317e3fd64849b2fdd4ea61ac334c3ee1', 'uÃn2h _¡:B\'¸sœ£žüU­-fz—5ÃÝÜ\"á…', 'valentine@cube.rw', '', 0, '', '', '', 0, '', 'Cube Communications Ltd', '', 1489762472, '17-03-2017 17:54:32', '', 'Activated'),
(14, 'GRP-000014', '', 51, 'Group', 'imanzi', 'Imanzi', 'Abraham', '89aca05f4322b0ef6d361c33b121a8a5f480008e0bb1cb2988c3f0073de0a292', 'STÆªï¸KH~iê‘”ëø‚\rHèw{ÙEt3°', 'abraham04@cube.rw', '', 0, '', '', '', 0, '', 'Cube communications ltd', '', 1489799674, '18-03-2017 04:14:34', '', 'Activated'),
(15, 'GRP-000015', '', 51, 'Group', 'abraham6', 'Abraham', 'Imanzi', '7e0529c714a2e9d230df22a0cca52294ee3b7fbd033ed3781419cf1c66810ef9', '’\r+YÃÉ)jÏÔIÜí¦2Mœ­||ð*õù', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'cube', '', 1489869363, '18-03-2017 23:36:03', '', 'Activated'),
(16, 'GRP-000016', 'TAS-SIL-000065', 0, 'Single', 'kamoga1', 'Kamoga', 'Kamoga', '90760a1f01fc225eaae1b9691453320039b0314c5da59fbd1d230ab72ea8b54b', '£$¢…®ÔÍ¯½yœ›p£ðã%¶I”ù	ú\'»', 'kadibra25@gmail.com', '+250 783 828 923', 0, '', '', '', 0, '', '', '', 1490082828, '21-03-2017 10:53:48', '', 'Activated'),
(17, 'GRP-000017', '', 51, 'Group', 'kkkkkk', 'Kkkkkk', 'Llllll', 'ad5f7b313de56ff6a6d5516b04c7884dfb33d5e9bb89cd87c1443fd2c26f6260', 'Á `{Ut±^ÑwãÅ¦f7HkAÄOÄ/êÐë•+t]', 'ah.braham@yahoo.fr', '', 0, '', '', '', 0, '', 'Cube', '', 1490442260, '25-03-2017 14:44:20', '', 'Activated'),
(18, 'GRP-000018', '', 51, 'Group', 'ooooo', 'Ooooo', 'Kkkkk', 'ecbce5862f45aaa3bbce15536a73e26ad539dc430ceafa9987cd8006aa7f8f07', '±Ú‰¼¥Ô¥ÅY±â\Z•Š{Í	¡Às6\0¸gçüHç‘', 'kadibra2@gmail.com', '', 0, '', '', '', 0, '', 'Cube', '', 1490442403, '25-03-2017 14:46:43', '', 'Activated'),
(19, 'GRP-000019', '', 51, 'Group', 'abraham7', 'Abraham', 'Imanzi', 'bc14baaea0c036ba82db03bf85d16b9987dfd7189ac0e556c74c536516201bc6', 'æ0™3‹¼0¢gpÃ~ø0l899Ö¯v¢Ð¼j¼4õ¯', 'abrahamahoshakiye@gmail.com', '', 0, '', '1493016778', '', 0, '', 'Cube', '', 1490599865, '27-03-2017 10:31:05', '', 'Blocked'),
(20, 'GRP-000020', '', 51, 'Individual', 'abra', 'Abra', 'Ima', 'c3746d760adfc2f90913b1b879a49e3411486727e9ded2261c094af85ce9e1d4', '¡.¢ª¿—9>»á?óÒ\0^ê—D‰UdƒÌKú²', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'Cube', '', 1490599962, '27-03-2017 10:32:42', '', 'Activated'),
(21, 'GRP-000021', 'TAS-PLA-000051', 0, 'Single', 'abraham8', 'Abraham', 'Imanzi', '1cf2845cc697b11b6fddce25f684b0a625ba4802a92e41d77a97b6d0be13dfb5', '·Q`(*ÂsÎiÑl\'?í#¥¥ßòµ!d ÔÓÎŸnŠ', 'abraham40@cube.rw', '+250 748 374 784', 0, '', '', '', 0, '', '', '', 1491786489, '10-04-2017 04:08:09', '', 'Activated'),
(22, 'GRP-000022', 'TAS-SIL-000085', 0, 'Single', 'kamogat', 'Kamogat', 'Test', 'ade44b408672dff2815f04207cadb620aa8821bf0d2f7cddefe381228687239e', '{^£¼Ï&ÄöùâEŒpnÌWA%:@æ¤.yâðËO', 'abraham01@cube.rw', '+250 783 343 425', 0, '', '', '', 0, '', '', '', 1493891636, '04-05-2017 11:53:56', '', 'Activated'),
(23, 'GRP-000023', '', 24, 'Group', 'test', 'Test', 'Test', '781cc5cb782723b3dda02185faaae8e0b1452d9fbf1d92c0c3396f0079d7c6e3', '²õµ’ÛóÓäÐÓ\'îãgÎPüÖÕ™‘¡¦²L¹’îŒ', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'Test', '', 1519362749, '23-02-2018 07:12:29', '', 'Activated'),
(24, 'GRP-000024', '', 54, 'Group', 'test1', 'Test', 'Test', '2c1d6480d0c8ab8f0a1348db3fb958e00ca67dfc70053120633ee56db2358587', 'ï;$-É9­è‚e¼¯çÉj¼Ê–l¦/²ÞÍÆ', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'Test', '', 1519472216, '24-02-2018 13:36:56', '', 'Activated'),
(25, 'GRP-000025', '', 24, 'Group', 'test2', 'Test', 'Test', '7e41170ebedbe6bc4da909b3fdba82575987e4f684bc1d9b1ec8d913d5f0f779', 'Dz‰’œ}.Çóâ#™ûýNPÔaB,`\0CÌ˜', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'Test', '', 1520336685, '06-03-2018 13:44:45', '', 'Activated'),
(26, '', '', 24, 'Group', 'test3', 'Test', 'Test', '6feaa50dc62d51fa1d17912a51c98c6be40bc95315c928dc6d243a5b808c2742', 'ü;m3ÊêxªÚ99AõU¾4ËQW¤½«Í¿p\rW', 'abraham01@cube.rw', '', 0, '', '', '', 0, '', 'Test', '', 1523874810, '16-04-2018 12:33:30', '', 'Activated'),
(27, 'GRP-000027', '', 24, 'Group', 'albert', 'Albert', 'Uwituze', '3805f2dbab112fbb9997eee704c02ec14ab3519c338a782d3f489f4827cc8623', '©_3šJÏ¦µ‹s€+\r_ ì	©O b#ÈÚyvÏî', 'albert@cube.rw', '', 0, '', '', '', 0, '', 'Cube Communication ltd', '', 1524736447, '26-04-2018 11:54:07', '', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_category`
--

CREATE TABLE `subscriber_category` (
  `ID` bigint(20) NOT NULL,
  `subscriber_ID` bigint(20) NOT NULL,
  `category_ID` bigint(20) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '200',
  `seen` int(11) NOT NULL DEFAULT '0',
  `size_used` int(11) NOT NULL DEFAULT '0',
  `plan` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'Assigned'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriber_category`
--

INSERT INTO `subscriber_category` (`ID`, `subscriber_ID`, `category_ID`, `size`, `seen`, `size_used`, `plan`, `discount`, `type`) VALUES
(1, 1, 14, 1, 1, 0, 'Paid', 0, 'Assigned'),
(2, 1, 15, 3, 3, 2, 'Paid', 10, 'Assigned'),
(3, 1, 16, 3, 3, 1, 'Paid', 0, 'Allocated'),
(4, 1, 11, 5, 5, 0, 'Free', 0, 'Assigned'),
(5, 3, 12, 2, 0, 0, 'Free', 0, 'Assigned'),
(6, 5, 12, 5, 5, 0, 'Free', 0, 'Assigned'),
(7, 7, 15, 1, 1, 0, 'Paid', 0, 'Allocated'),
(8, 8, 14, 3, 3, 0, 'Free', 0, 'Assigned'),
(9, 8, 15, 1, 1, 0, 'Free', 0, 'Assigned'),
(10, 8, 20, 2, 2, 2, 'Free', 0, 'Assigned'),
(11, 8, 21, 2, 2, 0, 'Free', 0, 'Assigned'),
(12, 8, 22, 1, 1, 0, 'Free', 0, 'Assigned'),
(13, 8, 23, 2, 2, 0, 'Free', 0, 'Assigned'),
(14, 8, 25, 1, 1, 0, 'Free', 0, 'Assigned'),
(15, 8, 3, 4, 4, 0, 'discount', 0, 'Assigned'),
(16, 8, 5, 4, 4, 0, 'discount', 40, 'Assigned'),
(17, 8, 7, 2, 2, 0, 'discount', 20, 'Assigned'),
(18, 8, 29, 1, 1, 0, 'discount', 0, 'Assigned'),
(19, 8, 30, 1, 1, 0, 'discount', 0, 'Assigned'),
(20, 8, 34, 10, 10, 0, 'discount', 10, 'Assigned'),
(21, 9, 2, 1, 1, 1, 'discount', 0, 'Assigned'),
(22, 9, 3, 2, 2, 1, 'discount', 0, 'Assigned'),
(23, 9, 11, 2, 2, 0, 'Free', 0, 'Assigned'),
(24, 9, 14, 3, 3, 0, 'Free', 0, 'Assigned'),
(25, 9, 32, 2, 2, 1, 'discount', 50, 'Assigned'),
(26, 14, 69, 4, 0, 0, 'Free', 0, 'Assigned'),
(27, 14, 29, 2, 0, 0, 'discount', 0, 'Assigned'),
(28, 15, 5, 1, 0, 0, 'discount', 50, 'Assigned'),
(29, 17, 29, 2, 0, 0, 'discount', 0, 'Assigned'),
(30, 17, 32, 8, 0, 0, 'discount', 30, 'Assigned'),
(31, 17, 35, 4, 0, 0, 'Free', 0, 'Assigned'),
(32, 18, 29, 4, 4, 0, 'discount', 0, 'Assigned'),
(33, 18, 32, 4, 4, 0, 'discount', 30, 'Assigned'),
(34, 18, 35, 2, 2, 0, 'Free', 0, 'Assigned'),
(35, 18, 38, 5, 5, 0, 'discount', 20, 'Assigned'),
(36, 19, 35, 2, 2, 6, 'Free', 0, 'Assigned'),
(37, 19, 29, 2, 2, 0, 'discount', 0, 'Assigned'),
(38, 19, 38, 2, 2, 2, 'discount', 30, 'Assigned'),
(39, 19, 34, 2, 2, 1, 'discount', 40, 'Assigned'),
(40, 19, 36, 2, 2, 1, 'Free', 0, 'Assigned'),
(41, 23, 5, 2, 2, 1, 'discount', 30, 'Assigned'),
(42, 23, 9, 2, 2, 1, 'Free', 0, 'Assigned'),
(43, 23, 32, 2, 2, 0, 'discount', 10, 'Assigned'),
(44, 24, 29, 2, 2, 0, 'discount', 0, 'Assigned'),
(45, 24, 30, 2, 2, 0, 'discount', 0, 'Assigned'),
(46, 24, 31, 2, 2, 0, 'discount', 0, 'Assigned'),
(47, 24, 32, 2, 2, 0, 'discount', 10, 'Assigned'),
(48, 24, 33, 1, 1, 0, 'discount', 10, 'Assigned'),
(49, 24, 34, 1, 1, 1, 'discount', 10, 'Assigned'),
(50, 24, 35, 2, 2, 1, 'Free', 0, 'Assigned'),
(51, 25, 1, 2, 2, 1, 'Free', 0, 'Assigned'),
(52, 25, 2, 2, 2, 0, 'discount', 0, 'Assigned'),
(53, 25, 3, 2, 2, 0, 'discount', 0, 'Assigned'),
(54, 25, 4, 2, 2, 0, 'discount', 0, 'Assigned'),
(55, 25, 5, 2, 2, 1, 'discount', 10, 'Assigned'),
(56, 25, 6, 2, 2, 0, 'discount', 10, 'Assigned'),
(57, 25, 7, 2, 2, 0, 'discount', 10, 'Assigned'),
(58, 25, 8, 2, 2, 0, 'Free', 0, 'Assigned'),
(59, 25, 9, 2, 2, 1, 'Free', 0, 'Assigned'),
(60, 25, 10, 2, 2, 2, 'Free', 0, 'Assigned'),
(61, 25, 11, 2, 2, 0, 'discount', 0, 'Assigned'),
(62, 25, 12, 2, 2, 0, 'discount', 0, 'Assigned'),
(63, 25, 13, 2, 2, 0, 'discount', 0, 'Assigned'),
(64, 25, 14, 2, 2, 1, 'discount', 10, 'Assigned'),
(65, 25, 15, 2, 2, 0, 'discount', 10, 'Assigned'),
(66, 25, 16, 2, 2, 0, 'discount', 10, 'Assigned'),
(67, 25, 17, 2, 2, 1, 'Free', 0, 'Assigned'),
(68, 25, 18, 2, 2, 0, 'Free', 0, 'Assigned'),
(69, 25, 19, 2, 2, 0, 'Free', 0, 'Assigned'),
(70, 25, 20, 2, 2, 0, 'discount', 0, 'Assigned'),
(71, 25, 21, 2, 2, 0, 'discount', 0, 'Assigned'),
(72, 25, 22, 2, 2, 0, 'discount', 0, 'Assigned'),
(73, 25, 23, 2, 2, 0, 'discount', 10, 'Assigned'),
(74, 25, 24, 2, 2, 0, 'discount', 10, 'Assigned'),
(75, 25, 25, 2, 2, 0, 'discount', 10, 'Assigned'),
(76, 25, 26, 2, 2, 1, 'Free', 0, 'Assigned'),
(77, 25, 27, 2, 2, 0, 'Free', 0, 'Assigned'),
(78, 25, 28, 2, 2, 1, 'Free', 0, 'Assigned'),
(79, 25, 29, 2, 2, 0, 'discount', 0, 'Assigned'),
(80, 25, 30, 2, 2, 0, 'discount', 0, 'Assigned'),
(81, 25, 31, 2, 2, 0, 'discount', 0, 'Assigned'),
(82, 25, 32, 2, 2, 0, 'discount', 10, 'Assigned'),
(83, 25, 33, 2, 2, 0, 'discount', 20, 'Assigned'),
(84, 25, 34, 2, 2, 0, 'discount', 20, 'Assigned'),
(85, 25, 35, 2, 2, 0, 'Free', 0, 'Assigned'),
(86, 25, 36, 2, 2, 0, 'Free', 0, 'Assigned'),
(87, 25, 37, 2, 2, 0, 'Free', 0, 'Assigned'),
(88, 25, 38, 2, 2, 0, 'discount', 0, 'Assigned'),
(89, 25, 39, 2, 2, 0, 'discount', 0, 'Assigned'),
(90, 25, 40, 2, 2, 0, 'discount', 0, 'Assigned'),
(91, 25, 41, 2, 2, 0, 'discount', 10, 'Assigned'),
(92, 25, 42, 2, 2, 0, 'discount', 10, 'Assigned'),
(93, 25, 43, 2, 2, 0, 'discount', 10, 'Assigned'),
(94, 25, 44, 2, 2, 0, 'Free', 0, 'Assigned'),
(95, 25, 45, 2, 2, 0, 'Free', 0, 'Assigned'),
(96, 25, 46, 2, 2, 0, 'Free', 0, 'Assigned'),
(97, 25, 47, 2, 2, 0, 'discount', 0, 'Assigned'),
(98, 25, 48, 2, 2, 0, 'discount', 0, 'Assigned'),
(99, 25, 49, 2, 2, 0, 'discount', 0, 'Assigned'),
(100, 25, 50, 2, 2, 0, 'discount', 30, 'Assigned'),
(101, 25, 51, 2, 2, 0, 'discount', 20, 'Assigned'),
(102, 25, 52, 2, 2, 0, 'discount', 30, 'Assigned'),
(103, 25, 53, 2, 2, 0, 'Free', 0, 'Assigned'),
(104, 25, 54, 2, 2, 0, 'Free', 0, 'Assigned'),
(105, 25, 55, 2, 2, 0, 'Free', 0, 'Assigned'),
(106, 25, 56, 2, 2, 0, 'discount', 0, 'Assigned'),
(107, 25, 57, 2, 2, 0, 'discount', 0, 'Assigned'),
(108, 25, 58, 2, 2, 0, 'discount', 0, 'Assigned'),
(109, 25, 59, 2, 2, 0, 'discount', 10, 'Assigned'),
(110, 25, 60, 2, 2, 0, 'discount', 20, 'Assigned'),
(111, 25, 61, 2, 2, 0, 'discount', 30, 'Assigned'),
(112, 25, 62, 2, 2, 0, 'Free', 0, 'Assigned'),
(113, 25, 63, 2, 2, 0, 'Free', 0, 'Assigned'),
(114, 25, 64, 2, 2, 0, 'Free', 0, 'Assigned'),
(115, 25, 65, 2, 2, 0, 'discount', 0, 'Assigned'),
(116, 25, 66, 2, 2, 0, 'discount', 0, 'Assigned'),
(117, 25, 67, 2, 2, 0, 'discount', 0, 'Assigned'),
(118, 25, 68, 2, 2, 0, 'discount', 5, 'Assigned'),
(119, 25, 69, 2, 2, 0, 'discount', 15, 'Assigned'),
(120, 25, 70, 2, 2, 0, 'discount', 30, 'Assigned'),
(121, 25, 71, 2, 2, 0, 'Free', 0, 'Assigned'),
(122, 25, 72, 2, 2, 0, 'Free', 0, 'Assigned'),
(123, 25, 73, 2, 2, 0, 'Free', 0, 'Assigned'),
(124, 25, 74, 2, 2, 0, 'discount', 0, 'Assigned'),
(125, 25, 75, 2, 2, 0, 'discount', 0, 'Assigned'),
(126, 25, 76, 2, 2, 0, 'discount', 0, 'Assigned'),
(127, 25, 77, 2, 2, 0, 'discount', 10, 'Assigned'),
(128, 25, 78, 2, 2, 0, 'discount', 10, 'Assigned'),
(129, 25, 79, 2, 2, 0, 'discount', 30, 'Assigned'),
(130, 25, 80, 2, 2, 0, 'Free', 0, 'Assigned'),
(131, 25, 81, 2, 2, 0, 'Free', 0, 'Assigned'),
(132, 25, 82, 2, 2, 0, 'Free', 0, 'Assigned'),
(133, 25, 83, 2, 2, 0, 'discount', 0, 'Assigned'),
(134, 25, 84, 2, 2, 0, 'discount', 0, 'Assigned'),
(135, 25, 85, 2, 2, 0, 'discount', 0, 'Assigned'),
(136, 25, 86, 2, 2, 0, 'discount', 10, 'Assigned'),
(137, 25, 87, 2, 2, 0, 'discount', 10, 'Assigned'),
(138, 25, 88, 2, 2, 0, 'discount', 30, 'Assigned'),
(139, 25, 89, 2, 2, 0, 'Free', 0, 'Assigned'),
(140, 25, 90, 2, 2, 0, 'Free', 0, 'Assigned'),
(141, 25, 91, 2, 2, 0, 'Free', 0, 'Assigned'),
(142, 25, 92, 2, 2, 0, 'discount', 0, 'Assigned'),
(143, 25, 93, 2, 2, 0, 'discount', 0, 'Assigned'),
(144, 25, 94, 2, 2, 0, 'discount', 0, 'Assigned'),
(145, 25, 95, 2, 2, 0, 'discount', 10, 'Assigned'),
(146, 25, 96, 2, 2, 0, 'discount', 15, 'Assigned'),
(147, 25, 97, 2, 2, 0, 'discount', 10, 'Assigned'),
(148, 25, 98, 2, 2, 0, 'Free', 0, 'Assigned'),
(149, 25, 99, 2, 2, 0, 'Free', 0, 'Assigned'),
(150, 25, 100, 2, 2, 0, 'Free', 0, 'Assigned'),
(151, 25, 101, 2, 2, 0, 'discount', 0, 'Assigned'),
(152, 25, 102, 2, 2, 0, 'discount', 0, 'Assigned'),
(153, 25, 103, 2, 2, 0, 'discount', 0, 'Assigned'),
(154, 25, 104, 2, 2, 0, 'discount', 10, 'Assigned'),
(155, 25, 105, 2, 2, 0, 'discount', 10, 'Assigned'),
(156, 25, 106, 2, 2, 0, 'discount', 20, 'Assigned'),
(157, 25, 107, 2, 2, 0, 'Free', 0, 'Assigned'),
(158, 25, 108, 2, 2, 0, 'Free', 0, 'Assigned'),
(159, 25, 109, 2, 2, 0, 'Free', 0, 'Assigned'),
(160, 25, 110, 2, 2, 0, 'discount', 0, 'Assigned'),
(161, 25, 111, 2, 2, 0, 'discount', 0, 'Assigned'),
(162, 25, 112, 2, 2, 0, 'discount', 0, 'Assigned'),
(163, 25, 113, 2, 2, 0, 'discount', 20, 'Assigned'),
(164, 25, 114, 2, 2, 0, 'discount', 25, 'Assigned'),
(165, 25, 115, 2, 2, 0, 'discount', 30, 'Assigned'),
(166, 25, 116, 2, 2, 0, 'Free', 0, 'Assigned'),
(167, 25, 117, 2, 2, 0, 'Free', 0, 'Assigned'),
(168, 25, 118, 2, 2, 0, 'Free', 0, 'Assigned'),
(169, 25, 119, 2, 2, 0, 'discount', 0, 'Assigned'),
(170, 25, 120, 2, 2, 0, 'discount', 0, 'Assigned'),
(171, 25, 121, 2, 2, 0, 'discount', 0, 'Assigned'),
(172, 25, 122, 2, 2, 0, 'discount', 20, 'Assigned'),
(173, 25, 123, 2, 2, 0, 'discount', 10, 'Assigned'),
(174, 25, 124, 2, 2, 0, 'discount', 30, 'Assigned'),
(175, 25, 125, 2, 2, 0, 'Free', 0, 'Assigned'),
(176, 25, 126, 2, 2, 0, 'Free', 0, 'Assigned'),
(177, 25, 127, 2, 2, 0, 'Free', 0, 'Assigned'),
(178, 25, 128, 2, 2, 0, 'Free', 0, 'Assigned'),
(179, 25, 129, 2, 2, 0, 'Free', 0, 'Assigned'),
(180, 25, 130, 2, 2, 0, 'Free', 0, 'Assigned'),
(181, 25, 131, 2, 2, 0, 'Free', 0, 'Assigned'),
(182, 25, 132, 2, 2, 0, 'Free', 0, 'Assigned'),
(183, 25, 133, 2, 2, 0, 'Free', 0, 'Assigned'),
(184, 25, 134, 2, 2, 0, 'Free', 0, 'Assigned'),
(185, 25, 135, 2, 2, 0, 'Free', 0, 'Assigned'),
(186, 25, 136, 2, 2, 0, 'Free', 0, 'Assigned'),
(187, 25, 137, 2, 2, 0, 'Free', 0, 'Assigned'),
(188, 25, 138, 2, 2, 0, 'Free', 0, 'Assigned'),
(189, 25, 139, 2, 2, 0, 'Free', 0, 'Assigned'),
(190, 25, 140, 2, 2, 0, 'Free', 0, 'Assigned'),
(191, 25, 141, 2, 2, 0, 'Free', 0, 'Assigned'),
(192, 25, 142, 2, 2, 0, 'Free', 0, 'Assigned'),
(193, 25, 143, 2, 2, 0, 'Free', 0, 'Assigned'),
(194, 25, 144, 2, 2, 0, 'Free', 0, 'Assigned'),
(195, 25, 145, 2, 2, 0, 'Free', 0, 'Assigned'),
(196, 25, 146, 2, 2, 0, 'Free', 0, 'Assigned'),
(197, 25, 147, 2, 2, 1, 'Free', 0, 'Assigned'),
(198, 25, 148, 2, 2, 1, 'Free', 0, 'Assigned'),
(199, 25, 149, 2, 2, 0, 'Free', 0, 'Assigned'),
(200, 27, 131, 40, 0, 0, 'Free', 0, 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_category_invite`
--

CREATE TABLE `subscriber_category_invite` (
  `ID` bigint(20) NOT NULL,
  `subscriber_ID` bigint(20) NOT NULL,
  `subscateg_ID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `category_url` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `participant_ID` bigint(20) NOT NULL,
  `hash` text NOT NULL,
  `token` text NOT NULL,
  `shared_string` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriber_category_invite`
--

INSERT INTO `subscriber_category_invite` (`ID`, `subscriber_ID`, `subscateg_ID`, `firstname`, `lastname`, `email`, `category_ID`, `category_url`, `status`, `participant_ID`, `hash`, `token`, `shared_string`) VALUES
(1, 1, 1, 'Sango', 'Karim', 'serge@gino.rw', 14, '', 'Invited', 0, 'faa70042d2d1ba9a422e308f0d713a2ccff5e6ce18cf2cf10fdda63dff4602ab', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(2, 1, 2, 'Serge', 'Karim', 'pm.serge@gmail.com', 15, '', 'Registered', 1, '03f39f803c9d651844c34f7cfdea48ffd208f6e81ba27e7cf383e601d6852658', 'c81e728d9d4c2f636f067f89cc14862c', ''),
(3, 1, 2, '', '', '', 15, '', 'Available', 0, '', '', ''),
(4, 1, 2, 'Hali', 'Lain', 'sergeweb2@gmail.com', 15, '', 'Registered', 3, '34786ab986bfc4415cc1cf0a72c4eb8a1de2e8c49083fb606c213cd9e73b6fef', 'a87ff679a2f3e71d9181a67b7542122c', ''),
(5, 1, 3, 'Ahishakiye', 'Abraham', 'sergemul1@gmail.com', 16, '', 'Registered', 2, '07c4ce7fea6d4708a9fb8661f6bd21511ebf47c479bef1eb027254598e3e10a3', 'e4da3b7fbbce2345d7772b0674a318d5', ''),
(6, 1, 4, '', '', '', 11, '', 'Available', 0, '', '', ''),
(7, 1, 4, '', '', '', 11, '', 'Available', 0, '', '', ''),
(8, 1, 4, '', '', '', 11, '', 'Available', 0, '', '', ''),
(9, 1, 4, '', '', '', 11, '', 'Available', 0, '', '', ''),
(10, 1, 4, '', '', '', 11, '', 'Available', 0, '', '', ''),
(11, 1, 3, '', '', '', 16, '', 'Available', 0, '', '', ''),
(12, 1, 3, '', '', '', 16, '', 'Available', 0, '', '', ''),
(13, 5, 6, '', '', '', 12, '', 'Available', 0, '', '', ''),
(14, 5, 6, '', '', '', 12, '', 'Available', 0, '', '', ''),
(15, 5, 6, '', '', '', 12, '', 'Available', 0, '', '', ''),
(16, 5, 6, '', '', '', 12, '', 'Available', 0, '', '', ''),
(17, 5, 6, '', '', '', 12, '', 'Available', 0, '', '', ''),
(18, 7, 7, '', '', '', 15, '', 'Available', 0, '', '', ''),
(19, 8, 8, 'Abraham', 'Imanzi', 'abrahamahoshakiye@gmail.com', 14, '', 'Invited', 0, 'ccf19ed36d9c8cb6cec1002dd6467f62a9d34bc7776fd916eef1368d4e6026b1', '1f0e3dad99908345f7439f8ffabdffc4', ''),
(20, 8, 8, '', '', '', 14, '', 'Available', 0, '', '', ''),
(21, 8, 8, '', '', '', 14, '', 'Available', 0, '', '', ''),
(22, 8, 9, '', '', '', 15, '', 'Available', 0, '', '', ''),
(23, 8, 10, 'Abraham', 'Imanzi', 'abraham26@cube.rw', 20, '', 'Registered', 38, '6f66645a2101e8b8c688ee4e6a92301089ab7f6f81dda70facefcd04999c9810', '37693cfc748049e45d87b8c7d8b9aacd', ''),
(24, 8, 10, 'Abraham', 'Imanzi', 'abraham28@cube.rw', 20, '', 'Registered', 39, 'ce495bb4357782786fd27bf6f02e3c9a81611ba185b5784161e086ae5d291450', '1ff1de774005f8da13f42943881c655f', ''),
(25, 8, 11, '', '', '', 21, '', 'Available', 0, '', '', ''),
(26, 8, 11, '', '', '', 21, '', 'Available', 0, '', '', ''),
(27, 8, 12, '', '', '', 22, '', 'Available', 0, '', '', ''),
(28, 8, 13, '', '', '', 23, '', 'Available', 0, '', '', ''),
(29, 8, 13, '', '', '', 23, '', 'Available', 0, '', '', ''),
(30, 8, 14, '', '', '', 25, '', 'Available', 0, '', '', ''),
(31, 8, 15, '', '', '', 3, '', 'Available', 0, '', '', ''),
(32, 8, 15, '', '', '', 3, '', 'Available', 0, '', '', ''),
(33, 8, 15, '', '', '', 3, '', 'Available', 0, '', '', ''),
(34, 8, 15, '', '', '', 3, '', 'Available', 0, '', '', ''),
(35, 8, 16, '', '', '', 5, '', 'Available', 0, '', '', ''),
(36, 8, 16, '', '', '', 5, '', 'Available', 0, '', '', ''),
(37, 8, 16, '', '', '', 5, '', 'Available', 0, '', '', ''),
(38, 8, 16, '', '', '', 5, '', 'Available', 0, '', '', ''),
(39, 8, 17, '', '', '', 7, '', 'Available', 0, '', '', ''),
(40, 8, 17, '', '', '', 7, '', 'Available', 0, '', '', ''),
(41, 8, 18, '', '', '', 29, '', 'Available', 0, '', '', ''),
(42, 8, 19, '', '', '', 30, '', 'Available', 0, '', '', ''),
(43, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(44, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(45, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(46, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(47, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(48, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(49, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(50, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(51, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(52, 8, 20, '', '', '', 34, '', 'Available', 0, '', '', ''),
(53, 9, 21, 'Abraham', 'Imanzi', 'abraham01@cube.rw', 2, '', 'Registered', 46, '6861b390243c04e4664043e42174e0101fee07a73dc9136c981164717a64c09d', 'd82c8d1619ad8176d665453cfb2e55f0', ''),
(54, 9, 22, 'Abraham', 'Imanzi', 'abraham23@cube.rw', 3, '', 'Invited', 0, '7f1d43864a6fe2e5cf6f13942d2470c71cc1ecc032c87d896e0de9ed46bc5322', 'a684eceee76fc522773286a895bc8436', ''),
(55, 9, 22, 'Abraham', 'Imanzi', 'abraham37@cube.rw', 3, '', 'Registered', 47, '3e5131655e4b7aac514c37867300c1badb8038cc8e84d057f4f97e3f28cc53bc', 'b53b3a3d6ab90ce0268229151c9bde11', ''),
(56, 9, 23, '', '', '', 11, '', 'Available', 0, '', '', ''),
(57, 9, 23, '', '', '', 11, '', 'Available', 0, '', '', ''),
(58, 9, 24, '', '', '', 14, '', 'Available', 0, '', '', ''),
(59, 9, 24, '', '', '', 14, '', 'Available', 0, '', '', ''),
(60, 9, 24, '', '', '', 14, '', 'Available', 0, '', '', ''),
(61, 9, 25, '', '', '', 32, '', 'Available', 0, '', '', ''),
(62, 9, 25, 'Abraham', 'Imanzi', 'abraham38@cube.rw', 32, '', 'Registered', 48, '47864383968d13356448bc5faf40caeccf3664ef6e4b21a9b7a3a53e4b593381', '44f683a84163b3523afe57c2e008bc8c', ''),
(63, 18, 32, '', '', '', 29, '', 'Available', 0, '', '', ''),
(64, 18, 32, '', '', '', 29, '', 'Available', 0, '', '', ''),
(65, 18, 32, '', '', '', 29, '', 'Available', 0, '', '', ''),
(66, 18, 32, '', '', '', 29, '', 'Available', 0, '', '', ''),
(67, 18, 33, 'Sample', 'Val', 'valentine01@cube.rw', 32, '', 'Invited', 0, 'fec0c66303ea3c2dc71e6bfbf49bf5d0a70324da2e3455abe1fe4b3f6c657623', '735b90b4568125ed6c3f678819b6e058', ''),
(68, 18, 33, '', '', '', 32, '', 'Available', 0, '', '', ''),
(69, 18, 33, '', '', '', 32, '', 'Available', 0, '', '', ''),
(70, 18, 33, '', '', '', 32, '', 'Available', 0, '', '', ''),
(71, 18, 34, '', '', '', 35, '', 'Available', 0, '', '', ''),
(72, 18, 34, '', '', '', 35, '', 'Available', 0, '', '', ''),
(73, 18, 35, '', '', '', 38, '', 'Available', 0, '', '', ''),
(74, 18, 35, '', '', '', 38, '', 'Available', 0, '', '', ''),
(75, 18, 35, '', '', '', 38, '', 'Available', 0, '', '', ''),
(76, 18, 35, '', '', '', 38, '', 'Available', 0, '', '', ''),
(77, 18, 35, '', '', '', 38, '', 'Available', 0, '', '', ''),
(78, 19, 36, 'Abraham', 'Imanzi', 'abraham019@cube.rw', 35, '', 'Registered', 81, 'ad400e05d2fd377e53e968f223209d4e0ae3cf412000c9ebf30ed1abda55c4bd', '35f4a8d465e6e1edc05f3d8ab658c551', 'cfbfc258ae27ce5d0d8c90d7cde3e8d3b70e10898775072a21c2bbae24462068'),
(79, 19, 36, 'Kamoga3', 'Test', 'abraham019@cube.rw', 35, '', 'Registered', 83, 'ad842bee93833fe8503358305589017ac3b97a84e2e515283c69888032fe1859', 'd1fe173d08e959397adf34b1d77e88d7', 'dbc2be662d27d4cbfd793edfb1d3e492428ff15a1d29745a604e74e322ffdde8'),
(80, 19, 37, '', '', '', 29, '', 'Available', 0, '', '', ''),
(81, 19, 37, '', '', '', 29, '', 'Available', 0, '', '', ''),
(82, 19, 38, '', '', '', 38, '', 'Available', 0, '', '', ''),
(83, 19, 38, 'Kamoga2', 'Test', 'abraham019@cube.rw', 38, '', 'Registered', 80, 'c1bbca6388e028621144cf58d53f0a01f31b0fc5cef6a7c8566773bbb6b6c0f8', 'fe9fc289c3ff0af142b6d3bead98a923', 'b78233d1a87000ef5c4be46f8b53267ccbbbde8c5a2ab9c524a9fd3fe2664bf4'),
(84, 19, 39, 'Kamoga1', 'Test', 'abraham19@cube.rw', 34, '', 'Registered', 78, '154d02bf6bcb5c40ebe66a8770efee841c46d374aa70ba25900d01b81ff8c5eb', '68d30a9594728bc39aa24be94b319d21', 'd251412e0a212609121c9b4d366231b2363f3bed616909bc405cf05ce16afdef'),
(85, 19, 39, '', '', '', 34, '', 'Available', 0, '', '', ''),
(86, 19, 40, 'Kamoga', 'Test', 'abraham01@cube.rw', 36, '', 'Registered', 84, 'ee57c5d15d3a9e683f9cacc499f9f13f72a299698773ba32cb3963f8be543060', '93db85ed909c13838ff95ccfa94cebd9', 'c5a2a665ebcb0ae01e5038211bb8a2ddaeea27fa770ac4f52991ba6deb9a2eb3'),
(87, 19, 40, '', '', '', 36, '', 'Available', 0, '', '', ''),
(88, 19, 40, 'Abraham', 'Abraham', 'tyiii@gmail.com', 2, '', 'Invited', 0, 'ee57c5d15d3a9e683f9cacc499f9f13f72a299698773ba32cb3963f8be543060', '2a38a4a9316c49e5a833517c45d31070', '95c620aacdc3fe9ce88b7c35ab09ab8d062e6cbd5edf9301f2f14a1661daa6cc'),
(89, 19, 2, 'Abraham', 'Aaaa', 'aaaahhh2@gmail.com', 2, '', 'Invited', 0, '1ee0120893a026ccc08c44a88aa037749d9da231bed62b3280cdfcf70bf1bcc9', '7647966b7343c29048673252e490f736', '92e5b86ee22875d0d146f27006c2eb6e0e5d0b6f500d7a2be34ef11905691be2'),
(90, 0, 4, 'Aaddd', 'Addd', 'addd@gmail.com', 0, '', 'Invited', 0, '', '', ''),
(91, 0, 3, 'Text', 'Text', 'ter@gmail.com', 0, '', 'Invited', 0, '', '', ''),
(92, 0, 1, 'Text', 'Text', 'tery@gmail.com', 0, '', 'Invited', 0, '9f1e2f71b7d2ad6b4ac38ff5b65b5e8cda41d5c6f2c9665a97abd38c6972ee57', '92cc227532d17e56e07902b254dfad10', 'b207c662cc13581f4157b3c408cdae73cc03cdce6738b3879f6c2f4a89839c0d'),
(93, 0, 1, 'Abraham', 'Imanzi', 'abraham01@cube.rw', 0, '', 'Invited', 0, 'bb532948971018cb6ed61e9d5e503cdfff27e690951ff646ac1ad649b1e94aee', '98dce83da57b0395e163467c9dae521b', '3004188a36d54c89a57dbf09c970e06daeb5bd113823ec56f86d7c8d7012b0fb'),
(94, 0, 82, 'Abraham', 'Abraham', 'abraham01@cube.rw', 0, '', 'Invited', 0, '84e4bb1c6f43170158765198fd04d25665b7be733f72430e4332bacedda4a206', 'f4b9ec30ad9f68f89b29639786cb62ef', '800d8bde34c4d902fc8c08076debff632fda393f21ab7ee9f92b097c19b9af6d'),
(95, 0, 1, 'Abraham', 'Abraham', 'abraham01@cube.rw', 0, '', 'Invited', 0, '353e1f24b448c06c1fdad702f416ea770337c6de2361b3c561322ed7cd020d13', '812b4ba287f5ee0bc9d43bbf5bbe87fb', '44feb3d011654b08844ac9682da53fb97624f6b652f13f083dc5a1d102e4c708'),
(96, 0, 1, 'Valentine', 'Valentine', 'valentine01@cube.rw', 0, '', 'Invited', 0, '60e048d830af60b2f4d221ead9c08a3991807dc8bf4457dc9dd3a3dab7443dc8', '26657d5ff9020d2abefe558796b99584', '5de0a560f388b7a09d4299b86141dc5034cf9cf951df0ba10a1f8532ce409e94'),
(97, 0, 1, 'Doris', 'Karemera', 'doris01@cube.rw', 0, '', 'Invited', 0, 'b912d40792c081e6acda60bdf833dabc50c347e15f0e1fb1b41a199c64433cdd', 'e2ef524fbf3d9fe611d5a8e90fefdc9c', '99510f077ce854f855cbcf60a0fd05efbecbb060285e193caa6bb9d7c4564f98'),
(98, 0, 1, 'Abraham', 'Abraham', 'abraham01@cube.rw', 0, '', 'Invited', 0, 'bf25faddbe20ff4503840c1190e6d724ad77784f95ca4fa49437fc700b221562', 'ed3d2c21991e3bef5e069713af9fa6ca', '4459462fccd21311eb1c32379b2c6367bd8fbff6ddedc2c34657de11a3d143ad'),
(99, 23, 41, 'Test', 'Test', 'abraham01@cube.rw', 5, '', 'Registered', 1862, 'ceb17613f2e575fee82d8aed5416d3d33e711048c1c467f1a33f15f7a7f7efea', 'ac627ab1ccbdb62ec96e702f07f6425b', 'a954a6824165f1ede8af859e8e72f7de5c4f6b179be4bc100f6939fbbc140600'),
(100, 23, 41, '', '', '', 5, '', 'Available', 0, '', '', ''),
(101, 23, 42, '', '', '', 9, '', 'Available', 0, '', '', ''),
(102, 23, 42, 'Test', 'Test', 'abraham01@cube.rw', 9, '', 'Registered', 1863, 'e58f960f17113d315ef79c47829744685553803cf4be76dd93025292d6c43d04', 'ec8956637a99787bd197eacd77acce5e', '7bb70ea26e211e10593294077c16e41e399aacf97222f7a4df6bf5c811b1487d'),
(103, 23, 43, '', '', '', 32, '', 'Available', 0, '', '', ''),
(104, 23, 43, '', '', '', 32, '', 'Available', 0, '', '', ''),
(105, 24, 44, '', '', '', 29, '', 'Available', 0, '', '', ''),
(106, 24, 44, '', '', '', 29, '', 'Available', 0, '', '', ''),
(107, 24, 45, '', '', '', 30, '', 'Available', 0, '', '', ''),
(108, 24, 45, '', '', '', 30, '', 'Available', 0, '', '', ''),
(109, 24, 46, '', '', '', 31, '', 'Available', 0, '', '', ''),
(110, 24, 46, '', '', '', 31, '', 'Available', 0, '', '', ''),
(111, 24, 47, '', '', '', 32, '', 'Available', 0, '', '', ''),
(112, 24, 47, '', '', '', 32, '', 'Available', 0, '', '', ''),
(113, 24, 48, '', '', '', 33, '', 'Available', 0, '', '', ''),
(114, 24, 49, 'Test', 'Test', 'abraham01@cube.rw', 34, '', 'Registered', 1865, '32d5cb19afa65ff8ddc72334e777a2984a3cd17b80371f912b0360f782535861', '5fd0b37cd7dbbb00f97ba6ce92bf5add', 'fc90ce32280923fdd0692f5dad24eda62a73df2663d13f7be2f8d5080547e24f'),
(115, 24, 50, 'Test', 'Test', 'abraham01@cube.rw', 35, '', 'Registered', 1864, 'a10d6448a9a0aeede0922482e43818df7251393f342e50fefa61bc9813d34d1a', '2b44928ae11fb9384c4cf38708677c48', 'bc639472695accec3a03416c30dca2267636cfa7ceb35f8fc6cb25e9891bd9b5'),
(116, 24, 50, '', '', '', 35, '', 'Available', 0, '', '', ''),
(117, 0, 53, 'Test', 'Test', 'abraham01@cube.rw', 53, '', 'Available', 0, '8d104eb609e502961e881672693b3e913afc1d473546c1fc625494930089534b', 'eb160de1de89d9058fcb0b968dbbbd68', 'd21ddae9c8ad0fb9666105e7eba6209825fad1d218ec07a2863c1e9c0fc4c262'),
(118, 0, 10, 'Test', 'Test', 'abraham01@cube.rw', 0, '', 'Invited', 0, '82ea11442c6797616d86991f2630d71c387acdc8109877ca4d720af610bfd70d', '5ef059938ba799aaa845e1c2e8a762bd', 'c5841c882ee57af6983fe595581f65945befbf9c93e957169f1a636ad820c356'),
(119, 0, 9, 'Test', 'Test', 'abraham01@cube.rw', 0, '', 'Invited', 0, 'c091e6f8a7b13bf607408ce9b9a21967d7cb057faba60efa72d51603f9d773d5', '07e1cd7dca89a1678042477183b7ac3f', 'fd2240ca98f16c5cb5b85d0a80e95f5590592ea58d753725f64ae3990df7c298'),
(120, 0, 8, 'Test', 'Test', 'abraham01@cube.rw', 0, '', 'Invited', 0, '5d69118909ca2e3073db1f5333af39b881f1da32903fc69cf7c56000114ae9a0', 'da4fb5c6e93e74d3df8527599fa62642', '40bc691baa1caa0a321429b8eabeba5d4e063e345e61faac2cc3b495198e4334'),
(121, 25, 51, 'Test', 'Test', 'abraham01@cube.rw', 1, '', 'Registered', 1871, '3afdcafcb46c5bd82b2b6af62c2f1990e5a5097a7382718de1601719e0667ac5', '4c56ff4ce4aaf9573aa5dff913df997a', 'db1bb34e5bf861f758f21639d9d33e4d87544cc1656582839132180f894473fa'),
(122, 25, 52, '', '', '', 2, '', 'Available', 0, '', '', ''),
(123, 25, 53, '', '', '', 3, '', 'Available', 0, '', '', ''),
(124, 25, 54, '', '', '', 4, '', 'Available', 0, '', '', ''),
(125, 25, 55, 'Test', 'Test', 'abraham01@cube.rw', 5, '', 'Registered', 1874, 'daf876c5a3d49c99c22a09d164d8eb5de0121db9aa89fad6ffb3940f00bd0058', '3def184ad8f4755ff269862ea77393dd', 'a09ea428941186b586595ccb5e5656e7bebecdc7ad4e3626f73498a493ed2283'),
(126, 25, 56, '', '', '', 6, '', 'Available', 0, '', '', ''),
(127, 25, 57, '', '', '', 7, '', 'Available', 0, '', '', ''),
(128, 25, 58, 'Test', 'Test', 'abraham1@cube.rw', 8, '', 'Invited', 0, 'd3dbdc6b0b3698b4ea18a9f71113ba6cfd23759ba0106ece77365b0af9e7e7db', '76dc611d6ebaafc66cc0879c71b5db5c', 'fa4e38d18be8bcffa2e5e119832fe45bfab710245e3be69c6e071bc3d6645883'),
(129, 25, 59, 'Test', 'Test', 'abraham1@cube.rw', 9, '', 'Registered', 1887, '0942bd30563ee212bb7bc867f13a2c897774db2b9c71efe21363901ed0643579', 'd1f491a404d6854880943e5c3cd9ca25', 'be227fc5dbac72f68f8cb4ea5170ea5980a37856b621f8d6b50d0189632fed40'),
(130, 25, 60, 'Test', 'Test', 'abraham1@cube.rw', 10, '', 'Registered', 1885, '5380ed35f87df62c1c38fef5447499ee144d53ed77c56469a73b302175b67940', '9b8619251a19057cff70779273e95aa6', '816a7c669eb00141329ae05690730e9bcf0998030bcb87778333c7d52f6f4086'),
(131, 25, 61, '', '', '', 11, '', 'Available', 0, '', '', ''),
(132, 25, 62, '', '', '', 12, '', 'Available', 0, '', '', ''),
(133, 25, 63, '', '', '', 13, '', 'Available', 0, '', '', ''),
(134, 25, 64, 'Test', 'Test', 'abraham1@cube.rw', 14, '', 'Invited', 1877, '62d8387c6704f9c45f4a48b50c535e268f1ab1d3d7398cfde064b00df6cd2276', '02522a2b2726fb0a03bb19f2d8d9524d', '79d1471decb5a771b364fe7d14dc11983bc1a4fff1fdbc8dc3bf7038952dfd19'),
(135, 25, 65, 'Test1', 'Test1', 'abraham1@cube.rw', 15, '', 'Invited', 0, '19c9f78de80541e25a3fa3a4ec723a1e8899888d64dc6d9ff16686284f9c8a39', '7f1de29e6da19d22b51c68001e7e0e54', '61ac9a8cd453393b14676c929426f3f612392a78afffbe4a459d11d45680c166'),
(136, 25, 66, '', '', '', 16, '', 'Available', 0, '', '', ''),
(137, 25, 67, 'Test', 'Test', 'abraham1@cube.rw', 17, '', 'Registered', 1884, 'd6c6f2695bf6b586e9468693d89e7c291a203d09d3f8781664d2e534d293f5c3', '3988c7f88ebcb58c6ce932b957b6f332', '7b808bd9445e506d768a32b378ee0efcd2291e9ed946c9982c7a520c458114bc'),
(138, 25, 68, 'Test', 'Test', 'abraham1@cube.rw', 18, '', 'Invited', 0, '43fd0280df90273b7436ffd87de8693a13f751f46cf02e979783496861faf721', '013d407166ec4fa56eb1e1f8cbe183b9', 'e2af5b454da636aa83a8ade12a981c9e7006679203452af6a0df4bccbc99c063'),
(139, 25, 69, 'Test', 'Test', 'abraham1@cube.rw', 19, '', 'Invited', 0, 'd1cd291bb0634952a14557613cea3b6ac53e1fc1658790982a6748c3c71633cb', 'e00da03b685a0dd18fb6a08af0923de0', '3b8ebc64d32867a2029af8d2c56cf10a859a77e4ae428918a45ebb7719608e15'),
(140, 25, 70, '', '', '', 20, '', 'Available', 0, '', '', ''),
(141, 25, 71, '', '', '', 21, '', 'Available', 0, '', '', ''),
(142, 25, 72, '', '', '', 22, '', 'Available', 0, '', '', ''),
(143, 25, 73, '', '', '', 23, '', 'Available', 0, '', '', ''),
(144, 25, 74, '', '', '', 24, '', 'Available', 0, '', '', ''),
(145, 25, 75, '', '', '', 25, '', 'Available', 0, '', '', ''),
(146, 25, 76, 'Test', 'Test', 'abraham1@cube.rw', 26, '', 'Registered', 1888, '9976cef63dcb96db0a1a9ec856c0a9bce9be97bcdbef7d21d46effc9b2cec611', 'a5e00132373a7031000fd987a3c9f87b', 'f96f544a48012d187319ab3b8d23f202178565c6fb31909dbb6fa530cb712802'),
(147, 25, 77, 'Test', 'Test', 'abraham1@cube.rw', 27, '', 'Invited', 0, '4c9b83f4f28a92ee5b4b5f44c6e5ec08efd3fa6ab40f0fbac776751ae80441ee', '8d5e957f297893487bd98fa830fa6413', 'dbb8c207321f77a41e5145be0c91ed2d9f906937e2a79407a68c37ab9b8e179a'),
(148, 25, 78, 'Test', 'Test', 'abraham1@cube.rw', 28, '', 'Registered', 1889, 'b8cb00ca0b8c6a7eb5469fd3244fcaedfcfab8ddf6cb567ae2a2abd6dc994082', '47d1e990583c9c67424d369f3414728e', 'd3316b8a9bdedee644beecd01aba3dd698f1813bf03ddcb6b14b29f7ecb6d687'),
(149, 25, 79, '', '', '', 29, '', 'Available', 0, '', '', ''),
(150, 25, 80, '', '', '', 30, '', 'Available', 0, '', '', ''),
(151, 25, 81, '', '', '', 31, '', 'Available', 0, '', '', ''),
(152, 25, 82, '', '', '', 32, '', 'Available', 0, '', '', ''),
(153, 25, 83, '', '', '', 33, '', 'Available', 0, '', '', ''),
(154, 25, 84, '', '', '', 34, '', 'Available', 0, '', '', ''),
(155, 25, 85, 'Test', 'Test', 'abraham1@cube.rw', 35, '', 'Invited', 0, 'c95147f1692f98e53d448d7a9e84be4fdb164f7f7c6167301cbec6a208fb3d77', '2a79ea27c279e471f4d180b08d62b00a', 'b9525f2e3611de07665636036a33fc2e22117d6bb32f085183145e9a2077c9d0'),
(156, 25, 86, 'Test', 'Test', 'abraham1@cube.rw', 36, '', 'Invited', 0, 'e81d45216bc94d4bb73479708bf1817a8974626d13c36347c88fb2f8a3d0be46', '1c9ac0159c94d8d0cbedc973445af2da', '46ace6cf36aee8b541491e61f4563878e9a7ba79cd0f3ec8a0fb5629bff7ab08'),
(157, 25, 87, 'Test', 'Test', 'abraham1@cube.rw', 37, '', 'Invited', 0, '2d4677501c4bb6ff3ec2ef3cd4b52bd6b89d20c73327a19df42e577a87946b55', '6c4b761a28b734fe93831e3fb400ce87', '1975030e5e805931db6956df48ed1420a2e644f011366f3056bbc91885a79d85'),
(158, 25, 88, '', '', '', 38, '', 'Available', 0, '', '', ''),
(159, 25, 89, '', '', '', 39, '', 'Available', 0, '', '', ''),
(160, 25, 90, '', '', '', 40, '', 'Available', 0, '', '', ''),
(161, 25, 91, '', '', '', 41, '', 'Available', 0, '', '', ''),
(162, 25, 92, '', '', '', 42, '', 'Available', 0, '', '', ''),
(163, 25, 93, '', '', '', 43, '', 'Available', 0, '', '', ''),
(164, 25, 94, 'Test', 'Test', 'abraham1@cube.rw', 44, '', 'Invited', 0, 'c8c8db01d776177cc061d58fa3fd8cf593ff5b912c9e1cc996dc119ca87ce0c3', 'fa7cdfad1a5aaf8370ebeda47a1ff1c3', 'ce1cf7bd0c0c35f2513f68517290d69c6b400835658a11f31740d78fe189c9a3'),
(165, 25, 95, 'Test', 'Test', 'abraham1@cube.rw', 45, '', 'Invited', 0, '84af559684eb8e96dfccf61304da3f494c0879717304332fe9de2c670d66fbee', '9766527f2b5d3e95d4a733fcfb77bd7e', 'f906a1836efd4c8283d1a6f402e916a0dc26f15703d350f5dcd0bb088919420c'),
(166, 25, 96, 'Test', 'Test', 'abraham1@cube.rw', 46, '', 'Invited', 0, '8f72f2628c5dc0d509928a61844a786fe4619691c258105a6d9336d4963c3a1b', '7e7757b1e12abcb736ab9a754ffb617a', 'e49f4629c4cb2fa734cc1f1122de5c3e81f1c83202625401b808b819d80d6c2c'),
(167, 25, 97, '', '', '', 47, '', 'Available', 0, '', '', ''),
(168, 25, 98, '', '', '', 48, '', 'Available', 0, '', '', ''),
(169, 25, 99, '', '', '', 49, '', 'Available', 0, '', '', ''),
(170, 25, 100, '', '', '', 50, '', 'Available', 0, '', '', ''),
(171, 25, 101, '', '', '', 51, '', 'Available', 0, '', '', ''),
(172, 25, 102, '', '', '', 52, '', 'Available', 0, '', '', ''),
(173, 25, 103, 'Test', 'Test', 'abraham1@cube.rw', 53, '', 'Invited', 0, 'da3227495c1b892719328f5c5bed40c53348e0c56a021304efa0787c5d561994', 'f7e6c85504ce6e82442c770f7c8606f0', 'e53e415f0552d17bc233fc7ea5a2a7a6176e514a6a7273cffa0a6483b485c893'),
(174, 25, 104, 'Test', 'Test', 'abraham1@cube.rw', 54, '', 'Invited', 0, '6aba23ff1e89f4001f54de09007b79e3bc7c216c0232d4a281aa7fc8c9ea0e43', 'bf8229696f7a3bb4700cfddef19fa23f', 'd77938ee043e4b3d8145ba2fb1a69ffe9b822cdf21b860a8286af6178afbe8c9'),
(175, 25, 105, 'Test', 'Test', 'abraham1@cube.rw', 55, '', 'Invited', 0, 'd8e979f082d1b890e1dc6a2d53769d5febb7e8c742ec67e20e6484f270628dc7', '82161242827b703e6acf9c726942a1e4', '76a3884d8a968a9f1b9a455bed15ee5fbb9c0acde5f1ee8c347512c4d133bcfa'),
(176, 25, 106, '', '', '', 56, '', 'Available', 0, '', '', ''),
(177, 25, 107, '', '', '', 57, '', 'Available', 0, '', '', ''),
(178, 25, 108, '', '', '', 58, '', 'Available', 0, '', '', ''),
(179, 25, 109, '', '', '', 59, '', 'Available', 0, '', '', ''),
(180, 25, 110, '', '', '', 60, '', 'Available', 0, '', '', ''),
(181, 25, 111, '', '', '', 61, '', 'Available', 0, '', '', ''),
(182, 25, 112, 'Test', 'Test', 'abraham1@cube.rw', 62, '', 'Invited', 0, 'f60a86c6d9c7488ac776f07973318c9559c331b09dac2823a2332f47f9583045', '4c5bde74a8f110656874902f07378009', 'fbfd47ef421898b902c9533970966652f0fde2e414cfd661e11cd8ffb61c1458'),
(183, 25, 113, 'Test', 'Test', 'abraham1@cube.rw', 63, '', 'Invited', 0, 'a921e131dc2b4399dcf1d0089fe91660ce7ce0b38c5de92194a32934b7ed0112', 'cedebb6e872f539bef8c3f919874e9d7', '215ea2fb2e9014c4a39b45df99f20955303adc008ab20c5a2324b9c4408af785'),
(184, 25, 114, 'Test', 'Test', 'abraham1@cube.rw', 64, '', 'Invited', 0, '135bb621d01e935ce763fc6b9bc41f34ca274748748cb89652cd06b50daa1a03', '6cdd60ea0045eb7a6ec44c54d29ed402', '93028ed825e8b0bdaf334e5ea73a5bb0e7aa64d25a955ce25ec0fe055f7e6d22'),
(185, 25, 115, '', '', '', 65, '', 'Available', 0, '', '', ''),
(186, 25, 116, '', '', '', 66, '', 'Available', 0, '', '', ''),
(187, 25, 117, '', '', '', 67, '', 'Available', 0, '', '', ''),
(188, 25, 118, '', '', '', 68, '', 'Available', 0, '', '', ''),
(189, 25, 119, '', '', '', 69, '', 'Available', 0, '', '', ''),
(190, 25, 120, '', '', '', 70, '', 'Available', 0, '', '', ''),
(191, 25, 121, 'Test', 'Test', 'abraham1@cube.rw', 71, '', 'Invited', 0, '2ce5d3b700e5c145e6e953ff4c7d1749ffc1012facf173c2876217b1fc8961cb', '0aa1883c6411f7873cb83dacb17b0afc', '540413f2f3eb042b9377e5202cc16860b8534469b538a2d12d7c7b33d2c04927'),
(192, 25, 122, 'Test', 'Test', 'abraham1@cube.rw', 72, '', 'Invited', 0, '8828cabda3f5d36aadfa17f99c5b2a5ab120343b17855a91c7173091c05481fc', '58a2fc6ed39fd083f55d4182bf88826d', '30435a5872529dae8d0338185964321ec2a59add833dc6bdd54a081941a317d6'),
(193, 25, 123, 'Test', 'Test', 'abraham1@cube.rw', 73, '', 'Invited', 0, '716fa91a6d26e9bd9084168f976f2fabfc5b85f6732e8ee97a6c27aef5a52ed2', 'bd686fd640be98efaae0091fa301e613', '5bac6179e9f6e4dcf633556c847bb2f4fd62b21aeee8d005b5fe9b8567e4f35d'),
(194, 25, 124, '', '', '', 74, '', 'Available', 0, '', '', ''),
(195, 25, 125, '', '', '', 75, '', 'Available', 0, '', '', ''),
(196, 25, 126, '', '', '', 76, '', 'Available', 0, '', '', ''),
(197, 25, 127, '', '', '', 77, '', 'Available', 0, '', '', ''),
(198, 25, 128, '', '', '', 78, '', 'Available', 0, '', '', ''),
(199, 25, 129, '', '', '', 79, '', 'Available', 0, '', '', ''),
(200, 25, 130, 'Test', 'Test', 'abraham1@cube.rw', 80, '', 'Invited', 0, 'c002ba499c83064f043b5ce1dcb4fb2ea51ace1a2257baf667084b06fe31f6b1', '3644a684f98ea8fe223c713b77189a77', 'f89783881678aced25c69f6743561b3fa618861fac34ac6a49acd0d71ddf4be7'),
(201, 25, 131, 'Test', 'Test', 'abraham1@cube.rw', 81, '', 'Invited', 0, '947f8058184b5968464b96287c9c93db0b9f9352919fc34c7c3e809613c31162', '757b505cfd34c64c85ca5b5690ee5293', 'b41d0dff49d4916a089bedbb74df63007f2c643f9d1afadfd803dba2ea16dc28'),
(202, 25, 132, '', '', '', 82, '', 'Available', 0, '', '', ''),
(203, 25, 133, '', '', '', 83, '', 'Available', 0, '', '', ''),
(204, 25, 134, '', '', '', 84, '', 'Available', 0, '', '', ''),
(205, 25, 135, '', '', '', 85, '', 'Available', 0, '', '', ''),
(206, 25, 136, '', '', '', 86, '', 'Available', 0, '', '', ''),
(207, 25, 137, '', '', '', 87, '', 'Available', 0, '', '', ''),
(208, 25, 138, '', '', '', 88, '', 'Available', 0, '', '', ''),
(209, 25, 139, 'Test', 'Test', 'abraham1@cube.rw', 89, '', 'Invited', 0, 'c2260bc72b0b77b74e44ecfd96e44f0e93fdd2f6540548cca2ea1f3c1e8b0b7f', 'b1d10e7bafa4421218a51b1e1f1b0ba2', 'a6a9e2420fc84346e1dff3af31d329a4fe3f3ecbad53c489d1779fd09c415e73'),
(210, 25, 140, 'Test', 'Test', 'abraham1@cube.rw', 90, '', 'Invited', 0, 'b2791ae47d04071e58f839a34072d6e6150ea86bf747c03788bdc2757861348a', '6f3ef77ac0e3619e98159e9b6febf557', 'ef9b396cc0a05b32003d410a189f9b905848e3fc7a36e92e6dad7fef0573ad72'),
(211, 25, 141, 'Test', 'Test', 'abraham1@cube.rw', 91, '', 'Invited', 0, '52f0ca2e6f87b0de2274d16334fe6382ff24accf37ea9c054ff590a2d8d0acee', 'eb163727917cbba1eea208541a643e74', 'ea87b6f637de042c4163325ce08c177b6f35ed27d5a2fc0e5254bc6d8d29056f'),
(212, 25, 142, '', '', '', 92, '', 'Available', 0, '', '', ''),
(213, 25, 143, '', '', '', 93, '', 'Available', 0, '', '', ''),
(214, 25, 144, '', '', '', 94, '', 'Available', 0, '', '', ''),
(215, 25, 145, '', '', '', 95, '', 'Available', 0, '', '', ''),
(216, 25, 146, '', '', '', 96, '', 'Available', 0, '', '', ''),
(217, 25, 147, '', '', '', 97, '', 'Available', 0, '', '', ''),
(218, 25, 148, 'Test', 'Test', 'abraham1@cube.rw', 98, '', 'Invited', 0, '68bd7c13b44d81d6a5a267ceb0fb61478ba757b0150b49aa68e133b749172f9c', 'e96ed478dab8595a7dbda4cbcbee168f', '227a095fe95959b69745d28b918f8be024320f29ad9ca4ea34a4b72080d98868'),
(219, 25, 149, '', '', '', 99, '', 'Available', 0, '', '', ''),
(220, 25, 150, '', '', '', 100, '', 'Available', 0, '', '', ''),
(221, 25, 151, '', '', '', 101, '', 'Available', 0, '', '', ''),
(222, 25, 152, '', '', '', 102, '', 'Available', 0, '', '', ''),
(223, 25, 153, '', '', '', 103, '', 'Available', 0, '', '', ''),
(224, 25, 154, '', '', '', 104, '', 'Available', 0, '', '', ''),
(225, 25, 155, '', '', '', 105, '', 'Available', 0, '', '', ''),
(226, 25, 156, '', '', '', 106, '', 'Available', 0, '', '', ''),
(227, 25, 157, 'Test', 'Test', 'abraham1@cube.rw', 107, '', 'Invited', 0, '88b7e546fc834409822f365e9af92dc76692557854a8187b3584636aaf010361', '705f2172834666788607efbfca35afb3', '642cece47e33354614ae9890087e8f40c68a4d88cb7c7274bbd70e1df7c8d052'),
(228, 25, 158, 'Test', 'Test', 'abraham1@cube.rw', 108, '', 'Invited', 0, 'b3b7a8872d2f236d2ddfd8645e9b38d110d05376c2087779441532449a77baf0', '74db120f0a8e5646ef5a30154e9f6deb', 'abf7f7797b3f78b4bd0d092b1eb844ad29df8f4badc4980f5f3261eb2b02954d'),
(229, 25, 159, 'Test', 'Test', 'abraham1@cube.rw', 109, '', 'Invited', 0, '743ac51034fdfd3740dd63af8b7c73541402057ad70650ce13f552223bce2bff', '57aeee35c98205091e18d1140e9f38cf', '3b2211820764f5a315c56d54465bb781603a88b911db7b5570e10b10cc5dc401'),
(230, 25, 160, '', '', '', 110, '', 'Available', 0, '', '', ''),
(231, 25, 161, '', '', '', 111, '', 'Available', 0, '', '', ''),
(232, 25, 162, '', '', '', 112, '', 'Available', 0, '', '', ''),
(233, 25, 163, '', '', '', 113, '', 'Available', 0, '', '', ''),
(234, 25, 164, '', '', '', 114, '', 'Available', 0, '', '', ''),
(235, 25, 165, '', '', '', 115, '', 'Available', 0, '', '', ''),
(236, 25, 166, 'Test', 'Test', 'abraham1@cube.rw', 116, '', 'Invited', 0, 'c601f8cb79ee853ea85cda3bc481b2db35f9729546ccfbf7fe88ddf02597d593', '01161aaa0b6d1345dd8fe4e481144d84', '1c1f8d604ffe879d0d2fe771659ce9b3e7ea933c9703a9c2bc83d1037af77c95'),
(237, 25, 167, 'Test', 'Test', 'abraham1@cube.rw', 117, '', 'Invited', 0, 'e7bf811ae5e6923e2b3a16c244c73be151815f617baaeb9883364271ec662bbd', '539fd53b59e3bb12d203f45a912eeaf2', '27930c967acf05edaa3b8e64f178add990b4c618f11ea65d1a86d6b02a347f80'),
(238, 25, 168, 'Test', 'Test', 'abraham1@cube.rw', 118, '', 'Invited', 0, '92ebac6905770b93a84f61b1c677b81ea19759aef99fa6f9fd17e08098eb6ff9', 'ac1dd209cbcc5e5d1c6e28598e8cbbe8', '71faea2db16e084e0b72c71237955d3194a0bdd0a5b85bc54a2e36b7ff913078'),
(239, 25, 169, '', '', '', 119, '', 'Available', 0, '', '', ''),
(240, 25, 170, '', '', '', 120, '', 'Available', 0, '', '', ''),
(241, 25, 171, '', '', '', 121, '', 'Available', 0, '', '', ''),
(242, 25, 172, '', '', '', 122, '', 'Available', 0, '', '', ''),
(243, 25, 173, '', '', '', 123, '', 'Available', 0, '', '', ''),
(244, 25, 174, '', '', '', 124, '', 'Available', 0, '', '', ''),
(245, 25, 175, 'Test', 'Test', 'abraham1@cube.rw', 125, '', 'Invited', 0, '5a1354dda6985169ebfea08bab21b195496b86eefc9fd0bdf44eeedfe0f402a6', '0266e33d3f546cb5436a10798e657d97', '1538cdf62f1f039b02dcb2d417b879d7861dc45998f2c5db9015d18c3e4919e9'),
(246, 25, 176, 'Test', 'Test', 'abraham1@cube.rw', 126, '', 'Invited', 0, 'd2ff09b0d31c94f7270fc5b219ad651a47a6809e0a17e8de75c9b16035d1d824', '38db3aed920cf82ab059bfccbd02be6a', '99c02ce2737bc05180803ca7babbfdd1b10e9867f714f23ac10217d117198d26'),
(247, 25, 177, '', '', '', 127, '', 'Available', 0, '', '', ''),
(248, 25, 178, '', '', '', 128, '', 'Available', 0, '', '', ''),
(249, 25, 179, '', '', '', 129, '', 'Available', 0, '', '', ''),
(250, 25, 180, '', '', '', 130, '', 'Available', 0, '', '', ''),
(251, 25, 181, '', '', '', 131, '', 'Available', 0, '', '', ''),
(252, 25, 182, '', '', '', 132, '', 'Available', 0, '', '', ''),
(253, 25, 183, '', '', '', 133, '', 'Available', 0, '', '', ''),
(254, 25, 184, '', '', '', 134, '', 'Available', 0, '', '', ''),
(255, 25, 185, '', '', '', 135, '', 'Available', 0, '', '', ''),
(256, 25, 186, '', '', '', 136, '', 'Available', 0, '', '', ''),
(257, 25, 187, '', '', '', 137, '', 'Available', 0, '', '', ''),
(258, 25, 188, '', '', '', 138, '', 'Available', 0, '', '', ''),
(259, 25, 189, '', '', '', 139, '', 'Available', 0, '', '', ''),
(260, 25, 190, '', '', '', 140, '', 'Available', 0, '', '', ''),
(261, 25, 191, '', '', '', 141, '', 'Available', 0, '', '', ''),
(262, 25, 192, '', '', '', 142, '', 'Available', 0, '', '', ''),
(263, 25, 193, '', '', '', 143, '', 'Available', 0, '', '', ''),
(264, 25, 194, '', '', '', 144, '', 'Available', 0, '', '', ''),
(265, 25, 195, '', '', '', 145, '', 'Available', 0, '', '', ''),
(266, 25, 196, '', '', '', 146, '', 'Available', 0, '', '', ''),
(267, 0, 1, 'Test', 'Test', 'abraham01@cube.rw', 0, '', 'Invited', 0, '7ada31f013e3d36b5adabf8bab3bfe3f91a229865cb49b970f0df45f5a2d6fd1', 'eda80a3d5b344bc40f3bc04f65b7a357', '8e6c1dbc702552942bdb03b26151ae94dd858a7410a0efc91e176deec5741563'),
(268, 0, 1, 'Test', 'Test', 'abraham01@cube.rw', 0, '', 'Invited', 0, '9a49f83fff8d1d8b587ae337e7abdef785be7f2f6f2d918eb2517f09822fd692', '8f121ce07d74717e0b1f21d122e04521', 'abe08873637859cca4d4eaa9b6d688588c13f9b7ef0aa00c0b2b3e5db5d5cbf5'),
(269, 0, 3, 'Test', 'Test', 'abraham1@cube.rw', 0, '', 'Invited', 0, '84ed9ab6b8ba548a8b53655727297f8b4e629160d58d827db74cac3ee587a32f', '06138bc5af6023646ede0e1f7c1eac75', '58dc7ff2b688cd52f70d33dfedff8751c5e8a315ef891956ad5c8db055fa8558'),
(270, 0, 10, 'Test', 'Test', 'abraham1@cube.rw', 0, '', 'Invited', 0, '', '', ''),
(271, 0, 10, 'Test', 'Test', 'abraham1@cube.rw', 0, '', 'Invited', 0, '', '', ''),
(272, 25, 51, '', '', '', 1, '', 'Available', 0, '', '', ''),
(273, 25, 52, '', '', '', 2, '', 'Available', 0, '', '', ''),
(274, 25, 53, '', '', '', 3, '', 'Available', 0, '', '', ''),
(275, 25, 54, '', '', '', 4, '', 'Available', 0, '', '', ''),
(276, 25, 55, '', '', '', 5, '', 'Available', 0, '', '', ''),
(277, 25, 56, '', '', '', 6, '', 'Available', 0, '', '', ''),
(278, 25, 57, '', '', '', 7, '', 'Available', 0, '', '', ''),
(279, 25, 58, '', '', '', 8, '', 'Available', 0, '', '', ''),
(280, 25, 59, '', '', '', 9, '', 'Available', 0, '', '', ''),
(281, 25, 60, 'Test', 'Test', 'abraham1@cube.rw', 10, '', 'Registered', 1886, 'c46f166287e5ac96686cbdd7e6f05e448593bc93fe60427d2d02ca1cf8698c54', 'e3796ae838835da0b6f6ea37bcf8bcb7', 'e32d9e318ddec5aba2d83ab5d17cb770658d43e1486f08c492a926876d6d877b'),
(282, 25, 61, '', '', '', 11, '', 'Available', 0, '', '', ''),
(283, 25, 62, '', '', '', 12, '', 'Available', 0, '', '', ''),
(284, 25, 63, '', '', '', 13, '', 'Available', 0, '', '', ''),
(285, 25, 64, '', '', '', 14, '', 'Available', 0, '', '', ''),
(286, 25, 65, '', '', '', 15, '', 'Available', 0, '', '', ''),
(287, 25, 66, '', '', '', 16, '', 'Available', 0, '', '', ''),
(288, 25, 67, '', '', '', 17, '', 'Available', 0, '', '', ''),
(289, 25, 68, '', '', '', 18, '', 'Available', 0, '', '', ''),
(290, 25, 69, '', '', '', 19, '', 'Available', 0, '', '', ''),
(291, 25, 70, '', '', '', 20, '', 'Available', 0, '', '', ''),
(292, 25, 71, '', '', '', 21, '', 'Available', 0, '', '', ''),
(293, 25, 72, '', '', '', 22, '', 'Available', 0, '', '', ''),
(294, 25, 73, '', '', '', 23, '', 'Available', 0, '', '', ''),
(295, 25, 74, '', '', '', 24, '', 'Available', 0, '', '', ''),
(296, 25, 75, '', '', '', 25, '', 'Available', 0, '', '', ''),
(297, 25, 76, '', '', '', 26, '', 'Available', 0, '', '', ''),
(298, 25, 77, '', '', '', 27, '', 'Available', 0, '', '', ''),
(299, 25, 78, '', '', '', 28, '', 'Available', 0, '', '', ''),
(300, 25, 79, '', '', '', 29, '', 'Available', 0, '', '', ''),
(301, 25, 80, '', '', '', 30, '', 'Available', 0, '', '', ''),
(302, 25, 81, '', '', '', 31, '', 'Available', 0, '', '', ''),
(303, 25, 82, '', '', '', 32, '', 'Available', 0, '', '', ''),
(304, 25, 83, '', '', '', 33, '', 'Available', 0, '', '', ''),
(305, 25, 84, '', '', '', 34, '', 'Available', 0, '', '', ''),
(306, 25, 85, '', '', '', 35, '', 'Available', 0, '', '', ''),
(307, 25, 86, '', '', '', 36, '', 'Available', 0, '', '', ''),
(308, 25, 87, '', '', '', 37, '', 'Available', 0, '', '', ''),
(309, 25, 88, '', '', '', 38, '', 'Available', 0, '', '', ''),
(310, 25, 89, '', '', '', 39, '', 'Available', 0, '', '', ''),
(311, 25, 90, '', '', '', 40, '', 'Available', 0, '', '', ''),
(312, 25, 91, '', '', '', 41, '', 'Available', 0, '', '', ''),
(313, 25, 92, '', '', '', 42, '', 'Available', 0, '', '', ''),
(314, 25, 93, '', '', '', 43, '', 'Available', 0, '', '', ''),
(315, 25, 94, '', '', '', 44, '', 'Available', 0, '', '', ''),
(316, 25, 95, '', '', '', 45, '', 'Available', 0, '', '', ''),
(317, 25, 96, '', '', '', 46, '', 'Available', 0, '', '', ''),
(318, 25, 97, '', '', '', 47, '', 'Available', 0, '', '', ''),
(319, 25, 98, '', '', '', 48, '', 'Available', 0, '', '', ''),
(320, 25, 99, '', '', '', 49, '', 'Available', 0, '', '', ''),
(321, 25, 100, '', '', '', 50, '', 'Available', 0, '', '', ''),
(322, 25, 101, '', '', '', 51, '', 'Available', 0, '', '', ''),
(323, 25, 102, '', '', '', 52, '', 'Available', 0, '', '', ''),
(324, 25, 103, '', '', '', 53, '', 'Available', 0, '', '', ''),
(325, 25, 104, '', '', '', 54, '', 'Available', 0, '', '', ''),
(326, 25, 105, '', '', '', 55, '', 'Available', 0, '', '', ''),
(327, 25, 106, '', '', '', 56, '', 'Available', 0, '', '', ''),
(328, 25, 107, '', '', '', 57, '', 'Available', 0, '', '', ''),
(329, 25, 108, '', '', '', 58, '', 'Available', 0, '', '', ''),
(330, 25, 109, '', '', '', 59, '', 'Available', 0, '', '', ''),
(331, 25, 110, '', '', '', 60, '', 'Available', 0, '', '', ''),
(332, 25, 111, '', '', '', 61, '', 'Available', 0, '', '', ''),
(333, 25, 112, '', '', '', 62, '', 'Available', 0, '', '', ''),
(334, 25, 113, '', '', '', 63, '', 'Available', 0, '', '', ''),
(335, 25, 114, '', '', '', 64, '', 'Available', 0, '', '', ''),
(336, 25, 115, '', '', '', 65, '', 'Available', 0, '', '', ''),
(337, 25, 116, '', '', '', 66, '', 'Available', 0, '', '', ''),
(338, 25, 117, '', '', '', 67, '', 'Available', 0, '', '', ''),
(339, 25, 118, '', '', '', 68, '', 'Available', 0, '', '', ''),
(340, 25, 119, '', '', '', 69, '', 'Available', 0, '', '', ''),
(341, 25, 120, '', '', '', 70, '', 'Available', 0, '', '', ''),
(342, 25, 121, '', '', '', 71, '', 'Available', 0, '', '', ''),
(343, 25, 122, '', '', '', 72, '', 'Available', 0, '', '', ''),
(344, 25, 123, '', '', '', 73, '', 'Available', 0, '', '', ''),
(345, 25, 124, '', '', '', 74, '', 'Available', 0, '', '', ''),
(346, 25, 125, '', '', '', 75, '', 'Available', 0, '', '', ''),
(347, 25, 126, '', '', '', 76, '', 'Available', 0, '', '', ''),
(348, 25, 127, '', '', '', 77, '', 'Available', 0, '', '', ''),
(349, 25, 128, '', '', '', 78, '', 'Available', 0, '', '', ''),
(350, 25, 129, '', '', '', 79, '', 'Available', 0, '', '', ''),
(351, 25, 130, '', '', '', 80, '', 'Available', 0, '', '', ''),
(352, 25, 131, '', '', '', 81, '', 'Available', 0, '', '', ''),
(353, 25, 132, 'Test', 'Test', 'abraham1@cube.rw', 82, '', 'Invited', 0, '43b91b96e27400efc0de6e59a590955b421c43a109ebb10fd521c6a02b99428f', '138bb0696595b338afbab333c555292a', '5439c85186f69b7c9bb5e435d9b6019de8080deb1e5af56bbb4fdc6b69d13aed'),
(354, 25, 133, '', '', '', 83, '', 'Available', 0, '', '', ''),
(355, 25, 134, '', '', '', 84, '', 'Available', 0, '', '', ''),
(356, 25, 135, '', '', '', 85, '', 'Available', 0, '', '', ''),
(357, 25, 136, '', '', '', 86, '', 'Available', 0, '', '', ''),
(358, 25, 137, '', '', '', 87, '', 'Available', 0, '', '', ''),
(359, 25, 138, '', '', '', 88, '', 'Available', 0, '', '', ''),
(360, 25, 139, '', '', '', 89, '', 'Available', 0, '', '', ''),
(361, 25, 140, '', '', '', 90, '', 'Available', 0, '', '', ''),
(362, 25, 141, '', '', '', 91, '', 'Available', 0, '', '', ''),
(363, 25, 142, '', '', '', 92, '', 'Available', 0, '', '', ''),
(364, 25, 143, '', '', '', 93, '', 'Available', 0, '', '', ''),
(365, 25, 144, '', '', '', 94, '', 'Available', 0, '', '', ''),
(366, 25, 145, '', '', '', 95, '', 'Available', 0, '', '', ''),
(367, 25, 146, '', '', '', 96, '', 'Available', 0, '', '', ''),
(368, 25, 147, '', '', '', 97, '', 'Available', 0, '', '', ''),
(369, 25, 148, '', '', '', 98, '', 'Available', 0, '', '', ''),
(370, 25, 149, 'Test', 'Test', 'abraham1@cube.rw', 99, '', 'Invited', 0, '1dcb1f61ae34adcbad4e84eb854bac107b47e528ab5dac11657fed8bd514177c', 'd709f38ef758b5066ef31b18039b8ce5', '270db7328049a3c2ca47ead606a820a974eb94a545307d45946971cf523d997d'),
(371, 25, 150, 'Test', 'Test', 'abraham1@cube.rw', 100, '', 'Invited', 0, '0cddbfd1035441adfd13cb3d9256d2d7eb27128c7157ce945844cc653417221b', '41f1f19176d383480afa65d325c06ed0', '2fdd8e26b5de249d220697c5e9abc34a0822dcfc25c13025fa03901d06c66a6d'),
(372, 25, 151, '', '', '', 101, '', 'Available', 0, '', '', ''),
(373, 25, 152, '', '', '', 102, '', 'Available', 0, '', '', ''),
(374, 25, 153, '', '', '', 103, '', 'Available', 0, '', '', ''),
(375, 25, 154, '', '', '', 104, '', 'Available', 0, '', '', ''),
(376, 25, 155, '', '', '', 105, '', 'Available', 0, '', '', ''),
(377, 25, 156, '', '', '', 106, '', 'Available', 0, '', '', ''),
(378, 25, 157, '', '', '', 107, '', 'Available', 0, '', '', ''),
(379, 25, 158, '', '', '', 108, '', 'Available', 0, '', '', ''),
(380, 25, 159, '', '', '', 109, '', 'Available', 0, '', '', ''),
(381, 25, 160, '', '', '', 110, '', 'Available', 0, '', '', ''),
(382, 25, 161, '', '', '', 111, '', 'Available', 0, '', '', ''),
(383, 25, 162, '', '', '', 112, '', 'Available', 0, '', '', ''),
(384, 25, 163, '', '', '', 113, '', 'Available', 0, '', '', ''),
(385, 25, 164, '', '', '', 114, '', 'Available', 0, '', '', ''),
(386, 25, 165, '', '', '', 115, '', 'Available', 0, '', '', ''),
(387, 25, 166, '', '', '', 116, '', 'Available', 0, '', '', ''),
(388, 25, 167, '', '', '', 117, '', 'Available', 0, '', '', ''),
(389, 25, 168, '', '', '', 118, '', 'Available', 0, '', '', ''),
(390, 25, 169, '', '', '', 119, '', 'Available', 0, '', '', ''),
(391, 25, 170, '', '', '', 120, '', 'Available', 0, '', '', ''),
(392, 25, 171, '', '', '', 121, '', 'Available', 0, '', '', ''),
(393, 25, 172, '', '', '', 122, '', 'Available', 0, '', '', ''),
(394, 25, 173, '', '', '', 123, '', 'Available', 0, '', '', ''),
(395, 25, 174, '', '', '', 124, '', 'Available', 0, '', '', ''),
(396, 25, 175, '', '', '', 125, '', 'Available', 0, '', '', ''),
(397, 25, 176, '', '', '', 126, '', 'Available', 0, '', '', ''),
(398, 25, 177, 'Test', 'Test', 'abraham1@cube.rw', 127, '', 'Invited', 0, 'fb0cf1a1c92339a31424bba09abcec3601af522e72d02025ffa3ed14ca7d5c5a', 'b7b16ecf8ca53723593894116071700c', '015b4747b9c665cf1d0701c478a69bf561e18d50bcffd9765463cda1a8fd7281'),
(399, 25, 178, '', '', '', 128, '', 'Available', 0, '', '', ''),
(400, 25, 179, '', '', '', 129, '', 'Available', 0, '', '', ''),
(401, 25, 180, '', '', '', 130, '', 'Available', 0, '', '', ''),
(402, 25, 181, '', '', '', 131, '', 'Available', 0, '', '', ''),
(403, 25, 182, '', '', '', 132, '', 'Available', 0, '', '', ''),
(404, 25, 183, '', '', '', 133, '', 'Available', 0, '', '', ''),
(405, 25, 184, '', '', '', 134, '', 'Available', 0, '', '', ''),
(406, 25, 185, '', '', '', 135, '', 'Available', 0, '', '', ''),
(407, 25, 186, '', '', '', 136, '', 'Available', 0, '', '', ''),
(408, 25, 187, '', '', '', 137, '', 'Available', 0, '', '', ''),
(409, 25, 188, '', '', '', 138, '', 'Available', 0, '', '', ''),
(410, 25, 189, '', '', '', 139, '', 'Available', 0, '', '', ''),
(411, 25, 190, '', '', '', 140, '', 'Available', 0, '', '', ''),
(412, 25, 191, '', '', '', 141, '', 'Available', 0, '', '', ''),
(413, 25, 192, '', '', '', 142, '', 'Available', 0, '', '', ''),
(414, 25, 193, '', '', '', 143, '', 'Available', 0, '', '', ''),
(415, 25, 194, '', '', '', 144, '', 'Available', 0, '', '', ''),
(416, 25, 195, '', '', '', 145, '', 'Available', 0, '', '', ''),
(417, 25, 196, '', '', '', 146, '', 'Available', 0, '', '', ''),
(418, 25, 197, 'Test', 'Test', 'abraham1@cube.rw', 147, '', 'Registered', 1890, 'fb41c225f1edae3e0e874e83825eb516db3f24b0d8cade7d0a2bd7341168c7dc', 'd1f255a373a3cef72e03aa9d980c7eca', 'c7dd83e6b878006ff006f78162c70e28807d2b7cdee904301b752b47fd588f1f'),
(419, 25, 197, '', '', '', 147, '', 'Available', 0, '', '', ''),
(420, 25, 198, 'Test', 'Test', 'abraham01@cube.rw', 148, '', 'Invited', 1891, 'ad39959663079df32d6b89ec4c09d7838537210eccd4b16bd0e2d671babc04ba', 'b6f0479ae87d244975439c6124592772', 'ded58558cd24a3490ae693004fc5099017777083200b4004d1aaa2f23822bc88'),
(421, 25, 198, '', '', '', 148, '', 'Available', 0, '', '', ''),
(422, 25, 199, '', '', '', 149, '', 'Available', 0, '', '', ''),
(423, 25, 199, '', '', '', 149, '', 'Available', 0, '', '', ''),
(424, 0, 10, 'Test', 'Test', 'abraham01@cube.rw', 0, '', 'Invited', 0, '', '', ''),
(425, 0, 10, 'Test', 'Test', 'abraham@cube.rw', 10, '', 'Invited', 0, '15f9c023a064c2f2f091c6bdad9e442792ba25dd7808125eee417e434e915140', '25b2822c2f5a3230abfadd476e8b04c9', '59f4200a73f879e66a2841998c85d59ee77a9b8cf0d6add047da3147b08dc671'),
(426, 0, 8, 'Test', 'Test', 'abraham@cube.rw', 0, '', 'Invited', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_token`
--

CREATE TABLE `subscriber_token` (
  `ID` int(11) NOT NULL,
  `user_ID` double NOT NULL,
  `hash` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriber_token`
--

INSERT INTO `subscriber_token` (`ID`, `user_ID`, `hash`) VALUES
(1, 1, '616e0a38f378e5fb9a429547267c25128b958efdcf2c3d7a3437852675db1dd0'),
(2, 5, '16fa3234c99a81551a5e6bfebd228c7f291f957791b834488e5356c3d80691fa'),
(3, 7, '9775c5f570ae7069c4b7d359ac38e1de8877d20a2e42938c57da689a0559c620'),
(4, 8, '6414b4a60efefce626ba8f7ec2d244038969afe143a8ff0af18b811719e7b62b'),
(5, 9, 'fe6ce2ba5760a56a6ad36e48f3cd975c7c84a29a93490c7b7a007f0a4f7eb2d2'),
(6, 12, 'f425ecd554a350a267451c15be9fb76b9b2ca6149c27343032edb54864084dec'),
(7, 16, '54ea345eaa7d9812dfc348082dfe4eac5b4c157f90a787878b99aeebe620ad06'),
(8, 18, '57ff0c039d83ca8fe751515713c9c4844947b47880c4578ba531f5d273bbc8d5'),
(9, 19, 'd95f678249f77f2dda25a5da215ca0c2cfa89ab0bdc069958ef050d070d82abb'),
(10, 23, '86541d2f6cf17631dcc57932417c9a20e66596c04a054291d44293e75abffa75'),
(11, 24, '533f810e0971967005ffd2f4c9433cb6d271322cc6c44b0384cd934ae6e09026'),
(12, 25, '9bc33971bf6d5067f784683b541eaa87f5837736c3ce93f88c60ab4b2228ebde');

-- --------------------------------------------------------

--
-- Table structure for table `table_browser_token`
--

CREATE TABLE `table_browser_token` (
  `ID` bigint(20) NOT NULL,
  `token` text NOT NULL,
  `hash` text NOT NULL,
  `date_issue` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_country`
--

CREATE TABLE `table_country` (
  `country_ID` int(11) NOT NULL,
  `country_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_country`
--

INSERT INTO `table_country` (`country_ID`, `country_name`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALBANIA'),
(3, 'ALGERIA'),
(4, 'AMERICAN SAMOA'),
(5, 'ANDORRA'),
(6, 'ANGOLA'),
(7, 'ANGUILLA'),
(8, 'ANTIGUA AND BARBUDA'),
(9, 'ARGENTINA'),
(10, 'ARMENIA'),
(11, 'ARUBA'),
(12, 'AUSTRALIA'),
(13, 'AUSTRIA'),
(14, 'AZERBAIJAN'),
(15, 'BAHAMAS'),
(16, 'BAHRAIN'),
(17, 'BANGLADESH'),
(18, 'BARBADOS'),
(19, 'BELARUS'),
(20, 'BELGIUM'),
(21, 'BELIZE'),
(22, 'BENIN'),
(23, 'BERMUDA'),
(24, 'BHUTAN'),
(25, 'BOLIVIA'),
(26, 'BOSNIA-HERZEGOVINA'),
(27, 'BOTSWANA'),
(28, 'BRAZIL'),
(29, 'BRITISH INDIAN OCEAN TERRITORY'),
(30, 'BRUNEI DARUSSALAM'),
(31, 'BULGARIA'),
(32, 'BURKINA FASO'),
(33, 'BURUNDI'),
(34, 'CAMBODIA'),
(35, 'CAMEROON'),
(36, 'CANADA'),
(37, 'CAPE VERDE'),
(38, 'CAYMAN ISLANDS'),
(39, 'CENTRAL AFRICAN REPUBLIC'),
(40, 'CHAD'),
(41, 'CHILE'),
(42, 'CHINA, MAINLAND'),
(43, 'COLOMBIA'),
(44, 'COMOROS'),
(45, 'CONGO'),
(46, 'COOK ISLANDS'),
(47, 'COSTA RICA'),
(48, 'COTE D\'IVOIRE'),
(49, 'CROATIA'),
(50, 'CUBA'),
(51, 'CYPRUS'),
(52, 'CZECH REPUBLIC'),
(53, 'DEMOCRATIC REPUBLIC OF CONGO'),
(54, 'DENMARK'),
(55, 'DJIBOUTI'),
(56, 'DOMINICA'),
(57, 'DOMINICAN REPUBLIC'),
(58, 'EAST TIMOR'),
(59, 'ECUADOR'),
(60, 'EGYPT'),
(61, 'EL SALVADOR'),
(62, 'EQUATORIAL GUINEA'),
(63, 'ERITREA'),
(64, 'ESTONIA'),
(65, 'ETHIOPIA'),
(66, 'FALKLAND ISLANDS (MALVINAS)'),
(67, 'FAROE ISLANDS'),
(68, 'FIJI'),
(69, 'FINLAND'),
(70, 'FRANCE'),
(71, 'FRENCH GUIANA'),
(72, 'FRENCH POLYNESIA'),
(73, 'GABON'),
(74, 'GAMBIA'),
(75, 'GEORGIA'),
(76, 'GERMANY'),
(77, 'GHANA'),
(78, 'GIBRALTAR'),
(79, 'GREECE'),
(80, 'GREENLAND'),
(81, 'GRENADA'),
(82, 'GUADELOUPE'),
(83, 'GUAM'),
(84, 'GUATEMALA'),
(85, 'GUINEA'),
(86, 'GUINEA-BISSAU'),
(87, 'GUYANA'),
(88, 'HAITI'),
(89, 'HOLY SEE (VATICAN CITY STATE)'),
(90, 'HONDURAS'),
(91, 'HONG KONG'),
(92, 'HUNGARY'),
(93, 'ICELAND'),
(94, 'INDIA'),
(95, 'INDONESIA'),
(96, 'IRAN'),
(97, 'IRAQ'),
(98, 'IRELAND'),
(99, 'ISRAEL'),
(100, 'ITALY'),
(101, 'JAMAICA'),
(102, 'JAPAN'),
(103, 'JORDAN'),
(104, 'KAZAKHSTAN'),
(105, 'KENYA'),
(106, 'KIRIBATI'),
(107, 'KOREA'),
(108, 'KOREA, DEMOCRATIC PEOPLES REPUBLIC'),
(109, 'KUWAIT'),
(110, 'KYRGYZSTAN'),
(111, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC'),
(112, 'LAOS'),
(113, 'LATVIA'),
(114, 'LEBANON'),
(115, 'LESOTHO'),
(116, 'LIBERIA'),
(117, 'LIBYAN ARAB JAMAHIRIYA'),
(118, 'LIECHTENSTEIN'),
(119, 'LITHUANIA'),
(120, 'LUXEMBOURG'),
(121, 'MACAU'),
(122, 'MADAGASCAR'),
(123, 'MALAWI'),
(124, 'MALAYSIA'),
(125, 'MALDIVES'),
(126, 'MALI'),
(127, 'MALTA'),
(128, 'MARSHALL ISLANDS'),
(129, 'MARTINIQUE'),
(130, 'MAURITANIA'),
(131, 'MAURITIUS'),
(132, 'MAYOTTE'),
(133, 'MEXICO'),
(134, 'MICRONESIA, FEDERATED STATES OF'),
(135, 'MOLDOVA'),
(136, 'MONACO'),
(137, 'MONGOLIA'),
(138, 'MONTENEGRO'),
(139, 'MONTSERRAT'),
(140, 'MOROCCO'),
(141, 'MOZAMBIQUE'),
(142, 'MYANMAR'),
(143, 'NAMIBIA'),
(144, 'NAURU'),
(145, 'NEPAL'),
(146, 'NETHERLANDS ANTILLES'),
(147, 'NEW CALEDONIA'),
(148, 'NEW ZEALAND'),
(149, 'NICARAGUA'),
(150, 'NIGER'),
(151, 'NIGERIA'),
(152, 'NIUE'),
(153, 'NORFOLK ISLAND'),
(154, 'NORWAY'),
(155, 'OMAN'),
(156, 'PAKISTAN'),
(157, 'PALAU'),
(158, 'PANAMA'),
(159, 'PAPUA NEW GUINEA'),
(160, 'PARAGUAY'),
(161, 'PERU'),
(162, 'PITCAIRN'),
(163, 'POLAND'),
(164, 'PORTUGAL'),
(165, 'PUERTO RICO'),
(166, 'QATAR'),
(167, 'REPUBLIC OF MACEDONIA'),
(168, 'REUNION'),
(169, 'ROMANIA'),
(170, 'RUSSIA'),
(171, 'RWANDA'),
(172, 'SAINT HELENA'),
(173, 'SAINT KITTS AND NEVIS'),
(174, 'SAINT LUCIA'),
(175, 'SAINT PIERRE AND MIQUELON'),
(176, 'SAINT VINCENT AND THE GRENADINES'),
(177, 'SAMOA'),
(178, 'SAN MARINO'),
(179, 'SAO TOME AND PRINCIPE'),
(180, 'SAUDI ARABIA'),
(181, 'SENEGAL'),
(182, 'SERBIA'),
(183, 'SEYCHELLES'),
(184, 'SIERRA LEONE'),
(185, 'SINGAPORE'),
(186, 'SLOVAKIA'),
(187, 'SLOVENIA'),
(188, 'SOLOMON ISLANDS'),
(189, 'SOMALIA'),
(190, 'SOUTH AFRICA'),
(191, 'SPAIN'),
(192, 'SRI LANKA'),
(193, 'SUDAN'),
(194, 'SURINAME'),
(195, 'SWAZILAND'),
(196, 'SWEDEN'),
(197, 'SWITZERLAND'),
(198, 'SYRIAN ARAB REPUBLIC'),
(199, 'TAIWAN'),
(200, 'TAJIKISTAN'),
(201, 'TANZANIA'),
(202, 'THAILAND'),
(203, 'THE NETHERLANDS'),
(204, 'THE PHILIPPINES'),
(205, 'TOGO'),
(206, 'TONGA'),
(207, 'TRINIDAD AND TOBAGO'),
(208, 'TUNISIA'),
(209, 'TURKEY'),
(210, 'TURKMENISTAN'),
(211, 'TUVALU'),
(212, 'UGANDA'),
(213, 'UKRAINE'),
(214, 'UNITED ARAB EMIRATES'),
(215, 'UNITED KINGDOM'),
(216, 'UNITED STATES'),
(217, 'UNITED STATES MINOR OUTLYING ISLANDS'),
(218, 'URUGUAY'),
(219, 'UZBEKISTAN'),
(220, 'VANUATU'),
(221, 'VENEZUELA'),
(222, 'VIETNAM'),
(223, 'VIRGIN ISLANDS, BRITISH'),
(224, 'VIRGIN ISLANDS, US'),
(225, 'WESTERN SAHARA'),
(226, 'YEMEN'),
(227, 'ZAMBIA'),
(228, 'ZIMBABWE\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tims_users`
--

CREATE TABLE `tims_users` (
  `ID` bigint(20) NOT NULL,
  `tim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommadation`
--
ALTER TABLE `accommadation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `app_apps`
--
ALTER TABLE `app_apps`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `app_company`
--
ALTER TABLE `app_company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `app_company_apps`
--
ALTER TABLE `app_company_apps`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `app_user_session`
--
ALTER TABLE `app_user_session`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `app_user_token`
--
ALTER TABLE `app_user_token`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cust_login`
--
ALTER TABLE `cust_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events_corporate`
--
ALTER TABLE `events_corporate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events_member`
--
ALTER TABLE `events_member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events_participant`
--
ALTER TABLE `events_participant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events_participant_category`
--
ALTER TABLE `events_participant_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events_participant_item`
--
ALTER TABLE `events_participant_item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events_request_invitation`
--
ALTER TABLE `events_request_invitation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `facegorilla_form`
--
ALTER TABLE `facegorilla_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groups_item`
--
ALTER TABLE `groups_item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pageview`
--
ALTER TABLE `pageview`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriber_category`
--
ALTER TABLE `subscriber_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriber_category_invite`
--
ALTER TABLE `subscriber_category_invite`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscriber_token`
--
ALTER TABLE `subscriber_token`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_browser_token`
--
ALTER TABLE `table_browser_token`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_country`
--
ALTER TABLE `table_country`
  ADD PRIMARY KEY (`country_ID`);

--
-- Indexes for table `tims_users`
--
ALTER TABLE `tims_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommadation`
--
ALTER TABLE `accommadation`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `app_apps`
--
ALTER TABLE `app_apps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_company`
--
ALTER TABLE `app_company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `app_company_apps`
--
ALTER TABLE `app_company_apps`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `app_user_session`
--
ALTER TABLE `app_user_session`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_user_token`
--
ALTER TABLE `app_user_token`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cust_login`
--
ALTER TABLE `cust_login`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events_corporate`
--
ALTER TABLE `events_corporate`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events_member`
--
ALTER TABLE `events_member`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events_participant`
--
ALTER TABLE `events_participant`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1902;

--
-- AUTO_INCREMENT for table `events_participant_category`
--
ALTER TABLE `events_participant_category`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `events_participant_item`
--
ALTER TABLE `events_participant_item`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `events_request_invitation`
--
ALTER TABLE `events_request_invitation`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `groups_item`
--
ALTER TABLE `groups_item`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pageview`
--
ALTER TABLE `pageview`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subscriber_category`
--
ALTER TABLE `subscriber_category`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `subscriber_category_invite`
--
ALTER TABLE `subscriber_category_invite`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `subscriber_token`
--
ALTER TABLE `subscriber_token`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_browser_token`
--
ALTER TABLE `table_browser_token`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_country`
--
ALTER TABLE `table_country`
  MODIFY `country_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `tims_users`
--
ALTER TABLE `tims_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
