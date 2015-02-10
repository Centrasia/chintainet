<?php get_header(); ?>

<div id="contents" class="property_list_area page_area">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <div class="content_inner">
            <h2>人気賃貸コンドミニアム紹介</h2>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="property_box_wrap cf">
                <div class="property_box_left">
                  <?php
					$image = get_field("co_image",$post->ID);
					if( !empty($image) ):
					// vars
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];
				 
					// thumbnail
					$size = 'large';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];
				?>
                <img src="<?php echo $thumb; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php the_title(); ?>">
                <?php else:?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/no_images.jpg" width="222" height="149" alt="<?php the_title(); ?>">
                <?php endif;?>
                </div>
                <div class="property_box_right">
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_1.jpg" width="102" height="21" alt="エリア"><?php the_field('co_area');?></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_2.jpg" width="102" height="21" alt="賃料目安"><?php the_field('co_price');?></li>
                        <?php if (get_field('co_madori')):?>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_3.jpg" width="102" height="21" alt="間取り"><?php the_field('co_madori');?></li>
                        <?php endif;?>
                        <?php if (get_field('co_etc')):?>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_4.jpg" width="102" height="21" alt="概要資料"><a href="<?php the_field('co_etc');?>">資料ダウンロード</a></li>
                        <?php endif;?>
                    </ul>
    
                    <p><?php echo mb_substr(strip_tags($post-> post_content),0,120).'...'; ?></p>
                    <a href="<?php the_permalink();?>" class="btn_blue right_btn">この賃貸コンドミニアムについて詳しく</a>
    
                </div>
            </div>
            <hr>
            <?php endwhile; ?>
         </div>
            <?php get_template_part( 'inc_banner' ); ?>
            <?php wp_pagenavi(); ?>
		 
    </div>
    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->

<?php get_footer(); ?>