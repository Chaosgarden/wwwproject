<?php
   include_once('../scripts/session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   <body>
		<h1>Welcome <?php echo $login_session; ?> </h1> 
		<h2><a href = "../scripts/logout.php">Sign Out</a></h2>
		
		<section class="container">
			<a href="../pages/addMovie.php" class="btn btn-default">Add Movies</a>
			<a href="../scripts/listAdmin.php" class="btn btn-default">List Administrators</a>
			<input type="button">

		</section>
   </body>
   
</html>