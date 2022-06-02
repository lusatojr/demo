<?php
include('connect.php');

	$Fname = $_POST['Fname'];
	$MName = $_POST['MName'];
	$Lname = $_POST['Lname'];
	$email = $_POST['email'];
	$Telephone= $_POST['Telephone'];
	
	$sql="UPDATE `registration` SET`Fname`='$Fname',`MName`='$MName',`Lname`='$Lname',`email`='$email',`Telephone`='$Telephone' WHERE Fname='$Fname'";
	$res=mysqli_query($connect,$sql);
	if ($res) {
		//echo 'registration is successfully';
		header('Location: userlist.php');
	}else{
		echo 'registration is unsuccessfully';
	}
?>