<?php if(! empty($holiday->errors)): ?>
   <ul>
<?php foreach ($holiday->errors as $error): ?>
     <li><?= $error  ?> </li>
    <?php endforeach; ?>
  </ul>
<?php endif;  ?>


<form method="post"  >

<div class="form-group">
<label class="control-label col-sm-1" for ="holidayName">Holiday Name :- </label>
<input name="holidayName" id="holidayName" placeholder="Holiday Name" value="<?= htmlspecialchars($holiday->holidayName); ?>">
</div>
</br>

<div class="form-group" >
<label class="control-label col-sm-1" for="holidayDate">Holiday Date :- </label>
<input name="holidayDate" placeholder="Holiday Date"  id="holidayDate" value="<?= htmlspecialchars($holiday->holidayDate); ?>">
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>
