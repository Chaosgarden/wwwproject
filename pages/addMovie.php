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
				<input type="text" name="title" pattern="[A-Za-z0-9]{2.}$" placeholder="Movie Title" required>
				<br>
				<br>
				<input type="text" name="fullDescription" pattern="[A-Za-z0-9]{2.}$" placeholder="Full description" required>
				<br>
				<br>
				<input type="text" name="shortDescription" pattern="[A-Za-z0-9]{2.}$" placeholder="Short description" required>
				<br>
				<br>
				<input type="text" name="category" pattern="[A-Za-z]{2.}$" placeholder="Category" required>
				<br>
				<br>
				<input type="number" name="movieLength" pattern="[0-9]{2.}" placeholder="Duration" required>
				<br>
				<br>
				<input type="date" name="yearOfWork" placeholder="Date of release" required>
				<br>
				<br>
				<input type="url" name="image" pattern="https?://.+" placeholder="Image URL" required>
				<br>
				<br>
				<input type="url" name="link" pattern="https?://.+" placeholder="Trailer URL" required>
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>
   
</html>