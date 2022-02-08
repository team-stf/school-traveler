<!-- 404.php -->
<?php get_header(); ?>
<style>
    .error-404{
        padding:10px 30px;
        font-size: 20px;
    }
    a{
        color:black;
    }
</style>
<div class="error-404">
    <img class="none" src="<?php echo get_template_directory_uri(); ?>/images/w-amidc.png" width="500" height="180"></var>
    <h1>404 Not Found（ページが見つかりませんでした）</h1>
    <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
    <p class="error_url"><span><?php echo get_pagenum_link(); ?></span></p>
    <br>
  <h1><a href="<?php echo home_url(); ?>"> ホームに戻る</a></h1>
</div>