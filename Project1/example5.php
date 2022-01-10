<?php

require 'Item2.php';
require 'Book.php';

$my_item1= new Item2();
$my_item1->name="TV";

echo $my_item1->getListingDescription();

echo "<br>";
$book= new Book();
$book->name='Hamlet';
$book->author='Shakespeare';

echo $book->getListingDescription();


?>