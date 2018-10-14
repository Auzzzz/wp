<?php
/**
 * Created by PhpStorm.
 * User: Chris Kelly
 * Date: 12/09/2018
 * Time: 10:01 PM
 */

include_once('tools.php');
topModule('Name');

$subtotal = 0;
$invoiceid = rand(1000, 9999);
//var_dump($_SESSION['user']);
?>
<br />
<p class="center"> Order confimed, print this otherwise go elsewhere</p>
<div class="book">
    <div class="page">
        <div class="subpage">

<!-- Modiified from https://github.com/sparksuite/simple-html-invoice-template/blob/master/invoice.html -->
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="http://rmit.chris-mkelly.com/mlogo.png" style="width:100%; width:600px;">
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                           <?php echo($_SESSION['user'][0]['name']);?><br>
                            <?php echo($_SESSION['user'][0]['address']);?><br>
                            <?php echo($_SESSION['user'][0]['phone']);?><br/>
                            <?php echo($_SESSION['user'][0]['email']);?>
                        </td>
                        <td>
                            Eclipse Hosting<br>
                            Sales Dep.<br>
                            Sales@eclipsehosting.com
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tbody>
        <tr class="heading">
            <td>Product ID</td>
            <td>Chosen Option</td>
            <td>Cost</td>
            <td>Quantity</td>
            <td>Sub-Total</td>
        </tr>
<?php
//var_dump($_SESSION['cartfinal']);
//echo "<br />";
//var_dump($_SESSION['user']);
//echo "<br />";
//remove quotes from the array

//str_replace('"', ' ', $_SESSION['user']);
if (isset($_SESSION['cartfinal']) && !empty($_SESSION['cartfinal'])) {  //Check if post[çart] is empty
    for ($i = 0, $size = sizeof($_SESSION['cartfinal']); $i < $size; ++$i) {

        foreach ($pumps as $key => $value) {
            if ($key == $_SESSION['cartfinal'][$i]["pid"]) {

                ?>
                    <tr>
                        <td> <?php echo $_SESSION['cartfinal'][$i]["pid"]; ?> </td>
                        <td> <?php echo $_SESSION['cartfinal'][$i]["option"]; ?> </td>
                        <td> <?php echo $value['price'] ?></td>
                        <td> <?php echo $_SESSION['cartfinal'][$i]["qty"]; ?> </td>
                        <td> <?php $subtotal = (($_SESSION['cartfinal'][$i]["qty"] * $value['price']) + $subtotal);
                            echo $subtotal; ?></td>
                    </tr>


                <?php
            }
        }

    }
}
?>
        </tbody>
    </table>
    <br />
    <p>Your Total:<?php echo $subtotal;?></p>
    <br />
    <p> Status: Paid =D</p>
</div>
    </div>
    </div>
<?php
if (isset($_SESSION['cartfinal']) && !empty($_SESSION['cartfinal'])) {  //Check if post[çart] is empty
    for ($i = 0, $size = sizeof($_SESSION['cartfinal']); $i < $size; ++$i) {

        foreach ($pumps as $key => $value) {
            if ($key == $_SESSION['cartfinal'][$i]["pid"]) {
            $_SESSION['orders'][] = array(
                'date' => date("F j, Y, g:i a"),
                'name' => $_SESSION['user'][0]['name'],
                'email' => $_SESSION['user'][0]['email'],
                'address' => $_SESSION['user'][0]['address'],
                'phone' => $_SESSION['user'][0]['phone'],
                'uid' => $invoiceid,
                'pid' =>  $_SESSION['cartfinal'][$i]["pid"],
                'price' => $value['price'] ,
                'qty' => $_SESSION['cartfinal'][$i]["qty"],
                'option' => $_SESSION['cartfinal'][$i]["option"],
                'total' => $subtotal

            );
            }
        }

    }
}
if(isset($_SESSION['orders'])) {
    $fo = fopen('orders.txt', 'a'); //a = append

    foreach ($_SESSION['orders'] as $fields) {
        fputcsv($fo, $fields, "\t");
    }

    fclose($fo);

    session_unset(); //kill eveything so no more orders can be placed by refreshing
}

?>
<script>
    window.print();
</script>

