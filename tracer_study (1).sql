-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 11:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`) VALUES
(1, 'Biologi'),
(2, 'Ekonomi dan Bisnis'),
(3, 'Hukum'),
(4, 'Ilmu Budaya'),
(5, 'Kedokteran'),
(6, 'Perikanan dan Ilmu Kelautan'),
(7, 'Pertanian'),
(8, 'Peternakan'),
(9, 'Teknik'),
(10, 'Ilmu Sosial dan Ilmu Politik'),
(11, 'Ilmu-Ilmu Kesehatan'),
(12, 'Matematika dan Ilmu Pengetahuan Alam');

-- --------------------------------------------------------

--
-- Table structure for table `grup_kuisioner`
--

CREATE TABLE `grup_kuisioner` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup_kuisioner`
--

INSERT INTO `grup_kuisioner` (`id_grup`, `nama_grup`) VALUES
(1, 'Identitas Diri'),
(2, 'Tracer Study');

-- --------------------------------------------------------

--
-- Table structure for table `grup_kuisioner_fakultas`
--

CREATE TABLE `grup_kuisioner_fakultas` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup_kuisioner_fakultas`
--

INSERT INTO `grup_kuisioner_fakultas` (`id_grup`, `nama_grup`) VALUES
(1, 'Tracer Fakultas');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_alumni`
--

CREATE TABLE `jawaban_alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `jawaban_A` longtext NOT NULL,
  `jawaban_B` longtext NOT NULL,
  `jawaban_C` longtext NOT NULL,
  `jawab_A` longtext NOT NULL,
  `jawab_B` longtext NOT NULL,
  `jawab_C` longtext NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban_alumni`
--

