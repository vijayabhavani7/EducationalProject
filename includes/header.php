<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sri Bhavishya Educational Acadeny</title>

     <link rel="icon" type="image/png" href="../img/favicon.png"/>
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../css/plugins/select_option1.css"/>
  <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/plugins/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/plugins/fullcalendar.min.css"/>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'/>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" href="../options/optionswitch.css"/>
  <link rel="stylesheet" href="../css/plugins/animate.css"/>
  <link rel="stylesheet" href="../css/plugins/magnific-popup.css"/>
  <link rel="stylesheet" href="../css/style.css"/>
  <link rel="stylesheet" href="../css/colors/default.css" id="option_color"/>

</head>
<body>
    <div class="main_wrapper">
        <div class="topbar clearfix">
            <div class="container">
                 <ul class="topbar-left">
                    <li class="phoneNo"><i class="fa fa-phone"></i>+91 9581306060</li>
                    <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
                        <a href="sribhavishya2016@Gmail.Com">sribhavishya2016@gmail.Com</a>
                    </li>
                </ul>
                 <ul class="topbar-right">
                    <li class="hidden-xs"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li class="hidden-xs"><a href="https://www.facebook.com/search/top/?q=sri%20bhavishya%20educational%20academy"><i class="fa fa-facebook"></i></a></li>
                    <li class="hidden-xs"><a href="https://plus.google.com/101216075381081492391"><i class="fa fa-google-plus"></i></a></li>
                    <li class="hidden-xs"><a href="https://www.youtube.com/watch?v=fVZzGLM2Dks"><i class="fa fa-youtube-play"></i></a></li>

                    <li class="dropdown top-search list-inline">
                        <a href="admin.php">
                            <i class="fa fa-user"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="header clearfix">
            <nav class="navbar navbar-main navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header_inner">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <a class="navbar-brand logo clearfix" href="index.php">
                                        <img src="../img/logo.png" alt="" class="img-responsive" style=" height: 70px;margin-top: -4px;"/></a>
                                </div>
                                	<!-- Collect the nav links, forms, and other content for toggling -->
                                  <div class="collapse navbar-collapse"
																		id="main-nav">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active">
																					<a href="index.php">
																						Home
																					</a>
																				</li>
                                        <li class="dropdown">
                     											<a href="#" class="dropdown-toggle"
																						data-toggle="dropdown" role="button"
																						aria-haspopup="true"
																						aria-expanded="false">
																						About Us
																					</a>
                                    				<ul class="dropdown-menu">
                                       				<li>
																								<a href="about.php">
																									About Us
																								</a>
																							</li>
                                         			<li>
																								<a href="branches.php">
																									Branches
																								</a>
																							</li>
                                            	<li>
																								<a href="gallery.php">
																									Gallery
																								</a>
																							</li>
                                              <li>
																								<a href="results.php">
																									Results
																								</a>
																							</li>
                                    				</ul>
                            					</li><!-- ./dropdown end -->
                                    	<li class="active">
																				<a href="staff.php">
																					STAFF
																				</a>
																			</li>
                                     	<li class="active">
																				<a href="programs.php">
																					Programs
																				</a>
																			</li>
                                      <li class="active">
																				<a href="contactus.php">
																					CONTACT US
																				</a>
																			</li>
                                      <li class="apply_now">
																				<a href="admissionform.php">
																					Apply Now
																				</a>
																			</li>
																			<?php if(isset($_SESSION["login_user"])): ?>
  																				<li>
  																					<a href="../loginapp/logout.php">
  																						Logout
  																					</a>
  																				</li>
																			 <?php endif ?>


                                  	</ul>
                                </div><!--.main-nav -->
                                <!-- navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
				<section>
		<marquee SCROLLAMOUNT=5 style="color:#e91e63;font-size:18px;">Admissions are opened for Inter, IIT, JEE, AIIMS, JIPMER & NEET. For more details contact 9581944001 to 9</marquee>

		</section>
            </nav>

            <!-- navbar -->
        </div>
