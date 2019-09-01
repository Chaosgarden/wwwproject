<?php
	include ('../header.php');
	include_once('../scripts/session.php');
?>
<html>
	<div class="container" id="welcomeP">
		<head>

		</head>
		<body>
			<h1>Welcome <?php echo $login_session; ?> </h1> 
			<br>
			<section class="container">
				<a href="../pages/addMovie.php" class="btn btn-primary">Movie Registration</a>
				<a href="../scripts/listAdmin.php" class="btn btn-primary">Administrator List</a>
				
				<form action="../scripts/deleteAccount.php" onsubmit="return confirm('Are you certain of this action?');">
					<input type="submit" value="delete" class="btn btn-primary">
				</form>
			</section>
		</body>
	</div>
</html>