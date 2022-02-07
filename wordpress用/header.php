<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <meta name="robots" content="noindex,nofollow">
   <title>OKINAWATEST1</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/schedule.css">
   


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
  <!-- <script type="text/javascript">
   $(function() {
       var height=$("#header").height();
       $("body").css("margin-top", height + 7);//10pxだけ余裕をもたせる
   });
   </script> -->
   <?php wp_head(); ?>
</head>