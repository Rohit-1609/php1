<?php

require 'Item.php';

var_dump(Item::$count);
//$my_item =new Item();
//$my_item->name="Example";
//$my_item->description="The example description";


//echo $my_item->getDescription();
$my_item =new Item("Huge","A big Item");
var_dump(Item::$count);
$my_item =new Item("Small","A Small Item");
Item::showCount();
$my_item->name= "A New Name";
echo $my_item->getName();

//echo "</br>";



//$my_item->description ='A New description about Rohit';
//var_dump($my_item);
//echo "</br>";
//var_dump($my_item->name);
//echo "</br>";
///var_dump($my_item->description);
//echo "</br>";
//$my_item->sayHello();
//echo "</br>";
//$name1=$my_item->getName();
//echo $name1;
//echo "</br>";


?>