<?php

// имитация бд
include_once SITE_ROOT . '/store/Store.php';
/**
 * класс модели News
 */
class News
{

    public function __construct($argument = '')
    {
        # code...

    }

    /**
     *    возвращает новость по ид
     */
    public static function getNewsItemId($id)
    {

        # code...
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "SELECT * FROM `blog` as b INNER JOIN user as u WHERE `u_id` =u.id and b.id=$id";
        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результата
        $i = 0;
        $newsList = array();
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['u_id'] = $row['u_id'];
            $newsList[$i]['content'] = $row['content'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['time_create'] = $row['time_create'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['name'] = $row['name'];
            $i++;
        }

        return $newsList;

    }

    /**
     *    возвращает новость список новостей
     */
    public static function getNewsList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "SELECT * FROM `blog`";
        // Используется подготовленный запрос
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $newsList = array();
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['u_id'] = $row['u_id'];
            $newsList[$i]['content'] = $row['content'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['time_create'] = $row['time_create'];
            $newsList[$i]['title'] = $row['title'];
            $i++;
        }
        return $newsList;

    }
}
