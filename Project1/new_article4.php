<?php

require 'includes/init.php';

Auth::requireLogin();

$article = new Article3();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = require 'includes/db.php';

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    if ($article->create($conn)) {

        Url::redirect("/article3.php?id={$article->id}");

    }
}


?>
<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<?php require 'includes/article-form2.php'; ?>

<?php require 'includes/footer.php'; ?>
?>