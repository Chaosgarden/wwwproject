<?php
include_once('../scripts/session.php');
include_once '../config.php';
	if (isset($_POST['submit'])) 
	{
		$title= $conn->real_escape_string($_POST['title']);
		$movieImage=$conn->real_escape_string($_POST['image']);
		$fullDescription=$conn->real_escape_string($_POST['fullDescription']);
		$shortDescription=$conn->real_escape_string($_POST['shortDescription']);
		$category=$conn->real_escape_string($_POST['category']);
		$yearOfWork=$conn->real_escape_string($_POST['yearOfWork']);
		$movieLength=$conn->real_escape_string($_POST['movieLength']);
		$links=$conn->real_escape_string($_POST['links']);
		$uploadPic=$conn->real_escape_string($_POST['fileToUpload']);
		
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				echo "<scripts> alert('works'); </script>";
			} 
			else 
			{
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) 
		{
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
		{
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} 
		else 
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
			{
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} 
			else 
			{
				echo "Sorry, there was an error uploading your file.";
			}
		}$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} 
			else 
			{
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) 
		{
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
		{
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} 
	else 
	{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		{
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} 
		else 
		{
			echo "Sorry, there was an error uploading your file.";
		}
	}
		$sql="INSERT INTO movies (title, movieImage, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
				values ('$title', '$movieImage', '$fullDescription', '$shortDescription', '$category', '$yearOfWork', '$movieLength', '$links')";
		
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';
			echo $i;
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
			<form action="addMovie.php" method="post">	
				<h2>Hello admin,</h2>
				<p>please enter all the required information to continue</p>
				<br>
				Movie Title: <input type="text" name="title" placeholder="Movie Title" required>
				<br>
				<br>
				Full Description: <input type="text" name="fullDescription" placeholder="Full description" required>
				<br>
				<br>
				Short Description: <input type="text" name="shortDescription" placeholder="Short description" required>
				<br>
				<br>
				Category: <input type="text" name="category" placeholder="Category" required>
				<br>
				<br>
				Movie length: <input type="number" name="movieLength" placeholder="Duration" required>
				<br>
				<br>
				Date of release: <input type="date" name="yearOfWork" placeholder="Date of release" required>
				<br>
				<br>
				Picture URL: <input type="url" name="image" placeholder="Image URL">
				<br>
				<br>
				Or upload an image: <input type="file" name="fileToUpload" id="fileToUpload">
				<br>
				<br>
				Trailer URL: <input type="url" name="links" placeholder="Trailer URL" required>
				<br>
				<br>
				<input type="submit" class="btn btn-primary" 	name="submit" value="Submit"> <a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>
   
</html>