<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    <h2>Ajax Example</h2>

    <dl>
    
    <dt>Name</dt>
    <dd id="name"></dd>

    <dt>Email</dt>
    <dd id="email"></dd>

    <dt>Date of Birth</dt>
    <dd id="dob"></dd>

     </dl>
    <p>The time is:<time id="currentTime"><?=date('g:i:s')?></time></p>
    <button id="btn">Refresh</button>

   <script src= "https://code.jquery.com/jquery-3.6.0.min.js"
                 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                 crossorigin="anonymous">
   </script>
     <script>
         $("#btn").on("click",function()
         {
             $.ajax("getdata.php")
             .done(function(data)
             {
           var json =JSON.parse(data);
              //   $("#currentTime").html(data);
          //alert(data);
          // alert(json.name);
           $("#name").html(json.name);
           $("#email").html(json.email);
           $("#dob").html(json.dob);
             });
         });
     </script>
</body>

</html>