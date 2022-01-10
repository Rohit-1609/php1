<?php

 require 'classes/Database.php';
 require 'classes/Holiday.php';

 
$db=new Database();
$conn = $db->getConn();

if(isset($_GET['id']) )
{

      $holiday = Holiday::getById($conn,$_GET['id']);
}
else
{
    $article=null;
}

var_dump($holiday);
?>




<?php require 'includes/header.php'; ?> 

<?php if($holiday):  ?>
     <article>
     </br>
     
     <p> <label class="control-label col-sm-1" >Id :- </label><?= $holiday->id; ?></p>

     
     <h4 ><label class="control-label col-sm-1" >Holiday Name :-</label><?= $holiday->holidayName; ?></h4>
     
     <p ><label class="control-label col-sm-1" >Holiday Date :-</label><?= $holiday->holidayDate; ?></p>
     
     <p><label class="control-label col-sm-1" >Create Date :-</label><?= $holiday->createDate; ?></p>
     
     <p><label class="control-label col-sm-1">Update date :-</label><?= $holiday->updateDate; ?></p>
    
     <p > <label class="control-label col-sm-1" >Status :-</label><?= $holiday->status; ?></p>

    </article>
    <a class="btn btn-primary"  href="edit-holidaypdo2.php?id=<?=$holiday->id; ?>">Edit</a>
 
 <a class="btn btn-warning" href="delete-holidaypdo2.php?id=<?=$holiday->id; ?>">Delete</a>
           
    <?php else:  ?>
                <p> No article found </p>
 <?php endif; ?>
  <?php require 'includes/footer.php'; ?>      