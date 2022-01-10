<?php 

require 'Classes/Item.php';

var_dump(Item::$count);
echo "</br>";
//$my_item=new Item();
$my_item=new Item("Mobile","This is mobile device");
echo "</br>";
var_dump(Item::$count);
echo "</br>";
$my_item->name ='Laptop';

var_dump($my_item);
echo "</br>";
var_dump($my_item->name);
echo "</br>";
$my_item->sayHello();
echo "</br>";
echo $my_item->getName();

$item2=new Item("Speaker","This is speaker device");
echo $my_item->getName();



