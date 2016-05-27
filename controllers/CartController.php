<?php

include_once ( SITE_ROOT.'/models/Cart.php');
/**
*      класс контролен для личного кабинета
*/
class CartController
{
	
	function __construct($argument='')
	{
		# code...
	}
	//     показать весь список новостей
	public function actionAdd($value='')
	{
	

Cart::add_Product($value);
      
		 $ref=$_SERVER['HTTP_REFERER'];
		 header('Location: '.$ref );
  
		return true;
	}

}
?>