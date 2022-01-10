

<!DOCTYPE html>
<html>
<head>
    <title>
     Form 1
    </title>
    <meta charset="utf-8">
</head>
<body>
    <header>
   <h2>     Form 1 </h2>
    </header>
<form action ="Processform1.php" method ="post">
<fieldset>
<legend> Details</legend>
<div>
    <input name ="username" type="text" placeholder="username" >
</div>
<br>
<div>
    <input name ="password" type="text"  placeholder="password">
</div>
    <button>Send</button>
</fieldset>
<!--<select name="car">
  <option value="mercedes benz">Mercedes Benz</option>
  <option value="bmw">BMW</option>
  <option value="audi">AUDI</option>
  <option value="jaguar">Jaguar</option>
  <option value="tesla">Tesla</option>

</select>
<button>Send</button>-->



<div>
  <input name="colors[]" type="checkbox" value="red" > RED
</div>

<div>
  
  <label ><input name="colors[]" type="checkbox" value="green"> GREEN </label>
</div>

<div>
  <input name="colors[]" type="checkbox" value="blue" > BLUE
</div>
<button>Send</button>

<!--<div>
  <p>Which color do you like?</p>
   <input type="radio" name="color" value="red">RED<br>
   <input type="radio" name="color" value="green">GREEN<br>
   <input type="radio" name="color" value="blue">BLUE<br>
   <input type="radio" name="color" value="voilet">VOILET<br>
</div>
<button>Send</button>-->


</form>
   
</body>
</html>