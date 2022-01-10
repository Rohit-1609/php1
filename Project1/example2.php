<?php

require 'Item1.php';

$my_item1= new Item1();

$my_item1->setName["Example"];
$my_item1->setDescription["The example description"];

echo $my_item1->getName();
echo $my_item1->getDescription();

