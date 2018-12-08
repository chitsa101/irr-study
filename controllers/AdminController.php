<?php
/**
 * AdminController.php
 * Контроллер бэкенда сайта
 */

//Подключаем модели
include_once '../models/BusesModel.php';
include_once '../models/TransferModel.php';
include_once '../models/CarsModel.php';


//меняем константы
$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('tepmlateWebPath', TemplateAdminWebPath);

//главная страница админки
function indexAction($smarty){

    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * Страница управления автопарком
 * 
 * @param type $smarty
 */

function busesAction($smarty){

    $rsBuses = getAllBuses();

    //d($rsBuses);
    $smarty->assign('rsBuses', $rsBuses);
    $smarty->assign('pageTitle', 'Управление автопарком');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminBuses');
    loadTemplate($smarty, 'adminFooter');
}
/**
 * Добавление нового автобуса
 */

function addbusAction(){
    $itemName = $_POST['itemName'];
    $itemDesc = $_POST['itemDesc'];
    $itemPrice = $_POST['itemPrice'];

    $res = insertBus($itemName, $itemDesc, $itemPrice); //busesModel

    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены, обновите страницу';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo json_encode($resData);
    return;
}

/**
 * Обновление автобусов
 */
function updatebaseAction(){
    $itemId = $_POST['itemId'];
    //d($itemId);
    $itemName = $_POST['itemName'];
    $itemDesc = $_POST['itemDesc'];
    $itemPrice = $_POST['itemPrice'];
    
    $res = updateBase($itemId, $itemName, $itemDesc, $itemPrice); //busesModel
    //d($res);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo json_encode($resData);  //updateBase
    return;
}
/**
 * загрузка главного изображения
 */
function uploadmainAction(){

    $maxSize = 2 * 1024 * 1024; //максимальный размер
    $itemId = $_POST['itemId'];  //ID элемента
    //d($itemId);

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    
    //создаем имя файла
   // d($ext);
    $newFileName = '1_' .  $itemId . '.' . $ext; //ID + расширение
     //d($newFileName);
    
    if($_FILES['filename']['size'] > $maxSize){
        echo ("Размер файла превышает 2 мегабайта");
        return;
    }
    
    //загружен ли файл методом POST - защита
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){

        //если файл загружен, то перемещаем его в конечную директорию
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/buses/' . $newFileName);
        //d($res);
        if($res){
            $res = updateBusesMainImage($itemId, $newFileName); //busesModel
            if($res){
                echo ("рисунок обновлен, обновите страницу");
                redirect('/admin/buses/');
            }
        }
    } else {
        echo ("Ошибка загрузки");
    }
}

/**
 * загрузка второго изображения
 */
function uploadimageoneAction(){

    $maxSize = 2 * 1024 * 1024; //максимальный размер
    $itemId = $_POST['itemId'];  //ID элемента
    //d($itemId);

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    
    //создаем имя файла
   // d($ext);
    $newFileName1 = '2_' .  $itemId . '.' . $ext; //ID + расширение
     //d($newFileName1);
    
    if($_FILES['filename']['size'] > $maxSize){
        echo ("Размер файла превышает 2 мегабайта");
        return;
    }
    
    //загружен ли файл методом POST - защита
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){

        //если файл загружен, то перемещаем его в конечную директорию
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/buses/' . $newFileName1);
        //d($res);
        if($res){
            $res = updateBusesImageOne($itemId, $newFileName1); //busesModel
            if($res){
                echo ("рисунок обновлен, обновите страницу");
                redirect('/admin/buses/');
            }
        }
    } else {
        echo ("Ошибка загрузки");
    }
}

/**
 * загрузка третьего изображения
 */
function uploadimagetwoAction(){

    $maxSize = 2 * 1024 * 1024; //максимальный размер
    $itemId = $_POST['itemId'];  //ID элемента
    //d($itemId);

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    
    //создаем имя файла
   // d($ext);
    $newFileName2 = '3_' .  $itemId . '.' . $ext; //ID + расширение
     //d($newFileName2);
    
    if($_FILES['filename']['size'] > $maxSize){
        echo ("Размер файла превышает 2 мегабайта");
        return;
    }
    
    //загружен ли файл методом POST - защита
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){

        //если файл загружен, то перемещаем его в конечную директорию
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/buses/' . $newFileName2);
        //d($res);
        if($res){
            $res = updateBusesImageTwo($itemId, $newFileName2); //busesModel
            if($res){
                echo ("рисунок обновлен, обновите страницу");
                redirect('/admin/buses/');
            }
        }
    } else {
        echo ("Ошибка загрузки");
    }
}

/**
 * Удаление автобуса
 */
function deletebusAction(){
    $itemId = $_POST['itemId'];
    //d($itemId);
    
    $res = delBus($itemId); //BusesModel
    //d($res);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены, обновите страницу';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }
    echo json_encode($resData);  //
    return;

}


/**
 * Страница управления трансфером
 * 
 * @param type $smarty
 */

function transferAction($smarty){

    $rsTransfer = getTransfer();//transferModel
    $rsBuses = getAllBuses();
    //d($rsTransfer);
    //d($rsBuses);
    $smarty->assign('rsBuses', $rsBuses);
    $smarty->assign('rsTransfer', $rsTransfer);
    $smarty->assign('pageTitle', 'Управление трансфером');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminTransfer');
    loadTemplate($smarty, 'adminFooter');
}


/**
 * Добавление нового трансфера
 */

function addtransferAction(){
    $itemParId = $_POST['itemParId'];
    $itemRoute = $_POST['itemRoute'];
    $itemPrice = $_POST['itemPrice'];

    $res = insertTransfer($itemParId, $itemRoute, $itemPrice); //transferModel

    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены, обновите страницу';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }
// update_cache():
    echo json_encode($resData);
    return;
}


