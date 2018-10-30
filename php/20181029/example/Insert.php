<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4_1";

$conn = mysqli_connect($servername, $username ,$password, $dbname);

if(!$conn){
    die ("Connection fail:" .mysqli_connect_error());
}

$sql = "Insert into users (`Name`,`Email`, `Password`) values
('Nguyen Van E', 'e@gmail.com','12345')

";

if (mysqli_query($conn, $sql)){
    echo " New record create successly!!";

}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>