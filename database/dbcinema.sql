-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 02:54 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
  `film_rating` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbfilm`
--

INSERT INTO `tbfilm` (`film_id`, `film_judul`, `film_deskripsi`, `film_poster`, `film_trailer`, `film_sutradara`, `film_aktor`, `film_durasi`, `film_rating`) VALUES
(1, 'Frozen 2', 'Anna, Elsa, Kristoff, Olaf dan Sven meninggalkan Arendelle untuk melakukan perjalanan ke hutan misterius di musim gugur, hutan tersebut terikat dengan tanah ajaib. Mereka berangkat untuk menemukan asal usul kekuatan Elsa untuk menyelamatkan kerajaan mereka.', 'src/images/poster/frozen2.jpg', 'https://www.youtube.com/embed/MJVqb5ftrDs', 'Chris Buck, Jennifer Lee', 'Kristen Bell, Jason Ritter, Jonathan Groff', '103 Menit', 'SU'),
(2, 'Black Christmas', 'Sekelompok mahasisw di ikuti oleh orang asing, saat sedang liburan Natal mereka. Itu sampai seorang mahasiswi muda menemukan bahwa ada pembunuh dari perguruan tinggi ', 'src/images/poster/blackchristmas.jpg', 'https://www.youtube.com/embed/dodAe3bn9aY', 'Sophia Takal', 'Imogen Poots, Cary Elwes, Brittany O\'Grady ', '92 Minutes', 'R'),
(3, 'Charlies Angels', 'Kristen Stewart, Naomi Scott, dan Ella Balinska bekerja untuk Charles Townsend sebuah badan keamanan dan investigasinya misterius yang telah berkembang dengan skala internasional. Para wanita paling cerdas, paling berani, dan paling terlatih , Menjadi satu team \"Angels\" yang dipandu oleh Bosley menjalankan suatu misi berat dan berbahaya di mana-mana\r\n', 'src/images/poster/charlieangels.jpg', 'https://www.youtube.com/embed/U4uqhcedx_I', 'Elizabeth Banks', 'Naomi Scott, Sam Claflin, Kristen Stewart ', '118 Menit', 'BO'),
(4, 'Jumanji : The Next Level', 'Mereka kembali ke Jumanji untuk menyelamatkan salah satu teman mereka tetapi banyak hal yang tidak sesuai seperti yang mereka harapkan. Para pemain harus menghadapi bagian berbahaya, dari gurun sampai ke gunung bersalju, demi untuk melarikan diri dari permainan paling berbahaya di dunia.', 'src/images/poster/jumanji.jpg', 'https://www.youtube.com/embed/xN2bO0ox1z0', 'Jake Kasdan', 'Dwayne Johnson, Karen Gillan, Jack Black, Kevin Hart, Nick Jonas, Danny DeVito', '122 Minutes', 'SU'),
(5, 'STAR WARS: THE RISE OF SKYWALKER ', 'Resistance yang selamat sekali lagi akan menghadapi First Order dalam sebuah saga final yang akan menentukan nasib mereka.', 'src/images/poster/starwars.jpg', 'https://www.youtube.com/embed/gnU-hJ6jqCY', 'J.J. Abrams', 'Daisy Ridley, Domhnall Gleeson, Joonas Suotamo, Adam Driver, Mark Hamill, Oscar Isaac', '143 Minutes', 'SU'),
(6, 'SPIES IN DISGUISE ', 'Ketika mata-mata terbaik dunia berubah menjadi merpati, ia harus mengandalkan partner seorang ahli teknologi, untuk menyelamatkan dunia.', 'src/images/poster/spies.jpg', 'https://www.youtube.com/embed/eG3i68XCJlk', ' Nick Bruno, Troy Quane', 'Will Smith, Tom Holland, Rashida Jones, Ben Mendelsohn, Reba McEntire', '102 Minutes', 'SU'),
(7, 'THE GRUDGE ', 'Sebuah rumah dikutuk oleh roh jahat yang menyerang dan melukai dengan cara yang kejam siapapun yang memasukinya.', 'src/images/poster/grudge.jfif', 'https://www.youtube.com/embed/88spCoDfEg4', 'Nicolas Pesce', ' Betty Gilpin, Andrea Riseborough, William Sadler', '94 Minutes', 'R'),
(9, 'ASHFALL', 'Bencana mengguncang Korea secara tak terduga. Ketika Baekdu - gunung tertinggi di Korea meletus dan menyemburkan abu ke atmosfer. Petaka besar kini mengancam Seoul (Korea Selatan) maupun Pyongyang (Korea Utara).', 'src/images/poster/ashfall.jfif', 'https://www.youtube.com/embed/_Xq7XWHbGag', 'LEE Hae Jun, KIM Byung Seo', ' LEE Byung Hun, HA Jung Woo, MA Dong Seok a.k.a. Don LEE, JEON Hye Jin, BAE Su Zy', '128 Minutes', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `tbfilm_has_tbgenre`
--

CREATE TABLE `tbfilm_has_tbgenre` (
  `tbFilm_film_id` int(11) NOT NULL,
  `tbGenre_genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbgenre`
--

CREATE TABLE `tbgenre` (
  `genre_id` int(11) NOT NULL,
  `genre_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `jadwal_id` int(11) NOT NULL,
  `jadwal_tanggal` date DEFAULT NULL,
  `jadwal_sesi` int(11) DEFAULT NULL,
  `tbFilm_film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbjadwal`
