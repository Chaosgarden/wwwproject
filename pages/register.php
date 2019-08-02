
<?php include '../header.php' ?>
	
	<div class="container">
		<form action="../scripts/registerScript.php" method="post">
			<input type="text" name="firstName" placeholder="Enter your name" required>
			<input type="text" name="lastName" placeholder="Enter your family name" required>
			<input type="password" name="credential" placeholder="Enter your password" required>
			<input type="text" name="email" placeholder="Enter your email" required>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>

	
<?php include '../footer.php' ?>