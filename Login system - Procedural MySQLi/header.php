<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP ROJECT 01</title>
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <nav>
        <div class="header">
            <a href="index.php"><img src="img/bloglogo.png" height = "50px" alt="Blogs logo"></a>
            <ul>
            <div class="header-right">
                <a class ="active" href="index.php">Home</a>
                <a href="discovery.php">About us</a>
                <a href="blog.php">Find blogs</a>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<a href='profile.php'>Profile Page</a>";
                    echo "<a href='includes/logout.inc.php'>Log Out</a>";
                }
                else{
                   echo " <a href='signup.php'>Signup</a>";
                   echo "<a href='login.php'>Log in</a>" ;
                }

                ?>
            </div>  
            </ul>
        </div>
    </nav>

    <div class="wrapper">