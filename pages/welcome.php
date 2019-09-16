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
				<p>To manage your account press<br><a href="/wwwproject/pages/accountManagement.php" class="btn btn-primary" role="button" value="Edit profile">My Account</a></p>
				<p>To see list of admins press<br><a href="../pages/listAdmin.php" class="btn btn-primary">Admin List</a></p>
				<a href="../pages/listArtist.php" class="btn btn-primary">Artist List</a>
			</section>
		</body>
	</div>
</html>