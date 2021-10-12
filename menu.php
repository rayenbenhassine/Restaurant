<?php  
	require "trait/log.php";
	init_session();

?>


<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	<link rel="stylesheet" type="text/css" href="css/menustyle.css">
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
	<?php if (!isset($_SESSION["user"])) { ?>
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
	<?php }else{ ?>
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
										<li><a class="liens_user" href="orders.php">My orders</a></li>
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
	<?php } ?>


	<section class="img">
		<center><h1><span class="discover">Discover Our</span><br><span class="section-title">MENU</span></h1></center></section>
	<section>
	<table>
		<tr>
			<th>Meal starter<hr></th>
			<th>Main Course<hr></th>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Crushed new potatoes and shoots</div><div class="right">15€</div></div>
				<p>This salad is far from tasteless thanks to the combination of lemon, spring onion, olive oil, and mustard cress. Prepared in just 15 minutes, this salad is a speedy lunch option</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Tomato baked chicken</div><div class="right">10€</div></div>
				<p>This delicious tomato baked chicken recipe is a tasty way to cook your chicken thighs or cut of chicken meat. It's such a quick and easy family meal</p>
			</td>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Pasta salad with tuna and peppers</div><div class="right">20€</div></div>
				<p>This simple tuna and pasta dish takes just 20 minutes to cook and serves four. We’ve used pasta shells in this recipe.</p>
			</td>
			<td>
				<div class="clearfix">Cauliflower pizza<div class="left"></div><div class="right">11€</div></div>
				<p>A healthier take on the classic Italian treat, this cauliflower and egg pressed pizza is gluten-free and just 213 calories – a great choice for those on a Slimming World plan.</p>
			</td>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Mini quiches</div><div class="right">16€</div></div>
				<p>Our mini quiche recipe makes 12 small, savoury treats in total and follows the classic combo of onion, bacon and cheese.</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Sloppy Joes	</div><div class="right">22€</div></div>
				<p>A classic American sandwich based on seasoned hamburger meat cooked in a sauce. Traditionally served with potato wedges or fries and dill pickles</p>
			</td>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Carrot and butternut squash soup</div><div class="right">21€</div></div>
				<p>Carrot and butternut squash soup is sweet, velvety and packs a vitamin punch. With its buttery, nutty taste,vitamin C, magnesium, potassium and Vitamin A.</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Farmhouse chicken braise	</div><div class="right">12€</div></div>
				<p>Swap your regular roast dinner for this hearty farmhouse chicken braise with a rich double cream and mustard jus. Carrots and leeks add both crunch and flavour to this filling dish.</p>
			</td>
		</tr>
		<tr>
			<th>
				Desserts<hr>
			</th>
			<th>
				Drinks<hr>
			</th>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Lemon tart</div><div class="right">13€</div></div>
				<p>Lemon tart is a classic recipe that's also a family favourite. It's so easy to make and taste delicious too. A simple dessert for sharing!</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Southside cocktail</div><div class="right">14€</div></div>
				<p>The Southside cocktail is refreshing and a great gin alternative to the popular rum-based Mojito.</p>
			</td>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Banoffee pie recipe	</div><div class="right">25€</div></div>
				<p>Banoffee pie is a classic English dish and for ours, we’ve taken it back to the basics. Using condensed milk to make the caramel and just two ingredients for the base.</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Redcurrant gin</div><div class="right">24€</div></div>
				<p>Redcurrant gin might take two to three months to mature, but the taste and satisfaction in that first glass will be worth the wait.</p>
			</td>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Elderflower drizzle cake</div><div class="right">9€</div></div>
				<p>This mouth-watering elderflower drizzle cake is sure to be a winner on any special occasion, topped with elderflower icing and sandwiched with rich double cream and gooseberry filling.</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Mulled cider	</div><div class="right">8€</div></div>
				<p>Aromatic spices like cinnamon, cloves and star anise add an extra dimension to tangy apple cider. This tasty mulled cider will make an interesting change from the classic mulled wine.</p>
			</td>
		</tr>
		<tr>
			<td>
				<div class="clearfix"><div class="left">Violet cream cupcakes recipe</div><div class="right">12€</div></div>
				<p>These floral violet cream cupcakes are so easy to make at home and have a delicious, subtle taste making them perfect served with a cup of tea or coffee.</p>
			</td>
			<td>
				<div class="clearfix"><div class="left">Sloe Gin fizz cocktail</div><div class="right">20€</div></div>
				<p>Our sloe gin fizz cocktail is light, refreshing and very easy to drink. It uses four ingredients and requires no special equipment.</p>
			</td>
		</tr>
		
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
				<h5 style="font-size: 12px;color: white; font-weight: normal;">All Rights Reserved. © 2021 Live Dinner Restaurant Design By : Sellami Yasmine & Ben Hassine Rayen</h5>
			</div>
		</center>
	</footer>
</body>
</html>