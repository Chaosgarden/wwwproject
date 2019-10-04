 <?php
 include_once '../config.php';
 include_once('../scripts/session.php');

   if (isset($_POST['submit']))
   {  
	   	$movieID=$conn->real_escape_string($_POST['movieID']); 
	
		$sql="SELECT * FROM movies where movieID='$movieID'";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row=$result->fetch_assoc()) 
			{	
				$title=$row["title"];
				$movieImage=$row["movieImage"];
				$fullDescription=$row["fullDescription"];
				$shortDescription=$row["shortDescription"];
				$category=$row["category"];
				$yearOfWork=$row["yearOfWork"];
				$movieLength=$row["movieLength"];
				$link=$row["link"];
			}
		}
	
   }
   if (isset($_POST['edit'])) 
   {
	
	   	$movieID=$conn->real_escape_string($_POST['movieID']);
	   	$title= $conn->real_escape_string($_POST['title']);
		$movieImage=$conn->real_escape_string($_POST['image']);
		$fullDescription=$conn->real_escape_string($_POST['fullDescription']);
		$shortDescription=$conn->real_escape_string($_POST['shortDescription']);
		$category=$conn->real_escape_string($_POST['category']);
		$yearOfWork=$conn->real_escape_string($_POST['yearOfWork']);
		$movieLength=$conn->real_escape_string($_POST['movieLength']);
		$link=$conn->real_escape_string($_POST['link']);
	

		$sql="UPDATE movies SET title='$title', movieImage='$movieImage', fullDescription='$fullDescription', shortDescription='$shortDescription', yearOfWork='$yearOfWork', movieLength='$movieLength', link='$link' where movieID='$movieID'";
	
		if ($conn->query($sql))
		{		
			echo $resultMessage='<div class="alert alert-success">Success!</div>';		
			echo	"<script> alert('redirecting you to the main page') </script>";
			header( "refresh:0; url=welcome.php" ); 

		}
		else
		{
			echo $resultMessage='<div class="alert alert-success">Error!</div>';		

		}
		
		$conn->close();
		
   }
  
   ?>

<?php include '../header.php' ?>
	
	
	<div class="container">
		<div class="col-12" id="registerP">
			<form action="editMovie.php" method="post">	
				<h2>Hello admin,</h2>
				<p>please enter all the required information to continue</p>
				<br>
				Movie Title: <input type="text" name="title" placeholder="Movie Title" value="<?php if(isset($title)){echo $title;} ?>" required>
				<br>
				<br>
				Full Description: <input type="text" name="fullDescription" placeholder="Full description" value="<?php if(isset($fullDescription)){echo $fullDescription;} ?>" required>
				<br>
				<br>
				Short Description: <input type="text" name="shortDescription" placeholder="Short description" value="<?php if(isset($shortDescription)){echo $shortDescription;} ?>" required>
				<br>
				<br>
				Category: <input type="text" name="category" placeholder="Category" value="<?php if(isset($category)){echo $category;} ?>" required>
				<br>
				<br>
				Movie length: <input type="number" name="movieLength" placeholder="Duration" value="<?php if(isset($movieLength)){echo $movieLength;} ?>" required>
				<br>
				<br>
				Date of release: <input type="date" name="yearOfWork" placeholder="Date of release" value="<?php if(isset($yearOfWork)){echo $yearOfWork;} ?>" required>
				<br>
				<br>
				Picture URL: <input type="url" name="image" placeholder="Image URL" value="<?php if(isset($image)){echo $image;} ?>" >
				<br>
				<br>
				Trailer URL: <input type="url" name="link" placeholder="Trailer URL" value="<?php if(isset($link)){echo $link;} ?>" >
				<br>
				<br>
				<input hidden type="text"  name="movieID" value="<?php if(isset($movieID)){echo $movieID;}?>"> 
				<input type="submit" class="btn btn-primary" 	name="edit" value="Submit"> <a href="/wwwproject/pages/listMovies.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</form>
        </div>
	</div>

	
<?php include '../footer.php' ?>