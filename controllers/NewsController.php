<?php

include_once ( SITE_ROOT.'/models/News.php');
/**
*      класс контролен для обработки news
*/
class NewsController
{
	
	function __construct($argument='')
	{
		# code...
	}
	//     показать весь список новостей
	public function actionIndex($value='')
	{
		# code...
		 $newsList=array();
		 $newsList=News::getNewsList();
include_once ( SITE_ROOT.'/views/news/index.php');

     // echo "List News ".PHP_EOL;
      //print_r($newsList);
		// var_dump($newsList);
		//echo "List news"; 
		return true;
	}
	// показать одиночную новость
		public function actionView($id)
	{
		# code...
		//echo 'Singel news'.PHP_EOL;
				 $news=News::getNewsItemId($id);
 include_once ( SITE_ROOT.'/views/news/singleNews.php');
//      print_r($news);
		return true;

	}
}
?>