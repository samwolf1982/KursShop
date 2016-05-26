<?php

// имитация бд
include_once (SITE_ROOT.'/store/Store.php');
/**
* класс модели News
*/
class Category 
{
   

	function __construct($argument='')
	{
		# code...

	}

	/**
	*    возвращает категорию по ид
	*/
	public static  function get_Category_Id($id)
	{
		# code...
		 $localStore=new Store(); // локальное хранилище

	
           return $localStore->get_category_id($id);
 

	}

     /**
	*    возвращает список  категорий
	*/
		public static  function get_Categort_List()
	{
		# code...
		  $localStore=new Store(); // локальное хранилище

		$arr=array();
            for ($i=0; $i < 10; $i++) { 
            	# code...
               $arr[]= $localStore->get_category_id($i);
              // var_dump($localStore->get_news_id($i));
            }
            return $arr;

	}
}

?>