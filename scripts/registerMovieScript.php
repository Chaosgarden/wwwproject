<?php
require '../config.php';
	$empty = false;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$movieImages = test_input($_POST['movieImage']);
		$titles = test_input($_POST['title']);
		$fullDescriptions = test_input($_POST['fullDescription']);
		$shortDescriptions = test_input($_POST['shortDescription']);
		$categories = test_input($_POST['category']);
		$yearOfWorks = test_input($_POST['yearOfWork']);
		$movieLengths = test_input($_POST['movieLength']);
		$links = test_input($_POST['link']);
	}
	function test_input($data) 
	{
		/*$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		*/
		$empty = true;
	}
		
else
{
	$sql = "INSERT INTO movies (movieImage, title, fullDescription, shortDescription, category, yearOfWork, movieLength, link)
			 values ('$movieImages','$titles', '$fullDescriptions', '$shortDescriptions', '$categories', '$yearOfWorks', '$movieLengths', '$links')";
			
		if ($db->query($sql))
		{
			echo "New record is inserted sucessfully";
		}
		else
		{
			echo "Error: ". $sql ." ". $db->error;
		}
			
	$conn->close();

}
?>