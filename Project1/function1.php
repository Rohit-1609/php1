<?php

/*function ShowMessage($name)
{
    echo "Hello $name";
}

ShowMessage('Rohit');
*/

function getMessage($morning)
{
    if($morning)
    {
        return "Good Morning";
    }
    else {
        return "Good Afternoon";
    }
}

$message=getMessage(true);
echo $message;
?>