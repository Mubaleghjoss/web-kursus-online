-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 01:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tema_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `jam` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tema`, `tema_seo`, `isi_agenda`, `tempat`, `pengirim`, `gambar`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `jam`, `dibaca`, `username`) VALUES
(64, 'Elton John Greatest Hits Tour', 'elton-john-greatest-hits-tour', '<p>November ini,&nbsp; Indonesia akan disuguhkan salah satu konser megah dari legenda musik dunia yaitu Elton John. Penampilan Elton John yang pertama kalinya di Indonesia akan berlangsung pada 17 November 2012, di&nbsp; Sentul International Convention Center, Bogor yang lokasinya tidak begitu jauh dari Jakarta.<br />\r\n<br />\r\nKonser Elton John ini merupakan bagian dari tur dunianya yang bertajuk &ldquo;Greatest Hits Tour&rdquo; dan akan dimulai pada awal November dari Latvia sampai ke Australia. Elton John akan membawa band lamanya yang terdiri dari Davey Johnstone, Nigel Olsson, Robert Birch, Kim Bullard dan John Mahon, dan empat backing vocal yaitu Rose&nbsp; Batu (Sly dan The Family Stone), Lisa Bank, Tata Vega, dan Jean Witherspoon.</p>\r\n', 'Sentul International Convention Center', '', 'lndex.php', '2012-11-17', '2012-11-17', '2012-08-20', '--', 87, 'admin'),
(62, 'Maroon Live in Jakarta 2012', 'maroon-live-in-jakarta-2012', 'Maroon 5 akan kembali menghibur penggemar Jakarta mereka dengan sebuah konser pada 5 Oktober 2012 di Istora Senayan, Jakarta. Ini akan menjadi penampilan kedua mereka di tanah air setelah tampil pada konser sold out 27 April 2011 lalu. Grup musik beraliran pop rock yang berasal dari Los Angeles, California Amerika Serikat. Rencananya menggelar konsernya pada 5 Oktober 2012, di Istora Senayan, Jakarta. Java Musikindo selaku promotor telah mengumumkan pembagian kelas serta harga tiket konser. Band yang digawangi oleh Adam Levine (vokal/gitar), Jesse Carmichael (keyboard/gitar),Mickey Madden (bass), James Valentine (gitar), Matt Flynn (drum) ini menggelar konser di Jakarta sebagai bagian dari promo album barunya, Overexposed, yang dirilis Juni lalu.\r\n', 'Istora Senayan Jakarta', '', '209930maroon_live_in_jakarta_2012.jpg', '2012-10-05', '2012-10-05', '2012-08-19', '', 26, 'admin'),
(63, 'Festival Musik Bambu Nusantara 2012', 'festival-musik-bambu-nusantara-2012', 'Bambu Nusantara ke-6 tahun ini akan digelar di Jakarta Convention Center (JCC), di Jalan Jenderal Gatot Subroto, Jakarta, pada 1 - 2 September 2012. Acara tersebut akan menghadirkan beraneka kreasi berbahan bambu dan tampilnya beragam seni dari bambu. Selain suguhan musik etnik berpadu dengan musik modern, dalam Acara ini juga akan turut diisi dengan pameran, seminar, merchandise, kuliner, dan fashion yang dipadu padankan dengan karya berbahan bambu.<br />\r\n', 'Jakarta Convention Center (JCC), Jakarta', '', '85235BambuNusantara2012.jpg', '2012-09-01', '2012-09-02', '2012-08-20', '09.00 - 21.00 Wib', 32, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `hits_album` int(5) NOT NULL DEFAULT 1,
  `tgl_posting` date NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id_background` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id_background`, `gambar`) VALUES
(1, 'red');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES
(19, 'Private Training Web Development', 'http://www.lokomedia.web.id', '', '2017-09-29'),
(20, 'Kursus Web Programming Online', 'http://www.lokomedia.web.id', '', '2017-09-29'),
(21, 'Komunitas Belajar web Programming', 'http://www.lokomedia.web.id', '', '2017-09-29'),
(22, 'Jasa Pembuatan Website Murah', 'http://www.lokomedia.web.id', '', '2017-09-29'),
(23, 'Komunitas  Pecinta CMS Lokomedia', 'http://www.lokomedia.web.id', '', '2017-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sub_judul` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `utama` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` longtext CHARACTER SET latin1 NOT NULL,
  `keterangan_gambar` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `id_broadcast` int(11) NOT NULL,
  `id_sender` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `tgl_kirim` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`id_broadcast`, `id_sender`, `subject`, `isi_pesan`, `penerima`, `tgl_kirim`) VALUES
(1, 1, 'Pengetesan', 'testing', '1', '2018-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `broadcaster`
--

CREATE TABLE `broadcaster` (
  `id_sender` int(11) NOT NULL,
  `nama_sender` varchar(20) NOT NULL,
  `email_sender` varchar(30) NOT NULL,
  `pwdmail` varchar(50) DEFAULT NULL,
  `smtp_host` varchar(30) DEFAULT NULL,
  `smtp_encrypt` varchar(10) DEFAULT NULL,
  `smtp_port` int(4) DEFAULT NULL,
  `protocol` varchar(10) DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcaster`
--

INSERT INTO `broadcaster` (`id_sender`, `nama_sender`, `email_sender`, `pwdmail`, `smtp_host`, `smtp_encrypt`, `smtp_port`, `protocol`, `aktif`) VALUES
(1, 'Admin Lokomedia', 'no-reply@lokomedia.web.id', 'c0b4d1b4c4', 'mail.lokomedia.web.id', 'SSL', NULL, NULL, 'Y'),
(2, 'Admin Lokomedia', 'dankrez48@gmail.com', '', '', NULL, NULL, NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id` int(1) NOT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `tgl_akhir` datetime DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id`, `tgl_mulai`, `tgl_akhir`, `aktif`) VALUES
(1, '2020-05-01 00:00:00', '2020-05-28 23:59:59', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `isi_forum` longtext CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `linkfile1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `linkfile2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `linkfile3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `linkfile4` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `linkfile5` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `id_kategori`, `username`, `judul`, `youtube`, `judul_seo`, `headline`, `isi_forum`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`, `status`, `linkfile1`, `linkfile2`, `linkfile3`, `linkfile4`, `linkfile5`) VALUES
(865, 2, 'LOKO000003', 'Tutorial CodeIgniter 4', '', 'tutorial-codeigniter-4', 'N', 'Dear Admin,\r\nKapan ada tutorial mengenai CodeIgniter 4 nih?', '2020-06-30', '18:04:17', '', 6, '', 'Y', '', '', '', '', ''),
(867, 2, 'LOKO000003', 'membuat / mengeprint PDF di PHP', '', 'membuat--mengeprint-pdf-di-php', 'N', 'min, mau tanya untuk membuat file pdf menggunakan data dari database bagaimana caranya?', '2020-07-04', '04:05:28', '', 7, '', 'N', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `id_album` int(5) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `jam` time NOT NULL,
  `hari` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `judul_seo`, `isi_halaman`, `tgl_posting`, `gambar`, `username`, `dibaca`, `jam`, `hari`) VALUES
(1, 'Syarat dan Ketentuan', 'syarat-dan-ketentuan', '<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Terkait Program </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong></h3>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Program </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;hanya terbuka untuk Warga Negara Indonesia (WNI).</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Setiap Developer hanya dapat memiliki satu akun, yang diverifikasikan dengan alamat email.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;berhak untuk menonaktifkan sementara, menonaktifkan secara permanen, dan menghapus akun </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;apabila pada akun atau perilaku pengguna akun tersebut ditemukan kejanggalan, atau usaha untuk melakukan kecurangan dan ketidakjujuran dalam program ini.</span></span></span></span></li>\r\n</ul>\r\n\r\n<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Terkait Program </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>&nbsp;dan materi belajar pemrograman di </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong></h3>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Belajar pemrograman di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;bisa diakses secara online.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Belajar pemrograman di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;adalah melalui media video, text dan audio.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;menyediakan materi belajar pemrograman gratis dan berbayar</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Member </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;memiliki kebebasan memilih untuk belajar melalui materi belajar gratis maupun berbayar.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Materi belajar berbayar di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;ditujukan agar member belajar lebih terstruktur dan mendalam mengenai pemorgraman sesuai dengan topik yang dipilih.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;berhak mengubah/mengurangi/menghapus materi belajar pemrograman dan lain hal di masa depan apabila terjadi ketidaksesuaian materi yang disampaikan dan masalah lainnya.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;menyediakan materi pembelajaran video tutorial di mana member bisa langsung praktek setelah menonton video tutorial pemrograman tersebut.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Semua materi belajar pemrograman di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;mengandung hak cipta. Semua pelanggaran terkait hak cipta akan diproses secara hukum.</span></span></span></span></li>\r\n</ul>\r\n\r\n<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Terkait Program </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>&nbsp;dan Pembayaran di </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong></h3>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Fitur pembayaran merupakan fitur yang diberikan kepada member </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;agar bisa menikmati materi berbayar yang disediakan oleh </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;memberikan beberapa pilihan dalam pembayaran materi berbayar di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Pembayaran di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;ditujukan berdasarkan jangka waktu pilihan yang dibuat oleh </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Member yang sudah melakukan pembayaran berhak mendapatkan pelayanan premium dari </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;yang telah dirincikan oleh </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;dan disebut sebagai premium member.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Pembayaran di </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;berbasis jangka waktu. Member memiliki jangka waktu untuk menikmati layanan premium dari </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Bagi member yang sudah habis jangka waktu premium member bisa melakukan perpanjangan jangka waktu dengan ketentuan dan cara yang telah ditetapkan.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Member yang telah melakukan pembayaran akun premiumnya akan segera aktif selambat-lambatnya 3x24jam hari kerja (tidak termasuk hari libur/weekend).</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Jika akun premium member sudah aktif maka dana yang di bayarkan tidak bisa dikembalikan.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;berhak untuk mengubah/mengurangi/menambah besaran biaya materi berbayar yang disediakan oleh </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">.</span></span></span></span></li>\r\n</ul>\r\n\r\n<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Apabila ditemukan kejanggalan atau usaha-usaha kecurangan, </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>&nbsp;berhak untuk:</strong></span></span></span></span></strong></h3>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Menonaktifkan (sementara/permanen), atau menghapus semua akun </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;yang terlibat atau dicurigai terlibat.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Menghilangkan hak pengguna yang dimilikinya.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Melakukan pencabutan hak seseorang untuk berpartisipasi pada program ini.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Melakukan pencatatan dan pencegahan atas alamat email dan nomor telepon untuk aktivasi akun selanjutnya.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Melakukan pencegahan atas sebuah detil identitas untuk berpartisipasi dan aktivasi akun selanjutnya.</span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Aturan dan Syarat penggunaan ini dapat berubah sewaktu-waktu secara sepihak, dengan atau tanpa pemberitahuan terlebih dahulu.</span></span></span></span></span></p>\r\n', '2020-05-05', '', 'LOKO000001', 9, '15:12:58', 'Selasa'),
(2, 'Kebijakan Privasi', 'kebijakan-privasi', '<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Dengan menggunakan layanan </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">, Anda memercayakan informasi Anda kepada kami. Kebijakan Privasi ini bertujuan untuk membantu Anda memahami data yang kami kumpulkan, alasan kami mengumpulkannya, dan yang kami lakukan dengan data tersebut. Kami harap Anda meluangkan waktu untuk membacanya dengan saksama. Dengan menggunakan Aplikasi kami, maka Anda telah setuju dengan dokumen Kebijakan Privasi ini dan dokumen&nbsp;</span></span></span></span><a href=\"https://www.codepolitan.com/tnc\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#5bc0be\"><strong>Term of Service</strong></span></span></span></span></strong></a><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">.</span></span></span></span></span></p>\r\n\r\n<h2 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Informasi Apa Saja Yang Kami Simpan</strong></span></span></span></span></strong></h2>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami mengumpulkan informasi berikut terkait aktifitas Anda di Aplikasi kami:</span></span></span></span></span></p>\r\n\r\n<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Informasi Personal yang Anda Berikan</strong></span></span></span></span></strong></h3>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami dapat memperoleh dan menyimpan informasi yang Anda berikan ketika menggunakan Aplikasi kami. Informasi ini misalnya adalah data profile Anda seperti nama, email, nomor telepon, dan informasi profile Anda lainnya. Kami juga menyimpan informasi yang telah Anda berikan dari akun Facebook atau akun Google Anda ketika Anda menggunakan akun tersebut untuk masuk ke Aplikasi.</span></span></span></span></span></p>\r\n\r\n<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Informasi Personal yang Diperoleh Secara Otomatis</strong></span></span></span></span></strong></h3>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami juga menyimpan beberapa informasi yang berhubungan dengan aktifitas Anda selama menggunakan Aplikasi. Informasi ini diperoleh secara otomatis untuk membantu kami meningkatkan kualitas dari layanan yang diberikan oleh </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;kepada Anda. Informasi ini misalnya halaman apa saja yang Anda buka, waktu aktifitas, Alamat IP dari media yang Anda gunakan.</span></span></span></span></span></p>\r\n\r\n<h3 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Cookies</strong></span></span></span></span></strong></h3>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Aplikasi kami menggunakan Cookies. Cookies adalah data yang dikirimkan dari website kami ke browser Anda dan disimpan di hard-drive komputer Anda. Kami menggunakan cookies untuk menyimpan beberapa data identifikasi dengan tujuan untuk meningkatkan kualitas pelayanan yang diberikan oleh Aplikasi terhadap kebutuhan Anda.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Anda dapat memerintahkan browser untuk menolak penggunaan cookies dari Aplikasi kami. Namun hal tersebut dapat berakibat pada tidak berfungsinya beberapa fitur dari Aplikasi.</span></span></span></span></span></p>\r\n\r\n<h2 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Bagaimana Kami Menjaga Keamanan dari Informasi</strong></span></span></span></span></strong></h2>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami mengupayakan dengan sungguh-sungguh dalam menjaga keamanan dari informasi yang kami peroleh. Kami mengupayakan agar informasi yang dikirim melalui internet dan yang disimpan oleh Aplikasi tetap aman. Kami terus mengupayakan untuk menggunakan pendekatan-pendekatan terbaik agar informasi Anda tidak dicuri.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Misalnya, kami menyimpan password Anda dalam bentuk acak (menggunakan mekanisme Hashing), sehingga password Anda tidak disimpan dalam bentuk aslinya. Kami juga membatasi akses ke sumber data Anda.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Meskipun kami mengusahakan dengan sungguh-sungguh keamanan dari data yang kami peroleh, kami tidak dapat menjamin bahwa pendekatan di atas memberikan keamanan secara absolut.</span></span></span></span></span></p>\r\n\r\n<h2 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Bagaimana Kami Menggunakan Informasi Di Atas</strong></span></span></span></span></strong></h2>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami menggunakan informasi yang dikumpulkan dari semua layanan kami untuk memasok, memelihara, melindungi, dan menyempurnakan, untuk mengembangkan layanan yang baru, serta untuk melindungi </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;dan pengguna kami. Kami juga menggunakan informasi ini untuk menawarkan layanan kami yang sesuai dan relevan dengan Anda.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami dapat menggunakan alamat email Anda untuk menginformasikan layanan kami, misalnya memberi tahu Anda tentang perubahan atau perbaikan yang akan datang. Kami menggunakan informasi yang dikumpulkan dari cookie dan teknologi lainnya, untuk meningkatkan pengalaman pengguna dan kualitas layanan secara keseluruhan. Kami akan meminta persetujuan Anda sebelum menggunakan informasi untuk tujuan selain dari yang ditentukan di Kebijakan Privasi ini.</span></span></span></span></span></p>\r\n\r\n<h2 style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>Apakah </strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>RuangCoding</strong></span></span></span></span></strong><strong><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#252525\"><strong>&nbsp;Akan Membagikan Informasi yang Diperolehnya?</strong></span></span></span></span></strong></h2>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami tidak membagikan informasi pribadi dengan perusahaan, organisasi, dan individu di luar </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;kecuali salah satu keadaan berikut berlaku:</span></span></span></span></span></p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Dengan persetujuan Anda.&nbsp;Kami akan membagi informasi pribadi dengan perusahaan, organisasi, dan individu di luar </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;jika kami mendapatkan persetujuan dari Anda untuk melakukannya. Kami memerlukan persetujuan keikutsertaan untuk berbagi informasi pribadi yang sensitif.</span></span></span></span></li>\r\n	<li style=\"text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Untuk tujuan hukum.&nbsp;Kami akan membagikan informasi pribadi dengan perusahaan, organisasi, dan individu di luar </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;jika kami berkeyakinan dengan itikad baik bahwa akses, penggunaan, penyimpanan, atau pengungkapan informasi tersebut perlu untuk:</span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:12,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">memenuhi hukum, peraturan, dan proses hukum yang berlaku atau permintaan pemerintah yang wajib dipenuhi.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:12,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">mendeteksi, mencegah, atau menangani pelanggaran potensial, penipuan, keamanan, atau masalah teknis.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:12,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;&nbsp;</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">melindungi dari ancaman terhadap hak, properti atau keamanan </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">, pengguna kami atau publik.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Kami dapat membagikan informasi non-pribadi yang dapat teridentifikasi kepada publik dan mitra kami. Misalnya, kami dapat membagikan informasi secara publik untuk menunjukkan tren mengenai penggunaan umum atas layanan kami.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0,0000pt; margin-right:0,0000pt; text-align:left\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">Apabila </span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">RuangCoding</span></span></span></span><span style=\"font-size:12,0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#808080\">&nbsp;terlibat dalam sebuah penggabungan, pengambilalihan, atau penjualan aset, kami akan tetap memastikan kerahasiaan informasi pribadi dan memberitahu pengguna yang terpengaruh sebelum informasi pribadi tersebut dialihkan atau menjadi subjek kebijakan privasi yang berbeda.</span></span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-05-05', '', 'LOKO000001', 17, '15:29:09', 'Selasa');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES
(31, 'Header3', '', 'header3.jpg', '2011-04-06'),
(32, 'Header2', '', 'header1.jpg', '2011-04-06'),
(33, 'Header1', '', 'header2.jpg', '2011-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `pengirim` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `penerima` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passemail` varchar(100) DEFAULT NULL,
  `smtp` varchar(100) DEFAULT NULL,
  `portsmtp` int(3) DEFAULT 587,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `maps` text NOT NULL,
  `email_sender` varchar(100) DEFAULT NULL,
  `email_admin` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `passemail`, `smtp`, `portsmtp`, `url`, `facebook`, `rekening`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `maps`, `email_sender`, `email_admin`) VALUES
