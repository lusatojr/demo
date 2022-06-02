<?php
$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "herman";

$connect=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if (!$connect){
die('failed to connect to database:'.mysqli_connect_error());
}
?>