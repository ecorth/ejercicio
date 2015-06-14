SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lacuisine
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lacuisine` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `lacuisine` ;

-- -----------------------------------------------------
-- Table `lacuisine`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`estados` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`ciudad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`ciudad` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `estados_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `estados_id`),
  INDEX `fk_ciudad_estados1_idx` (`estados_id` ASC),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  CONSTRAINT `fk_ciudad_estados1`
    FOREIGN KEY (`estados_id`)
    REFERENCES `lacuisine`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`atracciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`atracciones` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(300) NOT NULL,
  `foto_url` VARCHAR(200) NOT NULL,
  `ciudad_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `ciudad_id`),
  INDEX `fk_atracciones_ciudad1_idx` (`ciudad_id` ASC),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  CONSTRAINT `fk_atracciones_ciudad1`
    FOREIGN KEY (`ciudad_id`)
    REFERENCES `lacuisine`.`ciudad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`contacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`contacto` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `apellido_pat` VARCHAR(20) NOT NULL,
  `apellido_mat` VARCHAR(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`lugares`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`lugares` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `mapa` VARCHAR(300) NOT NULL,
  `descripcion` VARCHAR(200) NULL,
  `foto` VARCHAR(100) NULL,
  `url` VARCHAR(45) NULL,
  `cap_max` VARCHAR(10) NULL,
  `ciudad_id` INT UNSIGNED NOT NULL,
  `contacto_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `ciudad_id`, `contacto_id`),
  INDEX `fk_lugares_ciudad1_idx` (`ciudad_id` ASC),
  INDEX `fk_lugares_contacto1_idx` (`contacto_id` ASC),
  CONSTRAINT `fk_lugares_ciudad1`
    FOREIGN KEY (`ciudad_id`)
    REFERENCES `lacuisine`.`ciudad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lugares_contacto1`
    FOREIGN KEY (`contacto_id`)
    REFERENCES `lacuisine`.`contacto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`tipos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
COMMENT = '		';


-- -----------------------------------------------------
-- Table `lacuisine`.`fotos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`fotos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `url_foto` VARCHAR(200) NOT NULL,
  `lugares_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `lugares_id`),
  INDEX `fk_fotos_lugares1_idx` (`lugares_id` ASC),
  CONSTRAINT `fk_fotos_lugares1`
    FOREIGN KEY (`lugares_id`)
    REFERENCES `lacuisine`.`lugares` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`caracteristicas_lugar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`caracteristicas_lugar` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `foto` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`telefonos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`telefonos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero` INT UNSIGNED NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `contacto_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `contacto_id`),
  INDEX `fk_telefonos_contacto1_idx` (`contacto_id` ASC),
  UNIQUE INDEX `numero_UNIQUE` (`numero` ASC),
  CONSTRAINT `fk_telefonos_contacto1`
    FOREIGN KEY (`contacto_id`)
    REFERENCES `lacuisine`.`contacto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`correos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`correos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(50) NOT NULL,
  `contacto_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `contacto_id`),
  INDEX `fk_correos_contacto1_idx` (`contacto_id` ASC),
  UNIQUE INDEX `direccion_UNIQUE` (`direccion` ASC),
  CONSTRAINT `fk_correos_contacto1`
    FOREIGN KEY (`contacto_id`)
    REFERENCES `lacuisine`.`contacto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`cuenta_con`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`cuenta_con` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `caracteristicas_lugar_id` INT UNSIGNED NOT NULL,
  `lugares_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `caracteristicas_lugar_id`, `lugares_id`),
  INDEX `fk_caracteristicas_lugar_has_lugares_lugares1_idx` (`lugares_id` ASC),
  INDEX `fk_caracteristicas_lugar_has_lugares_caracteristicas_lugar1_idx` (`caracteristicas_lugar_id` ASC),
  CONSTRAINT `fk_caracteristicas_lugar_has_lugares_caracteristicas_lugar1`
    FOREIGN KEY (`caracteristicas_lugar_id`)
    REFERENCES `lacuisine`.`caracteristicas_lugar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_caracteristicas_lugar_has_lugares_lugares1`
    FOREIGN KEY (`lugares_id`)
    REFERENCES `lacuisine`.`lugares` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lacuisine`.`lugares_has_tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lacuisine`.`lugares_has_tipos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lugares_id` INT UNSIGNED NOT NULL,
  `tipos_id` INT UNSIGNED NOT NULL,
  `foto` VARCHAR(45) NULL,
  `descripcion` VARCHAR(200) NULL,
  `cap` VARCHAR(10) NULL,
  PRIMARY KEY (`id`, `lugares_id`, `tipos_id`),
  INDEX `fk_lugares_has_tipos_tipos1_idx` (`tipos_id` ASC),
  INDEX `fk_lugares_has_tipos_lugares1_idx` (`lugares_id` ASC),
  CONSTRAINT `fk_lugares_has_tipos_lugares1`
    FOREIGN KEY (`lugares_id`)
    REFERENCES `lacuisine`.`lugares` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lugares_has_tipos_tipos1`
    FOREIGN KEY (`tipos_id`)
    REFERENCES `lacuisine`.`tipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
