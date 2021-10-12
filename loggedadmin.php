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
	<title>logged admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/logged_admin2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Prata for body  -->
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
	<header id="header-menu" >
		<nav>
			<ul id="ul-nav-menu">
				<div class="nav-menu-left">
					<li><a href="#home"><img src="images/logo.png"></a></li>
				</div>
				<div class="nav-menu-center">
					<li><a id="homebtn" href="#comingbookings">COMING BOOKINGS</a></li>
					<li><a href="#orders">ORDERS</a></li>
					<li><a href="#bookingarchive">BOOKING ARCHIVE</a></li>
					<li><a href="#tables">TABLES IN STOCK</a></li>
					<li><a href="#contact">VIEW MESSAGES</a></li>
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

	<section class="img" id="home">
		<center><h1><span class="discover">Administrator</span><br><span class="section-title">SPACE</span></h1></center></section>
	</section>

	<section id="comingbookings">
		<center><h1><span class="discover">Coming</span><br><span class="section-title2" style="color:black">BOOKINGS</span></h1></center></section>
		<?php if(isset($ch))
					{?>
						<center>
						<div style="margin-top: 20px;color: black;font-style: italic;">
							<?php echo $ch; ?>
						</div>
						</center>
					<?php } ?>
		<table cellspacing="0">
			<tr>
				<th>Reservation ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Table ID</th>
				<th>Reservation Date</th>
				<th>Coming Date</th>
				<th>Coming Time</th>
				<th>How Many ?</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>


		<?php 
				$sql = "select r.id_reservation, u.prenom, u.nom,r.id_table, r.date_reservation, r.date_arrivee, r.time_arrivee, t.nb_personnes from reservation r, table_restaurant t, user u where r.date_arrivee >= CURDATE() and t.id_table_restau = r.id_table and r.login = u.login";
				$result = execute_query($sql);
				while ($row=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?= $row["id_reservation"] ?></td>
						<td><?= $row["prenom"] ?></td>
						<td><?= $row["nom"] ?></td>
						<td><?= $row["id_table"] ?></td>
						<td><?= $row["date_reservation"] ?></td>
						<td><?= $row["date_arrivee"] ?></td>
						<td><?= $row["time_arrivee"] ?></td>
						<td><?= $row["nb_personnes"] ?></td>
						<td><a href="trait/edit_booking_admin.php?id_reservation=<?= $row["id_reservation"]?>&id_table=<?= $row["id_table"] ?>&date_arrivee=<?= $row["date_arrivee"] ?>&time_arrivee=<?= $row["time_arrivee"] ?>&nb_personnes=<?= $row["nb_personnes"] ?>">Edit</a></td>
						<td><a href="trait/delete_booking_admin.php?id=<?= $row["id_reservation"]?>">Delete</a></td>
					</tr>
				<?php } ?>
		</table>
	</section>

	<hr>
	<section id="orders">
		<center><h1><span class="discover">New</span><br><span class="section-title2" style="color:black">orders</span></h1></center></section>
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
				$sql = "select c.id_commande, c.date_commande, u.prenom, u.nom, p.nom_plat, u.adresse, c.qte, p.prix * c.qte as price from commande c, user u, plat p where c.login = u.login and c.id_plat = p.id_plat";
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
	
	<hr>
	
	<section id="bookingarchive">
		<center><h1><span class="discover">Booking</span><br><span class="section-title2" style="color:black">ARCHIVE</span></h1></center></section>
		<table cellspacing="0">
			<tr>
				<th>Reservation ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Reservation Date</th>
				<th>Coming Date</th>
				<th>Coming Time</th>
				<th>How Many ?</th>
			</tr>


		<?php 
				$sql = "select r.id_reservation, u.prenom, u.nom, r.id_table, r.date_reservation, r.date_arrivee, r.time_arrivee, t.nb_personnes from reservation r, table_restaurant t , user u where date_arrivee < now() and t.id_table_restau = r.id_table";
				$result = execute_query($sql);
				while ($row=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?= $row["id_reservation"] ?></td>
						<td><?= $row["prenom"] ?></td>
						<td><?= $row["nom"] ?></td>
						<td><?= $row["id_table"] ?></td>
						<td><?= $row["date_reservation"] ?></td>
						<td><?= $row["date_arrivee"] ?></td>
						<td><?= $row["time_arrivee"] ?></td>
						<td><?= $row["nb_personnes"] ?></td>
					</tr>
				<?php } ?>
		</table>
	</section>

	<hr>
	
		

	<section id="tables">
		<center><h1><span class="discover">Tables</span><br><span class="section-title2" style="color:black">IN STOCK</span></h1></center></section>
		<?php if(isset($ch)) 
				{?>
					<center>
					<div style="margin-top: 20px;color: black;font-style: italic;">
						<?php echo $ch; ?>
					</div>
					</center>
				<?php } ?>
		<table cellspacing="0">
			<tr>
				<th>Table ID</th>
				<th>How Many ?</th>
				<th>Delete</th>
			</tr>


		<?php 
				$sql = "select * from table_restaurant";
				$result = execute_query($sql);
				while ($row=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?= $row["id_table_restau"] ?></td>
						<td><?= $row["nb_personnes"] ?></td>
						<td><a href="trait/delete_table_admin.php?id_table_restau=<?=$row["id_table_restau"]?>">Delete</a></td>
					</tr>
				<?php } ?>
		</table>
		<center><a href="trait/ajouter_table_admin.php" id="ajouter_table">Add</a></center>
	</section>

	<hr>


	<section id="contact">
		<center><h1><span class="discover">View</span><br><span class="section-title2" style="color:black">MESSAGES</span></h1></center></section>
		<?php if(isset($ch))
					{?>
						<center>
						<div style="margin-top: 20px;color: black;font-style: italic;">
							<?php echo $ch; ?>
						</div>
						</center>
					<?php } ?>
		<table cellspacing="0">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
			</tr>
		<?php 
				$sql = "select name,email,subject,message from contact";
				$result = execute_query($sql);
				while ($row=mysqli_fetch_assoc($result))
				{?>
					<tr>
						<td><?= $row["name"] ?></td>
						<td><?= $row["email"] ?></td>
						<td><?= $row["subject"] ?></td>
						<td><?= $row["message"] ?></td>
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
</html>