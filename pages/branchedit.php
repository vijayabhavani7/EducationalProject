
<?php
	require_once 'dbconfig.php';

$id=$_REQUEST['id'];
$sql = "SELECT * from branches where id='".$id."'"; 
$result =  $conn->query($sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
   

<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="form">
<p> <a href="admin.php">Insert New Record</a></p>
<h1>Update Record</h1>
<?php

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$CampusName =$_REQUEST['CampusName'];
$Address =$_REQUEST['Address'];
$Email =$_REQUEST['Email'];

$MobileNumber=$_REQUEST['MobileNumber'];


$sql = "UPDATE branches set CampusName='".$CampusName."',Address='".$Address."',Email='".$Email."',MobileNumber='".$MobileNumber."' where id='".$id."'";



if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
	echo'<script> window.location="brancheadmin.php"; </script> ';
} else {
    echo "Error updating record: " . mysqli_error($conn);
}




}else {
?>
<div>

<form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >

                     <input type="hidden" name="new" value="1" />
                     <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">CampusName</label>
        <div class="col-xs-5">
            
			<input type="text" class="form-control" name="CampusName" placeholder="Enter Name" required value="<?php echo $row['CampusName'];?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="input" class="control-label col-xs-2">Address</label>
        <div class="col-xs-5">
            <input type="text" class="form-control"  name="Address" placeholder="Enter Name" required value="<?php echo $row['Address'];?>" />
        </div>
    </div>
      <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Experience</label>
        <div class="col-xs-5">
             <input type="text" class="form-control"  name="Email" placeholder="Enter Name" required value="<?php echo $row['Email'];?>" /></p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Description</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="MobileNumber" placeholder="Enter Name" required value="<?php echo $row['MobileNumber'];?>" />
        </div>
    </div>
   
    
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
           <input name="submit" type="submit" value="Update" />
        </div>

</form>
 
<?php } ?>



</div>
</div>

   




</body>
</html>