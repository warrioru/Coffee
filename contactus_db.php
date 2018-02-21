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

    $your_name = mysqli_real_escape_string($link, $_REQUEST['yourname']);

    $phone_code = mysqli_real_escape_string($link, $_REQUEST['phone']);

    $email_id = mysqli_real_escape_string($link, $_REQUEST['email']);
	
	$your_company = mysqli_real_escape_string($link, $_REQUEST['yourcompany']);

    $subject_code = mysqli_real_escape_string($link, $_REQUEST['subject']);

    $question_code = mysqli_real_escape_string($link, $_REQUEST['question']);
 
    // attempt insert query execution

    $sql = "INSERT INTO contactus (name, phonenumber,emailid,company,subject,question) VALUES ('$your_name', '$phone_code','$email_id','$your_company','$subject_code','$question_code' )";

    if(mysqli_query($link, $sql)){

     
	  echo '<script language="javascript">';
      echo 'alert("We will contact you with in 24-48 hours.")';
	  echo '</script>';
	  header("Location:http://ecuasupply.com/Coffee/index.html");
	   // echo "Records added successfully.";
	    
	 

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
 

    // close connection

    mysqli_close($link);

    ?>
