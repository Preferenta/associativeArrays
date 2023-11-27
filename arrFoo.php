<?php
// $data = ['first_name' => 'Mark', 'last_name' => 'Smith'];
// $keys = array_keys($data);
// foreach ($keys as $key) {
//     print_r ($data[$key]);
// }

// $arr = ['macbook' => 'Pro', 'Iphon' => 'Pro14Max'];
// $keys = array_keys($arr);
// foreach ($keys as $key) {
//     print_r ($arr[$key]);
// }

// array_values
$data = ['first_name' => 'Oksana', 'last_name' => 'De'];
$values = array_values($data);
foreach ($data as $key => $value) {
    print_r ($value);
}
array_merge()