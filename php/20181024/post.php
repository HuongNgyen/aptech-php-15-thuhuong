<?php
if($_POST['email'] === "abc@gmail.com" && $_POST['password'] === "123"){
        echo "<font color='red'>Welcome to, admin</font> <br>";
        echo 'Tên đăng nhập là: ' .$_POST['email'] ;
        echo"<br>";
        echo 'Mật khẩu là: ' .$_POST['password'];
    }
    else{
        echo "Wrong username or password, please try again <br>";
        echo "<a href = 'http://localhost/php/20181024/form.php'> Back </a>";
    }
