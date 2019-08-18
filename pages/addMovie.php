<?php
    include('../scripts/session.php');
?>
<html>
   
<?php include '../header.php' ?>
	
	<div class="container">
		<div class="col-12" id="registerP">
			<form action="../scripts/addMovieScript.php" method="post">	
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

	
<?php include '../footer.php' ?>
   
</html>