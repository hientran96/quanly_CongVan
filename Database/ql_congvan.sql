-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 06:29 AM
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
`ID` int(10) NOT NULL,
  `TenCV` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`ID`, `TenCV`) VALUES
(1, 'Giám đốc'),
(2, 'Nhân viên kinh doanh'),
(3, 'Nhân Viên Hành Chính'),
(4, 'Nhân Viên Công Nghệ Thông tin'),
(5, 'Nhân Viên Tài Vụ');

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
`ID` int(11) NOT NULL,
  `TenDM` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`ID`, `TenDM`) VALUES
(1, 'Tin tức'),
(2, 'Sự kiện');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
`ID` int(11) NOT NULL,
  `Manv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ID_chucvu` int(10) NOT NULL,
  `HoVaTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` int(10) NOT NULL,
  `Khoa` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `Manv`, `ID_chucvu`, `HoVaTen`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'NV01', 1, 'Trần Thị Mỹ Hiền', '47c5580df81fe23f3d201a711cdb6d04bc084dac', 1, 0);

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
`ID` int(10) NOT NULL,
  `Hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_danhmuc` int(10) NOT NULL,
  `ID_nguoidung` int(10) NOT NULL,
  `Ngaydang` datetime NOT NULL,
  `Tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `Noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`ID`, `Hinhanh`, `Tieude`, `ID_danhmuc`, `ID_nguoidung`, `Ngaydang`, `Tomtat`, `Noidung`) VALUES
