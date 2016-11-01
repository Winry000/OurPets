<?php 
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
$cookie_name = "history";

$history = $_COOKIE["$cookie_name"];
 if ($history == "") {
     $cookie_value = "00002";
 }else{
     $cookie_value = "00002"."/".$history;
 }
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
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
									<h2>Dog Toy</h2>
								</header>
								<div class="images"> <a href="./00002.html"><img src="images/images2.jpg" alt="" /></a> </div>
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
								<p> Item Number: <span>00002</span><br />
					                Name: Outward Hound Lucky Dog Slots</p>
					              <p class="price">Wholesale Price: <strong>53 USD</strong></p>
								<p>Outward Hound Lucky Dog Slots Dog Toy; Do you feel lucky, pup? Well, do ya? This treat-dispensing slot machine-style game features a kibble-releasing paw press and 3 chambers of jackpot treat-winning fun! When pups push down the paw press treat releaser, Lucky Dog Slots makes it rain goodies! Fill up with your favorite treats or kibbles, and bring “Dog Vegas” fun home to your furry friend. Every dog's a winner with Luck Dog Slots! Bring out the genius in your dog with this interactive, treat-seeking puzzle and exercise toy. **Key Benefits** * Interactive, treat-seeking doggy fun * Keeps your pup playing longer * Made with durable food-safe plastic, BPA, PVC, & phthalate free * 3 treat chambers with loading compartments * Paw press treat releaser. Level 1 difficulty making it perfect for your pup scout</p>


							</section>
						</div>
					<!-- Sidebar -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	</body>
</html>