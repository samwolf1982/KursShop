<?php 
include_once ( SITE_ROOT.'/models/Category.php');
include_once ( SITE_ROOT.'/models/Product.php');

include_once ( SITE_ROOT.'/components/Pagination.php');
include_once ( 'AdminBase.php');
 
define('MAX_PRODUCTS', 9);  
 /**
 *  отображение главной страницы
 */
 class AdminController extends AdminBase
 {
 	
 	function __construct($argument='')
 	{
 		# code...
 	}


   //      редактор продуктов
 		public function actionProducts()
	{

	if(self::is_admin()){
   // select * products

		          
		          $v=new Store();
                  $products=$v->get_all_products();
                  include_once ( SITE_ROOT.'/views/admin/edit_products.php');
              
		}
		else{
      header('Location: /');

		}
	              

		return true;


	}


 	//     action index
	public function actionIndex($value='')
	{

		if(self::is_admin()){

                  include_once ( SITE_ROOT.'/views/admin/main_page_admin.php');
              
		}
		else{
      header('Location: /');

		}

		return true;
	}
			//     показать вcе товары из определеной категории




 }


 ?>