 
<!DOCTYPE HTML>
<html>
	<head>
		<title>OurPets</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/style.css"/>
	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="main.js"></script>
	<!-- 	<script type="text/javascript" src="admin.json"></script> -->
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
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
					<div class="left_container" style="float:left; width: 600px">
						<div class="log-form">
							<h4>Users of my company</h4>
							 <?php
								$con = mysqli_connect('qianwenxiecom.ipagemysql.com','qianwenxie','12345','userdata');

								if (!$con) {
									echo"not connected to server";
								}
								if(!mysqli_select_db($con,'userdata')){
									echo"the database not selected";
								}
								$output = '';
								$sql = "SELECT firstname, lastname FROM userdata";
								$result = $con->query($sql);

 								while($row = $result->fetch_assoc()) {
     								echo  $row["firstname"]. " " . $row["lastname"] . "<br>";
 								}
								mysqli_close($con);
								?>
			           	</div>
		           	</div>
		           	<div class="right_container" style="float:left">
		           			<h4>Users of my group company </h4>
		           			<?php
								$url = 'http://yaoxingliu.com/testRestful.php?';
								$cURL = curl_init();
								curl_setopt($cURL, CURLOPT_URL, $url);
								curl_setopt($cURL, CURLOPT_HTTPGET, true);
								curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1); // not to echo
								curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
								'Content-Type: application/json',
								'Accept: application/json',
								//'Content-Length: ' . strlen($data)
								));
								$result = curl_exec($cURL);
								$json = json_decode($result, true);
								foreach ($json as $values) {
								echo $values["firstName"]." ".$values["lastName"]."<br>";
								}
								curl_close($cURL);
								?>
		            </div>
				</header>
				<div class="divider" style="clear:both">&nbsp;</div>
 			</div>
 		</div>				
		<!-- Content -->
</body>

</html>