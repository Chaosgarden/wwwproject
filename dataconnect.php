<?php	
//database info
$host = '';
$dbusername = 'root';
$dbpassword = 'root';
$dbname = 'moviegalery';

$firstNames = 	$_POST['firstName'];
$lastNames = 	$_POST['lastName'];
$emails = 		$_POST['email'];
$credentials = 	$_POST['credential'];

var_dump($firstNames ,$credentials,$emails);
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error())
{
	die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
}
else
{
	$sql = "INSERT INTO admins (firstName, lastName, email, credential)
			 values ('$firstNames', '$lastNames', '$emails', '$credentials')";
			
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

?>
