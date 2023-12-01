// index.php

<?php

// Include the functions.php file
require_once 'functions.php';

// Use the functions from functions.php
$name = 'John';
echo greet($name) . PHP_EOL;

$num1 = 5;
$num2 = 10;
$result = add($num1, $num2);

echo "The sum of $num1 and $num2 is: $result" . PHP_EOL;
