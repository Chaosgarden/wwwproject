<!DOCTYPE html>
<html>
<head>	
	<!-- css is relative to the root of this project -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/wwwproject/styles/style.css">
</head>
<body id="headerBody">
<?php    include_once('scripts/session.php'); ?>

<header class="container-fluid" id="headerCFID">
	<div class="row">
		<div class="col-2" id="movieG">
			<a href="/wwwproject/index.php" class="btn btn-primary" id="btnMovies" role="button">Home Page</a>
		</div>
		
		<div class="col-8" id ="options">
			<form action="/wwwproject/pages/search.php" method="post">
				<input type="input" name="searchText" placeholder="Movie Title"> 
				<select name="searchType" >
					<option value="movie">Movie</option>
					<option value="artist">Artist</option>
					<option value="all">All</option>
				</select>
				<input type="submit" class="btn btn-primary" name="submit" value="Search">
			</form>
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
					<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" id="btnHome" role="button" value="homePage">My Account</a>
					<br>
					<a href="/wwwproject/scripts/logout.php" class="btn btn-primary"  id="btnOut" role="button" value="Sign out">Sign out</a>		
					
				</div>
		<?php } ?>		
	</div>
	<?php if (isset( $_SESSION['login_user']))
	{ ?>	
		<div class="container-fluid"id="loginBar">		
			<div "col-12" id="editPage">
				<a href="/wwwproject/pages/movieManagement.php" class="btn btn-primary"  role="button" value="add movies">Movie Management</a>
				<a href="/wwwproject/pages/artistManagement.php" class="btn btn-primary"  role="button" value="Add Artist">Artist Management</a>
				<a href="/wwwproject/pages/listAdmin.php" class="btn btn-primary"  role="button" value="Add Artist">Admin List</a>
			</div>
		</div>
	<?php } ?> 
</header>