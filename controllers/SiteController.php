<?php

include_once SITE_ROOT . '/models/Category.php';
include_once SITE_ROOT . '/models/Product.php';
/**
 *  отображение главной страницы
 */
class SiteController
{

    /**
     * екшин для главной страницы
     * @param $value
     */
    public function actionIndex($value = '')
    {
        # code...
        $categotyList = array();
        $categotyList = Category::get_Categort_List();
        $producList = array();
        //     количество продуктов
        $producList = Product::get_news_products(9);
        include_once SITE_ROOT . '/views/site/main_page.php';

        return true;
    }

    /**
     * екшин для формы обратной связи
     * @param $value
     */
    public function actionContacts($value = '')
    {

        //  проверка на нажатие кнопки  если была нажата кнопка то шлем сообщение и возврат назад
        if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['mess'])) {
            # code...

            $email = $_POST['email'];
            $mess = $_POST['mess'];

            $errors = false;
            // Если ошибок нет
            // Отправляем письмо администратору
            $adminEmail = 'biryukwolf@yahoo.com';
            $adminEmail = 'pihoruy@mswork.ru';
            $message = "Текст: {$mess}. От {$email}";
            $subject = 'Тема письма';

            $result = mail($adminEmail, $subject, $message);
            // имитация отправки письма
            $result = true;
/*
$login='ulianabiryuk@mail.ru';
$passwd='dubliany1986';
$to='pihoruy@mswork.ru';
$subj='Subject';
$text=$message;
 */
            //  mail2($login, $passwd, $to, $subj, $text);

        } else { $result = false;}

        include_once SITE_ROOT . '/views/site/contact_form.php';

        return true;
    }

}

/**
 * @param $login
 * @param $passwd
 * @param $to
 * @param $subj
 * @param $text
 */
function mail2($login, $passwd, $to, $subj, $text)
{
    $fp = fsockopen("smtp.mail.ru", 25);
    if ($fp) {
        $post[] = "HELO mail.ru\r\n";
        $post[] = "AUTH LOGIN " . base64_encode($login) . "\r\n";
        $post[] = base64_encode($passwd) . "\r\n";
        $post[] = "MAIL FROM: " . $login . "@mail.ru\r\n";
        $post[] = "RCPT TO: " . $to . "\r\n";
        $post[] = "DATA\r\n";
        $post[] = "From: " . $login . "@mail.ru\r\n";
        $post[] = "Date: " . date('r') . "\r\n";
        $post[] = "To: " . $to . "\r\n";
        $post[] = "Subject: " . $subj . "\r\n";
        $post[] = "MIME-Version: 1.1\r\n";
        $post[] = "Content-type: text; charset=windows-1251\r\n";
        $post[] = "Content-Transfer-Encoding: 8bit\r\n";
        $post[] = "\r\n";
        $post[] = $text . "\r\n.\r\n";
        $post[] = "QUIT\r\n";
        foreach ($post as $k => $v) {
            fwrite($fp, $v);
            if ($k < 7 || $k > 14) {$answ = fgets($fp, 128);}
        }
        fclose($fp);
    }
}
