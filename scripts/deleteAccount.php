<?php
 include_once '../config.php';
 include_once('../scripts/session.php');
	if (isset( $_SESSION['login_user']))
	{
		$sql="DELETE FROM admins where email='".$_SESSION['login_user']."' ";
		$result=$conn->query($sql);
		if ($result=$conn->query($sql) ) 
		{
			$yourURL ="logout.php";
			echo "<script>";
			echo "alert('Succesfully deleted');";
			echo "window.location.href='$yourURL'; ";
			echo "</script>";
			
		}
		
	}
	$conn->close();
?>
