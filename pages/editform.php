
<?php

	require_once 'dbconfig.php';

$id=$_REQUEST['id'];
$sql = "SELECT * from admin where id='".$id."'";
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

<?php
if(isset($_POST['btnsubmit']))
	{
$id=$_REQUEST['id'];

$staffname =$_REQUEST['staffname'];
$Subject =$_REQUEST['Subject'];
$experience =$_REQUEST['experience'];
$Description =$_REQUEST['Description'];

$Photo2= $_REQUEST['Photo1'];



 if(isset($_FILES['Image'])){
      $errors= array();
      $file_name = $_FILES['Image']['name'];
      $file_size = $_FILES['Image']['size'];
      $file_tmp = $_FILES['Image']['tmp_name'];
      $file_type = $_FILES['Image']['type'];
      $file_ext= strtolower(end(explode('.',$_FILES['Image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$file_name);


		  $sql = "UPDATE admin set Photo='".$file_name."',staffname='".$staffname."',Subject='".$Subject."',experience='".$experience."',Description='".$Description."' where id='".$id."'";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

	echo'<script> window.location="allproducts.php"; </script> ';
}



      }
   }

   $a= $_FILES['Image']['name'];
   echo $_FILES['Image']['name'];
     if(strlen("$a")== 0){
       $sql = "UPDATE admin set Photo='".$Photo2."',staffname='".$staffname."',Subject='".$Subject."',experience='".$experience."',Description='".$Description."' where id='".$id."'";
      if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
			  echo'<script> window.location="staffadmin.php";</script> ';
                 }
	        }


}else {
?>
<div>

<form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">StaffName</label>
        <div class="col-xs-5">

			<input type="text" class="form-control" name="staffname"  required value="<?php echo $row['staffname'];?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Subject</label>
        <div class="col-xs-5">
           <input type="text" class="form-control" name="Subject"  required value="<?php echo $row['Subject'];?>" />
        </div>
    </div>
      <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Experience</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="experience"  required value="<?php echo $row['experience'];?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Description</label>
        <div class="col-xs-5">
            <input type="text" name="Description" class="form-control" required value="<?php echo $row['Description'];?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Confirm Password</label>
        <div class="col-xs-5">
           <input type="hidden" name="Photo1" required value="<?php echo $row['Photo'];?>">
            <input type = "file" name = "Image" class="form-control" />
          <img src="uploads/<?php echo $row['Photo']; ?>" class="img-rounded" id="updatephoto" accept="image/*"  width="250px" height="250px" /><br/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <input name="btnsubmit" type="submit" value="Update" />
        </div>

</form>

<?php } ?>
</div>
</div>
</body>
</html>
