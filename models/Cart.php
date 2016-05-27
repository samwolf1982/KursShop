<?php

// имитация бд
include_once (SITE_ROOT.'/store/Store.php');
/**
* класс модели News
*/
class Cart 
{
   

	function __construct($argument='')
	{
		# code...

	}

	/**
	*    возвращает категорию по ид
	*/
	public static  function add_Product($id)
	{
		# code...
		  // Приводим $id к типу integer
        $id = intval($id);

        // Пустой массив для товаров в корзине
        $productsInCart = array();

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Проверяем есть ли уже такой товар в корзине 
        if (array_key_exists($id, $productsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $productsInCart[$id] ++;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1
            $productsInCart[$id] = 1;
        }

        // Записываем массив с товарами в сессию
        $_SESSION['products'] = $productsInCart;
      // print_r($_SESSION['products']);
        // Возвращаем количество товаров в корзине
       // return self::countItems(); 



	}

     /**
	*    возвращает список  категорий
	*/
		public static  function get_Categort_List()
	{
		# code...
		  $localStore=new Store(); // локальное хранилище

		$arr=array();
            for ($i=0; $i < 10; $i++) { 
            	# code...
               $arr[]= $localStore->get_category_id($i);
              // var_dump($localStore->get_news_id($i));
            }
            return $arr;

	}

	public static function get_count()
	{
		# code...
		if (isset($_SESSION['products'])) {
			# code...
             $total=0;
			foreach ($_SESSION['products'] as $key => $value) {
				# code...

				$total+=count($value);
			}
			return $total;
		}
		else return 0;


	}
}

?>