<?php
//Модель для таблицы vip

/* Получить все авто ! 
* 
* @return array массив 
*/
function getAllCars(){
   global $db;

   $sql = 'SELECT *
           FROM `cars`
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
function  insertCar($itemName, $itemDesc, $itemPrice){
        global $db;
    
        $sql = "INSERT INTO `cars`
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
function updateCar($itemId, $itemName, $itemDesc, $itemPrice, $newFileName = null, $newFileName1 = null, $newFileName2 = null)
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
        $set[] = "`image_1` = '{$newFileName1}'"; //!!!!!
    }
    if($newFileName2){
        $set[] = "`image_2` = '{$newFileName2}'"; //!!!!!
    }

    $setStr = implode($set, ", ");
//     d($setStr);
    
    $sql = "UPDATE `cars`
            SET {$setStr}
            WHERE id = '{$itemId}'";
//     d($sql);
    $rs = mysqli_query($db, $sql);

    return $rs;
}

/**
 * Добавление главной картинки
 */
function updateCarsMainImage($itemId, $newFileName){
        global $db;
        $rs = updateCar($itemId, null, null, null, $newFileName, null, null);
        //d($rs);
        return $rs;
    }


/**
 * Добавление первой картинки
 */
function updateCarsImageOne($itemId, $newFileName1){
        global $db;
        $rs = updateCar($itemId, null, null, null, null, $newFileName1, null);
        // d($rs);
        return $rs;
    }
    
    /**
     * Добавление второй картинки
     */
    function updateCarsImageTwo($itemId, $newFileName2){
        global $db;
        $rs = updateCar($itemId, null, null, null, null, null, $newFileName2);
        //d($rs);
        return $rs;
    }

/**
 * delete bus
 */
function delCar($itemId){
        global $db;
    
        $sql = "DELETE FROM `cars`
            WHERE `id` = '{$itemId}'";
               // d($sql);
        $rs = mysqli_query($db, $sql);
        return $rs;
    }