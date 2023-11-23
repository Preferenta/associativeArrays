<?php
$data = ['first_name' => 'Mark', 'last_name' => 'Smith'];
$keys = array_keys($data);
foreach ($keys as $key) {
    print_r ($data[$key]);
}

$arr = ['macbook' => 'Pro', 'Iphon' => 'Pro14Max'];
$keys = array_keys($arr);
foreach ($keys as $key) {
    print_r ($arr[$key]);
}