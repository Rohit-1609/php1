<?php
 require 'includes/header.php'; 
 require 'Classes/Database.php';
 require 'Classes/Article2.php';

 
$db=new Database();
$conn = $db->getConn();

if(isset($_GET['id']) )
{

      $article=Article2::getById($conn,$_GET['id']);
}
else
{
    $article=null;
}


?>
<?php require 'includes/header.php'; ?> 

<?php if($article):  ?>
     <article>
     <h2><?= $article->title; ?></h2>
     <p><?= $article->content; ?></p>
    </article>
 <a href="edit-articlepdo3.php?id=<?=$article->id; ?>">Edit</a>
 
 <a href="delete-articlepdo2.php?id=<?=$article->id; ?>">Delete</a>
           
    <?php else:  ?>
                <p> No article found </p>
 <?php endif; ?>
  <?php require 'includes/footer.php'; ?>      