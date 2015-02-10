<?php /*
	フォーラムログインチェック
	未ログインの場合はユーザー登録ボタンを表示
*/;?>

<?php if(is_user_logged_in()): ?>
<div id="login_member_area" class="cf">
	<?php $user_id = get_current_user_id();?>
    <div class="logind">
        <div class="w7">
        <h3>ようこそ <?php echo $user_name  = the_author_meta( nickname ,$user_id); ?> さん</h3>
        </div>
        <div class="w5">
        	<ul>
        		<li><a href="<?php echo the_permalink(); ?>/?a=logout">ログアウト</a></li>
            	<li><a href="<?php bloginfo('url');?>/post_list/">投稿スレッド削除</a></li>
       			<li><a href="<?php echo get_page_link(130); ?>">登録情報変更</a></li>
            </ul>
        </div>
    </div>
<?php else:?>
<div id="register_link_area" class="cf">
	<div class="w7h mr15">
    <?php if (( get_post_type() == 'forum_property')): ?>
	<h3>お部屋・物件紹介掲示板への投稿には登録が必要です。</h3>
    <?php elseif (( get_post_type() == 'forum_recruit')):?>
    <h3>求人掲示板への投稿には登録が必要です。</h3>
    <?php elseif (( get_post_type() == 'forum_community')):?>
    <h3>総合掲示板への投稿には登録が必要です。</h3>
    <?php endif?>
    <p>皆さんが安全に利用できるよう、掲載をご希望される場合は右のバナーから登録をお願いします。</p>
    </div>
    <div class="w4">
	<a href="<?php echo get_page_link(2); ?>" class="btn_blue">新規登録</a>
    </div>
<?php endif;?>
</div>