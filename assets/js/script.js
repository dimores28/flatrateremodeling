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

  const windowInnerWidth = document.documentElement.clientWidth;

  if (getBodyScrollTop() > 200 && windowInnerWidth > 544) {
    document.querySelector(".btn-up").style.display = "flex";
  } else {
    document.querySelector(".btn-up").style.display = "none";
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

// document.addEventListener("DOMContentLoaded", () => {
//   const popup = document.getElementById("popup");

//   const openBtn = document.getElementById("btn_open");

//   openBtn.onclick = function () {
//     popup.style.display = "flex";
//   };

//   window.onclick = function (event) {
//     if (
//       event.target.closest(".popup__bg") &&
//       !event.target.closest("#btn_open")
//     ) {
//       popup.style.display = "none";
//     }
//   };
// });

document.querySelector(".btn-up").addEventListener("click", function () {
  const hiddenElement = document.querySelector("body");
  hiddenElement.scrollIntoView({ block: "start", behavior: "smooth" });
});

setTimeout(function () {
  const popupLinks = document.querySelectorAll(".popup-link");
  const body = document.querySelector("body");
  const lockPadding = document.querySelectorAll(".lock-padding");

  let unlock = true;

  const timeout = 800;

  if (popupLinks.length > 0) {
    for (let index = 0; index < popupLinks.length; index++) {
      const popupLink = popupLinks[index];
      popupLink.addEventListener("click", function (e) {
        const popupName = popupLink.getAttribute("href").replace("#", "");
        const curentPopup = document.getElementById(popupName);
        popupOpen(curentPopup);
        e.preventDefault();
      });
    }
  }

  const popupCloseIcon = document.querySelectorAll(".close-popup");
  if (popupCloseIcon.length > 0) {
    for (let index = 0; index < popupCloseIcon.length; index++) {
      const el = popupCloseIcon[index];
      el.addEventListener("click", function (e) {
        popupClose(el.closest(".popup"));
        e.preventDefault();
      });
    }
  }

  function popupOpen(curentPopup) {
    if (curentPopup && unlock) {
      const popupActive = document.querySelector(".popup.open");
      if (popupActive) {
        popupClose(popupActive, false);
      } else {
        bodyLock();
      }
      curentPopup.classList.add("open");
      curentPopup.addEventListener("click", function (e) {
        if (!e.target.closest(".popup__content")) {
          popupClose(e.target.closest(".popup"));
        }
      });
    }
  }

  function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
      popupActive.classList.remove("open");
      if (doUnlock) {
        bodyUnLock();
      }
    }
  }

  function bodyLock() {
    const lockPaddingValue =
      window.innerWidth - document.querySelector("body").offsetWidth + "px";

    if (lockPadding.length > 0) {
      for (let index = 0; index < lockPadding.length; index++) {
        const el = lockPadding[index];
        el.style.paddingRight = lockPaddingValue;
      }
    }
    body.style.paddingRight = lockPaddingValue;
    body.classList.add("lock");

    unlock = false;
    setTimeout(function () {
      unlock = true;
    }, timeout);
  }

  function bodyUnLock() {
    setTimeout(function () {
      if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index++) {
          const el = lockPadding[index];
          el.style.paddingRight = "0px";
        }
      }
      body.style.paddingRight = "0px";
      body.classList.remove("lock");
    }, timeout);

    unlock = false;
    setTimeout(function () {
      unlock = true;
    }, timeout);
  }

  document.addEventListener("keydown", function (e) {
    if (e.which === 27) {
      const popupActive = document.querySelector(".popup.open");
      popupClose(popupActive);
    }
  });

  (function () {
    // проверяем поддержку
    if (!Element.prototype.closest) {
      // реализуем
      Element.prototype.closest = function (css) {
        var node = this;
        while (node) {
          if (node.matches(css)) return node;
          else node = node.parentElement;
        }
        return null;
      };
    }
  })();
  (function () {
    // проверяем поддержку
    if (!Element.prototype.matches) {
      // определяем свойство
      Element.prototype.matches =
        Element.prototype.matchesSelector ||
        Element.prototype.webkitMatchesSelector ||
        Element.prototype.mozMatchesSelector ||
        Element.prototype.msMatchesSelector;
    }
  })();
}, 500);

//--------------------------------------------------------------------------//
// Form validation //

function isValidPhone(p) {
  var phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/g;
  var digits = p.replace(/\D/g, "");
  return phoneRe.test(digits);
}

function isValidEmail(value) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(value);
}

function isValidName(value) {
  return /\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/.test(value);
}

const popupName = document.querySelector("#popup__name");
const popupEmail = document.querySelector("#popup__email");
const popupPhone = document.querySelector("#popup__phone");

popupName?.addEventListener("input", function () {
  if (!isValidName(popupName.value)) {
    popupName.classList.add("_notvalid");
  } else {
    popupName.classList.remove("_notvalid");
  }
});

popupPhone?.addEventListener("input", function () {
  if (!isValidPhone(popupPhone.value)) {
    popupPhone.classList.add("_notvalid");
  } else {
    popupPhone.classList.remove("_notvalid");
  }
});

popupEmail?.addEventListener("input", function () {
  if (!isValidEmail(popupEmail.value)) {
    popupEmail.classList.add("_notvalid");
  } else {
    popupEmail.classList.remove("_notvalid");
  }
});

