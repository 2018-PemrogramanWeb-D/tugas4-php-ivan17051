
<html>
	<head>
		<Title>Tugas PWeb 4</Title>
		<style>
			body {
				background-color: #000080;
			}
			.masuk {
				margin: 100px auto;
				margin-top: 250px auto;
				width: 400px;
				padding: 20px;
				border: 1px solid #ccc;
				background: #6A5ACD;
				font-size: 20;
				text-align: center;
			}
		</style>
	</head>
	<?php 
	session_start();
	$_SESSION["loginstatus"]=0;
	
	date_default_timezone_set("Asia/Jakarta");
	?>
	
	<body>
		<?php
			$nama = $pass = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$nama = test_input($_POST["nama"]);
				$pass = test_input($_POST["pass"]);
			}

			function test_input($data) {
			  	$data = trim($data);
			  	$data = stripslashes($data);
			  	$data = htmlspecialchars($data);
			  	return $data;
			}
			?>
		<?php

			if($_POST["nama"]=="ivan" && $_POST["pass"]=="1234"){
				$_SESSION["loginstatus"]=1;
			}
			else{
				header("Location: TugasPweb4.html");
				$_SESSION["loginstatus"]=0;
			}
		?>
		<font face="calibri" color="white" align="center">
			<div class="masuk">
				<?php 
				$hour=date('H');
				if($hour<11) echo "Selamat Pagi";
				else if($hour<15) echo "Selamat Siang";
				else if($hour<18) echo "Selamat Sore";
				else echo "Selamat Malam";
				?>

				, Ivan<br>
				Click to 
				<a href="Login.php">Logout</a>
		
			</div>	
		</font>
		
	</body>
</html>