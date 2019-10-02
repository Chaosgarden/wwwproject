<?php
include_once('../scripts/session.php');
include_once '../config.php';
include '../header.php';
	
	if (isset($_POST['artistAssoc']))
	{
		$movieID=$conn->real_escape_string($_POST['movieID']); 
		$artistID=$conn->real_escape_string($_POST['asocArtist']); 

		$sql="INSERT INTO roles (artistID, movieID) VALUES
			( (SELECT artistID from artist WHERE artistID='$artistID'),	 (SELECT movieID from movies WHERE movieID='$movieID' ) );";
		
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';		
		}
			while($row=$result->fetch_assoc()) 
			{
				
			
			}
		/*
CREATE TABLE artist (
    artistID AUTOINCREMENT INTEGER PRIMARY KEY ,
    firstName VARCHAR(30) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	nationality VARCHAR(30) NOT NULL,
	yearOfBirth DATE NOT NULL,
	yearOfDeath DATE NULL,
	biography VARCHAR(30) NOT NULL,
	picture VARCHAR(250) NULL
	
);

CREATE TABLE movies (
    movieID INTEGER(30),
    movieImage VARCHAR(255) NOT NULL,
	title VARCHAR(255) NOT NULL,
	fullDescription VARCHAR(255) NOT NULL,
	shortDescription VARCHAR(255) NOT NULL,
	yearofWork DATE NOT NULL,
	category VARCHAR(255) NOT NULL,
	movieLength VARCHAR(255) NOT NULL,
	link VARCHAR(255) NULL
);

CREATE TABLE roles (
    artistID INTEGER NOT NULL,
    movieID INTEGER NOT NULL,
    FOREIGN KEY (artistID) REFERENCES employee (artistID) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (movieID) REFERENCES company (movieID) ON DELETE RESTRICT ON UPDATE CASCADE,
    PRIMARY KEY (artistID, movieID);
	
*/	
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
   
