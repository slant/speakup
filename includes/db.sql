-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 07, 2007 at 01:44 AM
-- Server version: 5.0.24
-- PHP Version: 5.1.6
-- 
-- Database: `speakup`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `applications`
-- 

CREATE TABLE `applications` (
  `id` int(11) NOT NULL auto_increment,
  `user_agent` text NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `datetime` datetime NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `cell_phone` varchar(32) NOT NULL,
  `other_phone` varchar(32) NOT NULL,
  `home_address` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `preferred_contact_method` varchar(32) NOT NULL,
  `shirt_size` varchar(32) NOT NULL,
  `faculty` varchar(32) NOT NULL,
  `year_of_school` int(11) NOT NULL,
  `school_address` varchar(32) NOT NULL,
  `city_of_school` varchar(32) NOT NULL,
  `emergency_contact_name` varchar(32) NOT NULL,
  `emergency_contact_address` varchar(32) NOT NULL,
  `emergency_contact_phone` varchar(32) NOT NULL,
  `week_1` int(11) NOT NULL,
  `week_2` int(11) NOT NULL,
  `week_3` int(11) NOT NULL,
  `wordup_last_year` int(11) NOT NULL,
  `student_2007` int(11) NOT NULL,
  `min_english` int(11) NOT NULL,
  `attend_activities` int(11) NOT NULL,
  `christian_perspective` int(11) NOT NULL,
  `agreement` int(11) NOT NULL,
  `essay` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ;
