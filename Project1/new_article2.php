<?php

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $errors=[];
    $title=$_POST['title'];
    require 'includes/databaseconnection.php';
    echo "</br>";
    if($_POST['title']== '')
    {
        
       $errors[]= "Title is required";
    }
    if($_POST['content']=='')
    {
        
       $errors[]= "Content is required";
    }
    var_dump($errors);
    exit;
    $query1= "Insert into article (title,content,published_at)values (?,?,?)";
       
  //  var_dump($query1);
   // exit;
$stmt= mysqli_query($conn,$query1);

if($stmt===false)
{
    echo mysqli_error($conn);
}
else
{
    mysqli_stmt_bind_param($stmt,"sss",$_POST['title'],$_POST['content'],$POST['published_at']);
    if(mysqli_stmt_execute($stmt))
    {
        $id = mysqli_insert_id($conn);
        echo "Inserted record with id: $id";
    }
    else
    {
        echo mysqli_stmt_error($stmt);
   }
 }
}
?>



<?php require 'includes/htmlheader.php'; ?>

<h2> NEW ARTICLE</h2>
<?php require 'new_article2.php' ?>
<?php require "includes/htmlheader.php";

