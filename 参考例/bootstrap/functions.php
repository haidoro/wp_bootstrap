<?php
// カスタムメニュー 
register_nav_menus(array( 
    'place_global' => 'グローバル',
     'place_footer' => 'フッター',));
/*アイキャッチ*/
add_theme_support('post-thumbnails');
add_image_size('thumbnail_top',360,360);

/* カスタム投稿タイプの追加 */
 add_action( 'init', 'create_post_type' );
 function create_post_type() {
   register_post_type( 'AI', /* post-type */
     array( 'labels' => array( 'name' => __( '人工知能' ),
     'singular_name' => __( '人工知能' ) ),
     'public' => true,
     'menu_position' =>5
     )
   );
 }

/*抜粋の文字数の変更*/
function my_length($length){
	return 150;
};
add_filter('excerpt_mblength','my_length');
function my_more($more){
	return '...';
};
add_filter('excerpt_more','my_more');
/*タクソノミーの追加*/
register_taxonomy(
    'AIcat', /* タクソノミーの名前 */
    'ai', /* AI投稿で設定する */
    array(
      'hierarchical' => true, /* 親子関係が必要なければ false */
      'update_count_callback' => '_update_post_term_count',
      'label' => '人工知能のカテゴリー',
      'singular_label' => '人工知能のカテゴリー',
      'public' => true,
      'show_ui' => true
    )
); 
/*jQuery stop*/
// add_action('wp_print_scripts','my_deregister_script',100);
// function my_deregister_script() {
// wp_deregister_script('jquery');
// }