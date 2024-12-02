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
            <li><a class="about" href="about.php">About</a></li>   
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
    <div class="about"><h1>About</h1><p>Kami Adalah siswa-siswi SMK Telkom Purwokerto. Disini kami diperintahkan untuk membuat Website untuk PASG. Kami membuat Website yang bertemakan tentang informasi Handphone seperti spesifikasi handphone dan lain-lain.</p></div>
    <footer style="background-color: #f8f9fa; padding: 90px 0; text-align: center; font-family: Arial, sans-serif; font-size: 14px;">
        <p>Follow us on Instagram:</p>
        <a href="https://www.instagram.com/phone_insight" target="_blank" style="text-decoration: none; color: #385898;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 24px; height: 24px; vertical-align: middle;"> phone_insight
        </a>
    </footer>    
</body>
    