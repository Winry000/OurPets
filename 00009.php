<?php 
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
$cookie_name = "history";

$history = $_COOKIE["$cookie_name"];
 if ($history == "") {
     $cookie_value = "00009";
 }else{
     $cookie_value = "00009"."/".$history;
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
								<div class="images"> <a href="./00009.html"><img src="images/images9.jpg" alt="" /></a> </div>
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
								 <p> Item Number: <span>00009</span><br />
					                Name: Zanies Furry Mice Cat Toys</p>
					              <p class="price">Wholesale Price: <strong>53 USD</strong></p>
								<p>Fur Mice Set Of 12 Fun, furry mice entice cats to stalk and play. Play all day mice toys crafted with real rabbit fur and a long leather tail brings out a cat#39;s natural hunter instincts, offering loads of genuine feline fun and entertainment for everyone.</p>
							</section>
						</div>
					<!-- Sidebar -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	</body>
</html>