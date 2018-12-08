<?php
//Модель для таблицы трансфера
/**
 * Получение трансфера
 */
function getTransfer(){
    global $db;

    $sql = "SELECT *
            FROM `transfer` ORDER BY `parent_id`"  ;
    //d($sql);
    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}

/**
 * ! Админ!!!
 * Добавление трансфера
 */
function insertTransfer($itemParId, $itemRoute, $itemPrice){
    global $db;

    $sql = "INSERT INTO `transfer`
            SET
                `parent_id` = '{$itemParId}',
                `route` = '{$itemRoute}',
                `trans_price` = '{$itemPrice}'";
   // d($sql);
    $rs = mysqli_query($db, $sql);
    return $rs;
}


/**
 * Обновление данных трансфера
 */
function updateTransfer($itemId, $itemParId, $itemRoute, $itemPrice)
{
    global $db;
    $set = array();

    if($itemParId){
        $set[] = "`parent_id` = '{$itemParId}'";
    }
    if($itemRoute){
        $set[] = "`route` = '{$itemRoute}'";
    }
    if($itemPrice){
        $set[] = "`trans_price` = '{$itemPrice}'";
    }
    $setStr = implode($set, ", ");
    //d($setStr);
    
    $sql = "UPDATE `transfer`
            SET {$setStr}
            WHERE id = '{$itemId}'";
   // d($sql);
    $rs = mysqli_query($db, $sql);

    return $rs;
}


/**
 * delete bus
 */
function delTransfer($itemId){
    global $db;

    $sql = "DELETE FROM `transfer`
        WHERE `id` = '{$itemId}'";
           // d($sql);
    $rs = mysqli_query($db, $sql);
    return $rs;
}