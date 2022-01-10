<?php

$article= [ "First Post","Another post","Read Me"];
$article2= [ 1=> "First Post",5=>"Another post",2=>"Read Me"];
$article3= [ "first"=>"First Post","nine"=>"Another post","five"=>"Read Me"];

echo $article[1],"</br>";
var_dump($article);
echo "</br>";
var_dump($article2);
echo "</br>";
var_dump($article3);
echo "</br>";
//----------------------------------------
$people=[
    ["Name"=>"Ankit","Email"=>"ankit123@gmail.com","Height"=>"5'10"],
    ["Name"=>"Hemant","Email"=>"hemant123@gmail.com","Height"=>"5'09"],
    ["Name"=>"Piyush","Email"=>"piyush123@gmail.com","Height"=>"5'08"]
];
var_dump($people);
echo "</br>";
var_dump($people[2]["Email"]);
?>