<?php
include_once('../scripts/session.php');
include_once '../config.php';
include_once '../classes/movie.php';

	if (isset($_POST['submit'])) 
	{
		$searchText=$conn->real_escape_string($_POST['searchText']);
		$searchType=$conn->real_escape_string($_POST['searchType']);
		
		
		//$sql="SELECT * FROM artist where firstName='$searchText' OR lastName='$searchText ";
		if($searchType == "movie")
		{
			$sql="SELECT * FROM movies where title='$searchText'";
			$result=$conn->query($sql);		
		}
		if($searchType == "artist")
		{
			$sql="SELECT * FROM artist where firstName='$searchText' OR lastName='$searchText ";
			$result=$conn->query($sql);	
		}
				
	}
?>
<html>
   
<?php include '../header.php' ?>
	
<?php 
if ($result=$conn->query($sql)) 
{
	// data of each row
	while($row=$result->fetch_assoc()) 
	{
		
		?>
		
	
				<!--flexbox is prob a better way, whitespace placeholder(prob not the best way-->		
			<?php
			if($searchType == "movie")
			{
				$Movies=new Movie($row["title"], $row["movieImage"],$row["fullDescription"],$row["shortDescription"], $row["category"], $row["yearOfWork"],$row["movieLength"], $row["link"]);
			?>
			<section class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-4">
								<p> <?php echo $Movies->getImage(); ?> </p>
							</div>
							<div class="col-8">
								<table>
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
					<!--whitespace placeholder(prob not the best way-->
				</div>
			</section>
<?php		}
			if($searchType == "artist")
			{	
				
			}
			?>		
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
</html>