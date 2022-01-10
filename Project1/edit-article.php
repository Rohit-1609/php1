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