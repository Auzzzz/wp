<?php
include_once('tools.php');
topModule('name');


//Regex name test
$regex = '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,3}/i';
$test = 'Chris-Kelly';

$match = preg_match_all($regex, $test);
echo $match;

// Name Regex
// /^[a-z ,.'-]+$/i //Checks for the alphbet a-z, commas, spaces, full stops, single quote and hyphen.


// Email Regex
//

// Address Regex
//

// Phone Regex
//

// Card Regex
//

// Expiry Regex
//

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"

<p> First we need some things from you</p>

<input name="name" placeholder="Enter Your First & Last Name"/>
<input name="email" placeholder="Enter Your Email Address"/>
<input name="address" placeholder="Enter Your Address"/>
<input name="phone" placeholder="Enter your Phone Number"/>
<input name="card" placeholder="Enter your Card Number"/>
<input name="expiry" placeholder="Enter your Expiry Date "/>


<button id="check" name="check">BUY!</button>

</form>





<?php
bottomModule();
?>

