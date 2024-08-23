-- create table user

CREATE TABLE `loginsystem`.`user` 
(
     `id` INT NOT NULL AUTO_INCREMENT, 
     `username` VARCHAR(150) NOT NULL, 
     `email` VARCHAR(150) NOT NULL, 
     `password` VARCHAR(255) NOT NULL, 
     `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (`id`)
) ENGINE = InnoDB;

