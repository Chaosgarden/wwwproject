<?php
class admin 
{
	public $firstName;
	public $lastName;
	public $email;
	public $credential;	
	private $mysqli;
	
	function __construct(
		$firstName, $lastName, $email, $credential
	)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->credential = $credential;
	}
	
	function showAdmins($mysqli)
	{
		$sql = "SELECT id FROM admins WHERE email = '$myEmail' and credential = '$myPassword'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		echo $row;
	}
}
//$firstmovie = new Movie("5", "JonWick", "0","89", "po", "o3", "Yes", "No" );
//echo $firstmovie->title;
?>