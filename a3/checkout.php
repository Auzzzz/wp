<?php
include_once('tools.php');
topModule('name');


//Regex name test
//$regex = '';
//$test = 'Chris Kelly';
//
//$match = preg_match_all($regex, $test);
//echo $match;

// Name Regex
// /^[a-z ,.'-]+$/i //Checks for the alphbet a-z, commas, spaces, full stops, single quote and hyphen.


// Email Regex
// /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,3}/i // checks for @ symbol with values each side, a . with stuff after it

// Address Regex
// /^[0-9][-a-z0-9 ,#'\/.]{3,50}/im // checks Numbers and alphabetic characters, plus some punctuation chars: space, full stop, comma, single quote, hyphen, forward slash and line feed char but in format of a address

// Phone Regex
// /^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/i

// Visa Card Regex
// /^4[0-9]{12}(?:[0-9]{3})?$/i

// Expiry Regex
// /^(0[1-9]|1[0-2]|[1-9])\/(1[4-9]|[2-9][0-9]|20[1-9][1-9])$/

if(isset($_POST['check'])) {//run when the check button is clicked

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
////    $card = $_POST['card'];
////    $expiry = $_POST['expiry'];

    //Name Check
    $validname = checkname($name);

    if ($validname !== true){
        echo "You name is incorrect ";
    }

    //Email Check
    $validemail = checkemail($email);

    if ($validemail !== true){
        echo "Your Email is Incorrect ";
    }

    //Address Check
    $validaddress = checkemail($address);

    if ($validaddress !== true){
        echo "Your Address is Incorrect ";
    }

    //Phone Check
    $validphone = checkemail($phone);

    if ($validphone !== true){
        echo "Your Phone is Incorrect ";
    }

    //Card Check
    $validcard = checkcard($card);

    if ($validcard !== true){
        echo "You Card is incorrect ";
    }

    //Date Check
    $validdate = checkdate($date);

    if ($validdate !== true){
        echo "You date is incorrect ";
    }
}
//echo $error;
?>

<form method="post" id="usr" action="<?php echo $_SERVER['PHP_SELF'];?>"

<p> First we need some things from you</p>

<input name="name" required placeholder="Enter Your First & Last Name"/>
<input name="email" required placeholder="Enter Your Email Address"/>
<textarea rows="4" cols="10" name="address" required form="usr" placeholder="1234 Test St Park Vale"></textarea>
<input name="phone"  required placeholder="Enter your Phone Number"/>
<input name="card" required placeholder="Enter your Card Number"/>
<input name="expiry" required placeholder="Enter your Expiry Date "/>


<button id="check" name="check">BUY!</button>

</form>





<?php
bottomModule();
?>

