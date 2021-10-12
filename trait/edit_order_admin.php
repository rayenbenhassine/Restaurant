<?php  
	require "log.php";
	init_session();
	securite();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="../css/edit_order_style2.css">
	<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>   
	<script src="https://kit.fontawesome.com/605eb779b0.js" crossorigin="anonymous"></script>

</head>
<body>
	<?php if(isadmin($_SESSION["user"]["login"])) {?>
	<header id="header-menu">
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
	<<?php }else{ ?>
		<header id="header-menu">
			<nav>
				<ul id="ul-nav-menu">
					<div class="nav-menu-left">
						<li><a href="../logged.php#home"><img src="../images/logo.png"></a></li>
					</div>
					<div class="nav-menu-center">
						<li><a href="../logged.php#home" id="homebtn" style="color:white;">HOME</a></li>
						<li><a href="../logged.php#aboutus">ABOUT US</a></li>
						<li><a href="../logged.php#menu">MENU</a></li>
						<li><a href="../logged.php#order">MAKE AN ORDER</a></li>
						<li><a href="../logged.php#reservation">BOOK A TABLE</a></li>
						<li><a href="../logged.php#gallery">GALLERY</a></li>
						<li><a href="../logged.php#chefs">CHEFS</a></li>
						<li><a href="../logged.php#contact">CONTACT</a></li>
					</div>
					<div class="nav-menu-right">
						<li>
							<ul>
								<li id="dropdown"style="margin-left:8px;"><p  style="font-size: 20px;"><i style="color:#d65106;" class="fas fa-user"></p></i>
									<ul id="menu-vertical">
										<li><a class="liens_user" href="../my_account.php">My account</a></li>
										<li><a  class="liens_user" href="../my_orders.php">My orders</a></li>
										<li><a class="liens_user" href="../my_bookings.php">My bookings</a></li>
										<li><a class="liens_user" href="../index.php">Log out</a></li>
									</ul>
								</li>
								<li><a href="#home" class="liens_user" style="text-decoration: underline;"><?= $_SESSION["user"]["prenom"]." ".$_SESSION["user"]["nom"] ?></a></li>
							</ul>
						</li>					
					</div>
				</ul>
			</nav>
		</header>
	<?php } ?>
	<?php  
		if (isset($_POST["submit"]))
		{
			if(isset($_POST["dish"]) && !empty($_POST["dish"]) && isset($_POST["qte"]) && !empty($_POST["qte"]))
			{
				$sql = "update commande set id_plat = ".$_POST["dish"]." where id_commande = ".$_GET["id_commande"];
				execute_query($sql);
				$sql = "update commande set qte = ".$_POST["qte"]." where id_commande = ".$_GET["id_commande"];
				execute_query($sql);
				if(isadmin($_SESSION["user"]["login"]))
					header("location:../loggedadmin.php#orders");
				else
					header("location:../my_orders.php");


			}
		}


	?>

	<section class="clearfix">
		<div>
			<h1>All in good taste!</h1>
			<form method="post" action="edit_order_admin.php?id_commande=<?= $_GET["id_commande"] ?>" class="signin-container">
				<h2>Edit Order</h2>
				<label>Dish</label>
				<select name="dish">
					<option value="" selected disabled hidden>Choose a dish</option>
					<?php  
						$sql = "select id_plat,nom_plat,prix from plat";
						$result = execute_query($sql);
						while($row = mysqli_fetch_assoc($result))
						{?>
							<option value="<?=$row["id_plat"]?>"><?=$row["nom_plat"]?> - <?=$row["prix"]?> $</option>
						<?php }
					?>
				</select>
				<label>Quantity</label>
				<input type="number" name="qte" min="1" max="50">
				<input type="submit" name="submit" value="Edit">
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