<?php

function countWords($sentence):array 
{
    if ($sentence === '') {
        return [];
    }

    $result = [];
    $lowerSentence = mb_strtolower($sentence);
    $word = explode(' ', $lowerSentence);

    foreach ($words as $word) {
        $result[$word] = ($result[$word] ?? 0) +1;
    }
    return result;

}