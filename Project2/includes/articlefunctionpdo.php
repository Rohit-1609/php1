<?php

function getArticle($conn, $id,$columns='*')
{
    $query2="select $columns
             From article
               where id=:id ";

    $stmt= $conn->prepare($query2);

    
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execte())
        {
          return $stmt->fetch(PDO::FETCH_ASSOC);
            
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