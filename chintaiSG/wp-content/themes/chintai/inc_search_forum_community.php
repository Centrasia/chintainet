<div id="searchform_area"  class="cf">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<?php wp_nonce_field('search_community'); ?>
	<dl class="custom_search_area">
    	<dt class="serch_title">条件検索</dt>
        <dd>&nbsp;</dd>
 		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search1.jpg" width="102" height="21" alt="目的"></dt>
    	<dd>
            <label><input id="community_cat1" type="checkbox" name="community_cat[]" value="売ります">売ります</label>
            <label><input id="community_cat2" type="checkbox" name="community_cat[]" value="あげます">あげます</label>
            <label><input id="community_cat3" type="checkbox" name="community_cat[]" value="仲間募集">仲間募集</label>
            <label><input id="community_cat4" type="checkbox" name="community_cat[]" value="イベント">イベント</label>
            <label><input id="community_cat5" type="checkbox" name="community_cat[]" value="セミナー">セミナー</label>
            <label><input id="community_cat6" type="checkbox" name="community_cat[]" value="育児">育児</label>
            <label><input id="community_cat7" type="checkbox" name="community_cat[]" value="ママ友募集">ママ友募集</label>
            <label><input id="community_cat8" type="checkbox" name="community_cat[]" value="レッスン">レッスン</label>
            <label><input id="community_cat9" type="checkbox" name="community_cat[]" value="キャンペーン">キャンペーン</label>
            <label><input id="community_cat10" type="checkbox" name="community_cat[]" value="クーポン">クーポン</label>
            <label><input id="community_cat11" type="checkbox" name="community_cat[]" value="口コミ">口コミ</label>
            <label><input id="community_cat12" type="checkbox" name="community_cat[]" value="Q＆A">Q＆A</label>
            <label><input id="community_cat13" type="checkbox" name="community_cat[]" value="その他">その他</label>
 
		</dd>
    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search5.jpg" width="102" height="21" alt="キーワード"></dt>
        <dd><input type="text" name="s" id="s" placeholder="キーワード" /></dd>
        
        <dt>&nbsp;</dt>
        <dd class="submit_area"> <input type="submit" value="検索する" class="submit_btn"/></dd>
	</dl>
       
</form>
</div>