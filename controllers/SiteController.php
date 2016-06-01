<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndexDEL()
    {
        $total=16;
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts($total);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();
     
             // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, 1, Product::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/site/index.php');
        return true;
    }

   /**
     * Action для главной страницы
     */
    public function actionIndex( $page=1)
    {
        $total=count( Product::getProductsList());
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
          
        // Список всех товаров
      //  $latestProducts = Product::getProductsList();
          // Список товаров в категории
        $latestProducts = Product::getProductsListByAll( $page);
      //  print_r($latestProducts);

        //die();
        // Список товаров для слайдера
      //  $sliderProducts = Product::getRecommendedProducts();
     
             // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/site/index.php');
        return true;
    }

    /**
     * Action для страницы "Контакты"
     */
    public function actionContact()
    {

        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору 
                $adminEmail = 'php.start@mail.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для страницы "О магазине"
     */
    public function actionAbout()
    {
        // Подключаем вид
        require_once(PATH_TO_SITE . '/views/site/about.php');
        return true;
    }

}
