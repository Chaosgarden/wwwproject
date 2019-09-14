<?php
	include ('../header.php');
	include_once('../scripts/session.php');
?>
<html>
	<div class="container" id="menuP">
		<head>

		</head>
		<body>
			<h1>Account Management</h1> 
			<br>
			<section class="container">
				<p>To edit profile<br><a href="/wwwproject/pages/editProfile.php" class="btn btn-primary" role="button" value="Edit profile">Edit Profile</a></p>
				<br>
				<form action="../scripts/deleteAccount.php" onsubmit="return confirm('Are you sure you want to delete your account?');">
					<p>To delete your account press<br><input type="submit" value="Delete Account" class="btn btn-primary"></p>
				</form>
				<br>
				<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</section>
		</body>
	</div>
</html>