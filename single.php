<style>
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
         #return{
             color: blue;
         }
</style>

<?php get_header(); ?>


      <div class="main">
          <!--タイトルa-->          
          <h5><?php the_title(); ?></h5>
                  <!--投稿日を取得-->
        <span class="article-date">
            <i class="far fa-clock"></i>
            <?php the_time('n月j日'); ?> <?php the_time('G:i'); ?>
        </span>
        <hr>
          <!--本文取得-->
          <?php the_content(); ?>
      </div>
        <div class="text-right">
            <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">閉じる</a>
        </div>
    </article>
  </div>
</article>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="return">戻る</a>
<?php endif; ?>