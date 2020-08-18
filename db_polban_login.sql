-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 03:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_polban_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kode_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kode_admin`, `nama_admin`, `email`, `username`, `password`) VALUES
('ADM0000001', 'Adriansyah Ravindra', 'adrimedia.indonesia@gmail.com', 'adriansyah.media', '$2y$10$4O0LAINl.LvbCtyXHORIW.R3KhiOLKx8dOmnC5LpWEBBCRLt3nI1G'),
('ADM0000002', 'soekarno', 'soekarno@gmail.com', 'soekarno', '$2y$10$CgS2kGkqkgW0WqItZaTJhOYoqd3kTKN34Dwgoo8YAiFNGOpidc72m'),
('ADM0000003', 'Jamal', 'jamal1710@gmail.com', 'jamal1710', '$2y$10$YM/MzXE.1PuiFbHZ71fo8eXzGETzJy9o7P6ED2l8fG9MBwRzP3gdi'),
('ADM0000004', 'Rhapsody', 'shaneaberdee@gmail.com', 'rhapsdy1710', '$2y$10$FvJquOlzIts0lmZVt8ODN.JlAvx8AMiNqP1JoFdeSkcDXvG5m9OzG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `kode_dosen` varchar(11) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`kode_dosen`, `nama_dosen`) VALUES
('AA332P', 'Arwan Gunawan'),
('AB202P', 'Jaka Satrawan'),
('AB222K', 'Pitria Sopianingsih'),
('AK031N', 'Endang Hatma Juniwati	'),
('AK063K', 'Dimas Sumitra D	'),
('AN002N', 'Deddy Saefulloh	'),
('AN007N', 'Eddy Syah Yahya	'),
('AN008N', 'Nurlaila Fadjarwati	'),
('AN010N', 'Dwi Suhartanto	'),
('AN016N', 'L. Kusdibyo	'),
('AN017N', 'Tjetjep Djatnika	'),
('AN018N', 'Nono Wibisono	'),
('AN019N', 'Moh. Farid Najib	'),
('AN024N', 'Iwan Mulyawan	'),
('AN026N', 'Koernia Purwihartuti	'),
('AN027N', 'Marwansyah	'),
('AN030N', 'Agustinus C. Februadi	'),
('AN038N', 'Adila Sosianika	'),
('AN060N', 'Gundur Leo	'),
('AN075N', 'Ivon Sandya Sari	'),
('AN077K', 'Rima Midiyanti	'),
('AN079N', 'Lina Setiawati	'),
('AN080N', 'Putri Dewi	'),
('AN085N', 'Arie Indra G	'),
('AN089N', 'Fatya Alty Amalia	'),
('AN093N', 'Nugroho Hardiyanto'),
('AN095N', 'Rafiati Kania	'),
('AN099N', 'Wahyu Rafdinal	'),
('AN100N', 'Widi Senalasari	'),
('AP111P', 'Lusianus Kusdibyo'),
('AP222P', 'Tiafahmi Angestiwi'),
('AP299P', 'Ira Siti Sarah'),
('AP300N', 'Maya Setiawardani'),
('AP303N', 'Mohammad Febrianto'),
('AP552N', 'Abdul Malik'),
('AY992N', 'Alex ferguson'),
('BN771J', 'Gilang Ramadhan'),
('DU009N', 'Carolina Magdalena	'),
('DU017N', 'Euis Sartika	'),
('DU066N', 'Wastu Kurning	'),
('DU079N', 'Ita Susanti	'),
('DU082P', 'Hana Wijaya	'),
('DU125P', 'Dwi Retno	'),
('IG003N', 'Bahtera Sembiring	'),
('IG018N', 'Siti Yuliah	'),
('IG028N', 'Zewitra	'),
('JA162N', 'Rafiati'),
('PP227N', 'li Halilah'),
('PP335N', 'Tangguh'),
('RP331L', 'Deden Syarif'),
('WY091N', 'Adriansyah ravindra');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban_esai`
--

