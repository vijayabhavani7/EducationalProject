 <?php
 
 
 $from = "info@squbeit.com";
 
 
  
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $SSC = $_POST["SSC"];
   $date = $_POST["date"];
  $adhar = $_POST["adhar"];
  $gender = $_POST["gender"];
   $Admission = $_POST["Admission"];
  $mpc = $_POST["mpc"];
  $Bipc = $_POST["Bipc"];
   $city = $_POST["city"];
  $State = $_POST["State"];
  $zipcode = $_POST["zipcode"];
 
  $mobile = $_POST["mobile"];
  $father = $_POST["father"];
   $mother = $_POST["mother"];
  $occupation = $_POST["occupation"];
  $Address = $_POST["Address"];
  
  
  
  mail($name,$surname,$SSC,$date,$adhar,$gender,$Admission,$mpc,$Bipc,$city,$State,$zipcode,$mobile,$father,$mother,$occupation,$Address "From:.$from");
 
  echo "Message Sent: <br>  $name<br> $Mobile <br> $Email <br> $Message ";
?>
