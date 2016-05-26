<?php 
 /**
 * 
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
		/* $newsList=array();
		 $newsList=News::getNewsList();*/
include_once ( SITE_ROOT.'/views/site/main_page.php');

     // echo "List News ".PHP_EOL;
      //print_r($newsList);
		// var_dump($newsList);
		//echo "List news"; 
		return true;
	}
 }


 ?>