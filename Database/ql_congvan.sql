-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 03:44 AM
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

DROP TABLE IF EXISTS `chucvu`;
CREATE TABLE IF NOT EXISTS `chucvu` (
  `MaCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MaCV`, `TenCV`) VALUES
('CV01', 'Giám Đốc'),
('CV02', 'Nhân Viên Hành Chính'),
('CV03', 'Nhân Viên Tài Vụ'),
('CV04', 'Nhân Viên Công Nghệ Thông Tin');

-- --------------------------------------------------------

--
-- Table structure for table `congvande`
--

DROP TABLE IF EXISTS `congvande`;
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

DROP TABLE IF EXISTS `congvandi`;
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

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `MaDM` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDM` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
`ID` int(11) NOT NULL,
  `HoVaTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(4) NOT NULL,
  `Khoa` tinyint(4) NOT NULL,
  `Chucvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Manv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Maphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `HoVaTen`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`, `Chucvu`, `Manv`, `Maphong`, `MaCV`) VALUES
(1, 'Trần Thị Mỹ Hiền', 'q', 'q', 1, 0, '', 'NV01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

DROP TABLE IF EXISTS `phongban`;
CREATE TABLE IF NOT EXISTS `phongban` (
  `Maphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tenphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
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

DROP TABLE IF EXISTS `vanbancanhan`;
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
 ADD PRIMARY KEY (`ID`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
