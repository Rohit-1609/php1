<?php 
function getDB()
{
$db_host="localhost";
$db_name="cms2";
//$db_user="rohit";
//$db_pass=")EfxM6xPc[op2UW0";

$db_user="rohit_1609";
$db_pass="a_2VfgwjQprOH9Je";
$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error())
{
 echo mysqli_connect_error();
 exit;
}
echo "connect successfully";
echo "</br>";
return $conn;
}