<?php

//подключение к бд
$db = connectToDateBase();
function connectToDateBase(){
    $link = mysqli_connect ("localhost", "root", "", "ir-tour");
    if(!$link){
        echo 'Ошибка: Невозможно установить соединение с MySQL.';
        exit();
    }
    //echo "Соединение с MySQL установлено!";
    return $link;
}
