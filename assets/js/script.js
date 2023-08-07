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
        return '<span class="' + className + '">' + '</span>';
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
        this.el.addEventListener('mouseenter', () => {
          this.autoplay.stop();

        });

        this.el.addEventListener('mouseleave', () => {
          this.autoplay.start();
        });
      }
    },
  });

swiper.on('slideChange', function () {
    const hero = document.querySelector('.hero');
    document.querySelector('.hero').remove();

    setTimeout(function(){
        document.querySelector('.swiper-slide-active .main-slider__img').appendChild(hero);
    }, 200);
});

const gallerySlider = new Swiper('.gallery-slider', {
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
