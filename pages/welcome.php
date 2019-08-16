<?php
   include('../scripts/session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   <body>
		<h1>Welcome <?php echo $login_session; ?> </h1> 
		<h2><a href = "logout.php">Sign Out</a></h2>
		
		<section class="container">
			<a href="../pages/addMovie.php" class="btn btn-default">Go to Google</a>
			<input type="button">
			<input type="button">

		</section>
   </body>
   
</html>