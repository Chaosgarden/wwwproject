<?php
if (isset($_POST['submit'])) 
{
	include_once '../config.php';
	
	$firstName=$conn->real_escape_string( $_POST['firstName']);
	$lastName=$conn->real_escape_string( $_POST['lastName']);
	$credential=$conn->real_escape_string( $_POST['credential']);
	$email=$conn->real_escape_string( $_POST['email']);
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
				$sql="SELECT * FROM admins WHERE email='$email'";
				$result=$conn->query($sql);
				$resultCheck=mysqli_num_rows($result);
				
				
				if($resultCheck > 0)
				{
					echo $resultMessage='<div class="alert alert-danger">Email has been taken</div>';

					$conn->close();
					
				}
				else
				{
					//hashing the pw
					$hashedCreds=password_hash($credential, PASSWORD_DEFAULT);
					$sql="INSERT INTO admins (firstName, lastName, email, credential)
							values ('$firstName', '$lastName', '$email', '$credential')";
					$result=$conn->query($sql);
					echo $resultMessage='<div class="alert alert-success">Success</div>';
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
				First Name: <input  type="text" name="firstName" pattern="[A-Za-z]{2.}$" placeholder="Firstname" required>
				<br>
				<br>
				Last Name: <input type="text" name="lastName" pattern="[A-Za-z]{2.}$" placeholder="Lastname" required>
				<br>
				<br>
				E-Mail: <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="E-Mail" required>
				<br>
				<br>
				Password: <input type="password" name="credential" pattern=".{8,}$" placeholder="Password" title="Password must be 8 characters long" required>
				<br>
				<br>
				<input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</form>
		</div>
	</div>

	
<?php include '../footer.php' ?>