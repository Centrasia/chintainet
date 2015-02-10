<?php
/**
 * お部屋・物件掲示板投稿処理
*/
global $forum_property_error;
$forum_property_error = array();
	 
function _my_post_property(){
	global $forum_property_error;
    if(is_page('post_property') && isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'post_property')){
		
		//バリデートチェック
		if(!isset($_POST['title']) || empty($_POST['title'])){
			$forum_property_error[] = 'スレッド名が空白です。';
		}
		if(!isset($_POST['content']) || empty($_POST['content'])){
			$forum_property_error[] = '本文が空です。';
		}
		if(!isset($_POST['property_cat']) || empty($_POST['property_cat']) ){
			$forum_property_error[] = '目的を選択してください。';
		}
		if(!isset($_POST['property_area']) || empty($_POST['property_area']) ){
			$forum_property_error[] = 'エリアを選択して下さい。';
		}
		if(!isset($_POST['property_type']) || empty($_POST['property_type']) ){
			$forum_property_error[] = '物件タイプを選択して下さい。';
		}
		if(!isset($_POST['property_madori']) || empty($_POST['property_madori']) ){
			$forum_property_error[] = '間取りタイプを選択して下さい。';
		}
		if(!isset($_POST['property_pay']) || empty($_POST['property_pay']) ){
			$forum_property_error[] = '家賃が空です。';
		}
		 //エラーが無かったら投稿を追加
		if(empty($forum_property_error)){
			$id = wp_insert_post(array(
				'post_title' => (string)$_POST['title'],
				'post_content' => (string)$_POST['content'],
				'post_status' => 'publish',
				'post_author' => get_current_user_id(),
				'post_type' => 'forum_property',
			), true);

			function insert_attachment($file_handler,$post_id,$setthumb='false') 
			{
			    // check to make sure its a successful upload
			    if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();
			     
			    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
			    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
			    require_once(ABSPATH . "wp-admin" . '/includes/media.php');
			    $attach_id = media_handle_upload( $file_handler, $post_id );
			    if ($setthumb){
			        update_post_meta($post_id,$file_handler,$attach_id);
			    return $attach_id;
				}
			}

			if(!is_wp_error($id)){
				//カスタムフィールド追加
				update_post_meta($id, 'property_cat', $_POST['property_cat']);
				update_post_meta($id, 'property_area', $_POST['property_area']);
				update_post_meta($id, 'property_type', $_POST['property_type']);
				update_post_meta($id, 'property_madori', $_POST['property_madori']);
				update_post_meta($id, 'property_pay', $_POST['property_pay']);
				for($i=1;$i<5;$i++){
					if($_FILES['propety_image0'.$i]['size'] > 0)
					{
					    $attachment_id = insert_attachment('propety_image0'.$i, $id);
					}	
				}			
				//ページを移動
				header('Location: '.get_permalink($id));
				die();
			} else {
				$forum_property_error[] = 'エラーが発生しました'.$id->get_error_message();
			}
		}
    }
}
/**
 * スレッド作成画面でエラーがあれば表示
 * @global array $forum_property_error
 */
function show_property_error(){
	global $forum_property_error;
	if(!empty($forum_property_error)){
		echo '<div class="error_box">';
		echo '<h4 class="error_title">未入力項目があります。</h4>';
		echo '<ul class="error_list"><li>';
		echo implode('</li><li>', $forum_property_error);
		echo '</ul>';
		echo '</div>';
	}
}

add_action('template_redirect', '_my_post_property');

