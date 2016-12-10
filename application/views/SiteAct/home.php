<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/bl2.ico">
	<title>Welcome Betlords</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		
		background-color: #000000;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		width: 1300px;
		padding: 0px;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	
	#quote{
		color: white;
		font-size: 40px;
		position: relative;
		left: 200px;
		top: 400px;
	}
	
	h1 {
		color: #white;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 30px;
		font-weight: normal;
		font-family: Courier;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#log {
		margin: 10px;
		padding : 30px;
		border: 2px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		width: 300px;
		height: 250px;
		position: absolute;
		right: 50px;
		top: 200px;
		color: white;
		font-family: Courier;
		font-size: 20px;
		
		
	}
	input[type=submit] {
		background-color: #AEB6BF;
		font-family: Courier;
		font-size: 20px;
		
		width: 300px;
		height: 30px;
	}
	input[type=submit]:hover {
		background-color: #E5E8E8;
	}
	input[type=text] {
		width: 300px;
		height: 20px;
	}
	input[type=password] {
		width: 300px;
		height: 20px;
	}
	#footer{
		height: 5px;
		color: white;
		position: absolute;
		right: 10px;
		top: 650px;
	}
	#container{
		background-image: url("../Images/betwp.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		border: 1px solid white;
		box-shadow: 0 0 8px #D0D0D0;
		height: 650px;
		width: 1330px;
		
	}
	#header {
		padding: 10px 30px;;
		box-shadow: 0 0 8px #D0D0D0;
		background-color: black;
		color: white;
		width: 1270px;
	}
	</style>
</head>
<body>
<div id = "container">
<div id="header">
	<center><h1>Betlords.com</h1></center>
	<marquee><center><h1>When you win We lose, When you lose We win </h1></center></marquee>
</div>
<div id = "quote">"Winner Never Stops Trying"</div>
	<div id="log">
		<center><h3>Login</h3></center>
		<form action = "Site/log" method = "post">
		<br>
		Username: <input type = "text" name = "username"><br>
		Password: <input type = "password" name = "password"><br><br><br>
		<input type = "Submit" value = "Login">
		</form>
	</div>
<div id = "footer">
<p>2016 CopyRights&copy Betlords.com</p>
</div>
</div>

</body>
</html>
