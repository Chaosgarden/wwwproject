<?php
include_once('../scripts/session.php');
include_once '../config.php';

	if (isset($_POST['submit'])) 
	{
		$target_dir = "../imageUploads//";
	$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    if($check !== false) 
	{
        $uploadOk = 1;
    }

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file))
	{
        $filePathArtists = "/wwwproject/imageUploads/" .basename( $_FILES["imageUpload"]["name"]);
    } 
		$firstName=$conn->real_escape_string($_POST['firstName']);
		$lastName=$conn->real_escape_string($_POST['lastName']);
		$nationality=$conn->real_escape_string($_POST['nationality']);
		$yearOfBirth=$conn->real_escape_string($_POST['yearOfBirth']);
		$yearofDeath=$conn->real_escape_string($_POST['yearofDeath']);
		$biography=$conn->real_escape_string($_POST['biography']);
		$picture=$conn->real_escape_string($_POST['picture']);
			
		if($picture == "")
		{
			$sql="INSERT INTO artist (firstName, lastName, nationality, yearOfBirth, yearOfDeath, biography, picture)
			values ('$firstName', '$lastName', '$nationality', '$yearOfBirth', '$yearofDeath', '$biography', '$filePathArtists')";
		}
		else
		{
			$sql="INSERT INTO artist (firstName, lastName, nationality, yearOfBirth, yearOfDeath, biography, picture)
			values ('$firstName', '$lastName', '$nationality', '$yearOfBirth', '$yearofDeath', '$biography', '$picture')";
		}
		if($yearofDeath == "")
        {
                $sql="INSERT INTO artist (firstName, lastName, nationality, yearOfBirth, yearOfDeath, biography, picture)
                values ('$firstName', '$lastName', '$nationality', '$yearOfBirth', null, '$biography', '$picture')";
        }
        else
		{
            $sql="INSERT INTO artist (firstName, lastName, nationality, yearOfBirth, yearOfDeath, biography, picture)
			values ('$firstName', '$lastName', '$nationality', '$yearOfBirth', '$yearofDeath', '$biography', '$picture')";
        }
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';	
		}
		else
		{
			echo $resultMessage='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
		}		
	$conn->close();
	}
		
else
{
	
}
?>
<html>
   
<?php include '../header.php' ?>
	
	<div class="container">
		<div class="col-12" id="registerP">
			<form action="addArtist.php" method="post" enctype= "multipart/form-data">	
				<h2>Hello admin,</h2>
				<p>please enter all the required information to continue</p>
				<br>
				First Name: <input type="text" name="firstName" placeholder="First Name" required>
				<br>
				<br>
				Last Name: <input type="text" name="lastName" placeholder="Last Name" required>
				<br>
				<br>
				Nationality: <input type="text" name="nationality" placeholder="Nationality" required>
				<br>
				<br>
				Date of Birth: <input type="date" name="yearOfBirth" placeholder="yearOfBirth" required>
				<br>
				<br>
				Date of Death: <input type="date" name="yearofDeath" placeholder="yearofDeath">
				<br>
				<br>
				Biography: <input type="text" name="biography" placeholder="Biography" required>
				<br>
				<br>
				Picture URL: <input type="url" name="picture" placeholder="Picture URL">
				<br>
				<br>
				Or upload an image: <input type="file" name="imageUpload" id="imageUpload">
				<br>
				<br>
				<input type="submit" class="btn btn-primary" name="submit" value="Submit"> <a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>
   
</html>