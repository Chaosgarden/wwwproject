
<?php include '../header.php' ?>
	
	<div class="container">
		<div class="col-12" id="inputBox">
			<h2>Create your Account</h2>
			<p>to continue</p>
			<form action="../scripts/registerScript.php" method="post">
				<input  type="text" name="firstName" placeholder="Firstname" required>
				<br>
				<br>
				<input type="text" name="lastName" placeholder="Lastname" required>
				<br>
				<br>
				<input type="text" name="email" placeholder="E-Mail" required>
				<br>
				<br>
				<input type="password" name="credential" placeholder="Password" required>
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>

	
<?php include '../footer.php' ?>