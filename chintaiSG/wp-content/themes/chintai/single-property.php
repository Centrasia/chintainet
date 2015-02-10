<?php get_header(); ?>

<div id="contents" class="property_area page_area">
  <div id="main_contents" class="cf">
     <div class="breadcrumbs">
     <?php if(function_exists('bcn_display')){ bcn_display(); }?>
     </div>
  <?php while ( have_posts() ) : the_post(); ?>

	<div class="content_inner">
    <h2>人気賃貸コンドミニアム紹介</h2>
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
                <h3 class="property_name"><?php the_title(); ?></h3>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_1.jpg" width="102" height="21" alt="エリア"><?php the_field('co_area');?></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_2.jpg" width="102" height="21" alt="賃料目安"><?php the_field('co_price');?></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/property/property_3.jpg" width="102" height="21" alt="間取り"><?php the_field('co_madori');?></li>
                </ul>
                <?php the_content();?>
            </div>
        </div>
                <p><?php the_field('co_gmap');?></p>
                <p><?php the_field('co_gstreet');?></p>
  <?php endwhile; // end of the loop. ?>
   <a href="<?php echo home_url(); ?>/property/" class="btn_blue right_btn">人気賃貸コンドミニアム一覧に戻る</a>
   </div>
<?php get_template_part( 'inc_banner' ); ?>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
