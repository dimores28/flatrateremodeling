const swiper = new Swiper(".main-slider", {
  // loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + "</span>";
    },
  },

  effect: "fade",

  autoplay: {
    // Пауза между прокруткой
    delay: 3000,
    // Закончить на последнем слайде
    stopOnLastSlide: false,
    // Отключить после ручного переключения
    disableOnInteraction: true,
  },

  // Скорость
  speed: 800,
  on: {
    init() {
      this.el.addEventListener("mouseenter", () => {
        this.autoplay.stop();
      });

      this.el.addEventListener("mouseleave", () => {
        this.autoplay.start();
      });
    },
  },
});

swiper.on("slideChange", function () {
  const hero = document.querySelector(".hero");
  document.querySelector(".hero").remove();

  setTimeout(function () {
    document
      .querySelector(".swiper-slide-active .main-slider__img")
      .appendChild(hero);
  }, 200);
});

const gallerySlider = new Swiper(".gallery-slider", {
  loop: true,

  autoplay: {
    // Пауза между прокруткой
    delay: 3000,
    // Закончить на последнем слайде
    stopOnLastSlide: false,
    // Отключить после ручного переключения
    disableOnInteraction: true,
  },

  // Скорость
  speed: 800,
});

const header = document.querySelector(".header");
const body = document.querySelector("body");
body.style.paddingTop = `${header.offsetHeight}px`;

function getBodyScrollTop() {
  return (
    self.pageYOffset ||
    (document.documentElement && document.documentElement.scrollTop) ||
    (document.body && document.body.scrollTop)
  );
}

window.addEventListener("scroll", function (e) {
  if (getBodyScrollTop() > 50) {
    document.querySelector(".header").classList.add("active");
  } else {
    document.querySelector(".header").classList.remove("active");
  }
});

document.querySelector(".burger-btn").addEventListener("click", function () {
  document.querySelector(".header__navigaton").classList.toggle("_active");
  setTimeout(function () {
    const close = document.querySelector(".toggle__icon--close");
    const open = document.querySelector(".toggle__icon--open");
    const active = document.querySelector(".header__navigaton._active");

    if (active) {
      close.style.display = "none";
      open.style.display = "block";
    } else {
      close.style.display = "block";
      open.style.display = "none";
    }
  }, 10);
});

document.querySelector(".dropdown").addEventListener("click", function () {
  document.querySelector(".submenu").classList.toggle("_active");
});

document.addEventListener("DOMContentLoaded", () => {
  const popup = document.getElementById("popup");

  const openBtn = document.getElementById("btn_open");

  openBtn.onclick = function () {
    popup.style.display = "flex";
  };

  window.onclick = function (event) {
    if (
      event.target.closest(".popup__bg") &&
      !event.target.closest("#btn_open")
    ) {
      popup.style.display = "none";
    }
  };
});
