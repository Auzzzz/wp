<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<title>Assignment 2</title>

	<!-- Keep wireframe.css for debugging, add your css to style.css -->
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
	<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Merienda|Open+Sans" rel="stylesheet">

	<!-- Font Awsome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<!-- JS -->
	<script src='../wireframe.js'></script>
	<script src='javascript.js'></script>

</head>

<body>
	<header>
		<div class="logo">
	</header>
	<nav class="circle">
    <ul>
      <li><a href="index.php">Home</a></li>
			<li><a id="active" href="products.php">Products</a></li>
			<li><a href="product.php">Web Hosting</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</nav>

	<main>
  <section class="products">
    <section class="header">
			<div class="wrap">
				<h1>Eclipse Servers</h1>
				<p>Eclipse Servers We pride our selves on amazingly Poor Quality Servers</p>
			</div>
		</section>
  </section>

  <section class="list">

			<div class="rant">
				<p>This package boosts massive server specs for half the price of what our competition has, the massive server overhead allows you to grow and not have the disadvantage of having other people’s servers affect your raw webhosting performance 	</p>
				<p>All of our hosting packages also include solid state drives, which help ensure your site loads up quickly and is very stable. If you choose one package and find that you need something larger, just let us know. We can upgrade your hosting any time you want, without any site outages. You can also get in touch with our sales team and they will help you to determine what is right for you </p>

			</div>

		<div class="pricegrid">

		  <ul class="plans">
		    <li class="title"><h1> Good</h1></li>
		    <li><b>All of Basic</b></li>
		    <li>Dedicated IP's</li>
		    <li>Open Development Platforms</li>
		    <li>Possible liablity</li>
		    <li>Free Bacon!</li>
		    <li><a class="pricebutton" href="product.php" rel="nofollow"> Check Out</a></li>
		  </ul>
		  <ul class="plans">
		    <li class="title"><h1>Basic</h1></li>
		    <li>5mb of High Seed SSD Storage</li>
		    <li>More ram then you will EVER need</li>
		  	<li> Weight saving storage techniqs</li>
				<li> you will become a god with your own URL </li>
		    <li><a class="pricebutton" href="product.php" rel="nofollow"> Check Out</a></li>
		  </ul>
		  <ul class="plans">
		    <li class="title"><h1>Amzing</h1></li>
		   	<li> All of Basic & Good </li>
				<li> Bring your A game to your compedters </li>
				<li> Unleash raw power for your webserr </li>
				<li>Custom Servers avaliable </li>
		    <li><a class="pricebutton" href="product.php" rel="nofollow"> Check Out</a></li>
		  </ul>
		</div>


  </section>
	</main>

	<footer>
    <div class="footer">
		<div>
			<p>&copy;
				<script>
					document.write(new Date().getFullYear());
				</script>
				Chris K (s3544232)</p>
		</div>
    <br />
		<div class="dis">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia</div>
    <br />
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </div>
  </footer>
</body>

</html>
