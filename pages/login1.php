<?php

$servername = "vijayawadatownhub.ipagemysql.com";
$username = "sqube";
$password = "vijayawada";
$dbname = "bhavishya";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);

$sql="SELECT * FROM login WHERE username='$username' and password='$password'";
$result=$conn->query($sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
echo ("$count");
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

 echo "valid";

 header('location:admin.php');
}
else {
echo "Wrong Username or Password";
}
?>
