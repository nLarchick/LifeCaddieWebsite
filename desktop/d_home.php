<?php
/**
 * desktop_home.php
 *
 * This is the landing page for the desktop version
 * of the Life Caddie website.
 *
 * @author Noah Larchick <larchicknoah@gmail.com>
 * @copyright Copyright (c) 2024 Life Caddie
 * @license <MIT>
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/desktop_style.css">
    <title>Home</title>
</head>
<header>
    <?php include 'd_header.php'; ?>
</header>
<body>
    <div class="banner">
        <img src="../assets/pictures/CleanHouse.png" alt="Banner photo of clean home." width="100%" />
        <div class="bannerInternal">
            <div class="bannerL">
                <h2>We can help with</h2>
                <h2>Downsizing</h2>
            </div>
            <div class="bannerR">
                <button class="bannerButton">First Button</button>
                <br>
                <button class="bannerButton">-- Need to be this wide. --</button>
            </div>
        </div>
    </div>
    <div style="height: 2.5vw;" id="aboutSectionStart"></div>
    <div class="aboutSection">
        <h3>About Us</h3>
        <h5>Learn more about the Life Caddie company</h5>
        <div style="height: 2.5vw;"></div>
        <div class="aboutContent">
            <div class="aboutL">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius hendrerit libero, a varius dolor 
                    sodales quis. Maecenas facilisis lectus dictum erat pretium eleifend. Ut cursus ante diam, non vestibulum 
                    urna semper sed. Nunc ac maximus erat, non tristique metus. Donec nec metus et mauris gravida vestibulum. 
                    Integer et mi nec nibh ultricies pretium quis ac sapien. Vestibulum id leo lacus. In finibus ut odio vel 
                    ullamcorper. Curabitur at neque tempor dui posuere pharetra. Vivamus fringilla, orci a accumsan vulputate, 
                    est est porta dui, eu feugiat nisl est at velit. Sed finibus sodales ante sodales mattis. Nullam gravida 
                    purus ac ante elementum accumsan. Etiam congue orci viverra augue convallis, id vestibulum lectus 
                    sollicitudin. Vestibulum bibendum urna sit amet dictum faucibus. Duis ligula ex, consectetur eu risus 
                    nec, semper pellentesque lorem. Vivamus vulputate a dolor eget pretium.
                </p>
            </div>
            <div class="aboutR">
                <img src="../assets/pictures/LifeCaddieLogo.jpg" alt="Life Caddie Logo." width="100%" />
            </div>
        </div>
    </div>
    <div style="height: 2.5vw;"></div>
</body>
<footer>
    <?php include 'd_footer.php'; ?>
</footer>
</html>
