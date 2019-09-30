<?php
include_once('../scripts/session.php');
include_once '../config.php';
include_once '../classes/artist.php';
include_once("../header.php");
if (isset($_POST['submit'])) 
	{	
		$moviesID=$conn->real_escape_string($_POST['moviesID']);
		$sql="SELECT * FROM movies";
		$result=$conn->query($sql);	
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