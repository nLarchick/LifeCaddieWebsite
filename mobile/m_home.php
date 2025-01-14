<?php
/**
 * mobile_home.php
 *
 * This is the landing page for the mobile version
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
    <link rel="stylesheet" href="/LifeCaddieWebsite/assets/css/mobile_style.css">
    <title>Home</title>
</head>
<body>
<div class="banner">
        <img src="/LifeCaddieWebsite/assets/pictures/CleanHouse.png" alt="Banner photo of clean home." width="100%" />
        <div class="bannerInternal">
            <h2>We can help with Downsizing</h2>
            <button class="bannerButton">First Button</button>
            <button class="bannerButton">-- Need to be this wide. --</button>
        </div>
</div>
<div style="height: 2.5vw;"></div>
<div class="aboutSection">
        <div class="aboutContent">
            <h3>About Us</h3>
            <h5>Learn more about the Life Caddie company</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius hendrerit libero, a varius dolor 
                sodales quis. Maecenas facilisis lectus dictum erat pretium eleifend. Ut cursus ante diam, non vestibulum 
                urna semper sed. Nunc ac maximus erat, non tristique metus. Donec nec metus et mauris gravida vestibulum. 
                Integer et mi nec nibh ultricies pretium quis ac sapien. Vestibulum id leo lacus. In finibus ut odio vel 
                ullamcorper. Curabitur at neque tempor dui posuere pharetra.
            </p>
            <img src="/LifeCaddieWebsite/assets/pictures/LifeCaddieLogo.jpg" alt="Life Caddie Logo." width="100%" />
        </div>
</div>
<div style="height: 2.5vw;"></div>
<footer>
    <?php include 'm_footer.php'; ?>
</footer>
</body>
</html>
