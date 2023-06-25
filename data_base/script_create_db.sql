-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema aromas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `aromas` ;

-- -----------------------------------------------------
-- Schema aromas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `aromas` DEFAULT CHARACTER SET utf8 ;
USE `aromas` ;

-- -----------------------------------------------------
-- Table `aromas`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aromas`.`cliente` ;

CREATE TABLE IF NOT EXISTS `aromas`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `data_nascimento` DATE NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aromas`.`endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aromas`.`endereco` ;

CREATE TABLE IF NOT EXISTS `aromas`.`endereco` (
  `idendereco` INT NOT NULL AUTO_INCREMENT,
  `logradouro` VARCHAR(255) NOT NULL,
  `numero` VARCHAR(45) NULL,
  `complemento` VARCHAR(45) NULL,
  `bairro` VARCHAR(255) NOT NULL,
  `cidade` VARCHAR(255) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `cliente_idcliente` INT NOT NULL,
  PRIMARY KEY (`idendereco`),
  CONSTRAINT `fk_endereco_cliente`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `aromas`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
