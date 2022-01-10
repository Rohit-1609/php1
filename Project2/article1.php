<?php
 require 'includes/header.php'; 
 require 'database2.php';

 $conn =getDB();
if(isset($_GET['id']) && is_numeric($_GET['id']))
{

    
$query1="Select * from article where id = " . $_GET['id'];

var_dump($query1);
$results= mysqli_query($conn,$query1);

if($results===false)
{
    echo mysqli_error($conn);
}
else
{
    $article=mysqli_fetch_assoc($results);
}
}
else
{
    $article=null;
}

?>
<?php require 'includes/header.php'; ?> 

        <?php if($article===null):  ?>
            <p> No article found </p>
            <?php else:  ?>
           
         <article>
             <h2><?= $article['title']; ?></h2>
             <p><?= $article['content']; ?></p>
                </article>
 <a href="edit-article.php?id=<?=$article['id']; ?>">Edit</a>
 
 <a href="delete-article.php?id=<?=$article['id']; ?>">Delete</a>

 <?php endif; ?>
  <?php require 'includes/footer.php'; ?>      