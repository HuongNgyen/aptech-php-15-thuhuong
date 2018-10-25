CREATE database APTECH_PHP_15;
CREATE TABLE `aptech_php_15`.`users` (
  `Id` INT UNSIGNED  AUTO_INCREMENT,
  `Name` nvarchar(225),
  `Email` varchar(225),
  `Password` varchar(225),
  PRIMARY KEY (`Id`));
  
  CREATE TABLE `aptech_php_15`.`employee` (
  `Id` INT UNSIGNED  AUTO_INCREMENT,
  `Name` nvarchar(225),
  `Email` varchar(225),
  `Password` varchar(225),
  PRIMARY KEY (`Id`));
  
  Insert into`users` (`Id`, `Name`, `Email`, `Password`) values
  ('1', 'Nguyễn Văn A', 'a@gmail.com','123');
  Insert into`users` (`Id`, `Name`, `Email`, `Password`) values
  ('2', 'Nguyễn Văn B', 'b@gmail.com','123');
  Insert into`users` (`Id`, `Name`, `Email`, `Password`) values
  ('6', 'Nguyễn Văn C', 'c@gmail.com','123');
  Insert into`users` (`Id`, `Name`, `Email`, `Password`) values
  ('3', 'Nguyễn Văn d', 'd@gmail.com','123');
  Insert into`users` (`Id`, `Name`, `Email`, `Password`) values
  ('4', 'Nguyễn Văn E', 'e@gmail.com','123');
  Insert into`users` (`Id`, `Name`, `Email`, `Password`) values
  ('9', 'Nguyễn Văn F', 'f@gmail.com','123'),
   ('7', 'Nguyễn Văn F', 'f@gmail.com','123'),
    ('8', 'Nguyễn Văn F', 'f@gmail.com','123')
  ;
  
  select* from users;
  
  ALTER TABLE aptech_php_15.users
ADD SDT varchar(50);

drop table employee;

select * FROM users where Id <= 4;

update users set Password = '12345' where Id = '3';

delete from users where Id = '6';

ALTER TABLE aptech_php_15.users
drop uId;

CREATE TABLE `aptech_php_15`.`upRole`
(
    rId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rTitle varchar(255) NOT NULL UNIQUE,
    rState int DEFAULT 1
);


INSERT INTO aptech_php_15.upRole (rTitle)
VALUES ('Administrator'),('Copywriter');

select * from upRole;

ALTER TABLE aptech_php_15.users
MODIFY COLUMN Email varchar(225) NOT NULL UNIQUE;

ALTER TABLE aptech_php_15.upRole
MODIFY COLUMN rState int DEFAULT 2;

ALTER TABLE aptech_php_15.users
add uCreatedDate datetime DEFAULT NOW();

ALTER TABLE aptech_php_15.users
MODIFY COLUMN uCreatedDate datetime DEFAULT NOW();






