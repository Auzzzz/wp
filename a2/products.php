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
  <section class="products">
    <section class="header">
			<div class="wrap">
				<h1>Eclipse Servers</h1>
				<p>Eclipse Servers We pride our selves on amazingly Poor Quality Servers</p>
			</div>
		</section>
  </section>

  <section class="list">
    <div class="list-web">
        <div class="options">
          <h1> Web Servers </h1>
          <hr />
          <h1 id="green"> Basic </h1>
          <p> Our times aren’t hyperbole we definitely have our servers perfect with these times* </p>
        </div>
        <div class="options">
          <h1 id="blue"> Semi </h1>
          <p>Nothing can get through! NOTHING! </p>
        </div>
        <div class="options">
          <h1 id="red"> 24/7 Pro </h1>
          <p> Our Assistants can assist you in your vulnerable time of need*</p>
        </div>

        <div class="list-game">
            <div class="options">
              <h1> Game Servers </h1>
              <hr />
              <h1 id="green"> Basic </h1>
              <p> Our times aren’t hyperbole we definitely have our servers perfect with these times* </p>
            </div>
            <div class="options">
              <h1 id="blue"> Semi </h1>
              <p>Nothing can get through! NOTHING! </p>
            </div>
            <div class="options">
              <h1 id="red"> 24/7 Pro </h1>
              <p> Our Assistants can assist you in your vulnerable time of need*</p>
            </div>
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
