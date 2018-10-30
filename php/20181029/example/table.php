<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss4_1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

  <div class="container">
    <div class="row">
      <div class="col-12">
            <table class="table">
                  <thead>
                    <tr class="Bg-table">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while(($row = $result->fetch_assoc()) !== null){
                        echo
                        "<tr>
                          <td scope='row'>{$row['Id']}</td>
                          <td scope='row'>{$row['Name']}</td>
                          <td>{$row['Email']}</td>
                          <td>{$row['Password']}</td>
                        </tr>\n";
                      }
                    ?>
                </tbody>
            </table>
      </div>
    </div>
  </div>
</body>
</html>






