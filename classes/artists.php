<?php
class Artist
{
	private $firstName;
 	private $lastName;	
	private $nationality;
	private $yearOfBirth;
	private $yearofDeath;
	private $biography;
	private $picture;
 
	function __construct( 
		$firstName, $lastName, $nationality, $yearOfBirth, $category, $yearofDeath, $biography, $picture ) 
	{
		$this->firstName=$firstName;
		$this->lastName=$lastName;
		$this->nationality=$nationality;
		$this->yearOfBirth=$yearOfBirth;
		$this->yearofDeath=$yearofDeath;
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
		return  $this->yearofDeath;
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