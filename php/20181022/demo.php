<h1 >Hello world</h1>
<?php
$ten = "Huong";
$tuoi = "21";
$x = 5;
$y = '5';
echo "<h1 style = 'color:red;'>$ten la toi</h1>";
echo "<h1 style = 'color:blue;'>$tuoi</h1>";
echo $x++ ;
echo "<br>" ;//$x++ trả về r mới cộng
//++$x cộng r trả về x

if ($x == $y){
    echo 'True';
} else {
    echo'False';
}
echo "<br>";
echo strpos("Hello world!", "l"); //bt dau tu 0
echo "<br><a href=\"./\">BACK</a>";
echo "<h1>1. SYNTAX</h1>";
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

?>



