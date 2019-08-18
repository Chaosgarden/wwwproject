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
			<a href="/wwwproject/index.php" class="btn btn-primary" role="button">Movie Gallery </a>
		</div>
		
		<div class="col-8" id ="options">
			<input type="input" placeholder="Movie Title"> 
			<select name="category">
				<option value="absurdist">Absurdist </option>
				<option value="action">Action </option>
				<option value="adventure">Adventure </option>
				<option value="comedy">Comedy </option>
				<option value="crime">Crime </option>
				<option value="drama">Drama </option>
				<option value="dantasy">Fantasy </option>
				<option value="historical">Historical </option>
				<option value="historical fiction">Historical fiction </option>
				<option value="horror">Horror </option>
				<option value="magical realism">Magical realism </option>
				<option value="mystery">Mystery </option>
				<option value="paranoid fiction">Paranoid fiction </option>
				<option value="philosophical">Philosophical </option>
				<option value="political">Political </option>
				<option value="romance">Romance </option>
				<option value="saga">Saga </option>
				<option value="satire">Satire </option>
				<option value="science fiction">Science fiction </option>
				<option value="social">Social </option>
				<option value="speculative">Speculative </option>
				<option value="thriller">Thriller </option>
				<option value="urban">Urban </option>
				<option value="western">Western </option>
			</select>
		</div>
		<?php if (!isset( $_SESSION['login_user']))
			{ ?>	
				<div class="col-2" id="signUpIn">		
					<a href="/wwwproject/pages/register.php" value="Sign up">Sign up</a>
					
					<br>
					
					<a href="/wwwproject/pages/login.php" value="Sign up">Sign in</a> 
				</div>
		<?php }else{ ?> 
				<div class="col-2" id="signUpIn">
					<a href="/wwwproject/pages/addMovie.php" value="add movies">Add Movie</a>
						
				<br>
					
					<a href="/wwwproject/scripts/logout.php" value="Sign up">Sign out</a>
				</div>
		<?php } ?>	
	</div>
</header>