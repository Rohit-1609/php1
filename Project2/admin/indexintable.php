<?php
require '../includes/init.php';

$conn = require '../includes/db.php';
//$articles= Article2::getPage($conn,4,8);

//$paginator = new Paginator(2,4);
//$paginator = new Paginator(isset($_GET['page'])?? $_GET['page'])1,4,Article2::getTotal($conn));
$paginator = new Paginator($_GET['page']?? 1,4,Article2::getTotal($conn));
/*if(isset($_GET['page']))
{
$paginator = new Paginator($_GET['page'],4);
}
else 
{
    $paginator= new Paginator(1,4);
        
    
}
*/
$articles= Article2::getPage($conn,$paginator->limit, $paginator->offset);

?>




 <?php var_dump($_SESSION); ?>

 
 <?php require '../includes/header2.php'; ?> 
 <h2>Admin</h2>

 <p><a href="new-articlepdo2.php"</p>
 <table>
     <thead>
       <th> Title </th>
                <thead>
                <tbody>
                <?php foreach ($articles as $article): ?>
        <tr>
         <article>
             <td>
         <h2>
             <a href="article4.php?id=<?= $article['id'];?>">
         <?= htmlspecialchars($article['title']); ?></a></h2>
        
                </td>
                </article>
                </tr>
            
                <?php endforeach; ?>

           </ul>

           <nav>

           <ul>
                <li>
                 <?php if ($paginator->previous):  ?>
                <a href= "?page=<?=$paginator->previous; ?>">Previous</a>
                <?php else:  ?>
                    Previouss
              <?php endif;   ?>
                </li>

                <li>
                  <?php if ($paginator->next): ?>
                <a href= "?page=<?=$paginator->next; ?>">Next</a>
                <?php else:  ?>
                    Next
                    <?php endif;  ?>
                </li>
           
                </ul>
                </nav>
           
 <?php require '../includes/footer.php'; ?>   