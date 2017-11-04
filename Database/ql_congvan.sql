-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 07:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ql_congvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE IF NOT EXISTS `chucvu` (
  `MaCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congvande`
--

CREATE TABLE IF NOT EXISTS `congvande` (
  `SohieuCVDE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nguoiky` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nguoiduyet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaybanhanh` date NOT NULL,
  `Noibanhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaynhan` date NOT NULL,
  `Nguoinhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tongtrang` int(11) NOT NULL,
  `Loaivanban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Linhvuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Noidungtomtat` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Noidungvanban` int(200) NOT NULL,
  `Filedinhkem` bit(32) NOT NULL,
  `Ghichu` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congvandi`
--

CREATE TABLE IF NOT EXISTS `congvandi` (
  `SohieuCVD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nguoiky` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nguoiduyet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaybanhanh` date NOT NULL,
  `Noibanhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaygoi` date NOT NULL,
  `Nguoigoi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tongsotrang` int(11) NOT NULL,
  `Loaivanban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Linhvuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Noidungtomtat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Noidungvanban` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Filedinhkem` bit(32) NOT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `MaDM` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDM` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `Tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phanquyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Chucvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Manv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Dienthoai` int(11) NOT NULL,
  `Nhiemvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Maphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE IF NOT EXISTS `phongban` (
  `Maphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tenphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `Tieude` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaydang` date NOT NULL,
  `Noidung` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nguoidang` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vanbancanhan`
--

CREATE TABLE IF NOT EXISTS `vanbancanhan` (
  `Sohieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tenvanban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Loaivanban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Noibanhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Noidungvanban` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Filedinhkem` bit(32) NOT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
 ADD PRIMARY KEY (`MaCV`);

--
-- Indexes for table `congvande`
--
ALTER TABLE `congvande`
 ADD PRIMARY KEY (`SohieuCVDE`);

--
-- Indexes for table `congvandi`
--
ALTER TABLE `congvandi`
 ADD PRIMARY KEY (`SohieuCVD`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
 ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
 ADD PRIMARY KEY (`Tendangnhap`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
 ADD PRIMARY KEY (`Tieude`);

--
-- Indexes for table `vanbancanhan`
--
ALTER TABLE `vanbancanhan`
 ADD PRIMARY KEY (`Sohieu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
