<?php
/**
 * d_header.php
 *
 * This is the default header for pages on the
 * Life Caddie website.
 *
 * @author Noah Larchick <larchicknoah@gmail.com>
 * @copyright Copyright (c) 2024 Life Caddie
 * @license <MIT>
 */

?>
<!DOCTYPE html>
<html lang="en">
<script src="../assets/js/headerConvert.js"></script>
<div class="navBar">
    <div class="logoContainer">
        <img src="../assets/pictures/LifeCaddieSymbol.png" alt="Life Caddie logo." height="100%"/>
    </div>
    <div class="navDirections">
        <button class="navButton" onclick="location.href='#aboutSectionStart'">About Us</button>
        <button class="navButton" onclick="window.location.href='d_services.php';">Services</button>
        <button class="navButton" onclick="window.location.href='d_admiration.php';">Admiration</button>
        <button class="navButton" onclick="window.location.href='d_contact.php';">Contact</button>
        <button class="navButton" onclick="window.location.href='d_disclosure.php';">Disclosure</button>
    </div>
</div>