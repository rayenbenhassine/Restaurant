<?php  
	require "log.php";
	init_session();
	securite();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="../css/ajouter_table_admin2.css">
	<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>   
	<script src="https://kit.fontawesome.com/605eb779b0.js" crossorigin="anonymous"></script>

</head>
<body>
	<header id="header-menu" style="">
		<nav>
			<ul id="ul-nav-menu">
				<div class="nav-menu-left">
					<li><a href="../loggedadmin.php#comingbookings"><img src="../images/logo.png"></a></li>
				</div>
				<div class="nav-menu-center">
					<li><a id="homebtn" href="../loggedadmin.php#comingbookings">COMING BOOKINGS</a></li>
					<li><a href="../loggedadmin.php#orders">ORDERS</a></li>
					<li><a href="../loggedadmin.php#bookingarchive">BOOKING ARCHIVE</a></li>
					<li><a href="../loggedadmin.php#tables">TABLES IN STOCK</a></li>
					<li><a href="../loggedadmin.php#contact">CONTACT</a></li>
				</div>
				<div class="nav-menu-right">
					<li>
						<ul>
							<li id="dropdown"style="margin-left:8px;"><p  style="font-size: 20px;"><i style="color:#d65106;" class="fas fa-user"></p></i>
								<ul id="menu-vertical">
									<li><a class="liens_user" href="my_account.php">My account</a></li>
									<li><a  class="liens_user" href="my_bookings.php">My bookings</a></li>
									<li><a  class="liens_user" href="index.php">Log out</a></li>
								</ul>
							</li>
							<li><a href="#home" class="liens_user" style="text-decoration: underline;"><?= $_SESSION["user"]["prenom"]." ".$_SESSION["user"]["nom"] ?></a></li>


						</ul>
					</li>					
				</div>
			</ul>
		</nav>
	</header>

	<?php  
		if(isset($_POST["submit"]))
		{
			if(isset($_POST["nb_personnes"]) && !empty($_POST["nb_personnes"]))
			{
				$sql = "insert into table_restaurant(nb_personnes) values (".$_POST["nb_personnes"].")";
				execute_query($sql);
				header("location:../loggedadmin.php#tables");
			}
		}


	?>
	
	<section class="clearfix">
		<div>
			<h1>All in good taste!</h1>
			<form method="post" action="ajouter_table_admin.php" class="signin-container">
				<h2>Add table</h2>
				<label>How many ?</label>
				<input type="number" name="nb_personnes" min="1">
				<input type="submit" name="submit" value="add">
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