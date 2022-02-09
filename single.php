<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/single.css">
<?php if(have_posts()): the_post(); ?>
<div class="bs-component">
  <div class="jumbotron">
    <article <?php post_class( 'article-content' ); ?>>
      <div class="article-info">
        <?php if(has_category() ): ?>
        <span class="cat-data">
          <!-- カテゴリー表示 --> <?php $this_categories = get_the_category();if ( $this_categories ) {$this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );$this_category_name  = $this_categories[0]->name; echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';}?>
        </span>

        <?php endif; ?>



      </div>

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
</div>
<?php endif; ?>