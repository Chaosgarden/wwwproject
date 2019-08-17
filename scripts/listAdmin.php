<?php
    include_once('../scripts/session.php');
	include_once('../config.php');
	
	if (isset( $_SESSION['login_user']))
	{  
		$sql = "SELECT * FROM admins";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		while($row = $result->fetch_assoc()) 
		{
			echo $row["email"];
			echo "<br>";
		}
	}
	$conn->close();
?>