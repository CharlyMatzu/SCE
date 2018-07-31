SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `sistema` ;
CREATE SCHEMA IF NOT EXISTS `sistema` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
SHOW WARNINGS;
USE `sistema` ;

-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuarios` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT ,
  `usr_id` VARCHAR(20) NOT NULL ,
  `usr_pss` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
  `usr_nombre` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
  `usr_apellido_mat` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
  `usr_apellido_pat` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
  `usr_grado` INT NOT NULL ,
  `usr_grupo` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL ,
  `usr_mail` VARCHAR(60) CHARACTER SET 'ucs2' COLLATE 'ucs2_spanish_ci' NULL ,
  `usr_fecha` DATETIME NULL ,
  `usr_matricula` INT NULL ,
  `grupos_idgrupos` INT NOT NULL ,
  PRIMARY KEY (`idusuarios`, `grupos_idgrupos`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `docentes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `docentes` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `docentes` (
  `iddocentes` INT NOT NULL AUTO_INCREMENT ,
  `doc_id` VARCHAR(20) NULL ,
  `doc_nombre` VARCHAR(50) NULL ,
  `doc_apellido` VARCHAR(45) NULL ,
  `doc_email` VARCHAR(60) NULL ,
  `doc_pss` VARCHAR(15) NULL ,
  `doc_lvl` INT NULL ,
  PRIMARY KEY (`iddocentes`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `siclo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `siclo` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `siclo` (
  `idsiclo` INT NOT NULL AUTO_INCREMENT ,
  `siclo_inicia_mes` INT NULL ,
  `siclo_inicia_ano` INT NULL ,
  `siclo_termina_mes` INT NULL ,
  `siclo_termina_ano` INT NULL ,
  `siclo_fecha` DATETIME NULL ,
  `docentes_iddocentes` INT NOT NULL ,
  PRIMARY KEY (`idsiclo`, `docentes_iddocentes`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `grupos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `grupos` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `grupos` (
  `idgrupos` INT NOT NULL AUTO_INCREMENT ,
  `docentes_iddocentes` INT NOT NULL ,
  `materias_idmaterias` INT NOT NULL ,
  `materias_docentes_iddocentes` INT NOT NULL ,
  `gr_grupo` VARCHAR(45) NULL ,
  `gr_asesor` VARCHAR(45) NULL ,
  `siclo_idsiclo` INT NOT NULL ,
  PRIMARY KEY (`idgrupos`, `docentes_iddocentes`, `materias_idmaterias`, `materias_docentes_iddocentes`, `siclo_idsiclo`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `materias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `materias` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `materias` (
  `idmaterias` INT NOT NULL AUTO_INCREMENT ,
  `docentes_iddocentes` INT NOT NULL ,
  `mat_materia` VARCHAR(100) NULL ,
  `mat_semestre` INT NULL ,
  `mat_docente` VARCHAR(45) NULL ,
  `siclo_idsiclo` INT NOT NULL ,
  `grupos_idgrupos` INT NOT NULL ,
  `grupos_docentes_iddocentes` INT NOT NULL ,
  `grupos_materias_idmaterias` INT NOT NULL ,
  `grupos_materias_docentes_iddocentes` INT NOT NULL ,
  `grupos_siclo_idsiclo` INT NOT NULL ,
  PRIMARY KEY (`idmaterias`, `docentes_iddocentes`, `siclo_idsiclo`, `grupos_idgrupos`, `grupos_docentes_iddocentes`, `grupos_materias_idmaterias`, `grupos_materias_docentes_iddocentes`, `grupos_siclo_idsiclo`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `asistencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `asistencia` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `asistencia` (
  `idasistencia` INT NOT NULL AUTO_INCREMENT ,
  `asis_docente` VARCHAR(80) NULL ,
  `asis_asistencia` TINYINT(1)  NULL ,
  `asis_usrnom` VARCHAR(45) NULL ,
  `asis_usrap` VARCHAR(60) NULL ,
  `asis_fecha` DATETIME NULL ,
  `usuarios_idusuarios` INT NOT NULL ,
  `usuarios_grupos_idgrupos` INT NOT NULL ,
  `siclo_idsiclo` INT NOT NULL ,
  `docentes_iddocentes` INT NOT NULL ,
  `materias_idmaterias` INT NOT NULL ,
  `materias_docentes_iddocentes` INT NOT NULL ,
  `materias_siclo_idsiclo` INT NOT NULL ,
  PRIMARY KEY (`idasistencia`, `usuarios_idusuarios`, `usuarios_grupos_idgrupos`, `siclo_idsiclo`, `docentes_iddocentes`, `materias_idmaterias`, `materias_docentes_iddocentes`, `materias_siclo_idsiclo`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `comentarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `comentarios` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `comentarios` (
  `idcomentarios` INT NOT NULL AUTO_INCREMENT ,
  `com_comentario` VARCHAR(350) NULL ,
  `com_fecha` DATETIME NULL ,
  `com_usuario` VARCHAR(45) NULL ,
  `usuarios_idusuarios` INT NOT NULL ,
  `usuarios_grupos_idgrupos` INT NOT NULL ,
  `docentes_iddocentes` INT NOT NULL ,
  `asistencia_idasistencia` INT NOT NULL ,
  `asistencia_usuarios_idusuarios` INT NOT NULL ,
  `asistencia_usuarios_grupos_idgrupos` INT NOT NULL ,
  `asistencia_siclo_idsiclo` INT NOT NULL ,
  `asistencia_docentes_iddocentes` INT NOT NULL ,
  `asistencia_materias_idmaterias` INT NOT NULL ,
  `asistencia_materias_docentes_iddocentes` INT NOT NULL ,
  `asistencia_materias_siclo_idsiclo` INT NOT NULL ,
  PRIMARY KEY (`idcomentarios`, `usuarios_idusuarios`, `usuarios_grupos_idgrupos`, `docentes_iddocentes`, `asistencia_idasistencia`, `asistencia_usuarios_idusuarios`, `asistencia_usuarios_grupos_idgrupos`, `asistencia_siclo_idsiclo`, `asistencia_docentes_iddocentes`, `asistencia_materias_idmaterias`, `asistencia_materias_docentes_iddocentes`, `asistencia_materias_siclo_idsiclo`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

SHOW WARNINGS;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
