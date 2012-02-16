SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `projects_valify` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `projects_valify` ;

-- -----------------------------------------------------
-- Table `projects_valify`.`sites`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projects_valify`.`sites` ;

CREATE  TABLE IF NOT EXISTS `projects_valify`.`sites` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `url` TEXT NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projects_valify`.`checks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projects_valify`.`checks` ;

CREATE  TABLE IF NOT EXISTS `projects_valify`.`checks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `errors` INT(8) UNSIGNED NULL ,
  `warnings` INT(8) UNSIGNED NULL ,
  `site_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_checks_sites` (`site_id` ASC) ,
  CONSTRAINT `fk_checks_sites`
    FOREIGN KEY (`site_id` )
    REFERENCES `projects_valify`.`sites` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `projects_valify`.`sites`
-- -----------------------------------------------------
START TRANSACTION;
USE `projects_valify`;
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (1, 'http://delfi.ee', '2012-02-16 08:40:00');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (2, 'http://crime.ee', '2012-02-16 08:41:00');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (3, 'http://epl.ee', '2012-02-16 08:42:00');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (4, 'http://nytimes.com', '2012-02-16 08:43:00');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (5, 'http://sqroot.eu', '2012-02-16 08:43:00');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (6, 'http://jaa.ee', '2012-02-16 08:43:30');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (7, 'http://neti.ee', '2012-02-16 08:44:32');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (8, 'http://eesti.ee', '2012-02-16 08:47:54');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (9, 'http://piletilevi.ee', '2012-02-16 08:50:00');
INSERT INTO `projects_valify`.`sites` (`id`, `url`, `created`) VALUES (10, 'http://piletimaailm.com', '2012-02-16 08:50:10');

COMMIT;
