<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>しおり</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
      }

      @media only screen and (min-width: 769px) {
        .swiper-slide:first-child {
          transition: transform 100ms;
        }

        .swiper-slide:first-child img {
          transition: box-shadow 500ms;
        }

        .swiper-slide.swiper-slide-active:first-child {
          transform: translateX(50%);
          z-index: 2;
        }

        .swiper-slide.swiper-slide-active:first-child img {
          box-shadow: 0px 32px 80px rgba(0, 0, 0, 0.35);
        }

        .swiper-slide:nth-child(2) {
          transition: transform 100ms;
        }

        .swiper-slide.swiper-slide-next:nth-child(2) {
          transform: translateX(55%);
          z-index: 1;
        }

        .swiper[dir="rtl"] .swiper-slide.swiper-slide-active:first-child {
          transform: translateX(-50%);
        }

        .swiper[dir="rtl"] .swiper-slide.swiper-slide-next:nth-child(2) {
          transform: translateX(-55%);
        }
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/1.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/2.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/3.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/4.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/5.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/6.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/7.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/8.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/9.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/10.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/11.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/12.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/13.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/14.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/15.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/16.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/17.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/18.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/19.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/20.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/21.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/22.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/23.png"
          />
        </div>
        <div class="swiper-slide">
          <img
            src="<?php echo get_template_directory_uri(); ?>/book/24.png"
          />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-scrollbar"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          769: {
            slidesPerView: 2,
            slidesPerGroup: 2,
          },
        },
        scrollbar: {
          el: ".swiper-scrollbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        on: {
        init: function () {
          /*初期処理*/
          var li = $("#p2 li");
          li.removeClass("act1");
          li.eq(p2[ss_array[0]]).addClass("act1");
        },
        slideChangeTransitionStart: function () {
          /*スライダーが変更されたときの処理*/
          var act = this;
          var index = act.activeIndex;
          var li = $("#p2 li");
          li.removeClass("act1");
          li.eq(p2[ss_array[index]]).addClass("act1");
        }
      }
      });
    </script>
  </body>
</html>
