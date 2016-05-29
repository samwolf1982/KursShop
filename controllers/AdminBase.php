<?php
include_once SITE_ROOT . '/models/User.php';
/**
 *
 */
class AdminBase
{

    public static function isAdmin2()
    {
        # code...
        if (isset($_SESSION['user'])) {
            # code...
            // to db
            return true;
        } else {
            return false;
        }

        //    return false;

    }

    /**
     * Метод, который проверяет пользователя на то, является ли он администратором
     * @return boolean
     */
    public static function isAdmin()
    {
        // Проверяем авторизирован ли пользователь. Если нет, он будет переадресован
        $userId = User::isLogged();

        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        // Если роль текущего пользователя "admin", пускаем его в админпанель
        if ($user['role'] == 'admin') {
            return true;
        }
        return false;
        // Иначе завершаем работу с сообщением об закрытом доступе
        //die('Access denied');
    }
}
