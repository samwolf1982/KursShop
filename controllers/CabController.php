<?php

include_once ( SITE_ROOT.'/models/News.php');
/**
*      класс контролен для личного кабинета
*/
class CabController
{
	
	function __construct($argument='')
	{
		# code...
	}
	//     показать весь список новостей
	public function actionIndex($value='')
	{
		    echo "CabController actionIndex ".PHP_EOL;
		# code...
		/* $newsList=array();
		 $newsList=News::getNewsList();*/
         include_once ( SITE_ROOT.'/views/user/cab.php');

     // echo "List News ".PHP_EOL;
		return true;
	}

}
?>