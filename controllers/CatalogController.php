<?php

/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController
{

    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(12);

        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/catalog/index.php');
        return true;
    }

    /**
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId, $page = 1)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список товаров в категории
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/catalog/category.php');
        return true;
    }
      

     /**
     * Action для страницы "Список категорий "
     */
    public function actionOnlycategory()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
         
        $firstImageOnCategory=array();
        
        foreach ($categories as $key => $value) {
            # code...
               //   первое ид товара в категории для картинки категории
              $prod= Product::getProductsListByCategory($value['id']);

              if (count($prod)>0) {
                $firstImageOnCategory[]=$prod[0]['id'];
                  # code...
              }else $firstImageOnCategory[]='no-image';
      
        }
        // двухмерный массив 
/*
        $result[]=$categories;
        $result[]=$firstImageOnCategory;*/
    

        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/catalog/catalogs.php');
        return true;
    }
}
