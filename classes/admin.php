<?php
class admin 
{
	public $firstName;
	public $lastName;
	public $email;
	public $credential;	
	
	function __construct(
		$firstName, $lastName, $email, $credential
	)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->credential = $credential;
	}
	
	function editClass(){}
}
//$firstmovie = new Movie("5", "JonWick", "0","89", "po", "o3", "Yes", "No" );
//echo $firstmovie->title;
?>