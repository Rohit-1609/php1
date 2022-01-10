<?php if(!empty($errors)):  ?>
  <ul>
     <?php foreach ($errors as $error):   ?>
        <li><?= $error ?> </li>
     <?php endforeach ?>
  </ul>
<?php endif ?>
<form method="post">

<div>
<label for = "title" >Title</label>
<input name="title" id="title" placeholder="article title" value= "<?=$title;?>">
</div>
</br>
<div>
   <label for="content">Content</label>
   <textarea name="content" rows="4" cols="40" id="content" placeholder ="Article content value= "<?=$content;?>">
   </textarea>
</div>
</br>
<div>
<label for = "published_at" >Published_at</label>
<input name="published_at" id="published_at" type="datatime-local">
</div>
</br>
<button>Add</button>
</form>