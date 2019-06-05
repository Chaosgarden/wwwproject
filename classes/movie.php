<?php
class Movie 
{
 	public $image;
	public $title;
	public $duration;
	public $category;
	public $description;
	public $director;
	public $stars;
	public $trailer;
 
	function __construct( 
		$movieImage, $movieTitle, $movieDuration, $movieCategory, $movieDescription, $movieDirector, $movieStars, $movieTrailer ) 
	{
		$this->image = $movieImage;
		$this->title = $movieTitle;
		$this->duration = $movieDuration;
		$this->category = $movieCategory;
		$this->description = $movieDescription;
		$this->director = $movieDirector;
		$this->stars = $movieStars;
		$this->trailer = $movieTrailer;
	}
}
$firstmovie = new Movie("5", "JonWick", "0","89", "po", "o3", "Yes", "No" );
echo $firstmovie->title;
?>