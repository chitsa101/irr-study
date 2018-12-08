<?php
//Модель для таблицы автобусов

/* Получить все автобусы ! 
* 
* @return array массив 
*/
function getAllBuses(){
   global $db;

   $sql = 'SELECT *
           FROM `buses`
           ORDER BY id ASC'; //сортировка
   //d($sql);
   $rs = mysqli_query($db, $sql);
   //d($rs);
   return createSmartyRsArray($rs);
}


/**
 * ! Админ!!!
 * Добавление продукта
 */
function  insertBus($itemName, $itemDesc, $itemPrice){
    global $db;

    $sql = "INSERT INTO `buses`
            SET
                `name` = '{$itemName}',
                `description` = '{$itemDesc}',
                `price` = '{$itemPrice}'";
    //d($sql);
    $rs = mysqli_query($db, $sql);
    return $rs;
}

/**
 * Обновление данных продукта($itemId, $itemName, $itemMainImage, $itemImage1, $itemImage2, $itemDesc, $itemPrice)
 */
function updateBase($itemId, $itemName, $itemDesc, $itemPrice, $newFileName = null, $newFileName1 = null, $newFileName2 = null)
{
    global $db;
    $set = array();

    if($itemName){
        $set[] = "`name` = '{$itemName}'";
    }
    if($itemDesc){
        $set[] = "`description` = '{$itemDesc}'";
    }
    if($itemPrice){
        $set[] = "`price` = '{$itemPrice}'";
    }
    if($newFileName){
        $set[] = "`main_image` = '{$newFileName}'"; //!!!!!
    }
    if($newFileName1){
        $set[] = "`image1` = '{$newFileName1}'"; //!!!!!
    }
    if($newFileName2){
        $set[] = "`image2` = '{$newFileName2}'"; //!!!!!
    }

    $setStr = implode($set, ", ");
    //d($setStr);
    
    $sql = "UPDATE `buses`
            SET {$setStr}
            WHERE id = '{$itemId}'";
    //d($sql);
    $rs = mysqli_query($db, $sql);

    return $rs;
}

/**
 * Добавление главной картинки
 */
function updateBusesMainImage($itemId, $newFileName){
    global $db;
    $rs = updateBase($itemId, null, null, null, $newFileName, null, null);
    //d($rs);
    return $rs;
}

/**
 * Добавление первой картинки
 */
function updateBusesImageOne($itemId, $newFileName1){
    global $db;
    $rs = updateBase($itemId, null, null, null, null, $newFileName1, null);
    //d($rs);
    return $rs;
}

/**
 * Добавление второй картинки
 */
function updateBusesImageTwo($itemId, $newFileName2){
    global $db;
    $rs = updateBase($itemId, null, null, null, null, null, $newFileName2);
    //d($rs);
    return $rs;
}

/**
 * delete bus
 */
function delBus($itemId){
    global $db;

    $sql = "DELETE FROM `buses`
        WHERE `id` = '{$itemId}'";
           // d($sql);
    $rs = mysqli_query($db, $sql);
    return $rs;
}