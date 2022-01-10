<?php

require 'classes/Database.php';
require 'classes/Holiday.php';
require 'classes/Url.php';
require 'classes/Auth.php';


session_start();

if(!Auth::isLoggedIn())
{
   die("UnAuthorised");
}

$holiday= new Holiday();


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $db=new Database();
    $conn = $db->getConn();

    
    $holiday->holidayName = $_POST['holidayName'];
    $holiday->holidayDate = $_POST['holidayDate'];

 //   var_dump($_POST);
 
 
   if($holiday->create($conn))
   {
     //header("Location:$protocol://". $_SERVER['HOST_HOST'] . "/article2.php?id=($article->id)");
      Url::redirect("/Rohit/Practices/Project2/Holiday/holiday3.php?id=$holiday->id");
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

<h2> New Holiday</h2>

<?php require 'includes/holiday-form2.php' ?>

<?php require 'includes/footer.php'; ?> 