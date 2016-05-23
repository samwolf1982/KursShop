<?php
/**
*  класс для имитации бд
*/
class ProductStore
{
	private $id;
	private $title;
	private $date;
	private $short_content;
	 private $full_content;
	 private $author;
	 private $image;

	function __construct($id,$title,$date,$short_content,$full_content,$author,$image)
	{
		# code...
		$this->id=$id;
		$this->title=$title;
		$this->date=$date;
		$this->short_content=$short_content;
		$this->full_content=$full_content;
		$this->author=$author;
		$this->image=$image;
	}
	public function get_id()
	{
		# code...
		return $this->id;
	}
     public function get_title()
	{
		# code...
		return $this->title;
	}
	public function get_date()
	{
		# code...
		return $this->date;
	}
	public function get_short_content()
	{
		# code...
		return $this->short_content;
	}
		public function get_full_content()
	{
		# code...
		return $this->full_content;
	}
		public function get_author()
	{
		# code...
		return $this->author;
	}
		public function get_image()
	{
		# code...
		return $this->image;
	}
}


?>