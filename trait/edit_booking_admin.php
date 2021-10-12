<?php  
	require "reservationtrait.php";
	securite();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="../css/edit_booking_admin_style2.css">
	<link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>   
	<script src="https://kit.fontawesome.com/605eb779b0.js" crossorigin="anonymous"></script>

</head>
<body>
	<header id="header-menu">
		<nav>
			<ul id="ul-nav-menu">
				<div class="nav-menu-left">
					<li><a href="../loggedadmin#comingbookings"><img src="../images/logo.png"></a></li>
				</div>
				<div class="nav-menu-center">
					<li><a id="homebtn" href="../loggedadmin#comingbookings">COMING BOOKINGS</a></li>
					<li><a href="../loggedadmin#orders">ORDERS</a></li>
					<li><a href="../loggedadmin#bookingarchive">BOOKING ARCHIVE</a></li>
					<li><a href="../loggedadmin#tables">TABLES IN STOCK</a></li>
					<li><a href="../loggedadmin#contact">CONTACT</a></li>
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
			if(isset($_POST["number"]) && !empty($_POST["number"]) && isset($_POST["comingdate"]) && !empty($_POST["comingdate"]) && isset($_POST["time"]) && !empty($_POST["time"]))
			{
				
					if(is_dispo($_POST["number"],$_POST["comingdate"],$_POST["time"]))
					{
						$id_table = id_table_dispo($_POST["number"],$_POST["comingdate"],$_POST["time"]);
						$sql = "update reservation set id_table = ".$id_table." where id_reservation = ".$_GET["id_reservation"];
						execute_query($sql);
						$sql = "update reservation set date_arrivee = ".$_POST["comingdate"]." where id_reservation = ".$_GET["id_reservation"];
						execute_query($sql);
						$sql = "update reservation set time_arrivee = ".$_POST["time"]." where id_reservation = ".$_GET["id_reservation"];
						execute_query($sql);
					}
					else
					{
						$_SESSION["info"] = "No available tables for this date";
					}
					
					header("location:../loggedadmin.php");
				
			}
			else
				header("location:../loggedadmin.php");
		}
	
	?>
	
	<section class="clearfix">
		<div>
			<h1>All in good taste!</h1>
			<form method="post" action="edit_booking_admin.php?id_reservation=<?= $_GET["id_reservation"] ?>&nb_personnes=<?=$_GET["id_reservation"]?>&comingdate=<?= $_GET["date_arrivee"] ?>&time=<?= $_GET["time_arrivee"] ?>" class="signin-container">
				<h2>Edit Booking</h2>
				<label>Coming date</label>
				<?php
					$date = date("Y-m-d");
				?>
				<input type="date" value="<?= $_GET["date_arrivee"] ?>" name="comingdate" min=<?= $date ?> required>
				<label>Coming time</label>
				<input type="time" value="<?= $_GET["time_arrivee"] ?>" name="time" required>
				<label>How Many ?</label>
				<select name="number">
					<option value="<?= $_GET["nb_personnes"] ?>" selected hidden><?= $_GET["nb_personnes"] ?> people</option>
					<option value="1">1 person</option>
					<option value="2">2 people</option>
					<option value="3">3 people</option>
					<option value="4">4 people</option>
					<option value="5">5 people</option>
					<option value="6">6 people</option>
					<option value="7">7 people</option>
					<option value="8">8 people</option>
					<option value="9">9 people</option>
					<option value="10">10 people</option>
				</select>
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