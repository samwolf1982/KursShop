<?php
include_once SITE_ROOT . '/store/Store.php';
/**
 * класс модели News
 */
class User
{

    public function __construct($argument = '')
    {
        # code...

    }

    public static function edit($u_id, $name, $pass)
    {
        # code...
        // to db  UPDATE

        return true;
    }

    public static function isGuest()
    {

        if (isset($_SESSION['user'])) {
            return false;

        } else {return true;}

        # code...
    }

    public static function getUserById()
    {

        // to bd
        return array('name' => 'Ivan', 'pass' => '1111');
        # code...
    }

    public static function isLogged()
    {

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];

        } else {
            header('Location: /user/login');
        }

        # code...
    }
    /**
     *   регистрация регистрация пользовтеля
     */
    public static function register($name, $email, $password)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO user (name, email, password) '
            . 'VALUES (:name, :email, :password)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();

    }

    /**
     * Проверяет cуществования пользователя
     * @param string $name <p>Имя</p>
     * @return int <p>id поьзователя</p>
     */
    public static function checkUserData($email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id'];
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

        $_SESSION['user'] = $id;
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
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn() > 0) {

            return true;
        }

        return false;
    }

}
