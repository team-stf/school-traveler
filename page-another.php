<?php get_header(); ?>
<style> 
         .announce{
            letter-spacing: 0em; //スタイル適応
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
        .naka{
          padding:0px;
        }
        #title{
          color:black;
          font-size:30px;
          text-decoration: underline
        }
        #title2{
          color:black;
          font-size:10px;
        }
        #return{
            color: blue;
        }


      </style>
<?php
global $post;
$args = array( 'posts_per_page' => 100 );
$myposts = get_posts( $args );
?>
<h1>全てのお知らせ</h1>
<?php
foreach( $myposts as $post ) {
   setup_postdata($post);
?>
    <div class="naka">
        <!-- カテゴリー --> <?php $this_categories = get_the_category();if ( $this_categories ) {$this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );$this_category_name  = $this_categories[0]->name; echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>';}?>
        <!-- タイトル --><a href="<?php the_permalink(); ?>" id="title"><?php the_title(); ?></a>  <!-- タイトル表示 -->
      
        <p>
        <spawn>投稿日: <?php the_time('n月j日'); ?> @ <?php the_time('G:i'); ?> 
        </p>
        <hr>
    </div>
<?php
}
wp_reset_postdata();
?>
<div class="maxview"><a class="btn btn-primary w-100 mt-2" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">ホームに戻る</a></div>