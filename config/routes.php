<?php
return $arrayName = array(
                           'news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2', // второй уровень использовано регулярное выражение для  определения ид записи
                            'news/([([0-9]+)'=>'news/view/$1/', // 

                           'news' => 'news/index',   // метод аction_index в контролере NewsConttroler
                           'products'=>'products/list',  //// метод аction_list в контролере ProductConttroler
                             'product/([a-z]+)/([0-9]+)'=>'product/view/$1/$2', // второй уровень использовано регулярное выражение для  определения ид записи
                            'product/([([0-9]+)'=>'product/view/$1/', // 

                           );
?>