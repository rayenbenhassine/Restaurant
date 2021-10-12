<?php
	require "trait/log.php";
	init_session();
	if(session_id())
	{
		session_destroy();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Live Dinner Free Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
					<li><a href="#home" id="homebtn">HOME</a></li>
					<li><a href="#aboutus">ABOUT US</a></li>
					<li><a href="#menu">MENU</a></li>
					<li><a href="login.php">RESERVATION</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#chefs">CHEFS</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</div>
				<div class="nav-menu-right">
					<li><a id="loginbtn" href="login.php">LOG IN</a></li>
					<li><a href="register.php">REGISTER</a></li>
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
			<a href="login.php">Reservation</a>
		</div>
	</section>

	<!--ABOUT US-->
	<section id="aboutus">
		<header>
			<h1><span class="discover">Discover</span><br><span class="section-title">ABOUT US</span></h1>
		</header>
		<div id="about-us-container">
			<div id="aboutus-left">
				<p style="font-size:19px;">Craving some delicious food? Maybe you’re in the mood for a juicy steak? No matter what kind of meal you have in mind, The Live Dinner Restaurant is ready to prepare it for you. Since 1973, The Live Dinner Restaurant has been the go-to diner for residents of Cosenza CS, Italy. Our diner serves breakfast all day, in addition to wholesome and flavorful dining options for lunch and dinner. From burgers to salads, seafood to pastas, you’ll find all kinds of hearty meals prepared fresh at The Live Dinner Restaurant. Our diner also has a full bakery with delicious baked goods and other treats, including our famous cheesecake. Sounds delicious, right? We’re here to serve you the best food around, whenever you’re looking for a great Italian restaurant in Cosenza CS, Italy.</p>
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
					<figcaption>STEVE THOMAS</figcaption>

				</figure>
			</center>
			<center>
				<figure>
					<a href=""><img src="images/stuff-img-03.jpg" width="300px" height="auto"></a>
					<figcaption>CHRISTINA</figcaption>
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
						<input type="text" name="name"  placeholder="Name">
					</div>	
					<div>
						<label for="email">Email address</label>
						<input type="text" name="email" placeholder="Email">
					</div>
					<div>
						<label for="subject">Subject</label>
						<input type="text" name="subject" placeholder="Subject">
					</div>
					<div>
						<label for="message">Message</label>
						<textarea placeholder="Type Your Message" name="msg" ></textarea>
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
						<li><i class="far fa-envelope"></i>  contact@markups.io</li><br>
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
				<h5 style="font-size: 15px;color: white; font-weight: normal;">All Rights Reserved. © 2021 Live Dinner Restaurant Design By : Sellami Yasmine & Ben Hassine Rayen</h5>
			</div>
		</center>
	</footer>
</body>
</html>
