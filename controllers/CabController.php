<?php

include_once SITE_ROOT . '/models/User.php';
/**
 *      класс контролен для личного кабинета
 */
class CabController
{

    public function __construct($argument = '')
    {
        # code...
    }
    //     показать весь список новостей
    public function actionIndex($value = '')
    {
        //      если пользователь аут. то берем ид иначе переадресация на user/login
        $user_id = User::islogged();
        echo "CabController actionIndex    $user_id" . PHP_EOL;
        # code...
        /* $newsList=array();
        $newsList=News::getNewsList();*/
        include_once SITE_ROOT . '/views/user/cab.php';

        // echo "List News ".PHP_EOL;
        return true;
    }

}
