<?php

include_once SITE_ROOT . '/models/About.php';
/**
 *      класс контролен для обработки news
 */
class AboutController
{

    public function __construct($argument = '')
    {
        # code...
    }

    // показать отображение про магазин
    public function actionView()
    {
        # code...
        //echo 'Singel news'.PHP_EOL;
        $text = About::about();
        include_once SITE_ROOT . '/views/about/about.php';
//      print_r($news);
        return true;

    }
}
