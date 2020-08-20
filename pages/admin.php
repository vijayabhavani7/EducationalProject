<?php

	// LOGIN
	// ====
	include("../loginapp/session.php");

  require_once 'dbconfig.php';

	if(isset($_POST['btnsubmit']))
	{
		$staffname = $_POST['staffname'];
		$Subject = $_POST['Subject'];
		$experience = $_POST['experience'];
		$Description = $_POST['Description'];

		$imgFile = $_FILES['Photo']['name'];
		$tmp_dir = $_FILES['Photo']['tmp_name'];
		$imgSize = $_FILES['Photo']['size'];



		if(empty($staffname)){
			$errMSG = "Please Enter staffname.";
		}
		else if(empty($Subject)){
			$errMSG = "Please Enter Your Subject .";
		}
		else if(empty($experience)){
			$errMSG = "Please Enter Your experience .";
		}
		else if(empty($Description)){
			$errMSG = "Please Enter Your Description .";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'uploads/'; // upload directory

			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

			// rename uploading image
			$Photo = rand(1000,1000000).".".$imgExt;

			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$Photo);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{

			$sql = "INSERT INTO admin(staffname,Subject,experience,Description,Photo) values('$staffname','$Subject','$experience','$Description','$Photo')";


if ($conn->query($sql) === TRUE) {
    $successMSG ="New record created successfully";

	header("refresh:1;admin.php");

} else {
    $errMSG="Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

		}
	}
?>

<?php
 require_once 'dbconfig.php';

if(isset($_POST['submit']))
	{
		

		$imgFile = $_FILES['Image']['name'];
		$tmp_dir = $_FILES['Image']['tmp_name'];
		$imgSize = $_FILES['Image']['size'];
    if(empty($imgFile))
			$errMSG = "Please Select Image File.";
		else
		{
			$upload_dir = 'uploads/';
			$imgExt = strtolower(
        pathinfo($imgFile , PATHINFO_EXTENSION) );

			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif' ,'png' );
			$Image = rand(1000,1000000).".".$imgExt;

			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$Image);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}


		// if no error occured, continue ....
		if(!isset($errMSG))	{
			$sql = "INSERT INTO gallery(Image) values('$Image')";
      if ($conn->query($sql) === TRUE) {
        header("refresh:1;admin.php");
	      $successMSG ="New record created successfully";
      } else
        $errMSG="Error: " . $sql . "<br>" . $conn->error;
      $conn->close();
		}
	}
?>
<?php

 require_once 'dbconfig.php';
if(isset($_POST['submit1']))
	{
		

		$imgFile = $_FILES['Image']['name'];
		$tmp_dir = $_FILES['Image']['tmp_name'];
		$imgSize = $_FILES['Image']['size'];
    if(empty($imgFile))
			$errMSG = "Please Select Image File.";
		else
		{
			$upload_dir = 'uploads/';
			$imgExt = strtolower(
        pathinfo($imgFile , PATHINFO_EXTENSION) );
		
			
			$Image = rand(1000,1000000).".".$imgExt;

			// allow valid image file formats
			
				// Check file size '5MB'
						
					move_uploaded_file($tmp_dir,$upload_dir.$Image);
	
		}


		// if no error occured, continue ....
		
			$sql = "INSERT INTO video(video) values('$Image')";
      if ($conn->query($sql) === TRUE) {
        header("refresh:1;admin.php");
	      $successMSG ="New record created successfully";
      } else
        $errMSG="Error: " . $sql . "<br>" . $conn->error;
      $conn->close();
		


	}
?>


