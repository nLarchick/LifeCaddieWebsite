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
                <h1>We can help with</h1>
                <h1>Downsizing</h1>
            </div>
            <div class="bannerR">
                <button class="bannerButton">First Button</button>
                <br>
                <button class="bannerButton">-- Need to be this wide. --</button>
            </div>
        </div>
    </div>

    <div style="height: 2.5vw;"></div>

    <div class="landingSection">
        <h1>Life Caddie can help</h1>

        <div class="landingTextComp">
            <p>
                If you or a loved one are looking for help with decluttering, moving, downsizing, or life management; 
                Life Caddie is here for you. We support the Denver metro area and are available for consultations now. 
                If you want to learn more about what we do, visit our 
                <a class="inlineButton" href="https://www.example.com">Services</a> page for more information. If you 
                would like to get to know us better, check out our 
                <a class="inlineButton" href="https://www.example.com">About Us</a> section. Additionally, click 
                <a class="inlineButton" href="https://www.example.com">Contact</a> to send us an email and we will 
                get back to you as soon as possible.
            </p>
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
                    <img src="../assets/pictures/OrganizedComputer.png" alt="Organized computer space." width="90%" style="border-radius: 50px;"/>
                </div>

                <div class="aboutConstruct">
                    <p>
                    <em>
                        "Our mission is to allow adults to thrive in their living space and through life transitions. As trusted professionals, 
                        we organize the homes and lives of adults by providing personal judgment-free delivery of service."
                    </em>
                    </p>
                </div>
            </div>

            <div class="aboutOffset"></div>
        </div>

        <div style="height: 2.5vw;"></div>

        <div class="aboutContent">
            <div class="aboutOffset"></div>
            
            <div class="aboutInfoContainer">
                <div class="aboutConstruct">
                    <img src="../assets/pictures/AgewiseMemberAward.jpg" alt="Agewise member award." width="90%" />
                </div>

                <div class="aboutConstruct">
                    <p>
                        Life Caddie has received countless awards and recognition from former clients, and will continue to uphold 
                        the expectation as the company evolves. In 2023, Life Caddie was recognized as the best organizing company 
                        in the denver metro area. Since then, the quality and efficiency of our process has only improved.
                    </p>
                </div>

                <div class="aboutConstruct">
                    <img src="../assets/pictures/BestOrganizer.png" alt="Organizer recognition." width="90%" />
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
