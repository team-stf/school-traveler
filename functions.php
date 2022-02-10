<?php

//ダッシュボードにある項目を消す
function remove_dashboard_widget() {
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); //サイトヘルスステータス
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); //概要
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); //アクティビティ
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); //クイックドラフト
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); //WordPressニュース
    remove_action( 'welcome_panel', 'wp_welcome_panel' ); //ようこそ
  }
  add_action('wp_dashboard_setup', 'remove_dashboard_widget' );

  //編集者消す
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
    if( current_user_can( 'editor' ) ){
    remove_menu_page( 'index.php' ); //ダッシュボード
    //remove_menu_page( 'edit.php' ); //投稿メニュー
    remove_menu_page( 'upload.php' ); //メディア

    remove_menu_page( 'edit-comments.php' ); //コメントメニュー
    remove_menu_page( 'themes.php' ); //外観メニュー
    remove_menu_page( 'plugins.php' ); //プラグインメニュー
    remove_menu_page( 'tools.php' ); //ツールメニュー
    remove_menu_page( 'options-general.php' ); //設定メニュー
    remove_menu_page( 'profile.php' ); //設定メニュー
    }
}






// オリジナルウィジェットを追加
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'トラブル、不具合があった場合', 'dashboard_text');
}
function dashboard_text() {
    $html = '<p style="color: #d73a49;">トラブルなどは J2A 39 若松駿 J2A 30 松田海人 もしくは、中山先生まで。</p>';
    echo $html;
}


/* 管理画面にオリジナルメニューを追加する */
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
    add_menu_page( '投稿方法', '投稿方法',
    'manage_options', 'custompage', 'my_custom_menu_page', '', 6 ); 

    add_menu_page( '不具合など', '不具合など',
    'manage_options', 'custompage2', 'my_custom_menu_page2', '', 80 ); 
}
function my_custom_menu_page(){
    echo "<h2>オリジナルメニューページ</h2>";   
    echo "ここに自由にメニューを作成できます。";  
}
function my_custom_menu_page2(){
    echo "<h2>不具合など</h2>";   
    echo "トラブルなどは J2A 39 若松駿 J2A 30 松田海人 もしくは、中山先生まで。";  
}

add_action('admin_menu', 'custom_menu_page');
function custom_menu_page()
{
  add_menu_page('共通設定画面', '共通設定', 'manage_options', 'custom_menu_page', 'add_custom_menu_page', 'dashicons-admin-generic', 4);
}
function add_custom_menu_page()
{
?>
<div class="wrap">
<h2>共通設定画面</h2>
</div>
<?php
}

