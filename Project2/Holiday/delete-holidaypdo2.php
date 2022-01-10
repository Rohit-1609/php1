<?php
 require 'includes/header.php'; 
 require 'classes/Database.php';
 require 'classes/Holiday.php';
 require 'classes/Url.php';

 $db=new Database();
$conn = $db->getConn();

if(isset($_GET['id']) )
{

      $holiday=Holiday::getById($conn,$_GET['id']);
      
      if(! $holiday)
      {
       die("article not found--");
      }
    
    }
  else
  {
    die("id not supplied ,article not found");
   }

var_dump($holiday);
   
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
         if($holiday->status=0)
         {
        if($holiday->delete($conn))
        {
            Url::redirect("/Rohit/Practices/Project2/Holiday/holiday3.php?id=$holiday->id");
            echo "</br>";
           // exit;
         //  redirect("/article2.php?id=$id");
            echo "</br>";
           echo "record is deleted";
        }
      }
      else {
            if($holiday->deleteOne($conn))
            {
                Url::redirect("/Rohit/Practices/Project2/Holiday/holiday3.php?id=$holiday->id");
                echo "</br>";
               // exit;
             //  redirect("/article2.php?id=$id");
                echo "</br>";
               echo "record has deleted having status 1";
            }
           }
        }
      
    
   

var_dump($holiday);
?>
<?php require 'includes/header.php'; ?> 

<h2> Delete Holiday</h2>

<form method="post">
    <p>Are You Sure to delete it?</p>
     <button class="btn btn-danger">Delete</button>
     <a href="holiday3.php?id=<?=$holiday->id; ?>">Cancel</a>
</form>

 

<?php require 'includes/footer.php'; ?> 