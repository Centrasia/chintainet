<?php
/**
 * 総合掲示板処理
*/
global $forum_community_error;
$forum_community_error = array();
	 
function _my_post_community(){
	global $forum_community_error;
    if(is_page('post_community') && isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'post_community')){
		
		//バリデートチェック
		if(!isset($_POST['title']) || empty($_POST['title'])){
			$forum_community_error[] = 'スレッド名が空白です。';
		}
		if(!isset($_POST['content']) || empty($_POST['content'])){
			$forum_community_error[] = '本文が空です。';
		}
		if(!isset($_POST['community_cat']) || empty($_POST['community_cat']) ){
			$forum_community_error[] = '目的を選択してください。';
		}
		 //エラーが無かったら投稿を追加
		if(empty($forum_community_error)){
			$id = wp_insert_post(array(
				'post_title' => (string)$_POST['title'],
				'post_content' => (string)$_POST['content'],
				'post_status' => 'publish',
				'post_author' => get_current_user_id(),
				'post_type' => 'forum_community',
			), true);
	
			if(!is_wp_error($id)){
				//カスタムフィールド追加
				update_post_meta($id, 'community_cat', $_POST['community_cat']);

				//ページを移動
				header('Location: '.get_permalink($id));
				die();
			} else {
				$forum_community_error[] = 'エラーが発生しました'.$id->get_error_message();
			}
		}
    }
}
/**
 * スレッド作成画面でエラーがあれば表示
 * @global array $forum_community_error
 */
function show_community_error(){
	global $forum_community_error;
	if(!empty($forum_community_error)){
		echo '<div class="error_box">';
		echo '<h4 class="error_title">未入力項目があります。</h4>';
		echo '<ul class="error_list"><li>';
		echo implode('</li><li>', $forum_community_error);
		echo '</ul>';
		echo '</div>';
	}
}

add_action('template_redirect', '_my_post_community');

