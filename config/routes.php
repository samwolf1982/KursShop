<?php
return $arrayName = array(
                           'news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2', // второй уровень использовано регулярное выражение для  определения ид записи
                            'news/([([0-9]+)'=>'news/view/$1/', // 
                              'user/login'=>'user/login/', 
                               'user/logout'=>'user/logout/', 
                                'user/register'=>'user/register/', 
                                 'user/edit'=>'user/edit/', 
                                 'contacts'=>'site/contacts/', 
                                  
                          'cab' => 'cab/index',   // метод аction_index в контролере 
                           'news' => 'news/index',   // метод аction_index в контролере NewsConttroler
                           'products'=>'products/list',
                           'category/([0-9]+)/page-([0-9]+)'=>'catalog/category/$1/$2', 

 'category/([0-9]+)'=>'catalog/category/$1', 
                             //// метод аction_list в контролере ProductConttroler
                             'product/([a-z]+)/([0-9]+)'=>'product/view/$1/$2', 
                             // второй уровень использовано регулярное выражение для  определения ид записи
                            'product/([([0-9]+)'=>'product/view/$1/', // 
                           'about'=>'about/view',// 
                            'catalog'=>'catalog/index',// 
                           ''=>'site/index',  // при пустом запросе контролер SiteControler вызов actionIndex
                       


                           );
?>