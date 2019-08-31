 <?php
 include_once '../classes/admin.php';
 include_once '../config.php';
 include_once('../scripts/session.php');

   if (isset( $_SESSION['login_user']))
   {
	   header("location: welcome.php");
   }
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $myEmail=$conn->real_escape_string($_POST['email']);
      $myPassword=$conn->real_escape_string($_POST['credential']);
	  
      $sql="SELECT id FROM admins WHERE email='$myEmail' and credential='$myPassword'";
	  $loggedIn=true;
	  $result=$conn->query($sql);
      $count=mysqli_num_rows($result);
      
      // If result matched $myEmail and $myPassword, table row must be 1 row
		
      if($count == 1) {
		
        $_SESSION['login_user']=$myEmail; 
		
        header("location: welcome.php");
		$conn->close();
      }else {

         echo $resultMessage='<div class="alert alert-danger">Email or password is wrong</div>';
		 $conn->close();
      }
   }
?>

<?php include '../header.php' ?>
	
	<div class="container" >
		<div class="col-12" id="formLogin">
		<h2>Sign in</h2>
		<p>to continue</p>
		<form action="../pages/login.php" method="post" >
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