-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 07:24 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `agent_id` varchar(45) NOT NULL,
  `agent_name` varchar(45) NOT NULL,
  `agent_pass` char(32) NOT NULL,
  `agent_type` varchar(9) NOT NULL,
  `agent_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Agent Information';

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `agent_name`, `agent_pass`, `agent_type`, `agent_ts`) VALUES
('jayand017', 'Jayand', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', '2017-10-20 09:09:24'),
('jayand018', 'Jayand Bharati', '9e1e06ec8e02f0a0074f2fcc6b26303b', 'Sales', '2017-10-21 10:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(9) NOT NULL AUTO_INCREMENT,
  `sale_date` varchar(10) NOT NULL,
  `cust_name` varchar(45) NOT NULL,
  `cust_email` varchar(45) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `sale_amount` int(10) NOT NULL,
  `tech_issue` varchar(225) NOT NULL,
  `soft_plan` varchar(20) NOT NULL,
  `tech_plan` varchar(20) NOT NULL,
  `remark` varchar(225) NOT NULL,
  `agent_id` varchar(45) NOT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `sale_date`, `cust_name`, `cust_email`, `cust_phone`, `sale_amount`, `tech_issue`, `soft_plan`, `tech_plan`, `remark`, `agent_id`) VALUES
(6, '21-10-2017', 'Jayand Bharati', 'jayand017@gmail.com', '8447416810', 0, '', '', '', '', 'jayand018'),
(8, '21-10-2017', 'Mich Bosh', 'mick@gmail.com', '896623434', 129, 'Antivirus Install', 'Above 5 ye', 'Above 5 ye', 'Installation made', 'jayand018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
