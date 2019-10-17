<?php
	include ('../header.php');
	include_once('../scripts/session.php');

?>
<html>
	<div class="container" id="menuP">
		<head>

		</head>
		<body>
			<h1>Movie Management</h1> 
			<br>
			<section class="container">
				<p>To add movie, press:</p>
				<a href="/wwwproject/pages/addMovie.php" class="btn btn-primary"  role="button" value="add movies">Add Movie</a>
				<br>
				<p>To view the list of movies, press:</p>
				<a href="/wwwproject/pages/listMovies.php" class="btn btn-primary"  role="button" value="add movies">Add Movie</a>
				<br>
				<br>
				<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</section>
		</body>
	</div>
</html>