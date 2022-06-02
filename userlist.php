<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head></head>
	<style>
		.contents
		{
width: 80%;
margin-left: 20%;
min-height: 580px;
background-image: 

		}
	</style>

<body>

<?php
$select= mysqli_query($connect, "SELECT * FROM registration");
$num= mysqli_num_rows($select);

if ($num== false) {
	echo "data not found in the database";
}

else{
?>

<div class="contents">
<table border="2" width="100%">
<caption>REGISTERED USERS LIST</caption>
<tr>
<th>FirstName</th>
<th>MiddleName</th>
<th>LastName</th>
<th>Email</th>
<th>Telephone</th>
<th>UPDATE</th>
<th>DELETE</th>
</tr>
<?php
while ($rows = mysqli_fetch_array($select)) {
	?>
<tr>
<td><?php echo $rows['Fname']; ?></td>
<td><?php echo $rows['MName']; ?></td>
<td><?php echo $rows['Lname']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['Telephone']; ?></td>
<td><a href="update.php?regno=<?php echo $rows['Fname'];?>"><button>UPDATE</button></a></td>
<td><a href="delete.php?regno=<?php echo $rows['Fname'];?>"><button>DELETE</button></a></td>
</tr>
<?php
}
?>
</table>
</div>
<?php
}
?>

</body>
</html>