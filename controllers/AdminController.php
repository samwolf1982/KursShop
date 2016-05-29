<?php

include_once SITE_ROOT . '/models/Category.php';
include_once SITE_ROOT . '/models/Product.php';

include_once SITE_ROOT . '/components/Pagination.php';
include_once 'AdminBase.php';

define('MAX_PRODUCTS', 9);
/**
 *  отображение главной страницы
 */
class AdminController extends AdminBase
{

    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex($value = '')
    {

        if (self::isAdmin()) {

            include_once SITE_ROOT . '/views/admin/main_page_admin.php';

        } else {
            header('Location: /');

        }

        return true;
    }
    //     показать вcе товары из определеной категории

}
