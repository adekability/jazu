
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="slime.css">
<link rel="stylesheet" type="text/css" href="button.css">
<link rel="stylesheet" type="text/css" href="backforreader.css">
<link rel="stylesheet" type="text/css" href="header.css">
<script type="text/javascript" src="naznachenie.js"></script>
<!--<link rel="shortcut icon" type="image/x-icon" href="icon.jpg">-->
</head>
<body onload="docIsLoaded()">
<div class="header"><a href="firstpage.php">
<input type="submit" value="Back" class="nazadbut"></a>
<h0>Login</h0>
</div>
<form method="post" action="login.php">
<table>
<tr>
		<td><input type="radio" name="chosenInput" value="user" checked="checked">username<br>
			
		<td><input type="radio" name="chosenInput" value="pass">password<br></td></td>
		</tr>
	<tr>
	<?php	//<td>Username:</td> ?>
		<td><input type="text" name="username" class="textInput" placeholder="username"required"></td>

	</tr>
	<tr>
		<?php	//<td>Password:</td>?>
		<td><input type="password" name="password" class="textInput" placeholder="password"required></td>

	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr>
		<?php //<td></td> ?>
		<td><input type="submit" name="login_btn" value="Login" class="but">
		<!--style="display: inline-block;
	padding: 15px 25px;
	font-size: 24px;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	outline: none;
	color: #fff;
	background-color: #4CAF50;
	border: none;
	border-radius: 15px;
	box-shadow: 0 9px #999;"-->
		<!--<div type="submit" name="login_btn" value="Login" class="box"><div>-->
		<!--<button class="button">Login</button> -->
		</td>
	</tr>
	<!--<tr>
	<td><input type="submit" value="Back" class="nazadbut">
	</td>
	</tr>-->
</table>
</form>
<input name ="q" type="submit" class="button q" value="q" onclick="keyboardPressed(this.value)"> 
<input name ="w" type="submit" class="button w" value="w" onclick="keyboardPressed(this.value)">
 <input name ="e" type="submit" class="button e" value="e" onclick="keyboardPressed(this.value)">
 <input name ="r" type="submit" class="button r" value="r" onclick="keyboardPressed(this.value)">
 <input name ="t" type="submit" class="button t" value="t" onclick="keyboardPressed(this.value)">
 <input name ="y" type="submit" class="button y" value="y" onclick="keyboardPressed(this.value)">
 <input name ="u" type="submit" class="button u" value="u" onclick="keyboardPressed(this.value)"> 
 <input name ="i" type="submit" class="button i" value="i" onclick="keyboardPressed(this.value)"> 
 <input name ="o" type="submit" class="button o" value="o" onclick="keyboardPressed(this.value)"> 
 <input name ="p" type="submit" class="button p" value="p" onclick="keyboardPressed(this.value)">
<input name ="a" type="submit" class="button a" value="a" onclick="keyboardPressed(this.value)">
 <input name ="s" type="submit" class="button s" value="s" onclick="keyboardPressed(this.value)"> 
 <input name ="d" type="submit" class="button d" value="d" onclick="keyboardPressed(this.value)"> 
 <input name ="f" type="submit" class="button f" value="f" onclick="keyboardPressed(this.value)"> 
 <input name ="g" type="submit" class="button g" value="g" onclick="keyboardPressed(this.value)"> 
 <input name ="h" type="submit" class="button h" value="h" onclick="keyboardPressed(this.value)"> 
 <input name ="j" type="submit" class="button j" value="j" onclick="keyboardPressed(this.value)"> 
 <input name ="k" type="submit" class="button k" value="k" onclick="keyboardPressed(this.value)">
 <input name ="l" type="submit" class="button l" value="l" onclick="keyboardPressed(this.value)">
<input name ="z" type="submit" class="button z" value="z" onclick="keyboardPressed(this.value)">
<input name ="x" type="submit" class="button x" value="x" onclick="keyboardPressed(this.value)">
 <input name ="c" type="submit" class="button c" value="c" onclick="keyboardPressed(this.value)">
 <input name ="v" type="submit" class="button v" value="v" onclick="keyboardPressed(this.value)"> 
 <input name ="b" type="submit" class="button b" value="b" onclick="keyboardPressed(this.value)"> 
 <input name ="n" type="submit" class="button n" value="n" onclick="keyboardPressed(this.value)"> 
 <!--<input type="submit" class="button m" value="m">-->
 <button name="m" class="button m">m</button>
 	</body>
</html>