const popup__form = document.querySelector("#popup__form");
popup__form?.addEventListener("submit", async function (e) {
  e.preventDefault();

  let error =
    isValidEmail(popupEmail.value) &&
    isValidPhone(popupPhone.value) &&
    isValidName(popupUserName.value);

  let formData = new FormData(popup__form);

  if (error) {
    popup__form.classList.add("_sending");

    let response = await fetch("mail.php", {
      method: "POST",
      body: formData,
    });

    if (response.ok) {
      let result = await response.json();
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML =
        '<p class="alert__msg" >Your message has been sent!!!<p/>';
      alertMsg.classList.add("_show__success");
      popup__form.reset();
      popup__form.classList.remove("_sending");
    } else {
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML = '<p class="alert__msg" >Error!!!<p/>';
      alertMsg.classList.add("_show");
      console.log(response.data);
      popup__form.classList.remove("_sending");
    }
  } else {
    let alertMsg = document.querySelector(".popup__alert");
    alertMsg.innerHTML =
      '<p class="alert__msg" >Fill in required fields!!!<p/>';
    alertMsg.classList.add("_show");
    // alert("Fill in required fields!");
  }
});

const bigFormName = document.querySelector("#bigFormName");
const bigFormEmail = document.querySelector("#bigFormEmail");
const bigFormPhone = document.querySelector("#bigFormPhone");

bigFormName?.addEventListener("input", function () {
  if (!isValidName(bigFormName.value)) {
    bigFormName.classList.add("_notvalid");
  } else {
    bigFormName.classList.remove("_notvalid");
  }
});

bigFormPhone?.addEventListener("input", function () {
  if (!isValidPhone(bigFormPhone.value)) {
    bigFormPhone.classList.add("_notvalid");
  } else {
    bigFormPhone.classList.remove("_notvalid");
  }
});

bigFormEmail?.addEventListener("input", function () {
  if (!isValidEmail(bigFormEmail.value)) {
    bigFormEmail.classList.add("_notvalid");
  } else {
    bigFormEmail.classList.remove("_notvalid");
  }
});

const big__form = document.querySelector("#big__form");
big__form?.addEventListener("submit", async function (e) {
  e.preventDefault();

  let error =
    isValidEmail(popupEmail.value) &&
    isValidPhone(popupPhone.value) &&
    isValidName(popupUserName.value);

  let formData = new FormData(big__form);

  if (error) {
    big__form.classList.add("_sending");

    let response = await fetch("mail.php", {
      method: "POST",
      body: formData,
    });

    if (response.ok) {
      let result = await response.json();
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML =
        '<p class="alert__msg" >Your message has been sent!!!<p/>';
      alertMsg.classList.add("_show__success");
      big__form.reset();
      big__form.classList.remove("_sending");
    } else {
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML = '<p class="alert__msg" >Error!!!<p/>';
      alertMsg.classList.add("_show");
      console.log(response.data);
      big__form.classList.remove("_sending");
    }
  } else {
    let alertMsg = document.querySelector(".popup__alert");
    alertMsg.innerHTML =
      '<p class="alert__msg" >Fill in required fields!!!<p/>';
    alertMsg.classList.add("_show");
    // alert("Fill in required fields!");
  }
});

const smallFormName = document.querySelector("#smallFormName");
const smallFormEmail = document.querySelector("#smallFormEmail");
const smallFormPhone = document.querySelector("#smallFormPhone");

smallFormName?.addEventListener("input", function () {
  if (!isValidName(smallFormName.value)) {
    smallFormName.classList.add("_notvalid");
  } else {
    smallFormName.classList.remove("_notvalid");
  }
});

smallFormPhone?.addEventListener("input", function () {
  if (!isValidPhone(smallFormPhone.value)) {
    smallFormPhone.classList.add("_notvalid");
  } else {
    smallFormPhone.classList.remove("_notvalid");
  }
});

smallFormEmail?.addEventListener("input", function () {
  if (!isValidEmail(smallFormEmail.value)) {
    smallFormEmail.classList.add("_notvalid");
  } else {
    smallFormEmail.classList.remove("_notvalid");
  }
});

const smallForm = document.querySelector("#smallForm");
smallForm?.addEventListener("submit", async function (e) {
  e.preventDefault();

  let error =
    isValidEmail(popupEmail.value) &&
    isValidPhone(popupPhone.value) &&
    isValidName(popupUserName.value);

  let formData = new FormData(smallForm);

  if (error) {
    smallForm.classList.add("_sending");

    let response = await fetch("mail.php", {
      method: "POST",
      body: formData,
    });

    if (response.ok) {
      let result = await response.json();
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML =
        '<p class="alert__msg" >Your message has been sent!!!<p/>';
      alertMsg.classList.add("_show__success");
      smallForm.reset();
      smallForm.classList.remove("_sending");
    } else {
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML = '<p class="alert__msg" >Error!!!<p/>';
      alertMsg.classList.add("_show");
      console.log(response.data);
      smallForm.classList.remove("_sending");
    }
  } else {
    let alertMsg = document.querySelector(".popup__alert");
    alertMsg.innerHTML =
      '<p class="alert__msg" >Fill in required fields!!!<p/>';
    alertMsg.classList.add("_show");
    // alert("Fill in required fields!");
  }
});
