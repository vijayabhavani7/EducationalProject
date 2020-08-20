<?php

	require_once 'dbconfig.php';

	
	$id= $_REQUEST['id'];
$sql = "DELETE FROM admin WHERE id=$id"; 
$result =  $conn->query($sql);

echo'<script> window.location="staffadmin.php"; </script> ';

?>


