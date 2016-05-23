<?php
include_once SITE_ROOT.'/store/NewsStore.php';
/**
*  класс для имитации бд
*/
class Store
{
	private $newsContent;

	function __construct()
	{
		# code... // cоздание случайных десять записей
$this->newsContent=array();
		for ($i=0; $i <10 ; $i++) { 
	         		# code...
             $obj= new NewsStore($i,'title'.$i,'2000 05 10','Lorem lorem '.$i);
             
             $this->newsContent[]=$obj;  
		}
		//var_dump($this->newsContent);
	
	}
	public function get_news_id($id)
	{
		# code...

		if(isset($this->newsContent[$id])) return $this->newsContent[$id];
		else return null;
	}

}

?>