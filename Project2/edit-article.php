<?php
 require 'includes/header.php'; 
 require 'database2.php';
 require 'includes/articlesfunction.php';
 //require 'includes/url.php';
 require 'Classes/Url.php';

 
 $conn =getDB();
if(isset($_GET['id']) )
{

      $article=getArticle($conn,$_GET['id']);
      
      if($article)
      {
      $id=$article['id'];
      $title = $article['title'];
      $content = $article['content'];
      $published_at = $article['published_at'];
      }
      else{
          die("Article not found");
       }
    }
  else
  {
    die("id not supplied ,article not found");
   }

var_dump($article);
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$title = $_POST['title'];
   $content = $_POST['content'];
   $published_at = $_POST['published_at'];
//   var_dump($_POST);

$errors=validateArticle($title,$content,$published_at);

if(empty($errors))
{

$query1= "UPDATE article SET title=?,content=?,published_at=? WHERE id=?";  

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
        mysqli_stmt_bind_param($stmt,"sssi",$title,$content, $published_at,$id);
  
        if(mysqli_stmt_execute($stmt))
        {
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off')
            {
               $protocol='https';
            }          
            else
            {
               $protocol='http';
            }
        // header("Location:$protocol://". $_SERVER['HOST_HOST'] . "/article3.php?id=$id");
        Url::redirect("Rohit/Practices/Project2/article3.php?id={$article->id}");
        echo "</br>";
        // exit;
         //  redirect("/article2.php?id=$id");
            echo "</br>";
           echo "record is updated";
        }
       else
       {
              echo mysqli_stmt_error($stmt);
         }
    }

   }
   echo "</br>";
  die("Form is valid");
}

?>

<?php require 'includes/header.php'; ?> 

<h2> Edit Article</h2>

<?php require 'includes/article-form.php' ?>

<?php require 'includes/footer.php'; ?> 