<?php
require '../config.php';
	$empty = false;
	if (isset($_POST['submit'])) 
	{
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$movieImage = mysqli_real_escape_string($conn,$_POST['image']);
		$fullDescription = mysqli_real_escape_string($conn,$_POST['fullDescription']);
		$shortDescription = mysqli_real_escape_string($conn,$_POST['shortDescription']);
		$category = mysqli_real_escape_string($conn,$_POST['category']);
		$yearOfWork = mysqli_real_escape_string($conn,$_POST['yearOfWork']);
		$movieLength = mysqli_real_escape_string($conn,$_POST['movieLength']);
		$link = mysqli_real_escape_string($conn,$_POST['link']);
		
		echo var_dump($movieImage);
		$sql = "INSERT INTO movies (title, movieImage, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
			 values ('$title', '$movieImage', '$fullDescription', '$shortDescription', '$category', '$yearOfWork', '$movieLength', '$link')";
			
		if ($conn->query($sql))
		{
			echo "New record is inserted sucessfully";
		}
		else
		{
			echo "Error: ". $sql ." ". $conn->error;
		}
			
	$conn->close();
	}
		
else
{
	
}
?>