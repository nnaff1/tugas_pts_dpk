<?php
session_start();
$sudahlogin = isset($_SESSION['user']) && ($_SESSION['user']) === true;
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project pas</title>
    <link rel="stylesheet" href="project2.css">
    <link rel="stylesheet" href="search.js">
</head>
<body>
    <nav>   
        <div class="logo">
            <img src="logo phoneinsight.png" alt="phoneinsight">
        </div>
        <ul id="menu-list" class="hidden">
            <li><a class="home"  href="index.php">Home</a></li> 
            <li><a class="about" href="#about">About</a></li>   
            <?php if(!$sudahlogin):?>
            <li><a class="login" href="login.php">Login</a></li>
            <?php endif;?>
            <?php if($sudahlogin):?>
            <li><a class="logout" href="logout.php">Log Out</a></li>
            <?php endif;?>
        </ul>
    </div>
        </div>
    </nav>
        <div class="background-samsung">
            <img src="image 9.png" alt="">
            <div class="teks-background">
                Samsung Phone
            </div>
            <div class="background-font-samsung">
                <img src="Rectangle 16.png" alt="">
            </div>
        </div>
        <div class="merk-samsung">
            <div class="samsung1">
                <a href="galaxyzfold.php" >
                <img src="image 10.png" alt=""></div>
                <div class="teks-samsung1">Galaxy Z Fold Special</div></a>
                <div class="samsung2">
                    <img src="image 11.png" alt="">
                </div>
                <div class="teks-samsung2">Galaxy A16</div>
                <div class="samsung3">
                    <img src="image 12.png" alt="">
                </div>
                <div class="teks-samsung3">Galaxy A16 5G</div>
                <div class="samsung4">
                    <img src="image 13.png" alt="">
                </div>
                <div class="teks-samsung4">Galaxy S24 FE</div>
                <div class="samsung5">
                    <img src="image 14.png" alt="">
                </div>
                <div class="teks-samsung5">Galaxy Tab S10 Ultra</div>
                <div class="samsung6">
                    <img src="image 15.png" alt="">
                </div>
                <div class="teks-samsung6">Galaxy Tab S10+</div>
        </div>
        <div class="background-putih"></div>
    </body>
    </html>