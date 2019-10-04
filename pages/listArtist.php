<?php
	include('../header.php');
    include_once('../scripts/session.php');
	include_once('../config.php');
	
	if (isset( $_SESSION['login_user']))
	{  
		$sql="SELECT * FROM artist";
		$result=$conn->query($sql);
		
		while($row=$result->fetch_assoc()) 
		{
		?>
		<div class="container">
			<div class="col-12">
				<div class="row">
					<p> 
						<form action="../pages/pageArtist.php" method="post" >
							<input hidden type="text"  name="artistID" value="<?php echo $row["artistID"]?>"> 
							<input type="submit" name="submit" value="<?php echo $row["firstName"]." ".$row["lastName"]?>">
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
			</div>
		</div>
			<?php
		}
	}
	$conn->close();
?>
<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>