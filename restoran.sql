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
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kasir` */

insert  into `kasir`(`id`,`nama`,`meja`,`total`,`bayar`,`kembalian`,`tanggal`) values 
(1,'ikhwan','e5',50000,50000,0,'2020-06-11 17:30:56'),
(2,'akbar','e1',227000,300000,73000,'2020-06-11 23:44:22'),
(3,'asd','e1',62000,70000,8000,'2020-06-11 23:44:25'),
(4,'ddd','e7',36000,40000,4000,'2020-06-11 23:44:28'),
(5,'ddd','e7',36000,40000,4000,'2020-06-11 23:44:30'),
(6,'bbb','e7',9000,10000,1000,'2020-06-11 21:00:29'),
(7,'bbb','e7',9000,10000,1000,'2020-06-11 23:43:27'),
(8,'vvv','e3',125000,150000,25000,'2020-06-11 23:48:08');

/*Table structure for table `keranjang` */

DROP TABLE IF EXISTS `keranjang`;

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pesanan` varchar(50) NOT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `harga_pesanan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `keranjang` */

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

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `enum` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`nama`,`harga`,`enum`) values 
(1,'Ayam Goreng',20000,'makanan'),
(2,'Nasi Goreng',17000,'makanan'),
(3,'Bebek Goreng',25000,'makanan'),
(4,'Ikan Bakar',40000,'makanan'),
(5,'Kepiting Asam Manis',50000,'makanan'),
(6,'Teh',3000,'minuman'),
(7,'Jeruk (dingin/hangat)',4000,'minuman'),
(8,'Jus',10000,'minuman'),
(9,'Kopi (dingin/hangat)',6000,'minuman'),
(10,'Soda Gembira',8000,'minuman');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`nama`,`email`,`telepon`,`foto`,`username`,`password`) values 
(2,'ikhwan','ikhwan@gmail.com',85726153280,'gambar/10567702275ee1b282e33ad.png','ikhwan','$2y$10$HoM9mrgv5pajWGJco.04ZObMt5f5OKwSWFhIyoxyT8Ab3m7bOu/oO'),
(3,'akbar','akbar@gmail.com',837439487397,'gambar/9215120545ee202bf56209.png','akbar','$2y$10$1WtjkwLykI8Ivr/j0jRUzOzxmiV5YVyuZ.eYpCTp08f5mOQMQDH76'),
(4,'','',0,'','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
