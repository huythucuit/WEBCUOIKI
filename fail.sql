-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for web
CREATE DATABASE IF NOT EXISTS `web` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `web`;

-- Dumping structure for table web.khachhang
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MAKH` int(11) NOT NULL,
  `TENKH` varchar(255) DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `DIACHI` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MAKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table web.khachhang: ~3 rows (approximately)
INSERT INTO `khachhang` (`MAKH`, `TENKH`, `SDT`, `DIACHI`) VALUES
	(1, 'Nguyễn Văn A', '0123456789', 'Hà Nội'),
	(2, 'Trần Thị B', '0987654321', 'Hồ Chí Minh'),
	(3, 'Lê Văn C', '0369852147', 'Đà Nẵng');

-- Dumping structure for table web.thue
CREATE TABLE IF NOT EXISTS `thue` (
  `MAT` int(11) NOT NULL AUTO_INCREMENT,
  `MAKH` int(11) DEFAULT NULL,
  `SOXE` varchar(10) DEFAULT NULL,
  `NGAYTHUE` date DEFAULT NULL,
  `NGAYTRA` date DEFAULT NULL,
  `GIATHUE` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`MAT`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table web.thue: ~3 rows (approximately)
INSERT INTO `thue` (`MAT`, `MAKH`, `SOXE`, `NGAYTHUE`, `NGAYTRA`, `GIATHUE`) VALUES
	(45, 3, '51E-49057', '2024-01-21', NULL, NULL),
	(46, 1, '51E-49058', '2024-01-01', '2024-01-20', 1900000.00),
	(47, 2, '51E-49058', '2024-01-02', '2024-01-14', 1200000.00);

-- Dumping structure for table web.xe
CREATE TABLE IF NOT EXISTS `xe` (
  `SOXE` varchar(10) NOT NULL,
  `TENXE` varchar(255) DEFAULT NULL,
  `HANGXE` varchar(50) DEFAULT NULL,
  `SOCHO` int(11) DEFAULT NULL,
  `NAMSX` int(11) DEFAULT NULL,
  `DGTHUE` decimal(10,2) DEFAULT NULL,
  `TINHTRANG` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`SOXE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table web.xe: ~2 rows (approximately)
INSERT INTO `xe` (`SOXE`, `TENXE`, `HANGXE`, `SOCHO`, `NAMSX`, `DGTHUE`, `TINHTRANG`) VALUES
	('51E-49057', 'Sirius', 'Honda', 2, 2005, 100000.00, 1),
	('51E-49058', 'Wave', 'Honda', 3, 2006, 100000.00, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
