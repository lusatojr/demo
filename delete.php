<?php
include('connect.php');

// sql to delete a record
$sql = "DELETE FROM registration WHERE Fname='" . $_GET["regno"] . "'";

if (mysqli_query($connect, $sql)) {
    //echo "Record deleted successfully";
	header("Location:userlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
