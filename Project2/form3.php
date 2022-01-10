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

</br>
<select name="car[]" multiple >
    <option value="bmw">BMW</option>    
    <option value="mercedus-benz">Mercedus-benz</option>
    <option value="tesla" selected>Tesla</option>
    <option value="audi">Audi</option>
<select>
</br>
</br>
</br>
<p>Which color do you like?</p>
<div>
    <input type ="checkbox" name="red"> Red
</div>
<div>
    <input type ="checkbox" name="green"> Green
</div>
<div>
    <input type ="checkbox" name="blue"> Blue
</div>
</br>
</br>
</br>
<div>
    <p> Which Car do you like? </p>

    <input type="radio" name="car" value="bmw">BMW<br>
    <input type="radio" name="car" value="mercedus-benz">Mercedus-Benz<br>
    <input type="radio" name="car" value="tesla">Tesla<br>
    <input type="radio" name="car" value="audi">Audi<br>
    <input type="radio" name="car" value="jaguar">Jaguar<br>

</div>
<button>Send</button>
</form>
    </main>
  </body>
</html>