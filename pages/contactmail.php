<?php
    $to = " sribhavishya2016@gmail.Com";  
    
	
	$name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $msg = "Name: " . $name . "\n" .
        "Mail: " . $email . "\n" .
      
        "Message: " . $message;

  
    mail($to, "success ", $msg);
    echo "Message Sent";
	echo'<script> window.location="contactus.php"; </script> ';
?>


 
