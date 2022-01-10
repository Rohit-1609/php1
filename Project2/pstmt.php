<?php

require 'includes/database.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
//   var_dump($_POST);

 
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
   $IS=mysqli_stmt_bind_param($stmt,"sss",$_POST['title'],$_POST['content'],$_POST['published_at']);
  
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

?>


<?php require 'includes/header.php'; ?> 

<h2> New Article</h2>
<form method="post">
<div>
<label for ="title">Title</label>
<input name="title" id="title" placeholder="Article title">
</div>


<div>
<label for="content">Content</label>
<textarea name="content" rows="10" cols="40" id="content" placeholder="content"></textarea>
</div>

<div>
<label for="published_at">Publication date and time</label>
<input type="datetime-local" name="published_at" id="published_at">
</div>
<button>Send</button>
</form>

<?php require 'includes/footer.php'; ?> 