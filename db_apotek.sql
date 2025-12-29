/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 8.0.30 : Database - db_apotek
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_apotek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_apotek`;

/*Table structure for table `tb_det_trx` */

DROP TABLE IF EXISTS `tb_det_trx`;

CREATE TABLE `tb_det_trx` (
  `id_detail` int NOT NULL,
  `id_transaksi` int DEFAULT NULL,
  `id_obat` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_transaksi` (`id_transaksi`),
  CONSTRAINT `tb_det_trx_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_det_trx` */

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id_kategori` int NOT NULL,
  `kategori_obat` enum('Obat bebas','obat bebas terbatas','vitamin dan suplement','obat anak','obat demam dan nyeri','obat batuk dan flu','obat pencernaan (maag,diare, etc)','obat alergi','obat salep','obat mata','obat telinga','diabetes','obat darah tinggi','obat infeksi (antibiotik)','obat hormon','obat saraf','produk ibu dan bayi','herbal dan tradisional') DEFAULT NULL,
  PRIMARY KEY (`id_kategori`),
  CONSTRAINT `tb_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_kategori` */

/*Table structure for table `tb_met_pembayaran` */

DROP TABLE IF EXISTS `tb_met_pembayaran`;

CREATE TABLE `tb_met_pembayaran` (
  `id_met_pembayaran` int NOT NULL,
  `nm_metode` varchar(100) DEFAULT NULL,
  `jenis_metode` enum('DANA','QRIS','BRIVA','GOPAY') DEFAULT NULL,
  `status` enum('Aktif','Non aktif') DEFAULT NULL,
  PRIMARY KEY (`id_met_pembayaran`),
  CONSTRAINT `tb_met_pembayaran_ibfk_1` FOREIGN KEY (`id_met_pembayaran`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_met_pembayaran` */

/*Table structure for table `tb_obat` */

DROP TABLE IF EXISTS `tb_obat`;

CREATE TABLE `tb_obat` (
  `id_obat` int NOT NULL,
  `nm_obat` varchar(100) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `tgl_kadaluarsa` date DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  `bentuk_obat` varchar(50) DEFAULT NULL,
  `id_supplier` int DEFAULT NULL,
  `dosis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_obat`),
  CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tb_det_trx` (`id_detail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_obat` */

/*Table structure for table `tb_pelanggan` */

DROP TABLE IF EXISTS `tb_pelanggan`;

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int NOT NULL,
  `nm_pelanggan` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`),
  CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_pelanggan` */

/*Table structure for table `tb_staff` */

DROP TABLE IF EXISTS `tb_staff`;

CREATE TABLE `tb_staff` (
  `id_staff` int NOT NULL,
  `nm_staff` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_telp` int DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `shift_kerja` enum('Pagi','Malam') DEFAULT NULL,
  PRIMARY KEY (`id_staff`),
  CONSTRAINT `tb_staff_ibfk_1` FOREIGN KEY (`id_staff`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_staff` */

/*Table structure for table `tb_supplier` */

DROP TABLE IF EXISTS `tb_supplier`;

CREATE TABLE `tb_supplier` (
  `id_supplier` int NOT NULL,
  `nm_supplier` varchar(100) DEFAULT NULL,
  `no_telp` int DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_supplier`),
  CONSTRAINT `tb_supplier_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `tb_obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_supplier` */

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int NOT NULL,
  `id_pelanggan` int DEFAULT NULL,
  `id_staff` int DEFAULT NULL,
  `tgl_trx` date DEFAULT NULL,
  `total_harga` int DEFAULT NULL,
  `id_met_pembayaran` int DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
