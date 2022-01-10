<?php
 require 'includes/header.php'; 
 require 'database2.php';
 require 'includes/articlesfunction.php';
 require 'includes/url.php';
 $conn =getDB();
if(isset($_GET['id']) )
{

      $article=getArticle($conn,$_GET['id'],'id');
      
      if($article)
      {
      $id=$article['id'];
 
      }
      else{
          die("Article not found");
       }
    }
  else
  {
    die("id not supplied ,article not found");
   }

   if($_SERVER['REQUEST_METHOD']=="POST")
   {

   $query1= "DELETE FROM article 
             WHERE id=?";

//var_dump($query1);
$stmt= mysqli_prepare($conn,$query1);

    if($stmt === false)
    {
            echo mysqli_error($conn);
    }
     else
     {
   // var_dump($query1);


        mysqli_stmt_bind_param($stmt,"i", $id);
  
        if(mysqli_stmt_execute($stmt))
        {
            redirect("Rohit/Practices/Project2/formated_list.php");
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

var_dump($article);
?>
<?php require 'includes/header.php'; ?> 

<h2> Delete Article</h2>

<form method="post">
    <p>Are You Sure to delete it?</p>
     <button>Delete</button>
     <a href="article.php?id=<?=$article['id']; ?>">Cancel</a>
</form>

 

<?php require 'includes/footer.php'; ?> 