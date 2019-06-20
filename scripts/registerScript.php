<?php
require '../config.php';
	$empty = false;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$firstNames = 	test_input($_POST['firstName']);
		$lastNames = 	test_input($_POST['lastName']);
		$emails = 		test_input($_POST['email']);
		$credentials = 	test_input($_POST['credential']);
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
?>