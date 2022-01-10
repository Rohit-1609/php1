<!DOCTYPE html>
<html>

<head>
    <title>My Blog</title>
    <meta charset="utf-8">
</head>
<body>
    <header>My Blog </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
        <?php if (Auth::isLoggedIn()): ?>
            <li><a href="/admin/">Admin</a></li>
    <li>You are logged in. <a href="/Rohit/Practices/Project2/logout4.php">Log Out</a></li>

<?php else: ?>
    <p>You are not logged in.   <a href="/Rohit/Practices/Project2/login4.php">Login</a></p>
 <?php endif; ?>   
</ul>           

    </nav>
    <main>