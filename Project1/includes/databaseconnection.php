<?php

$db_host="localhost";
$db_name="cms1";
$db_user="rohit_www";
//$db_pass="*2B53163394AE3051FF31C580A28D270DF32FFD4E";
$db_pass="QT_djK5lkD).Wv.a";




$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error())
{
 echo mysqli_connect_error();
 exit;
}
echo "connect successfully";

?>