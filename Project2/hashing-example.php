<?php

$password1='12345';

$hash1=password_hash($password1,PASSWORD_DEFAULT);
echo $hash1;

//$hash='$2y$10$.YbSp5ZYQTNv3UlbElsaR.fCMZwPEyXGp4109uzVKb2dmyzU8Wr6S';

//var_dump(password_verify($password1,$hash));