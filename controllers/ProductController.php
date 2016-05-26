<?php
include_once ( SITE_ROOT.'/models/Product.php');
/**
*      класс контролен для обработки news
*/
class ProductController
{
	
	function __construct($argument='')
	{
		# code...
	}
	public function actionList($value='')
	{
		# code...
		return true;
	}
	public function actionView($id)
	{

		# code...
			# code...
				$product=Product::get_product_Item_Id($id);
 include_once ( SITE_ROOT.'/views/product/singleProduct.php');
//      print_r($news);
		return true;
		return true;
	}
}
?>