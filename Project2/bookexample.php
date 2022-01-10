<?php

require 'Classes/Item2.php';
require 'Classes/Book.php';

$my_item = new Item2();
$my_item->name="TV";

echo $my_item->getListingDescription();

echo "</br>";
$book = new Book();
$book->name="PHP book";
$book->author ="Tembhurnikar";

echo $book->getListingDescription();
