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
    <div class="background-awalan">
    <img src="image (1).png" alt="">
</div>
<div class="background-awalan1">
    <img src="Group 17.png" alt="">
</div>
    <script src="/project.js"></script>
    <div class="kotak">
    <div class="kotak-atas">
        <li>PHONE FINDER</li>

    </div>
    <div class="kotak-bawah">
        <div class="bawah1">
            <div><a href="samsung.php">SAMSUNG</a></div>
            <div><a href="apple.html">APPLE</a></div>
            <div><a href="huawei.html">HUAWEI</a></div>
            <div><a href="nokia.html">NOKIA</a></div>
            <div><a href="sony.html">SONY</a></div>
            <div><a href="lg.html">LG</a></div>
            <div><a href="xiaomi.html">XIAOMI</a></div>
            <div><a href="motorola.html">MOTOROLA</a></div>
            <div><a href="lenovo.html">LENOVO</a></div>
        </div>
        <div class="border-bawah2">

        </div>
        <div class="bawah2">
            <h6>HTC</h6>
            <H6>GOOGLE</H6>
            <H6>HONOR</H6>
            <H6>OPPO</H6>
            <H6>REALME</H6>
            <H6>ONEPLUS</H6>
            <H6>NOTHING</H6>
            <H6>VIVO</H6>
            <H6>MEIZU</H6>
        </div>
        <div class="bawah3"></div>
        <div class="border-bawah3">
            
        </div>
    </div>
</div>
<div class="kotak-bawah-tengah">
    <div class="gambar-tengah" > <img src="Group 7.png">
    </div>
    <div class="gambar-kiri">
    <img src="Group 8.png" alt=""></div>
    <div class="kotak-kiri">
    </div>
    <div class="gambar-kiri2">
        <img src="Group 9.png" alt="">
    </div>
    <div class="gambar-kanan">
        <img src="image 3.png" alt="">
    </div>
    <div class="Teks-merk">
    Top 10 By Dialy Interest
    </div>
    <div class="device-handphone">
                Device
        <div class="merk1">
            1. Xiaomi 15 Pro
        </div>
        <div class="merk2">
            2. OnePlus 13
        </div>
        <div class="merk3">
           3. Honor Magic 7 Pro
        </div>
        <div class="merk4">
           4. Xiaomi 15
        </div>
        <div class="merk5">
           5. Samsung Galaxy A55
        </div>
        <div class="merk6">
           6. Samsung Galaxy S24 Ultra
        </div>
        <div class="merk7">
           7. Apple Iphone 13
        </div>
        <div class="merk8">
           8. Apple Iphone 11
        </div>
        <div class="merk9">
           9. Xaiomi Redmi Note 13 Pro
        </div>
        <div class="merk10">
            10. Apple Iphone 15 Pro Max
        </div>
        <div class="merk11"></div>
    </div>
    <div class="merk-kiri">
    <div class="merk-kiri1">
        <img src="Group 14.png" alt="">
        </div>
        <div class="merk-kiri2">
            <img src="image 5.png" alt="">
        </div>
        <div class="merk-kiri3">
            <img src="image 6.png" alt="">
    </div>
</div>
<div class="fitur-teratas">
    <div class="teks-fitur">
        <h5>Top Feature</h5>
    </div>
    <div class="semua-fitur">
    <div class="kotak-fitur1">
        <img src="huawei-mate-70 1.png" alt="">
        <div class="kotak-depan">
            <img src="Rectangle 21.png" alt=""></div>
        <div class="teks-kotak-depan"><h1>Huawei Mate 70</h1><p>The Huawei Mate 70 marks Huawei's strong comeback in the premium smartphone market. This flagship device runs on HarmonyOS Next, offering up to 40% performance improvements compared to its predecessor.</p></div>
                <div class="kotak-harga">
            <img src="Rectangle 22.png" alt="">
            </div>
            <div class="teks-kotak-harga1">Rp15,400,000</div>
        <div class="kotak-fitur2">
            <img src="iphone 16 pro.png" alt="">
        </div>
        <div class="kotak-depan2">
            <img src="Rectangle 21.png" alt="">
        </div>
        <div class="kotak-harga2"><img src="Rectangle 22.png" alt=""></div>
        </div>
        <div class="teks-kotak-depan2"><h1>Iphone 16 Pro Max</h1><p>The iPhone 16 Pro Max is Apple's latest flagship smartphone, introduced in September 2024. It features a 6.9-inch Super Retina XDR OLED display, offering vibrant colors and sharp details. Powered by the A18 Pro chip, it ensures smooth performance and efficient multitasking</p></div>
        <div class="teks-kotak-harga2">Rp17,000,000</div>
        <div class="kotak-fitur3"><img src="samsung.png" alt=""></div>
        <div class="kotak-depan3"><img src="Rectangle 21.png" alt=""></div>
        <div class="teks-kotak-depan3"><h1>Samsung S24 Ultra</h1><p>The Samsung Galaxy S24 Ultra is Samsung's latest flagship smartphone, released in January 2024. It features a sleek titanium exterior and a 6.8-inch flat display, offering a premium look and feel.</p></div> 
        <div class="kotak-harga3"><img src="Rectangle 22.png" alt=""></div>
        <div class="teks-kotak-harga3">Rp20,000,000</div>
        <div class="kotak-fitur4"><img src="iphone 13.png" alt=""></div>
        <div class="kotak-depan4"><img src="Rectangle 21.png" alt=""></div>
        <div class="teks-kotak-depan4"><h1>Iphone 13</h1><p>The iPhone 13 was released by Apple in September 2021. It brings improvements in performance, camera capabilities, and battery life compared to previous models.</p></div>
        <div class="kotak-harga4"><img src="Rectangle 22.png" alt=""></div>
        <div class="teks-kotak-harga4">Rp12,000,000</div>
    </div>
    </div>
</div>
</div>
<div class="background-bawah"></div>
<footer style="background-color: #f8f9fa; padding: 10px 0; text-align: center; font-family: Arial, sans-serif; font-size: 14px;">
    <p>Follow us on Instagram:</p>
    <a href="https://www.instagram.com/phone_insight" target="_blank" style="text-decoration: none; color: #385898;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 24px; height: 24px; vertical-align: middle;"> @yourusername
    </a>
</footer>
</body>
</html>