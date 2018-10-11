<?php
/**
 * Created by PhpStorm.
 * User: Chris Kelly
 * Date: 13/09/2018
 * Time: 12:27 PM
 */


/*

-> Function topModule
-> Function bottomModule
-> Function preShow
-> Product Array - call with $pumps
-> Print Page Code



 */

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
        //Load the session

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
            <li><a href="cart.php">Your Cart</a></li>
            <li><a href="checkout.php">Checkout</a></li>
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
          <div class="dis"><input type="button" name="code" id="code" value="code" /></div>
          <div><button id="button">Show Code</button><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </div>
  </footer>
<div id="newpost">
  <?php printMyCode();?>
</div>
  </body>
  </html>



  <?php
}

function preShow($arr, $returnAsString = false)
{
    $ret = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else
        echo $ret;

}

$fp = fopen('products.txt', 'r');
if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
    while ($cells = fgetcsv($fp, 0, "\t")) {
        for ($x = 1; $x < count($cells); $x++)
            $pumps[$cells[0]][$headings[$x]] = $cells[$x];
    }
}
fclose($fp);

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

function checkname($name){
        if(isset($name)){
            if (preg_match('/^[a-z ,.\'-]+$/i', $name)){
            return true;
        }else{
            return false;
        }
    }
}

function checkemail($email){
        if(isset($email)){
            if (preg_match('/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,3}/i', $email)){
            return true;
        }else{
            return false;
        }
    }
}

function checkaddress($address){
        if(isset($address)){
            if (preg_match('/^[0-9][-a-z0-9 ,#\'\/.]{3,50}/im', $address)){
            return true;
        }else{
            return false;
        }
    }
}

function checkphone($phone){
        if(isset($phone)){
            if (preg_match('/^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/i', $phone)){
            return true;
        }else{
            return false;
        }
    }
}

function checkcard($card){
        if(isset($card)){
            if (preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/i', $card)){
            return true;
        }else{
            return false;
        }
    }
}

function checkdate($date){
        if(isset($date)){
            if (preg_match('/^(0[1-9]|1[0-2]|[1-9])\/(1[4-9]|[2-9][0-9]|20[1-9][1-9])$/', $date)){
            return true;
        }else{
            return false;
        }
    }
}

//if(isset($name)){
//        return "username blank";
//    }elseif (preg_match('/^[a-z ,.\'-]+$/i', $name)){
//        return "test";
//    }
//    return true;