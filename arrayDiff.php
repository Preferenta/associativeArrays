<?php

function genDiff(array $data1, array $data2)
{
    $keys = array_merge(array_keys($data1), array_keys($data2));
    $result = [];

    foreach ($keys as $key) {
        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        }
        elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        }
        elseif ($data1[$key] !== ($data2[$key])) {
            $result[$key] = 'changed';
        }
        else {
            $result[$key] = 'unchanged';
        }
    }



print_r($result);
}

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);