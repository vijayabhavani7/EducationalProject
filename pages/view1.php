

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhavishya";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);


  $staffname     =  $_POST['staffname'];
$qualification    =  $_POST['qualification'];

   echo "<table border=1>";
echo "<tr><td>staffname</td><td>qualification</td><td>name</td><td>Update</td><td>Delete</td></tr>";
$sql = "INSERT INTO admin(staffname,qualification) values('$staffname','$qualification')";



if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td><br>  ". $row["id"]. "</td> <td>". $row["staffname"]. "</td> <td> ". $row["qualification"] . "</td> <br>";
     }
} else {
     echo "0 results";
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
