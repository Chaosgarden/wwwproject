<?php
include_once('../scripts/session.php');
include_once '../config.php';
	if (isset($_POST['submit'])) 
	{
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$movieImage = mysqli_real_escape_string($conn,$_POST['image']);
		$fullDescription = mysqli_real_escape_string($conn,$_POST['fullDescription']);
		$shortDescription = mysqli_real_escape_string($conn,$_POST['shortDescription']);
		$category = mysqli_real_escape_string($conn,$_POST['category']);
		$yearOfWork = mysqli_real_escape_string($conn,$_POST['yearOfWork']);
		$movieLength = mysqli_real_escape_string($conn,$_POST['movieLength']);
		$link = mysqli_real_escape_string($conn,$_POST['link']);
		
		$sql = "INSERT INTO movies (title, movieImage, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
			 values ('$title', '$movieImage', '$fullDescription', '$shortDescription', '$category', '$yearOfWork', '$movieLength', '$link')";
			
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';
			
		}
		else
		{
			echo $resultMessage='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
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
				<input type="text" name="title" placeholder="Movie Title" required>
				<br>
				<br>
				<input type="text" name="fullDescription" placeholder="Full description" required>
				<br>
				<br>
				<input type="text" name="shortDescription" placeholder="Short description" required>
				<br>
				<br>
				<input type="text" name="category" placeholder="Category" required>
				<br>
				<br>
				<input type="text" name="movieLength" placeholder="Duration" required>
				<br>
				<br>
				<input type="text" name="yearOfWork" placeholder="Date of release" required>
				<br>
				<br>
				<input type="text" name="image" placeholder="Image URL" required>
				<br>
				<br>
				<input type="text" name="link" placeholder="Trailer URL" required>
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">
			</form>
        </div>
		</div>
	</div>

	
<?php include '../footer.php' ?>
   
</html>