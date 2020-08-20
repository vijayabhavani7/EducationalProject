<?php

	require_once 'dbconfig.php';
	
	$id= $_REQUEST['id'];
$sql = "DELETE FROM gallery WHERE id=$id"; 
$result =  $conn->query($sql);

echo'<script> window.location="galleryadmin.php"; </script> ';
?>


