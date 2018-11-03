<?php
session_start();
 include_once("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>home</title>
<link rel="stylesheet" type="text/css" href="smile.css">
<link rel="stylesheet" type="text/css" href="buttonforupload.css">
<style>
.lgbtn {
	  display: inline-block;
  padding: 5px 10px;
  margin-top:0%;
  margin-right:1350px;
  font-size: 18px;
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
.lgbtn:hover {
	background-color: #3E8E41;
}
.lgbtn:active {
	background-color: #3E8E41;
	box-shadow: 0 5px #666;
	transform: translateY(4px);
}
</style>
</head>
<body>
<!--<div class="header">-->
<a href="logout.php"><input type="submit" name="lgbtn" class="lgbtn" value="exit"></a>
<a href="add.php">Добавить новость</a>
<!--<h1>Home<h1>-->
<?php //<div><h4>Welcome <?php echo $_SESSION['username'];<h4></div>?>
<?php //<h1>Register, login and logout user php ,mysql</h1> ?>
<!--</div>-->






















<?php
/*$db=mysqli_connect("localhost","root","","authentication");
$sql="SELECT * FROM users";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result))
{
	echo "<div id='file_div'>";
	echo "</div>";
}*/
?><!--
<form action="home.php" method="post" enctype="multipart/form-data">
<p><input type="file" name="file_array[]" class="button A"></p>
<p><input type="file" name="file_array[]" class="button B"></p>
<p><input type="file" name="file_array[]" class="button C"></p>
<input type="submit" value="Upload all files">
</form>-->
<?php
/*
if(isset($_FILES['file_array']))
{
	$db=mysqli_connect("localhost","root","","authentication");
	$file=$_FILES['file_array']['name'];
	$sql="INSERT INTO users (file_array) VALUES ('$file')";
	mysqli_query($db,$sql);
	
	$name_array=$_FILES['file_array']['name'];
	$tmp_name_array=$_FILES['file_array']['tmp_name'];
	$type_array=$_FILES['file_array']['type'];
	$size_array=$_FILES['file_array']['size'];
	$error_array=$_FILES['file_array']['error'];
	for($i=0;$i<count($tmp_name_array);$i++)
	{
		if(move_uploaded_file($tmp_name_array[$i],"uploads/".$name_array[$i]))
		{
			
			echo $name_array[$i]."upload is complete <br>";
		}
		else{echo "move_uploaded_file function failed for".$name_array[$i]."<br>";}
	}
}*/
?>
</body>
</html>