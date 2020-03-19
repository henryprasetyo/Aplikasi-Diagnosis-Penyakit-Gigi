-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 01:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_datalatih`
--

CREATE TABLE `tb_datalatih` (
  `kode_datalatih` int(11) NOT NULL,
  `gejala1` varchar(5) NOT NULL,
  `gejala2` varchar(5) NOT NULL,
  `gejala3` varchar(5) NOT NULL,
  `gejala4` varchar(5) NOT NULL,
  `gejala5` varchar(5) NOT NULL,
  `gejala6` varchar(5) NOT NULL,
  `gejala7` varchar(5) NOT NULL,
  `gejala8` varchar(5) NOT NULL,
  `gejala9` varchar(5) NOT NULL,
  `gejala10` varchar(5) NOT NULL,
  `gejala11` varchar(5) NOT NULL,
  `gejala12` varchar(5) NOT NULL,
  `gejala13` varchar(5) NOT NULL,
  `gejala14` varchar(5) NOT NULL,
  `gejala15` varchar(5) NOT NULL,
  `gejala16` varchar(5) NOT NULL,
  `gejala17` varchar(5) NOT NULL,
  `gejala18` varchar(5) NOT NULL,
  `gejala19` varchar(5) NOT NULL,
  `gejala20` varchar(5) NOT NULL,
  `gejala21` varchar(5) NOT NULL,
  `gejala22` varchar(5) NOT NULL,
  `gejala23` varchar(5) NOT NULL,
  `gejala24` varchar(5) NOT NULL,
  `gejala25` varchar(5) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datalatih`
--

