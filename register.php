<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="css/registerstyle2.css">
	<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>   
	<script src="https://kit.fontawesome.com/605eb779b0.js" crossorigin="anonymous"></script>

</head>
<body>
	<!-- MENU DE NAVIGATION -->
	<header id="header-menu">
		<nav>
			<ul id="ul-nav-menu">
				<div class="nav-menu-left">
					<li><a href="#home"><img src="images/logo.png"></a></li>
				</div>
				<div class="nav-menu-center">
					<li><a href="index.php#home" id="homebtn">HOME</a></li>
					<li><a href="index.php#aboutus">ABOUT US</a></li>
					<li><a href="index.php#menu">MENU</a></li>
					<li><a href="login.php">RESERVATION</a></li>
					<li><a href="index.php#gallery">GALLERY</a></li>
					<li><a href="index.php#chefs">CHEFS</a></li>
					<li><a href="index.php#contact">CONTACT</a></li>
				</div>
				<div class="nav-menu-right">
					<li><a id="loginbtn" href="login.php">LOG IN</a></li>
					<li><a href="register.php">REGISTER</a></li>
				</div>
			</ul>
		</nav>
	</header>

	<section class="clearfix">
		<div>
			<h1>All in good taste!</h1>
			<form method="post" action="trait/registertrait.php" class="signin-container">
				<h2>Register</h2>
				<label>first name</label>
				<input type="text" name="firstname" required>
				<label>last name</label>
				<input type="text" name="lastname" required>
				<label>Login</label>
				<input type="Login" name="login" required>
				<label>Password</label>
				<input type="Password" name="password" required>
				<label>Birth date</label>
				<input type="date" name="birthdate" required>					
				<label>Email</label>
				<input type="Email" name="email" required>
				<label>Adress</label>
				<input type="Adress" name="adress" required>
				<label>Tel</label>
				<input type="Tel" name="tel" required>
				<input type="submit" name="submit" value="Register">
			</form>
		</div>
	</section>
	
	<footer>
			<center>
				<div id="footer-div2" style="padding-top:50px;">
					<ul>
						<li><a href=""><p style="font-size: 50px;"><i style="color:white" class="fab fa-facebook-square"></p></i></a></li>
						<li><a href=""><p style="font-size: 50px;"><i style="color:white" class="fab fa-twitter-square"></p></i></a></li>
						<li><a href=""><p style="font-size: 50px;"><i style="color:white" class="fab fa-youtube-square"><p></i></a></li>
						<li><a href=""><p style="font-size: 50px;"><i style="color:white" class="fab fa-google-plus-g"></p></i></a></li>
						<li><a href=""><p  style="font-size: 50px;"><i style="color:white" class="fab fa-instagram-square"></p></i></a></li>
					</ul>
					<p style="font-size: 12px;color: white;">All Rights Reserved. © 2021 Live Dinner Restaurant Design By : Sellami Yasmine & Ben Hassine Rayen</p>
				</div>
			</center>
	</footer>
</body>
</html>