<?php
	include ('../header.php');
	include_once('../scripts/session.php');
	include_once('../config.php');
	$sql="SELECT * FROM movies INNER JOIN roles on movies.movieID = roles.movieID";
	if ($result->num_rows > 0) 
	{
		while($row=$result->fetch_assoc()) 
		{	
			$row[movieID];
		}
	}
	
?>
