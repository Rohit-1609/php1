<?php
require 'Item1.php';
$my_item = new Item1();
$count=0;

$count++;

define('MAXIMUM', 100);
define('COLOUR','red');

echo MAXIMUM;
echo "</br>";
echo Item1::MAX_LENGTH;