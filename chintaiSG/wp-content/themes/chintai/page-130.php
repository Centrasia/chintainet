<?php
//スラッグを取得
	get_header();
	$post = get_page($page_id);
?>
<div id="contents" class="page_area <?php echo $post->post_name;?>_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <div class="content_inner">
        <?php while ( have_posts() ) : the_post(); ?>
         
            <h2><?php the_title();?></h2>
            <div class="post_contents">   
                <?php the_content();?>  
            </div>
            <?php endwhile; // end of the loop. ?>
        </div><!-- / .content_inner -->
            <?php get_template_part( 'inc_banner' ); ?>
			<?php get_template_part( 'inc_page_footer' ); ?>
    </div><!-- / #main_contents .cf -->

    <?php get_sidebar();?>
</div>
<!-- / #contents .page-area -->

<?php get_footer(); ?>