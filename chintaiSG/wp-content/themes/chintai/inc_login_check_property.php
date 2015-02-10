<?php /*
	フォーラムログインチェック
	未ログインの場合はユーザー登録ボタンを表示
*/;?>
<div id="login_link_area" class="cf">
<?php if(is_user_logged_in()): ?>
	<a href="<?php echo get_page_link(203); ?>" title="スレッドを追加する" class="btn_blue">投稿する</a>
<?php else:?>
<p>スレッドを追加するにはログインする必要があります。<br>
<a href="<?php echo get_page_link(6); ?>" title="ログイン" class="btn_blue">ログイン</a></p>
<?php endif;?>
</div>