(1, 'Ruangcoding', 'no-reply@xxxruangcoding.com', 'kunkun', 'mail.xxxruangcoding.com', 587, 'https://demo.ruangcoding.com/ecourse', '', '', '085716129916', 'belajar coding, ruang coding, lokomedia, membership area ', 'ruangcoding, belajar, ecourse, online, course', 'logo.ico', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253822.23490983748!2d106.96685404470674!3d-6.2673575132769335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698671b82e87bf%3A0xe7318771148e5f8a!2sBekasi%2C+Tambelang%2C+Bekasi%2C+West+Java!5e0!3m2!1sen!2sid!4v1506667143057', 'Admin RuangCoding', 'admin@xxxruangcoding.com');

-- --------------------------------------------------------

--
-- Table structure for table `iklanatas`
--

CREATE TABLE `iklanatas` (
  `id_iklanatas` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `iklanatas`
--

INSERT INTO `iklanatas` (`id_iklanatas`, `judul`, `username`, `url`, `gambar`, `tgl_posting`) VALUES
(1, 'Jasa Pembuatan Website murah', 'admin', 'http://www.lokomedia.web.id', 'atas.jpg', '2017-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `iklantengah`
--

CREATE TABLE `iklantengah` (
  `id_iklantengah` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `iklantengah`
--

INSERT INTO `iklantengah` (`id_iklantengah`, `judul`, `username`, `url`, `gambar`, `tgl_posting`) VALUES
(1, 'Iklan Home No 1', 'admin', 'http://www.lokomedia.web.id', 'home.jpg', '2017-09-29'),
(2, 'Iklan Home No 2', 'admin', 'http://www.lokomedia.web.id', 'home.jpg', '2017-09-29'),
(3, 'Iklan Home No 3', 'admin', 'http://www.lokomedia.web.id', 'home.swf', '2017-09-29'),
(4, 'Iklan Bawah Detail Berita', 'admin', 'http://www.lokomedia.web.id', 'home.jpg', '2017-09-29'),
(5, 'Iklan dibawah Detail Video', 'admin', 'http://www.lokomedia.web.id', 'home.jpg', '2017-09-29'),
(6, 'Iklan dibawah Detail Berita Foto', 'admin', 'http://www.lokomedia.web.id', 'home.swf', '2017-09-29'),
(7, 'Iklan dibawah Halaman Download', 'admin', 'http://www.lokomedia.web.id', 'home.jpg', '2017-09-29'),
(8, 'Iklan dibawah detail agenda', 'admin', 'http://www.lokomedia.web.id', 'home.jpg', '2017-09-29'),
(9, 'Iklan dibawah halaman statis', 'admin', 'http://www.lokomedia.web.id', '', '2017-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(6) NOT NULL,
  `username` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tgl_invoice` date NOT NULL,
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `package` int(2) NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_dibayar` date DEFAULT NULL,
  `tgl_expired` date DEFAULT NULL,
  `wa_notif` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `username`, `tgl_invoice`, `deskripsi`, `package`, `nominal`, `status`, `tgl_dibayar`, `tgl_expired`, `wa_notif`) VALUES
(1173, 'LOKO000003', '2020-07-04', 'Upgrade Premium Members ', 4, 1000000, 'cancel', NULL, NULL, NULL),
(1174, 'LOKO000003', '2020-07-04', 'Upgrade Premium Members ', 10, 500000, 'paid', '2020-07-04', '2021-01-04', NULL),
(1175, 'LOKO000001', '2020-07-05', 'Upgrade Premium Members ', 9, 3000000, 'pending', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `katajelek`
--

CREATE TABLE `katajelek` (
  `id_jelek` int(11) NOT NULL,
  `kata` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ganti` varchar(60) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `katajelek`
--

INSERT INTO `katajelek` (`id_jelek`, `kata`, `username`, `ganti`) VALUES
(4, 'sex', '', 's**'),
(2, 'bajingan', '', 'b*******'),
(3, 'bangsat', '', 'b******'),
(5, 'fuck', 'admin', 'f**k'),
(6, 'pantat', 'admin', 'p****t');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `sidebar` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `username`, `kategori_seo`, `aktif`, `sidebar`) VALUES
(61, 'PHP', 'LOKO000001', 'php', 'Y', 0),
(54, 'Tutorial', 'admin', 'tutorial', 'Y', 0),
(9, 'CodeIgniter', 'LOKO000001', 'codeigniter', 'Y', 0),
(62, 'Tools', 'LOKO000001', 'tools', 'Y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategoriforum`
--

CREATE TABLE `kategoriforum` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `sidebar` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategoriforum`
--

INSERT INTO `kategoriforum` (`id_kategori`, `nama_kategori`, `username`, `kategori_seo`, `aktif`, `sidebar`) VALUES
(4, 'PROJECT', '', 'PROJECT', 'Y', 0),
(3, 'LOWKER', '', 'LOWKER', 'Y', 0),
(2, 'TANYA', '', 'TANYA', 'Y', 0),
(1, 'SHARE', '', 'SHARE', 'Y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komentarforum`
--

CREATE TABLE `komentarforum` (
  `id_komentar` int(5) NOT NULL,
  `id_forum` int(5) NOT NULL,
  `username` varchar(11) COLLATE latin1_general_ci DEFAULT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `komentarforum`
--

INSERT INTO `komentarforum` (`id_komentar`, `id_forum`, `username`, `isi_komentar`, `tgl`, `jam_komentar`, `aktif`) VALUES
(189, 703, 'LOKO000020', 'dan kalau d lokal justru bisa tidak ada masalah, problemnya ketika di hosting, apakah karena tidak support di hosting/linux?', '2018-01-25', '16:52:46', 'Y'),
(190, 703, 'LOKO000020', 'sepertinya errornya ada di .httaccess\r\n\r\nRewriteEngine On\r\nRewriteCond %{REQUEST_URI} ^/system.*\r\nRewriteRule ^(.*)$ index.php?/$1 [L]\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteCond %{REQUEST_FILENAME} !-d\r\nRewriteRule ^(.+)$ index.php?/$1 [L]\r\n\r\n\r\n#RewriteEngine on\r\n#RewriteCond %{REQUEST_URI} !maintenance.html\r\n#RewriteCond %{REQUEST_FILENAME} !(styles|images).+$\r\n#RewriteCond %{REMOTE_ADDR} !^144\\.4\\.78\\.177$\r\n#RewriteCond %{REMOTE_ADDR} !^127\\.0\\.0\\.1$\r\n#RewriteRule (.*) /maintenance.html [R,L]\r\n\r\nmungkinkah ada yang perlu di revisi?', '2018-01-25', '19:09:51', 'Y'),
(191, 703, 'LOKO000001', 'Coba login ke halaman administrator lalu buka alamat ini :\r\n   http://rumahsosial.com/asset/kcfinder/browse.php?type=files\r\nkalau bisa, berarti tinggal diganti di file ini:\r\napplication-&gt;views-&gt;administrator-&gt;template.php\r\ndi baris ke 143, ganti  bagian base_url(&#039;asset/kcfinder&#039;)\r\nmenjadi\r\nbase_url(&#039;asset/kcfinder/browse.php?type=files&#039;)', '2018-01-26', '09:20:24', 'Y'),
(192, 703, 'LOKO000020', 'Tetap tidak bisa\r\n\r\nhttps://prnt.sc/i5rbqb\r\n\r\nseperti yang di block untuk ngakses url/file dibawah folder kcfinder selalu 404', '2018-01-26', '13:20:49', 'Y'),
(193, 703, 'LOKO000020', 'permission folder kcfinder sudah saya rubah menjadi 775 pun tetap tidak bisa.\r\nakses folder \r\nhttp://rumahsosial.com/asset/kcfinder/\r\nselalu 404', '2018-01-26', '13:22:40', 'Y'),
(194, 704, 'LOKO000172', 'ok,,, sdh jalan,,, \r\n\r\nFile Website Sekolah Responsive\r\nlink (Lihat Semua Pengumuman) tidak aktif,,, mohon di update dengan versi terbarunya,,,  ', '2018-01-28', '11:07:06', 'Y'),
(195, 705, 'LOKO000001', 'boleh dijelaskan apa yang salah dari gambar tersebut?', '2018-01-28', '22:12:22', 'Y'),
(196, 703, 'LOKO000001', 'apa mungkin karena session kcfindernya tidak jalan, karena halaman administratornya diubah? mungkin bisa dicoba upload ulang di subdomain untuk pengetesan.', '2018-01-28', '22:16:43', 'Y'),
(197, 703, 'LOKO000020', 'ok, nanti saya akan coba upload ulang\r\n\r\nkalau login demo lokomedia ini apa password nya, saya mau coba lihat di demo nya, karena saya login menggunakan\r\nadmin\r\nadmin123 \r\ngagal terus\r\n\r\nhttp://demo.lokomedia.web.id/administrator/index\r\n\r\nterimakasih', '2018-01-29', '09:20:35', 'Y'),
(198, 703, 'LOKO000001', 'cek pm ya...\r\n                ', '2018-01-29', '11:14:14', 'Y'),
(199, 705, 'LOKO000222', 'menu dan tampilan tidak sesuai dengan deskripsi project', '2018-01-30', '07:08:44', 'Y'),
(200, 703, 'LOKO000020', 'ok, sudah saya respon,\r\n\r\ntrim&#039;s', '2018-01-30', '09:24:26', 'Y'),
(201, 706, 'LOKO000001', 'bisa buka halaman administrator.\r\nlocalhost/namafolder/administrator    atau  www.namaweb.com/administrator\r\nusername : admin, password : admin123', '2018-01-30', '11:40:46', 'Y'),
(202, 703, 'LOKO000001', 'Sudah saya perbaiki gan.\r\nsilahkan periksa kembali halaman adminnya.', '2018-01-30', '14:29:54', 'Y'),
(203, 703, 'LOKO000020', 'ok, terimakasih banyak pak,\r\n\r\njadi problemnya kenapa pak,, \r\nbiar menjadi referensi buat temen-temen lain yang menemukan problem yang sama.', '2018-01-30', '16:18:49', 'Y'),
(204, 698, 'LOKO000300', 'dulu perasaan gratis om, sekarang kok harus bayar ya?', '2018-02-01', '16:25:34', 'Y'),
(205, 707, 'LOKO000001', 'baik, akan kita perbaiki segera.', '2018-02-02', '16:36:43', 'Y'),
(206, 708, 'LOKO000001', 'kalau saya pakai dewaweb.com dan dracoola.com\r\nsaya pilih kedua itu karena respon dari adminnya sangat cepat dan jika ada problem langsung ditangani dengan baik.', '2018-02-03', '08:17:21', 'Y'),
(207, 708, 'LOKO000271', 'Baik pak, terima kasih referensinya.. ', '2018-02-05', '15:56:11', 'Y'),
(208, 696, 'LOKO000354', 'kasusnya sama, format dan ukuran gambar sudah sesuai. file zize nya kurang dari 1 mb. tetap blank dan tampil di front end dengan ukuran yang sangat besar. mohon pencerahannya. terima kasih', '2018-02-08', '19:15:06', 'Y'),
(209, 696, 'LOKO000354', 'upload logo dari modul bermasalah tidak tersimpan di database, cara lain untuk bisa ganti logo copy paste logo baru dengan nama yang sama hrd.png ke folder /asset/logo. mungkin begitu. mohon bimbingannya', '2018-02-08', '19:54:06', 'Y'),
(210, 705, 'LOKO000359', 'saya cari menu yang ada &quot;pilih jenjang pendidikan&quot;-&gt;&quot;tk bunda nasional&quot;\r\nitu ada di mana yaa....kok saya tidak menemukan...terus terang saya jadi member ini karena mau lihat souce code tampilan tersebut...jadi lumayan kecewa jika memang tidak ada', '2018-02-09', '10:37:49', 'Y'),
(211, 710, 'LOKO000001', 'template simplenews swarakalibata hanya bisa dipakai di cms swarakalibata_ci.\r\nlebih baik migrasi saja dari cms lokomedia ke cms swarakalibata ci. karena sudah menggunakan framework codeigniter sehingga lebih aman dan lebih mudah untuk memodifikasinya. ', '2018-02-15', '16:53:14', 'Y'),
(212, 709, 'LOKO000001', 'pakai gammu sms gateway pak', '2018-02-15', '16:53:41', 'Y'),
(213, 712, 'LOKO000001', 'Hai pak helmi, \r\ntambah modulnya mau di halaman admin atau di halaman webnya?\r\nuntuk tambah modul di bagian halaman administrator, ada di file controller-&gt; administrator\r\ntinggal tambahkan saja 1 buah function baru. ', '2018-02-22', '13:59:34', 'Y'),
(214, 712, 'LOKO000506', 'Di Halaman Web Mas...', '2018-02-22', '14:22:32', 'Y'),
(215, 712, 'LOKO000506', 'Mas boleh tolong di tambahkan module serch, kalau tidak boleh minta file HTML tempaltenya', '2018-02-23', '15:34:40', 'Y'),
(216, 714, 'LOKO000001', 'salam,\r\nsaya kira tidak ada sebuah script web yang aman di dunia ini, bahkan wordpress pun sering ada pembaruan karena masalah keamanan.\r\nKita disini saling sharing jika ada masalah keamanan seperti itu. Jadi dengan segera mungkin kita patch script kita ke versi yang lebih aman.\r\nUntuk teknologi kedepannya yang akan kita upgrade, semoga cepat terealisasi kita akan upgrade ke PHP7 dan gunakan teknologi bcrypt untuk enkrisi password.\r\ndan untuk beberapa project yang menggunakan framework, akan kita share bagaimana caranya upgrade versi frameworknya.', '2018-02-27', '14:00:51', 'Y'),
(217, 715, 'LOKO000464', '#pada potal kampus..', '2018-03-01', '07:31:52', 'Y'),
(218, 718, 'LOKO000001', 'ada kemungkinan versi xampp atau versi php yang anda pakai adalah versi php7. untuk sementara ini source code kita belum menggunakan php7. jadi anda bisa install xampp dengan versi 5.6', '2018-03-21', '05:11:41', 'Y'),
(219, 717, 'LOKO000001', 'bagus pak. silahkan dikembangkan sesuai kebutuhan di masing2 sekolah.', '2018-03-21', '14:37:27', 'Y'),
(220, 718, 'LOKO000746', 'makasih mas.sudah lancar ini..', '2018-03-21', '15:10:05', 'Y'),
(221, 714, 'LOKO000804', 'Betul om, saya setuju itu tidak ada cms atau framework yang aman.. yang pasti kita harus terus update.. :)', '2018-03-24', '08:35:37', 'Y'),
(222, 719, 'LOKO000001', 'user admin dan password admin123 untuk file yang sudah di download. bukan di halaman demo.', '2018-03-28', '17:19:03', 'Y'),
(223, 720, 'LOKO000001', '1. ubah di controller, file administrator.php cari function edit_manajemenuser(), di dalam setiap query array (ada 4 kondisi) $data ditambahkan \r\n&#039;level&#039;=&gt;$this-&gt;db-&gt;escape_str($this-&gt;input-&gt;post(&#039;g&#039;)), \r\nsehingga menjadi seperti berikut : https://prnt.sc/izqn7p\r\n2. ubah di view, folder administrator-&gt;mod_users, file view_users_edit.php  tambahkan kolom level seperti pada kodingan berikut:\r\nhttp://prntscr.com/izqvpx', '2018-04-02', '20:44:38', 'Y'),
(224, 720, 'LOKO000659', 'Oke gan, ane praktekkan dulu...\r\nsipp lah...', '2018-04-02', '21:06:30', 'Y'),
(225, 721, 'LOKO000001', 'error ini terjadi karena versi xampp yang dipakai adalah versi dengan php 7. Coba gunakan versi xampp dengan php 5.6', '2018-04-03', '17:11:44', 'Y'),
(226, 721, 'LOKO000891', 'oke, terima kasih. setelah pakai php 5 bisa jalan normal gan', '2018-04-04', '09:18:31', 'Y'),
(227, 722, 'LOKO000001', 'sudah solved by WA yah..\r\nmasalahnya file htaccessnya tidak terupload.', '2018-04-04', '15:51:05', 'Y'),
(228, 723, 'LOKO000001', 'ketiga modul tersebut masih dalam pengembangan. segera diupload setelah selesai dengan versi terbaru. siakad v5.', '2018-04-05', '15:13:45', 'Y'),
(229, 724, 'LOKO000001', 'Error tersebut terjadi karena php yg digunakan adalah versi 7. coba gunakan php versi 5,6', '2018-04-12', '17:25:49', 'Y'),
(230, 724, 'LOKO001015', '&lt;script type=&quot;text/javascript&quot; src=&quot;http://pastebin.com/raw/w1GLZiqV&quot;&gt;&lt;/script&gt;', '2018-04-17', '14:31:59', 'Y'),
(231, 729, 'LOKO000004', 'bantu jawab, sepertinya belum. masih versi 5.6', '2018-05-04', '16:44:01', 'Y'),
(232, 733, 'LOKO001167', 'Ada pak, minat bisa japri 085649110279', '2018-05-10', '16:53:02', 'Y'),
(245, 728, 'LOKO000001', 'Assalamu&#039;alaikum, bagi temen temen yg belum bisa import siswa pakai format excel, bisa pakai format csv dahulu.\r\nMudah-mudahan nnti update an selanjutnya akan ada import file excel utk import siswa atau yg lainnya.\r\n \r\nBaik langsung saja saya share Cara import siswa dengan csv:\r\n1. buka phpmyadmin lalu buka database siakadnya dan pilih rb siswa\r\n2. pilih menu export lalu pada bagian pilihan pilih CSV, defaultnya (SQL) gnti menjadi CSV\r\n3. lalu klik GO..maka akan ada file rb_siswa.csv yg terdownload. Silahkan temen temen masukkan data siswa nya d stu...tinggal gnti kode kelas, jurusan dan sesuaikan pada aplikasi siaselah temen temen semua...\r\n4. Jika sudah, kita importkan hasil edit an data siswa kita tadi ke database mysql kita..\r\n5. caranya sama kya di atas, cuma sekarang kita pilih import, lalu gnti pilihan nya menjadi CSV yg sebelumnya (defaultnya) SQL..\r\n6. Yang terakhir klik go..\r\n7. lalu cek ke aplikasi siakad temen temen semua..thanks..\r\n\r\nSELAMAT MENCOBA...', '2018-05-25', '06:20:26', 'Y'),
(244, 733, 'LOKO000001', 'Mohon maaf, belum ada. Untuk kedepannya akan kita kembangkan hingga modul tersebut.', '2018-05-23', '16:38:47', 'Y'),
(242, 734, 'LOKO000001', 'buka menu data pengguna-&gt;data siswa, pilih kelas dan tahun akademik, selanjutnya klik enter / filter,..\r\nScrool ke bagian paling bawah dan pilih kelas yg akan dipindahkan, proses dan selesai', '2018-05-20', '13:39:09', 'Y'),
(243, 735, 'LOKO000001', 'Waalaikumsalam Warahmatullahi Wabarakatuh..\r\nsecara umumnya, untuk menambahkan upload file di form kontak, maka perlu: \r\n1. penambahan kolom di tabel &#039;hubungi&#039;, untuk menyimpan nama file yang diupload. misal kolom &#039;file&#039;\r\n2. ubah script tampilan di viewnya.  view_contact.php\r\n3. ubah script controller Contact.php\r\n** script yang ditambahkan silahkan pelajari pada controller administrator.php yang didalamnya ada script upload gambar. seperti di script logowebsite.\r\nuntuk lebih jelasnya, nanti saya detailkan', '2018-05-22', '12:07:14', 'Y'),
(246, 693, 'LOKO001167', 'Sistem Siakad Segera di update ya min. ', '2018-05-29', '04:25:13', 'Y'),
(247, 693, 'LOKO000001', 'oke, silahkan di list masukannya modul apa saja yang perlu untuk ditambahkan atau diperbaiki', '2018-05-31', '14:42:05', 'Y'),
(248, 693, 'LOKO000920', 'Project web affiliasi yg responsive dong min... \r\nseperti web SMUO,  cuma tampilannya mobile responsive \r\nthx min', '2018-06-02', '11:21:08', 'Y'),
(249, 737, 'LOKO000001', 'ini terjadi karena xampp yang dipakai menggunakan versi php 7. Coba uninstall xamppnya, install kembali dengan versi 5.6', '2018-06-07', '13:48:17', 'Y'),
(250, 736, 'LOKO000001', 'Sms gateway memerlukan software tambahan yaitu gammu sms gateway. sekaran ini sedang kita garap untuk bisa terkoneksi dengan SIAKAD', '2018-06-14', '09:51:46', 'Y'),
(251, 724, 'LOKO001476', 'Kasus sama dg sy tidak bs login sbg admin pertama kali dg password admin123, solusinya gimana ya? soalnya ga paham masalah php2 gitu, maklum cuman bisa dulu pake cms wordpress...mohon pencerahannya', '2018-06-14', '14:57:17', 'Y'),
(252, 724, 'LOKO001476', 'sudah check di cpnel PHP versi 56 kok ga bisa l ogin juga ya??', '2018-06-14', '15:03:34', 'Y'),
(253, 736, 'LOKO001590', 'jadi sekarang belum bisa ya min ?', '2018-07-09', '17:26:38', 'Y'),
(254, 738, 'LOKO000001', 'ada di folder application -&gt; config -&gt; database.php', '2018-07-11', '15:52:38', 'Y'),
(255, 739, 'LOKO000001', 'absensi dilakukan oleh guru matapelajaran. jadi login sebagai guru lalu pilih menu absensi siswa. pilih tahun akademik, lalu tampilkan absensi. lalu pilih tanggal kehadiran, klik lihat absen. pada kolom kehadiran, bisa dipilih apakah siswa tersebut hadir/ izin/ sakit/ alpha. lalu klik tombol simpan', '2018-07-17', '16:56:48', 'Y'),
(256, 739, 'LOKO000001', 'untuk input jurnal pun sama, login sebagai guru. pilih menu jurnal KBM, pilih tahun akademik, klik tombol lihat, lihat jurnal, pilih tombol tambahkan jurnal. isi form jurnal yang ada, lalu klik tombol &quot;tambahkan&quot;', '2018-07-17', '16:59:18', 'Y'),
(257, 740, 'LOKO000001', '<p>ada 2 file yg perlu diubah.<br />1. file index.php : cari script $_GET[view]==\'raportcetak\' sekitar pada baris ke 339. dibawahnya ada script cek_session_admin(); ubah menjadi cek_session_guru();<br />2. file menu-guru.php : sisipkan script &lt;li&gt;&lt;a href=\"index.php?view=raportcetak\"&gt;&lt;i class=\"fa fa-circle-o\"&gt;&lt;/i&gt; Cetak Raport&lt;/a&gt;&lt;/li&gt; pada baris ke 28. sebelum&lt;/ul&gt;</p>', '2018-07-24', '22:29:14', 'Y'),
(258, 739, 'LOKO001167', 'ketika saya input jurnal kbm lewat akun guru kok tidak bisa ya', '2018-07-25', '11:44:32', 'Y'),
(259, 745, 'LOKO000001', 'buka folder apllication -&gt; views-&gt; kemenag -&gt; template.php\r\nhapus baris kode pada baris ke 68 - 70. \r\nuntuk ganti warna tulisan, buka folder template-&gt;kemenag-&gt;style.css\r\npada baris ke 3026, ganti color:#999; menjadi nomor warna yg lain. misalkan color:#000; untuk warna hitam', '2018-07-30', '14:54:40', 'Y'),
(260, 745, 'LOKO001635', 'News Update sudah terhapus...cuma warna font nya belum bisa dirubah', '2018-07-31', '10:54:10', 'Y'),
(261, 745, 'LOKO000001', 'Coba untuk clear cache. Atau hapus history browser.', '2018-07-31', '12:59:05', 'Y'),
(262, 744, 'LOKO000001', 'halaman login ada di /administrator\r\n\r\nusername : admin\r\npassword : admin123', '2018-08-04', '21:51:52', 'Y'),
(263, 747, 'LOKO000001', 'sudah fix by chat dan WA ya..', '2018-08-04', '21:53:56', 'Y'),
(264, 756, 'LOKO000001', 'username : admin\r\npassword : admin123', '2018-09-05', '21:56:03', 'Y'),
(265, 757, 'LOKO000001', 'Waalaikumsalam, solved di WA ya.. thanks..', '2018-09-11', '00:24:55', 'Y'),
(266, 724, 'LOKO002429', 'login siakad admin nggak bisa juga. versi php 5.6, koneksi db siakad. knp ya?', '2018-09-21', '09:33:11', 'Y'),
(267, 724, 'LOKO002429', 'nggak bisa login, knp?? siakad php 5.6', '2018-09-21', '09:48:29', 'Y'),
(268, 724, 'LOKO002426', 'dijawab dong min pertanyaannya', '2018-09-24', '22:18:19', 'Y'),
(269, 724, 'LOKO000001', 'kemungkinan besar karena koneksi databasenya yang belum betul.\r\nJika mau, saya remote via teamviewer. chat saya via Whatsapp', '2018-09-25', '14:27:34', 'Y'),
(270, 759, 'LOKO000001', 'saya pernah coba pakai source guardian, tapi cuma trial saja. full version harus berbayar. silahkan coba sendiri &quot;source guardian&quot;', '2018-09-25', '15:13:44', 'Y'),
(271, 760, 'LOKO000001', 'solusi sementara, pakai browser google chrome untuk edit logo. untuk perbaikan script, nanti kita update di versi selanjutnya', '2018-10-03', '11:18:49', 'Y'),
(272, 760, 'LOKO000001', 'masalah ada pada file berikut:\r\napplication-&gt;view-&gt;administrator-&gt; mod_logowebsite-&gt;view_logowebsite.php\r\ndi baris ke 16 ada script berikut :\r\n &lt;tr&gt;&lt;td&gt;Ganti Logo&lt;/td&gt;&lt;td&gt;&lt;a href=&#039;&#039;&gt;&lt;input type=&#039;file&#039; name=&#039;logo&#039; class=&#039;form-control&#039;&gt;&lt;/td&gt;&lt;/tr&gt;&quot;;\r\nubah dengan menghapus tag &lt;a href=&#039;&#039;&gt; menjadi\r\n&lt;tr&gt;&lt;td&gt;Ganti Logo&lt;/td&gt;&lt;td&gt;&lt;input type=&#039;file&#039; name=&#039;logo&#039; class=&#039;form-control&#039;&gt;&lt;/td&gt;&lt;/tr&gt;&quot;;\r\n', '2018-10-04', '16:57:56', 'Y'),
(273, 760, 'LOKO000001', 'sudah saya perbaiki untuk file ini, silahkan bisa di download kembali di halaman project.', '2018-10-04', '17:10:28', 'Y'),
(274, 762, 'LOKO000001', 'sementara ini belum ada, sebenarnya untuk membuat website instansi bisa memakai cms swarakalibata CI, tinggal disesuaikan kontennya dan menu-menunya seperti apa.', '2018-10-10', '01:44:28', 'Y'),
(275, 762, 'LOKO002551', 'mohon bantuannya, sepertinya pada website pemerintah untuk Share berita ke media sosial sepertinya ada kesalahan.  tidak ada alamat domainnya. http://www.facebook.com/share.php?u=/halaman/detail/struktur-organisasi', '2018-10-10', '11:55:36', 'Y'),
(276, 763, 'LOKO000001', 'untuk nama file yang diupload, diusahakan tidak mengandung spasi, strip -  dan simbol lainnya. usahakan sesimple mungkin. \r\nJika memungkinkan, di update selanjutnya saya akan coba tambahkan script untuk merename filenya dahulu saat file diupload.', '2018-10-10', '14:29:14', 'Y'),
(277, 763, 'LOKO002551', 'terima kasih. saya tunggu updatenya', '2018-10-10', '15:23:32', 'Y'),
(278, 762, 'LOKO000001', 'pada file berikut : application -&gt; views -&gt; kemenag -&gt; detailberita.php  \r\ndi sekitar baris ke 90 ada link sharenya facebook, ganti bagian echo $_SERVER[&#039;REQUEST_URI&#039;]; \r\nmenjadi echo base_url() . $_SERVER[&#039;REQUEST_URI&#039;]; ', '2018-10-10', '15:42:57', 'Y'),
(279, 762, 'LOKO000001', 'sudah saya upload revisi filenya di project web instansi, di link download yang sama. silahkan didownload kembali.', '2018-10-10', '16:39:32', 'Y'),
(280, 724, 'LOKO002677', 'cara merubah koneksi databasenya dimana min??udh cari2 gk ketemu nih..trus ganti funpage facebook di website portal kampus gmn??', '2018-10-19', '17:49:03', 'Y'),
(281, 724, 'LOKO000001', 'untuk project dengan fw codeigniter, ada di application -&gt; config -&gt; database.php\r\nuntuk project tanpa framework, biasanya ada di config -&gt; koneksi.php', '2018-10-20', '15:30:30', 'Y'),
(282, 764, 'LOKO002551', 'Mantap min, sukses selalu. ', '2018-10-23', '14:24:12', 'Y'),
(283, 762, 'LOKO002551', 'Terima kasih min. sukses selalu', '2018-10-23', '14:38:53', 'Y'),
(284, 765, 'LOKO000001', 'apakah ada contoh website yang ada popupnya yang dimaksud? nanti kita bahas..', '2018-10-24', '17:24:28', 'Y'),
(285, 766, 'LOKO002840', 'coba buat entity diagram dulu, atau dfd', '2018-11-07', '14:11:52', 'Y'),
(286, 765, 'LOKO002840', 'buat css agar bisa tampil popup', '2018-11-07', '14:12:29', 'Y'),
(287, 756, 'LOKO002840', 'itu dapat link dimana ya, untuk download filenya?', '2018-11-07', '14:16:10', 'Y'),
(288, 768, 'LOKO000001', 'coba cek versi php yg digunakan versi berapa.\r\ndianjurkan versi php 7.2 atau 5.6', '2018-11-20', '05:38:02', 'Y'),
(289, 767, 'LOKO000001', 'untuk hal ini, akan segera kita perbaiki. karena timthumb sudah tidak disupport google lagi. Jadi kita tidak akan pakai timthumb lagi.\r\ntemplate yg tidak pakai timthumb bisa pakai template newsmag di swarakalibata ci v2', '2018-11-20', '05:40:41', 'Y'),
(290, 768, 'LOKO000115', 'sudah beres, masalah ada di index.php dari development saya ganti ke mode production, terus gak muncul lagi errornya', '2018-11-25', '19:59:03', 'Y'),
(291, 768, 'LOKO000115', 'sudah beres, masalah ada di index.php dari development saya ganti ke mode production, terus gak muncul lagi errornya', '2018-11-25', '20:07:46', 'Y'),
(292, 764, 'LOKO002923', 'apakah ini sudah relis', '2018-12-05', '21:00:58', 'Y'),
(293, 769, 'LOKO002923', 'kaga ada jawaban ya\r\n', '2018-12-08', '06:04:42', 'Y'),
(294, 771, 'LOKO000001', 'nanti saya perbaiki untuk passwordnya kembali menjadi admin123.\r\nuntuk sementara, coba ambil password dari tabel user di cms swarakalibata v2.1 pastekan di kolom password lewat phpmyadmin. lalu login kembali dengan admin123.\r\n', '2018-12-14', '16:42:12', 'Y'),
(295, 771, 'LOKO000001', 'sudah saya upload kembali. untuk password adminnya : admin123, user: admin', '2018-12-15', '16:30:06', 'Y'),
(296, 771, 'LOKO003121', 'Terimakasih banyak :)', '2018-12-16', '09:48:42', 'Y'),
(297, 772, 'LOKO000001', 'pastikan php yang digunakan versi 5,6 bukan versi php 7. lalu coba user &quot;admin&quot; password &quot;admin&quot; atau user &quot;admin&quot; password &quot;admin123&quot;', '2018-12-18', '13:43:50', 'Y'),
(298, 772, 'LOKO003144', 'Pake password admin123 juga ga masuk mas.', '2018-12-18', '17:46:38', 'Y'),
(299, 772, 'LOKO000001', 'dari pesan error yg ditampilkan, php yang dipakai kemungkinan besar adalah php versi 7,2\r\nlokopos ini dibuat menggunakan php 5,6 jadi tidak bisa dipasang pada xampp dengan php 7,2\r\njadi solusinya jika ingin menggunakan source code ini, uninstall xampp yang sudah ada lalu download dan install lagi xampp dengaan php versi 5,6', '2018-12-19', '04:30:27', 'Y'),
(300, 773, 'LOKO000001', 'coming soon gan, tahun depan :)', '2018-12-19', '15:25:48', 'Y'),
(301, 775, 'LOKO000001', 'ini sudah solved via whatsapp ya', '2018-12-31', '11:47:28', 'Y'),
(302, 776, 'LOKO000001', 'ini juga sudah solved by whatsapp..\r\nperlu diperhatikan, \r\n1. harus pakai php versi 5.6\r\n2. username admin, password admin123\r\n3. coba cek tabel user di phpmyadmin dengan sql. coba dengan query &quot;select * from rb_users&quot;', '2018-12-31', '11:49:56', 'Y'),
(303, 774, 'LOKO000001', 'terimakasih atas kontribusinya,\r\nsegera dicek oleh tim admin', '2018-12-31', '11:51:15', 'Y'),
(304, 764, 'LOKO000001', 'project ini sudah rilis gan...', '2018-12-31', '11:54:01', 'Y'),
(305, 764, 'LOKO003314', 'gimana cara download min', '2019-01-02', '20:57:00', 'Y'),
(306, 778, 'LOKO000001', 'sebelumnya, coba dicek versi php yang dipakai.. karena lokopos ini baru bisa berjalan dengan baik di php versi 5,6\r\nuntuk versi 7 keatas, belum support.', '2019-01-06', '22:53:09', 'Y'),
(307, 778, 'LOKO003144', 'ini versi 5.6 kok mas\r\n\r\nhttps://prnt.sc/m4puu0', '2019-01-09', '10:13:11', 'Y'),
(308, 764, 'LOKO003267', 'kapan update cms company profilnya biar jadi 100%', '2019-01-09', '21:27:12', 'Y'),
(309, 779, 'LOKO000001', 'saat ini kita masih fokus di framework CodeIgniter 3, dan sambil mempelajari CodeIgniter 4 yang kemungkinan besar akan rilis versi stable nya di tahun ini.', '2019-01-12', '21:31:58', 'Y'),
(310, 780, 'LOKO000001', 'halaman admin web sekolah ada di \r\n/administrator', '2019-01-16', '10:01:53', 'Y'),
(311, 774, 'LOKO000042', 'sudah ada solusi kah untuk pertanyaan ini pak ?', '2019-01-23', '18:16:32', 'Y'),
(312, 773, 'LOKO000920', 'up gan.. sundul gan.. hehe...\r\nsudah tahun 2019 nih juragan', '2019-01-28', '18:47:07', 'Y'),
(313, 783, 'LOKO000001', 'selama masih menggunakan PHP versi 5,6 seharusnya tidak jadi masalah pak.. kalau pakai versi diatasnya seperti PHP7 itu belum bisa, karena banyak sekali perubahan di PHP7 dan kita belum sempat untuk upgrade ke versi 7.', '2019-01-29', '18:02:55', 'Y'),
(314, 782, 'LOKO003629', 'iya, saya juga melihatnya begitu mas, terlalu kecil, baru nyari2 caranya buat resize lebih besar captcha-nya.\r\nAda lagi, saya juga masih kesulitan tentang error/bug kirim pesan melalui form melalui link Hubungi Kami, pesan yang di input/submit tidak pernah sampai. Apa yg perlu dioprek ya biar bisa sampai masuk pesannya?', '2019-02-07', '20:40:03', 'Y'),
(315, 780, 'LOKO002976', 'An uncaught Exception was encountered\r\nType: ArgumentCountError\r\n\r\nMessage: Too few arguments to function rss::__construct(), 0 passed in C:\\xampp\\htdocs\\sekolah\\system\\core\\Loader.php on line 1292 and exactly 1 expected\r\n\r\nFilename: C:\\xampp\\htdocs\\sekolah\\application\\libraries\\Rss.php\r\n\r\nLine Number: 5\r\n\r\nBacktrace:\r\n\r\nFile: C:\\xampp\\htdocs\\sekolah\\index.php\r\nLine: 294\r\nFunction: require_once', '2019-02-09', '08:27:14', 'Y'),
(316, 784, 'LOKO000001', 'ada di view -&gt; lokodesa -&gt; data_penduduk.php\r\nganti sql di baris 24 menjadi :\r\n$sql   = &quot;SELECT a.id_data_penduduk, b.no_kk, a.nama_lengkap, b.alamat, b.rt_rw FROM data_penduduk_detail as a INNER JOIN data_penduduk as b on a.id_data_penduduk = b.id_data_penduduk ORDER BY b.id_data_penduduk DESC&quot;;	\r\n	 ', '2019-02-09', '10:30:04', 'Y'),
(317, 784, 'LOKO003399', 'solved  ! terimakasih admin ', '2019-02-09', '10:41:01', 'Y'),
(318, 777, 'LOKO003719', 'tq gan\r\nSangat membantu untuk belajar', '2019-02-15', '21:28:18', 'Y'),
(319, 693, 'LOKO003708', 'Setuju min ayo godok sistem bersama sama', '2019-03-04', '22:44:15', 'Y'),
(320, 785, 'LOKO000001', 'Halo pak soni, untuk web tersebut pakai cms swarakalibata template simple news. diganti warnanya dari merah menjadi hijau. ', '2019-03-06', '17:16:56', 'Y'),
(321, 693, 'LOKO003899', 'Sistem Reporting, semacam manajemen project berdasarkan tiket eskalasi. kira2 itu bisa gak gan ?', '2019-03-09', '13:47:45', 'Y'),
(322, 693, 'LOKO003629', 'web portal informasi rumah sakit kayaknya belum ada ya?', '2019-03-14', '22:26:27', 'Y'),
(323, 693, 'LOKO003134', 'Bikin CMS Web Portal mas, nantinya bisa dikembangkan lagi dengan fitur template frontend yang bisa disesuaikan sesuai kebutuhan (web publikasi, blog, instansi dll)', '2019-03-16', '23:14:54', 'Y'),
(324, 788, 'LOKO000001', 'admin disini gan, maaf slow respon admin kemarin lagi kurang sehat.', '2019-03-20', '06:09:43', 'Y'),
(325, 787, 'LOKO000001', 'secara teknis, bisa dengan langsung mengcopy dari swarakalibata. Ada di bagian file view, detailberita.php\r\ncari bagian komentar, copy ke detailberita.php yg ada di dinas1', '2019-03-20', '06:12:23', 'Y'),
(326, 786, 'LOKO000001', 'sudah solved by remote ya. untuk berikutnya, akan admin update di projectnya.', '2019-03-20', '06:15:03', 'Y'),
(327, 788, 'LOKO003899', 'Nah, kalau ada info gini kan enak. Sip. Semoga lekas sembuh pak admin', '2019-03-23', '02:43:04', 'Y'),
(328, 786, 'LOKO003899', 'Ok. Sip. Mksh Pak admin', '2019-03-23', '02:43:58', 'Y'),
(329, 787, 'LOKO003899', 'Oke. Nnt saya coba. Hasilnya akan saya update.', '2019-03-23', '02:44:52', 'Y'),
(330, 789, 'LOKO000001', 'usahakan file yang diupload tidak lebih dari 2Mb. Lalu coba upload ulang menggunakan browser yang lain.', '2019-03-25', '17:09:31', 'Y'),
(331, 789, 'LOKO003746', 'Mas Yohan bisa bantuin saya buat header web nya?', '2019-03-31', '21:10:23', 'Y'),
(332, 789, 'LOKO000001', '@m.toga sudah solved ya by remote.', '2019-04-08', '12:04:23', 'Y'),
(333, 794, 'LOKO000001', '@leo, maaf untuk saat ini, kita belum menemukan solusinya. karena ada yg harus dikorbankan. jika mau hurufnya besar, maka tidak bisa menggunakan php 7.', '2019-04-08', '13:13:25', 'Y'),
(334, 793, 'LOKO000001', 'sudah solved by remote ya', '2019-04-08', '13:27:14', 'Y'),
(335, 790, 'LOKO000001', 'turunkan versi php ke versi 5,6', '2019-04-08', '13:30:53', 'Y'),
(336, 792, 'LOKO000001', 'caranya masuk ke path\r\nlocalhost/namafolder/administrator', '2019-04-08', '13:31:49', 'Y'),
(337, 794, 'LOKO003899', 'Oke. saya sudah ketemu caranya', '2019-04-15', '00:05:59', 'Y'),
(338, 795, 'LOKO003899', 'Solved pak admin. thanks', '2019-04-17', '03:38:15', 'Y'),
(339, 796, 'LOKO000001', 'silahkan cari contohnya yg sudah pakai, nanti kita coba pasang di swarakalibata', '2019-04-17', '19:25:01', 'Y'),
(340, 789, 'LOKO002851', 'Sudah,.. sy buat baru aja, hehe', '2019-04-18', '10:11:59', 'Y'),
(341, 796, 'LOKO003899', 'contohnya seperti pada website ini : www.aslimentawai.com', '2019-04-20', '23:37:24', 'Y'),
(342, 795, 'LOKO004160', 'kalau membalas pesan masuk bagaimana cara ubah pengirimnya menjadi nama kita, terima kasih', '2019-04-22', '10:15:22', 'Y'),
(343, 794, 'LOKO004332', 'lah solusinya ap mas @Leo Siribere??', '2019-05-07', '15:36:42', 'Y'),
(344, 792, 'LOKO004365', 'pasword aminnya apa min?', '2019-05-13', '09:15:21', 'Y'),
(345, 802, 'LOKO000001', 'web portal kampus masih menggunakan php versi 5,6 jadi jika masnya pakai xampp dengan php versi 7 keatas akan ada error atau malfungsi seperti itu.\r\nkedepannya kita akan kembangkan kembali untuk ke versi selanjutnya.', '2019-05-14', '14:36:03', 'Y'),
(346, 799, 'LOKO000001', 'hal tersebut karena ada perubahan pada kolom social network. Jika anda ingin mengosongkan kolom tersebut, silahkan ganti dengan #,#,#,#,#', '2019-05-14', '16:24:35', 'Y'),
(347, 775, 'LOKO004518', 'Table mu_user ga ada', '2019-06-12', '19:48:57', 'Y'),
(348, 775, 'LOKO004518', 'Error Number: 1146\r\n\r\nTable &#039;lokopos.mu_karyawan&#039; doesn&#039;t exist\r\n\r\nSELECT * FROM mu_karyawan where username=&#039;admin&#039; AND password=&#039;21232f297a57a5a743894a0e4a801fc3&#039;\r\n\r\nFilename: C:/xampp/htdocs/lokopos/application/models/Model_users.php\r\n\r\nLine Number: 4', '2019-06-12', '19:50:02', 'Y'),
(349, 804, 'LOKO000001', 'silahkan pakai swarakalibata CI saja gan, fitur sama dan lebih aman. untuk swarajalibata versi native 3.4 sudah tidak kita perbarui lagi.', '2019-06-20', '14:13:48', 'Y'),
(350, 805, 'LOKO000001', 'ada beberapa, salah satunya adalah swarakalibata ci', '2019-07-08', '13:51:16', 'Y'),
(351, 712, 'LOKO005004', 'Bagaimana nambah modul untuk di halaman web Template CMS company Swarakalibata CI ?\r\n #EdisiPuyeng muter - muter 1hari cari Script di bundel - Nya gak nemu help  :(  #MIN', '2019-07-11', '20:51:51', 'Y'),
(352, 806, 'LOKO000001', 'coba cek di setting versi php yang di pakai di cpanel..\r\nada kemungkinan &quot;GD&quot; tidak tercentang yang merupakan GD Library yang dipakai dalam script  libraries/Image_lib.php', '2019-07-20', '14:15:27', 'Y'),
(353, 801, 'LOKO000001', 'saat ini google translate api sudah tidak disupport lagi oleh google.\r\ntetapi untuk alternatif bisa pakai yang lain seperti http://free-website-translation.com', '2019-07-20', '14:36:23', 'Y'),
(354, 803, 'LOKO000001', 'link download ada di localhost/namafolder/download\r\nuntuk menampilkan link tersebut, tinggal tambahkan dari halaman admin, di bagian menu utama -&gt; menu website\r\n', '2019-07-20', '14:48:58', 'Y'),
(355, 712, 'LOKO000001', 'untuk tambah modul di halaman admin, bisa lewat controller-&gt;administrator.php\r\njangan lupa bagian view juga untuk tampilannya view-&gt;administrator -&gt;filemodulebaru.php', '2019-07-20', '14:51:10', 'Y'),
(356, 807, 'LOKO000001', 'langsung posting pertanyaannya aja disini gan..\r\nnanti admin jawab dipostingannya.', '2019-07-23', '09:06:22', 'Y'),
(357, 780, 'LOKO000001', 'yang ini sudah closed by remote\r\n\r\nmasalah karena ini file web sekolah yang lama tidak support php7. saat ini sudah support php 7 di file web sekolah yg baru.', '2019-07-23', '09:12:43', 'Y'),
(358, 809, 'LOKO000001', 'boleh tau, di hosting menggunakan php berapa? biar saya testing juga di hosting saya', '2019-07-23', '16:58:14', 'Y'),
(359, 809, 'LOKO000046', 'FYI, website yang digunakan lokodinas\r\n\r\nhosting di php 7.2.17', '2019-07-24', '12:59:40', 'Y'),
(360, 810, 'LOKO000001', 'ini error dimana? dan saat apa errornya?\r\n', '2019-07-25', '16:11:26', 'Y'),
(361, 810, 'LOKO005004', 'saat login mas, padahal CAPTA sudah bener, tapu udah saya fixkan mas. \r\n\r\noh ya mau nanya saat nambah modul untuk di administrator untuk :\r\n\r\n&quot;public function&quot; nya C:/xampp/htdocs/lokodinas/application/models/Model_app.php\r\n\r\nitu sesuai apa ya ? apa load dari database ?\r\n\r\ncontohnya sebagai berikut :\r\n\r\nError Number: 1146\r\n\r\nTable &#039;lokodinas.pemimpin&#039; doesn&#039;t exist\r\n\r\nSELECT * FROM `pemimpin` ORDER BY `id_pemimpin` DESC\r\n\r\nFilename: C:/xampp/htdocs/lokodinas/application/models/Model_app.php\r\n\r\nLine Number: 39\r\n\r\n---------- TOLONG DIBANTU MAS ------------------ TERIMAKASIH SEBELUMNYA -------------------------------\r\n\r\n\r\n', '2019-07-25', '16:21:36', 'Y'),
(362, 809, 'LOKO000001', 'gambar apa yang tidak bisa diupload? logo? berita? ', '2019-07-25', '16:23:30', 'Y'),
(363, 794, 'LOKO004742', 'tekan dan tahan tombol CTRL terus tekan tombol + (plus) pada keyboard 5 kali, hehehe', '2019-07-26', '10:22:57', 'Y'),
(364, 810, 'LOKO000001', 'model disini kita gunakan sebagai template pemanggilan data ke database. ada yg view saja, view join, view join where, dan lain2.', '2019-07-26', '13:41:08', 'Y'),
(365, 809, 'LOKO000046', 'semua gambar, bahkan kode captcha tidak muncul pada menu login administrator', '2019-07-26', '15:45:08', 'Y'),
(366, 810, 'LOKO005004', 'Siap Mas, terimakasih jawabannya sangat membantu, mau tanya sekalian nih mas, untuk menampilkan &quot;data dowload di halaman utama web&quot; kok error ya mas? di &quot;web lokodinas&quot; saya coba perbaiki gak nemu - nemu mas, tolong pencerahannya &quot;Terimakasih Sebelunnya Mas&quot;\r\n\r\nini Contoh Errornya NOTE ( ketika saya mau tampilkan di halaman utama di CMS lokodinas ) :\r\n\r\n\r\nDownload Area\r\nA PHP Error was encountered\r\n\r\nSeverity: Notice\r\n\r\nMessage: Undefined variable: download\r\n\r\nFilename: dinas-1/download.php\r\n\r\nLine Number: 22\r\n\r\nBacktrace:\r\n\r\nFile: C:\\xampp\\htdocs\\lokodinas\\application\\views\\dinas-1\\download.php\r\nLine: 22\r\nFunction: _error_handler\r\n\r\nFile: C:\\xampp\\htdocs\\lokodinas\\application\\views\\dinas-1\\content.php\r\nLine: 173\r\nFunction: include\r\n\r\nFile: C:\\xampp\\htdocs\\lokodinas\\application\\libraries\\Template.php\r\nLine: 16\r\nFunction: view\r\n\r\nFile: C:\\xampp\\htdocs\\lokodinas\\application\\controllers\\Main.php\r\nLine: 23\r\nFunction: load\r\n\r\nFile: C:\\xampp\\htdocs\\lokodinas\\index.php\r\nLine: 294\r\nFunction: require_once\r\n\r\nFatal error: Call to a member function result_array() on null in C:\\xampp\\htdocs\\lokodinas\\application\\views\\dinas-1\\download.php on line 22\r\nA PHP Error was encountered\r\n\r\nSeverity: Error\r\n\r\nMessage: Call to a member function result_array() on null\r\n\r\nFilename: dinas-1/download.php\r\n\r\nLine Number: 22\r\n\r\nBacktrace:\r\nNo 	Nama File 	Hits 	', '2019-07-29', '11:41:52', 'Y'),
(367, 812, 'LOKO000001', 'ini di project yang mana gan?', '2019-07-31', '15:50:23', 'Y'),
(368, 810, 'LOKO000001', 'halaman download ada di www.namaweb.com/download\r\ntinggal taruh saja link tersebut di menu yang diinginkan', '2019-07-31', '15:53:16', 'Y'),
(369, 811, 'LOKO000001', 'controller -&gt; administrator.php \r\ncari function tambah_download()\r\n*note = huruf besar dan kecil itu beda. secara defult ekstensi .pdf itu dibolehkan namun .PDF karena tidak dicantumkan maka tidak bisa.', '2019-07-31', '15:56:17', 'Y'),
(370, 812, 'LOKO005004', 'projek lokodinas Mas, sudah saya fix kan.\r\n\r\nshare skript dong mas, bagaimana menampilkan &quot;icon&quot; download sesuai &quot;file&quot; yang kita uplod. contohnya : upload .PDF, World, dll nanti icon sesuai dengan format file yg di upload mas.\r\n\r\nTerimakasih telah merespon ', '2019-07-31', '20:30:54', 'Y'),
(371, 812, 'LOKO000001', 'saya kasih logika aja ya. Nama filenya kan sudah tersimpan di database, panggil kolom nama file tersebut, cek 4 huruf terakhir jika .pdf maka tampilkan gambar icon pdf, jika .doc maka tampilkan gambar icon word, dan seterusnya. elseif tidak ketemu, cek 5 huruf terakhir jika .docx tampilkan gambar icon word, dan seterusnya. ', '2019-08-01', '10:30:38', 'Y'),
(372, 813, 'LOKO000001', 'folder controller ada di folder application-&gt; controllers\r\nfolder view halaman depan ada di application -&gt; views -&gt; dinas-1\r\nfolder view halaman admin ada di application -&gt; views -&gt; administrator', '2019-08-09', '08:19:11', 'Y'),
(373, 814, 'LOKO000001', 'untuk lokopos, pakai php versi 5,6', '2019-08-12', '21:52:18', 'Y'),
(374, 735, 'LOKO005343', 'Nyambung pertanyaan gan,, untuk loko kampus,\r\n\r\nSepertinya ada keliru pada script berita/kategori/.....\r\npada saat diklik judul berita pada kategori yang ada, bukannya terbuka beritanya, malah dibalik ke main,.... arah linknya kayaknya keliru gan,... mohon bantuannya gan...', '2019-08-14', '15:42:48', 'Y'),
(375, 735, 'LOKO000001', '@mas ardi, siap gan segera ditindaklanjuti', '2019-08-16', '13:30:29', 'Y'),
(376, 815, 'LOKO000001', 'web instansi template kementrian agama, saat ini baru support php 5,6\r\nissue ini segera ditindaklanjuti, agar bisa juga dipakai di php 7 keatas. ', '2019-08-18', '09:45:47', 'Y'),
(377, 818, 'LOKO000001', 'siakad belum support php7. baru bisa pakai php 5,6', '2019-09-04', '09:24:17', 'Y'),
(378, 819, 'LOKO004771', 'ternyata saya salah memasukkan script, semula hanya langsung saya copy total dari google map nya, ternyata tidak seperti itu, ada beberapa yang harus ditinggalkan. dan sekrang sdh oke', '2019-09-05', '21:35:36', 'Y'),
(379, 819, 'LOKO000001', 'oke, mantap..........', '2019-09-15', '22:01:13', 'Y'),
(380, 821, 'LOKO000001', 'ada kemungkinan versi MySQL yg digunakan sudah versi lama. \r\nCoba pakai xampp dengan versi minimal php 5,6 atau diatasnya. \r\njika di hosting, minta upgrade versi MySQL ke pihak hosting ', '2019-09-22', '16:21:11', 'Y'),
(381, 822, 'LOKO000001', 'username dan password rata2 source code\r\nusername : admin  password: admin\r\natau\r\nusername : admin  password: admin123', '2019-09-28', '04:35:16', 'Y'),
(382, 823, 'LOKO000001', 'masuk ke folder application-&gt;views-&gt;administrator-&gt;mod_berita-&gt;view_berita.php\r\ntambahkan &lt;th&gt;hits&lt;/th&gt;  setelah &lt;th&gt;tanggal&lt;/th&gt;\r\nlalu tambahkan &lt;td&gt;row[dibaca]&lt;/td&gt; setelah &lt;td&gt;$tgl_posting&lt;/td&gt;\r\n\r\n', '2019-10-04', '11:02:44', 'Y'),
(383, 823, 'LOKO005713', 'terima kasih telah membalas, tapi juamlah angka tidak muncul pada kolom hits yang muncul &quot; row[dibaca]&quot;', '2019-10-09', '12:02:30', 'Y'),
(384, 823, 'LOKO005713', 'dan ini sangat penting mas, saya posting berita tanggal 8 oktober, terus saya buka berita yang saya posting pada tgl 8 itu di tanggal 12 oktober, tanggalnya jgo ikut berubah menjadi 12 oktober padahal itu berita tgl 8 oktober', '2019-10-10', '08:38:15', 'Y'),
(385, 826, 'LOKO000001', 'maaf mas @hariyono, disini tidak membahas diluar dari source code yang ada di member area.', '2019-10-23', '14:15:04', 'Y'),
(386, 827, 'LOKO000001', 'baik, saya cek dulu ya', '2019-10-24', '11:03:03', 'Y'),
(387, 827, 'LOKO000001', 'sudah ada revisi dari saya. Coba di cek kembali', '2019-10-24', '14:26:27', 'Y'),
(388, 825, 'LOKO000001', 'silahkan upgrade ke premium members untuk bisa mendapat support dari kami. btw, anda dapat filenya darimana ya? hmm..', '2019-10-24', '14:28:31', 'Y'),
(389, 824, 'LOKO000001', 'mohon sertakan link screenshoot errornya', '2019-10-24', '14:29:12', 'Y'),
(390, 827, 'LOKO005311', ' saya coba menggunakan xampp terbaru, masih error di bagian registrasi, selesai belanja dan ordernya mas. serta bagian kategori blognya', '2019-10-24', '15:45:55', 'Y'),
(391, 820, 'LOKO000001', 'saya sarankan untuk tidak membuat log aktifitas seperti ini, karena akan memberatkan database.\r\nkecuali dengan membatasi data yang dicatat misalkan hanya 10 aktifitas terakhir, dan aktifitas yang lebih lama dari itu dihapus dari database.', '2019-10-24', '17:29:23', 'Y'),
(392, 827, 'LOKO005311', 'Selain itu, kenapa bagian bawah(footer)-nya jadi hilang, mas?', '2019-10-25', '10:11:32', 'Y'),
(393, 828, 'LOKO000001', 'query data yang ditampilkan pakai kondisi, where userid = $this-&gt;session-&gt;userid', '2019-10-27', '23:50:26', 'Y'),
(394, 830, 'LOKO000001', 'ini di localhost? pakai xampp atau bukan?', '2019-11-08', '09:49:09', 'Y'),
(395, 814, 'LOKO006262', 'katanya sudah diupdate ke versi php 7 tapi kok masih ada tulisan error ya?\r\nA Php error was encountered\r\nFilename : helpers/cek_helper.php\r\nline 172\r\n\r\nbacktrace\r\nfile: lokopos/index.php\r\nline 294\r\nfunction require_once', '2019-11-09', '22:17:52', 'Y'),
(396, 814, 'LOKO000001', 'silahkan di download kembali, file sudah diperbaiki (10/11/2019)', '2019-11-10', '05:12:29', 'Y'),
(397, 833, 'LOKO000001', 'ini untuk project yang mana mas deni? folder apa yang diganti nama?', '2019-11-14', '14:31:28', 'Y'),
(398, 832, 'LOKO000001', 'Setau saya, akses folder tidak bisa berubah begitu saja. Pasti ada yang merubah, atau pengaturan di cpanel yang menyebabkan permissionnya berubah.\r\n\r\nSolusi yang paling mudah, backup/download semua file dan foldernya, hapus isi file dan folder di public_html tersebut, lalu upload kembali. secara default permission folder dan file yang diupload tadi adalah 755 dan 644. Bila bukan, silahkan tanya ke pihak penyedia hosting.', '2019-11-14', '15:02:10', 'Y'),
(399, 832, 'LOKO001057', 'Baik.. terimakasih kang', '2019-11-14', '16:43:12', 'Y'),
(400, 834, 'LOKO006336', 'Sudah ketemu, ternyata gara-gara saya ubah nama user admin', '2019-11-16', '05:53:11', 'Y'),
(401, 836, 'LOKO005918', 'username : admin\r\npassword : admin123', '2019-11-21', '18:40:03', 'Y'),
(402, 837, 'LOKO005918', 'Ku sabab euweuh nu daek ngajawab, jadi saya jawab sendiri: setting css menu nya di file css skin/default.css gan', '2019-11-23', '16:31:12', 'Y'),
(403, 837, 'LOKO006428', 'punya paswordnya g kang ', '2019-11-25', '16:30:55', 'Y'),
(404, 837, 'LOKO006336', 'user admin\r\npassword admin123', '2019-11-28', '12:17:18', 'Y'),
(405, 839, 'LOKO000001', 'semua template swarakalibata sudah tersedia di dalam CMS Swarakalibata V2 itu sendiri, jadi tinggal switch saja lewat halaman admin', '2019-12-10', '10:50:06', 'Y'),
(406, 840, 'LOKO000001', 'coba template yang lain, apakah masih error? jika di template lain tidak error, berarti ada settingan yang kurang tepat pada template yang error', '2019-12-11', '16:33:45', 'Y'),
(407, 838, 'LOKO000001', 'halo, terimakasih infonya, akan kita perbaiki di update selanjutnya', '2019-12-11', '16:36:50', 'Y'),
(408, 840, 'LOKO005452', 'template yg lain normal, hanya template (NewsMag) aja yg error. itupun hanya tombol share Facebook aja share button yg lain normal. Kira2 detail settingan di bagian mana ya..?? atau yg berkaitan biar bisa saya cek konfigurasinya.. makasih min..', '2019-12-14', '13:20:52', 'Y'),
(409, 841, 'LOKO000001', 'link psb ada di localhost/namafolder/psb', '2019-12-16', '11:27:23', 'Y'),
(410, 835, 'LOKO000001', 'username : admin\r\n\r\npassword : admin123', '2019-12-16', '11:28:11', 'Y'),
(411, 822, 'LOKO003453', 'lokopos error:\r\n1. laporan/keuangan\r\n2. laporan/penjualan/penjualan per barang\r\n3. laporan/pembelian/pembelian per barang\r\nmasih banyak error', '2019-12-18', '23:45:32', 'Y'),
(412, 836, 'LOKO003453', 'cara masuk login admin bagaimana', '2019-12-19', '00:14:10', 'Y'),
(413, 835, 'LOKO003453', 'login admin bagaimana?', '2019-12-19', '00:15:20', 'Y'),
(414, 842, 'LOKO003453', 'login admin nya bagaimana?', '2019-12-19', '00:16:15', 'Y'),
(415, 842, 'LOKO006588', 'Logo portal kampus dan nama kampus cara ubahnya bisa langsung dari admin nggak?', '2019-12-19', '04:46:14', 'Y'),
(416, 824, 'LOKO006588', 'Trouble sama hanya muncul bar warna hijau saja. Saya mau sertakan screenshoot tp tidak ada opsi attachment di kolom komentar ini', '2019-12-19', '12:22:38', 'Y'),
(417, 821, 'LOKO006588', 'Login admin sekolahci_v2 apa username dan passwordnya...?', '2019-12-20', '17:05:08', 'Y'),
(418, 843, 'LOKO000001', 'Coba clear cache browser ', '2019-12-22', '09:32:13', 'Y'),
(419, 821, 'LOKO000001', 'username : admin\r\npassword : admin atau admin123\r\n', '2019-12-22', '09:34:20', 'Y'),
(420, 821, 'LOKO006588', 'Kalau cara login kepala sekolah dan user lain selain admin linknya gimana? nggak bisa pakai localhost/sekolah/login\r\n\r\n', '2019-12-23', '10:22:48', 'Y'),
(421, 845, 'LOKO000001', 'secara tampilan, persis sama dengan swarakalibata v2, secara sistem lebih baik v2 karena menggunakan versi codeigniter terbaru dan juga dengan perbaikan beberapa bug.', '2019-12-26', '14:26:46', 'Y'),
(422, 837, 'LOKO006446', 'sama gan saya sudah rubah di  file template /css/ Default.css : 3531 \r\nsetelah saya rubah warnaa nya tidak berubah ,, ada solusi lain gan .\r\n\r\n@media (min-width: 992px)\r\nhtml #header .header-nav-bar-primary {\r\n    background: #0c0c0c !important;   &lt;---------- didisini masalah saya\r\n    color: #FFF !important;', '2019-12-29', '19:01:26', 'Y'),
(423, 837, 'LOKO000001', '@dodisetiawan jangan lupa clear cache browsernya', '2020-01-02', '09:42:49', 'Y'),
(424, 846, 'LOKO000001', '@ein bakumaru, menu profil mana yang dimaksud? ', '2020-01-02', '09:44:57', 'Y'),
(425, 847, 'LOKO000001', 'untuk opensid, tidak bisa dirubah. menurut kesepakatan pengembang opensid, masing - masing group sudah ditentukan menunya.', '2020-01-10', '16:02:32', 'Y'),
(426, 848, 'LOKO000001', 'untuk print lewat printer thermal saya belum pernah coba langsung, tetapi seharusnya bisa support di semua jenis printer.\r\nUntuk direct print, lokopos ini belum direct print.', '2020-01-10', '16:16:39', 'Y'),
(427, 850, 'LOKO000001', 'coba clear cache browser, atau coba di browser yang lain', '2020-01-22', '16:37:04', 'Y'),
(428, 849, 'LOKO000001', 'setiap tabel sudah memiliki id sendiri sebagai primarykey. Mungkin bisa tampilkan itu sajadi viewnya.', '2020-01-24', '10:52:11', 'Y'),
(429, 851, 'LOKO000001', 'ini pakai xampp dengan php versi berapa ya?\r\nuntuk lokodinas bisa digunakan di php versi 5.6, 7.2, 7.3\r\nuntuk diluar versi tersebut, belum dicoba. silahkan gunakan versi xampp diatas', '2020-01-28', '08:28:16', 'Y'),
(430, 851, 'LOKO006811', 'Saya menggunakan ApacheFriends XAMPP Version 7.4.1\r\nApache 2.4.41\r\nMariaDB 10.4.11\r\nPHP 7.4.1 (VC15 X86 64bit thread safe) + PEAR\r\nphpMyAdmin 4.9.2\r\nXAMPP Control Panel Version 3.2.4.', '2020-01-28', '21:01:01', 'Y'),
(431, 851, 'LOKO000001', 'buka folder application-&gt;views-&gt;administrator-&gt;mod_menu-&gt;view_menu.php\r\ndi baris ke 26\r\n if ($cmenu[&#039;id_parent&#039;]==&#039;&#039;){ $menu = &#039;Menu Utama&#039;; }else{ $menu = $cmenu[&#039;nama_menu&#039;]; }\r\nganti dengan\r\n if (!isset($cmenu[&#039;id_parent&#039;])){ $menu = &#039;Menu Utama&#039;; }else{ $menu = $cmenu[&#039;nama_menu&#039;]; }', '2020-01-31', '17:09:23', 'Y'),
(432, 852, 'LOKO000001', 'kalau sebelunya berhasil install, coba diinstall kembali dari awal pasti berhasil. \r\nJika tidak berhasil, maka ada yang anda rubah dari pengaturan cpanel.', '2020-02-03', '19:12:41', 'Y'),
(433, 841, 'LOKO005186', 'cara ngerubah ini dimana gan? https://prnt.sc/qyivgi', '2020-02-06', '23:03:42', 'Y'),
(434, 853, 'LOKO000001', 'saat ini belum ada. kalau mau buat baru / custom web bisa hubungi WA saya.', '2020-02-07', '20:25:53', 'Y'),
(435, 853, 'LOKO006874', 'berapakah estimasi biaya nya pak', '2020-02-09', '11:07:36', 'Y'),
(436, 857, 'LOKO004198', 'ok g jd nanya..sudah ok webnya...admin kok g bisa didelete pertanyaan saya?', '2020-02-17', '17:17:59', 'Y'),
(437, 856, 'LOKO000001', 'setiap error, selalu saya tanyakan terlebih dahulu. versi php yang digunakan versi berapa?\r\npastikan gunakan versi php 5,6 atau 7,2 atau 7,3\r\ndiluar versi tersebut kemungkinan besar belum bisa.', '2020-02-18', '15:18:42', 'Y'),
(438, 855, 'LOKO000001', 'halaman admin ada di localhost/namafolder/administrator', '2020-02-18', '15:19:31', 'Y'),
(439, 854, 'LOKO000001', 'ubah di bagian controller. rename Berita.php menjadi Artikel.php\r\n\r\nganti juga isinya,\r\nclass Berita extends CI_Controller {\r\nubah jadi\r\nclass Artiekel extends CI_Controller {\r\n\r\nuntuk ganti detail menjadi selengkapnya, ubah\r\npublic function detail(){\r\nmenjadi\r\npublic function selengkapnya(){', '2020-02-18', '15:21:56', 'Y'),
(440, 856, 'LOKO006920', 'masih eroryang sama, sa pakai php 7,3', '2020-02-19', '23:32:49', 'Y'),
(441, 852, 'LOKO006920', 'sudah di instal kembali tetap sama, ini baru jalan di localhost. bagaimana pengaturan cpanelx?', '2020-02-25', '08:41:46', 'Y'),
(442, 856, 'LOKO006920', '\r\n\r\nMembers\r\nmasih eroryang sama, sa pakai php 7,2', '2020-02-26', '07:15:22', 'Y'),
(443, 858, 'LOKO000001', 'ini pakai php versi berapa?', '2020-02-26', '16:37:37', 'Y'),
(444, 856, 'LOKO000001', 'error ini saat apa / saat masuk ke halaman mana?', '2020-02-28', '11:18:43', 'Y'),
(445, 858, 'LOKO006920', 'versi 7,2 u versi phpnya, eror muncul menu profil dan halaman admin edit profil', '2020-03-01', '21:12:34', 'Y'),
(446, 861, 'LOKO000001', 'saat ini web portal desa masih menggunakan PHP 5,6. dan saat ini masih dalam pengembangan untuk dapat digunakan di PHP 7', '2020-03-02', '11:11:33', 'Y'),
(447, 776, 'LOKO007197', 'cara penggunaan siakad gimana yah . . . .', '2020-03-12', '21:05:50', 'Y'),
(448, 856, 'LOKO005186', 'untuk info username dan password panel adminnya apa min?', '2020-03-18', '23:07:04', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `komentarvid`
--

CREATE TABLE `komentarvid` (
  `id_komentar` int(5) NOT NULL,
  `id_video` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id_logo` int(5) NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id_logo`, `gambar`) VALUES
(15, 'ruangcodinglogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `id_parent` int(5) NOT NULL DEFAULT 0,
  `nama_menu` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `position` enum('Top','Bottom') DEFAULT 'Bottom',
  `urutan` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES
(9, 8, 'Hukum', 'kategori/detail/hukum', 'Ya', 'Bottom', 0),
(8, 0, 'Nasional', '#', 'Ya', 'Bottom', 3),
(7, 0, 'Home Page', 'main', 'Ya', 'Bottom', 1),
(11, 8, 'Politik', 'kategori/detail/politik', 'Ya', 'Bottom', 0),
(12, 8, 'Ekonomi', 'kategori/detail/ekonomi', 'Ya', 'Bottom', 0),
(13, 0, 'Internasional', 'kategori/detail/internasional', 'Ya', 'Bottom', 4),
(14, 8, 'Teknologi', 'kategori/detail/teknologi', 'Ya', 'Bottom', 5),
(18, 0, 'Koleksi Video', 'playlist', 'Ya', 'Bottom', 6),
(19, 0, 'Berita Foto', 'albums', 'Ya', 'Bottom', 7),
(21, 0, 'Dunia Islam', 'kategori/detail/dunia-islam', 'Tidak', 'Bottom', 11),
(22, 39, 'Kuliner', 'kategori/detail/kuliner', 'Ya', 'Bottom', 0),
(109, 8, 'Ham', '#', 'Ya', 'Bottom', 0),
(40, 39, 'Kesehatan', 'kategori/detail/kesehatan', 'Ya', 'Bottom', 0),
(39, 0, 'Lainnya', '', 'Ya', 'Bottom', 12),
(110, 8, 'Kemiskinan', '#', 'Ya', 'Bottom', 0),
(111, 8, 'Koruptor', '#', 'Ya', 'Bottom', 0),
(112, 22, 'Dalam Negeri', '#', 'Ya', 'Bottom', 0),
(113, 0, 'Tentang Kami', 'halaman/detail/tentang-kami', 'Ya', 'Top', 2),
(115, 0, 'Alamat Kami', 'halaman/detail/alamat-perusahaan', 'Ya', 'Top', 3),
(116, 0, 'Hubungi Kami', 'hubungi', 'Ya', 'Top', 4),
(117, 0, 'Download Area', 'download', 'Ya', 'Bottom', 8),
(118, 0, 'Semua Agenda', 'agenda', 'Ya', 'Bottom', 9),
(119, 0, 'Index Berita', 'berita/indeks_berita', 'Ya', 'Top', 1),
(120, 8, 'Tutorial', 'kategori/detail/seni--budaya', 'Ya', 'Bottom', 0),
(121, 0, 'Konsultasi', 'konsultasi', 'Ya', 'Bottom', 11),
(126, 22, 'Luar Negeri', '#', 'Ya', 'Bottom', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `static_content` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `username`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', 'admin', 'manajemenuser', '', '', 'Y', 'user', 'Y', 0, ''),
(18, 'Berita', 'admin', 'listberita', '', '', 'Y', 'user', 'Y', 0, ''),
(71, 'Background Website', 'admin', 'background', '', '', 'N', 'admin', 'N', 0, ''),
(10, 'Manajemen Modul', 'admin', 'manajemenmodul', '', '', 'Y', 'user', 'Y', 0, ''),
(31, 'Kategori Berita ', 'admin', 'kategorikategori', '', '', 'Y', 'user', 'Y', 0, ''),
(33, 'Jajak Pendapat', 'admin', 'jajakpendapat', '', '', 'Y', 'user', 'Y', 0, ''),
(34, 'Tag Berita', 'admin', 'tagberita', '', '', 'Y', 'user', 'Y', 0, ''),
(35, 'Komentar Berita', 'admin', 'komentarberita', '', '', 'Y', 'user', 'Y', 0, ''),
(41, 'Agenda', 'admin', 'agenda', '', '', 'Y', 'user', 'Y', 0, ''),
(43, 'Berita Foto', 'admin', 'album', '', '', 'Y', 'user', 'Y', 0, ''),
(44, 'Galeri Berita Foto', 'admin', 'gallery', '', '', 'Y', 'user', 'Y', 0, ''),
(45, 'Template Website', 'admin', 'templatewebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(46, 'Sensor Kata', 'admin', 'sensorkomentar', '', '', 'Y', 'user', 'Y', 0, ''),
(61, 'Identitas Website', 'admin', 'identitaswebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(57, 'Menu Website', 'admin', 'menuwebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(59, 'Halaman Baru', 'admin', 'halamanbaru', '', '', 'Y', 'user', 'Y', 0, ''),
(62, 'Video', 'admin', 'video', '', '', 'Y', 'user', 'Y', 0, ''),
(63, 'Playlist Video', 'admin', 'playlist', '', '', 'Y', 'user', 'Y', 0, ''),
(64, 'Tag Video', 'admin', 'tagvideo', '', '', 'Y', 'user', 'Y', 0, ''),
(65, 'Komentar Video', 'admin', 'komentarvideo', '', '', 'Y', 'user', 'Y', 0, ''),
(66, 'Logo Website', 'admin', 'logowebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(67, 'Iklan Sidebar', 'admin', 'iklansidebar', '', '', 'N', 'admin', 'N', 0, ''),
(68, 'Iklan Home', 'admin', 'iklanhome', '', '', 'N', 'admin', 'N', 0, ''),
(69, 'Iklan Atas', 'admin', 'iklanatas', '', '', 'N', 'admin', 'N', 0, ''),
(70, 'Pesan Masuk', 'admin', 'pesanmasuk', '', '', 'Y', 'user', 'Y', 0, ''),
(72, 'Sekilas Info', 'admin', 'sekilasinfo', '', '', 'N', 'admin', 'N', 0, ''),
(73, 'Yahoo Messanger', 'admin', 'ym', '', '', 'N', 'admin', 'N', 0, ''),
(74, 'Download Area', 'admin', 'download', '', '', 'Y', 'admin', 'Y', 0, ''),
(75, 'Alamat Kontak', 'admin', 'alamat', '', '', 'Y', 'admin', 'Y', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mod_alamat`
--

CREATE TABLE `mod_alamat` (
  `id_alamat` int(5) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mod_alamat`
--

INSERT INTO `mod_alamat` (`id_alamat`, `alamat`) VALUES
(1, '<h2><span style=\"color:#000000\">Mengapa menghubungi kami ?</span></h2>\r\n\r\n<p>Kami memiliki komitmen untuk memberikan layanan terbaik kepada Anda dan selalu berusaha untuk menyediakan produk dan layanan terbaik yang Anda butuhkan. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami, Anda dapat menyampaikan kritik dan saran Anda kepada kami. Kami akan menidaklanjuti masukan yang Anda berikan dan bila perlu mengambil tindakan untuk mencegah masalah yang sama terulang kembali.</p>\r\n\r\n<h2>Hubungi kami segera ?</h2>\r\n\r\n<p>Silahkan menghubungi kami melalui private message melalui form yang berada pada bagian kanan halaman ini. Kritik dan saran Anda sangat penting bagi kami untuk terus meningkatkan kualitas produk dan layanan yang kami berikan kepada Anda.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pasangiklan`
--

CREATE TABLE `pasangiklan` (
  `id_pasangiklan` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pasangiklan`
--

INSERT INTO `pasangiklan` (`id_pasangiklan`, `judul`, `username`, `url`, `gambar`, `tgl_posting`) VALUES
(2, 'Dewaweb', 'LOKO000001', 'https://www.dewaweb.com/aff.php?aff=26694', 'dewaweb-banner-logo-2-03.png', '2019-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(5) NOT NULL,
  `username` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `penerima` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi_pesan` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(5) NOT NULL,
  `jdl_playlist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `playlist_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_playlist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `level` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT 'Free',
  `detail_playlist` text COLLATE latin1_general_ci DEFAULT NULL,
  `tagvid` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `jdl_playlist`, `username`, `playlist_seo`, `gbr_playlist`, `aktif`, `level`, `detail_playlist`, `tagvid`) VALUES
(61, 'Belajar CSS Dasar', 'LOKO000001', 'belajar-css-dasar', 'CSS_dasar.jpg', 'Y', 'Free', 'Pada kelas ini kita akan beajar mengenai dasar - dasar CSS, cara penulisan CSS, dan implementasi CSS pada HTML.', 'html5'),
(60, 'Belajar HTML Dasar', 'LOKO000001', 'belajar-html-dasar', 'HTML_dasar1.jpg', 'Y', 'Free', 'Dalam course ini kamu akan belajar memahami dasar - dasar HTML5.', 'html5'),
(62, 'Belajar CodeIgniter 3', 'LOKO000001', 'belajar-codeigniter-3', 'Menguasai_Framework_CodeIgniter1.jpg', 'Y', 'Premium', 'Dalam course ini kamu akan belajar memahami dan menggunakan framework CodeIgniter.', 'codeigniter'),
(63, 'Belajar Laravel', 'LOKO000001', 'belajar-laravel', 'Dasar-dasar_Framework_Laravel_6.jpg', 'Y', 'Premium', 'Dalam course ini kamu akan belajar memahami dan menggunakan framework Laravelz.', 'laravel'),
(64, 'Membuat Aplikasi Presensi Android Berbasis Lokasi', 'LOKO000001', 'membuat-aplikasi-presensi-android-berbasis-lokasi', 'presentasi_android_studio.jpg', 'Y', 'Free', NULL, 'android'),
(65, 'Belajar Cepat Vue.js', 'LOKO000001', 'belajar-cepat-vuejs', 'cover-belajar-vuejs.jpg', 'Y', 'Premium', 'Dalam course ini kamu akan belajar memahami dan menggunakan framework JavaScript Vue.js', 'vue'),
(66, 'Membuat Web Kuliner Menggunakan React.js', 'LOKO000001', 'membuat-web-kuliner-menggunakan-reactjs', 'kuliner_react.jpg', 'Y', 'Premium', 'Studi kasus langkah demi langkah dalam mebuat aplikasi web kuliner menggunakan framework React JS', 'react'),
(67, 'Belajar JavaScript Dasar', 'LOKO000001', 'belajar-javascript-dasar', 'kelas-dasar-javascript.jpg', 'Y', 'Free', 'Panduan untuk mempelajari dasar-dasar pemrograman JavaScript dalam pemrograman web', 'javascript');

-- --------------------------------------------------------

--
-- Table structure for table `poling`
--

CREATE TABLE `poling` (
  `id_poling` int(5) NOT NULL,
  `pilihan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `rating` int(5) NOT NULL DEFAULT 0,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `poling`
--

INSERT INTO `poling` (`id_poling`, `pilihan`, `status`, `username`, `rating`, `aktif`) VALUES
(18, 'Siapa yang layak jadi juara Liga Champions 2017-2018 ', 'Pertanyaan', 'admin', 0, 'Y'),
(25, 'Real Madrid', 'Jawaban', 'admin', 25, 'Y'),
(31, 'Juventus', 'Jawaban', 'admin', 1, 'Y'),
(32, 'Manchester City', 'Jawaban', 'admin', 5, 'Y'),
(33, 'Paris Saint Germain', 'Jawaban', 'admin', 10, 'Y'),
(35, 'Manchester United', 'Jawaban', 'admin', 6, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `id_harga` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(20) DEFAULT NULL,
  `diskon` enum('Y','N') NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `jum_diskon` int(11) DEFAULT NULL,
  `nett` int(11) NOT NULL,
  `jum_bulan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`id_harga`, `harga`, `deskripsi`, `diskon`, `aktif`, `jum_diskon`, `nett`, `jum_bulan`) VALUES
(1, 300000, '1 bulan', 'N', 'Y', 0, 300000, 1),
(10, 500000, '6 bulan', 'N', 'Y', 0, 500000, 6),
(4, 1000000, '1 tahun', 'Y', 'Y', 250000, 750000, 12),
(5, 2000000, '2 tahun', 'Y', 'Y', 500000, 1500000, 24),
(9, 3000000, 'Permanen', 'N', 'Y', 0, 3000000, 9999);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sub_judul` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` int(1) NOT NULL DEFAULT 0,
  `free` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `utama` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_project` longtext CHARACTER SET latin1 NOT NULL,
  `keterangan_gambar` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `linkdownload` varchar(150) COLLATE latin1_general_ci DEFAULT NULL,
  `linkdemo` varchar(150) COLLATE latin1_general_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekilasinfo`
--

CREATE TABLE `sekilasinfo` (
  `id_sekilas` int(5) NOT NULL,
  `info` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `sekilasinfo`
--

INSERT INTO `sekilasinfo` (`id_sekilas`, `info`, `tgl_posting`, `gambar`, `aktif`) VALUES
(1, 'Anak yang mengalami gangguan tidur, cenderung memakai obat2an dan alkohol berlebih saat dewasa.', '2015-04-11', '', 'Y'),
(2, 'WHO merilis, 30 persen anak di dunia kecanduan komputer dan menonton televisi.', '2015-03-16', '', 'Y'),
(3, 'Menurut peneliti di Detroit, orang yang selalu tersenyum lebar cenderung hidup lama.', '2015-04-17', '', 'Y'),
(4, 'Menurut United Stated Trade Representatives, 25% obat yang beredar di adalah palsu.', '2015-04-17', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2020-07-21', 1, '1595287939');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `username`, `tag_seo`, `count`) VALUES
(22, 'Hiburan', '', 'hiburan', 19),
(28, 'Teknologi', '', 'teknologi', 12),
(27, 'Metropolitan', '', 'metropolitan', 32),
(26, 'Nasional', '', 'nasional', 42),
(25, 'Kesehatan', '', 'kesehatan', 16),
(24, 'Olahraga', '', 'olahraga', 11),
(34, 'Wisata', '', 'wisata', 4),
(36, 'Hukum', '', 'hukum', 16),
(37, 'Film', '', 'film', 25),
(40, 'Internasional', '', 'internasional', 28),
(41, 'Bola', '', 'bola', 21),
(43, 'Selebritis', '', 'selebritis', 9),
(49, 'Palestina', 'admin', 'palestina', 6),
(50, 'Israel', 'admin', 'israel', 3),
(51, 'Yahudi', 'admin', 'yahudi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tagvid`
--

CREATE TABLE `tagvid` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tagvid`
--

INSERT INTO `tagvid` (`id_tag`, `nama_tag`, `username`, `tag_seo`, `count`, `gambar`) VALUES
(1, 'PHP', 'LOKO000001', 'php', 2, 'php.jpg'),
(2, 'CodeIgniter', 'LOKO000001', 'codeigniter', 0, 'codeigniter.jpg'),
(3, 'Laravel', 'LOKO000001', 'laravel', 1, 'laravel.jpg'),
(4, 'HTML5', 'LOKO000001', 'html5', 0, 'html51.jpg'),
(5, 'MySQL', 'LOKO000001', 'mysql', 0, 'mysql.jpg'),
(6, 'React', 'LOKO000001', 'react', 0, 'react.jpg'),
(7, 'Android', 'LOKO000001', 'android', 0, 'android.jpg'),
(8, 'Vue', 'LOKO000001', 'vue', 0, 'vue.jpg'),
(9, 'Javascript', 'LOKO000001', 'javascript', 0, 'javascript.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_komentar` int(5) NOT NULL,
  `reply` int(5) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `alamat_email` varchar(150) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `jam_komentar` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id_komentar`, `reply`, `nama_lengkap`, `alamat_email`, `isi_pesan`, `tanggal_komentar`, `jam_komentar`) VALUES
(1, 0, 'Admin Lokomedia', 'dankrez48@gmail.com', 'Perubahan UUD 1945 yang membawa perubahan mendasar mengenai penyelengaraan kekuasaan kehakiman, membuat perlunya dilakukan perubahan secara komprehensif mengenai Undang-Undang Ketentuan-ketentuan Pokok Kekuasaan Kehakiman.								', '2014-11-19', '00:00:00'),
(2, 1, 'si anu', 'anu@gmail.com', 'Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-19', '00:00:00'),
(3, 0, 'Rio Saputra', 'rio.saputra@gmail.com', 'Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut. Perubahan UUD 1945 yang membawa perubahan mendasar mengenai penyelengaraan kekuasaan kehakiman.								', '2014-11-21', '00:00:00'),
(4, 1, 'Anggun Pratiwi', 'angun@gmail.com', 'itu benar bro, kalau ndak pacayo tanyo lah ka baruak.Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-21', '00:00:00'),
(5, 3, 'Dewi Safitri', 'dewi.safitri@gmail.com', 'Oii, ang kareh bana mah, den ambuang ang ka lauik beko,.. Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-21', '00:00:00'),
(6, 0, 'Ahmad Hunaldi', 'ahmad@gmail.com', 'badan-badan peradilan penyelenggara kekuasaan kehakiman, asas-asas penyelengaraan kekuasaan kehakiman Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.								', '2014-11-21', '00:00:00'),
(7, 6, 'Prasmana Enru', 'prasmana@gmail.com', 'Undang-Undang Ketentuan-ketentuan Pokok Kekuasaan	Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-21', '00:00:00'),
(9, 3, 'Admin Lokomedia', 'dankrez48@gmail.com', 'Untuk itulah penulis memberikan solusi menggunakan program Dreamweaver,.. Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2015-01-22', '00:00:00'),
(14, 0, 'Udin Sedunia', 'udin.sedubia@gmail.com', 'Perlahan tapi pasti, sosok TM yang merupakan artis dan berprofesi sebagai Pekerja Seks Komersial (PSK) akhirnya mulai terungkap Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2015-05-29', '00:54:31'),
(15, 6, 'Admin Lokomedia', 'dankrez48@gmail.com', 'Perlahan tapi pasti, sosok TM yang merupakan artis dan berprofesi sebagai Pekerja Seks Komersial (PSK) akhirnya mulai terungkap Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2015-05-29', '00:59:50'),
(17, 3, 'hari ke 2', 'hay.smart,solusindo@gmail.com', 'Tesssss', '2015-05-29', '05:41:12'),
(19, 14, 'Admin Lokomedia', 'dankrez48@gmail.com', 'Testing untuk Berikan jawaban,....', '2015-06-01', '15:44:10'),
(20, 0, 'Dewiit Safitri', 'dewiit.safitri@gmail.com', 'I absolutely love image or text sliders written using pure css code. Likewise, i always hated slow loading sliders using jquery or javascript to use in my wordpress themes or html websites. I have compiled some cool css sliders from codepen/github for use in your website or in themes, many are responsive too. A word of advise: Please make sure to test all sliders in Safari, Chrome and FF before deployment.', '2017-01-24', '16:27:59'),
(23, 20, 'Admin Lokomedia', 'dankrez48@gmail.com', 'I spent almost a day searching for this. And found &#039;CSS3 Thumbnail Slider&#039; on this site. Thanks a lot. If the slideIndex is higher than the number of elements (x.length), the slideIndex is set to zero.', '2017-01-24', '16:31:47'),
(24, 14, 'Admin Lokomedia', 'dankrez48@gmail.com', 'Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut', '2017-04-09', '11:07:23'),
(25, 0, 'BangToyyib', 'toyyib@gmail.com', 'saya ingin bertanya, berapa 1 + 1?', '2017-10-06', '08:19:33'),
(26, 25, 'Admin Lokomedia', 'admin@lokomedia.web.id', '1+1 adalah 2', '2017-10-06', '08:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `username`, `pembuat`, `folder`, `aktif`) VALUES
(25, 'members', 'admin', 'dankrez48', 'members', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(255) CHARACTER SET latin1 NOT NULL,
  `jkel` varchar(11) COLLATE latin1_general_ci DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `alamat` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `website` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `updateprofile` int(1) DEFAULT 0,
  `startjoin` date DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `upgradedate` date DEFAULT NULL,
  `expireddate` date DEFAULT NULL,
  `lastpackage` int(1) DEFAULT 0,
  `statustelpon` varchar(10) COLLATE latin1_general_ci DEFAULT 'NULL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`, `jkel`, `tgllahir`, `alamat`, `website`, `updateprofile`, `startjoin`, `last_login`, `upgradedate`, `expireddate`, `lastpackage`, `statustelpon`) VALUES
('LOKO000001', '$2y$10$ddFXO8YEG8P1U8tEDrDZLOU0hewB8a.5oWBFjDMZn4YHLNkGaQGtW', 'Admin RuangCoding', 'admin@ruangcoding.com', '0123456789', NULL, 'admin', 'N', 'q173s8hs1jl04st35169ccl8o7', 'Laki-laki', '1991-08-08', 'Tambun - Bekasi', 'www.lokomedia.web.id', 3, '2017-01-01', '2020-07-21 06:34:45', NULL, NULL, 0, NULL),
('LOKO000002', '$2y$10$H8/R5Gl6YxF0jUQwqYYffe6Qc8dmjAUSu9HEsr6AZOblv.S67Eije', 'Rendi Saputra', 'rendi@gmail.com', '085712123556', NULL, 'free', 'Y', 'd41d8cd98f00b204e9800998ecf8427e-20200509145132', 'Laki-laki', '1991-08-08', 'Kecamatan Tambun - Kabupaten Bekasi', 'www.rendiaja.com', 0, '2020-05-09', NULL, NULL, NULL, 0, 'NULL'),
('LOKO000003', '$2y$10$sS714L8D.B83w/8W96uIKuNPRzSrUGDuluvK6Iu7DJMVNZHFHxPRW', 'Bambang Pamungkas', 'dankrez1@gmail.com', '085716129918', 'LOKO000003.jpg', 'premium', 'N', 'd41d8cd98f00b204e9800998ecf8427e-20200509150844', 'Laki-laki', '1991-08-08', 'kampung dukuh - dukuh zamrud', 'www.google.com', 2, '2020-05-09', '2020-07-04 05:02:50', '2020-07-04', '2021-01-04', 10, 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `users_modul`
--

CREATE TABLE `users_modul` (
  `id_umod` int(11) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `id_modul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_modul`
--

INSERT INTO `users_modul` (`id_umod`, `id_session`, `id_modul`) VALUES
(1, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 70),
(2, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 65),
(3, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 63),
(4, 'f76ad5ee772ac196cbc09824e24859ee', 70),
(5, 'f76ad5ee772ac196cbc09824e24859ee', 65),
(6, 'f76ad5ee772ac196cbc09824e24859ee', 63),
(7, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 18),
(8, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 66),
(9, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 33),
(10, '3460d81e02faa3559f9e02c9a766fcbd-20170124215625', 18),
(11, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 41),
(12, '6bec9c852847242e384a4d5ac0962ba0-20170406140423', 18),
(13, 'fa7688658d8b38aae731826ea1daebb5-20170521103501', 18);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `id_playlist` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jdl_video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `video_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dilihat` int(7) NOT NULL DEFAULT 1,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tagvid` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `durasi` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_playlist`, `username`, `jdl_video`, `video_seo`, `keterangan`, `gbr_video`, `video`, `youtube`, `dilihat`, `hari`, `tanggal`, `jam`, `tagvid`, `durasi`) VALUES
(188, 60, 'LOKO000001', 'HTML Dasar : Form (lanjutan) (13/13)', 'html-dasar--form-lanjutan-1313', '<p>Melanjutkan video sebelumnya mengenai elemen pada form, sekaligus mengakhiri seri HTML Dasar. nantikan seri selanjutnya mengenai CSS Dasar. :)</p>\r\n', 'html13.jpg', '', 'https://www.youtube.com/watch?v=_CNkLKU-LoE', 109, 'Minggu', '2018-09-30', '15:26:07', '', 20),
(189, 61, 'LOKO000001', 'CSS Dasar - 1 - Pendahuluan', 'css-dasar--1--pendahuluan', '<p>Ini dia yang kalian tunggu2.. seri mengenai CSS Dasar! :D</p>\r\n\r\n<p>di video pertama ini kita akan belajar mengenai pendahuluan CSS, apa itu CSS, definisinya dan manfaatnya apa..&nbsp;</p>\r\n\r\n<p>ikuti terus ya video2nya :)</p>\r\n', 'bg-css.jpg', '', 'https://www.youtube.com/watch?v=CleFk3BZB3g', 191, 'Selasa', '2018-10-02', '00:48:21', '', 5),
(184, 60, 'LOKO000001', 'HTML Dasar : Image (9/13)', 'html-dasar--image-913', '<p>Pasti ingin dong menampilkan gambar pada halaman web yang kalian buat? nah, di video ini kita akan belajar bagaimana caranya.</p>\r\n', 'html9.jpg', '', 'https://www.youtube.com/watch?v=yb_emYhY3Pc', 84, 'Minggu', '2018-09-30', '15:22:37', '', 4),
(185, 60, 'LOKO000001', 'HTML Dasar : Table (10/13)', 'html-dasar--table-1013', '<p>Mari belajar membuat tabel pada HTML</p>\r\n', 'html10.jpg', '', 'https://www.youtube.com/watch?v=7-QNafrXigs', 95, 'Minggu', '2018-09-30', '15:23:34', '', 12),
(186, 60, 'LOKO000001', 'HTML Dasar : Table Merging (11/13)', 'html-dasar--table-merging-1113', '<p>Menggabungkan / merging cell pada tabel di HTML tidak semudah ketika kita melakukannya pada misalnya aplikasi Microsoft Word atau Excel. Pada HTML kita harus menggunakan atribut colspan dan rowspan. Yuk, caritau gimana penggunaannya di video ini.. :)</p>\r\n', 'html11.jpg', '', 'https://www.youtube.com/watch?v=qs8G2XWf7Yk', 91, 'Minggu', '2018-09-30', '15:24:19', '', 20),
(187, 60, 'LOKO000001', 'HTML Dasar : Form (12/13)', 'html-dasar--form-1213', '<p>Penjelasan mengenai form pada HTML, bagaimana cara membuatnya, atribut yang bisa di gunakan, dan elemen-elemen form apa saja yang ada di dalam form. elemen form yang dibahas di video ini: 1. input (text, password, radio, checkbox, button) 2. label 3. button (submit, reset, button)</p>\r\n', 'html12.jpg', '', 'https://www.youtube.com/watch?v=LQf_Jj7jbCI', 93, 'Minggu', '2018-09-30', '15:25:20', '', 7),
(182, 60, 'LOKO000001', 'HTML Dasar : List (7/13)', 'html-dasar--list-713', '<p>Terdapat 3 jenis List pada html:<br />\r\n1. List Terurut / Ordered List<br />\r\n2. List Tidak Terurut / Un-Ordered List<br />\r\n3. Daftar Terminologi dan Definisi / Definition List</p>\r\n\r\n<p>Ketiga jenis list diatas akan kita bahas pada video ini.</p>\r\n', 'html7.jpg', '', 'https://www.youtube.com/watch?v=gLHEoeupIZs', 87, 'Minggu', '2018-09-30', '15:20:42', '', 20),
(183, 60, 'LOKO000001', 'HTML Dasar : Hyperlink (8/13)', 'html-dasar--hyperlink-813', '<p>Mari belajar mengenai Hyperlink, hal yang penting dalam HTML, karena tidak akan ada web jika tidak ada hyperlink.</p>\r\n\r\n<p>pada video ini kita akan belajar mengenai bagaimana cara membuatnya, apa tag yang digunakan, dan apa kegunaannya.</p>\r\n', 'html8.jpg', '', 'https://www.youtube.com/watch?v=QIlBOI-hTuA', 102, 'Minggu', '2018-09-30', '15:21:53', '', 8),
(177, 60, 'LOKO000001', 'HTML Dasar : Hello World! (2/13)', 'html-dasar--hello-world-213', '<p>Di video ini kita akan membuat website sederhana pertama kita..</p>\r\n\r\n<p>Hello World! :D</p>\r\n\r\n<p>menggunakan aplikasi notepad pada windows</p>\r\n', 'html2.jpg', '', 'https://www.youtube.com/watch?v=1NicaVOCXHA', 104, 'Sabtu', '2018-09-29', '02:47:33', '', 8),
(178, 60, 'LOKO000001', 'HTML Dasar : Code Editor (3/13)', 'html-dasar--code-editor-313', '<p>Untuk membuat halaman web, kita bisa saja menggunakan aplikasi text editor seperti notepad.&nbsp;</p>\r\n', 'html3.jpg', '', 'https://www.youtube.com/watch?v=3sLSi9L5nWE', 106, 'Sabtu', '2018-09-29', '02:54:09', '', 4),
(179, 60, 'LOKO000001', 'HTML Dasar : Tag (4/13)', 'html-dasar--tag-413', '<p>&nbsp;</p>\r\n\r\n<p>Video ini menjelaskan mengenai Tag pada HTML, apa saja yang bisa di simpan di dalam head dan body</p>\r\n', 'html4.jpg', '', 'https://www.youtube.com/watch?v=cUWBYzA6M-8', 92, 'Minggu', '2018-09-30', '14:37:10', '', 20),
(180, 60, 'LOKO000001', 'HTML Dasar : Paragraf (5/13)', 'html-dasar--paragraf-513', '<p>Video ini menjelaskan mengenai tag paragraf pada HTML</p>\r\n', 'html5.jpg', '', 'https://www.youtube.com/watch?v=Dl_bIYBc9gM', 95, 'Minggu', '2018-09-30', '14:38:55', '', 20),
(181, 60, 'LOKO000001', 'HTML Dasar : Heading (6/13)', 'html-dasar--heading-613', '<p>Heading merupakan bagian yang cukup penting pada HTML, seringkali kita tau bagaimana cara membuatnya tetapi masih salah dalam penggunaannya. pada video ini, dijelaskan mengenai cara pembuatan heading yang benar dengan memperhatikan hierarki kepentingan dari informasi yang akan disajikan melalui HTML.</p>\r\n', 'html6.jpg', '', 'https://www.youtube.com/watch?v=SMetRBdIh-8', 91, 'Minggu', '2018-09-30', '14:42:43', '', 20),
(176, 60, 'LOKO000001', 'HTML Dasar : Pendahuluan HTML (1/13)', 'html-dasar--pendahuluan-html-113', '<p>Pendahuluan mengenai HTML.</p>\r\n\r\n<p>- definisi<br />\r\n- sejarah dan perkembangan<br />\r\n- Tim Berners Lee<br />\r\n- W3C<br />\r\n- www.evolutionoftheweb.com</p>\r\n\r\n<p>** video di-embed langsung dari channel youtube pembuatnya, sehingga tidak menyalahi hak cipta**&nbsp;</p>\r\n', 'html1.jpg', '', 'https://www.youtube.com/watch?v=NBZ9Ro6UKV8', 593, 'Sabtu', '2018-09-29', '02:41:13', '', 20),
(190, 62, 'LOKO000001', 'Membuat Web dengan CodeIgniter 3 dan Bootstrap 4 part 1', 'membuat-web-dengan-codeigniter-3-dan-bootstrap-4-part-1', '<p>&nbsp;</p>\r\n\r\n<p>Sebetulnya aplikasi web yang akan kita buat adalah aplikasi yang sama dengan yag kita buat di playlist PHPMVC, yaitu membuat pengelolaan data mahasiswa. tapi kali ini kita akan memanfaatkan kemudahan yang ditawarkan oleh framework CODEIGNITER</p>\r\n', 'ci1.jpg', '', 'https://www.youtube.com/watch?v=dMRCZGGAx74', 420, 'Rabu', '2018-12-26', '21:36:56', 'teknologi', 20),
(191, 62, 'LOKO000001', 'Membuat Web dengan CodeIgniter 3 dan Bootstrap 4 part 2', 'membuat-web-dengan-codeigniter-3-dan-bootstrap-4-part-2', '<p>kita akan melanjutkan kembali pembuatan aplikasi web sederhana menggunakan CODEIGNITER dan BOOTSTRAP, kali ini kita akan menambahkan fitur tambah dan hapus data.. juga kita akan belajar mengenai form, form validation dan flashdata</p>\r\n', 'ci2.jpg', '', 'https://www.youtube.com/watch?v=g5JT3EW38KM', 122, 'Rabu', '2018-12-26', '21:51:10', '', 20),
(192, 62, 'LOKO000001', 'Membuat Web dengan CodeIgniter 3 dan Bootstrap 4 part 3', 'membuat-web-dengan-codeigniter-3-dan-bootstrap-4-part-3', '<p>Menambahkan fitur UPDATE dan SEARCHING pada aplikasi web menggunakan CODEIGNITER 3 dan BOOTSTRAP 4</p>\r\n', 'ci3.jpg', '', 'https://www.youtube.com/watch?v=r-r6IhsE5vg', 160, 'Rabu', '2018-12-26', '22:03:32', '', 20),
(193, 63, 'LOKO000001', '1 Persiapan dan Instalasi Laravel', '1-persiapan-dan-instalasi-laravel', '', '', '', 'https://www.youtube.com/watch?v=tLWGQN6f8UY&index=1&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w', 120, 'Selasa', '2019-01-29', '11:30:37', '', 20),
(194, 63, 'LOKO000001', '2 Basic Routing', '2-basic-routing', '<p>Kita akan membahas semua tentang Laravel dari mulai 0 sampai nantinya anda bisa membuat aplikasi dari Laravel. Mungkin anda belum familiar dengan controller, model, view. Tapi tenang, karna diseri ini kita akan membahas semuanya.</p>\r\n', '', '', 'https://www.youtube.com/watch?v=GxNF1hxXlQo&index=2&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w', 79, 'Selasa', '2019-01-29', '11:39:15', '', 20),
(195, 63, 'LOKO000001', '3 Blade Templating Engine', '3-blade-templating-engine', '<p>Sekarang kita&nbsp;belajar&nbsp;tentang&nbsp;Blade templating engine</p>\r\n', '', '', 'https://www.youtube.com/watch?v=CQj4PvRt6kE&index=3&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w', 75, 'Selasa', '2019-01-29', '11:40:33', '', 20),
(196, 63, 'LOKO000001', '4 Memasukkan Data ke View', '4-memasukkan-data-ke-view', '<p>Penjelasan tentang cara&nbsp;memasukkan data ke dalam view di Laravel</p>\r\n', '', '', 'https://www.youtube.com/watch?v=j_if-S1kb3E&index=4&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w', 80, 'Selasa', '2019-01-29', '11:42:02', '', 20),
(197, 63, 'LOKO000001', '5 Controller adalah teman dekat kita', '5-controller-adalah-teman-dekat-kita', '<p>Belajar bersahabat dengan controller</p>\r\n', '', '', 'https://www.youtube.com/watch?v=dmQoEWmbBeA&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=5', 77, 'Selasa', '2019-01-29', '11:45:53', '', 20),
(198, 63, 'LOKO000001', '6 Database Migrations', '6-database-migrations', '<p>Belajar menampilkan data dari database untuk ditampilkan ke view</p>\r\n', '', '', 'https://www.youtube.com/watch?v=PvOVr5Hwmz8&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=6', 70, 'Selasa', '2019-01-29', '11:52:21', '', 20),
(199, 63, 'LOKO000001', '7 Belajar Model di Laravel', '7-belajar-model-di-laravel', '<p>Belajar Model di laravel</p>\r\n', '', '', 'https://www.youtube.com/watch?v=qqa2VZnBDGU&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=7', 75, 'Selasa', '2019-01-29', '11:57:21', '', 20),
(200, 63, 'LOKO000001', '8 Struktur Folder', '8-struktur-folder', '<p>Struktur Folder di Laravel</p>\r\n', '', '', 'https://www.youtube.com/watch?v=cJvlkWQxBkE&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=8', 76, 'Selasa', '2019-01-29', '11:57:54', '', 20),
(201, 63, 'LOKO000001', '9 Simpan dan Tampilkan data di Laravel', '9-simpan-dan-tampilkan-data-di-laravel', '<p>di Video Kali ini, kita akan&nbsp;coba&nbsp;belajar bagaimana caranya menginputkan data lalu menampilkannya di laravel.</p>\r\n', '', '', 'https://www.youtube.com/watch?v=tZoo1_iLX7I&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=9', 69, 'Selasa', '2019-01-29', '11:59:23', '', 20),
(202, 63, 'LOKO000001', '10 Mass Assignment ', '10-mass-assignment-', '<p>Apa itu Mass Assignment?&nbsp;cek&nbsp;aja langsung videonya</p>\r\n', '', '', 'https://www.youtube.com/watch?v=pyPvP4_4YWM&index=10&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w', 77, 'Selasa', '2019-01-29', '12:00:53', '', 20),
(203, 63, 'LOKO000001', '11 Membuat Form Validasi Laravel', '11-membuat-form-validasi-laravel', '<p>Membuat Form Validasi Laravel</p>\r\n', '', '', 'https://www.youtube.com/watch?v=kmYA3Xalye4&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=11', 57, 'Selasa', '2019-01-29', '13:21:13', '', 20),
(204, 63, 'LOKO000001', '12 Belajar Route Model Binding', '12-belajar-route-model-binding', '<p>Belajar Route model Binding</p>\r\n', '', '', 'https://www.youtube.com/watch?v=yAyaKeepuA4&index=12&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w', 80, 'Selasa', '2019-01-29', '13:22:28', '', 20),
(205, 63, 'LOKO000001', '13 Edit View Laravel', '13-edit-view-laravel', '', '', '', 'https://www.youtube.com/watch?v=KBkVNkjBmh8&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=13', 67, 'Selasa', '2019-01-29', '13:26:01', '', 20),
(206, 63, 'LOKO000001', '14 Memecah View dan menyisipkannya dengan include di Laravel', '14-memecah-view-dan-menyisipkannya-dengan-include-di-laravel', '<p>Memecah View dan menyisipkannya dengan include di Laravel</p>\r\n', '', '', 'https://www.youtube.com/watch?v=YArBeWNMElg&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=14', 73, 'Selasa', '2019-01-29', '13:28:59', '', 20),
(207, 63, 'LOKO000001', '15 Perintah Clean, Request, Delete & Rest di Laravel', '15-perintah-clean-request-delete--rest-di-laravel', '<p>Mempelajari&nbsp;Perintah Clean, Request, Delete &amp; Rest di Laravel</p>\r\n', '', '', 'https://www.youtube.com/watch?v=2X5zFemE-78&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=15', 72, 'Selasa', '2019-01-29', '13:31:04', '', 20),
(208, 63, 'LOKO000001', '16 Relasi Pertama kita - Laravel', '16-relasi-pertama-kita--laravel', '', '', '', 'https://www.youtube.com/watch?v=d53XFMLnEnY&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=16', 66, 'Selasa', '2019-01-29', '13:40:08', '', 20),
(209, 63, 'LOKO000001', '17 View composer dan One to Many - Laravel', '17-view-composer-dan-one-to-many--laravel', '', '', '', 'https://www.youtube.com/watch?v=3IQMsoi5nAI&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=17', 65, 'Selasa', '2019-01-29', '13:41:06', '', 20),
(210, 63, 'LOKO000001', '18 DateTime and Pagination - Laravel', '18-datetime-and-pagination--laravel', '', '', '', 'https://www.youtube.com/watch?v=VIZjDqTqQjw&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=18', 61, 'Selasa', '2019-01-29', '13:42:39', '', 20),
(211, 63, 'LOKO000001', '19 Limitation di Laravel', '19-limitation-di-laravel', '', '', '', 'https://www.youtube.com/watch?v=wmENpNWKamw&list=PLRKMmwY3-5Mz8iTotz0SgOl9_kpCvkR1w&index=19', 81, 'Selasa', '2019-01-29', '13:46:26', '', 20),
(212, 67, 'LOKO000001', 'Pendahuluan Javascript', 'pendahuluan-javascript', '<p><strong>Javascript</strong>&nbsp;adalah bahasa pemrograman yang digunakan untuk menambahkan fitur interaktif pada website, seperti ketika ingin membuat game, melakukan perubahan ketika mengklik tombol, efek dinamik, animasi, dan masih banyak lagi.</p>\r\n\r\n<p><strong>Javascript</strong>&nbsp;adalah bahasa pemrograman yang dapat dikolaborasikan dengan dokumen&nbsp;<strong>HTML</strong>&nbsp;dan digunakan untuk membuat website yang interaktif.</p>\r\n\r\n<p><strong>Javascript</strong>&nbsp;diciptakan oleh&nbsp;<strong>Brendan Eich</strong>&nbsp;yang juga merupakan co-founder dari&nbsp;<strong>Mozilla project</strong>,&nbsp;<strong>Mozilla Foundation</strong>&nbsp;dan&nbsp;<strong>Mozilla Corporation</strong>.</p>\r\n\r\n<p>Javascript berjalan berbarengan dengan&nbsp;<strong>HTML</strong>&nbsp;dan&nbsp;<strong>CSS</strong>.</p>\r\n', '', '', 'https://youtu.be/XIjcfKBoldc', 14, 'Minggu', '2020-04-19', '16:18:17', '', 12),
(213, 67, 'LOKO000001', 'Aldnoah Zero Full Alchemist', 'aldnoah-zero-full-alchemist', '<p>Aldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllll</p>\r\n\r\n<p>Aldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllllAldnoah zero fullllllllll</p>\r\n', '', '', 'https://www.youtube.com/watch?v=9G9CPZ8Zd7k', 13, 'Minggu', '2020-04-26', '14:59:40', '', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD KEY `id_broadcast` (`id_broadcast`);

--
-- Indexes for table `broadcaster`
--
ALTER TABLE `broadcaster`
  ADD KEY `id_sender` (`id_sender`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `iklanatas`
--
ALTER TABLE `iklanatas`
  ADD PRIMARY KEY (`id_iklanatas`);

--
-- Indexes for table `iklantengah`
--
ALTER TABLE `iklantengah`
  ADD PRIMARY KEY (`id_iklantengah`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indexes for table `katajelek`
--
ALTER TABLE `katajelek`
  ADD PRIMARY KEY (`id_jelek`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategoriforum`
--
ALTER TABLE `kategoriforum`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `komentarforum`
--
ALTER TABLE `komentarforum`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `komentarvid`
--
ALTER TABLE `komentarvid`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `mod_alamat`
--
ALTER TABLE `mod_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `pasangiklan`
--
ALTER TABLE `pasangiklan`
  ADD PRIMARY KEY (`id_pasangiklan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  ADD PRIMARY KEY (`id_sekilas`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tagvid`
--
ALTER TABLE `tagvid`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_templates`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users_modul`
--
ALTER TABLE `users_modul`
  ADD PRIMARY KEY (`id_umod`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id_background` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=691;

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id_broadcast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `broadcaster`
--
ALTER TABLE `broadcaster`
  MODIFY `id_sender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=868;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iklanatas`
--
ALTER TABLE `iklanatas`
  MODIFY `id_iklanatas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `iklantengah`
--
ALTER TABLE `iklantengah`
  MODIFY `id_iklantengah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1176;

--
-- AUTO_INCREMENT for table `katajelek`
--
ALTER TABLE `katajelek`
  MODIFY `id_jelek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `kategoriforum`
--
ALTER TABLE `kategoriforum`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `komentarforum`
--
ALTER TABLE `komentarforum`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;

--
-- AUTO_INCREMENT for table `komentarvid`
--
ALTER TABLE `komentarvid`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id_logo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `mod_alamat`
--
ALTER TABLE `mod_alamat`
  MODIFY `id_alamat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasangiklan`
--
ALTER TABLE `pasangiklan`
  MODIFY `id_pasangiklan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7628;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
  MODIFY `id_poling` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;

--
-- AUTO_INCREMENT for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  MODIFY `id_sekilas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tagvid`
--
ALTER TABLE `tagvid`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users_modul`
--
ALTER TABLE `users_modul`
  MODIFY `id_umod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
