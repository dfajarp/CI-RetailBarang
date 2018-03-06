-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mar 2018 pada 08.51
-- Versi Server: 10.1.28-MariaDB
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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `gambar_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `deskripsi_barang`, `gambar_barang`) VALUES
('7659938', '02', 'Ultra Milk Full Cream :\r\n-200ml\r\n-24 packs', ''),
('983903', '01', 'Indomie goreng :\r\n-Bumbu\r\n-Minyak\r\n-Kecap Manis\r\n-Saus Cabe \r\n-Bawang Goreng', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli_barang`
--

CREATE TABLE `beli_barang` (
  `id_pembelian` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli_barang`
--

INSERT INTO `beli_barang` (`id_pembelian`, `id_supplier`, `tanggal_beli`, `username`, `status`) VALUES
(106, 1278382, '2018-03-21', 'admin1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbb`
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
-- Dumping data untuk tabel `dbb`
--

INSERT INTO `dbb` (`id_dbb`, `id_bb`, `id_brg`, `id_kategori`, `nama_brg`, `harga_brg`, `jumlah_brg`, `deskripsi_barang`, `gambar_barang`) VALUES
(106, 0, '9797', '03', 'laptop', 2147483647, 6, 'limited', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `djb`
--

CREATE TABLE `djb` (
  `id_djb` int(11) NOT NULL,
  `id_brg` varchar(20) NOT NULL,
  `id_jual_brg` int(11) NOT NULL,
  `id_katalog` int(11) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual_brg`
--

CREATE TABLE `jual_brg` (
  `id_jual_brg` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `member_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(11) NOT NULL,
  `id_brg` varchar(20) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('01', 'Makanan'),
('02', 'Minuman'),
('03', 'Elektroknik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_no` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `valid_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_telepon`) VALUES
(5675, 'reechese', 'jl.mana', '0987999'),
(1278382, 'Indofood', 'Jl.cimareme', '022-654321'),
(648265267, 'ultrajaya', 'jl.gadobangkong', '022-673974');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `tipe_user`) VALUES
('admin 3', '6eb122025310677fbac3a03a1e974835', 'manajemen'),
('admin1', '0192023a7bbd73250516f069df18b500', 'gudang'),
('admin2', '78e0d5058803a3d6481b946b5e7a2510', 'kasir');

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
  ADD KEY `id_katalog` (`id_brg`),
  ADD KEY `id_jual_brg` (`id_jual_brg`),
  ADD KEY `id_katalog_2` (`id_katalog`);

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
  ADD KEY `id_brg` (`id_brg`);

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
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `jual_brg`
--
ALTER TABLE `jual_brg`
  MODIFY `id_jual_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `beli_barang`
--
ALTER TABLE `beli_barang`
  ADD CONSTRAINT `beli_barang_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `beli_barang_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `dbb`
--
ALTER TABLE `dbb`
  ADD CONSTRAINT `dbb_ibfk_2` FOREIGN KEY (`id_dbb`) REFERENCES `beli_barang` (`id_pembelian`),
  ADD CONSTRAINT `dbb_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `djb`
--
ALTER TABLE `djb`
  ADD CONSTRAINT `djb_ibfk_1` FOREIGN KEY (`id_jual_brg`) REFERENCES `jual_brg` (`id_jual_brg`),
  ADD CONSTRAINT `djb_ibfk_2` FOREIGN KEY (`id_katalog`) REFERENCES `katalog` (`id_katalog`);

--
-- Ketidakleluasaan untuk tabel `jual_brg`
--
ALTER TABLE `jual_brg`
  ADD CONSTRAINT `jual_brg_ibfk_1` FOREIGN KEY (`member_no`) REFERENCES `member` (`member_no`),
  ADD CONSTRAINT `jual_brg_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_brg`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
