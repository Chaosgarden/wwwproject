 <?php
 require_once '../classes/admin.php';
 require_once '../config.php';
 include_once('../scripts/session.php');

   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $myEmail = mysqli_real_escape_string($conn,$_POST['email']);
      $myPassword = mysqli_real_escape_string($conn,$_POST['credential']); 
	  
      $sql = "SELECT id FROM admins WHERE email = '$myEmail' and credential = '$myPassword'";
	  
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myEmail and $myPassword, table row must be 1 row
		
      if($count == 1) {
		
        $_SESSION['login_user'] = $myEmail; 
		
        header("location: welcome.php");
		$conn->close();
      }else {
         echo "<script> alert('email or password wrong'); </script>";
		 $conn->close();
      }
   }
?>

<?php include '../header.php' ?>
	
	<div class="container">
		<form action="../pages/login.php" method="post">
			<input type="text" name="email" placeholder="Enter your email" required>
			<input type="password" name="credential" placeholder="Enter your password" required>

			<input type="submit" name="submit" value="Submit">
		</form>
	</div>

	
<?php include '../footer.php' ?>