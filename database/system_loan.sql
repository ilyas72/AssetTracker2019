-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2019 at 12:50 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `system_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `name`, `email`, `username`, `password`, `date_reg`) VALUES
(1, 'Administrator', 'admin@test.com', 'admin', '0192023a7bbd73250516f069df18b500', '01/01/2019');

-- --------------------------------------------------------

--
-- Table structure for table `ipad_tbl`
--

CREATE TABLE `ipad_tbl` (
  `ipad_id` int(11) NOT NULL auto_increment,
  `ipad_serial` varchar(100) NOT NULL,
  `ipad_colour` varchar(100) NOT NULL,
  `ipad_mac_id` varchar(100) NOT NULL,
  `date_purchase` varchar(100) NOT NULL,
  `ipad_name` varchar(100) NOT NULL,
  `ipad_model` varchar(50) NOT NULL,
  PRIMARY KEY  (`ipad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `ipad_tbl`
--

INSERT INTO `ipad_tbl` (`ipad_id`, `ipad_serial`, `ipad_colour`, `ipad_mac_id`, `date_purchase`, `ipad_name`, `ipad_model`) VALUES
(1, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_01', 'Ipad_Air'),
(2, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_02', 'Ipad_Air'),
(3, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_03', 'Ipad_Air'),
(4, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_04', 'Ipad_Air'),
(5, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_05', 'Ipad_Air'),
(6, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_06', 'Ipad_Air'),
(7, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_07', 'Ipad_Air'),
(8, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_08', 'Ipad_Air'),
(9, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_09', 'Ipad_Air'),
(10, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_10', 'Ipad_Air'),
(11, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_11', 'Ipad_Air'),
(12, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_12', 'Ipad_Air'),
(13, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_13', 'Ipad_Air'),
(14, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_14', 'Ipad_Air'),
(15, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_15', 'Ipad_Air'),
(16, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_16', 'Ipad_Air'),
(17, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_17', 'Ipad_Air'),
(18, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_18', 'Ipad_Air'),
(19, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_19', 'Ipad_Air'),
(20, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_20', 'Ipad_Air'),
(21, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_21', 'Ipad_Air'),
(22, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_22', 'Ipad_Air'),
(23, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_23', 'Ipad_Air'),
(24, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'Ipad_24', 'Ipad_Air'),
(25, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Ipad_25', 'Ipad_Air');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_tbl`
--

CREATE TABLE `laptop_tbl` (
  `laptop_id` int(11) NOT NULL auto_increment,
  `laptop_serial` varchar(100) NOT NULL,
  `laptop_colour` varchar(100) NOT NULL,
  `laptop_mac_id` varchar(100) NOT NULL,
  `date_purchase` varchar(100) NOT NULL,
  `laptop_name` varchar(100) NOT NULL,
  `laptop_model` varchar(50) NOT NULL,
  PRIMARY KEY  (`laptop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `laptop_tbl`
--

INSERT INTO `laptop_tbl` (`laptop_id`, `laptop_serial`, `laptop_colour`, `laptop_mac_id`, `date_purchase`, `laptop_name`, `laptop_model`) VALUES
(1, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_01', 'laptop_Air'),
(2, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_02', 'laptop_Air'),
(3, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_03', 'laptop_Air'),
(4, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_04', 'laptop_Air'),
(5, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_05', 'laptop_Air'),
(6, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_06', 'laptop_Air'),
(7, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_07', 'laptop_Air'),
(8, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_08', 'laptop_Air'),
(9, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_09', 'laptop_Air'),
(10, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_10', 'laptop_Air'),
(11, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_11', 'laptop_Air'),
(12, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_12', 'laptop_Air'),
(13, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_13', 'laptop_Air'),
(14, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_14', 'laptop_Air'),
(15, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_15', 'laptop_Air'),
(16, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_16', 'laptop_Air'),
(17, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_17', 'laptop_Air'),
(18, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_18', 'laptop_Air'),
(19, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_19', 'laptop_Air'),
(20, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_20', 'laptop_Air'),
(21, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_21', 'laptop_Air'),
(22, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_22', 'laptop_Air'),
(23, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'laptop_23', 'laptop_Air'),
(24, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'laptop_24', 'laptop_Air'),
(25, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'Laptop_25', 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `loan_ipad_tbl`
--

CREATE TABLE `loan_ipad_tbl` (
  `loan_ipad_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_from` varchar(100) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `ipad_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`loan_ipad_id`),
  KEY `FK_loan_ipads_1` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `loan_ipad_tbl`
--

INSERT INTO `loan_ipad_tbl` (`loan_ipad_id`, `name`, `date_from`, `date_to`, `staff_id`, `time_from`, `time_to`, `ipad_name`) VALUES
(6, 'Ilyas', '01/23/2019', '01/24/2019', 2, '9:00am', '5:00pm', 'Ipad_01'),
(7, 'Ilyas', '01/23/2019', '01/24/2019', 2, '9:00am', '5:00pm', 'Ipad_02');

-- --------------------------------------------------------

--
-- Table structure for table `loan_laptop_tbl`
--

CREATE TABLE `loan_laptop_tbl` (
  `loan_laptop_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_from` varchar(100) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `laptop_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`loan_laptop_id`),
  KEY `FK_loan_laptops_1` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `loan_laptop_tbl`
--

INSERT INTO `loan_laptop_tbl` (`loan_laptop_id`, `name`, `date_from`, `date_to`, `staff_id`, `time_from`, `time_to`, `laptop_name`) VALUES
(63, 'Ilyas', '01/23/2019', '01/25/2019', 2, '12:30pm', '5:00pm', 'laptop_01'),
(64, 'Ilyas', '01/23/2019', '01/25/2019', 2, '12:30pm', '5:00pm', 'laptop_02'),
(65, 'Ilyas', '01/23/2019', '01/25/2019', 2, '12:30pm', '5:00pm', 'laptop_03');

-- --------------------------------------------------------

--
-- Table structure for table `loan_netbook_tbl`
--

CREATE TABLE `loan_netbook_tbl` (
  `loan_netbook_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_from` varchar(100) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `netbook_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`loan_netbook_id`),
  KEY `FK_loan_netbooks_1` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `loan_netbook_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `netbook_tbl`
--

CREATE TABLE `netbook_tbl` (
  `netbook_id` int(11) NOT NULL auto_increment,
  `netbook_serial` varchar(100) NOT NULL,
  `netbook_colour` varchar(100) NOT NULL,
  `netbook_mac_id` varchar(100) NOT NULL,
  `date_purchase` varchar(100) NOT NULL,
  `netbook_name` varchar(100) NOT NULL,
  `netbook_model` varchar(50) NOT NULL,
  PRIMARY KEY  (`netbook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `netbook_tbl`
--

INSERT INTO `netbook_tbl` (`netbook_id`, `netbook_serial`, `netbook_colour`, `netbook_mac_id`, `date_purchase`, `netbook_name`, `netbook_model`) VALUES
(1, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_01', 'netbook_Air'),
(2, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_02', 'netbook_Air'),
(3, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_03', 'netbook_Air'),
(4, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_04', 'netbook_Air'),
(5, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_05', 'netbook_Air'),
(6, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_06', 'netbook_Air'),
(7, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_07', 'netbook_Air'),
(8, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_08', 'netbook_Air'),
(9, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_09', 'netbook_Air'),
(10, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_10', 'netbook_Air'),
(11, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_11', 'netbook_Air'),
(12, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_12', 'netbook_Air'),
(13, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_13', 'netbook_Air'),
(14, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_14', 'netbook_Air'),
(15, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_15', 'netbook_Air'),
(16, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_16', 'netbook_Air'),
(17, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_17', 'netbook_Air'),
(18, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_18', 'netbook_Air'),
(19, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_19', 'netbook_Air'),
(20, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_20', 'netbook_Air'),
(21, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_21', 'netbook_Air'),
(22, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_22', 'netbook_Air'),
(23, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_23', 'netbook_Air'),
(24, 'DMQK3ZDKF213', 'Black', 'CG764TEFJ9C9', '02/02/2015', 'netbook_24', 'netbook_Air'),
(25, 'DMQK3ZDKF185', 'White', 'CC785FEFB9C2', '02/02/2015', 'netbook_25', 'netbook_Air');

-- --------------------------------------------------------

--
-- Table structure for table `record_ipad_tbl`
--

CREATE TABLE `record_ipad_tbl` (
  `loan_ipad_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_from` varchar(100) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `ipad_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`loan_ipad_id`),
  KEY `FK_record_ipads_1` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `record_ipad_tbl`
--

INSERT INTO `record_ipad_tbl` (`loan_ipad_id`, `name`, `date_from`, `date_to`, `staff_id`, `time_from`, `time_to`, `ipad_name`) VALUES
(128, 'Ilyas', '01/23/2019', '01/24/2019', 2, '9:00am', '5:00pm', 'Ipad_01'),
(129, 'Ilyas', '01/23/2019', '01/24/2019', 2, '9:00am', '5:00pm', 'Ipad_02');

-- --------------------------------------------------------

--
-- Table structure for table `record_laptop_tbl`
--

CREATE TABLE `record_laptop_tbl` (
  `loan_laptop_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_from` varchar(100) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `laptop_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`loan_laptop_id`),
  KEY `FK_record_laptops_1` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `record_laptop_tbl`
--

INSERT INTO `record_laptop_tbl` (`loan_laptop_id`, `name`, `date_from`, `date_to`, `staff_id`, `time_from`, `time_to`, `laptop_name`) VALUES
(107, 'Ilyas', '01/23/2019', '01/25/2019', 2, '12:30pm', '5:00pm', 'laptop_01'),
(108, 'Ilyas', '01/23/2019', '01/25/2019', 2, '12:30pm', '5:00pm', 'laptop_02'),
(109, 'Ilyas', '01/23/2019', '01/25/2019', 2, '12:30pm', '5:00pm', 'laptop_03');

-- --------------------------------------------------------

--
-- Table structure for table `record_netbook_tbl`
--

CREATE TABLE `record_netbook_tbl` (
  `loan_netbook_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_from` varchar(100) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `netbook_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`loan_netbook_id`),
  KEY `FK_record_netbooks_1` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `record_netbook_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `staff_id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  PRIMARY KEY  (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`staff_id`, `name`, `email`, `username`, `password`, `date_reg`) VALUES
(2, 'Ilyas', 'ilyas@test.com', 'ilyas', '4bd7a2d45f331f2d5ea4092be1c7d1df', '01/01/2019');
