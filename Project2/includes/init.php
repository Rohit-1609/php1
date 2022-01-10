<?php
session_start();
spl_autoload_register(function ($class)
{
    require dirname(__DIR__)  . "../Classes/{$class}.php";
})





?>