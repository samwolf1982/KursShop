<?php

include_once SITE_ROOT . '/models/News.php';
include_once SITE_ROOT . '/components/Db.php';
/**
 *      класс контролен для обработки news
 */
class NewsController
{

    public function __construct($argument = '')
    {
        # code...
    }
    //     показать весь список новостей
    public function actionIndex($value = '')
    {
        # code...
        $newsList = array();
        $newsList = News::getNewsList();
        include_once SITE_ROOT . '/views/news/index.php';

        return true;
    }
    // показать одиночную новость
    public function actionView($id)
    {
        # code...
        $news = News::getNewsItemId($id);
        include_once SITE_ROOT . '/views/news/singleNews.php';
        return true;

    }
}
