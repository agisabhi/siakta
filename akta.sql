-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 03:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akta`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('penjual','ppat','petugas','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `role`) VALUES
(1, 'ppat', 'ppat', 'ppat'),
(2, '062280', '6545S3D2', 'penjual'),
(3, '10517073', 'agisabhi28', 'petugas'),
(4, '10517074', '10517074', 'petugas'),
(5, '887915', 'A8O9DW3R', 'penjual'),
(6, '900281', '140187RW', 'penjual'),
(7, 'agisabhi', 'agisabhi28', 'penjual'),
(8, 'agisabhi28', 'agisabhi28', 'penjual'),
(9, 'euisneni14', 'euisneni14', 'penjual'),
(10, 'juma1212', 'juma1212', 'penjual'),
(11, 'andri123', 'andri123', 'penjual'),
(12, '19082299', 'supandi123', 'petugas'),
(13, 'abhirafdhi28', 'abhirafdhi28', 'penjual'),
(14, 'agisaku', 'agisaku28', 'penjual'),
(15, 'juma12', 'juma1212', 'penjual'),
(16, '20210717', 'mahardika', 'petugas'),
(17, 'qorygore', 'qorygore', 'penjual'),
(18, 'seminar', 'seminar01', 'penjual'),
(19, 'agisabhi28@gmail.com', 'agisabhi28', 'penjual'),
(20, 'agisabhi@smk-informatika-srg.sch.id', 'agisabhi', 'penjual');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `no_pengajuan` varchar(50) NOT NULL,
  `salinan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `no_pengajuan`, `salinan`) VALUES
