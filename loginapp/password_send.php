<?php
  include '../pages/dbconfig.php';
?>

<?php
  $sql = "SELECT password FROM login where username='sqube'";
  $res = $conn->query($sql);
  $pass = ($res->fetch_assoc())['password'];

  $msg = "Dear Admin,\r\nYour password is: " . $pass;

  // mail("sribhavishya2016@gmail.com", "Password reset request", $msg);
  mail("mythilisrikota@gmail.com", "Password reset request", $msg);
  echo "Password details have been sent to your mail!";

  // Redirect to login form code here!

?>
