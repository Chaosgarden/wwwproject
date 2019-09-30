<?php
include_once('../scripts/session.php');
include_once '../config.php';
include_once '../classes/movie.php';
include_once '../classes/artist.php';

	if (isset($_POST['submit'])) 
	{
		$searchText=$conn->real_escape_string($_POST['searchText']);
		$searchType=$conn->real_escape_string($_POST['searchType']);
		
		
		//$sql="SELECT * FROM artist where firstName='$searchText' OR lastName='$searchText ";
		if($searchType == "movie")
		{
			$sql='SELECT * FROM movies where title LIKE "%'.$searchText.'%" ';
			$result=$conn->query($sql);		
		}
		if($searchType == "artist")
		{
			$sql='SELECT * FROM artist where (firstName LIKE "%'.$searchText.'%" OR lastname LIKE "%'.$searchText.'%") ';
			$result=$conn->query($sql);	
		}
		if($searchType == "all")
		{
			$sql="SELECT * FROM artist a, movies m where (a.firstName LIKE '$searchText' OR a.lastname LIKE '$searchText' OR m.title LIKE '$searchText')";
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
							<img id="contentImg" src="<?php echo $Movies->getImage(); ?>">  </img>
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
			</div>
		</section>
	<?php		} ?>
			<?php
			if($searchType == "artist")
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
										<p> <?php echo $Artists->getFirstName(); ?> </p>
										</th>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getLastName(); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getNationality(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getYearOfBirth(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getYearOfDeath(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getBiography(); ?> </p>
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
				
<?php		}	?>	
<?php
		if($searchType == "all")
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
			</div>
		</section>
	<?php		} ?>	
	<?php
			if($searchType == "all")
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
										<p> <?php echo $Artists->getFirstName(); ?> </p>
										</th>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getLastName(); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getNationality(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getYearOfBirth(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getYearOfDeath(); ?> </p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <?php echo $Artists->getBiography(); ?> </p>
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
				
<?php		}	?>	
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
