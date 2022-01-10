<?php

require "Classes/Item2.php";
require "Classes/Book.php";

$my_item = new Item2();

//echo $my_item->code;
echo "</br>";
$book=new Book();

echo $book->getCode();

