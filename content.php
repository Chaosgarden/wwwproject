<?php	

require 'config.php';
include '/classes/movie.php';

if (mysqli_connect_error())
{
	die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
}
else
{
	//mysql query
	$sql = "SELECT * FROM movies";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		// data of each row
		while($row = $result->fetch_assoc()) 
		{
			
			?>
			<section class="container">
				<div class="row">
		
					<!--flexbox is prob a better way, whitespace placeholder(prob not the best way-->
					<div class="col-2">
					</div>
						
						<?php
							$Movies = new Movie($row["title"], $row["movieImage"],$row["fullDescription"],$row["shortDescription"], $row["category"], $row["yearOfWork"],$row["movieLength"], $row["link"]);
						?>
							<p> <?php echo $Movies->title; ?> </p>
							<a href="<?php echo $Movies->link; ?>">MOVIES </a>
									
					
					<div class="col-md-8">
						<img> </img>
					</div>
				
					<!--whitespace placeholder(prob not the best way-->
					<div class="col-2">
					</div>
				</div>
			</section>
<?php	

		}
	} else 
	{
		echo "0 results";
	}
			
	$conn->close();

}

?>

		
