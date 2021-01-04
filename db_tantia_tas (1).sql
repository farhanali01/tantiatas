-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 20.59
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tantia_tas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_card`
--

CREATE TABLE `tbl_card` (
  `id_card` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_card`
--

INSERT INTO `tbl_card` (`id_card`, `id_users`, `id_produk`, `qty`, `status`) VALUES
(1, 2, 10, 1, 1),
(2, 2, 8, 1, 1),
(3, 2, 9, 1, 1),
(4, 2, 9, 1, 1),
(5, 2, 11, 4, 1),
(6, 2, 9, 1, 1),
(10, 2, 11, 1, 1),
(12, 2, 9, 1, 1),
(18, 2, 8, 1, 1),
(19, 2, 9, 1, 1),
(20, 2, 18, 1, 1),
(21, 2, 9, 1, 1),
(24, 2, 18, 1, 1),
(30, 5, 18, 1, 1),
(32, 2, 18, 1, 1),
(33, 2, 18, 1, 1),
(34, 5, 18, 1, 1),
(36, 2, 18, 1, 1),
(38, 2, 13, 1, 1),
(40, 2, 18, 1, 1),
(41, 2, 18, 1, 1),
(42, 2, 18, 1, 1),
(43, 2, 18, 1, 1),
(44, 2, 18, 1, 1),
(45, 2, 11, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_user`
--

CREATE TABLE `tbl_detail_user` (
  `id_detail` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `negara` varchar(70) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_user`
--

INSERT INTO `tbl_detail_user` (`id_detail`, `id_users`, `negara`, `kota`, `tgl_lahir`, `alamat`, `hp`, `kode_pos`, `foto`) VALUES
(1, 2, 'Singapura', 'Jakarta Barat', '0000-00-00', 'Nusa Indah', '08971234567', '13930', 'foto4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'TAS RANSEL'),
(8, 'TAS SLEMPANG'),
(9, 'TAS JINJING'),
(10, 'TAS LAPTOP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `bobot` float NOT NULL,
  `tipe_kriteria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kriteria`, `bobot`, `tipe_kriteria`) VALUES
(1, 'bahan', 0.3, 'benefit'),
(2, 'harga', 0.5, 'cost'),
(3, 'berat', 0.2, 'cost');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normalisasi_produk`
--

CREATE TABLE `tbl_normalisasi_produk` (
  `id_normalisasi` int(11) NOT NULL,
  `nilai_harga` float NOT NULL,
  `nilai_berat` float NOT NULL,
  `nilai_bahan` float NOT NULL,
  `total_nilai` float NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_normalisasi_produk`
--

INSERT INTO `tbl_normalisasi_produk` (`id_normalisasi`, `nilai_harga`, `nilai_berat`, `nilai_bahan`, `total_nilai`, `id_produk`) VALUES
(258, 0.0857143, 0.1, 0.3, 0.00257143, 18),
(259, 0.04, 0.175, 0.2, 0.0014, 13),
(260, 0.3, 0.2, 0.1, 0.006, 11),
(261, 0.428571, 0.175, 0.2, 0.015, 10),
(262, 0.5, 0.14, 0.3, 0.021, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penilaianproduk`
--

CREATE TABLE `tbl_penilaianproduk` (
  `id_penilaian` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `bahan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penilaianproduk`
--

INSERT INTO `tbl_penilaianproduk` (`id_penilaian`, `harga`, `berat`, `bahan`, `id_produk`) VALUES
(1, 100000, 350, 1, 11),
(3, 70000, 400, 2, 10),
(4, 60000, 500, 3, 9),
(6, 750000, 400, 2, 13),
(11, 350000, 700, 3, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(70) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `id_kategori`, `foto`, `tanggal`) VALUES
(8, 'Tas Ransel Tantia', 150000, 'kualitas sangat bagus', 7, 'tas_ransel1.png', '2020-12-08'),
(9, 'Tas Slempang Tantia', 60000, 'Kualitas Sangat Bagus Dan Sangat Cocok Untuk Berpergian', 8, 'tas_slempang.png', '2021-01-01'),
(10, 'Tas Jinjing Tantia', 70000, 'Bahan Bagus Dan Cocok Untuk Style Jaman Now', 9, 'tas_jinjing1.png', '2021-01-01'),
(11, 'Tas Laptop Tantia', 100000, 'tas ini mempunyai kualitas yang bagus', 10, 'tas_laptop1.png', '2021-01-01'),
(13, 'Polo Tas ', 750000, 'kualitas terjamin', 7, 'Polo_Tas.png', '2021-01-01'),
(18, 'Tas Gunung', 350000, 'sangat bagus dan kuat', 7, 'download1.jpg', '2021-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `number` int(11) NOT NULL,
  `id_transaksi` varchar(40) NOT NULL,
  `id_card` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `note` text NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_transaksi` int(11) NOT NULL,
  `foto_bukti` varchar(40) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`number`, `id_transaksi`, `id_card`, `tanggal`, `note`, `total_harga`, `status_transaksi`, `foto_bukti`, `status_pembayaran`) VALUES
(26, 'TRN201225001235', 44, '2020-12-25', '', 350000, 3, 'tas_jinjing2.png', 0),
(27, 'TRN201225171256', 45, '2020-12-25', '', 100000, 3, 'Screenshot_(109).png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `username`, `fullname`, `email`, `password`, `role`) VALUES
(1, 'admin', 'adminim', 'akvinkurniawan50@yahoo.co.id', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'farhan', 'Farhan Ali fauzan', 'farhan@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', 0),
(5, 'ira', 'ira', 'ira@gmail.com', '3c67080a1a09b022fb9d94e57a75ddad', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id_wishlist`, `id_produk`, `id_user`) VALUES
(4, 18, 2),
(8, 8, 2),
(9, 10, 2),
(10, 13, 5),
(11, 9, 2),
(12, 11, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`id_card`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `tbl_detail_user`
--
ALTER TABLE `tbl_detail_user`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tbl_normalisasi_produk`
--
ALTER TABLE `tbl_normalisasi_produk`
  ADD PRIMARY KEY (`id_normalisasi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tbl_penilaianproduk`
--
ALTER TABLE `tbl_penilaianproduk`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`number`),
  ADD KEY `id_card` (`id_card`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_user`
--
ALTER TABLE `tbl_detail_user`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_normalisasi_produk`
--
ALTER TABLE `tbl_normalisasi_produk`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT untuk tabel `tbl_penilaianproduk`
--
ALTER TABLE `tbl_penilaianproduk`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD CONSTRAINT `tbl_card_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_card_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_detail_user`
--
ALTER TABLE `tbl_detail_user`
  ADD CONSTRAINT `tbl_detail_user_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_normalisasi_produk`
--
ALTER TABLE `tbl_normalisasi_produk`
  ADD CONSTRAINT `tbl_normalisasi_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_penilaianproduk`
--
ALTER TABLE `tbl_penilaianproduk`
  ADD CONSTRAINT `tbl_penilaianproduk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_card`) REFERENCES `tbl_card` (`id_card`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD CONSTRAINT `tbl_wishlist_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_wishlist_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
