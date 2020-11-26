-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 04:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--
CREATE DATABASE IF NOT EXISTS `healthone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `healthone`;

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `insured` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`id`, `name`, `cat`, `insured`) VALUES
(1, 'Amfexa', 'ADHD-middelen', 'yes'),
(2, 'Concerta', 'ADHD-middelen', 'yes'),
(3, 'Ritalin', 'ADHD-middelen', 'yes'),
(4, 'Ebixa', 'Alzheimer-middelen', 'no'),
(5, 'Exelon', 'Alzheimer-middelen', 'yes'),
(6, 'Galantamine', 'Alzheimer-middelen', 'yes'),
(7, 'Acetazolamide', 'Anti-epileptica', 'yes'),
(8, 'Carbamazepine', 'Anti-epileptica', 'yes'),
(9, 'Depakine', 'Anti-epileptica', 'no'),
(10, 'Amitriptyline', 'Antidepressiva en lithium', 'no'),
(11, 'Anafranil', 'Antidepressiva en lithium', 'yes'),
(12, 'Aurorix', 'Antidepressiva en lithium', 'yes'),
(13, 'Aerius', 'Antihistaminica', 'no'),
(14, 'Allerfre', 'Antihistaminica', 'yes'),
(15, 'Allergietablet Cetirizine', 'Antihistaminica', 'yes'),
(16, 'Catapresan', 'Antihypertensiva', 'no'),
(17, 'Clonidine', 'Antihypertensiva', 'no'),
(18, 'Dixarit', 'Antihypertensiva', 'yes'),
(19, 'Abilify', 'Antipsychotica', 'yes'),
(20, 'Anatensol', 'Antipsychotica', 'yes'),
(21, 'Cisordinol', 'Antipsychotica', 'yes'),
(22, 'Alprazolam', 'Benzodiazepinen', 'yes'),
(23, 'Bromazepam', 'Benzodiazepinen', 'yes'),
(24, 'Bromazepamum', 'Benzodiazepinen', 'yes'),
(25, 'Bisoltussin', 'Hoestmiddelen', 'no'),
(26, 'Dampo bij droge hoest', 'Hoestmiddelen', 'no'),
(27, 'Darolan hoestprikkeldempend', 'Hoestmiddelen', 'yes'),
(28, 'Almogran', 'Hoofdpijnmiddelen', 'yes'),
(29, 'Almotriptan', 'Hoofdpijnmiddelen', 'yes'),
(30, 'Deseril', 'Hoofdpijnmiddelen', 'yes'),
(31, 'Detrusitol', 'Incontinentie-middelen', 'yes'),
(32, 'Dridase', 'Incontinentie-middelen', 'no'),
(33, 'Emselex', 'Incontinentie-middelen', 'yes'),
(34, 'Marinol', 'Middelen bij kanker', 'yes'),
(35, 'Revlimid', 'Middelen bij kanker', 'no'),
(36, 'Thalidomide', 'Middelen bij kanker', 'yes'),
(37, 'Antabus', 'Ontwenningsmiddelen', 'no'),
(38, 'Baclofen', 'Ontwenningsmiddelen', 'yes'),
(39, 'Champix', 'Ontwenningsmiddelen', 'yes'),
(40, 'Actiq', 'Opioïden', 'no'),
(41, 'Breakyl', 'Opioïden', 'yes'),
(42, 'Bronchicum extra sterk siroop', 'Opioïden', 'no'),
(43, 'Adartrel', 'Parkinsonmiddelen', 'yes'),
(44, 'Akineton', 'Parkinsonmiddelen', 'yes'),
(45, 'APO-go', 'Parkinsonmiddelen', 'yes'),
(46, 'Chloorpromazine', 'Maagdarmmiddelen', 'yes'),
(47, 'Levomepromazine', 'Maagdarmmiddelen', 'yes'),
(48, 'Litican', 'Maagdarmmiddelen', 'no'),
(49, 'Arava', 'Overig', 'yes'),
(50, 'Aspendos', 'Overig', 'yes'),
(51, 'Biltricide', 'Overig', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `huidigeMed` varchar(255) NOT NULL,
  `medHis` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `zknummer` varchar(12) NOT NULL,
  `geboortedatum` varchar(12) NOT NULL,
  `soortVerzekering` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `naam`, `huidigeMed`, `medHis`, `notes`, `adres`, `woonplaats`, `zknummer`, `geboortedatum`, `soortVerzekering`) VALUES
('', 'Bo-Eamonn de Snoo', '', '', '', 'Timboektoe 69', 'Ver weg', '5436798', '10-11-2001', 'All IN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pswrd` varchar(255) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pswrd`, `role`) VALUES
(1, 'Bo-Eamonn', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `med`
--
ALTER TABLE `med`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
