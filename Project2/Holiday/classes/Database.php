<?php

class Database
{
    public function getConn()
    {
         $db_host="localhost";
         $db_name="cms2";

        // $db_user="rohit";
        // $db_pass=")EfxM6xPc[op2UW0";

         $db_user="rohit_1609";
         $db_pass="a_2VfgwjQprOH9Je";

         $dsn= 'mysql:host=' . $db_host .'; dbname=' . $db_name . ';charset=utf8';

         try{
         $conn=new PDO($dsn,$db_user,$db_pass);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $conn;
         }
         catch(PDOException $e)
         {
             echo $e->getMessage();
             exit;
         }
    }
}
