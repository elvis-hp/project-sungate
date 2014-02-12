-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2014 at 06:32 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anne-fashion`
--
CREATE DATABASE IF NOT EXISTS `anne-fashion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `anne-fashion`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `MaBaner` int(11) NOT NULL AUTO_INCREMENT,
  `Top` varchar(300) DEFAULT NULL,
  `Left` varchar(300) DEFAULT NULL,
  `Right` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`MaBaner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE IF NOT EXISTS `chitietdondathang` (
  `MaChiTietDonDatHang` bigint(20) NOT NULL,
  `dondathang_MaDonDatHang` bigint(20) NOT NULL,
  `sanpham_MaSP` bigint(20) NOT NULL,
  PRIMARY KEY (`MaChiTietDonDatHang`),
  KEY `fk_chitietdondathang_dondathang1_idx` (`dondathang_MaDonDatHang`),
  KEY `fk_chitietdondathang_sanpham1_idx` (`sanpham_MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `MaChiTietHoaDon` bigint(20) NOT NULL AUTO_INCREMENT,
  `hoadon_MaHoaDon` bigint(20) NOT NULL,
  `sanpham_MaSP` bigint(20) NOT NULL,
  PRIMARY KEY (`MaChiTietHoaDon`),
  KEY `fk_chitiethoadon_hoadon1_idx` (`hoadon_MaHoaDon`),
  KEY `fk_chitiethoadon_sanpham1_idx` (`sanpham_MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE IF NOT EXISTS `dondathang` (
  `MaDonDatHang` bigint(20) NOT NULL AUTO_INCREMENT,
  `NgayDatHang` datetime DEFAULT NULL,
  `TongTien` double DEFAULT NULL,
  `TinhTrang` tinyint(1) DEFAULT NULL,
  `khachhang_MaKhachHang` bigint(20) NOT NULL,
  PRIMARY KEY (`MaDonDatHang`),
  KEY `fk_dondathang_khachhang1_idx` (`khachhang_MaKhachHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE IF NOT EXISTS `hinhanh` (
  `MaHinhAnh` bigint(20) NOT NULL AUTO_INCREMENT,
  `DuongDan` varchar(300) DEFAULT NULL,
  `sanpham_MaSP` bigint(20) NOT NULL,
  PRIMARY KEY (`MaHinhAnh`),
  KEY `fk_hinhanh_sanpham1_idx` (`sanpham_MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHoaDon` bigint(20) NOT NULL AUTO_INCREMENT,
  `TongTien` double DEFAULT NULL,
  `NgayHoaDon` datetime DEFAULT NULL,
  `taikhoan_MaTaiKhoan` bigint(20) NOT NULL,
  `khachhang_MaKhachHang` bigint(20) NOT NULL,
  `GiamGia` float DEFAULT '0',
  `ThanhTien` double DEFAULT '0',
  PRIMARY KEY (`MaHoaDon`),
  KEY `fk_hoadon_taikhoan1_idx` (`taikhoan_MaTaiKhoan`),
  KEY `fk_hoadon_khachhang1_idx` (`khachhang_MaKhachHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKhachHang` bigint(20) NOT NULL AUTO_INCREMENT,
  `TenKhachHang` varchar(100) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `DiemTichLuy` int(11) DEFAULT NULL,
  `NgayThem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`MaKhachHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `MaLoaiSP` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiSP` varchar(500) DEFAULT NULL,
  `Parent` bigint(20) DEFAULT NULL,
  `MoTa` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`MaLoaiSP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSP`, `TenLoaiSP`, `Parent`, `MoTa`) VALUES
(1, 'Nam', 0, 'Các sản phẩm cho Nam'),
(2, 'Nữ', 0, 'Các sản phẩm cho Nữ'),
(3, 'Quần', 1, 'Quần Nam'),
(4, 'Áo', 1, 'Áo Nam'),
(5, 'Phụ kiện', 1, 'Phụ kiện Nam');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `MaQuyen` int(11) NOT NULL AUTO_INCREMENT,
  `TenQuyen` int(11) NOT NULL,
  `MoTa` varchar(1000) NOT NULL,
  PRIMARY KEY (`MaQuyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` bigint(20) NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(100) DEFAULT NULL,
  `Gia` double DEFAULT NULL,
  `GioiTinh` tinyint(1) DEFAULT NULL,
  `MauSac` int(11) DEFAULT NULL,
  `SizeAo` char(5) DEFAULT NULL,
  `SizeQuan` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `HinhThumb` varchar(300) DEFAULT NULL,
  `GiamGia` float DEFAULT NULL,
  `KhuyenMai` tinyint(1) DEFAULT NULL,
  `HangMoiVe` tinyint(1) DEFAULT NULL,
  `loaisanpham_MaLoaiSP` int(11) NOT NULL,
  `thuonghieu_MaThuongHieu` int(11) NOT NULL,
  `NgayThem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`MaSP`),
  KEY `fk_sanpham_loaisanpham_idx` (`loaisanpham_MaLoaiSP`),
  KEY `fk_sanpham_thuonghieu1_idx` (`thuonghieu_MaThuongHieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Gia`, `GioiTinh`, `MauSac`, `SizeAo`, `SizeQuan`, `SoLuong`, `HinhThumb`, `GiamGia`, `KhuyenMai`, `HangMoiVe`, `loaisanpham_MaLoaiSP`, `thuonghieu_MaThuongHieu`, `NgayThem`) VALUES
(3, 'Áo 01', 3000000, NULL, NULL, NULL, NULL, NULL, 'ao01.jpg', 0.1, NULL, NULL, 1, 1, '2014-02-12 16:28:33'),
(4, 'Đồng hồ  xịn', 2000000, NULL, NULL, NULL, NULL, NULL, 'original.jpeg', NULL, NULL, NULL, 1, 1, '2014-02-12 16:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `MaTaiKhoan` bigint(20) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(100) DEFAULT NULL,
  `MatKhau` varchar(100) DEFAULT NULL,
  `Fb_ID` varchar(100) DEFAULT NULL,
  `FB_Token` varchar(100) DEFAULT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `NgaySinh` datetime DEFAULT NULL,
  `CMND` varchar(20) DEFAULT NULL,
  `AnhDaiDien` varchar(100) DEFAULT NULL,
  `quyen_MaQuyen` int(11) NOT NULL,
  `NgayThem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`MaTaiKhoan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE IF NOT EXISTS `thuonghieu` (
  `MaThuongHieu` int(11) NOT NULL AUTO_INCREMENT,
  `TenThuongHieu` varchar(100) DEFAULT NULL,
  `Logo` varchar(100) DEFAULT NULL,
  `XuatXu` varchar(100) DEFAULT NULL,
  `MoTa` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`MaThuongHieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaThuongHieu`, `TenThuongHieu`, `Logo`, `XuatXu`, `MoTa`) VALUES
(1, 'Tommy', 'tommy.jpg', 'USA', 'Thương hiệu thời trang nổi tiếng tại Mỹ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `fk_chitietdondathang_dondathang1` FOREIGN KEY (`dondathang_MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chitietdondathang_sanpham1` FOREIGN KEY (`sanpham_MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `fk_chitiethoadon_hoadon1` FOREIGN KEY (`hoadon_MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chitiethoadon_sanpham1` FOREIGN KEY (`sanpham_MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_dondathang_khachhang1` FOREIGN KEY (`khachhang_MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_hinhanh_sanpham1` FOREIGN KEY (`sanpham_MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_khachhang1` FOREIGN KEY (`khachhang_MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hoadon_taikhoan1` FOREIGN KEY (`taikhoan_MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_loaisanpham` FOREIGN KEY (`loaisanpham_MaLoaiSP`) REFERENCES `loaisanpham` (`MaLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sanpham_thuonghieu1` FOREIGN KEY (`thuonghieu_MaThuongHieu`) REFERENCES `thuonghieu` (`MaThuongHieu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
