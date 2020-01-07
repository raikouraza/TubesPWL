-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 02:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbfilm`
--

CREATE TABLE `tbfilm` (
  `film_id` int(11) NOT NULL,
  `film_judul` varchar(45) DEFAULT NULL,
  `film_deskripsi` varchar(400) DEFAULT NULL,
  `film_poster` varchar(150) DEFAULT NULL,
  `film_trailer` varchar(400) DEFAULT NULL,
  `film_sutradara` varchar(45) DEFAULT NULL,
  `film_aktor` varchar(400) DEFAULT NULL,
  `film_durasi` varchar(45) DEFAULT NULL,
  `film_rating` varchar(45) DEFAULT NULL,
  `film_genre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbfilm`
--

INSERT INTO `tbfilm` (`film_id`, `film_judul`, `film_deskripsi`, `film_poster`, `film_trailer`, `film_sutradara`, `film_aktor`, `film_durasi`, `film_rating`, `film_genre`) VALUES
(1, 'Frozen 2', 'Anna, Elsa, Kristoff, Olaf dan Sven meninggalkan Arendelle untuk melakukan perjalanan ke hutan misterius di musim gugur, hutan tersebut terikat dengan tanah ajaib. Mereka berangkat untuk menemukan asal usul kekuatan Elsa untuk menyelamatkan kerajaan mereka.', 'src/images/poster/frozen2.jpg', 'https://www.youtube.com/embed/MJVqb5ftrDs', 'Chris Buck, Jennifer Lee', 'Kristen Bell, Jason Ritter, Jonathan Groff', '103 Menit', 'SU', 'Animation'),
(2, 'Black Christmas', 'Sekelompok mahasisw di ikuti oleh orang asing, saat sedang liburan Natal mereka. Itu sampai seorang mahasiswi muda menemukan bahwa ada pembunuh dari perguruan tinggi ', 'src/images/poster/blackchristmas.jpg', 'https://www.youtube.com/embed/dodAe3bn9aY', 'Sophia Takal', 'Imogen Poots, Cary Elwes, Brittany O\'Grady ', '92 Minutes', 'R', 'Thriller'),
(3, 'Charlies Angels', 'Kristen Stewart, Naomi Scott, dan Ella Balinska bekerja untuk Charles Townsend sebuah badan keamanan dan investigasinya misterius yang telah berkembang dengan skala internasional. Para wanita paling cerdas, paling berani, dan paling terlatih , Menjadi satu team \"Angels\" yang dipandu oleh Bosley menjalankan suatu misi berat dan berbahaya di mana-mana\r\n', 'src/images/poster/charlieangels.jpg', 'https://www.youtube.com/embed/U4uqhcedx_I', 'Elizabeth Banks', 'Naomi Scott, Sam Claflin, Kristen Stewart ', '118 Menit', 'BO', 'Action'),
(4, 'Jumanji : The Next Level', 'Mereka kembali ke Jumanji untuk menyelamatkan salah satu teman mereka tetapi banyak hal yang tidak sesuai seperti yang mereka harapkan. Para pemain harus menghadapi bagian berbahaya, dari gurun sampai ke gunung bersalju, demi untuk melarikan diri dari permainan paling berbahaya di dunia.', 'src/images/poster/jumanji.jpg', 'https://www.youtube.com/embed/xN2bO0ox1z0', 'Jake Kasdan', 'Dwayne Johnson, Karen Gillan, Jack Black, Kevin Hart, Nick Jonas, Danny DeVito', '122 Minutes', 'SU', 'Adventure'),
(5, 'STAR WARS: THE RISE OF SKYWALKER ', 'Resistance yang selamat sekali lagi akan menghadapi First Order dalam sebuah saga final yang akan menentukan nasib mereka.', 'src/images/poster/starwars.jpg', 'https://www.youtube.com/embed/gnU-hJ6jqCY', 'J.J. Abrams', 'Daisy Ridley, Domhnall Gleeson, Joonas Suotamo, Adam Driver, Mark Hamill, Oscar Isaac', '143 Minutes', 'SU', 'Science Fiction'),
(6, 'SPIES IN DISGUISE ', 'Ketika mata-mata terbaik dunia berubah menjadi merpati, ia harus mengandalkan partner seorang ahli teknologi, untuk menyelamatkan dunia.', 'src/images/poster/spies.jpg', 'https://www.youtube.com/embed/eG3i68XCJlk', ' Nick Bruno, Troy Quane', 'Will Smith, Tom Holland, Rashida Jones, Ben Mendelsohn, Reba McEntire', '102 Minutes', 'SU', 'Animation'),
(7, 'THE GRUDGE ', 'Sebuah rumah dikutuk oleh roh jahat yang menyerang dan melukai dengan cara yang kejam siapapun yang memasukinya.', 'src/images/poster/grudge.jfif', 'https://www.youtube.com/embed/88spCoDfEg4', 'Nicolas Pesce', ' Betty Gilpin, Andrea Riseborough, William Sadler', '94 Minutes', 'R', 'Horror'),
(9, 'ASHFALL', 'Bencana mengguncang Korea secara tak terduga. Ketika Baekdu - gunung tertinggi di Korea meletus dan menyemburkan abu ke atmosfer. Petaka besar kini mengancam Seoul (Korea Selatan) maupun Pyongyang (Korea Utara).', 'src/images/poster/ashfall.jfif', 'https://www.youtube.com/embed/_Xq7XWHbGag', 'LEE Hae Jun, KIM Byung Seo', ' LEE Byung Hun, HA Jung Woo, MA Dong Seok a.k.a. Don LEE, JEON Hye Jin, BAE Su Zy', '128 Minutes', 'R', 'Thriller'),
(12, 'abcd', 'abcd', 'src/images/poster/sonic.jpg', ' https://www.youtube.com/embed/bQAeit5_vBs', 'abcd', 'abcd', '100', 'SU', 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `jadwal_id` int(11) NOT NULL,
  `jadwal_tanggal` date DEFAULT NULL,
  `jadwal_sesi` int(11) DEFAULT NULL,
  `tbFilm_film_id` int(11) NOT NULL,
  `tbStudio_studio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbjadwal`
--

INSERT INTO `tbjadwal` (`jadwal_id`, `jadwal_tanggal`, `jadwal_sesi`, `tbFilm_film_id`, `tbStudio_studio_id`) VALUES
(2, '2020-01-13', 2, 1, 1),
(7, '2020-01-07', 2, 1, 1),
(8, '2020-01-07', 4, 3, 3),
(9, '2020-01-07', 1, 7, 2),
(10, '2020-01-07', 3, 4, 1),
(11, '2020-01-08', 1, 7, 1),
(12, '2020-01-08', 1, 5, 2),
(14, '2020-01-01', 1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbmember`
--