--

INSERT INTO `tbjadwal` (`jadwal_id`, `jadwal_tanggal`, `jadwal_sesi`, `tbFilm_film_id`) VALUES
(1, '2020-01-13', 1, 1),
(2, '2020-01-13', 2, 1);

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








-- --------------------------------------------------------

--
-- Table structure for table `tbstudio`
--

CREATE TABLE `tbstudio` (
  `studio_id` int(11) NOT NULL,
  `studio_nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbtiket`
--

CREATE TABLE `tbtiket` (
  `tiket_id` int(11) NOT NULL,
  `tiket_harga` double DEFAULT NULL,
  `tiket_nomor_kursi` int(11) DEFAULT NULL,
  `tbMember_member_id` int(11) NOT NULL,
  `tbStudio_studio_id` int(11) NOT NULL,
  `tbJadwal_jadwal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_totalprice` varchar(45) DEFAULT NULL,
  `transaksi_payment_method` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfilm`
--
ALTER TABLE `tbfilm`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `tbfilm_has_tbgenre`
--
ALTER TABLE `tbfilm_has_tbgenre`
  ADD PRIMARY KEY (`tbFilm_film_id`,`tbGenre_genre_id`),
  ADD KEY `fk_tbFilm_has_tbGenre_tbGenre1_idx` (`tbGenre_genre_id`),
  ADD KEY `fk_tbFilm_has_tbGenre_tbFilm_idx` (`tbFilm_film_id`);

--
-- Indexes for table `tbgenre`
--
ALTER TABLE `tbgenre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `fk_tbJadwal_tbFilm1_idx` (`tbFilm_film_id`);

--
-- Indexes for table `tbmember`
--
ALTER TABLE `tbmember`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbstudio`
--
ALTER TABLE `tbstudio`
  ADD PRIMARY KEY (`studio_id`);

--
-- Indexes for table `tbtiket`
--
ALTER TABLE `tbtiket`
  ADD PRIMARY KEY (`tiket_id`,`tbJadwal_jadwal_id`),
  ADD KEY `fk_tbTiket_tbMember1_idx` (`tbMember_member_id`),
  ADD KEY `fk_tbTiket_tbStudio1_idx` (`tbStudio_studio_id`),
  ADD KEY `fk_tbTiket_tbJadwal1_idx` (`tbJadwal_jadwal_id`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`transaksi_id`);

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
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbmember`
--
ALTER TABLE `tbmember`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbfilm_has_tbgenre`
--
ALTER TABLE `tbfilm_has_tbgenre`
  ADD CONSTRAINT `fk_tbFilm_has_tbGenre_tbFilm` FOREIGN KEY (`tbFilm_film_id`) REFERENCES `tbfilm` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbFilm_has_tbGenre_tbGenre1` FOREIGN KEY (`tbGenre_genre_id`) REFERENCES `tbgenre` (`genre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD CONSTRAINT `fk_tbJadwal_tbFilm1` FOREIGN KEY (`tbFilm_film_id`) REFERENCES `tbfilm` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbtiket`
--
ALTER TABLE `tbtiket`
  ADD CONSTRAINT `fk_tbTiket_tbJadwal1` FOREIGN KEY (`tbJadwal_jadwal_id`) REFERENCES `tbjadwal` (`jadwal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTiket_tbMember1` FOREIGN KEY (`tbMember_member_id`) REFERENCES `tbmember` (`member_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTiket_tbStudio1` FOREIGN KEY (`tbStudio_studio_id`) REFERENCES `tbstudio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
