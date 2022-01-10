<?php
require 'includes/database.php';
require 'includes/auth.php';
session_start();
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

 <?php var_dump($_SESSION); ?>

 <?php if (isLoggedIn()): ?>
    <p> You are logged in. <a href="logout.php">Log Out</a></p>
    <a href="new-article4.php">New Article</a>
<?php else: ?>
    <p>You are not logged in.   <a href="login.php">Login</a></p>
 <?php endif; ?>   

 
        <?php if(empty($articles)):  ?>
            <p> No article found </p>
            <?php else:  ?>
            <ul>
                <?php foreach ($articles as $article): ?>
            <li>
         <article>
         <h2><a href="article1.php?id=<?= $article['id'];?>"><?= $article['title']; ?></a></h2>
             <p><?= $article['content']; ?></p>
                </article>
                </li>
                <?php endforeach; ?>

           </ul>
           <?php endif; ?>
 <?php require 'includes/footer.php'; ?>   