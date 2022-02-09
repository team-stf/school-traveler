<style>
    @charset "utf-8";
    * {
    box-sizing: border-box;
    }
    a{
        color blue;
    }
    #return{
        text-align: center;
    }
    body {
    margin: 0;
    padding: 0;
    font-family: "Hiragino Kaku Gothic Pro", "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", "Helvetica Neue", Helvetica, Arial, sans-serif;
    letter-spacing : 0.2em;
    width:1000px;
    }
    .footer {
    background: black;
    padding: 30px;
    text-align: center;
    width:auto;
    margin:right auto;
    margin:left auto;
    }
    .footer .copyright{
        text-align: center;
        color: white;
        font-size: 7px;
        font-family: sans-serif;
    }
    .kotei .container{
    max-width:1000px;
    margin:0px auto;
    padding:130px 20px;
    }
</style>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-style.css">
<section class="kotei">
  <div class="container">
    <div class="content">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
      <p><?php the_category(', '); ?></p>
      <p><?php the_content('Read more'); ?></p>
      
      <?php endwhile; endif; ?>
      
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="return">ホーム</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>​