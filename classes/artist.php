<?php
class Artist
{
	private $firstName;
 	private $lastName;	
	private $nationality;
	private $yearOfBirth;
	private $yearOfDeath;
	private $biography;
	private $picture;
 
	function __construct( 
		$firstName, $lastName, $nationality, $yearOfBirth, $yearOfDeath, $biography, $picture ) 
	{
		$this->firstName=$firstName;
		$this->lastName=$lastName;
		$this->nationality=$nationality;
		$this->yearOfBirth=$yearOfBirth;
		$this->yearOfDeath=$yearOfDeath;
		$this->biography=$biography;
		$this->picture=$picture;
	}
	function getFirstName()
	{
		return  $this->firstName;
	}
	function getLastName()
	{
		return  $this->lastName;
	}
	function getNationality()
	{
		return  $this->nationality;
	}
	function getYearOfBirth()
	{
		return  $this->yearOfBirth;
	}
	function getYearOfDeath()
	{
		return  $this->yearOfDeath;
	}
	function getBiography()
	{
		return  $this->biography;
	}
	function getPicture()
	{
		return  $this->picture;
	}
}

?>