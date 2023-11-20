<?php
//В рнр ассоциативные массивы такие же как и обычные массивы, поэтому функции такие же
//Если нужно перезаписать значение - через ключ указываю новое
//Если нужно удалить значение unset('ключ')
$user = ['name' => 'Vasya', 'married' => true, 'age' => 25];
$user['married'] = false;
$user['surname'] = 'Petrov';

$newArray = [];
$newArray['name'] = 'PHP';
$newArray['description'] = 'The most popular language';
unset($newArray['description']);
print_r(count($newArray));