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


if($_SERVER["REQUEST_METHOD"]=="POST")
{

  
$holiday->holidayName = $_POST['holidayName'];
   $holiday->holidayDate = $_POST['holidayDate'];
//   var_dump($_POST);


  if($holiday->update($conn))
  {
   Url::redirect("/Rohit/Practices/Project2/Holiday/holiday3.php?id=$holiday->id");
    echo "</br>";
    echo "record is updated";
    }

    echo "</br>";
    if(empty($errors))
    {
      die("Form is valid");
    }
}

?>

<?php require 'includes/header.php'; ?> 

<h2> Edit Holiday</h2>

<?php require 'includes/holiday-form2.php' ?>

<?php require 'includes/footer.php'; ?> 