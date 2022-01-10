<?php

require '../includes/init.php';

Auth::requireLogin();

session_start();



$article= new Article2();


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $db=new Database();
    $conn = $db->getConn();

    
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];
 //   var_dump($_POST);
 
 
   if($article->create($conn))
   {
     //header("Location:$protocol://". $_SERVER['HOST_HOST'] . "/article2.php?id=($article->id)");
    //  Url::redirect(Location:$protocol://". $_SERVER['HOST_HOST'] . "Rohit/Practices/Project2/article2.php?id=($article->id)");
      Url::redirect("Rohit/Practices/Project2/article2.php?id=($article->id)");
      echo "</br>";
     echo "record is created";
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

<?php require 'includes/article-form2.php' ?>

<?php require 'includes/footer.php'; ?> 