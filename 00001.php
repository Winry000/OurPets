<?php 
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
$cookie_name = "history";

$history = $_COOKIE["$cookie_name"];
 if ($history == "") {
     $cookie_value = "00001";
 }else{
     $cookie_value = "00001"."/".$history;
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
									<h2>Dog Toy</h2>
								</header>
								<div class="images"> <a href="./00001.html"><img src="images/images1.jpg" alt="" /></a> </div>
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
								<p> Item Number: <span>00001</span><br />
					                Name: Busy Buddy Bone Dog Toy, Medium</a> </p>
					              <p class="price">Wholesale Price: <strong>53 USD</strong></p>
								<p>PetSafe Busy Buddy Bristle Bone Dog ToyOur PetSafe Busy Buddy Bristle Bone Dog Toy combines your dog's favorite chews into one long lasting chew bone. A toy with great benefits, the PetSafe Busy Buddy Bristle Bone Dog Toy is a solid nylon chew bone one either end with varying textured rings taking up the middle. Durable nylon bristles clean and brush teeth, soft rubber ring with nubs massages and stimulates the gumline and Gnawhide rings (natural rawhide treat rings) offer delectable satisfaction and can be replaced once eaten. Each dog toy chew bone comes with two Gnawhide rings already in place plus two replacement Gnawhide rings. Your dog is guaranteed to chew this toy, and you will love watching his enthusiasm as he tackles the different textures and tastes the irresistible rawhide. Clean teeth, a healthy mouth and boredom control all in one fantastic dog toy.</p>


							</section>
						</div>
					<!-- Sidebar -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	</body>
</html>