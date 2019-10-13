<?php
	include('../header.php');
    include_once('../scripts/session.php');
	include_once('../config.php');
	
	if (isset( $_SESSION['login_user']))
	{  
		$sql="SELECT * FROM movies";
		$result=$conn->query($sql);
		
		?>
		<div class="container">
			<div class="col-12">
		<?php
		while($row=$result->fetch_assoc()) 
		{
		?>
		
			
				<div class="row">
					<p> 
						<form action="../pages/pageMovie.php" method="post" >
							<input hidden type="text"  name="movieID" value="<?php echo $row["movieID"]?>"> 
							<input type="submit" name="submit" value="<?php echo $row["title"] ?>">
						</form>
						
						<form action="../pages/editMovie.php" method="post" >
							<input hidden type="text"  name="movieID" value="<?php echo $row["movieID"]?>"> 
							<input type="submit" name="submit" value="edit">
						</form>
						
						<form action="../pages/associatedArtist.php" method="post" >	
							<input hidden type="text"  name="movieID" value="<?php echo $row["movieID"]?>"> 
							<input type="submit" name="submit" value="add artists">
						</form>
						
						<form action="../scripts/deleteMovie.php" onsubmit="return confirm('Are you sure you want to delete?')" method="post" >	
							<input hidden type="text"  name="movieID" value="<?php echo $row["movieID"]?>"> 
							<input type="submit" class="btn btn-danger" name="submit" value="Delete">
						</form>
						

					</p>
				</div>	
			<?php
		}
	}
	$conn->close();
?>
<div class="row justify-content-center">
<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
</div>
</div>
</div>