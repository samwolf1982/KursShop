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
   
        //echo $this->get_Url();
         
               
		// проверить наличие запроса в файле роут
	    // если есть совпадение то проверить какой  контролер и екшн будут обрабатываеть запрос
	    // подключить файл который содержыт класс контролеер, создать объэкт класса контроллера, и вызвать нужный метод
	}


}

?>