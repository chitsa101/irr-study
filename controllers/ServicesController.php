<?php
/**
 *  Контроллер услуг
 * 
 */

 //подключаем модели
include_once '../models/BusesModel.php';
include_once '../models/TransferModel.php';
include_once '../models/CarsModel.php';


/**
 * Формирование главной страницы автопарка
 * 
 * @param object $smarty шаблонизатор
 */ 
function carparkAction($smarty){

    $rsBuses = getAllBuses();//набор данных категорий BusesModel
    //d($rsBuses);

    $smarty->assign('pageTitle', 'Автобусы');
    $smarty->assign('rsBuses', $rsBuses);//carpark.tpl
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'carpark');
    loadTemplate($smarty, 'footer');
}

/**
 * Формирование главной страницы трансфера
 * 
 * @param object $smarty шаблонизатор
 */ 
function transferAction($smarty){

    $rsBuses = getAllBuses();//набор данных категорий TransferModel
    $rsTransfer = getTransfer();
    //d($rsTransfer);
    $smarty->assign('pageTitle', 'Трансфер');
    $smarty->assign('rsBuses', $rsBuses);//carpark.tpl
    $smarty->assign('rsTransfer', $rsTransfer);//carpark.tpl
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'transfer');
    loadTemplate($smarty, 'footer');
}

/**
 * Формирование главной страницы автомобилей
 * 
 * @param object $smarty шаблонизатор
 */ 
function vipAction($smarty){

    $rsCars = getAllCars();//набор данных категорий CarsModel
    //d($rsBuses);

    $smarty->assign('pageTitle', 'VIP Автомобили');
    $smarty->assign('rsCars', $rsCars);//vip.tpl
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'vip');
    loadTemplate($smarty, 'footer');
}