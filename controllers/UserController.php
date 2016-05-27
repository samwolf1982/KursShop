<?php 
/*include_once ( SITE_ROOT.'/models/Category.php');
include_once ( SITE_ROOT.'/models/Product.php');*/
 include_once ( SITE_ROOT.'/models/User.php');
 /**
 *  отображение главной страницы
 */
 class UserController
 {
 	

 	function __construct($argument='')
 	{
 		# code...
 	}
 	//     показать весь список новостей
	public function actionRegister($value='')
	{

       
 $translate =include (SITE_ROOT.'/components/language.php');
   $errors = array();
		if (isset($_POST['submit']) &&isset($_POST['name']) &&isset($_POST['email']) &&isset($_POST['pass'])) {
			# code...
		
				    $name=$_POST['name'];
					$email=$_POST['email'];
					$pass=$_POST['pass'];	
					 
       
      if(!User::checkName($name))      {  $errors[]=$translate['incorect_name'] ;}   ;
      if(!User::checkEmail($email))   {  $errors[]=$translate['incorect_email'];} ;
      if(!User::checkPassword($pass)){  $errors[]=$translate['incorect_pass'] ;};
    	# code...
    
//      если нету ошибок то обработка формы дальше
        if ($errors==false) {
        	# code...
        	if( User::register($name,$email,$pass)){
        		$errors[]=$translate['corect_register'];
        	}   else{
        		$errors[]=$translate['incorect_register'];
        	}
        }

		}
		


		 include_once ( SITE_ROOT.'/views/user/page_u_register.php');
		# code...
	/*	 $categotyList=array();
		 $categotyList=Category::get_Categort_List();
		 $producList=array();
		                         //     количество продуктов
		 $producList=Product::get_news_products(9);
          include_once ( SITE_ROOT.'/views/user/page_u_register.php');
*/
		return true;
	}
 }


 ?>