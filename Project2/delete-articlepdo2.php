<?php
 require 'includes/header.php'; 
 require 'Classes/Database.php';
 require 'Classes/Article2.php';
 //require 'includes/url.php';
  require 'Classes/Url.php';

 $db=new Database();
$conn = $db->getConn();
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


   
   if($_SERVER['REQUEST_METHOD']=="POST")
   {

        if($article->delete($conn))
        {
            Url::redirect("Rohit/Practices/Project2/index4.php");
           // exit;
         //  redirect("/article2.php?id=$id");
            echo "</br>";
           echo "record is deleted";
        }
      
    }
   

var_dump($article);
?>
<?php require 'includes/header.php'; ?> 

<h2> Delete Article</h2>

<form method="post">
    <p>Are You Sure to delete it?</p>
     <button>Delete</button>
     <a href="article3.php?id=<?=$article->id; ?>">Cancel</a>
</form>

 

<?php require 'includes/footer.php'; ?> 