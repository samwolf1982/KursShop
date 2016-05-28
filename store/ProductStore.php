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

	private $name;
	private $cat_id;
	private $code;
	private $avalibily;
	private $brand;
	private $is_new;
	private $is_recomendet;
	private $status;
	private $price;
	private $model;
	private $manufactured;

	


	function __construct($id,$title,$date,$short_content,$full_content,$author,$image , $name,$cat_id,$code,$avalibily,$brand,$is_new,$is_recomendet,$status,$price,$model,$manufactured )
	{
		# code...
		$this->id=$id;
		$this->title=$title;
		$this->date=$date;
		$this->short_content=$short_content;
		$this->full_content=$full_content;
		$this->author=$author;
		$this->image=$image;

		$this->name=$name;
		$this->cat_id=$cat_id;
		$this->code=$code;
		$this->avalibily=$avalibily;
		$this->brand=$brand;
		$this->is_new=$is_new;
		$this->is_recomendet=$is_recomendet;
		$this->status=$status;
		$this->price=$price;
			$this->model=$model;
			$this->manufactured=$manufactured;

	}

	   public function get_manufactured()
	{
		# code...
		return $this->manufactured;
	}
	   public function get_model()
	{
		# code...
		return $this->model;
	}
	   public function get_price()
	{
		# code...
		return $this->price;
	}
       public function get_status()
	{
		# code...
		return $this->status;
	}
     public function get_name()
	{
		# code...
		return $this->name;
	}
	public function get_cat_id()
	{
		# code...
		return $this->cat_id;
	}
	public function get_is_new()
	{
		# code...
		return $this->is_new;
	}
	public function get_is_recomendet()
	{
		# code...
		return $this->is_recomendet;
	}
	public function get_brand()
	{
		# code...
		return $this->brand;
	}
	public function get_avalibily()
	{
		# code...
		return $this->avalibily;
	}
	public function get_code()
	{
		# code...
		return $this->code;
	}


//-----------
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
	public function get_quantity()
	{
		# code...
		return 1;
	}
}


?>