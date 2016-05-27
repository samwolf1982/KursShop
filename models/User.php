<?php

// имитация бд
include_once (SITE_ROOT.'/store/Store.php');
/**
* класс модели News
*/
class User 
{
   

	function __construct($argument='')
	{
		# code...

	}


public static function is_logged()
{
              session_start();
              if (isset($_SESSION['user'])) {
                     return $_SESSION['user'];
                 
              }else{
                               header('Location: /user/login');
                           }
              
    # code...
}
	/**
	*   регистрация
	*/
	public static  function register($name,$email,$password)
	{
               
                       // todo register user
		# code...
		 //$localStore=new Store(); // локальное хранилище

	
           //return $localStore->get_news_id($id);
        return true;

	}

        /**
     * Проверяет cуществования пользователя
     * @param string $name <p>Имя</p>
     * @return int <p>id поьзователя</p>
     */
    public static function check_User_Data($name)
    {
        return 999;
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }
           /**
     *  аунтефикация пользователя
     * @param string $name <p>Имя</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function auth($id)
    {

        session_start();
        $_SESSION['user']=$id;
               //to do
/*        return false;
        if (strlen($name) >= 2) {
            return true;
        }
        return false;*/

        return true;
    }


	    /**
     * Проверяет имя: не меньше, чем 2 символа
     * @param string $name <p>Имя</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет телефон: не меньше, чем 10 символов
     * @param string $phone <p>Телефон</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email
     * @param string $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет не занят ли email другим пользователем
     * @param type $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmailExists($email)
    {
       /* // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())*/
            return true;
        return false;
    }

 
}

?>