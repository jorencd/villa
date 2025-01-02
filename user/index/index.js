document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar");
  const scrollThreshold = 50; // Adjust the scroll threshold for triggering the effect

  window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY;
    const maxScroll =
      document.documentElement.scrollHeight - window.innerHeight;

    if (
      scrollTop > scrollThreshold &&
      scrollTop < maxScroll - scrollThreshold
    ) {
      // Add 'scrolled' class when slightly scrolled but not at the end
      navbar.classList.add("scrolled");
    } else {
      // Remove 'scrolled' class when at the top or bottom
      navbar.classList.remove("scrolled");
    }
  });
});

// NAVLINK CLICKED SCROLL
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});
