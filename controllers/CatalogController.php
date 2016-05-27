<?php 
include_once ( SITE_ROOT.'/models/Category.php');
include_once ( SITE_ROOT.'/models/Product.php');
 /**
 *  отображение главной страницы
 */
 class CatalogController
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
		 $producList=Product::get_news_products(20);
          include_once ( SITE_ROOT.'/views/catalog/catalog_page.php');

     // echo "List News ".PHP_EOL;
      //print_r($newsList);
		// var_dump($newsList);
		//echo "List news"; 
		return true;
	}
		//     показать вcе товары из определеной категории
	public function actionCategory($id='')
	{


		//echo "SiteController actionIndex";
		# code...
		 $categotyList=array();
		 $categotyList=Category::get_Categort_List();
		 $producList=array();
		 $categoty_name = 
		                         //    товары только с одной категории !!
		 $producList=Product::get_category_products($id);

		
          include_once ( SITE_ROOT.'/views/catalog/category_page.php');

     // echo "List News ".PHP_EOL;
      //print_r($newsList);
		// var_dump($newsList);
		//echo "List news"; 
		return true;
	}


 }


 ?>