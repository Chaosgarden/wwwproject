<?php
 include_once '../config.php';
 include_once('../scripts/session.php');
 
	if (isset( $_SESSION['login_user']))
	{
		$artistID=$conn->real_escape_string( $_POST['artistID']);
		$sqli="DELETE FROM roles where artistID='$artistID' ";
		$sql="DELETE FROM artist where artistID='$artistID' ";
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
