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
            <div class="aboutOffset"></div>
            <div class="aboutInfoContainer">
                <div class="aboutConstruct">
                    <p>
                        Since 2018, the <b>Life Caddie company</b> has been working hard to make client's home 
                        and life (or home/life of a loved one) a safer, easier to navigate, and healthier place 
                        to reside. The company is family run and dedicated to providing a tailored experience 
                        to clients each and every time. Life Caddie serves the <b>Denver metro</b> area and surrounding 
                        areas and will continue to do so.
                    </p>
                </div>
                <div class="aboutConstruct">
                    <img src="../assets/pictures/LifeCaddieLogo.jpg" alt="Life Caddie Logo." width="90%" />
                </div>
            </div>
        </div>
        <div style="height: 2.5vw;"></div>
        <div class="aboutContent">
            <div class="aboutInfoContainer">
                <div class="aboutConstruct">
                    <img src="../assets/pictures/ReachingHands.png" alt="Life Caddie Logo." width="90%" style="border-radius: 50px;"/>
                </div>
                <div class="aboutConstruct">
                    <p>
                        If you or a loved one are looking for help with downsizing or re-organizing, Life Caddie 
                        may be the trusted partner you need to facilitate healthy and beneficial change to your 
                        living situation.
                    </p>
                    <div>
                        <button class="bannerButton">Button for services</button>
                        <button class="bannerButton">Button for contact</button>
                    </div>
                </div>
            </div>
            <div class="aboutOffset"></div>
        </div>
    </div>
    <div style="height: 2.5vw;"></div>
</body>
<footer>
    <?php include 'd_footer.php'; ?>
</footer>
</html>
