<?php 

var_dump($_GET);
echo "</br>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
var_dump($_POST);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Blog</title>
    <meta charset="utf-8">
</head>
<body>
</br>
</br>
    <header>My Blog </header>
    <main>

    <form method="post">
<!--  <input name="search">
        <button>Send</button>
-->

<!--<input name="username">
</br>
<input name="password" type="password">
<button>Send</button>
-->
</br>
<div>
 Text: <input type="text" name="title" >
</div>
<div>
 TextArea: <textarea name="content">Hello</textarea>
</div>


<button>Send</button>
</form>
    </main>
  </body>
</html>