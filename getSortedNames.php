<?php

function getSortedNames(array $users) 
{
    $names = [];
    if (empty($users)) {
        return [];
    }
    foreach ($users as ['name' => $name]) {
        $names[] = $name; 
    }
    sort($names);
    return ($names);
}


 
$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];
 
getSortedNames($users);

function getSortedBirthday(array $users)
{
$sortedBirthday = [];
foreach ($users as ['birthday' => $birthday]) {
    $sortedBirthday[] = $birthday;
}
sort($sortedBirthday);
print_r ($sortedBirthday);
}
getSortedBirthday($users);

function getSortedGender(array $users) 
{
    $genders = [];
    foreach ($users as ['gender' => $gender]) {
        $genders[] = $gender;
    }
    sort($genders);
    return $genders;
}
getSortedGender($users);