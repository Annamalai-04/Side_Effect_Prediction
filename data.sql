-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2023 at 03:48 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('annamalai', 'annamalaikumar13@gmail.com', '12345'),
('anna', 'am@gmail.com', '123'),
('avc', 'ava@gmail.com', '321'),
('saha', 'saha@gmail.com', '890'),
('baba', 'baba@gmail.com', '345'),
('vim', 'vim@gmail.com', '123'),
('jim', 'jim@gmail.com', '1234'),
('vijayalakshmi', 'vijay@gmail.com', '789'),
('ram', 'siv@gmail.com', '456'),
('ed', 'ed@gmail.com', '123'),
('rajesh', 'rajesh123@gmail.com', '123'),
('', '', ''),
('', '', ''),
('sagu', 'sagu@gmail.com', '123'),
('hAM', 'ASD@gmail.com', '147'),
('CAM', 'CAM@gmail.com', '258'),
('dfs', 'sdf@gmail.com', '159'),
('fg', 'fg@gmail.com', '123'),
('fg', 'fg@gmail.com', '123'),
('DFS', 'DF@gmail.com', 'DF'),
('DFS', 'DF@gmail.com', 'DF'),
('', '', ''),
('avc8', 'am@gmail.com', '120'),
('avc8', 'am@gmail.com', '120'),
('avc8', 'am@gmail.com', '122'),
('avc8', 'am@gmail.com', '122'),
('sfgs', 'DF@gmail.com', 'df'),
('anna', 'annamalaikumar13@gmail.com', ''),
('abc', 'abc@gmail.com', ''),
('abc', 'abc@gmail.com', ''),
('akash', 'akash@gmail.com', ''),
('rajesh3', 'rajesh23@gmail.com', ''),
('rajesh3', 'rajesh23@gmail.com', ''),
('anna4', 'ame@gmail.com', '333'),
('rajesh3', 'rajesh23@gmail.com', ''),
('rajesh3', 'rajesh23@gmail.com', ''),
('rajeshf', 'rajesh1df23@gmail.com', 'fff'),
('rajeshf', 'rajesh1df23@gmail.com', 'fff'),
('fgf', 'fgf@gmail.com', '454'),
('fgf', 'fgf@gmail.com', '454'),
('dfsd', 'dfs@gmail.com', ''),
('saguvb', 'sagusd@gmail.com', ''),
('water', 'water@gmail.com', '345'),
('', '', ''),
('', '', ''),
('face', 'face@gmail.com', '1111'),
('', '', ''),
('dave', 'dave@gmail.com', '2222'),
('easwar', 'easwar@gmail.com', '3333'),
('fad', 'dad@gmail.com', ''),
('kim', 'kim@gmail.com', '555'),
('henry', 'Hanry23@gmail.com', '2323'),
('larry page', 'larry32@gmail.com', '12345678');
