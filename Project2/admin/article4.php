<?php
require '../includes/init.php';
 
$conn= require '../includes/db.php';

if(isset($_GET['id']) )
{

      $article=Article2::getById($conn,$_GET['id']);
}
else
{
    $article=null;
}


?>
<?php require '../includes/header.php'; ?> 

<?php if($article):  ?>
     <article>
     <h2><?= $article->title; ?></h2>

     <?php if ($article->image_file): ?>
        <img src="/uploads/<?= $article->image_file;  ?>">
    <?php endif;  ?>

     <p><?= $article->content; ?></p>
    </article>
 <a href="edit-article.php?id=<?=$article->id; ?>">Edit</a>
 
 <a href="delete-articlepdo2.php?id=<?=$article->id; ?>">Delete</a> 
 <a href="edit-article-image.php?id=<?=$article->id; ?>">Edit Image</a>
           
    <?php else:  ?>
                <p> No article found </p>
 <?php endif; ?>
  <?php require '../includes/footer.php'; ?>      