<?php 

require 'Classes/Item2.php';

$my_item=new Item2();

$my_item->setName("Headphone");
$my_item->setDescription("The example Headphone description");


echo $my_item->getName();



