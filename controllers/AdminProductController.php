<?php

include_once SITE_ROOT . '/models/Category.php';
include_once SITE_ROOT . '/models/Product.php';

include_once SITE_ROOT . '/components/Pagination.php';
include_once 'AdminBase.php';

define('MAX_PRODUCTS', 9);
/**
 *  отображение главной страницы
 */
class AdminProductController extends AdminBase
{

    public function __construct($argument = '')
    {
        # code...
    }
    //     показать весь список новостей
    public function actionIndex($value = '')
    {

        if (self::isAdmin()) {
            // Получаем список товаров
            $products = Product::getProductsList();

            // Подключаем вид
            require_once SITE_ROOT . '/views/admin/edit_products.php';
            return true;

        } else {
            header('Location: /');

        }

        # code...
        /*     $categotyList=array();
        $categotyList=Category::get_Categort_List();
        $producList=array();
        //     количество продуктов
        $producList=Product::get_news_products(20);
        include_once ( SITE_ROOT.'/views/catalog/catalog_page.php');*/

        // echo "List News ".PHP_EOL;
        //print_r($newsList);
        // var_dump($newsList);
        //echo "List news";
        return true;
    }
    //     показать вcе товары из определеной категории
    public function actionProducts()
    {

        /*echo "SiteController actionIndex".PHP_EOL;
        echo "cat: ".$id.PHP_EOL;
        echo "page".$page.PHP_EOL;
         */
# /*/*code...
        /* $categotyList=array();
        $categotyList=Category::get_Categort_List();
        $producList=array();
        $categoty_name = Category::get_Category_Id($id)->get_name();
        //    товары только с одной категории !!
        //     ofset реализовать смещениее в бд !!
        $producList=Product::get_category_products($id,$page);

        $totalcount=20;

        $pagination=new Pagination($totalcount,$page,MAX_PRODUCTS,'page-');

        include_once ( SITE_ROOT.'/views/catalog/category_page.php');*/

        // echo "List News ".PHP_EOL;
        //print_r($newsList);
        // var_dump($newsList);
        //echo "List news";
        return true;

    }

}
