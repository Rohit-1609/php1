<?php

require 'includes/url.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST['username'] == 'rohit_123' && $_POST['password'] =='12345')
{
    session_regenerate_id(true);

    $_SESSION['is_logged_in'] = true;
    redirect('/');
    
}
else
{
    $error="login incorrect";
}
}
?>

<?php require 'includes/htmlheader.php'; ?>

<h2>Login</h2>

<?php if(! empty($error)): ?>
    <p><?= $error ?></p>
    <?php endif; ?>


<form method="post">

<div>
   <label for ="username">Username</label>
   <input name ="username" id="username">
</div>

<div>
    <label for ="password">Password</label>
    <input name ="password" type="password" id="password">
</div>
<button>Log In</button>
</form>
<?php require 'includes/htmlfooter.php';;
