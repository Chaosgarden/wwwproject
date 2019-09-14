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
						<?php
								$row["firstName"]; str_repeat('&nbsp;', 5);
								$row["lastName"]; str_repeat('&nbsp;', 5);
								
						?>
						<form action="../scripts/deleteArtist.php" method="post" >
							<?php 
							
									echo $row["firstName"]; str_repeat('&nbsp;', 5);
									echo $row["lastName"]; str_repeat('&nbsp;', 5);
							?>			
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