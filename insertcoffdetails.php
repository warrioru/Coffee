<?php

  if(isset($_POST['send'])){
   $link = mysqli_connect("localhost", "root", "K98awakn", "coffee");

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    // Escape user inputs for security

    $coffee_taste = mysqli_real_escape_string($link, $_REQUEST['coffeetaste']);

    $coffee_grind = mysqli_real_escape_string($link, $_REQUEST['coffeegrind']);

    $coffee_drink = mysqli_real_escape_string($link, $_REQUEST['coffeedrink']);
	
	$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);

    $email_code = mysqli_real_escape_string($link, $_REQUEST['emaiil']);

    $promo_id = mysqli_real_escape_string($link, $_REQUEST['promocode']);
	
	$coffee_type = mysqli_real_escape_string($link, $_REQUEST['coffeetype']);

    $coffee_select = mysqli_real_escape_string($link, $_REQUEST['coffeeselect']);

 
    // attempt insert query execution
     if(   $first_name!= "" &&    $promo_id!= "" && $coffee_type!= "") {
    $sql = "INSERT INTO coffeprefdetails(Bytaste,Grindbeans ,Coffedrink,Firstname,Email,Promocode,Coffeetype,Coffechose )VALUES ('$coffee_taste', '$coffee_grind','$coffee_drink','$first_name','$email_code','$promo_id','$coffee_type','$coffee_select')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";
		header("Location: http://ecuasupply.com/Coffee/index.html");

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
  }else {  }

    // close connection

    mysqli_close($link);

}
// Initialize variables to null.


?>
