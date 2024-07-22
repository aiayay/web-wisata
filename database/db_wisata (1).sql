-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2024 pada 15.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `armada`
--

CREATE TABLE `armada` (
  `id_armada` int(11) NOT NULL,
  `nama_armada` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_armada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `armada`
--

INSERT INTO `armada` (`id_armada`, `nama_armada`, `harga`, `deskripsi`, `gambar_armada`) VALUES
(4, 'Mobil', 500000, 'Terdapat berbagai jenis mobil yang dapat membawa anda keliling kota', '2024 Hyundai Palisade Review, Pricing, and Specs.jpeg'),
(5, 'Motor', 120000, 'Terdapat berbagai jenis motor yang dapat membawa anda keliling kota', 'Cheaper Limited Edition Peugeot Speedfight Scooters - ResCogs.jpeg'),
(6, 'Pesawat Garuda Indonesia', 500000, 'Membantu anda memesan tiket pulang pergi menggunakan pesawat', 'Garuda Adds More Flight to Perth.jpeg'),
(7, 'Kapal Fery', 150000, 'Membawa anda berkeliling pulau', '20fcc626-d4ed-4b38-9442-d11540f717bc.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(4, 'Pantai'),
(5, 'Pegunungan'),
(6, 'Kuliner'),
(7, 'Explore Kota'),
(8, 'Danau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `judul`, `isi`) VALUES
(3, 'aini', 'nuraini@gmail.com'),
(4, 'pertiwi', 'tiwi@gmail.com'),
(5, 'lia amelia', 'amellllia@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id_tim`, `nama_tim`, `jabatan`, `foto`) VALUES
(7, 'Gojo Satoru', 'Pimpinan', 'gojoo.jpeg'),
(8, 'Kento Nanami', 'Developer', 'ebf1907b-acad-46c0-aa59-39fb70a6a51a.jpeg'),
(9, 'Geto Suguru', 'Tour Guide', 'e12056b4-a5d2-4aba-8b1b-90937137a90c.jpeg'),
(10, 'Itadori Yuuji', 'Tour Guide', '0fc55b24-df4b-4b76-bca9-f7050ef9a658.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `no_hp`, `foto`) VALUES
(10, 'admin', 'aini', 'Nur Aini Pertiwi', '085200000000', 'ebf1907b-acad-46c0-aa59-39fb70a6a51a.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_wisata` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kategori`, `judul_wisata`, `slug`, `deskripsi`, `harga`, `gambar_wisata`) VALUES
(12, 4, 'Mengunjungi Pantai Nirwana', 'Mengunjungi-Pantai-Nirwana', 'Pantai Nirwana ialah sebuah pantai di  Padang, tepatnya di  Padang Selatan, yang memiliki batu karang dan koral yang bertebaran di sepanjang pantai.', 150000, 'jejak-kenzie_pantai-nirwana-padang-001.jpg'),
(13, 5, 'Gunung Singgalang', 'Gunung-Singgalang', 'Gunung Singgalang yang terletak Kabupaten Tanah Datar dan Agam, Sumatera Barat merupakan salah satu gunung yang masuk dalam jajaran pegunungan Bukit Barisan. Gunung ini memiliki ketinggian 2.877 meter di atas permukaan laut (mdpl) dan masuk dalam kategori gunung yang sudah tidak aktif.', 200000, 'gunung-singgalang-favorit-pendaki-yang-melegenda-karena-ilmu-silat-harimau-ixx.png'),
(14, 6, 'Nasi Kapau Bukit Tinggi', 'Nasi-Kapau-Bukit-Tinggi', 'Di Kota Bukittinggi terdapat tempat yang tak jauh dari Jam Gadang yang menyediakan banyak nasi kapau, konon katanya setiap pedagang mempunyai resep yang turun temurun loh. Salah satunya kedai Nasi Kapau yang pernah saya singgahi, Nasi Kapau Uni Lis. ', 200000, 'OIP.jpeg'),
(15, 7, 'Wisata ke Payakumbuh', 'Wisata-ke-Payakumbuh', 'Payakumbuh merupakan sebuah kota Provinsi Sumatera Barat, yang dikelilingi oleh Kabupaten Lima Puluh Kota.\r\n', 120000, 'R.jpeg'),
(16, 8, 'Danau Singkarak', 'Danau-Singkarak', 'Danau Singkarak Danau Singkarak adalah sebuah danau yang membentang di dua kabupaten yang terdapat di provinsi Sumatera Barat, Indonesia, yaitu kabupaten Solok dan kabupaten Tanah Datar.', 120000, 'OIP (1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `armada`
--
ALTER TABLE `armada`
  ADD PRIMARY KEY (`id_armada`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `armada`
--
ALTER TABLE `armada`
  MODIFY `id_armada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
