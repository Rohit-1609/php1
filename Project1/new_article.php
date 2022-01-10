<?php

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    require 'includes/databaseconnection.php';
    echo "</br>";
    $query1= "Insert into article(title,content,published_at) values ('" .$_POST['title'] . "',' "
                                                                       .$_POST['content'] . "',' "
                                                                       .$_POST['published_at'] . "')";
       
  //  var_dump($query1);
   // exit;
$results= mysqli_query($conn,$query1);

if($results===false)
{
    echo mysqli_error($conn);
}
else
{
    $id = mysqli_insert_id($conn);
    echo "Inserted record with id: $id";
}
}

?>



<?php require 'includes/htmlheader.php'; ?>

<h2> NEW ARTICLE</h2>

<form method="post">

<div>
<label for = "title" >Title</label>
<input name="title" id="title" placeholder="article title">
</div>
</br>
<div>
   <label for="content">Content</label>
   <textarea name="content" rows="4" cols="40" id="content" placeholder ="Article content">
   </textarea>
</div>
</br>
<div>
<label for = "published_at" >Published_at</label>
<input name="published_at" id="published_at" type="datatime-local">
</div>
</br>
<button>Add</button>
</form>

<?php require "includes/htmlfooter.php"; ?>

