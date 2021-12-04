<?php
$name = "Hmue Thiha naung"; //string
echo "My name is ".$name;

echo "<br>";

$age = 20;
echo "age - $age"; //integer
echo "<br>";

$weight = 19.5;
echo "weight - $weight"; //float
echo "<br>";

$gf=false;
var_dump ($gf); //boolean
echo "<br>";

$arr = array('x','y','z'); //index array
$arr[3]='j';
print_r($arr[3]);
echo "<br>";

$ass = array(
    "name" => "Hmue",
    "age" => 20,
    "gf" => false,
    "skill" => array('html','css','js') //associated array
);

print_r($ass['skill']);

//object

//Null => no data assigned

//Resource => package

