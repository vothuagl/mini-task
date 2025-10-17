document.addEventListener("DOMContentLoaded", function () {
  var mySwiper = new Swiper('.swiper-container', {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    speed: 1500,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    slidesPerView: 1,
  });
});

document.addEventListener("click", function (e) {
  const el = e.target.closest(".js-scroll");
  if (!el) return;

  e.preventDefault();

  const targetSelector = el.getAttribute("data-target");

  const w = window.innerWidth;
  let offset = 0;

  if (w < 768) {
    // mobile (SP)
    offset = parseInt(el.getAttribute("data-offset-sp") || "0", 10);
  } else if (w < 1024) {
    // tablet
    offset = parseInt(el.getAttribute("data-offset-tb") || "0", 10);
  } else {
    // PC
    offset = parseInt(el.getAttribute("data-offset-pc") || "0", 10);
  }

  let target;
  if (targetSelector.startsWith("#")) {
    target = document.getElementById(targetSelector.replace("#", ""));
  } else {
    target = document.querySelector(targetSelector);
  }
  if (!target) return;

  const top = target.getBoundingClientRect().top + window.pageYOffset - offset;

  window.scrollTo({
    top: top,
    behavior: "smooth"
  });
});
