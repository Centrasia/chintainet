<?php get_header(); ?>

<div id="contents" class="agent_list_area page_area">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>

			<?php /* Start the Loop */ ?>
            <h2>賃貸仲介エージェントのご紹介</h2>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="agent_box_wrap cf">
                <div class="agent_box_left">
                			 <?php
            $image = get_field("ag_image",$post->ID);
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
        <?php endif;?>
                </div>
                <div class="agent_box_right">
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/agent/agent_1.jpg" width="102" height="21" alt="所属"><?php the_field('ag_1');?></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/agent/agent_2.jpg" width="102" height="21" alt="ライセンスNo"><?php the_field('ag_2');?></li>
                    </ul>
                    <?php echo get_list_cf_checkbox($post->ID,'ag_3'); ?>
    
                    <p><?php echo mb_substr(strip_tags($post-> post_content),0,120).'...'; ?></p>
                    <a href="<?php the_permalink();?>" class="btn_blue right_btn">この賃貸エージェントについて詳しく</a>
    
                </div>
            </div>
            <hr>
            <?php endwhile; ?>
            <?php get_template_part( 'inc_banner' ); ?>
            
            <?php wp_pagenavi(); ?>
		 
    </div>
    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->

<?php get_footer(); ?>