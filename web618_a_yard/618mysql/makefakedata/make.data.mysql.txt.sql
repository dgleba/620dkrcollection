-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tbla`;
CREATE TABLE `tbla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `2020-05-13` (`id`, `name`) VALUES
(1,	''),
(2,	'');

-- 2020-05-13 21:28:54


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2020-05-13[May-Wed]17-37PM 




CREATE TABLE `data` 
(
  `id`         bigint(20) NOT NULL      AUTO_INCREMENT,
  `datetime`   timestamp  NULL          DEFAULT CURRENT_TIMESTAMP,
  `channel`    int(11)                  DEFAULT NULL,
  `value`      float                    DEFAULT NULL,

  PRIMARY KEY (`id`)
);


DELIMITER $$
CREATE PROCEDURE generate_data()
BEGIN
  DECLARE i INT DEFAULT 0;
  WHILE i < 1000 DO
    INSERT INTO `data` (`datetime`,`value`,`channel`) VALUES (
      FROM_UNIXTIME(UNIX_TIMESTAMP('2014-01-01 01:00:00')+FLOOR(RAND()*31536000)),
      ROUND(RAND()*100,2),
      1
    );
    SET i = i + 1;
  END WHILE;
END;
$$
DELIMITER ;

CALL generate_data();
drop procedure generate_data();

_____________



CREATE if not exists TABLE `data1` 
(
  `id`         bigint(20) NOT NULL      AUTO_INCREMENT,
  `datetime`   timestamp  NULL          DEFAULT CURRENT_TIMESTAMP,
  `channel`    int(11)                  DEFAULT NULL,
  `value`      float                    DEFAULT NULL,

  PRIMARY KEY (`id`)
);

select now();
DELIMITER $$
CREATE PROCEDURE generate_data3()
BEGIN
  DECLARE i INT DEFAULT 0;
  WHILE i < 30100 DO
    INSERT INTO `data1` (`datetime`,`value`,`channel`) VALUES (
      now(),
      2,
      1
    );
    SET i = i + 1;
  END WHILE;
END;
$$
DELIMITER ;

CALL generate_data3();
drop procedure generate_data3();
select now();

_____________


for i {}




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2020-05-13[May-Wed]19-53PM 


SELECT * INTO data2 FROM data1 WHERE id<10001;


CREATE TABLE IF NOT EXISTS data3 LIKE data1;
INSERT data3
SELECT * FROM data1 where id<10001;




#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
#@  
#@  
#@  
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   2020-05-13[May-Wed]20-32PM 


mysqldump -u USER -p DATABASE_NAME TABLE_NAME --no-create-info --where='id>=29960000' | sed -e "s/([0-9]*,/(NULL,/gi" > FILENAME.sql


_____________




