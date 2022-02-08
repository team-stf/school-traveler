<?php get_header(); ?>

<body>
   <div class="div-header">
      <header id="header" style="z-index: 100;">
         <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
         <nav class="pc-nav">
            <ul class="menu">
               <li><a href="schedule.html">SCHEDULE</a></li>
               <li><a href="slick_custom_ver2.0/comic/index.html">ROOM</a></li>
               <li><a href="#">CRADIT</a></li>
               <li><a href="#">CONTACT</a></li>
               <li class="close"><span></span></li>
            </ul>
         </nav>
         
         <nav class="sp-nav">
            <ul class="menu">
               <li><a href="#">ROOM</a></li>
               <li><a href="slick_custom_ver2.0/comic/index.html">ROOM</a></li>
               <li><a href="#">CRADIT</a></li>
               <li><a href="#">CONTACT</a></li>
               <li class="close"><span></span></li>
            </ul>
         </nav>
         
         <div id="hamburger">
            <span></span>
         </div>
      </div>
      </header>
   </div>
      <!-- お知らせ -->
      <style> 
         .announce{
            letter-spacing: 0em; /*スタイル適応*/
         }

         .n-category{
            font-size:15px
         }
         .n-title{
            font-size:30px;
         }
         .entry-label {
            display: inline-block;
            border-radius: 3px;
            padding: 1px 6px;
            color: #fff;
         }
         .c-more{
            color:blue;
         }


      </style>
      <div class="announce">
      <h1>お知らせ</h1>
         <hr>
         <?php
         if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                  <!-- カテゴリー表示 --> <?php $this_categories = get_the_category();if ( $this_categories ) {$this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );$this_category_name  = $this_categories[0]->name; echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';}?>
                  <p class="n-title"><?php the_title() ?></h3>   <!-- タイトル表示 -->
                  <?php the_content() ?>  <!-- 本文表示 -->
                  <spawn>投稿日: <?php the_time('n月j日'); ?> @ <?php the_time('G:i'); ?> 
                  <hr>
                  
            <?php endwhile; ?>
            <a class="c-more" href="Creatingnow">もっとみる</a>
         <?php
         else :
            echo '<p>お知らせはありません。</p>';

         endif;
         ?>
         </div>
         <!-- お知らせEND -->

      <div class="top-image">
         <img class="background" src="<?php echo get_template_directory_uri(); ?>/images/top.png">
         <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/main_visual_logo.png">
         <!-- <img class="logo" src="./images/title.svg"> -->
      </div>

         <!--MOVIE-->
         <section class="movie">
            <div class="container">
               <h1 class="movie_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/saisei.png"></h1> 
               <div class="content">
                  <video src="<?php echo get_template_directory_uri(); ?>/images/demo.mp4" autoplay class="douga"></video>
                  <!-- <p style="color: black;" class="cradit">komatsu/maki/kunou</p> -->
               </div>
            </div>
         </section>
         <!--// MOVIE-->
<article class="top">
   <div class="wrap">
      <div class="inner">
         <!--スケジュール-->
            <selection class="schedule">
               <div class="container">
                  <h1 class="schedule_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/schedule_logo.png"></h1>
                  <div class="content">
                        <!--Day1-->
                  <section class="day1">
                     <details>
                        <summary>2/14(月)</summary>
                        <div class="answer">
                        <p>
                           <img class="schedule1" src="<?php echo get_template_directory_uri(); ?>/images/5.png">
                           <!-- <ul class="day">


                              <li id="day1">
                                 <p>
                                    <div class="cp_timeline03">
                                       <div class="timeline_group">
                                          <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">07:00</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">集合</p>
                                                   アクセスプラザ
                                                </div>
                                          </div>
                                          <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">08:40</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">中部国際空港</p>
                                                   出発
                                                </div>
                                       </div>
                                       <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">11:10~50</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">那覇空港</p>
                                                   到着
                                                </div>
                                       </div>
                                       <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">12:40~13:50</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">優美堂</p>
                                                   出発
                                                </div>
                                       </div>
                                       <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">14:00~15:00</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">壕</p>
                                                   轟、山城本部、アンティラ、白梅
                                                </div>
                                       </div>
                                       <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">15:10~16:00</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">平和記念資料館</p>
                                                   観光
                                                </div>
                                       </div>
                                       <div class="timeline_item">
                                                <div class="time">
                                                   <span class="time_day">17:15</span>
                                                   <span class="time_month"></span>
                                                </div>
                                                <div class="desc">
                                                   <p class="flag">読谷村</p>
                                                   夕食
                                                </div>
                                          </div>
                                       </div>
                                    </div>
                                 </p>
                              </li>
                           </ul> -->
                        </p>
                        </div>
                     </details>
                  </section>
                        <!--Day2-->
                  <section class="day2">
                     <details>
                        <summary>2/15(火)</summary>
                        <div class="answer">
                        <p>
                           <img class="schedule1" src="<?php echo get_template_directory_uri(); ?>/images/5.png">
                        </p>
                        </div>
                     </details>
                  </section>
                           <!--Day3-->
                  <section class="day3">
                     <details>
                        <summary>2/16(水)</summary>
                        <div class="answer">
                        <p>
                           <img class="schedule1" src="<?php echo get_template_directory_uri(); ?>/images/5.png">
                        </p>
                        </div>
                     </details>
                  </section>
                     <!--Day4-->
                  <section class="day4">
                     <details>
                        <summary>2/17(木)</summary>
                        <div class="answer">
                        <p>
                           <img class="schedule1" src="<?php echo get_template_directory_uri(); ?>/images/5.png">
                        </p>
                        </div>
                     </details>
                  </section>
                  </div>
               </div>
            </selection>
         <!--// スケジュール -->

         
         <section class="bookmark">
            <div class="container">
               <h1 class="bookmark_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/bookmark_logo.png"></h1>
               <div class="content">
                  <div id="cards">
                     <div class="card">
                       <div class="picture"><a href="slick_custom_ver2.0/comic/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""></a></div>
                       <div class="description">
                         <p>-注意事項-</p>
                       </div>
                     </div>
                     <div class="card" id="card-center">
                       <div class="picture"><a href="slick_custom_ver2.0/comic/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""></a></div>
                       <div class="description">
                         <p>-飛行機-</p>
                       </div>
                     </div>
                     <div class="card">
                       <div class="picture"><a href="slick_custom_ver2.0/comic/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""></a></div>
                       <div class="description">
                         <p>-スケジュール-</p>
                       </div>
                     </div>
                  </div>
                  <div id="cards">
                     <div class="card">
                        <div class="picture"><a href="slick_custom_ver2.0/comic/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""></a></div>
                        <div class="description">
                          <p>-1日目-</p>
                        </div>
                      </div>
                     <div class="card" id="card-center">
                        <div class="picture"><a href="slick_custom_ver2.0/comic/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""></a></div>
                        <div class="description">
                          <p>-2日目-</p>
                        </div>
                     </div>
                     <div class="card">
                        <div class="picture"><a href="slick_custom_ver2.0/comic/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt=""></a></div>
                        <div class="description">
                          <p>-3日目-</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</article>
<?php get_footer(); ?>