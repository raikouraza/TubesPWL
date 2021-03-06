-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`tbFilm`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbFilm` (
  `film_id` INT NOT NULL,
  `film_judul` VARCHAR(45) NULL,
  `film_tanggal_rilis` VARCHAR(45) NULL,
  `film_deskripsi` VARCHAR(45) NULL,
  `film_poster` VARCHAR(45) NULL,
  `film_genre` VARCHAR(45) NULL,
  `film_trailer` VARCHAR(45) NULL,
  `film_jam_penayangan` VARCHAR(45) NULL,
  `film_sutradara` VARCHAR(45) NULL,
  PRIMARY KEY (`film_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbMember`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbMember` (
  `member_id` INT NOT NULL AUTO_INCREMENT,
  `member_username` VARCHAR(100) NULL,
  `member_password` VARCHAR(100) NULL,
  `member_email` VARCHAR(100) NULL,
  `member_nama_depan` VARCHAR(100) NULL,
  `member_nama_belakang` VARCHAR(100) NULL,
  `member_photo` VARCHAR(100) NULL,
  PRIMARY KEY (`member_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbRole`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbRole` (
  `role_id` INT NOT NULL,
  `role_nama` VARCHAR(45) NULL,
  PRIMARY KEY (`role_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbStudio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbStudio` (
  `studio_id` INT NOT NULL,
  PRIMARY KEY (`studio_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbTiket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbTiket` (
  `idtbTiket` INT NOT NULL,
  PRIMARY KEY (`idtbTiket`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbGenre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbGenre` (
  `genre_id` INT NOT NULL,
  `genre_nama_kategori` VARCHAR(45) NULL,
  PRIMARY KEY (`genre_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbSutradara`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbSutradara` (
  `sutradara_id` INT NOT NULL,
  `sutradara_nama` VARCHAR(45) NULL,
  PRIMARY KEY (`sutradara_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbUser`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbUser` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_username` VARCHAR(100) NULL,
  `user_password` VARCHAR(100) NULL,
  `user_role` VARCHAR(45) NULL,
  `user_name` VARCHAR(100) NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
