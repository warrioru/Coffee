<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

   $link = mysqli_connect("localhost", "root", "K98awakn", "coffee");

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
   //include('connection.php');

    // Escape user inputs for security

    $cards_name = mysqli_real_escape_string($link, $_REQUEST['cards']);

    $card_number = mysqli_real_escape_string($link, $_REQUEST['cardnumber']);

    $expiry_month = mysqli_real_escape_string($link, $_REQUEST['expirymonth']);
	
	$expiry_year = mysqli_real_escape_string($link, $_REQUEST['expiryyear']);
	
	$cvv_code = mysqli_real_escape_string($link, $_REQUEST['cvvcode']);
	
	$card_name = mysqli_real_escape_string($link, $_REQUEST['cardname']);
	
	$enter_code = mysqli_real_escape_string($link, $_REQUEST['entercode']);
 
    // attempt insert query execution

    $sql = "INSERT INTO carddetails (cardtype, cardnumber,expirymonth,expiryyear,cvvcode,cardname,entercode) VALUES ('$cards_name','$card_number','$expiry_month','$expiry_year','$cvv_code','$card_name','$enter_code')";

    if(mysqli_query($link, $sql)){

     
	  // echo '<script language="javascript">';
       //echo 'alert("We will contact you with in 24-48 hours.")';
	   //echo //'<///script>';
		 header("Location: http://ecuasupply.com/Coffee/index.html");
	   // echo "Records added successfully.";
	    
	 

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
 

    // close connection

    mysqli_close($link);

    ?>


