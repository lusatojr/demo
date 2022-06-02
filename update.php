<?php
include('connect.php');
if(count($_POST)>0){
mysqli_query($connect,"UPDATE registration set Fname='" . $_POST['Fname'] . "', MName='" . $_POST['MName'] . "', Lname='" . $_POST['Lname'] .  "', email='" . $_POST['email'] . "', Telephone='" . $_POST['Telephone'] . "' WHERE Fname='" .$_POST['Fname'] ."'");
$message ="Record Modified Successfuly";
}
$res = mysqli_query($connect,"SELECT * FROM registration WHERE Fname='" . $_GET['regno'] . "'");
$row= mysqli_fetch_array($res);
?>
<!DOCTYPE>
<html>
<head>
<style>
</style>
<body>
<h2> Update Record </h2>
<form action="update1.php" method="post">
<div class="form-group">
<label>First_name</label><br>
<input type="text" name="Fname" class="form-control" value="<?php echo $row["Fname"];?>">
</div>
<div class="form-group">
<label>Middle_name</label><br>
<input type="text" name="MName" class="form-control" value="<?php echo $row["MName"];?>">
</div>
<div class="form-group">
<label>Last_name</label><br>
<input type="text" name="Lname" class="form-control" value="<?php echo $row["Lname"];?>">
</div>
<div class="form-group">
<label>Email</label><br>
<input type="text" name="email" class="form-control" value="<?php echo $row["email"];?>">
</div>
<div class="form-group">
<label>Telephone</label><br>
<input type="text" name="Telephone" class="form-control" value="<?php echo $row["Telephone"];?>">
</div>
<br>
<button> Submit </button>
<button><a href="userlist.php" class="btn btn-default">cancel</a></button>
</form>
</body>
</head>
</html>