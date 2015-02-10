  <div class="bbs_area_wrap cf">
      <div class="bbs_area">
        <h2>掲示板 新着投稿</h2>
        <h3>お部屋・物件紹介掲示板</h3>
        <?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	 
			$args = array(
				'post_type' => 'forum_property',
				//'post_parent' => 8,
				'posts_per_page' => 3,
				'paged' => $paged,
				'order' => DESC,
				'order_by' => 'modified'
			);
		$wp_query = new WP_Query($args);
		?>
        <ul class="topic_list">
        <?php if (have_posts()):while(have_posts()):the_post(); ?>
        	<?php 
				$property_name = get_field('property_cat',$post->ID);
				if ($property_name === '貸したい') {
					$property_cat = property_cat1;
				}elseif($property_name === '借りたい'){
					$property_cat = property_cat2;
				}
			;?>
            <li><time><?php the_time('Y/m/d');?></time><span class="<?php echo $property_cat;?>"><?php echo $property_name;?></span><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>24) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></a></a></li>
        <?php endwhile;else:?>
        	<li>スレッドがありません。</li>
        <?php endif; ?>
		</ul>
		<?php wp_reset_postdata(); wp_reset_query(); ?>
        <a href="<?php echo home_url(); ?>/forum_property" class="link_right_arrow">お部屋・物件紹介掲示板へ</a>
        
        <h3>求人募集掲示板</h3>
        <?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	 
			$args = array(
				'post_type' => 'forum_recruit',
				'paged' => $paged,
				'posts_per_page' => 3,
				'order' => DESC,
				'order_by' => 'modified'
			);
		$wp_query = new WP_Query($args);
		?>
        <ul class="topic_list">
        <?php if (have_posts()):while(have_posts()):the_post(); ?>
        	<?php $recruit_cat = get_array_cf_checkbox( $post->ID , 'recruit_employment');
				$recruit_name = $recruit_cat[0];
				if ($recruit_name === '正社員') {
					$recruit_cat = recruit_cat1;
				}elseif($recruit_name === '契約社員'){
					$recruit_cat = recruit_cat2;
				}elseif($recruit_name === 'パート'){
					$recruit_cat = recruit_cat3;
				}elseif($recruit_name === '短期雇用'){
					$recruit_cat = recruit_cat4;
				}elseif($recruit_name === 'その他'){
					$recruit_cat = recruit_cat5;
				}
			;?>
            <li><time><?php the_time('Y/m/d');?></time><span class="<?php echo $recruit_cat;?>"><?php echo $recruit_name;?></span><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>24) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></a></a></li>
        <?php endwhile;else:?>
        	<li>スレッドがありません。</li>
        <?php endif; ?>
		</ul>
        
		<?php wp_reset_postdata(); wp_reset_query(); ?>
        <a href="<?php echo home_url(); ?>/forum_recruit/" class="link_right_arrow">求人募集掲示板へ</a>
           
        </div>
        
        
        <div class="news_area">
		
		<h3>総合掲示板</h3>
        <?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	 
			$args = array(
				'post_type' => 'forum_community',
				'paged' => $paged,
				'posts_per_page' => 5,
				'order' => DESC,
				'order_by' => 'modified'
			);
		$wp_query = new WP_Query($args);
		?>
        <ul class="topic_list">
        <?php if (have_posts()):while(have_posts()):the_post(); ?>
        	<?php $community_cat = get_array_cf_checkbox( $post->ID , 'community_cat');
				   $community_name = $community_cat[0];

				if ($community_name === '売ります') {
					$community_cat = community_cat1;
					$community_name = '売ります';
					
				}elseif($community_name === 'あげます'){
					$community_cat = community_cat2;
					$community_name = 'あげます';
					
				}elseif($community_name === '仲間募集'){
					$community_cat = community_cat3;
					$community_name = '仲間募集';
					
				}elseif($community_name === 'イベント'){
					$community_cat = community_cat4;
					$community_name = 'イベント';
					
				}elseif($community_name === 'セミナー'){
					$community_cat = community_cat5;
					$community_name = 'セミナー';
					
				}elseif($community_name === '育児'){
					$community_cat = community_cat6;
					$community_name = '育児';
					
				}elseif($community_name === 'ママ友募集'){
					$community_cat = community_cat7;
					$community_name = 'ママ友募集';
					
				}elseif($community_name === 'レッスン'){
					$community_cat = community_cat8;
					$community_name = 'レッスン';
					
				}elseif($community_name === 'キャンペーン'){
					$community_cat = community_cat9;
					$community_name = 'ｷｬﾝﾍﾟｰﾝ';
					
				}elseif($community_name === 'クーポン'){
					$community_cat = community_cat10;
					$community_name = 'クーポン';
					
				}elseif($community_name === '口コミ'){
					$community_cat = community_cat11;
					$community_name = '口コミ';
					
				}elseif($community_name === 'Q＆A'){
					$community_cat = community_cat12;
					$community_name1 = 'Q＆A';
					
				}elseif($community_name === 'その他'){
					$community_cat = community_cat13;
					$community_name1 = 'その他';
				}
			;?>
            <li><time><?php the_time('Y/m/d');?></time><span class="<?php echo $community_cat;?>"><?php echo $community_name;?></span><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>24) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></a></a></li>
        <?php endwhile;else:?>
        	<li>スレッドがありません。</li>
        <?php endif; ?>
		</ul>
        
		<?php wp_reset_postdata(); wp_reset_query(); ?>
        <a href="<?php echo home_url(); ?>/forum_community/" class="link_right_arrow">総合掲示板へ</a>
        
       <!--
        <h2>ニュース・お知らせ</h2>
        
        <ul class="news_list">
		<?php query_posts('cat=0&posts_per_page=8&paged=' . get_query_var('paged')); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <?php $cat = get_the_category();
				$cat = $cat[0];
				$cat_name = get_cat_name($cat->term_id);
				if ($cat_name === 'トピック'): {
			$cat_type = news_cat1;
			} elseif ($cat_name === '重　要'): {
				$cat_type = news_cat2;
			} elseif ($cat_name === 'ニュース'): {
				$cat_type = news_cat3;
			}endif
		;?>
        <li><time><?php the_time('Y/m/d');?></time><span class="<?php echo $cat_type;?>"><?php echo $cat_name;?></span><a href="<?php the_permalink();?>"><?php if(mb_strlen($post->post_title)>24) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;} else {echo $post->post_title;}?></a></li>
        <?php endwhile; ?>
		
        <?php wp_reset_query();?>
        </ul>
        <a href="<?php echo get_category_link(1);?>" class="link_right_arrow">ニュース・お知らせ一覧へ</a>
        <?php endif; ?>
		-->
		
		
      </div>
  </div>
  <hr>