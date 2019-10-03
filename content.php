<?php	
include_once '/classes/movie.php';

//mysql query

$sql="SELECT * FROM movies" ;//LEFT JOIN roles on movies.movieID = roles.movieID";
	$result=$conn->query($sql);
	
	if ($result->num_rows > 0) 
	{
		
		while($row=$result->fetch_assoc()) 
		{	
			$movieID = $row["movieID"];
			$sqli="SELECT artist.artistID,artist.firstName FROM roles LEFT JOIN artist ON roles.artistID = artist.artistID 
					WHERE roles.movieID = (SELECT movieID FROM movies WHERE movieID ='$movieID')";
			
			$results=$conn->query($sqli);
			
				?>
		<section class="container">
			<div class="row">
	
			<?php
				$Movies=new Movie($row["title"], $row["movieImage"],$row["fullDescription"],$row["shortDescription"], $row["category"], $row["yearOfWork"],$row["movieLength"], $row["link"]);
			?>		
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
										<p> <?php echo $Movies->getTitle(); ?> </p>
										</th>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Movies->getMovieLength(); ?>min - <?php echo $Movies->getCategory(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Movies->getShortDescript(); ?> </p>
										</td>
									</tr>						
									<tr>
									<?php while($rows=$results->fetch_assoc()){
									?>
										<td>
											<a href="<?php echo $rows["firstName"]; ?>" class="btn btn-info" role="button"><?php echo $rows["firstName"]; ?> </a>
										</td>
									<?php	} ?>
									</tr>
									<tr>
										<td>
											<a href="<?php echo $Movies->getLink(); ?>" class="btn btn-info" role="button">Movie Trailer </a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php	

		}
	} 
	else 
	{
		echo "0 results";
	}
			
	$conn->close();



?>