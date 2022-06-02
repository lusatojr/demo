<?php
include('connect.php');
if(count($_POST)>0){
mysqli_query($connect,"UPDATE  'registration' set Fname='" . $_POST['Fname'] . "', MName='" . $_POST['MName'] . "', LName='" . $_POST['LName'] .  "', email='" . $_POST['email'] . "', Telephone='" . $_POST['Telephone'] . "', Username='" . $_POST['Username'] . "', password='" . $_POST['password'] . "' WHERE Username='" .$_POST['Username'] ."'");
$message ="Record Modified Successfuly";
}
$res = mysqli_query($connect,"SELECT * FROM registration WHERE Username='" . $_GET['regno'] . "'");
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
<label>Fname</label><br>
<input type="text" name="Fname" class="form-control" value="<?php echo $row["Fname"];?>">
</div>
<div class="form-group">
<label>M_name</label><br>
<input type="text" name="MName" class="form-control" value="<?php echo $row["MName"];?>">
</div>
<div class="form-group">
<label>L_name</label><br>
<input type="text" name="Lname" class="form-control" value="<?php echo $row["LName"];?>">
</div>
<div class="form-group">
<label>Email</label><br>
<input type="text" name="email" class="form-control" value="<?php echo $row["email"];?>">
</div>
<div class="form-group">
<label>Telephone</label><br>
<input type="text" name="Telephone" class="form-control" value="<?php echo $row["Telephone"];?>">
</div>
<div class="form-group">
<label>Username</label><br>
<input type="text" name="Username" class="form-control" value="<?php echo $row["Username"];?>">
</div>
<div class="form-group">
<label>Password</label><br>
<input type="text" name="password" class="form-control" value="<?php echo $row["password"];?>">
</div>
<br>
<button> Submit </button>
<button><a href="userlist.php" class="btn btn-default">cancel</a></button>
</form>
</body>
</head>
</html>