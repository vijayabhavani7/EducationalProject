
<?php

	require_once 'dbconfig.php';
if(isset($_POST["username"], $_POST["password"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $sql = "SELECT username, password FROM login WHERE username = '".$username."' AND  password = '".$password."'" ;

	$result = $conn->query($sql);	
        if($result->num_rows > 0 )
        { 
           echo'<script> window.location="admin.php"; </script> ';
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}

?>