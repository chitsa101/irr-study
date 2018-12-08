<?php
/**
 * 
 * Файл настроек
 * 
 */

//> Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');
//<

//используемый шаблон 
$template = 'default';
$templateAdmin = 'admin';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве teplateWebPath css js
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
// //<

//> Инициализация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
// //объявляем объект смарти
$smarty = new Smarty();

//инициализируем свойства
$smarty->setTemplateDir(TemplatePrefix); //для админки меняем в контроллере, где брать
$smarty->setCompileDir('../tmp/smarty/templates_c');   //не забыть указать права на чтение и
$smarty->setCacheDir('../tmp/smarty/cache');           //запись при переносе на сервер !!!!
$smarty->setConfigDir('../library/Smarty/configs');

// //$smarty->debugging = true;
 $smarty->assign('tepmlateWebPath', TemplateWebPath); //(имя, значение) для админки меняем в контроллере,
// //<