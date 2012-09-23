SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `sites`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sites` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `url` TEXT NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `deleted` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `checks`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `checks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `errors` INT(8) UNSIGNED NULL ,
  `warnings` INT(8) UNSIGNED NULL ,
  `site_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_checks_sites_idx` (`site_id` ASC) ,
  CONSTRAINT `fk_checks_sites`
    FOREIGN KEY (`site_id` )
    REFERENCES `sites` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(64) NOT NULL DEFAULT 'User' ,
  `username` VARCHAR(32) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sites_users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sites_users` (
  `site_id` INT UNSIGNED NOT NULL ,
  `user_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`site_id`, `user_id`) ,
  INDEX `fk_sites_has_users_users1_idx` (`user_id` ASC) ,
  INDEX `fk_sites_has_users_sites1_idx` (`site_id` ASC) ,
  CONSTRAINT `fk_sites_has_users_sites1`
    FOREIGN KEY (`site_id` )
    REFERENCES `sites` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sites_has_users_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `sites`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (1, 'http://delfi.ee', '2012-02-16 08:40:00', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (2, 'http://crime.ee', '2012-02-16 08:41:00', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (3, 'http://epl.ee', '2012-02-16 08:42:00', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (4, 'http://nytimes.com', '2012-02-16 08:43:00', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (5, 'http://sqroot.eu', '2012-02-16 08:43:00', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (6, 'http://jaa.ee', '2012-02-16 08:43:30', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (7, 'http://neti.ee', '2012-02-16 08:44:32', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (8, 'http://eesti.ee', '2012-02-16 08:47:54', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (9, 'http://piletilevi.ee', '2012-02-16 08:50:00', NULL);
INSERT INTO `sites` (`id`, `url`, `created`, `deleted`) VALUES (10, 'http://piletimaailm.com', '2012-02-16 08:50:10', NULL);

COMMIT;
