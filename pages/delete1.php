<?php

	require_once 'dbconfig.php';

	
	$id= $_REQUEST['id'];
$sql = "DELETE FROM admission WHERE id=$id"; 
$result =  $conn->query($sql);

echo'<script> window.location="admin.php"; </script>';

?>