-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2020 at 03:12 PM
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
-- Database: `dbCinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbFilm`
--

CREATE TABLE `tbFilm` (
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
-- Dumping data for table `tbFilm`
--

INSERT INTO `tbFilm` (`film_id`, `film_judul`, `film_deskripsi`, `film_poster`, `film_trailer`, `film_sutradara`, `film_aktor`, `film_durasi`, `film_rating`) VALUES
(1, 'Jumanji: The Next Level', 'As the gang return to Jumanji to rescue one of their own, they discover that nothing is as they expect. The players will have to brave parts unknown and unexplored in order to escape the world’s most dangerous game.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/jyw8VKYEiM1UDzPB7NsisUgBeJ8.jpg', 'https://www.youtube.com/watch?v=F6QaLsw8EWY', 'Jake Kasdan', 'Dwayne Johnson, Jack Black,Kevin Hart,Karen Gillan', '2h 3m', '67%'),
(2, 'Ip Man 4: The Finale', 'Following the death of his wife, Ip Man travels to San Francisco to ease tensions between the local kung fu masters and his star student, Bruce Lee, while searching for a better future for his son.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mAWBfTDAmfpvQGMVFuzuVl49N1P.jpg', 'https://www.youtube.com/watch?v=oCBGTCNJW2g', 'Wilson Yip', 'Donnie Yen, Wu Yue, Vanness Wu', '1h 45m', '58%'),
(3, 'The Gentlemen', 'A drug lord tries to sell off his highly profitable empire.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/n1GZYASUskyByP4OfpuHzXFbjY4.jpg', 'https://www.youtube.com/watch?v=2B0RpUGss2c', 'Guy Ritchie', 'Matthew McConaughey, Colin Farrell, Charlie Hunnam', '1h 53m', '73%'),
(4, 'The Grudge', 'A house is cursed by a vengeful ghost that dooms those who enter it with a violent death.', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/vN7JHlHOT9rHNDU27tfYqhABBj5.jpg', 'https://www.youtube.com/watch?v=O2NKzO-fxwQ', 'Nicolas Pesce', 'Andrea Riseborough, Demián Bichir', '1h 33m', '58%');

-- --------------------------------------------------------

--
-- Table structure for table `tbFilm_has_tbGenre`
--

CREATE TABLE `tbFilm_has_tbGenre` (
  `tbFilm_film_id` int(11) NOT NULL,
  `tbGenre_genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbGenre`
--

CREATE TABLE `tbGenre` (
  `genre_id` int(11) NOT NULL,
  `genre_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbGenre`
--

INSERT INTO `tbGenre` (`genre_id`, `genre_kategori`) VALUES
(1, 'Aksi'),
(2, 'Petualangan'),
(3, 'Komedi'),
(4, 'Misteri'),
(5, 'Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `tbJadwal`
--

CREATE TABLE `tbJadwal` (
  `jadwal_id` int(11) NOT NULL,
  `jadwal_tanggal` date DEFAULT NULL,
  `jadwal_sesi` int(11) DEFAULT NULL,
  `tbFilm_film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbMember`
--

CREATE TABLE `tbMember` (
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
-- Dumping data for table `tbMember`
--

INSERT INTO `tbMember` (`member_id`, `member_username`, `member_password`, `member_email`, `member_nama_depan`, `member_nama_belakang`, `member_photo`, `member_saldo`) VALUES
(1, 'stefanushermawan07', 'stefanushermawan07', 'stefanushermawan07@gmail.com', 'Stefanus', 'Hermawan', NULL, 10000000),
(2, 'ariefkurniawan', 'ariefkurniawan', 'ariefkurniawan@gmail.com', 'Arief', 'Kurniawan', NULL, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbStudio`
--

CREATE TABLE `tbStudio` (
  `studio_id` int(11) NOT NULL,
  `studio_nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbStudio`
--

INSERT INTO `tbStudio` (`studio_id`, `studio_nama`) VALUES
(1, 'Regular'),
(2, 'Gold'),
(3, 'Platinum'),
(4, 'Velvet');

-- --------------------------------------------------------

--
-- Table structure for table `tbTiket`
--

CREATE TABLE `tbTiket` (
  `tiket_id` int(11) NOT NULL,
  `tiket_harga` double DEFAULT NULL,
  `tiket_nomor_kursi` int(11) DEFAULT NULL,
  `tbMember_member_id` int(11) NOT NULL,
  `tbStudio_studio_id` int(11) NOT NULL,
  `tbJadwal_jadwal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbTransaksi`
--

CREATE TABLE `tbTransaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_totalprice` varchar(45) DEFAULT NULL,
  `transaksi_payment_method` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbUser`
--

CREATE TABLE `tbUser` (
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
-- Indexes for table `tbFilm`
--
ALTER TABLE `tbFilm`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `tbFilm_has_tbGenre`
--
ALTER TABLE `tbFilm_has_tbGenre`
  ADD PRIMARY KEY (`tbFilm_film_id`,`tbGenre_genre_id`),
  ADD KEY `fk_tbFilm_has_tbGenre_tbGenre1_idx` (`tbGenre_genre_id`),
  ADD KEY `fk_tbFilm_has_tbGenre_tbFilm_idx` (`tbFilm_film_id`);

--
-- Indexes for table `tbGenre`
--
ALTER TABLE `tbGenre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbJadwal`
--
ALTER TABLE `tbJadwal`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `fk_tbJadwal_tbFilm1_idx` (`tbFilm_film_id`);

--
-- Indexes for table `tbMember`
--
ALTER TABLE `tbMember`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbStudio`
--
ALTER TABLE `tbStudio`
  ADD PRIMARY KEY (`studio_id`);

--
-- Indexes for table `tbTiket`
--
ALTER TABLE `tbTiket`
  ADD PRIMARY KEY (`tiket_id`,`tbJadwal_jadwal_id`),
  ADD KEY `fk_tbTiket_tbMember1_idx` (`tbMember_member_id`),
  ADD KEY `fk_tbTiket_tbStudio1_idx` (`tbStudio_studio_id`),
  ADD KEY `fk_tbTiket_tbJadwal1_idx` (`tbJadwal_jadwal_id`);

--
-- Indexes for table `tbTransaksi`
--
ALTER TABLE `tbTransaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `tbUser`
--
ALTER TABLE `tbUser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbFilm`
--
ALTER TABLE `tbFilm`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbMember`
--
ALTER TABLE `tbMember`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbUser`
--
ALTER TABLE `tbUser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbFilm_has_tbGenre`
--
ALTER TABLE `tbFilm_has_tbGenre`
  ADD CONSTRAINT `fk_tbFilm_has_tbGenre_tbFilm` FOREIGN KEY (`tbFilm_film_id`) REFERENCES `tbFilm` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbFilm_has_tbGenre_tbGenre1` FOREIGN KEY (`tbGenre_genre_id`) REFERENCES `tbGenre` (`genre_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbJadwal`
--
ALTER TABLE `tbJadwal`
  ADD CONSTRAINT `fk_tbJadwal_tbFilm1` FOREIGN KEY (`tbFilm_film_id`) REFERENCES `tbFilm` (`film_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbTiket`
--
ALTER TABLE `tbTiket`
  ADD CONSTRAINT `fk_tbTiket_tbJadwal1` FOREIGN KEY (`tbJadwal_jadwal_id`) REFERENCES `tbJadwal` (`jadwal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTiket_tbMember1` FOREIGN KEY (`tbMember_member_id`) REFERENCES `tbMember` (`member_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbTiket_tbStudio1` FOREIGN KEY (`tbStudio_studio_id`) REFERENCES `tbStudio` (`studio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
