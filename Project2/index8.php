<?php
require 'includes/init.php';

$conn = require 'includes/db.php';
$articles= Article2::getAll($conn);

?>
 <?php require 'includes/header.php'; ?> 

 <?php var_dump($_SESSION); ?>

 <?php if (Auth::isLoggedIn()): ?>
    <p> You are logged in. <a href="logout3.php">Log Out</a></p>
    <a href="new-articlepdo2.php">New Article</a>
<?php else: ?>
    <p>You are not logged in.   <a href="login4.php">Login</a></p>
 <?php endif; ?>   

 
        <?php if(empty($articles)):  ?>
            <p> No article found </p>
            <?php else:  ?>
            <ul>
                <?php foreach ($articles as $article): ?>
            <li>
         <article>
         <h2><a href="article4.php?id=<?= $article['id'];?>">
         <?= $article['title']; ?></a></h2>
             <p><?= $article['content']; ?></p>
                </article>
                </li>
                <?php endforeach; ?>

           </ul>
           <?php endif; ?>
 <?php require 'includes/footer.php'; ?>   