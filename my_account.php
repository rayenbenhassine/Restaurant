<?php  
	require "trait/log.php";
	init_session();
	securite();
	if(isset($_SESSION["info"]))
	{
		$ch = $_SESSION["info"];
		unset($_SESSION["info"]);
	}
	


?>


<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="css/my_accountStyle2.css">
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
						<li><a href="logged.php#home"><img src="images/logo.png"></a></li>
					</div>
					<div class="nav-menu-center">
						<li><a href="logged.php#home" id="homebtn" style="color:white;">HOME</a></li>
						<li><a href="logged.php#aboutus">ABOUT US</a></li>
						<li><a href="logged.php#menu">MENU</a></li>
						<li><a href="logged.php#order">MAKE AN ORDER</a></li>
						<li><a href="logged.php#reservation">BOOK A TABLE</a></li>
						<li><a href="logged.php#gallery">GALLERY</a></li>
						<li><a href="logged.php#chefs">CHEFS</a></li>
						<li><a href="logged.php#contact">CONTACT</a></li>
					</div>
					<div class="nav-menu-right">
						<li>
							<ul>
								<li id="dropdown"style="margin-left:8px;"><p  style="font-size: 20px;"><i style="color:#d65106;" class="fas fa-user"></p></i>
									<ul id="menu-vertical">
										<li><a class="liens_user" href="my_account.php">My account</a></li>
										<li><a  class="liens_user" href="my_orders.php">My orders</a></li>
										<li><a class="liens_user" href="my_bookings.php">My bookings</a></li>
										<li><a class="liens_user" href="index.php">Log out</a></li>
									</ul>
								</li>
								<li><a href="#home" class="liens_user" style="text-decoration: underline;"><?= $_SESSION["user"]["prenom"]." ".$_SESSION["user"]["nom"] ?></a></li>
							</ul>
						</li>					
					</div>
				</ul>
			</nav>
		</header>	

	<section class="clearfix">
		<div>
			<h1>All in good taste!</h1>
			<form method="post" action="trait/modifusertrait.php" class="signin-container">
				<h2>Set Your Account</h2>
				<?php if(isset($ch))
					{?>
						<div style="color: white;font-style: italic;text-align: center;">
							<?php echo $ch; ?>
						</div>
					<?php } ?>
				<label>first name</label>
				<input type="text" value="<?= $_SESSION["user"]["prenom"]?>" name="prenom" required>
				<label>last name</label>
				<input type="text" value="<?= $_SESSION["user"]["nom"]?>" name="nom" required>
				<label>Login</label>
				<input type="Login" value="<?= $_SESSION["user"]["login"]?>" name="login" required>
				<label>Password</label>
				<input type="Password" value="<?= $_SESSION["user"]["mdp"]?>" name="mdp" required>
				<label>Birth date</label>
				<input type="date" value="<?= $_SESSION["user"]["date_naissance"]?>" name="date_naissance" required>					
				<label>Email</label>
				<input type="Email" value="<?= $_SESSION["user"]["email"]?>" name="email" required>
				<label>Adress</label>
				<input type="Adress" value="<?= $_SESSION["user"]["adresse"]?>" name="adresse" required>
				<label>Tel</label>
				<input type="Tel" value="<?= $_SESSION["user"]["tel"]?>" name="tel" required>
				<input type="submit" name="submit" value="Apply">
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