INSERT INTO `jawaban_alumni` (`id`, `nama`, `fakultas`, `jurusan`, `fakultas_id`, `jurusan_id`, `jawaban_A`, `jawaban_B`, `jawaban_C`, `jawab_A`, `jawab_B`, `jawab_C`, `tanggal`) VALUES
(10, 'Ammar', 'Teknik', 'Informatika', 9, 23, 'Waskita Karya', 'A', 'B, C', 'Developer', 'A', 'A, B', '2021-01-11 17:09:24'),
(11, 'Ardi', 'Teknik', 'Teknik Geologi', 9, 24, 'Pertamina', 'B', 'A, C', 'Surveilance', 'C', 'C, D', '2021-01-11 17:09:24'),
(12, 'Doyok', 'Biologi', 'Biologi', 1, 1, 'LIPI', 'C', 'D, E', 'Peneliti', 'D', 'A, C', '2021-01-11 17:10:15'),
(13, 'Nizar', 'Kedokteran', 'Pendidikan Dokter Gigi', 5, 10, 'RS Margono', 'D', 'A, B, C', 'Dokter Gigi', 'E', 'B, D, E', '2021-01-11 17:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pengguna`
--

CREATE TABLE `jawaban_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jawaban_A` varchar(500) NOT NULL,
  `jawaban_B` varchar(100) NOT NULL,
  `jawab_A` varchar(100) NOT NULL,
  `jawab_B` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban_pengguna`
--

INSERT INTO `jawaban_pengguna` (`id`, `nama`, `fakultas`, `jurusan`, `id_fakultas`, `id_jurusan`, `jawaban_A`, `jawaban_B`, `jawab_A`, `jawab_B`, `tanggal`) VALUES
(1, 'Ammar', 'Teknik', 'Informatika', 9, 23, 'Waskita Karya', 'A', 'Developer', 'B', '2021-01-13 10:39:45'),
(2, 'Ardi', 'Teknik', 'Teknik Geologi', 9, 24, 'Pertamnia', 'B', 'Surveilance', 'C', '2021-01-13 10:39:45'),
(3, 'Herfina', 'Kedokteran', 'Pendidikan Dokter', 5, 11, 'RS Banyumas', 'A', 'Dokter', 'A', '2021-01-13 10:40:47'),
(4, 'Nahda', 'Biologi', 'Biologi', 1, 1, 'LIPI', 'D', 'Peneliti', 'D', '2021-01-13 10:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `fakultas_id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `fakultas_id`, `jurusan`) VALUES
(1, 1, 'Biologi'),
(2, 2, 'Bisnis'),
(3, 2, 'Akuntansi'),
(4, 3, 'Ilmu Hukum'),
(5, 4, 'Pendidikan Bahasa Indonesia'),
(6, 4, 'Sastra dan Bahasa Asing'),
(7, 4, 'Sastra Indonesia'),
(8, 4, 'Sastra Inggris'),
(9, 4, 'Pendidikan Bahasa Inggris'),
(10, 5, 'Pendidikan Dokter Gigi'),
(11, 5, 'Pendidikan Dokter'),
(12, 6, 'Budidaya Perairan'),
(13, 6, 'Kelautan'),
(14, 7, 'Ilmu dan Teknologi Pangan'),
(15, 7, 'Agroteknologi'),
(16, 7, 'Teknik Pertanian'),
(17, 7, 'Ilmu Tanah'),
(18, 7, 'Agribisnis'),
(19, 8, 'Peternakan'),
(20, 9, 'Teknik Industri'),
(21, 9, 'Teknik Elektro'),
(22, 9, 'Teknik Sipil'),
(23, 9, 'Informatika'),
(24, 9, 'Teknik Geologi'),
(25, 10, 'Ilmu Administrasi'),
(26, 10, 'Hubungan Internasional'),
(27, 10, 'Ilmu Komunikasi'),
(28, 10, 'Ilmu Politik'),
(29, 10, 'Sosiologi'),
(30, 11, 'Pendidikan Olahraga'),
(31, 11, 'Gizi'),
(32, 11, 'Ilmu Keperawatan'),
(33, 11, 'Farmasi'),
(34, 11, 'Kesehatan Masyarakat'),
(35, 12, 'Kimia'),
(36, 12, 'Matematika'),
(37, 12, 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner_alumni`
--

CREATE TABLE `kuisioner_alumni` (
  `id` int(11) NOT NULL,
  `kuisioner` varchar(500) NOT NULL,
  `model_kuisioner` enum('A','B','C') NOT NULL,
  `nama_grup` varchar(100) DEFAULT NULL,
  `pilihan_A` varchar(500) DEFAULT NULL,
  `pilihan_B` varchar(500) DEFAULT NULL,
  `pilihan_C` varchar(500) DEFAULT NULL,
  `pilihan_D` varchar(500) DEFAULT NULL,
  `pilihan_E` varchar(500) DEFAULT NULL,
  `pilihan_F` varchar(500) DEFAULT NULL,
  `pilihan_G` varchar(500) DEFAULT NULL,
  `pilihan_H` varchar(500) DEFAULT NULL,
  `pilihan_I` varchar(500) DEFAULT NULL,
  `pilihan_J` varchar(500) DEFAULT NULL,
  `pilihan_K` varchar(500) DEFAULT NULL,
  `pilihan_L` varchar(500) DEFAULT NULL,
  `pilihan_M` varchar(500) DEFAULT NULL,
  `pilihan_N` varchar(500) DEFAULT NULL,
  `pilihan_O` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner_alumni`
--

INSERT INTO `kuisioner_alumni` (`id`, `kuisioner`, `model_kuisioner`, `nama_grup`, `pilihan_A`, `pilihan_B`, `pilihan_C`, `pilihan_D`, `pilihan_E`, `pilihan_F`, `pilihan_G`, `pilihan_H`, `pilihan_I`, `pilihan_J`, `pilihan_K`, `pilihan_L`, `pilihan_M`, `pilihan_N`, `pilihan_O`) VALUES
(3, 'Nama instansi/perusahaan tempat bekerja', 'A', 'Identitas Diri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Kapan Anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan', 'B', 'Tracer Study', 'A. Kira-kira 1 bulan sebelum lulus', 'B. Kira-kira 2 bulan setelah lulus', 'C. Saya tidak mencari kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Apa jenis perusahaan/instansi/institusi tempat Anda bekerja', 'B', 'Tracer Study', 'A. Instansi pemerintah (termasuk BUMN)', 'B. Organisasi non-profit/ Lembaga Swadaya Masyarakat', 'C. Perusahaan swasta', 'D. Wiraswasta/perusahaan sendiri', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan Anda saat ini?', 'B', 'Tracer Study', 'A. Setingkat lebih tinggi ', 'B. Tingkat yang sama', 'C. Setingkat lebih rendah', 'D. Tidak perlu pendidikan tinggi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Bagaimana Anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu', 'C', 'Tracer Study', 'A. Mencari iklan di koran/majalah, brosur', 'B. Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 'C. Pergi ke bursa/pameran kerja', 'D. Dihubungi oleh perusahaan', 'E. Menghubungi Kemenakertrans', 'F. Menghubungi agen tenaga kerja komersial/swasta', 'G. Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', 'H. Membangun jejaring (network) sejak masih kuliah', 'I. Membangun bisnis sendiri', 'J. Melalui penempatan kerja/magang', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner_fakultas_alumni`
--

CREATE TABLE `kuisioner_fakultas_alumni` (
  `id` int(11) NOT NULL,
  `kuisioner` varchar(500) NOT NULL,
  `model_kuisioner` enum('A','B','C') NOT NULL,
  `nama_grup` varchar(100) DEFAULT NULL,
  `pilihan_A` varchar(500) DEFAULT NULL,
  `pilihan_B` varchar(500) DEFAULT NULL,
  `pilihan_C` varchar(500) DEFAULT NULL,
  `pilihan_D` varchar(500) DEFAULT NULL,
  `pilihan_E` varchar(500) DEFAULT NULL,
  `pilihan_F` varchar(500) DEFAULT NULL,
  `pilihan_G` varchar(500) DEFAULT NULL,
  `pilihan_H` varchar(500) DEFAULT NULL,
  `pilihan_I` varchar(500) DEFAULT NULL,
  `pilihan_J` varchar(500) DEFAULT NULL,
  `pilihan_K` varchar(500) DEFAULT NULL,
  `pilihan_L` varchar(500) DEFAULT NULL,
  `pilihan_M` varchar(500) DEFAULT NULL,
  `pilihan_N` varchar(500) DEFAULT NULL,
  `pilihan_O` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner_fakultas_alumni`
--

INSERT INTO `kuisioner_fakultas_alumni` (`id`, `kuisioner`, `model_kuisioner`, `nama_grup`, `pilihan_A`, `pilihan_B`, `pilihan_C`, `pilihan_D`, `pilihan_E`, `pilihan_F`, `pilihan_G`, `pilihan_H`, `pilihan_I`, `pilihan_J`, `pilihan_K`, `pilihan_L`, `pilihan_M`, `pilihan_N`, `pilihan_O`) VALUES
(2, 'Apakah pekerjaan Anda sesuai dengan bidang keilmuan?', 'B', 'Tracer Fakultas', 'A. Ya', 'B. Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner_fakultas_pengguna`
--

CREATE TABLE `kuisioner_fakultas_pengguna` (
  `id` int(11) NOT NULL,
  `kuisioner` varchar(500) NOT NULL,
  `model_kuisioner` enum('A','B','C') NOT NULL,
  `pilihan_A` varchar(100) DEFAULT NULL,
  `pilihan_B` varchar(100) DEFAULT NULL,
  `pilihan_C` varchar(100) DEFAULT NULL,
  `pilihan_D` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner_fakultas_pengguna`
--

INSERT INTO `kuisioner_fakultas_pengguna` (`id`, `kuisioner`, `model_kuisioner`, `pilihan_A`, `pilihan_B`, `pilihan_C`, `pilihan_D`) VALUES
(1, 'Jabatan Alumni', 'A', '', '', '', ''),
(2, 'Penguasaan bidang keilmuaan sesuai gelar', 'B', 'Sangat Baik', 'Baik', 'Cukup', 'Kurang');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner_pengguna_alumni`
--

CREATE TABLE `kuisioner_pengguna_alumni` (
  `id` int(11) NOT NULL,
  `kuisioner` varchar(500) NOT NULL,
  `model_kuisioner` enum('A','B') NOT NULL,
  `pilihan_A` varchar(100) DEFAULT NULL,
  `pilihan_B` varchar(100) DEFAULT NULL,
  `pilihan_C` varchar(100) DEFAULT NULL,
  `pilihan_D` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner_pengguna_alumni`
--

INSERT INTO `kuisioner_pengguna_alumni` (`id`, `kuisioner`, `model_kuisioner`, `pilihan_A`, `pilihan_B`, `pilihan_C`, `pilihan_D`) VALUES
(1, 'Nama Instansi', 'A', '', '', '', ''),
(2, 'Nama lulusan', 'A', '', '', '', ''),
(4, 'Masuk kerja tahun', 'A', '', '', '', ''),
(5, 'Lulusan Tahun', 'A', '', '', '', ''),
(6, 'Penguasaan alumnus terhadap IPTEKS', 'B', 'Sangat Baik', 'Baik', 'Cukup', 'Kurang'),
(7, 'Berpikir kritis/analitis', 'B', 'Sangat Baik', 'Baik', 'Cukup', 'Kurang');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kode_obat` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `dosis` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `stok` int(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `NIM` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Tahun_Lulus` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `Nama`, `NIM`, `Fakultas`, `Jurusan`, `Tahun_Lulus`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin Univ', 'ammar@gmail.com', '', '', '', '', 0, 'default.jpg', '$2y$10$ZZqUSZ4Ux4hqXWwEnWbAwux338.98DsASFT4e2yQsEAWYVXI6cv3C', 1, 1, 1589856735),
(2, 'Admin Fakultas', 'ardi@gmail.com', '', '', '', '', 0, 'default.jpg', '$2y$10$4DWKY7ruBeKwEz9WZV6fxeZryrTIpb9.6haGvzQtINaYRo2OJ.mLO', 2, 1, 1589857885),
(4, 'Rektor', 'rektor@gmail.com', '', '', '', '', 0, 'default.jpg', '$2y$10$fsiUE9Aa2LJ7xMdGUCsfZeIR.7g9d9VdmJtNkQ/ulghlbPzqc9.oO', 3, 1, 1608786929),
(5, 'Dekan', 'dekan@gmail.com', '', '', '', '', 0, 'default.jpg', '$2y$10$8/dTIAQIokY.Ax08iyAzS.3KJWrBB3xBzVEBzBfqtGzs8u74la/z2', 3, 1, 1608786972),
(6, 'Kaprodi', 'kaprodi@gmail.com', '', '', '', '', 0, 'default.jpg', '$2y$10$QOex9uNcizMsxUiA88trNOFSLtGLoH9XpQayTv/vtuKJAHpuMW13W', 3, 1, 1608786994),
(7, 'Alumni', 'alumni@gmail.com', 'Muhammad Iqbaal', 'H1D015026', 'Teknik', 'Informatika', 2019, 'default.jpg', '$2y$10$K.t300QpHXVLetKwZlMxEuxJAmaAzJfcRf2emSoMhLhyrzeOQS5Em', 4, 1, 1610111534),
(8, 'Pengguna Alumni', 'pengguna@gmail.com', '', '', '', '', 0, 'default.jpg', '$2y$10$1JuYFGW/715DGSHlR1SZs.LxOnI4kP7Ks1jH82EzN//cG3QubHd6u', 5, 1, 1610111550),
(10, 'alumni2', 'alumni2@gmail.com', 'Ibrahim', 'H1D14026', 'Teknik', 'Teknik Elektro', 2018, 'default.jpg', '$2y$10$FGqOY2gO2sLkgslSn70tWuAEq./4W.ultKcA29Y4/K77hmdVoF/VW', 4, 1, 1610448990);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(28, 1, 2),
(47, 1, 6),
(49, 3, 6),
(55, 1, 5),
(62, 4, 7),
(63, 5, 8),
(66, 2, 3),
(68, 2, 18),
(69, 2, 6),
(70, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Kuisioner'),
(3, 'Fakultas'),
(4, 'User'),
(5, 'Master'),
(6, 'Menu'),
(7, 'Alumni'),
(8, 'Pengguna'),
(18, 'Grup');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Ketua'),
(4, 'Alumni'),
(5, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 4, 'Alumni', 'user', 'fas fa-fw fa-pencil-alt', 1),
(3, 4, 'Pengguna Alumni', 'fakultas/pengguna', 'fas fa-fw fa-pencil-ruler', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(13, 6, 'Laporan Alumni', 'menu/laporan', 'fas fa-fw fa-clipboard-list', 1),
(15, 2, 'Alumni', 'kuisioner', 'fas fa-fw fa-pencil-alt', 1),
(16, 2, 'Pengguna Alumni', 'kuisioner/pengguna', 'fas fa-fw fa-pencil-ruler', 1),
(17, 6, 'Laporan Pengguna Alumni', 'menu/pengguna', 'fas fa-fw fa-clipboard-check', 1),
(18, 5, 'Grup Kuisioner', 'master', 'fas fa-fw fa-database', 1),
(19, 3, 'Dashboard', 'fakultas', 'fas fa-fw fa-tachometer-alt', 1),
(21, 7, 'Data Diri', 'alumni', 'fas fa-fw fa-user', 1),
(22, 7, 'Kuisioner', 'alumni/kuisioner', 'fas fa-fw fa-pencil-alt', 1),
(23, 8, 'Kuisioner', 'pengguna', 'fas fa-fw fa-pencil-ruler', 1),
(24, 18, 'Grup Kuisioner', 'grup', 'fas fa-fw fa-database', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grup_kuisioner`
--
ALTER TABLE `grup_kuisioner`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `grup_kuisioner_fakultas`
--
ALTER TABLE `grup_kuisioner_fakultas`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas_id` (`fakultas_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner_alumni`
--
ALTER TABLE `kuisioner_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner_fakultas_alumni`
--
ALTER TABLE `kuisioner_fakultas_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner_fakultas_pengguna`
--
ALTER TABLE `kuisioner_fakultas_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuisioner_pengguna_alumni`
--
ALTER TABLE `kuisioner_pengguna_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `grup_kuisioner`
--
ALTER TABLE `grup_kuisioner`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grup_kuisioner_fakultas`
--
ALTER TABLE `grup_kuisioner_fakultas`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kuisioner_alumni`
--
ALTER TABLE `kuisioner_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kuisioner_fakultas_alumni`
--
ALTER TABLE `kuisioner_fakultas_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kuisioner_fakultas_pengguna`
--
ALTER TABLE `kuisioner_fakultas_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuisioner_pengguna_alumni`
--
ALTER TABLE `kuisioner_pengguna_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban_alumni`
--
ALTER TABLE `jawaban_alumni`
  ADD CONSTRAINT `jawaban_alumni_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `jawaban_alumni_ibfk_2` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `jawaban_pengguna`
--
ALTER TABLE `jawaban_pengguna`
  ADD CONSTRAINT `jawaban_pengguna_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `jawaban_pengguna_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