/**
 * Обновление трансфера
 */
function updatetransferAction(){
    $itemId = $_POST['itemId'];
    //d($itemId);
    $itemParId = $_POST['itemParId'];
    $itemRoute = $_POST['itemRoute'];
    //d($itemRoute);
    $itemPrice = $_POST['itemPrice'];
    
    $res = updateTransfer($itemId, $itemParId, $itemRoute, $itemPrice); //transferModel
    //d($res);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo json_encode($resData);  //updateTransfer
    return;
}


/**
 * Удаление автобуса
 */
function deletetransferAction(){
    $itemId = $_POST['itemId'];
    //d($itemId);
    
    $res = delTransfer($itemId); //transferModel
    //d($res);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены, обновите страницу';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }
    echo json_encode($resData);  //
    return;
}

/**
 * Страница просмотра сообщений
 * 
 * @param type $smarty
 */
function contactsAction($smarty){
    $contacts = fopen("files/contacts.txt", "r"); 
    fclose($contacts);
    $contacts = file("files/contacts.txt");

    $smarty->assign('contacts', $contacts);

    $smarty->assign('pageTitle', 'Сообщения');
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminMessage');
    loadTemplate($smarty, 'adminFooter');
}


/**
 * Страница управления vip
 * 
 * @param type $smarty
 */

function vipAction($smarty){

    $rsCars = getAllCars();

    //d($rsBuses);
    $smarty->assign('rsCars', $rsCars);
    $smarty->assign('pageTitle', 'Управление VIP');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCars');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * Добавление нового авто
 */

function addcarAction(){
    $itemName = $_POST['itemName'];
    $itemDesc = $_POST['itemDesc'];
    $itemPrice = $_POST['itemPrice'];

    $res = insertCar($itemName, $itemDesc, $itemPrice); //carsModel

    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены, обновите страницу';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo json_encode($resData);
    return;
}


/**
 * Обновление авто
 */
function updatecarAction(){
    $itemId = $_POST['itemId'];
    //d($itemId);
    $itemName = $_POST['itemName'];
    $itemDesc = $_POST['itemDesc'];
    $itemPrice = $_POST['itemPrice'];
    
    $res = updateCar($itemId, $itemName, $itemDesc, $itemPrice); //carsModel
    //d($res);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }

    echo json_encode($resData);  //updateCar
    return;
}

/**
 * загрузка главного изображения vip
 */
function uploadcarAction(){

    $maxSize = 2 * 1024 * 1024; //максимальный размер
    $itemId = $_POST['itemId'];  //ID элемента
    //d($itemId);

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    
    //создаем имя файла
   // d($ext);
    $newFileName = '1_' .  $itemId . '.' . $ext; //ID + расширение
     //d($newFileName);
    
    if($_FILES['filename']['size'] > $maxSize){
        echo ("Размер файла превышает 2 мегабайта");
        return;
    }
    
    //загружен ли файл методом POST - защита
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){

        //если файл загружен, то перемещаем его в конечную директорию
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/cars/' . $newFileName);
        //d($res);
        if($res){
            $res = updateCarsMainImage($itemId, $newFileName); //carsModel
            if($res){
                echo ("рисунок обновлен, обновите страницу");
                redirect('/admin/vip/');
            }
        }
    } else {
        echo ("Ошибка загрузки");
    }
}


/**
 * загрузка второго изображения
 */
function uploadcaroneAction(){

    $maxSize = 2 * 1024 * 1024; //максимальный размер
    $itemId = $_POST['itemId'];  //ID элемента
    // d($itemId);

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    
    //создаем имя файла
   // d($ext);
    $newFileName1 = '2_' .  $itemId . '.' . $ext; //ID + расширение
    //  d($newFileName1);
    
    if($_FILES['filename']['size'] > $maxSize){
        echo ("Размер файла превышает 2 мегабайта");
        return;
    }
    
    //загружен ли файл методом POST - защита
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){

        //если файл загружен, то перемещаем его в конечную директорию
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/cars/' . $newFileName1);
        // d($res);
        if($res){
            $res = updateCarsImageOne($itemId, $newFileName1); //busesModel
            if($res){
                echo ("рисунок обновлен, обновите страницу");
                redirect('/admin/vip/');
            }
        }
    } else {
        echo ("Ошибка загрузки");
    }
}

/**
 * загрузка третьего изображения
 */
function uploadcartwoAction(){

    $maxSize = 2 * 1024 * 1024; //максимальный размер
    $itemId = $_POST['itemId'];  //ID элемента
    //d($itemId);

    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    
    //создаем имя файла
   // d($ext);
    $newFileName2 = '3_' .  $itemId . '.' . $ext; //ID + расширение
     //d($newFileName2);
    
    if($_FILES['filename']['size'] > $maxSize){
        echo ("Размер файла превышает 2 мегабайта");
        return;
    }
    
    //загружен ли файл методом POST - защита
    if(is_uploaded_file($_FILES['filename']['tmp_name'])){

        //если файл загружен, то перемещаем его в конечную директорию
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/cars/' . $newFileName2);
        //d($res);
        if($res){
            $res = updateCarsImageTwo($itemId, $newFileName2); //busesModel
            if($res){
                echo ("рисунок обновлен, обновите страницу");
                redirect('/admin/vip/');
            }
        }
    } else {
        echo ("Ошибка загрузки");
    }
}

/**
 * Удаление автобуса
 */
function deletecarAction(){
    $itemId = $_POST['itemId'];
    //d($itemId);
    
    $res = delCar($itemId); //CarsModel
    //d($res);
    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'Изменения успешно внесены, обновите страницу';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изменения данных';
    }
    echo json_encode($resData);  //
    return;
}
