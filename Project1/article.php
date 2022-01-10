<?php

require 'includes/databaseconnection.php';
require 'includes/article1.php';


if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    $article= getArticle($conn,$_GET['id']);
}
else{
    $article =null;
}
?>

<?php require 'includes/htmlheader.php';?>

<?php if ($article ===null):?>
    <p>Article Not Found</p>
<?php else: ?>

    <article>

    <h2><?= htmlspecialchars($article['title']); ?></h2>
    <p><?= htmlspecialchars($article['content']); ?></p>

</article>

<?php endif ?>