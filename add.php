<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>
Добавление новости
</title>
</head>
<body>
<form method="post" action="add.php">
Название новости<br />
<input type="text" name="title"/><br />
Текст новости <br />
<textarea cols="40" rows="10" name="text"></textarea><br />
Автор новости <br />
<input type="text" name="author"/><br /><br />
<input type="hidden" name="date" value="<?php echo date('Y-m-d');?>">
<input type="hidden" name="time" value="<?php echo date('H:i:s');?>"> 
<input type="submit" name="add" value="Добавить" />
</form>
<?php
 include_once("db.php");
 $dc=mysqli_connect("localhost","root","","authentication");
 if(isset($_POST['add']))
 {
 $title=strip_tags(trim($_POST['title']));
 $text=strip_tags(trim($_POST['text']));
 mysqli_query($connection,"INSERT INTO post(title, text) VALUES ('$title','$text')");
 mysqli_close($connection);
 }
?>
</body>
</html>