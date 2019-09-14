<?php
	include('../header.php');
    include_once('../scripts/session.php');
	include_once('../config.php');
	
	if (isset( $_SESSION['login_user']))
	{  
		$sql="SELECT * FROM admins";
		$result=$conn->query($sql);
		
		while($row=$result->fetch_assoc()) 
		{
		?>
		<div class="container">
			<div class="col-12">
				<div class="row">
					<p> 
						<?php
							echo $row["email"]; str_repeat('&nbsp;', 5);
						?>
					</p>	
				</div>
			</div>
		</div>
			<?php
		}
	}
	$conn->close();
?>