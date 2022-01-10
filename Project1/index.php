<?php
$a=3;
$b="Rohit";
$age=25;
echo $a,$b,$age,"</br>";
print $a;
$c=$a;
//echo $c;
$d="HelloWorld!...";
echo gettype($d)."</br>";
//-------------------------------
define("NAME","Rohit Tembhurnikar");
echo NAME ,"</br>";

const Name="ROHIT TEMBHURNIKAR";
echo Name,"</br>";
//--------------------------------------
$e=40;
$f=22;

if($e==$f)
{
    echo "Test1 : a is equal to b</br>";
}
else
{
    echo "Test1 : a is not equal to b</br>";
}
//---------------------------------------
function getData($name,$age)
{
    echo "Name is $name and Age is $age";
}

getData("Rohit",25);

//---------------------------------------------


?>
