<?php
/**
 * Created by PhpStorm.
 * User: Chris Kelly
 * Date: 13/09/2018
 * Time: 12:27 PM
 */


/* Display All products */

function topModule($pageTitle, $onLoad='') {
  $output = "Test";
  ?>
  <!DOCTYPE html>
  <html lang='en'>
    <head>
      <meta charset="utf-8">
      <title>Assignment 3</title>

        <!-- Global Session Start -->
        <?php
        session_start();
        ?>

        <!-- Skeleton Framework -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/skeleton.css">

        <!-- Keep wireframe.css for debugging, add your css to style.css
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../css/wireframe.css" disabled>-->
        <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Merienda|Open+Sans" rel="stylesheet">

        <!-- Font Awsome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <!-- JS -->
        <script src='../wireframe.js'></script>
        <script src='jstools.js'></script>

  </head>

  <body onload="$onLoad">
    <header>
        <div class="logo">
    </header>
    <nav class="circle">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="product.php">Web Hosting</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <main>

    <?php
      //echo $output;
}

function bottomModule(){
  ?>
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
          <div class="dis"><a target="_blank" href='products.txt' >products spreadsheet</a> and <a target="_blank" href='orders.txt'>orders spreadsheet</a></div>
          <br />
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </div>
  </footer>
  </body>

  </html>
  <?php
}
