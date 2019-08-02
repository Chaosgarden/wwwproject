<?php
if (isset($_POST['submit'])) 
{
	include_once '../config.php';
	
	$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
	$credential = mysqli_real_escape_string($conn, $_POST['credential']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	//Error handlers
	//Check for empty fields
	if (empty($firstName) || empty($lastName))
	{
		header("Location: ../register.php?signup=empty");
		exit();
	}
	else
	{
		//check if input characters are valid.
		if(	!preg_match("/^[a-zA-Z]*$/",$firstName) || 
			!preg_match("/^[a-zA-Z]*$/",$lastName))
		{
			header("Location: ../register.php?signup=invalid");
			exit();
		}
		else
		{
			//check if email exist
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../register.php?signup=email");
				exit();
			}
			else
			{
				//query for existing user
				$sql = "SELECT * FROM admins WHERE email='$email'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);
				
				if($resultCheck > 0)
				{
					header("Location: ../register.php?signup=taken");
					exit();
				}
				else
				{
					//hashing the pw
					$hashedCreds = password_hash($credential, PASSWORD_DEFAULT);
					$sql = "INSERT INTO admins (firstName, lastName, email, credential)
							values ('$firstName', '$lastName', '$email', '$credential')";
					mysqli_query($conn, $sql);
					
				
					header("Location: ../register.php?signup=success");
					exit();
					
				}
			}
		}	
	}
} 
else 
{
	header("Location: ../register.php");
	exit();
}
?>