<?php

function showMessage($name="Suresh")
{
    echo "Hello $name!";
}


function getMessage($name="Sachin")
{
    return "Hello $name";
}

function getMessageMorning($morning)
{
 if($morning)
 {
     return "Good Morning";
 }   
 else
 {   
   return "Good Afternoon";  
 }
}
showMessage('Rohit');
echo "</br>";
$value1=getMessage();
echo $value1;
echo "</br>";
$value2=getMessageMorning(true);
echo $value2;




?>