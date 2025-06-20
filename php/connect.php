<?php
require("configSQL.php");

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE, 3306);
if ($mysqli->connect_error) {
    die("Тестим тестим)");
}

/* 
    Заметки: 
    1. Добавить обработки ошибок для БД
    2. Пересмотреть структуру БД
    3. Возможно перейти с PHP с на Go или Node.js
*/


?>