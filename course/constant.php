<?php
$name = "hmue thiha naung"; // local variable
// echo $name;

define("NAME","HMUE THIHA NAUNG",false); //global variable ("NAME","name",case-sensitive)

function showMyName(){
    echo NAME;
}

echo showMyName();