<?php
 include_once '../config.php';
 include_once('../scripts/session.php');
 
	if (isset( $_SESSION['login_user']))
	{
		$artistID=$conn->real_escape_string( $_POST['artistID']);
		
		$sql="DELETE FROM artist where artistID='$artistID' ";
		$result=$conn->query($sql);
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
