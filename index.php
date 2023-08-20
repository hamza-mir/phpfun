<?php

// single line comment
/*
Multi line commment
This is also a comment
*/
# Single line comment
// echo "<h1>Hello World</h1>";
// echo "My name is Hmaza";
// $age = 29;
// $age += 1;
// echo $age;
// echo "<br/>";

$data = null; // null dtype

$isLoggedIn = true; // bool dtype

$floatNumber = 50.4;
$integerNumber = 5_000;

$name = 'Hamza';
$welcome = "welcome {$name}";
$welcome[0] = 'W';

$arrayExample = ['Salad', 'Burger', 'Pizza'];
$arrayExample[1] = 'Chicken';
$arrayExample[] = 'Soup';

$arrayExample = [
	'john' => ['Salad', 'Spaghetti'],
	'jane' => 'Burger',
	'sam' => 'Pizza'
];
$arrayExample['jane'] = 'Chicken';
$arrayExample['bob'] = 'Soup';


var_dump($arrayExample['john'][0]);