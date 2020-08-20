<?php include("../includes/header.php") ?>

		<?php

?>


<body>



<div class="container">

	<div class="page-header">
    	<h1 class="h2">Branches</h1>
    </div>

<br />

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>

<tr>
	
	<th>
		<strong>
		<center>
			Campus Name
			</center>
		</strong>
	</th>
	<th>
		<strong>
		<center>
					Address
			</center>
		
	
		</strong>
	</th>
	<th>
		<strong>
		<center>
			Email
			</center>
		
			
		</strong>
	</th>
	<th>
		<strong>
		<center>
				MobileNumber
			</center>
		
		
		</strong>
	</th>

	<th>
		<strong>
		<center>
				Edit
			</center>
		
		
		</strong>
	</th>
	<th>
		<strong>
		<center>
			Delete
			</center>
		
			
		</strong>
	</th>

</tr>



</thead>
<tbody>

<div class="row">






<?php


	require_once 'dbconfig.php';

$sql = "SELECT * FROM branches";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row




while($row = mysqli_fetch_assoc($result)) {
 extract($row);	?>

<tr>
<td align="center"><?php echo $row["CampusName"]; ?></td><td align="center"><?php echo $row["Address"]; ?></td><td align="center">

<?php echo $row["Email"]; ?></td><td align="center"><?php echo $row["MobileNumber"]; ?></td>

<td align="center"><a href="branchedit.php?id=<?php echo $row["id"]; ?> ">Edit</a></td>

<td align="center"><a href="branchdel.php?id=<?php echo $row["id"]; ?>">DELETE</a></td>
</tr>
<?php $id++; } ?>
</tbody>
</table>





				</p>
			</div>
		 <?php

     }
 else {
     echo "0 results";
}

$conn->close();
?>

</div>





</div>



<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>



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
                       <h5>© 2017 Copy right Sri Bhavishya Educational Academy</h5> <br /><div>
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
