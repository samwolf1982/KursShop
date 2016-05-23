<?php

// имитация бд
include_once (SITE_ROOT.'/store/Store.php');
/**
* класс модели News
*/
class Product 
{
   

	function __construct($argument='')
	{
		# code...

	}

	/**
	*    возвращает новость по ид
	*/
	public static  function getNewsItemId($id)
	{
		# code...
		 $localStore=new Store(); // локальное хранилище

	
           return $localStore->get_product_id($id);
 

	}

     /**
	*    возвращает новость список новостей
	*/
		public static  function getNewsList()
	{
		# code...
		  $localStore=new Store(); // локальное хранилище

		$arr=array();
            for ($i=0; $i < 10; $i++) { 
            	# code...
               $arr[]= $localStore->get_product_id($i);
              // var_dump($localStore->get_news_id($i));
            }
            return $arr;

	}
}

?>