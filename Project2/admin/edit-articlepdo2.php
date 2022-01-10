<?php

require '../includes/init.php';
Auth::requireLogin();
$conn = require '../includes/db.php';

if(isset($_GET['id']) )
{

      $article=Article2::getById($conn,$_GET['id']);
      
      if(! $article)
      {
       die("article not found--");
      }
    
    }
  else
  {
    die("id not supplied ,article not found");
   }

var_dump($article);


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$article->title = $_POST['title'];
   $article->content = $_POST['content'];
   $article->published_at = $_POST['published_at'];
//   var_dump($_POST);



  if($article->updateById($conn))
  {
   Url::redirect("Rohit/Practices/Project2/article3.php?id={$article->id}");
  echo "</br>";
    echo "record is updated";
    }

   
   echo "</br>";
  die("Form is valid");
}
}

?>

<?php require '../includes/header.php'; ?> 

<h2> Edit Article</h2>

<?php require '../includes/article-form2.php' ?>

<?php require '../includes/footer.php'; ?> 