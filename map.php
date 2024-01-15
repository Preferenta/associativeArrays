<?php
function getIndex($key)
{
    return crc32($key) % 1000;
}

function make()
{
    return [];
}

function hasCollision($map, $key)
{
    $index = getIndex($key);
    [$currentKey] = $map[$index];
    return $currentKey !== $key;
}

function set(&$map, $key, $value)
{
    $index = getIndex($key);
    if (isset($map[$index]) && hasCollision($map, $key)) {
        return false;
    }
    $map[$index] = [$key, $value];
    return true;
}

function get($map, $key, $default = null)
{
    $index = getIndex($key);
    if (!isset($map[$index]) || hasCollision($map, $key)) {
        return $default;
    }
    [, $value] = $map[$index];
    return $value;
}
