-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 04:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `no_telp`, `alamat`, `id_user`) VALUES
(1, 'Kieran', '089412561374994', '884 Ut, Street', 1),
(2, 'Ian', '089587465782559', 'P.O. Box 177, 7034 Placerat, Street', 2),
(3, 'Cade', '089085893941567', '824-4014 Aliquet Street', 3),
(4, 'Edward', '089682960421423', '6806 Eu St.', 4),
(5, 'Linus', '089672212432410', '909-6513 Eu, Rd.', 5),
(6, 'Malachi', '089520620692205', '405-1976 Suspendisse Ave', 6),
(7, 'Uriel', '089156201664231', '8192 Sem Street', 7),
(8, 'Honorato', '089177609694839', '753-6746 Quisque Ave', 8),
(9, 'Zane', '089777372771965', 'Ap #948-4550 Consectetuer St.', 9),
(10, 'Graham', '089950919514397', '3813 Fusce Street', 10),
(11, 'Blaze', '089822272595458', '826-3055 Velit Road', 11),
(12, 'Reed', '089969534009414', '4271 Fusce St.', 12),
(13, 'Fletcher', '089818920170793', '147-234 Quis Road', 13),
(14, 'Cain', '089202971460095', '9016 Ligula. Rd.', 14),
(15, 'Brandon', '089335276998364', 'P.O. Box 971, 8922 Nisi. Av.', 15),
(16, 'Kasper', '089827687625080', '143-1388 Aliquam Rd.', 16),
(17, 'Myles', '089678024219209', '4443 Lorem Rd.', 17),
(18, 'Geoffrey', '089188918319347', '647-8387 Orci St.', 18),
(19, 'Oren', '089581609652830', '6806 Turpis St.', 19),
(20, 'Hector', '089752583604476', 'P.O. Box 221, 701 Purus Street', 20),
(21, 'Armand', '089480136647024', '6724 Lobortis. St.', 21),
(22, 'Jermaine', '089825468649763', '567-6713 Eu Road', 22),
(23, 'Levi', '089487562794006', 'Ap #676-8177 Tincidunt Avenue', 23),
(24, 'Myles', '089459109397181', '103-1419 At, St.', 24),
(25, 'Wayne', '089171495148443', '304-7051 Gravida Street', 25);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `no_telp`, `id_user`) VALUES
(1, 'Saipudin', '0896736351', 27),
(2, 'ridwan', '08736355323', 28);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_laundry`
--

CREATE TABLE `pesanan_laundry` (
  `id_order` int(11) NOT NULL,
  `tanggal_order` datetime NOT NULL,
  `jenis_laundry` varchar(20) NOT NULL,
  `isi_laundry_satuan` varchar(255) NOT NULL,
  `total_berat_kiloan` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_laundry`
--

