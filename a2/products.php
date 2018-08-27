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

	<main>
     <tbody>
         <tr>
             <td>1</td>
             <td>Honda</td>
             <td>Accord</td>
             <td>2009</td>
         </tr>

         <tr>
             <td>2</td>
             <td>Toyota</td>
             <td>Camry</td>
             <td>2012</td>
         </tr>

         <tr>
             <td>3</td>
             <td>Hyundai</td>
             <td>Elantra</td>
             <td>2010</td>
         </tr>
     </tbody>
 </table>

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
