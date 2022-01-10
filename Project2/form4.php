<?php 

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

</br>
<fieldset >
    <legend>Article</legend>
<div>
   <label for="title"> Title: </label><input id="title" type="text" name="title">
</div>

<div>
    <label for="content">Content:</label><textarea  id="content" me="content" rows="4" cols="40"></textarea>
</div>
</fieldset>

<fieldset>
<legend>Attributes</legend>
<div>
  <label>  <input type ="checkbox" name="visible" value="yes">Visible</label>
</div>
</fieldset>

<fieldset>
    <legend>Attributes</legend>
<div>
    <p> Which Car do you like? </p>

    <input type="radio" name="car" value="bmw">BMW<br>
    <input type="radio" name="car" value="mercedus-benz">Mercedus-Benz<br>
    <input type="radio" name="car" value="tesla">Tesla<br>
    <input type="radio" name="car" value="audi">Audi<br>
    <input type="radio" name="car" value="jaguar">Jaguar<br>

</div>
</fieldset>
<button>Send</button>
</form>
    </main>
  </body>
</html>