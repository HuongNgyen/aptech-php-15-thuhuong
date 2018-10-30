<?php
function connectDatabase(
    $serverName = "localhost", 
    $userName = "root", 
    $password = "",
    $dbname = "aptech_php_15_ss4_1")
{
    $conn = new mysqli($serverName, $userName, $password,$dbname);
    if ($conn->connect_error) {
        return die("Connection failed : " . $conn->connect_error);
    }
    return $conn;
}
