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
				<p>To add a Movie press<br><a href="/wwwproject/pages/accountManagement.php" class="btn btn-primary" role="button" value="Edit profile">My Account</a></p>
				<p>To see list of admins press<br><a href="../scripts/listAdmin.php" class="btn btn-primary">Admin List</a></p>
			</section>
		</body>
	</div>
</html>