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

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {  //Check if post[çart] is empty
    for ($i = 0, $size = sizeof($_SESSION['cart']); $i < $size; ++$i) {

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
bottomModule();
?>
