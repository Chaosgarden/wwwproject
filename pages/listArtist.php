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
						<form action="../scripts/deleteArtist.php" method="post" >	
							<input hidden type="text"  name="artistID" value="<?php echo $row["artistID"]?>"> 
							<input type="submit" name="submit" value="Submit">
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