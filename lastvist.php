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
	<div id="main">
			<div class="container">
				<div class="row">
					<header>
							<h2>Recently visited</h2>
					</header>
					<?php 
					$history = $_COOKIE["history"];
					$arrPath = explode("/", $history);
					foreach ($arrPath as $key => $value) {
					if ($key>5) break;
					switch($value) {
						 	case "00001" : { ?> <div class="Images"> <a href="./00001.php"><img src="images/images1.jpg" alt="" /></a> </div> <?php } break;
						 	case "00002" :{ ?> <div class="Images"> <a href="./00002.php"><img src="images/images2.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00003" :{ ?> <div class="Images"> <a href="./00003.php"><img src="images/images3.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00004" :{ ?> <div class="Images"> <a href="./00004.php"><img src="images/images4.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00005" :{ ?> <div class="Images"> <a href="./00005.php"><img src="images/images5.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00006" :{ ?> <div class="Images"> <a href="./00006.php"><img src="images/images6.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00007" : { ?> <div class="Images"> <a href="./00007.php"><img src="images/images7.jpg" alt="" /></a> </div> <?php } break;
						 	case "00008" :{ ?> <div class="Images"> <a href="./00008.php"><img src="images/images8.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00009" :{ ?> <div class="Images"> <a href="./00009.php"><img src="images/images9.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00010" :{ ?> <div class="Images"> <a href="./00010.php"><img src="images/images10.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00011" :{ ?> <div class="Images"> <a href="./00011.php"><img src="images/images11.jpg" alt="" /></a> </div> <?php }; break;
						 	case "00012" :{ ?> <div class="Images"> <a href="./00012.php"><img src="images/images12.jpg" alt="" /></a> </div> <?php }; break;
					    }
					}
					?>
					<button class="btn1" onclick="location.href='./Services.html'">>>Back to shop</button> 
				</div>
			</div>
		</div>
