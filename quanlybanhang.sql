-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 04:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE IF NOT EXISTS `chitietdathang` (
`id` int(10) NOT NULL,
  `id_donhang` int(10) NOT NULL,
  `id_mathang` int(10) NOT NULL,
  `tenhang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(5) NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giahang` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`id`, `id_donhang`, `id_mathang`, `tenhang`, `soluong`, `hinhanh`, `giahang`) VALUES
(21, 35, 18, 'Bánh Mì Tam Giác', 1, './uploads/banhmi16.jpg', 15000),
(22, 35, 19, 'Nước Khoáng Lavie', 1, './uploads/nuoc.jpg', 5000),
(23, 36, 18, 'Bánh Mì Tam Giác', 6, './uploads/banhmi16.jpg', 15000),
(24, 37, 19, 'Nước Khoáng Lavie', 1, './uploads/nuoc.jpg', 5000),
(25, 38, 22, 'Pepsi', 5, './uploads/nuoc3.jpg', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE IF NOT EXISTS `dondathang` (
`id_donhang` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `tongtien` int(10) NOT NULL,
  `ngaydathang` date NOT NULL,
  `ngaygiaohang` date NOT NULL,
  `noigiaohang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`id_donhang`, `id_khachhang`, `tongtien`, `ngaydathang`, `ngaygiaohang`, `noigiaohang`, `tinhtrang`) VALUES
(35, 10, 20000, '2018-11-20', '2018-11-22', 'Hà Nam', 'Đang Vận Chuyển'),
(36, 10, 90000, '2018-11-20', '1970-01-01', 'Hà Nam', 'Đang Vận Chuyển'),
(37, 9, 5000, '2018-11-21', '0000-00-00', 'Hà Nam', 'Chờ Xử Lý'),
(38, 10, 50000, '2018-11-21', '0000-00-00', 'Hà Nam', 'Chờ Xử Lý');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
`id_khachhang` int(11) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythem` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_khachhang`, `hoten`, `diachi`, `dienthoai`, `email`, `password`, `ngaythem`) VALUES
(9, 'Trần Văn Tuấn', 'Hà Nam', 1234, 'minhduc171190@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-11-20'),
(10, '1', 'Hà Nam', 12345, 'minhduc171190@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-11-20'),
(11, 'Hà Đình Lợi', 'Hà Nam', 123456, 'minhduc171190@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-11-20'),
(12, 'Nguyễn Minh Đức', 'Hà Nam', 123456789, 'minhduc171190@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE IF NOT EXISTS `loaihang` (
  `id_loaihang` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenloaihang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`id_loaihang`, `tenloaihang`) VALUES
('banh', 'Bánh Mì'),
('khac', 'Khác'),
('nuoc', 'Nước'),
('scl', 'Sô Cô La');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE IF NOT EXISTS `mathang` (
`id_mathang` int(10) NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_loaihang` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_congty` int(10) NOT NULL,
  `tenhang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(5) NOT NULL,
  `giahang` int(10) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`id_mathang`, `hinhanh`, `id_loaihang`, `id_congty`, `tenhang`, `soluong`, `giahang`, `ngaynhap`) VALUES
(18, './uploads/banhmi16.jpg', 'banh', 1, 'Bánh Mì Tam Giác', 100, 15000, '2018-11-15'),
(19, './uploads/nuoc.jpg', 'nuoc', 2, 'Nước Khoáng Lavie', 100, 5000, '2018-11-15'),
(20, './uploads/banhmi4.jpg', 'banh', 1, 'Bánh Mì Thịt', 0, 15000, '2018-11-21'),
(21, './uploads/nuoc1.jpg', 'nuoc', 1, 'Nước Gạo', 0, 20000, '2018-11-21'),
(22, './uploads/nuoc3.jpg', 'nuoc', 1, 'Pepsi', 0, 10000, '2018-11-21'),
(23, './uploads/but_bi3.jpg', 'khac', 2, 'Bút Bi', 0, 4000, '2018-11-21'),
(24, './uploads/o.jpg', 'khac', 2, 'Ô', 0, 70000, '2018-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE IF NOT EXISTS `nhacungcap` (
`id_congty` int(10) NOT NULL,
  `tencongty` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`id_congty`, `tencongty`, `diachi`, `dienthoai`, `email`) VALUES
(1, 'UTT', 'Hà Nội', '123456789', 'congtymail@gmail.com'),
(2, 'Zenlish', 'Hà Nam', '123456789', 'hanam@gmail.com'),
(3, 'jhj', '', '', ''),
(4, 'opp', '', '', ''),
(5, 'opp', 'Hà Nam', 'd7387482374', 'minhduc171190@gmail.com'),
(6, 'k', '', '', ''),
(7, 'ototo', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
`id_nhanvien` int(10) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaylamviec` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id_nhanvien`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `dienthoai`, `email`, `avatar`, `ngaylamviec`) VALUES
(13, 'Nguyễn Minh Đức', 'Nam', '1998-04-15', 'Hà Nam', 123, 'minhduc171190@gmail.com', './uploads/den_ngu2.jpg', '2018-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `id_nhanvien` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_nhanvien`, `username`, `password`, `ngaytao`) VALUES
(6, 13, 'admin', '202cb962ac59075b964b07152d234b70', '2018-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
 ADD PRIMARY KEY (`id`), ADD KEY `id_mathang` (`id_mathang`), ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
 ADD PRIMARY KEY (`id_donhang`), ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
 ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
 ADD PRIMARY KEY (`id_loaihang`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
 ADD PRIMARY KEY (`id_mathang`), ADD KEY `id_loaihang` (`id_loaihang`), ADD KEY `id_congty` (`id_congty`), ADD KEY `id_loaihang_2` (`id_loaihang`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
 ADD PRIMARY KEY (`id_congty`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
 ADD PRIMARY KEY (`id_nhanvien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `id_nhanvien` (`id_nhanvien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
MODIFY `id_donhang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `mathang`
--
ALTER TABLE `mathang`
MODIFY `id_mathang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
MODIFY `id_congty` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
MODIFY `id_nhanvien` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`id_mathang`) REFERENCES `mathang` (`id_mathang`),
ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `dondathang` (`id_donhang`);

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
ADD CONSTRAINT `dondathang_ibfk_4` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id_khachhang`);

--
-- Constraints for table `mathang`
--
ALTER TABLE `mathang`
ADD CONSTRAINT `mathang_ibfk_2` FOREIGN KEY (`id_congty`) REFERENCES `nhacungcap` (`id_congty`),
ADD CONSTRAINT `mathang_ibfk_3` FOREIGN KEY (`id_loaihang`) REFERENCES `loaihang` (`id_loaihang`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`id_nhanvien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
