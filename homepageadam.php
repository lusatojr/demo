<?php
session_start();
if (!isset($_SESSION['username'])){
header('location: system.php');

}
?>
<!DOCTYPE>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>
#menu{
  height: 100%;
  width: 20%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:lightblue;
  overflow-x: hidden;
  transition: 0.5s
  padding-top: 60px
  }
  
#menu a {
   padding: 8px 8px 8px 32px;
   text-decoration: none;
   font-size: 25px;
   color: green;
   display: block;
   transition: 0.3s;
   }
  
  @media screen and (max-height: 450px) {
  .menu {padding-top: 15px;}
  .menu a {font-size: 18px;}
  }
  </style>
  <body>
  <div id="menu">
  <?php
  echo $_SESSION['username'];
  ?>
     <a href="homepageadam.php">Home</a>
	 <br>
	 <a href="registrationform.html">User Registration</a>
	 <br>
	 <a href="userlist.php">User list</a>
	 <br>
	 <a href="logout.php">logout</a>
	 <br>
 </div>
 </body>
 </html>