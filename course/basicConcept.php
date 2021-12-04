<?php
$name="Hmue Thiha Naung"; //string
echo $name;

echo "<br>";

$age=20; // number
echo $age;

echo "<br>";


$arr = ['x','y','z']; //array
print_r($arr);

echo "<br>";


$ass = [
    'name' => 'Hmue',
    'age' => 20, // association array
    'gf' => false
];
print_r($ass);

echo "<br>";

function myName(){
    return 'My name is Hmue'; //function
}

echo myName();

echo "<br>";

$gf=true; //condition

if($gf){
    echo "tchel hsu myat";
}else{
    echo "no gf";
}
echo "<br>";

var_dump($gf); //check datatype
echo "<br>";


for($i=0;$i<10;$i++){
    echo "loop $i <br>"; //loop
}