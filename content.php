<?php	
//database info
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
		$result = $db->query($sql);

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
				//the contents for the movie is put here
				// example
				echo $row["title"]. $row["category"]. $row["shortDescription"]. $row["link"]. "Directors: ". $row["link"]. "Stars: ". $row["link"];
?>				
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
			
	$db->close();

}

?>

		
