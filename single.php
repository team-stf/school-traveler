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

<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article-content' ); ?>>
  <div class="article-info">
    <!--カテゴリ取得-->
    <?php if(has_category() ): ?>
    <span class="cat-data">
      <!-- カテゴリー表示 --> <?php $this_categories = get_the_category();if ( $this_categories ) {$this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );$this_category_name  = $this_categories[0]->name; echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';}?>
    </span>
    <?php endif; ?>
    <!--投稿日を取得-->
    <span class="article-date">
      <i class="far fa-clock"></i>
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
    <!--著者を取得-->
  </div>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <!--アイキャッチ取得-->
  <div class="article-img">
    <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
  </div>
  <!--本文取得-->
  <?php the_content(); ?>
  </div>
</article>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="return">戻る</a>
<?php endif; ?>