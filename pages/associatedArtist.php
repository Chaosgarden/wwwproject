<?php
include_once('../scripts/session.php');
include_once '../config.php';
include '../header.php';
	
	if (isset($_POST['artistAssoc']))
	{
		$movieID=$conn->real_escape_string($_POST['movieID']); 
		$artistID=$conn->real_escape_string($_POST['asocArtist']); 

	//	$sql="SELECT * FROM orders where movieID='$movieID'";
		$sql="INSERT INTO orders(movieID, artistID)
			SELECT 'Joe The Student', id_teacher
			FROM TAB_TEACHER
			WHERE movieID = '10'";
		echo $movieID;
		echo $artistID;
	
			while($row=$result->fetch_assoc()) 
			{	echo "not working";
				
				echo $row["pee"];
			}
	
	}
	if (isset($_POST['submit']))
	{    

	   	$movieID=$conn->real_escape_string($_POST['movieID']); 
		
		//$sql="SELECT * FROM orders where movieID='$movieID'";
		$sql="SELECT * FROM artist";
		$result=$conn->query($sql);
		
?>

	<div class="container">
		<div class="col-12" id="registerP">
					
								
									<form action="associatedArtist.php" method="post">
										<input hidden type="text"  name="movieID" value="<?php if(isset($movieID)){echo $movieID;}?>"> 
										<select name="asocArtist">
										<?php 	while($row=$result->fetch_assoc()) 
											{		?>							
											 <option value="<?php echo $row['artistID'] ;?>"><?php echo $row['firstName'] ;?> </option>	
										<?php	} ?>
										</select>
									
										<input type="submit" class="btn btn-primary" name="artistAssoc" value="Submit">
								</form> <?php								
								 
							}
						
						
					
				
	
	$conn->close();?></div>

	
<?php include '../footer.php' ?>
   
