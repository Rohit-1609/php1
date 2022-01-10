<?php
require 'includes/url.php';

session_start();

session_destroy();
$_SESSION['is_logged_in'] =false;

redirect('/');