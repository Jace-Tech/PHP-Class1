-- Creating Database
CREATE DATABASE IF NOT EXISTS `testing`;
USE `testing`; 

-- Create A Table
CREATE TABLE `data` (`id` VARCHAR(50), `age` INT(3), `name` VARCHAR(50), `date` DATE);

-- INSERT TO TABLE
INSERT INTO `data` (`id`, `name`, `age`, `date`) VALUES ('user-1', 'john smith', 30, '2022-04-27')

-- Insert multiple rows into
INSERT INTO `data` (`id`, `name`, `age`, `date`) VALUES ('user-2', 'James Doe', '30', '2022-04-10'), ('user-3', 'Mark Stone', '22', '2022-04-04'); 

-- SELECT

-- Selecting a single column [eg id]
SELECT `id` FROM `data`

-- Selecting two or more column
SELECT `id`, `name` FROM `data`

-- Select everything
SELECT * FROM `data`



-- Using WHERE clause

SELECT * FROM `data` WHERE `id` = 'user-1'

-- Using LIMIT clause
SELECT * FROM `data` WHERE `age` > 22 LIMIT 1; 



-- UPDATE 

UPDATE `data` SET `name` = 'Henry Grande', `age` = 79 WHERE `id` = 'user-1' 


-- DELETE
DELETE FROM `data` WHERE `id` = 'user-1'