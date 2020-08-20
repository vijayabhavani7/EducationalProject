<?php
    $to = "sribhavishya2016@gmail.Com";  
    
	
	$name = $_POST["name"];
   
    $Mobile = $_POST["Mobile"];
	$Email = $_POST["Email"];
    $Message = $_POST["Message"];
    
    $msg = "Name: " . $name . "\n" .
	      "Mobile: " . $Mobile . "\n" .
        "Email: " . $Email . "\n" .
 
        "Message: " . $Message;

  
    mail($to, "success ", $msg);
    echo "Message Sent";
	echo'<script> window.location="index.php"; </script> ';
?>


 
