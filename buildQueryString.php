<?php

function buildQueryString($array)
{
    ksort($array);
    $result = [];
    foreach ($array as $key => $value) {
        $result[] = "{$key}={$value}";
    }
    return implode("&", $result);
}