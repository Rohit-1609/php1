<?php
require 'Classes/Url.php';
require 'Classes/User.php';
require 'Classes/Database.php';

session_start();
$_SESSION['is_logged_in'] = true;



if($_SERVER['REQUEST_METHOD']=="POST")
{
    $db=new Database();
    $conn = $db->getConn();
    var_dump($conn);
    
    if(User::authenticate($conn,$_POST['username'],$_POST['password']))
    {
  //    die("Login is Correct");
  session_regenerate_id(true);
     Url::redirect('/Rohit/Practices/Project2/Holiday/index.php');
    }
    else
    {
      $error= "Login is Incorrect";
    }
  
}
?>

<?php require 'includes/header.php'; ?>

<h2>Login</h2>

<?php if(! empty($error)):  ?>
<p><?= $error ?></P>
   <?php endif; ?> 

   
<form method="post">

<div>
<label class="control-label col-sm-1" for="username">Username :-</label>
<input name="username" id="username"  placeholder="username" >
</div>
</br>


<div>
<label class="control-label col-sm-1" for="password">Password :-</label>
<input name="password" id="password" id="password"  placeholder="password" >
</div>
<button class="btn btn-primary">Login</button>

</form>

<?php require 'includes/footer.php';  ?>


