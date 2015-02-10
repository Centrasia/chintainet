<?php
//　wp-head　不要項目削除
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' ); 

// 管理画面サイドバーメニュー非表示 
function remove_menus () {
    global $menu;
    //unset($menu[2]);//ダッシュボード
    //unset($menu[4]);//メニューの線1
    //unset($menu[5]);//投稿
    //unset($menu[10]);//メディア
    unset($menu[15]);//リンク
    //unset($menu[20]);//ページ
    //unset($menu[25]);//コメント
    //unset($menu[59]);//メニューの線2
    //unset($menu[60]);//テーマ
    //unset($menu[65]);//プラグイン
    //unset($menu[70]);//プロフィール
    //unset($menu[75]);//ツール
    //unset($menu[80]);//設定
    //unset($menu[90]);//メニューの線3
}
add_action('admin_menu', 'remove_menus');

//アドミニストレーター以外の管理メニュー非表示
function my_function_admin_bar($content) {
  return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/* メニュー */

register_nav_menu( 'footer-menu','footer-menu');

/* メニューカスタマイズ */
/*
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
*/
/*
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
*/
/*
function my_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array( 'current-menu-item' )) : '';
}
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item){
	return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->attr_title}</span><", $item_output);
}
*/

/* エディターcss */
add_editor_style('editor-style.css');

/* アイキャッチ設定 */
add_theme_support( 'post-thumbnails' );

//ピンバック停止
function no_self_ping(&$links)
{
    $home = get_option('home');
    foreach ($links as $l => $link) {
        if (0 === strpos($link, $home)) unset($links[$l]);
    }
}
add_action('pre_ping', 'no_self_ping');

//プロフ不要項目削除
function hide_profile_fields($contactmethods)
{
    unset($contactmethods['aim']);
    unset($contactmethods['jabber']);
    unset($contactmethods['yim']);
    return $contactmethods;
}
add_filter('user_contactmethods', 'hide_profile_fields');

//ファビコン表示
/*function blog_favicon()
{
    echo '<link rel="icon" type="image/x-icon" href="' . get_bloginfo('stylesheet_directory') . '/images/favicon.ico" />' . "\n";
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_bloginfo('stylesheet_directory') . '/images/favicon.ico" />' . "\n";
}
add_action('wp_head', 'blog_favicon');*/


/* ログイン変更 */
function custom_login_logo() { 
echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/common/login_logo.png) 50% 50% no-repeat !important; width:260px !important; height: 67px !important; }</style>'; 
} 
add_action('login_head', 'custom_login_logo'); 

// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {
 global $wp_admin_bar;
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar',
 'title' => __('ログアウト'),
 'href' => wp_logout_url()
 ));
 }
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');

// フッターWordPressリンクを非表示に
function custom_admin_footer() {
 //echo '<a href="mailto:xxx@zzz">お問い合わせ</a>';
 }
add_filter('admin_footer_text', 'custom_admin_footer');

// エディタからh1を削除
function custom_editor_settings( $initArray ){
	$initArray['theme_advanced_blockformats'] = 'p,address,pre,code,h2,h3,h4,h5,h6';
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

/* custom contactform7 */
/* メール確認
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                $result['valid'] = false;
                $result['reason'][$name] = 'メールアドレスが一致しません';
            }
        }
    }
    return $result;
}*/
/*ウィジェット */
	register_sidebar( array(
		'name' => 'サイドバー',
		'id' => 'sidebar1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => 'フッターバナー',
		'id' => 'footer-banner',
		'before_widget' => '<li>',
		'after_widget' => "</li>",
		'before_title' => '<span>',
		'after_title' => '</span>',
	) );
	


//　ショートコード　ファイルインクルード　[myphp file="file-name"]
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}  

add_shortcode('myphp', 'Include_my_php');



//カスタムフィールドのチェックボックスの複数の値を配列で返す
function get_array_cf_checkbox( $postID , $filed ) {
  $cf_tmp = get_post_meta($postID, $filed );
  return $cf_tmp[0];
}
 
//カスタムフィールドのチェックボックスの値をリストで取得する
function get_list_cf_checkbox( $postID , $filed ) {
  $cf_tmp = get_array_cf_checkbox($postID, $filed );
  $out = "<ul class=\"ag_st\">";

  foreach ((array)$cf_tmp as $v) {
      $out .= '<li>' . $v . '</li>';
  }
  $out .= "</ul>";
  return $out;
}

//カスタムポスト表示件数設定（アーカイブページ）

add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts( $query ) {
	if ( is_admin() || ! $query -> is_main_query() ) return;
	//エージェント
	if ( $query -> is_archive() && get_query_var( 'post_type' ) === 'agent' ) {
		$query -> set( 'posts_per_page', '10' );
	}
	//コンドミニアム
	if ( $query -> is_archive() && get_query_var( 'post_type' ) === 'property' ) {
		$query -> set( 'posts_per_page', '10' );
	}
	//お部屋・物件掲示板
	if ( $query -> is_archive() && get_query_var( 'post_type' ) === 'forum_property' ) {
		$query -> set( 'posts_per_page', '20' );
	}
	//募集掲示板
	if ( $query -> is_archive() && get_query_var( 'post_type' ) === 'forum_recruit' ) {
		$query -> set( 'posts_per_page', '20' );
	}
}


// オリジナル function comment_form in /wp-includes/comment-template.php


add_filter('comment_form_defaults', 'custom_comment_form');

function custom_comment_form($args) {
	$args['title_reply'] = '返信をどうぞ';
	$args['logged_in_as'] = '';
	$args['must_log_in'] = '返信を行うには<a href="/user-login/">ログイン</a>をする必要があります。';
	//$args['comment_notes_before'] = '<p class="comment-notes">メールアドレスは公開されませんのでご安心ください。<br />また、<span class="required">*</span> が付いている欄は必須項目となりますので、必ずご記入をお願いします。</p>';
	$args['comment_notes_after'] = '<p class="form-allowed-tags">内容に問題なければ、下記の「送信」ボタンを押してください。</p>';
	$args['label_submit'] = '送信';
	return $args;
}

//投稿用ファイルを読み込む
get_template_part('function/forum_property');
get_template_part('function/forum_recruit');
get_template_part('function/forum_community');


//検索カスタム
function custom_search($search, $wp_query  ) {
    //query['s']があったら検索ページ表示
    if ( isset($wp_query->query['s']) ) $wp_query->is_search = true;
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);

// Delete post 保留
// function delete_post(){
//     global $post;
//     $deletepostlink= add_query_arg( 'frontend', 'true', get_delete_post_link( get_the_ID() ) );
//     if (current_user_can('edit_post', $post->ID)) {
//         echo       '<span><a class="post-delete-link" onclick="return confirm(\'¿Are you sure to delete?\')" href="'.$deletepostlink.'">Borrar</a></span>';
//     }
// }

// //Redirect after delete post in frontend
// add_action('trashed_post','trash_redirection_frontend');
// function trash_redirection_frontend($post_id) {
//     if ( filter_input( INPUT_GET, 'frontend', FILTER_VALIDATE_BOOLEAN ) ) {
//         wp_redirect( get_option('siteurl') );
//         exit;
//     }
// }


