<?php

	require_once 'dbconfig.php';
if(isset($_POST['btnsubmit']))
	{
    $id= $_REQUEST['id'];
  

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


		  $sql = "UPDATE gallery set Image='".$file_name."' where id='".$id."'";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";

	echo'<script> window.location="allproducts.php"; </script> ';
}



      }
   }

   $a= $_FILES['Image']['name'];
   echo $_FILES['Image']['name'];
     if(strlen("$a")== 0){
       $sql = "UPDATE gallery  set Image='".$Photo2."' where id='".$id."'";
      if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
			  //echo'<script> window.location="staffadmin.php";</script> ';
                 }
	        }


}else {
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
   <body>
   <a href="admin.php">Insert New Record</a>
   <h1>Update Your Image</h1>
   <br>
   <br>
   <form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >

                     <input type="hidden" name="new" value="1" />
                     
    <div class="form-group">
        <label for="input" class="control-label col-xs-2">Image</label>
        <div class="col-xs-5">
           <input type="hidden" name="Photo1"  value="<?php echo $row['Image'];?>">
            <input type = "file" name = "Image" class="form-control" />
        <img src="uploads/<?php echo $row['Image']; ?>" class="img-rounded" id="updatephoto" accept="image/*"  width="150px" height="150px" /></td>
        </div>
      </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
           <input type = "submit" name="btnsubmit"/>
        </div>
    </div>
         
			
      </form>
      <?php }?>
   </body>
</html>