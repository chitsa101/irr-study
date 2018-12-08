<?php
/*
 *Главная
 */
 include_once '../config/config.php';        // Инициализация настроек
 include_once '../config/db.php';
 include_once '../library/mainFunctions.php'; // Основные функции

//определяем контроллер
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index'; //index по умолчанию

//определяем имя функции
$actionName = isset($_GET['action']) ? ($_GET['action']) : 'index';

// echo (loadfile("index_cached_html"))

loadPage($smarty, $controllerName, $actionName);
// def update_cache(): loadPage ->>> file(index_cached.html)