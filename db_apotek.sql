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
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int DEFAULT NULL,
  `id_obat` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_transaksi` (`id_transaksi`),
  KEY `id_obat` (`id_obat`),
  CONSTRAINT `tb_det_trx_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`),
  CONSTRAINT `tb_det_trx_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_det_trx` */

LOCK TABLES `tb_det_trx` WRITE;

UNLOCK TABLES;

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `kategori_obat` enum('Obat bebas','obat bebas terbatas','vitamin dan suplement','obat anak','obat demam dan nyeri','obat batuk dan flu','obat pencernaan (maag,diare, etc)','obat alergi','obat salep','obat mata','obat telinga','diabetes','obat darah tinggi','obat infeksi (antibiotik)','obat hormon','obat saraf','produk ibu dan bayi','herbal dan tradisional') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_kategori` */

LOCK TABLES `tb_kategori` WRITE;

insert  into `tb_kategori`(`id_kategori`,`kategori_obat`) values 
(1,'diabetes'),
(2,'herbal dan tradisional'),
(3,'obat alergi'),
(4,'obat anak'),
(5,'obat batuk dan flu'),
(6,'Obat bebas'),
(7,'obat darah tinggi'),
(8,'obat demam dan nyeri'),
(9,'obat pencernaan (maag,diare, etc)'),
(10,'obat salep');

UNLOCK TABLES;

/*Table structure for table `tb_met_pembayaran` */

DROP TABLE IF EXISTS `tb_met_pembayaran`;

