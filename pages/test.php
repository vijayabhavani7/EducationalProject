<?php
	require_once 'dbconfig.php';
  
  $name     =  $_POST['name'];
$surname    =  $_POST['surname'];
$SSC  =  $_POST['SSC'];
$date     =  $_POST['date'];
$adhar   =  $_POST['adhar'];
$gender     =  $_POST['gender'];
$Admission    =  $_POST['Admission'];
$mpc  =  $_POST['mpc'];
$Bipc     =  $_POST['Bipc'];
$city   =  $_POST['city'];
$state  =  $_POST['state'];
$zipcode     =  $_POST['zipcode'];
$mobile   =  $_POST['mobile'];
$father     =  $_POST['father'];
$mother    =  $_POST['mother'];
$occupation  =  $_POST['occupation'];
$address     =  $_POST['address'];



$sql = "INSERT INTO admission(name,surname,SSC,date,adhar,gender,Admission,mpc,Bipc,city,state,zipcode,mobile,father,mother,occupation,address) values('$name','$surname','$SSC','$date','$adhar','$gender','$Admission','$mpc','$Bipc','$city','$state','$zipcode','$mobile','$father','$mother','$occupation','$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	echo'<script> window.location="admissionform.php"; </script> ';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
}

$conn->close();
?>




