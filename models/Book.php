<?php

class Book
{
	private $id;
	private $title;
	private $description;
	private $price;
	private $authors;
	private $genres;


	public function getId()
	{
		return $this->id;
	}


	public function setId($id)
	{
		$this->id = $id;
	}


	public function getTitle()
	{
		return $this->title;
	}


	public function setTitle($title)
	{
		$this->title = $title;
	}


	public function getDescription()
	{
		return $this->description;
	}


	public function setDescription($description)
	{
		$this->description = $description;
	}


	public function getPrice()
	{
		return $this->price;
	}


	public function setPrice($price)
	{
		$this->price = $price;
	}


	public function getAuthors()
	{
		return $this->authors;
	}


	public function setAuthors($authors)
	{
		$this->authors = $authors;
	}


	public function getGenres()
	{
		return $this->genres;
	}


	public function setGenres($genres)
	{
		$this->genres = $genres;
	}



}
