<?php
	include ('../header.php');
	include_once('../scripts/session.php');
?>
<html>
	<div class="container" id="welcomeP">
		<head>

		</head>
		<body>
			<h1>Welcome <?php echo $login_session; ?> </h1> 
			<br>
			<section class="container">
				<p>To view the list of administrators, press:</p>
				<a href="/wwwproject/pages/listAdmin.php" class="btn btn-primary"  role="button" value="Add Artist">Admin List</a>
				<br>
				<br>
				<p>To manage your account press<br><a href="/wwwproject/pages/accountManagement.php" class="btn btn-primary" role="button" value="Edit profile">My Account</a></p>
			</section>
		</body>
	</div>
</html>