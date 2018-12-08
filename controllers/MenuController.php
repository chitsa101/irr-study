<?php
/**
 *  Контроллер страницы о нас
 * 
 */


/**
 * Формирование страницы сайта о нас
 * 
 * @param object $smarty шаблонизатор
 */ 
function aboutusAction($smarty){

    $smarty->assign('pageTitle', 'О нас');
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'aboutus');
    loadTemplate($smarty, 'footer');
}

/**
 * Формирование страницы сайта контакты
 * 
 * @param object $smarty шаблонизатор
 */ 
function contactsAction($smarty){

    $smarty->assign('pageTitle', 'Контакты');
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'contacts');
    loadTemplate($smarty, 'footer');
}

/**
 * Формирование страницы сайта обратной связи
 * 
 * @param object $smarty шаблонизатор
 */ 
function feedbackAction($smarty){

    $smarty->assign('pageTitle', 'Обратная связь');
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'feedback');
    loadTemplate($smarty, 'footer');
}
/**
 * Обратная связь
 * 
 */
function contactformAction(){
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $time = date('Y:m:d:H:i');

    mail("nuta.sav@yandex.ru", "Контактные данные", "$time, $email, $tel, $name, $message");
   //ss echo("Здравствуйте! Мы получили ваши контакты, ждите сообщение от нас на номер: $tel или на ваш адрес: $email ");

    $contacts = fopen("files/contacts.txt", "a");
    fwrite($contacts,  "Время отправки: $time Телефон: $tel  Почта: $email Имя: $name, Сообщение: $message\n");
    fclose($contacts);

    redirect('#');
}


/**
 * Обратная связь трансфер
 * 
 */
function transferformAction(){
    $bus = htmlspecialchars($_POST['bus']);
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $time = date('Y:m:d:H:i');

    mail("nuta.sav@yandex.ru", "Трансфер", "$bus, $time, $email, $tel, $name, $message");
   //ss echo("Здравствуйте! Мы получили ваши контакты, ждите сообщение от нас на номер: $tel или на ваш адрес: $email ");

    $contacts = fopen("files/contacts.txt", "a");
    fwrite($contacts,  "Время отправки: $time Телефон: $tel  Почта: $email Имя: $name, Сообщение: $message\n");
    fclose($contacts);

    redirect('/services/transfer/');
}


/**
 * Обратная связь carpark
 * 
 */
function carparkformAction(){
    $bus = htmlspecialchars($_POST['bus']);
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $time = date('Y:m:d:H:i');

    mail("nuta.sav@yandex.ru", "Заказ автобуса", "$bus, $time, $email, $tel, $name, $message");
   //ss echo("Здравствуйте! Мы получили ваши контакты, ждите сообщение от нас на номер: $tel или на ваш адрес: $email ");

    $contacts = fopen("files/contacts.txt", "a");
    fwrite($contacts,  "Время отправки: $time Телефон: $tel  Почта: $email Имя: $name, Сообщение: $message\n");
    fclose($contacts);

    redirect('/services/carpark/');
}

/**
 * Обратная связь vip
 * 
 */
function vipformAction(){
    $car = htmlspecialchars($_POST['car']);
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $time = date('Y:m:d:H:i');

    mail("nuta.sav@yandex.ru", "Заказ автомобиля", "$car, $time, $email, $tel, $name, $message");
   //ss echo("Здравствуйте! Мы получили ваши контакты, ждите сообщение от нас на номер: $tel или на ваш адрес: $email ");

    $contacts = fopen("files/contacts.txt", "a");
    fwrite($contacts,  "Время отправки: $time Телефон: $tel  Почта: $email Имя: $name, Сообщение: $message\n");
    fclose($contacts);

    redirect('/services/vip/');
}