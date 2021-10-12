<?php  
	require "trait/log.php";
	init_session();
	securite();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="css/my_bookingsStyle2.css">
	<link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
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
	<section class="img">
		<center><h1><span class="discover">My</span><br><span class="section-title">orders</span></h1></center></section>
	</section>
	<section id="orders">
		<table cellspacing="0">
			<tr>
				<th>Order ID</th>
				<th>Order DATE</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Adress</th>
				<th>Dish</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>


		<?php 
				$sql = "select c.id_commande, c.date_commande, u.prenom, u.nom, p.nom_plat, u.adresse, c.qte, p.prix * c.qte as price from commande c, user u, plat p where c.login = u.login and c.id_plat = p.id_plat and c.login = '".$_SESSION["user"]["login"]."'";
				$result = execute_query($sql);
				while ($row=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?= $row["id_commande"] ?></td>
						<td><?= $row["date_commande"] ?></td>
						<td><?= $row["prenom"] ?></td>
						<td><?= $row["nom"] ?></td>
						<td><?= $row["adresse"] ?></td>
						<td><?= $row["nom_plat"] ?></td>
						<td><?= $row["qte"] ?></td>
						<td><?= $row["price"] ?></td>
						<td><a href="trait/edit_order_admin.php?id_commande=<?=$row["id_commande"]?>">Edit</a></td>
						<td><a href="trait/delete_order_admin.php?id_commande=<?=$row["id_commande"]?>">Delete</a></td>
					</tr>
				<?php } ?>
		</table>
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