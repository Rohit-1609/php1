<?php

require 'Classes/Database.php';
require 'auth.php';

session_start();

$db = new Database();
$conn=$db->getConn();

$query1="Select * from article;";

$results = $conn ->query($query1);

if($results===false)
{
    var_dump($conn->errorInfo());
}
else
{
$articles= $results->fetchall(PDO::FETCH_ASSOC);
}
?>

<?php require 'includes/htmlheader.php'; ?>

<?php if(isLoggedIn()):  ?>

    <p>You are logged in. <a href="logout.php">LogOut</a></p>
    <p><a href="new-articles.php">New article</a></p>

<?php else: ?>
 <p>You are not logged in. <a href="login.php">Log In</a></p>

 <?php endif; ?>

<?php if(empty($articles)): ?>
    <p>No article found</p>
<p>else:</p>
     <ul>
         <?php foreach ($articles as $article ): ?>
           <li>
               <article>
                    <h2><a href ="article.php?id=<?= $article['id']; ?>"> 
                       <?=htmlspecialchars($article['title']); ?></a></h2>
                       <p><?= htmlspecialchars($article['content']); ?></p>
            </article>
           </li>
           <?php endforeach; ?>
       </ul>

     <?php endif; ?>
     <?php require 'includes/htmlfooter.php'; ?>

     