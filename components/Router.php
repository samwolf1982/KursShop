<?php
/**
*  класс роутер
*/

class Router
{
	/**
	* массив содержащий список всех роутов (слаги)
	*/
	private $routes;
	public function __construct($argument='')
	{
		$this->routes = include (SITE_ROOT.'/config/routes.php');
		# code...

	}
	/**
	* метод возвращает url
	*return string
	*/
	private function get_Url($value='')
	{
		# code...
		  if (!empty($_SERVER ["REQUEST_URI"]) ) {
     	# code...
     	return trim($_SERVER ["REQUEST_URI"],'/');
           }

	}

	public function run($value='')
	{
		# code...
/*		echo "Router run";
		var_dump($this->routes);*/
		// получить строку запроса
		$url=$this->get_Url();
        // проверить наличие запроса в файле роут
	    // если есть совпадение то проверить какой  контролер и екшн будут обрабатываеть запрос
         foreach ($this->routes as $key => $value) {
         	# code...
         	if (preg_match('~'.$key.'~', $url)) {
         		# code...

                   // получаем внутрений путь(маршрут) из внешнего согласно правилу

         		$i_route=preg_replace('~'.$key.'~', $value, $url);

             // echo "$i_route".PHP_EOL ;       // пример внутренего пути
         		// после того как получили внутрений путь можно определить контролер екшын и параметры
         	                 //$segments=explode('/', $value);
         	                  $segments=explode('/', $i_route);
         	                 // получаем емя контролера и сразу удаляем его из массива
                           $controler_Name=array_shift($segments).'Controller';
                           $controler_Name=ucfirst($controler_Name);
                 

                           // получаем имя екшына  и сразу удаляем его из массива
                           $action_Name='action'.ucfirst(array_shift($segments));
                           // у нас найдено имя класса и имя метода который будет обрабатывать запрос  + параметры
                                     // после всех удалений остались только параметры
                           $parametrs=$segments;
                             // print_r($parametrs);



	    // подключить файл который содержит класс контролеер, 


         $contollerFileName=SITE_ROOT.'/controllers/'.$controler_Name.'.php';
          if(file_exists($contollerFileName)){
                include_once  ($contollerFileName);	
         }
             // после подключения создать объэкт класса контроллера, и вызвать нужный метод
                  
     $controler_Object=new $controler_Name;
        //$result=$controler_Object->$action_Name();    // ниже замена для красивого вызова в екшене  nm2-15-00
 $result=call_user_func_array(array($controler_Object,$action_Name), $parametrs);
  
   //  echo $result;
     // если есть результат обрыв цикла
          if ($result!=null) {
          	# code...
          	break;
          }
              // конец регулярного выражения
         	 }
             
         //  конец цикла
         }
               
	
	}


}

?>