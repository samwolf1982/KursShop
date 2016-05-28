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


		//     rout      'cart'=>'cart/index/'
	public function actionIndex($value='')
	{
	

 // todo 
        Cart::get_Products();
	// show
	 include_once ( SITE_ROOT.'/views/cart/main_page_cart.php');	
    /*       Cart::add_Product($value);
      
		 $ref=$_SERVER['HTTP_REFERER'];
		 header('Location: '.$ref );
  */
		return true;
	}

}
?>