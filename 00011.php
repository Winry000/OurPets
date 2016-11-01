<?php 
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
$cookie_name = "history";

$history = $_COOKIE["$cookie_name"];
 if ($history == "") {
     $cookie_value = "00011";
 }else{
     $cookie_value = "00011"."/".$history;
 }

setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); 

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
		<noscript>
			<link rel="stylesheet" href="../css/skel-noscript.css" />
			<link rel="stylesheet" href="..／css/style.css" />
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
	<!-- Header -->
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
				
					<!-- Content -->
						<div id="content" class="4u skel-cell-important">
							<section>
								<header>
									<h2>Cat Toy</h2>
								</header>
								<div class="images"> <a href="./00011.html"><img src="images/images11.jpg" alt="" /></a> </div>
								<button class="btn" onclick="location.href='./Services.html'">>>Back to shop</button> 
							</section>
						</div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="8u" style="width:800px">
							<section>
								<header>
									<h2>The Products detail:</h2>
								</header>
								 <p> Item Number: <span>00011</span><br />
					                Name: Catit Senses 2.0 Super Circuit</a> </p>
					              <p class="price">Wholesale Price: <strong>53 USD</strong></p>
								<p>New design is 24" longer than the original Catit Super Circuit and now comes in fresh green to blend with any home decor. Super Circuit consists of a ball that zips around inside a track in rollercoaster fashion. The mix of wavy and level track pieces ensures the ball travels up, down, and level. The special peek-a-boo cover stimulates cats to chase and swat the ball, which quickly adds up to hours of entertainment for prey-seeking cats. Super Circuit includes 8 curved pieces of track, 2 straight pieces of track, two end caps and 1 ball. Over 100" long. Replacement Ball sold separately. Ideal in combination with other Catit Senses 2.0 products. Please click on "More Information" for cleaning instructions.</p>
							</section>
						</div>
					<!-- Sidebar -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	</body>
</html>