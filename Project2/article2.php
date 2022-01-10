<?php
 require 'includes/header.php'; 
 require 'database2.php';
 require 'includes/articlesfunction.php';

 $conn = getDB();
if(isset($_GET['id']) )
{

      $article=getArticle($conn,$_GET['id']);

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
           <?php endif; ?>
  <?php require 'includes/footer.php'; ?>      