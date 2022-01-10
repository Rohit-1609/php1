<?php

require "includes/databaseconnection.php";

if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    
$query1="Select *
         from article
          where id = " .$_GET['id'];
       

$results= mysqli_query($conn,$query1);

if($results===false)
{
    echo mysqli_error($conn);
}
else
{
    $articles=mysqli_fetch_all($results,MYSQLI_ASSOC);
}
}

else
{
    $article=null;
}

?>

<?php require "includes/htmlheader.php"; ?>
<?php if (empty($articles)): ?>
                  <p>No article found </p>
<?php else: ?>
            <ul> 
              <?php foreach ($articles as $article):  ?>
                <li>
                     <article>
                      <h2><?= $article['title']   ?> </h2>
                      <p> <?= $article['content']    ?></p>
                     </article>
                </li>
               <?php endforeach; ?>
        </ul>
      
<?php endif; ?>

<?php require "includes/htmlfooter.php"; ?>