INSERT INTO `tb_datalatih` (`kode_datalatih`, `gejala1`, `gejala2`, `gejala3`, `gejala4`, `gejala5`, `gejala6`, `gejala7`, `gejala8`, `gejala9`, `gejala10`, `gejala11`, `gejala12`, `gejala13`, `gejala14`, `gejala15`, `gejala16`, `gejala17`, `gejala18`, `gejala19`, `gejala20`, `gejala21`, `gejala22`, `gejala23`, `gejala24`, `gejala25`, `kategori`) VALUES
(1, 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(2, 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(3, 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(4, 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(5, 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(6, 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(7, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Pulpa'),
(8, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Pulpa'),
(9, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(10, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(11, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(12, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(13, 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(14, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(15, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(16, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(17, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Gingivitis'),
(18, 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Gingivitis'),
(19, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(20, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(21, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(22, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(23, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(24, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(25, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(26, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Abses Gigi'),
(27, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(28, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(29, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(30, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(31, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(32, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(33, 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Abses Gigi'),
(34, 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Abses Gigi'),
(35, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Karies'),
(36, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Karies'),
(37, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Karies'),
(38, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Karies'),
(39, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Karies'),
(40, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Karies'),
(41, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Karies'),
(42, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Karies'),
(43, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Karies'),
(44, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Karies'),
(45, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Karies'),
(46, 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Karies'),
(47, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(48, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(49, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(50, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(51, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(52, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(53, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(54, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(55, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(56, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(57, 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Periodontitis'),
(58, 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Periodontitis'),
(59, 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Perikoronitis'),
(60, 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Perikoronitis'),
(61, 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Perikoronitis'),
(62, 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Perikoronitis'),
(63, 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Perikoronitis'),
(64, 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Perikoronitis'),
(65, 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Perikoronitis'),
(66, 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Perikoronitis'),
(67, 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Perikoronitis'),
(68, 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Perikoronitis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(12) NOT NULL,
  `gejala` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `gejala`) VALUES
('G01', '1. Terdapat daging tumbuh pada gigi yang berlubang'),
('G02', '2. Gigi terasa sakit atu nyeri bila mengunyah'),
('G03', '3. Nyeri di sekitar gigi '),
('G04', '4. Gusi bengkak atau mudah berdarah'),
('G05', '5. Bau mulut tidak sedap'),
('G06', '6. Luka antara gusi dan gigi'),
('G07', '7. Benjolan di bagian kepala, leher, atau rahang'),
('G08', '8. Demam'),
('G09', '9. Nyeri pada saat menelan makanan'),
('G10', '10. Bengkak pada gusi'),
('G11', '11. Sakit pada saat membuka mulut '),
('G12', '12. Pembengkakan kelenjar getah bening di leher '),
('G13', '13. Nyeri saat gigi tertekan oleh makanan '),
('G14', '14. Nyeri pada gusi dan mulut'),
('G15', '15. Pipi menjadi membengkak'),
('G16', '16. Terdapat noda berwarna cokelat, hitam, atau putih pada permukaan gigi'),
('G17', '17. Terdapat lubang pada gigi'),
('G18', '18. Timbul rasa sakit jika terkena air dingin, dan kemasukan makanan'),
('G19', '19. Gusi terasa lunak jika disentuh.'),
('G20', '20. Ukuran gigi terlihat lebih tinggi dari biasanya'),
('G21', '21. Jarak antara satu gigi dan gigi lainnya terasa renggang.'),
('G22', '22. Gusi bengkak dan berwarna merah atau keunguan.'),
('G23', '23. Keluarnya nanah dari gusi yang terinfeksi'),
('G24', '24. Gerakan membuka dan menutup rahang menjadi terbatas, sekaligus kadang menyakitkan.'),
('G25', '25. Sulit dan sakit saat menelan makanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengujian`
--

CREATE TABLE `tb_pengujian` (
  `kode_pengujian` int(15) NOT NULL,
  `date_created` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gejala1` varchar(10) NOT NULL,
  `gejala2` varchar(10) NOT NULL,
  `gejala3` varchar(10) NOT NULL,
  `gejala4` varchar(10) NOT NULL,
  `gejala5` varchar(10) NOT NULL,
  `gejala6` varchar(10) NOT NULL,
  `gejala7` varchar(10) NOT NULL,
  `gejala8` varchar(10) NOT NULL,
  `gejala9` varchar(10) NOT NULL,
  `gejala10` varchar(10) NOT NULL,
  `gejala11` varchar(10) NOT NULL,
  `gejala12` varchar(10) NOT NULL,
  `gejala13` varchar(10) NOT NULL,
  `gejala14` varchar(10) NOT NULL,
  `gejala15` varchar(10) NOT NULL,
  `gejala16` varchar(10) NOT NULL,
  `gejala17` varchar(10) NOT NULL,
  `gejala18` varchar(10) NOT NULL,
  `gejala19` varchar(10) NOT NULL,
  `gejala20` varchar(10) NOT NULL,
  `gejala21` varchar(10) NOT NULL,
  `gejala22` varchar(10) NOT NULL,
  `gejala23` varchar(10) NOT NULL,
  `gejala24` varchar(10) NOT NULL,
  `gejala25` varchar(10) NOT NULL,
  `result` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengujian`
--

INSERT INTO `tb_pengujian` (`kode_pengujian`, `date_created`, `nama`, `email`, `gejala1`, `gejala2`, `gejala3`, `gejala4`, `gejala5`, `gejala6`, `gejala7`, `gejala8`, `gejala9`, `gejala10`, `gejala11`, `gejala12`, `gejala13`, `gejala14`, `gejala15`, `gejala16`, `gejala17`, `gejala18`, `gejala19`, `gejala20`, `gejala21`, `gejala22`, `gejala23`, `gejala24`, `gejala25`, `result`) VALUES
(38, 1575331723, 'Ahmad Mudjahid', 'amujahid@gmail.com', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P01'),
(39, 1575331749, 'Anggita', 'Anggita@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(40, 1575331867, 'Rafi Syahputra', 'rafisyahputra@gmail.com', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P03'),
(41, 1575331897, 'Fikry Ramadhana', 'fikryramadhana8@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P03'),
(42, 1575331941, 'Aisyah ', 'aisyah@gmail.com', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P04'),
(43, 1575331985, 'Annisa ', 'Annisa@yahoo.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'P03'),
(44, 1575332039, 'Siska', 'Siska12@yahoo.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'P04'),
(45, 1575332084, 'Tanti', 'Tantiti14@gmail.com', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P05'),
(46, 1575332130, 'Suci Wulandari', 'wulansuci@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'P05'),
(47, 1575332174, 'Jevin Julian', 'Jeje45@gmail.com', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P06'),
(48, 1575332224, 'Auzid Rizal', 'Rizal07@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'P06'),
(49, 1575332272, 'Dyah Aprillia', 'DyahApril4@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P03'),
(50, 1575332318, 'Rizky Anindya ', 'Rizkyan@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'P05'),
(51, 1575332377, 'Eka Putri', 'Putrieka@gmail.com', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P01'),
(52, 1575332469, 'Aulin Desi Fitriyani', 'Fitridesi@gmail.com', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P06'),
(54, 1575354525, 'Pak Deny', 'Deny@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'P03'),
(55, 1575383020, 'Ary', 'aripantoro@gmail.com', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'P06'),
(56, 1575383166, 'Novia', 'noviafrans12@gmail.com', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P01'),
(57, 1575428803, 'Dinda', 'dinda.arlyn@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(58, 1575428856, 'Bayu', 'bayuprasetya@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'P03'),
(59, 1575428899, 'Aulia Kartika', 'AuliaKart34@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P04'),
(60, 1575428945, 'Retno Wulandari', 'retnowulan@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(61, 1575428989, 'Ilham Ardiansyah', 'ilhamadi@yahoo.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(62, 1575429029, 'Maria Dwi Utami', 'Tami.maria0@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(63, 1575429080, 'Arif Aryono ', 'cumaarif@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'P02'),
(64, 1575429118, 'Fajar ', 'jarfajar@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(65, 1575429212, 'Ivan Akbar', 'Akbarrais@yahoo.com', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P04'),
(66, 1575429530, 'Risang Anggara', 'Angga@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(67, 1575429574, 'Fatimah Zahra', 'zahrafat34@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'P02'),
(68, 1575429609, 'Rizal ', 'zalifreedom@gmail.com', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(69, 1575430557, 'Hendra Dana P', 'Hendrarailfan@gmail.com', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P02'),
(70, 1575430615, 'Rafi Ardiansyah', 'ardifi@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P04'),
(71, 1575432779, 'Ristya Isyahria', 'Risti@gmail.com', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'P01'),
(72, 1575432861, 'Galih Selo AJi', 'Aji45@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'P06'),
(73, 1575887252, 'Ahmad Mudjahid', 'bayurailfan@gmail.com', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'P05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kode_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(128) NOT NULL,
  `penyebab` text NOT NULL,
  `solusi` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kode_penyakit`, `nama_penyakit`, `penyebab`, `solusi`, `saran`) VALUES
('P01', 'Pulpa', '<p align=\"justify\">Penyebab munculnya polip pulpa bermacam-macam, antara lain:</p>\r\n\r\n<li>Gigi berlubang hingga menyebabkan banyaknya struktur gigi yang hilang, terutama bagian email atau enamel</li>\r\n<li>Gigi berlubang yang tidak diperbaiki, sehingga pulpa gigi terpapar oleh bakteri.</li>\r\n<li>Gigi patah akibat cedera sehingga membuat pulpa gigi terbuka.</li>\r\n<p align=\"justify\">Selain perubahan pada struktur gigi, perubahan hormon estrogen dan progesteron serta reaksi alergi pada gigi juga diduga dapat memicu terbentuknya polip pulpa pada gigi.</p>', '<p align=\"justify\">Metode pengobatan polip pulpa tergantung pada tingkat keparahannya. Beberapa metode pengobatan tersebut adalah:</p>\r\n\r\n<li>Berkumur setiap hari selama seminggu memakai air hangat</li>\r\n<li>Bersihkan gigi memakai benang gigi atau dental floss </li> \r\n<li>Bersihkan bagian gigi yang diduga merupakan sumber sakit pada gigi memakai obat antiseptic.</li>\r\n\r\n \r\n\r\n \r\n\r\n\r\n\r\n', '<p align=\"justify\">Jika muncul daging lebih di tempat gigi yang berlubang, diharapkan agar segera berkonsultasi ke dokter secepatnya.Karena aplikasi ini digunakan hanya untuk pencegahan dini yang sifatnya insidensial.</p>\r\n\r\n'),
('P02', 'Gingivitis', '<p align=\"justify\">Gingivitis disebabkan oleh pembentukan plak akibat sisa-sisa makanan yang menempel di permukaan gigi dan bercampur dengan bakteri di mulut. Bila tidak dibersihkan, plak akan mengeras dan membentuk karang gigi.</p>\r\n\r\n<p align=\"justify\">Karang gigi memiliki lapisan luar yang lebih tebal, sehingga bakteri di dalamnya akan terlindungi dan semakin mudah berkembang biak. Apabila dibiarkan, kuman akan mengikis gusi dan menyebabkan radang gusi.</p>', '<p align=\"justify\">Untuk membantu proses pemulihan sekaligus mencegah gingivitis terjadi kembali, lakukanlah beberapa langkah sederhana berikut ini:</p>\r\n\r\n<li>Sikat gigi setelah bangun tidur dan sebelum tidur. Akan lebih baik bila menyikat gigi juga dilakukan tiap selesai makan.</li>\r\n<li>Gunakan sikat gigi yang lembut dan ganti setiap tiga atau empat bulan sekali.</li>\r\n<li>Bersihkan sela-sela gigi dengan benang gigi setidaknya satu kali sehari, dan gunakan antiseptik kumur untuk mengurangi plak di sela-sela gigi</li>.\r\n<li>Bersihkan gigi di dokter gigi, minimal dua kali dalam satu tahun. Namun bila memiliki penyakit gigi dan gusi serta berisiko terkena gingivitis, bersihkan gigi di dokter gigi lebih sering.</li>\r\n<li>Jangan merokok atau mengunyah tembakau.</li>', '<p align=\"justify\">Jika gusi masih sering bengkak dan mengalami pendarahan yang berlebih diharapkan agar segera berkonsultasi ke dokter secepatnya.Karena aplikasi ini digunakan hanya untuk pencegahan dini yang sifatnya insidensial.</p>'),
('P03', 'Abses Gigi', '<p align=\"justify\">Penyebab munculnya abses gigi adalah berkembangnya bakteri pada rongga mulut yang menyebar ke jaringan lunak dan tulang wajah dan leher. Bakteri masuk ke dalam pulpa gigi melalui rongga gigi atau retakan pada gigi penderita. Di dalam pulpa gigi sendiri terdapat beberapa pembuluh darah, saraf serta jaringan ikat.</p>\r\n\r\nBeberapa faktor yang dapat meningkatkan risiko seseorang menderita abses gigi adalah:\r\n\r\nMakanan tinggi gula. Mengonsumsi makanan dan minuman dengan kandungan gula tinggi bisa menyebabkan lubang pada gigi yang dapat berkembang menjadi abses gigi.\r\nBuruknya kebersihan gigi. Orang yang tidak melakukan perawatan gigi dan gusi dengan semestinya berisiko mengalami masalah pada gigi, termasuk abses gigi.', '<p align=\"justify\">Beberapa langkah pengobatan yang umumnya akan dilakukan untuk mengatasi abses gigi adalah:</p>\r\n\r\n<li>Hindari makanan dan minuman panas atau dingin jika membuat rasa sakit semakin parah.</li>\r\n<li>Jika memungkinkan, cobalah makan yang lunak, gunakan gigi pada sisi yang berlawanan.</li>\r\n<li>Gunakan sikat gigi yang lembut dan untuk sementara menghindari flossing di sekitar gigi yang terkena.</li>', '<p align=\"justify\">Jika terjadi pembengkakan pada gusi dan kelenjar getah bening, hingga menimbulkan sesak napas diharapkan agar segera berkonsultasi ke dokter secepatnya.Karena aplikasi ini digunakan hanya untuk pencegahan dini yang sifatnya insidensial.</p>'),
('P04', 'Karies', '<p align=\"justify\">Penyebab utama karies gigi adalah plak yang menumpuk di permukaan gigi. Plak terbentuk dari sisa-sisa makanan, kotoran, dan bakteri di dalam mulut.</p>\r\n\r\n<p align=\"justify\">Jarang sikat gigi dan sering mengonsumsi makanan yang manis dapat mempercepat pertumbuhan plak. Ketika Anda makan makanan manis, bakteri di dalam mulut akan menghasilkan asam. Asam pada plak mengikis mineral pada enamel luar gigi yang keras.</p> \r\n\r\n<p align=\"justify\">Proses terkikisnya enamel ini disebut dengan erosi enamel. Lama-lama proses erosi ini dapat menyebabkan lubang-lubang kecil pada enamel gigi. Nah, lubang inilah yang disebut dengan karies.</p>', '<p align=\"justify\">Supaya lubang pada gigi tidak semakin besar, berikut beberapa hal yang perlu Anda lakukan.</p>\r\n\r\n<li>Sikat gigi setidaknya 2 kali sehari pada pagi hari setelah sarapan dan malam hari sebelum tidur.</li>\r\n<li>Gunakan sikat gigi berbulu lembut dengan kepala sikat yang kecil atau pas di rongga mulut.</li>\r\n<li>Gunakan pasta gigi yang mengandung fluoride. Fluoride adalah mineral yang bermanfaat untuk melindungi sekaligus menjaga kekuatan enamel gigi.</li>\r\n<li>Bersihkan gigi dengan benang (floss) untuk membersihkan sela-sela gigi setidaknya 1 kali sehari setelah menyikat gigi.</li> \r\n<li>Bersihkan pula lidah Anda secara rutin untuk mencegah penumpukkan plak di permukaan lidah.</li>\r\n<li>Kumur dengan air atau obat kumur setelah mengonsumsi makanan dan cemilan.</li> \r\n<li>Banyak minum air putih untuk merangsang produksi air liur.</li>\r\n<li>Batasi makanan yang terlalu manis, asin, berlemak, dan mengandung banyak minyak.</li>\r\n<li>Perbanyak makan sayur-sayuran dan buah-buahan.</li>\r\n<li>Rajin konsultasi ke dokter gigi untuk pembersihan dan pemeriksaan gigi.</li>', '<p align=\"justify\">Jika lubang pada gigi sudah membesar dan menyebabkan rasa nyeri hebat yang dapat mengganggu aktivitas sehari-hari anda diharapkan agar segera berkonsultasi ke dokter secepatnya.Karena aplikasi ini digunakan hanya untuk pencegahan dini yang sifatnya insidensial.</p>'),
('P05', 'Periodontitis', '<p align=\"justify\">Periodontitis disebabkan oleh radang gusi yang tidak terobati. Peradangan ini dipicu oleh penumpukan plak sehingga lambat laun membentuk karang gigi sebagai media berkembangbiaknya bakteri.</p>\r\n\r\n<p align=\"justify\">Bakteri yang awalnya hanya mengiritasi bagian gusi di sekitar gigi (gingiva), lambat laun menyebabkan terbentuknya celah atau kantong pada gusi yang memisahkan antara jaringan gusi dengan gigi sehingga menyebabkan gigi mudah tanggal. Bakteri tersebut akan menginfeksi lebih dalam lagi hingga merusak jaringan dan tulang di dalam gusi.</p>\r\n\r\n<p align=\"justify\">Selain radang gusi yang tidak terobati, terdapat beberapa faktor yang bisa meningkatkan risiko seseorang terkena periodontitis. Di antanya adalah merokok, obesitas, kurang gizi, konsumsi obat-obatan yang mengurangi produksi air liur, perubahan hormon seperti saat menstruasi dan kehamilan, atau penyakit-penyakit tertentu, seperti diabetes dan leukemia.</p>', '<p align=\"justify\">Pengobatan periodontitis adalah mengurangi peradangan, menghilangkan celah antara gusi dan gigi, serta mengatasi penyebab peradangan gusi tersebut. Jika periodontitis belum parah maka lakukan :\r\n\r\n<li>Gosoklah gigi tiap selesai makan atau paling tidak 2 kali sehari, yaitu di waktu pagi hari dan malam hari menjelang tidur.</li> \r\n<li>Gunakan sikat gigi yang lembut dan ganti sikat gigi setelah dipakai selama 3-4 bulan.</li> \r\n<li>Bersihkan sela-sela gigi menggunakan benang gigi.</li>', '<p align=\"justify\">Jika terjadi pembengkakan pada gusi dan mengalami pendarahan yang berlebih segeralah datang ke dokter gigi secepatnya untuk penanganan lebih lanjut</p>'),
('P06', 'Perikoronitis', '<p align=\"justify\">Perikoronitis pada awalnya disebabkan oleh susunan gigi yang tidak sempurna. Penyebabnya bisa karena jarak antar gigi terlalu rapat atau terlalu renggang. Kondisi ini dapat membuat sisa makanan mudah terselip di sela-sela gigi dan menjadi sulit untuk dibersihkan. Sisa makanan yang dibiarkan menempel di gigi akan membentuk tumpukan plak dan memungkinkan bakteri untuk masuk ke jaringan gusi. Bakteri yang masuk ke dalam jaringan akan menginfeksi gusi dan mengakibatkan peradangan.</p>', '<p align=\"justify\">Ada beberapa metode pengobatan perikoronitis, tergantung tingkat keparahannya, meliputi pemberian obat untuk meredakan nyeri, operasi untuk memperbaiki jaringan gusi yang meradang atau pencabutan gigi, serta perawatan gigi secara mandiri untuk mencegah berkembangnya penyakit ini.</p>\r\n\r\n<b>Obat</b>\r\n<p align=\"justify\">Obat-obatan yang digunakan dalam kasus perikoronitis adalah paracetamol atau ibuprofen untuk mengurangi rasa nyeri sementara.\r\n\r\n<b>Upaya mandiri untuk mendukung pengobatan</b>\r\n<p align=\"justify\">Untuk mendukung efektivitas pengobatan dan mencegah gejala perikoronitis bertambah parah, penderita disarankan untuk:</p>\r\n\r\n<li>Menjaga kebersihan gigi dengan cara menyikat gigi dan membersihkan sela-sela gigi dengan benang gigi (dental flossing) minimal dua kali sehari</li>\r\n<li>Rajin berkumur dengan obat kumur atau larutan garam</li>\r\n', '<p align=\"justify\">Jika rasa nyeri tak kunjung reda dalam jangka waktu seminggu diharapkan agar segera berkonsultasi ke dokter secepatnya.Karena aplikasi ini digunakan hanya untuk pencegahan dini yang sifatnya insidensial.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Henry Prasetyo', 'henryprasetyou@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  ADD PRIMARY KEY (`kode_datalatih`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_pengujian`
--
ALTER TABLE `tb_pengujian`
  ADD PRIMARY KEY (`kode_pengujian`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  MODIFY `kode_datalatih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tb_pengujian`
--
ALTER TABLE `tb_pengujian`
  MODIFY `kode_pengujian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
