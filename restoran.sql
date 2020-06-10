/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - restoran
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`restoran` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `restoran`;

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `diskon` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `event` */

/*Table structure for table `kasir` */

DROP TABLE IF EXISTS `kasir`;

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `meja` varchar(256) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kasir` */

/*Table structure for table `keranjang` */

DROP TABLE IF EXISTS `keranjang`;

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pesanan` varchar(50) NOT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `harga_pesanan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `keranjang` */

insert  into `keranjang`(`id`,`nama_pesanan`,`jumlah_pesanan`,`harga_pesanan`) values 
(2,'Nasi Goreng',4,68000),
(4,'Teh',5,15000),
(5,'Soda Gembira',3,24000);

/*Table structure for table `kritik_saran` */

DROP TABLE IF EXISTS `kritik_saran`;

CREATE TABLE `kritik_saran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `kritik_dan_saran` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kritik_saran` */

/*Table structure for table `laporan_bulanan` */

DROP TABLE IF EXISTS `laporan_bulanan`;

CREATE TABLE `laporan_bulanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `laporan_bulanan` */

/*Table structure for table `laporan_harian` */

DROP TABLE IF EXISTS `laporan_harian`;

CREATE TABLE `laporan_harian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `laporan_harian` */

/*Table structure for table `lokasi` */

DROP TABLE IF EXISTS `lokasi`;

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lokasi` */

insert  into `lokasi`(`id`,`nama`) values 
(1,'Surabaya'),
(2,'Sidoarjo'),
(3,'Blitar'),
(4,'Jakarta'),
(5,'Bandung'),
(6,'Medan'),
(7,'Solo');

/*Table structure for table `menu_makanan` */

DROP TABLE IF EXISTS `menu_makanan`;

CREATE TABLE `menu_makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menu_makanan` */

insert  into `menu_makanan`(`id`,`nama`,`harga`) values 
(1,'Ayam Goreng',20000),
(2,'Bebek Goreng',25000),
(3,'Nasi Goreng',17000),
(4,'Ikan Bakar',40000),
(5,'Kepiting Asam Manis',50000);

/*Table structure for table `menu_minuman` */

DROP TABLE IF EXISTS `menu_minuman`;

CREATE TABLE `menu_minuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menu_minuman` */

insert  into `menu_minuman`(`id`,`nama`,`harga`) values 
(1,'Teh',3000),
(2,'Jeruk\r\n(dingin/hangat)',4000),
(3,'Jus',10000),
(4,'Kopi\r\n(dingin/hangat)',6000),
(5,'Soda Gembira',8000);

/*Table structure for table `reservasi` */

DROP TABLE IF EXISTS `reservasi`;

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `meja` varchar(256) NOT NULL,
  `bayar` int(11) NOT NULL,
  `waktu` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `reservasi` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
