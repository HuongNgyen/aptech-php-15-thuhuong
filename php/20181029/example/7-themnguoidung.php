<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4_1";

$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$_POST['name'];$_POST['email'];$_POST['password'];
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password =  mysqli_real_escape_string($conn,$_POST['password']);


//kiểm tra chỗ tên email password dien vao neu con trong thi bat nhap con khong thi chay lenh sql
if(!empty($name)){
    if(!empty($email)){
        if (!empty($password)){
            $sql = "Insert into users (`Name`,`Email`, `Password`) values
('$name', '$email','$password')";
        if ($conn->query($sql) ==TRUE){
    header("Location:table.php");
}
else{
    echo "Error" .$sql . "<br/>" .$conn->error;
}
        }
        else {echo "Please enter your password";
        }

    }
    else {
        echo "Please enter your email";
       
    }

}
else {
    echo "Please enter your name!!";
  
}
$conn->close();
?>
