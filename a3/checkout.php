<?php
include_once('tools.php');
topModule('name');

//send cart to cart final to unset cart when buy button is pressesd

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){

// Name Regex
    $nameregex = "/^[a-z ,.'-]+$/i";

// Email Regex
    $emailregex = "/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,3}/i";

// Address Regex
    $addressregex = "/^[0-9][-a-z0-9 ,#'\/.]{3,50}/im";;

// Phone Regex
    $phoneregex = "/^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/i";

// Visa & Card Regex
// /^4[0-9]{12}(?:[0-9]{3})?$/i
    $cardrex = "/^[0-9]{12,19}$/i";

// Expiry Regex
    $expiryregex = " /^\d{2}\/\d{2}$/";


    if (isset($_POST['check'])) {//run when the check button is clicked
        $nameerror = "";
        $emailerror = "";
        $addresserror = "";
        $phoneerror = "";
        $expiryerror = "";
        $expirederror = "";
        $carderror = "";

        $card = $_POST['card'];
        $expiry = $_POST['expiry'];

        //seperate epiiry into month and year
        $date = explode("/", $expiry);

        //Name
        if (preg_match($nameregex, $_POST['name'])) {

        }else {
            $nameerror = "Invalid Charters, Check your Name";
        }

        //Email
        if (preg_match($emailregex, $_POST['email'])) {

        }else {
            $emailerror = "Invalid Charters, Check Your Email";
        }

        //Address
        if (preg_match($addressregex, $_POST['address'])) {

        }else {
            $addresserror = "Invalid Charters, Check Your Address";
        }

        //Phone
        if (preg_match($phoneregex, $_POST['phone'])) {

        }else {
            $phoneerror = "Check Your Phone";
        }

        //Card
        if (preg_match($cardrex, $card)) {
            $card = null;//remove the card number from the server
        } else {
            // Card
            $carderror = "Invalid Charters, Check Your Card";
        }

        //Expiry
        if (preg_match($expiryregex, $expiry)) {
            if (strtotime(substr(date('Y'), 0, 2) . "{$date[1]}-{$date[0]}") < strtotime(date("Y-m", strtotime('+2 months')))) {  //Get current date then see if the exploded card month and year are less then the current month + 2 so we can see if the card is valid one month in advance seeing we can not check 28 days in advance but php is smart enouch with dates this does not effect the shorter or longer months
                $expirederror = "Your card is expired";
            }else{$expiry = null;/*remove the expiry date from the server*/}
        } else {
            // Expiry
            $expiryerror = "Invalid Charters, Check Your Expiry Date Ensure you use MM/YY ONLY so eg. 12/18";
        }

        //Run Check to sumbit to session
        if(empty($nameerror . $emailerror . $addresserror . $phoneerror . $expirederror . $expiryerror . $carderror)) {

            $_SESSION['newuser'][] = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
            );

            if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
                array_replace($_SESSION['user'], $_SESSION['newuser']);
                unset($_SESSION['newuser']);
            }
            $_SESSION['user'][] = array(
                'date' => date("F j, Y, g:i a"),
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
            );

            //send cart to cart final to unset cart when buy button is pressed
            $_SESSION['cartfinal'] = $_SESSION['cart'];
            unset($_SESSION['cart']);


            header('Location: http://127.0.0.1/edsa-rmita3/receipt.php');
        }
    }
    ?>
<div class="centerdiv">
    <div class="wrap">
    <form method="post" id="usr" action="<?php echo $_SERVER['PHP_SELF']; ?>"

    <p> First we need some things from you</p>

        <div class="input"><label>Your First Name: </label><input name="name" required placeholder="Enter Your First & Last Name"/> <i><?php if(empty($nameerror)){/*Post Nothing*/}else{echo $nameerror;} ?></i><br /></div>
        <div class="input"><label>Your Email: </label><input name="email" required placeholder="Enter Your Email Address"/> <i><?php if(empty($emailerror)){/*Post Nothing*/}else{echo $emailerror;} ?></i><br /></div>
        <div class="input"><label>Your Address: </label><textarea rows="4" cols="10" name="address" required form="usr" placeholder="1234 Test St Park Vale"></textarea> <i><?php if(empty($addresserror)){/*Post Nothing*/}else{echo $addresserror;} ?></i><br /></div>
        <div class="input"> <label>Your Phone Number: </label><input name="phone" required placeholder="Enter your Phone Number"/> <i><?php if(empty($phoneerror)){/*Post Nothing*/}else{echo $phoneerror;} ?></i><br /></div>
        <div class="input"><label>Your Card Number: </label><input name="card" id="card" placeholder="Enter your Card Number" oninput="visa()"/><p id="visap"></p></i> <i><?php if(empty($carderror)){/*Post Nothing*/}else{echo $carderror;} ?></i><br /></div>
        <div class="input"> <label>Your Expiry Date: </label><input name="expiry" placeholder="Enter your Expiry Date MM/YY"/> <i><?php if(empty($expiryerror)){/*Post Nothing*/}else{echo $expiryerror;} ?></i><i><?php if(empty($expirederror)){/*Post Nothing*/}else{echo $expirederror;} ?></i><br /></div>



    <button id="check" name="check">BUY!</button>

    </form>

    <?php

}else{
    echo "<p> Go buy something. You will be redirected in 5 secs";
    //redirct();

}
?>
    </div>
</div>
<?php
bottomModule();
?>
