<?php

/*include_once ( SITE_ROOT.'/models/Category.php');
include_once ( SITE_ROOT.'/models/Product.php');*/
include_once SITE_ROOT . '/components/Db.php';
include_once SITE_ROOT . '/models/User.php';
/**
 *  отображение главной страницы
 */
class UserController
{

    public function __construct($argument = '')
    {
        # code...
    }

    public function actionLogin($value = '')
    {

        $translate = include SITE_ROOT . '/components/language.php';
        $errors = array();
        if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['pass'])) {
            # code...

            $email = $_POST['email'];
            $pass = $_POST['pass'];

            //       проверки
            $u_id = User::checkUserData($email, $pass);

            if ($u_id == false) {$errors[] = $translate['in_present_user'];};
            if (!User::checkEmail($email)) {$errors[] = $translate['incorect_email'];};
            if (!User::checkPassword($pass)) {$errors[] = $translate['incorect_pass'];};
            # code...

//      если нету ошибок то обработка формы дальше
            if ($errors == false) {

                //  echo "OKI";
                User::auth($u_id);

                header('Location: /cab/');

            }

        }

        include_once SITE_ROOT . '/views/user/user_login.php';
        # code...
        /*     $categotyList=array();
        $categotyList=Category::get_Categort_List();
        $producList=array();
        //     количество продуктов
        $producList=Product::get_news_products(9);
        include_once ( SITE_ROOT.'/views/user/page_u_register.php');
         */
        return true;

        # code...
    }

    public function actionEdit($value = '')
    {

        $translate = include SITE_ROOT . '/components/language.php';

        $u_id = User::islogged();
        $user = User::getUser_By_Id();

        $name = $user['name'];
        $pass = $user['pass'];

        $result = false;

        $errors = array();

        if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['pass'])) {
            # code...

            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $errors = false;

            if (!$u_id = User::checkUserData($name)) {$errors[] = $translate['present_user'];};
            if (!User::checkName($name)) {$errors[] = $translate['incorect_name'];};
            if (!User::checkPassword($pass)) {$errors[] = $translate['incorect_pass'];};
            # code...

//      если нету ошибок то обработка формы дальше
            if ($errors == false) {

                //       редактируем даные в бд
                $result = User::edit($u_id, $name, $pass);

                //header('Location: /cab/');
                # code...
                /*if( User::register($name,$email,$pass)){
            $errors[]=$translate['corect_register'];
            }   else{
            $errors[]=$translate['incorect_register'];
            }*/
            }

        }

        include_once SITE_ROOT . '/views/user/cab_edit.php';
        # code...
        /*     $categotyList=array();
        $categotyList=Category::get_Categort_List();
        $producList=array();
        //     количество продуктов
        $producList=Product::get_news_products(9);
        include_once ( SITE_ROOT.'/views/user/page_u_register.php');
         */
        return true;

        # code...
    }

    public function actionLogout($value = '')
    {

        unset($_SESSION['user']);
        header('Location: /');
        die();

        # code...
    }

    //    регистрация нового пользователя
    public function actionRegister($value = '')
    {

        $translate = include SITE_ROOT . '/components/language.php';
        $errors = array();
        if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {
            # code...

            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if (!User::checkName($name)) {$errors[] = $translate['incorect_name'];};
            if (!User::checkEmail($email)) {$errors[] = $translate['incorect_email'];};
            if (!User::checkPassword($pass)) {$errors[] = $translate['incorect_pass'];};
            if (User::checkEmailExists($email)) {$errors[] = $translate['user_present'];}
            # code...

//      если нету ошибок то обработка формы дальше
            if ($errors == false) {
                # code...
                if (User::register($name, $email, $pass)) {
                    $errors[] = $translate['corect_register'];
                } else {
                    $errors[] = $translate['incorect_register'];
                }
            }

        }

        include_once SITE_ROOT . '/views/user/page_u_register.php';
        # code...
        /*     $categotyList=array();
        $categotyList=Category::get_Categort_List();
        $producList=array();
        //     количество продуктов
        $producList=Product::get_news_products(9);
        include_once ( SITE_ROOT.'/views/user/page_u_register.php');
         */
        return true;
    }
}
