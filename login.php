<!DOCTYPE HTML>
<html>
	<head>
		<title>OurPets</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
	<!-- 	<script src="main.js"></script> -->
		<script type="text/javascript" src="admin.json"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>

	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Our Pets</a></h1>
						<span></span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html">Homepage</a></li>
							<li><a href="./About.html">About</a></li>
							<li><a href="./About.html">Services</a></li>
							<li><a href="./News.html">News</a></li>
							<li ><a href="./contacts.php">Contact</a></li>
						</ul>
					</nav>

			</div>
		</div>
		<div id="main">
			<div class="container">
				<header>
					<?php
					
					if (isset($_POST['submit'])) {
					
					$username=$_POST['username'];
					$password=$_POST['password'];
					$hash1 = password_hash($username, PASSWORD_DEFAULT); //encryption
					$hash = password_hash($password, PASSWORD_DEFAULT);

					$file = fopen("admin.txt", 'r') or die("Unable to open file!");
					$read_user = @trim(fgets($file));  
					$read_pass = @trim(fgets($file));

					fclose($file);

					if (password_verify($read_user, $hash1) && password_verify($read_pass, $hash)) { //decryption
						echo("Success login! The clients' names are:")."<br>"; // Redirecting To Other Page
						$myfile = fopen("name.txt", "r") or die("Unable to open file!");
						while(!feof($myfile)) { 
							echo fgets($myfile)."<br>";
						}
					} else {
					echo "Username or Password is invalid";
					}
					fclose($myfile);
					}
					?>
			</header>
				<div class="divider">&nbsp;
				</div>
 			</div>
 		</div>				
		<!-- Content -->
</body>

</html>