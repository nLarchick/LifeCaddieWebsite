<?php
/**
 * mobile_home.php
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
    <link rel="stylesheet" href="\LifeCaddieWebsite\assets\css\style.css">
    <title>Home</title>
</head>
<body>
    <div class="banner">
        <img src="\LifeCaddieWebsite\assets\pictures\CleanHouse.png" alt="Banner photo of clean home." width="100%" />
        <div class="bannerInternal">
            <div class="bannerL">
                <h2>We can help with</h2>
                <h2>Downsizing</h2>
            </div>
            <div class="bannerR">
                <button class="bannerButton">First Button</button>
                <script>
                    let bannerSizing = document.querySelector(".banner");
                    let bannerHeight = bannerSizing.offsetHeight;
                    let brElement = document.createElement("br");
                    brElement.style.height = `${bannerHeight/8}px`;
                    bannerSizing.appendChild(brElement);
                </script>
                <br style="height: 5px;">
                <button class="bannerButton">-- Need to be this wide. --</button>
            </div>
        </div>
    </div>
    <div class="temp">
        <p>This is a lil test!</p>
    </div>
</body>
</html>