CREATE TABLE `tb_jawaban_esai` (
  `kode_dosen` varchar(11) NOT NULL,
  `kode_matkul` varchar(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `dipertahankan` text NOT NULL,
  `ditingkatkan` text NOT NULL,
  `sesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jawaban_esai`
--

INSERT INTO `tb_jawaban_esai` (`kode_dosen`, `kode_matkul`, `nim`, `dipertahankan`, `ditingkatkan`, `sesi`) VALUES
('AP552N', '16ABS5033', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 11),
('AN010N', '16MPI5083', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 12),
('AP299P', '16KI35072', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 13),
('AN079N', '16JAN7023', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 14),
('AP111P', '16MPI5023', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 15),
('AP300N', '16ABS5033', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 16),
('AP303N', '16JBI5032', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 17),
('AN018N', '16JAN7023', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 18),
('AN093N', '16MPI5083', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 19),
('AP222P', '16KU7032', 1811911027, 'Kepercayaan diri', 'Kelancaran bicara', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban_skala`
--

CREATE TABLE `tb_jawaban_skala` (
  `sesi` varchar(11) NOT NULL,
  `kode_matkul` varchar(11) NOT NULL,
  `kode_dosen` varchar(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `kode_pertanyaan` varchar(10) NOT NULL,
  `nilai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jawaban_skala`
--

INSERT INTO `tb_jawaban_skala` (`sesi`, `kode_matkul`, `kode_dosen`, `nim`, `kode_pertanyaan`, `nilai`) VALUES
('SESI0000001', '16ABS5033', 'AP552N', 1811911027, '01', '1'),
('SESI0000002', '16MPI5083', 'AN010N', 1811911027, '01', '4'),
('SESI0000003', '16KI35072', 'AP299P', 1811911027, '01', '4'),
('SESI0000004', '16JAN7023', 'AN079N', 1811911027, '01', '1'),
('SESI0000005', '16MPI5023', 'AP111P', 1811911027, '01', '3'),
('SESI0000006', '16ABS5033', 'AP300N', 1811911027, '01', '4'),
('SESI0000007', '16JBI5032', 'AP303N', 1811911027, '01', '3'),
('SESI0000008', '16JAN7023', 'AN018N', 1811911027, '01', '2'),
('SESI0000009', '16MPI5083', 'AN093N', 1811911027, '01', '1'),
('SESI0000010', '16KU7032', 'AP222P', 1811911027, '01', '3'),
('SESI0000011', '16ABS5033', 'AP552N', 1811911027, '02', '3'),
('SESI0000012', '16MPI5083', 'AN010N', 1811911027, '02', '2'),
('SESI0000013', '16KI35072', 'AP299P', 1811911027, '02', '2'),
('SESI0000014', '16JAN7023', 'AN079N', 1811911027, '02', '4'),
('SESI0000015', '16MPI5023', 'AP111P', 1811911027, '02', '2'),
('SESI0000016', '16ABS5033', 'AP300N', 1811911027, '02', '1'),
('SESI0000017', '16JBI5032', 'AP303N', 1811911027, '02', '3'),
('SESI0000018', '16JAN7023', 'AN018N', 1811911027, '02', '3'),
('SESI0000019', '16MPI5083', 'AN093N', 1811911027, '02', '3'),
('SESI0000020', '16KU7032', 'AP222P', 1811911027, '02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `kode_matkul` varchar(11) NOT NULL,
  `matkul_pendek` varchar(20) NOT NULL,
  `matkul_panjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `matkul_pendek`, `matkul_panjang`) VALUES
('16ABS5033', 'Adm perkantoran', 'Administrasi perkantoran'),
('16JAK1032', 'P.ilmu ekonomi', 'Pengantar ilmu ekonomi'),
('16JAK1072', 'P.akuntansi', 'Prinsip Prinsip Akuntansi'),
('16JAN1013', 'P.pemasaran', 'Prinsip-prinsip Pemasaran'),
('16JAN1022', 'P.bisnis', 'Pengantar Bisnis'),
('16JAN1063', 'Keyboarding', 'Keterampilan Mengetik'),
('16JAN1082', 'PITIK', 'Pengantar Ilmu Teknologi dan Komunikasi'),
('16JAN3042', 'Kom.bisnis', 'Komunikasi Bisnis'),
('16JAN7023', 'P.relations', 'Public Relations'),
('16JAN7063', 'S.tugas akhir', 'Seminar Tugas Akhir'),
('16JBI3082', 'B.inggris 3', 'Bahasa Inggris 3'),
('16JBI5032', 'B.inggris', 'Bahasa Inggris 5'),
('16KI11062', 'B.inggris 1', 'Bahasa Inggris 1'),
('16KI35072', 'Kewirausahaan', 'Kewirausahaan'),
('16KU11012', 'P.agama', 'Pendidikan Agama'),
('16KU11083', 'M.bisnis', 'Matematika Bisnis'),
('16KU11092', 'P.pancasila', 'Pendidikan Pancasila'),
('16KU41042', 'B.indo', 'Bahasa Indonesia'),
('16KU7012', 'B.Mandarin 2', 'Bahasa Mandarin 2'),
('16KU7032', 'K.keselamatan kerja', 'Kesehatan dan Keselamatan Kerja'),
('16KU7072', 'H.bisnis', 'Hukum Bisnis'),
('16KU7082', 'PKN', 'Pendidikan Kewarganegaraan'),
('16MPE3023', 'Branding', 'Branding'),
('16MPI1052', 'P.lokasi bisnis', 'Proyek Lokasi Bisnis'),
('16MPI3013', 'P.konsumen', 'Perilaku Konsumen'),
('16MPI3022', 'P.prima', 'Pelayanan Prima'),
('16MPI3032', 'D.manajemen keuangan', 'Dasar dasar Manajemen Keuangan'),
('16MPI3053', 'P.b2b', 'Pemasaran B2B'),
('16MPI3063', 'E-marketing 1', 'Elektronik Marketing 1'),
('16MPI3072', 'P.penjualan b2b', 'Proyek Penjualan B2B'),
('16MPI5013', 'M.merek', 'Manajemen Merek'),
('16MPI5023', 'P.jasa', 'Pemasaran Jasa'),
('16MPI5042', 'P.recana pemasaran', 'Proyek Rencana Pemasaran'),
('16MPI5053', 'CRM', 'Customer Relationship Management'),
('16MPI5063', 'P.ekspor import', 'Pengantar Ekspor Import'),
('16MPI5083', 'R.pemasaran kualitat', 'Riset Pemasaran Kualitatif'),
('16MPI7043', 'M.lintas budaya', 'Manajemen Lintas Budaya'),
('16MPI7053', 'P.produk', 'Pengembangan Produk'),
('19JKN9023', 'B.korea', 'Bahasa korea');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `nim` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal_pembuatan` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `aktifasi` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`nim`, `nama`, `kelas`, `tanggal_pembuatan`, `email`, `aktifasi`, `username`, `password`) VALUES
(1811911027, 'Adriansyah ravindra', '3mpe', 'Saturday,11-04-2020', 'farcryprimal.indonesia@gmail.com', 1, 'adriansyahmedia', '$2y$10$tK/ib/fdw6/O9Kc5NcZ6tu99wJ7ZAPK73Cj.oO5O2N2I0MTfAgrBe');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajaran`
--

CREATE TABLE `tb_pengajaran` (
  `kode_pengajaran` varchar(11) NOT NULL,
  `kode_dosen` varchar(11) NOT NULL,
  `kode_matkul` varchar(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajaran`
--

INSERT INTO `tb_pengajaran` (`kode_pengajaran`, `kode_dosen`, `kode_matkul`, `kelas`) VALUES
('PENG00001', 'AK031N', '16JAK1032', '1mpia'),
('PENG00002', 'AN007N', '16JAN1013', '1mpia'),
('PENG00003', 'AN100N', '16JAN1013', '1mpia'),
('PENG00004', 'AN026N', '16JAN1022', '1mpia'),
('PENG00005', 'AN060N', '16JAN1082', '1mpia'),
('PENG00006', 'IG018N', '16KI11062', '1mpia'),
('PENG00007', 'DU017N', '16KU11083', '1mpia'),
('PENG00008', 'DU009N', '16KU11092', '1mpia'),
('PENG00009', 'DU066N', '16KU41042', '1mpia'),
('PENG00010', 'AN007N', '16MPI1052', '1mpia'),
('PENG00011', 'AN038N', '16MPI1052', '1mpia'),
('PENG00012', 'AK031N', '16JAK1032', '1mpib'),
('PENG00013', 'AN038N', '16JAN1013', '1mpib'),
('PENG00014', 'AN100N', '16JAN1013', '1mpib'),
('PENG00015', 'AN026N', '16JAN1022', '1mpib'),
('PENG00016', 'AN060N', '16JAN1082', '1mpib'),
('PENG00017', 'IG018N', '16KI11062', '1mpib'),
('PENG00018', 'IG018N', '16KI11062', '1mpib'),
('PENG00019', 'DU017N', '16KU11083', '1mpib'),
('PENG00020', 'DU009N', '16KU11092', '1mpib'),
('PENG00021', 'DU066N', '16KU41042', '1mpib'),
('PENG00022', 'AN007N', '16MPI1052', '1mpib'),
('PENG00023', 'AN060N', '16MPI1052', '1mpib'),
('PENG00024', 'AN026N', '16JAN1022', '2mpia'),
('PENG00025', 'IG028N', '16JBI3082', '2mpia'),
('PENG00026', 'AN038N', '16MPI3013', '2mpia'),
('PENG00027', 'AN002N', '16MPI3022', '2mpia'),
('PENG00028', 'AN099N', '16MPI3022', '2mpia'),
('PENG00029', 'AK063K', '16MPI3032', '2mpia'),
('PENG00030', 'AN024N', '16MPI3053', '2mpia'),
('PENG00031', 'AN099N', '16MPI3053', '2mpia'),
('PENG00032', 'AN079N', '16MPI3063', '2mpia'),
('PENG00033', 'AN019N', '16MPI3072', '2mpia'),
('PENG00034', 'AN077K', '16JAN3042', '2mpib'),
('PENG00035', 'AN080N', '16JAN3042', '2mpib'),
('PENG00036', 'IG028N', '16JBI3082', '2mpib'),
('PENG00037', 'AN038N', '16MPI3013', '2mpib'),
('PENG00038', 'AN002N', '16MPI3022', '2mpib'),
('PENG00039', 'AK063K', '16MPI3032', '2mpib'),
('PENG00040', 'AN024N', '16MPI3053', '2mpib'),
('PENG00041', 'AN099N', '16MPI3053', '2mpib'),
('PENG00042', 'AN060N', '16MPI3063', '2mpib'),
('PENG00043', 'AN100N', '16MPI3063', '2mpib'),
('PENG00044', 'AN060N', '16MPI3072', '2mpib'),
('PENG00045', 'AN019N', '16MPI3072', '2mpib'),
('PENG00046', 'IG003N', '16JBI5032', '3mpia'),
('PENG00047', 'AN002N', '16KI35072', '3mpia'),
('PENG00048', 'AN095N', '16KI35072', '3mpia'),
('PENG00049', 'AN018N', '16MPI5013', '3mpia'),
('PENG00050', 'AN030N', '16MPI5013', '3mpia'),
('PENG00051', 'AN016N', '16MPI5023', '3mpia'),
('PENG00052', 'AN002N', '16MPI5042', '3mpia'),
('PENG00053', 'AN095N', '16MPI5042', '3mpia'),
('PENG00054', 'AN019N', '16MPI5042', '3mpia'),
('PENG00055', 'AN089N', '16MPI5042', '3mpia'),
('PENG00056', 'AN017N', '16MPI5053', '3mpia'),
('PENG00057', 'AN085N', '16MPI5053', '3mpia'),
('PENG00058', 'AN019N', '16MPI5063', '3mpia'),
('PENG00059', 'AN030N', '16MPI5013', '3mpia'),
('PENG00060', 'AN089N', '16MPI5083', '3mpia'),
('PENG00061', 'IG003N', '16JBI5032', '3mpib'),
('PENG00062', 'AN075N', '16KI35072', '3mpib'),
('PENG00063', 'AN018N', '16MPI5013', '3mpib'),
('PENG00064', 'AN030N', '16MPI5013', '3mpib'),
('PENG00065', 'AN016N', '16MPI5042', '3mpib'),
('PENG00066', 'AN100N', '16MPI5042', '3mpib'),
('PENG00067', 'AN030N', '16MPI5042', '3mpib'),
('PENG00068', 'AN085N', '16MPI5042', '3mpib'),
('PENG00069', 'AN017N', '16MPI5053', '3mpib'),
('PENG00070', 'AN085N', '16MPI5053', '3mpib'),
('PENG00071', 'AN019N', '16MPI5063', '3mpib'),
('PENG00072', 'AN030N', '16MPI5083', '3mpib'),
('PENG00073', 'AN089N', '16MPI5083', '3mpib'),
('PENG00074', 'AN018N', '16MPI5013', '4mpia'),
('PENG00075', 'AN079N', '16JAN7023', '4mpia'),
('PENG00076', 'AN010N', '16JAN7063', '4mpia'),
('PENG00077', 'AN093N', '16JAN7063', '4mpia'),
('PENG00078', 'DU082P', '16KU7012', '4mpia'),
('PENG00079', 'AN008N', '16KU7032', '4mpia'),
('PENG00080', 'DU079N', '16KU7072', '4mpia'),
('PENG00081', 'DU125P', '16KU7082', '4mpia'),
('PENG00082', 'AN027N', '16MPI7043', '4mpia'),
('PENG00083', 'AN077K', '16MPI7043', '4mpia'),
('PENG00084', 'AN002N', '16MPI7053', '4mpia'),
('PENG00085', 'AN018N', '16MPI5013', '4mpib'),
('PENG00086', 'AN079N', '16MPI3063', '4mpib'),
('PENG00087', 'AN010N', '16JAN7063', '4mpib'),
('PENG00088', 'AN093N', '16JAN7063', '4mpib'),
('PENG00089', 'DU082P', '16KU7012', '4mpib'),
('PENG00090', 'AN008N', '16KU7032', '4mpib'),
('PENG00091', 'DU079N', '16KU7072', '4mpib'),
('PENG00092', 'DU125P', '16KU7082', '4mpib'),
('PENG00093', 'AN027N', '16MPI7043', '4mpib'),
('PENG00094', 'AN077K', '16MPI7043', '4mpib'),
('PENG00095', 'AN002N', '16MPI7053', '4mpib'),
('PENG00096', 'AN002N', '16MPI7053', '4mpib'),
('PENG00098', 'BN771J', '16JAN1022', '1mpe'),
('PENG00099', 'RP331L', '16KU11012', '1mpe'),
('PENG00100', 'IG018N', '16KI11062', '1mpe'),
('PENG00101', 'DU017N', '16MPI1052', '1mpe'),
('PENG00102', 'PP335N', '16JAN1063', '1mpe'),
('PENG00103', 'PP227N', '16JAN1063', '1mpe'),
('PENG00104', 'AA332P', '16JAK1072', '1mpe'),
('PENG00105', 'AN079N', '16JAN1082', '1mpe'),
('PENG00106', 'AN085N', '16MPI3072', '2mpe'),
('PENG00107', 'AN017N', '16MPI3072', '2mpe'),
('PENG00108', 'AN089N', '16MPE3023', '2mpe'),
('PENG00109', 'AN030N', '16MPE3023', '2mpe'),
('PENG00110', 'AB202P', '16JAN3042', '2mpe'),
('PENG00111', 'AP303N', '16JBI3082', '2mpe'),
('PENG00112', 'AB222K', '16KU11092', '2mpe'),
('PENG00113', 'DU017N', '16MPI3072', '2mpe'),
('PENG00114', 'AK031N', '16JAK1032', '2mpe'),
('PENG00115', 'AP303N', '16JBI5032', '3mpe'),
('PENG00116', 'AP299P', '16KI35072', '3mpe'),
('PENG00117', 'AP300N', '16ABS5033', '3mpe'),
('PENG00118', 'AP552N', '16ABS5033', '3mpe'),
('PENG00119', 'AP111P', '16MPI5023', '3mpe'),
('PENG00120', 'AP222P', '16KU7032', '3mpe'),
('PENG00121', 'AN093N', '16MPI5083', '3mpe'),
('PENG00122', 'AN010N', '16MPI5083', '3mpe'),
('PENG00123', 'AN079N', '16JAN7023', '3mpe'),
('PENG00124', 'AN018N', '16JAN7023', '3mpe'),
('PENG00125', 'PP335N', '16ABS5033', '3mpia'),
('PENG00126', 'WY091N', '19JKN9023', '1mpe'),
('PENG00127', 'AP552N', '16ABS5033', '1mpe');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`kode_pertanyaan`, `pertanyaan`) VALUES
('01', 'Dosen yang bersangkutan sangat berpengetahuan/knowladgable tentang mata kuliah yang diajarkan'),
('02', 'Dosen yang bersangkutan mempersiapkan kuliah dengan baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `token` varchar(255) NOT NULL,
  `tanggal_pembuatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_token`
--

INSERT INTO `tb_token` (`id`, `email`, `token`, `tanggal_pembuatan`) VALUES
(13, 'farcryprimal.indonesia@gmail.com', 'kx5GMeaueFzjd7Nn0Qz38bzGL5DhnSXLLpoc/0/Wj9sjwlMEZKgrR5V+dhen', 1584433044),
(14, 'farcryprimal.indonesia@gmail.com', 'LMCe1++aKvXiornzlJpCvIO0WihBgG0oLHDMTapn3wmUyxwoaEun44RsP53k', 1584433110),
(15, 'farcryprimal.indonesia@gmail.com', 'ceTzYSwMzPD8Wyx+N9fw/HyGZJalo0hSxlorjdKKh/a9qIXReIJosD8zU6Tv', 1584978103),
(16, 'farcryprimal.indonesia@gmail.com', 'S/biKlPho/ue+NIcPvq1oqAvFmUBGaSGZuC7j6MqKN3ypSz0apyZCLTdNxKd', 1584978361),
(17, 'farcryprimal.indonesia@gmail.com', 'IXnyv8GzqvoydRd+K74YqOgr+RZCGYmZlJfjb4L5AlVfA6k3UDUDOkTgoB3X', 1585041164),
(18, 'farcryprimal.indonesia@gmail.com', 'VuPHXFOjdvcTL4F6+ILAigm7mRssAgQCiBvkgkoD8xxalDo58bktX9vbJqBh', 1585041356),
(19, 'farcryprimal.indonesia@gmail.com', 'RhGr103hRctcfF4/KWrjsGPhU3973/6shH0z7/Qg/85akz3sXfOrjVVM7ZXJ', 1586610321),
(20, 'farcryprimal.indonesia@gmail.com', 'BbSmVPimtYJOe0nel6bji/1T4XhsFm0um4oUk+9bAC7kGLmbhe8ALPoCUwEx', 1587166012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kode_admin`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`kode_dosen`);

--
-- Indexes for table `tb_jawaban_esai`
--
ALTER TABLE `tb_jawaban_esai`
  ADD PRIMARY KEY (`sesi`),
  ADD KEY `kode_dosen` (`kode_dosen`,`kode_matkul`,`nim`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `tb_jawaban_skala`
--
ALTER TABLE `tb_jawaban_skala`
  ADD PRIMARY KEY (`sesi`),
  ADD KEY `kode_matkul` (`kode_matkul`,`kode_dosen`,`nim`,`kode_pertanyaan`),
  ADD KEY `kode_pertanyaan` (`kode_pertanyaan`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_dosen` (`kode_dosen`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_pengajaran`
--
ALTER TABLE `tb_pengajaran`
  ADD PRIMARY KEY (`kode_pengajaran`),
  ADD KEY `kode_dosen` (`kode_dosen`,`kode_matkul`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`kode_pertanyaan`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jawaban_esai`
--
ALTER TABLE `tb_jawaban_esai`
  MODIFY `sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jawaban_esai`
--
ALTER TABLE `tb_jawaban_esai`
  ADD CONSTRAINT `tb_jawaban_esai_ibfk_2` FOREIGN KEY (`kode_matkul`) REFERENCES `tb_matkul` (`kode_matkul`),
  ADD CONSTRAINT `tb_jawaban_esai_ibfk_3` FOREIGN KEY (`kode_dosen`) REFERENCES `tb_dosen` (`kode_dosen`),
  ADD CONSTRAINT `tb_jawaban_esai_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `tb_mhs` (`nim`);

--
-- Constraints for table `tb_jawaban_skala`
--
ALTER TABLE `tb_jawaban_skala`
  ADD CONSTRAINT `tb_jawaban_skala_ibfk_2` FOREIGN KEY (`kode_pertanyaan`) REFERENCES `tb_pertanyaan` (`kode_pertanyaan`),
  ADD CONSTRAINT `tb_jawaban_skala_ibfk_4` FOREIGN KEY (`kode_dosen`) REFERENCES `tb_dosen` (`kode_dosen`),
  ADD CONSTRAINT `tb_jawaban_skala_ibfk_5` FOREIGN KEY (`kode_matkul`) REFERENCES `tb_matkul` (`kode_matkul`),
  ADD CONSTRAINT `tb_jawaban_skala_ibfk_6` FOREIGN KEY (`nim`) REFERENCES `tb_mhs` (`nim`);

--
-- Constraints for table `tb_pengajaran`
--
ALTER TABLE `tb_pengajaran`
  ADD CONSTRAINT `tb_pengajaran_ibfk_1` FOREIGN KEY (`kode_matkul`) REFERENCES `tb_matkul` (`kode_matkul`),
  ADD CONSTRAINT `tb_pengajaran_ibfk_2` FOREIGN KEY (`kode_dosen`) REFERENCES `tb_dosen` (`kode_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
