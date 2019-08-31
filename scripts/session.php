<?php

	if((file_exists('config.php')))
	{
		include_once('config.php');
	}
	if((file_exists('../config.php')))
	{
		include_once('../config.php');
	}
	session_start();
	if (isset( $_SESSION['login_user'])) 
	{
  
		$user_check = $_SESSION['login_user'];   
		$ses_sql = "select email from admins where email = '$user_check' ";
		$result = $conn->query($ses_sql);
		
		$row = $result->fetch_array(MYSQLI_ASSOC); 
		$login_session = $row['email'];
	}

?>