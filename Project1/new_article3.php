<?php

require 'includes/databaseconnection.php';
require 'includes/article.php';
require 'includes/url.php';
require 'includes/auth.php';

session_start();
if(idLoggedIn())
{
    die("Unauthorised");
}

$title='';
$content='';
$published_at='';
if($_SERVER["REQUEST_METHOD"]=="post")
{
    $title=$_POST['title'];
    $content=$_POST['content'];
    $published_at=$_POST['published_at'];

    $errors=validateArticle($title,$content,$published_at);

    if(empty($errors))
    {
        $conn=;
        $sql="Insert into article (title,content,published_at) values(?,?,?)";
        
        $stmt=mysqli_prepare
    }

}