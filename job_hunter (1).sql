-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jan 2017 pada 18.12
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_hunter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `nama`) VALUES
(2, 'admin@admin.com', 'admin', 'Administrator'),
(3, 'ramasatria95@yahoo.com', NULL, 'Rama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_bookmark`
--

CREATE TABLE IF NOT EXISTS `daftar_bookmark` (
`id` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `waktu_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_bookmark`
--

INSERT INTO `daftar_bookmark` (`id`, `id_pelamar`, `id_lowongan`, `waktu_create`) VALUES
(1, 6, 3, '2017-01-01 16:46:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_lamaran`
--

CREATE TABLE IF NOT EXISTS `daftar_lamaran` (
`id` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `waktu_lamar` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_lamaran`
--

INSERT INTO `daftar_lamaran` (`id`, `id_pelamar`, `id_lowongan`, `waktu_lamar`) VALUES
(3, 6, 3, '2017-01-01'),
(4, 6, 3, '2017-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `jenis_kelamin` (
`id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `nama`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(13, NULL),
(10, 'Akuntansi'),
(3, 'Elektro Industri'),
(1, 'Elektronika'),
(7, 'Multimedia Broadcasting'),
(8, 'Sistem Pembangkitan Energi'),
(4, 'Teknik Informatika'),
(6, 'Teknik Komputer'),
(5, 'Teknik Mekatronik'),
(9, 'Teknologi Game'),
(2, 'Telekomunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggung_jawab` varchar(100) NOT NULL,
  `syarat` varchar(200) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `waktu_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `judul`, `tanggung_jawab`, `syarat`, `tanggal_buka`, `tanggal_tutup`, `id_perusahaan`, `waktu_create`) VALUES
(2, 'Mobile Developer', 'haha', 'haha', '2016-12-07', '2016-12-23', 5, '2016-12-29 12:13:24'),
(3, 'PHP', 'GAGA', 'PHP', '2016-12-29', '2016-12-25', 5, '2016-12-30 19:32:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lulusan_lowongan`
--

CREATE TABLE IF NOT EXISTS `lulusan_lowongan` (
`id` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE IF NOT EXISTS `pelamar` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `tahun_lahir` year(4) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `kelamin` int(11) DEFAULT NULL,
  `waktu_create` datetime NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `cv` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id`, `email`, `username`, `nama_lengkap`, `asal`, `tahun_lahir`, `kewarganegaraan`, `telpon`, `kelamin`, `waktu_create`, `foto`, `cv`) VALUES
(6, 'ramasatriafb@gmail.com', 'ramasatria', 'Rama Firmansyah', 'Surabaya', 1995, 'Indonesia', '083897887725', 1, '2016-12-22 22:32:17', '/uploads/pelamar/foto/6/6.jpg', '/cari_kerja/uploads/pelamar/cv/6/62.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
`id` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `sekolah` varchar(50) DEFAULT NULL,
  `tahun_lulus` varchar(50) DEFAULT NULL,
  `nilai_akhir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_pelamar`, `gelar`, `jurusan_id`, `sekolah`, `tahun_lulus`, `nilai_akhir`) VALUES
(1, 6, 'Diploma Tiga', 4, 'Politeknik Elektronika Negeri Surabaya', '2016', '3.56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE IF NOT EXISTS `pengalaman` (
`id` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `tanggung_jawab` varchar(50) DEFAULT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `id_pelamar`, `nama_perusahaan`, `posisi`, `tanggung_jawab`, `tahun`) VALUES
(1, 6, 'PT MPM Motor', 'Web Developer', 'gaga', '2015 - 2015'),
(2, 6, 'PHP Programmer', 'PHP Programmer', 'PHP Programmer', '2011 - 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `waktu_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `email`, `username`, `nama`, `kota`, `alamat`, `telpon`, `foto`, `waktu_create`) VALUES
(5, 'angkasa@gmail.com', 'angkasa', 'PT Angkasa Raya', 'Surabayaa', 'Jalan Bambu no 77', '0982', '/uploads/perusahaan/foto/5/5.jpg', '2016-12-22 22:32:42'),
(6, 'jasa@gmail', 'jasa', 'Jasa Raharja', 'Surabaya', 'Surabaya', '1234', NULL, '2017-01-02 09:28:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `waktu_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `email`, `role`, `waktu_create`) VALUES
(1, 'pelamar@gmail.com', 'Pelamar', '0000-00-00 00:00:00'),
(3, 'ramasatriafb@gmail.com', 'Pelamar', '2016-12-22 22:32:17'),
(4, 'angkasa@gmail.com', 'Perusahaan', '2016-12-22 22:32:42'),
(5, 'admin@admin.com', 'Admin', '2017-01-01 08:22:30'),
(6, 'ramasatria95@yahoo.com', 'Disactivated', '2017-01-04 19:29:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
`id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`) VALUES
(1, 2016),
(2, 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `waktu_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `waktu_create`) VALUES
(2, 'pelamar@gmail.com', 'pelamar', 'd106cd9e18dab5c9bce2b1b7c9a17d2b', '0000-00-00 00:00:00'),
(3, 'pt@gmail.com', 'pt', 'fc9fdf084e290f26a270390dc49061a2', '0000-00-00 00:00:00'),
(11, 'ramasatriafb@gmail.com', 'ramasatria', 'e04f28cc33cb20274dd3ff44e600a923', '2016-12-22 22:32:17'),
(12, 'angkasa@gmail.com', 'angkasa', 'e04f28cc33cb20274dd3ff44e600a923', '2016-12-22 22:32:41'),
(13, 'admin@admin.com', 'admin', '9709a18af90797a8733ba7791414ccb8', '2017-01-01 22:53:52'),
(14, 'jasa@gmail', 'jasa', '818590468db0a544ded244a19e8616d0', '2017-01-02 12:35:37'),
(15, 'ramasatria95@yahoo.com', NULL, 'e04f28cc33cb20274dd3ff44e600a923', '2017-01-04 19:29:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_bookmark`
--
ALTER TABLE `daftar_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_lamaran`
--
ALTER TABLE `daftar_lamaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `jurusan_nama` (`nama`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lulusan_lowongan`
--
ALTER TABLE `lulusan_lowongan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar_bookmark`
--
ALTER TABLE `daftar_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daftar_lamaran`
--
ALTER TABLE `daftar_lamaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lulusan_lowongan`
--
ALTER TABLE `lulusan_lowongan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
