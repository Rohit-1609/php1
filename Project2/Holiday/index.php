<?php
require 'Classes/Database.php';
require 'Classes/Holiday.php';
require 'Classes/Auth.php';

session_start();

$db=new Database();
$conn = $db->getConn();

$holidays= Holiday::getAll($conn);

?>


 <?php require 'includes/header.php'; ?> 

 <?php var_dump($_SESSION); ?>

 <?php if (Auth::isLoggedIn()): ?>
    <p> You are logged in. <a href="logout2.php">Log Out</a></p>
    <a href="new-holidaypdo2.php">New Holiday</a>
<?php else: ?>
    <p>You are not logged in.   <a href="login3.php">Login</a></p>
 <?php endif; ?>   

 
        <?php if(empty($holidays)):  ?>
            <p> No article found </p>
            <?php else:  ?>
            <ul>
                <?php foreach ($holidays as $holiday): ?>
            <li>
         <article>
         <h2><a href="holiday3.php?id=<?= $holiday['id'];?>">
             <?= $holiday['id']; ?></a></h2>
             <p><?= $holiday['holidayName']; ?></p>
             <p><?= $holiday['holidayDate']; ?></p>
                </article>
                </li>
                <?php endforeach; ?>

           </ul>
           <?php endif; ?>
 <?php require 'includes/footer.php'; ?>   