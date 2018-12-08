<?php
/**
 * Основные функции
 */

/**
 * формирование запрашиваемой страницы
 * $controllerName - название контроллера
 * $actionName - название функции обработки страницы
 */

 function loadPage($smarty, $controllerName, $actionName = 'index'){
     include_once PathPrefix . $controllerName . PathPostfix;

     $function = $actionName . 'Action';
     $function($smarty);
}

/**
 * загрузка шаблона
 */

function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

//функция отладки, останавливает работу программы выводя значение переменной
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

//Преобразование результата выборки в ассоциативный массив
//@param - recordset $rs набор строк - результата работы SELECT
//return array
function createSmartyRsArray($rs){
    
    if(!$rs) return false;

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    //d($smartyRs);
    return $smartyRs;
}

/**
 * редирект
 * @param string $url адрес для перенаправления
 */
function redirect($url){
    if(!$url) $url = '/';
    header("Location: {$url}");
    exit;
}