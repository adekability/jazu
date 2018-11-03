<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn']))
{
	//session_start();
	$username= $_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$password2= $_POST['password2'];
	if($password==$password2)
	{
		$password=md5($password);
		//$username=$_SESSION['username'];
		$sql="INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
		mysqli_query($db,$sql);
	//$query=mysqli_query($conn,"INSERT INTO users VALUES ('$username','$email','$password')")or die (mysql_error());
		$_SESSION['message']="You are now logged in";
		$_SESSION['username']=$username; // this
		//$username=$_SESSION['username'];
		//$username=$_POST['username'];
		header("location: home.php");//redirect to home page
	}
	else
	{
		
		$_SESSION['message']="The two passwords do not match";
	}
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="smil.css">
<style>
h0{
	
	display: block;
    font-size: 1.5em;
    margin-top: 0.em;
    margin-bottom: 0.40em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
}
.but{
	display: inline-block;
	padding: 5px 50px;
	margin-right: -26%;
	font-size: 24px;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	outline: none;
	color: #fff;
	background-color: #4CAF50;
	border: none;
	border-radius: 15px;
	box-shadow: 0 5px #999;
}
.but:hover {
		background-color: #3E8E41;
}
.but:active {
	background-color: #3E8E41;
	box-shadow: 0 5px #666;
	transform: translateY(4px);
}


.nazadbut {
	  display: inline-block;
  padding: 10px 10px;
  margin-top: 0%;
  margin-right: 0px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #9558C7;
  border: none;
  border-radius: 5px;
  box-shadow: 0 2px #999;
}
.nazadbut:hover {
	background-color: #3E8E41;
}
.nazadbut:active {
	background-color: #3E8E41;
	box-shadow: 0 5px #666;
	transform: translateY(4px);
}
</style>
</head>
<body>
<div class="header">
<!--<h0>Register</h0>-->
<h0><a href="firstpage.php"><input type="submit" value="Back" class="nazadbut"></a></h0>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method="post" action="register.php">
<table>
	<tr>
	<?php	//<td>Username:</td> ?>
		<td><input type="text" name="username" class="textInput" placeholder="username"required></td>

	</tr>
	<tr>
		<?php	//<td>Email:</td>?>
		<td><input type="email" name="email" class="textInput" placeholder="email"required></td>

	</tr>
	<tr>
		<?php	//<td>Password:</td>?>
		<td><input type="password" name="password" class="textInput" placeholder="password"required></td>

	</tr>
	<tr>
		<?php	//<td>Password again:</td>?>
		<td><input type="password" name="password2" class="textInput" placeholder="repeat password"required></td>

	</tr>
	<tr>
		<?php //<td></td> ?>
		<td><input type="submit" name="register_btn" value="Register" class="but"></td>
	</tr>
</table>
</form>
</body>
</html>