(1, 'P2021060004', '16_1_12.pdf'),
(2, 'P2021080012', '4_Class_Diagram.pdf'),
(3, 'P2021080013', 'CORET.pdf'),
(5, 'P2021080016', 'CORET1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `berita_acara`
--

CREATE TABLE `berita_acara` (
  `no_berita` int(11) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `batas_utara` varchar(100) NOT NULL,
  `batas_selatan` varchar(100) NOT NULL,
  `batas_timur` varchar(100) NOT NULL,
  `batas_barat` varchar(100) NOT NULL,
  `no_jadwal` int(11) NOT NULL,
  `gambar_kasar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita_acara`
--

INSERT INTO `berita_acara` (`no_berita`, `luas_tanah`, `batas_utara`, `batas_selatan`, `batas_timur`, `batas_barat`, `no_jadwal`, `gambar_kasar`) VALUES
(1, 90, 'Jalan Komplek', 'Tanah a.n Hendrik Saputra', 'Tanah a.n Agara', 'Masjid Al-Barru', 1, 'Picture3.png'),
(2, 100, 'India', 'Malaysia', 'Tanah. a.n Munir', 'Tanah a.n Isdira', 2, '1509165457411.jpg'),
(3, 100, 'Tanah a.n Abi', 'Jalan Desa ', 'masjid', 'musholla', 3, '15083368663363.png'),
(4, 150, 'Jalan Desa', 'Tanah a.n H. Sapta', 'Tanah. a.n Munir', 'Tanah a.n Marduki', 3, 'sss.jpg'),
(8, 150, 'Tanah a.n Abi', 'Tanah a.n H. Sapta', 'Tanah. a.n Munir', 'Tanah a.n Marduki', 4, 'Shopee_55f87a4546a60be690ac8f3139f7432b2.jpg'),
(9, 100, 'Tanah a.n Abi', 'Masjid Al-Baru', 'Tanah Wakaf Bpk, Juni', 'Tanah a.n Marduki', 5, 'WhatsApp_Image_2021-06-25_at_15_37_111.jpeg'),
(10, 100, 'Tanah a.n Abi', 'Masjid Al-Baru', 'Tanah Wakaf Bpk, Juni', 'Tanah a.n Marduki', 6, 'WhatsApp_Image_2021-07-05_at_11_19_094.jpeg'),
(11, 90, 'Tanah a.n Anji', 'Masjid Al barru', 'TPU al qadir', 'Tanah A.n Rifal', 9, 'Kwitansi-Jual-Beli-Tanah-6-1.jpg'),
(12, 120, 'Tanah H Said', 'Tanah a.n H. Sapta', 'Tanah Wakaf Bpk, Juni', 'Masjid Al Ghifari', 10, 'Screenshot_(1).png'),
(13, 100, 'tanah H, Malik', 'Masjid Al-Barru', 'Tanah Wakaf Bpk, Juni', 'Tanah a.n Marduki', 11, 'pajak.jpg'),
(14, 100, 'Tanah H Said', 'Tanah a.n H. Sapta', 'Tanah. a.n Munir', 'Tanah a.n Isdira', 1, 'pajak1.jpg'),
(15, 100, 'Tanah H Said', 'Tanah a.n H. Sapta', 'Tanah. a.n Munir', 'Tanah a.n Isdira', 1, 'pajak2.jpg'),
(16, 100, 'Tanah H Said', 'Tanah a.n H. Sapta', 'Tanah. a.n Munir', 'Tanah a.n Isdira', 12, 'pajak21.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `no_jadwal` int(11) NOT NULL,
  `tanggal_penjadwalan` date NOT NULL,
  `no_pengajuan` varchar(50) NOT NULL,
  `id_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`no_jadwal`, `tanggal_penjadwalan`, `no_pengajuan`, `id_petugas`) VALUES
(1, '2021-06-10', 'P2021060003', '10517073'),
(2, '2021-06-11', 'P2021060004', '10517074'),
(3, '2021-06-11', 'P2021060005', '10517073'),
(4, '2021-06-18', 'P2021060001', '10517073'),
(5, '2021-07-05', 'P2021060006', '10517073'),
(6, '2021-07-07', 'P2021070008', '10517073'),
(7, '2021-07-25', 'P2021060002', '10517074'),
(8, '2021-07-27', 'P2021070007', '10517073'),
(9, '2021-07-27', 'P2021070009', '10517074'),
(10, '2021-08-04', 'P2021080012', '19082299'),
(11, '2021-08-05', 'P2021080013', '10517073'),
(12, '2021-08-07', 'P2021080016', '10517073');

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE `pajak` (
  `id_pajak` int(11) NOT NULL,
  `billing_pajak` int(50) NOT NULL,
  `nominal_pajak` int(50) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `no_pengajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pajak`
--

INSERT INTO `pajak` (`id_pajak`, `billing_pajak`, `nominal_pajak`, `bukti_transfer`, `no_pengajuan`) VALUES
(1, 8891, 1900000, '3ad04a5adb17894bea9cfdaa0274b1023.jpg', 'P2021060003'),
(2, 28913778, 1500000, '1508336866336.png', 'P2021060004'),
(4, 2147483647, 1250000, 'Shopee_84adb2108ab10ba0104b820f869853d42.jpg', 'P2021060001'),
(5, 80992299, 1750000, 'WhatsApp_Image_2021-06-25_at_15_37_112.jpeg', 'P2021060006'),
(6, 2147483647, 1250000, 'WhatsApp_Image_2021-06-25_at_15_37_113.jpeg', 'P2021070008'),
(7, 892200119, 985000, 'WhatsApp_Image_2021-07-05_at_11_19_095.jpeg', 'P2021060005'),
(8, 2147483647, 1250000, 'Kwitansi-Jual-Beli-Tanah-6-11.jpg', 'P2021070009'),
(9, 2147483647, 1750000, 'Screenshot_(2).png', 'P2021080012'),
(10, 2147483647, 1750000, 'pajak2.jpeg', 'P2021080013'),
(11, 2147483647, 1800000, 'pajak22.jpeg', 'P2021080016');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `nik_pembeli` bigint(50) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `alamat_pembeli` varchar(150) NOT NULL,
  `npwp_pembeli` int(11) NOT NULL,
  `foto_ktp_pembeli` text NOT NULL,
  `foto_npwp_pembeli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`nik_pembeli`, `nama_pembeli`, `alamat_pembeli`, `npwp_pembeli`, `foto_ktp_pembeli`, `foto_npwp_pembeli`) VALUES
(1999, 'Serjika', 'ciruas', 1709, '117840282923402.jpg', '1178402824738511.jpg'),
(100990, 'aji', 'komp vijaya', 6750, '1509957003386.jpg', '1509973187805.jpg'),
(178299377, 'Agisena', 'serang', 2147483647, '117840282473851.jpg', '117840282473852.jpg'),
(2147483647, 'Suratman', 'Kp Cigoler Ds. Dumca Kec. Garut Palapa', 1882773896, '528629.jpg', '48893.jpg'),
(3202111907810004, 'Muhidin', 'Kp Mekar Jaya Kec. Cimenyan', 2147483647, 'ktp2.jpg', 'npwp2.jpg'),
(7777777777777777, 'Agisena', 'Cipadung', 2147483647, '150833686633610.png', '15091654466084.jpg'),
(7777777777777776, 'Sandika Gandaria', 'Serang', 2147483647, 'suarez16.jpg', 'npwp27.jpg'),
(9292929292929292, 'kiasdl', 'Silebu raya', 2147483647, 'ktp25.jpg', 'npwp28.jpg'),
(1233338899199199, 'aliso', 'asdjiik', 2147483647, 'ktp27.jpg', 'npwp210.jpg'),
(11111222, 'Coki Pardiedie', 'medan', 2147483647, 'ktp28.jpg', 'format_output1.jpg'),
(1399289919918820, 'Amalina Herlambang', 'kawalu, Tasikmalaya Kota', 2147483647, 'Shopee_55f87a4546a60be690ac8f3139f7432b3.jpg', 'Shopee_84adb2108ab10ba0104b820f869853d43.jpg'),
(1128918918918888, 'Hery', 'Cisaranten Kulon No 12', 2147483647, 'Ktp-Pembeli.jpg', 'npwp-pembeli.jpg'),
(2399002990912002, 'Randa', 'Kp. Cigalumpit RT/RW 002/015 Kelurahan CIcendo, Kota Bandung', 2147483647, 'Screenshot_(6).png', 'Screenshot_(5).png'),
(9938023047881101, 'Andri Sian', 'Serang, Banten', 2147483647, 'Ktp-Pembeli1.jpg', 'npwp-pembeli1.jpg'),
(1002299308989120, 'Sarkinah', 'asakl', 2147483647, 'Ktp-Pembeli4.jpg', 'npwp-pembeli2.jpg'),
(3604129933881208, 'Mikirin', 'asdko', 2147483647, 'Ktp-Pembeli5.jpg', 'npwp-pembeli3.jpg'),
(8277338811992121, 'asjdoij', 'sadoijawioj', 2147483647, 'Ktp-Pembeli6.jpg', 'npwp-pembeli4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pengajuan` varchar(20) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `nik_penjual` bigint(20) NOT NULL,
  `nik_pembeli` bigint(20) NOT NULL,
  `no_sertifikat` bigint(20) NOT NULL,
  `harga_transaksi` int(50) NOT NULL,
  `foto_kuitansi` text NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `status_pengajuan` enum('Menunggu Respon','Berkas Terverifikasi','Ditolak','Peninjauan','Pembayaran Pajak','Menunggu Verifikasi Pajak','Penjadwalan Pengambilan','Proses Pembuatan AJB','Pengajuan AJB Selesai','Pembayaran Pajak Ditolak','Selesai') NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pengajuan`, `tanggal_pendaftaran`, `nik_penjual`, `nik_pembeli`, `no_sertifikat`, `harga_transaksi`, `foto_kuitansi`, `alasan`, `status_pengajuan`, `id_akun`) VALUES
('P2021060001', '2021-06-18', 3214082909710002, 3202111907810004, 12347900182911, 31500000, 'kuitansi.jpg', '', 'Pengajuan AJB Selesai', 11),
('P2021060002', '2021-06-11', 2377272727272788, 7777777777777777, 18928911111111, 14000000, '150833686633612.png', '', 'Peninjauan', 8),
('P2021060003', '2021-06-07', 360899100, 2147483647, 2147483647, 89999996, 'Picture5.png', '', 'Pembayaran Pajak', 2),
('P2021060004', '2021-06-10', 190, 1999, 10220, 185000000, '1509165494372.jpg', '', 'Selesai', 8),
('P2021060005', '2021-06-10', 8910, 100990, 128709990, 190000000, '15083368663362.png', '', 'Menunggu Verifikasi Pajak', 8),
('P2021060006', '2021-06-30', 1010101918171828, 9292929292929292, 97232882288291, 102000000, 'kuitansi2.jpg', '', 'Pengajuan AJB Selesai', 8),
('P2021070007', '2021-07-03', 3214082909710002, 3202111907810004, 12347900182911, 90000000, 'kuitansi3.jpg', '', 'Peninjauan', 13),
('P2021070008', '2021-07-07', 112299119, 1233338899199199, 88299100199881, 120000000, 'kuitansi4.jpg', '', 'Pengajuan AJB Selesai', 14),
('P2021070009', '2021-07-18', 1111111100000000, 11111222, 18181818181818, 84000000, 'kuitansi5.jpg', '', 'Menunggu Verifikasi Pajak', 8),
('P2021070010', '2021-07-23', 2900189829819811, 1399289919918820, 18992378001001, 89000000, 'kuitansi-tanah.png', 'foto ktp penjual blur', 'Ditolak', 13),
('P2021070011', '2021-07-23', 7299188198102991, 1128918918918888, 18829910018811, 90000000, 'kuitansi-tanah1.png', '', 'Berkas Terverifikasi', 15),
('P2021080012', '2021-08-03', 1028100119928813, 2399002990912002, 10029388298491, 240000000, 'Screenshot_(4)1.png', '', 'Selesai', 17),
('P2021080013', '2021-08-04', 1829991002889167, 9938023047881101, 18928839900299, 85000000, 'kuitansi-tanah2.png', '', 'Selesai', 18),
('P2021080014', '2021-08-04', 1278378277388890, 1002299308989120, 14332388992389, 125000000, 'Kwitansi-Jual-Beli-Tanah-6-12.jpg', '', 'Menunggu Respon', 1),
('P2021080015', '2021-08-04', 1002289617687231, 3604129933881208, 20023999478788, 95000000, 'kuitansi-tanah3.png', '', 'Berkas Terverifikasi', 19),
('P2021080016', '2021-08-06', 11002290930, 8277338811992121, 90218888219897, 89000000, 'kuitansi-tanah4.png', '', 'Selesai', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pengambil`
--

CREATE TABLE `pengambil` (
  `id_pengambil` int(11) NOT NULL,
  `nama_pengambil` varchar(100) NOT NULL,
  `no_hp_pengambil` varchar(50) NOT NULL,
  `foto_ktp_pengambil` text NOT NULL,
  `no_pengambilan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengambil`
--

INSERT INTO `pengambil` (`id_pengambil`, `nama_pengambil`, `no_hp_pengambil`, `foto_ktp_pengambil`, `no_pengambilan`) VALUES
(1, 'Udin S', '889911229911', 'Shopee_520f06ee7804a1a1a26bdbddd0854ccb1.jpg', 3),
(4, 'Andri Septia, SE', '081900889922', 'ktp22.jpg', 5),
(5, 'Husain', '081199002839', 'ktp11.jpg', 6),
(6, 'Aji', '081900889922', 'ktp12.jpg', 7),
(7, 'chepi', '0812981981989', 'Ktp-Penjual1.jpg', 8),
(8, 'Richard S Karim', '088219901878', 'Screenshot_(5)1.png', 9),
(9, 'Richard Mamaki', '082277228920', 'Ktp-Pembeli2.jpg', 10),
(10, 'Abdi Ramadhan', '081988228839', 'Ktp-Pembeli8.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan`
--

CREATE TABLE `pengambilan` (
  `no_pengambilan` int(11) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `no_pengajuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengambilan`
--

INSERT INTO `pengambilan` (`no_pengambilan`, `tanggal_pengambilan`, `no_pengajuan`) VALUES
(2, '2021-06-17', 'P2021060004'),
(3, '2021-06-14', 'P2021060005'),
(4, '2021-06-17', 'P2021060003'),
(5, '2021-06-19', 'P2021060001'),
(6, '2021-07-05', 'P2021060006'),
(7, '2021-07-14', 'P2021070008'),
(8, '2021-07-25', 'P2021060004'),
(9, '2021-08-04', 'P2021080012'),
(10, '2021-08-06', 'P2021080013'),
(11, '2021-08-13', 'P2021080016');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `nik_penjual` bigint(20) NOT NULL,
  `nama_penjual` varchar(100) NOT NULL,
  `alamat_penjual` varchar(150) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `npwp_penjual` int(50) NOT NULL,
  `foto_ktp_penjual` text NOT NULL,
  `foto_npwp_penjual` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`nik_penjual`, `nama_penjual`, `alamat_penjual`, `no_telpon`, `npwp_penjual`, `foto_ktp_penjual`, `foto_npwp_penjual`) VALUES
(190, 'Sugeng', 'Serang', '0899', 11782, '1178402824738510.jpg', '117840282923403.jpg'),
(8910, 'Agisaabhi', 'Serang', '88912', 78, '1510122706980.jpg', '1509165209495.jpg'),
(18929909, 'Ajikuna', 'nimaskkok asaj', '08190022773', 178299112, '11784028247385.jpg', '11784028292340.jpg'),
(360899100, 'Bonar Stephensen', 'CIpadung Asri Blok J2 No 14', '0819881177', 2147483647, '3ad04a5adb17894bea9cfdaa0274b1021.jpg', 'asus_patah1.jpg'),
(2147483647, 'Junaedi', 'Sabilulunfan', '081929092999', 2147483647, '15083368663365.png', '15083368663366.png'),
(2377272727272788, 'Ajikuna', 'Sedang', '081708084576', 2147483647, '15091652094955.jpg', 'Shopee_96a7051f98f6ff1eb9c42324a2234466.jpg'),
(3214082909710002, 'Andri Septia', 'Panyileukan No 78', '081908277732', 2147483647, 'ktp.jpg', 'npwp1.jpg'),
(8888888888888888, 'Asijkay', 'sadjhj', '888888888888', 2147483647, 'suarez3.jpg', 'ktp5.jpg'),
(8888888888888888, 'Asijkay', 'sadjhj', '888888888888', 2147483647, 'suarez15.jpg', 'ktp9.jpg'),
(1010101918171828, 'Abdi Rompies', 'jiji', '081927783781', 2147483647, 'ktp10.jpg', 'npwp18.jpg'),
(112299119, 'abdi aku', 'asdji', '081900001199', 2147483647, 'WhatsApp_Image_2021-07-05_at_11_19_093.jpeg', 'npwp110.jpg'),
(1111111100000000, 'Abdul Jalal', 'Madura', '087819001239', 2147483647, 'format_output.jpg', 'Shopee_5ec955b9a840e9f1d92ae6f3e2a0f54f.jpg'),
(2900189829819811, 'Baehuni', 'Cisaranten Kulon', '081190290001', 2147483647, 'sss4.jpg', 'Shopee_1070641e6a5680c130efdb38c9d409f5.jpg'),
(7299188198102991, 'Jumansyah', 'Setiabudhi', '081882991890', 2147483647, 'Ktp-Penjual.jpg', 'npwp-penjual.JPG'),
(1028100119928813, 'Richard S Karim', 'Cisaranten Kulon Blok F12 No 5', '088213453389', 2147483647, 'format_output2.jpg', 'Screenshot_(3).png'),
(1829991002889167, 'Richard Mamaki', 'Cisaranten Wetan 01', '082991883781', 2147483647, 'Ktp-Penjual2.jpg', 'npwp-penjual1.JPG'),
(1278378277388890, 'Jumadi', 'asdok', '081920038898', 2147483647, 'Ktp-Pembeli3.jpg', 'npwp-penjual2.JPG'),
(1002289617687231, 'Kiko', 'Manaad', '761366762736', 2147483647, 'Ktp-Penjual3.jpg', 'npwp-penjual3.JPG'),
(11002290930, 'jiasdjsk', 'sdfjoij', '082288339911', 2147483647, 'Ktp-Penjual4.jpg', 'Ktp-Pembeli7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(50) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `no_hp`) VALUES
('10517073', 'Agis Abhi Pamualif', '81908084932'),
('10517074', 'F Dar', '7728831'),
('19082299', 'Supandy SKom', '081122667833'),
('20210717', 'Mahardika Sulaeman', '081180992991');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `no_sertifikat` bigint(50) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `alamat_tanah` varchar(100) NOT NULL,
  `foto_sertifikat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`no_sertifikat`, `nama_pemilik`, `luas_tanah`, `alamat_tanah`, `foto_sertifikat`) VALUES
(10220, 'Siantar', 1000, 'Bukit tinggi', '1178402824738512.jpg'),
(128709990, 'Saripudin', 100, 'Cipadung Cibiru', '15083368663361.png'),
(2147483647, 'Markonah', 90, 'Komplek Bukit Citra Asri Blok J2 No 13', 'asus-eye_jpg1.jpg'),
(12347900182911, 'Andri Septia', 150, 'Desa Cimekar Kec. Cibiru', 'contoh-sertipikat_2.jpg'),
(18928911111111, 'Siantar', 80, 'Manisi No 13', '150833686633611.png'),
(88888777777777, 'Andi S', 90, 'Cilengkrang', 'npwp17.jpg'),
(97232882288291, 'Sandika Gandaria', 100, 'cimenyan', 'WhatsApp_Image_2021-07-05_at_11_19_091.jpeg'),
(88299100199881, 'Alur', 100, 'cipadung raya', 'contoh-sertipikat_24.jpg'),
(18181818181818, 'Muslim', 84, 'CIlengkrang 2 No 3', 'Lembar_Keaslian_Seminar_page-0001.jpg'),
(18992378001001, 'Ganda Muranda', 125, 'Cipadung Kulon No 13, Palasari, Kec. Cibiru', 'sertifikat.jpg'),
(18829910018811, 'Chepi N ', 90, 'Cipadung wetan, Palasari', 'sertifikat1.jpg'),
(10029388298491, 'Richard S Karim', 120, 'Cipadung Kulon No 13', 'Screenshot_(4).png'),
(18928839900299, 'Richard Mamaki', 100, 'Cipadung Kulon No 121', 'sertifikat2.jpg'),
(14332388992389, 'Jumadi', 87, 'Palasari', 'sertifikat3.jpg'),
(20023999478788, 'Kiko', 140, 'Cilengkrang 2 No 14', 'sertifikat4.jpg'),
(90218888219897, 'Akijiasd', 100, 'qoiwue92', 'sertifikat5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `no_verifikasi` int(11) NOT NULL,
  `status_ktp_penjual` enum('yes','no','','') NOT NULL,
  `status_ktp_pembeli` enum('yes','no','','','') NOT NULL,
  `status_npwp_penjual` enum('yes','no','','') NOT NULL,
  `status_npwp_pembeli` enum('yes','no','','') NOT NULL,
  `status_sertifikat` enum('yes','no','','') NOT NULL,
  `status_kuitansi` enum('yes','no','','') NOT NULL,
  `no_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`no_verifikasi`, `status_ktp_penjual`, `status_ktp_pembeli`, `status_npwp_penjual`, `status_npwp_pembeli`, `status_sertifikat`, `status_kuitansi`, `no_jadwal`) VALUES
(1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1),
(2, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 2),
(3, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 3),
(4, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 4),
(6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 5),
(7, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 6),
(8, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 9),
(9, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10),
(10, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 11),
(11, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`no_berita`),
  ADD KEY `fkjad` (`no_jadwal`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no_jadwal`),
  ADD KEY `fkp` (`no_pengajuan`,`id_petugas`) USING BTREE,
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`id_pajak`),
  ADD KEY `fkp` (`no_pengajuan`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pengajuan`),
  ADD KEY `fkpj` (`nik_penjual`,`nik_pembeli`,`no_sertifikat`,`id_akun`),
  ADD KEY `nik_pembeli` (`nik_pembeli`),
  ADD KEY `no_sertifikat` (`no_sertifikat`),
  ADD KEY `pendaftaran_ibfk_4` (`id_akun`);

--
-- Indexes for table `pengambil`
--
ALTER TABLE `pengambil`
  ADD PRIMARY KEY (`id_pengambil`),
  ADD KEY `fkambil` (`no_pengambilan`);

--
-- Indexes for table `pengambilan`
--
ALTER TABLE `pengambilan`
  ADD PRIMARY KEY (`no_pengambilan`),
  ADD KEY `fkp` (`no_pengajuan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`no_verifikasi`),
  ADD KEY `fkj` (`no_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `no_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `no_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengambil`
--
ALTER TABLE `pengambil`
  MODIFY `id_pengambil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengambilan`
--
ALTER TABLE `pengambilan`
  MODIFY `no_pengambilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `no_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD CONSTRAINT `berita_acara_ibfk_1` FOREIGN KEY (`no_jadwal`) REFERENCES `jadwal` (`no_jadwal`) ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `pendaftaran` (`no_pengajuan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON UPDATE CASCADE;

--
-- Constraints for table `pajak`
--
ALTER TABLE `pajak`
  ADD CONSTRAINT `pajak_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `pendaftaran` (`no_pengajuan`) ON UPDATE CASCADE;

--
-- Constraints for table `pengambil`
--
ALTER TABLE `pengambil`
  ADD CONSTRAINT `pengambil_ibfk_1` FOREIGN KEY (`no_pengambilan`) REFERENCES `pengambilan` (`no_pengambilan`) ON UPDATE CASCADE;

--
-- Constraints for table `pengambilan`
--
ALTER TABLE `pengambilan`
  ADD CONSTRAINT `pengambilan_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `pendaftaran` (`no_pengajuan`) ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `verifikasi_ibfk_1` FOREIGN KEY (`no_jadwal`) REFERENCES `jadwal` (`no_jadwal`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
