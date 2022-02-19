<?php get_header(); ?>
<body>
      <!-- お知らせStart -->
      <style> 
        
      </style>
      <div style="background-color: white;" class="announce">
      <h1 style="text-align: center;">お知らせ</h1>
      <hr>
      <?php
          query_posts('posts_per_page=1'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                  <div class="naka">
                    <!-- カテゴリー --> <?php $this_categories = get_the_category();if ( $this_categories ) {$this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );$this_category_name  = $this_categories[0]->name; echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';}?>
                    <!-- タイトル --><a href="<?php the_permalink(); ?>"><p id="title"><?php the_title(); ?></p></a>  <!-- タイトル表示 -->
                    <p>
                    <spawn>投稿日: <?php the_time('n月j日'); ?> @ <?php the_time('G:i'); ?> 
                    </p>
                  <hr>
                  </div>
                  
            <?php endwhile; ?>
            <a class="c-more" href="another">以前のお知らせ</a>
        <?php
        else :
            echo '<p>お知らせはありません。</p>';

        endif;
        ?>
        </div>
      
      <!-- お知らせEND -->
<section class="shiori">
  <div class="container">
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
            <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/main.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/1.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/2.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/3.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/4.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/5.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/6.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/7.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/8.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/9.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/10.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/11.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/12.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/13.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/14.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/15.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/16.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/17.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/18.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/19.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/20.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/21.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/22.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/23.png"
            />
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-zoom-container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/book/24.png"
            />
          </div>
        </div>
      
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-scrollbar"></div>
      <div class="swiper-pagination"></div>
    

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
  </div>
</section>
      
<section class="movie">
         <iframe class="douga" width="560s" height="315" src="https://www.youtube.com/embed/wmK514c0KzE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<div id="loader-bg">
  <div class="loading-animation">
    <p class="power">Created by</p>
    <img class="logo-load" src="<?php echo get_template_directory_uri(); ?>/images/w-amidc.png"></p>
    <div class="bouncingLoader"><div></div></div>
  </div>
</div>


<!--// スケジュール -->

    <selection class="schedule">
      <div class="container">
        <h1 class="time_table">TIMETABLE</h1>
              <div class="accordion">
                <!--DAY1-->
                <div class="answer">
                  <input  type="checkbox" id="check1" class="accordion-hidden">
                  <label  for="check1" class="accordion-open"><p class="day-title">DAY1</p></label>
                  <label for="check1" class="accordion-close">
                    <p>
                      <article>
                        <div class="events">
                            <div class="event">
                              <p class="time">9:03</p>
                              <p class="name">集合: 名古屋駅</p>
                            </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">09:03</p>
                              <p class="name">名古屋駅</p><br>
                            </div>
                            <div class="by">
                              <p><img style="width: 25px;" src="<?php echo get_template_directory_uri(); ?>/images/shinkansen.svg">ひかり501号<br>（約1時間30分）</p>
                            </div>
                            <div class="to">
                              <p class="time">10:39</p>
                              <p class="name">姫路駅</p>
                            </div>
                          </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">11:00</p>
                              <p class="name">出発</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（15分）</p>
                            </div>
                            <div class="to">
                              <p class="time">11:15</p>
                              <p class="name">姫路城</p>
                            </div>
                          </div>
                          
                          <div class="meal">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/images/meal.svg">弁当</p>
                          </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">13:30</p>
                              <p class="name">出発</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（1時間30分）</p>
                            </div>
                            <div class="to">
                              <p class="time">15:00</p>
                              <p class="name">北淡路地震記念公園</p>
                            </div>
                          </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">17:00</p>
                              <p class="name">出発</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（50分）</p>
                            </div>
                            <div class="to">
                              <p class="time">17:50</p>
                              <p class="name">シーサイドホテル舞子ビラ</p>
                            </div>
                          </div>
                      
                          <div class="meal">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/images/meal.svg">夕食</p>
                          </div>
                          
                          <div class="event">
                            <p class="time"></p>
                            <p class="name">就寝</p>
                          </div>

                        </div>
                      </article>
                    </p>
                  </label>
                
                  <!--DAY2-->
                  <input type="checkbox" id="check2" class="accordion-hidden">
                  <label for="check2" class="accordion-open"><p class="day-title">DAY2</p></label>
                  <label for="check2" class="accordion-close">
                    <p>
                    <article>
                        <div class="events">
                          <div class="transfer">
                      <div class="from">
                        <p class="time">07:50</p>
                        <p class="name">ホテル</p><br>
                      </div>
                      <div class="by">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（1時間30分）</p>
                      </div>
                      <div class="to">
                        <p class="time">09:20</p>
                        <p class="name">うずしお観潮船</p>
                      </div>
                    </div>
                    
                    <div class="transfer">
                      <div class="from">
                        <p class="time">10:00</p>
                        <p class="name">出発</p><br>
                      </div>
                      <div class="by">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（10分）</p>
                      </div>
                      <div class="to">
                        <p class="time">10:00</p>
                        <p class="name">大塚国際美術館</p>
                      </div>
                    </div>

                    <div class="transfer">
                      <div class="from">
                        <p class="time">12:00</p>
                        <p class="name">出発</p><br>
                      </div>
                      <div class="by">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（1時間）</p>
                      </div>
                      <div class="to">
                        <p class="time">13:00</p>
                        <p class="name">中野うどん学校</p>
                      </div>
                    </div>
                    
                    <div class="meal">
                      <p><img src="<?php echo get_template_directory_uri(); ?>/images/meal.svg">昼食・体験</p>
                    </div>
                    
                    <div class="transfer">
                      <div class="from">
                        <p class="time">15:15</p>
                        <p class="name">出発</p><br>
                      </div>
                      <div class="by">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（10分）</p>
                      </div>
                      <div class="to">
                        <p class="time">16:00</p>
                        <p class="name">鷲羽山(展望台)</p>
                      </div>
                    </div>
                    
                    <div class="transfer">
                      <div class="from">
                        <p class="time">17:00</p>
                        <p class="name">出発</p><br>
                      </div>
                      <div class="by">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（20分）</p>
                      </div>
                      <div class="to">
                        <p class="time">17:45</p>
                        <p class="name">瀬戸内マリンホテル</p>
                      </div>
                    </div>

                    <div class="event">
                      <p class="time"></p>
                      <p class="name">就寝</p>
                    </div>
                        </div>
                      </article>
                  </p>
                  </label>
                  <!--DAY3-->
                  <input type="checkbox" id="check3" class="accordion-hidden">
                  <label for="check3" class="accordion-open"><p class="day-title">DAY3</p></label>
                  <label for="check3" class="accordion-close">
                  <p>
                          <article>
                              <div class="events">
                                <div class="transfer">
                            <div class="from">
                              <p class="time">08:30</p>
                              <p class="name">ホテル</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（1時間30分）</p>
                            </div>
                            <div class="to">
                              <p class="time">09:30</p>
                              <p class="name">琴平</p>
                            </div>
                          </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">??:??</p>
                              <p class="name">出発</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（10分）</p>
                            </div>
                            <div class="to">
                              <p class="time">??:??</p>
                              <p class="name">金毘羅宮</p>
                            </div>
                          </div>

                          <div class="transfer">
                          <div class="from">
                            <p class="time">11:00</p>
                            <p class="name">出発</p><br>
                          </div>
                          <div class="by">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（15分）</p>
                          </div>
                          <div class="to">
                            <p class="time">11:15</p>
                            <p class="name">琴参閣</p>
                          </div>
                        </div>
                          
                          <div class="meal">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/images/meal.svg">昼食</p>
                          </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">12:00</p>
                              <p class="name">出発</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（1時間15分）</p>
                            </div>
                            <div class="to">
                              <p class="time">13:15</p>
                              <p class="name">倉敷美観地区</p>
                            </div>
                          </div>
                          
                          <div class="transfer">
                            <div class="from">
                              <p class="time">15:45</p>
                              <p class="name">出発</p><br>
                            </div>
                            <div class="by">
                              <p><img src="<?php echo get_template_directory_uri(); ?>/images/bus.svg">バス（0分）</p>
                            </div>
                            <div class="to">
                              <p class="time">15:45</p>
                              <p class="name">岡山駅</p>
                            </div>
                          </div>

                          <div class="transfer">
                            <div class="from">
                              <p class="time">16:37</p>
                              <p class="name">岡山駅</p><br>
                            </div>
                            <div class="by">
                              <p><img style="width: 25px;" src="<?php echo get_template_directory_uri(); ?>/images/shinkansen.svg">のぞみ40号<br>(1時間30分)</p>
                            </div>
                            <div class="to">
                              <p class="time">18:13</p>
                              <p class="name">名古屋駅</p>
                            </div>
                          </div>

                          
                              </div>
                            </article>
                        </p>
                  </label>
                </div>
            </div>

        </div>
      </div>
    </selection>

<!--// スケジュール -->

<!--// ホテル -->
<section class="hotel_room">
    <div class="container">
    <h1 class="hotel">HOTEL</h1>
      <div class="content">
        <select class="select_room" name="change_js">
                <option>クラスを選択</option>
          <optgroup label="普通科">
              <option value="room/g2a">G2A</option>
              <option value="room/g2b">G2B</option>
              <option value="room/g2c">G2C</option>
              <option value="room/g2d">G2D</option>
              <option value="room/g2e">G2E</option>
              <option value="room/g2f">G2F</option>
              <option value="room/g2g">G2G</option>
              <option value="room/g2h">G2H</option>
              <option value="room/g2i">G2I</option>
              <option value="room/g2j">G2J</option>
              <option value="room/g2k">G2K</option>
          </optgroup>
          <optgroup label="専門科">
            <option value="room/t2a">T2A</option>
            <option value="room/t2b">T2B</option>
            <option value="room/t2c">T2C</option>
            <option value="room/t2d">T2D</option>
            <option value="room/t2e">T2E</option>
            <option value="room/j2a">J2A</option>
          </optgroup>
      </select>
      </div>
    </div>
  </section>
<!--// ホテrう -->

<!--// しおri -->
<section class="bookmark">
  <div class="container">
    <!-- <h1 class="bookmark_logo"><img src="images/bookmark_logo.png"></h1> -->
    <h1 class="book_mark">ARCHIVE</h1>
    <div class="content">
    <div id="cards">
          <div class="card">
              <div class="picture"><a href="<?php echo get_template_directory_uri(); ?>/bookmark/1日目/index.html"><img src="<?php echo get_template_directory_uri(); ?>/bookmark/1日目/1.png" alt=""></a></div>
              <div class="description">
                <p>-1日目-</p>
              </div>
            </div>
          <div class="card" id="card-center">
              <div class="picture"><a href="<?php echo get_template_directory_uri(); ?>/bookmark/2日目/index.html"><img src="<?php echo get_template_directory_uri(); ?>/bookmark/2日目/1.png" alt=""></a></div>
              <div class="description">
                <p>-2日目-</p>
              </div>
          </div>
          <div class="card">
              <div class="picture"><a href="<?php echo get_template_directory_uri(); ?>/bookmark/3日目/index.html"><img src="<?php echo get_template_directory_uri(); ?>/bookmark/3日目/1.png" alt=""></a></div>
              <div class="description">
                <p>-3日目-</p>
              </div>
          </div>
        </div>
    </div>
        <div id="cards">
          <div class="card">
            <div class="picture"><a href="<?php echo get_template_directory_uri(); ?>/bookmark/注意事項/index.html"><img src="<?php echo get_template_directory_uri(); ?>/bookmark/注意事項/1.svg" alt=""></a></div>
            <div class="description">
              <p>-注意事項-</p>
            </div>
          </div>
          <div class="card" id="card-center">
            <div class="picture"><a href="<?php echo get_template_directory_uri(); ?>/bookmark/部屋割り/index.html"><img src="<?php echo get_template_directory_uri(); ?>/bookmark/部屋割り/1.png" alt=""></a></div>
            <div class="description">
              <p>-部屋割り-</p>
            </div>
          </div>
          <div class="card">
            <div class="picture"><a href="<?php echo get_template_directory_uri(); ?>/bookmark/その他/index.html"><img src="<?php echo get_template_directory_uri(); ?>/bookmark/その他/1.png" alt=""></a></div>
            <div class="description">
              <p>-その他-</p>
            </div>
          </div>
        </div>
  </div>
</section>




<?php get_footer(); ?>