CREATE TABLE `tbmember` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(100) DEFAULT NULL,
  `member_password` varchar(100) DEFAULT NULL,
  `member_email` varchar(100) DEFAULT NULL,
  `member_nama_depan` varchar(100) DEFAULT NULL,
  `member_nama_belakang` varchar(100) DEFAULT NULL,
  `member_photo` varchar(100) DEFAULT NULL,
  `member_saldo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbmember`
--

INSERT INTO `tbmember` (`member_id`, `member_username`, `member_password`, `member_email`, `member_nama_depan`, `member_nama_belakang`, `member_photo`, `member_saldo`) VALUES
(1, 'member', 'UL9LAF', 'stefanushermawan07@gmail.com', 'Stefanus', 'Hermamiaw', 'src/images/members/Stefanus.png', 20000),
(4, 'bambang', 'LL5906', 'stefmia1@gmail.com', 'Arief', 'Kurniawan', 'src/images/poster/Arief.png', 1004834566),
(5, 'yosmartUWU', '12345', 'yosmartUWU@gmail.com', 'Yosmart', 'Hariandjajaja', 'src/images/members/yos.jpg', 200000),
(6, 'yosmartUMU', '12345', 'spoopyjosmark@gmail.com', 'Yosmart', 'Hariandjdjdj', NULL, NULL),
(7, 'abcd', 'abcd', 'yhariandja@gmail.com', 'abcd', 'abcd', 'src/images/members/abcd.jpg', 1001000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbstudio`
--

CREATE TABLE `tbstudio` (
  `studio_id` int(11) NOT NULL,
  `studio_nama` varchar(45) DEFAULT NULL,
  `studio_kapasitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbstudio`
--

INSERT INTO `tbstudio` (`studio_id`, `studio_nama`, `studio_kapasitas`) VALUES
(1, 'Regular ', 40),
(2, 'Gold Class', 20),
(3, 'Velvet Class', 30),
(4, 'Sweet Box', 50),
(5, 'efgh', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbtiket`
--

CREATE TABLE `tbtiket` (
  `tiket_id` int(11) NOT NULL,
  `tiket_harga` double DEFAULT NULL,
  `tiket_nomor_kursi` int(11) DEFAULT NULL,
  `tbJadwal_jadwal_id` int(11) NOT NULL,
  `tbMember_member_id` int(11) NOT NULL,
  `tbStudio_studio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbtiket`
--

INSERT INTO `tbtiket` (`tiket_id`, `tiket_harga`, `tiket_nomor_kursi`, `tbJadwal_jadwal_id`, `tbMember_member_id`, `tbStudio_studio_id`) VALUES
(1, 50000, 12, 2, 4, 1),
(2, 50000, 11, 2, 1, 2),
(6, 50000, 13, 7, 5, 1),
(7, 50000, 1, 12, 1, 3),
(8, 50000, 16, 9, 4, 1),
(9, 50000, 10, 10, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbtopup`
--

CREATE TABLE `tbtopup` (
  `Topup_id` int(11) NOT NULL,
  `Topup_image` varchar(200) DEFAULT NULL,
  `Topup_tanggal` varchar(45) DEFAULT NULL,
  `tbMember_member_id` int(11) NOT NULL,
  `Topup_status` varchar(45) DEFAULT NULL,
  `Topup_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbtopup`
--

INSERT INTO `tbtopup` (`Topup_id`, `Topup_image`, `Topup_tanggal`, `tbMember_member_id`, `Topup_status`, `Topup_amount`) VALUES
(1, 'src/images/topup/.png', '2020-01-06', 1, '0', 50000),
(2, 'src/images/topup/.png', '2020-01-06', 1, '1', 50000),
(3, 'src/images/topup/.png', '2020-01-06', 1, '1', 1000001),
(7, 'src/images/topup/.png', '	2020-01-06', 4, '1', 111111111),
(8, 'src/images/topup/.png', '	2020-01-06', 1, '0', 20000),
(9, 'src/images/topup/.png', '	2020-01-06', 1, '1', 20000),
(10, 'src/images/topup/contoh.jpg', '2020-01-07T00:12', 1, NULL, 1200000),
(11, 'src/images/topup/contoh.jpg', '2020-01-07T00:12', 1, '0', 1200000),
(12, 'src/images/topup/.png', '2020-01-07', 4, '1', 1200000),
(13, 'src/images/topup/.png', '2020-01-07', 4, '1', 1200000),
(14, 'src/images/topup/.png', '2020-01-07', 4, '1', 1200000),
(15, 'src/images/topup/.png', '2020-01-07', 4, '1', 1234567),
(16, NULL, '2020-01-07', 4, '1', 999999999),
(17, 'src/images/topup/.', '', 1, '0', 1e36),
(18, NULL, '2020-01-07', 7, '1', 1000000),
(19, 'src/images/topup/.jpg', '2020-01-01T00:12', 7, '1', 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_totalprice` varchar(45) DEFAULT NULL,
  `transaksi_payment_method` int(11) DEFAULT NULL,
  `transaksi_tanggal` date DEFAULT NULL,
  `tbTiket_tiket_id` int(11) NOT NULL,
  `tbTiket_tbJadwal_jadwal_id` int(11) NOT NULL,
  `tbTiket_tbMember_member_id` int(11) NOT NULL,
  `tbTiket_tbStudio_studio_id` int(11) NOT NULL,
  `tbFilm_film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`transaksi_id`, `transaksi_totalprice`, `transaksi_payment_method`, `transaksi_tanggal`, `tbTiket_tiket_id`, `tbTiket_tbJadwal_jadwal_id`, `tbTiket_tbMember_member_id`, `tbTiket_tbStudio_studio_id`, `tbFilm_film_id`) VALUES
(3, '50000', 0, '2020-01-07', 1, 2, 4, 1, 9),
(4, '50000', 1, '2020-01-07', 2, 2, 1, 2, 1),
(8, '50000', 1, '2020-01-06', 6, 7, 5, 1, 1),
(9, '50000', 1, '2020-01-06', 7, 12, 1, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_role` varchar(45) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`user_id`, `user_username`, `user_password`, `user_role`, `user_name`) VALUES
(1, 'admin', '12345', 'admin', 'Jane Doe'),
(2, 'kasir', '12345', 'kasir', 'Jena Doe'),
(3, 'kasirstef123', '12345', 'kasir', 'Stefanus'),
(4, 'adminatta', '12345', 'kasir', 'atta halilintar ashiap'),
(5, 'johncena48', '12345', 'kasir', '1 john cena bukan john doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfilm`
--
ALTER TABLE `tbfilm`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`jadwal_id`,`tbStudio_studio_id`,`tbFilm_film_id`),
  ADD KEY `fk_tbJadwal_tbFilm1_idx` (`tbFilm_film_id`),
  ADD KEY `fk_tbJadwal_tbStudio1_idx` (`tbStudio_studio_id`);

--
-- Indexes for table `tbmember`
--
ALTER TABLE `tbmember`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_email_UNIQUE` (`member_email`),
  ADD UNIQUE KEY `member_username_UNIQUE` (`member_username`);

--
-- Indexes for table `tbstudio`
--
ALTER TABLE `tbstudio`
  ADD PRIMARY KEY (`studio_id`),
  ADD UNIQUE KEY `studio_nama_UNIQUE` (`studio_nama`);

--
-- Indexes for table `tbtiket`
--
ALTER TABLE `tbtiket`
  ADD PRIMARY KEY (`tiket_id`,`tbJadwal_jadwal_id`,`tbMember_member_id`,`tbStudio_studio_id`),
  ADD KEY `fk_tbTiket_tbJadwal1_idx` (`tbJadwal_jadwal_id`),
  ADD KEY `fk_tbTiket_tbMember1_idx` (`tbMember_member_id`),
  ADD KEY `fk_tbTiket_tbStudio1_idx` (`tbStudio_studio_id`);

--
-- Indexes for table `tbtopup`
--
ALTER TABLE `tbtopup`
  ADD PRIMARY KEY (`Topup_id`),
  ADD KEY `fk_tbTopup_tbMember1_idx` (`tbMember_member_id`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`transaksi_id`,`tbTiket_tiket_id`,`tbTiket_tbJadwal_jadwal_id`,`tbTiket_tbMember_member_id`,`tbTiket_tbStudio_studio_id`,`tbFilm_film_id`),
  ADD KEY `fk_tbTransaksi_tbTiket1_idx` (`tbTiket_tiket_id`,`tbTiket_tbJadwal_jadwal_id`,`tbTiket_tbMember_member_id`,`tbTiket_tbStudio_studio_id`),
  ADD KEY `fk_tbTransaksi_tbFilm1_idx` (`tbFilm_film_id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbfilm`
--
ALTER TABLE `tbfilm`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbmember`
--
ALTER TABLE `tbmember`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbstudio`
--
ALTER TABLE `tbstudio`
  MODIFY `studio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbtiket`
--
ALTER TABLE `tbtiket`
  MODIFY `tiket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbtopup`
--
ALTER TABLE `tbtopup`
  MODIFY `Topup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD CONSTRAINT `fk_tbJadwal_tbFilm1` FOREIGN KEY (`tbFilm_film_id`) REFERENCES `tbfilm` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbJadwal_tbStudio1` FOREIGN KEY (`tbStudio_studio_id`) REFERENCES `tbstudio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbtiket`
--
ALTER TABLE `tbtiket`
  ADD CONSTRAINT `fk_tbTiket_tbJadwal1` FOREIGN KEY (`tbJadwal_jadwal_id`) REFERENCES `tbjadwal` (`jadwal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTiket_tbMember1` FOREIGN KEY (`tbMember_member_id`) REFERENCES `tbmember` (`member_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTiket_tbStudio1` FOREIGN KEY (`tbStudio_studio_id`) REFERENCES `tbstudio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbtopup`
--
ALTER TABLE `tbtopup`
  ADD CONSTRAINT `fk_tbTopup_tbMember1` FOREIGN KEY (`tbMember_member_id`) REFERENCES `tbmember` (`member_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD CONSTRAINT `fk_tbTransaksi_tbFilm1` FOREIGN KEY (`tbFilm_film_id`) REFERENCES `tbfilm` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTransaksi_tbTiket1` FOREIGN KEY (`tbTiket_tiket_id`,`tbTiket_tbJadwal_jadwal_id`,`tbTiket_tbMember_member_id`,`tbTiket_tbStudio_studio_id`) REFERENCES `tbtiket` (`tiket_id`, `tbJadwal_jadwal_id`, `tbMember_member_id`, `tbStudio_studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
