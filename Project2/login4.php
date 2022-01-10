<?php
require 'includes/init.php';
$_SESSION['is_logged_in'] = true;



if($_SERVER['REQUEST_METHOD']=="POST")
{
    $db=new Database();
    $conn = $db->getConn();
    if(User::authenticate($conn,$_POST['username'],$_POST['password']))
    {
  //    die("Login is Correct");
  session_regenerate_id(true);
     Url::redirect('/Rohit/Practices/Project2/admin/indexintable.php');
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
<label for="username">Username</label>
<input name="username" id="username">
</div>



<div>
<label for="password">Password</label>
<input name="password" id="password" id="password">
</div>
<button>Login</button>

</form>

<?php require 'includes/footer.php';  ?>


