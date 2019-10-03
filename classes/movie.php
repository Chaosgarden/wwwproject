<?php
class Movie
{
	private $title;
 	private $image;	
	private $fullDescription;
	private $shortDescription;
	private $category;
	private $yearOfWork;
	private $movieLength;
	private $links;
 
	function __construct( 
		$title, $image, $fullDescription, $shortDescription, $category, $yearOfWork, $movieLength, $links ) 
	{
		$this->title=$title;
		$this->image=$image;
		$this->fullDescription=$fullDescription;
		$this->shortDescription=$shortDescription;
		$this->category=$category;
		$this->yearOfWork=$yearOfWork;
		$this->movieLength=$movieLength;
		$this->links=$links;
	}
	public function getTitle()
	{
		return  $this->title;
	}
	function getImage()
	{
		return  $this->image;
	}
	function getFullDescript()
	{
		return  $this->fullDescription;
	}
	function getShortDescript()
	{
		return  $this->shortDescription;
	}
	function getCategory()
	{
		return  $this->category;
	}
	function getYearOfWork()
	{
		return  $this->yearOfWork;
	}
	function getMovieLength()
	{
		return  $this->movieLength;
	}
	function getLink()
	{
		return  $this->links;
	}

}
//$first=new Movie("5", "JonWick", "0","89", "po", "o3", "Yes", "No" );
//echo $first->title;
?>