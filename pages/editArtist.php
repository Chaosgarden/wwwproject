 <?php
 include_once '../config.php';
 include_once('../scripts/session.php');


   if (isset($_POST['submit']))
   {
	   
		$artistID=$conn->real_escape_string($_POST['artistID']);
		$sql="SELECT * FROM artist where artistID='$artistID'";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row=$result->fetch_assoc()) 
			{	
				$firstName=$row["firstName"];
				$lastName=$row["lastName"];
				$nationality=$row["nationality"];
				$yearOfBirth=$row["yearOfBirth"];
				$yearOfDeath=$row["yearOfDeath"];
				$biography=$row["biography"];
				$picture=$row["picture"];
			}
		}
	
   }
   if (isset($_POST['edit'])) 
   {
	 
	   	$artistID=$conn->real_escape_string($_POST['artistID']);
		$firstName=$conn->real_escape_string($_POST['firstName']);
		$lastName=$conn->real_escape_string($_POST['lastName']);
		$nationality=$conn->real_escape_string($_POST['nationality']);
		$yearOfBirth=$conn->real_escape_string($_POST['yearOfBirth']);
		$yearofDeath=$conn->real_escape_string($_POST['yearofDeath']);
		$biography=$conn->real_escape_string($_POST['biography']);
		$picture=$conn->real_escape_string($_POST['picture']);

		$sql="UPDATE artist SET firstName='$firstName' where artistID='$artistID'";

		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';		
			echo	"<script> alert('success, redirecting you to the main page') </script>";
			header( "refresh:0; url=welcome.php" ); 
		}
		
		$conn->close();
		
   }
  
   ?>

<?php include '../header.php' ?>
	
	
	<div class="container">
		<div class="col-12" id="registerP">
			<form action="editArtist.php" method="post">	
				<h2>Hello admin,</h2>
				<p>please enter all the required information to continue</p>
				<br>
				First Name: <input type="text" name="firstName" placeholder="First Name" value="<?php if(isset($firstName)){echo $firstName;} ?>" required>
				<br>
				<br>
				Last Name: <input type="text" name="lastName" placeholder="Last Name" value="<?php if(isset($lastName)){echo $lastName;} ?>" required>
				<br>
				<br>
				Nationality: <input type="text" name="nationality" placeholder="Nationality" value="<?php if(isset($nationality)){echo $nationality;} ?>" required>
				<br>
				<br>
				Date of Birth: <input type="date" name="yearOfBirth" placeholder="yearOfBirth" value="<?php if(isset($yearOfBirth)){echo $yearOfBirth;} ?>" required>
				<br>
				<br>
				Date of Death: <input type="date" name="yearofDeath" placeholder="yearofDeath" value="<?php if(isset($yearofDeath)){echo $yearofDeath;} ?>" >
				<br>
				<br>
				Biography: <input type="text" name="biography" placeholder="Biography" value="<?php if(isset($biography)){echo $biography;} ?>" required>
				<br>
				<br>
				Picture URL: <input type="url" name="picture" placeholder="Picture URL" value="<?php if(isset($picture)){echo $picture;} ?>" required>
				<br>
				<br>
				<input hidden type="text"  name="artistID" value="<?php if(isset($artistID)){echo $artistID;}?>"> 
				<input type="submit" class="btn btn-primary" name="edit" value="Submit">
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>