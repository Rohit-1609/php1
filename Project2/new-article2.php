<?php

require 'database2.php';

$errors=[];
$title ='';
$content = '';
$published_at ='';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $title = $_POST['title'];
   $content = $_POST['content'];
   $published_at = $_POST['published_at'];
//   var_dump($_POST);

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
     //   echo date_format($data_time, 'd-m-Y H:i:s');
     //   exit;
     if($date_errors['warning_count']>0)
     {
         $errors[]='Invalid date and time---';
     }
    }
}
if(empty($errors))
{

$conn=getDB();
$query1= "INSERT INTO article (title,content,published_at)
           values (?,?,?)";  

//var_dump($query1);
$stmt= mysqli_prepare($conn,$query1);

    if($stmt === false)
    {
            echo mysqli_error($conn);
    }
     else
     {
   // var_dump($query1);

   if($published_at=='')
   {
       $published_at=null;
   }
        $id=mysqli_stmt_bind_param($stmt,"sss",$title,$content, $published_at);
  
        if(mysqli_stmt_execute($stmt))
        {
              $id=mysqli_insert_id($conn);            
         
             echo "Inserted records with ID: $id";
        }
       else{
              echo mysqli_stmt_error($stmt);
         }
    }

   }
}

?>


<?php require 'includes/header.php'; ?> 

<h2> New Article</h2>

<?php require 'includes/article-form.php' ?>

<?php require 'includes/footer.php'; ?> 