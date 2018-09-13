<?php
include_once ('templates/header.php');
?>


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

<?php

function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else
        echo $ret;
}

$fp = fopen('products.txt','r');
   if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
      while ( $cells = fgetcsv($fp, 0, "\t") ) {
         for ($x=1; $x<count($cells); $x++)
                    $pumps[$cells[0]][$headings[$x]]=$cells[$x];
      }
  }
   fclose($fp);
   preShow($pumps);

foreach ($pumps as $key => $value)
{


?>
<table >
	<tbody>
		<tr>
            <td><?php echo $key; ?></td>
			<td><?php echo $value['img']; ?></td>
			<td><?php echo $value['title']; ?></td>
			<td><?php echo $value['desc']; ?></td>
			<td><?php echo "$".$value['price']; ?></td>
		</tr>
	</tbody>
</table>
        <?php
        }
        ?>
    </section>
</main>

<?php
include_once ('templates/footer.php');
?>
