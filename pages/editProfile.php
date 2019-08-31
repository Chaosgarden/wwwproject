 <?php
 include_once '../config.php';
 include_once('../scripts/session.php');

   if (isset( $_SESSION['login_user']))
   {
		$sql = "SELECT * FROM admins where email = '$_SESSION['login_user']' ";
		$result = $conn->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC); 
		echo $row;
   }
   ?>

<?php include '../header.php' ?>
	
	<div class="container" >
		<div class="col-12" id="formLogin">
		<h2>Sign in</h2>
		<p>to continue</p>
		<form action="../pages/login.php" method="post" >
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