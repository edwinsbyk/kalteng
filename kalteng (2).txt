-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 11:48 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pu_kalteng`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda`
(
  `id_agenda` int
(11) NOT NULL,
  `iduser` int
(11) NOT NULL,
  `judul` varchar
(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `image` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel`
(
  `id_artikel` int
(11) NOT NULL,
  `iduser` int
(11) NOT NULL,
  `judul` varchar
(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `image` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`
id_artikel`,
`iduser
`, `judul`, `isi`, `tanggal`, `image`) VALUES
(1, 1, 'kwkw', '<p>kwkwkw</p>', '2019-08-02 09:21:13', 'wwkkw');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita`
(
  `idberita` int
(11) NOT NULL,
  `iduser` int
(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`
idberita`,
`iduser
`, `judul`, `isi`, `tanggal`, `image`) VALUES
(1, 1, ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not ', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>\r\n</body>\r\n</html>', '2019-07-31 08:10:08', ''),
(20, 1, 'qwe', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>qwe</p>\r\n</body>\r\n</html>', '2019-08-01 11:14:14', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `alamat_kantor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `bidang`, `alamat_kantor`) VALUES
(1, 'BIDANG SUMBER DAYA AIR', 'adad'),
(2, 'BIDANG BINA MARGA', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(3, 'BIDANG CIPTA KARYA', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(4, 'BIDANG PENATAAN RUANG', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(5, 'BIDANG JASA KONSTRUKSI', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(6, 'SEKERTARIS DINAS', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(7, 'UPT LABORATURIUM', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_black_spot`
--

CREATE TABLE `tbl_black_spot` (
  `id_black_spot` int(11) NOT NULL,
  `ruas` varchar(128) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `jenis_masalah` varchar(255) NOT NULL,
  `tingkat_masalah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_black_spot`
--

INSERT INTO `tbl_black_spot` (`id_black_spot`, `ruas`, `kota`, `jenis_masalah`, `tingkat_masalah`) VALUES
(1, 'medan', 'medan', 'nothing', 'nothing'),
(2, 'medan', 'medan', 'medan', 'medan'),
(3, 'medan', 'medan', 'siantar', 'siantar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danau`
--

CREATE TABLE `tbl_danau` (
  `id_danau` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `luas` varchar(128) NOT NULL,
  `kedalaman` varchar(128) NOT NULL,
  `kapasitas` varchar(128) NOT NULL,
  `penduduk` varchar(128) NOT NULL,
  `irigasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_danau`
--

INSERT INTO `tbl_danau` (`id_danau`, `nama`, `kota`, `luas`, `kedalaman`, `kapasitas`, `penduduk`, `irigasi`) VALUES
(1, 'TAGE	', 'PANIAI', '17220	', '12', '13', '14', '16'),
(2, 'NISA', 'WAROPEN', '10300', '0', '0', '0', '0'),
(3, 'medan', 'medan', 'medan', 'medan', 'mean', '', ''),
(4, 'medan', 'medan', 'mean', 'das', 'ads', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_embung`
--

CREATE TABLE `tbl_embung` (
  `id_embung` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kapasitas` varchar(128) NOT NULL,
  `penduduk` varchar(12) NOT NULL,
  `ternak` varchar(128) NOT NULL,
  `irigasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_embung`
--

INSERT INTO `tbl_embung` (`id_embung`, `nama`, `kota`, `kapasitas`, `penduduk`, `ternak`, `irigasi`) VALUES
(1, '001 - Kalisusu', 'NABIRE', '7200', '257', '128', '24'),
(2, '002 - Siriwini', 'NABIRE', '10840', '470', '144', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_download`
--

CREATE TABLE `tbl_file_download` (
  `id_file` int(255) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file_download`
--

INSERT INTO `tbl_file_download` (`id_file`, `keterangan`, `nama_file`) VALUES
(22, 'w', 'license.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Kepela'),
(2, 'Wakil Kepalan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jalan`
--

CREATE TABLE `tbl_jalan` (
  `id_jalan` int(11) NOT NULL,
  `ruas` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `panjang` varchar(128) NOT NULL,
  `lebar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jalan`
--

INSERT INTO `tbl_jalan` (`id_jalan`, `ruas`, `kota`, `stat`, `panjang`, `lebar`) VALUES
(5, 'siantar', 'siantar', 'nas', '1000000', '1'),
(6, 'medan', 'binje', 'binje', '90', '90'),
(7, 'lala', 'lala', 'lala', '1', '1'),
(8, 'dsf', 'fsd', 'fds', '6', '6'),
(9, 'Binjai', 'Binjai', 'nas', '80', '8'),
(10, 'binjai', 'binjai', 'nas', '9', '8'),
(11, 'medan', 'medan', 'medan', '80', '80'),
(12, 'medan', 'medan', 'medan', 'medan', 'medan'),
(14, 'medan', 'medean', 'medan', '90', '90'),
(17, 'medan', 'medan', 'medan', 'medan', 'medan'),
(18, 'medan', 'medan', 'mean', 'mean', 'medan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jembatan`
--

CREATE TABLE `tbl_jembatan` (
  `id_jembatan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `panjang` varchar(128) NOT NULL,
  `lebar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jembatan`
--

INSERT INTO `tbl_jembatan` (`id_jembatan`, `nama`, `kota`, `panjang`, `lebar`) VALUES
(1, '062.137.006. - SANOBA', 'NABIRE', '70', '6'),
(2, '062.137.004. - S. MOKER', 'NABIRE', '36', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `module_path` varchar(20) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `module_icon` varchar(50) NOT NULL,
  `module_parent` int(11) NOT NULL,
  `module_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`module_path`, `module_name`, `module_icon`, `module_parent`, `module_order`) VALUES
('admin', 'Dashboard', 'fas fa-tachometer-alt', 0, 0),
('admin/bidang', 'Bidang', 'fas fa-bars', 1, 3),
('admin/data_pu', 'Data PU', 'fas fa-edit', 4, 6),
('admin/download', 'Download', 'fas fa-download', 0, 7),
('admin/pegawai', 'Pegawai', 'fas fa-users', 0, 2),
('admin/pengumuman', 'Pengumuman', 'fas fa-file', 3, 5),
('admin/warta', 'Warta', 'fas fa-calendar', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `id_bidang`, `id_jabatan`, `nip`, `nama`, `alamat`) VALUES
(6, 1, 1, '32532', 'Dedy sayhputra', 'medan'),
(7, 2, 2, '425832592355', 'user dedy', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(6, 1, 1, '32532', 'Dedy sayhputra', 'medan'),
(7, 2, 2, '425832592355', 'user dedy', 'KantorJalan Sumatera No. 15 Dok IV Tlp.
(0967) 533219 - Jayapura'),
(6, 1, 1, '32532', 'Dedy sayhputra', 'medan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemenang_lelang`
--

CREATE TABLE `tbl_pemenang_lelang` (
  `id_pemenang_lelang` int(11) NOT NULL,
  `id_pengumuman_lelang` int(11) NOT NULL,
  `pemenang` varchar(255) NOT NULL,
  `hps` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemenang_lelang`
--

INSERT INTO `tbl_pemenang_lelang` (`id_pemenang_lelang`, `id_pengumuman_lelang`, `pemenang`, `hps`) VALUES
(6, 23, 'pemenang', 49825242),
(8, 2, 'ded', 52),
(10, 1, 'telkom', 414),
(11, 2, 'telkom yniv', 53252),
(12, 1, '3d', 0),
(13, 0, '$pemenang', 0),
(14, 4, 'telkom', 150000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman_lelang`
--

CREATE TABLE `tbl_pengumuman_lelang` (
  `id_pengumuman_lelang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `batas` text NOT NULL,
  `no_sk` varchar(255) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `pagu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman_lelang`
--

INSERT INTO `tbl_pengumuman_lelang` (`id_pengumuman_lelang`, `tanggal`, `batas`, `no_sk`, `nama_paket`, `pagu`) VALUES
(4, '2019-07-26 00:00:00', '2019-07-29', '036/LU/PROG/PSIEBW/VIII/2013', 'fggf', 46346363),
(7, '2019-07-29 00:00:00', '2019-09-11', '07052003', 'mantapp', 36435),
(4, '2019-07-26 00:00:00', '2019-07-29', '036/LU/PROG/PSIEBW/VIII/2013', 'fggf', 46346363),
(7, '2019-07-29 00:00:00', '2019-09-11', '07052003', 'mantapp', 36435),
(4, '2019-07-26 00:00:00', '2019-07-29', '036/LU/PROG/PSIEBW/VIII/2013', 'fggf', 46346363),
(7, '2019-07-29 00:00:00', '2019-09-11', '07052003', 'mantapp', 36435);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_potensi_sumur_bor`
--

CREATE TABLE `tbl_potensi_sumur_bor` (
  `id_sumur` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `swl` varchar(128) NOT NULL,
  `debit` varchar(128) NOT NULL,
  `airbaku` varchar(128) NOT NULL,
  `irigasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_potensi_sumur_bor`
--

INSERT INTO `tbl_potensi_sumur_bor` (`id_sumur`, `nama`, `kota`, `swl`, `debit`, `airbaku`, `irigasi`) VALUES
(1, '02 - Arso IX', 'KEEROM', '1', '7', '250', '5'),
(2, '01 - Arso IX', 'KEEROM', '1', '7', '250', '5'),
(3, 'medan', 'medan', 'medan', 'medan', 'medan', 'medan'),
(4, 'medan', 'medan', 'medan', 'medan', 'medan', 'medan'),
(5, 'medan', 'medan', 'medan', 'mean', 'medan', 'medan'),
(6, 'medan', 'medan', 'medan', 'mean', 'mean', 'mean');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rawa`
--

CREATE TABLE `tbl_rawa` (
  `id_rawa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `sudah_kembang` varchar(255) NOT NULL,
  `belum_kembang` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rawa`
--

INSERT INTO `tbl_rawa` (`id_rawa`, `nama`, `jenis`, `kota`, `sudah_kembang`, `belum_kembang`, `total`, `tahun`) VALUES
(1, 'Gudang Arang', 'PASANG SURUT	', 'MERAUKE', '1539', '33', '1587', '2009'),
(2, 'Okaba', 'PASANG SURUT', 'MERAUKE', '296', '736621', '736917', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rup`
--

CREATE TABLE `tbl_rup` (
  `id_rup` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `pagu` decimal(10,0) NOT NULL,
  `metode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rup`
--

INSERT INTO `tbl_rup` (`id_rup`, `kegiatan`, `lokasi`, `pagu`, `metode`) VALUES
(0, 'f', 'f', '5', '5g'),
(210, 'sdd', 'efer', '5', 'fr'),
(215, 'medan', 'medan', '5', 'medan'),
(216, 'sadasfs', 'asdas', '5', 'fds'),
(217, '0', '0', '0', '0'),
(218, 'bangun', 'jalan', '13', 'fs'),
(219, 'mantap', 'mantap', '0', 'mantap'),
(220, 'sadasfs', 'asdas', '345435', 'asdas'),
(221, 'membangung', 'kalteng ', '120000000', 'fds'),
(222, 'membangung', 'kalteng ', '120000000', 'asdas'),
(223, 'membangung', 'asdas', '120000000', 'asdas'),
(224, 'membangung', '0', '120000000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spam`
--

CREATE TABLE `tbl_spam` (
  `id_spam` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `pelayanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spam`
--

INSERT INTO `tbl_spam` (`id_spam`, `nama`, `kota`, `kapasitas`, `pelayanan`) VALUES
(1, 'PA - Penyambungan Air', 'KOTA JAYAPURA	', '1', '1'),
(2, 'JAM6 - Jaringan Air Minum', 'MERAUKE	', '20', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE `tbl_sub_menu` (
  `module_sub_path` varchar(30) NOT NULL,
  `module_sub_name` varchar(50) NOT NULL,
  `module_parent` int(11) NOT NULL,
  `module_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menu`
--

INSERT INTO `tbl_sub_menu` (`module_sub_path`, `module_sub_name`, `module_parent`, `module_order`) VALUES
('admin/agenda', 'Agenda', 2, 3),
('admin/artikel', 'Artikel', 2, 2),
('admin/berita', 'Berita', 2, 1),
('admin/bidang', 'Bidang', 1, 2),
('admin/datapublackspot', 'Black Spot', 4, 5),
('admin/datapuembung', 'Embung', 4, 3),
('admin/datapujalan', 'Jalan', 4, 1),
('admin/datapujembatan', 'Jembatan', 4, 2),
('admin/datapupotensidanau', 'Potensi Danau', 4, 7),
('admin/datapupotensirawa', 'Potensi Rawa', 4, 8),
('admin/datapupotensisumurbor', 'Potensi Sumur Bor', 4, 9),
('admin/datapuspam', 'Spam', 4, 6),
('admin/datapusumurbor', 'Sumur Bor', 4, 4),
('admin/pegawaibidang', 'Pegawai Bidang', 1, 1),
('admin/pemenang_lelang', 'Pemenang Lelang', 3, 3),
('admin/pengumuman_lelang', 'Pengumuman Lelang', 3, 2),
('admin/rup', 'RUP', 3, 1),
('admin/testimoni', 'Testimoni', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sumurbor`
--

CREATE TABLE `tbl_sumurbor` (
  `id_sumurbor` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `debit` varchar(128) NOT NULL,
  `air_baku` varchar(128) NOT NULL,
  `irigasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sumurbor`
--

INSERT INTO `tbl_sumurbor` (`id_sumurbor`, `nama`, `kota`, `debit`, `air_baku`, `irigasi`) VALUES
(1, '0.27.0 - GENTENTIRI', 'Merauke', 'Nas	', '189.8	', '4'),
(2, '60.13.K - BIAK', 'BIAK NUMFOR', 'Nas', '2.19', '3.5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Edwin E Sumbayak', 'edwinsumbayak01@gmail.com', 'default.jpg', '$2y$10$Hh9MW6Rjl8n0UqnkUa100.XR87k6l2oMlH6zu.pmkXLUvpqoxS6ra', 1, 1, 1564020775),
(21, 'dedy', 'admin@gmail.com', 'default.jpg', '$2y$10$cPMBBWoZ.M88izA5UNRKAOS9q.TJq1mVNpuPXm8IYYpSgPA1Kr3Se', 1, 1, 0),
(34, 'eda', 'tes@gmail.com', 'default.jpg', '$2y$10$rK83bGPGbufrigKdpzrdJuCKXYb8tyYWNNAKxORrRjGdbnaKBd4BG', 1, 1564634350, 0),
(35, 'dedy harahap', 'admin@gmail.coma', 'default.jpg', '$2y$10$1fFO0iJry/aNg6ZOFV3U3uxs2M1NKr5nCxsGFKHSoXZRwOCnU6dry', 1, 1, 1564634529);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_black_spot`
--
ALTER TABLE `tbl_black_spot`
  ADD PRIMARY KEY (`id_black_spot`);

--
-- Indexes for table `tbl_danau`
--
ALTER TABLE `tbl_danau`
  ADD PRIMARY KEY (`id_danau`);

--
-- Indexes for table `tbl_embung`
--
ALTER TABLE `tbl_embung`
  ADD PRIMARY KEY (`id_embung`);

--
-- Indexes for table `tbl_file_download`
--
ALTER TABLE `tbl_file_download`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jalan`
--
ALTER TABLE `tbl_jalan`
  ADD PRIMARY KEY (`id_jalan`);

--
-- Indexes for table `tbl_jembatan`
--
ALTER TABLE `tbl_jembatan`
  ADD PRIMARY KEY (`id_jembatan`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`module_path`);

--
-- Indexes for table `tbl_pemenang_lelang`
--
ALTER TABLE `tbl_pemenang_lelang`
  ADD PRIMARY KEY (`id_pemenang_lelang`);

--
-- Indexes for table `tbl_potensi_sumur_bor`
--
ALTER TABLE `tbl_potensi_sumur_bor`
  ADD PRIMARY KEY (`id_sumur`);

--
-- Indexes for table `tbl_rawa`
--
ALTER TABLE `tbl_rawa`
  ADD PRIMARY KEY (`id_rawa`);

--
-- Indexes for table `tbl_rup`
--
ALTER TABLE `tbl_rup`
  ADD PRIMARY KEY (`id_rup`);

--
-- Indexes for table `tbl_spam`
--
ALTER TABLE `tbl_spam`
  ADD PRIMARY KEY (`id_spam`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  ADD PRIMARY KEY (`module_sub_path`);

--
-- Indexes for table `tbl_sumurbor`
--
ALTER TABLE `tbl_sumurbor`
  ADD PRIMARY KEY (`id_sumurbor`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_black_spot`
--
ALTER TABLE `tbl_black_spot`
  MODIFY `id_black_spot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_danau`
--
ALTER TABLE `tbl_danau`
  MODIFY `id_danau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_embung`
--
ALTER TABLE `tbl_embung`
  MODIFY `id_embung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_file_download`
--
ALTER TABLE `tbl_file_download`
  MODIFY `id_file` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_jalan`
--
ALTER TABLE `tbl_jalan`
  MODIFY `id_jalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_jembatan`
--
ALTER TABLE `tbl_jembatan`
  MODIFY `id_jembatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pemenang_lelang`
--
ALTER TABLE `tbl_pemenang_lelang`
  MODIFY `id_pemenang_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_potensi_sumur_bor`
--
ALTER TABLE `tbl_potensi_sumur_bor`
  MODIFY `id_sumur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_rawa`
--
ALTER TABLE `tbl_rawa`
  MODIFY `id_rawa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_spam`
--
ALTER TABLE `tbl_spam`
  MODIFY `id_spam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sumurbor`
--
ALTER TABLE `tbl_sumurbor`
  MODIFY `id_sumurbor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
