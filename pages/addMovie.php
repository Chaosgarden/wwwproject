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
		$link=$conn->real_escape_string($_POST['link']);
		
		$sql="INSERT INTO movies (title, movieImage, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
				values ('$title', '$movieImage', '$fullDescription', '$shortDescription', '$category', '$yearOfWork', '$movieLength', '$link')";
		

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
				Picture URL: <input type="url" name="image" placeholder="Image URL" required>
				<br>
				<br>
				Trailer URL: <input type="url" name="link" placeholder="Trailer URL" required>
				<br>
				<br>
				<input type="submit" class="btn btn-primary" 	name="submit" value="Submit"> <a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>
   
</html>