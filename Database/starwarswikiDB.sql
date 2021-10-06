-- MySQL Script generated by MySQL Workbench
-- Wed Oct  6 08:36:16 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema starwarswikidb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema starwarswikidb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `id17703671_starwarswikidb` DEFAULT CHARACTER SET utf8 ;
USE `id17703671_starwarswikidb` ;

-- -----------------------------------------------------
-- Table `starwarswikidb`.`AccountInformation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id17703671_starwarswikidb`.`AccountInformation` (
  `Username` VARCHAR(45) NOT NULL,
  `Initials` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `FullName` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  `Character` VARCHAR(45) NULL,
  `Movie` VARCHAR(45) NULL,
  `Serie` VARCHAR(45) NULL,
  `Fight` VARCHAR(100) NULL,
  `Jedi` VARCHAR(45) NULL,
  `Sith` VARCHAR(45) NULL,
  PRIMARY KEY (`Email`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `starwarswikidb`.`Reactions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id17703671_starwarswikidb`.`Reactions` (
  `ReactionKey` INT NOT NULL,
  `Text` LONGTEXT NOT NULL,
  `Date` DATE NOT NULL,
  `Theme` VARCHAR(150) NOT NULL,
  `AccountInformation_Email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ReactionKey`),
  INDEX `fk_Reactions_AccountInformation_idx` (`AccountInformation_Email` ASC),
  CONSTRAINT `fk_Reactions_AccountInformation`
    FOREIGN KEY (`AccountInformation_Email`)
    REFERENCES `id17703671_starwarswikidb`.`AccountInformation` (`Email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;