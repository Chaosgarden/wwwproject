<?php
	include ('../header.php');
	include_once('../scripts/session.php');
?>
<html>
	<div class="container" id="welcomeP">
		<head>
			<title>Welcome </title>
		</head>
		<body>
			<h1>Welcome <?php echo $login_session; ?> </h1> 
			<h2><a href="../scripts/logout.php">Sign Out</a></h2>
			<br>
			<section class="container">
				<a href="../pages/addMovie.php" class="btn btn-default">Register a Movie</a>
				<a href="../scripts/listAdmin.php" class="btn btn-default">List Administrators</a>
			</section>
		</body>
	</div>
</html>