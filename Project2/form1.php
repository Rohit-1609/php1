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
 Text: <input type="text" name="text" value="text">
</div>
<div>
 Password: <input type="password" name="password">
</div>
<div>
 Telephone : <input type="tel" name="tel">
</div>
<div>
 Postal code : <input type="text" name="postalcode" pattern="(\d{5}([\-]\d{4})?)">
</div>
<div>
 Url : <input type="url" name="url">
</div>
<div>
 Date : <input type="date" name="date">
</div>
<div>
 Time : <input type="time" name="time">
</div>
<div> 
 Week : <input type="week" name="week">
</div>
<div>
 Color : <input type="color" name="color">
</div>
<div>
 Email : <input type="email" name="email" required>
</div>
<div>
 Month : <input type="month" name="month">
</div>
<div>
 Range : <input type="range" name="range">
</div>
<div>
 Hidden : <input type="hidden" name="hidden" value="12345">
</div>
<div>
 Number : <input type="number" name="number">
</div>
<div>
 Search : <input type="search" name="search">
</div>
<div>
 Datetime-local : <input type="datetime-local" name="datatime-local">
</div>
<button>Send</button>
</form>
    </main>
  </body>
</html>