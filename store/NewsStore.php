<?php
/**
*  класс для имитации бд
*/
class NewsStore
{
	private $id;
	private $title;
	private $date;
	private $short_content;

	function __construct($id,$title,$date,$short_content)
	{
		# code...
		$this->id=$id;
		$this->title=$title;
		$this->date=$date;
		$this->short_content=$short_content;
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
}


?>