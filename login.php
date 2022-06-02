<?php
include('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
$res=mysqli_query($connect,$sql);

if (mysqli_num_rows($res) ==1){
     //echo 'log in successfully';
	 header('Location: homepageadam.html');
}else{
     echo 'incorrect credentials';
}
?>