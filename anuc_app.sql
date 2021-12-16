-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 07:33 PM
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
-- Database: `anuc_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `aauth_groups`
--

CREATE TABLE `aauth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_groups`
--

INSERT INTO `aauth_groups` (`id`, `name`, `definition`) VALUES
(1, 'Admin', 'Super Admin Group'),
(2, 'Default', 'Default Access Group'),
(3, 'QA_Admin', 'Head of quality assurance'),
(4, 'QA', 'Quality Assurance personnel group'),
(5, 'Registrar', 'Allows all the registrars to access the system'),
(6, 'Super', 'The highest previliage in the sysem.');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perms`
--

CREATE TABLE `aauth_perms` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_group`
--

CREATE TABLE `aauth_perm_to_group` (
  `perm_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_user`
--

CREATE TABLE `aauth_perm_to_user` (
  `perm_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_pms`
--

CREATE TABLE `aauth_pms` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text,
  `date` datetime DEFAULT NULL,
  `read` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_system_variables`
--

CREATE TABLE `aauth_system_variables` (
  `id` int(11) UNSIGNED NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_users`
--

CREATE TABLE `aauth_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_login_attempt` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `ip_address` text,
  `login_attempts` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_users`
--

INSERT INTO `aauth_users` (`id`, `email`, `pass`, `name`, `banned`, `last_login`, `last_activity`, `last_login_attempt`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `ip_address`, `login_attempts`) VALUES
(15, 'ntiamoahstudent@yahoo.com', '02de8983bca9a1725a717b2d583a35562b989e66f7ec90d02d081b5a5af46a49', 'ntiamoahstudent', 0, '2018-07-10 01:07:16', '2018-07-10 01:07:16', '2018-07-10 01:00:00', NULL, NULL, NULL, NULL, '::1', NULL),
(16, 'ntiamoahreg@yahoo.com', '94014f8aab10d529168647d91714a91af51a5ef670225ffe3835e0460dd61a46', 'ntiamoahreg', 0, '2018-07-09 09:21:42', '2018-07-09 09:21:42', '2018-07-09 09:00:00', NULL, '2018-07-12 00:00:00', 'LeFcT1bmSN389tQ4', NULL, '::1', NULL),
(17, 'ntiamoahadmin@yahoo.com', '772c01cbab281ea227de1224cbadcb957efb8e7c1e4111adce5d4ff6db011e84', 'ntiamoahadmin', 0, '2018-07-09 07:06:34', '2018-07-09 07:06:34', '2018-07-09 07:00:00', NULL, '2018-07-12 00:00:00', 'EYtuVhMAbQdCSscg', NULL, '::1', NULL),
(18, 'annabelle@me.com', '05ee011e318c76d2995571ab58b95712b45702539241ca2f4c2af6de5bf1420c', 'annabelle', 0, '2018-07-09 13:32:24', '2018-07-09 13:32:24', '2018-07-09 13:00:00', NULL, '2018-07-12 00:00:00', 'Y0ku2dbMp58wSstP', NULL, '::1', NULL),
(19, 'alfredsosu@gmail.com', 'f29fb4972e84ea5e08ea865cba87f7958097f5578b23c7c532e064318193ec15', 'alfredsosu', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(20, 'sosualfred1@gmail.com', '99257a07e20535831df61f5083977d5ff309008ebbf75f3ee7e2f83f3a73b445', 'sosualfred1', 0, '2018-07-10 00:02:12', '2018-07-10 00:02:12', '2018-07-10 00:00:00', NULL, '2018-07-13 00:00:00', 'xTmVZzXwQc58WH4R', NULL, '::1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_to_group`
--

CREATE TABLE `aauth_user_to_group` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_user_to_group`
--

INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
(15, 2),
(16, 5),
(17, 1),
(18, 2),
(19, 2),
(20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_variables`
--

CREATE TABLE `aauth_user_variables` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `completiondate` date DEFAULT NULL,
  `sectionno` int(11) NOT NULL,
  `starteddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `processed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `userid`, `applicantid`, `completiondate`, `sectionno`, `starteddate`, `processed`) VALUES
(14, '15', 'ANU-AP18-0001', '0000-00-00', 8, '0000-00-00 00:00:00', 0),
(15, '', 'ANU-AP18-0002', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(16, '', 'ANU-AP18-0003', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(17, '', 'ANU-AP18-0004', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(18, '', 'ANU-AP18-0005', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(19, '', 'ANU-AP18-0006', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(20, '', 'ANU-AP18-0007', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(21, '', 'ANU-AP18-0008', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(22, '', 'ANU-AP18-0009', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(23, '', 'ANU-AP18-0010', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(24, '', 'ANU-AP18-0011', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(25, '', 'ANU-AP18-0012', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(26, '', 'ANU-AP18-0013', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(27, '', 'ANU-AP18-0014', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(28, '', 'ANU-AP18-0015', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(29, '', 'ANU-AP18-0016', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(30, '', 'ANU-AP18-0017', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(31, '', 'ANU-AP18-0018', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(32, '', 'ANU-AP18-0019', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(33, '', 'ANU-AP18-0020', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(34, '', 'ANU-AP18-0021', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(35, '', 'ANU-AP18-0022', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(36, '', 'ANU-AP18-0023', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(37, '', 'ANU-AP18-0024', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(38, '', 'ANU-AP18-0025', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(39, '', 'ANU-AP18-0026', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(40, '', 'ANU-AP18-0027', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(41, '', 'ANU-AP18-0028', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(42, '', 'ANU-AP18-0029', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(43, '', 'ANU-AP18-0030', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(44, '', 'ANU-AP18-0031', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(45, '', 'ANU-AP18-0032', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(46, '', 'ANU-AP18-0033', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(47, '', 'ANU-AP18-0034', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(48, '', 'ANU-AP18-0035', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(49, '', 'ANU-AP18-0036', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(50, '', 'ANU-AP18-0037', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(51, '', 'ANU-AP18-0038', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(52, '', 'ANU-AP18-0039', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(53, '', 'ANU-AP18-0040', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(54, '', 'ANU-AP18-0041', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(55, '', 'ANU-AP18-0042', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(56, '', 'ANU-AP18-0043', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(57, '', 'ANU-AP18-0044', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(58, '', 'ANU-AP18-0045', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(59, '', 'ANU-AP18-0046', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(60, '', 'ANU-AP18-0047', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(61, '', 'ANU-AP18-0048', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(62, '', 'ANU-AP18-0049', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(63, '', 'ANU-AP18-0050', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(64, '', 'ANU-AP18-0051', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(65, '', 'ANU-AP18-0052', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(66, '', 'ANU-AP18-0053', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(67, '', 'ANU-AP18-0054', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(68, '', 'ANU-AP18-0055', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(69, '', 'ANU-AP18-0056', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(70, '', 'ANU-AP18-0057', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(71, '', 'ANU-AP18-0058', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(72, '', 'ANU-AP18-0059', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(73, '', 'ANU-AP18-0060', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(74, '', 'ANU-AP18-0061', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(75, '', 'ANU-AP18-0062', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(76, '', 'ANU-AP18-0063', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(77, '', 'ANU-AP18-0064', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(78, '', 'ANU-AP18-0065', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(79, '', 'ANU-AP18-0066', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(80, '', 'ANU-AP18-0067', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(81, '', 'ANU-AP18-0068', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(82, '', 'ANU-AP18-0069', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(83, '18', 'ANU-AP18-0070', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(84, '', 'ANU-AP18-0071', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(85, '', 'ANU-AP18-0072', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(86, '', 'ANU-AP18-0073', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(87, '', 'ANU-AP18-0074', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(88, '', 'ANU-AP18-0075', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(89, '', 'ANU-AP18-0076', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(90, '', 'ANU-AP18-0077', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(91, '', 'ANU-AP18-0078', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(92, '', 'ANU-AP18-0079', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(93, '', 'ANU-AP18-0080', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(94, '', 'ANU-AP18-0081', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(95, '', 'ANU-AP18-0082', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(96, '', 'ANU-AP18-0083', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(97, '', 'ANU-AP18-0084', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(98, '', 'ANU-AP18-0085', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(99, '', 'ANU-AP18-0086', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(100, '', 'ANU-AP18-0087', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(101, '', 'ANU-AP18-0088', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(102, '', 'ANU-AP18-0089', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(103, '', 'ANU-AP18-0090', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(104, '', 'ANU-AP18-0091', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(105, '', 'ANU-AP18-0092', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(106, '', 'ANU-AP18-0093', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(107, '', 'ANU-AP18-0094', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(108, '', 'ANU-AP18-0095', '0000-00-00', 1, '0000-00-00 00:00:00', 0),
(109, '20', 'ANU-AP18-0096', '0000-00-00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `sign` varchar(10) NOT NULL,
  `dateaffirmed` date NOT NULL,
  `signdoc` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `applicantid`, `sign`, `dateaffirmed`, `signdoc`) VALUES
(3, 'ANU-AP17-0003', 'a.h', '2017-08-10', ''),
(4, 'ANU-AP18-0007', 'a.N', '2018-01-17', ''),
(5, 'ANU-AP18-0001', 'a.n', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `declarations`
--

CREATE TABLE `declarations` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `applicanttitle` varchar(10) NOT NULL,
  `applicantfirstname` varchar(100) NOT NULL,
  `applicantmiddlename` varchar(100) NOT NULL,
  `applicantlastname` varchar(100) NOT NULL,
  `endotitle` varchar(100) NOT NULL,
  `endofirstname` varchar(100) NOT NULL,
  `endolastname` varchar(100) NOT NULL,
  `endomiddlename` varchar(100) NOT NULL,
  `endoaddress1` varchar(100) NOT NULL,
  `endostreet` varchar(100) NOT NULL,
  `endostate` varchar(100) NOT NULL,
  `endocity` varchar(100) NOT NULL,
  `endocountry` varchar(100) NOT NULL,
  `endophone` varchar(100) NOT NULL,
  `endoemail` varchar(100) NOT NULL,
  `endoprofession` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `declarations`
--

INSERT INTO `declarations` (`id`, `applicantid`, `applicanttitle`, `applicantfirstname`, `applicantmiddlename`, `applicantlastname`, `endotitle`, `endofirstname`, `endolastname`, `endomiddlename`, `endoaddress1`, `endostreet`, `endostate`, `endocity`, `endocountry`, `endophone`, `endoemail`, `endoprofession`) VALUES
(3, 'ANU-AP17-0003', 'Mr.', 'Alfred', '', 'Ntiamoah', 'Dr.', 'Kwadwo', 'Anane', '', 'p. o. box 16', '', '', 'Kumasi', 'Ghana', '002335766577', 'anane@yahoo.com', NULL),
(4, 'ANU-AP18-0007', 'Mr.', 'Andrews', 'Kwame', 'Abam', 'Dr.', 'Alfred', 'Ntiamoah', 'Kwame', 'P. o. box 12', 'kwadaso', 'Ashanti', 'Kumasi', 'Ghana', '00233544686951', 'ntimoah376@yahoo.com', NULL),
(5, 'ANU-AP18-0001', '', 'askfldjksafj', 'ljdsflaks', 'lfakdslfjdl', 'Mrs.', 'asldfjslka', 'ljfaldsfj', 'lfjalsdfj', 'jfaldsfjs', 'jfdlakfjs', 'jfalkfj', 'ljfaljd', 'ljfalkfj', '984958495454', 'ljdsflaks@flsdjf.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educationinformation`
--

CREATE TABLE `educationinformation` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `recentschool` varchar(50) NOT NULL,
  `recentschoolyear` varchar(100) NOT NULL,
  `firstotherschoolname` varchar(50) NOT NULL,
  `firstotherschoollocation` varchar(100) NOT NULL,
  `firstotherschoolfrom` varchar(15) NOT NULL,
  `firstotherschoolto` varchar(15) NOT NULL,
  `secondotherschoolname` varchar(100) NOT NULL,
  `secondotherschoollocation` varchar(100) NOT NULL,
  `secondotherschoolfrom` varchar(15) NOT NULL,
  `secondotherschoolto` varchar(15) NOT NULL,
  `thirdotherschoolname` varchar(100) NOT NULL,
  `thirdotherschoollocation` varchar(100) NOT NULL,
  `thirdotherschoolfrom` varchar(15) NOT NULL,
  `thirdotherschoolto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationinformation`
--

INSERT INTO `educationinformation` (`id`, `applicantid`, `recentschool`, `recentschoolyear`, `firstotherschoolname`, `firstotherschoollocation`, `firstotherschoolfrom`, `firstotherschoolto`, `secondotherschoolname`, `secondotherschoollocation`, `secondotherschoolfrom`, `secondotherschoolto`, `thirdotherschoolname`, `thirdotherschoollocation`, `thirdotherschoolfrom`, `thirdotherschoolto`) VALUES
(3, 'ANU-AP17-0003', 'Opoku Ware Senior High School', '2006', 'Opoku Ware School', 'Kumasi', '2006-08-15', '2009-08-11', '', '', '', '', '', '', '', ''),
(4, 'ANU-AP18-0007', 'Opoku Ware School', '2018', 'St. Leo International School', 'Kumasi', '2004-01-07', '2007-01-09', '', '', '', '', '', '', '', ''),
(5, 'ANU-AP18-0001', 'LSKDJFASL', '2018', 'LALKDFJDLKS', 'JFLAKSDJFL', '2018-07-18', '2018-07-17', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `centerno` varchar(20) DEFAULT NULL,
  `indexno` varchar(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `applicantid`, `centerno`, `indexno`, `name`) VALUES
(18, 'ANU-AP17-0003', 'wasce2323445', 'wasce2323445', 'WASSCE'),
(19, 'ANU-AP18-0007', '23545234', '234523452', 'WASSCE'),
(22, 'ANU-AP18-0001', 'ajsl;fdkjaf;', 'kladsjfdljfsd', 'WASSCE');

-- --------------------------------------------------------

--
-- Table structure for table `familyinformation`
--

CREATE TABLE `familyinformation` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `ffirstname` varchar(100) NOT NULL,
  `fmiddlename` varchar(100) NOT NULL,
  `flastname` varchar(100) NOT NULL,
  `fprofession` varchar(100) NOT NULL,
  `fhighestqualification` varchar(100) NOT NULL,
  `faddressl1` varchar(100) NOT NULL,
  `faddressl2` varchar(100) NOT NULL,
  `ftelephone` varchar(100) NOT NULL,
  `femail` varchar(100) NOT NULL,
  `mfirstname` varchar(100) NOT NULL,
  `mmiddlename` varchar(100) NOT NULL,
  `mlastname` varchar(100) NOT NULL,
  `mprofession` varchar(100) NOT NULL,
  `mhighestqualification` varchar(100) NOT NULL,
  `maddressl1` varchar(100) NOT NULL,
  `maddressl2` varchar(100) NOT NULL,
  `mtelephone` varchar(100) NOT NULL,
  `memail` varchar(100) NOT NULL,
  `gfirstname` varchar(100) NOT NULL,
  `gmiddlename` varchar(100) NOT NULL,
  `glastname` varchar(100) NOT NULL,
  `gprofession` varchar(100) NOT NULL,
  `ghighestqualification` varchar(100) NOT NULL,
  `gaddressl1` varchar(100) NOT NULL,
  `gaddressl2` varchar(100) NOT NULL,
  `gtelephone` varchar(100) NOT NULL,
  `emergencyphone` varchar(20) NOT NULL,
  `gemail` varchar(100) NOT NULL,
  `gmaritalstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familyinformation`
--

INSERT INTO `familyinformation` (`id`, `applicantid`, `ffirstname`, `fmiddlename`, `flastname`, `fprofession`, `fhighestqualification`, `faddressl1`, `faddressl2`, `ftelephone`, `femail`, `mfirstname`, `mmiddlename`, `mlastname`, `mprofession`, `mhighestqualification`, `maddressl1`, `maddressl2`, `mtelephone`, `memail`, `gfirstname`, `gmiddlename`, `glastname`, `gprofession`, `ghighestqualification`, `gaddressl1`, `gaddressl2`, `gtelephone`, `emergencyphone`, `gemail`, `gmaritalstatus`) VALUES
(3, 'ANU-AP17-0003', 'John', 'Kwame', 'Ntiamoah', 'Farmer', 'HND', 'Kumasi, Kwadaso', '', '0544686951', '', 'Agnes', '', 'Afua', 'Trader', 'HND', 'Kumasi -kwadaso', '', '0544686951', '', '', '', '', ' ', '', ' ', '', '', '0243567654', '', ''),
(4, 'ANU-AP18-0007', 'John', 'Kwame', 'Ntiamoah', 'Farmer', 'HND', 'plot 12, Block V, Kwadaso', 'kumasi Ghana', '00233544686951', '', 'Agnes', 'Afua', 'Boaduwaah', 'Farmer', 'HND', 'Plot 12, Block v, kwadaso', 'Kumasi Ghana', '00233544686951', '', '', '', '', ' ', '', ' ', '', '', '00233544686951', '', ''),
(5, 'ANU-AP18-0001', 'lkashfdkjf', 'aekjfdhdls', 'lhfdakljfh', 'dfaf', 'HND', 'ASKJFDH', 'KAHFDSKFJH', '56757656', 'SAFDFSA@LFD.COM', 'LSDKFJLFKJDS', 'LFAJLFK', 'LJAFLKDSJ', 'LJ', 'HND', 'DSALKFJD', 'ALDFJD', '0984059498', 'JKADSLF@LSJFD.COM', '', '', '', ' ', '', ' ', '', '', '04395834095', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `tran_type` varchar(200) NOT NULL,
  `payment_instrument` varchar(200) NOT NULL,
  `invoice_id` varchar(200) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `buyer_lastname` varchar(100) NOT NULL,
  `buyer_phone` varchar(100) NOT NULL,
  `narration` varchar(300) NOT NULL,
  `buyer_firstname` varchar(100) NOT NULL,
  `gw_invoice_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `as_at` varchar(100) NOT NULL,
  `channel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE `miscellaneous` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `needaccomodation` tinyint(1) NOT NULL,
  `aboutspecific` varchar(50) DEFAULT NULL,
  `satreading` float DEFAULT NULL,
  `satwriting` float DEFAULT NULL,
  `satmaths` float DEFAULT NULL,
  `satdate` date DEFAULT NULL,
  `prize1` varchar(100) DEFAULT NULL,
  `prize2` varchar(100) DEFAULT NULL,
  `aboutother` varchar(20) DEFAULT NULL,
  `aboutfriend` varchar(20) DEFAULT NULL,
  `aboutnews` varchar(20) DEFAULT NULL,
  `aboutalumnus` varchar(20) DEFAULT NULL,
  `aboutagent` varchar(20) DEFAULT NULL,
  `abouttele` varchar(20) DEFAULT NULL,
  `aboutstudent` varchar(20) DEFAULT NULL,
  `aboutradio` varchar(20) DEFAULT NULL,
  `anydisability` tinyint(1) DEFAULT NULL,
  `whatdisability` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `miscellaneous`
--

INSERT INTO `miscellaneous` (`id`, `applicantid`, `needaccomodation`, `aboutspecific`, `satreading`, `satwriting`, `satmaths`, `satdate`, `prize1`, `prize2`, `aboutother`, `aboutfriend`, `aboutnews`, `aboutalumnus`, `aboutagent`, `abouttele`, `aboutstudent`, `aboutradio`, `anydisability`, `whatdisability`) VALUES
(3, 'ANU-AP17-0003', 0, '', 0, 0, 0, '0000-00-00', '', '', '', '', '', '', '', 'true', '', '', 0, ''),
(4, 'ANU-AP18-0007', 0, '', 700, 540, 640, '2018-01-17', '', '', 'false', 'true', '', 'true', '', 'true', 'true', '', 0, ''),
(5, 'ANU-AP18-0001', 0, 'Internet', 0, 0, 0, '0000-00-00', '', '', 'true', '', '', '', 'true', 'true', '', '', 0, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `my_deficiency`
--

CREATE TABLE `my_deficiency` (
  `deficiency_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `decision` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_deficiency`
--

INSERT INTO `my_deficiency` (`deficiency_id`, `student_id`, `subject_name`, `remarks`, `decision`) VALUES
(7, 1, 'lsjfd lfja', 'asdfasdfadf', 'Not submitted'),
(9, 1, 'wqerqwer', 'erqwrewq', 'Not submitted'),
(10, 2, 'adsfdfadf', 'dsafdafd', 'Not submitted'),
(13, 2, 'adsfdfadfafadasfd', 'asdfsdafdfad', 'Not submitted'),
(14, 2, 'adsfdfadfafadasfd', 'asdfsdafdfad', 'Not submitted'),
(15, 6, 'lsakjfdlk', 'afdfasdfd', 'Not submitted'),
(16, 7, 'Maths', 'require', 'Not submitted'),
(17, 7, 'English', 'require', 'Not submitted'),
(18, 7, 'Science', 'require', 'Not submitted'),
(19, 7, 'Social', 'require', 'Not submitted'),
(20, 7, 'Elective Maths', 'require', 'Not submitted'),
(21, 1, 'dfadsfdaf', 'adfasdfasdf', 'Not submitted'),
(22, 1, 'dfadsfdaf', 'adfasdfasdf', 'Not submitted');

-- --------------------------------------------------------

--
-- Table structure for table `my_deficiency_graph_data`
--

CREATE TABLE `my_deficiency_graph_data` (
  `id` int(11) NOT NULL,
  `deficiency_count` int(11) NOT NULL,
  `student_count` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_deficiency_graph_data`
--

INSERT INTO `my_deficiency_graph_data` (`id`, `deficiency_count`, `student_count`, `date`) VALUES
(1, 0, 1, '2018-02-04 22:54'),
(2, 0, 1, '2018-02-04 22:54'),
(3, 0, 2, '2018-02-04 22:55'),
(4, 0, 2, '2018-02-04 22:55'),
(5, 0, 3, '2018-02-04 23:03'),
(6, 0, 4, '2018-02-04 23:03'),
(7, 0, 5, '2018-02-04 23:04'),
(8, 1, 5, '2018-02-04 23:15'),
(9, 1, 5, '2018-02-04 23:16'),
(10, 2, 5, '2018-02-04 23:16'),
(11, 2, 5, '2018-02-04 23:16'),
(12, 3, 5, '2018-02-04 23:17'),
(13, 4, 5, '2018-02-04 23:17'),
(14, 5, 5, '2018-02-04 23:17'),
(15, 6, 5, '2018-02-04 23:17'),
(16, 5, 5, '2018-02-04 23:17'),
(17, 5, 6, '02-04 23:51'),
(18, 5, 7, '02-04 23:52'),
(19, 6, 7, '02-04 23:53'),
(20, 7, 7, '02-04 23:53'),
(21, 8, 7, '02-04 23:53'),
(22, 9, 7, '02-04 23:54'),
(23, 10, 7, '02-04 23:54'),
(24, 11, 7, '02-04 23:54'),
(25, 12, 7, '02-05 00:03'),
(26, 13, 7, '02-05 00:03');

-- --------------------------------------------------------

--
-- Table structure for table `my_new_student`
--

CREATE TABLE `my_new_student` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_new_student`
--

INSERT INTO `my_new_student` (`id`, `student_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `my_notification`
--

CREATE TABLE `my_notification` (
  `note_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `note_time` varchar(500) NOT NULL,
  `viewed_users` varchar(100) NOT NULL,
  `group_ids` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_notification`
--

INSERT INTO `my_notification` (`note_id`, `message`, `note_time`, `viewed_users`, `group_ids`, `user_name`) VALUES
(1, 'Alfred (lsadkfjalsd) is newly added to database', '2018-02-04 22:54:55', '', '1,5,3,6', 'ntiamoah376'),
(2, 'anna (lkjkljljlkj) is newly added to database', '2018-02-04 22:55:47', '', '1,5,3,6', 'ntiamoah376'),
(3, 'czvsafdlkjfk (dhgdghgdhfg) is newly added to database', '2018-02-04 23:03:20', '', '1,5,3,6', 'ntiamoah376'),
(4, 'lajsd flsajdlf (alsdfjdljadlfkja sdl) is newly added to database', '2018-02-04 23:03:40', '', '1,5,3,6', 'ntiamoah376'),
(5, 'd.sgfsfjd flkjdlkj (ajsdlkfja sdlfkajsdf) is newly added to database', '2018-02-04 23:04:00', '', '1,5,3,6', 'ntiamoah376'),
(6, 'Alfred (lsadkfjalsd) has 1 deficiencies', '2018-02-04 23:15:50', '', '1,5,3,6', 'ntiamoah376'),
(7, 'Alfred (lsadkfjalsd) information was updated', '2018-02-04 23:15:50', '', '1,5,3,6', 'ntiamoah376'),
(8, 'Alfred (lsadkfjalsd) has 2 deficiencies', '2018-02-04 23:16:10', '', '1,5,3,6', 'ntiamoah376'),
(9, 'Alfred (lsadkfjalsd) information was updated', '2018-02-04 23:16:10', '', '1,5,3,6', 'ntiamoah376'),
(10, 'Alfred (lsadkfjalsd) has 3 deficiencies', '2018-02-04 23:16:15', '', '1,5,3,6', 'ntiamoah376'),
(11, 'Alfred (lsadkfjalsd) information was updated', '2018-02-04 23:16:15', '', '1,5,3,6', 'ntiamoah376'),
(12, 'Alfred (lsadkfjalsd) has 2 deficiencies', '2018-02-04 23:16:43', '', '1,5,3,6', 'ntiamoah376'),
(13, 'Alfred (lsadkfjalsd) information was updated', '2018-02-04 23:16:43', '', '1,5,3,6', 'ntiamoah376'),
(14, 'anna (lkjkljljlkj) has 1 deficiencies', '2018-02-04 23:17:22', '', '1,5,3,6', 'ntiamoah376'),
(15, 'anna (lkjkljljlkj) information was updated', '2018-02-04 23:17:22', '', '1,5,3,6', 'ntiamoah376'),
(16, 'anna (lkjkljljlkj) has 2 deficiencies', '2018-02-04 23:17:28', '', '1,5,3,6', 'ntiamoah376'),
(17, 'anna (lkjkljljlkj) information was updated', '2018-02-04 23:17:28', '', '1,5,3,6', 'ntiamoah376'),
(18, 'anna (lkjkljljlkj) has 3 deficiencies', '2018-02-04 23:17:33', '', '1,5,3,6', 'ntiamoah376'),
(19, 'anna (lkjkljljlkj) information was updated', '2018-02-04 23:17:34', '', '1,5,3,6', 'ntiamoah376'),
(20, 'anna (lkjkljljlkj) has 4 deficiencies', '2018-02-04 23:17:34', '', '1,5,3,6', 'ntiamoah376'),
(21, 'anna (lkjkljljlkj) information was updated', '2018-02-04 23:17:34', '', '1,5,3,6', 'ntiamoah376'),
(22, 'anna (lkjkljljlkj) has 3 deficiencies', '2018-02-04 23:17:40', '', '1,5,3,6', 'ntiamoah376'),
(23, 'anna (lkjkljljlkj) information was updated', '2018-02-04 23:17:41', '', '1,5,3,6', 'ntiamoah376'),
(24, 'Ntiamoah (ajldjfalsdjf) is newly added to database', '2018-02-04 23:51:58', '', '1,5,3,6', 'ntiamoah376'),
(25, 'Yaw (lsafjdflajsdl) is newly added to database', '2018-02-04 23:52:21', '', '1,5,3,6', 'ntiamoah376'),
(26, 'Ntiamoah (ajldjfalsdjf) has 1 deficiencies', '2018-02-04 23:53:06', '', '1,5,3,6', 'ntiamoah376'),
(27, 'Ntiamoah (ajldjfalsdjf) information was updated', '2018-02-04 23:53:06', '', '1,5,3,6', 'ntiamoah376'),
(28, 'Yaw (lsafjdflajsdl) has 1 deficiencies', '2018-02-04 23:53:49', '', '1,5,3,6', 'ntiamoah376'),
(29, 'Yaw (lsafjdflajsdl) information was updated', '2018-02-04 23:53:49', '', '1,5,3,6', 'ntiamoah376'),
(30, 'Yaw (lsafjdflajsdl) has 2 deficiencies', '2018-02-04 23:53:56', '', '1,5,3,6', 'ntiamoah376'),
(31, 'Yaw (lsafjdflajsdl) information was updated', '2018-02-04 23:53:56', '', '1,5,3,6', 'ntiamoah376'),
(32, 'Yaw (lsafjdflajsdl) has 3 deficiencies', '2018-02-04 23:54:08', '', '1,5,3,6', 'ntiamoah376'),
(33, 'Yaw (lsafjdflajsdl) information was updated', '2018-02-04 23:54:08', '', '1,5,3,6', 'ntiamoah376'),
(34, 'Yaw (lsafjdflajsdl) has 4 deficiencies', '2018-02-04 23:54:14', '', '1,5,3,6', 'ntiamoah376'),
(35, 'Yaw (lsafjdflajsdl) information was updated', '2018-02-04 23:54:14', '', '1,5,3,6', 'ntiamoah376'),
(36, 'Yaw (lsafjdflajsdl) has 5 deficiencies', '2018-02-04 23:54:48', '', '1,5,3,6', 'ntiamoah376'),
(37, 'Yaw (lsafjdflajsdl) information was updated', '2018-02-04 23:54:48', '', '1,5,3,6', 'ntiamoah376'),
(38, 'Alfred (lsadkfjalsd) has 3 deficiencies', '2018-02-05 00:03:17', '', '1,5,3,6', 'ntiamoah376'),
(39, 'Alfred (lsadkfjalsd) information was updated', '2018-02-05 00:03:17', '', '1,5,3,6', 'ntiamoah376'),
(40, 'Alfred (lsadkfjalsd) has 4 deficiencies', '2018-02-05 00:03:21', '', '1,5,3,6', 'ntiamoah376'),
(41, 'Alfred (lsadkfjalsd) information was updated', '2018-02-05 00:03:21', '', '1,5,3,6', 'ntiamoah376');

-- --------------------------------------------------------

--
-- Table structure for table `my_period`
--

CREATE TABLE `my_period` (
  `period_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_period`
--

INSERT INTO `my_period` (`period_id`, `student_id`, `start_date`, `end_date`) VALUES
(1, 1, '2018-02-07', '2018-02-21'),
(2, 2, '2018-02-05', '2018-02-24'),
(3, 3, '2018-02-14', '2018-02-22'),
(4, 4, '2018-02-21', '2018-02-22'),
(5, 5, '2018-02-22', '2018-02-14'),
(6, 6, '2018-02-13', '2017-11-07'),
(7, 7, '2018-02-15', '2018-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `my_school`
--

CREATE TABLE `my_school` (
  `school_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `year_attended` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_school`
--

INSERT INTO `my_school` (`school_id`, `student_id`, `name`, `program`, `stream`, `year_attended`) VALUES
(1, 1, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Regular', '2018'),
(2, 2, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Regular', '2018'),
(3, 3, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Regular', '2018'),
(4, 4, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Regular', '2018'),
(5, 5, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Evening', '2018'),
(6, 6, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Regular', '2018'),
(7, 7, 'School of Engineering', 'Bachelor of Engineering(Computer )', 'Regular', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `my_student`
--

CREATE TABLE `my_student` (
  `student_id` int(11) NOT NULL,
  `index_no` varchar(15) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `isMatured` varchar(6) NOT NULL,
  `level` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_student`
--

INSERT INTO `my_student` (`student_id`, `index_no`, `fullname`, `isMatured`, `level`) VALUES
(1, 'lsadkfjalsd', 'Alfred', 'false', '200'),
(2, 'lkjkljljlkj', 'anna', 'false', '100'),
(3, 'dhgdghgdhfg', 'czvsafdlkjfk', 'false', '100'),
(4, 'alsdfjdljadlfkj', 'lajsd flsajdlf', 'false', '100'),
(5, 'ajsdlkfja sdlfk', 'd.sgfsfjd flkjdlkj', 'false', '100'),
(6, 'ajldjfalsdjf', 'Ntiamoah', 'false', '100'),
(7, 'lsafjdflajsdl', 'Yaw', 'false', '100');

-- --------------------------------------------------------

--
-- Table structure for table `my_user_info`
--

CREATE TABLE `my_user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passwordreset`
--

CREATE TABLE `passwordreset` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `resettoken` text NOT NULL,
  `enckey` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE `personalinformation` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `othertitles` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `othernames` varchar(200) DEFAULT NULL,
  `dateofbirth` varchar(10) DEFAULT NULL,
  `placeofbirth` varchar(200) DEFAULT NULL,
  `countryofbirth` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `passportno` varchar(100) DEFAULT NULL,
  `languages` varchar(200) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `otherreligion` varchar(200) DEFAULT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `homeaddressl1` varchar(200) NOT NULL,
  `homeaddressl2` varchar(200) DEFAULT NULL,
  `mailingaddressl1` varchar(200) NOT NULL,
  `mailingaddressl2` varchar(200) DEFAULT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `hometelephone` varchar(20) NOT NULL,
  `mobiletelephone` varchar(20) DEFAULT NULL,
  `officetelephone` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`id`, `applicantid`, `title`, `othertitles`, `surname`, `firstname`, `othernames`, `dateofbirth`, `placeofbirth`, `countryofbirth`, `nationality`, `passportno`, `languages`, `bloodgroup`, `gender`, `religion`, `otherreligion`, `maritalstatus`, `homeaddressl1`, `homeaddressl2`, `mailingaddressl1`, `mailingaddressl2`, `street`, `city`, `state`, `country`, `hometelephone`, `mobiletelephone`, `officetelephone`, `email`) VALUES
(5, 'ANU-AP18-0007', 'Mr', 'Doctor', 'Abam', 'Andrews', 'Kwame', '2018-01-16', 'Koforidua', 'Ghana', 'Ghanaian', '', 'English', 'B+', 'm', 'christian', '', 'divorced', 'Plot 12, Block V, Kumasi', ' ', 'p. o. box kW 250,', '', 'Kwadaso', 'Kumasi', 'Ashanti Region', 'Ghana', '00233544686951', '00233544686951', '', 'ntimoah376@yahoo.com'),
(6, 'ANU-AP18-0001', 'Mr', '', 'Kwame', 'Alfred', 'Kwame', '2018-07-18', 'Kumasi', 'Ghana', 'Ghanaian', 'PxLJLJ1234', 'english', 'O+', 'm', 'christian', '', 'single', 'Kumasi', 'lasjfdl', 'jflasdjf dl', '', 'jfaldskjfls', 'jasdkjfl', 'jasdlkfj alsdjf', 'Afghanistan', '03948309304', '984958945849', '', 'ntiamoahme@yahoo.com'),
(7, 'ANU-AP18-0070', 'Rev', '', 'ljljljlk', 'qj', 'ljllkjlkj', '2018-07-10', 'lklj', 'Lao People\'s Democratic Republic', 'jlkj', 'ljl', 'jlj', 'A+', 'f', 'christian', '', 'single', 'kjljlk', 'lkjlk', 'jlj', '', 'lkjl', 'jlj', 'ljl', 'Kazakhstan', '345094', '283094830', '', 'Antiamoah890@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `firstchoice` varchar(100) NOT NULL,
  `secondchoice` varchar(100) NOT NULL,
  `thirdchoice` varchar(100) NOT NULL,
  `preU` varchar(3) NOT NULL,
  `enrollmenttype` varchar(20) NOT NULL,
  `entrylevel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `applicantid`, `firstchoice`, `secondchoice`, `thirdchoice`, `preU`, `enrollmenttype`, `entrylevel`) VALUES
(3, 'ANU-AP17-0003', 'Bachelor of Engineering (Computer Engineering)', 'Bachelor of Science (Hons) (Computer Science)', 'Bachelor of Engineering (Electronics & Communication Engineering)', 'No', 'fulltime', 'regular'),
(4, 'ANU-AP18-0007', 'Bachelor of Business Administration in Accounting', 'Bachelor of Business Administration in Banking and Finance', 'Bachelor of Engineering (Computer Engineering)', 'Yes', 'evening', 'regular'),
(5, 'ANU-AP18-0001', 'Bachelor of Arts in Biblical Studies with Business Administration', 'Bachelor of Engineering (Computer Engineering)', 'Bachelor of Engineering (Biomedical Engineering)', 'Yes', 'fulltime', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `resit_results`
--

CREATE TABLE `resit_results` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `grade` varchar(3) NOT NULL,
  `centerno` varchar(20) NOT NULL,
  `index` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `applicantId` varchar(20) NOT NULL,
  `iscore` tinyint(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `applicantId`, `iscore`, `name`, `date`, `grade`) VALUES
(143, 'ANU-AP17-0003', 1, 'English Language', '2017-08-16', 'A1'),
(144, 'ANU-AP17-0003', 1, 'Mathematics(core)', '2017-08-09', 'B3'),
(145, 'ANU-AP17-0003', 1, 'Integrated Science', '2017-08-18', 'C5'),
(146, 'ANU-AP17-0003', 1, 'Social Studies', '2017-08-09', 'A1'),
(147, 'ANU-AP17-0003', 0, 'Physics', '2017-08-16', 'A1'),
(148, 'ANU-AP17-0003', 0, 'Chemistry', '2017-08-16', 'B2'),
(149, 'ANU-AP17-0003', 0, 'Biology', '2017-08-01', 'A1'),
(150, 'ANU-AP17-0003', 0, 'Elective / Further Mathematics', '2017-08-09', 'B2'),
(151, 'ANU-AP18-0007', 1, 'English Language', '2018-01-10', 'B3'),
(152, 'ANU-AP18-0007', 1, 'Mathematics(core)', '2018-01-09', 'A1'),
(153, 'ANU-AP18-0007', 1, 'Integrated Science', '2018-01-16', 'B'),
(154, 'ANU-AP18-0007', 1, 'Social Studies', '2018-01-16', 'D8'),
(155, 'ANU-AP18-0007', 0, 'Auto Mechanical Work', '2018-01-10', 'C6'),
(156, 'ANU-AP18-0007', 0, 'Book Keeping', '2018-01-09', 'B2'),
(157, 'ANU-AP18-0007', 0, 'Animal Husbandry(Alternative B)', '2018-01-10', 'B2'),
(158, 'ANU-AP18-0007', 0, 'Carpentry And Joinery', '2018-01-11', 'A1'),
(175, 'ANU-AP18-0001', 1, 'English Language', '2018-07-09', 'C5'),
(176, 'ANU-AP18-0001', 1, 'Mathematics(core)', '2018-07-04', 'F9'),
(177, 'ANU-AP18-0001', 1, 'Integrated Science', '2018-07-03', 'A'),
(178, 'ANU-AP18-0001', 1, 'Social Studies', '2018-07-10', 'B3'),
(179, 'ANU-AP18-0001', 0, 'Animal Husbandry(Alternative A)', '2018-07-03', 'B3'),
(180, 'ANU-AP18-0001', 0, 'Basic Electronics / Electronics', '2018-07-08', 'D7'),
(181, 'ANU-AP18-0001', 0, 'Biology', '2018-07-11', 'D7'),
(182, 'ANU-AP18-0001', 0, 'Business Management', '2018-07-12', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `applicantid` varchar(20) NOT NULL,
  `currentschool` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `currentyear` varchar(10) NOT NULL,
  `dateenrolled` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `applicantid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `applicantid`) VALUES
(25, '8cca1b3334b639967462f9139b43cc77.png', 'ANU-AP17-0003_profile'),
(27, 'c017dca4daa582b6a774c40e19b82471.jpg', 'ANU-AP18-0007_profile'),
(28, '91a6023eaeda4f55e7b59cebd8fc343e.jpg', 'ANU-AP18-0007_transcript'),
(33, '6062e4b45c694ce000473e3e7b0fa68f.png', 'ANU-AP18-0070_profile'),
(37, 'cc6fb113bdf2b73ba96c2235b6f626c6.jpg', 'ANU-AP18-0001_transcript'),
(38, '3271375db8c24e4c5ae27989d3bc6566.jpg', 'ANU-AP18-0001_profile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perm_to_group`
--
ALTER TABLE `aauth_perm_to_group`
  ADD PRIMARY KEY (`perm_id`,`group_id`);

--
-- Indexes for table `aauth_perm_to_user`
--
ALTER TABLE `aauth_perm_to_user`
  ADD PRIMARY KEY (`perm_id`,`user_id`);

--
-- Indexes for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `full_index` (`id`,`sender_id`,`receiver_id`,`read`);

--
-- Indexes for table `aauth_system_variables`
--
ALTER TABLE `aauth_system_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_users`
--
ALTER TABLE `aauth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_user_to_group`
--
ALTER TABLE `aauth_user_to_group`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_index` (`user_id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`,`applicantid`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `declarations`
--
ALTER TABLE `declarations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `educationinformation`
--
ALTER TABLE `educationinformation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indexno` (`indexno`);

--
-- Indexes for table `familyinformation`
--
ALTER TABLE `familyinformation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `my_deficiency`
--
ALTER TABLE `my_deficiency`
  ADD PRIMARY KEY (`deficiency_id`);

--
-- Indexes for table `my_deficiency_graph_data`
--
ALTER TABLE `my_deficiency_graph_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_new_student`
--
ALTER TABLE `my_new_student`
  ADD PRIMARY KEY (`id`,`student_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `my_notification`
--
ALTER TABLE `my_notification`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `my_period`
--
ALTER TABLE `my_period`
  ADD PRIMARY KEY (`period_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `my_school`
--
ALTER TABLE `my_school`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `my_student`
--
ALTER TABLE `my_student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `index_no` (`index_no`);

--
-- Indexes for table `my_user_info`
--
ALTER TABLE `my_user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `passwordreset`
--
ALTER TABLE `passwordreset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `key` (`enckey`);

--
-- Indexes for table `personalinformation`
--
ALTER TABLE `personalinformation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `resit_results`
--
ALTER TABLE `resit_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicantid` (`applicantid`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_system_variables`
--
ALTER TABLE `aauth_system_variables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_users`
--
ALTER TABLE `aauth_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `declarations`
--
ALTER TABLE `declarations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `educationinformation`
--
ALTER TABLE `educationinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `familyinformation`
--
ALTER TABLE `familyinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `my_deficiency`
--
ALTER TABLE `my_deficiency`
  MODIFY `deficiency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `my_deficiency_graph_data`
--
ALTER TABLE `my_deficiency_graph_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `my_new_student`
--
ALTER TABLE `my_new_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `my_notification`
--
ALTER TABLE `my_notification`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `my_period`
--
ALTER TABLE `my_period`
  MODIFY `period_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `my_school`
--
ALTER TABLE `my_school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `my_student`
--
ALTER TABLE `my_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `my_user_info`
--
ALTER TABLE `my_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passwordreset`
--
ALTER TABLE `passwordreset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personalinformation`
--
ALTER TABLE `personalinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resit_results`
--
ALTER TABLE `resit_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
