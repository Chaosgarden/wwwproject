<?php
include('../header.php');
include_once('../scripts/session.php');
include_once '../config.php';
include_once '../classes/artist.php';


if (isset($_POST['submit'])) 
	{	
	
		$artistID=$conn->real_escape_string($_POST['artistID']);
		$sql="SELECT * FROM artist where artistID='$artistID'";
		
		$sqli="SELECT movies.movieID,movies.title FROM roles LEFT JOIN movies ON roles.movieID = movies.movieID 
					WHERE roles.artistID = (SELECT artistID FROM artist WHERE artistID ='$artistID')";							
		$result=$conn->query($sql);
		$results=$conn->query($sqli);	
		while($row=$result->fetch_assoc()) 
		{
		$Artists=new Artist($row["firstName"], $row["lastName"],$row["nationality"],$row["yearOfBirth"], $row["yearOfDeath"], $row["biography"],$row["picture"]);
		
?>
<section class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-4">
					<img id="contentImg" src="<?php echo $Artists->getPicture(); ?>">  </img>
				</div>
				<div class="col-8">
					<div class="table-responsive">
						<table class="table borderless">
							<tr>
								<th>
									First Name:<p> <?php echo $Artists->getFirstName(); ?> </p>
								</th>
							</tr>
							<tr>
								<td>
									Last Name:<p> <?php echo $Artists->getLastName(); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Nationality:<p> <?php echo $Artists->getNationality(); ?> </p>
								</td>
							</tr>
							<tr>
								<td>
									Date of Birth:<p> <?php echo $Artists->getYearOfBirth(); ?> </p>
								</td>
							</tr>
							<tr>
								<td>
									Date of Death:<p> <?php echo $Artists->getYearOfDeath(); ?> </p>
								</td>
							</tr>
							<tr>
								<td>
									Biography:<p> <?php echo $Artists->getBiography(); ?> </p>
								</td>
							</tr>
							<tr>
							<td>
							<span> Movies </span>
							<?php while($rows=$results->fetch_assoc()){ ?>
							
								<form action="pageMovie.php" method="post">
									<input hidden type="text"  name="movieID" value="<?php if(isset($rows["movieID"])){ echo $rows["movieID"];}?>"> 
									<input type="submit" class="btn btn-primary" name="submit" value="<?php echo $rows["title"]; ?>">
								</form>
							
							<?php } ?>
							</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--whitespace placeholder(prob not the best way-->
	</div>
</section>

<?php include '../footer.php' ?>
<?php	
	}
} 
	else 
	{
		echo "<center> <p> 0 results </p> </center>";
	}
			
	$conn->close();
?>