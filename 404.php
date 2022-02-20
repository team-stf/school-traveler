<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single/single.css">
<style>
    body {
			padding-top: 50px;
            letter-spacing:0em;
    }

		.main {
			padding: 40px 5px;
      
            background-color: none;
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
    .t404{
        font-size:23px
    }
	</style>
<body>



    <div class="container-fluid">
      <div class="main">
      <img class="none" src="<?php echo get_template_directory_uri(); ?>/images/amidc1.svg">
      <div class="article-info">
            
            <h1 class="t404">ページが見つかりませんでした</h1>
            <hr>
        </div>
        <div class="honbun">
        <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
        <p class="error_url"><span><?php echo get_pagenum_link(); ?></span></p>
        <br>
        </div>
        <div class="text-right">
          <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">閉じる</a>
        </div>
      </div>
    </div>
</body>