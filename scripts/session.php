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
		$ses_sql = mysqli_query($conn,"select email from admins where email = '$user_check' ");	
		$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);   
		$login_session = $row['email'];
	}

?>