-- Adminer 4.8.1 MySQL 5.7.34 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `showroom_hanan_table`;
CREATE TABLE `showroom_hanan_table` (
  `id_mobil` int(255) NOT NULL AUTO_INCREMENT,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `showroom_hanan_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(12,	'BMW i4',	'Hanan - 1202204042',	'BMW',	'2022-11-03',	'The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.',	'car-3.png',	'Lunas'),
(13,	'Mobil 2',	'Hanan - 1202204042',	'MOBIL',	'2022-11-11',	'The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.\r\n',	'car-1.png',	'Belum Lunas'),
(14,	'Mobil 3',	'Hanan - 1202204042',	'MOBIL',	'2022-11-18',	'The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.\r\n',	'car-2.png',	'Lunas');

DROP TABLE IF EXISTS `user_hanan`;
CREATE TABLE `user_hanan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_hanan` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(2,	'Muhammad Hanan Rafif Farizta',	'hhananfarizta@gmail.com',	'$2y$10$rYDzLiopRxUUubH2hONCdOSaJlw3RkueirtwVg82m6JOGHywiKNRe',	'081326376080');

-- 2022-11-27 12:05:00
