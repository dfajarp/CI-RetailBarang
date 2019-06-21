-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 11:33 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_retailbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `nama_brg` varchar(20) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `gambar_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_brg`, `harga_brg`, `jumlah_brg`, `deskripsi_barang`, `gambar_barang`) VALUES
('111111', '01', 'mie goreng', 25000, 490, '-', 'http://localhost/admindash/assets/images/gambar barang/unnamed.jpg'),
('121212', '01', 'mie goreng', 5000, 468, 'indomie', 'http://localhost/admindash/assets/images/gambar barang/Screenshot_3.png'),
('12233445', '01', 'wafer', 2500, 100, 'rasa coklat', 'http://localhost/admindash/assets/images/gambar barang/1b92dd6791ff213c0421db058905ab74_PXWZ7grqDOJp7j5Vzu.jpg'),
('12312', '02', 'susu ultra', 5000, 600, 'coklat', 'http://localhost/admindash/assets/images/gambar barang/ADIDAS 04.jpg'),
('12345', '01', 'teh pucuk', 2500, 0, 'rasa mangga', 'http://localhost/admindash/assets/images/gambar barang/243f15_bc0e8a013ad34944831035154a5d90d3.gif');

-- --------------------------------------------------------

--
-- Table structure for table `beli_barang`
--

