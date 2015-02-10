<?php
/**
  * Template Name: 総合掲示板投稿フォーム
*/
	 get_header();
;?>
 
<div id="contents" class="page_area post_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div> 
         <div class="content_inner">
           <h2>総合掲示板</h2>
           <?php if(is_user_logged_in()): /*ログイン確認*/ ?>
           <h3>スレッドを追加する</h3>
            <form action="<?php the_permalink();?>" method="post">
        	<?php wp_nonce_field('post_community'); ?>
			<?php show_community_error(); ?>
            <table class="form-table">
            <tbody>
            <tr>
                <th><label for="title">スレッド名 <span class="att">※</span></label></th>
                <td><input id="title" type="text" name="title" value="<?php echo $_POST['title'];?>" /></td>
            </tr>
            <tr>
                <th><label for="content">本文 <span class="att">※</span></label></th>
                <td><textarea id="content" name="content"><?php echo $_POST['content'];?></textarea></td>
            </tr>
            <tr>
            	<th>目的 <span class="att">※</span></th>
            	<td>
                <ul>
                	<li><label><input id="community_cat1" type="checkbox" name="community_cat[]" value="売ります" <?php if( 売ります === $_POST['community_cat']){echo 'checked'; };?>>売ります</label></li>
                    <li><label><input id="community_cat1" type="checkbox" name="community_cat[]" value="あげます" <?php if( あげます === $_POST['community_cat']){echo 'checked'; };?>>あげます</label></li>
                    <li><label><input id="community_cat2" type="checkbox" name="community_cat[]" value="仲間募集" <?php if( 仲間募集 === $_POST['community_cat']){echo 'checked'; };?>>仲間募集</label></li>
                    <li><label><input id="community_cat3" type="checkbox" name="community_cat[]" value="イベント" <?php if( イベント === $_POST['community_cat']){echo 'checked'; };?>>イベント</label></li>
                    <li><label><input id="community_cat3" type="checkbox" name="community_cat[]" value="セミナー" <?php if( セミナー === $_POST['community_cat']){echo 'checked'; };?>>セミナー</label></li>
                    <li><label><input id="community_cat4" type="checkbox" name="community_cat[]" value="育児" <?php if( 育児 === $_POST['community_cat']){echo 'checked'; };?>>育児</label></li>
                    <li><label><input id="community_cat4" type="checkbox" name="community_cat[]" value="ママ友募集" <?php if( ママ友募集 === $_POST['community_cat']){echo 'checked'; };?>>ママ友募集</label></li>
                    <li><label><input id="community_cat5" type="checkbox" name="community_cat[]" value="レッスン" <?php if( レッスン === $_POST['community_cat']){echo 'checked'; };?>>レッスン</label></li>
                    <li><label><input id="community_cat6" type="checkbox" name="community_cat[]" value="キャンペーン" <?php if( キャンペーン === $_POST['community_cat']){echo 'checked'; };?>>キャンペーン</label></li>
                    <li><label><input id="community_cat7" type="checkbox" name="community_cat[]" value="クーポン" <?php if( クーポン === $_POST['community_cat']){echo 'checked'; };?>>クーポン</label></li>
                    <li><label><input id="community_cat8" type="checkbox" name="community_cat[]" value="口コミ" <?php if( 口コミ === $_POST['community_cat']){echo 'checked'; };?>>口コミ</label></li>
                    <li><label><input id="community_cat9" type="checkbox" name="community_cat[]" value="Q＆A" <?php if( Q＆A === $_POST['community_cat']){echo 'checked'; };?>>Q＆A</label></li>
                    <li><label><input id="community_cat10" type="checkbox" name="community_cat[]" value="その他" <?php if( その他 === $_POST['community_cat']){echo 'checked'; };?>>その他</label></li>
                </ul>
                </td>
        	</tr>
            
            </tbody>
            </table>
            <p class="submit">
            <input type="submit" value="投稿する" />
            <input type="reset" value="リセット" />
            
            </p>
            </form>
         <?php else:?>
         	新規スレッド作成にはログインする必要があります。
         <?php endif;?>
        </div><!-- #content -->
        </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>