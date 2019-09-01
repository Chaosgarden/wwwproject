 <?php
 include_once '../config.php';
 include_once('../scripts/session.php');


   if (isset( $_SESSION['login_user']))
   {
		$sql="SELECT * FROM admins where email='".$_SESSION['login_user']."' ";
		$result=$conn->query($sql);
	
		if ($result->num_rows > 0) 
		{
			while($row=$result->fetch_assoc()) 
			{
				$firstName=$row["firstName"];
				$lastName=$row["lastName"];
				$email=$row["email"];
				$credential=$row["credential"];
			}
		}
		$conn->close();
   }
   if (isset($_POST['submit'])) 
   {
		$firstName= $conn->real_escape_string($_POST['firstName']);
		$lastName= $conn->real_escape_string($_POST['lastName']);
		$email= $conn->real_escape_string($_POST['email']);
		$credential= $conn->real_escape_string($_POST['credential']);

		$sql="UPDATE admins SET firstName='$firstName' ,lastName='$lastName' ,email='$email' ,credential='$credential' where email='".$_SESSION['login_user']."' ";
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';	
		}
		$conn->close();
   }
  
   ?>

<?php include '../header.php' ?>
	
	<div class="container" >
		<div class="col-12" id="formLogin">
		<h2>Sign in</h2>
		<p>to continue</p>
		<form action="../pages/editProfile.php" method="post" >
			<input type="text" name="firstName" placeholder="First name" value="<?php if(isset($firstName)){echo $firstName;} ?>" required>
			<br>
			<br>
			<input type="text" name="lastName" placeholder="Last name" value="<?php if(isset($lastName)){echo $lastName;} ?>" required>
			<br>
			<br>
			<input type="text" name="email" placeholder="Email" value="<?php if(isset($email)){echo $email;} ?>" >
			<br>
			<br>
			<input type="password" name="credential" placeholder="Password" value="<?php if(isset($credential)){echo $credential;} ?>">
			<br>
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		</div>
	</div>

	
<?php include '../footer.php' ?>