CREATE TABLE `beli_barang` (
  `id_pembelian` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_barang`
--

INSERT INTO `beli_barang` (`id_pembelian`, `id_supplier`, `tanggal_beli`, `username`, `status`) VALUES
(38, 1212, '2018-04-25', 'admin1', 1),
(39, 981738, '2017-04-26', 'admin1', 1),
(40, 6736547, '2017-04-26', 'admin1', 1),
(43, 1212, '2017-04-29', 'admin1', 1),
(44, 1212, '0000-00-00', 'admin1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dbb`
--

CREATE TABLE `dbb` (
  `id_dbb` int(11) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `id_brg` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `nama_brg` varchar(20) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `gambar_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbb`
--

INSERT INTO `dbb` (`id_dbb`, `id_bb`, `id_brg`, `id_kategori`, `nama_brg`, `harga_brg`, `jumlah_brg`, `deskripsi_barang`, `gambar_barang`) VALUES
(4, 38, '12345', '01', 'teh pucuk', 2500, 25, 'rasa mangga', 'http://localhost/admindash/assets/images/gambar barang/243f15_bc0e8a013ad34944831035154a5d90d3.gif'),
(5, 39, '121212', '01', 'mie goreng', 5000, 500, 'indomie', 'http://localhost/admindash/assets/images/gambar barang/Screenshot_3.png'),
(6, 40, '12312', '02', 'susu ultra', 5000, 600, 'coklat', 'http://localhost/admindash/assets/images/gambar barang/ADIDAS 04.jpg'),
(9, 43, '111111', '01', 'mie goreng', 25000, 500, '-', 'http://localhost/admindash/assets/images/gambar barang/unnamed.jpg'),
(10, 44, '12233445', '01', 'wafer', 2500, 100, 'rasa coklat', 'http://localhost/admindash/assets/images/gambar barang/1b92dd6791ff213c0421db058905ab74_PXWZ7grqDOJp7j5Vzu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `djb`
--

CREATE TABLE `djb` (
  `id_djb` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `id_jual_brg` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `djb`
--

INSERT INTO `djb` (`id_djb`, `id_barang`, `id_jual_brg`, `harga`, `unit`, `sub_total`) VALUES
(33, '12345', 45, 5000, 11, 55000),
(34, '12345', 46, 5000, 1, 5000),
(35, '121212', 47, 10000, 32, 320000),
(36, '12345', 48, 5000, 13, 65000),
(37, '111111', 49, 5000, 10, 50000);

--
-- Triggers `djb`
--
DELIMITER $$
CREATE TRIGGER `penjualan` AFTER INSERT ON `djb` FOR EACH ROW UPDATE barang SET jumlah_brg = jumlah_brg - NEW.unit
    WHERE id_barang = NEW.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jual_brg`
--

CREATE TABLE `jual_brg` (
  `id_jual_brg` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `member_no` int(11) DEFAULT NULL,
  `nilai_transaksi` int(20) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual_brg`
--

INSERT INTO `jual_brg` (`id_jual_brg`, `tgl`, `username`, `member_no`, `nilai_transaksi`, `bayar`, `kembalian`) VALUES
(45, '2018-05-26', 'admin1', NULL, 55000, 60000, 5000),
(46, '2018-05-27', 'admin2', NULL, 5000, 10000, 5000),
(47, '2018-05-27', 'admin2', NULL, 320000, 500000, 180000),
(48, '2018-05-27', 'admin2', NULL, 65000, 75000, 10000),
(49, '2018-05-30', 'admin2', NULL, 50000, 100000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_barang`, `harga_jual`, `status`) VALUES
(104, '12345', 5000, 1),
(110, '121212', 10000, 1),
(111, '111111', 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('01', 'Makanan'),
('02', 'Minuman'),
('03', 'Elektroknik');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_no` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `valid_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_no`, `email`, `nama`, `no_telepon`, `valid_date`) VALUES
(483213, 'dhik.doank06@gmail.com', 'Dikdik fajar permadi', 2147483647, '2018-03-20'),
(524165, 'dhik.doank06@gmail.com', 'Dikdik fajar permadi', 2147483647, '2018-03-20'),
(5454564, 'dhik.doank06@gmail.com', 'Dikdik fajar permadi', 2147483647, '2018-04-20'),
(114716878, 'dhik.doank06@gmail.com', 'Dikdik fajar permadi', 2147483647, '2018-05-15'),
(897843213, 'dhik.doank06@gmail.com', 'Dikdik fajar permadi', 2147483647, '2018-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_telepon`) VALUES
(1212, 'Indomie', 'Cikalongwetan', '022 393939392'),
(981738, 'PT.Indofood', 'Jl.Cimareme', '022-362389762'),
(6736547, 'PT.Ultra Jaya', 'Jl.Gadobangkong', '022-356251324'),
(41646841, 'saya sendiri', 'cipatat', '089845612516'),
(1641614641, 'PT. Djarum Coklat', 'cibereum', '0891205450454');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `tipe_user`, `nama_lengkap`, `alamat`, `email`) VALUES
('admin1', '0192023a7bbd73250516f069df18b500', 'gudang', 'Fachturrohman', 'Cihaliwung', 'Fachtur17@gmail.com'),
('admin2', '78e0d5058803a3d6481b946b5e7a2510', 'kasir', 'Dikdik Fajar', 'Cipatat', 'dhik02@gmail.com'),
('admin3', '6eb122025310677fbac3a03a1e974835', 'manajemen', 'Ryan Irsyadul Kamil', 'Cikalongwetan', 'ryanirsyad@gmail.com'),
('admin4', '1a145a23d6e47aadfe2063f1f951e691', 'gudang', 'Ryan Irsyadul Kamil', 'Cinangsi', 'ryanirsyad33@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `beli_barang`
--
ALTER TABLE `beli_barang`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `dbb`
--
ALTER TABLE `dbb`
  ADD PRIMARY KEY (`id_dbb`),
  ADD KEY `id_brg` (`id_brg`),
  ADD KEY `id_bb` (`id_bb`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `djb`
--
ALTER TABLE `djb`
  ADD PRIMARY KEY (`id_djb`),
  ADD KEY `id_katalog` (`id_barang`),
  ADD KEY `id_jual_brg` (`id_jual_brg`);

--
-- Indexes for table `jual_brg`
--
ALTER TABLE `jual_brg`
  ADD PRIMARY KEY (`id_jual_brg`),
  ADD KEY `member_no` (`member_no`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`),
  ADD KEY `id_brg` (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_no`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli_barang`
--
ALTER TABLE `beli_barang`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `dbb`
--
ALTER TABLE `dbb`
  MODIFY `id_dbb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `djb`
--
ALTER TABLE `djb`
  MODIFY `id_djb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jual_brg`
--
ALTER TABLE `jual_brg`
  MODIFY `id_jual_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `beli_barang`
--
ALTER TABLE `beli_barang`
  ADD CONSTRAINT `beli_barang_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `beli_barang_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `dbb`
--
ALTER TABLE `dbb`
  ADD CONSTRAINT `dbb_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `dbb_ibfk_4` FOREIGN KEY (`id_bb`) REFERENCES `beli_barang` (`id_pembelian`);

--
-- Constraints for table `djb`
--
ALTER TABLE `djb`
  ADD CONSTRAINT `djb_ibfk_1` FOREIGN KEY (`id_jual_brg`) REFERENCES `jual_brg` (`id_jual_brg`);

--
-- Constraints for table `jual_brg`
--
ALTER TABLE `jual_brg`
  ADD CONSTRAINT `jual_brg_ibfk_1` FOREIGN KEY (`member_no`) REFERENCES `member` (`member_no`),
  ADD CONSTRAINT `jual_brg_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
