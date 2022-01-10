<?php

$articles=[
    [
        "title"=>"First post",
        "content"=>"First post content"
    ],
    [
        "title"=>"Second post",
        "content"=>"Second post content"
    ],
    [
        "title"=>"Third post",
        "content"=>"Third post content"
    ],
    [
        "title"=>"Four post",
        "content"=>"Four post content"
    ]
];


$db_host="localhost";
$db_name="cms2";
$db_user="rohit";
$db_pass=")EfxM6xPc[op2UW0";

$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error())
{
 echo mysqli_connect_error();
 exit;
}
echo "connect successfully";

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
var_dump($articles);

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Blog</title>
    <meta charset="utf-8">
</head>
<body>
    <header>My Blog </header>
    <main>
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
        </main>
  </body>
</html>