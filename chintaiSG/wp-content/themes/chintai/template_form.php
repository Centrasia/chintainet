<?php
/**
  * Template Name: test投稿フォーム
*/
	 get_header();
;?>
 
<div id="contents" class="page_area post_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div> 
         <div class="content_inner">
           <h2>お部屋・物件掲示板</h2>
           <?php if(is_user_logged_in()): /*ログイン確認*/ ?>
           <h3>投稿を作成する</h3>
            <form action="#" method="post" enctype="multipart/form-data">
        	<?php wp_nonce_field('test_post_property'); ?>
			<?php show_test_property_error(); ?>
            <table class="form-table">
            <tbody>
            <tr>
                <th colspan="1"><label for="title">スレッド名 <span class="att">※</span></label></th>
                <td colspan="3"><input id="title" type="text" name="title" value="<?php echo $_POST['title'];?>" /></td>
            </tr>
            <tr>
                <th colspan="1"><label for="content">本文 <span class="att">※</span></label></th>
                <td colspan="3"><textarea id="content" name="content"><?php echo $_POST['content'];?></textarea></td>
            </tr>
            <tr>
            	<th colspan="1">目的 <span class="att">※</span></th>
            	<td colspan="3">
                <ul>
                	<li><label><input id="property_cat1" type="radio" name="property_cat" value="貸したい" <?php if( 貸したい === $_POST['property_cat']){echo 'checked'; };?>>貸したい</label></li>
                    <li><label><input id="property_cat2" type="radio" name="property_cat" value="借りたい" <?php if( 借りたい === $_POST['property_cat']){echo 'checked'; };?>>借りたい</label></li>
                </ul>
                </td>
        	</tr>
            <tr>
                <th colspan="1">エリア <span class="att">※</span></th>
                <td class="post_property_check_area" colspan="3">
                <label><input type="checkbox" id="area1" name="property_area[]" value="イーストコースト周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'イーストコースト周辺',$_POST['property_area'])){echo 'checked';}};?>>イーストコースト周辺</label>
                <label><input type="checkbox" id="area12" name="property_area[]" value="ラッフルズプレイス周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'ラッフルズプレイス周辺',$_POST['property_area'])){echo 'checked';}};?>>ラッフルズプレイス周辺</label>
                <label><input type="checkbox" id="area2" name="property_area[]" value="オーチャード周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'オーチャード周辺',$_POST['property_area'])){echo 'checked';}};?>>オーチャード周辺</label>
                <label><input type="checkbox" id="area3" name="property_area[]" value="クイーンズタウン周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'クイーンズタウン周辺',$_POST['property_area'])){echo 'checked';}};?>>クイーンズタウン周辺</label>
                <label><input type="checkbox" id="area4" name="property_area[]" value="ホランドロード周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'ホランドロード周辺',$_POST['property_area'])){echo 'checked';}};?>>ホランドロード周辺</label>
                <label><input type="checkbox" id="area5" name="property_area[]" value="バオーナビス周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'バオーナビス周辺',$_POST['property_area'])){echo 'checked';}};?>>バオーナビス周辺</label>
                <label><input type="checkbox" id="area6" name="property_area[]" value="クレメンティ周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'クレメンティ周辺',$_POST['property_area'])){echo 'checked';}};?>>クレメンティ周辺</label>
                <label><input type="checkbox" id="area7" name="property_area[]" value="ウエストコーストロード周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'ウエストコーストロード周辺',$_POST['property_area'])){echo 'checked';}};?>>ウエストコーストロード周辺</label>
                <label><input type="checkbox" id="area8" name="property_area[]" value="セラングーン周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'セラングーン周辺',$_POST['property_area'])){echo 'checked';}};?>>セラングーン周辺</label>
                <label><input type="checkbox" id="area9" name="property_area[]" value="ポンゴール周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'ポンゴール周辺',$_POST['property_area'])){echo 'checked';}};?>>ポンゴール周辺</label>
                <label><input type="checkbox" id="area10" name="property_area[]" value="トアパヨ周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'トアパヨ周辺',$_POST['property_area'])){echo 'checked';}};?>>トアパヨ周辺</label>
                <label><input type="checkbox" id="area11" name="property_area[]" value="アンモキオ周辺" <?php if(isset($_POST['property_area'])) {if (in_array( 'アンモキオ周辺',$_POST['property_area'])){echo 'checked';}};?>>アンモキオ周辺</label>
                </td>
            </tr>
            <tr>
                <th colspan="1">物件タイプ <span class="att">※</span></th>
                <td class="post_property_check_area" colspan="3">
                <label><input type="checkbox" id="type1" name="property_type[]" value="コンドミニアム／アパートメント" <?php if(isset($_POST['property_type'])) {if (in_array( 'コンドミニアム／アパートメント',$_POST['property_type'])){echo 'checked';}};?>>コンドミニアム／アパートメント</label>
                <label><input type="checkbox" id="type2" name="property_type[]" value="HDB" <?php if(isset($_POST['property_type'])) {if (in_array( 'HDB',$_POST['property_type'])){echo 'checked';}};?>;?>HDB</label>
                <label><input type="checkbox" id="type4" name="property_type[]" value="その他" <?php if(isset($_POST['property_type'])) {if (in_array( 'その他',$_POST['property_type'])){echo 'checked';}};?>;?>その他</label>
                </td>
            </tr>
             <tr>
                <th colspan="1">間取りタイプ <span class="att">※</span></th>
                <td class="post_property_check_area" colspan="3">
                <label><input type="checkbox" id="madori1" name="property_madori[]" value="ルームレンタル（コモン）" <?php if(isset($_POST['property_madori'])) {if (in_array( 'ルームレンタル（コモン）',$_POST['property_madori'])){echo 'checked';}};?>;?>ルームレンタル（コモン）</label>
                <label><input type="checkbox" id="madori2" name="property_madori[]" value="ルームレンタル（マスター）" <?php if(isset($_POST['property_madori'])) {if (in_array( 'ルームレンタル（マスター）',$_POST['property_madori'])){echo 'checked';}};?>>ルームレンタル（マスター）</label>
                <label><input type="checkbox" id="madori3" name="property_madori[]" value="ユニット" <?php if(isset($_POST['property_madori'])) {if (in_array( 'ユニット',$_POST['property_madori'])){echo 'checked';}};?>>ユニット</label>
                </td>
            </tr>
             <tr>
                <th colspan="1">希望家賃 <span class="att">※</span></th>
                <td colspan="3"><input id="title" type="number" name="property_pay" value="<?php echo $_POST['property_pay'];?>" /> SGD</td>
            </tr>

             <tr>
                <th>お部屋写真1 </th>
                <td><input id="pics" type="file" name="propety_image01" />
                 </td>
                <th>お部屋写真2 </th>
                <td><input id="pics" type="file" name="propety_image02" accept="image/*"/> </td>
            </tr>
             <tr>
                <th>お部屋写真3 </th>
                <td><input id="pics" type="file" name="propety_image03" accept="image/*"/> </td>
                <th>お部屋写真4 </th>
                <td><input id="pics" type="file" name="propety_image04" accept="image/*"/> </td>
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
<?php get_sidebar(); 

print_r ($_POST);
?>
</div>

<?php get_footer(); ?>