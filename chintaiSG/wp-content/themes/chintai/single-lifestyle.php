<?php get_header(); ?>
<div id="contents" class="life_style_page archive_custom page_area">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
  	<?php while ( have_posts() ) : the_post(); ?>
	<div class="content_inner">
    <h2><?php the_title(); ?></h2>
    <div class="post_contents cf">
    <?php the_content();?>
   	</div>

  	<?php endwhile; // end of the loop. ?>
  	</div>
   <?php get_template_part( 'inc_banner' ); ?>
   <?php get_template_part( 'inc_page_footer' ); ?>
</div>


<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
