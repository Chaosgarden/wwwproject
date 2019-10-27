<?php
include_once('../scripts/session.php');
include_once '../config.php';
include_once '../classes/movie.php';
include_once("../header.php");
if (isset($_POST['submit'])) 
	{	
		$movieID=$conn->real_escape_string($_POST['movieID']);
		$sql="SELECT * FROM movies where movieID ='$movieID'";
				
		$sqli="SELECT artist.artistID,artist.firstName FROM roles LEFT JOIN artist ON roles.artistID = artist.artistID 
				WHERE roles.movieID = (SELECT movieID FROM movies WHERE movieID ='$movieID')";
					
		$result=$conn->query($sql);	
		$results=$conn->query($sqli);	
		
		while($row=$result->fetch_assoc()) 
		{
			$Movies=new Movie($row["title"], $row["movieImage"],$row["fullDescription"],$row["shortDescription"], $row["category"], $row["yearOfWork"],$row["movieLength"], $row["link"]);		
?>
<section class="container">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-4">
					<img id="contentImg" src="<?php echo $Movies->getImage(); ?>">  </img>
				</div>
				<div class="col-8">
					<div class="table-responsive">
						<table class="table borderless">
							<tr>
								<th>
									Title:<p> <?php echo $Movies->getTitle(); ?> </p>
								</th>
							</tr>
							<tr>
								<td>
									Duration:<p> <?php echo $Movies->getMovieLength(); ?>min - <?php echo $Movies->getCategory(); ?> </p>
								</td>
							</tr>
							<tr>
								<td>
									Description<p> <?php echo $Movies->getShortDescript(); ?> </p>
								</td>
							</tr>
							<tr>
							<td>
							<span> Artists: </span>
							<?php while($rows=$results->fetch_assoc()){	 
									$artistName= $rows["firstName"];
									$artistID= $rows["artistID"];
							?>
								
									 <form action="pageArtist.php" method="post">
										
										<input hidden type="text"  name="artistID" value="<?php if(isset($artistID)){echo $artistID;}?>"> 
										<input type="submit" class="btn btn-primary" name="submit" value="<?php if(isset($artistName)){echo $artistName;}?>">
									</form>	 
								
							<?php } ?>
							</td>
							</td>
							</tr>			
							<tr>
								<td>
									<a href="<?php echo $Movies->getLink(); ?>" class="btn btn-info" role="button">Movie Trailer </a>
								</td>
							</tr>
							<tr>
							<td>
								<a href="/wwwproject/pages/listMovies.php" class="btn btn-primary" role="button" id="btnReturn" value="homePage">Back</a>
							</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
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