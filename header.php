<!DOCTYPE html>
<html>
<head>	
	<!-- css is relative to the root of this project -->
	<link rel="stylesheet" href="/wwwproject/styles/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
<?php    include_once('scripts/session.php'); ?>
<<<<<<< HEAD
<?php if($loggedIn == true)
{
	echo "pizza";
}
?>
=======

>>>>>>> 1fa22dca05ca0c60049b47bd0b568476137a9ca4
<header class="container-fluid">
	<div class="row">
		<div class="col-2">
			<a href="/wwwproject/index.php" class="btn btn-primary" role="button">Movie Gallery </a>
		</div>
		
		<div class="col-8 ">
			<div class="optionsTab">
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
		</div>
		<?php if (!isset( $_SESSION['login_user']))
			{ ?>	
				<div class="col-2">					
					<div class="row">
						<span class="centerText"> <a href="/wwwproject/pages/register.php" value="Sign up">Sign up</a> </span>
					</div>
					<div class="row">
						<span class="centerText"> <a href="/wwwproject/pages/login.php" value="Sign up">Sign in</a> </span>
					</div>
				</div>
		<?php }else{ ?> 
					<div class="col-2">					
					<div class="row">
						<span class="centerText"> <a href="/wwwproject/pages/addMovie.php" value="add movies">add movies</a> </span>
					</div>
					<div class="row">
						<span class="centerText"> <a href="/wwwproject/pages/login.php" value="Sign up">Sign in</a> </span>
					</div>
				</div>
		<?php } ?>	
	</div>
</header>