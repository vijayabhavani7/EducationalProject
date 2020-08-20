<?php
	require_once 'dbconfig.php';

$id= $_REQUEST['id'];
$sql = "SELECT * from results where id='".$id."' "; 
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
if(isset($_POST['submit']))
	{
$id=$_REQUEST['id'];
$Description = $_REQUEST['Description'];
$image2= $_REQUEST['image1'];

 if(isset($_FILES['Image'])){
      $errors= array();
      $file_name = $_FILES['Image']['name'];
      $file_size = $_FILES['Image']['size'];
      $file_tmp = $_FILES['Image']['tmp_name'];
      $file_type = $_FILES['Image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['Image']['name'])));
      $expensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp, "uploads/".$file_name);
       
		  $sql = "UPDATE results set image='".$file_name."', Description='".$Description."' where id='".$id."' ";
    if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
	          echo'<script> window.location="resultsadmin.php"; </script> ';
            }
       }
   }
	
	$a=$_FILES['Image']['name'];
    if(strlen("$a")== 0){
       $sql = "UPDATE results set image='".$image2."', Description='".$Description."' where id='".$id."' ";
      if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
			  echo'<script> window.location="resultsadmin.php"; </script> ';
                 }
	        }

}else {
?>
                <div>
				
		<form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
				 <input type="hidden" name="new" value="1" />
                 <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
            <div class="form-group">
                  <label for="inputEmail" class="control-label col-xs-2">Description</label>
                    <div class="col-xs-5">
			          <input type="text" class="form-control" name="Description" placeholder="Enter Name" required value="<?php echo $row['Description'];?>" />
                  </div>
           </div>
     
    
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Image </label>
        <div class="col-xs-5">
           <input type="hidden"  name="image1" placeholder="Enter Name" required value="<?php echo $row['image'];?>" />  <input type="file"  name="Image" />
                        <img src="uploads/<?php echo $row['image']; ?>" class="img-rounded" class="form-control" id="updatephoto" accept="image/*" width="250px" height="250px" /><br/>
        </div>
    </div>
    
       <div class="form-group">
           <div class="col-xs-offset-2 col-xs-10">
            <input name="submit" type="submit" value="Update" />
        </div>
    </div>
</form>
    
	 
               <?php } ?>

                 </div>      





                    <script>
                        function readURL(input, target) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                var image_target = $(target);
                                reader.onload = function(e) {
                                    image_target.attr('src', e.target.result).show();
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }

                        $("#patient_pic").on('change', function() {

                            alert();
                            readURL(this, "#preview_image")

                        });
                    </script>



    </body>

    </html>