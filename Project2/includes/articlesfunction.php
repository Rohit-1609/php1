<?php

function getArticle($conn, $id,$columns='*')
{
    $query2="select $columns From article where id=?";

    $stmt= mysqli_prepare($conn,$query2);

    if($stmt===false)
    {
        echo mysqli_error($conn);
    }
    else
    {
        mysqli_stmt_bind_param($stmt,"i",$id);
        if(mysqli_stmt_execute($stmt))
        {
            $results= mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($results,MYSQLI_ASSOC);
            
        }
    }
}


function validateArticle($title, $content, $published_at)
{
     $errors=[];

    if($title=='')
{
  $errors[]='Title is required';
}

if($content =='')
{
    $errors[]='Content is required';
}

if($published_at !='')
{
    $data_time=date_create_from_format('Y-m-d H:i:s',$published_at);
    
    if($data_time===false)
    {
        $errors[]='Invalid date and time';
    }
    else
    {
        $date_errors=date_get_last_errors();
      // echo date_format($data_time, 'Y-m-d H:i:s');
     //   exit;
     if($date_errors['warning_count']>0)
     {
         $errors[]='Invalid date and time---';
     }
    }
}
return $errors;
}