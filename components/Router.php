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
         	                 $segments=explode('/', $value);
         	                 // получаем емя контролера
                           $controler_Name=array_shift($segments).'Controller';
                           $controler_Name=ucfirst($controler_Name);

                           // получаем имя екшына
                        //   $segments=explode('/', $value);
                           $action_Name='action'.ucfirst(array_shift($segments));
                           // у нас найдено имя класса и имя метода который будет обрабатывать запрос 


	    // подключить файл который содержит класс контролеер, 


         $contollerFileName=SITE_ROOT.'/controllers/'.$controler_Name.'.php';
          if(file_exists($contollerFileName)){
                include_once  ($contollerFileName);	
         }
             // после подключения создать объэкт класса контроллера, и вызвать нужный метод

     $controler_Object=new $controler_Name;
     $result=$controler_Object->$action_Name();
     echo $result;
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