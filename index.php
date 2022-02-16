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
      <div class="top-image">
      </div>
      
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



<article class="top">
  <div class="wrap">
      <div class="inner">
        <!--スケジュール-->
            <selection class="schedule">
              <div class="container">
                  <h1 class="time_table">TIMETABLE</h1>
                  <!-- <h1 class="schedule_logo"><img src="images/schedule_logo.png"></h1> -->
                  <div class="content">
                        <!--Day1-->
                  <section class="day1">
                    <details>
                        <summary><p class="day-title">DAY1</p></summary>
                        <div class="answer">
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
                              <p><img style="width: 25px;" src="<?php echo get_template_directory_uri(); ?>/images/shinkansen.svg">ひかり501号（約1時間30分）</p>
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
                        </div>
                    </details>
                  </section>
                        <!--Day2-->
                  <section class="day2">
                    <details>
                        <summary><p class="day-title">DAY2</p></summary>
                        <div class="answer">
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
                        </div>
                    </details>
                  </section>
                        <!--Day3-->
                        <section class="day3">
                          <details>

                              <summary><p class="day-title">DAY3</p></summary>
                              <div class="answer">
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
                                    <p><img style="width: 25px;" src="<?php echo get_template_directory_uri(); ?>/images/shinkansen.svg">のぞみ40号(1時間30分)</p>
                                  </div>
                                  <div class="to">
                                    <p class="time">18:13</p>
                                    <p class="name">名古屋駅</p>
                                  </div>
                                </div>

                                
                                    </div>
                                  </article>
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
              <!-- <h1 class="bookmark_logo"><img src="images/bookmark_logo.png"></h1> -->
              <h1 class="book_mark">TRAVELBOOKMARK</h1>
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
      </div>
   </div>
</article>
<?php get_footer(); ?>