<?php
include('connect.php');

$sql = "DELETE FROM student WHERE Username='" . $_GET["regno"] . "'";

if (mysqli_query($connect, $sql)) {
    //echo "Record deleted successfully";
	header("Location:userlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
