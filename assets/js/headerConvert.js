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