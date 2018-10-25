
<?php
//array không dùng echo mà dùng var_dump chuỗi
if ($_GET['email'] === "abc@gmail.com" & $_GET['password'] === "123" ){
    echo "đăng nhập thành công <br>";
    echo $_GET['email'];
} else{
    header("Location: http://localhost/php/20181024/form.php");
    exit();
}