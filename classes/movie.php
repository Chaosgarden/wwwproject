<?php
class Movie
{
	public $title;
 	public $image;	
	public $fullDescription;
	public $shortDescription;
	public $category;
	public $yearOfWork;
	public $movieLength;
	public $link;
 
	function __construct( 
		$title, $image, $fullDescription, $shortDescription, $category, $yearOfWork, $movieLength, $link ) 
	{
		$this->image = $image;
		$this->title = $title;
		$this->fullDescription = $fullDescription;
		$this->shortDescription = $shortDescription;
		$this->category = $category;
		$this->yearOfWork = $yearOfWork;
		$this->movieLength = $movieLength;
		$this->link = $link;
	}
}
//$first = new Movie("5", "JonWick", "0","89", "po", "o3", "Yes", "No" );
//echo $first->title;
?>