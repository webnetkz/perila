<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>
    *::before,
    *::after {
      box-sizing: inherit;
    }

    .container {
      display: none;
      max-width: 100vw;
      max-height: 70vh;
      margin-left: auto;
      margin-right: auto;
      padding-top: 30px;
    }

    .test-navigation {
      display: inline-flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .test-pagination {
      margin-right: 10px;
      text-align: center;
      color: #373850;
    }

    .nav-btn {
      position: relative;
      flex-shrink: 0;
      width: 36px;
      height: 36px;
      background-color: var(--color-theme);
      border: none;
      border-radius: 50%;
      cursor: pointer;
      outline: none;
    }

    .nav-btn::before {
      content: "";
      position: absolute;
      top: calc(50% - 7px / 2);
      width: 7px;
      height: 7px;
      transform: rotate(45deg);
      transform-origin: center;
    }

    .test-prev {
      margin-right: 10px;
    }

    .test-next::before {
      left: calc(50% - 4px);
      border-top: 1px solid #fff;
      border-right: 1px solid #fff;
    }

    .test-prev::before {
      left: calc(50% - 3px);
      border-left: 1px solid #fff;
      border-bottom: 1px solid #fff;
    }

    .slider {
      overflow: hidden;
    }

    .slides-wrap {
      display: flex;
      justify-content: space-between;
    }

    .slide-1 {
      background: url("./assets/imgs/slider/1.webp");
    }
    .slide-2 {
      background: url("./assets/imgs/slider/2.webp");
    }
    .slide-3 {
      background: url("./assets/imgs/slider/3.webp");
    }
    .slide-4 {
      background: url("./assets/imgs/slider/4.webp");
    }
    .slide-5 {
      background: url("./assets/imgs/slider/5.webp");
    }

    .slide {
      min-height: 100px;
      height: 60vh;
      width: 100%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: var(--radius);
    }

    @media (max-width: 1200px) {
      .container {
        display: block;
      }
    }

  </style>
</head>

  <div class="container">
    <div class="slider-wrap js-slider-main">
      <div class="slider js-slider">
        <div class="slides-wrap js-slides-wrap">
          <div class="slide slide-1"></div>
          <div class="slide slide-2"></div>
          <div class="slide slide-3"></div>
          <div class="slide slide-4"></div>
          <div class="slide slide-5"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      (() => {
      const MOBILE_WIDTH = 180;

      const sliderParamsNotMobile = {
        sliderWrap: "js-slider-main",
        cardsContainerName: "js-slider",
        cardsWrapName: "js-slides-wrap",
        card: "slide",
        paginationClassName: "test-pagination",
        navClassName: "test-navigation",
        navBtnClassName: "nav-btn",
        navPrev: "test-prev",
        navNext: "test-next"
      };

      function getWindowWidth() {
        return Math.max(
          document.body.scrollWidth,
          document.documentElement.scrollWidth,
          document.body.offsetWidth,
          document.documentElement.offsetWidth,
          document.body.clientWidth,
          document.documentElement.clientWidth
        );
      }

      function activateSlider(params) {
        const navigation = document.createElement("div");
        const pagination = document.createElement("div");
        const navBtnPrev = document.createElement("button");
        const navBtnNext = document.createElement("button");

        navigation.classList.add(params.navClassName);

        navBtnPrev.classList.add(params.navBtnClassName);
        navBtnPrev.classList.add(params.navPrev);
        navigation.prepend(navBtnPrev);

        pagination.classList.add(params.paginationClassName);
        navigation.append(pagination);

        navBtnNext.classList.add(params.navBtnClassName);
        navBtnNext.classList.add(params.navNext);
        navigation.append(navBtnNext);

        params.sliderWrapElem.prepend(navigation);

        params.cardsContainer.classList.add("swiper-container");
        params.cardsWrap.classList.add("swiper-wrapper");

        params.cardsSlider = new Swiper(`.${params.cardsContainerName}`, {
          breakpoints: {
            581: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            1200: {
              slidesPerView: 1,
              spaceBetween: 50
            },
          },

          pagination: {
            el: `.${params.sliderWrap} .${params.paginationClassName}`,
            type: "fraction"
          },

          navigation: {
            nextEl: `.${params.navNext}`,
            prevEl: `.${params.navPrev}`
          },

          on: {
            beforeInit() {
              document.querySelectorAll(`.${params.card}`).forEach((el) => {
                el.classList.add("swiper-slide");
              });
            },

            beforeDestroy() {
              this.slides.forEach((el) => {
                el.classList.remove("swiper-slide");
                el.removeAttribute("role");
                el.removeAttribute("aria-label");
              });

              this.pagination.el.remove();
              navigation.remove();
            }
          }
        });
      }

      function destroySlider(params) {
        params.cardsSlider.destroy();
        params.cardsContainer.classList.remove("swiper-container");
        params.cardsWrap.classList.remove("swiper-wrapper");
        params.cardsWrap.removeAttribute("aria-live");
        params.cardsWrap.removeAttribute("id");
      }

      function checkWindowWidth(params) {
        const currentWidth = getWindowWidth();
        params.sliderWrapElem = document.querySelector(`.${params.sliderWrap}`);
        params.cardsContainer = document.querySelector(
          `.${params.cardsContainerName}`
        );
        params.cardsWrap = document.querySelector(`.${params.cardsWrapName}`);

        if (
          currentWidth > MOBILE_WIDTH &&
          (!params.cardsSlider || params.cardsSlider.destroyed)
        ) {
          activateSlider(params);
        } else if (currentWidth <= MOBILE_WIDTH && params.cardsSlider) {
          destroySlider(params);
        }
      }

      checkWindowWidth(sliderParamsNotMobile);

      window.addEventListener("resize", function () {
        checkWindowWidth(sliderParamsNotMobile);
      });
    })();
    });

  </script>
