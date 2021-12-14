-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 02:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kehadiran`
--

CREATE TABLE `tb_kehadiran` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kehadiran`
--

INSERT INTO `tb_kehadiran` (`id`, `nip`, `jam`, `status`, `keterangan`, `tanggal`) VALUES
(13, '196312312006041006', '14:07', 'hadir', '', '12-03-2021'),
(14, '196412312007011188', '16:36', 'hadir', '', '12-03-2021'),
(15, '198306172015022002', '11:41', 'hadir', '', '17-03-2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pgw` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'anonim.jpg',
  `role_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pgw`, `nip`, `nama`, `bidang`, `jabatan`, `umur`, `foto`, `role_id`) VALUES
(1, '196312312006041006', 'Jamaluddin  ', 'Sekretariat', 'Staf Bappeda', 57, 'anonim.jpg', '2'),
(2, '196402061994031008', 'Ir. L.M. Rachmadi Rere, M.Si.                                                ', 'Ekonomi & Sumber Daya Alam', 'Kabid. Infrastrukur & Pengembangan Wilayah', 57, 'anonim.jpg', '2'),
(3, '196403212007011010', 'Arjono, S.E., M.Si. ', 'Ekonomi & Sumber Daya Alam', 'Staf Bappeda', 56, 'anonim.jpg', '2'),
(4, '196411041990062001', 'Ir. Hj. Sri Rahayu, M.Si.                                                 ', 'Perencanaan Makro', 'Kepala Bappeda Prov. Sultra', 56, 'anonim.jpg', '2'),
(5, '196412312007011188', 'La Ode Ndiwasa   ', 'Sekretariat', 'Staf Bappeda\r\n', 56, 'anonim.jpg', '2'),
(6, '196512311990091004', 'L.M. Darmin, S.E., M.Si.    ', 'Ekonomi & Sumberdaya Alam', 'Kasubid. Dunia Usaha & Keuangan Daerah\r\n', 55, 'anonim.jpg', '2'),
(7, '196512312006041114', 'Amrin,SE.', 'Sekretariat', 'Kasubbag. Keuangan', 55, 'anonim.jpg', '2'),
(8, '196605271990021002', 'Amiruddin   ', 'Sekretariat', 'Staf Bappeda\r\n', 54, 'anonim.jpg', '2'),
(9, '196701071998031006', 'Ir. J. Robert, MTP. ', 'Sekretariat', 'Kepala Bappeda Prov. Sultra', 54, 'anonim.jpg', '2'),
(10, '196703011997032001', 'Cakrawati, S.E.', 'Ekonomi & Sumber Daya Alam', 'Staf Bappeda', 54, 'anonim.jpg', '2'),
(11, '196703301991122001', 'Hanipa Pundi   ', 'Sekretariat', 'Staf Bappeda\r\n', 53, 'anonim.jpg', '2'),
(12, '196706171994031010', 'Hasanuddin, S.P., M. AP                              \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 53, 'anonim.jpg', '2'),
(13, '196706172007011025', 'Semuryono', 'Sekretariat', 'Staf Bappeda\r\n', 53, 'anonim.jpg', '2'),
(14, '196801182007012024', 'Hj. Muliyani Mustafa B, S.Sos.  ', 'Sekretariat', 'Staf Bappeda\r\n', 53, 'anonim.jpg', '2'),
(15, '196802012007011040', 'Jibto ', 'Sekretariat', 'Staf Bappeda\r\n', 53, 'anonim.jpg', '2'),
(16, '196805062003121005', 'Ir. La Ode Muh. Alwi, M.Si.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Kabid. Pembangunan Manusia & Masyarakat\r\n', 52, 'anonim.jpg', '2'),
(17, '196807152007012043', 'Marlina ', 'Sekretariat', 'Staf Bappeda\r\n', 52, 'anonim.jpg', '2'),
(18, '196904032003122008', 'Wa Ode Muslihatun, S.E., M.A.', 'Sekretariat', 'Sekretaris Bappeda Prov. Sultra', 51, 'anonim.jpg', '2'),
(19, '196912122007011044', 'Kasdang', 'Sekretariat', 'Staf Bappeda\r\n', 51, 'anonim.jpg', '2'),
(20, '196912262003121003', 'La Ode Muh.Umul Zaman S, S.T., M.Si.                                               \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Kasubid. Tata Ruang Perumahaan & Permukiman\r\n', 51, 'anonim.jpg', '2'),
(21, '196912312007011162', 'La Sanea, S.E.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 51, 'anonim.jpg', '2'),
(22, '197005311993031009', 'Rachmansyah Oscar, S.H.', 'Sekretariat', 'Staf Bappeda\r\n', 50, 'anonim.jpg', '2'),
(23, '197007121991032011', 'Hj. Hasnawati, SE.,MM                                                 \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Kasubid. Perhubungan\r\n', 59, 'anonim.jpg', '2'),
(24, '197008121995121001', 'Dr. H. Eka Paksi, M.Si. ', 'Ekonomi & Sumberdaya Alam', 'Kabid. Ekonomi & Sumberdaya Alam\r\n', 50, 'anonim.jpg', '2'),
(25, '197009221998031005', 'Zainal Arifin HZ, S.E., M.Si.                                                                 \r\n', 'Perencanaan Makro', 'Subidang Perenc.Pembangunan Daerah\r\n', 50, 'anonim.jpg', '2'),
(26, '197012192006042008', 'Esriani, S.E., M.Si.     ', 'Sekretariat', 'Staf Bappeda\r\n', 50, 'anonim.jpg', '2'),
(27, '197101302005021003', 'Alamsyah Azis, S.H.', 'Sekretariat', 'Kasubbag. Penyusunan Program', 50, 'anonim.jpg', '2'),
(28, '197112312007011072', 'La Ode Zainuddin, S.E.        ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 49, 'anonim.jpg', '2'),
(29, '197112312007011074', 'La Ode Kode, S, Sos.                                                                                 \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 49, 'anonim.jpg', '2'),
(30, '197201271998032011', 'Hj. St. Hajrah, S.Pi, MTP.   ', 'Ekonomi & Sumberdaya Alam', 'Kasubid. Pertanian & Kelautan\r\n', 49, 'anonim.jpg', '2'),
(31, '197203311998031002', 'Muhammad Alfian, S.Pi., M.Si                                              \r\n', 'Perencanaan Makro', 'Fungsional Perenc.\r\n', 48, 'anonim.jpg', '2'),
(32, '197210212000032006', 'Wa Ode St. Hermina, S.P., M.M ', 'Sekretariat', 'Staf Bappeda\r\n', 48, 'anonim.jpg', '2'),
(33, '197211032009011001', 'Muhammad    ', 'Sekretariat', 'Staf Bappeda\r\n', 48, 'anonim.jpg', '2'),
(34, '197212312007011080', 'La Ode Hadise, S.E.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 48, 'anonim.jpg', '2'),
(35, '197303122007011040', 'Parman       ', 'Sekretariat', 'Staf Bappeda\r\n', 48, 'anonim.jpg', '2'),
(36, '197306102007011028', 'Muslimin, S.E.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 47, 'anonim.jpg', '2'),
(37, '197406102002121005', 'Dr. L.M. Ali Said, M.Si.   ', 'Ekonomi & Sumberdaya Alam', 'Kasubid. Sumberdaya Alam\r\n', 46, 'anonim.jpg', '2'),
(38, '197407212007012011', 'Risna, S.E.    ', 'Sekretariat', 'Staf Bappeda\r\n', 46, 'anonim.jpg', '2'),
(39, '197409092007011024', 'Husaiman', 'Sekretariat', 'Staf Bappeda\r\n', 46, 'anonim.jpg', '2'),
(40, '197506292003122006', 'Alfrida Mini Randan, S.Hut.  ', 'Sekretariat', 'Staf Bappeda\r\n', 45, 'anonim.jpg', '2'),
(41, '197507162006041009', 'Ansar, S.T., M.A.P.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 45, 'anonim.jpg', '2'),
(42, '197508072007012021', 'Marwiah A, S.Si.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 45, 'anonim.jpg', '2'),
(43, '197508172007012035', 'Juharia Jahilu, S.E.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 45, 'anonim.jpg', '2'),
(44, '197510242003121006', 'Muh. Subhan AK., ST, MT                                     \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Kasubid. Pekerjaan Umum\r\n', 45, 'anonim.jpg', '2'),
(45, '197605212007011016', 'A. Mading', 'Sekretariat', 'Kepala Bappeda Prov. Sultra', 44, 'anonim.jpg', '2'),
(46, '197606052007011020', 'Hamsidin, S.Kom.    ', 'Sekretariat', 'Staf Bappeda\r\n', 44, 'anonim.jpg', '2'),
(47, '197607221997032004', 'Usny Hidayat, S.Sos., M.Si.        ', 'Sekretariat', 'Staf Bappeda\r\n', 44, 'anonim.jpg', '2'),
(48, '197608142011011004', 'Masruddin, SE   ', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 44, 'anonim.jpg', '2'),
(49, '197609212005022003', 'Susilawaty, S.T., M.S.A.                         \r\n', 'Pembangunan Manusia dan Masyarakat', 'Kasubid. Kependudukan & Pemberdayaan Masyarakat\r\n', 44, 'anonim.jpg', '2'),
(50, '197610312011012005', 'Ita Paramitha, S.E.          ', 'Sekretariat', 'Kasubbag. Umum dan Kepegawaian \r\n', 44, 'anonim.jpg', '2'),
(51, '197705182010011002', 'Hasrun', 'Sekretariat', 'Staf Bappeda\r\n', 43, 'anonim.jpg', '2'),
(52, '197706161995111001', 'Hasrullah, S.STP., M.Si.                                                \r\n', 'Perencanaan Makro', 'Kabid. Perencanaan Makro\r\n', 43, 'anonim.jpg', '2'),
(53, '197801122001122003', 'Ir. Tuty Karmyati, M.P.                                         \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 43, 'anonim.jpg', '2'),
(54, '197805172009032003', 'Sri Muliati, S.E., M.A.P.   ', 'Sekretariat', 'Staf Bappeda\r\n', 42, 'anonim.jpg', '2'),
(55, '197805252006042012', 'Fita Biohanis, S.E., M.Si.                                                               \r\n', 'Pembangunan Manusia dan Masyarakat', 'Kasubid. Pemerintahan\r\n', 42, 'anonim.jpg', '2'),
(56, '197808082009011009', 'Mun Baharuddin ', 'Sekretariat', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(57, '197808122007011001', 'Baso Agus Rahman, S.E. ', 'Sekretariat', 'Staf Bappeda\r\n', 42, 'anonim.jpg', '2'),
(58, '197809072009012005', 'Hastin, S.Kom                                                                  \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 42, 'anonim.jpg', '2'),
(59, '197901282006042007', 'Ridha Arifin, ST,       ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 42, 'anonim.jpg', '2'),
(60, '197902012008011013', 'Yustina, S.Sos.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 42, 'anonim.jpg', '2'),
(61, '197904282005022005', 'Nina Angriani A, S.T., M.Si.', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 41, 'anonim.jpg', '2'),
(62, '197906142009022002', 'Sri Rahmayanti, S.E., M.Si.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Kasubid.Kesejahteraan Masyarakat\r\n', 41, 'anonim.jpg', '2'),
(63, '197907222011011001', 'Muh Iskandar Syam, S.E.', 'Sekretariat', 'Staf Bappeda\r\n', 41, 'anonim.jpg', '2'),
(64, '197908202009012001', 'Wa Ode Fatmawati, S.T., M.Si.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf  Bappeda\r\n', 41, 'anonim.jpg', '2'),
(65, '197910262006042016', 'St. Muslimah Dj, S.T., M.M.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 41, 'anonim.jpg', '2'),
(66, '198003282010011013', 'Bangsawan, S.E.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(67, '198004022006041008', 'Muhammad Syukril, S.T., M.Sc.   ', 'Sekretariat', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(68, '198005012010011025', 'Kodrat Ade Darmawan P, S.E.                                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(69, '198006102011012010', 'Misrayanti Arif, S.P., M.Hum.    ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(70, '198006192011012006', 'Hesty Sukma Dewi, S.P., M.Si.  ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(71, '198011102009011009', 'La Ode Bone F ', 'Sekretariat', 'Staf Bappeda\r\n', 39, 'anonim.jpg', '2'),
(72, '198012122010012022', 'Putri Nila Sari, S.T., M.M.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(73, '198101012009012001', 'Niniarti Karim, S.E.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 40, 'anonim.jpg', '2'),
(74, '198102152010012013', 'Mustamin, S.P.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf  Bappeda\r\n', 40, 'anonim.jpg', '2'),
(75, '198107142009011012', 'La Ode Arsal, S.E.        ', 'Sekretariat', 'Staf Bappeda\r\n', 39, 'anonim.jpg', '2'),
(76, '198201222009012004', 'Ira Jusrianti, S.E.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 39, 'anonim.jpg', '2'),
(77, '198202182011011009', 'Fakhrul Razy Marzuki, S.Kom.                                            \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 39, 'anonim.jpg', '2'),
(78, '198207132014071003', 'Asdar Rauf ', 'Sekretariat', 'Staf Bappeda\r\n', 38, 'anonim.jpg', '2'),
(79, '198208042014031001', 'Iswandi, S.Hut.                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 38, 'anonim.jpg', '2'),
(80, '198208252014082001', 'Venty Aghnani Nur Hamidi, S.Si. ', 'Sekretariat', 'Staf Bappeda\r\n', 38, 'anonim.jpg', '2'),
(81, '198301252008011003', 'Andry Kurniawan                                                                \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 38, 'anonim.jpg', '2'),
(82, '198303082002121005 ', 'Andi Amri Palawarukka, SE                           \r\n', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 38, 'anonim.jpg', '2'),
(83, '198304042014022001', 'Rina Asmirah, SE  ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 37, 'anonim.jpg', '2'),
(84, '198306172015022002', 'Hj. Ferasari, S.Pi., M.Si. ', 'Ekonomi & Sumber Daya Alam', 'Kepala Bappeda Prov. Sultra', 37, 'anonim.jpg', '2'),
(85, '198309232012121005', 'Muh. Afiat Amin, S.Sos.                        \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 37, 'anonim.jpg', '2'),
(86, '198402102009022009', 'Nada Wulaa, S.E.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 37, 'anonim.jpg', '2'),
(87, '198402202014082001', 'Irmawati, S.H.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 37, 'anonim.jpg', '2'),
(88, '198403182019032007', 'Rosmini, SE                                                                       \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 37, 'anonim.jpg', '2'),
(89, '198409132014081001', 'Mohamad Ibrahim, S.Si.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 36, 'anonim.jpg', '2'),
(90, '198410022010011003', 'Joko Balaka, S.E., M.Si.                           \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 36, 'anonim.jpg', '2'),
(91, '198412142010012020', 'Nidaul Husnah, S.T.                                                \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 36, 'anonim.jpg', '2'),
(92, '198504122010012003', 'Asni', 'Sekretariat', 'Staf Bappeda\r\n', 35, 'anonim.jpg', '2'),
(93, '198506052014081001\r\n', 'La Kiki, S.Pt.                                                ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 35, 'anonim.jpg', '2'),
(94, '198508122009011001', 'Rami Musrady Zaini, SE                            \r\n', 'Perencanaan Makro', 'Subidang Pendanaan & Pembiayaan Pembangunan Daerah\r\n', 35, 'anonim.jpg', '2'),
(95, '198512162014082002', 'Aninna Mulyawati Baridin, S.E. ', 'Sekretariat', 'Staf Bappeda\r\n', 35, 'anonim.jpg', '2'),
(96, '198601042011012015', 'Fauziah Muhlisi, ST                                                         \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 35, 'anonim.jpg', '2'),
(97, '198605282014032001', 'Rizki Amalia Amrullah, S.E., M.Acc.         ', 'Sekretariat', 'Staf Bappeda\r\n', 34, 'anonim.jpg', '2'),
(98, '198606012010012030', 'Wa Ode  Sarawali M. Saliha, S.Sos.   ', 'Sekretariat', 'Staf Bappeda\r\n', 34, 'anonim.jpg', '2'),
(99, '198606302019051001', 'Juntipul Mexball L. T., ST                                                                       \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 34, 'anonim.jpg', '2'),
(100, '198703072011012014', 'Irmayasari, S.Si, M.Si  ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 34, 'anonim.jpg', '2'),
(101, '198704092015021001', 'Ahmad Syahrul Tawakal, S.E.                                              \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 33, 'anonim.jpg', '2'),
(102, '198801092015021001', 'Raditya A. Tridipta, ST., M.Eng.            \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 33, 'anonim.jpg', '2'),
(103, '198803022019032009', 'Nasruddin Launtu, S.IP, M.Ak   ', 'Ekonomi & Sumber Daya Alam', 'Staf Bappeda', 33, 'anonim.jpg', '2'),
(104, '198809082010012001', 'Nini Aryanti, S.STP.      ', 'Sekretariat', 'Staf Bappeda\r\n', 32, 'anonim.jpg', '2'),
(105, '198809302011011001', 'Muhammad Subhan Ali, S.E.         ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 32, 'anonim.jpg', '2'),
(106, '198812122014031001', 'Muhammad Amin Ferdye, S.P.                                                \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 32, 'anonim.jpg', '2'),
(107, '198903062015022001', 'Mutiah Ilmi Darajat Haq, S.Kom.                            \r\n', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 32, 'anonim.jpg', '2'),
(108, '198910012019031005', 'Maulana Sakti, SE                                                                                   \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 31, 'anonim.jpg', '2'),
(109, '199003012019031015', 'Safruddin Sahar, ST. M.Si                                                                     \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 31, 'anonim.jpg', '2'),
(110, '199003052015022004', 'Ariyani, S.T.                                               \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 31, 'anonim.jpg', '2'),
(111, '199103022015031001', 'Muh. Ardhan Arwin, SH. M.Tr. I.P                     \r\n', ' Infrastruktur & Pengembangan Wilayah', 'Staf Bappeda\r\n', 30, 'anonim.jpg', '2'),
(112, '199208142019032028', 'Sitti Rahmah, SE. M.Ak  ', 'Sekretariat', 'Staf Bappeda\r\n', 28, 'anonim.jpg', '2'),
(113, '199209182019032012', 'Neneng Wulandari, SE, M. Acc       ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 28, 'anonim.jpg', '2'),
(114, '199211182019032025', 'Novia Purbasari, ST. MT                                                                       \r\n', 'Perencanaan Makro', 'Staf Bappeda\r\n', 28, 'anonim.jpg', '2'),
(115, '199305022016092002', 'Najeda Meysandy, S.STP                      ', 'Ekonomi & Sumberdaya Alam', 'Staf Bappeda\r\n', 27, 'anonim.jpg', '2'),
(116, '199308312019032011', 'Sri Rachmawati, S.Ak. M.Acc        ', 'Sekretariat', 'Staf Bappeda\r\n', 27, 'anonim.jpg', '2'),
(117, '199412032016091002', 'Mufti, S.STP                                          \r\n', 'Pembangunan Manusia dan Masyarakat', 'Staf Bappeda\r\n', 26, 'anonim.jpg', '2'),
(118, '199502102017081002', 'Muh. Ichsan Syiraid Ramadhan, S,STP  ', 'Sekretariat', 'Staf Bappeda\r\n', 26, 'anonim.jpg', '2'),
(119, '1995112520200122006', 'Ira Novianti, s. Ak.      ', 'Sekretariat', 'Staf Bappeda\r\n', 25, 'anonim.jpg', '2'),
(120, 'bismillah2021', '-', '-', '-', 0, 'anonim.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_role`
--

INSERT INTO `tb_user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tb_waktu`
--

CREATE TABLE `tb_waktu` (
  `id` int(11) NOT NULL,
  `h` varchar(20) NOT NULL,
  `m` varchar(20) NOT NULL,
  `s` varchar(20) NOT NULL,
  `h_siang` varchar(20) NOT NULL,
  `m_siang` varchar(20) NOT NULL,
  `s_siang` varchar(20) NOT NULL,
  `h_telat_siang` varchar(20) NOT NULL,
  `m_telat_siang` varchar(20) NOT NULL,
  `s_telat_siang` varchar(20) NOT NULL,
  `h_tutup_siang` varchar(20) NOT NULL,
  `m_tutup_siang` varchar(20) NOT NULL,
  `s_tutup_siang` varchar(20) NOT NULL,
  `h_sore` varchar(20) NOT NULL,
  `m_sore` varchar(20) NOT NULL,
  `s_sore` varchar(20) NOT NULL,
  `h_telat_sore` varchar(20) NOT NULL,
  `m_telat_sore` varchar(20) NOT NULL,
  `s_telat_sore` varchar(20) NOT NULL,
  `h_tutup_sore` varchar(20) NOT NULL,
  `m_tutup_sore` varchar(20) NOT NULL,
  `s_tutup_sore` varchar(20) NOT NULL,
  `h_telat_pagi` varchar(20) NOT NULL,
  `m_telat_pagi` varchar(20) NOT NULL,
  `s_telat_pagi` varchar(20) NOT NULL,
  `h_tutup_pagi` varchar(20) NOT NULL,
  `m_tutup_pagi` varchar(20) NOT NULL,
  `s_tutup_pagi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_waktu`
--

INSERT INTO `tb_waktu` (`id`, `h`, `m`, `s`, `h_siang`, `m_siang`, `s_siang`, `h_telat_siang`, `m_telat_siang`, `s_telat_siang`, `h_tutup_siang`, `m_tutup_siang`, `s_tutup_siang`, `h_sore`, `m_sore`, `s_sore`, `h_telat_sore`, `m_telat_sore`, `s_telat_sore`, `h_tutup_sore`, `m_tutup_sore`, `s_tutup_sore`, `h_telat_pagi`, `m_telat_pagi`, `s_telat_pagi`, `h_tutup_pagi`, `m_tutup_pagi`, `s_tutup_pagi`) VALUES
(1, '07', '00', '00', '10', '20', '00', '14', '30', '00', '15', '00', '00', '15', '00', '00', '17', '30', '00', '18', '00', '00', '08', '00', '00', '10', '00', '00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pgw`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pgw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
