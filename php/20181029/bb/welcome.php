<html>
    <div style="text-align:center">
<?php
/*if ($_GET['email'] =="abc@gmail.com" && $_GET['password']=="12345"){
    echo "Welcomw, admin!! <br>";
    echo 'Your username:'.$_GET['name'];
} else {
    echo "Hello, member! <br>";
    echo 'Your username:'.$_GET['name'];
}*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select * from users";
$row = $result->fetch_assoc();
if (($_GET['email']== $row["Email"] ) &&($_GET['password'] == $row["Password"])) {
    echo 'EMAIL: ' . $_GET['email'] . '<br>';
    echo 'PASSWORD: ' . $_GET['password'];
}
?>
</div>
</html>

