<?php
/**
  * Template Name: 求人募集スレッド投稿フォーム
*/
	 get_header();
;?>
 
<div id="contents" class="page_area post_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div> 
         <div class="content_inner">
           <h2>求人募集掲示板</h2>
           <?php if(is_user_logged_in()): /*ログイン確認*/ ?>
           <h3>スレッドを追加する</h3>
            <form action="<?php the_permalink();?>" method="post">
        	<?php wp_nonce_field('post_recruit'); ?>
			<?php show_recruit_error(); ?>
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
            	<th>求人種別 <span class="att">※</span></th>
            	<td>
                <ul>
                	<li><label><input id="recruit_type1" type="radio" name="recruit_type" value="人材紹介・派遣" <?php if( 人材紹介・派遣 === $_POST['recruit_type']){echo 'checked'; };?>>人材紹介・派遣</label></li>
                    <li><label><input id="recruit_type2" type="radio" name="recruit_type" value="直接雇用" <?php if( 直接雇用 === $_POST['recruit_type']){echo 'checked'; };?>>直接雇用</label></li>
                </ul>
                </td>
        	</tr>
            <tr>
            	<th>企業種別 <span class="att">※</span></th>
            	<td>
                <ul>
                	<li><label><input id="recruit_compnay1" type="radio" name="recruit_compnay" value="日系企業" <?php if( 日系企業	 === $_POST['recruit_compnay']){echo 'checked'; };?>>日系企業</label></li>
                    <li><label><input id="recruit_compnay2" type="radio" name="recruit_compnay" value="ローカル企業" <?php if( ローカル企業 === $_POST['recruit_compnay']){echo 'checked'; };?>>ローカル企業</label></li>
                    <li><label><input id="recruit_compnay3" type="radio" name="recruit_compnay" value="外資系企業" <?php if( 外資系企業 === $_POST['recruit_compnay']){echo 'checked'; };?>>外資系企業</label></li>
                    <li><label><input id="recruit_compnay4" type="radio" name="recruit_compnay" value="その他" <?php if( その他 === $_POST['recruit_compnay']){echo 'checked'; };?>>その他</label></li>
                </ul>
                </td>
        	</tr>
            <tr>
                <th><label for="recruit_business">業種 <span class="att">※</span></label></th>
                <td><input id="title" type="text" name="recruit_business" value="<?php echo $_POST['recruit_business'];?>" /></td>
            </tr>
            <tr>
                <th><label for="recruit_job">職種 <span class="att">※</span></label></th>
                <td><input id="title" type="text" name="recruit_job" value="<?php echo $_POST['recruit_job'];?>" /></td>
            </tr>
            <tr>
                <th>雇用形態 <span class="att">※</span></th>
                <td class="post_recruit_check_area">
                <label><input type="checkbox" id="recruit_employment1" name="recruit_employment[]" value="正社員" <?php if(isset($_POST['recruit_employment'])) {if (in_array( '正社員',$_POST['recruit_employment'])){echo 'checked';}};?>>正社員</label>
                <label><input type="checkbox" id="recruit_employment2" name="recruit_employment[]" value="契約社員" <?php if(isset($_POST['recruit_employment'])) {if (in_array( '契約社員',$_POST['recruit_employment'])){echo 'checked';}};?>>契約社員</label>
                <label><input type="checkbox" id="recruit_employment3" name="recruit_employment[]" value="パート" <?php if(isset($_POST['recruit_employment'])) {if (in_array( 'パート',$_POST['recruit_employment'])){echo 'checked';}};?>>パート</label>
                <label><input type="checkbox" id="recruit_employment4" name="recruit_employment[]" value="短期雇用" <?php if(isset($_POST['recruit_employment'])) {if (in_array( '短期雇用',$_POST['recruit_employment'])){echo 'checked';}};?>>短期雇用</label>
                <label><input type="checkbox" id="recruit_employment5" name="recruit_employment[]" value="その他" <?php if(isset($_POST['recruit_employment'])) {if (in_array( 'その他',$_POST['recruit_employment'])){echo 'checked';}};?>>その他</label>
                </td>
            </tr>
            <tr>
                <th>勤務エリア <span class="att">※</span></th>
                <td class="post_recruit_check_area">
                <label><input type="checkbox" id="area1" name="recruit_area[]" value="イーストコート周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'イーストコート周辺',$_POST['recruit_area'])){echo 'checked';}};?>>イーストコート周辺</label>
                <label><input type="checkbox" id="area1" name="recruit_area[]" value="ラッフルズプレイス周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'ラッフルズプレイス周辺',$_POST['recruit_area'])){echo 'checked';}};?>>ラッフルズプレイス周辺</label>
                <label><input type="checkbox" id="area2" name="recruit_area[]" value="オーチャード周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'オーチャード周辺',$_POST['recruit_area'])){echo 'checked';}};?>>オーチャード周辺</label>
                <label><input type="checkbox" id="area3" name="recruit_area[]" value="クイーンズタウン周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'クイーンズタウン周辺',$_POST['recruit_area'])){echo 'checked';}};?>>クイーンズタウン周辺</label>
                <label><input type="checkbox" id="area4" name="recruit_area[]" value="ホランドロード周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'ホランドロード周辺',$_POST['recruit_area'])){echo 'checked';}};?>>ホランドロード周辺</label>
                <label><input type="checkbox" id="area5" name="recruit_area[]" value="バオーナビス周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'バオーナビス周辺',$_POST['recruit_area'])){echo 'checked';}};?>>バオーナビス周辺</label>
                <label><input type="checkbox" id="area6" name="recruit_area[]" value="クレメンティ周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'クレメンティ周辺',$_POST['recruit_area'])){echo 'checked';}};?>>クレメンティ周辺</label>
                <label><input type="checkbox" id="area7" name="recruit_area[]" value="ウエストコーストロード周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'ウエストコーストロード周辺',$_POST['recruit_area'])){echo 'checked';}};?>>ウエストコーストロード周辺</label>
                <label><input type="checkbox" id="area8" name="recruit_area[]" value="セラングーン周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'セラングーン周辺',$_POST['recruit_area'])){echo 'checked';}};?>>セラングーン周辺</label>
                <label><input type="checkbox" id="area9" name="recruit_area[]" value="ポンゴール周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'ポンゴール周辺',$_POST['recruit_area'])){echo 'checked';}};?>>ポンゴール周辺</label>
                <label><input type="checkbox" id="area10" name="recruit_area[]" value="トアパヨ周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'トアパヨ周辺',$_POST['recruit_area'])){echo 'checked';}};?>>トアパヨ周辺</label>
                <label><input type="checkbox" id="area11" name="recruit_area[]" value="アンモキオ周辺" <?php if(isset($_POST['recruit_area'])) {if (in_array( 'アンモキオ周辺',$_POST['recruit_area'])){echo 'checked';}};?>>アンモキオ周辺</label>
                </td>
            </tr>
            <tr>
            	<th>ワーキングホリデービザの可否 <span class="att">※</span></th>
            	<td>
                <ul class="short">
                	<li><label><input id="recruit_visa1" type="radio" name="recruit_visa" value="可" <?php if( 可 === $_POST['recruit_visa']){echo 'checked'; };?>>可</label></li>
                    <li><label><input id="recruit_visa1" type="radio" name="recruit_visa" value="不可" <?php if( 不可 === $_POST['recruit_visa']){echo 'checked'; };?>>不可</label></li>
                </ul>
                </td>
        	</tr>
            <tr>
            	<th>英語力 <span class="att">※</span></th>
            	<td>
                <select id="recruit_en" name="recruit_en">
                	<option value="">--選択してください--</option>
                	<option value="不問">不問</option>
                    <option value="意思疎通は可能なレベル">意思疎通は可能なレベル</option>
                    <option value="日常会話に困らないレベル">日常会話に困らないレベル</option>
                    <option value="ビジネス上使用できるレベル">ビジネス上使用できるレベル</option>
                    <option value="ネイティブ同等のレベル">ネイティブ同等のレベル</option>
                </select>
                </td>
        	</tr>
			<tr>
                <th><label for="recruit_name">会社名 <span class="att">※</span></label></th>
                <td><input id="title" type="text" name="recruit_name" value="<?php echo $_POST['recruit_name'];?>" /></td>
            </tr>
            <tr>
                <th><label for="recruit_tel">連絡先電話番号 <span class="att">※</span></label></th>
                <td><input id="title" type="text" name="recruit_tel" value="<?php echo $_POST['recruit_tel'];?>" /></td>
            </tr>
            <tr>
                <th><label for="recruit_hp">企業ホームページ</label></th>
                <td><input id="title" type="text" name="recruit_hp" value="<?php echo $_POST['recruit_hp'];?>" /></td>
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