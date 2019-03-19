<?php
echo('otro echoo');
  if(isset($_POST['send'])){
   $link = mysqli_connect("localhost", "root", "K98awakn", "coffee");

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    // Escape user inputs for security

    $name = mysqli_real_escape_string($link, $_REQUEST['name']);

    $femail_code = mysqli_real_escape_string($link, $_REQUEST['femail']);

    $password_id = mysqli_real_escape_string($link, $_REQUEST['age']);
	
	$confirm_name = mysqli_real_escape_string($link, $_REQUEST['gender']);

    $address_code = mysqli_real_escape_string($link, $_REQUEST['address']);

    $postal_id = mysqli_real_escape_string($link, $_REQUEST['postalcode']);
	
	$phone_name = mysqli_real_escape_string($link, $_REQUEST['phone']);

    $cards_code = mysqli_real_escape_string($link, $_REQUEST['cards']);

 
    // attempt insert query execution
     if(   $name!= "" &&  $femail_code != "") {
    $sql = "INSERT INTO customerdetails (name,email,password,confirmpassword,address,postalcode,phone,creditcardtype) VALUES ('$name', '$femail_code','$password_id','$confirm_name',' ','$postal_id','$phone_name','$cards_code')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";
        mail (  $femail_code ,  "New registration for event: " . $cards_code ,  "Thank you for registering for this event! <br><br> Please, find attached your QR code to present at the entrance. You can bring this on your phone, you do not need to print. <br><br><br> See you soon! <br><br><br><br><a href='http://cdnqrcgde.s3-eu-west-1.amazonaws.com/wp-content/uploads/2013/11/jpeg.jpg' target='_blank'>QR Code</a>" );
		header("Location:http://ecuasupply.com/Coffee/index.html");

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
  }else {  }

    // close connection

    mysqli_close($link);

}
// Initialize variables to null.


?>
