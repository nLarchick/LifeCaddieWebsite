/**
 * headerConvert.js
 * 
 * Script for adjusting headerNav for
 * better viewing and navigation.
 * 
 * @author: Noah Larchick
 * Last Edited: 1/14/2024
 * 
*/

document.addEventListener("DOMContentLoaded", () => {
    makeInvis(document.querySelector(".navBar"))
});

function makeInvis(header) {
  const handleScroll = () => {
    if (window.scrollY < 50) {
        header.classList.add("transparent");
    } else {
        header.classList.remove("transparent");
    }
  };
  window.addEventListener("scroll", handleScroll);
  handleScroll();
}