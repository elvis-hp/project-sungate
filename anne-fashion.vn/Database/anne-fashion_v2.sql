SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `anne-fashion` DEFAULT CHARACTER SET utf8 ;
USE `anne-fashion` ;

-- -----------------------------------------------------
-- Table `anne-fashion`.`banner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`banner` (
  `MaBaner` INT(11) NOT NULL AUTO_INCREMENT,
  `Top` VARCHAR(300) NULL DEFAULT NULL,
  `Left` VARCHAR(300) NULL DEFAULT NULL,
  `Right` VARCHAR(300) NULL DEFAULT NULL,
  PRIMARY KEY (`MaBaner`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `anne-fashion`.`khachhang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`khachhang` (
  `MaKhachHang` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `TenKhachHang` VARCHAR(100) NOT NULL,
  `DienThoai` VARCHAR(100) NOT NULL,
  `Email` VARCHAR(100) NULL DEFAULT NULL,
  `DiaChi` VARCHAR(100) NULL DEFAULT NULL,
  `DiemTichLuy` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`MaKhachHang`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `anne-fashion`.`dondathang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`dondathang` (
  `MaDonDatHang` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `NgayDatHang` DATETIME NULL DEFAULT NULL,
  `TongTien` DOUBLE NULL DEFAULT NULL,
  `TinhTrang` TINYINT(1) NULL DEFAULT NULL,
  `khachhang_MaKhachHang` BIGINT(20) NOT NULL,
  PRIMARY KEY (`MaDonDatHang`),
  INDEX `fk_dondathang_khachhang1_idx` (`khachhang_MaKhachHang` ASC),
  CONSTRAINT `fk_dondathang_khachhang1`
    FOREIGN KEY (`khachhang_MaKhachHang`)
    REFERENCES `anne-fashion`.`khachhang` (`MaKhachHang`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `anne-fashion`.`loaisanpham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`loaisanpham` (
  `MaLoaiSP` INT NOT NULL,
  `TenLoaiSP` VARCHAR(500) NULL DEFAULT NULL,
  `Parent` BIGINT(20) NULL DEFAULT NULL,
  `MoTa` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`MaLoaiSP`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anne-fashion`.`thuonghieu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`thuonghieu` (
  `MaThuongHieu` INT(11) NOT NULL AUTO_INCREMENT,
  `TenThuongHieu` INT(11) NULL DEFAULT NULL,
  `Logo` VARCHAR(100) NULL DEFAULT NULL,
  `XuatXu` VARCHAR(100) NULL DEFAULT NULL,
  `MoTa` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`MaThuongHieu`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anne-fashion`.`sanpham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`sanpham` (
  `MaSP` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `TenSP` VARCHAR(100) NULL DEFAULT NULL,
  `Gia` DOUBLE NULL DEFAULT NULL,
  `GioiTinh` TINYINT(1) NULL,
  `MauSac` INT(11) NULL,
  `SizeAo` CHAR(5) NULL,
  `SizeQuan` INT(11) NULL,
  `SoLuong` INT(11) NULL,
  `HinhThumb` VARCHAR(300) NULL,
  `GiamGia` FLOAT NULL,
  `KhuyenMai` TINYINT(1) NULL,
  `HangMoiVe` TINYINT(1) NULL,
  `loaisanpham_MaLoaiSP` INT NOT NULL,
  `thuonghieu_MaThuongHieu` INT(11) NOT NULL,
  PRIMARY KEY (`MaSP`),
  INDEX `fk_sanpham_loaisanpham_idx` (`loaisanpham_MaLoaiSP` ASC),
  INDEX `fk_sanpham_thuonghieu1_idx` (`thuonghieu_MaThuongHieu` ASC),
  CONSTRAINT `fk_sanpham_loaisanpham`
    FOREIGN KEY (`loaisanpham_MaLoaiSP`)
    REFERENCES `anne-fashion`.`loaisanpham` (`MaLoaiSP`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_sanpham_thuonghieu1`
    FOREIGN KEY (`thuonghieu_MaThuongHieu`)
    REFERENCES `anne-fashion`.`thuonghieu` (`MaThuongHieu`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 2;


-- -----------------------------------------------------
-- Table `anne-fashion`.`chitietdondathang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`chitietdondathang` (
  `MaChiTietDonDatHang` BIGINT(20) NOT NULL,
  `dondathang_MaDonDatHang` BIGINT(20) NOT NULL,
  `sanpham_MaSP` BIGINT(20) NOT NULL,
  PRIMARY KEY (`MaChiTietDonDatHang`),
  INDEX `fk_chitietdondathang_dondathang1_idx` (`dondathang_MaDonDatHang` ASC),
  INDEX `fk_chitietdondathang_sanpham1_idx` (`sanpham_MaSP` ASC),
  CONSTRAINT `fk_chitietdondathang_dondathang1`
    FOREIGN KEY (`dondathang_MaDonDatHang`)
    REFERENCES `anne-fashion`.`dondathang` (`MaDonDatHang`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_chitietdondathang_sanpham1`
    FOREIGN KEY (`sanpham_MaSP`)
    REFERENCES `anne-fashion`.`sanpham` (`MaSP`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anne-fashion`.`taikhoan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`taikhoan` (
  `MaTaiKhoan` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` VARCHAR(100) NULL DEFAULT NULL,
  `MatKhau` VARCHAR(100) NULL DEFAULT NULL,
  `Fb_ID` VARCHAR(100) NULL DEFAULT NULL,
  `FB_Token` VARCHAR(100) NULL DEFAULT NULL,
  `HoTen` VARCHAR(100) NULL DEFAULT NULL,
  `NgaySinh` DATETIME NULL DEFAULT NULL,
  `CMND` VARCHAR(20) NULL DEFAULT NULL,
  `AnhDaiDien` VARCHAR(100) NULL DEFAULT NULL,
  `quyen_MaQuyen` INT(11) NOT NULL,
  PRIMARY KEY (`MaTaiKhoan`))
ENGINE = InnoDB
AUTO_INCREMENT = 2;


-- -----------------------------------------------------
-- Table `anne-fashion`.`hoadon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`hoadon` (
  `MaHoaDon` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `TongTien` DOUBLE NULL DEFAULT NULL,
  `NgayHoaDon` DATETIME NULL DEFAULT NULL,
  `taikhoan_MaTaiKhoan` BIGINT(20) NOT NULL,
  `khachhang_MaKhachHang` BIGINT(20) NOT NULL,
  `GiamGia` FLOAT NULL DEFAULT 0,
  `ThanhTien` DOUBLE NULL DEFAULT 0,
  PRIMARY KEY (`MaHoaDon`),
  INDEX `fk_hoadon_taikhoan1_idx` (`taikhoan_MaTaiKhoan` ASC),
  INDEX `fk_hoadon_khachhang1_idx` (`khachhang_MaKhachHang` ASC),
  CONSTRAINT `fk_hoadon_taikhoan1`
    FOREIGN KEY (`taikhoan_MaTaiKhoan`)
    REFERENCES `anne-fashion`.`taikhoan` (`MaTaiKhoan`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_hoadon_khachhang1`
    FOREIGN KEY (`khachhang_MaKhachHang`)
    REFERENCES `anne-fashion`.`khachhang` (`MaKhachHang`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anne-fashion`.`chitiethoadon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`chitiethoadon` (
  `MaChiTietHoaDon` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `hoadon_MaHoaDon` BIGINT(20) NOT NULL,
  `sanpham_MaSP` BIGINT(20) NOT NULL,
  PRIMARY KEY (`MaChiTietHoaDon`),
  INDEX `fk_chitiethoadon_hoadon1_idx` (`hoadon_MaHoaDon` ASC),
  INDEX `fk_chitiethoadon_sanpham1_idx` (`sanpham_MaSP` ASC),
  CONSTRAINT `fk_chitiethoadon_hoadon1`
    FOREIGN KEY (`hoadon_MaHoaDon`)
    REFERENCES `anne-fashion`.`hoadon` (`MaHoaDon`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_chitiethoadon_sanpham1`
    FOREIGN KEY (`sanpham_MaSP`)
    REFERENCES `anne-fashion`.`sanpham` (`MaSP`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anne-fashion`.`hinhanh`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`hinhanh` (
  `MaHinhAnh` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `DuongDan` VARCHAR(300) NULL DEFAULT NULL,
  `sanpham_MaSP` BIGINT(20) NOT NULL,
  PRIMARY KEY (`MaHinhAnh`),
  INDEX `fk_hinhanh_sanpham1_idx` (`sanpham_MaSP` ASC),
  CONSTRAINT `fk_hinhanh_sanpham1`
    FOREIGN KEY (`sanpham_MaSP`)
    REFERENCES `anne-fashion`.`sanpham` (`MaSP`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anne-fashion`.`quyen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anne-fashion`.`quyen` (
  `MaQuyen` INT(11) NOT NULL AUTO_INCREMENT,
  `TenQuyen` INT(11) NOT NULL,
  `MoTa` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`MaQuyen`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
