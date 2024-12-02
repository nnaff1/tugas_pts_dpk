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
    <div class="atas">
        <div class="samsunggalaxy"><img src="image 10.png" alt=""><p>Samsung Z Fold Special</p></div>
        <div class="teks2"><h4>LAUNCH</h4><p>2024, October 21
            Status	Available. Released 2024, October 24</p></div>
        <div class="teks3"><h4>BODY</h4><p>Unfolded: 157.9 x 142.6 x 4.9 mm
            Folded: 157.9 x 72.8 x 10.6 mm
            Weight:	236 g (8.32 oz)
            Build:	Glass front (Gorilla Glass Victus 2) (folded), plastic front (unfolded), glass back (Gorilla Glass Victus 2), aluminum frame
            SIM:	Nano-SIM, eSIM or Dual eSIM
                 IP48 water resistant (up to 1.5m for 30 min)
            Enhanced armor aluminum frame with tougher drop and scratch resistance (advertised)</p></div>
        <div class="teks4"><H4>DISPLAY</H4><p>Type: Foldable Dynamic LTPO AMOLED 2X, 120Hz, HDR10+, 2600 nits (peak)</p><p>Size :  8.0 inches, 205.3 cm2 (~91.2% screen-to-body ratio)</p><p>Resolution: 1968 x 2184 pixels (~367 ppi density)
            Ultra Flexible Glass (UFG)
       Cover display:
       Dynamic LTPO AMOLED 2X, 120Hz, 2600 nits (peak), Corning Gorilla Glass Victus 2
       6.5 inches, 1080 x 2520 pixels</p></div>
        <div class="teks5"><h4>PLATFORM</h4><p>OS: Android 14, up to 7 major Android upgrades, One UI 6.1.1</p><p>Chipset: Qualcomm SM8650-AC Snapdragon 8 Gen 3 (4 nm)</p><p>CPU: 8-core (1x3.39GHz Cortex-X4 & 3x3.1GHz Cortex-A720 & 2x2.9GHz Cortex-A720 & 2x2.2GHz Cortex-A520)</p><P>GPU: Adreno 750 (1 GHz)</P></div>
        <div class="teks6"><h4>MEMORY</h4><p>Card Slot: No</p><p>Internal: 512GB 16GB RAM UFS 4.0</p></div>
        <div class="teks7"><H4>MAIN CAMERA</H4><p>Triple: 200 MP, f/1.8, (wide), PDAF, OIS
            10 MP, f/2.4, 66mm (telephoto), 1.0µm, PDAF, OIS, 3x optical zoom
            12 MP, f/2.2, 123˚, 12mm (ultrawide), 1.12µm, AF</p><p>Features: LED flash, HDR, panorama</p><p>Video: 8K@30fps, 4K@60fps, 1080p@60/120/240fps (gyro-EIS), 720p@960fps (gyro-EIS), HDR10+</p></div>

            <footer style="background-color: #f8f9fa; padding: 10px 0; text-align: center; font-family: Arial, sans-serif; font-size: 14px;">
    <p>Follow us on Instagram:</p>
    <a href="https://www.instagram.com/phone_insight" target="_blank" style="text-decoration: none; color: #385898;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 24px; height: 24px; vertical-align: middle;"> @phoneinsight
    </a>
</footer>
    </div>
    </body>