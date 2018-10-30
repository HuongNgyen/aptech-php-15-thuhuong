CREATE database aptech_php_15_ss4;

use aptech_php_15_ss4;

CREATE TABLE users(
Id INT unsigned auto_increment primary KEY,
Name nvarchar (255),
Email varchar(255),
Password varchar(255),
Number_Phone varchar(255)
);
 alter table users add City nvarchar(255);
 
Insert into users (`Name`, 	`Email`, `Password`, `Number_phone`,`City`) 
value ('Nguyễn Hoài An', 'an@gmail.com', '12345','0778343210','Đà Nẵng'),
 ('Nguyễn Minh Long', 'long@gmail.com', '12345','0778343210','Đà Nẵng'),
 ('Lê Anh Nhi', 'nhi@gmail.com', '12345','0778343210','Huế'),
('Nguyễn Thị Cẩm Thơ', 'tho@gmail.com', '12345','0778343210','Hồ Chí  Minh'),
('Đỗ Phú Hậu', 'haut@gmail.com', '12345','0778343210','Đà Nẵng'),
('Trần Lan Anh', 'anh@gmail.com', '12345','0778343210','Đà Nẵng'),
('Nguyễn Thị Thu Hường', 'abc@gmail.com', '12345','0778343210','Đà Nẵng'),
('Hồ Ngọc Nguyên', 'nguyen@gmail.com', '12345','0778343210','Hà Nội'),
('Trần Văn Mai', 'maigmail.com', '12345','0778343210','Hà Nội');
Select * from users;




