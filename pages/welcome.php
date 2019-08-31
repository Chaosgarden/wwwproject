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
			<br>
			<section class="container">
				<a href="../pages/addMovie.php" class="btn btn-primary">Movie Registration</a>
				<a href="../scripts/listAdmin.php" class="btn btn-primary">Administrator List</a>
			</section>
		</body>
	</div>
</html>