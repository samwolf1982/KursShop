<?php
$fp = fsockopen ("www.yandex.ru", 80, $errno, $errstr, 30);
if ($fp === false) {
  print($errno." : ".$errstr);
}
  print($fp);
?>