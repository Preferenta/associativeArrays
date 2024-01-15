<?php
$index = crc32($key) % 1000; // по модулю
print_r($index);

// $checksum = crc32('The quick brown fox jumped over the lazy dog.');

// Для одних и тех же данных хеш всегда одинаковый!
// print_r($checksum); // => 2191738434