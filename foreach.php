<?php

// $course = ['name' => 'JS: React', 'slug' => 'js-react'];

// foreach ($course as $key => $value) {
//     print_r ("{key}: {$value}");
// }

// //можно так:
// foreach ($course as $value) {
//     print_r("{$value}");
// }

function findKeys(array $data, $expectedValue) 
{
    $result = [];
    foreach ($data as $key => $value) {
        if ($value === $expectedValue) {
            $result[] = $key;
        }
    }
    return $result;
}