<?php get_header(); ?>

<div id="contents" class="life_style_page archive_custom">
	<div id="main_contents" class="cf">
        <div class="breadcrumbs">
          <?php if(function_exists('bcn_display')){ bcn_display(); }?>
        </div>
        <div class="content_inner cf mb30">
		<h2>初心者向け！まずはここから シンガポール生活情報</h2>
        
        
        	<?php if ( have_posts() ) : ?>
        	<section>
          	<img src="<?php echo get_template_directory_uri(); ?>/images/lifestyle/life_1.jpg" width="268" height="140" alt="シンガポールの賃貸事情">
            <h3>シンガポールの賃貸事情</h3>
            <!-- <p>シンガポールにまつわる様々な基本的な情報を掲載しております。シンガポールへの移住をます。</p> -->
            <h4>ピックアップ</h4> 
			<?php 
				$tax_posts = get_posts('post_type=lifestyle&taxonomy=lifestyle_cat&term=situation&posts_per_page=3&orderby=ID&order=ASC'); if($tax_posts): ?>
            <ul>
                <?php foreach($tax_posts as $tax_post): ?>
                <li><a href="<?php echo get_permalink($tax_post->ID); ?>"><?php echo esc_html($tax_post->post_title); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php
				$term_name = situation ;
				$taxonomy_name = lifestyle_cat;
            	$term_link = get_term_link( $term_name, $taxonomy_name );
			?>
                
                <a href="<?php echo $term_link;?>" class="link_right_arrow">記事の一覧を見る</a>
			<?php endif; ?>
            <?php wp_reset_query(); ?>
        	</section>
            
            <section>
          	<img src="<?php echo get_template_directory_uri(); ?>/images/lifestyle/life_2.jpg" width="268" height="140" alt="シンガポール地域情報">
            <h3>シンガポール地域情報</h3>
            <!-- <p>シンガポールにまつわる様々な基本的な情報を掲載しております。シンガポールへの移住をます。</p> -->
            <h4>ピックアップ</h4> 
			<?php 
				$tax_posts = get_posts('post_type=lifestyle&taxonomy=lifestyle_cat&term=area&posts_per_page=3&orderby=ID&order=ASC'); if($tax_posts): ?>
            <ul>
                <?php foreach($tax_posts as $tax_post): ?>
                <li><a href="<?php echo get_permalink($tax_post->ID); ?>"><?php echo esc_html($tax_post->post_title); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php
				$term_name = area ;
				$taxonomy_name = lifestyle_cat;
            	$term_link = get_term_link( $term_name, $taxonomy_name );
			?>
                
                <a href="<?php echo $term_link;?>" class="link_right_arrow">記事の一覧を見る</a>
			<?php endif; ?>
            <?php wp_reset_query(); ?>
        	</section>
<?php /*            
            <section class="mr0">
          	<img src="<?php echo get_template_directory_uri(); ?>/images/lifestyle/life_3.jpg" width="268" height="140" alt="生活インフラについて">
            <h3>生活インフラについて</h3>
            <!-- <p>シンガポールにまつわる様々な基本的な情報を掲載しております。シンガポールへの移住をます。</p> -->
            <h4>ピックアップ</h4>   
			<?php 
				$tax_posts = get_posts('post_type=lifestyle&taxonomy=lifestyle_cat&term=infra&posts_per_page=3&orderby=ID&order=ASC'); if($tax_posts): ?>
            <ul>
                <?php foreach($tax_posts as $tax_post): ?>
                <li><a href="<?php echo get_permalink($tax_post->ID); ?>"><?php echo esc_html($tax_post->post_title); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php
				$term_name = infra ;
				$taxonomy_name = lifestyle_cat;
            	$term_link = get_term_link( $term_name, $taxonomy_name );
			?>
                
                <a href="<?php echo $term_link;?>" class="link_right_arrow">記事の一覧を見る</a>
			<?php endif; ?>
            <?php wp_reset_query(); ?>
        	</section>
*/ ?>           
            <section class="mr0">
          	<img src="<?php echo get_template_directory_uri(); ?>/images/lifestyle/life_4.jpg" width="268" height="140" alt="シンガポールの基本情報">
            <h3>シンガポールの基本情報</h3>
            <!-- <p>シンガポールにまつわる様々な基本的な情報を掲載しております。シンガポールへの移住をます。</p> -->
            <h4>ピックアップ</h4>   
			<?php 
				$tax_posts = get_posts('post_type=lifestyle&taxonomy=lifestyle_cat&term=summary&posts_per_page=3&orderby=ID&order=ASC'); if($tax_posts): ?>
            <ul>
                <?php foreach($tax_posts as $tax_post): ?>
                <li><a href="<?php echo get_permalink($tax_post->ID); ?>"><?php echo esc_html($tax_post->post_title); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php
				$term_name = summary ;
				$taxonomy_name = lifestyle_cat;
            	$term_link = get_term_link( $term_name, $taxonomy_name );
			?>
                
                <a href="<?php echo $term_link;?>" class="link_right_arrow">記事の一覧を見る</a>
			<?php endif; ?>
            <?php wp_reset_query(); ?>
        	</section>
            
            
        
		<?php endif; ?>
       	</div>
			<?php get_template_part( 'inc_page_footer' ); ?>
			</div><!-- #content -->
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>