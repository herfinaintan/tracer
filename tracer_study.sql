-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

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
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kode_obat` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `dosis` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `stok` int(20) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kode_obat`, `nama`, `dosis`, `jenis`, `stok`, `tanggal`) VALUES
(2, 'A002', 'Aspirin', '10', 'Sirup', 30, '2019-12-15 21:22:26'),
(3, 'A003', 'Asam Amfenamat', '70', 'Kapsul', 100, '2020-12-16 19:16:11'),
(4, 'A004', 'Amoxillin', '35', 'Sirup', 85, '2020-12-17 21:39:54'),
(5, 'A005', 'Paracetamol', '90', 'Tablet', 20, '2020-12-18 07:06:42'),
(6, 'A006', 'Paramex', '75', 'Kapsul', 20, '2020-12-18 07:07:11'),
(7, 'A007', 'Panadol', '50', 'Tablet', 10, '2020-12-18 07:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Ammar Muadz', 'ammar@gmail.com', 'default.jpg', '$2y$10$ZZqUSZ4Ux4hqXWwEnWbAwux338.98DsASFT4e2yQsEAWYVXI6cv3C', 1, 1, 1589856735),
(2, 'Ardi Eka', 'ardi@gmail.com', 'default.jpg', '$2y$10$4DWKY7ruBeKwEz9WZV6fxeZryrTIpb9.6haGvzQtINaYRo2OJ.mLO', 2, 1, 1589857885),
(4, 'Rektor', 'rektor@gmail.com', 'default.jpg', '$2y$10$fsiUE9Aa2LJ7xMdGUCsfZeIR.7g9d9VdmJtNkQ/ulghlbPzqc9.oO', 3, 1, 1608786929),
(5, 'Dekan', 'dekan@gmail.com', 'default.jpg', '$2y$10$8/dTIAQIokY.Ax08iyAzS.3KJWrBB3xBzVEBzBfqtGzs8u74la/z2', 3, 1, 1608786972),
(6, 'Kaprodi', 'kaprodi@gmail.com', 'default.jpg', '$2y$10$QOex9uNcizMsxUiA88trNOFSLtGLoH9XpQayTv/vtuKJAHpuMW13W', 3, 1, 1608786994);

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
(36, 2, 3),
(44, 2, 5),
(47, 1, 6),
(48, 2, 6),
(49, 3, 6),
(54, 2, 4),
(55, 1, 5);

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
(6, 'Menu');

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
(3, 'Ketua');

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
(3, 4, 'Pengguna Alumni', 'user/tambah', 'fas fa-fw fa-pencil-ruler', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(13, 6, 'Laporan Alumni', 'menu/laporan', 'fas fa-fw fa-clipboard-list', 1),
(15, 2, 'Alumni', 'kuisioner', 'fas fa-fw fa-pencil-alt', 1),
(16, 2, 'Pengguna Alumni', 'kuisioner/pengguna', 'fas fa-fw fa-pencil-ruler', 1),
(17, 6, 'Laporan Pengguna Alumni', 'menu/pengguna', 'fas fa-fw fa-clipboard-check', 1),
(18, 5, 'Grup Kuisioner', 'master', 'fas fa-fw fa-database', 1),
(19, 3, 'Dashboard', 'fakultas', 'fas fa-fw fa-tachometer-alt', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
