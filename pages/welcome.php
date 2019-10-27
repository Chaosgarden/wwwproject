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
				<br>
				<p>To manage your account press<br><a href="/wwwproject/pages/accountManagement.php" class="btn btn-primary" role="button" value="Edit profile">My Account</a></p>
			</section>
		</body>
	</div>
</html>