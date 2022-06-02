<?php
include('connect.php');
//post method to insert data into the database.....
$Fname = $_POST['Fname'];
$MName = $_POST['MName'];
$Lname = $_POST['Lname'];
$email = $_POST['email'];
$Telephone= $_POST['Telephone'];
$username = $_POST['username'];
$password = $_POST['password'];
//ready to insert and receive data in the database using mysqli
$sql="INSERT INTO registration (Fname,MName,Lname,email,Telephone) VALUES ('$Fname','$MName','$Lname','$email','$Telephone')";
$sql1="INSERT INTO login (username,password) VALUES ('$username','$password')";
$res=mysqli_query($connect,$sql);
$res1=mysqli_query($connect,$sql1);
//condition to test the database if the data are ready posted into the respectively relation.
if ($res&&$res1) {
	//echo 'registration is successfully then login to get into homepage.';
	header('Location: index.html');
}else{
	echo 'registration is unsuccessfully';
}
?>