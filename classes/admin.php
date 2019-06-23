<?php
class admin 
{
	function __construct()
	{
		require '../config.php';
		$empty = false;
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$firstNames = 	$_POST['firstName']; //test_input($_POST['firstName']);
			$lastNames = 	$_POST['lastName']; //test_input($_POST['lastName']);
			$emails = 		$_POST['email']; //test_input($_POST['email']);
			$credentials = 	$_POST['credential']; //test_input($_POST['credential']);
		}
		/*function test_input($data) 
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			
			$empty = true;
		}
		*/
			
		if (mysqli_connect_error())
		{
			die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else
		{
			$sql = "INSERT INTO admins (firstName, lastName, email, credential)
					 values ('$firstNames', '$lastNames', '$emails', '$credentials')";
					
				if ($db->query($sql))
				{
					echo "New record is inserted sucessfully";
				}
				else
				{
					echo "Error: ". $sql ." ". $db->error;
				}
					
			$db->close();

		}
	}
	
	function editClass(){}
}
//$firstmovie = new Movie("5", "JonWick", "0","89", "po", "o3", "Yes", "No" );
//echo $firstmovie->title;
?>