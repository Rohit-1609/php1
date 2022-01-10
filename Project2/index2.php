<?php

require 'includes/database.php';

$query1="Select * from article;";

$results= mysqli_query($conn,$query1);

if($results===false)
{
    echo mysqli_error($conn);
}
else
{
    $articles=mysqli_fetch_all($results,MYSQLI_ASSOC);
}


?>
 <?php require 'includes/header.php'; ?> 

            <ul>
                <?php foreach ($articles as $article): ?>
            <li>
         <article>
         <h2><?= $article['title']; ?></h2>
             <p><?= $article['content']; ?></p>
                </article>
                </li>
                <?php endforeach; ?>

           </ul>
     <?php require 'includes/footer.php'; ?> 