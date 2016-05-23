<?php

// имитация бд
include_once (SITE_ROOT.'/store/Store.php');
/**
* класс модели News
*/
class About
{
   

	function __construct($argument='')
	{
		# code...

	}

		public static  function about()
	{
		# code...
		  //$localStore=new Store(); // локальное хранилище
		$arr = array (
			'title' => 'Страничка об магазине',
			'text' => '
			
		
			<h2>History of our online shop</h2>
			<p>Nam cursus facilisis nibh nec eleifend. Mauris nulla leo, tempus ac laoreet in, aliquet eu sem. Nullam est est, imperdiet vitae mollis nec, aliquet varius ante. Donec laoreet <a href="#">eleifend velit a tristique</a>. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vehicula elit vel ante venenatis laoreet. Station Shop is free <a rel="nofollow" href="http://www.templatemo.com">website template</a> by templatemo for ecommerce websites or online stores.</p>
			<ul class="templatemo_list">
			<li>Donec aliquam metus a odio molestie eu consequat.</li>
			<li>Sed a rutrum risus, nam sed ligula et nunc fermentum.</li>
			<li>Maecenas sit amet diam quis sem euismod porttitor.</li>
			<li>Aliquam fermentum cursus risus aliquam erat volutpat.</li>
			<li>Sed fermentum tempus enim, eget iaculis purus imperdiet eget.</li>
			</ul>
			'
		);		
            return $arr;

	}
}

?>