INSERT INTO `pesanan_laundry` (`id_order`, `tanggal_order`, `jenis_laundry`, `isi_laundry_satuan`, `total_berat_kiloan`, `total_harga`, `tanggal_selesai`, `status`, `id_konsumen`, `id_pegawai`) VALUES
(1, '2018-01-03 07:55:31', 'Satuan', 'Bed Cover ', 0, 11199, '2018-09-17 09:28:42', 'Selesai', 1, 27),
(3, '2018-01-02 14:06:01', 'Satuan', 'Bed Cover ', 0, 85743, '2018-08-18 05:38:51', 'Proses', 1, 27),
(4, '2018-01-06 22:01:43', 'Satuan', 'Jas ', 0, 20798, '2019-01-11 08:45:58', 'Selesai', 1, 27),
(5, '2018-01-03 12:28:19', 'Satuan', 'Bed Cover ', 0, 33459, '2018-12-25 10:03:38', 'Siap', 6, 27),
(6, '2018-01-03 21:25:47', 'Satuan', 'Baju ', 0, 96964, '2018-12-12 21:41:05', 'Baru', 13, 28),
(7, '2018-01-03 13:33:07', 'Satuan', 'Bed Cover ', 0, 20229, '2018-11-10 13:24:53', 'Proses', 20, 27),
(8, '2018-01-01 22:30:39', 'Satuan', 'Baju ', 0, 87134, '2018-03-28 20:01:16', 'Baru', 2, 28),
(9, '2018-01-02 00:42:54', 'Satuan', 'Baju ', 0, 18727, '2018-07-08 16:31:47', 'Baru', 9, 28),
(10, '2018-01-03 03:30:36', 'Satuan', 'Jas ', 0, 62699, '2018-02-01 10:52:06', 'Baru', 25, 28),
(11, '2018-01-02 21:09:55', 'Satuan', 'Selimut ', 0, 82705, '2018-05-03 08:34:38', 'Siap', 3, 28),
(12, '2018-01-02 02:42:18', 'Satuan', 'Bed Cover ', 0, 77028, '2018-03-31 12:40:35', 'Proses', 1, 27),
(13, '2018-01-10 03:07:35', 'Satuan', 'Jas ', 0, 18644, '2019-01-24 16:52:35', 'Proses', 2, 27),
(14, '2018-01-10 09:46:56', 'Satuan', 'Jas ', 0, 75999, '2018-09-11 08:38:52', 'Selesai', 1, 27),
(15, '2018-01-02 10:10:28', 'Satuan', 'Jas ', 0, 25124, '2018-12-08 18:15:54', 'Proses', 10, 28),
(16, '2018-01-06 05:12:58', 'Satuan', 'Selimut ', 0, 36737, '2018-10-10 23:20:30', 'Siap', 11, 28),
(17, '2018-01-02 04:14:55', 'Satuan', 'Bed Cover ', 0, 19962, '2018-11-02 19:14:22', 'Proses', 23, 27),
(18, '2018-01-03 18:50:56', 'Satuan', 'Jas ', 0, 46737, '2018-09-28 23:50:02', 'Proses', 18, 27),
(19, '2018-01-08 11:04:19', 'Satuan', 'Selimut ', 0, 61281, '2018-05-08 05:52:44', 'Siap', 4, 27),
(20, '2018-01-02 15:51:34', 'Satuan', 'Baju ', 0, 7308, '2018-09-18 13:26:48', 'Baru', 17, 27),
(21, '2018-01-08 08:34:31', 'Satuan', 'Selimut ', 0, 96662, '2018-08-24 01:05:23', 'Siap', 22, 28),
(22, '2018-01-04 15:14:53', 'Satuan', 'Baju ', 0, 56057, '2018-07-18 04:05:43', 'Baru', 19, 27),
(23, '2018-01-03 08:57:10', 'Satuan', 'Jas ', 0, 59276, '2019-01-13 00:07:02', 'Siap', 17, 28),
(24, '2018-01-05 18:28:25', 'Satuan', 'Baju ', 0, 88901, '2018-07-16 11:47:52', 'Proses', 21, 27),
(25, '2018-01-05 18:09:12', 'Satuan', 'Jas ', 0, 16839, '2018-07-27 01:37:23', 'Proses', 24, 27),
(26, '2018-01-07 20:03:00', 'Satuan', 'Selimut ', 0, 89937, '2018-10-30 06:42:10', 'Siap', 19, 27),
(27, '2018-01-02 05:23:34', 'Satuan', 'Bed Cover ', 0, 72677, '2018-06-25 04:32:07', 'Baru', 7, 27),
(28, '2018-01-08 06:56:22', 'Satuan', 'Selimut ', 0, 38552, '2018-05-11 20:29:34', 'Proses', 20, 27),
(29, '2018-01-10 01:39:56', 'Satuan', 'Jas ', 0, 82615, '2018-10-25 19:36:48', 'Baru', 11, 27),
(30, '2018-01-08 15:25:36', 'Satuan', 'Celana ', 0, 36367, '2018-08-21 17:24:12', 'Siap', 24, 28),
(31, '2018-01-02 06:53:47', 'Satuan', 'Selimut ', 0, 59747, '2018-04-16 13:46:41', 'Selesai', 25, 28),
(32, '2018-01-07 21:24:29', 'Satuan', 'Celana ', 0, 38799, '2018-11-16 21:23:39', 'Proses', 24, 27),
(33, '2018-01-08 13:01:56', 'Satuan', 'Jas ', 0, 87029, '2018-08-01 13:25:51', 'Selesai', 23, 28),
(34, '2018-01-02 22:42:00', 'Satuan', 'Selimut ', 0, 47718, '2018-02-13 11:47:04', 'Proses', 17, 27),
(35, '2018-01-07 06:54:45', 'Satuan', 'Celana ', 0, 36801, '2018-02-17 09:03:15', 'Proses', 23, 28),
(36, '2018-01-08 11:41:17', 'Satuan', 'Celana ', 0, 89592, '2018-04-13 08:24:26', 'Selesai', 25, 28),
(37, '2018-01-05 15:25:28', 'Satuan', 'Celana ', 0, 33310, '2018-04-13 23:47:28', 'Proses', 6, 27),
(38, '2018-01-05 22:15:32', 'Satuan', 'Bed Cover ', 0, 40831, '2018-05-28 10:04:58', 'Proses', 1, 28),
(39, '2018-01-02 09:24:05', 'Satuan', 'Baju ', 0, 52593, '2018-06-24 18:32:01', 'Selesai', 9, 27),
(40, '2018-01-03 15:01:14', 'Satuan', 'Jas ', 0, 74342, '2018-11-16 03:13:46', 'Selesai', 12, 28),
(41, '2018-01-07 19:00:37', 'Satuan', 'Jas ', 0, 42481, '2018-08-19 00:46:39', 'Baru', 25, 27),
(42, '2018-01-08 20:24:22', 'Satuan', 'Celana ', 0, 52036, '2018-05-17 13:03:20', 'Proses', 14, 28),
(43, '2018-01-06 07:38:34', 'Satuan', 'Baju ', 0, 17661, '2018-03-13 17:57:50', 'Selesai', 20, 27),
(44, '2018-01-08 13:14:16', 'Satuan', 'Jas ', 0, 55687, '2018-08-15 00:00:35', 'Siap', 22, 28),
(45, '2018-01-09 12:19:15', 'Satuan', 'Jas ', 0, 93286, '2018-09-25 10:34:09', 'Proses', 25, 28),
(46, '2018-01-07 19:40:13', 'Satuan', 'Jas ', 0, 36661, '2018-10-05 07:04:49', 'Proses', 15, 27),
(47, '2018-01-03 05:38:57', 'Satuan', 'Celana ', 0, 61539, '2019-01-25 06:40:26', 'Selesai', 24, 27),
(48, '2018-01-07 17:09:45', 'Satuan', 'Baju ', 0, 37118, '2018-02-22 04:46:42', 'Proses', 2, 28),
(49, '2018-01-01 07:58:06', 'Satuan', 'Bed Cover ', 0, 63593, '2018-11-28 17:25:03', 'Proses', 2, 27),
(50, '2018-01-04 01:50:19', 'Satuan', 'Jas ', 0, 86342, '2019-01-26 20:47:59', 'Selesai', 18, 28),
(51, '2018-01-04 08:19:44', 'Kiloan', '-', 4, 18198, '2018-12-06 21:48:26', 'Baru', 14, 27),
(52, '2018-01-05 20:31:27', 'Kiloan', '-', 9, 27459, '2018-05-23 12:02:41', 'Selesai', 11, 27),
(53, '2018-01-04 05:29:13', 'Kiloan', '-', 2, 57785, '2018-04-23 14:16:15', 'Baru', 16, 28),
(54, '2018-01-05 04:05:33', 'Kiloan', '-', 8, 83753, '2018-05-20 06:13:16', 'Proses', 4, 28),
(55, '2018-01-07 05:02:24', 'Kiloan', '-', 9, 24575, '2018-04-04 14:43:06', 'Baru', 12, 27),
(56, '2018-01-07 19:34:53', 'Kiloan', '-', 10, 61005, '2018-09-15 19:56:37', 'Selesai', 4, 28),
(57, '2018-01-08 11:59:36', 'Kiloan', '-', 9, 42828, '2018-10-17 06:58:18', 'Siap', 8, 28),
(58, '2018-01-02 11:21:53', 'Kiloan', '-', 5, 25204, '2019-01-12 20:45:18', 'Selesai', 25, 28),
(59, '2018-01-03 13:24:42', 'Kiloan', '-', 1, 85904, '2018-01-24 13:33:54', 'Proses', 17, 27),
(60, '2018-01-06 01:40:19', 'Kiloan', '-', 1, 17767, '2018-02-13 08:44:11', 'Selesai', 10, 28),
(61, '2018-01-01 14:30:51', 'Kiloan', '-', 3, 46427, '2019-01-22 18:45:46', 'Baru', 5, 28),
(62, '2018-01-09 10:48:03', 'Kiloan', '-', 5, 53319, '2018-03-27 17:26:39', 'Siap', 3, 27),
(63, '2018-01-08 07:54:48', 'Kiloan', '-', 1, 57275, '2018-01-26 15:41:07', 'Selesai', 1, 27),
(64, '2018-01-04 02:17:57', 'Kiloan', '-', 6, 49793, '2018-04-08 11:41:09', 'Proses', 5, 27),
(65, '2018-01-06 20:41:21', 'Kiloan', '-', 9, 98545, '2018-04-11 21:59:33', 'Siap', 15, 28),
(66, '2018-01-08 07:32:20', 'Kiloan', '-', 2, 30224, '2019-01-24 09:03:18', 'Siap', 7, 28),
(67, '2018-01-02 04:18:59', 'Kiloan', '-', 1, 83117, '2018-06-02 15:38:20', 'Siap', 17, 28),
(68, '2018-01-04 23:07:43', 'Kiloan', '-', 6, 83231, '2018-08-18 02:57:52', 'Proses', 12, 27),
(69, '2018-01-10 12:50:57', 'Kiloan', '-', 6, 58987, '2018-04-10 01:47:53', 'Selesai', 4, 27),
(70, '2018-01-02 09:12:56', 'Kiloan', '-', 8, 21732, '2018-11-24 09:57:06', 'Proses', 14, 28),
(71, '2018-01-08 08:22:55', 'Kiloan', '-', 7, 80975, '2018-05-27 05:30:24', 'Proses', 15, 27),
(72, '2018-01-10 10:52:40', 'Kiloan', '-', 8, 18039, '2018-10-27 17:07:01', 'Baru', 14, 28),
(73, '2018-01-07 10:00:20', 'Kiloan', '-', 3, 74944, '2018-10-02 10:08:24', 'Selesai', 9, 28),
(74, '2018-01-08 07:23:29', 'Kiloan', '-', 2, 33917, '2018-07-10 14:21:55', 'Proses', 23, 28),
(75, '2018-01-06 14:28:10', 'Kiloan', '-', 7, 94482, '2018-09-09 06:07:08', 'Siap', 19, 27),
(76, '2018-01-06 17:10:13', 'Kiloan', '-', 5, 7024, '2018-11-27 08:30:44', 'Proses', 14, 28),
(77, '2018-01-08 15:41:17', 'Kiloan', '-', 7, 59185, '2018-11-27 23:59:53', 'Siap', 23, 27),
(78, '2018-01-03 14:56:15', 'Kiloan', '-', 1, 70045, '2018-04-29 16:11:12', 'Proses', 16, 27),
(79, '2018-01-03 23:43:45', 'Kiloan', '-', 9, 91492, '2018-02-02 03:33:59', 'Selesai', 18, 27),
(80, '2018-01-02 06:06:10', 'Kiloan', '-', 3, 37716, '2018-02-28 21:38:15', 'Proses', 11, 27),
(81, '2018-01-03 02:36:52', 'Kiloan', '-', 5, 50311, '2018-02-06 19:34:29', 'Selesai', 16, 27),
(82, '2018-01-09 15:31:05', 'Kiloan', '-', 6, 45707, '2018-02-10 11:35:22', 'Proses', 8, 28),
(83, '2018-01-08 16:32:37', 'Kiloan', '-', 10, 92124, '2018-10-26 12:28:31', 'Selesai', 2, 28),
(84, '2018-01-09 05:48:17', 'Kiloan', '-', 3, 29479, '2018-03-24 17:52:12', 'Proses', 10, 27),
(85, '2018-01-08 01:53:50', 'Kiloan', '-', 4, 44274, '2018-07-30 04:39:22', 'Proses', 21, 27),
(86, '2018-01-10 00:48:29', 'Kiloan', '-', 5, 10662, '2018-02-09 10:52:49', 'Siap', 22, 27),
(87, '2018-01-01 19:31:45', 'Kiloan', '-', 6, 33039, '2018-07-31 04:09:51', 'Baru', 9, 27),
(88, '2018-01-08 03:18:42', 'Kiloan', '-', 3, 75072, '2018-03-28 11:26:51', 'Baru', 3, 28),
(89, '2018-01-03 03:20:19', 'Kiloan', '-', 5, 40151, '2018-05-01 16:02:54', 'Selesai', 18, 28),
(90, '2018-01-06 15:20:31', 'Kiloan', '-', 4, 47647, '2018-04-18 06:43:12', 'Siap', 4, 28),
(91, '2018-01-05 20:11:19', 'Kiloan', '-', 4, 75532, '2019-01-08 07:30:57', 'Baru', 17, 28),
(92, '2018-01-10 17:31:52', 'Kiloan', '-', 6, 13895, '2018-10-05 21:10:04', 'Selesai', 14, 28),
(93, '2018-01-09 10:48:39', 'Kiloan', '-', 9, 20262, '2018-12-14 14:32:45', 'Baru', 20, 27),
(94, '2018-01-05 16:42:13', 'Kiloan', '-', 7, 70037, '2019-01-14 20:39:12', 'Baru', 21, 27),
(95, '2018-01-03 19:14:39', 'Kiloan', '-', 8, 38730, '2018-07-25 12:25:14', 'Proses', 20, 28),
(96, '2018-01-09 10:25:07', 'Kiloan', '-', 7, 76621, '2018-04-21 17:01:45', 'Proses', 12, 28),
(97, '2018-01-07 05:54:59', 'Kiloan', '-', 7, 39968, '2018-08-01 20:26:30', 'Proses', 22, 28),
(98, '2018-01-09 00:02:03', 'Kiloan', '-', 9, 27418, '2018-05-20 19:20:24', 'Siap', 25, 28),
(99, '2018-01-04 08:28:59', 'Kiloan', '-', 2, 90417, '2019-01-18 13:44:07', 'Proses', 15, 27),
(100, '2018-01-09 14:14:37', 'Kiloan', '-', 2, 56467, '2018-05-02 09:52:10', 'Siap', 14, 27),
(101, '0000-00-00 00:00:00', 'Laundry Kiloan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 3, 1000, '0000-00-00 00:00:00', 'Baru', 3, 27),
(102, '1970-01-01 01:00:01', 'LaundrySatuan', '{\"Baju\":\"2\",\"Celana\":\"3\",\"Jas\":\"0\",\"Selimut\":\"1\",\"Bed Cover\":\"0\"}', 0, 1000, '1970-01-01 01:00:01', 'Baru', 3, 27),
(103, '1970-01-01 01:33:38', 'Laundry Kiloan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 4, 1000, '1970-01-01 01:33:38', 'Baru', 3, 27),
(104, '1970-01-01 01:33:38', 'Laundry Kiloan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 4, 1000, '1970-01-01 01:33:38', 'Baru', 3, 27),
(105, '2018-01-30 23:10:16', 'Laundry Satuan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 0, 0, '0000-00-00 00:00:00', 'Baru', 3, 27),
(106, '0000-00-00 00:00:00', 'Laundry Satuan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 0, 0, '0000-00-00 00:00:00', 'Baru', 3, 27),
(107, '2018-01-30 23:13:54', 'Laundry Satuan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 0, 0, '0000-00-00 00:00:00', 'Baru', 3, 27),
(108, '2018-01-30 23:14:49', 'Laundry Satuan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 0, 0, '0000-00-00 00:00:00', 'Baru', 3, 27),
(109, '2018-01-30 23:16:31', 'Laundry Satuan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 0, 0, '0000-00-00 00:00:00', 'Baru', 3, 27),
(110, '2018-01-31 02:20:39', 'Laundry Satuan', '{\"Baju\":\"0\",\"Celana\":\"0\",\"Jas\":\"0\",\"Selimut\":\"0\",\"Bed Cover\":\"0\"}', 0, 0, '0000-00-00 00:00:00', 'Baru', 3, 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'Haris', '12345', 2),
(2, 'Deo', '12345', 2),
(3, '12345678', '12345678', 2),
(4, 'Budi', '12345', 2),
(5, 'Dawn', '12345', 2),
(6, 'Prescott', '12345', 2),
(7, 'Melodie', '12345', 2),
(8, 'Maia', '12345', 2),
(9, 'Micah', '12345', 2),
(10, 'Skyler', '12345', 2),
(11, 'Henry', '12345', 2),
(12, 'Elmo', '12345', 2),
(13, 'Quin', '12345', 2),
(14, 'Isabella', '12345', 2),
(15, 'Clementine', '12345', 2),
(16, 'Lucy', '12345', 2),
(17, 'Wyoming', '12345', 2),
(18, 'Xanthus', '12345', 2),
(19, 'Daria', '12345', 2),
(20, 'Nerea', '12345', 2),
(21, 'Nichole', '12345', 2),
(22, 'Eagan', '12345', 2),
(23, 'Nicole', '12345', 2),
(24, 'Zahir', '12345', 2),
(25, 'Damian', '12345', 2),
(26, 'via', '12345', 2),
(27, 'admin', 'admin', 1),
(28, 'admin2', 'admin2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesanan_laundry`
--
ALTER TABLE `pesanan_laundry`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan_laundry`
--
ALTER TABLE `pesanan_laundry`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
