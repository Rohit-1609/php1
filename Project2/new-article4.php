<?php

require 'database2.php';
require 'includes/articlesfunction.php';
require 'includes/url.php';
require 'includes/auth.php';

session_start();


if(! isLoggedIn())
{
   die("UnAuthorised");
}

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

$errors=validateArticle($title,$content,$published_at);

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
   echo "</br>";
  if(empty($errors))
  {
    die("Form is valid");
  }
  }

?>


<?php require 'includes/header.php'; ?> 

<h2> New Article</h2>

<?php require 'includes/article-form.php' ?>

<?php require 'includes/footer.php'; ?> 