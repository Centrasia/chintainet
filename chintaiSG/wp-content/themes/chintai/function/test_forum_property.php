<?php
/**
 * testお部屋・物件掲示板投稿処理
*/
global $test_forum_property_error;
$test_forum_property_error = array();
	 
function _my_test_post_property(){
	global $test_forum_property_error;
    if(is_page('test_post_property') && isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'test_post_property')){
		
		//バリデートチェック
		if(!isset($_POST['title']) || empty($_POST['title'])){
			$test_forum_property_error[] = 'スレッド名が空白です。';
		}
		if(!isset($_POST['content']) || empty($_POST['content'])){
			$test_forum_property_error[] = '本文が空です。';
		}
		if(!isset($_POST['property_cat']) || empty($_POST['property_cat']) ){
			$test_forum_property_error[] = '目的を選択してください。';
		}
		if(!isset($_POST['property_area']) || empty($_POST['property_area']) ){
			$test_forum_property_error[] = 'エリアを選択して下さい。';
		}
		if(!isset($_POST['property_type']) || empty($_POST['property_type']) ){
			$test_forum_property_error[] = '物件タイプを選択して下さい。';
		}
		if(!isset($_POST['property_madori']) || empty($_POST['property_madori']) ){
			$test_forum_property_error[] = '間取りタイプを選択して下さい。';
		}
		if(!isset($_POST['property_pay']) || empty($_POST['property_pay']) ){
			$test_forum_property_error[] = '家賃が空です。';
		}
		 //エラーが無かったら投稿を追加
		if(empty($test_forum_property_error)){
			$id = wp_insert_post(array(
				'post_title' => (string)$_POST['title'],
				'post_content' => (string)$_POST['content'],
				'post_status' => 'publish',
				'post_author' => get_current_user_id(),
				'post_type' => 'forum_property',
			), true);

 print_r($_POST);

 print_r($id);
 print_r($_FILE);
 echo("<pre>");
//print_r(ini_get_all());
 echo("</pre>");
 // ini_set('open_basedir', '1');
 // echo ini_get('open_basedir');
 // ini_set('upload_tmp_dir', '/post_property/');
 // echo ini_get('upload_tmp_dir');

 //exit;
// echo $_FILE['propety_image01']["name"];
			//画像を投稿サムネイルに。
			$a = set_post_thumbnail( $id, $_FILE['propety_image01']["name"]);
			//画像に投稿を関連づける
			//wp_update_post( array('ID' =>$_FILE['propety_image01'],'post_parent' => $id ) );

			if(!is_wp_error($id)){
				//カスタムフィールド追加
				update_post_meta($id, 'property_cat', $_POST['property_cat']);
				update_post_meta($id, 'property_area', $_POST['property_area']);
				update_post_meta($id, 'property_type', $_POST['property_type']);
				update_post_meta($id, 'property_madori', $_POST['property_madori']);
				update_post_meta($id, 'property_pay', $_POST['property_pay']);
				//update_post_meta($id, 'propety_image01', $_FILE['propety_image01']);
				$attachment_id = insert_attachment('propety_image01', $id);
				//ページを移動
				header('Location: '.get_permalink($id));
				die();
			} else {
				$test_forum_property_error[] = 'エラーが発生しました'.$id->get_error_message();
			}
		}
    }
}
/**
 * スレッド作成画面でエラーがあれば表示
 * @global array $test_forum_property_error
 */
function show_test_property_error(){
	global $test_forum_property_error;
	if(!empty($test_forum_property_error)){
		echo '<div class="error_box">';
		echo '<h4 class="error_title">未入力項目があります。</h4>';
		echo '<ul class="error_list"><li>';
		echo implode('</li><li>', $test_forum_property_error);
		echo '</ul>';
		echo '</div>';
	}
}

add_action('template_redirect', '_my_test_post_property');

