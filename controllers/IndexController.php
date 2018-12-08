<?php
/**
 *  Контроллер главной страницы
 * 
 */
/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 
function indexAction($smarty){

    $smarty->assign('pageTitle', 'Заказ автобусов Иркутск');
    //$smarty->assign('rsCategories', $rsCategories);//index.tpl
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}