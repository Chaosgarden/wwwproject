<!DOCTYPE html>
<html>
<head>	
	<!-- css is relative to the root of this project -->
	<link rel="stylesheet" href="/wwwproject/styles/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
<?php    include_once('scripts/session.php'); ?>

<header class="container-fluid">
	<div class="row">
		<div class="col-2" id="movieG">
			<a href="/wwwproject/index.php" class="btn btn-primary" id="btnMovies" role="button">Movie Gallery </a>
		</div>
		
		<div class="col-8" id ="options">
			<input type="input" placeholder="Movie Title"> 
			<select name="category">
				<option value="movie">Movie</option>
				<option value="artist">Artist</option>
				<option value="all">All</option>
			</select>
		</div>
		<?php if (!isset( $_SESSION['login_user']))
			{ ?>	
				<div class="col-2" id="signUpIn">		
					<a href="/wwwproject/pages/register.php" class="btn btn-primary" id="btnUp" role="button" value="Sign up">Sign up</a>
					<br>					
					<a href="/wwwproject/pages/login.php" class="btn btn-primary" id="btnIn" role="button" value="Sign in">Sign in</a> 
				</div>
		<?php }else{ ?> 
				<div class="col-2" id="signUpIn">
					<a href="/wwwproject/pages/addMovie.php" class="btn btn-primary" id="btnAdd" role="button" value="add movies">Add Movie</a>					
					<br>		
					<a href="/wwwproject/scripts/logout.php" class="btn btn-primary" id="btnOut" role="button" value="Sign out">Sign out</a>
				</div>
		<?php } ?>		
	</div>
	<?php if (isset( $_SESSION['login_user']))
	{ ?>	
		<div class="container-fluid">		
			<div "col-12" id="editPage">
				<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Home Page</a>
				<a href="/wwwproject/pages/editProfile.php" class="btn btn-primary" role="button" value="Edit profile">Edit Profile</a>
				<input type ="button" value="rereeeeeeeeeeeeeeeeeeeeeeeeeeeeee">

			</div>
		</div>
	<?php } ?> 
</header>