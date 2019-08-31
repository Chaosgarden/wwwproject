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
		
		echo $resultMessage='<div class="alert alert-danger">Inputs are empty</div>';
		$conn->close();
		
	}
	else
	{
		//check if input characters are valid.
		if(	!preg_match("/^[a-zA-Z]*$/",$firstName) || 
			!preg_match("/^[a-zA-Z]*$/",$lastName))
		{
				echo $resultMessage='<div class="alert alert-danger">Invalid characters</div>';
			$conn->close();
			
		}
		else
		{
			//check if email exist
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				echo $resultMessage='<div class="alert alert-danger">Invalid email</div>';
				$conn->close();
				
			}
			else
			{
				//query for existing user
				$sql = "SELECT * FROM admins WHERE email='$email'";
				$result = $conn->query($sql);
				$resultCheck = mysqli_num_rows($result);
				
				
				if($resultCheck > 0)
				{
					echo $resultMessage='<div class="alert alert-danger">Email has been taken</div>';

					$conn->close();
					
				}
				else
				{
					//hashing the pw
					$hashedCreds = password_hash($credential, PASSWORD_DEFAULT);
					$sql = "INSERT INTO admins (firstName, lastName, email, credential)
							values ('$firstName', '$lastName', '$email', '$credential')";
					$result = $conn->query($sql);
					echo $resultMessage='<div class="alert alert-danger">Success</div>';
					$conn->close();
				}
			}
		}	
	}
} 
?>
<?php include '../header.php' ?>
	
	<div class="container">
		<div class="col-12" id="inputBox">
			<h2>Create your Account</h2>
			<p>to continue</p>
			<form action="register.php" method="post">
				<input  type="text" name="firstName" placeholder="Firstname" required>
				<br>
				<br>
				<input type="text" name="lastName" placeholder="Lastname" required>
				<br>
				<br>
				<input type="text" name="email" placeholder="E-Mail" required>
				<br>
				<br>
				<input type="password" name="credential" placeholder="Password" required>
				<br>
				<br>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>

	
<?php include '../footer.php' ?>