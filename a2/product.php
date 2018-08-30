
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
      <li><a id="active" href="index.php">Home</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="product.php">Web Hosting</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</nav>

	<main>

    <form method='post' target='_blank' action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php'>
    	<p>Name:<br>
        <p id='error'></p>
    		<input type="text" id='id' name="id" placeholder="test1" />
        <button type="button" onclick="add();">+</button>
        <input type="number" id='qty' name="qty" value="1" />
        <button type="button" onclick="neg();">-</button>
        <input type="text" id='option' name="option" placeholder="option" />
    	<p><input type="submit" value="Submit" /></p>
    </form>





<script>
	var i = 1;
	//var  = document.getElementById("inc");

	function add() {
		if (i < 6) {
			i++;
			document.getElementById('qty').value = i;
			document.getElementById("demo").innerHTML = i;
		} else {
			document.getElementById("error").innerHTML = "Can not order more then 6!";
		}
	}

  function neg() {
		if (i >1) {
			--i;
			document.getElementById('qty').value = i;
			document.getElementById("demo").innerHTML = i;
		} else {
			document.getElementById("error").innerHTML = "Can not order less then 1!";
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
