<div id="searchform_area"  class="cf">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<?php wp_nonce_field('search_property'); ?>
	<dl class="custom_search_area">
    	<dt class="serch_title">条件検索</dt>
        <dd>&nbsp;</dd>
 		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search1.jpg" width="102" height="21" alt="目的"></dt>
    	<dd><label class="short"><input id="property_cat1" type="radio" name="property_cat" value="貸したい" checked>貸したい</label><label class="short"><input id="property_cat2" type="radio" name="property_cat" value="借りたい">借りたい</label></dd>
 
    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search2.jpg" width="102" height="21" alt="エリア"></dt>
        <dd><label><input type="checkbox" id="area1" name="property_area[]" value="イーストコースト周辺">イーストコースト周辺</label>
        	<label><input type="checkbox" id="area12" name="property_area[]" value="ラッフルズプレイス周辺">ラッフルズプレイス周辺</label>
            <label><input type="checkbox" id="area2" name="property_area[]" value="オーチャード周辺">オーチャード周辺</label>
            <label><input type="checkbox" id="area3" name="property_area[]" value="クイーンズタウン周辺">クイーンズタウン周辺</label>
            <label><input type="checkbox" id="area4" name="property_area[]" value="ホランドロード周辺">ホランドロード周辺</label>
            <label><input type="checkbox" id="area5" name="property_area[]" value="バオーナビス周辺">バオーナビス周辺</label>
            <label><input type="checkbox" id="area6" name="property_area[]" value="クレメンティ周辺">クレメンティ周辺</label>
            <label><input type="checkbox" id="area7" name="property_area[]" value="ウエストコーストロード周辺">ウエストコーストロード周辺</label>
            <label><input type="checkbox" id="area8" name="property_area[]" value="セラングーン周辺">セラングーン周辺</label>
            <label><input type="checkbox" id="area9" name="property_area[]" value="ポンゴール周辺">ポンゴール周辺</label>
            <label><input type="checkbox" id="area10" name="property_area[]" value="トアパヨ周辺">トアパヨ周辺</label>
            <label><input type="checkbox" id="area11" name="property_area[]" value="アンモキオ周辺">アンモキオ周辺</label>
        </dd>

		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search3.jpg" width="102" height="21" alt="物件タイプ"></dt>
    	<dd><label><input type="checkbox" id="type1" name="property_type[]" value="コンドミニアム／アパートメント">コンドミニアム／アパートメント</label>
    		<label><input type="checkbox" id="type2" name="property_type[]" value="HDB">HDB</label>
        </dd>

    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search4.jpg" width="102" height="21" alt="間取りタイプ"></dt>
        <dd><label><input type="checkbox" id="madori1" name="property_madori[]" value="ルームレンタル（コモン）">ルームレンタル（コモン）</label>
    		<label><input type="checkbox" id="madori2" name="property_madori[]" value="ルームレンタル（マスター）">ルームレンタル（マスター）</label>
    		<label><input type="checkbox" id="madori3" name="property_madori[]" value="ユニット">ユニット</label>
        </dd>
<!--
        <dt>家賃</dt>
        <dd><input id="title" type="number" name="property_pay" value="" /></dd>
-->

    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search5.jpg" width="102" height="21" alt="キーワード"></dt>
        <dd><input type="text" name="s" id="s" placeholder="キーワード" /></dd>
        
        <dt>&nbsp;</dt>
        <dd class="submit_area"> <input type="submit" value="検索する" class="submit_btn"/></dd>
	</dl>
       
</form>
</div>