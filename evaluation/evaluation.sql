-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2017 at 03:36 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.16-3+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `intituler` varchar(30) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matieres`
--

INSERT INTO `matieres` (`id`, `intituler`, `created`, `modified`) VALUES
(1, 'Français', '2017-02-20 19:17:52', '2017-02-22 20:14:49'),
(2, 'Anglais', '2017-02-21 20:39:03', '2017-02-21 20:39:03'),
(3, 'Physique', NULL, NULL),
(4, 'informatique', '2017-02-22 20:22:54', '2017-02-22 20:22:54'),
(5, 'Mathématique', NULL, NULL),
(6, 'Histoir', NULL, NULL),
(7, 'Sceince', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matieres_students`
--

CREATE TABLE `matieres_students` (
  `student_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matieres_students`
--

INSERT INTO `matieres_students` (`student_id`, `matiere_id`, `note`, `created`, `modified`) VALUES
(1, 1, 15, NULL, NULL),
(1, 2, 14, NULL, NULL),
(1, 3, 13, NULL, NULL),
(2, 3, NULL, NULL, NULL),
(1, 4, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL),
(1, 5, NULL, NULL, NULL),
(2, 5, NULL, NULL, NULL),
(4, 5, NULL, NULL, NULL),
(2, 6, NULL, NULL, NULL),
(4, 6, NULL, NULL, NULL),
(4, 7, NULL, NULL, NULL),
(4, 8, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nom`, `prenom`, `date_naissance`, `created`, `modified`) VALUES
(1, 'BRIEND', 'JEA', '2000-02-02', NULL, NULL),
(2, 'BRUGALLE', 'ERWAN', '2002-02-09', NULL, NULL),
(3, 'ALLON', 'LEVY', '2002-02-23', NULL, NULL),
(4, 'BACARD', 'HUGO', '2001-08-23', NULL, NULL),
(5, 'BAKER', 'MATTHEW', '2000-09-23', NULL, NULL),
(6, 'BALWE', 'CHETAN', '2001-07-23', NULL, NULL),
(7, 'BELAIR', 'LUC', '2001-02-01', NULL, NULL),
(8, 'BERKOVICH', 'VLADIMIR', '2000-02-06', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matieres_students`
--
ALTER TABLE `matieres_students`
  ADD PRIMARY KEY (`matiere_id`,`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
