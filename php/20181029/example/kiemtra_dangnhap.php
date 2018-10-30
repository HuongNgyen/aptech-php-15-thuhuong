<?php
include 'helper.php';

$conn = connectDatabase();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where Email = ' $email  ' 
and Password = '$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)> 0){
    echo "dang nhap thanh cong!!";
}
else {
    echo "dang nhap that bai";
}

?>