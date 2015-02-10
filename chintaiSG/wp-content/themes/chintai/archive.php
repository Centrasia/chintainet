<?php get_header(); ?>
<div id="contents" class="page_area <?php echo $post->post_name;?>_page news_list_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>


    
	 <h2><?php single_cat_title();?></h2>
     <div class="post_contents">   
    	<div class="news_area">       
        <?php wp_reset_query();?>
        <ul class="news_list">
		<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
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
        <li><time><?php the_time('Y/m/d');?></time><span class="<?php echo $cat_type;?>"><?php echo $cat_name;?></span><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
        <?php endforeach; endif;?>
        </ul>
      </div>
	</div>
    </div>
    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->
<?php get_footer(); ?>
