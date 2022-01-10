<?php

$db_host="localhost";
$db_name="cms1";
$db_user="rohit_www";
$db_pass="QT_djK5lkD).Wv.a";

$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error())
{
 echo mysqli_connect_error();
 exit;
}
echo "connect successfully";

$query1="Select * from article;";

$results= mysqli_query($conn,$query1);

if($results===false)
{
    echo mysqli_error($conn);
}
else
{
    $articles=mysqli_fetch_all($results,MYSQLI_ASSOC);
}
var_dump($articles);

?>