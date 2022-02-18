<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <meta name="robots" content="noindex,nofollow">
   <title>愛工大名電修学旅行WEB</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/schedule.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loader.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fotter.css">
   <link href='https://fonts.googleapis.com/css?family=Kosugi' rel="stylesheet">
   


   <script src="main.js"></script>
   <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
   <!--ハンバーガー-->
   <script>
      $(function() {
    const hum = $('#hamburger, .close')
    const nav = $('.sp-nav')
    hum.on('click', function(){
       nav.toggleClass('toggle');
    });
 });

  // 動きのきっかけの起点となるアニメーションの名前を定義
  function fadeAnime(){

   // ふわっ
   $('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
   var elemPos = $(this).offset().top-50;//要素より、50px上の
   var scroll = $(window).scrollTop();
   var windowHeight = $(window).height();
   if (scroll >= elemPos - windowHeight){
   $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
   }
   });
   }

   // 画面をスクロールをしたら動かしたい場合の記述
   $(window).scroll(function (){
   fadeAnime();/* アニメーション用の関数を呼ぶ*/
   });// ここまで画面をスクロールをしたら動かしたい場合の記述

   // 画面が読み込まれたらすぐに動かしたい場合の記述
   $(window).on('load', function(){
   fadeAnime();/* アニメーション用の関数を呼ぶ*/
   });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
   </script>
   <!--スケジュール-->
   <script>
      $(function(){
    $('#selectDay').change(function () {
      //選択したoptionのvalueを取得
      var val = $(this).val();
      //先頭に#を付けてvalueの値をidに変換
      var selectPhotoId = '#' + val;
      //一度すべてのブロックを非表示にする
      $('ul li').hide();
      //選択したブロックのみを表示
      $(selectPhotoId).show();
    });
  });
  </script>
   <script type="text/javascript">
   $(function() {
       var height=$("#header").height();
       $("body").css("margin-top", height + 64);//10pxだけ余裕をもたせる
   });
   </script>


   <!-- <script>
      $(window).on('load',function(){
 $("#loader-bg").delay(1000).fadeOut('slow');
 //ローディング画面を3秒（3000ms）待機してからフェードアウト
});
   </script> -->

   <script>
$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem('access')) {
      /*
        2回目以降アクセス時の処理
      */
      $("#loader-bg").addClass('is-active');
    } else {
      $(window).on('load',function(){
 $("#loader-bg").delay(300).fadeOut('slow');
 //ローディング画面を3秒（3000ms）待機してからフェードアウト
});
    }
  }
  webStorage();
});
   </script>
   <script>
      $('.accordion').click(function () {
    $(this).next().slideToggle(300);
});

   </script>
   <!--部屋割り-->
<!-- headue -->
   <?php wp_head(); ?>
</head>

<header style="z-index: 100;">
   <a class="shiori" href="book"><p>TRAVELBOOK</p></a>
   <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-seikou.svg"></a>

</header>