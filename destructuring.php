<?php

$persons = [
    ['first' => 'Rasmus', 'last' => 'Lerdorf'],
    ['first' => 'Fabien', 'last' => 'Potencier'],
    ['first' => 'Taylor', 'last' => 'Otwell']
];

foreach ($person as ['first' => $firstName, 'last' => $lastName]) {
    var_dump($firstName, $lastName);
}

$vars = [
    'color' => 'blue',
    'size'  => 'medium',
    'shape' => 'sphere'
  ];
extract($vars);
var_dump($color, $size, $shape);