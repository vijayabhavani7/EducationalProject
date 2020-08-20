<?php


	require_once 'dbconfig.php';
	
	$id= $_REQUEST['id'];
$sql = "DELETE FROM results WHERE id=$id"; 
$result =  $conn->query($sql);

echo'<script> window.location="resultsadmin.php"; </script> ';
?>


