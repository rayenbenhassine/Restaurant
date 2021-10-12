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
	<link rel="stylesheet" type="text/css" href="css/loggedStyle2.css">
	<meta charset="utf-8">
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
	<header id="header-menu">
		<nav>
			<ul id="ul-nav-menu">
				<div class="nav-menu-left">
					<li><a href="#home"><img src="images/logo.png"></a></li>
				</div>
				<div class="nav-menu-center">
					<li><a href="#home" id="homebtn" style="color:white;">HOME</a></li>
					<li><a href="#aboutus">ABOUT US</a></li>
					<li><a href="#menu">MENU</a></li>
					<li><a href="#order">MAKE AN ORDER</a></li>
					<li><a href="#reservation">BOOK A TABLE</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#chefs">CHEFS</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</div>
				<div class="nav-menu-right">
					<li>
						<ul>
							<li id="dropdown"style="margin-left:8px;"><p  style="font-size: 20px;"><i style="color:#d65106;" class="fas fa-user"></p></i>
								<ul id="menu-vertical">
									<li><a class="liens_user" href="my_account.php">My account</a></li>
									<li><a  class="liens_user" href="my_orders.php">My orders</a></li>
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

	<!--HOME-->
	<section id="home">
		<div>
			<h1>Welcome To<br>Live Dinner Restaurant</h1>
			<p>We would be very delighted to welcome you in our restaurant, where you really<br>
			can appreciate our finest gastronomy and our exceptional setting.</p>
			<a href="#reservation">Reservation</a>
		</div>
	</section>

	<!--ABOUT US-->
	<section id="aboutus">
		<header>
			<h1><span class="discover">Discover</span><br><span class="section-title">ABOUT US</span></h1>
		</header>
		<div id="about-us-container">
			<div id="aboutus-left">
				<p>Craving some delicious food? Maybe you’re in the mood for a juicy steak? No matter what kind of meal you have in mind, The Live Dinner Restaurant is ready to prepare it for you. Since 1973, The Live Dinner Restaurant has been the go-to diner for residents of Cosenza CS, Italy. Our diner serves breakfast all day, in addition to wholesome and flavorful dining options for lunch and dinner. From burgers to salads, seafood to pastas, you’ll find all kinds of hearty meals prepared fresh at The Live Dinner Restaurant. Our diner also has a full bakery with delicious baked goods and other treats, including our famous cheesecake. Sounds delicious, right? We’re here to serve you the best food around, whenever you’re looking for a great Italian restaurant in Cosenza CS, Italy.</p>
			</div>
			<div id="aboutus-right">
			</div>
		</div>
	</section>

	<!--CITATION-->
	<section id="citation">
		<blockquote>"If you're not the one cooking, stay out of the<br> way and compliment the chef"<br><b>Michael Strahan</b></blockquote>
	</section>

	<!--MENU-->
	<section id="menu">
		<center><h1><span class="discover">Our special</span><br><span class="section-title">MENU</span></h1></center>
		<div id="menu-container">
			<div id="buttons">
				<button onclick="show('all')">All</button>
				<button onclick="show('Drinks')">Drinks</button>
				<button onclick="show('Lunch')">Lunch</button>
				<button onclick="show('Dinner')">Dinner</button>
			</div>
			<div id="main_place">
				<center><img src="images/img-01.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-02.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-03.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-04.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-05.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-06.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-07.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-08.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-09.jpg" width="250px" height="auto"></center>
			</div>
			<div id="all" style="display: none" >
				<center><img src="images/img-01.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-02.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-03.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-04.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-05.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-06.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-07.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-08.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-09.jpg" width="250px" height="auto"></center>
			</div>
			<div id="Drinks" style="display: none;">
				<center><img src="images/img-01.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-02.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-03.jpg" width="250px" height="auto"></center>
			</div>
			<div id="Lunch" style="display: none;">
				<center><img src="images/img-04.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-05.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-06.jpg" width="250px" height="auto"></center>
			</div>
			<div id="Dinner" style="display: none;">
				<center><img src="images/img-07.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-08.jpg" width="250px" height="auto"></center>
				<center><img src="images/img-09.jpg" width="250px" height="auto"></center>
			</div>
		</div>
		<center><a href="menu.php">See more</a></center>

	</section>
	<script>
	  function show(param_div_id) {
	    document.getElementById('main_place').innerHTML = document.getElementById(param_div_id).innerHTML;
	  }
	</script>

	<hr>
	<section id="order">
		<center><h1><span class="discover">Make</span><br><span class="section-title">AN ORDER</span></h1></center>
		<form method="post" action="trait/ajouter_order.php">
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
			<input type="submit" name="submit" value="ORDER">
		</form>




	</section>


	<!--RESERVATION-->
	<section id="reservation">
		<center><h1><span class="discover">Book</span><br><span class="section-title" style="color: white">A TABLE</span></h1></center>
		<?php
				if (isset($ch))
				{
			?>
					<div style="margin-top:30px ;color: white; font-size: 18px; font-style: italic;text-align: center;">
						<?php echo $ch; ?>
					</div>
					<br>

				<?php } ?>
		<form style="margin-top:50px" method="post" action="trait/reservationtrait.php">
			<label>How Many ?</label>
			<select name="number">
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
			<label>Date</label>
			<?php
				$date = date("Y-m-d");
			?>
			<input type="date" name="date" min=<?= $date ?> required>
			<label>Time</label>
			<input type="time" name="time" required>
			<textarea placeholder="Your message" name="msg"></textarea>
			<input type="submit" name="booktable" value="BOOK TABLE">
		</form>

	</section>




	<!--GALLERY-->
	<section id="gallery">
		<center><h1><span class="discover">Discover</span><br><span class="section-title">Our Gallery</span></h1></center>
		<div class="grid-img">
			<center><a href=""><img src="images/gallery-img-01.jpg" width="300px" height="auto"></a></center>
			<center><a href=""><img src="images/gallery-img-02.jpg" width="300px" height="auto"></a></center>
			<center><a href=""><img src="images/gallery-img-03.jpg" width="300px" height="auto"></a></center>
			<center><a href=""><img src="images/gallery-img-04.jpg" width="300px" height="auto"></a></center>
			<center><a href=""><img src="images/gallery-img-05.jpg" width="300px" height="auto"></a></center>
			<center><a href=""><img src="images/gallery-img-06.jpg" width="300px" height="auto"></a></center>
		</div>
	</section>
	<hr>
	<!--CHEFS-->
	<section id="chefs">
		<center><h1><span class="discover">Our professional</span><br><span class="section-title">MASTER CHEFS</span></h1></center>
		<div class="grid-img">
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-01.jpg" width="300px" height="auto"></a>
					<figcaption>WILLIAMSON</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-02.jpg" width="300px" height="auto"></a>
					<figcaption>CHRISTINA</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-03.jpg" width="300px" height="auto"></a>
					<figcaption>STEVE THOMAS</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-04.jpg" width="300px" height="auto"></a>
					<figcaption>DAVID</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-05.jpg" width="300px" height="auto"></a>
					<figcaption>ANGELA</figcaption>
				</figure>
			</center>
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-06.jpg" width="300px" height="auto"></a>
					<figcaption>JOHN</figcaption>
				</figure>
			</center>
		</div>
	</section>
	<hr>
	<!--CONTACT -->
	<section id="contact">
		<center><h1><span class="discover">Get In Touch</span><br><span class="section-title">Contact Us</span></></center>	
		<div id="contact-container">
			<div id="form-contact">
				<form id="form-container" method="post" action="trait/contacttrait.php">	
					<div>		
						<label for="name">Your Name</label>
						<input type="text" name="name" value="<?= $_SESSION["user"]["prenom"]." ".$_SESSION["user"]["nom"] ?>" placeholder="Name">
					</div>	
					<div>
						<label for="email">Email address</label>
						<input type="text" name="email" placeholder="Email" value="<?= $_SESSION["user"]["email"]?>">
					</div>
					<div>
						<label for="subject">Subject</label>
						<input type="text" name="subject" placeholder="Subject">
					</div>
					<div>
						<label for="message">Message</label>
						<textarea placeholder="Type Your Message"  name="msg"></textarea>
					</div>
					<input type="submit" name="submit" value="Send Message" id="res-contact">				
				</form>
			</div>
			<div id="info-contact">
				<center>
					<ul>
						<li class="list-title">Office Adress</li>
						<li style="text-align: justify-all;">If you’ve never been to our restaurant before. <br>Don't hesitate to contact us you can find more useful information below</li><br>
						<li><i class="fas fa-phone-alt"></i>00541 71 369 772</li><br>
						<li><i class="far fa-envelope"></i>contact@markups.io</li><br>
						<li><i class="fas fa-map-marker-alt"></i>Corso G. Mazzini, 48, 87100 Cosenza CS, Italy</li>
					</ul>
					<ul>
						<li class="list-title">Open Hours</li>
						<li>Monday - Friday 9.00 am to 12 pm</li><br>
						<li>Saturday 9.00 am to 10 pm</li><br>
						<li>Sunday 10.00 am to 12 pm</li>
					</ul>
				</center>
			</div>
		</div>	
	</section>

	<section id="map">
		<center>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49402.839886171794!2d16.222753417135298!3d39.29556392861254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133f90cc5d8fe419%3A0x5b94ecbf16e61bcf!2sLive%20Dinner%20Club!5e0!3m2!1sen!2stn!4v1618612449051!5m2!1sen!2stn" width="100%" height="400px;" style="border: solid 1px;" allowfullscreen="" loading="lazy"></iframe>
		</center>
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
				<h5 style="font-size: 12px;color: white; font-weight: normal;">All Rights Reserved. © 2021 Live Dinner Restaurant Design By : Sellami Yasmine & Ben Hassine Rayen</h5>
			</div>
		</center>
	</footer>
</body>
</html>
