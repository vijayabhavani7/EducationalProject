<?php


	require_once 'dbconfig.php';
	
	$id= $_REQUEST['id'];
$sql = "DELETE FROM branches WHERE id=$id"; 
$result =  $conn->query($sql);

echo'<script> window.location="brancheadmin.php"; </script> ';
?>


