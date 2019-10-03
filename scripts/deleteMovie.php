<?php
 include_once '../config.php';
 include_once('../scripts/session.php');
 
	if (isset( $_SESSION['login_user']))
	{
		$movieID=$conn->real_escape_string( $_POST['movieID']);
		
		$sql="DELETE FROM movies where movieID='$movieID' ";
		$sqli="DELETE FROM roles where movieID='$movieID' ";
		
		$result=$conn->query($sql);
		$results=$conn->query($sqli);
		
		
		if ($result=$conn->query($sql) ) 
		{
			$yourURL ="../pages/welcome.php";
			echo "<script>";
			echo "alert('Succesfully deleted');";
			echo "window.location.href='$yourURL'; ";
			echo "</script>";
			
		}
		
	}
	$conn->close();
?>
