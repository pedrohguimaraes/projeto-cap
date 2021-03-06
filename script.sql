-- MySQL Script generated by MySQL Workbench
-- qua 23 mai 2018 12:00:45 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema projetocap
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projetocap
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projetocap` DEFAULT CHARACTER SET utf8 ;
USE `projetocap` ;

-- -----------------------------------------------------
-- Table `projetocap`.`consultant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetocap`.`consultant` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `avatar` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetocap`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetocap`.`address` (
  `id` INT NOT NULL,
  `street` VARCHAR(255) NOT NULL,
  `number` INT NOT NULL,
  `neighborhood` VARCHAR(255) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetocap`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetocap`.`category` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projetocap`.`curse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetocap`.`curse` (
  `id` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  `price` DOUBLE NOT NULL,
  `start` DATETIME NOT NULL,
  `finish` DATETIME NOT NULL,
  `consultant_id` INT NOT NULL,
  `address_id` INT NOT NULL,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_curso_consultant_idx` (`consultant_id` ASC),
  INDEX `fk_curso_address1_idx` (`address_id` ASC),
  INDEX `fk_curso_category1_idx` (`category_id` ASC),
  CONSTRAINT `fk_curso_consultant`
    FOREIGN KEY (`consultant_id`)
    REFERENCES `projetocap`.`consultant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `projetocap`.`address` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `projetocap`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
