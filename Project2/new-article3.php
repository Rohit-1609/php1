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
    $data_time=date_create_from_format('d-m-Y H:i:s',$published_at);
    
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
  
              id(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !='off')
              {             
                  $protocol='https';
              }
              else
              {
                  $protocol='http';
              }
             header("Location/Rohit/Practices/Project2/:$protocol://" . $_SERVER['HTTP_HOST'] . "/article1.php?id=$id");
             exit;

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

<?php if(! empty($errors)): ?>
   <ul>
<?php foreach ($errors as $error): ?>
     <li><?= $error  ?> </li>
    <?php endforeach; ?>
  </ul>
<?php endif;  ?>
<form method="post">
<div>
<label for ="title">Title</label>
<input name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($title); ?>">
</div>


<div>
<label for="content">Content</label>
<textarea name="content" rows="10" cols="40" id="content" placeholder="article content"><?= htmlspecialchars($content);?></textarea>
</div>

<div>
<label for="published_at">Publication date and time</label>
<input name="published_at" id="published_at" value="<?= htmlspecialchars($published_at); ?>">
</div>
<button>Send</button>
</form>

<?php require 'includes/footer.php'; ?> 