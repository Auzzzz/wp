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
			<li><a href="products.php">Products</a></li>
			<li><a href="#">Web Hosting</a></li>
			<li><a href="#">Login</a></li>
		</ul>
	</nav>

	<main id="home">
		<section class="header">
			<div class="wrap">
				<h1><b class="accent">4DOG</b>Servers</h1>
				<p><b class="accent">4DOG</b> Servers We pride our selves on amazingly Poor Quality Servers</p>
			</div>
			<!-- End Wrap -->
		</section>
		<!-- End Header -->

		<section>
			<div class="desc">
				<h1> The Best Aussie Hosting </h1>
				<hr />
				<p>When it comes to web hosting in Australia we know that you have numerous choices. An none of them stack up to us! Even when they say some Australian based web hosting choices are better than us. If you want outstanding performance with your website
					hosting or any hosting and the kind of support that makes our customers grin from ear to ear like the devil has awoken inside them to destroy their computer, you want Eclipse Hosting. We boast a range of affordable, all Aussie hosting options for
					personal, business and professional hosting use. Whatever you’re after — whether it’s economy hosting, your evil empire or highly questionable websites that other hosting companies shy away from. we can help you. Choose the Australian web hosting
					company that cares for its customers. </p>
			</div>
		</section>

		<section id="options">
			<div class="options">
				<div class="box-grid">
					<div class="grid-display">
						<h1 id="green"> 99.9% Uptime </h1>
						<p> Our times aren’t hyperbole we definitely have our servers perfect with these times* </p>
					</div>
					<div class="grid-display">
						<h1 id="blue"> Perfect firewalls </h1>
						<p>Nothing can get through! NOTHING! </p>
					</div>
					<div class="grid-display">
						<h1 id="red"> 24/7 Assistants </h1>
						<p> Our Assistants can assist you in your vulnerable time of need*</p>
					</div>
				</div>
		</section>

		<section class="info-grid">
			<div class="box-grid">
				<div class="grid-display">
					<div class="icon"><i class="icon fas fa-arrow-up fa-5x" aria-hidden="true"></i></div>
					<h1 id="green"> 99.9% Uptime </h1>
					<p> Our times aren’t hyperbole we definitely have our servers perfect with these times* </p>
				</div>
				<div class="grid-display">
					<div class="icon"><i class="icon fas fa-fire fa-5x" aria-hidden="true"></i></div>
					<h1 id="blue"> Perfect firewalls </h1>
					<p>Nothing can get through! NOTHING! </p>
				</div>
				<div class="grid-display center">
					<div class="icon"><i class="icon fas fa-concierge-bell fa-5x" aria-hidden="true"></i></div>
					<h1 id="red"> 24/7 Assistants </h1>
					<p> Our Assistants can assist you in your vulnerable time of need*</p>
				</div>
				<div class="grid-display">
					<div class="icon"><i class="icon fas fa-bong fa-5x" aria-hidden="true"></i></div>
					<h1 id="green"> Aussie Servers </h1>
					<p>We are 100% Aussie nothing more nothing less….* </p>
				</div>
				<div class="grid-display">
					<div class="icon"><i class="icon fas fa-money-bill-alt fa-5x" aria-hidden="true"></i></div>
					<h1 id="blue"> Money Back </h1>
					<p>Don’t like us? 39-day money back guarantee* </p>
				</div>
				<div class="grid-display">
					<div class="icon"><i class="icon fas fa-hourglass-start fa-5x" aria-hidden="true"></i></div>
					<h1 id="red"> Instant start   </h1>
					<p> As soon as we have your money you get the goods……*</p>
				</div>
			</div>
		</section>

		<section>
			<div class="cust">
				<div id="changeText"></div>
				<div id="personName"></div>

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
