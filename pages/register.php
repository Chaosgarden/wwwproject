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
		header("Location: ../pages/register.php?signup=empty");
		$conn->close();
		exit();
	}
	else
	{
		//check if input characters are valid.
		if(	!preg_match("/^[a-zA-Z]*$/",$firstName) || 
			!preg_match("/^[a-zA-Z]*$/",$lastName))
		{
			header("Location: ../pages/register.php?signup=invalid");
			$conn->close();
			exit();
		}
		else
		{
			//check if email exist
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../pages/register.php?signup=email");
				$conn->close();
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
					header("Location: ../pages/register.php?signup=taken");
					$conn->close();
					exit();
				}
				else
				{
					//hashing the pw
					$hashedCreds = password_hash($credential, PASSWORD_DEFAULT);
					$sql = "INSERT INTO admins (firstName, lastName, email, credential)
							values ('$firstName', '$lastName', '$email', '$credential')";
					mysqli_query($conn, $sql);
					
				
					header("Location: ../pages/register.php?signup=success");
					$conn->close();
					exit();			
					
				}
			}
		}	
	}
} 
?>
<?php include '../header.php' ?>
	
	<div class="container">
<<<<<<< HEAD
		<div class="col-12" id="inputBox">
			<h2>Create your Account</h2>
			<p>to continue</p>
			<form action="../scripts/registerScript.php" method="post">
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
=======
		<form action="../pages/register.php" method="post">
			<input type="text" name="firstName" placeholder="Enter your name" required>
			<input type="text" name="lastName" placeholder="Enter your family name" required>
			<input type="password" name="credential" placeholder="Enter your password" required>
			<input type="text" name="email" placeholder="Enter your email" required>
			<input type="submit" name="submit" value="Submit">
		</form>
>>>>>>> 704c21459e1de51de2031f8aaa6335beb8e89a22
	</div>

	
<?php include '../footer.php' ?>