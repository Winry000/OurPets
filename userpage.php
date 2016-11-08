<?php

$con = mysqli_connect('qianwenxiecom.ipagemysql.com','qianwenxie','12345','userdata');

if (!$con) {
	echo"not connected to server";
}
if(!mysqli_select_db($con,'userdata')){
	echo"the database not selected";
 }
$output = '';

$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$homephone = $_POST['homephone'];
$cellphone = $_POST['cellphone'];


if (isset($_POST['save'])) {
	$sql = "INSERT INTO userdata (firstname,lastname,email,address,homephone,cellphone) VALUES ('$firstname','$lastname','$email','$address','$homephone','$cellphone')"; //Insert Query
	mysqli_query($con, $sql);
	$output = "Form Submitted succesfully";
}


mysqli_close($con);
?> 

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
		<script src="main.js"></script>
	<!-- 	<script type="text/javascript" src="admin.json"></script> -->
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
							<li><a href="./Services.html">Services</a></li>
							<li><a href="./News.html">News</a></li>
							<li ><a href="./contacts.php">Contact</a></li>
						</ul>
					</nav>

			</div>
		</div>
		
		<!-- Main -->
		<div id="main">
			<div class="container">
				<header>
					<div class="log-form">
						<h4>User Creat Form</h4>
		                    <div style = "margin-left: 30px">
		                    	<?php print("$output");?>
		                    </div>
		                <a href="user.php" style="color:black"> >>User Page</a>
				</header>
				<div class="divider">&nbsp;
				</div>
 			</div>
 		</div>				
		<!-- Content -->
</body>

</html>