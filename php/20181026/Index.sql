CREATE DATABASE `aptech_php_15_ss3`;

use aptech_php_15_ss3;

create TABLE  `aptech_php_15_ss3`.`users` (
 `Id` int unsigned auto_increment primary key,
 `Name` nvarchar(255),
 `Email` varchar(255),
 `Password` varchar(255));
 
 insert INTO users (`Id`, `Name`, `Email`,`Password`) value 
 (null,'Nguyễn Văn Hùng', 'hung@gmail.com', '12345'),
  (null,'Nguyễn Văn Mai', 'mai@gmail.com', '12345'),
   (null,'Nguyễn Văn Tuấn', 'tuan@gmail.com', '12345'),
    (null,'Nguyễn Văn Thành', 'thanh@gmail.com', '12345'),
     (null,'Nguyễn Văn Dũng', 'dung@gmail.com', '12345');
     
     SELECT * FROM users;
      Select distinct `Name` from users;
      
     /*select top*/
     
      SELECT * FROM users 
	  LIMIT 3;
      
      select count(`Id`) AS `COUNT_Id` from users;
      select min(`Id`) as `min_id` from users;
      SELECT MAX(`Password`) as `password_id` from users;
      SELECT * FROM users where `Name` like 'N%n';
      SELECT * FROM users where `Name` like '_V%';
      
      SELECT * FROM users where `Name` like '%or%';
      
      
      