// Check the viewport width and redirect accordingly
window.onload = function() {
    if (window.innerWidth <= 768) { // Threshold for mobile
        window.location.href = "mobile/m_home.php";
    } else {
        window.location.href = "desktop/d_home.php";
    }
};
