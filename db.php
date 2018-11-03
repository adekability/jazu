<?php
$connection=mysqli_connect("localhost","root","","post");
//mysqli_query($connection,"SET NAMES 'utf-8' ");
if(!$connection)
{
	exit(mysqli_error());
}
?>