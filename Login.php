<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Tugas 4 PWeb</title>
		
		<style>
			body {
				background-color: #000080;
			}
			.login {
				margin: 100px auto;
				margin-top: 250px auto;
				width: 400px;
				padding: 20px;
				border: 1px solid #ccc;
				background: #6A5ACD;
			}
			input[type=text] {
				padding: 10px;
				width: 95%;
				margin: 10px auto;
			}
			input[type=Password] {
				padding: 10px;
				width: 95%;
				margin: 10px auto;
			}
			input[type=submit] {
				padding: 10px;
				width: 50%;
				margin: 10px auto;
			}
		</style>
	</head>
	<body>
		<font face="calibri" color="white">
			<div class="login">
				<h2 align="center">Sign In</h2>
				<form action="TugasPweb4.php" method="POST">
				Username :<input type="text" name="nama"><br>
				Password :<input type="Password" name="pass"><br>
				<input type="submit" text>
				</form>	
			</div>	
		</font>
		
		
	</body>
</html>