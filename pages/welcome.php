<?php
   include('../scripts/session.php');
?>
<html>
	<div class="container" id="welcomeP">
		<head>
			<title>Welcome </title>
		</head>
		<body>
			<h1>Welcome <?php echo $login_session; ?> </h1> 
			<h2><a href = "../scripts/logout.php">Sign Out</a></h2>
			<br>
			<section class="container">
				<a href="../pages/addMovie.php" class="btn btn-default">Register a Movie</a>
			</section>
		</body>
	</div>
</html>