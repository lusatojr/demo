<!DOCTYPE>
<html>
<head>
<style>
form {
	box-sizing: border-box;
	width: 100%;
	border: 100pk solid black;
	float: left;
	align-content: center;
	align-items: center;
	background-color:lightgrey;
}
form { 
margin: 0 auto;
width: 600px;
}
</style>
</head>
<body>

<form action="registration.php" method="POST">
<h1 style="text-align: center;">REGISTRATION FORM</h1>
FName:<br> 
<input type="text" name="Fname">
<br>
<br>
MName: <br>
<input type="text" name="MName">
<br>
<br>
Lname:<br>
<input type="text" name="Lname">
<br>
<br>
E-mail Address:<br> 
<input type="text" name="email">
<br>
<br>
Telephone:<br>
<input type="tel" name="Telephone">
<br>
<br>
Username:<br>
<input type="text" name="username">
<br>
<br>
Password:<br> 
<input  type="password" name="password">
<br>
<br>

<button> submit </button>
</form>
</body>
</html>