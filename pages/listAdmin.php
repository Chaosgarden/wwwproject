<?php
	include('../header.php');
    include_once('../scripts/session.php');
	include_once('../config.php');
	
	if (isset( $_SESSION['login_user']))
	{  
		$sql="SELECT * FROM admins";
		$result=$conn->query($sql);?>
	<div class="container">
		<?php
		while($row=$result->fetch_assoc()) 
		{
		?>
		
			<div class="col-12">
				<div class="row justify-content-center">
					<p> 
						<?php
							echo "emails : ".$row["email"]; str_repeat('&nbsp;', 5);
						?>
					</p>	
				</div>
			</div>
			
			
			<?php
		}
	}
	$conn->close();
?>
		<div class="row justify-content-center">
			<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
		</div>
	</div>