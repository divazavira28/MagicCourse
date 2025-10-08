-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `xx_admin`
--

CREATE TABLE `xx_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. admin, 2. owner',
  `nama` varchar(100) NOT NULL COMMENT '\r\n',
  `created_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xx_admin`
--

INSERT INTO `xx_admin` (`id_admin`, `username`, `password`, `status`, `nama`, `created_by`, `created_at`) VALUES
(2, 'owner1', '$2y$10$oNeJ46pdljWw7uQUcsOjheemStmuHPwgjQBttM7fRJj6g7dwZjSiy', 2, 'Tria Nabila', 'Tria', '2024-05-18 00:00:00'),
(3, 'admin1', '$2y$10$bTmDcocXuaJQ9CwWrocl5uLdytZpdaHFTeDjMl1o8lWEZi5y/BIKK', 1, 'Delia Dwi', 'Delia', '2024-05-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xx_jenis_kelamin`
--

CREATE TABLE `xx_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xx_jenis_kelamin`
--

INSERT INTO `xx_jenis_kelamin` (`id`, `nama`, `value`) VALUES
(1, 'Laki - Laki', 'L'),
(2, 'Perempuan', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `xx_kelas`
--

CREATE TABLE `xx_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `judul_kelas` varchar(100) NOT NULL,
  `jadwal_kelas` varchar(50) NOT NULL,
  `waktu_kelas` varchar(50) NOT NULL,
  `deskripsi_kelas` text NOT NULL,
  `harga_kelas` bigint(20) NOT NULL,
  `biaya_pendaftaran` bigint(20) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xx_kelas`
--

INSERT INTO `xx_kelas` (`id_kelas`, `kode_kelas`, `judul_kelas`, `jadwal_kelas`, `waktu_kelas`, `deskripsi_kelas`, `harga_kelas`, `biaya_pendaftaran`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'bcasg2024', 'Semester (1)', 'Senin dan Rabu', '16:00 - 18:30', 'Mata Pelajaran yang kami sajikan :\r\nMatematika, Bahasa Indonesia, Bahasa Inggris, dan Ilmu Pengetahuan Alam', 1650000, 150000, 'Delia', '2020-01-01', '2024-05-18'),
(3, 'mtkpg2024', 'Semester (2)', 'Kamis dan Jumat', '16:00 - 18.30', 'Mata Pelajaran yang kami sajikan : Matematika, Bahasa Indonesia, Bahasa Inggris, dan Ilmu Pengetahuan Alam', 1650000, 150000, 'Delia', '2020-07-06', '2024-05-18'),
(15, 'ipapy2024', 'Tahun (1)', 'Senin dan Rabu', '16:00 - 18:30', 'Mata Pelajaran yang kami sajikan : Matematika, Bahasa Indonesia, Bahasa Inggris, dan Ilmu Pengetahuan Alam', 2450000, 150000, 'Delia Dwi', '2024-05-18', '2024-05-20'),
(16, 'bsindo2024', 'Tahun (2)', 'Selasa dan Kamis', '16:00 - 18:30', 'Mata Pelajaran yang kami sajikan : Matematika, Bahasa Indonesia, Bahasa Inggris, dan Ilmu Pengetahuan Alam', 2450000, 150000, 'Delia Dwi', '2024-05-18', '2024-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `xx_pendaftaran`
--

CREATE TABLE `xx_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(50) NOT NULL,
  `status_pembayaran` int(11) NOT NULL DEFAULT 3 COMMENT '1. selesai bayar, 2. pending',
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '1. active, 2. inactive',
  `admin_acc` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(250) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xx_pendaftaran`
--

INSERT INTO `xx_pendaftaran` (`id_pendaftaran`, `id_user`, `id_kelas`, `nomor_pendaftaran`, `status_pembayaran`, `status`, `admin_acc`, `bukti_pembayaran`, `created_at`) VALUES
(9, 6, 2, 'bcasg2024614338936800', 1, 1, 'Delia Dwi', '6bcasg2024614338936800.jpeg', '2024-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `xx_profile`
--

CREATE TABLE `xx_profile` (
  `id_profile` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `umur` int(11) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xx_profile`
--

INSERT INTO `xx_profile` (`id_profile`, `id_user`, `foto`, `nama`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `umur`, `asal_sekolah`, `jenis_kelamin`, `alamat`, `created_at`) VALUES
(1, 1, '1.jpeg', 'Yoga Anugrah Pratama.SY', '08981001119', 'Palembang', '2006-06-06', 14, 'SD', 'L', 'Jl. Ade Irma Nasution No.123, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30127.', '2020-06-16'),
(2, 2, '', 'Delia Dwi Anjani', '083890549397', 'ciamis', '2011-01-04', 13, 'smp', 'P', 'depok', '2024-05-18'),
(3, 5, '5.png', 'miko', '8121345', 'depok', '2018-07-05', 5, 'smp', 'L', 'depok', '2024-05-20'),
(4, 6, '6.jpeg', 'ryan', '08128571', 'depok', '2015-07-09', 8, 'SMPN 14 DEPOK', 'L', 'depok', '2024-05-20'),
(5, 7, '7.jpeg', 'lilili', '0812345678', 'depok', '2016-05-11', 8, 'SMPN 15', 'P', 'Depok', '2024-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `xx_users`
--

CREATE TABLE `xx_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1 COMMENT '1. active,2.inactive\r\n',
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xx_users`
--

INSERT INTO `xx_users` (`id_user`, `username`, `email`, `password`, `nama`, `is_active`, `created_at`) VALUES
(1, 'yogaapsy', 'yogaanugrahpsy@gmail.com', '$2y$10$MzjFQeJUVc.y6u9o4G49j.7xbiFszkK7BQfNDd5XZURB4qtfScoR6', 'Yoga Anugrah Pratama.SY', 1, '2020-06-16'),
(2, 'deliaaa', 'deliadwianjani69@gmail.com', '$2y$10$bkNf5O.oXp2Bd7Ob0WQJROGATr5tsak31ZiAjukxYKl/6VIW65fXK', 'Delia Dwi Anjani', 1, '2024-05-17'),
(3, 'divawww', 'diva@gmail.com', '$2y$10$zZU7EJGvd/.E1uOZ/DrqJOr90w4NPkXmG5GZ5RxuHRNqtorE2.Knu', 'diva zav', 1, '2024-05-18'),
(4, 'dyahayu', 'dyah@gmail.com', '$2y$10$l/9UwdJ9cF3hyHPIF8ltr.BGD.mrQUGSzmKWVxXl8D4FFu7bccCQ6', 'dyah ayu', 1, '2024-05-18'),
(5, 'miko', 'miko@gmail.com', '$2y$10$DzF6zJ67tariqbzISQ/X7ecJGM/O.FeEIPeK1u6K1w/Xd0oSkgGBm', 'miko', 1, '2024-05-20'),
(6, 'ryan', 'ryan@gmail.com', '$2y$10$LX0dNkm5O0Jts7xX3gNLUeo.tLhjJFqkQn5tUq/4TUegGBx61gVPO', 'ryan', 1, '2024-05-20'),
(7, 'lili', 'lilili@gmail.com', '$2y$10$Pkn7ZRIyqJ5ELUHyZoTNS.7hxcYV4KFkP1nVgzVKO9zu4DgjC2Flu', 'lilili', 1, '2024-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xx_admin`
--
ALTER TABLE `xx_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `xx_jenis_kelamin`
--
ALTER TABLE `xx_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xx_kelas`
--
ALTER TABLE `xx_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `xx_pendaftaran`
--
ALTER TABLE `xx_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `xx_profile`
--
ALTER TABLE `xx_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `xx_users`
--
ALTER TABLE `xx_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nik` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xx_admin`
--
ALTER TABLE `xx_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xx_jenis_kelamin`
--
ALTER TABLE `xx_jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xx_kelas`
--
ALTER TABLE `xx_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `xx_pendaftaran`
--
ALTER TABLE `xx_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `xx_profile`
--
ALTER TABLE `xx_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `xx_users`
--
ALTER TABLE `xx_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
