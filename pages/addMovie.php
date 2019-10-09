<?php
include_once('../scripts/session.php');
include_once '../config.php';

	if (isset($_POST['submit'])) 
	{
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
	{
        $uploadOk = 1;
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	{
        $filePath = "/wwwproject/uploads/" .basename( $_FILES["fileToUpload"]["name"]);
    } 

		$title= $conn->real_escape_string($_POST['title']);
		$movieImage=$conn->real_escape_string($_POST['image']);
		$fullDescription=$conn->real_escape_string($_POST['fullDescription']);
		$shortDescription=$conn->real_escape_string($_POST['shortDescription']);
		$category=$conn->real_escape_string($_POST['category']);
		$yearOfWork=$conn->real_escape_string($_POST['yearOfWork']);
		$movieLength=$conn->real_escape_string($_POST['movieLength']);
		$links=$conn->real_escape_string($_POST['links']);
		
		if($movieImage == "")
		{
			$sql="INSERT INTO movies (title, movieImage, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
				values ('$title', '$filePath', '$fullDescription', '$shortDescription', '$category', '$yearOfWork', '$movieLength', '$links')";
		}
		else 
		{
			echo "<script> alert('works2'); </script>";
			$sql="INSERT INTO movies (title, movieImage, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
				values ('$title', '$movieImage', '$fullDescription', '$shortDescription', '$category', '$yearOfWork', '$movieLength', '$links')";
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
?>

<html>
   
<?php include '../header.php' ?>
	
	<div class="container">
		<div class="col-12" id="registerP">
			<form action="addMovie.php" method="post" enctype= "multipart/form-data">	
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