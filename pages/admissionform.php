<?php include("../includes/header.php") ?>


    <div class="custom_content custom">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 col-sm-8 custom_right">
							<div class="single_content_left">
									<h3>Apply for Admission</h3>


									<form action="test.php" method="post" class="apply_from">

										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Name <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="name" placeholder="Enter your Name" >
													</div>
												</div>
											</div>
										</div><!--end form group-->

										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Surname <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="surname" placeholder="Enter your Surname" >
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">SSC/CBSE(Hall ticket Number)<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="SSC" placeholder="Enter your SSC/CBSE(Hall ticket Number)" >
													</div>
												</div>
											</div>
										</div><!--end form group-->

												<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Date Of Birth<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="input-group">
													<input type="date" class="form-control" name="date" required=""  placeholder="Date Of Birth" required="">
													<label for="Dateof" class="input-group-addon btn">

													</label>
												</div>
												</div>
											</div>
										</div><!--end form group-->

										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Adhar Number<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required=""  name="adhar" placeholder="Enter your Adhar Number">
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Gender <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														  <select name="gender" class="option-select">
															  <option value="0">Select</option>
															  <option value="Male">Male</option>
															  <option value="Female">Female</option>

														  </select>
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Type of Admission <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">


																  <select name="Admission" class="option-select" >
																		<option value="">Select</option>
																		<option value="Days">Days</option>
																		<option value="Resedential">Resedential</option>

																  </select>


														</div>
														</div>
														</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">M.P.C <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">


																  <select name="mpc" class="option-select" >
																		<option value="">Select</option>
																		<option value="IIT/AC">IIT/AC</option>
																		<option value="JEE Mains A/C">JEE Mains A/C</option>
																		<option value="JEE Mains Non A/C">JEE Mains Non A/C</option>
																  </select>


														</div>
														</div>
														</div>
										</div>
											<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Bi.P.C <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">

																  <select name="Bipc" class="option-select">
																		<option value="">Select</option>
																		<option value="AIIMS/AC">AIIMS/AC</option>
																		<option value="NEET A/C">NEET A/C</option>
																		<option value="NEET A/C Non A/C">NEET A/C Non A/C</option>
																		<option value="NEET CL A/C Non A/C">NEET CL A/C Non A/C</option>
																  </select>

														</div>
														</div>
														</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">City  <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="city" placeholder="Enter your City" >
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">State  <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="state" placeholder="Enter your State" >
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Zip Code  <span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="zipcode" placeholder="Enter your zipcode">
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Mobile Number<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" pattern="[789][0-9]{9}" name="mobile"  placeholder="Enter your Mobile Number " >
													</div>
												</div>
											</div>
										</div><!--end form group-->
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Name of Father<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="father" placeholder="Enter your Father Name">
													</div>
												</div>
											</div>
										</div><!--end form group-->



								<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Name of Mother<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="mother" placeholder="Enter your Mother Name">
													</div>
												</div>
											</div>
										</div><!--end form group-->

										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Occupation/Profession<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<input type="text" class="form-control" required="" name="occupation" placeholder="Enter Occupation ">
													</div>
												</div>
											</div>
										</div><!--end form group-->

										<div class="form-group">
											<div class="row">
												<div class="col-xs-12 col-sm-4">
													<div class="label">Address<span class="error">*</span></div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="text-field">
														<textarea type="text" class="form-control" required="" name="address" placeholder="Enter your Address "> </textarea>
													</div>
												</div>
											</div>
										</div>
										<input type="submit" value="Submit" class="commonBtn pull-right">
										
									</form>
								</div>
						</div>

						<div class="col-xs-12 col-sm-4 col-md-4 custom_left">

						</div>
					</div><!--end row-->
				</div>
			</div><!--end custom content-->




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
                    <li class="hidden-xs"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li class="hidden-xs"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    <li class="hidden-xs"><a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
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
<script src="../js/bootstrap-datepicker.js"></script>




		  	<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#Dateof').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#Dateof').datepicker();
			$('#Dateof').datepicker();


			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});
		});
	</script>










</body>
</html>


  <!-- JQUERY SCRIPTS -->
