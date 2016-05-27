<?php 
include_once ( SITE_ROOT.'/models/Category.php');
include_once ( SITE_ROOT.'/models/Product.php');
 /**
 *  отображение главной страницы
 */
 class SiteController
 {
 	
 	function __construct($argument='')
 	{
 		# code...
 	}
 	//     показать весь список новостей
	public function actionIndex($value='')
	{
		//echo "SiteController actionIndex";
		# code...
		 $categotyList=array();
		 $categotyList=Category::get_Categort_List();
		 $producList=array();
		                         //     количество продуктов
		 $producList=Product::get_news_products(9);
          include_once ( SITE_ROOT.'/views/site/main_page.php');

     // echo "List News ".PHP_EOL;
      //print_r($newsList);
		// var_dump($newsList);
		//echo "List news"; 
		return true;
	}

		public function actionContacts($value='')
	{
		//echo "SiteController actionContacts";
		  include_once ( SITE_ROOT.'/views/site/contact_form.php');
		# code...
/*		 $categotyList=array();
		 $categotyList=Category::get_Categort_List();
		 $producList=array();
		                         //     количество продуктов
		 $producList=Product::get_news_products(9);
          include_once ( SITE_ROOT.'/views/site/main_page.php');*/

     // echo "List News ".PHP_EOL;
      //print_r($newsList);
		// var_dump($newsList);
		//echo "List news"; 
		return true;
	}
 }


 ?>