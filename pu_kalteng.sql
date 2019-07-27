-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 03:01 AM
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
  `judul` varchar
(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `image` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_black_spot`
--

CREATE TABLE `tbl_black_spot`
(
  `id_black_spot` int
(11) NOT NULL,
  `ruas` varchar
(128) NOT NULL,
  `kota` varchar
(100) NOT NULL,
  `jenis_masalah` varchar
(255) NOT NULL,
  `tingkat_masalah` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_black_spot`
--

INSERT INTO `tbl_black_spot` (`
id_black_spot`,
`ruas
`, `kota`, `jenis_masalah`, `tingkat_masalah`) VALUES
(1, 'medan', 'medan', 'nothing', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danau`
--

CREATE TABLE `tbl_danau`
(
  `id_danau` int
(11) NOT NULL,
  `nama` varchar
(128) NOT NULL,
  `kota` varchar
(128) NOT NULL,
  `luas` varchar
(128) NOT NULL,
  `kedalaman` varchar
(128) NOT NULL,
  `kapasitas` varchar
(128) NOT NULL,
  `penduduk` varchar
(128) NOT NULL,
  `ternak` varchar
(128) NOT NULL,
  `irigasi` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_danau`
--

INSERT INTO `tbl_danau` (`
id_danau`,
`nama
`, `kota`, `luas`, `kedalaman`, `kapasitas`, `penduduk`, `ternak`, `irigasi`) VALUES
(1, 'TAGE	', 'PANIAI', '17220	', '12', '13', '14', '15', '16'),
(2, 'NISA', 'WAROPEN', '10300', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_embung`
--

CREATE TABLE `tbl_embung`
(
  `id_embung` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `kota` varchar
(100) NOT NULL,
  `kapasitas` varchar
(128) NOT NULL,
  `penduduk` varchar
(12) NOT NULL,
  `ternak` varchar
(128) NOT NULL,
  `irigasi` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_embung`
--

INSERT INTO `tbl_embung` (`
id_embung`,
`nama
`, `kota`, `kapasitas`, `penduduk`, `ternak`, `irigasi`) VALUES
(1, '001 - Kalisusu', 'NABIRE', '7200', '257', '128', '2'),
(2, '002 - Siriwini', 'NABIRE', '10840', '470', '144', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jalan`
--

CREATE TABLE `tbl_jalan`
(
  `id_jalan` int
(11) NOT NULL,
  `ruas` varchar
(255) NOT NULL,
  `kota` varchar
(255) NOT NULL,
  `stat` varchar
(255) NOT NULL,
  `panjang` varchar
(128) NOT NULL,
  `lebar` varchar
(128) NOT NULL,
  `aspal` varchar
(128) NOT NULL,
  `japat` varchar
(128) NOT NULL,
  `tanah` varchar
(128) NOT NULL,
  `beton` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jalan`
--

INSERT INTO `tbl_jalan` (`
id_jalan`,
`ruas
`, `kota`, `stat`, `panjang`, `lebar`, `aspal`, `japat`, `tanah`, `beton`) VALUES
(1, '60.13.K - BIAK', '60.13.K - BIAK', 'Nas', '2', '4', '60', '0', '0', '0'),
(2, '60.13.K - BIAK', 'BIAK NUMFOR', 'Nas', '2', '4', '2', '0', '0', '0'),
(3, 'medan', 'medan', 'medan', 'medan', '1', '1', '1', '1', '1'),
(4, 'medan', 'medan', 'meadn', '1', '1', '', '', '', ''),
(5, 'siantar', 'siantar', 'nas', '1', '1', '', '', '', ''),
(6, 'lapas', 'lapas', 'nas', '1', '1', '', '', '', ''),
(7, 'lala', 'lala', 'lala', '1', '1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jembatan`
--

CREATE TABLE `tbl_jembatan`
(
  `id_jembatan` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `kota` varchar
(255) NOT NULL,
  `panjang` varchar
(128) NOT NULL,
  `lebar` varchar
(128) NOT NULL,
  `atas` varchar
(100) NOT NULL,
  `bawah` varchar
(100) NOT NULL,
  `sungai` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jembatan`
--

INSERT INTO `tbl_jembatan` (`
id_jembatan`,
`nama
`, `kota`, `panjang`, `lebar`, `atas`, `bawah`, `sungai`) VALUES
(1, '062.137.006. - SANOBA', 'NABIRE', '70', '6', '', '', ''),
(2, '062.137.004. - S. MOKER', 'NABIRE', '36', '7', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu`
(
  `module_path` varchar
(20) NOT NULL,
  `module_name` varchar
(20) NOT NULL,
  `module_icon` varchar
(50) NOT NULL,
  `module_parent` int
(11) NOT NULL,
  `module_order` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`
module_path`,
`module_name
`, `module_icon`, `module_parent`, `module_order`) VALUES
('admin', 'Dashboard', 'fas fa-tachometer-alt', 0, 0),
('admin/bidang', 'Bidang', 'fas fa-bars', 1, 3),
('admin/data_pu', 'Data PU', 'fas fa-edit', 4, 6),
('admin/pegawai', 'Pegawai', 'fas fa-users', 0, 2),
('admin/pengumuman', 'Pengumuman', 'fas fa-file', 3, 5),
('admin/warta', 'Warta', 'fas fa-calendar', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemenang_lelang`
--

CREATE TABLE `tbl_pemenang_lelang`
(
  `id_pemenang_lelang` int
(11) NOT NULL,
  `id_pengumuman_lelang` int
(11) NOT NULL,
  `pemenang` varchar
(255) NOT NULL,
  `hps` int
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman_lelang`
--

CREATE TABLE `tbl_pengumuman_lelang`
(
  `id_pengumuman_lelang` int
(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp
() ON
UPDATE current_timestamp(),
  `batas
` text NOT NULL,
  `no_sk` varchar
(255) NOT NULL,
  `nama_paket` varchar
(255) NOT NULL,
  `pagu` int
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_potensi_sumur_bor`
--

CREATE TABLE `tbl_potensi_sumur_bor`
(
  `id_sumur` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `kota` varchar
(100) NOT NULL,
  `swl` varchar
(128) NOT NULL,
  `debit` varchar
(128) NOT NULL,
  `airbaku` varchar
(128) NOT NULL,
  `irigasi` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_potensi_sumur_bor`
--

INSERT INTO `tbl_potensi_sumur_bor` (`
id_sumur`,
`nama
`, `kota`, `swl`, `debit`, `airbaku`, `irigasi`) VALUES
(1, '02 - Arso IX', 'KEEROM', '1', '7', '250', '5'),
(2, '01 - Arso IX', 'KEEROM', '1', '7', '250', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rawa`
--

CREATE TABLE `tbl_rawa`
(
  `id_rawa` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `jenis` varchar
(100) NOT NULL,
  `kota` varchar
(100) NOT NULL,
  `sudah_kembang` varchar
(255) NOT NULL,
  `belum_kembang` varchar
(255) NOT NULL,
  `sudah_manfaat` varchar
(255) NOT NULL,
  `belum_manfaat` varchar
(255) NOT NULL,
  `total` varchar
(255) NOT NULL,
  `tahun` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rawa`
--

INSERT INTO `tbl_rawa` (`
id_rawa`,
`nama
`, `jenis`, `kota`, `sudah_kembang`, `belum_kembang`, `sudah_manfaat`, `belum_manfaat`, `total`, `tahun`) VALUES
(1, 'Gudang Arang', 'PASANG SURUT	', 'MERAUKE', '1539', '33', '0', '15', '1587', '2009'),
(2, 'Okaba', 'PASANG SURUT', 'MERAUKE', '296', '736621', '0', '0', '736917', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rup`
--

CREATE TABLE `tbl_rup`
(
  `id_rup` int
(11) NOT NULL,
  `kegiatan` varchar
(255) NOT NULL,
  `lokasi` varchar
(255) NOT NULL,
  `pagu` decimal
(10,0) NOT NULL,
  `metode` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spam`
--

CREATE TABLE `tbl_spam`
(
  `id_spam` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `kota` varchar
(100) NOT NULL,
  `kapasitas` varchar
(255) NOT NULL,
  `pelayanan` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spam`
--

INSERT INTO `tbl_spam` (`
id_spam`,
`nama
`, `kota`, `kapasitas`, `pelayanan`) VALUES
(1, 'PA - Penyambungan Air', 'KOTA JAYAPURA	', '1', '1'),
(2, 'JAM6 - Jaringan Air Minum', 'MERAUKE	', '20', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE `tbl_sub_menu`
(
  `module_sub_path` varchar
(30) NOT NULL,
  `module_sub_name` varchar
(50) NOT NULL,
  `module_parent` int
(11) NOT NULL,
  `module_order` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menu`
--

INSERT INTO `tbl_sub_menu` (`
module_sub_path`,
`module_sub_name
`, `module_parent`, `module_order`) VALUES
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

CREATE TABLE `tbl_sumurbor`
(
  `tbl_sumurbor` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `kota` varchar
(100) NOT NULL,
  `debit` varchar
(128) NOT NULL,
  `air_baku` varchar
(128) NOT NULL,
  `irigasi` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sumurbor`
--

INSERT INTO `tbl_sumurbor` (`
tbl_sumurbor`,
`nama
`, `kota`, `debit`, `air_baku`, `irigasi`) VALUES
(1, '0.27.0 - GENTENTIRI', 'Merauke', 'Nas	', '189.8	', '4'),
(2, '60.13.K - BIAK', 'BIAK NUMFOR', 'Nas', '2.19', '3.5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni`
(
  `id_testimoni` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(128) NOT NULL,
  `email` varchar
(128) NOT NULL,
  `image` varchar
(128) NOT NULL,
  `password` varchar
(256) NOT NULL,
  `role_id` int
(1) NOT NULL,
  `is_active` int
(1) NOT NULL,
  `date_created` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user`
  (`id`, `name
`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$Hh9MW6Rjl8n0UqnkUa100.XR87k6l2oMlH6zu.pmkXLUvpqoxS6ra', 1, 1, 1564020775);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
ADD PRIMARY KEY
(`id_agenda`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
ADD PRIMARY KEY
(`id_artikel`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
ADD PRIMARY KEY
(`idberita`);

--
-- Indexes for table `tbl_black_spot`
--
ALTER TABLE `tbl_black_spot`
ADD PRIMARY KEY
(`id_black_spot`);

--
-- Indexes for table `tbl_danau`
--
ALTER TABLE `tbl_danau`
ADD PRIMARY KEY
(`id_danau`);

--
-- Indexes for table `tbl_embung`
--
ALTER TABLE `tbl_embung`
ADD PRIMARY KEY
(`id_embung`);

--
-- Indexes for table `tbl_jalan`
--
ALTER TABLE `tbl_jalan`
ADD PRIMARY KEY
(`id_jalan`);

--
-- Indexes for table `tbl_jembatan`
--
ALTER TABLE `tbl_jembatan`
ADD PRIMARY KEY
(`id_jembatan`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
ADD PRIMARY KEY
(`module_path`);

--
-- Indexes for table `tbl_pemenang_lelang`
--
ALTER TABLE `tbl_pemenang_lelang`
ADD PRIMARY KEY
(`id_pemenang_lelang`);

--
-- Indexes for table `tbl_potensi_sumur_bor`
--
ALTER TABLE `tbl_potensi_sumur_bor`
ADD PRIMARY KEY
(`id_sumur`);

--
-- Indexes for table `tbl_rawa`
--
ALTER TABLE `tbl_rawa`
ADD PRIMARY KEY
(`id_rawa`);

--
-- Indexes for table `tbl_rup`
--
ALTER TABLE `tbl_rup`
ADD PRIMARY KEY
(`id_rup`);

--
-- Indexes for table `tbl_spam`
--
ALTER TABLE `tbl_spam`
ADD PRIMARY KEY
(`id_spam`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
ADD PRIMARY KEY
(`module_sub_path`);

--
-- Indexes for table `tbl_sumurbor`
--
ALTER TABLE `tbl_sumurbor`
ADD PRIMARY KEY
(`tbl_sumurbor`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
ADD PRIMARY KEY
(`id_testimoni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `idberita` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_black_spot`
--
ALTER TABLE `tbl_black_spot`
  MODIFY `id_black_spot` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_danau`
--
ALTER TABLE `tbl_danau`
  MODIFY `id_danau` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_embung`
--
ALTER TABLE `tbl_embung`
  MODIFY `id_embung` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jalan`
--
ALTER TABLE `tbl_jalan`
  MODIFY `id_jalan` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_jembatan`
--
ALTER TABLE `tbl_jembatan`
  MODIFY `id_jembatan` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pemenang_lelang`
--
ALTER TABLE `tbl_pemenang_lelang`
  MODIFY `id_pemenang_lelang` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_potensi_sumur_bor`
--
ALTER TABLE `tbl_potensi_sumur_bor`
  MODIFY `id_sumur` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rawa`
--
ALTER TABLE `tbl_rawa`
  MODIFY `id_rawa` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_spam`
--
ALTER TABLE `tbl_spam`
  MODIFY `id_spam` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sumurbor`
--
ALTER TABLE `tbl_sumurbor`
  MODIFY `tbl_sumurbor` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
