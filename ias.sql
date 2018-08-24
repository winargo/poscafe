-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 12:08 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ias`
--

-- --------------------------------------------------------

--
-- Table structure for table `iamexpedisi`
--

CREATE TABLE `iamexpedisi` (
  `KODE_EXPEDISI` varchar(15) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL,
  `NAMA_EXPEDISI` varchar(50) NOT NULL,
  `ALAMAT` varchar(60) NOT NULL,
  `CONTACT_PERSON` varchar(50) NOT NULL,
  `PILIHAN` varchar(25) NOT NULL DEFAULT '',
  `HARGA` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `USER_ID` varchar(10) NOT NULL,
  `NO_PER` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iammata_uang`
--

CREATE TABLE `iammata_uang` (
  `KODE_MATAUANG` varchar(6) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL DEFAULT '0',
  `NEGARA` varchar(40) NOT NULL DEFAULT '',
  `SIMBOL` varchar(5) NOT NULL DEFAULT '',
  `KURS_TUKAR` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `USER_ID` varchar(10) NOT NULL DEFAULT '',
  `PILIHAN` smallint(6) NOT NULL DEFAULT '0',
  `NAMA_MATAUANG` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iampajak`
--

CREATE TABLE `iampajak` (
  `KODE_PAJAK` varchar(2) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL DEFAULT '0',
  `PERSEN` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KETERANGAN` varchar(50) NOT NULL DEFAULT '',
  `NO_PPN_KELUARAN` varchar(20) NOT NULL DEFAULT '',
  `NO_PPN_MASUKKAN` varchar(20) NOT NULL DEFAULT '',
  `USER_ID` varchar(10) NOT NULL DEFAULT '',
  `PILIHAN` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iampilihan`
--

CREATE TABLE `iampilihan` (
  `KODE_PIL` varchar(10) NOT NULL,
  `NAMA_PIL` varchar(50) DEFAULT NULL,
  `USER_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iampilihan1`
--

CREATE TABLE `iampilihan1` (
  `KODE_PIL` varchar(10) DEFAULT NULL,
  `KODE_STOCK` varchar(25) DEFAULT NULL,
  `NAMA_STOCK` varchar(150) DEFAULT NULL,
  `JUDUL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iamproduk`
--

CREATE TABLE `iamproduk` (
  `KODE_PRODUK` varchar(6) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL,
  `NAMA_PRODUK` varchar(50) NOT NULL,
  `NAMA_SUB_PRODUK` varchar(50) NOT NULL DEFAULT '',
  `NAMA_SUB_PRODUK2` varchar(50) NOT NULL DEFAULT '',
  `USER_ID` varchar(10) NOT NULL,
  `KOMISI_HEAD` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KOMISI_SALES` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KODE_DEPT` varchar(6) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iamproduk`
--

INSERT INTO `iamproduk` (`KODE_PRODUK`, `TDK_AKTIF`, `NAMA_PRODUK`, `NAMA_SUB_PRODUK`, `NAMA_SUB_PRODUK2`, `USER_ID`, `KOMISI_HEAD`, `KOMISI_SALES`, `KODE_DEPT`) VALUES
('BF', 0, 'BEEF', '', '', 'riandy', '0.0000', '0.0000', ''),
('BUNSHI', 0, 'BREAD', 'BREAD1', 'BREAD2', 'riandy', '0.0000', '0.0000', ''),
('CC', 0, 'CHEESE', '', '', 'riandy', '0.0000', '0.0000', ''),
('CHICK', 0, 'CHICKEN', '-', '-', 'riandy', '0.0000', '0.0000', ''),
('CRC', 0, 'CHEESE EXTRA MOLOTENESE', '', '', 'riandy', '0.0000', '0.0000', ''),
('DJ', 0, 'DRINK JUICE', '', '', 'riandy', '0.0000', '0.0000', ''),
('Drink', 0, 'Soft Drink', '', '', 'riandy', '0.0000', '0.0000', ''),
('HAM', 0, 'HAMBURGER', 'BREAD3', 'BREAD3', 'tester1', '0.0000', '0.0000', ''),
('TK', 0, 'TAKO', 'MEAT', '-', 'riandy', '0.0000', '0.0000', '');

-- --------------------------------------------------------

--
-- Table structure for table `iamrumus`
--

CREATE TABLE `iamrumus` (
  `KODE_RUMUS` varchar(25) NOT NULL,
  `SATUAN` varchar(6) DEFAULT NULL,
  `KETERANGAN` varchar(100) DEFAULT NULL,
  `QTY_KECIL` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `USER_ID` varchar(15) DEFAULT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iamrumus1`
--

CREATE TABLE `iamrumus1` (
  `KODE_RUMUS` varchar(25) NOT NULL DEFAULT '',
  `KODE_STOCK` varchar(25) NOT NULL DEFAULT '',
  `NAMA_STOCK` varchar(150) NOT NULL DEFAULT '',
  `QTY` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `SATUAN` varchar(6) NOT NULL DEFAULT '',
  `QTY_KECIL` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_ITEM` smallint(6) NOT NULL DEFAULT '0',
  `HARGA` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `JUMLAH` decimal(19,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iamsetupseri`
--

CREATE TABLE `iamsetupseri` (
  `NO_SERI` varchar(3) NOT NULL DEFAULT '',
  `TDK_AKTIF` smallint(6) NOT NULL DEFAULT '0',
  `NO_URUT` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `PILIHAN` varchar(25) NOT NULL DEFAULT '',
  `USER_ID` varchar(10) NOT NULL DEFAULT '',
  `KODE_LOKASI` varchar(6) NOT NULL DEFAULT '',
  `MULTI_LOKASI` smallint(6) NOT NULL DEFAULT '0',
  `PILIH_FAKTUR` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iamsetupseri`
--

INSERT INTO `iamsetupseri` (`NO_SERI`, `TDK_AKTIF`, `NO_URUT`, `PILIHAN`, `USER_ID`, `KODE_LOKASI`, `MULTI_LOKASI`, `PILIH_FAKTUR`) VALUES
('JL', 0, '1808150001.0000', '', 'SA', '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `iamstock`
--

CREATE TABLE `iamstock` (
  `KODE_STOCK` varchar(25) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL,
  `KODE_BARCODE` varchar(25) NOT NULL DEFAULT '',
  `NAMA_STOCK` varchar(150) NOT NULL DEFAULT '',
  `KODE_TYPE` varchar(15) NOT NULL DEFAULT '',
  `KODE_PRODUK` varchar(6) NOT NULL DEFAULT '',
  `KEMAS1` varchar(5) NOT NULL DEFAULT '',
  `SATUAN2` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KEMAS2` varchar(5) NOT NULL DEFAULT '',
  `SATUAN3` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KEMAS3` varchar(5) NOT NULL DEFAULT '',
  `SATUAN4` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KEMAS4` varchar(5) NOT NULL DEFAULT '',
  `SATUANREPORT` varchar(5) NOT NULL DEFAULT '',
  `SATUANTRANSAKSI` varchar(5) NOT NULL DEFAULT '',
  `NO_SERI` smallint(6) NOT NULL,
  `NO_LOT` smallint(6) NOT NULL,
  `HARGA_BELI` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAPOKOK` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `PROFIT` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `ONGKOS` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAMINIMUM` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAJUAL1` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAJUAL2` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAJUAL3` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAJUAL4` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAJUAL5` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGAJUAL6` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `MINIMUMSTK` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `MAXIMUMSTK` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `ACC_PERSEDIAAN` varchar(20) NOT NULL DEFAULT '',
  `ACC_HARGAPOKOK` varchar(20) NOT NULL DEFAULT '',
  `ACC_PENJUALAN` varchar(20) NOT NULL DEFAULT '',
  `ACC_RETURPENJUALAN` varchar(20) NOT NULL DEFAULT '',
  `MEREK` varchar(50) NOT NULL DEFAULT '',
  `RAK` varchar(50) NOT NULL DEFAULT '',
  `BUATAN` varchar(50) NOT NULL DEFAULT '',
  `UKURAN` varchar(50) NOT NULL DEFAULT '',
  `BERAT` varchar(50) NOT NULL DEFAULT '',
  `SALDOAWAL` decimal(18,2) NOT NULL DEFAULT '0.00',
  `NAMA_SUB_PRODUK` varchar(50) NOT NULL DEFAULT '',
  `NAMA_SUB_PRODUK2` varchar(50) NOT NULL DEFAULT '',
  `IMAGEDIR` varchar(500) NOT NULL DEFAULT '',
  `USER_ID` varchar(10) NOT NULL DEFAULT '',
  `ACC_PEMBELIAN` varchar(20) NOT NULL DEFAULT '',
  `ACC_RETURPEMBELIAN` varchar(20) NOT NULL DEFAULT '',
  `ACC_BIAYAEXPEDISI` varchar(20) NOT NULL DEFAULT '',
  `KODE_MASTER` varchar(30) NOT NULL DEFAULT '',
  `KODE_MATAUANG` varchar(10) NOT NULL DEFAULT 'IDR',
  `HARGAMAXIMUM` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HIDE_PRICELIST` smallint(6) NOT NULL DEFAULT '0',
  `KOMISI` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KODE_STOCKNUM` varchar(25) NOT NULL DEFAULT '',
  `DISCOUNT_DEF` varchar(25) NOT NULL DEFAULT '',
  `SMS_CODE` varchar(10) NOT NULL DEFAULT '',
  `SMS_SPR` varchar(2) NOT NULL DEFAULT '',
  `SMS_GET` smallint(6) NOT NULL DEFAULT '0',
  `PCT_SUSUT` decimal(19,4) NOT NULL DEFAULT '1.0000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iamstock`
--

INSERT INTO `iamstock` (`KODE_STOCK`, `TDK_AKTIF`, `KODE_BARCODE`, `NAMA_STOCK`, `KODE_TYPE`, `KODE_PRODUK`, `KEMAS1`, `SATUAN2`, `KEMAS2`, `SATUAN3`, `KEMAS3`, `SATUAN4`, `KEMAS4`, `SATUANREPORT`, `SATUANTRANSAKSI`, `NO_SERI`, `NO_LOT`, `HARGA_BELI`, `HARGAPOKOK`, `PROFIT`, `ONGKOS`, `HARGAMINIMUM`, `HARGAJUAL1`, `HARGAJUAL2`, `HARGAJUAL3`, `HARGAJUAL4`, `HARGAJUAL5`, `HARGAJUAL6`, `MINIMUMSTK`, `MAXIMUMSTK`, `ACC_PERSEDIAAN`, `ACC_HARGAPOKOK`, `ACC_PENJUALAN`, `ACC_RETURPENJUALAN`, `MEREK`, `RAK`, `BUATAN`, `UKURAN`, `BERAT`, `SALDOAWAL`, `NAMA_SUB_PRODUK`, `NAMA_SUB_PRODUK2`, `IMAGEDIR`, `USER_ID`, `ACC_PEMBELIAN`, `ACC_RETURPEMBELIAN`, `ACC_BIAYAEXPEDISI`, `KODE_MASTER`, `KODE_MATAUANG`, `HARGAMAXIMUM`, `HIDE_PRICELIST`, `KOMISI`, `KODE_STOCKNUM`, `DISCOUNT_DEF`, `SMS_CODE`, `SMS_SPR`, `SMS_GET`, `PCT_SUSUT`) VALUES
('adsds', 0, '', 'HAMBURGER', 'Stock', 'HAM', 'SAK', '0.0000', '', '0.0000', '', '0.0000', '', '', '', 0, 0, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '30000.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', '', '', '', '', '', '', '', '', '0.00', 'BREAD3', 'BREAD3', './uploads/ER63592422Capture.PNG', 'tester1', '', '', '', '', 'IDR', '0.0000', 0, '0.0000', '', '', '', '', 0, '1.0000'),
('CK STK', 0, '', 'CHICKEN STEAK', 'Stock', 'CHICK', 'PCS', '0.0000', '', '0.0000', '', '0.0000', '', '', '', 0, 0, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '60000.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', '', '', '', '', '', '', '', '', '0.00', '-', '-', './uploads/ER57514700download.jpg', 'riandy', '', '', '', '', 'IDR', '0.0000', 0, '0.0000', '', '', '', '', 0, '1.0000'),
('Fries', 0, '', 'French Fries', 'Stock', 'TK', 'PKG', '0.0000', '', '0.0000', '', '0.0000', '', '', '', 0, 0, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '50000.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', '', '', '', '', '', '', '', '', '0.00', 'MEAT', '-', './uploads/ER35653985download (1).jpg', 'riandy', '', '', '', '', 'IDR', '0.0000', 0, '0.0000', '', '', '', '', 0, '1.0000'),
('TAKO TT', 0, '', 'TAKOYAKI TAM TAM', 'Stock', 'TK', 'BOWL', '0.0000', '', '0.0000', '', '0.0000', '', '', '', 0, 0, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '20000.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', '', '', '', '', '', '', '', '', '0.00', 'MEAT', '-', './uploads/ER66701340download.jpg', 'riandy', '', '', '', '', 'IDR', '0.0000', 0, '0.0000', '', '', '', '', 0, '1.0000');

-- --------------------------------------------------------

--
-- Table structure for table `iamstockseri`
--

CREATE TABLE `iamstockseri` (
  `KODE_STOCK` varchar(25) NOT NULL DEFAULT '',
  `NO_SERI` varchar(30) NOT NULL DEFAULT '',
  `FAKTUR_IN` varchar(30) NOT NULL DEFAULT '',
  `TGL_IN` datetime DEFAULT NULL,
  `FAKTUR_OUT` varchar(30) DEFAULT NULL,
  `TGL_OUT` datetime DEFAULT NULL,
  `RFAKTUR_IN` varchar(30) DEFAULT NULL,
  `RTGL_IN` datetime DEFAULT NULL,
  `RFAKTUR_OUT` varchar(30) NOT NULL DEFAULT '',
  `RTGL_OUT` datetime DEFAULT NULL,
  `AKTIF` tinyint(1) NOT NULL DEFAULT '0',
  `HARGA_POKOK` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `RHARGA_POKOK` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_ITEM_IN` smallint(6) NOT NULL DEFAULT '0',
  `TGL_EXPIRED` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iamtcustomer`
--

CREATE TABLE `iamtcustomer` (
  `KODE_TCUSTOMER` varchar(6) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL,
  `NAMA_TCUSTOMER` varchar(50) NOT NULL,
  `USER_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iamwilayah`
--

CREATE TABLE `iamwilayah` (
  `KODE_WILAYAH` varchar(6) NOT NULL,
  `TDK_AKTIF` smallint(6) NOT NULL DEFAULT '0',
  `NAMA_WILAYAH` varchar(50) NOT NULL DEFAULT '',
  `NAMA_AREA` varchar(50) NOT NULL DEFAULT '',
  `USER_ID` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iappenjualan`
--

CREATE TABLE `iappenjualan` (
  `NO_FAKTUR` varchar(25) NOT NULL,
  `KODE_LOKASI` varchar(6) NOT NULL,
  `KODE_CUSTOMER` varchar(25) NOT NULL,
  `TANGGAL` datetime NOT NULL,
  `J_TEMPO` datetime NOT NULL,
  `KODE_MATAUANG` varchar(6) NOT NULL,
  `KURS_TUKAR` decimal(19,4) NOT NULL,
  `KODE_SALESMAN` varchar(15) NOT NULL,
  `JUMLAH` decimal(19,4) NOT NULL,
  `JUMLAH_FAKTUR_RP` decimal(19,4) NOT NULL,
  `DISCOUNT` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `RETUR_PANJAR` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `BAYAR` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `USER_ID` varchar(10) NOT NULL,
  `FAKTUR_DO` tinyint(1) NOT NULL DEFAULT '0',
  `KETERANGAN` varchar(500) NOT NULL DEFAULT '',
  `KET_ANGSURAN` varchar(200) NOT NULL DEFAULT '',
  `TERBILANG` varchar(500) DEFAULT NULL,
  `DN` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `TGL_TAGIH` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iappenjualan`
--

INSERT INTO `iappenjualan` (`NO_FAKTUR`, `KODE_LOKASI`, `KODE_CUSTOMER`, `TANGGAL`, `J_TEMPO`, `KODE_MATAUANG`, `KURS_TUKAR`, `KODE_SALESMAN`, `JUMLAH`, `JUMLAH_FAKTUR_RP`, `DISCOUNT`, `RETUR_PANJAR`, `BAYAR`, `USER_ID`, `FAKTUR_DO`, `KETERANGAN`, `KET_ANGSURAN`, `TERBILANG`, `DN`, `TGL_TAGIH`) VALUES
('1807200007', 'web', 'CASH', '2018-07-20 02:30:30', '2018-07-20 02:30:30', 'IDR', '1.0000', 'web', '130000.0000', '130000.0000', '0.0000', '0.0000', '800000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1807200008', 'web', 'CASH', '2018-07-20 02:30:42', '2018-07-20 02:30:42', 'IDR', '1.0000', 'web', '110000.0000', '110000.0000', '0.0000', '0.0000', '200000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1807200009', 'web', 'CASH', '2018-07-20 03:21:07', '2018-07-20 03:21:07', 'IDR', '1.0000', 'web', '80000.0000', '80000.0000', '0.0000', '0.0000', '90000.0000', 'Riandy', 0, '', '', NULL, '0.0000', NULL),
('1807200010', 'web', 'CASH', '2018-07-20 03:26:17', '2018-07-20 03:26:17', 'IDR', '1.0000', 'web', '80000.0000', '80000.0000', '0.0000', '0.0000', '90000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1807200011', 'web', 'CASH', '2018-07-20 03:28:32', '2018-07-20 03:28:32', 'IDR', '1.0000', 'web', '80000.0000', '80000.0000', '0.0000', '0.0000', '90000.0000', 'Riandy', 0, '', '', NULL, '0.0000', NULL),
('1808030001', 'web', 'CASH', '2018-08-04 12:25:55', '2018-08-04 12:25:55', 'IDR', '1.0000', 'web', '390000.0000', '390000.0000', '0.0000', '0.0000', '390000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1808040001', 'web', 'CASH', '2018-08-04 12:27:50', '2018-08-04 12:27:50', 'IDR', '1.0000', 'web', '100000.0000', '100000.0000', '0.0000', '0.0000', '100000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1808040002', 'web', 'CASH', '2018-12-31 12:44:38', '2018-08-04 12:44:38', 'IDR', '1.0000', 'web', '200000.0000', '200000.0000', '0.0000', '0.0000', '600000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1808040003', 'web', 'CASH', '2018-08-04 12:47:10', '2018-08-04 12:47:10', 'IDR', '1.0000', 'web', '80000.0000', '80000.0000', '0.0000', '0.0000', '80000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1808040004', 'web', 'CASH', '2018-08-04 12:50:13', '2018-08-04 12:50:13', 'IDR', '1.0000', 'web', '110000.0000', '110000.0000', '0.0000', '0.0000', '110000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1808110001', 'web', 'CASH', '2018-08-11 08:02:00', '2018-08-11 08:02:00', 'IDR', '1.0000', 'web', '90000.0000', '90000.0000', '0.0000', '0.0000', '90000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL),
('1808140001', 'web', 'CASH', '2018-08-14 08:48:09', '2018-08-14 08:48:09', 'IDR', '1.0000', 'web', '110000.0000', '110000.0000', '0.0000', '0.0000', '110000.0000', 'riandy', 0, '', '', NULL, '0.0000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iatabsence`
--

CREATE TABLE `iatabsence` (
  `DATE_DATA` date NOT NULL,
  `DATE_IN` date NOT NULL,
  `DATE_OUT` date NOT NULL,
  `USER_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iatpenjualan`
--

CREATE TABLE `iatpenjualan` (
  `NO_FAKTUR` varchar(25) NOT NULL,
  `KODE_LOKASI` varchar(6) NOT NULL DEFAULT '',
  `KODE_CUSTOMER` varchar(25) NOT NULL DEFAULT '',
  `DIKIRIM_KE` varchar(200) NOT NULL DEFAULT '',
  `TANGGAL` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NOMOR_PO` varchar(50) NOT NULL DEFAULT '',
  `KODE_MATAUANG` varchar(6) NOT NULL DEFAULT '',
  `KURS_TUKAR` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `HARGA_PILIHAN` varchar(1) NOT NULL DEFAULT '1',
  `KODE_EXPEDISI` varchar(15) NOT NULL DEFAULT '',
  `KODE_SALESMAN` varchar(15) NOT NULL DEFAULT '',
  `KETERANGAN` varchar(150) NOT NULL DEFAULT '',
  `JUMLAH_FAKTUR` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `DISCOUNT_KHUSUS` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `DISCOUNT_NILAI` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `PPN_NILAI` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `JUMLAH_FAKTUR_RP` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `USER_ID` varchar(10) NOT NULL DEFAULT '',
  `CARA_BAYAR` varchar(15) NOT NULL DEFAULT '',
  `NO_TAGIHAN` varchar(25) NOT NULL DEFAULT '',
  `FAKTUR_DO` smallint(6) NOT NULL DEFAULT '0',
  `PRINT_FAKTUR` smallint(6) NOT NULL DEFAULT '0',
  `PRINT_SJALAN` smallint(6) NOT NULL DEFAULT '0',
  `KODE_SUB_CUSTOMER` varchar(30) NOT NULL DEFAULT '',
  `EXPORT` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iatpenjualan`
--

INSERT INTO `iatpenjualan` (`NO_FAKTUR`, `KODE_LOKASI`, `KODE_CUSTOMER`, `DIKIRIM_KE`, `TANGGAL`, `NOMOR_PO`, `KODE_MATAUANG`, `KURS_TUKAR`, `HARGA_PILIHAN`, `KODE_EXPEDISI`, `KODE_SALESMAN`, `KETERANGAN`, `JUMLAH_FAKTUR`, `DISCOUNT_KHUSUS`, `DISCOUNT_NILAI`, `PPN_NILAI`, `JUMLAH_FAKTUR_RP`, `USER_ID`, `CARA_BAYAR`, `NO_TAGIHAN`, `FAKTUR_DO`, `PRINT_FAKTUR`, `PRINT_SJALAN`, `KODE_SUB_CUSTOMER`, `EXPORT`) VALUES
('1807200007', 'web', 'CASH', '-', '2018-07-20 02:30:30', '', 'IDR', '1.0000', '1', '', 'CASH', '', '130000.0000', '0.0000', '0.0000', '0.0000', '130000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1807200008', 'web', 'CASH', '-', '2018-07-20 02:30:42', '', 'IDR', '1.0000', '1', '', 'CASH', '', '110000.0000', '0.0000', '0.0000', '0.0000', '110000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1807200009', 'web', 'CASH', '-', '2018-07-20 03:21:07', '', 'IDR', '1.0000', '1', '', 'CASH', '', '80000.0000', '0.0000', '0.0000', '0.0000', '80000.0000', 'Riandy', 'CASH', '', 0, 0, 0, '', 0),
('1807200010', 'web', 'CASH', '-', '2018-07-20 03:26:17', '', 'IDR', '1.0000', '1', '', 'CASH', '', '80000.0000', '0.0000', '0.0000', '0.0000', '80000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1807200011', 'web', 'CASH', '-', '2018-07-20 03:28:32', '', 'IDR', '1.0000', '1', '', 'CASH', '', '80000.0000', '0.0000', '0.0000', '0.0000', '80000.0000', 'Riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808030001', 'web', 'CASH', '-', '2018-08-04 12:25:55', '', 'IDR', '1.0000', '1', '', 'CASH', '', '390000.0000', '0.0000', '0.0000', '0.0000', '390000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808040001', 'web', 'CASH', '-', '2018-08-04 12:27:50', '', 'IDR', '1.0000', '1', '', 'CASH', '', '100000.0000', '0.0000', '0.0000', '0.0000', '100000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808040002', 'web', 'CASH', '-', '2018-08-04 12:44:38', '', 'IDR', '1.0000', '1', '', 'CASH', '', '200000.0000', '0.0000', '0.0000', '0.0000', '200000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808040003', 'web', 'CASH', '-', '2018-08-04 12:47:10', '', 'IDR', '1.0000', '1', '', 'CASH', '', '80000.0000', '0.0000', '0.0000', '0.0000', '80000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808040004', 'web', 'CASH', '-', '2018-08-04 12:50:13', '', 'IDR', '1.0000', '1', '', 'CASH', '', '110000.0000', '0.0000', '0.0000', '0.0000', '110000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808110001', 'web', 'CASH', '-', '2018-08-11 08:02:00', '', 'IDR', '1.0000', '1', '', 'CASH', '', '90000.0000', '0.0000', '0.0000', '0.0000', '90000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0),
('1808140001', 'web', 'CASH', '-', '2018-08-14 08:48:09', '', 'IDR', '1.0000', '1', '', 'CASH', '', '110000.0000', '0.0000', '0.0000', '0.0000', '110000.0000', 'riandy', 'CASH', '', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iatpenjualan1`
--

CREATE TABLE `iatpenjualan1` (
  `NO_FAKTUR` varchar(25) NOT NULL DEFAULT '',
  `KODE_STOCK` varchar(25) NOT NULL DEFAULT '',
  `NAMA_STOCK` varchar(150) NOT NULL DEFAULT '',
  `QTY` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `SATUAN` varchar(5) NOT NULL DEFAULT '',
  `HARGA_JUAL` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `DISCOUNT` varchar(20) NOT NULL DEFAULT '0',
  `DISCOUNT_NILAI` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `JUMLAH` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `PPN` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KODE_PAJAK` varchar(2) NOT NULL DEFAULT '',
  `KODE_DEPARTEMEN` varchar(5) NOT NULL DEFAULT '',
  `KODE_PROYEK` varchar(15) NOT NULL DEFAULT '',
  `HARGA_LIST` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `QTY_KECIL` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `KODE_GROUP` varchar(25) NOT NULL DEFAULT '',
  `PRINT_ITEM` smallint(6) NOT NULL DEFAULT '0',
  `GROUP_PIL` varchar(1) NOT NULL DEFAULT '',
  `NOMOR_SO` varchar(25) NOT NULL DEFAULT '',
  `BONUS` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `SATUAN_BNS` varchar(5) NOT NULL DEFAULT '',
  `QTY_KECIL_BNS` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `DO_HARGA_POKOK` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `QTY_RDO` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `QTY_RETUR` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_ITEM` smallint(6) NOT NULL DEFAULT '0',
  `QTY_TDO` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_LOT` varchar(30) NOT NULL DEFAULT '',
  `NOMOR_KS` varchar(25) NOT NULL DEFAULT '',
  `PACKING` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `SATUAN_PACK` varchar(5) NOT NULL DEFAULT '',
  `DISCOUNT_PIUTANG` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_SEND` varchar(30) NOT NULL DEFAULT '',
  `SENDING` smallint(6) NOT NULL DEFAULT '0',
  `STATUS` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iatpenjualan1`
--

INSERT INTO `iatpenjualan1` (`NO_FAKTUR`, `KODE_STOCK`, `NAMA_STOCK`, `QTY`, `SATUAN`, `HARGA_JUAL`, `DISCOUNT`, `DISCOUNT_NILAI`, `JUMLAH`, `PPN`, `KODE_PAJAK`, `KODE_DEPARTEMEN`, `KODE_PROYEK`, `HARGA_LIST`, `QTY_KECIL`, `KODE_GROUP`, `PRINT_ITEM`, `GROUP_PIL`, `NOMOR_SO`, `BONUS`, `SATUAN_BNS`, `QTY_KECIL_BNS`, `DO_HARGA_POKOK`, `QTY_RDO`, `QTY_RETUR`, `NO_ITEM`, `QTY_TDO`, `NO_LOT`, `NOMOR_KS`, `PACKING`, `SATUAN_PACK`, `DISCOUNT_PIUTANG`, `NO_SEND`, `SENDING`, `STATUS`) VALUES
('1807200007', 'Fries', 'French Fries', '2.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200007', 'adsds', 'HAMBURGER', '1.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200008', 'adsds', 'HAMBURGER', '2.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200008', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200009', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200009', 'adsds', 'HAMBURGER', '1.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200010', 'adsds', 'HAMBURGER', '1.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200010', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200011', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1807200011', 'adsds', 'HAMBURGER', '1.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808030001', 'Fries', 'French Fries', '3.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808030001', 'CK STK', 'CHICKEN STEAK', '4.0000', 'pcs', '60000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808040001', 'Fries', 'French Fries', '2.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808040002', 'Fries', 'French Fries', '4.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808040003', 'adsds', 'HAMBURGER', '1.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808040003', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808040004', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808040004', 'CK STK', 'CHICKEN STEAK', '1.0000', 'pcs', '60000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808110001', 'CK STK', 'CHICKEN STEAK', '1.0000', 'pcs', '60000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808110001', 'adsds', 'HAMBURGER', '1.0000', 'pcs', '30000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808140001', 'CK STK', 'CHICKEN STEAK', '1.0000', 'pcs', '60000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 1, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, ''),
('1808140001', 'Fries', 'French Fries', '1.0000', 'pcs', '50000.0000', '', '0.0000', '0.0000', '0.0000', 'N', '00', '', '0.0000', '1.0000', '', 1, '', '', '1.0000', '', '0.0000', '0.0000', '0.0000', '0.0000', 2, '0.0000', '', '', '0.0000', '', '0.0000', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `iatpenjualanpos`
--

CREATE TABLE `iatpenjualanpos` (
  `NO_FAKTUR` varchar(25) NOT NULL,
  `JUMLAH_FAKTUR_RP` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `JUMLAH_CASH` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `JUMLAH_CREDIT` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_KARTU` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pospenjualan1`
--

CREATE TABLE `pospenjualan1` (
  `NO_FAKTUR` varchar(25) NOT NULL DEFAULT '',
  `KODE_STOCK` varchar(25) NOT NULL DEFAULT '',
  `NAMA_STOCK` varchar(150) NOT NULL DEFAULT '',
  `QTY` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `SATUAN` varchar(5) NOT NULL DEFAULT '',
  `HARGA_JUAL` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `DISCOUNT` varchar(20) NOT NULL DEFAULT '0',
  `DISCOUNT_NILAI` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `JUMLAH` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `NO_ITEM` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xerror`
--

CREATE TABLE `xerror` (
  `KODE_PARAM` int(11) NOT NULL,
  `NAMA_PARAM` varchar(50) NOT NULL,
  `NILAI_PARAM` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xgroup`
--

CREATE TABLE `xgroup` (
  `GROUP_ID` varchar(15) NOT NULL,
  `GROUP_NAME` varchar(40) DEFAULT NULL,
  `ISADMIN` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xgroupperm`
--

CREATE TABLE `xgroupperm` (
  `GROUP_ID` varchar(15) NOT NULL,
  `PERM_ID` int(11) NOT NULL,
  `OPERATOR` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xgroupuser`
--

CREATE TABLE `xgroupuser` (
  `GROUP_ID` varchar(15) NOT NULL,
  `USER_ID` varchar(15) NOT NULL,
  `OPERATOR` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xhistory`
--

CREATE TABLE `xhistory` (
  `TANGGAL` datetime NOT NULL,
  `USER_ID` varchar(10) NOT NULL DEFAULT '',
  `MODUL` varchar(40) NOT NULL DEFAULT '',
  `KETERANGAN` varchar(8000) NOT NULL DEFAULT '',
  `NOMOR` smallint(6) NOT NULL DEFAULT '0',
  `CEK_PASS` tinyint(1) NOT NULL DEFAULT '0',
  `USER_PASS` varchar(10) NOT NULL DEFAULT '',
  `DATE_PASS` datetime DEFAULT NULL,
  `OTORITAS` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xmenu`
--

CREATE TABLE `xmenu` (
  `MENU_ID` int(11) NOT NULL,
  `MENU_GROUP_ID` int(11) DEFAULT NULL,
  `MENU_NAME` varchar(50) DEFAULT NULL,
  `CALLMENU` varchar(50) DEFAULT NULL,
  `FORM_NAME` varchar(50) DEFAULT NULL,
  `URUT` smallint(6) NOT NULL DEFAULT '0',
  `TIPE_MENU` varchar(1) NOT NULL DEFAULT 'F',
  `REPORT` varchar(20) NOT NULL DEFAULT '',
  `REPORT_URUT` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xparam`
--

CREATE TABLE `xparam` (
  `KODE_PARAM` int(11) NOT NULL,
  `NAMA_PARAM` varchar(50) NOT NULL,
  `NILAI_PARAM` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xparam`
--

INSERT INTO `xparam` (`KODE_PARAM`, `NAMA_PARAM`, `NILAI_PARAM`) VALUES
(1, 'DATERESET', '15/08/2018');

-- --------------------------------------------------------

--
-- Table structure for table `xpermission`
--

CREATE TABLE `xpermission` (
  `PERM_ID` int(11) NOT NULL,
  `PERM_NAME` varchar(60) NOT NULL,
  `MODULE_NAME` varchar(30) NOT NULL,
  `SECTION_NAME` varchar(15) NOT NULL,
  `POS` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xuser`
--

CREATE TABLE `xuser` (
  `USER_ID` varchar(10) NOT NULL,
  `USER_NAME` varchar(40) DEFAULT NULL,
  `ADMIN` int(1) NOT NULL,
  `PASSWORD` varchar(60) DEFAULT NULL,
  `KODE_LOKASI` varchar(6) NOT NULL DEFAULT '',
  `MULTI_LOKASI` smallint(6) NOT NULL DEFAULT '0',
  `ONLINE` smallint(6) NOT NULL DEFAULT '0',
  `TANGGAL1` datetime DEFAULT NULL,
  `TANGGAL2` datetime DEFAULT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xuser`
--

INSERT INTO `xuser` (`USER_ID`, `USER_NAME`, `ADMIN`, `PASSWORD`, `KODE_LOKASI`, `MULTI_LOKASI`, `ONLINE`, `TANGGAL1`, `TANGGAL2`, `STATUS`) VALUES
('NINGSIH', 'NN', 0, '6512bd43d9caa6e02c990b0a82652dca', '', 0, 0, '2018-08-04 19:55:22', NULL, 1),
('Riandy', 'rw', 1, '81dc9bdb52d04dc20036dbd8313ed055', '', 0, 1, '2018-06-22 00:24:41', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xuserlog`
--

CREATE TABLE `xuserlog` (
  `USER_ID` varchar(15) NOT NULL,
  `COMPUTER_NAME` varchar(30) NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL DEFAULT '0',
  `LAST_LOGIN` datetime DEFAULT NULL,
  `LAST_LOGOUT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iamexpedisi`
--
ALTER TABLE `iamexpedisi`
  ADD PRIMARY KEY (`KODE_EXPEDISI`);

--
-- Indexes for table `iammata_uang`
--
ALTER TABLE `iammata_uang`
  ADD PRIMARY KEY (`KODE_MATAUANG`);

--
-- Indexes for table `iampajak`
--
ALTER TABLE `iampajak`
  ADD PRIMARY KEY (`KODE_PAJAK`);

--
-- Indexes for table `iampilihan`
--
ALTER TABLE `iampilihan`
  ADD PRIMARY KEY (`KODE_PIL`);

--
-- Indexes for table `iampilihan1`
--
ALTER TABLE `iampilihan1`
  ADD KEY `FK_IAMPILIHAN1_IAMSTOCK` (`KODE_STOCK`);

--
-- Indexes for table `iamproduk`
--
ALTER TABLE `iamproduk`
  ADD PRIMARY KEY (`KODE_PRODUK`,`NAMA_SUB_PRODUK`,`NAMA_SUB_PRODUK2`);

--
-- Indexes for table `iamrumus`
--
ALTER TABLE `iamrumus`
  ADD PRIMARY KEY (`KODE_RUMUS`);

--
-- Indexes for table `iamrumus1`
--
ALTER TABLE `iamrumus1`
  ADD PRIMARY KEY (`KODE_RUMUS`,`KODE_STOCK`,`NO_ITEM`),
  ADD KEY `FK_IAMRUMUS1_IAMSTOCK` (`KODE_STOCK`);

--
-- Indexes for table `iamsetupseri`
--
ALTER TABLE `iamsetupseri`
  ADD PRIMARY KEY (`NO_SERI`);

--
-- Indexes for table `iamstock`
--
ALTER TABLE `iamstock`
  ADD PRIMARY KEY (`KODE_STOCK`),
  ADD KEY `FK_IAMSTOCK_IAMPRODUK` (`KODE_PRODUK`,`NAMA_SUB_PRODUK`,`NAMA_SUB_PRODUK2`);

--
-- Indexes for table `iamstockseri`
--
ALTER TABLE `iamstockseri`
  ADD PRIMARY KEY (`KODE_STOCK`,`NO_SERI`,`FAKTUR_IN`,`RFAKTUR_OUT`);

--
-- Indexes for table `iamtcustomer`
--
ALTER TABLE `iamtcustomer`
  ADD PRIMARY KEY (`KODE_TCUSTOMER`);

--
-- Indexes for table `iamwilayah`
--
ALTER TABLE `iamwilayah`
  ADD PRIMARY KEY (`KODE_WILAYAH`,`NAMA_AREA`);

--
-- Indexes for table `iappenjualan`
--
ALTER TABLE `iappenjualan`
  ADD PRIMARY KEY (`NO_FAKTUR`,`KET_ANGSURAN`),
  ADD KEY `FK_IAPPENJUALAN_IAMCUSTOMER1` (`KODE_CUSTOMER`),
  ADD KEY `FK_IAPPENJUALAN_IAMLOKASI` (`KODE_LOKASI`),
  ADD KEY `FK_IAPPENJUALAN_IAMMATA_UANG` (`KODE_MATAUANG`),
  ADD KEY `FK_IAPPENJUALAN_IAMSALESMAN` (`KODE_SALESMAN`);

--
-- Indexes for table `iatpenjualan`
--
ALTER TABLE `iatpenjualan`
  ADD PRIMARY KEY (`NO_FAKTUR`);

--
-- Indexes for table `iatpenjualan1`
--
ALTER TABLE `iatpenjualan1`
  ADD KEY `FK_IATPENJUALAN1_IAMSTOCK` (`KODE_STOCK`);

--
-- Indexes for table `iatpenjualanpos`
--
ALTER TABLE `iatpenjualanpos`
  ADD PRIMARY KEY (`NO_FAKTUR`);

--
-- Indexes for table `pospenjualan1`
--
ALTER TABLE `pospenjualan1`
  ADD PRIMARY KEY (`NO_FAKTUR`,`KODE_STOCK`,`NO_ITEM`),
  ADD KEY `FK_POSPENJUALAN1_IAMSTOCK` (`KODE_STOCK`);

--
-- Indexes for table `xerror`
--
ALTER TABLE `xerror`
  ADD PRIMARY KEY (`NAMA_PARAM`);

--
-- Indexes for table `xgroup`
--
ALTER TABLE `xgroup`
  ADD PRIMARY KEY (`GROUP_ID`);

--
-- Indexes for table `xgroupperm`
--
ALTER TABLE `xgroupperm`
  ADD PRIMARY KEY (`GROUP_ID`,`PERM_ID`);

--
-- Indexes for table `xgroupuser`
--
ALTER TABLE `xgroupuser`
  ADD PRIMARY KEY (`GROUP_ID`,`USER_ID`);

--
-- Indexes for table `xhistory`
--
ALTER TABLE `xhistory`
  ADD PRIMARY KEY (`TANGGAL`,`USER_ID`,`NOMOR`);

--
-- Indexes for table `xmenu`
--
ALTER TABLE `xmenu`
  ADD PRIMARY KEY (`MENU_ID`);

--
-- Indexes for table `xparam`
--
ALTER TABLE `xparam`
  ADD PRIMARY KEY (`KODE_PARAM`);

--
-- Indexes for table `xpermission`
--
ALTER TABLE `xpermission`
  ADD PRIMARY KEY (`PERM_NAME`,`MODULE_NAME`,`SECTION_NAME`);

--
-- Indexes for table `xuser`
--
ALTER TABLE `xuser`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `xuserlog`
--
ALTER TABLE `xuserlog`
  ADD PRIMARY KEY (`USER_ID`,`COMPUTER_NAME`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iampilihan1`
--
ALTER TABLE `iampilihan1`
  ADD CONSTRAINT `FK_IAMPILIHAN1_IAMSTOCK` FOREIGN KEY (`KODE_STOCK`) REFERENCES `iamstock` (`KODE_STOCK`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `iamrumus1`
--
ALTER TABLE `iamrumus1`
  ADD CONSTRAINT `FK_IAMRUMUS1_IAMSTOCK` FOREIGN KEY (`KODE_STOCK`) REFERENCES `iamstock` (`KODE_STOCK`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `iamstock`
--
ALTER TABLE `iamstock`
  ADD CONSTRAINT `FK_IAMSTOCK_IAMPRODUK` FOREIGN KEY (`KODE_PRODUK`,`NAMA_SUB_PRODUK`,`NAMA_SUB_PRODUK2`) REFERENCES `iamproduk` (`KODE_PRODUK`, `NAMA_SUB_PRODUK`, `NAMA_SUB_PRODUK2`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `iamstockseri`
--
ALTER TABLE `iamstockseri`
  ADD CONSTRAINT `FK_IAMSTOCKSERI_IAMSTOCK` FOREIGN KEY (`KODE_STOCK`) REFERENCES `iamstock` (`KODE_STOCK`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `iatpenjualan1`
--
ALTER TABLE `iatpenjualan1`
  ADD CONSTRAINT `FK_IATPENJUALAN1_IAMSTOCK` FOREIGN KEY (`KODE_STOCK`) REFERENCES `iamstock` (`KODE_STOCK`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
