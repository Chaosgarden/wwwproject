<?php
   include_once('../scripts/session.php');
?>
<html>
<<<<<<< HEAD
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
=======
   
   <head>
      <title>Welcome </title>
   </head>
   <body>
		<h1>Welcome <?php echo $login_session; ?> </h1> 
		<h2><a href = "../scripts/logout.php">Sign Out</a></h2>
		
		<section class="container">
			<a href="../pages/addMovie.php" class="btn btn-default">Add Movies</a>
			<a href="../scripts/listAdmin.php" class="btn btn-default">List Administrators</a>
			<input type="button">

		</section>
   </body>
   
>>>>>>> 704c21459e1de51de2031f8aaa6335beb8e89a22
</html>