<?php
 require_once 'dbconfig.php';


	if(isset($_POST['Btnsubmit']))
	{
		$CampusName = $_POST['CampusName'];
		$Address = $_POST['Address'];// user name
		$Email = $_POST['Email'];// user email
		$MobileNumber = $_POST['MobileNumber'];

		 if(empty($CampusName)){
			$errMSG = "Please Enter CampusName.";
		}
		else if(empty($Address)){
			$errMSG = "Please Enter Address.";
		}
		else if(empty($Email)){
			$errMSG = "Please Enter Your Email .";
		}
		else if(empty($MobileNumber)){
			$errMSG = "Please Enter Your MobileNumber .";
		}


		else



		// if no error occured, continue ....
		if(!isset($errMSG))
		{

			$sql = "INSERT INTO branches(CampusName,Address,Email,MobileNumber) values('$CampusName','$Address','$Email','$MobileNumber')";

if ($conn -> query($sql) === TRUE) {
    $successMSG ="New record created successfully";
	header("refresh:1;admin.php");


} else {
    $errMSG="Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

		}
	}
?>

<?php

	require_once 'dbconfig.php';


	if(isset($_POST['Submit']))
	{
	$allowedExts = array("pdf", "doc", "docx", "xlsx","jpeg","jpg","png");
    $extension = end(explode(".", $_FILES["File"]["name"]));
    if (($_FILES["File"]["type"] == "application/pdf") ||($extension == "jpg")|| ($extension == "png")||($extension == "jpeg")|| ($_FILES["File"]["type"] == "application/msword") || ($_FILES["File"]["type"] == "application/vnd.ms-excel") ||($_FILES["File"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") || ($_FILES["File"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["File"]["size"] < 20000000) && in_array($extension, $allowedExts))
    {
      if ($_FILES["File"]["error"] > 0)
      {
      echo "Return Code: " . $_FILES["File"]["error"] . "<br>";
      }
	   $File=$_FILES['File']['name'];
      @$File_size=$_FILES['File']['size'];
      @$File_type=$_FILES['File']['type'];

$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES['File']['name']);

$uploads =move_uploaded_file($_FILES['File']['tmp_name'],$target_file);

        echo "Success";
  }	// if no error occured, continue ....
		if(!isset($errMSG))
		{

			$sql = "INSERT INTO results(File) values('$File')";




if ($conn->query($sql) === TRUE) {
    $successMSG ="New record created successfully";
    	header("refresh:1;admin.php");

} else {
    $errMSG="Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

		}
	}
?>





		<section>

		<!-- Form Name -->

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>

  <?php include("../includes/header.php") ?>

  <section>
        <img src="../img/admin.jpg" alt=""
          style="max-height:350px; width:100%;"/>
  </section>

	<br/>
	<br/>


	<div class="row">
	<div class="col-md-12">


	 <div class="col-md-6">
	 <form method="post" enctype="multipart/form-data" class="form-horizontal">
	<legend><center><b>Add Staff</b></center></legend>
		<div class="form-group">
  <label class="col-md-4 control-label" for="fn">Staffname</label>
  <div class="col-md-4">
  <input name="staffname" type="text" placeholder="Staffname" class="form-control input-md" required="">

  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Subject</label>
  <div class="col-md-4">
  <input  name="Subject" type="text" placeholder="Subject " class="form-control input-md" required="">

  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">experience</label>
  <div class="col-md-4">
  <input  name="experience" type="text" placeholder="experience " class="form-control input-md" required="">

  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Description</label>
  <div class="col-md-4">
  <textarea  name="Description" type="text" placeholder=" " class="form-control input-md" required=""></textarea>

  </div>
</div>

   <div class="form-group">
  <label class="col-md-4 control-label" for="ln">Photo</label>
  <div class="col-md-4">
  <input type="file" name="Photo" id="Photo" class="form-control input-md" required="">

  </div>
</div>




 <div class="form-group">
  <label class="col-md-4 control-label" for="ln"></label>
  <div class="col-md-2">
     <input type="submit" name="btnsubmit" value="submit" class="btn btn-primary pull-right">


  </div>
  <a class="btn btn-info" href="staffadmin.php" ><span class="glyphicon glyphicon-edit pull-right"></span>Edit</a>
  </div>         
  </form>
  </div>


  	<div class="col-md-6">

	 <form method="post" enctype="multipart/form-data" class="form-horizontal">
	<legend><center><b>Add Branches</b></center></legend>
	<div class="form-group">
  <label class="col-md-4 control-label" for="fn">CampusName</label>
  <div class="col-md-4">
  <input name="CampusName" type="text" placeholder="CampusName" class="form-control input-md" required="">
</div>
</div>
		<div class="form-group">
  <label class="col-md-4 control-label" for="fn">Address</label>
  <div class="col-md-4">
  <textarea name="Address" type="text" placeholder="Address" class="form-control input-md" required=""></textarea>
</div>
</div>
      <div class="form-group">
  <label class="col-md-4 control-label" for="fn">Email</label>
  <div class="col-md-4">
  <input name="Email" type="text" placeholder="Email" class="form-control input-md" required="">
</div>
</div>
 <div class="form-group">
  <label class="col-md-4 control-label" for="fn">MobileNumber</label>
  <div class="col-md-4">
  <input  name="MobileNumber" type="text" placeholder="MobileNumber" class="form-control input-md" required="">
</div>
</div>
 <div class="form-group">
  <label class="col-md-4 control-label" for="ln"></label>
  <div class="col-md-2">
     <input type="submit" name="Btnsubmit" value="submit" class="btn btn-primary pull-right">
  </div>
  <a class="btn btn-info" href="brancheadmin.php " ><span class="glyphicon glyphicon-edit"></span>Edit</a>
  </div>

	  </form>
	  </div>




  </div>
  </div>

</section>

 <br><br>
<section>
<div class="row">
<div class="col-md-6">
            <form method="post" enctype="multipart/form-data" class="form-horizontal">

	  <legend><center><b>Add Gallery</b></center></legend>
		<div class="form-group">
  <label class="col-md-4 control-label" for="fn">Image</label>
  <div class="col-md-4">
  <input name="Image" type="file" placeholder="Image"  required="">
  <br/>  </div></div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="ln"></label>
   <div class="col-md-2">
   <input type="submit" value="upload" name="submit"  class="btn btn-primary pull-right">
</div>

 <a class="btn btn-info" href="galleryadmin.php" ><span class="glyphicon glyphicon-edit"></span>Edit</a>

	</div>

		</form>

</div>
		<div class="col-md-6">
		<form method="post" enctype="multipart/form-data" class="form-horizontal">
			<legend><center><b>Add Gallery for video</b></center></legend>
				<div class="form-group">
				<label class="col-md-4 control-label" for="fn">Video</label>
				<div class="col-md-4">
					<input name="Image" type="file" placeholder="video"  required="">
						<br/>  </div></div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="ln"></label>
				<div class="col-md-2">
					<input type="submit" value="upload" name="submit1"  class="btn btn-primary pull-right">
				</div>
		</form>
		</div>
	</div>
	
<section>
<div class="row">
<div class="col-md-12">
	  <div class="col-md-6">

	  <form method="post" enctype="multipart/form-data" class="form-horizontal">
	  <legend><center><b>Add Results</b></center></legend>

		<div class="form-group">
			<label class="col-md-4 control-label" for="fn">Description</label>
		<div class="col-md-4">
			<input name="File" type="file"  class="form-control input-md" required="">


		</div>
	</div>


	<div class="form-group">
  <label class="col-md-4 control-label" for="ln"></label>
  <div class="col-md-2">
     <input type="submit" name="Submit" value="submit" class="btn btn-primary pull-right">
  </div>
  <a class="btn btn-info" href="resultsadmin.php" ><span class="glyphicon glyphicon-edit"></span>Edit</a>
  </div>

</form>

</div>
</div>
	</div>
</section>



	<br/><br/>


	<section>

<div class="row">

<center><a class="btn btn-info" href="admissiondetails.php" ><span class="glyphicon glyphicon-edit"></span>Admission Details</a></center>

<br><br>




	</section>

	  <div class="menuFooter clearfix">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-sm-3 col-xs-6">
                        <ul class="menuLink clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="staff.php">Staff Members</a></li>
                            <li><a href="contactus.php">ContactUs</a></li>
                        </ul>
                    </div>
                    <!-- col-sm-3 col-xs-6 -->

                     <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                        <ul class="menuLink clearfix">
                            <li><a href="programs.php">Our Programs</a></li>
                            <li><a href="admissionform.php">Admission</a></li>
							<li><a href="branches.php">Branches</a></li>
                            <li><a href="gallery.php">Photo Gallery</a></li>

                        </ul>
                    </div>
                    <!-- col-sm-3 col-xs-6 -->

                    <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                        <div class="footer-address">
                            <h5>Location:</h5>
                            <address>
                                Sri Bhavishya Educational Academy<br>
                                Neeladri  Bhavan,<br>
                                    4th Building,<br>
                         Panta kaluva Road,Kanuru Cross<br>
                                    Vijayawada.<br>
                                Phone: +91 95813 06060 &nbsp; 95813 06030
                            </address>
                            <a href="contact-us.html"><span class="place"><i class="fa fa-map-marker"></i>Main Campus</span></a>
                        </div>
                    </div>
                    <!-- col-sm-3 col-xs-6 -->

                    <div class="col-sm-3 col-xs-6 borderLeft clearfix">
                        <div class="socialArea clearfix">
                            <h5>Find us on:</h5>
                            <ul class="list-inline ">
                                <li class="hidden-xs"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li class="hidden-xs"><a href="https://www.facebook.com/search/top/?q=sri%20bhavishya%20educational%20academy"><i class="fa fa-facebook"></i></a></li>
                    <li class="hidden-xs"><a href="https://plus.google.com/101216075381081492391"><i class="fa fa-google-plus"></i></a></li>
                    <li class="hidden-xs"><a href="https://www.youtube.com/watch?v=fVZzGLM2Dks"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                        <!-- social -->
                        <div class="contactNo clearfix">
                            <h5>Call us on:</h5>
                            <h3 style="color:white;">+91 95813 06060</h3>
                        </div>
					<!-- hitwebcounter Code START --><br/>
<span style="color:white;">Visitors:</span> &nbsp <a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6624418&style=0006&nbdigits=7&type=page&initCount=0" title="Free track counters" Alt="Free track counters"   border="0" >
</a>                                        <br/>



                        <!-- contactNo -->
                    </div>
                    <!-- col-sm-3 col-xs-6 -->

                </div>
                <!-- row clearfix -->
            </div>
            <!-- container -->
        </div>
        <div class="footer clearfix">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-6 col-xs-12 copyRight">
                         <h5>© 2017 Copy right Sri Bhavishya Educational Academy</h5><br /><div>
                Powered By&nbsp;<a href="http://www.squbeit.com/" target="_blank">
                    <span style="color: rgb(111,51,142)">
                        <b>S</b>
                        <b>QUBE</b>
                    </span>
                    <span style="color: rgb(238,102,42)">Technologies
                    </span>
                </a>
            </div>

                    </div>
                    <!-- col-sm-6 col-xs-12 -->

                    <!-- col-sm-6 col-xs-12 -->
                </div>
                <!-- row clearfix -->
            </div>
            <!-- container -->
        </div>


    </div>
  <!-- JQUERY SCRIPTS -->

   <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h1>Admin Login</h1><br>
				  <form action="login.php" method="post">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>


				</div>
			</div>
		  </div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap/bootstrap.min.js"></script>
  <script src="../js/plugins/jquery.flexslider.js"></script>
  <script src="../js/plugins/jquery.selectbox-0.1.3.min.js"></script>
  <script src="../js/plugins/jquery.magnific-popup.js"></script>
  <script src="../js/plugins/waypoints.min.js"></script>
  <script src="../js/plugins/jquery.counterup.js"></script>
  <script src="../js/plugins/wow.min.js"></script>
  <script src="../js/plugins/navbar.js"></script>
  <script src="../js/plugins/moment.min.js"></script>
  <script src="../js/plugins/fullcalendar.min.js"></script>
  <script src="../options/optionswitcher.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../js/bootstrap/analytics.js"></script>




</body>
</html>
