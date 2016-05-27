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
	public static  function get_product_Item_Id($id)
	{

		# code...
		 $localStore=new Store(); // локальное хранилище
	
	
           return $localStore->get_product_id($id);
 

	}

     /**
	*    возвращает список новых продуктов для главной странички
	*/
		public static  function get_news_products($count)
	{
		# code...
		  $localStore=new Store(); // локальное хранилище

		$arr=array();
		                  // будет указывться в запросе  
            for ($i=0; $i < $count; $i++) { 
            	# code...
               $arr[]= $localStore->get_product_id($i);
              // var_dump($localStore->get_news_id($i));
            }
            return $arr;

	}

        // возврат списка продуктов одной категории
	public static function get_category_products($id)
	{
		# code...

		# code...
		  $localStore=new Store(); // локальное хранилище

		$arr=array();
		                  // будет указывться в запросе  where
		// cейчас  просто в цикле проверка на принадлежнос к как.
		foreach ($localStore->get_all_products() as $key => $value) {
			# code...
                    if( $value->get_cat_id()==$id){
                    	 $arr[]=$value;
                    }

		}
        
            return $arr;
	}
}

?>