(1, 'tintuc.jpg', 'Bộ trưởng Tài chính: Đã truy thu hơn 3.000 tỷ đồng chuyển giá', 1, 1, '2017-11-16 10:22:53', 'Bộ trưởng Tài chính: Đã truy thu hơn 3.000 tỷ đồng chuyển giá', '<p><strong>Năm 2017 truy thu hơn 3.000 tỷ đồng chuyển gi&aacute;</strong></p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Dung-2a-7500-1510802102.jpg" src="https://i-kinhdoanh.vnecdn.net/2017/11/16/Dung-2a-7500-1510802102_600x0.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Bộ trưởng Đinh Tiến Dũng</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Bộ trưởng T&agrave;i ch&iacute;nh thừa nhận chuyển gi&aacute; l&agrave; vấn đề&nbsp;bức x&uacute;c của x&atilde; hội thời gian qua. Về ph&aacute;p l&yacute;, năm 1995 Bộ T&agrave;i ch&iacute;nh đ&atilde; c&oacute; văn bản hướng dẫn kiểm so&aacute;t chuyển gi&aacute;. Thời gian gần đ&acirc;y tiếp tục ho&agrave;n thiện c&aacute;c ch&iacute;nh s&aacute;ch. Năm 2017, Bộ đ&atilde; tr&igrave;nh Ch&iacute;nh phủ ban h&agrave;nh Nghị định 20 về quản l&yacute; thuế với doanh nghiệp ph&aacute;t sinh giao dịch li&ecirc;n kết v&agrave; ban h&agrave;nh th&ocirc;ng tư, dựa tr&ecirc;n kinh nghiệm của OECD.&nbsp;</p>\r\n'),
(2, 'sukien.jpg', 'Loạt phát ngôn kinh điển của các thầy cô', 2, 1, '2017-11-21 01:50:04', 'Từ năm này qua năm khác, dù có thế nào đi chăng nữa thì chỉ cần đã từng là học sinh, bạn sẽ thuộc lòng luôn loạt phát ngôn kinh điển này của các thầy cô nhà mình.', '<h3>C&acirc;u n&oacute;i định mệnh đ&acirc;y rồi!</h3>\r\n\r\n<p><a href="https://kenh14cdn.com/2017/artboard-1-copy-4-1511116257322.jpg" target="_blank" title=""><img alt="Cứ đến 20/11 là lại phải nhắc loạt phát ngôn kinh điển của các thầy cô - Ảnh 13." id="img_cf2867b0-cd57-11e7-9276-132d33386523" src="https://kenh14cdn.com/2017/artboard-1-copy-4-1511116257322.jpg" title="Cứ đến 20/11 là lại phải nhắc loạt phát ngôn kinh điển của các thầy cô - Ảnh 13." /></a></p>\r\n\r\n<hr />\r\n<h3>Mỗi lần bực lắm thầy c&ocirc; mới n&oacute;i như thế n&agrave;y, v&agrave; lại kh&ocirc;ng đứa n&agrave;o d&aacute;m ho he, chỉ c&oacute; c&uacute;i mặt.</h3>\r\n\r\n<p><a href="https://kenh14cdn.com/2017/artboard-1-copy-6-1511116257328.jpg" target="_blank" title=""><img alt="Cứ đến 20/11 là lại phải nhắc loạt phát ngôn kinh điển của các thầy cô - Ảnh 15." id="img_cfaa41e0-cd57-11e7-a25b-193f9a5fe505" src="https://kenh14cdn.com/2017/artboard-1-copy-6-1511116257328.jpg" title="Cứ đến 20/11 là lại phải nhắc loạt phát ngôn kinh điển của các thầy cô - Ảnh 15." /></a></p>\r\n'),
(3, 'sukien1.jpg', 'Thầy giáo Việt đi vòng quanh thế giới, lập bản đồ giá phở đã ăn ở 45 quốc gia', 1, 1, '2017-11-21 01:56:54', 'Dừng chân tại đất nước nào, thầy Việt cũng thử ăn phở để đỡ nhớ nhà và ấm bụng trong chuyến đi xa. Mục đích khi lập tấm bản đồ giá phở này của thầy giáo trẻ chính là để dạy học sinh về cờ của các quốc gia cũng như giá cả ở từng đất nước.', '<p>Đặt ch&acirc;n đến mỗi quốc gia, thầy Việt đều t&igrave;m đến nơi b&aacute;n m&oacute;n phở đầu ti&ecirc;n. Thầy đ&atilde; cẩn thận ghi ch&eacute;p gi&aacute; cả cũng như địa điểm m&igrave;nh từng ăn phở tr&ecirc;n tấm bản đồ k&egrave;m theo l&aacute; cờ của mỗi đất nước.</p>\r\n\r\n<p><a href="https://kenh14cdn.com/2017/23559772102149050239185517893502473526286603n-1510998059152.jpg" target="_blank" title="Bản đồ phở Việt của thầy giáo 8X đi vòng quanh thế giới."><img alt="Thầy giáo Việt đi vòng quanh thế giới, lập bản đồ giá phở đã ăn ở 45 quốc gia - Ảnh 1." id="img_98178490-cc44-11e7-9da4-bb419998686b" src="https://kenh14cdn.com/2017/23559772102149050239185517893502473526286603n-1510998059152.jpg" title="Thầy giáo Việt đi vòng quanh thế giới, lập bản đồ giá phở đã ăn ở 45 quốc gia - Ảnh 1." /></a></p>\r\n\r\n<p>Bản đồ phở Việt của thầy gi&aacute;o 8X đi v&ograve;ng quanh thế giới.</p>\r\n'),
(4, 'tintuc2.jpg', 'Ông Nguyễn Xuân Anh bị bãi nhiệm chức Chủ tịch HĐND Đà Nẵng', 1, 1, '2017-11-24 10:44:44', '48 trên tổng số 49 đại biểu đã bỏ phiếu tán thành bãi nhiệm chức Chủ tịch và đại biểu HĐND với ông Nguyễn Xuân Anh trong phiên họp bất thường sáng nay.', '<p>Biểu quyết bằng h&igrave;nh thức giơ tay sau phi&ecirc;n thảo luận k&iacute;n,&nbsp;48/49 đại biểu t&aacute;n th&agrave;nh việc b&atilde;i nhiệm&nbsp;tương đương tỷ lệ&nbsp;97,95%. Chỉ một đại biểu vắng mặt l&agrave; &ocirc;ng Nguyễn Xu&acirc;n Anh - người đ&atilde; c&oacute; đơn xin ph&eacute;p trước kỳ họp v&agrave; được chấp thuận.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="ong-nguyen-xuan-anh-bi-bai-nhiem-chuc-chu-tich-hdnd-da-nang" src="https://i-vnexpress.vnecdn.net/2017/11/24/hdnd-1626-1511488640.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&Ocirc;ng Nguyễn Nho Trung chủ tr&igrave; kỳ họp bất thường xem x&eacute;t b&atilde;i&nbsp;nhiệm chức Chủ tịch HĐND TP Đ&agrave; Nẵng với &ocirc;ng Nguyễn Xu&acirc;n Anh. Ảnh:&nbsp;<em>Nguyễn Đ&ocirc;ng.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&Ocirc;ng Nguyễn Nho Trung n&oacute;i trong ph&aacute;t biểu khai mạc rằng đ&acirc;y l&agrave; nội&nbsp;dung quan trọng, cần c&oacute; sự xem x&eacute;t to&agrave;n diện, nghi&ecirc;m t&uacute;c, đồng thuận. &quot;T&ocirc;i đề nghị đại biểu ph&aacute;t huy d&acirc;n chủ, n&ecirc;u cao tinh thần tr&aacute;ch nhiệm trong thảo luận&quot;, &ocirc;ng Trung n&oacute;i.</p>\r\n');

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
 ADD PRIMARY KEY (`ID`);

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
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Manv` (`Manv`), ADD UNIQUE KEY `ID_chucvu` (`ID_chucvu`), ADD UNIQUE KEY `ID_chucvu_2` (`ID_chucvu`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vanbancanhan`
--
ALTER TABLE `vanbancanhan`
 ADD PRIMARY KEY (`Sohieu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
