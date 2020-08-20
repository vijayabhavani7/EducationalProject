<?php
  // Copy the config.php file to this file.
  include("config.php");
  // Creates a new session, creates a new file in the server
  // folders. The location path is determined by pnp.ini .
  // Then all the variables from here are stored in that
  // file. That file has a unique name that name is set
  // as cookie in the user's browser.
  session_start();

  // If we are getting a post request from server to this
  // page.
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    // We'll have these two values as sent from form, since
    // only that page posts to this page(login.php itself here).

    // This function escapes special characters in a string
    // and makes it usable in a SQL statement ofcourse there
    // can be a charset issue and thats why we pass in db
    // connection link too.
    $myusername =
      mysqli_real_escape_string($db, $_POST['username']);
    $mypassword =
      mysqli_real_escape_string($db, $_POST['password']);

    // SQL query we are going to perform.
    // Select the id field of a row whose username is **
    // and password is **.
    // All of this from login table.
    $sql = "SELECT id FROM login WHERE username = 'sqube' and password = '123456'";
    // Performs a query on the database, we have to pass in
    // connected database connection as the first argument.
    $result = mysqli_query($db, $sql);

    // Gets a row in the result as an associative array,
    // since we passed in the MYSQLI_ASSOC as the second
    // operand.
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // Number of rows in the result.
    $count = mysqli_num_rows($result);
   
    // If result matched $myusername and $mypassword, table
    // row must be 1 row.
    if ($count == 1) {
      // Then add a new session variable called login_user and
      // set it to the user's id value.
      $_SESSION['login_user'] = $row["id"];
      // Send to welcome.php
      header("location: ../pages/admin.php");
      exit;
    } else {
      $error = "Your Login Name or Password is invalid";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Login Page</title>

    <style type = "text/css">
        body
{
    background-color:#aeb7c4;
    padding-top: 40px;
}

         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }

         .box {
            border:#666666 solid 1px;
         }
      </style>
  </head>
  <body bgcolor = "#FFFFFF">

   

<div id="fullscreen_bg" class="fullscreen_bg"/>
  
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                      <form class="" action="" method="post">
         <h3 class="text-center">
                        Login<br/><br/></h3> 
        <div class="form-group">                
        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="text" name="username" class="form-control" placeholder="User Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>    </div>

			
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
						  <div
              style="font-size:11px; color:#cc0000; margin-top:10px">
                <?php if ( isset($error) ) echo $error; ?>
              </div>
			    <a href="password_send.php">Forgot Password</a>
        
	</form>
     </div>
                </div>
               </div>
        </div>
    </div>
</div>

</html>