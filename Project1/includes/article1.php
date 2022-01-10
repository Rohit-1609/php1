<?php

function getArticle($conn,$id)
{
    $query1="Select *
             from article
             where id=?";

   $stmt=mysqli_prepare($conn,$query1);
   
   if($stmt === false)
   {
       echo mysqli_error($conn);
   }
   else
   {
       mysqli_stmt_bind_param($stmt,"i",$id);
       if(mysqli_stmt_execute($stmt))
       {
           $result =$mysqli_stmt_get_result($stmt);
           return mysqli_fetch_array($result,MYSQLI_ASSOC);
       }
   }
   
}

?>
