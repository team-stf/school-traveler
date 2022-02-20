<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  






<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/single.css">
<style>
		body {
			padding-top: 50px;
			background-color: #D3DEDC;
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
    .title{
      color:#FC4F4F;
    }
	</style>
  </head>
<body>



    <?php if(have_posts()): the_post(); ?>
    <div class="container-fluid">
      <div class="main">
      <div class="article-info">
            <h1 class="title"><?php the_title(); ?></h1>
              <?php if(get_the_time('Y/m/d/G:i') != get_the_modified_date('Y/m/d/G:i')):?>
                  更新 : <?php the_modified_date('m/d') ?> <?php the_modified_date('G:i'); ?></p> 
              <?php endif;?>
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