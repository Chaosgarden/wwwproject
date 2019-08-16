<?php
   include('session.php');
?>
<html>
   
<?php include '../header.php' ?>
	
	<div class="container">
		<form action="../scripts/addMovieScript.php" method="post">		
			<input type="text" name="title" placeholder="Enter your title" required>
			<input type="text" name="image" placeholder="Enter your image url" required>
			<input type="text" name="fullDescription" placeholder="Enter your description" required>
			<input type="text" name="shortDescription" placeholder="Enter your short description" required>
			<input type="text" name="category" placeholder="Enter your category" required>
			<input type="text" name="yearOfWork" placeholder="Enter your yearOfWork" required>
			<input type="text" name="movieLength" placeholder="Enter your length" required>
			<input type="text" name="link" placeholder="Enter your trailer url" required>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>

	
<?php include '../footer.php' ?>
   
</html>