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
		<div class="logo"></div>
	</header>
	<nav class="circle">
		<ul>
      <li><a href="index.php">Home</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a id="active" href="product.php">Web Hosting</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</nav>

	<main>
		<section class="header">
			<div class="wrap">
				<h1>Eclipse Servers</h1>
				<p>Web Hosting Order Form</p>
			</div>
		</section>


		<section class="order">
			<div class="webhost">
			<div class="desc">
				<h1> Website Hosing </h1>
				<h3> Basic Package:</h3>
				<div class="slab">
				<p> This webserver hosting package is one of our best offers! With the ability to adapt to your requirements and with the best server host on the world your new adventure is set for success with both our ability to grow we will show your competition…. Because we don’t like to lose </p>
				<p>This package boosts massive server specs for half the price of what our competition has, the massive server overhead allows you to grow and not have the disadvantage of having other people’s servers affect your raw webhosting performance 	</p>
				<p>All of our hosting packages also include solid state drives, which help ensure your site loads up quickly and is very stable. If you choose one package and find that you need something larger, just let us know. We can upgrade your hosting any time you want, without any site outages. You can also get in touch with our sales team and they will help you to determine what is right for you </p>
			</div>

			<div class="specs">
				<h3> Specs: </h3>
				<ul>
					<li> CPU: Intel &copy; Pentium &copy; G4560 - 2 core</li>
					<li> RAM: 4gb </li>
					<li> Hard Drive: 64gb Seagate drive</li>
					<li> Shared with 20 other sites </li>
				</div>
			</div>
			<div class="form">
				<h3> Order Now! </h3>
	  		<form id='order' method='post' target='_blank' onclick="val()" action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php'>
        <p id='error'></p>
				<div class="value">
				<label> How many Servers do you need?</label>
    		<input type="hidden" id='id' name="id" value="Webserver 1"/>
        <button type="button" onclick="add();">+</button>
        <input type="number" id='qty' name="qty" value="1" min="1" />
        <button type="button" onclick="neg();">-</button>
			</div>
				<br />
				<div class="option">
				<label> How many Servers do you need?</label>
				<select name="option">
				  <option value="Wave your Rights">Wave your rights</option>
				  <option value="dedi-ip">Get a dedicated ip address*</option>
				  <option value="phone">Get a direct number to not go through our system</option>
				  <option value="audi">Win a CAR!**</option>
				</select>
				<br/>
					<button form="order" class="submit" id="submit"> Order Now </button>
			</div>

			<!-- taken from here https://tympanus.net/Development/ParticleEffectsButtons/ -->


    </form>
	</div>
</div>
	</section>





<script>
	//number buttons w/ validation
		var i = 1;

		function add() {
			if (i < 6) {
				i++;
				document.getElementById('qty').value = i;
			} else {
				document.getElementById("error").innerHTML = "you some kind of hog? You can not order more then 612345!";
			}
		}

	  function neg() {
			if (i >1) {
				--i;
				document.getElementById('qty').value = i;
			} else {
				document.getElementById("error").innerHTML = "Can not order less then 1!";
			}
		}

		function val() {
    var x;

    // Get the value of the input field with id="numb"
    x = document.getElementById("qty").value;

    // isNaN checks for only numbers to be used

    if (isNaN(x) || x < 1 || x > 6) {
			//cant submit

        document.getElementById('error').innerHTML = "Are you some kind of Idiot? You can have no less then 1 and no more then 5!";
				document.getElementById('submit').disabled = true;
    } else {
				// can sumbit
				document.getElementById('submit').disabled = false;
    }

}

</script>


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
