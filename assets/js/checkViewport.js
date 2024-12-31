/**
 * checkViewport.js
 * 
 * Script function for identifying mobile devices
 * accessing the website
 * 
 * @author: Noah Larchick
 * Last Edited: 12/31/2024
 * 
*/

window.onload = function() {
    if (window.innerWidth <= 768) { // Threshold for mobile
        window.location.href = "mobile/m_home.php";
    } else {
        window.location.href = "desktop/d_home.php";
    }
};
