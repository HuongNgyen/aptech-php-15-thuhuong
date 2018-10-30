<?php
include 'helper.php';

$conn = connectDatabase();

// Check connection
$id = $_GET['id'];//mysqli_real_escape_string($conn,$_POST['name']);
$email = $_GET['email'];//mysqli_real_escape_string($conn,$_POST['email']);


$sql = "Delete from users where Id = '$id' ";
if ($conn->query($sql) ==TRUE){
    header("Location:table.php");
}
else{
    echo "Error" .$sql . "<br/>" .$conn->error;
}
$conn->close();

?>