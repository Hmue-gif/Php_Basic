<?php
    $name = "Hmue"; //local variable
    // echo "My name is $name";

    function myName(){
        global $name;
        return "My name is $name";
        // return $GLOBALS['name'];
    }
    echo myName();