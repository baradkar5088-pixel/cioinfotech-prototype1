document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".main-navigation");
  if (!button || !nav) return;

  button.addEventListener("click", function () {
    const open = nav.classList.toggle("is-open");
    button.setAttribute("aria-expanded", String(open));
  });

  document.addEventListener("click", function (event) {
    if (!nav.contains(event.target) && !button.contains(event.target)) {
      nav.classList.remove("is-open");
      button.setAttribute("aria-expanded", "false");
    }
  });

  window.addEventListener("resize", function () {
    if (window.innerWidth > 760) {
      nav.classList.remove("is-open");
      button.setAttribute("aria-expanded", "false");
    }
  });
});
