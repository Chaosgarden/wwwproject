 <?php
 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myEmail = mysqli_real_escape_string($db,$_POST['email']);
      $myPassword = mysqli_real_escape_string($db,$_POST['credential']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myEmail' and passcode = '$myPassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myEmail and $myPassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<?php include '../header.php' ?>
	
	<div class="container">
		<form action="../scripts/loginScript.php" method="post">
			<input type="text" name="email" placeholder="Enter your email" required>
			<input type="password" name="credential" placeholder="Enter your password" required>

			<input type="submit" value="Submit">
		</form>
	</div>

	
<?php include '../footer.php' ?>