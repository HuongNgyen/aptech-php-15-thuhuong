CREATE TABLE posts(
`Id` int unsigned primary key auto_increment,
`Title` nvarchar(255),
`Category_Id` int);
CREATE TABLE categories(
`Id` int unsigned primary key auto_increment,
`Name` nvarchar(255));

drop table posts;


INSERT INTO posts (`Id` , `Title`, `Category_Id`) values 
(null, 'fskfbskvskvbsv', '1'),
(null, 'fskfbskvskvbsv', '1'),
(null, 'fskfbskvskvbsv', '1'),
(null, 'fskfbskvskvbsv', '3'),
(null, 'fskfbskvskvbsv', '2'),
(null, 'fskfbskvskvbsv', '3'),
(null, 'fskfbskvskvbsv', '2'),
(null, 'fskfbskvskvbsv', '2'),
(null, 'fskfbskvskvbsv', '3'),
(null, 'fskfbskvskvbsv', '1'); 


select * from posts;

INSERT INTO categories(`Id` , `Name`) values 
 (null, 'Kinh Tế'),
 (null,'Chính Trị'),
 (null, 'Xã Hội');
 
 select * from categories;
 
 /*XEM tất cả cacs bài post có posts.Category_Id = categories.Id*/
 select posts.Id, posts.Title, categories.Name 
 from posts
  join categories on (posts.Category_Id = categories.Id)
  order by posts.Id ASC;
  
  /*xem tất cả các bài có categories.Id = 1*/
  Select posts.Id, posts.Title, categories.Name, categories.Id AS Id_main
  from posts, categories
  where 
  (posts.Category_Id ='1' and categories.Id = '1')
  order by posts.Id ASC;
  
  
  -- sua category co Id = 1 thanh tai chinh
  
  Update categories set Name = 'Tai chinh' where Id = '1';
  
  
  SELECT * FROM posts WHERE category_id = 1;
  
  /*Select posts.Id, posts.Title, categories.Name, categories.Id AS Id_main
  from posts 
  join categories on (posts.Category_Id = categories.Id)
  where categories.Id = '1'
  order by posts.Id ASC;*/
   
  /*xem tất cả các bài có posts.Id = 5*/
  SELECT *
  from posts, categories 
  where (posts.Category_Id = categories.Id) AND (posts.Id = '5');
 
 
 
 SELECT * FROM categories WHERE id = 2;
 SELECT * FROM posts WHERE id = 5;
 
 
CREATE TABLE category_post(
Id int unsigned primary key auto_increment,
category_Id int ,
post_Id int
);


insert INTO  category_post (`category_Id`, `post_Id`)
value ('2','1'), ('3','1'), ('2','2'), ('1','4'), ('3','5');


SELECT * FROM category_post;


SELECT p.Id, p.Title, pc.category_Id, c.Id as Id_bonus
FROM ((category_post as pc
INNER JOIN  posts as p On p.Id = pc.post_Id) INNER JOIN categories as c 
on ( p.category_Id = c.Id))
where p.Id='5';





 
 
 

 
 
 
 
 
 
 
 
  
  
  
  
  
  
  
  
  
 /* select p.Id, p.Title, c.Name 
 from posts as p
  join categories as c on (p.Category_Id = c.Id)
  order by p.Id ASC;*/
  
  
  
  
  
 
