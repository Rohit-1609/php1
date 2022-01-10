<?php

class Database
{
public function getConn()
{

$db_host="localhost";
$db_name="cms1";
$db_user="rohit_www";
$db_pass="QT_djK5lkD).Wv.a";

$dsn='mysql:host=' . $db_host . ';dbname=' .$db_name .';charset=utf8';

return new PDO($dsn,$db_user,$db_pass);
}

}

?>