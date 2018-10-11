<?php
include_once('tools.php');
$subtotal = 0;
$total = 0;
topModule('Name');
//Delete Item
if(isset($_POST['delete'])) {//run when the delete button is clicked
    if(false == $i = array_search($_POST['delete'], $_SESSION['cart'])){
        unset($_SESSION['cart'][$i]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); //re-keys the array
        header("Refresh:0"); // refresh page to update cart

    }

}

if(isset($_POST ['add'])){
    $_SESSION['cart'][] = array(
        "qty" => $_POST['qty'],
        "pid" => $_POST['id'],
        "option" => $_POST['option']
    );
    unset($_POST['add']); //Empty post['add'] after submited so page refresh does not trigger new cart add
}

//session_unset();
//$qty = $_POST['qty'];
//$pid = $_POST['id'];
//$option = $_POST['option'];
//
//echo $qty, $pid, $option;

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    for ($i = 0, $size = sizeof($_SESSION['cart']); $i < $size; ++$i) {
        // echo "The product QTY is ".$_SESSION['cart'][$i]["qty"] ."<br />";
        //  echo " The product ID is ".$_SESSION['cart'][$i]["pid"]."<br />";
        //  echo " Product OPTION ".$_SESSION['cart'][$i]["option"]."<br />";

        foreach ($pumps as $key => $value) {
            if ($key == $_SESSION['cart'][$i]["pid"]) {

                ?>
                <form method="post" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                    <table>
                        <tbody>
                        <tr>
                            <td>Product ID</td>
                            <td>Description</td>
                            <td>Chosen Option</td>
                            <td>Cost</td>
                            <td>Quantity</td>
                            <td>Sub-Total</td>
                            <td>Remove</td>
                        </tr>
                        <?php //echo $value['price'] ?>
                        <tr>
                            <?php echo $i; ?>
                            <td> <?php echo $_SESSION['cart'][$i]["pid"]; ?> </td>
                            <td> <?php echo $value['desc'] ?></td>
                            <td> <?php echo $_SESSION['cart'][$i]["option"]; ?> </td>
                            <td> <?php echo $value['price'] ?></td>
                            <td> <?php echo $_SESSION['cart'][$i]["qty"]; ?> </td>
                            <td> <?php $subtotal = (($_SESSION['cart'][$i]["qty"] * $value['price']) + $subtotal); echo $subtotal;?></td>
                            <td>
                                <button id="delete" name="delete" value='<?php echo $i; ?>'>Delete Item</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
                <?php
            }
        }
    }
}
else{
    echo "<p> Go buysomething! </p>";
}
print_r($_SESSION['cart']);
?>












<?php

//var_dump($_POST);
//var_dump($pumps);
//print_r($_SESSION['cart']);
//$value = $_POST['id'];
//
//if (! isset ( $_SESSION ['cart'] )) {
//    $_SESSION ['cart'] = array ();
//}
//
//
//if (array_key_exists($value,$pumps))
//{
//
//
//    $_SESSION ['cart'][] = $_POST['purchase'];
//    $_SESSION['cart']['qty'] = $_POST['qty'];
//    $_SESSION['cart']['pid'] = $_POST['id'];
//    $_SESSION['cart']['option'] = $_POST['option'];
//
//    //session_unset();
//}
//else
//{
//    echo"Nice Try ;)";
//    echo "<img src='https://giphy.com/gifs/DBfYJqH5AokgM/html5' title='nice try' />";
//
//}
//
//
//foreach ($_SESSION['cart'] as $cart){
//    ?>
<!--    <table >-->
<!--        <tbody>-->
<!--        <tr>-->
<!--            <td>Product ID </td>-->
<!--            <td>Product Descript </td>-->
<!--            <td>Amount </td>-->
<!--            <td>Sub Total </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>--><?php //echo $pumps[$_SESSION[$cart]['id']] ?><!--</td>-->
<!--            <!--        <td>--><?php ////echo $pumps[$cart]['Product ID'] ?><!--<!--</td>-->
<!--            <!--        <td>--><?php ////echo $pumps[$cart]['Product ID'] ?><!--<!--</td>-->
<!--            <!--        <td>--><?php ////echo $pumps[$cart]['Product ID'] ?><!--<!--</td>-->
<!---->
<!---->
<!--        </tr>-->
<!--        </tbody>-->
<!--    </table>-->
<!--    --><?php
//}
//echo $_SESSION['order']['qty'];
//echo $_SESSION['order']['pid'];
//echo $_SESSION['order']['option'];





bottomModule();
?>
