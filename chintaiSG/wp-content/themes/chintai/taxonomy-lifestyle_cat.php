<?php get_header();
 $taxonomy_name  = get_query_var('taxonomy');
?>

<div id="contents" class="page_area term_page">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <?php
        $term = array_pop(get_the_terms($post->ID, $taxonomy_name));
        $term_p = $term->parent;
        if ( ! $term_p == 0 ){
        $term = array_shift(get_the_terms($post->ID, $taxonomy_name));
        }
        
        ?>
        <div class="content_inner">
		<h2><?php echo esc_html($term->name);?></h2>
			<?php if ( have_posts() ) : ?>
			

				<?php /* Start the Loop */ ?>
			<?php
            $term = array_shift(get_the_terms($post->ID, $taxonomy_name ));
            ?>
            <?php $tax_posts = get_posts('post_type=lifestyle&posts_per_page=-1&order=ASC&taxonomy='.$taxonomy_name.'&term='.esc_html($term->slug));  if($tax_posts): ?>
            <ul class="tarm_list">
                <?php foreach($tax_posts as $tax_post): ?>
                <li class="cf"><?php echo esc_html($tax_post->post_title); ?><a href="<?php echo get_permalink($tax_post->ID); ?>" class="btn_blue right_btn">記事を詳しく見る</a></li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
			<a href="<?php echo home_url(); ?>/lifestyle/" class="link_right_arrow">シンガポール生活情報のトップに戻る</a>


			<?php endif; ?>
        </div>
        <?php get_template_part( 'inc_banner' ); ?>
  		<?php get_template_part( 'inc_page_footer' ); ?>

	</div><!-- #content -->
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>