<div id="searchform_area"  class="cf">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<?php wp_nonce_field('search_recruit'); ?>
	<dl class="custom_search_area">
    	<dt class="serch_title">条件検索</dt>
        <dd>&nbsp;</dd>
 		<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search6.jpg" width="102" height="21" alt="求人種別"></dt>
    	<dd><label><input id="recruit_type1" type="radio" name="recruit_type" value="人材紹介・派遣">人材紹介・派遣</label>
        	<label><input id="recruit_type2" type="radio" name="recruit_type" value="直接雇用">直接雇用</label>
        </dd>
        
        <dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search7.jpg" width="102" height="21" alt="雇用形態">
        <dd><label><input type="checkbox" id="recruit_employment1" name="recruit_employment[]" value="正社員">正社員</label>
            <label><input type="checkbox" id="recruit_employment2" name="recruit_employment[]" value="契約社員">契約社員</label>
            <label><input type="checkbox" id="recruit_employment3" name="recruit_employment[]" value="パート">パート</label>
            <label><input type="checkbox" id="recruit_employment4" name="recruit_employment[]" value="短期雇用">短期雇用</label>
            <label><input type="checkbox" id="recruit_employment5" name="recruit_employment[]" value="その他">その他</label>
        </dd>
		
        <dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search9.jpg" width="102" height="30" alt="ワーキングホリデービザの可否"></dt>
    	<dd><label class="short"><input id="recruit_visa1" type="radio" name="recruit_visa" value="可" cheked>可</label>
        	<label class="short"><input id="recruit_visa2" type="radio" name="recruit_visa" value="不可">不可</label>
        </dd>
        
    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search8.jpg" width="102" height="21" alt="勤務エリア"></dt>
        <dd><label><input type="checkbox" id="area1" name="recruit_area[]" value="イーストコースト周辺">イーストコースト周辺</label>
        	<label><input type="checkbox" id="area12" name="recruit_area[]" value="ラッフルズプレイス周辺">ラッフルズプレイス周辺</label>
            <label><input type="checkbox" id="area2" name="recruit_area[]" value="オーチャード周辺">オーチャード周辺</label>
            <label><input type="checkbox" id="area3" name="recruit_area[]" value="クイーンズタウン周辺">クイーンズタウン周辺</label>
            <label><input type="checkbox" id="area4" name="recruit_area[]" value="ホランドロード周辺">ホランドロード周辺</label>
            <label><input type="checkbox" id="area5" name="recruit_area[]" value="バオーナビス周辺">バオーナビス周辺</label>
            <label><input type="checkbox" id="area6" name="recruit_area[]" value="クレメンティ周辺">クレメンティ周辺</label>
            <label><input type="checkbox" id="area7" name="recruit_area[]" value="ウエストコーストロード周辺">ウエストコーストロード周辺</label>
            <label><input type="checkbox" id="area8" name="recruit_area[]" value="セラングーン周辺">セラングーン周辺</label>
            <label><input type="checkbox" id="area9" name="recruit_area[]" value="ポンゴール周辺">ポンゴール周辺</label>
            <label><input type="checkbox" id="area10" name="recruit_area[]" value="トアパヨ周辺">トアパヨ周辺</label>
            <label><input type="checkbox" id="area11" name="recruit_area[]" value="アンモキオ周辺">アンモキオ周辺</label>
        </dd>


    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search10.jpg" width="102" height="21" alt="英語力"></dt>
        <dd><select id="recruit_en" name="recruit_en">
        		<option value="">--選択して下さい--</option>
                <option value="不問">不問</option>
                <option value="意思疎通は可能なレベル">意思疎通は可能なレベル</option>
                <option value="日常会話に困らないレベル">日常会話に困らないレベル</option>
                <option value="ビジネス上使用できるレベル">ビジネス上使用できるレベル</option>
                <option value="ネイティブ同等のレベル">ネイティブ同等のレベル</option>
            </select>
        </dd>

    	<dt><img src="<?php echo get_template_directory_uri(); ?>/images/search/label_search5.jpg" width="102" height="21" alt="キーワード"></dt>
        <dd><input type="text" name="s" id="s" placeholder="キーワード" /></dd>
        
        <dt>&nbsp;</dt>
        <dd class="submit_area"> <input type="submit" value="検索する" class="submit_btn"/></dd>
	</dl>
       
</form>
</div>