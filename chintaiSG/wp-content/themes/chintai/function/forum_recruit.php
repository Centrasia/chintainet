<?php
/**
 * 求人募集掲示板
*/
global $forum_recruit_error;
$forum_recruit_error = array();

function _my_post_recruit(){
	global $forum_recruit_error;
    if(is_page('post_recruit') && isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'post_recruit')){
		
		//バリデートチェック
		if(!isset($_POST['title']) || empty($_POST['title'])){
			$forum_recruit_error[] = 'スレッド名が空白です。';
		}
		if(!isset($_POST['content']) || empty($_POST['content'])){
			$forum_recruit_error[] = '本文が空です。';
		}
		if(!isset($_POST['recruit_type']) || empty($_POST['recruit_type']) ){
			$forum_recruit_error[] = '求人種別を選択してください。';
		}
		if(!isset($_POST['recruit_compnay']) || empty($_POST['recruit_compnay']) ){
			$forum_recruit_error[] = '企業種別を選択してください。';
		}
		if(!isset($_POST['recruit_business']) || empty($_POST['recruit_business'])){
			$forum_recruit_error[] = '業種が空白です。';
		}
		if(!isset($_POST['recruit_job']) || empty($_POST['recruit_job'])){
			$forum_recruit_error[] = '職種が空白です。';
		}
		if(!isset($_POST['recruit_employment']) || empty($_POST['recruit_employment'])){
			$forum_recruit_error[] = '雇用体系を選択して下さい。';
		}
		if(!isset($_POST['recruit_area']) || empty($_POST['recruit_area']) ){
			$forum_recruit_error[] = '勤務エリアを選択して下さい。';
		}
		if(!isset($_POST['recruit_visa']) || empty($_POST['recruit_visa'])){
			$forum_recruit_error[] = 'ワーキングホリデービザの可否を選択して下さい。';
		}
		if(!isset($_POST['recruit_en']) || empty($_POST['recruit_en'])){
			$forum_recruit_error[] = '英語力を選択して下さい。';
		}
		if(!isset($_POST['recruit_name']) || empty($_POST['recruit_name'])){
			$forum_recruit_error[] = '会社名が空白です。';
		}
		if(!isset($_POST['recruit_tel']) || empty($_POST['recruit_tel'])){
			$forum_recruit_error[] = '連絡先電話番号が空白です。';
		}
		if ($_POST['recruit_hp']){
			if (!preg_match('/^(https?)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/', $_POST['recruit_hp'])){
       			 $forum_recruit_error[] = 'URLの形式が違います。';
			}
    	}
		 //エラーが無かったら投稿を追加
		if(empty($forum_recruit_error)){
			$id = wp_insert_post(array(
				'post_title' => (string)$_POST['title'],
				'post_content' => (string)$_POST['content'],
				'post_status' => 'publish',
				'post_author' => get_current_user_id(),
				'post_type' => 'forum_recruit',
			), true);
	
			if(!is_wp_error($id)){
				//カスタムフィールド追加
				update_post_meta($id, 'recruit_type', $_POST['recruit_type']);
				update_post_meta($id, 'recruit_compnay', $_POST['recruit_compnay']);
				update_post_meta($id, 'recruit_business', $_POST['recruit_business']);
				update_post_meta($id, 'recruit_job', $_POST['recruit_job']);
				update_post_meta($id, 'recruit_employment', $_POST['recruit_employment']);
				update_post_meta($id, 'recruit_area', $_POST['recruit_area']);
				update_post_meta($id, 'recruit_visa', $_POST['recruit_visa']);
				update_post_meta($id, 'recruit_en', $_POST['recruit_en']);
				update_post_meta($id, 'recruit_name', $_POST['recruit_name']);
				update_post_meta($id, 'recruit_tel', $_POST['recruit_tel']);
				update_post_meta($id, 'recruit_hp', $_POST['recruit_hp']);
				//ページを移動
				header('Location: '.get_permalink($id));
				die();
			} else {
				$forum_recruit_error[] = 'エラーが発生しました'.$id->get_error_message();
			}
		}
    }
}

/**
 * スレッド作成画面でエラーがあれば表示
 * @global array $forum_recruit_error
 */
function show_recruit_error(){
	global $forum_recruit_error;
	if(!empty($forum_recruit_error)){
		echo '<div class="error_box">';
		echo '<h4 class="error_title">未入力項目があります。</h4>';
		echo '<ul class="error_list"><li>';
		echo implode('</li><li>', $forum_recruit_error);
		echo '</ul>';
		echo '</div>';
	}
}

add_action('template_redirect', '_my_post_recruit');

