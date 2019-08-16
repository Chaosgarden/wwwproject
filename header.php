<!DOCTYPE html>
<html>
<head>	
	<!-- css is relative to the root of this project -->
	<link rel="stylesheet" href="/wwwproject/styles/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
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
					<option value="Historical fiction">Historical fiction </option>
					<option value="Horror">Horror </option>
					<option value="Magical realism">Magical realism </option>
					<option value="Mystery">Mystery </option>
					<option value="Paranoid fiction">Paranoid fiction </option>
					<option value="Philosophical">Philosophical </option>
					<option value="Political">Political </option>
					<option value="Romance">Romance </option>
					<option value="Saga">Saga </option>
					<option value="Satire">Satire </option>
					<option value="Science fiction">Science fiction </option>
					<option value="Social">Social </option>
					<option value="Speculative">Speculative </option>
					<option value="Thriller">Thriller </option>
					<option value="Urban">Urban </option>
					<option value="Western">Western </option>
				</select>
			</div>
		</div>
		
		<div class="col-2">
			
			<div class="row">
				<span class="centerText"> <a href="/wwwproject/pages/register.php" value="Sign up">Sign up</a> </span>
			</div>
			<div class="row">
				<span class="centerText"> <a href="/wwwproject/pages/login.php" value="Sign up">Sign in</a> </span>
			</div>
		</div>
	</div>
</header>

