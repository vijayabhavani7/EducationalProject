<?php
	require_once 'dbconfig.php';

  $staffname     =  $_POST['staffname'];
$qualification    =  $_POST['qualification'];
$photo=  $_POST['photo'];

$upload_path = "Uploads/".$photo; 


if($imgFile)
		{
			$upload_dir = 'uploads/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$photo = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['photo']);
					move_uploaded_file($tmp_dir,$upload_dir.$photo);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$photo = $edit_row['photo']; // old image from database
		}	
						


$sql = "INSERT INTO admin(staffname,qualification,photo) values('$staffname','$qualification','$photo')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>




