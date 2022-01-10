<?php
require 'Classes/Database.php';
require 'Classes/Article.php';
require 'Classes/Auth.php';



session_start();

$db=new Database();
$conn = $db->getConn();
$articles= Article::getAll($conn);

?>
 <?php require 'includes/header.php'; ?> 

 <?php var_dump($_SESSION); ?>

 <?php if (Auth::isLoggedIn()): ?>
    <p> You are logged in. <a href="logout2.php">Log Out</a></p>
    <a href="new-articlepdo2.php">New Article</a>
<?php else: ?>
    <p>You are not logged in.   <a href="login3.php">Login</a></p>
 <?php endif; ?>   

 
        <?php if(empty($articles)):  ?>
            <p> No article found </p>
            <?php else:  ?>
            <ul>
                <?php foreach ($articles as $article): ?>
            <li>
         <article>
         <h2><a href="article3.php?id=<?= $article['id'];?>">
         <?= $article['title']; ?></a></h2>
             <p><?= $article['content']; ?></p>
                </article>
                </li>
                <?php endforeach; ?>

           </ul>
           <?php endif; ?>
 <?php require 'includes/footer.php'; ?>   