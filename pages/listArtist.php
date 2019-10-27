<?php
	include('../header.php');
    include_once('../scripts/session.php');
	include_once('../config.php');
	
	if (isset( $_SESSION['login_user']))
	{  
		$sql="SELECT * FROM artist";
		$result=$conn->query($sql);
		?>
				<div class="container">
					<div class="col-12">
				<?php
		while($row=$result->fetch_assoc()) 
		{
		?>
		
			
				<div class="row justify-content-center">
					<p> 
						<form action="../pages/pageArtist.php" method="post" >
							<input hidden type="text"  name="artistID" value="<?php echo $row["artistID"]?>"> 
							<span> <?php echo "Name of Artist: " . $row["firstName"]." ".$row["lastName"]?> </span>
							<input type="submit" name="submit" value="<?php echo "profile"; ?>">
						</form>
						
						<form action="../pages/editArtist.php" method="post" >
							<input hidden type="text"  name="artistID" value="<?php echo $row["artistID"]?>"> 
							<input type="submit" name="submit" value="edit">
						</form>
						
						<form action="../scripts/deleteArtist.php" onsubmit="return confirm('Are you sure you want to delete?')" method="post"; >	
							<input hidden type="text"  name="artistID" value="<?php echo $row["artistID"]?>"> 
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
		<a href="/wwwproject/pages/artistManagement.php" class="btn btn-primary" role="button" id="btnReturn" value="homePage">Back</a>
		</div>
</div>
</div>