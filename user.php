 
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
							<h4>User Creat Form</h4>
						   <!--  <form onsubmit="return validate();" action="login.php"> -->
						    <form action="userpage.php" method="POST">
							    <div class="register">
			   					 	<div>
			        					<label class="text">FirstName:</label>
				 						<input class="item" id="firstname" type="text" name="firstname" value="">
									</div>
								 	<div>
			        					<label class="text" >LastName:</label>
				 						<input class="item" id="lastname" type="text" name="lastname" value="" >
									</div>
									<div>
					 					<label class="text" >Email Address:</label>
						 				<input class="item" id="email" type="email" name="email" required /><br />
									</div>
									<div>
						 				<label class="text">Address:</label>
						 				<input class="item" id="address" type="text" name="address" value="" >
									</div>
									<div>
						 				<label class="text">Home Phone:</label>
						 				<input class="item" id="homephone" type="tel" name="homephone" value="" required/>
					 				</div>
					 				<div>
						 				<label class="text">Cell Phone:</label>
						 				<input class="item" id="cellphone" type="tel" name="cellphone" value="" required />
					 				</div>
					 				<div>
					 					<input name="save" value="save" type="submit" id="button" onclick = "saveKey()" />
				 					</div>        
			                    </div>
			                </form>
			           	</div>
		           	</div>
		           	<div class="right_container" style="float:left">
		           		<form action="user.php" method="POST">
		                	<h4>User Search Form</h4>
		                    <div>
			 					<input name="searchx" type="text" value= "" placeholder="Search for members..such as:Mary" size="35"/>        
			 					<input name="search" type="submit" value ="search>>" />
			 					<input name="button" type="submit" value ="clear" />          
		                    </div>
		                    <?php
								$con = mysqli_connect('qianwenxiecom.ipagemysql.com','qianwenxie','12345','userdata');

								if (!$con) {
								echo"not connected to server";
								}
								if(!mysqli_select_db($con,'userdata')){
								echo"the database not selected";
								}
								$output = '';

								if (isset($_POST['search'])){
								$searchq = $_POST['searchx'];

								$sql = "SELECT * FROM userdata WHERE firstname LIKE '%{$searchq}%' OR lastname LIKE '%{$searchq}%' OR email LIKE '%{$searchq}%' OR address LIKE '%{$searchq}%' OR homephone LIKE '%{$searchq}%' OR cellphone LIKE '%{$searchq}%'";
								$query= mysqli_query($con, $sql);
								$count = mysqli_num_rows($query);
								if($count == 0) {
									echo "There was no search results";
								} else {
									while ($row = mysqli_fetch_array($query)){
										echo "First name :{$row['firstname']}  <br> ".
									         "Last name: {$row['lastname']} <br> ".
									         "Email: {$row['email']} <br> ".
									         "Home address : {$row['address']} <br> ".
									         "Home phone : {$row['homephone']} <br> ".
									         "Cell phone : {$row['cellphone']} <br> ".
									         "--------------------------------<br>";
										$output .='<div>'.$fname .' '.$lname.'<div>';
									}
								}
								}

								mysqli_close($con);
								?>
		                </form>
		            </div>
				</header>
				<div class="divider" style="clear:both">&nbsp;</div>
 			</div>
 		</div>				
		<!-- Content -->
</body>

</html>