CREATE TABLE `tb_met_pembayaran` (
  `id_met_pembayaran` int NOT NULL AUTO_INCREMENT,
  `nm_metode` varchar(100) DEFAULT NULL,
  `jenis_metode` enum('DANA','QRIS','BRIVA','GOPAY') DEFAULT NULL,
  `status` enum('Aktif','Non aktif') DEFAULT NULL,
  PRIMARY KEY (`id_met_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_met_pembayaran` */

LOCK TABLES `tb_met_pembayaran` WRITE;

UNLOCK TABLES;

/*Table structure for table `tb_obat` */

DROP TABLE IF EXISTS `tb_obat`;

CREATE TABLE `tb_obat` (
  `id_obat` int NOT NULL AUTO_INCREMENT,
  `nm_obat` varchar(100) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `tgl_kadaluarsa` date DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  `bentuk_obat` varchar(50) DEFAULT NULL,
  `id_supplier` int DEFAULT NULL,
  `dosis` varchar(50) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_obat`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_supplier` (`id_supplier`),
  CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`),
  CONSTRAINT `tb_obat_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_obat` */

LOCK TABLES `tb_obat` WRITE;

insert  into `tb_obat`(`id_obat`,`nm_obat`,`stock`,`harga`,`tgl_kadaluarsa`,`id_kategori`,`bentuk_obat`,`id_supplier`,`dosis`,`gambar`,`deskripsi`) values 
(1,'Metformin',3,50000,'2028-06-15',1,'tablet',1,'500 mg','metformin.jpg',NULL),
(2,'jahe',4,39000,'2028-05-24',2,'bubuk',2,'100-500 mg','jahe.jpg',NULL),
(3,'Cetirizine',4,45000,'2027-09-22',3,'tablet',3,'2,5 g','Cetirizine.jpg',NULL),
(4,'ibuprofen',7,35000,'2030-09-12',4,'cair',4,'100 mg','ibuprofen.png',NULL),
(5,'OBH combi',10,27000,'2028-11-15',5,'tablet',5,'100-500mg','OBH.png',NULL),
(6,'paracetamol',21,7000,'2029-03-18',6,'tablet',6,'500 mg','paracetamol.jpg',NULL),
(7,'Amlodipine',12,50000,'2028-01-06',7,'tablet',7,'100 mg','Amlodipine.png',NULL),
(8,'Naproxen',20,10000,'2028-08-26',8,'tablet',8,'400 mg','Naproxen.png',NULL),
(9,'maag,antasida,H2blocers',16,30000,'2030-01-06',9,'tablet',9,'500 mg','maag,antasida,H2blocers.webp',NULL),
(10,'Hydrocortisone',15,12000,'2028-03-06',10,'salep',10,'100 mg','Hydrocortisone.jpg',NULL),
(11,'Salap',23,12000,'2027-12-23',10,'salap',4,'200 mg','Salap bakar.png',NULL),
(12,'Vitamin',9,10000,'2027-05-19',6,'tablet',2,'200 mg','Vitamin.png',NULL),
(13,'Colagen',50,150000,'2027-01-27',6,'botol',7,'200 mg','Colagen.webp',NULL),
(14,'Simono',40,100000,'2028-02-06',2,'botol',3,'200mg','simono.jpg',NULL);

UNLOCK TABLES;

/*Table structure for table `tb_pelanggan` */

DROP TABLE IF EXISTS `tb_pelanggan`;

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int NOT NULL AUTO_INCREMENT,
  `nm_pelanggan` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_pelanggan` */

LOCK TABLES `tb_pelanggan` WRITE;

insert  into `tb_pelanggan`(`id_pelanggan`,`nm_pelanggan`,`password`) values 
(1,'saaa','$2y$10$JJEjDJ863DDiS39epZYMwOmsIl9BRfQEjvQvBfCNI/79lqqk2djCu'),
(2,'lele','$2y$10$l78gif1RBm9xFV6d3sZn8eZ5VOQX0ezpdZzsZU.sCv736RnJ2swOi');

UNLOCK TABLES;

/*Table structure for table `tb_staff` */

DROP TABLE IF EXISTS `tb_staff`;

CREATE TABLE `tb_staff` (
  `id_staff` int NOT NULL AUTO_INCREMENT,
  `nm_staff` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_telp` int DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `shift_kerja` enum('Pagi','Malam') DEFAULT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_staff` */

LOCK TABLES `tb_staff` WRITE;

UNLOCK TABLES;

/*Table structure for table `tb_supplier` */

DROP TABLE IF EXISTS `tb_supplier`;

CREATE TABLE `tb_supplier` (
  `id_supplier` int NOT NULL AUTO_INCREMENT,
  `nm_supplier` varchar(100) DEFAULT NULL,
  `no_telp` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_supplier` */

LOCK TABLES `tb_supplier` WRITE;

insert  into `tb_supplier`(`id_supplier`,`nm_supplier`,`no_telp`,`email`,`alamat`) values 
(1,'viany','085432213245','viany@gmail.com','sesetan'),
(2,'Jurna','085432675897','jurna@gmail.com','jimbaran'),
(3,'Inna','085338857582','inna@gmail.com','gianyar'),
(4,'Prety','081234567890','prety@gmail.com','sesetan'),
(5,'Arny','085432451234','arny@gmail.com','sesetan'),
(6,'Eno','081241321567','eno@gmail.com','sesetan'),
(7,'Vivi','085235125235','vivi@gmail.com','sesetan'),
(8,'Asrida','081387456324','asrida@gmail.com','kuta'),
(9,'Venom','082654123423','venom@gmail.com','sesetan'),
(10,'Asry','085128976435','asry@gmail.com','sesetan'),
(11,NULL,'',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int DEFAULT NULL,
  `id_staff` int DEFAULT NULL,
  `tgl_trx` date DEFAULT NULL,
  `total_harga` int DEFAULT NULL,
  `id_met_pembayaran` int DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_met_pembayaran` (`id_met_pembayaran`),
  KEY `id_staff` (`id_staff`),
  CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`),
  CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_met_pembayaran`) REFERENCES `tb_met_pembayaran` (`id_met_pembayaran`),
  CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_staff`) REFERENCES `tb_staff` (`id_staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tb_transaksi` */

LOCK TABLES `tb_transaksi` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
