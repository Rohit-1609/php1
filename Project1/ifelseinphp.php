<?php
$hour=20;
?>

<!DOCTYPE html>

<head>
    <title>
        Demo1
    </title>
    <meta charset="utf-8">
</head>
<body>

<h1>mixing html and php</h1>
<p>
    <?php if ($hour<12): ?>
    Good Morning
<?php elseif($hour<=18): ?>
    Good Afternoon
<?php elseif($hour<=22): ?>
    Good evening
<?php else: ?>
    Good night
<?php endif ?>
</p>

</body>
</html>