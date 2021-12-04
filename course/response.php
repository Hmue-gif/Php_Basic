<?php

echo "I'm {$_REQUEST['name']} and I'm {$_REQUEST['age']} year old";

echo "<pre>";
echo print_r($_REQUEST);
echo "<br>";

echo print_r($_GET);
echo "<br>";

echo print_r($_POST);
echo "<br>";

echo print_r($_FILES);
