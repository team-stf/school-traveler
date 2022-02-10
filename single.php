<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/single.css">
<style>
		body {
			padding-top: 50px;
			background-color: lightgray;
      letter-spacing:0em;
		}

		.main {
			padding: 40px 15px;
      
    background-color: white;
		}
    p{
      margin-bottom: 0rem;
      font-size:1.2rem;
    }
    .container-fluid {
      margin-right: auto;
      margin-left: auto;
      max-width: 750px;
    }
	</style>
<body>



    <?php if(have_posts()): the_post(); ?>
    <div class="container-fluid">
      <div class="main">
      <div class="article-info">
        <?php if(has_category() ): ?>
        <span class="cat-data">
            <!-- カテゴリー表示 --> <?php $this_categories = get_the_category();if ( $this_categories ) {$this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );$this_category_name  = $this_categories[0]->name; echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';}?>
        </span>
        <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <p class="lead"><?php the_time('n月j日'); ?> <?php the_time('G:i'); ?></p>
            <hr>
        </div>
        <div class="honbun">
          <?php the_content(); ?>
        </div>
        <div class="text-right">
          <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">閉じる</a>
        </div>
      </div>
    </div>


    <?php endif; ?>
</body>