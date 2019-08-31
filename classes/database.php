<?php
include_once('../config.php');
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
	
	function showAdmins()
	{
		$sql = "SELECT id FROM admins WHERE email = '$myEmail' and credential = '$myPassword'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		echo $row;
	}
}

?>